
        <?php include ('./includes/header.php');?>
        
        <div class="container">
        <form action="./function/store.php" method="post">

        <fieldset>
                <legend>Registration Form</legend>

            <div>
                <label for="firstName">First Name</label>
                <input type="text" name="firstName" id="firstName" value="" placeholder="Enter First Name">
            </div>
            <div>
                <label for="lastName">Last Name</label>
                <input type="text" name="lastName" id="lastName" value="" placeholder="Enter Last Name">
            </div>
            <div>
                <label for="firstName">Password</label>
                <input type="password" name="password" id="password" value="" placeholder="Enter Password">
            </div>
            <div>
                <label for="gender">Gender</label>
                <input type="radio" name="gender" value="male"> Male
                <input type="radio" name="gender" value="female"> Female
                <input type="radio" name="gender" value="other"> Other
            </div>
            <input type="submit" value="Register">

        </fieldset>



        </form>
        </div>

       <?php include ('./includes/footer.php');?>