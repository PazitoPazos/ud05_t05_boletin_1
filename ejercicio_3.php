<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Ejercicio 3</title>
        <style>
            table,th,td {
                border: 2px solid black;
                border-collapse: collapse;
                padding: 4px;
            }
        </style>
    </head>
    <body>
        <h3>Ejercicio 3</h3>
        <p>Escribe un programa que muestre por pantalla 10 palabras en inglés junto a su correspondiente
traducción al castellano. Las palabras deben estar distribuidas en dos columnas. Utiliza la etiqueta
&lt<span style="color:blue">table</span>&gt de HTML.</p>
        <table>
            <tr>
                <th>Inglés</th>
                <th>Español</th>
            </tr>
            <?php
                $words = array(
                    "Blue" => "Azul",
                    "Red" => "Rojo",
                    "Yellow" => "Amarillo",
                    "Green" => "Verde",
                    "Purple" => "Morado",
                    "Pink" => "Rosa",
                    "Gray" => "Gris",
                    "White" => "Blanco",
                    "Black" => "Negro"
                );
                foreach ($words as $eng => $spa) {
                    echo "<tr>
                            <td>$eng</td>
                            <td>$spa</td>
                          </tr>";
                }
            ?>
        </table>
    </body>
</html>