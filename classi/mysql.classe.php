<?php
/*/////////////////////////////////////////////////////////////////////////*/
//////////////////CMS CREATO INTERAMENTE DA ZAMBAHACKER////////////////////
//////////////////SCRITTO IN PHP 5 OOP////////////////////////////////////
/////////////////E' VIETATA LA COPIA/////////////////////////////////////
//////////////////O LA QUALSIASI VIOLAZIONE DI COPYRIGHT////////////////
/*////////////////////////////////////////////////////////////////////*/

class mysql
{

    private $file_errori;
    private $file_log;
    private $mus_log;

    protected $con;
    private $config;
    
    static $var = 0;

    public function __construct($config)
    {
        self::$var++;
        $this->file_errori =  $_SERVER['DOCUMENT_ROOT'].'\log\errori_mysql.log';
        $this->file_log = $_SERVER['DOCUMENT_ROOT'].'\log\log_query.log';
        $this->mus_log =  $_SERVER['DOCUMENT_ROOT'].'\log\log_mus.log';
        $this->config = $config;
        $db_options = array(

            PDO::ATTR_EMULATE_PREPARES => false,
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC);

        $col = 'mysql:host=' . config::host . ';dbname=' . config::db;

        try {

            $this->con = new PDO($col, config::username, config::password, $db_options);
        }

        catch (PDOException $e) {

            $this->errori_mysql($e->getMessage(), null);

        }
    }

    public function data($time = 'adesso')
    {

        date_default_timezone_set("Europe/Berlin");

        if ($time == 'adesso') {
            $H = date('H');
            $i = date('i');
            $s = date('s');
            $m = date('n');
            $d = date('d');
            $Y = date('Y');


            $row = date('d-m-Y H:i:s', mktime($H, $i, $s, $m, $d, $Y));

        } else {

            $row = date('d-m-Y H:i:s', $time);
        }

        return $row;

    }

    public function data_now()
    {

        date_default_timezone_set("Europe/Berlin");

        $row = time();

        return $row;

    }

    private function errori_mysql($errore, $query)
    {

        if (config::mysql_errori == 1) {

            echo 'Errore nella esequzione della query: ' . $errore;

        }

        if (config::mysql_log_errori == 1) {

            $var = fopen($this->file_errori, "a");
            fwrite($var, $this->data() . ': Errore: ' . $errore . ' Query: ' . $query . "\r\n\r\n");
            fclose($var);

        }

    }

    private function log_query($query)
    {

        if (config::log_query == 1) {

            $var = fopen($this->file_log, "a");
            fwrite($var, $this->data() . ': Query: ' . $query . "\r\n\r\n");
            fclose($var);

        }

    }

    public function esegui($query, $fetch = 'fetch', $num = FALSE)
    {

        try {

            $sql = $this->con->prepare($query['QUERY']);

            foreach ($query as $key => &$value) {

                if ($key != 'QUERY') {

                    $value = $this->filtro($value);
                    $sql->bindParam($key, $value);

                }

            }

            $sql->execute();
            $querylog = json_encode($query);
            $this->log_query($querylog);

            if ($fetch == 'all') {

                $query = $sql->fetchAll(PDO::FETCH_ASSOC);

            } elseif ($fetch == 'fetch') {

                $query = $sql->fetch(PDO::FETCH_ASSOC);

            }

            if($num === TRUE){

                if(!is_array($query)){

                    $query = array();
                }

                $num = array("NUM" => $sql->rowCount());
                $query = array_merge($query, $num);

            }

        }

        catch (PDOException $e) {

            $this->errori_mysql($e->getMessage(), json_encode($query));
            $query = array('errore' => $e->getMessage());

        }

        return $query;

    }

    private function filtro($str)
    {


       

        return $str;
    }


    #---------------------------- FUNZIONI DEL CMS --------------------------------#


    public function crypt($string, $key)
    {
        $result = '';

        for ($i = 0; $i < strlen($string); $i++) {

            $char = substr($string, $i, 1);
            $keychar = substr($key, ($i % strlen($key)) - 1, 1);
            $char = chr(ord($char) + ord($keychar));
            $result .= $char;

        }

        return base64_encode($result);
    }

    public function crypt_pass($pass)
    {

        $pass = sha1($pass);

        return $pass;

    }
    

