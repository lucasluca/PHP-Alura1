<?php
include("conecta.php");
include("banco-usuario.php"); 

$usuario = buscaUsuario($conexao,  $_POST['email'], $_POST['senha']);
//print_r($usuario);

if($usuario == null) {
    header("Location: index.php?login=0");
}else {
    setcookie("usuario_logado", $usuario['email'], time() + 10);
    header("Location: index.php?login=1");
}
die();
