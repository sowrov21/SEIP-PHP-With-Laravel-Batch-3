
<?php include '../db.php';?>
<?php

if($_SERVER['REQUEST_METHOD'] == 'POST'){


    $id = $_POST['id'];
    $name = $_POST['name'];
    $price = $_POST['price'];
    $quantity = $_POST['quantity'];
        //     echo "<pre>";
        //     print_r($_POST);
        //    echo "</pre>";

    $update_query ="UPDATE  inventory.products SET name = '$name', price='$price', quantity ='$quantity' WHERE id='$id' ";

    $statement = $pdo->prepare($update_query);
    $statement->execute();
    
   header("Location: ../products.php");


}
else{
 
}

