<?php

	//recebe valores do form
	$login = $_POST['txtLogin'];
	$senha = md5($_POST['txtSenha']);
	$entrar = $_POST['btnEntrar'];

	include 'conexao.php';
	
	if (isset($entrar)) {

		$validarUsuario = mysqli_query($conexao, "SELECT * FROM USUARIOS WHERE LOGIN = '$login' AND SENHA = '$senha'") or die("ERRO");

		if (mysqli_num_rows($validarUsuario) <= 0) {

			echo"	<script language='javascript' type='text/javascript'>alert('Usuário ou senha incorretos');
					window.location.href='index.html';
					</script>";
			die();
		}else{

			setcookie("txtLogin", $login);
			header("Location:menu.php");

		}
	}

	mysqli_close($conexao);

?>