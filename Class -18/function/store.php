
<?php include ('../db.php');?>
<?php

//var_dump($pdo);
if($_SERVER['REQUEST_METHOD'] == 'POST'){


    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    //var_dump($_POST);

    $insert_query ="INSERT INTO login_php.users (email,name,password) VALUES('$email','$name','$password')";

    $statement = $pdo->prepare($insert_query);
    $statement->execute();
    header("Location:../index.php");


}
else{
 
}

