<?php
	include_once "DAO/clienteDAO.php";
	session_start();

	if($_SESSION['logado'] === true){
	  if (exclui_cliente($_GET['id'])) {
	    header('location: home.php');
	  } else {
	    echo "Erro ao excluir cliente no BD";
	  }
	}else {
		header('location:../html/index.html');
	}
	
?>
