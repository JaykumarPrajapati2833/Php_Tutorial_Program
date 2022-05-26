<?php
//(1)strrev
$txt="Hello world";
echo "Reverse of string is:" .strrev($txt);
echo "<br>";

//(2)str_replace()
echo "Replace:-" .str_replace("world","Jay",$txt);
echo "<br>";

//(3)strlen()
echo "Length of string is:".strlen($txt);
echo "<br>";

//(4)str_word_count()
echo "Total word is:".str_word_count($txt);
echo "<br>";

//(5)strpos:-aama je text kidhu hase ae je index thi sharu thay ae number print thay
echo "Position of world is:".strpos($txt,"world");
echo "<br>";

//(6)str_repeat()
echo str_repeat($txt,3);//aa Hello world ne 3 var print kare
echo "<br>";
//(7)ltrim()//aa left ni space kadhe
$name=" Jay ";
echo ltrim($name);
echo "<br>";

//(8)rtrim()//aa right ni space kadhe
$name=" Jay ";
echo rtrim($name);
?>