<?php include_once './config/database.php';?>
        <?php include ('./includes/header.php');?>


        
        <?php
        
              $id = $_GET['student_id'];

                  $sql = "SELECT * FROM school.students WHERE   id='$id'";

            $statement = $pdo->query($sql);
             $statement = $pdo->prepare($sql);
            $statement->execute();
            // get one student
            $student = $statement->fetchAll(PDO::FETCH_ASSOC);
        //    echo "<pre>";
        //     print_r($student);
        //    echo "</pre>";

                  //echo $student[0]['name']; 
        
        ?>
        
        <div class="container">
        <form action="./function/student_edit.php" method="post">

        <fieldset>
                <legend>Update  Student</legend>

<input type="hidden" name="id" id="id" value="<?php echo $student[0]['id'];?>" >

            <div class="form-group">
                <label for="name">Student Name</label>
                <input type="text" name="name" id="name" value="<?php echo $student[0]['name']; ?>" placeholder="Enter Student Name" class="form-control">
            </div>
            <div class="form-group">
                <label for="class">Product Price</label>
                <input type="number" name="class" id="class" value="<?php echo $student[0]['class']; ?>" placeholder="Enter Student Class" class="form-control">
            </div>

              <br />
            <input type="submit" value="Update" class="btn btn-success form-control">

        </fieldset>



        </form>
        </div>

       <?php include ('./includes/footer.php');?>
