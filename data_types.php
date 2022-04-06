<?php
$x = 10;
var_dump($x); //int 10;
echo "<br />";
$x = 10.5;
var_dump($x); //float 10.5;
echo "<br />";
$x = "Nikola";
var_dump($x); //string "nikola";
echo "<br />";
$x = true;
var_dump($x); //bool true;
echo "<br />";
$x = array("apple", "Oragne", "banana");
var_dump($x); //array (.....);
echo "<br />";
//objecs:
class Person{
    public $first_name;
    public $last_name;
    public $age;
    public function __construct($first_name, $last_name, $age ){
        $this->first_name = $first_name;
        $this->last_name = $last_name;
        $this->age = $age;
    }
    public function message(){
        return "My name is " . $this->first_name . " " . $this->last_name ." and I'm " . $this->age . " years old";
    }
}
$person1 = new Person("Nikola", "Matković", 19);
echo $person1 -> message();
echo "<br>";
var_dump($person1);
$y = null;
echo "<br>";
var_dump($y);
$z;
echo "<br>";
var_dump($z); // null by default
