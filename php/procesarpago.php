<?php

$firstname = $_POST["firstname"];
$lastname = $_POST["lastname"];
$idtype = $_POST["idtype"];
$id = $_POST["id"];
$compay = $_POST["compay"];
$email = $_POST["email"];
$mobile = $_POST["mobile"];
$adress = $_POST["address"];
$total = $_POST["valor"];
$currency = $_POST["currency"];


try {
    $webservice = new SoapClient('https://test.placetopay.com/redirection/soap/redirect?wsdl');
    $webservice->__setLocation('https://test.placetopay.com/redirection/soap/redirect');
/* 
    $login = '6dd490faf9cb87a9862245da41170ff2';
	$tranKey = '024h1IlD';
	$Nonce = '125454678asw';
	$Created= date('c');
    $PasswordDigest = base64_encode(sha1($Nonce . $Created . $tranKey, true));
*/

	autenticathe();


    $UsernameToken = new stdClass();
    $UsernameToken->Username = $login;
    $UsernameToken->Password = $PasswordDigest;
    $UsernameToken->Nonce =base64_encode($Nonce);
    $UsernameToken->Created = $Created;

    
        $buyer = new stdClass();
		$buyer->documentType = $idtype;
		$buyer->document = $id;
		$buyer->name = $firstname;
		$buyer->surname = $lastname; 
		$buyer->company= $compay;
		$buyer->email= $email;
		$buyer->address=$adress;
        $buyer->mobile= $mobile;
        
        $Amount = new stdClass();
		$Amount->currency=$currency;
        $Amount->total=$total;
        
        $PaymentRequest = new stdClass();
		$PaymentRequest->reference=uniqid();
		$PaymentRequest->description='prueba';
		$PaymentRequest->amount=$Amount;
        $PaymentRequest->allowPartial=FALSE;
        
        $RedirectRequest = new stdClass();
		$RedirectRequest->locale='es_CO';
		$RedirectRequest->buyer=$buyer;
        $RedirectRequest->payment=$PaymentRequest; 
        $RedirectRequest->expiration='2019-05-29T21:24:25-05:00';
		$RedirectRequest->returnUrl='http://test.com';
		$RedirectRequest->cancelUrl='http://test.com';
		$RedirectRequest->ipAddress='127.0.0.1';
		$RedirectRequest->userAgent='Mozilla\/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit\/537.36 (KHTML, like Gecko) Chrome\/53.0.2785.89 Safari\/537.36';
        
        $security = new stdClass();
		$security->UsernameToken = new SoapVar($UsernameToken, SOAP_ENC_OBJECT, NULL, 'http://docs.oasis-open.org/wss/2004/01/oasis-200401-wss-wssecurity-secext-1.0.xsd', 'UsernameToken', 'http://docs.oasis-open.org/wss/2004/01/oasis-200401-wss-wssecurity-secext-1.0.xsd');
        $header = new SoapHeader('http://docs.oasis-open.org/wss/2004/01/oasis-200401-wss-wssecurity-secext-1.0.xsd', 'Security', $security, true);
        
        $parameters = new stdClass();
		$parameters->payload = $RedirectRequest;
		$webservice->__setSoapHeaders($header);
        $response = $webservice->createRequest($parameters);
        
        header('location: ' . $response->createRequestResult->processUrl);
		print_r($response);
        


}catch (SoapFault $e) {
	print_r($e);
	echo "error 1";
}





