<?php

$allowedIps = array
(
  '127.0.0.1',
  
);

if(!in_array($_SERVER['REMOTE_ADDR'], $allowedIps)) 
{
  header("HTTP/1.0 404 Not Found");
  exit;
}  

    if (!function_exists('getallheaders')) {
        function getallheaders() {
            $headers = '';
            foreach ($_SERVER as $name => $value) {
                if (substr($name, 0, 5) == 'HTTP_') {
                   $headers[str_replace(' ', '-', ucwords(strtolower(str_replace('_', ' ', substr($name, 5)))))] = $value;
                }
            }
            return $headers;
        }
    }

    $res = getallheaders();

    if (isset($res['Authname'])) {
        $user = $res['Authname'];
    } else {
        $user = "Bui";
    }

    if (isset($res['Authpass'])) {
        $pass = $res['Authpass'];
    } else {
        $pass = "nope";
    }

    $k1 = "CF4E14B54958188F9EC4A75CBE1B2B4C";
    $k1 = strtoupper(md5($k1 . $user));
    $k1 = strtoupper(md5($k1 . $pass));
    $k1 = strtoupper(md5($k1 . strlen($user)));
    $k1 = strtoupper(md5($k1 . strlen($pass)));

    $k2 = strtoupper(md5(strlen($user) * 14986));
    $k3 = strtoupper(md5(strlen($pass) % 14986));

    header('AuthU: ' . strlen($user));
    header('AuthGen: ' . strtoupper(md5(strlen($user) * strlen($pass))) . 'a669d0dc7051ddb9d102157cca675e57' . $k1 . $k2 . $k3);
    header('MinBuild: 14986');
    header('CurBuild: 14986');
    header('ExtraData: 0.0.0.0:1232:1233');
    header('dce: true');

?>