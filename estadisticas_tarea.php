<?php
if (count($_POST) > 0) {

    $total = count($_POST);
    $aprobados = 0;
    $reprobados = 0;
    $np = 0;
    $suma = 0;
    $cont = 0;
    $mejor = -1;
    $peor = 11;

    foreach ($_POST as $nombre => $valor) {
        $alumno = substr($nombre, 3); 

        if ($valor === "NP") {
            $np++;
            continue; // no cuenta en cálculos
        }

        $calif = (int)$valor;
        $suma += $calif;
        $cont++;

        if ($calif >= 6) {
            $aprobados++;
        } else {
            $reprobados++;
        }

        if ($calif > $mejor) $mejor = $calif;
        if ($calif < $peor) $peor = $calif;
    }

    if ($cont > 0) {
        $promedio = $suma / $cont;
        $porcAprob = ($aprobados / $cont) * 100;
        $porcReprob = ($reprobados / $cont) * 100;
    } else {
        $promedio = 0;
        $porcAprob = 0;
        $porcReprob = 0;
    }

    echo "<h1>Estadísticas del Grupo</h1>";

    echo "<ul>";
    echo "<li>Total de alumnos: $total</li>";
    echo "<li>Con calificación numérica: $cont</li>";
    echo "<li>No presentaron (NP): $np</li>";
    echo "<li> Aprobados: " . number_format($porcAprob, 2) . "</li>";
    echo "<li> Reprobados: " . number_format($porcReprob, 2) . "</li>";
    echo "<li> Promedio: " . number_format($promedio, 2) . "</li>";
    echo "<li>Mejor calificación: " . ($mejor >= 0 ? $mejor : "N/A") . "</li>";
    echo "<li>Peor calificación: " . ($peor <= 10 ? $peor : "N/A") . "</li>";
    echo "</ul>";

    echo "<hr><h3>Detalle individual:</h3>";
    echo "<ul>";
    foreach ($_POST as $nombre => $valor) {
        echo "<li>" . substr($nombre, 3) . ": " . $valor . "</li>";
    }
    echo "</ul>";

} else {
    echo "ACCESO NO VÁLIDO";
}
?>
