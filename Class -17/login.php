
        <?php include ('./includes/header.php');?>
        
        <div class="container">
        <form action="./function/login.php" method="post">

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

            <input type="submit" value="Login">

        </fieldset>



        </form>
        </div>

       <?php include ('./includes/footer.php');?>