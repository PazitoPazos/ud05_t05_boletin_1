<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Ejercicio 10</title>
    </head>
    <body>
        <h3>Ejercicio 10</h3>
        <p>Escribe un programa que pinte por pantalla una pirámide rellena a base de asteriscos. La base de la
pirámide debe estar formada por 9 asteriscos.</p>
        <?php
            for ($i=0; $i < 10; $i++) { 
                for ($j=0; $j < $i; $j++) { 
                    echo "* ";
                }
                echo "<br />";
            }
        ?>
    </body>
</html>