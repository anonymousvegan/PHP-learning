<?php

$fruits = array("apple", "banana", "oragne");

foreach($fruits as $fruit) {
    echo "<p> I like to eat $fruit <p>";
}

$phones = array("Nikola" => "xiaomi", "tarik"=>"samsung");
foreach($phones as $person => $phone) {
    echo "<p> $person  have a $phone phone </p>";
}