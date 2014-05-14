<?php
/*////////////////////////////////////////////////////////////////////////*/
//////////////////CMS CREATO INTERAMENTE DA ZAMBAHACKER////////////////////
//////////////////SCRITTO IN PHP 5 OOP + AJAX/////////////////////////////
/////////////////E' VIETATA LA COPIA/////////////////////////////////////
//////////////////O LA QUALSIASI VIOLAZIONE DI COPYRIGHT////////////////
/*///////////////////////////////////////////////////////////////////*/

require_once "../../generale.php";

if($_SERVER['SERVER_NAME'] != $config->url_sito){

    echo '<center>Errore nella configurazion dell\'url<center>';

}else{
    
    $sessioni = new sessioni($mysql,'hk');
    $admin = new admin($mysql,$sessioni->utente,'chatlog',$sessioni->permessi);
    
    $admin->chatcerca($_POST['username']);
    
    $mysql->close();

}
