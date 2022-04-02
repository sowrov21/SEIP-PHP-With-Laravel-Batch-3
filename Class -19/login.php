
        <?php include ('./includes/header.php');?>


      

        
        <div class="container">
        <form action="./function/login_check.php" method="post">

        <fieldset>
                <legend>Login Form</legend>

            <div class="form-group">
                <label for="username">Email</label>
                <input type="email" name="email" id="email" value="" placeholder="Enter email" class="form-control form-control>
               
            </div>

            <div class="form-group ">
                <label for="password">Password</label>
                <input type="password" name="password" id="password" value="" placeholder="Enter Password" class="form-control form-control">
            </div> <br />

            <input type="submit" value="Login"></br>

             <span style="color:red;"><?php  if (!empty($_SESSION['message'])){echo $_SESSION['message'];}?></span>

        </fieldset>



        </form>
        </div>

       <?php include ('./includes/footer.php');?>
