<?php
/*/////////////////////////////////////////////////////////////////////////*/
//////////////////CMS CREATO INTERAMENTE DA ZAMBAHACKER////////////////////
//////////////////SCRITTO IN PHP 5 OOP////////////////////////////////////
/////////////////E' VIETATA LA COPIA/////////////////////////////////////
//////////////////O LA QUALSIASI VIOLAZIONE DI COPYRIGHT////////////////
/*////////////////////////////////////////////////////////////////////*/

require_once("../generale.php");

$sessioni = new sessioni($mysql,'hk');

$template = new template($config,'dash','','admin');

$data = array();
$sito = $mysql->esegui(array("QUERY" => "SELECT nome,mex_top,mex_index FROM sito LIMIT 1"));
$data['titolo'] = $sito['nome'].' -  Amministrazione';
$data['hk']['utente'] = $sessioni->utente;
$data['hk']['permessi'] = $sessioni->permessi;
$reg = $mysql->esegui(array("QUERY" => 'SELECT * FROM users'),'null',true);
$data['hk']['user_reg'] = $reg['NUM'];
$news = $mysql->esegui(array("QUERY" => 'SELECT * FROM cms_news'),'null',true);
$data['hk']['news'] = $news['NUM'];
$stanze = $mysql->esegui(array("QUERY" => 'SELECT * FROM rooms'),'null',true);
$data['hk']['stanze'] = $stanze['NUM'];
$data['pagina'] = 'dash';
$online = $mysql->esegui(array("QUERY" => 'SELECT users_online FROM server_status LIMIT 1'));
$data['online'] = $online['users_online'];
$data['aggiornamento'] = $mysql->aggiornamenti();

$template->load_template($data);
$mysql->close();
