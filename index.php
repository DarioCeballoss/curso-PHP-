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
		
		echo "<br><br><br><br> STRINGS y css <br> ";
		echo "<p style = 'color: red' >  hola </p>" ; // variar de comilla simple a comilla dobre cuando se usa dentro una dentro de otra
		echo "<p style = \"color: blue\" >  hola </p>" ; //Tambien se puede usar la barra invertida como salto de caracter  
		
		echo "<br><br><br><br> COMPARACION DE STRINGS <br> ";
			
		$variable1="Casa";
		$variable2="CASA";
		//$resultado es un booleano
		$resultado=strcmp($variable1,$variable2); //Compara si es igual, sin importar la mayusculas y minusculas
		echo $resultado . "<br>"; //TRUE si no coinciden  "1"
		
		
		
		
		function orden (){
		global $resultado;
		if($resultado){
			echo "EL RESULTADO ES FALSO <br>";
		}else{
			echo "EL RESULTADO ES VERDADERO <br>";
		}
		
		}
		orden();
		$resultado=strcasecmp($variable1,$variable2); // compara si es exactamente igual
		echo $resultado . "<br>";
		orden();
		
		echo "<br><br><br><br> CONSTANTES PROPIAS<br> ";
		//NOMRE - VALOR - Boolean (sensible o no a mayusculas)
		define("AUTOR","Dario" ); // CONSTANTES - -  Primero va el nombre de la constante y va todo en mayusculas - segundo va el valor de la constante - tercero 
		echo AUTOR;
		
		
		
		echo "<br><br><br><br> CONSTANTES PREDEFINIDAS<br> ";
		echo __LINE__  . "<br>" ;	// Línea actual en el fichero.
		echo __FILE__ ;	// Ruta completa y nombre del fichero. Si se usa dentro de un include, devolverá el nombre del fichero del include.
		
		// hay mas constantes, estas dos son a modo de ejemplo.
		
		
		
		
		
		
		
    ?>



</body>
</html>