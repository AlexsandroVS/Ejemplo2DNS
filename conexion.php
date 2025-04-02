<?php

function conexion(){

$host = "host=dpg-cvmpkk6mcj7s73bqum8g-a.oregon-postgres.render.com";
$port = "port=5432";
$dbname = "dbname=test_ww0l";
$user = "user=darkness";
$password = "password=03tppNTXMmrzFDFriBfPGpaQ99VDrTYr";

$db = pg_connect("$host $port $dbname $user $password");

return $db;
}
?>