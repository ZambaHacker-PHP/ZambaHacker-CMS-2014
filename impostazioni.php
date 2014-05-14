<?php
/*/////////////////////////////////////////////////////////////////////////*/
//////////////////CMS CREATO INTERAMENTE DA ZAMBAHACKER////////////////////
//////////////////SCRITTO IN PHP 5 OOP////////////////////////////////////
/////////////////E' VIETATA LA COPIA/////////////////////////////////////
//////////////////O LA QUALSIASI VIOLAZIONE DI COPYRIGHT////////////////
/*////////////////////////////////////////////////////////////////////*/

require_once("generale.php");

$sessioni = new sessioni($mysql,'news');


$template = new template($config,'impostazioni');

$data = array();
$sito = $mysql->esegui(array("QUERY" => "SELECT nome,mex_top,mex_index FROM sito LIMIT 1"));
$data['titolo'] = $sito['nome'].' - Impostazioni';
$data['titolo1'] = $sito['nome'];
$data['nav']['mex_top'] = $sito['mex_top'];
$data['nav']['mex_index'] = $sito['mex_index'];
$online = $mysql->esegui(array("QUERY" => 'SELECT users_online FROM server_status LIMIT 1'));
$data['impostazioni']['colore'] = $sessioni->utente['colore'];
$data['impostazioni']['col_code'] = $template->colori($sessioni->utente['colore']);
$data['home']['utente'] = $sessioni->utente;
$data['pagina'] = 'impostazioni';
$data['permessi'] = $sessioni->permessi;
$data['home']['usr']['username'] = $sessioni->utente['username'];
$data['online'] = $online['users_online'];
$data['mex_top'] = $sito['mex_top'];



$template->load_template($data);
$mysql->close();

