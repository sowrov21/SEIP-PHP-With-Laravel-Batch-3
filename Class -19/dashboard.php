<?php
// Start the session
session_start();

if(!isset($_SESSION['email']))
{
    header('Location:login.php');
}else{

    echo $_SESSION['email']."<br>";
    echo 'welcome dashboard';
}



?>



