<!DOCTYPE html>
<html>
<head>
	<title> Página Inicial - Login </title>
</head>
<body>
	<center>
	<form action="<?php echo $view['router']->path ('pagina') ?>" method="POST">
		<label> Nome: </label>
		<input type="text" name="nome">
		<br><br>
		<label> Senha: </label>
		<input type="password" name="senha">
		<br><br>
		<input type="submit" name="enviar">
	</form>
	</center>
</body>
</html>