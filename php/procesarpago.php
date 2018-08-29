<?php
session_start();
    require 'pago.php';
    
    $cnx = new cnx;
    
        $payer = $cnx->createPerson(
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
    
        $transaccion = $cnx ->PSETransactionRequest(1022,0,'https://pruebaplacetopay-karloz837.c9users.io/procesarpago.php',uniqid(),'Transaccion de prueba','ES','COP',1000,0,0,0,$payer,$payer,$payer,$ipAddress,$userAgent,$additionalData);
    
       /* $peticionbanco = $cxn->PSETransactionRequest ('1022','0', 'http://prueba-jakcson115.c9.io/PlacetoPay/respuestaTX.php', uniqid(), 
                                'PruebaPSE', 'ES', 'COP', 10000, 0, 0, 0, $payer, '192.168.185.1', $_SERVER['HTTP_USER_AGENT']);
                                */
header('Location:'.$transaccion); 
    var_dump($transaccion); $transaccion;
	print ' NO FUNCIONA : ' . $e->getMessage() . PHP_EOL;

