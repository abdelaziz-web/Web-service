<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

try {
    // Utiliser le fichier WSDL
    $client = new SoapClient("http://localhost/soap_test/calculator.wsdl", array('trace' => 1));
    
    // Test de l'addition
    $result = $client->add(5, 3);
    echo "5 + 3 = " . $result;
    
} catch (SoapFault $e) {
    echo "Erreur SOAP : " . $e->getMessage() . "<br>";
    echo "Dernière requête : " . $client->__getLastRequest() . "<br>";
    echo "Dernière réponse : " . $client->__getLastResponse();
}
?>