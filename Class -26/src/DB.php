<?php

namespace Pondit;

use PDO;
use PDOException;
class DB {
    public $pdo;

    public function coonnection(){
                    $servername = "localhost";
                    $username = "root";
                    $password = 'root';
                    $dbname = "inventory";

                    try {

                    $this->pdo = new PDO(

                        "mysql:host = $servername;
                        dbname =$dbname", 
                        $username, 
                        $password);
                        $this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

                        // echo "DB Connected";
                        return $this->pdo;


                    }catch(Exception $e){

                        echo "Error: " . $e->getMessage()." near line".$e->getLine();

                    }
    }


}
