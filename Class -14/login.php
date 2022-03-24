<?php

if ($_SERVER['REQUEST_METHOD'] == 'POST'){

    $email = $_REQUEST['email'];

    $password = $_REQUEST['password'];

    echo $email."<br>";

     echo "<pre>";
     print_r($_POST);
     echo "</pre>";

     echo "<h2>";
     echo json_encode($_POST);
     echo "</h2>";
    //var_dump($_POST);

         echo "<pre>";
     print_r($_REQUEST);
     echo "</pre>";

  }