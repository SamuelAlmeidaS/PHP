<?php
$db_user = "root";
$db_host = "127.0.0.1";
$db_name = "test";

$pdo = new PDO("mysql:dbname=".$db_name.";host=".$db_host,$db_user);

?>