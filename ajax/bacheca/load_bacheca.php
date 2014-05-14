<?php
/*////////////////////////////////////////////////////////////////////////*/
//////////////////CMS CREATO INTERAMENTE DA ZAMBAHACKER////////////////////
//////////////////SCRITTO IN PHP 5 OOP + AJAX/////////////////////////////
/////////////////E' VIETATA LA COPIA/////////////////////////////////////
//////////////////O LA QUALSIASI VIOLAZIONE DI COPYRIGHT////////////////
/*///////////////////////////////////////////////////////////////////*/

require_once "../../generale.php";
require_once "../../classi/lib/Twig/Autoloader.php";

if($_SERVER['SERVER_NAME'] != $config->url_sito){

    echo '<center>Errore nella configurazion dell\'url<center>';

}else{
    
    $sessioni = new sessioni($mysql,'ajax');
    $home = new home($mysql,$sessioni->utente,(isset($_POST['nome']) ? $_POST['nome'] : $sessioni->utente['username']));

$data = array();
$data['home']['usr'] = $home->usr;
$data['home']['utente'] = $sessioni->utente;
$data['home']['commenti'] = $home->get_commenti();
Twig_Autoloader::register();
$loader = new Twig_Loader_Filesystem('../../tema/Default/');
$twig = new Twig_Environment($loader, array('cache' => 'cache',
            'auto_reload' => true));
$data['root'] = '../../tema/Default/';
$template = $twig->loadTemplate('commenti.twig');
$template = $template->display($data);

$mysql->close();

}
