<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Ejercicio 11</title>
    </head>
    <body>
        <h3>Ejercicio 11</h3>
        <p>Igual que el programa anterior, pero esta vez la pirámide estará hueca (se debe ver únicamente el
contorno hecho con asteriscos).</p>
        <?php
            echo "*<br/>";
            for ($i=0; $i < 10; $i++) {
                echo "* ";
                for ($j=0; $j < $i; $j++) { 
                    if ($i < 9) {
                        echo "&nbsp&nbsp&nbsp";
                    } else {
                        echo " *";
                    }
                    
                }
                echo " *<br/>";
            }
        ?>
    </body>
</html>