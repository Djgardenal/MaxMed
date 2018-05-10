<?php

  include_once "DAO/clienteDAO.php";

  if (atualiza_cliente($_GET['id'], $_GET['endereco'], $_GET['telefone'], $_GET['empresa'], $_GET['email'])) {
    header('location: home.php');
  } else {
    echo "Erro ao atualizar cliente no BD";
  }

 ?>
