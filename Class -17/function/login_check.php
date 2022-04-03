<?php

if($_SERVER['REQUEST_METHOD'] == 'POST'){


    $username = $_POST['username'];
    $password = $_POST['password'];

    if($username!=='' && $password!=='')
    {
            if($username=="asd" && $password=="111"){
            echo "Login Successfully!";


                echo <<< DEMO

            <div style="border:2px solid black; padding: 20px;">


                <h2>Welcome $username</h2>
            
            
            </div>


        DEMO;
            }
            else{

                echo "Credentials Invalid";
            }
    }
    else{

        header("location: ../login.php");
        
       echo $message = "Please enter Username & Password";
         
    }
    


}
else{

}