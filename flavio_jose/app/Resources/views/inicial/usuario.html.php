<!DOCTYPE html>
<html>
<head>
	<title> Página Home </title>
</head>
<body>
	<center><b style="font-size: 25pt;"> ¡Hola! <?= "Bem vindo! ".$nome ?> <b></center>
	<center>
	<a style="text-decoration: none;" href="<?= $view['router']->path ('pagina') ?>"> Voltar </a>
	</center>
</html>
</body>