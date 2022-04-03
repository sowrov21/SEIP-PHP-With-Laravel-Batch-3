
<?php include_once './db.php';?>
        <?php include ('./includes/header.php');?>

        <?php
        
              $id = $_GET['product_id'];
         
              //echo $id;
        
              $sql = "SELECT * FROM inventory.products WHERE   id='$id'";

            $statement = $pdo->query($sql);
             $statement = $pdo->prepare($sql);
            $statement->execute();
            // get one product
            $product = $statement->fetchAll(PDO::FETCH_ASSOC);
        //    echo "<pre>";
        //     print_r($product);
        //    echo "</pre>";

        if($_SERVER['REQUEST_METHOD'] == 'POST')
        {
             //echo isset($_POST['delete']);

             if(isset($_POST['delete'])){

            $sql = "DELETE FROM inventory.products WHERE   id='$id'";
            $statement = $pdo->query($sql);
            $statement = $pdo->prepare($sql);
            $statement->execute();
             }
        }
       
        ?>
        
        
        <div class="container mt-4">

        <h2 style="color:red;">Are you sure to delete  <span style="color:blue;"><?php echo $product[0]['name']?></span>?</h2>

        <form action="" method="post">
          
        <input type="submit" name="delete" value= "Yes" class="btn btn-success">
           
           <a class="btn btn-danger"href="./products.php"> Cancel</a>

        </form>

     

        </div>

       <?php include ('./includes/footer.php');?> 
