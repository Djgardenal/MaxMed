<?php


  function cria_conexao(){

    $local = 'localhost';
    $user = 'root';
    $password ='root';
    $nm_banco = 'maxmed';

    $conexao = mysqli_connect($local, $user, $password, $nm_banco);

    if (mysqli_connect_errno()) {
      echo "Erro ao criar conexao";
      echo "<br>";
      die("Connection error: " . mysqli_connect_error());
    } else {
    // echo "Conexao efetuada com sucesso";
  }

  return $conexao;
}



?>
