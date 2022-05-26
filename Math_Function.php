<?php

//(1) pi():-It is used to find pi value
echo "The value of pi is:".pi(). "<br>";

//(2) min():-It is used to find minimum value out of numbers
echo "Minimum value is:" . min(-12,45). "<br>";

//(3) max():-It is used to find maximum value out of numbers
echo "Maximum value is:" .max(45,690,12,-2)."<br>";

//(4) abs():-It is used to return positive number 
echo "Absolute number is:" .abs(-45.676). "<br>";

//(5) sqrt():It is used to find square root of any number
echo "Square root is:" .sqrt(121). "<br>";

//(6) round():-It is used to find nearest Integer number of float number
  //IMP Note:Aama jo 0.50 and 0.50 thi upar hoi to 1 return kare
echo "Round number is:" .round(0.50). "<br>";

//(7) rand():-It is used to find random number
echo "Random number is:" .rand(). "<br>";
   //Imp Note:If you have to generate random number between some number,so you have to apply two value in argument
   echo "Random number between 20 and 120 is:" .rand(20,120). "<br>"
?>