<?php
if(isset($_POST["button"])){
  $numero1=$_POST['num1'];
  $numero2=$_POST['num2'];
  $operacione=$_POST['operacion'];
  //echo $operacione;
  calcular();
  }

  function calcular(){

    global $numero1;
    global $numero2;
    global $operacione;

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
  

}
  ?>