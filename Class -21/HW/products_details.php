
<?php include_once './db.php';?>
        <?php include ('./includes/header.php');?>
     <?php 

              $id = $_GET['product_id'];

                  $sql = "SELECT * FROM inventory.products WHERE   id='$id'";

            $statement = $pdo->query($sql);
             $statement = $pdo->prepare($sql);
            $statement->execute();
            // get one product
            $products = $statement->fetchAll(PDO::FETCH_ASSOC);
        //    echo "<pre>";
        //     print_r($product);
        //    echo "</pre>";

                  //echo $product[0]['name']; 
     ?>   
        <div class="container">

          <table class="table table-striped table-bordered table-hover mt-3" >
            <thead>
                <h3>Product Information</h3>
            </thead>
            <tbody>

                <?php 
                $sl_no =1;
                foreach ($products as $product) :?>

                <tr>
                    <td class="">Name</td>
                   <td > <?php echo $product['name'] ?></td>
                </tr>
                <tr>
                    <td >Price</td>
                   <td ><?php echo $product['price'] ?></td>
                </tr>
                <tr>
                    <td >Quantity</td>
                   <td ><?php echo $product['quantity'] ?></td>
                </tr>

                <?php endforeach; ?>
            </tbody>
        </table>
      
        </div>

       <?php include ('./includes/footer.php');?> 
