<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Ejercicio 9</title>
    </head>
    <body>
        <h3>Ejercicio 9</h3>
        <p>Realiza un conversor de pesetas a euros. La cantidad en pesetas que se quiere convertir deberá estar
almacenada en una variable.</p>
        <?php
            const CONV=166.386;
            $pes=120000;
            $eur=$pes/CONV;
            echo "<p>$pes pesetas a euros son: ".round($eur,2)."€</p>";
        ?>
    </body>
</html>