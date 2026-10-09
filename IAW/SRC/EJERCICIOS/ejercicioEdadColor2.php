<?php
    $alumnos = [
        ['Atienza Bermúdez, Alejandro', 17],
        ['Calderer Sánchez, Lucas', 19],
        ['Cano Merino, Carlos', 18],
        ['Chari, Abdelali', 20],
        ['García Zarco, Francisco José', 21],
        ['Gómez Pérez, Samuel', 16],
        ['Iáñez Navarro, Daniel', 22],
        ['López Lasheras, Alan', 18],
        ['Maldonado Cabezas, Francisco', 17],
        ['Martín Arias, Carlos', 20],
        ['Moreno González, Alexandra', 19],
        ['Muñoz Moreno, Elisabet', 18],
        ['Ourhzif, Aymane', 23],
        ['Sánchez Ortiz, Emilio David', 21],
        ['Sánchez Rodríguez, Beatriz', 17],
        ['Torres Gómez, Ignacio', 19],
        ['Uréndez Jiménez, Alba', 20],
        ['Uribe Aranda, Francisco', 22],
        ['Velasco Clavero, Pablo', 18],
    ];
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listado por edad</title>
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

        .joven {
            color: #0d6efd;
            font-weight: bold;
        }

        .adulto {
            color: #198754;
            font-weight: bold;
        }

        .mayor {
            color: #dc3545;
            font-weight: bold;
        }
    </style>
</head>
<body>
    <h1>Listado de alumnos con color según la edad</h1>
    <table>
        <tr>
            <th>#</th>
            <th>Alumno</th>
            <th>Edad</th>
        </tr>
        <?php foreach ($alumnos as $index => [$alumno, $edad]): ?>
            <?php
                if ($edad < 18) {
                    $clase = 'joven';
                } elseif ($edad <= 20) {
                    $clase = 'adulto';
                } else {
                    $clase = 'mayor';
                }
            ?>
            <tr>
                <td><?= $index ?></td>
                <td class="<?= $clase ?>"><?= $alumno ?></td>
                <td class="<?= $clase ?>"><?= $edad ?> años</td>
            </tr>
        <?php endforeach; ?>
    </table>
</body>
</html>

