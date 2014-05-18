<?php
/*/////////////////////////////////////////////////////////////////////////*/
//////////////////CMS CREATO INTERAMENTE DA ZAMBAHACKER////////////////////
//////////////////SCRITTO IN PHP 5 OOP////////////////////////////////////
/////////////////E' VIETATA LA COPIA/////////////////////////////////////
//////////////////O LA QUALSIASI VIOLAZIONE DI COPYRIGHT////////////////
/*////////////////////////////////////////////////////////////////////*/


class admin
{

    private $mysql;
    private $utente;
    private $permessi;


    public function __construct($mysql,$utente,$pag,$permessi)
    {

        $this->mysql = $mysql;
        $this->utente = $utente;
        $this->permessi = $permessi;
        $this->control_page($pag);

    }
    
    private function control_page($pag)
    {

        switch($pag){
            
            case 'moduser':
            
                if($this->permessi['hk_usr'] == 0){
                    
                    header("LOCATION: index.php");
                    exit();
                }    
            
            break;
            
            case 'controlla_badge':
            
                if($this->permessi['hk_controlla_badge'] == 0){
                    
                    header("LOCATION: index.php");
                    exit();
                }    
            
            break;
            
            case 'crea_news':
            
                if($this->permessi['hk_crea_news'] == 0){
                    
                    header("LOCATION: index.php");
                    exit();
                }    
            
            break;
            
            case 'chatlog':
            
                if($this->permessi['hk_chatlog'] == 0){
                    
                    header("LOCATION: index.php");
                    exit();
                }    
            
            break;
            
            case 'enter_user':
            
                if($this->permessi['hk_enter_user'] == 0){
                    
                    header("LOCATION: index.php");
                    exit();
                }
                
            break; 
            
        }
        
    }
    
    public function cerca($nome)
    {
        
        if($nome != ''){
         
            $user = $this->mysql->esegui(array("QUERY" => 'SELECT username FROM users WHERE username = :username LIMIT 1',':username'=>$nome),'fetch',true);
            
            if($user['NUM'] != 0){
                
               echo '<script>document.location = \'modifica_utente.php?usr='.$user['username'].'\'</script>';
                
            }else{
                
                echo 'Utente Inesistente.';
            }
            
        }
        
    }
    
    public function chatcerca($nome)
    {
        
        if($nome != ''){
         
            $user = $this->mysql->esegui(array("QUERY" => 'SELECT username FROM users WHERE username = :username LIMIT 1',':username'=>$nome),'fetch',true);
            
            if($user['NUM'] != 0){
                
               echo '<script>document.location = \'chatlog.php?usr='.$user['username'].'\'</script>';
                
            }else{
                
                echo 'Utente Inesistente.';
            }
            
        }
        
    }
    
    public function badgecerca($nome)
    {
        
        if($nome != ''){
         
            $user = $this->mysql->esegui(array("QUERY" => 'SELECT username FROM users WHERE username = :username LIMIT 1',':username'=>$nome),'fetch',true);
            
            if($user['NUM'] != 0){
                
               echo '<script>document.location = \'controlla_badge.php?usr='.$user['username'].'\'</script>';
                
            }else{
                
                echo 'Utente Inesistente.';
            }
            
        }
        
    }
    
    public function get_chatlog($nome)
    {
        
        if($nome != ''){
            
            $user = $this->mysql->esegui(array("QUERY" => 'SELECT * FROM users WHERE username = :username LIMIT 1',':username'=>$nome),'fetch',true);
            
            if($user['NUM'] != 0){
                
                $chat = $this->mysql->esegui(array("QUERY" => 'SELECT * FROM chatlogs WHERE user_id = :id',':id' => $user['id']),'all');
                $newchat = array();
        
                $i=0;
        
                foreach($chat as $utente){
            
                    $utente['trow'] = $i;
                    $utente['ora'] = $this->mysql->data($utente['timestamp']);
                    $i++;
                    $newchat[] = $utente; 
                       
                }
                
                return $newchat;
                
            }else{
                
                header("LOCATION: chatlog.php");
                
            }
            
        }
        
    }
    
    public function get_badgeuser($nome)
    {
        
        if($nome != ''){
            
            $user = $this->mysql->esegui(array("QUERY" => 'SELECT * FROM users WHERE username = :username LIMIT 1',':username'=>$nome),'fetch',true);
            
            if($user['NUM'] != 0){
                
                $badge = $this->mysql->esegui(array("QUERY" => 'SELECT * FROM user_badges WHERE user_id = :id',':id' => $user['id']),'all');
                $newbadge = array();
        
                $i=0;
        
                foreach($badge as $utente){
            
                    $utente['trow'] = $i;
                    
                    $i++;
                    $newbadge[] = $utente; 
                       
                }
                
                return $newbadge;
                
            }else{
                
                header("LOCATION: controlla_badge.php");
                
            }
            
        }
        
    }
    
    public function get_usr($nome)
    {
        
        if($nome != ''){
            
            $user = $this->mysql->esegui(array("QUERY" => 'SELECT * FROM users WHERE username = :username LIMIT 1',':username' =>$nome),'fetch',true);
            
            if($user['NUM'] != 0){
                
                $user1 = $this->mysql->esegui(array("QUERY" => 'SELECT * FROM user_stats WHERE id = :id LIMIT 1',':id'=>$user['id']),'fetch',true);
                
                if($user1['NUM'] != 0){
                    
                    $marge = array_merge($user,$user1);
                    
                }else{
                    
                    $marge = $user;
                    
                }
                
                return $marge;
                
            }else{
                
                header("LOCATION: modifica_utente.php");
                
            }
            
        }
        
    }
    
