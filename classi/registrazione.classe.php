<?php
/*/////////////////////////////////////////////////////////////////////////*/
//////////////////CMS CREATO INTERAMENTE DA ZAMBAHACKER////////////////////
//////////////////SCRITTO IN PHP 5 OOP////////////////////////////////////
/////////////////E' VIETATA LA COPIA/////////////////////////////////////
//////////////////O LA QUALSIASI VIOLAZIONE DI COPYRIGHT////////////////
/*////////////////////////////////////////////////////////////////////*/


class registrazione
{

    private $mysql;
    private $colore;
    
    public function __construct($mysql,$colore)
    {

        $this->mysql = $mysql;
        $this->colore = $colore;
    }

    public function reg($username,$password,$email)
    {

        $username = str_ireplace(" ","_",$username);
        $username = str_ireplace("%20","_",$username);
        $username = str_ireplace("mod-","",$username);
        $username = (preg_match('/^([a-zA-Z.,-_]){1,20}$/', $username)? $username : 'not_allows');

        if($username != '' || $password != '' || $email != ''){

            if($username != 'not_allows'){

                if(strlen($username) > '5'){

                    $utente = $this->mysql->esegui(array("QUERY" => "SELECT id FROM users WHERE username = :username ", ":username" => $username),'null',TRUE);

                    if($utente['NUM'] == 0){
                        
                        $email1 = $this->mysql->esegui(array("QUERY" => "SELECT id FROM users WHERE mail = :mail ",":mail" => $email),'null',TRUE);
                        
                        if($email1['NUM'] == 0){
                        
                        $count = $this->mysql->esegui(array("QUERY" => "SELECT username FROM users WHERE ip_reg = :ipreg","ipreg" => $this->mysql->get_ip()),'fetch',true);

                        if($count['NUM'] == 0){
                                
                            $cod = $this->mysql->GenerateTicket();   
                            $this->get_reg($username,$password,$email,$cod);     
                            session_Start();
                            $_SESSION['cms_session_username'] = $username;
                            echo '<script>   document.location = \'home.php\';</script>';
                            
                        }else{

                            echo '<script> $j(\'#msg\').fadeOut(\'slow\', function () {
                            $j(\'#msg\').fadeIn(\'slow\').html(\'Siamo spiacenti ma hai gi&agrave; registrato un account.\');
                            });
                            </script>';

                        }
                        
                        }else{
                            
                            echo '<script> $j(\'#msg\').fadeOut(\'slow\', function () {
                            $j(\'#msg\').fadeIn(\'slow\').html(\'Siamo spiacenti ma la email da lei scelta, risulta occupata.\');
                            });
                            </script>';
                            
                        }
                        
                    }else{

                        echo '<script> $j(\'#msg\').fadeOut(\'slow\', function () {
                        $j(\'#msg\').fadeIn(\'slow\').html(\'Siamo spiacenti ma il nome utente da lei scelto, risulta occupato.\');
                        });
                        </script>';

                    }

                }else{

                    echo '<script> $j(\'#msg\').fadeOut(\'slow\', function () {
                    $j(\'#msg\').fadeIn(\'slow\').html(\'Siamo spiacenti ma il nome utente deve contenere almeno 5 caratteri.\');
                    });
                    </script>';

                }

            }else{

                echo '<script> $j(\'#msg\').fadeOut(\'slow\', function () {
                $j(\'#msg\').fadeIn(\'slow\').html(\'Siamo spiacenti ma il nome utente contiene dei caratteri non consentiti.\');
                });
                </script>';

            }
        }

    }

    private function get_reg($username,$password,$email,$cod)
    {

        $query = $this->mysql->esegui(array

            ("QUERY" => "INSERT INTO users (username, password, mail, rank, credits, look, gender, ip_reg, habboid, account_created, ultima_visita, motto, pass_crypt, facebook_id,cod_att,colore) VALUES (:username, :password, :email, :rank,'1000000', 'ch-3111-63-62.hd-3102-1.hr-3163-39.lg-285-77.sh-305-78', 'M', :ip, :habboid, :datacr, :ultimavisita, :motto, :pass_crypt, :fbid, :cod_att,:colore)",
            ":username" => $username,
            ":password" => $this->mysql->crypt_pass($password),
            ":email"    => $email,
            ":rank"     => "1",
            ":ip"       => $this->mysql->get_ip(),
            ":habboid"  => $username,
            ":datacr"   => $this->mysql->data_now(),
            ":ultimavisita" => $this->mysql->data(),
            ":motto"    => 'Benvenuto in hotel',
            ":pass_crypt" => $this->mysql->crypt($password,'password_crypt'),
            ":fbid"     => '',
            ":cod_att"  => $cod,
            ":colore"   => $this->colore
            )

        );

        return $query;

    }

}