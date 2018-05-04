<?php
  include_once "DAO/clienteDAO.php";

  print_r($_POST);

  if($_SESSION['logado'] == true){
    $retorno = cadastro();
    if($retorno){
      header('location:home.php');
    }
  }else{
    header('location:../html/index.html');
}

 ?>
