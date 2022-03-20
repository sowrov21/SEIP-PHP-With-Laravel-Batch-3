<?php


$company_name ="pondit";
$project_name="SEIP Project";
echo $company_name." ".$project_name."<br>";

//Defined

define('USER_Name','Pondit');

//Constant
//If-else

//variable handling function

//$name="";
//echo gettype($name);

$number = [1,2,3,4];

$ConvertToString = serialize($number);
echo $ConvertToString."<br>" ;
echo gettype($ConvertToString);

$ConvertToArray = unserialize($ConvertToString);

print_r($ConvertToArray)."<br>" ;
echo gettype($ConvertToArray);





?>