<!DOCTYPE html>
<html lang="pt-br">
<head>
	<title>Menu</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta charset="utf-8">
	<link rel="stylesheet" href="bootstrap-3.3.7-dist/css/bootstrap.min.css">
  	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
  	<script href="bootstrap-3.3.7-dist/js/bootstrap.min.js"></script>
  	<style type="text/css">
  		body{
  			background: #F4A460;
  		}
  	</style>
</head>

<body>

	<div class="jumbotron text-center">
	  <h1>Teste Valemobi</h1>
	</div>

	<div class="container" >

		<div class="row">
			<div class="col-md-6">
				<?php 
					$login_ck = $_COOKIE['txtLogin'];
					echo "<h2>Bem vindo $login_ck</h1>";
				?>
			</div>
			
		</div>

		<hr>

		<div class="row">
			<div class="col-md-1">
				<button type="button" class="btn btn-default" value='Negociar' onclick="javascript: location.href='cadastrarproduto.html';" name="btnNegociar" id="btnNegociar">Negociar</button>	
			</div>	
			<div class="col-md-4">
				<button type="button" class="btn btn-default" value='Histórico de negociação' onclick="javascript: location.href='historicoprodutos.php';" name="historicoNeg" id="btnNegociar">Histórico de Negociações</button>
			</div>	
		</div>

		<hr>

		<div class="row">
			<div class="col-md-4">
				<a href="index.html" onclick="zerar_cookie.php">SAIR <img src="imagens/sair.png" class="img-rounded" alt="Cinque Terre" width="30px" height="30px" href="index.html"></a>
				
			</div>
		</div>

	</div>
</body>
</html>