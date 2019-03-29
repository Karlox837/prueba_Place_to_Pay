<?php 
class PSE {
    /*
    protected $login;
    
    protected $tranKey;
    
    protected $WSDL;
    */
    public function __construct(array $conexion)
    {
        $this->login = $conexion['login'];
        $this->tranKey = $conexion['tranKey'];
        $this->WSDL = $conexion['WDSL'];
    }
    
    public function getAuthorization()
    {
        $auth = new stdClass();
        $auth ->login = $this -> login;
        $auth ->seed = date ('c');
        $auth ->tranKey = sha1($auth->seed . $this->tranKey);
        
        return $auth;
    }
    
    protected function getSoapClient()
    {
        $wsdl = new SoapClient('https://test.placetopay.com/redirection/', array(
                            	'trace' => true,
                				'exceptions' => true,));
		 return $wsdl;
    }
    
     public function PSETransactionRequest($bankCode,$bankInterface,$returnURL,
    $reference,$description,$languaje,$currency,$totalAmount,$taxAmount,
    $devolutionBase,$tipAmount,$payer,$buyer,$shipping,$ipAddress,$userAgent,
    $additionalData)
    {
        $transaction = new stdClass();
        $transaction->bankCode = $bankCode;
        $transaction->bankInterface = $bankInterface;
        $transaction->returnURL = $returnURL;
        $transaction->reference = $reference;
        $transaction->description = $description;
        $transaction->languaje = $languaje;
        $transaction->currency = $currency;
        $transaction->totalAmount = $totalAmount;
        $transaction->taxAmount = $taxAmount;
        $transaction->devolutionBase = $devolutionBase;
        $transaction->tipAmount = $tipAmount;
        $transaction->payer = $payer;
        $transaction->buyer = $buyer;
        $transaction->shipping = $shipping;
        $transaction->ipAddress = $_SERVER['REMOTE_ADDR'];
        $transaction->userAgent = $_SERVER['HTTP_USER_AGENT'];
        $transaction->additionalData = $additionalData;
       
        $request = new stdClass();
        $request -> auth = $this->getAuthorization();
        $request -> transaction = $transaction;

            $resultado = $wsdl->createTransaction($request);
             return $resultado->createTransactionResult;  
  
    }
    
    public function createPerson(
        $documentType, $document, $firstName, $lastName, $company,
		$emailAddress, $address, $city, $province, $country,
		$phone, $mobile) {
		    
		    $payer = new stdClass();
		    $payer->documentType =$documentType;
    		$payer->document = $document;
    		$payer->firstName = $firstName;
    		$payer->lastName = $lastName;
    		$payer->company = $company;
    		$payer->emailAddress = $emailAddress;
    		$payer->address = $address;
    		$payer->city = $city;
    		$payer->province = $province;
    		$payer->country = $country;
    		$payer->phone = $phone;
    		$payer->mobile = $mobile;
    
    		return $payer;
		}
   
        
        
};