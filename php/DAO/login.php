<?php
  include_once "conexao.php";

  function login($user, $psw){
    $connection = cria_conexao();
    $sql = "select * from usuario where usuario = ".$user." and senha = ".$psw;
    $resultado = mysqli_query($connection, $sql);
    echo "<b>".$resultado."</b>";
    $alunos =mysql_fetch_array($resultado);
    print_r($alunos);
    mysql_close();
    return $alunos;
}

?>
