
        <?php include ('./includes/header.php');?>
        
        <div class="container">
        <form action="./function/store.php" method="post">

        <fieldset>
                <legend>Registration Form</legend>

            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" name="name" id="name" value="" placeholder="Enter Name" class="form-control">
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" name="email" id="email" value="" placeholder="Enter email" class="form-control">
            </div>
            <div class="form-group">
                <label for="firstName">Password</label>
                <input type="password" name="password" id="password" value="" placeholder="Enter Password" class="form-control">
            </div>
              <br />
            <input type="submit" value="Register" class="btn btn-primary form-control">

        </fieldset>



        </form>
        </div>

       <?php include ('./includes/footer.php');?>
