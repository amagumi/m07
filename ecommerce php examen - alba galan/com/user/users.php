<?php

//functions
////////////////////////////////////////////////////////////////////////

function userRegister($dni, $name, $country, $password)
{

    echo "user register <br>";
    echo $dni;
    echo $name;
    echo $country;
    echo $password;

    $users = getUsers();

    $user = $users->addChild('user');
    $user->addChild('dni', $dni);
    $user->addChild('name', $name);
    $user->addChild('country', $country);
    $user->addChild('password', $password);
    
    $user_currency = $user->addChild('user_currency');
    $user_currency->addChild('currency', 'EU');

    $users->asXML('xmlDB/users.xml');
}

function getUsers() {

    $file= 'xmlDB/users.xml';

    // Load existing connections or create a new XML document
    if (file_exists($file)) {
        echo "hola";
        $user = simplexml_load_file($file);
    } else {
        echo "adios";
        $user = new SimpleXMLElement('<user></user>');
    }

    return $user;
}


?>