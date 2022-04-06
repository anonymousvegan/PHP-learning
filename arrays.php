<?php

$names = array("Nikola", "Jovana", "Marko");

//foop: 
$length = count($names);
for($x=0; $x<$length; $x++){
    echo $names[$x] . " is Nice name <br>";
}
//same as :
foreach ($names as $name){
    echo "$name is nice name! <br>";
}

$pets = array("Nikola" => "Pućko", "Jovana"=> "Zoi");

foreach($pets as $owner => $pet ){
    echo "$owner has  $pet <br>";
}
//multidimensions:
$matrix = array(
    array(1,2,3),
    array(4,5,6),
    array(7,8,9)
);
echo $matrix[1][1]; //5
//sorting
echo "<h3>sort()</h3>";
sort($names); // a-z, 0-9
foreach($names as $name){
    echo "<p> $name </p>";
}
echo "<h3>rsort()</h3>";
rsort($names); // a-z, 0-9
foreach($names as $name){
    echo "<p> $name </p>";
}
//same things for associative arrays, with asort, arsort, ksort, krsort
?>