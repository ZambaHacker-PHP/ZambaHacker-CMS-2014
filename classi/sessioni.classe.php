<?php
/*/////////////////////////////////////////////////////////////////////////*/
//////////////////CMS CREATO INTERAMENTE DA ZAMBAHACKER////////////////////
//////////////////SCRITTO IN PHP 5 OOP////////////////////////////////////
/////////////////E' VIETATA LA COPIA/////////////////////////////////////
//////////////////O LA QUALSIASI VIOLAZIONE DI COPYRIGHT////////////////
/*////////////////////////////////////////////////////////////////////*/


class sessioni
{

    public $utente;
    private $mysql;
    public $permessi;

    public function __construct($mysql,$page='NULL')
    {

        $this->mysql = $mysql;

        session_start();
        
        
        $this->utente = $this->get_user();
        $this->permessi = $this->get_permessi();
        $this->control_page($page);
    
    }
    
    private function get_user()
    {
        
        if(isset($_SESSION['cms_session_username'])){
            
            $user = $this->mysql->esegui(array("QUERY" => "SELECT * FROM users WHERE username = :username LIMIT 1", ':username' => $_SESSION['cms_session_username']),'fetch',true);
            
        }else{
            
            $user = array('username' => 'guest', 'NUM' => '1', 'colore' => 'rosso');
            
        }
        
        return $user;
        
    }
    
    private function get_permessi(){
        
        if(isset($_SESSION['cms_session_username'])){
            
            $permessi = $this->mysql->esegui(array("QUERY" => "SELECT * FROM permissions_cms WHERE rank = :rank LIMIT 1", ':rank' => $this->utente['rank']),'fetch',true);
            
        }else{
            
            $permessi = 0;
        }
        
        return $permessi;
    }

    private function get_name_file()
    {

        $nome = $_SERVER['SCRIPT_NAME'];
        $nome = str_ireplace(array("/",'.php'),'',$nome);

        return $nome;

    }
    
    private function control_page($page)
    {
        
        switch($page){
            
            case 'index':
            
                if(isset($_SESSION['cms_session_username'])){
                
                    header('LOCATION: home.php');
                    exit();
                
                }
                
            break;
            
            case 'gioca':
            
                if(!isset($_SESSION['cms_session_username'])){
                
                    header('LOCATION: index.php');
                    exit();
                
                }
                
            break;
            
            case 'in':
            
                if(!isset($_SESSION['cms_session_username'])){
                
                    header('LOCATION: index.php');
                    exit();
                
                }
                
            break;
            
            case 'home':
            
                if(!isset($_SESSION['cms_session_username'])){
                
                    header('LOCATION: index.php');
                    exit();
                
                }
                
            break;
            
            case 'news':
            
                if(!isset($_SESSION['cms_session_username'])){
                
                    header('LOCATION: index.php');
                    exit();
                
                }
                
            break;
            
            case 'hk':
            
                if(!isset($_SESSION['cms_session_username'])){
                
                    header('LOCATION: ../index.php');
                    exit();
                
                }else{
               
                    if($this->permessi['hk'] == 0){
                        
                        header('LOCATION: ../index.php');
                        exit();
                        
                    }
                    
                }
                
            break;
            
            case 'staff':
            
                if(!isset($_SESSION['cms_session_username'])){
                
                    header('LOCATION: index.php');
                    exit();
                
                }
                
            break;
            
            case 'ajax':
            
                if(!isset($_SESSION['cms_session_username'])){
                
                    header('LOCATION: index.php');
                    exit();
                
                }
                
            break;
            
        }
        
    }
         

}