<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $num1 = $_POST['num1'];
    $num2 = $_POST['num2'];
    $operacion = $_POST['operacion'];

    $cliente = new SoapClient(null, array(
        'location' => "http://localhost/taller1_INGENIERIA_WEB_Y_DE_SERVICIOS/calculadora_server.php",
        'uri' => "http://localhost/taller1_INGENIERIA_WEB_Y_DE_SERVICIOS"
    ));

    $resultado = $cliente->__soapCall($operacion, array($num1, $num2));

    echo $resultado;
}
?>
