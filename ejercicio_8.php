<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Ejercicio 8</title>
    </head>
    <body>
        <h3>Ejercicio 8</h3>
        <p>Realiza un conversor de euros a pesetas. La cantidad en euros que se quiere convertir deberá estar
almacenada en una variable.</p>
        <?php
            const CONV=166.386;
            $eur=120;
            $pes=$eur*CONV;
            echo "<p>$eur € a pesetas son: ".$pes." pesetas</p>";
        ?>
    </body>
</html>