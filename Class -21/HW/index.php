<?php include './db.php'?>
<?php 

session_start();

        if(!isset($_SESSION['email'])){
                header('location: login.php');
        }

?>

<?php  include('./includes/header.php')?>
        <div class="container">
        <h5>WELCOME <?php echo $_SESSION['email'];?></h5>
        

        </div>
<?php  include('./includes/footer.php')?>
