<?php

    echo '<hr>';
    // Variable numero
    $numero=5;
    echo "este es una variable Numero: $numero";
    echo '<br>';
    var_dump($numero);

    echo '<br><hr>';
    
    // variable texto
    $palabra='palabra';
    echo"Esto es una variable texto : $palabra";
    echo '<br>';
    var_dump($palabra);
    echo '<br><hr>';
    
    // Variable boleano
    $boolean=true;
    echo "Esto es variable Boolean: $boolean";
    echo '<br>';
    var_dump($boolean);
    echo '<br><hr>';
    
    // variable arreglo
    $colores=['Verde','azul','Amarrillo','Rosado','Griss'];
    echo '<br>';
    var_dump($colores);
    echo "Esto es una variable : $colores[0]";
    echo '<br><hr>';

    // variable arreglo con propiedades
    $verduras=array('verdura1'=>'lechuga','verdura2'=>'cebolla');
    echo '<br>';
    var_dump($verduras);
    echo "Esto es una variable : $verduras[verdura1]";
    echo '<br><hr>';

    // Variable Objetos
    $frutas=(object)['fruta1'=>'pera','fruta2'=>'manzana'];
    echo '<br>';
    var_dump($frutas);
    echo "esto es una variable objeto $frutas->fruta2";
    echo '<br><hr>';

?>
