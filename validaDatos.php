<?php

if(isset($_POST["enviando"])){
	$usuario=$_POST["nombre_usuario"];
	$edad=$_POST["edad_usuario"];
	
	if($usuario=="Dario" && $edad>20 ){
		echo "<p class='validado' >puedes entrar</p>";
	}else{
		echo "<p class='no_validado'>no podes entrar</p>";
	}
	
}



?>

<style>

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
