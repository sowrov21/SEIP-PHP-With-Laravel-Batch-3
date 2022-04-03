
        <?php include ('./includes/header.php');?>
        
        <div class="container">
        <form action="./function/product_store.php" method="post">

        <fieldset>
                <legend>Add new product</legend>

            <div class="form-group">
                <label for="name">Product Name</label>
                <input type="text" name="name" id="name" value="" placeholder="Enter Product Name" class="form-control">
            </div>
            <div class="form-group">
                <label for="price">Product Price</label>
                <input type="number" name="price" id="price" value="" placeholder="Enter Product Price" class="form-control">
            </div>
            <div class="form-group">
                <label for="quantity">Product Quantity</label>
                <input type="number" name="quantity" id="quantity" value="" placeholder="Enter Product Quantity" class="form-control">
            </div>
              <br />
            <input type="submit" value="Add" class="btn btn-primary form-control">

        </fieldset>



        </form>
        </div>

       <?php include ('./includes/footer.php');?>
