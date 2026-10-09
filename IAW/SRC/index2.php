<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Documento</title>
    </head>
    <body>
        <h1>Hola mundo!!!</h1>
        <div>
            <!-- comentario html -->
            <?php
            //comentario php de una línea
            
            /* 
            comentario php de
            más de una línea
            */

            echo "texto ";
            echo("texto ");
            echo 'texto ';
            echo('texto ');
            echo('<h2>texto</h2>');
            ?>
            Sigo en <em>html</em>.<br>
            <?php
            echo('El delegado ha vivido <strong>' . (2026 - 2006) * 365 . '</strong> días.<br>');
            ?>
            <div>
                <!-- Recomendación estilísitca. -->
                <br>
                El delegado ha vivido <strong>
                <?php
                    echo((2026 - 2006) * 365);
                ?>
                </strong> días.<br>
                El delegado ha vivido <strong><?php echo((2026 - 2006) * 365); ?></strong> días.<br>
                El delegado ha vivido <strong><?= (2026 - 2006) * 365 ?></strong> días.<br>
                <img src="img/abc.png" alt="descripción alternativa" width="300px">
                <?php
                echo ('<img src="img/abc.png" alt="descripción alternativa" width="300px">');
                echo ("<img src=\"img/abc.png\" alt=\"descripción alternativa\" width=\"300px\">");
                ?>
                <?php
                //variables
                $dias = (2026 - 2006) * 365;
                $diasDelAno = 365;
                $anoActual = 2026;
                $anoNacimiento = 2006;
                $diasVividos = ($anoActual - $anoNacimiento) * $diasDelAno;
                echo('<br>El delegado ha vivido <strong>' . $diasVividos . '</strong> días.<br>');
                echo("El delegado ha vivido <strong> $diasVividos </strong> días.<br>");
                echo('El delegado ha vivido <strong> $diasVividos </strong> días.<br>');
                ?>
                Resumen
                <ul>
                    <li>Comentarios</li>
                    <li>echo()</li>
                    <li>comillas dobles y simples
                        las simples --> permiten  escribir texto tal cual, sin interpretar variables
                        las dobles --> permiten interpretar variables y caracteres especiales
                    </li>
                    <li>variables</li>
                    <li>Et</li>
                </ul>
            </div>
            
        </div>
    </body>
</html>                                  