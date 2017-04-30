<?php
	//recebe varlores do form
	$login = $_POST['txtLogin'];
	$senha = md5($_POST['txtSenha']);

	//conexao com o bd
	include 'conexao.php';

	//query de seleção
	$q_select = "SELECT LOGIN FROM USUARIOS WHERE LOGIN = '$login'";
	$select = mysqli_query($conexao, $q_select);
	$array = mysqli_fetch_array($select);
	$logarray = $array['txtLogin'];

	//validações de cadastro
	if($login == "" || $login == null){

		echo"	<script language='javascript' type='text/javascript'>alert('O campo login deve ser preenchido');
				window.location.href='cadastrousuario.html';
				</script>";

	}else{

		if ($logarray == $login) {

			echo"	<script language='javascript' type='text/javascript'  charset='utf-8'> alert('LOGIN JÁ EXISTE');
					window.location.href='cadastrousuario.html';
					</script>";
			die();

		}else{
			//query de inserção
			$q_insert = "INSERT INTO USUARIOS (LOGIN, SENHA) VALUES ('$login', '$senha')";
			$insert = mysqli_query($conexao, $q_insert);

			//validação de cadastro
			if($insert){
				echo "	<script language='javascript' type='text/javascript'>alert('Usuário cadastrado com sucesso');
						window.location.href='index.html';
						</script>";
			}else{
				echo "	<script language='javascript' type='text/javascript' charset='utf-8'>alert('Falha ao cadastrar usuário');
						window.location.href='cadastrousuario.html';
						</script>";
			}
		}
	}

	mysqli_close($conexao);
?>