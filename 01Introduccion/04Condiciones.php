<?php

// Condiciones
$a=5;
$b=15;

if ($a>$b)  {
   echo 'A es mayor que b';
}else if($a==$b){
    echo 'los dos son iguales';
}else{
    echo'b es mayor que a';
    echo'<br><hr>';
}

// Switch
$dia='Domingos';
switch ($dia) {
    case 'Lunes':
          echo 'es el dia lunes';
        break;
    case 'Martes':
          echo 'es el dia Martes';
        break;
    case 'Miercoles':
        echo 'es el dia Miercoles';
      break;
      case 'Jueves':
        echo 'es el dia Jueves';
      break;
      case 'Viernes':
        echo 'es el dia Viernes';
      break;
      case 'Sabado':
        echo 'es el dia Sabado';
      break;
    default:
       echo'es el dia Domingo';
        break;
}
echo'<br><hr>';
$n1=1;
while ($n1 <= 10) {
    echo $n1 ; 
    $n1++;
}
echo'<br><hr>';
// ciclo dowhile

$p=1;
do {
   echo $p;
   $p++;
} while ($p <= 10);
echo'<br><hr>';
// ciclo for
for ($i=1; $i <= 100; $i++) { 
    echo $i ;
}
echo'<br><hr>';

?>