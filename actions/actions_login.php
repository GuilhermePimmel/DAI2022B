
<?php
session_start();

$conexao = require('../database/config.php');

$usuario = $_POST["user"];
$senha = $_POST["psw"];

$sql = "SELECT * FROM usuario WHERE login = :login AND senha = md5(:senha)";

$statement = $conexao->prepare($sql);
$statement->bindValue(":login", $usuario);
$statement->bindValue(":senha", $senha);

$statement->execute();
$retorno = $statement ->fetch(PDO::FETCH_ASSOC);
if($retorno){
    echo "Olá {$retorno["nome"]}";
}else{
    $_SESSION["erro"] = "Dados de acesso inválidos";
    header('Location: ../login.php');
}

//pegar os dados que vieram no formulário
//e testar se são válidos