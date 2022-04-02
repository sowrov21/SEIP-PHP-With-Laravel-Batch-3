<?php include_once './db.php';?>
        <?php include ('./includes/header.php');?>

        <?php
        
              $id = $_GET['user_id'];

                  $sql = "SELECT * FROM login_php.users WHERE   id='$id'";

            $statement = $pdo->query($sql);
             $statement = $pdo->prepare($sql);
            $statement->execute();
            // get one users
            $users = $statement->fetchAll(PDO::FETCH_ASSOC);
        //    echo "<pre>";
        //     print_r($users);
        //    echo "</pre>";

                  //echo $users[0]['name']; 
        
        ?>
        
        <div class="container mt-4">
        <form action="./function/update.php" method="post">

        <fieldset>
                <legend>Edit User Information</legend>
            
    <input type="hidden" name="id" id="id" value="<?php echo $users[0]['id'];?>" >

            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" name="name" id="name" value="<?php echo $users[0]['name']; ?>" placeholder="Enter Name" class="form-control">
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" name="email" id="email" value="<?php echo $users[0]['email']; ?>" placeholder="Enter email" class="form-control">
            </div>
            <div class="form-group">
                <label for="firstName">Password</label>
                <input type="password" name="password" id="password" value="<?php echo $users[0]['password']; ?>" placeholder="Enter Password" class="form-control">
            </div>
</br>
            <input class="btn btn-success" type="submit" value="Update">

        </fieldset>



        </form>
        </div>

       <?php include ('./includes/footer.php');?>
