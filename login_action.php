<?php 
require 'config.php';

$email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
$password = filter_input(INPUT_POST, 'password');

if($email && $password){

    $sql = $pdo->prepare("SELECT * FROM users WHERE email=:email");
    $sql->bindValue(":email", $email);
    $sql->execute();

    if($sql->rowCount() > 0){

        header("location: dashboard.php");
        exit;

    }
    else {
        header("location: index.php");
        exit;
    }

} else {
    header("location: index.php");
    exit;
}

?>