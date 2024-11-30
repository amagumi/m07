<?php
require_once 'com/cart/clsCart.php';

class clsUser
{

    private $dni;
    private $name;
    private $country;
    private $password;

    
    public function __construct($dni, $name, $country, $password)
    {
        $this->dni = $dni;
        $this->name = $name;
        $this->country = $country;
        $this->password = $password;
    }

    //getters para obtener cada propiedad del objeto
    public function getDni()
    {
        return $this->dni;
    }

    public function getName()
    {
        return $this->name;
    } 

    public function getCountry()
    {
        return $this->country;
    }

    public function getPassword()
    {
        return $this->password;
    }


    //setters
    public function setDni($dni)
    {
        $this->dni = $dni;
    }

    public function setName($name)
    {
        $this->name = $name;
    }

    public function setCountry($country)
    {
        $this->country = $country;
    }

    public function setPassword($password)
    {
        $this->password = $password;
    }




    public function verifyPassword($password)
    {
        return $this->password === $password;
    }


    //function create user
    ////////////////////////////////////////////////////////////////////////

    // function userRegister($dni, $name, $country, $password) //el dni es el username
    // {

    //     echo "user register <br>";
    //     echo $dni;
    //     echo $name;
    //     echo $country;
    //     echo $password;

    //     $users = getUsers();

    //     $user = $users->addChild('user');
    //     $user->addChild('dni', $dni);
    //     $user->addChild('name', $name);
    //     $user->addChild('country', $country);
    //     $user->addChild('password', $password);

    //     $user_currency = $user->addChild('user_currency');
    //     $user_currency->addChild('currency', 'EU');

    //     $users->asXML('xmlDB/users.xml');
    // }

    // function getUsers()
    // {

    //     $file = 'xmlDB/users.xml';

    //     // Load existing connections or create a new XML document
    //     if (file_exists($file)) {
    //         echo "hola";
    //         $user = simplexml_load_file($file);
    //     } else {
    //         echo "adios";
    //         $user = new SimpleXMLElement('<users></users>');
    //     }

    //     return $user;
    // }



    // //function login
    // ////////////////////////////////////////////////////////////////////////

    // // crea el archivo de conexiones

    // function writeConnection($dni)
    // {
    //     // Load existing connections or create a new XML document
    //     if (file_exists('connection.xml')) {
    //         $connections = simplexml_load_file('connection.xml');
    //     } else {

    //         $connections = new SimpleXMLElement('<connections></connections>');
    //     }
    //     // Create a new connection entry
    //     $connection = $connections->addChild('connection');
    //     $connection->addChild('user', $dni);
    //     $connection->addChild('date', date('Y-m-d H:i:s'));
    //     // Save the updated connections to connection.xml
    //     $connections->asXML('connection.xml');
    // }


    // // login

    // // Check if username and password are provided in the URL
    // if (isset($_GET['dni']) && isset($_GET['password'])) {
    //     $dni = $_GET['dni'];
    //     $password = $_GET['password'];

    //     // Load user.xml file
    //     $users = simplexml_load_file('xmlDB/users.xml');
    //     // Check if the user exists and the password matches
    //     foreach ($users->user as $user) {
    //         if ($user->dni == $dni && $user->password == $password) {
    //             // Check if the user is already connected
    //             $connections = simplexml_load_file('connection.xml');
    //             if (!isUserConnected($dni, $connections)) {
    //                 // Write the new connection to connection.xml
    //                 writeConnection($dni);
    //                 echo "Connection successful for user: $dni" . "<br>";
    //                 echo '<a href="tienda.php">Ir a la tienda</a>';
    //             } else {
    //                 echo "User $dni is already connected." . "<br>";
    //                 echo '<a href="tienda.php">Ir a la tienda</a>' . "<br><br>";
    //             }
    //             exit(); // Stop execution after successful connection
    //         }
    //     }
    //     echo "Invalid dni or password";
    // } else {
    //     echo "dni and password are required in the URL" . "<br><br>";
    // }

    // // Function to check if a user is already connected
    // ///////////////////////////////////////////////////////
    // function isUserConnected($username, $connections)
    // {
    //     foreach ($connections->connection as $connection) {
    //         if ($connection->user == $username) {
    //             // Check if the connection is still valid (within 5 minutes)
    //             $currentTime = time();
    //             $connectionTime = strtotime($connection->date);
    //             $expirationTime = $connectionTime + (5 * 60);
    //             if ($currentTime < $expirationTime) {
    //                 return true; // User is already connected
    //             }
    //         }
    //     }
    //     return false; // User is not connected or the connection has expired
    // }

}
