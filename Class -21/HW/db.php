<?php

$servername = "localhost";
$username = "root";
$password = 'root';
$dbname = "inventory";

try {

   $pdo = new PDO(

    "mysql:host = $servername;
       dbname =$dbname", 
       $username, 
       $password);
       $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

      // echo "DB Connected";
       return $pdo;


}catch(Exception $e){

    echo "Error: " . $e->getMessage()." near line".$e->getLine();

}
