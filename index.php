<?php
/*/////////////////////////////////////////////////////////////////////////*/
//////////////////CMS CREATO INTERAMENTE DA ZAMBAHACKER////////////////////
//////////////////SCRITTO IN PHP 5 OOP////////////////////////////////////
/////////////////E' VIETATA LA COPIA/////////////////////////////////////
//////////////////O LA QUALSIASI VIOLAZIONE DI COPYRIGHT////////////////
/*////////////////////////////////////////////////////////////////////*/

require_once("generale.php");

$sessioni = new sessioni($mysql,'index');

$template = new template($config,'index');

$data = array();
$sito = $mysql->esegui(array("QUERY" => "SELECT nome,mex_top,mex_index FROM sito LIMIT 1"));
$data['index']['titolo'] = $sito['nome'];
$data['titolo1'] = $sito['nome'];
$data['index']['mex_top'] = $sito['mex_top'];
$data['index']['mex_index'] = $sito['mex_index'];
$online = $mysql->esegui(array("QUERY" => 'SELECT users_online FROM server_status LIMIT 1'));
$data['index']['online'] = $online['users_online'];
$data['index']['colore'] = $config->colore;
$data['index']['col_code'] = $template->colori($config->colore);
$data['index']['appid'] = $config->appid;
$template->load_template($data);

$mysql->close();
