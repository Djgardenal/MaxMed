<?php

  include_once "DAO/clienteDAO.php";

  // print_r($_GET);
  // die();

  if (exclui_cliente($_GET['id'])) {
    header('Location: index.php');
  } else {
    echo "Erro ao excluir carro no BD";
  }

 ?>