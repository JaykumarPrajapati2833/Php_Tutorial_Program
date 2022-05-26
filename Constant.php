
<?php
//IMP Note:-Aani theory imp chhe aene note mathi read karvi
//IMP note:-Aa constant ae by default global hoi
define("Name","Jay",true);
echo Name;
echo "<br>";

//Constant Array
define("car",["audi","swift"]);
echo car[1];
echo "<br>";

//Constant use in Function
define("surname","Prajapati",true);
function demo()
{
echo surname;
}
demo();
?>