<?php
/*/////////////////////////////////////////////////////////////////////////*/
//////////////////CMS CREATO INTERAMENTE DA ZAMBAHACKER////////////////////
//////////////////SCRITTO IN PHP 5 OOP////////////////////////////////////
/////////////////E' VIETATA LA COPIA/////////////////////////////////////
//////////////////O LA QUALSIASI VIOLAZIONE DI COPYRIGHT////////////////
/*////////////////////////////////////////////////////////////////////*/


class home
{

    private $mysql;
    private $utente;
    public $usr;

    public function __construct($mysql,$utente,$usr)
    {

        $this->mysql = $mysql;
        $this->utente = $utente;
        $this->usr = $this->get_usr($usr);

    }
    
    private function get_usr($usr)
    {
        
        if($this->utente['username'] == $usr){
            
            $usr = $this->utente;
            
        }else{
            
            $usr = $this->mysql->esegui(array("QUERY" => "SELECT * FROM users WHERE username = :username LIMIT 1", ':username' => $usr),'fetch',true);
            
            if($usr['NUM'] == 0){
                
                header('LOCATION: home.php');
                
            }
            
        }
        
        return $usr;
        
    }
    
    #--------------------- BACHECA ---------------------------------------------#
    
    private function Faccine($str)
    {
    
        $str = str_ireplace(":)", '<img src="./tema/Default/images/smilies/sorriso_lingua.png" alt=":)" title=":)" border="0">', ($str));
        $str = str_ireplace("=)", '<img src="./tema/Default/images/smilies/sorriso_lingua.png" alt=":)" title=":)" border="0">', ($str));
        $str = str_ireplace(";P", '<img src="./tema/Default/images/smilies/lingua.png" alt=";P" title=";P" border="0">', ($str));
        $str = str_ireplace(":p", '<img src="./tema/Default/images/smilies/lingua.png" alt=":p" title=":p" border="0">',($str));
        $str = str_ireplace("(L)", '<img src="./tema/Default/images/smilies/cuore.png" alt="(L)" title="(L)" border="0">', ($str));
        $str = str_ireplace('<3',  '<img src="./tema/Default/images/smilies/cuore.png" alt="<3" title="<3" border="0">', ($str));
        $str = str_ireplace(":0", '<img src="./tema/Default/images/smilies/sorrisone.png" alt=":0" title=":0" border="0">', ($str));
        $str = str_ireplace(":O", '<img src="./tema/Default/images/smilies/sorrisone.png" alt=":O" title=":O" border="0">', ($str));
        $str = str_ireplace("(y)", '<img src="./tema/Default/images/smilies/merda.png" alt="(y)" title="(y)" border="0">', ($str));
        $str = str_ireplace(":*", '<img src="./tema/Default/images/smilies/bacio.png" alt=":*" title=":*" border="0">', ($str));
    
        return $str;
    
    }
    
    private function show_tag($commento)
    {
        
        if(strpos($commento, '@') !== false){
            
            $str = explode(' ',$commento);
            
            foreach($str as $elemento){
                
                if(strpos($elemento, '@') !== false){
                    
                    $elemento = str_ireplace('@','',$elemento);
                    $commento = str_ireplace('@'.$elemento,'<a href="home.php?usr='.$elemento.'">'.$elemento.'</a>',$commento);
                }
            }
        }
        
        return $commento;
        
    }
    
    public function get_commenti()
    {
        
        $newelementi = array();
        $elementi = $this->mysql->esegui(array("QUERY" => "SELECT * FROM bacheca WHERE (nomeprofilo = :nomeprofilo AND attivo = '1')OR staff = 1 ORDER BY id DESC",":nomeprofilo" => $this->usr['username']),'all');
   
        foreach($elementi as $elemento){
            
            $look = $this->mysql->esegui(array("QUERY" => "SELECT look FROM users WHERE username = :username",":username" => $elemento['user_name']));
            $elemento['look'] = $look['look'];
            $elemento['commento'] = $this->mysql->xss_clean($this->Faccine($this->show_tag($elemento['commento'])));
            $newelementi[] = $elemento;
            
        }
        
        return $newelementi;
        
    }
    
