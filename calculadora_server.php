<?php
class Calculadora {
    public function sumar($num1, $num2) {
        return $num1 + $num2;
    }

    public function restar($num1, $num2) {
        return $num1 - $num2;
    }

    public function multiplicar($num1, $num2) {
        return $num1 * $num2;
    }

    public function dividir($num1, $num2) {
        if ($num2 != 0) {
            return $num1 / $num2;
        } else {
            return "Error: División por cero.";
        }
    }
    public function potencia($num1, $num2) {
        return pow($num1, $num2);
    }
    
}

$server = new SoapServer('calculadora.wsdl', array('uri' => "http://localhost/taller1_INGENIERIA_WEB_Y_DE_SERVICIOS/calculadora_server.php"));
$server->setClass("Calculadora");
$server->handle();
?>
