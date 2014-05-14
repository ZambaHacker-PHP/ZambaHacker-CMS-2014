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

?>
127.0.0.1