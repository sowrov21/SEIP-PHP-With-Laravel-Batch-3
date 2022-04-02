
<?php include_once '../db.php';?>


<?php


if($_SERVER['REQUEST_METHOD'] == 'POST'){

   
    
    $email = $_POST['email'];
    $password = $_POST['password'];


            
        
        $sql = "SELECT * FROM login_php.users WHERE email = '$email' AND password = '$password'";

            $statement = $pdo->prepare($sql);
            $statement->execute();

            // get all users
            $user = $statement->fetchColumn();

            //print_r($users);

            if($user)
            {
                   //session_start();
                   $_SESSION['email']=$email;
                   header("Location:../dashboard.php");

            }else{

                $_SESSION['message'] = "Please enter correct info";
                 header("Location:../login.php");

            }

        }
        

?>
