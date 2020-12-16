<?php
require_once('ControllerUsuario.php');

use controllers\ControllerUsuario;
session_start();

if (isset($_POST['login']) && isset($_POST['senha'])){

    $login = $_POST['login'];
    $senha = $_POST['senha'];

    try{
        $ctrlUsuario = new ControllerUsuario();
        $usuario =  $ctrlUsuario ->fazerLogin($login,$senha);
       
        $_SESSION['usuario']= serialize($usuario);
        header("Location:../../views/main.php");
    }catch(\Exception $e){
        

        $_SESSION['errologin']= $e-> getMessage();
        header("Location: ../../index.php");

    }
}else{
    $_SESSION['errologin']= "você precisa fazer login para acesso ao sistema";
    header("Location: ../../index.php");  
}



?>