





        <?php include ('./includes/header.php');?>

        
        <div class="container">
        <form action="./function/login_check.php" method="post">

        <fieldset>
                <legend>Login Form</legend>

            <div>
                <label for="username">Username</label>
                <input type="text" name="username" id="username" value="" placeholder="Enter username">
               
            </div>

            <div>
                <label for="password">Password</label>
                <input type="password" name="password" id="password" value="" placeholder="Enter Password">
            </div>

            <input type="submit" value="Login"></br>

             <span style="color:red;"><?php echo $message;?></span>

        </fieldset>



        </form>
        </div>

       <?php include ('./includes/footer.php');?>