    public function mus($header, $data='')
    {

        $musData = $header . chr(1) . $data;
        $sock = @socket_create(AF_INET, SOCK_STREAM, getprotobyname('tcp'));
        @socket_connect($sock, '127.0.0.1', '444');
        @socket_send($sock, $musData, strlen($musData), MSG_DONTROUTE);
        @socket_close($sock);

    }

    public function get_ip()
    {

        $query = $this->esegui(array("QUERY" => "SELECT cloud FROM sito"));
        $cloud = $query['cloud'];

        if($cloud == 1){

            $ip = $_SERVER["HTTP_CF_CONNECTING_IP"];
            return $ip;

        }elseif($cloud == 0){

            $ip = $_SERVER["REMOTE_ADDR"];
            return $ip;

        }

    }
    
    
    public function GenerateTicket()
    {
        
        $data = "";

        for ($i=1; $i<=6; $i++){
        $data = $data . rand(0,10);
        
        }
    
        $data = $data . "";
            
        for ($i=1; $i<=20; $i++){
        $data = $data . rand(0,10);
    	}

        $data = $data . "";
        $data = $data . rand(0,10);

        return $data;
    
    }
    
    public function xss_clean($data)
    {

        $data = str_replace(array('&amp;','&lt;','&gt;'), array('&amp;amp;','&amp;lt;','&amp;gt;'), $data);
        $data = preg_replace('/(&#*\w+)[\x00-\x20]+;/u', '$1;', $data);
        $data = preg_replace('/(&#x*[0-9A-F]+);*/iu', '$1;', $data);
        $data = html_entity_decode($data, ENT_COMPAT, 'UTF-8');


        $data = preg_replace('#(<[^>]+?[\x00-\x20"\'])(?:on|xmlns)[^>]*+>#iu', '$1>', $data);

        
        $data = preg_replace('#([a-z]*)[\x00-\x20]*=[\x00-\x20]*([`\'"]*)[\x00-\x20]*j[\x00-\x20]*a[\x00-\x20]*v[\x00-\x20]*a[\x00-\x20]*s[\x00-\x20]*c[\x00-\x20]*r[\x00-\x20]*i[\x00-\x20]*p[\x00-\x20]*t[\x00-\x20]*:#iu', '$1=$2nojavascript...', $data);
        $data = preg_replace('#([a-z]*)[\x00-\x20]*=([\'"]*)[\x00-\x20]*v[\x00-\x20]*b[\x00-\x20]*s[\x00-\x20]*c[\x00-\x20]*r[\x00-\x20]*i[\x00-\x20]*p[\x00-\x20]*t[\x00-\x20]*:#iu', '$1=$2novbscript...', $data);
        $data = preg_replace('#([a-z]*)[\x00-\x20]*=([\'"]*)[\x00-\x20]*-moz-binding[\x00-\x20]*:#u', '$1=$2nomozbinding...', $data);

        $data = preg_replace('#(<[^>]+?)style[\x00-\x20]*=[\x00-\x20]*[`\'"]*.*?expression[\x00-\x20]*\([^>]*+>#i', '$1>', $data);
        $data = preg_replace('#(<[^>]+?)style[\x00-\x20]*=[\x00-\x20]*[`\'"]*.*?behaviour[\x00-\x20]*\([^>]*+>#i', '$1>', $data);
        $data = preg_replace('#(<[^>]+?)style[\x00-\x20]*=[\x00-\x20]*[`\'"]*.*?s[\x00-\x20]*c[\x00-\x20]*r[\x00-\x20]*i[\x00-\x20]*p[\x00-\x20]*t[\x00-\x20]*:*[^>]*+>#iu', '$1>', $data);


        $data = preg_replace('#</*\w+:\w[^>]*+>#i', '', $data);

        do
        {

	       $old_data = $data;
	       $data = preg_replace('#</*(?:applet|b(?:ase|gsound|link)|embed|frame(?:set)?|i(?:frame|layer)|l(?:ayer|ink)|meta|object|s(?:cript|tyle)|title|xml)[^>]*+>#i', '', $data);
        }
        while ($old_data !== $data);


        return $data;
        
    }
    
    public function close()
    {
        $this->con = null;
    }
    



}
