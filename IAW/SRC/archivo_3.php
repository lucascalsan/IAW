<?php
    $alumnos = [
    'Atienza Bermúdez, Alejandro',
    'Calderer Sánchez, Lucas',
    'Cano Merino, Carlos',
    'Chari, Abdelali',
    'García Zarco, Francisco José',
    'Gómez Pérez, Samuel',
    'Iáñez Navarro, Daniel',
    'López Lasheras, Alan',
    'Maldonado Cabezas, Francisco',
    'Martín Arias, Carlos',
    'Moreno González, Alexandra',
    'Muñoz Moreno, Elisabet',
    'Ourhzif, Aymane',
    'Sánchez Ortiz, Emilio David',
    'Sánchez Rodríguez, Beatriz',
    'Torres Gómez, Ignacio',
    'Uréndez Jiménez, Alba',
    'Uribe Aranda, Francisco',
    'Velasco Clavero, Pablo',
    ];
    //$alumnos[] = "Juan";
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
    <?php
    var_dump($alumnos);
    // Source - https://stackoverflow.com/a/19816742
    // Posted by AbraCadaver, modified by community. See post 'Timeline' for change history
    // Retrieved 2026-10-05, License - CC BY-SA 4.0
    echo '<pre>' . var_export($alumnos, true) . '</pre>';
    ?>
    <hr>
    <table border="1px">
        <tr>
            <td>#</td>
            <th>Alumno</th>
        </tr>
        <?php
        foreach ($alumnos as $index => $alumno) {
           ?>
            <tr>
                <td><?= $index ?></td>
                <td><?= $alumno ?></td>
            </tr>
        <?php
            };
            ?>
            <tr>
                    <?php
                    $contador = 0;
        foreach ($alumnos as $alumno) { //EMPEZAMOS CON LA VARIABLE QUE VAMOS A RECORRER Y EL INDICCE Y EL VALOR QUE VAMOS A OBTENER
           $contador++;
           ?>
            <tr>
                <td><?= $contador ?></td>
                <td><?= $alumno ?></td>
            </tr>
            <?php
            };
            ?>
    </table>
</body>
</html>