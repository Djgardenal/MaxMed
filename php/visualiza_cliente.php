
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
				<h3 class="panel-title">Cliente</h3>
			</div>
			<?php
				$x = retornaCliente($_GET['id']);
				foreach ($x as $y) {
			?>
			<div class="container">
				<div class="col-md-4">
					<label for="nome">Nome</label>
					<p><?php echo $y['nome']; ?></p>
				</div>
				<div class="col-md-4">
					<label for="local-nascimento">Local de Nascimento</label>
					<p><?php echo $y['local_nascimento']; ?></p>
				</div>
				<div class="col-md-4">
					<label for="data-nascimento">Data de Nascimento</label>
					<p><?php echo $y['data_nascimento']; ?></p>
				</div>
			</div>

			<div class="container">
				<div class="col-md-4">
					<label for="sexo">Sexo</label>
					<p><?php echo $y['sexo']; ?></p>
				</div>
				<div class="col-md-4">
					<label for="endereco">Endereço</label>
					<p><?php echo $y['endereco']; ?></p>
				</div>
				<div class="col-md-4">
					<label for="telefone">Telefone</label>
					<p><?php echo $y['telefone']; ?></p>
				</div>
			</div>

			<div class="container">
				<div class="col-md-4">
					<label for="email">Email</label>
					<p><?php echo $y['email']; ?></p>
				</div>
				<div class="col-md-4">
					<label for="empresa">Empresa</label>
					<p><?php echo $y['empresa']; ?></p>
				</div>
				<div class="col-md-4">
					<label for="plano-escolhido">Plano Escolhido</label>
					<p><?php echo $y['tipo_plano']; ?></p>
				</div>
			</div>

			<br>

			<div class="container">
				<div class="col-md-10">
					<label for="dependentes">Dependentes</label>
					<table class="table table-striped table-bordered">
						<thead>
							<th>Nome</th>
							<th>Parentesco</th>
						</thead>
						<tbody>
							<?php
								$a = retornaDependentes($_GET['id']);
								foreach ($a as $b) {
							?>
							<tr>
								<td><?php echo $b['nome']; ?></td>
								<td><?php echo $b['descricao']; ?></td>
							</tr>
							<?php } ?>
						</tbody>
					</table>
				</div>
			</div>
			<?php } ?>
		</div>
		<span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>
		<a href="../php/atualiza_cliente.php?id=<?php echo $_GET['id']; ?>">Atualizar Cliente <?php echo $_GET['id']; ?></a>
	</div>
	<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
  </body>
</html>
