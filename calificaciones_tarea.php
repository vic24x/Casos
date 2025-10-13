<?php
$alumnos = [
    "Maria", "Miriam", "Vanessa", "Petra", "Leopoldo",
    "Juanita", "Axel", "Marco", "Antonio", "Francisco"
];
$califs = ["0","1","2","3","4","5","6","7","8","9","10","NP"];
?>

<html>
<head>
    <meta charset="utf-8">
    <title>Registro de Calificaciones</title>
</head>
<body>
    <h1>Registro de Calificaciones</h1>
    <form method="POST" action="estadisticas_tarea.php">
        <table border="1" cellpadding="5">
            <tr>
                <th>Nombre</th>
                <th>Calificación</th>
            </tr>
            <?php foreach ($alumnos as $alumno): ?>
            <tr>
                <td><?php echo $alumno; ?></td>
                <td>
                    <select name="cbo<?php echo $alumno; ?>">
                        <?php foreach($califs as $calif): ?>
                            <option><?php echo $calif; ?></option>
                        <?php endforeach ?>
                    </select>
                </td>
            </tr>
            <?php endforeach ?>
        </table>
        <br>
        <input type="submit" value="Calcular Estadísticas">
    </form>
</body>
</html>
