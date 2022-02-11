<?php
include_once ("../model/conexao.php");
include_once ("../model/usuarioModel.php");
extract($_REQUEST,EXTR_OVERWRITE);

if(inserirUsuario($conn,$nomeusu,$emailusu,$foneusu,$cpfusu,$cepusu,
$numusu,$compleusu,$tipousu)){
echo("O perfil foi cadastrado com sucesso!!");
}else{
echo("Não foi possivel cadastrar seus dados.");
}

?>