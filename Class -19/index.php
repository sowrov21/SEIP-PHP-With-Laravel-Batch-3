<?php
session_start();
if(  empty($_SESSION['email'])
{
          header("Location:./login.php");
}
?>

        <?php include ('./includes/header.php');?>
        
        <div class="container">

        </div>

       <?php include ('./includes/footer.php');?> 
