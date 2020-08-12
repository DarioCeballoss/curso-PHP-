<style>
	h1{
		text-align:center;
	}

	table{
		background-color:#FFC;
		padding:5px;
		border:#666 5px solid;
	}
	
	.no_validado{
		font-size:18px;
		color:#F00;
		font-weight:bold;
	}
	
	.validado{
		font-size:18px;
		color:#0C3;
		font-weight:bold;
	}


</style>

<?php




if(isset($_POST['enviando'])){
	$edad=$_POST['edad_usuario'];
	$name=$_POST['nombre_usuario'];
/*	if($edad<=18){
		echo "ERES MENOR DE EDAD";
	}elseif($edad<=40){
		echo "ERES JOVEN";
	}elseif($edad<=65){
		echo "ERES MADURO";
	}else{
		echo "CUIDATE";
	}
*/

//echo $edad<18 ? "ERES MENOR DE EDAD. VETE" : "ERES MAYOR DE EDAD. CONTINUA";
$resultado = $edad>18 && $name=="Dario" ? "HOLA DARIO" : "VETE, NO ERES EL USUARIO"; // Guarda en una variable la condicion cumplida
echo $resultado;
}


	
?>