<?php include_once './config/database.php';?>

<?php 

session_start();

        if(!isset($_SESSION['email'])){
                header('location: login.php');
        }

?>

<?php

            $sql = 'SELECT * FROM school.students';

            $statement = $pdo->query($sql);
             $statement = $pdo->prepare($sql);
            $statement->execute();
            // get all products
            $students = $statement->fetchAll(PDO::FETCH_ASSOC);

?>
        <?php include ('./includes/header.php');?>
        
        <div class="container">

        <table class="table table-striped table-bordered table-hover mt-4">
            <thead>
                <tr>
                    <td>#SL NO.</td>
                    <td>Name</td>
                    <td>Class</td>
                    <td>Action</td>
                </tr>
            </thead>
            <tbody>
                <?php 
                $sl_no =1;
                foreach ($students as $student) :?>
                <tr>
                    <td><?php echo $sl_no++?></td>
                    <td><?php echo $student['name'] ?></td>
                    <td><?php echo $student['class'] ?></td>
                    <td>
                   <a class="btn btn-info " href="student_details.php?student_id=<?php echo $student['id'] ?>">view</a>  
                   <a class="btn btn-primary" href="edit_student.php?student_id=<?php echo $student['id'] ?>">edit</a>  
                   <a class="btn btn-danger" href="confirm_student_delete.php?student_id=<?php echo $student['id'] ?>">delete</a>  
                    </td>
                </tr>

                <?php endforeach; ?>
            </tbody>
        </table>

        </div>

       <?php include ('./includes/footer.php');?> 
