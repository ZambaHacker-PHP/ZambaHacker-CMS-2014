<?php
/*/////////////////////////////////////////////////////////////////////////*/
//////////////////CMS CREATO INTERAMENTE DA ZAMBAHACKER////////////////////
//////////////////SCRITTO IN PHP 5 OOP////////////////////////////////////
/////////////////E' VIETATA LA COPIA/////////////////////////////////////
//////////////////O LA QUALSIASI VIOLAZIONE DI COPYRIGHT////////////////
/*////////////////////////////////////////////////////////////////////*/

require_once("generale.php");

$sessioni = new sessioni($mysql,'staff');
$staff = new staff($mysql);


$template = new template($config,'staff');

$data = array();
$sito = $mysql->esegui(array("QUERY" => "SELECT nome,mex_top,mex_index FROM sito LIMIT 1"));
$data['titolo'] = $sito['nome'].' - Staff';
$data['titolo1'] = $sito['nome'];
$data['nav']['mex_top'] = $sito['mex_top'];
$data['nav']['mex_index'] = $sito['mex_index'];
$online = $mysql->esegui(array("QUERY" => 'SELECT users_online FROM server_status LIMIT 1'));
$data['staff']['colore'] = $sessioni->utente['colore'];
$data['staff']['col_code'] = $template->colori($sessioni->utente['colore']);
$data['pagina'] = 'staff';
$data['online'] = $online['users_online'];
$data['mex_top'] = $sito['mex_top'];
$data['permessi'] = $sessioni->permessi;
$data['staff']['fondatori'] = $staff->get_rank(8);
$data['staff']['arbitri'] = $staff->get_rank(5);
$data['staff']['amministratori'] = $staff->get_rank(7);
$data['staff']['mod'] = $staff->get_rank(6);
$data['home']['utente'] = $sessioni->utente;
$data['home']['usr']['username'] = $sessioni->utente['username'];

$template->load_template($data);
$mysql->close();
