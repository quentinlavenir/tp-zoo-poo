<?php
class Employee {
    public $name; // nom de l'employé
    public $age; // âge de l'employé
    public $sex; // sexe de l'employé

    // setters modifier valeur attribut
    public function setName($name) {
        $this->$name = $name;
    }

    public function setAge($age) {
        $this->$age = $age;
    }

    public function setSex($sex) {
        $this->$sex = $sex;
    }
    
    // getters obtenir valeur attribut
    public function getName($name) {
        return $this->$name;
    } 

    public function getAge($age) {
        return $this->$age;
    }

    public function getSex($sex) {
        return $this->$sex;
    }

    public function examine () {
        return $this->$animal;
        return $this->$enclosure;
    }
}

// Méthode examiner l'enclos et afficher les animaux contenus dans l'enclos et afficher les caractéristiques de l'enclos 
// (S'aider de __toString animal et __toString enclosure)

// Méthode nettoyer l'enclos s'il est sale et s'il est vide
// (S'aider de salinity et de max capacity)

// Méthode nourrir les animaux d'un enclos lorsqu'ils ne dorment pas
// (S'aider de isHungry et isSleeping)

// Méthode ajouter à un enclos un nouvel animal lorsque c'est possible
// (S'aider de max capacity et __toString animal et __toString enclosure)

// Méthode enlever un animal d'un enclos
// ()

// Méthode transférer un animal d'un enclos à l'autre 
// ()

// Méthode l'utilisateur doit pouvoir diriger l'employé à l'aide d'un menu ou d'un formulaire
// ()

?>