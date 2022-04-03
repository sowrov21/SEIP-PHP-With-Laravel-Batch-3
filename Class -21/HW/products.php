<?php include_once './db.php';?>

<?php

            $sql = 'SELECT * FROM inventory.products';

            $statement = $pdo->query($sql);
             $statement = $pdo->prepare($sql);
            $statement->execute();
            // get all products
            $products = $statement->fetchAll(PDO::FETCH_ASSOC);

?>
        <?php include ('./includes/header.php');?>
        
        <div class="container">

        <table class="table table-striped table-bordered table-hover mt-4">
            <thead>
                <tr>
                    <td>#SL NO.</td>
                    <td>Name</td>
                    <td>Unit Price</td>
                    <td>Quantity</td>
                    <td>Action</td>
                </tr>
            </thead>
            <tbody>
                <?php 
                $sl_no =1;
                foreach ($products as $product) :?>
                <tr>
                    <td><?php echo $sl_no++?></td>
                    <td><?php echo $product['name'] ?></td>
                    <td><?php echo $product['price'] ?></td>
                    <td><?php echo $product['quantity'] ?></td>
                    <td>
                   <a class="btn btn-info " href="products_details.php?product_id=<?php echo $product['id'] ?>">view</a>  
                   <a class="btn btn-primary" href="edit_product.php?product_id=<?php echo $product['id'] ?>">edit</a>  
                   <a class="btn btn-danger" href="confirm_product_delete.php?product_id=<?php echo $product['id'] ?>">delete</a>  
                    </td>
                </tr>

                <?php endforeach; ?>
            </tbody>
        </table>

        </div>

       <?php include ('./includes/footer.php');?> 
