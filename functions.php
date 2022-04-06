<?php
declare(strict_types=1);

function f1(){
    echo "I'm in funciton";
}
f1();

function sum($a, $b=100){
    return $a + $b;
}

$c = sum(10, 20); #30
$d = sum(40); #140
echo "<p>c : $c d: $d</p>";

function fact(int $n){
    if($n == 1){
        return 1;
    }
    return $n * fact($n-1);
}
echo fact(5);
//echo fact(4.1); error - expected int
function sum2(float $a, float $b) : int{
    $s = $a+$b;
    return (int)$s;
}
$e = sum2(3, 4);
echo $e;

//references:
function increase(&$value){
    $value += 10;
}
$x = 20;
increase($x);
echo "<p> $x </p>";