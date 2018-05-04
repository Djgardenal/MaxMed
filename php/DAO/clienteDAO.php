<?php
include_once 'conexao.php';
function retornaClientes(){
  $connection = cria_conexao();
  $sql = "SELECT a.*, planos.tipo_plano FROM cliente a INNER JOIN planos ON planos.id = a.tipo_plano ORDER BY nome ASC";
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

function retornaCliente($id_cliente){
	$connection = cria_conexao();
	
	$sql = "SELECT a.nome, a.sexo, a.email, a.telefone, a.data_nascimento, a.local_nascimento, a.endereco, a.empresa, b.tipo_plano FROM cliente a INNER JOIN planos b ON a.tipo_plano = b.id where a.id = '".$id_cliente."' ORDER BY a.nome";
	
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

function retornaDependentes($id_cliente){
	$connection = cria_conexao();
		
	$sql = "SELECT dependentes.nome, parentescos.descricao FROM cliente INNER JOIN dependentes ON cliente.id = dependentes.titular INNER JOIN parentescos ON dependentes.parentesco = parentescos.id WHERE cliente.id = '".$id_cliente."'";
	
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

function exclui_cliente($id_cliente) {
  $connection = cria_conexao();

  $sql = "delete from cliente where id ='".$id_cliente."'";

  if (mysqli_query($connection, $sql)) {
    return true;
  } else {
    return false;
  }
}


?>
