<?php

//test if user is  sent "name" data with get method

(isset($_GET['name']))? $name = $_GET['name'] : $name = "anonymous";

echo $name . "<br>";

//better

$name2 = $_GET['name'] ?? "Anonymous2";

//best

//get lastname from get method 

$last_name = $_GET["last_name"];

$last_name ??= "Jovanović";
echo $name2 . "<br>";
echo $last_name . "<br>";