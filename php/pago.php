<?php

class cnx{
	
	public function getAutentication(){
		
    $auth = new stdClass();
	$auth->login = '6dd490faf9cb87a9862245da41170ff2';
	$auth->seed = date('c');
	$auth->tranKey = sha1($auth->seed .'024h1IlD');
		
		
		return $auth;
	}
	
	
public function PSETransactionRequest (
	$bankCode, $bankInterface, $returnURL, $reference, $description,
	$language, $currency, $totalAmount, $taxAmount, $devolutionBase, 
	$tipAmount, $payer, $ipAddress, $userAgent, $additionalData=null)
	
	{
		$webservicepse = new SoapClient('https://www.placetopay.com/soap/pse/?wsdl');
		
		$TransactionRequest = new stdClass();
		
		$TransactionRequest->bankCode = $bankCode;
		$TransactionRequest->bankInterface = $bankInterface;
		$TransactionRequest->returnURL = $returnURL;
		$TransactionRequest->reference = $reference;
		$TransactionRequest->description = $description;
		$TransactionRequest->language = $language;
		$TransactionRequest->currency = $currency;
		$TransactionRequest->totalAmount = $totalAmount;
		$TransactionRequest->taxAmount = $taxAmount;
		$TransactionRequest->devolutionBase = $devolutionBase;
		$TransactionRequest->tipAmount = $tipAmount;

		$TransactionRequest->payer = $payer;
		$TransactionRequest->ipAddress= $ipAddress;
		$TransactionRequest->userAgent= $userAgent;
		$TransactionRequest->additionalData= $additionalData;



		$request = new stdClass();
		$request->auth = $this->getAutentication();
		$request->transaction = $TransactionRequest;
		
	$response = $webservicepse->createTransaction($request);
		
		return $response->createTransactionResult->bankURL;
		var_dump($response);
	}

public function createPerson(
    $documentType, $document, $firstName, $lastName, $company, 
    $emailAddress, $address, $city, $province, $country, $phone, 
    $mobile)
    {
        $person = new stdClass();
        $person->documentType = $documentType;
		$person->document = $document;
		$person->firstName = $firstName;
		$person->lastName = $lastName;
		$person->company = $company;
		$person->emailAddress = $emailAddress;
		$person->address = $address;
		$person->city = $city;
		$person->province = $province;
		$person->country = $country;
		$person->phone = $phone;
		$person->mobile = $mobile;
		
		return $person;

    }
}

