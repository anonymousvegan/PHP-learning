<?php 

$x = 20;

function my_fun(){
    echo "X has not value there $x";
}
my_fun();

echo "<br />but, x have value there $x";

function my_fun2(){
    $x = 20;
    echo "<br /> and there $x";
}

my_fun2();