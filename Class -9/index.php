
<?php 
 $_countryName= "Bangladesh";

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Learn PHP</title>

    <style>

        .header{
            background-color:green;
            color:white:
            text-align:center;
            padding:20px;
        }

        .content{
            height: <?php echo "400px" ?>;
            padding:20px;
        }

        .footer{
             background-color:green;
            color:white:
            text-align:center;
            padding:20px;
        }
    </style>
</head>
<body>

  <?php include('./inc/header.php');?>
    <div class="content">
           <?php echo "Content" ?>
    </div>

 <?php include('./inc/footer.php');?>
    
    
</body>
</html>