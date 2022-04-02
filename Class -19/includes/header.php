<?php
    $is_login = false;
    
        if(  empty($_SESSION['email'])){
                header("Location:./login.php");
        }else{
              $is_login = true;
        }
?>


<!DOCTYPE html>
<html lang="en">
<head>

    <title>HTML Form with PHP</title>

    <link rel="stylesheet" href="css/styles.css">

   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.1/js/bootstrap.bundle.min.js" integrity="sha512-mULnawDVcCnsk9a4aG1QLZZ6rcce/jSzEGqUkeOLy0b6q0+T6syHrxlsAGH7ZVoqC93Pd0lBqd6WguPWih7VHA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <style type="text/css">
    .table-hover tbody tr:hover td {
        background: #E6E6E7;
    }
    th {
        background-color: blue;
        color: white;
    }
    thead {
        background-color: #282A35;
        color: white;
    }

        thead tr {
        background-color: #282A35;
        color: white;
    }
</style>

</head>
<body>
    <div class="header">
        <span> <a href="./index.php">Home</a> </span>
        <span> <a href="./register.php">Register</a> </span>
        <span> <a href="./login.php">Login</a> </span>
        <span> <a href="./users.php">All User</a> </span>

    </div>
</body>
