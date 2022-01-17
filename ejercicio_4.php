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
                $materias = array(
                    "IAW",
                    "SRI",
                    "ASO",
                    "ASXBD",
                    "SAD",
                    "EIE"
                );

                echo "<tr>
                        <td>{$materias[0]}</td>
                        <td>{$materias[4]}</td>
                        <td>{$materias[3]}</td>
                        <td>{$materias[3]}</td>
                        <td>{$materias[0]}</td>
                    </tr>";

                echo "<tr>
                        <td>{$materias[0]}</td>
                        <td>{$materias[4]}</td>
                        <td>{$materias[5]}</td>
                        <td>{$materias[3]}</td>
                        <td>{$materias[1]}</td>
                    </tr>";

                echo "<tr>
                        <td>{$materias[1]}</td>
                        <td>{$materias[4]}</td>
                        <td>{$materias[5]}</td>
                        <td>{$materias[5]}</td>
                        <td>{$materias[1]}</td>
                    </tr>";

                echo "<tr>
                        <td colspan='5'>Recreo</td>
                    </tr>";

                echo "<tr>
                        <td>{$materias[1]}</td>
                        <td>{$materias[2]}</td>
                        <td>{$materias[2]}</td>
                        <td>{$materias[0]}</td>
                        <td>{$materias[4]}</td>
                    </tr>";

                echo "<tr>
                        <td>{$materias[2]}</td>
                        <td>{$materias[2]}</td>
                        <td>{$materias[0]}</td>
                        <td>{$materias[0]}</td>
                        <td>{$materias[4]}</td>
                    </tr>";

                echo "<tr>
                        <td>{$materias[3]}</td>
                        <td>{$materias[2]}</td>
                        <td>{$materias[0]}</td>
                        <td>{$materias[1]}</td>
                        <td>{$materias[4]}</td>
                    </tr>";
                
                echo "<tr>
                        <td colspan='5'>Hora de comer</td>
                    </tr>";

                echo "<tr>
                        <td></td>
                        <td>{$materias[1]}</td>
                        <td></td>
                        <td>{$materias[2]}</td>
                        <td></td>
                    </tr>";

                echo "<tr>
                        <td></td>
                        <td>{$materias[1]}</td>
                        <td></td>
                        <td>{$materias[2]}</td>
                        <td></td>
                    </tr>";

                echo "<tr>
                        <td></td>
                        <td>{$materias[1]}</td>
                        <td></td>
                        <td>{$materias[2]}</td>
                        <td></td>
                    </tr>";
            ?>
        </table>
    </body>
</html>