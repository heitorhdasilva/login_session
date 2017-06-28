<?php
session_start();
if (!isset($_SESSION['usuario_online']) or !$_SESSION['usuario_online'] == true){
    header('Location: login.php');
}


?>


<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
    <link rel="stylesheet" href="style.css">
	<title>Document</title>
</head>
<body>

	<div class="social">

		<a href="verifica_usuario.php?acao=sair" class="sair">sair</a>

		<img src="http://assets1.bigthink.com/system/idea_thumbnails/62125/size_1024/christ-898330_1280.jpg?1482262031" alt="" width="200" height="200">
		<h3>Bem vindo!</h3>
	</div>

</body>
</html>