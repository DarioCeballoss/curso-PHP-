<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Documento sin título</title>
</head>

<body>

<form name="form1" method="post" action="">
  <p>
    <label for="num1"></label>
    <input type="text" name="num1" id="num1">
    <label for="num2"></label>
    <input type="text" name="num2" id="num2">
    <label for="operacion"></label>
    <select name="operacion" id="operacion">
      <option>Suma</option>
      <option>Resta</option>
      <option>Multiplicación</option>
      <option>División</option>
      <option>Módulo</option>
    </select>
  </p>
  <p>
    <input type="submit" name="button" id="button" value="Enviar" onClick="prueba">
  </p>
</form>

<?php
if(isset($_POST["button"])){
  $numero1=$_POST['num1'];
  $numero2=$_POST['num2'];
  $operacione=$_POST['operacion'];
  //echo $operacione;
  }

  if($operacione == 'Suma'){
    echo "El resultado es : " . ($numero1+$numero2); 
  }elseif($operacione == 'Resta'){
    echo "El resultado es : " . ($numero1-$numero2);
  }elseif($operacione == 'Multiplicación'){
    echo "El resultado es : " . ($numero1*$numero2);
  }elseif($operacione == 'División'){
    echo "El resultado es : " . ($numero1/$numero2);
  }else{
    echo "El resultado es : " . ($numero1%$numero2);
    }
  
  ?>

</body>
</html>