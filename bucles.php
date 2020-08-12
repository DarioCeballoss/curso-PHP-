<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    

<?php

$var1= 2;

//SI LA CONDICION ES FALSA NO SE EJECUTA
while ($var1 < 6) {
    echo "estamos ejecutando el bucle <br>";
    $var1++;
}
echo "SALIMOS DEL BUCLE<br><br>";


//SE EJECUTA AL MENOS UNA VES SI LA CONFICION ES FALSA
do{
    echo "estamos ejecutando el bucle DO <br>";
    $var1++;
}while ($var1 > 8) ;
echo "SALIMOS DEL BUCLE<br><br>";

//
for ($i=0; $i <=10 ; $i++) { 

    if($i == 5){
        echo "<br> SALTO DE LINEA";
    continue; // si I = a 5 salta al inicio del bucle +1
    }

    echo "<br> Linea : " . $i;

    if ($i== 8) {break;} // si I = a 8 frena el bucle (deveria llegar a 10) 
}




?>


</body>
</html>