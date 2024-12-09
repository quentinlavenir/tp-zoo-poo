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
}

?>