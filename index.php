<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <?php
		$nombre = "Dario" ;

        //datosDeOtraHoja(); da error, ya que la invoca la hoja a partir de la linea 22
        echo "Este es el primer mensaje <br>" ;
		
        function dameDatos(){
			global $nombre; // variable global, esto quiere decir que la variable de afuera puede ser usada dentro de la funcion
            $nombre="El nombre es: " . $nombre . "<br>" ;
			echo "Este es el mensaje del interior de la funcion <br>" ;
        }
		
		dameDatos();
		echo $nombre;// si comentamos dameDatos solo imprimira "Dario"  anulando la funcion


       // include ("proporciona_datos.php");   // incluye el archivo, si no esta no hay problema
        require ("proporciona_datos.php");   // con require el archivo si o si tene que estar para continuar ejecutando 
        datosDeOtraHoja();

        echo "Este es el segundo mensaje <br>" ; 
		
		

		echo "<br><br><br><br> VARIABLES ESTATICAS <br> ";
		
		function incrementar(){
			static $contador = 0; // sin el static la variable contador regresaria a 0 cada ves que se use la funcion "liena 41, 42, 43"
			$contador ++;
			echo $contador . "<br>";
		}
		incrementar();
		incrementar();
		incrementar();
		
		
    ?>



</body>
</html>