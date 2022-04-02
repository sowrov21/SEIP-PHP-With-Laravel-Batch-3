
<?php include_once './db.php';?>
        <?php include ('./includes/header.php');?>

        <?php
        
              $id = $_GET['user_id'];
         
              //echo $id;
        
              $sql = "SELECT * FROM login_php.users WHERE   id='$id'";

            $statement = $pdo->query($sql);
             $statement = $pdo->prepare($sql);
            $statement->execute();
            // get one users
            $user = $statement->fetchAll(PDO::FETCH_ASSOC);
        //    echo "<pre>";
        //     print_r($users);
        //    echo "</pre>";

        if($_SERVER['REQUEST_METHOD'] == 'POST')
        {
             //echo isset($_POST['delete']);

             if(isset($_POST['delete'])){

            $sql = "DELETE FROM login_php.users WHERE   id='$id'";
            $statement = $pdo->query($sql);
            $statement = $pdo->prepare($sql);
            $statement->execute();
             }
        }
       
        ?>
        
        
        <div class="container mt-4">

        <h2 style="color:red;">Are you sure to delete  <span style="color:blue;"><?php echo $user[0]['name']?></span>?</h2>

        <form action="" method="post">
          
        <input type="submit" name="delete" value= "Yes" class="btn btn-success">
           
           <a class="btn btn-danger"href="./users.php"> Cancel</a>

        </form>

     

        </div>

       <?php include ('./includes/footer.php');?> 
