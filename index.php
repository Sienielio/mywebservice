<?php
header('Access-Control-Allow-Origin:*');

header('Content-Type: application/json');

$data = array (
    'message' => 'Hello from PHP server!',
    'origin' => 'http://localhost'
/*     array('firstname' => 'Roosa', 'lastname' => 'Rautio', 'email' => 'rrautio@oamk.fi'),
    array('firstname' => 'Roosa', 'lastname' => 'Rautio', 'email' => 'rrautio@oamk.fi'),
    array('firstname' => 'Roosa', 'lastname' => 'Rautio', 'email' => 'rrautio@oamk.fi'),
    array('firstname' => 'Roosa', 'lastname' => 'Rautio', 'email' => 'rrautio@oamk.fi') */
); 

$json = json_encode($data, JSON_PRETTY_PRINT);
print $json;