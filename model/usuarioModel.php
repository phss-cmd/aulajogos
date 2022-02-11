<?php

function inserirUsuario ($conn,$nomeusu,$emailusu,$foneusu,$cpfusu,$cepusu,$numusu,$compleusu,$tipousu){
    $query = "INSERT INTO `tbusuario` (`idusu`, `nomeusu`, `emailusu`, `foneusu`, `tipousu`, `cpfusu`, `cepusu`, `numusu`, `compleusu`) VALUES (NULL, {$nomeusu},{$emailusu},{$foneusu},{$cpfusu},{$cepusu},{$numusu},{$compleusu},{$tipousu}')";
    $dados = mysqli_query($conn,$query);
    return $dados;
    
}


?>