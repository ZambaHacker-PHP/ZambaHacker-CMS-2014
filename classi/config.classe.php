<?php
/*/////////////////////////////////////////////////////////////////////////*/
//////////////////CMS CREATO INTERAMENTE DA ZAMBAHACKER////////////////////
//////////////////SCRITTO IN PHP 5 OOP////////////////////////////////////
/////////////////E' VIETATA LA COPIA/////////////////////////////////////
//////////////////O LA QUALSIASI VIOLAZIONE DI COPYRIGHT////////////////
/*////////////////////////////////////////////////////////////////////*/

class config
{

    #--------- CONFIGURAZIONE MYSQL--#
    const host = '127.0.0.1'; #host mysql
    const port = 3306; #porta mysql
    const username = 'root'; #username mysql
    const password = 'gege22'; #password mysql
    const db = 'ueb'; #nome database

    #--------- CONFIGURAZIONE ERRORI--#
    const mysql_errori = 1; #errori mysql
    const mysql_log_errori = 1; #log degli errori
    const log_query = 1; #log_query si consiglia disabilitarle
    const php_errori = 1; #errori php si consiglia disabilitarle
    const log_mus = 0; #log comandi mus 
    #---------------------------------#


    
    public $tema = 'Default'; // nome del tema
    public $colore = 'blu'; // colore predefinito del cms , vale solo per il tema Default
    public $url_sito = '127.0.0.1'; // url del sito web
    public $appid = '1424531624443612'; // app id facebook
    public $secret = '9c6954db44b138b96dcc0e80e36f9e41';//secret id facebook
    public function __construct(){

        if(self::php_errori == 1){

            ini_set('display_errors', 1);

        }

   
    }
}
