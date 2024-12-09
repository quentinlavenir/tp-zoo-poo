<?php

class AnimalType {
    public const TERRESTRIAL = 'TERRESTRIAL';
    public const MARINE = 'MARINE';
    public const FLYING = 'FLYING';
}
class Animal
{
    protected $name; // nom de l'animal
    protected $species; // espece de l'animal
    protected $type;
    protected $weight; // poids de l'animal
    protected $size; // taille de l'animal en cm
    protected $age; // âge de l'animal

    protected $isHungry; // si l'animal mange
    protected $isSleeping; // si l'animal dort
    protected $isSick; // si l'animal est malade

    public function __construct($data)
    {
        if (
            !isset($data['name']) ||
            !isset($data['species']) ||
            !isset($data['weight']) ||
            !isset($data['size']) ||
            !isset($data['age'])
        ) {
            throw new Exception("Tous les attributs sont obligatoires.");
        } else {
            $this->name = $data['name'];
            $this->species = $data['species'];
            $this->weight = $data['weight'];
            $this->size = $data['size'];
            $this->age = $data['age'];
        }
    }

    // Méthode afficher caractéritiques retourner chaine de caractère en json encode

    public function __toString()
    {
        $isHungry = $this->isHungry ? "L'animal à faim" : "L'animal n'a pas faim";
        $isSleeping = $this->isSleeping ?"L'animal dort":"L'animal est réveillé";
        $isSick = $this->isSick ?"L'animal est malade":"L'animal est en bonne santé";
        $sizeInMeters = $this->size / 100;

        return "
            Nom de l'animal : $this->name, <br>
            Espece : $this->species, <br>
            Poids : $this->weight kilos, <br>
            Taille : $sizeInMeters mètres, <br>
            Age : $this->age ans, <br>
            $isHungry, <br>
            $isSleeping, <br>
            $isSick <br>
        ";
    }

    // getters obtenir valeur attribut
    public function getName()
    {
        return $this->name;
    }

    public function getSpecies()
    {
        return $this->species;
    }

    public function getType()
    {
        return $this->type;
    }

    public function getWeigh()
    {
        return $this->weight;
    }

    public function getSize()
    {
        return $this->size;
    }

    public function getAge()
    {
        return $this->age;
    }

    public function getsetIsEating($isEating)
    {
        return $this->$isEating;
    }

    public function getIsSleeping($isSleeping)
    {
        return $this->$isSleeping;
    }

    public function getIsSick($isSick)
    {
        return $this->$isSick;
    }

    // Setters modifier valeur attribut

    public function setName($name)
    {
        $this->$name = $name;
    }

    public function setSpecies($species)
    {
        $this->$species = $species;
    }

    public function setType($type)
    {
        $this->$type = $type;
    }

    public function setWeight($weight)
    {
        $this->$weight = $weight;
    }

    public function setSize($size)
    {
        $this->$size = $size;
    }

    public function setAge($age)
    {
        $this->$age = $age;
    }

    public function setIsHungry($isHungry)
    {
        $this->$isHungry = $isHungry;
    }

    public function setIsSleeping($isSleeping)
    {
        $this->$isSleeping = $isSleeping;
    }

    public function setIsSick($isSick)
    {
        $this->$isSick = $isSick;
    }

    // Fonction
    public function eat()
    {
        $this->setIsHungry(false);
    }

    public function sleep()
    {
        $this->setIsSleeping(false);
    }

    public function sick()
    {
        $this->setIsSick(false);
    }
}
// Classe poissons
class Marine extends Animal
{
    public function __construct($data) {
        parent::__construct($data);
        $this->type = AnimalType::MARINE;
    }
    public function swim()
    {
        echo $this->name . " nage";
    }
}

class Fish extends Marine {
    public function __construct($data) {
        parent::__construct($data);
    }
}

// classe oiseaux
class Flying extends Animal
{
    public function __construct($data) {
        parent::__construct($data);
        $this->type = AnimalType::FLYING;
    }
    public function fly()
    {
        echo $this->name . " vole";
    }
}

class Bird extends Flying {
    public function __construct($data) {
        parent::__construct($data);
    }
}

// classe terrestres
class TERRESTRIAL extends Animal
{
    public function __construct($data) {
        parent::__construct($data);
        $this->type = AnimalType::TERRESTRIAL;
    }
    public function run()
    {
        echo $this->name . " vagabonde";
    }
}

class Terrestre extends Terrestrial {
    public function __construct($data) {
        parent::__construct($data);
    }
}