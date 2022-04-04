<?php include_once 'Calculator.php';?>

<?php


    if($_SERVER['REQUEST_METHOD'] == 'POST'){

        $numberOne = $_POST['number1'];
        $numberTwo = $_POST['number2'];
        $operator = $_POST['operator'];

            if(!empty($numberOne) && !empty($numberTwo)){
                 $calculator = new Calculator;
        // echo "<pre>";
        // print_r($_POST);
        // echo "<pre>";

   /*     
        if($operator == 'plus'){

           $result = $calculator->sum($numberOne, $numberTwo);

        }elseif($operator == 'minus'){
            
            $result = $calculator->sub($numberOne, $numberTwo);

        }elseif($operator == 'multi'){

            $result = $calculator->mul($numberOne, $numberTwo);

        }elseif($operator == 'div'){

            $result = $calculator->div($numberOne, $numberTwo);

        }elseif($operator == 'mod'){

            $result = $calculator->mod($numberOne, $numberTwo);
            
            */


            switch($operator){

            case 'plus': $result = $calculator->sum($numberOne, $numberTwo);
                            break;
            case 'minus': $result = $calculator->sum($numberOne, $numberTwo);
                            break;
            case 'multi': $result = $calculator->mul($numberOne, $numberTwo);
                            break;
            case 'div': $result = $calculator->div($numberOne, $numberTwo);
                            break;
            case 'mod': $result = $calculator->mod($numberOne, $numberTwo);
                            break;

            }

            }else{
                 $error = "Number One and Number Two can not be empty";
            }

    
        }


?>

<div style="border: 2px solid ; margin: 45px auto; height: 200px; width:400px;">
    <form action="" method="POST">

    <div style="margin-top: 10px; margin-left: 20px;">
                <label for="number1">Number One</label>
                <input type="number" name="number1" id="number1" placeholder="Put Number One" >
    </div>
    <div  style="margin-top: 10px; margin-left: 20px;">
                <label for="number2">Number Two</label>
                 <input type="number" name="number2" id="number2" placeholder="Put Number Two" >
    </div>
    <div style="margin-top: 10px; margin-left: 20px;">
                 <label for="operator">Choose Operator</label>
                <select name="operator" id="operator">
                    <option value="plus">+</option>
                    <option value="minus">-</option>
                    <option value="multi">×</option>
                    <option value="div">/</option>
                    <option value="mod">%</option>
                </select>
    </div>

    <div style="margin-top: 10px; margin-left: 20px;">
        <button type="submit" > Calculate</button>
    </div>

    <div style="margin-top: 10px; margin-left: 20px; background-color:#F0F8FF; height : 40px; width:200px;">
        <h3>
            
            Result: <?php echo $result ?? ' '; ?>

        </h3>
    </div>
    <span style=" color:red; margin-left: 20px;"><?php echo $error ?? ' ';?></span>

        
    </form>
</div>
