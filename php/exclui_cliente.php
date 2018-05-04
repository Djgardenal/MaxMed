<?php

  include_once "DAO/clienteDAO.php";
  
  if (exclui_cliente($_GET['id'])) {
    header('location: home.php');
  } else {
    echo "Erro ao excluir cliente no BD";
  }

 ?>