    private function controllo_rank($nuovo,$vecchio)
    {
        
        if($this->utente['rank'] > $vecchio){
            
            $rank = $nuovo;
            
        }else{
            
            $rank = $vecchio;
            
        }
        
        return $rank;     
    }
    
    public function mod_users($username,$mail,$rank,$crediti,$vip_points,$activity_points,$motto,$ruolo,$rispetti,$ontime,$rispettigg,$rispettiptgg,$gid,$username1)
    {
        
        $user = $this->mysql->esegui(array("QUERY" => 'SELECT * FROM users WHERE username = :username LIMIT 1',':username'=>$username1),'fetch',true);
        $user1 = $this->mysql->esegui(array("QUERY" => 'SELECT * FROM user_stats WHERE id = :id LIMIT 1',':id'=>$user['id']),'fetch',true);
        
        if($this->utente['rank'] > $user['rank'] OR $this->utente['username'] == $username1) {
            
        $this->mysql->esegui(array(
        
        "QUERY" => 'UPDATE users SET username = :username , mail = :mail, rank = :rank , credits = :credits, vip_points = :vip_points , activity_points = :activity_points, motto = :motto, ruolo = :ruolo WHERE username = :username1',
        ':username' => ($this->permessi['hk_username'] == 1 ? $username : $user['username']),
        ':mail' => ($this->permessi['hk_mail'] == 1 ? $mail : $user['mail']),
        ':rank' => ($this->permessi['hk_rank']== 1 ? $this->controllo_rank($rank,$user['rank']) : $user['rank']),
        ':credits' => ($this->permessi['hk_credits'] == 1 ? $crediti : $user['credits']),
        ':vip_points' => ($this->permessi['hk_vip_points'] == 1 ? $vip_points : $user['vip_points']),
        ':activity_points' => ($this->permessi['hk_activity_points'] == 1 ? $activity_points : $user['activity_points']),
        ':motto' => ($this->permessi['hk_motto'] == 1 ? $motto : $user['motto']),
        ':ruolo' => ($this->permessi['hk_ruolo'] == 1 ? $ruolo : $user['username']),
        ':username1' => $username1
        ));
        
        $this->mysql->esegui(array(
        
        "QUERY" => 'UPDATE user_stats SET Respect = :Respect , DailyRespectPoints = :DailyRespectPoints, DailyPetRespectPoints = :DailyPetRespectPoints, groupid = :groupid WHERE id = :id',
        ":Respect" => ($this->permessi['hk_rispetti'] == 1 ? $rispetti : $user1['Respect']),
        ":DailyRespectPoints" => ($this->permessi['hk_respectgg'] == 1 ? $rispettigg : $user1['DailyRespectPoints']),
        ":DailyPetRespectPoints" => ($this->permessi['hk_grattini'] == 1 ? $rispettiptgg : $user1['DailyPetRespectPoints']),
        ":groupid" => ($this->permessi['hk_id_gruppo'] == 1 ? $gid : $user1['groupid']),
        ":id" => $user['id'] 
        ));
        
        $this->mysql->esegui(array("QUERY" => 'INSERT INTO `cms_log` (`username`, `azione`, `data`, `ip`) VALUES (:username,:azione,:data,:ip)',':username' => $this->utente['username'], ':azione' => 'Modifica Utente '.$username1,':ip' => $this->mysql->get_ip(),':data' => $this->mysql->data()));
        
            echo '<div id="msg_mod" class="alert alert-success" style="margin-top: -20px;">Utente modificato con successo</div>';
        
        }else{
          
            echo '<div id="msg_mod" class="alert alert-error" style="margin-top: -20px;">Non puoi modificare questo utente</div>';  
            
        }
              
    }
    
    public function enter_user($nome){
        
        if($nome != ''){
         
            $user = $this->mysql->esegui(array("QUERY" => 'SELECT username,rank FROM users WHERE username = :username LIMIT 1',':username'=>$nome),'fetch',true);
            
            if($user['NUM'] != 0){
                
               if($user['username'] != $this->utente['username']){
                
                    if($this->utente['rank'] > $user['rank']){
         

                        $_SESSION['cms_session_username'] = $user['username'];

                        echo '<script>   document.location = \'../\';</script>';
                                
                    }else{
                        
                        echo 'Non puoi entrare in questo utente.';
                        
                    }
                
               }else{
                
                    echo 'Sei gi&agrave; in questo utente.';
                    
               }
                
            }else{
                
                echo 'Utente Inesistente.';
            }
            
        }
        
    }
    
    public function crea_news($titolo,$short,$long,$img,$autore){
        
        if($titolo != '' || $short != '' || $long != '' ||$img != '' || $autore != ''){
            
           $this->mysql->esegui(array(
           
           "QUERY" => "INSERT INTO cms_news (title,shortstory,longstory,image,attivo,data,author) VALUES (:title,:shorts,:longs,:img,:attivo,:data,:autore)",
           ":title" => $titolo,
           ":shorts" => $short,
           ":longs" => $long,
           ":img" => $img,
           ":data" => $this->mysql->data(),
           ":autore" => $autore,
           ":attivo" => 1
           
           
           )); 
           
           $this->mysql->esegui(array("QUERY" => 'INSERT INTO `cms_log` (`username`, `azione`, `data`, `ip`) VALUES (:username,:azione,:data,:ip)',':username' => $this->utente['username'], ':azione' => 'Crea news '.$titolo,':ip' => $this->mysql->get_ip(),':data' => $this->mysql->data()));
          
            echo 'News Creata con successo';
            
        }
        
    }
      

}