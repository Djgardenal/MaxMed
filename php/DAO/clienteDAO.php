<?php
  include_once 'conexao.php';
  function retornaClientes(){
    $connection = cria_conexao();
    $sql = "SELECT * FROM cliente INNER JOIN planos ON planos.id = cliente.tipo_plano ORDER BY nome ASC";
    try {
      $resultado = mysqli_query($connection, $sql);
      $alunos = array();
      while ($a = mysqli_fetch_assoc($resultado)) {
        array_push($alunos, $a);
      }
      $resultado->close();
    } catch (\Exception $e) {
      echo $e->getMessage();
    }
    return $alunos;
  }



?>
