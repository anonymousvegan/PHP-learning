<?php

#+ - * / % ** 
# =,    *=, +=, -=, %=, /=

//compare operators:
$a = 10;
$b = 20;

var_dump($a<$b); //true;
echo "<br>";
var_dump($b<$a); //false
echo "<br>";
var_dump($a==$b); //false
echo "<br>";
var_dump($a<>$b); //true
echo "<br>";
var_dump($a!=$b); //true;
echo "<br>";
$c = $a<=>$b; //
echo $c; 
echo "<br>"; // -1;
$d = 10.0;
var_dump($d == $a); //true
var_dump($d === $a); //false
echo "<br>";