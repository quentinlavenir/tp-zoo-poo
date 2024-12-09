<?php
include "classes/Animal.php";
include "classes/Employee.php";
include "classes/Zoo.php";
include "classes/Enclosure.php";

$enclos = new Aquarium("Enclos des petits poissons", EnclosureCleanliness::DIRTY);

$bird = new Fish([
    "name" => "Bibou",
    "species" => "Fish",
    "weight" => 100,
    "size" => 180,
    "age" => 10,
    "isHungry" => false,
    "isSleeping" => false,
    "isSick" => true,
]);

$enclos->addAnimal($bird);
$enclos->removeAnimal('Bibou');
echo $enclos;
$enclos->maintenance();
$enclos->examine();

?>