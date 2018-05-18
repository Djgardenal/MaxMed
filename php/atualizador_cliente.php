<?php
	include_once "DAO/clienteDAO.php";
	session_start();

	if($_SESSION['logado'] === true){
	  if (atualiza_cliente($_GET['id'], $_GET['endereco'], $_GET['telefone'], $_GET['empresa'], $_GET['email'])) {
	    header('location: home.php');
	  } else {
	    echo "Erro ao atualizar cliente no BD";
	  }
	}else {
		header('location:../html/index.html');
	}
 ?>
