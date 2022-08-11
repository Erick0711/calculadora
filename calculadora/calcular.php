<?php

if(isset($_POST['calcular'])){
    // VARIABLES CONTENEDORAS
    $num1 = $_POST['number_1'];
    $num2 = $_POST['number_2'];
    $accion = $_POST['accion'];
    // VALIDACIONES
 
    if(empty($num1) || empty($num2) || empty($accion)){
        header("refresh:2, ./index.php");
        echo "RELLENA LOS CAMPOS";
    
    }else{
        switch ($accion) {
            case $accion == "+":
                echo $num1 + $num2;
                break;
                case $accion == "-":
                    echo $num1 - $num2;
                    break;
                    case $accion == "/":
                        echo $num1 / $num2;
                        break;
                        case $accion == "*":
                            echo $num1 ** $num2;
                            break;
                            case $accion == "**":
                                echo $num1 * $num2;
                                break;
                                case $accion == "%":
                                    echo $num1 % $num2;
                                    break;
                
            
            default:
                # code...
                break;
        }
    }
}


