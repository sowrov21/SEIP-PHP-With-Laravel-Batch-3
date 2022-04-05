
<?php include_once '../config/database.php';?>

<?php


if($_SERVER['REQUEST_METHOD'] == 'POST'){

   
    
    $email = $_POST['email'];
    $password = $_POST['password'];


        if( !empty($email) && !empty($password)){

         $sql = "SELECT * FROM inventory.users WHERE email = '$email' AND password = '$password'";

            $statement = $pdo->prepare($sql);
            $statement->execute();

            // get all users
            $user = $statement->fetchColumn();

            //print_r($users);

            if($user)
            {
                session_start();
                 $_SESSION['email'] = $email;
                   header("Location:../index.php");

            }

        }else{

                $message = "email or password incorrect";
                 header("Location:../login.php");

            } 
        


        }
        

?>
