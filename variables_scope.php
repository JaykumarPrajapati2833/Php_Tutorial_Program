<?php
 /*
  There are three types of  declare to a variable
  1)global:-A variable declared outside a function.It can only be accessed outside a function(global vari function ma access na thai)
  2)local:-A variable declared within a function.
  3)static:-when a function is executed, all of its variables are deleted. However, sometimes we want a local variable NOT to be deleted.
 */
/* Another topic
global keyword:-We can edit global variable through this keyword. 
$GLOBALS[index]:-PHP also stores all global variables in an array called $GLOBALS[index]. The index holds the name of the variable. This array is also accessible from within functions and can be used to update global variables directly.*/

//1)global
$x=56;
$a=4;

function demo()
{
 echo "The value of x is print through demo function:$x"; //Aa error ape because,it can only be accessed outside a function(global vari function ma access na thai)
}
demo();
echo "<br>";
echo "The value of x is print through global variable x:$x"; 
echo "<br>";

//2)local
function demo1()
{
 $y='jay';
 echo "The value of y is:$y";
}
demo1();
echo "<br>";

//3)static
function demo2()
{
 static $z=0;
 $z++;
 echo "The value of z is:$z";
}
demo2();//This function print 1
echo "<br>";
demo2();//This function print 2
echo "<br>";

//global keyword in function
function demo3()
{
 global $x,$a;
 $a=$x+$a;
 
}
demo3();
echo "This sum is doing through global keyword:$a";
echo "<br>";

//GLOBALS[index]
function demo4()
{
 $GLOBALS['a']=$GLOBALS['x']+$GLOBALS['a'];
 
}
demo4();
echo "This sum have calculated through GLOBALS[index]: $a";
?>