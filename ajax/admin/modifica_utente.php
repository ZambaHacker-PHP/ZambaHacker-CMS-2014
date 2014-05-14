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
    $admin = new admin($mysql,$sessioni->utente,'moduser',$sessioni->permessi);
    
    $admin->mod_users($_POST['username'],$_POST['mail'],$_POST['rank'],$_POST['credits'],$_POST['vip_points'],$_POST['activity_points'],$_POST['motto'],$_POST['ruolo'],$_POST['rispetti'],$_POST['ontime'],$_POST['rixp_gg'],$_POST['rixp_pt_gg'],$_POST['id_gruppo'],$_POST['username1']);
    
    $mysql->close();

}
