<?php
/*
 There are 7 datatypes are in php
  1. String
  2. Integer
  3. Float
  4. Boolean
  5. Object
  6. Array
  7. NULL
  var_dump():-It is used to know datatype of any variable
*/
// 1)String - sequence of characters
$name="Jay";
$surname="Prajapati";

echo "My full name is " .$name. " " .$surname. "<br>";

//2) Integer - Non decimal number
$salary=500000;
$debt=-560;
echo "My monthly salary is " .$salary. "<br>";
echo "I have debt of " .$debt. " rupees <br>";

//3) Float - Decimal point number
$pr=87.34;
echo "I have completed 12th standard with " .$pr. " pr <br>";

//4) Boolean - Can be either true or false
$a=TRUE;
$b=true;
$c=false;

echo "With TRUE " .$a. "<br>";
echo "With true " .$b. "<br>";

echo "With FALSE " .$c. "<br>";

// Array - Used to store multiple values in a single variable
$ar=array("Jay",45,'p',67.12);
echo var_dump($ar);
echo "<br>";
echo "On index " .$ar[2]. " is there <br>";

// NULL
$e=null;
echo var_dump($e);

// Object - Instances of classes
// Employee is a class ---> harry can be one object


?>