<?php
/*////////////////////////////////////////////////////////////////////////*/
//////////////////CMS CREATO INTERAMENTE DA ZAMBAHACKER////////////////////
//////////////////SCRITTO IN PHP 5 OOP + AJAX/////////////////////////////
/////////////////E' VIETATA LA COPIA/////////////////////////////////////
//////////////////O LA QUALSIASI VIOLAZIONE DI COPYRIGHT////////////////
/*///////////////////////////////////////////////////////////////////*/


class login
{

    private $mysql;
    private $colore;

    public function __construct($mysql,$colore)
    {

        $this->mysql = $mysql;
        $this->colore = $colore;
    }

    public function accesso($username,$password)
    {

       $username = str_ireplace(" ","_",$username);
       $username = str_ireplace("%20","_",$username);
       $pass_un = $password;
       $password = $this->mysql->crypt_pass($password);
       $utente = $this->mysql->esegui(array("QUERY" => 'SELECT username,password,attivo,mail FROM users WHERE username = :username' , ':username' => $username),'fetch',TRUE);

       if($username != '' || $pass_un != ''){

               if($utente['NUM'] == 1){

                   if($password == $utente['password']){

                       $ban_data = $this->controlloban($utente['username']);

                       if($ban_data['ban'] == 0){
                        
                            # if($utente['attivo'] == 1){
                        
                                session_Start();

                                $_SESSION['cms_session_username'] = $utente['username'];

                                echo '<script>   document.location = \'home.php\';</script>';
                            
                            #}else{
                                
                            #echo '<script> $j(\'#msg\').fadeOut(\'slow\', function () {
                            #$j(\'#msg\').fadeIn(\'slow\').html(\'Il tuo account risulta inattivo, controlla la tua email per attivarlo.\');
                            #});
                            #</script>';
                                
                            #}

                       }else{

                            echo '<script> $j(\'#msg\').fadeOut(\'slow\', function () {
                            $j(\'#msg\').fadeIn(\'slow\').html(\'Account bannato per il motivo: '.$ban_data['reason'].', il ban scadr&agrave; il '.$this->mysql->data($ban_data['expire']).'\');
                            });
                            </script>';

                       }

                   }else{

                        echo '<script> $j(\'#msg\').fadeOut(\'slow\', function () {
                        $j(\'#msg\').fadeIn(\'slow\').html(\'Controlla che la password inserita sia corretta.\');
                        });
                        </script>';

                   }

               }else{

                    echo '<script> $j(\'#msg\').fadeOut(\'slow\', function () {
                    $j(\'#msg\').fadeIn(\'slow\').html(\'Siamo spiacenti ma questo utente &egrave; inesistente, controlla che il nome inserito sia corretto.\');
                    });
                    </script>';

               }

       }

    }

    private function controlloban($username)
    {

        $sql = $this->mysql->esegui(array("QUERY" => "SELECT * FROM bans WHERE value = :valore" , ":valore" => $username),'fetch',true);

        if($sql['NUM'] == 0){

            $ban = 0;
            $expire = '';
            $reason = '';

        }else{

            if($sql['expire'] > $this->mysql->data_now()){

                $ban = 1;
                $expire =  $sql['expire'];
                $reason = $sql['reason'];

            }else{

                $this->mysql->esegui(array("QUERY" => "DELETE FROM bans WHERE value = :valore", ":valore" => $username),'NULL');
                $this->mysql->mus('reloadbans');
                $ban = 0;
                $expire = '';
                $reason = '';

            }

        }

        $valori = array('expire' => $expire, 'reason' => $reason, 'ban' => $ban);

        return $valori;

    }
    
    
    public function attivazione($cod)
    {
        
        if($cod != ''){
            
            $sql = $this->mysql->esegui(array("QUERY" => 'SELECT cod_att,attivo,username FROM users WHERE cod_att = :cod_att',':cod_att' => $cod),'fetch',true);
            
            if($sql['NUM'] != 0){
                
                if($sql['attivo'] == 0){
                    
                    $this->mysql->esegui(array("QUERY" => 'UPDATE users SET attivo = 1 WHERE cod_att = :cod_att',':cod_att' => $cod),'NULL');
                    
                    $_SESSION['cms_session_username'] = $sql['username'];
                    
                    $msg = 'L\'account '.$sql['username'].' &egrave; stato attivato con successo, clicca <a href="home.php">QUI</a> per andare alla home.';


                    
                }else{
                    
                    $msg = 'Questo account &egrave; gi&agrave; stato attivato con successo.';
                    
                }
                
            }else{
                
                 $msg = 'Link di attivazione non valido.';
                
            }
            
        }else{
            
            $msg = 'Link di attivazione non valido.';
            
        }
        
        return $msg;             
    }
    
    
    public function facebook($appid,$secret)
    {
        
        
        $facebook = new Facebook(array('appId'  => $appid,'secret' => $secret,));
        $profile = $facebook->api('/me');
        
        $utente = $this->mysql->esegui(array("QUERY" => 'SELECT * FROM users WHERE facebook_id = :fbid','fbid' => $profile['id']),'fetch',true);
        
        if($utente['NUM'] != 0){
            
            
            $ban_data = $this->controlloban($utente['username']);

            if($ban_data['ban'] == 0){
            
                session_Start();

                $_SESSION['cms_session_username'] = $utente['username'];

                header("LOCATION: /home.php");
            
                }else{

                    echo '<script> $j(\'#msg\').fadeOut(\'slow\', function () {
                    $j(\'#msg\').fadeIn(\'slow\').html(\'Account bannato per il motivo: '.$ban_data['reason'].', il ban scadr&agrave; il '.$this->mysql->data($ban_data['expire']).'\');
                    });
                    </script>';
                    
                }
            
        }else{
            
            $username = $profile['first_name'].'_'.$profile['last_name'];
            
            $this->get_regfb($username,rand(1,9654),$profile['email'],$profile['id']);
            
            session_Start();

            $_SESSION['cms_session_username'] = $username;

            header("LOCATION: /home.php");
            
        }
        
    }
    
    
    private function get_regfb($username,$password,$email,$fbid)
    {

        $query = $this->mysql->esegui(array

            ("QUERY" => "INSERT INTO users (username, password, mail, rank, credits, look, gender, ip_reg, habboid, account_created, ultima_visita, motto, pass_crypt, facebook_id, colore) VALUES (:username, :password, :email, '1','1000000', 'ch-3111-63-62.hd-3102-1.hr-3163-39.lg-285-77.sh-305-78', 'M', :ip, :habboid, :datacr, :ultimavisita, :motto, :pass_crypt, :fb, :colore)",
            ":username" => $username,
            ":password" => $this->mysql->crypt_pass($password),
            ":email"    => $email,
            ":ip"       => $this->mysql->get_ip(),
            ":habboid"  => $username,
            ":datacr"   => $this->mysql->data_now(),
            ":ultimavisita" => $this->mysql->data(),
            ":motto"    => 'Benvenuto in hotel',
            ":pass_crypt" => $this->mysql->crypt($password,'password_crypt'),
            ":colore" => $this->colore,
            ":fb"     => $fbid
            )

        );

        return $query;

    }

}
