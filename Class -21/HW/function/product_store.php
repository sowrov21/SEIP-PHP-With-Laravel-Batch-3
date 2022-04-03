
<?php include '../db.php';?>
<?php

//var_dump($pdo);
if($_SERVER['REQUEST_METHOD'] == 'POST'){


    $name = $_POST['name'];
    $price = $_POST['price'];
    $quantity = $_POST['quantity'];

    //var_dump($_POST);

    $insert_query ="INSERT INTO inventory.products (name,price,quantity) VALUES('$name','$price','$quantity')";

    $statement = $pdo->prepare($insert_query);
    $statement->execute();
    header("Location:../index.php");


}
else{
 
}

