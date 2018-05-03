<?php
  include_once "conexao.php";

  function login($user, $psw){
    $connection = cria_conexao();
    $sql = "select * from usuario where usuario = '".$user."' and senha = '".$psw."'";
    try {
      $resultado = mysqli_query($connection, $sql);
      $alunos = array();
      while ($a = mysqli_fetch_assoc($resultado)) {
        array_push($alunos, $a);
      }
      mysqli_close($connection);
      return $alunos;
    } catch (\Exception $e) {
        echo $e->getMessage();
    }
  }

?>
