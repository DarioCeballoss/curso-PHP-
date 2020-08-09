<?php
if(isset($_POST["button"])){
  $numero1=$_POST['num1'];
  $numero2=$_POST['num2'];
  $operacione=$_POST['operacion'];
  //echo $operacione;
  calcular($operacione,$numero1,$numero2);
  }

  function calcular($ope,$n1,$n2){


    switch ($ope) {
        case 'Suma':
            echo "El resultado es : " . ($n1+$n2); 
        break;
        case 'Resta':
            echo "El resultado es : " . ($n1-$n2); 
        break;   
        case 'Multiplicación':
            echo "El resultado es : " . ($n1*$n2);
        break;
        case 'División':
            echo "El resultado es : " . ($n1/$n2);
        break;        
        case 'Módulo':
            echo "El resultado es : " . ($n1%$n2);
        break;
        default:
            echo "error en la seleccion";
            break;
    }

}
  ?>