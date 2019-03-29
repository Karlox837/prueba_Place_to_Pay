<?php
class redirect {

public function autenticacion(){
	$seed = date('c');
	$auth = new stdClass([
			'login' => '6dd490faf9cb87a9862245da41170ff2',
			'tranKey' => '024h1IlD',
			'auth' => [
				'seed' => $seed,
				'nonce' => 'ifYEPnAcJkileVR1t'
			],
		]);
	return autenticacion();
		}

public function createBuyer($firstname, $lastname,$idtype,$id,$compay,$email,$mobile){
		
		$buyer = new stdClass();
		$buyer->name = $firstname;
		$buyer->surname = $lastname;
		$buyer->documentType = $idtype;
		$buyer->document = $id;
		$buyer->mobile = $mobile;
		$buyer->company = $compay;
		$buyer->email =$email;

		return $buyer;
}

public function payment($reference, $description, $amount, $currency, $total){
		$payment = new stdClass();
		$payment->reference = $reference;
		$payment->description = $description;
		$payment->amount = $amount;
		$payment->currency = $currency;
		$payment->total =$total;

		return $payment;

}

};

