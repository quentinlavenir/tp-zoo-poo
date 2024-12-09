<?php
class Enclosure {
    public $name; // nom de l'enclos
    public $cleanliness; // propreté de l'enclos
    public $presentAnimal; // nombre d'animal présent dans l'enclos

    // Constructeur pour initialiser les propriétés de l'enclos
    public function __construct($name, $cleanliness, $presentAnimal) {
        $this->name = $name;
        $this->cleanliness = $cleanliness;
        $this->presentAnimal = $presentAnimal;
    }

    // getters obtenir valeur attribut
    public function getCleanliness ($cleanliness) {
        return $this->$cleanliness;
    }

    public function getPresentAnimal ($presentAnimal) {
        return $this->$presentAnimal;
    }

    // setters modifier valeur attribut

    public function setName ($name) {
        $this->$name = $name;
    }
    
    // setters propreté de l'enclos
    public function setCleanliness ($cleanliness) {
        $this->$cleanliness = $cleanliness;
        $values = ['bad', 'correct', 'good'];
        if (!in_array($cleanliness, $values)) {
            $this->$cleanliness = $values;
            echo "$this->$cleanliness";
        }
    }

    // setters nombre d'animaux présent
    public function setPresentAnimal ($presentAnimal) {
        $this->$presentAnimal = $presentAnimal;
        if ($presentAnimal >= 0) {  
            $this->$presentAnimal = $presentAnimal;
            echo "$this->$presentAnimal";
        }
    }
}

?>