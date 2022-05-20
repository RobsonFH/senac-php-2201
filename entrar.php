<?php
session_start();

require_once 'conexao.php';

$email = trim($_POST['email']?? '');
$senha = trim($_POST['senha']?? '');

if(empty($email) || empty($senha)){

    header('location: index.php');
}

$stmt = $bd->prepare("SELECT senha FROM usuarios WHERE id = :email");

$stmt->bindParam(':email', $email); //substituição de label
$stmt->execute();
$val = $stmt->fetch(PDO: :FETCH_ASSOC);

if( password_verify( $senha, $val['senha']) ){

    $_SESSION['id'] = $email;

    header('location: index.php');

    echo "Seja bem-vindo(a)";

}else{

    echo "Credenciais invalidas";
}