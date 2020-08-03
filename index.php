<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <?php

        //datosDeOtraHoja(); da error, ya que la invoca la hoja a partir de la linea 22
        echo "Este es el primer mensaje <br>" ;
        function dameDatos(){
            echo "Este es el mensaje del interior de la funcion <br>" ;

        }

        dameDatos();
        dameDatos();

       // include ("proporciona_datos.php");   // incluye el archivo, si no esta no hay problema
        require ("proporciona_datos.php");   // con require el archivo si o si tene que estar para continuar ejecutando 

        datosDeOtraHoja();


        echo "Este es el primer mensaje <br>" ; 
    
    ?>



</body>
</html>