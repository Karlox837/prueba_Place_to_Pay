<?php

public function autenticathe(){

    $login = '6dd490faf9cb87a9862245da41170ff2';
    $tranKey = '024h1IlD';
    $Nonce = '125454678asw';
    $Created= date('c');
    $PasswordDigest = base64_encode(sha1($Nonce . $Created . $tranKey, true));

    return autenticathe;
};





