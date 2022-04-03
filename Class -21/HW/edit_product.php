<?php include_once './db.php';?>
        <?php include ('./includes/header.php');?>


        
        <?php
        
              $id = $_GET['product_id'];

                  $sql = "SELECT * FROM inventory.products WHERE   id='$id'";

            $statement = $pdo->query($sql);
             $statement = $pdo->prepare($sql);
            $statement->execute();
            // get one product
            $product = $statement->fetchAll(PDO::FETCH_ASSOC);
        //    echo "<pre>";
        //     print_r($product);
        //    echo "</pre>";

                  //echo $product[0]['name']; 
        
        ?>
        
        <div class="container">
        <form action="./function/product_edit.php" method="post">

        <fieldset>
                <legend>Update  product</legend>

<input type="hidden" name="id" id="id" value="<?php echo $product[0]['id'];?>" >

            <div class="form-group">
                <label for="name">Product Name</label>
                <input type="text" name="name" id="name" value="<?php echo $product[0]['name']; ?>" placeholder="Enter Product Name" class="form-control">
            </div>
            <div class="form-group">
                <label for="price">Product Price</label>
                <input type="number" name="price" id="price" value="<?php echo $product[0]['price']; ?>" placeholder="Enter Product Price" class="form-control">
            </div>
            <div class="form-group">
                <label for="quantity">Product Quantity</label>
                <input type="number" name="quantity" id="quantity" value="<?php echo $product[0]['quantity']; ?>" placeholder="Enter Product Quantity" class="form-control">
            </div>
              <br />
            <input type="submit" value="Update" class="btn btn-success form-control">

        </fieldset>



        </form>
        </div>

       <?php include ('./includes/footer.php');?>
