
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
				<h3 class="panel-title">Atualizar Cliente</h3>
			</div>

			<form action="../php/atualizador_cliente.php">
				<div class="form-row">
					<input type="hidden" name="id" value="<?php echo $_GET['id']; ?>">

					<?php
						$x = retornaCliente($_GET['id']);
						foreach ($x as $y) {
					?>

					<div class="form-group col-md-6">
						<label for="nome">Nome</label>
						<input type="text" class="form-control" name="nome" value="<?php echo $y['nome']; ?>" readonly>
					</div>
					<div class="form-group col-md-6">
						<label for="plano-escolhido">Plano Escolhido</label>
						<input type="text" class="form-control" name="plano-escolhido" value="<?php echo $y['tipo_plano']; ?>" readonly>
					</div>
				</div>

				<div class="form-row">
					<div class="form-group col-md-4">
						<label for="local-nascimento">Local de Nascimento</label>
						<input type="text" class="form-control" name="local-nascimento" value="<?php echo $y['local_nascimento']; ?>" readonly>
					</div>
					<div class="form-group col-md-4">
						<label for="Data de Nascimento">Data de Nascimento</label>
						<input type="text" class="form-control" name="data-nascimento" value="<?php echo $y['data_nascimento']; ?>" readonly>
					</div>
					<div class="form-group col-md-4">
						<label for="Sexo">Sexo</label>
						<input type="text" class="form-control" name="sexo" value="<?php echo $y['sexo']; ?>" readonly>
					</div>
				</div>

				<div class="form-group col-md-12">
					<label for="endereco">Endereço</label>
					<input type="text" class="form-control" name="endereco" id="endereco" value="<?php echo $y['endereco']; ?>">
				</div>

				<div class="form-row">
					<div class="form-group col-md-6">
						<label for="telefone">Telefone</label>
						<input type="text" class="form-control" name ="telefone" id="telefone" value="<?php echo $y['telefone']; ?>">
					</div>
					<div class="form-group col-md-6">
						<label for="empresa">Empresa</label>
						<input type="tetext" id="empresa" name="empresa" class="form-control" value="<?php echo $y['empresa']; ?>">
					</div>
				</div>

				<div class="form-row form-group col-md-12">
					<label for="email">Email</label>
					<input type="email" class="form-control" name="email" id="email" value="<?php echo $y['email']; ?>">
				</div>

				<?php } ?>

				<div class="form-row col-md-12">
					<button type="submit" class="btn btn-primary">Atualizar</button>
				</div>
			</form>
		</div>
	</div>
	<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
		<!-- Include all compiled plugins (below), or include individual files as needed -->
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
	</body>
</html>
