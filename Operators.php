
<?php
/*
  PHP divides the operators in the following groups:

(A)Arithmetic operators
(B)Assignment operators
(C)Comparison operators
(D)Increment/Decrement operators
(E)Logical operators
(F)String operators
(G)Array operators
(H)Conditional assignment operators
*/ 

//(A)Arithmetic operators
echo "(A)Arithmetic operators <br>";
  $a=55;
  $b=12;
  echo "Sum is:",$a+$b,"<br>";
  echo "Mul is:",$a*$b,"<br>";
  echo "Div is:",$a/$b,"<br>";
  echo "Mod is:",$a%$b,"<br>";
  echo "Power is:",$b**2,"<br><br>";

  //(B)Assignment operators
  echo "(B)Assignment operators <br>";
  $x=12;
  $z=13;
  $x+=$z;

  echo $x;

  
?>