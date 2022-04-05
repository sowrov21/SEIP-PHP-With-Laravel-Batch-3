
<?php include './includes/header.php';?>

    <?php 

    session_start();

            if(!isset($_SESSION['email'])){
                    header('location: login.php');
            }

    ?>
            
        <div class="container">
        <form action="./function/student_store.php" method="post">

        <fieldset>
                <legend>Add new student</legend>

            <div class="form-group">
                <label for="name">Student Name</label>
                <input type="text" name="name" id="name" value="" placeholder="Enter Student Name" class="form-control">
            </div>
            <div class="form-group">
                <label for="class">Student Class</label>
                <input type="number" name="class" id="class" value="" placeholder="Enter Student Class" class="form-control">
            </div>

              <br />
            <input type="submit" value="Add" class="btn btn-primary form-control">

        </fieldset>



        </form>
        </div>

       <?php include ('./includes/footer.php');?>
