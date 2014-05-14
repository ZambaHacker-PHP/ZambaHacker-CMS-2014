<?php
/*/////////////////////////////////////////////////////////////////////////*/
//////////////////CMS CREATO INTERAMENTE DA ZAMBAHACKER////////////////////
//////////////////SCRITTO IN PHP 5 OOP////////////////////////////////////
/////////////////E' VIETATA LA COPIA/////////////////////////////////////
//////////////////O LA QUALSIASI VIOLAZIONE DI COPYRIGHT////////////////
/*////////////////////////////////////////////////////////////////////*/

require_once("../generale.php");

$sessioni = new sessioni($mysql,'hk');
$admin = new admin($mysql,$sessioni->utente,'controlla_badge',$sessioni->permessi);
$template = new template($config,'controlla_badge','','admin');

$data = array();
$sito = $mysql->esegui(array("QUERY" => "SELECT nome,mex_top,mex_index FROM sito LIMIT 1"));
$data['titolo'] = $sito['nome'].' -  Amministrazione';
$data['hk']['utente'] = $sessioni->utente;
$data['hk']['permessi'] = $sessioni->permessi;
$data['pagina'] = 'users';
$data['hk']['badge'] = $admin->get_badgeuser((isset($_GET['usr']) ? $_GET['usr'] : ''));
$data['hk']['user']['NUM'] = isset($_GET['usr']) ? 1 : 0;
$data['hk']['user']['name'] = isset($_GET['usr']) ? $_GET['usr'] : 0;
$template->load_template($data);
$mysql->close();
