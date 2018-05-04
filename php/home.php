
<?php
  include_once "DAO/clienteDAO.php";
?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title></title>

    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
  </head>
  <body>
	<div class="container">
		<div class="panel panel-info">
			<div class="panel-heading">
				<h3 class="panel-title">MaxMed</h3>
			</div>
			<table class="table table-striped">
				<thead>
					<th>Nome</th>
					<th>Plano</th>
				</thead>
				<tbody>
					<?php
					  $x = retornaClientes();
					  foreach ($x as $y) {
					?>
					<tr>
						<td><?php echo $y['nome']; ?></td>
						<td><?php echo $y['tipo_plano']; ?></td>
						<td>
						  <a href="../php/visualiza_cliente.php?id=<?php echo $y['id']; ?>">
							<span class="glyphicon glyphicon-user" aria-hidden="true"></span>
						  </a>
						</td>
						<td>
						  <a href="../php/exclui_cliente.php?id=<?php echo $y['id']; ?>">
							<span class="glyphicon glyphicon-trash" aria-hidden="true"></span>
						  </a>
						</td>
						<td>
						  <a href="../php/atualiza_cliente.php?id=<?php echo $y['id']; ?>">
							<span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>
						  </a>
						</td>
					</tr>
					<?php } ?>
				</tbody>
			</table>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
		</div>
		<span class="glyphicon glyphicon-plus" aria-hidden="true"></span>
		<a href="adiciona_cliente.html">Adicionar Cliente</a>
	</div>
  </body>
</html>
