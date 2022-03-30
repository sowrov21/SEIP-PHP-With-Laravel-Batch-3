
        <?php include ('./includes/header.php');?>
        
        <div class="container">
        <form action="./function/store.php" method="post">

        <fieldset>
                <legend>Registration Form</legend>

            <div>
                <label for="name">Name</label>
                <input type="text" name="name" id="name" value="" placeholder="Enter Name">
            </div>
            <div>
                <label for="email">Email</label>
                <input type="email" name="email" id="email" value="" placeholder="Enter email">
            </div>
            <div>
                <label for="firstName">Password</label>
                <input type="password" name="password" id="password" value="" placeholder="Enter Password">
            </div>

            <input type="submit" value="Register">

        </fieldset>



        </form>
        </div>

       <?php include ('./includes/footer.php');?>