    public function post_commento($commento)
    {
        
        if($commento != '' || $this->usr['username']){
            
            if($this->usr['stato_bac'] == '1'){
                
                $this->mysql->esegui(array
                (
                "QUERY" => "INSERT INTO bacheca (user_name,nomeprofilo,commento,data,staff,attivo) VALUES (:user_name,:nomeprofilo,:commento,:data,:staff,:attivo)",
                ':user_name' => $this->utente['username'],
                ':nomeprofilo' => $this->usr['username'],
                ':commento' => $commento,
                ':data' => $this->mysql->data(),
                ':staff' => '0',
                ':attivo' => '1'
                ),NULL);
                $this->get_tag($commento);
                echo '<script> $j(\'#msg\').fadeOut(\'slow\', function () {
                $j(\'#msg\').fadeIn(\'slow\').html(\'Commento inserito con successo.\');
                });
                load_bac();
                </script>';
                
            }else{
                
                echo '<script> $j(\'#msg\').fadeOut(\'slow\', function () {
                $j(\'#msg\').fadeIn(\'slow\').html(\'Questa bacheca risulta disattivata.\');
                });
                </script>';
                
            }
            
        }else{
            
                echo '<script> $j(\'#msg\').fadeOut(\'slow\', function () {
                $j(\'#msg\').fadeIn(\'slow\').html(\'Commento non valido.\');
                });
                </script>';
                
        }
    }
    
    
    private function get_tag($commento)
    {
        
        if(strpos($commento, '@') !== false){
            
            $str = explode(' ',$commento);
            
            foreach($str as $elemento){
                
                if(strpos($elemento, '@') !== false){
                    
                    $nome = str_ireplace('@','',$elemento);
                    
                    $utente = $this->mysql->esegui(array("QUERY" => "SELECT username,stato_bac FROM users WHERE username = :username", ':username' => $nome),'fetch',true);
                        
                    if($utente['NUM'] != 0){
                            
                        if($utente['stato_bac'] == '1'){
                            
                            if($utente['username'] != $this->utente['username']){
                                
                                $this->mysql->esegui(array
                                (
                                "QUERY" => "INSERT INTO bacheca (user_name,nomeprofilo,commento,data,staff,attivo) VALUES (:user_name,:nomeprofilo,:commento,:data,:staff,:attivo)",
                                ':user_name' => $this->utente['username'],
                                ':nomeprofilo' => $utente['username'],
                                ':commento' => $commento,
                                ':data' => $this->mysql->data(),
                                ':staff' => '0',
                                ':attivo' => '1'
                                ),NULL);
                            
                            }
                            
                        }
                            
                    }
                    
                }
                
            }
            
        }
          
    }
    
    public function elimina_commento($id)
    {
        
        if($id != ''){
            
            $info = $this->mysql->esegui(array("QUERY" => "SELECT * FROM bacheca WHERE id = :id LIMIT 1",'id' => $id),'fetch',true);
            
            if($info['NUM'] != 0){
                
                $permessi = $this->mysql->esegui(array("QUERY" => "SELECT * FROM permissions_cms WHERE rank = :rank LIMIT 1", ':rank' => $this->utente['rank']),'fetch',true);
                if($info['user_name'] == $this->utente['username'] || $info['nomeprofilo'] == $this->utente['username'] || $permessi['commenti'] == '1'){
                            
                    $this->mysql->esegui(array("QUERY" => 'DELETE FROM bacheca WHERE id = :id','id' => $id),'null');
                    echo '<script>load_bac();</script>';
                }
                
            }
            
        }
        
    }
        
    #----------------------------------------------------------------------------------    
        
    public function get_notizie()
    {
        
        $notizie = $this->mysql->esegui(array("QUERY" => "SELECT * FROM cms_news WHERE attivo = '1' ORDER BY id DESC"),'all');
        $maxid = $this->mysql->esegui(array("QUERY" => "SELECT MAX(id) as id FROM cms_news WHERE attivo = '1'"),'fetch',true);
        $arraynot = Array();
        
        foreach($notizie as $notizia){
            
            if($notizia['id'] == $maxid['id']){
                
                $notizia['class'] = 'slide current';
                
            }else{
                
                $notizia['class'] = 'slide';
                
            }
            
            $arraynot[] = $notizia;
            
        }
        
        return $arraynot;

    }
    
    public function cerca($nome)
    {
        
        if($nome != ''){
            
            $cerca  = $this->mysql->esegui(array("QUERY" => "SELECT username FROM users WHERE username = :username",':username' => $nome),'fetch',true);
            
            if($cerca['NUM'] != 0){
                
                echo '<script>document.location = \'home.php?usr='.$cerca['username'].'\';</script>';
                
            }else{
                
                echo '<script> $j(\'#msg_cerca\').fadeOut(\'slow\', function () {
                $j(\'#msg_cerca\').fadeIn(\'slow\').text(\'Utente inesistente.\');
                });
                </script>';    
                
            }
            
        }
        
    }
    
    # top personaggi ricchi
    public function get_top()
    {
        
        $top = $this->mysql->esegui(array("QUERY" => "SELECT username,look,activity_points,ultima_visita FROM users WHERE rank = 1 ORDER BY activity_points DESC limit 4"),'all');
        
        return $top;
        
    }
    
    public function cambiacolore($colore)
    {
        
        if($colore != ''){
            
            if($colore == 'blu' || $colore == 'rosso' || $colore == 'giallo' || $colore == 'verde' || $colore == 'rosa' || $colore == 'azzurro'){
                
                $this->mysql->esegui(array("QUERY" => 'UPDATE users SET colore = :colore WHERE username = :username','colore' => $colore,'username' => $this->utente['username']));
                echo '<script>   document.location = \'home.php\';</script>';
            }
            
        }
        
        
    }
    
       

}