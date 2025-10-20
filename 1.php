<?php
	if( isset($_COOKIE["ejemplo"]) ) {
		echo "La cookie existe con valor: " . $_COOKIE["ejemplo"];
	} else {
		echo "La cookie no existe";
		$tiempo = 60;
		setcookie("ejemplo","1234",time()+ 60);
		echo "La cookie ahora existe por $tiempo segundos";
	}

?>
<!DOCTYPE html>
<head>
    <meta charset="utf-8">
    <TITLE>MODULO DE LOGIN</TITLE>
</head>
<body>
    <h2>Iniciar sesión</h2>
    <form action="validacion.php" method="POST">
        Usuario: <input type="text" name="usuario" required><br><br>
        Contraseña: <input type="password" name="clave" required><br><br>
        <label>
            <input type="checkbox" name="recordar"> Recuerdame
        </label><br><br>
        <input type="submit" value="Ingresar">


    </form>
    </body>

</html>