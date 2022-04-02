
<?php include_once './db.php';?>
        <?php include ('./includes/header.php');?>
     <?php 
      $id = $_GET['user_id'];

                  $sql = "SELECT * FROM login_php.users WHERE   id='$id'";

            $statement = $pdo->query($sql);
             $statement = $pdo->prepare($sql);
            $statement->execute();
            // get all users
            $users = $statement->fetchAll(PDO::FETCH_ASSOC);
        //    echo "<pre>";
        //     print_r($users);
        //       echo "</pre>";
     ?>   
        <div class="container">

          <table class="table table-striped table-bordered table-hover mt-3" >
            <thead>
                <h3>User Information</h3>
            </thead>
            <tbody>

                <?php 
                $sl_no =1;
                foreach ($users as $user) :?>

                <tr>
                    <td class="">Email</td>
                   <td ><?php echo $user['email'] ?></td>
                </tr>
                <tr>
                    <td >Name</td>
                   <td ><?php echo $user['name'] ?></td>
                </tr>

                <?php endforeach; ?>
            </tbody>
        </table>
      
        </div>

       <?php include ('./includes/footer.php');?> 
