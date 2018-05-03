<?php
include_once "DAO/login.php";

  $user = $_POST['user'];
  $psw = $_POST['senha'];
  login($user, $psw);
  if($user=="x" && $psw == "x"){
    $_SESSION['user'] = $user;
    $_SESSION['logado']= $psw;
    header('location:home.php');
  }else {
  //  header('location:../html/index.html');
  }
 ?>
