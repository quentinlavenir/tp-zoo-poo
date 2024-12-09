<?php
include "classes/Animal.php";
include "classes/Employee.php";
include "classes/Zoo.php";
include "classes/Enclosure.php";

$tiger = new Tiger([
    "name" => "Pepito",
    "species" => "Tigre",
    "weight" => 100,
    "size" => "Grande",
    "age" => 10,
    "isHungry" => true,
    "isSleeping" => false,
    "isSick" => false,  
]);
echo $tiger;

$enclosure = new Enclosure()
?>