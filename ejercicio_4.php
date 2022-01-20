<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Ejercicio 4</title>
        <style>
            table,th,td {
                border: 2px solid black;
                border-collapse: collapse;
                padding: 4px;
                text-align: center;
                margin: auto;
            }
        </style>
    </head>
    <body>
        <h3>Ejercicio 4</h3>
        <p>Escribe un programa que muestre tu horario de clase mediante una tabla. Aunque se puede hacer
        íntegramente en HTML (igual que los ejercicios anteriores), ve intercalando código HTML y PHP
        para familiarizarte con éste último.</p>
        <table>
            <tr>
                <th>Lunes</th>
                <th>Martes</th>
                <th>Miércoles</th>
                <th>Jueves</th>
                <th>Viernes</th>
            </tr>
            <?php
                $priam = array(
                    "<tr>",
                    "<td>IAW</td>",
                    "<td>SAD</td>",
                    "<td>ASXBD</td>",
                    "<td>ASXBD</td>",
                    "<td>IAW</td>",
                    "</tr>"
                );
                $segam = array(
                    "<tr>",
                    "<td>IAW</td>",
                    "<td>SAD</td>",
                    "<td>EIE</td>",
                    "<td>ASXBD</td>",
                    "<td>SRI</td>",
                    "</tr>"
                );
                $teram = array(
                    "<tr>",
                    "<td>SRI</td>",
                    "<td>SAD</td>",
                    "<td>EIE</td>",
                    "<td>EIE</td>",
                    "<td>SRI</td>",
                    "</tr>"
                );
                $cuaam = array(
                    "<tr>",
                    "<td>SRI</td>",
                    "<td>ASO</td>",
                    "<td>ASO</td>",
                    "<td>IAW</td>",
                    "<td>SAD</td>",
                    "</tr>"
                );
                $quiam = array(
                    "<tr>",
                    "<td>ASO</td>",
                    "<td>ASO</td>",
                    "<td>IAW</td>",
                    "<td>IAW</td>",
                    "<td>SAD</td>",
                    "</tr>"
                );
                $sexam = array(
                    "<tr>",
                    "<td>ASXBD</td>",
                    "<td>ASO</td>",
                    "<td>IAW</td>",
                    "<td>SRI</td>",
                    "<td>SAD</td>",
                    "</tr>"
                );

                $pripm = array(
                    "<tr>",
                    "<td></td>",
                    "<td>SRI</td>",
                    "<td></td>",
                    "<td>ASO</td>",
                    "<td></td>",
                    "</tr>"
                );

                $segpm = array(
                    "<tr>",
                    "<td></td>",
                    "<td>SRI</td>",
                    "<td></td>",
                    "<td>ASO</td>",
                    "<td></td>",
                    "</tr>"
                );

                $terpm = array(
                    "<tr>",
                    "<td></td>",
                    "<td>SRI</td>",
                    "<td></td>",
                    "<td>ASO</td>",
                    "<td></td>",
                    "</tr>"
                );

                foreach ($priam as $hora) {
                        echo $hora;
                    };

                foreach ($segam as $hora) {
                    echo $hora;
                };
                
                foreach ($teram as $hora) {
                    echo $hora;
                };

                echo "<tr>
                        <td colspan='5'>Recreo</td>
                    </tr>";

                foreach ($cuaam as $hora) {
                    echo $hora;
                };

                foreach ($quiam as $hora) {
                    echo $hora;
                };
                
                foreach ($sexam as $hora) {
                    echo $hora;
                };
                
                echo "<tr>
                        <td colspan='5'>Hora de comer</td>
                    </tr>";

                foreach ($pripm as $hora) {
                    echo $hora;
                };

                foreach ($segpm as $hora) {
                    echo $hora;
                };
                
                foreach ($terpm as $hora) {
                    echo $hora;
                };
            ?>
        </table>
    </body>
</html>