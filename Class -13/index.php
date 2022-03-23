<?php

$a= 5;
$b= 6;
$c= 7;

/*
if($a>$b && $a>$c){

    echo "$a is greater than $b and $c";
}

else if($b>$a && $b>$c){

    echo "$b is greater than $a and $c";
}

else if($c>$a && $c>$b){

    echo "$c is greater than $a and $b";
}*/

/*
function CheckLargeNumber($a,$b,$c){

            if($a>$b && $a>$c){

            echo "$a is greater than $b and $c";
        }

        else if($b>$a && $b>$c){

            echo "$b is greater than $a and $c";
        }

        else {

            echo "$c is greater than $a and $b";


        }
}

CheckLargeNumber($a,$b,$c);


*/   

  if ($_SERVER['REQUEST_METHOD'] == 'POST'){


         $num1  =  (int)$_REQUEST["num1"];
         $num2  =  (int) $_REQUEST["num2"];

         if(is_int($num1) && is_int($num2)){
            
            $result = $num1+$num2;

              echo "$num1+ $num2 = $result";
         }
         else{
             echo "Number is not int";
         }



  }


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Input from form</title>
</head>
<body>
    <form action="" method="post">

    <input type="number" name="num1">
    <input type="number" name="num2">
    <button type="submit" name=""> Submit</button>
    
    </form>

    <a href="email.php?id=1&password=400"> send email</a>
</body>
</html>
