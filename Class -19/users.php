<?php include_once './db.php';?>

<?php

            $sql = 'SELECT * FROM login_php.users';

            $statement = $pdo->query($sql);
             $statement = $pdo->prepare($sql);
            $statement->execute();
            // get all users
            $users = $statement->fetchAll(PDO::FETCH_ASSOC);

?>
        <?php include ('./includes/header.php');?>
        
        <div class="container">

        <table class="table table-striped table-bordered table-hover mt-4">
            <thead>
                <tr>
                    <td>#SL NO.</td>
                    <td>Email</td>
                    <td>Name</td>
                    <td>Action</td>
                </tr>
            </thead>
            <tbody>
                <?php 
                $sl_no =1;
                foreach ($users as $user) :?>
                <tr>
                    <td><?php echo $sl_no++?></td>
                    <td><?php echo $user['email'] ?></td>
                    <td><?php echo $user['name'] ?></td>
                    <td>
                   <a class="btn btn-info " href="view_details.php?user_id=<?php echo $user['id'] ?>">view</a>  
                   <a class="btn btn-primary" href="edit_user.php?user_id=<?php echo $user['id'] ?>">edit</a>  
                   <a class="btn btn-danger" href="confirm_delete.php?user_id=<?php echo $user['id'] ?>">delete</a>  
                    </td>
                </tr>

                <?php endforeach; ?>
            </tbody>
        </table>

        </div>

       <?php include ('./includes/footer.php');?> 
