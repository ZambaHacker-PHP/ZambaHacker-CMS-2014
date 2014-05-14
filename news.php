<?php
/*/////////////////////////////////////////////////////////////////////////*/
//////////////////CMS CREATO INTERAMENTE DA ZAMBAHACKER////////////////////
//////////////////SCRITTO IN PHP 5 OOP////////////////////////////////////
/////////////////E' VIETATA LA COPIA/////////////////////////////////////
//////////////////O LA QUALSIASI VIOLAZIONE DI COPYRIGHT////////////////
/*////////////////////////////////////////////////////////////////////*/

require_once("generale.php");

$sessioni = new sessioni($mysql,'news');
$news = new news($mysql,$sessioni->utente,(isset($_GET['id']) ? $_GET['id'] : '0'));


$template = new template($config,'news');

$data = array();
$sito = $mysql->esegui(array("QUERY" => "SELECT nome,mex_top,mex_index FROM sito LIMIT 1"));
$data['titolo'] = $sito['nome'].' - '.$news->id['title'];
$data['titolo1'] = $sito['nome'];
$data['nav']['mex_top'] = $sito['mex_top'];
$data['nav']['mex_index'] = $sito['mex_index'];
$online = $mysql->esegui(array("QUERY" => 'SELECT users_online FROM server_status LIMIT 1'));
$data['news']['colore'] = $sessioni->utente['colore'];
$data['news']['col_code'] = $template->colori($sessioni->utente['colore']);
$data['home']['utente'] = $sessioni->utente;
$data['pagina'] = 'news';
$data['news']['id'] = $news->id;
$data['permessi'] = $sessioni->permessi;
$data['news']['elenco'] = $news->get_elenco();
$data['home']['usr']['username'] = $sessioni->utente['username'];
$data['online'] = $online['users_online'];
$data['mex_top'] = $sito['mex_top'];



$template->load_template($data);
$mysql->close();
