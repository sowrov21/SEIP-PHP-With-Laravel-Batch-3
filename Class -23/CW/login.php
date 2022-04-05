
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

                var_dump($_POST);    
                $error = "email or password incorrect";
                 header("Location:./login.php");

            } 
        


        }
        

?>

       
       
       <?php include ('./includes/header.php');?>

        <div class="container">
        <form action="" method="post">

        <fieldset>
                <legend>Login Form</legend>

            <div class="form-group">
                <label for="username">Email</label>
                <input type="email" name="email" id="email" value="" placeholder="Enter email" class="form-control form-control">
               
            </div>

            <div class="form-group ">
                <label for="password">Password</label>
                <input type="password" name="password" id="password" value="" placeholder="Enter Password" class="form-control form-control">
            </div> <br />

            <input type="submit" value="Login"></br>

             <span style="color:red;"><?php echo $error ?? '';?></span>

        </fieldset>



        </form>
        </div>

       <?php include ('./includes/footer.php');?>
