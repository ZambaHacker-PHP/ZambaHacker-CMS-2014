<?php
/*/////////////////////////////////////////////////////////////////////////*/
//////////////////CMS CREATO INTERAMENTE DA ZAMBAHACKER////////////////////
//////////////////SCRITTO IN PHP 5 OOP////////////////////////////////////
/////////////////E' VIETATA LA COPIA/////////////////////////////////////
//////////////////O LA QUALSIASI VIOLAZIONE DI COPYRIGHT////////////////
/*////////////////////////////////////////////////////////////////////*/


class news
{

    private $mysql;
    private $utente;
    public $id;


    public function __construct($mysql,$utente,$id)
    {

        $this->mysql = $mysql;
        $this->utente = $utente;
        $this->id = $this->get_id($id);
    }
    
    private function get_id($id)
    {
        
        if($id == '0'){
            
            $maxid = $this->mysql->esegui(array("QUERY" => "SELECT MAX(id) as id FROM cms_news WHERE attivo = '1'"),'fetch',true);
            $id = $this->mysql->esegui(array("QUERY" => "SELECT * FROM cms_news WHERE id = :id",'id' => $maxid['id']),'fetch',true);
            
        }else{
            
            $id = $this->mysql->esegui(array("QUERY" => "SELECT * FROM cms_news WHERE id = :id",'id' => $id),'fetch',true);
            
            if($id['NUM'] == 0){
               
                           
                $maxid = $this->mysql->esegui(array("QUERY" => "SELECT MAX(id) as id FROM cms_news WHERE attivo = '1'"),'fetch',true);
                $id = $this->mysql->esegui(array("QUERY" => "SELECT * FROM cms_news WHERE id = :id",'id' => $maxid['id']),'fetch',true); 
                
            }
            
        }
        
        $id['longstory'] = str_ireplace('[nomeutente]',$this->utente['username'],$id['longstory']);
        
        return $id;
        
    }
    
    public function get_elenco()
    {
        
        $elenco = $this->mysql->esegui(array("QUERY" => "SELECT id,title FROM cms_news ORDER BY id DESC LIMIT 20"),'all');
        
        return $elenco;
        
    }

  

}