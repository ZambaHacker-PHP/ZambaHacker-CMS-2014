<?php
/*/////////////////////////////////////////////////////////////////////////*/
//////////////////CMS CREATO INTERAMENTE DA ZAMBAHACKER////////////////////
//////////////////SCRITTO IN PHP 5 OOP////////////////////////////////////
/////////////////E' VIETATA LA COPIA/////////////////////////////////////
//////////////////O LA QUALSIASI VIOLAZIONE DI COPYRIGHT////////////////
/*////////////////////////////////////////////////////////////////////*/

require_once("generale.php");

$sessioni = new sessioni($mysql,'home');
$home = new home($mysql,$sessioni->utente,(isset($_GET['usr']) ? $_GET['usr'] : $sessioni->utente['username']));


$template = new template($config,'home');

$data = array();
$sito = $mysql->esegui(array("QUERY" => "SELECT nome,mex_top,mex_index FROM sito LIMIT 1"));
$data['titolo'] = $sito['nome'].' - '.$home->usr['username'];
$data['titolo1'] = $sito['nome'];
$data['nav']['mex_top'] = $sito['mex_top'];
$data['nav']['mex_index'] = $sito['mex_index'];
$online = $mysql->esegui(array("QUERY" => 'SELECT users_online FROM server_status LIMIT 1'));
$data['pagina'] = 'home';
$data['home']['colore'] = $home->usr['colore'];
$data['home']['col_code'] = $template->colori($home->usr['colore']);
$data['home']['usr'] = $home->usr;
$data['home']['utente'] = $sessioni->utente;
$data['home']['permessi'] = $sessioni->permessi;
$data['permessi'] = $sessioni->permessi;
$data['home']['commenti'] = $home->get_commenti();
$data['home']['top'] = $home->get_top();
$data['home']['news'] = $home->get_notizie();
$data['online'] = $online['users_online'];
$data['mex_top'] = $sito['mex_top'];
$template->load_template($data);
$mysql->close();

