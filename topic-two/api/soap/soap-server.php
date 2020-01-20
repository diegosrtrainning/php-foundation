<?php
// A service class
class MySoapService {
    public function sayHello() {
        return "Hello";
    }
}
try{
    /*Instantiate a SOAP server instance with no WSDL, and specifying a virtual host.*/
    $server = new SoapServer(null, ['uri'=>'http://localhost/trainning/php-200-710/php-foundation/topic-two/api/soap/meuws']);
    // Set the service class
    $server->setClass('MySoapService');
    // Start the new server
    $server->handle();
} catch(SoapFault $e){
    // Handle error
}
?>