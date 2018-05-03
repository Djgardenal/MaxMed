<?php
include_once "DAO/login.php";

  $user = $_POST['user'];
  $psw = $_POST['senha'];
  $usuario = login($user, $psw);

  if(count($usuario) == 1 &&
    $user == $usuario['0']['usuario'] && $psw == $usuario['0']['senha']){
    $_SESSION['user'] = $user;
    $_SESSION['logado']= $psw;
    header('location:home.php');
  }else {
    header('location:../html/index.html');
  }
 ?>
