<?php
	//persistindo o nome do usuario enquanto ele não sai da sessão
	if (isset($_COOKIE['txtLogin'])) {

		unset($_COOKIE['txtLogin'])	
	}
	header("Location:index.php");
?>