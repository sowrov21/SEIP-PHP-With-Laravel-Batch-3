
<?php include '../db.php';?>
<?php

//var_dump($pdo);
if($_SERVER['REQUEST_METHOD'] == 'POST'){


    $id = $_POST['id'];
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];
        //     echo "<pre>";
        //     print_r($_POST);
        //    echo "</pre>";

    $update_query ="UPDATE  login_php.users SET email = '$email', name='$name', password ='$password' WHERE id=' $id' ";

    $statement = $pdo->prepare($update_query);
    $statement->execute();
    
    header("Location:../users.php");


}
else{
 
}

