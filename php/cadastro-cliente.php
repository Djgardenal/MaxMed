<?php
  include_once "DAO/clienteDAO.php";
  session_start();

  if($_SESSION['logado'] === true){
    echo "teste";
    $retorno = insereCliente($_POST['nome'], $_POST['nome'] , $_POST['email'],
    $_POST['telefone'], $_POST['data-nascimento'], $_POST['local-nascimento'],
    $_POST['endereco'], $_POST['empresa'], $_POST['plano-escolhido']);
    if($retorno){
      header('location:home.php');
    }else {
      echo "$retorno";
    }
  }else{
    header('location:../html/index.html');
  }

?>
