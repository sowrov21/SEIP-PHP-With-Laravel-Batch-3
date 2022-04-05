
<?php include_once './config/database.php';?>
        <?php include ('./includes/header.php');?>
     <?php 

              $id = $_GET['student_id'];

                  $sql = "SELECT * FROM school.students WHERE   id='$id'";

            $statement = $pdo->query($sql);
             $statement = $pdo->prepare($sql);
            $statement->execute();
            // get one student
            $students = $statement->fetchAll(PDO::FETCH_ASSOC);
        //    echo "<pre>";
        //     print_r($students);
        //    echo "</pre>";

                  //echo $students[0]['name']; 
     ?>   
        <div class="container">

          <table class="table table-striped table-bordered table-hover mt-3" >
            <thead>
                <h3>Student Information</h3>
            </thead>
            <tbody>

                <?php 
                $sl_no =1;
                foreach ($students as $student) :?>

                <tr>
                    <td class="">Name</td>
                   <td > <?php echo $student['name'] ?></td>
                </tr>
                <tr>
                    <td >Class</td>
                   <td ><?php echo $student['class'] ?></td>
                </tr>

                <?php endforeach; ?>
            </tbody>
        </table>
      
        </div>

       <?php include ('./includes/footer.php');?> 
