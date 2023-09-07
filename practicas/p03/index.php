<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="es">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <title>Práctica 3</title>
</head>
<body>
    <h2>Ejercicio 1</h2>
    <p>Determina cuál de las siguientes variables son válidas y explica por qué:</p>
    <p>$_myvar,  $_7var,  myvar,  $myvar,  $var7,  $_element1, $house*5</p>
    <?php
        //AQUI VA MI CÓDIGO PHP
        $_myvar;
        $_7var;
        //myvar;       // Inválida
        $myvar;
        $var7;
        $_element1;
        //$house*5;     // Invalida

        echo '<ul>';
        echo '<li>$_myvar es válida porque inicia con guión bajo.</li>';
        echo '<li>$_7var es válida porque inicia con guión bajo.</li>';
        echo '<li>$myvar es válida porque inicia con una letra.</li>';
        echo '<li>$var7 es válida porque inicia con una letra.</li>';
        echo '<li>$_element1 es válida porque inicia con guión bajo.</li>';
        echo '</ul>';
unset($_7var);
unset($_myvar);
unset($var7);
unset($myvar);
unset($_element1);       
 ?>
    <h2>Ejercicio 2</h2>
    <p>Proporcionar los valores de $a, $b, $c como sigue:</p>
    
    <ul>
    <p>$a = “ManejadorSQL”;</p>
    <p>$b = 'MySQL’;</p>
    <p>$c = &amp;$a;</p>

</ul>

<?php 
$a = 'ManejadorSQL';
$b = 'MySQ';
$c = &$a;

echo "Ahora muestra el contenido de cada variable";
echo '<br> </br>';  
echo  $a;
echo '<br> </br>';  
echo $b;
echo '<br> </br>';  
echo $c;
echo '<br> </br>';  

echo "Ahora muestra el contenido de cada variable";


$a = 'PHP server';
$b = &$a;

ECHO "Vuelve a mostrar el contenido de cada uno";
echo '<br> </br>';  
echo $a;
echo '<br> </br>';  
echo $b;

echo '<br>  </br>';  
echo "Describe en y muestra en la página obtenida qué ocurrió en el segundo bloque de
asignaciones";
echo '<br>  </br>';  

echo '<p>En el segundo bloque lo que sucede es que en la variable "a" se sobre escribe "Manejador SQL" por el string "PHP server" y en la variable "b" es apuntada a la variable "a" 
por lo tanto imprimen lo mismo</p>';



unset($a);
unset($b);
unset($c);

?>



</ul>
</body>
</html>