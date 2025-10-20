<?php
$usuario_valido = "V1cx";
$clave_valida = "ZAY";


$usuario = $_POST['usuario'];
$clave = $_POST['clave'];

if ($usuario === $usuario_valido && $clave === $clave_valida) {
    echo '<meta http-equiv="refresh" content="0;url=inicio.php">';
} else {
    echo '<meta http-equiv="refresh" content="0;url=error.php">';
}

?>
