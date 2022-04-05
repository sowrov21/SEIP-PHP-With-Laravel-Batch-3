
<?php include '../config/database.php';?>
<?php

//var_dump($pdo);
if($_SERVER['REQUEST_METHOD'] == 'POST'){


    $name = $_POST['name'];
    $class = $_POST['class'];
  
    //var_dump($_POST);

    $insert_query ="INSERT INTO school.students (name,class) VALUES('$name','$class')";

    $statement = $pdo->prepare($insert_query);
    $statement->execute();
    header("Location:../all_student.php");


}
else{
 
}

