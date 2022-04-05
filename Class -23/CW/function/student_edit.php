
<?php include '../config/database.php';?>
<?php

if($_SERVER['REQUEST_METHOD'] == 'POST'){


    $id = $_POST['id'];
    $name = $_POST['name'];
    $class = $_POST['class'];
        //     echo "<pre>";
        //     print_r($_POST);
        //    echo "</pre>";

    $update_query ="UPDATE  school.students SET name = '$name', class='$class' WHERE id='$id' ";

    $statement = $pdo->prepare($update_query);
    $statement->execute();
    
   header("Location: ../all_student.php");


}
else{
 
}

