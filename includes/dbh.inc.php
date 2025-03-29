<?php 
//connect to database

//DSN- Data Source Name(telling the server what database we are using, and where it is located, and what type of host)

$dsn = "mysql:host=localhost;dbname=myfirstdatabase";
$dbusername = "root";
$dbpassword = "";


//try catch block to catch errors
//PDO - PHP Data Object, a class that allows us to connect to a database and perform operations on it
//PDO is a database access layer providing a uniform method of access to multiple databases
try {
    //create PDO object
    $pdo = new PDO($dsn, $dbusername, $dbpassword);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

} catch (PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
    exit(); // Exit the script if connection fails

}
