<?php
/*/////////////////////////////////////////////////////////////////////////*/
//////////////////CMS CREATO INTERAMENTE DA ZAMBAHACKER////////////////////
//////////////////SCRITTO IN PHP 5 OOP////////////////////////////////////
/////////////////E' VIETATA LA COPIA/////////////////////////////////////
//////////////////O LA QUALSIASI VIOLAZIONE DI COPYRIGHT////////////////
/*////////////////////////////////////////////////////////////////////*/


class staff
{

    private $mysql;

    public function __construct($mysql)
    {

        $this->mysql = $mysql;
        
    }
    
    public function get_rank($rank)
    {
        
        $rank = $this->mysql->esegui(array("QUERY" => "SELECT * FROM users WHERE rank = :rank", 'rank' => $rank),'all');
        
        $newrank = array();
        
        $i=0;
        
        foreach($rank as $utente){
            
            $utente['trow'] = $i;
            $i++;
            $newrank[] = $utente;
            
                
            
        }
        
        return $newrank;
        
    }

  
  

}