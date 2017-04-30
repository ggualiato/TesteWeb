<!DOCTYPE html>
<html lang="pt-br">
<head>
	<title>Histórico</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta charset="utf-8">
	<link rel="stylesheet" href="bootstrap-3.3.7-dist/css/bootstrap.min.css">
  	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
  	<script href="bootstrap-3.3.7-dist/js/bootstrap.min.js"></script>
  	<style type="text/css">
  		body{
  			background: #F4A460;
  		}

  		table, th, td { 
			
			border: 1px solid black; 
  		}
	</style>
</head>

<body>

	<div class="jumbotron text-center">
	 	<h1>Teste Valemobi</h1>
	</div>

	<form method="POST" action="historicoprodutos.php">
		<div class="container">

			<div class="row">
				<div class="col-md-3">
					<h3>Pesquisar por:</h3>
				</div>
			</div>

			<div class="row">
				<div class="col-md-3">
					<select class="form-control" value="cbbHistNegoc" name="cbbHistNegoc">
						<option value="Todos">Todos</option>
						<option value="Vender">Vendas</option>
						<option value="Comprar">Compras</option>
					</select>
				</div>

				<div class="col-md-3">
					<button type="submit" class="btn btn-default" name="procurarHistorico" style="position: bottom;">Apresentar Histórico</button>
				</div>

				<div class="col-md-3">
					<a href="menu.php">Voltar <img src="imagens/voltar.png" class="img-rounded" alt="Cinque Terre" width="30px" height="30px" href="index.html"></a>
				</div>
			</div>

			<hr>

		</div>

		<div style=" margin-left: 60px; margin-top: 8px; float: left;">
			
		</div>
	</form>
	
	<div class="container">    
  		<table class="table" style="background: #F5F5DC;">
    		<thead>
      			<tr>
		  			<th><h4>ID da negociação</h4></th>
					<th><h4>Tipo do produto</h4></th>
					<th><h4>Nome</h4></th>
					<th><h4>Quantidade</h4></th>
					<th><h4>Preço</h4></th>
					<th><h4>Operação</h4></th>
      			</tr>
    		</thead>
    		<tbody>
    			<?php
    				//conexao banco
					include 'conexao.php';

					//variaveis do form
					$filtroNegociacao = $_POST['cbbHistNegoc'];
					$login_ck = $_COOKIE['txtLogin'];
					$btnProcurarHist = $_POST['procurarHistorico'];

					//quando o botão for acionado
					if (isset($btnProcurarHist)) {

						//definino query de selecao para o filtro
						if ($filtroNegociacao === "Todos") {
							$q_select = "SELECT * FROM mercadoria WHERE user_login = '$login_ck'";
						}else{
							$q_select = "SELECT * FROM mercadoria WHERE NEGOCIO ='$filtroNegociacao' AND user_login = '$login_ck'";
						}

						$selecao = mysqli_query($conexao, $q_select);

						//imprimindo registros na tabela
						while ($linha = mysqli_fetch_array($selecao)) {

							$id_mercadoria = $linha['id_mercadoria'];
							$tipo = $linha['tipo'];
							$nome = $linha['nome'];
							$qtd = $linha['qtd'];
							$preco = $linha['preco'];
							$negocio = $linha['negocio'];

							echo "<tr><th>$id_mercadoria</th><th>$tipo</th><th>$nome</th><th>$qtd unidades</th><th>R$ $preco</th><th>$negocio</th><tr>";
						}
					}
					mysqli_close($conexao);
				?>
    		</tbody>
  		</table>
	</div>
</body>
</html>