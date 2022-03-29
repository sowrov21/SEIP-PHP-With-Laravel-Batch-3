<?php

if($_SERVER['REQUEST_METHOD'] == 'POST'){


    $firstName = $_POST['firstName'];
    $lastName = $_POST['lastName'];
    $gender = $_POST['gender'];
    $password = $_POST['password'];

    echo <<< DEMO

    <div style="border:2px solid black; padding: 20px;">

        <p>First Name: $firstName</p>
        <p>Last Name: $lastName</p>
        <p>Password: $password</p>
        <p>Gender: $gender</p>
    
    </div>


DEMO;
    



}
else{

}