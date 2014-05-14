<?php
/*/////////////////////////////////////////////////////////////////////////*/
//////////////////CMS CREATO INTERAMENTE DA ZAMBAHACKER////////////////////
//////////////////SCRITTO IN PHP 5 OOP////////////////////////////////////
/////////////////E' VIETATA LA COPIA/////////////////////////////////////
//////////////////O LA QUALSIASI VIOLAZIONE DI COPYRIGHT////////////////
/*////////////////////////////////////////////////////////////////////*/

require_once("generale.php");

$sessioni = new sessioni($mysql,'gioca');


$template = new template($config,'gioca');

$data = array();
$sito = $mysql->esegui(array("QUERY" => "SELECT nome,mex_top,mex_index FROM sito LIMIT 1"));
$data['titolo'] = $sito['nome'].' - Gioca';
$data['host'] = '127.0.0.1';
$data['porta'] = '1232';
$data['ip'] = '127.0.0.1';
$data['variables'] = 'http://static.jabboitalia.com/gamedata/vars.php';
$data['texts'] = 'http://static.jabboitalia.com/gamedata/texts.txt';
$data['productdata'] = 'http://static.jabboitalia.com/gamedata/product.txt';
$data['furnidata'] = 'http://static.jabboitalia.com/gamedata/furni.txt';
$data['sso'] = $mysql->GenerateTicket();
$mysql->esegui(array("QUERY" => 'UPDATE users SET auth_ticket = :auth , ip_last = :ip , last_online = UNIX_TIMESTAMP() WHERE username = :username',':auth' => $data['sso'],':ip' => $mysql->get_ip(),':username' => $sessioni->utente['username']));
$data['swf'] = 'http://static.jabboitalia.com/gordons/officials/Habbo.swf';
$data['base'] = 'http://static.jabboitalia.com/gordons/officials/';
$data['utente'] = $sessioni->utente;
$template->load_template($data);
$mysql->close();
