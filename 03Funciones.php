<?php
    
    // Funciones sin parametros
    
    function saludo(){
        echo '<hr>';
        echo 'Hola';
        echo '<br><hr>';
    }

    saludo();
    // Funciones con parametros
    function despedida($adios)  
    {
        echo $adios.'<br><hr>';
    }
    despedida("adios");
    // Funciones con retorno
    function retorno($retornar)
    {
            return $retornar;
    }
    echo retorno("hola mundo con retorno");
?>