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

// access globals from funciton:
$age = 20;
$name = "Nikola";

function display(){
    global $age, $name;
    echo "<p>my name is $name and i'm $age old</p>";
}
display();

//or using globals array:

echo "There age have value of: "   . $GLOBALS['age'] . "<br />" ;

function some_function(){
    echo "if we use globals array, we will have same there: " . $GLOBALS['age'] ;
}
some_function();

//static variables:

function for_static(){
    static $value = 4;
    $value++;
    echo "<p>$value</p>";
}

for_static(); //5
for_static(); //6
for_static(); //7