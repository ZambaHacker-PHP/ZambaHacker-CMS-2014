<?php
/*/////////////////////////////////////////////////////////////////////////*/
//////////////////CMS CREATO INTERAMENTE DA ZAMBAHACKER////////////////////
//////////////////SCRITTO IN PHP 5 OOP////////////////////////////////////
/////////////////E' VIETATA LA COPIA/////////////////////////////////////
//////////////////O LA QUALSIASI VIOLAZIONE DI COPYRIGHT////////////////
/*////////////////////////////////////////////////////////////////////*/


class impostazioni
{

    private $mysql;
    private $utente;
  

    public function __construct($mysql,$utente)
    {

        $this->mysql = $mysql;
        $this->utente = $utente;

    }
    
    public function cambia_password($old,$new)
    {
        
        if($old != '' || $new != ''){
            
            if($this->mysql->crypt_pass($old) == $this->utente['password']){
                
                if(strlen($new) >= 5){
                    
                    $this->mysql->esegui(array("QUERY" => 'UPDATE users SET password = :password , pass_crypt = :passcrypt WHERE username = :username','password' => $this->mysql->crypt_pass($new) , ':username' => $this->utente['username'],'passcrypt' => $this->mysql->crypt($new,'password_crypt')));
                    
                    session_destroy();
                    
                    echo '<script> $j(\'#msg\').fadeOut(\'slow\', function () {
                    $j(\'#msg\').fadeIn(\'slow\').html(\'La password &egrave; stata cambiata con successo, riesegui il login perfavore.\');
                    });
                    </script>';
                    
                }else{
                    
                    echo '<script> $j(\'#msg\').fadeOut(\'slow\', function () {
                    $j(\'#msg\').fadeIn(\'slow\').html(\'La password deve contenere almeno 5 caratteri.\');
                    });
                    </script>';
                    
                }
                
            }else{
                
                echo '<script> $j(\'#msg\').fadeOut(\'slow\', function () {
                    $j(\'#msg\').fadeIn(\'slow\').html(\'La vecchia password non &egrave; corretta.\');
                    });
                    </script>';
                
            }
            
        }
        
        
    }
    
  

}