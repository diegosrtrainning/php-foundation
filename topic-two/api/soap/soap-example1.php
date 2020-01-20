<?php
// Simple Object Access Protocol (SOAP)
$urlWsdl1 = "http://www.dataaccess.com/webservicesserver/numberconversion.wso?WSDL";

$urlWsdl2 = "https://footballpool.dataaccess.eu/info.wso?WSDL";
// Métodos: https://footballpool.dataaccess.eu/info.wso

try{
    $client = new SoapClient($urlWsdl2);
    $result = $client->TopScorersList();
    //var_dump($result);    
    $topScorers = $result->TopScorersListResult->tTopScorerTop5;    

    foreach ($topScorers as $topScorer) {
        //var_dump($topScorer);
        echo $topScorer->iRank . "- ". $topScorer-> sName . ": " . $topScorer->iGoals . "<br>";
    }
}catch(SoapFault $e){
    var_dump($e);
}
?>