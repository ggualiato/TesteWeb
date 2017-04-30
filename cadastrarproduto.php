<?php
	
	//conexao banco
	include 'conexao.php';

	//variaveis do form
	$login_ck = $_COOKIE['txtLogin'];
	$tipoProduto = $_POST['cbbTipo'];
	$nomeProduto = $_POST['nomeProd'];
	$qtdProduto = $_POST['qtdProd']; 
	$precoProduto = $_POST['precoProd'];
	$tipoNegocio = $_POST['cbbNegoc'];

	//query de inserção
	$q_insert = "INSERT INTO mercadoria (user_login, tipo, nome, qtd, preco, negocio) VALUES ('$login_ck','$tipoProduto', '$nomeProduto', '$qtdProduto', '$precoProduto', '$tipoNegocio')";
	$insert = mysqli_query($conexao, $q_insert);

	//Validação de cadastro
	if($insert){
		echo"	<script language='javascript' type='text/javascript'>window.alert('Negociacao feita com sucesso!');
				window.location.href='cadastrarproduto.html';
				</script>";
	}else{
		echo"	<script language='javascript' type='text/javascript'>window.alert('Nao foi possivel realizar essa operacao');
				window.location.href='cadastrarproduto.html';
				</script>";
	}
	mysqli_close($conexao);
?>