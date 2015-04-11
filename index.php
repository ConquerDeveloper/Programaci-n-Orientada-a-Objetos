<?php
require_once('class.php');
?>
<!DOCTYPE html>
<html>
<head>
	<title>Trabajo con clases</title>
</head>
<body>
	<?php
	$persona->iniciar("Kevin Abreu");
	echo $persona->listar_nombres() . "<br>";
	echo $persona->contar_nombres();
	?>
</body>
</html>