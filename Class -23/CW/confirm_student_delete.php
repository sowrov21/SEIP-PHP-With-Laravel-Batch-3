
<?php include_once './config/database.php';?>
<?php include ('./includes/header.php');?>

   <?php 

   session_start();

         if(!isset($_SESSION['email'])){
                  header('location: login.php');
         }

   ?>

        <?php
        
              $id = $_GET['student_id'];
         
              //echo $id;
        
              $sql = "SELECT * FROM school.students WHERE   id='$id'";

             $statement = $pdo->query($sql);
             $statement = $pdo->prepare($sql);
             $statement->execute();
            // get one student
            $student = $statement->fetchAll(PDO::FETCH_ASSOC);
        //    echo "<pre>";
        //     print_r($student);
        //    echo "</pre>";

        if($_SERVER['REQUEST_METHOD'] == 'POST')
        {
             //echo isset($_POST['delete']);

             if(isset($_POST['delete'])){

                $sql = "DELETE FROM school.students WHERE   id='$id'";
                $statement = $pdo->query($sql);
                $statement = $pdo->prepare($sql);
                $statement->execute();
               
                header("Location:./all_student.php");
             }
        }
       
        ?>
        
        
        <div class="container mt-4">

        <h2 style="color:red;">Are you sure to delete  <span style="color:blue;"><?php echo $student[0]['name']?></span>?</h2>

        <form action="" method="post">
          
        <input type="submit" name="delete" value= "Yes" class="btn btn-success">
           
           <a class="btn btn-danger"href="./all_student.php"> Cancel</a>

        </form>

     

        </div>

       <?php include ('./includes/footer.php');?> 
