<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Ejercicio 5</title>
    </head>
    <body>
        <h3>Ejercicio 5</h3>
        <p>Escribe un programa que utilice las variables $x y $y. Asignales los valores 144 y 999 respectiva-
mente. A continuación, muestra por pantalla el valor de cada variable, la suma, la resta, la división
y la multiplicación.</p>
        <?php
            $x=144;
            $y=999;
            echo "<p>El valor de x es: ".$x."</p>";
            echo "<p>El valor de y es: ".$y."</p>";

            $res=$x+$y;
            echo "<p>La suma de $x + $y es igual a ".$res."</p>";
           
            $res=$x-$y;
            echo "<p>La resta de $x - $y es igual a ".$res."</p>";
            
            $res=$x*$y;
            echo "<p>La multiplicación de $x * $y es igual a ".$res."</p>";

            $res=$x/$y;
            echo "<p>La división de $x / $y es igual a ".round($res,2)."</p>";
        ?>
    </body>
</html>