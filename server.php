<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

class Calculator {
    public function add($a, $b) {
        return $a + $b;
    }
}

try {
    // Utiliser le fichier WSDL
    $server = new SoapServer("http://localhost/soap_test/calculator.wsdl");
    $server->setClass('Calculator');
    $server->handle();
} catch (SoapFault $e) {
    echo "Erreur SOAP : " . $e->getMessage();
}
?>