<?php

// boolval() Function
/**Returns the boolean value of a variable */
$a=2;

if(boolval($a) ==2)
{
    echo "true";
}
else
{
    echo "false";
}
echo "0: " .(boolval(0) ? 'true' : 'false') . "<br>";
echo "4: " .(boolval(42) ? 'true' : 'false') . "<br>";
echo '"": ' .(boolval("") ? 'true' : 'false') . "<br>";
echo '"Hello": ' .(boolval("Hello") ? 'true' : 'false') . "<br>";


// debug_zval_dump() Function
/* 	Dumps a string representation of an internal zend value to output */

$country = "Bangladesh";
echo debug_zval_dump($country)."<br>";

//doubleval() Function

//empty() Function
/* Checks whether a variable is empty */

$b= 5;
 echo (empty($b)) ? 'is empty' : 'is full';

 //gettype()	Returns the type of a variable

 echo gettype($b);

 var_dump($country);

// is_array, is_string,is_bool

 //isset()	Checks whether a variable is set (declared and not NULL)
// isset
 //serialize()	Converts a storable representation of a value
 $countrySerial=serialize($country);
 $numberSerial=serialize(123456);
 echo "Serialize of String = ".$countrySerial."<br/>";
 echo "Serialize of integer = ".$numberSerial."<br/>";
 //unserialize()	Converts serialized data back into actual data
 echo "Unserialize of String = ".unserialize($countrySerial)."<br/>";
 echo "Unserialize of integer = ".unserialize($numberSerial)."<br/>";

 //-----------------String Handling ----------------

 $Str= "I Love My Country";

 echo "Length of 'I Love My Country'".strlen($Str);
 echo "Length of 'I Love My Country'".strlen($Str);


 $c = "Hello world!";
echo "The value of variable 'a' before unset: " . $a . "<br>";
unset($c);
echo  $c;


//--------------Dicis


$marks= 90;

if ($marks>=80 && $marks<=100){

    echo "A+";

}
elseif($marks>=75 && $marks<=79){
    echo "A-";

}


