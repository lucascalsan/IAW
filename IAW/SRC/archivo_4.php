<?php
    $alumnos = [
        ['Atienza Bermúdez, Alejandro', 'm'],
        ['Calderer Sánchez, Lucas', 'm'],
        ['Cano Merino, Carlos', 'm'],
        ['Chari, Abdelali', 'm'],
        ['García Zarco, Francisco José', 'm'],
        ['Gómez Pérez, Samuel', 'm'],
        ['Iáñez Navarro, Daniel', 'm'],
        ['López Lasheras, Alan', 'm'],
        ['Maldonado Cabezas, Francisco', 'm'],
        ['Martín Arias, Carlos', 'm'],
        ['Moreno González, Alexandra', 'f'],
        ['Muñoz Moreno, Elisabet', 'f'],
        ['Ourhzif, Aymane', 'm'],
        ['Sánchez Ortiz, Emilio David', 'm'],
        ['Sánchez Rodríguez, Beatriz', 'f'],
        ['Torres Gómez, Ignacio', 'm'],
        ['Uréndez Jiménez, Alba', 'f'],
        ['Uribe Aranda, Francisco', 'm'],
        ['Velasco Clavero, Pablo', 'm'],
    ];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Visualizando el array</h1>
    <hr>
    <table border="1px">
        <tr>
            <td>#</td>
            <th>Alumno</th>
            <th>Género</th>
        </tr>
        <?php foreach ($alumnos as $index => $alumnoGenero): ?>
            <?php [$alumno, $genero] = $alumnoGenero; ?>
            <tr>
                <td><?= $index ?></td>
                <td><?= $alumno ?></td>
                <td><?= $genero ?></td>
            </tr>
        <?php endforeach; ?>
    </table>
</body>
</html>