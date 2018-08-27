<?php
session_start();
    require 'pago.php';
    
    try {
        $cxn = new PSE(include('conexion.php'));
        
        $payer = $cxn->createPerson(
            $document = $_POST['id'],
            $documentType = $_POST['idtype'],
            $firstName = $_POST['fname'],
            $lastName = $_POST['lname'],
            $company = $_POST['company'],
            $emailAddress = $_POST['email'],
            $address = $_POST['address'] ,
            $city = $_POST['city'],
            $province = $_POST['province'],
            $country = $_POST['country'],
            $phone = $_POST['phone'],
            $mobile = $_POST['mobile']
            );
    
        $response = $cxn ->PSETransactionRequest(1022,0,'https://egm-mde-sop-svr.egm.local/',uniqid(),'prueba','ES','COP',1000,0,0,0,$payer,$payer,$payer,$ipAddress,$userAgent,$additionalData);
    
 } catch (Exception $e) {
	print ' NO FUNCIONA : ' . $e->getMessage() . PHP_EOL;

};