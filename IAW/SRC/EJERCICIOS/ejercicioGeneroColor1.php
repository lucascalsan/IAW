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
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listado por género</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
        }

        table {
            border-collapse: collapse;
            width: 60%;
        }

        th, td {
            border: 1px solid #333;
            padding: 8px 12px;
            text-align: left;
        }

        .masculino {
            color: #0059b3;
            font-weight: bold;
        }

        .femenino {
            color: #d63384;
            font-weight: bold;
        }
    </style>
</head>
<body>
    <h1>Listado de alumnos por género</h1>
    <table>
        <tr>
            <th>#</th>
            <th>Alumno</th>
            <th>Género</th>
        </tr>
        <?php foreach ($alumnos as $index => $alumnoGenero): ?>
            <?php [$alumno, $genero] = $alumnoGenero; ?>
            <?php $clase = $genero === 'm' ? 'masculino' : 'femenino'; ?>
            <tr>
                <td><?= $index ?></td>
                <td class="<?= $clase ?>"><?= $alumno ?></td>
                <td class="<?= $clase ?>"><?= $genero === 'm' ? 'Masculino' : 'Femenino' ?></td>
            </tr>
        <?php endforeach; ?>
    </table>
</body>
</html>

