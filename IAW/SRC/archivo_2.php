<?php
    $year = 2026;

    // arrays
    $lista_de_alumnos = []; // declaramos un array vacío
    // agregamos elementos al array
    $lista_de_alumnos[1] = "Alejandro Atienza"; // posición 0
    $lista_de_alumnos[] = "Lucas Calderer";    // posición 1
    $lista_de_alumnos[] = "Carlos Cano";       // posición 2
    $lista_de_alumnos[19] = "Maria Zambrano"; // posición 19
    $posicionAnterior = 0; // null
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <table border="1">
        <tr>
            <td>#</td>
            <td>Nombre</td>
        </tr>
        <tr>
            <td>0</td>
            <td><?= $lista_de_alumnos[0] ?? 'N/A' ?></td>
        </tr>
        <tr>
            <td>1</td>
            <td><?= $lista_de_alumnos[1] ?? 'N/A' ?></td>
        </tr>
        <tr>
            <td>2</td>
            <td><?= $lista_de_alumnos[2] ?? 'N/A' ?></td>
        </tr>
        <tr>
            <td>10</td>
            <td><?= $lista_de_alumnos[10] ?? 'N/A' ?></td>
        </tr>
        <tr>
            <td>19</td>
            <td><?= $lista_de_alumnos[19] ?? 'N/A' ?></td>
        </tr>
    </table>

    <hr>

    <table border="1">
        <tr>
            <td>#</td>
            <td>Nombre</td>
        </tr>
        <!-- ejecutar de forma repetida el recorrido del array -->
        <?php foreach ($lista_de_alumnos as $index => $value): ?>
            <?php if (($posicionAnterior + 1) != $index || ($posicionAnterior - 1) > $index): ?>
                <tr>
                    <td colspan="3">...</td>
                </tr>
            <?php endif; ?>
            <?php $posicionAnterior = $index; ?>
            <tr>
                <td><?= $index ?></td>
                <td><?= $value ?></td>
                <td><?= $lista_de_alumnos[$index] ?></td>
            </tr>
        <?php endforeach; ?>
    </table>
</body>
</html>
<?php
// cerrar conexion a la base de datos
?>