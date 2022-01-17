<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Ejercicio 12</title>
    </head>
    <body>
        <h3>Ejercicio 12</h3>
        <p>Igual que el programa anterior, pero esta vez la pirámide debe aparecer invertida, con el vértice
hacia abajo.</p>
        <?php
            for ($i=9; $i > 0; $i--) {
                echo "* ";
                for ($j=0; $j < $i; $j++) { 
                    if ($i == 9) {
                        echo "* ";
                    } else {
                        echo "&nbsp&nbsp&nbsp";
                    }
                    
                }
                echo "*<br/>";
            }
            echo "*<br/>"
        ?>
    </body>
</html>