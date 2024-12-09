<?php
class Zoo {
    public $name; // nom du zoo
    public $employee; // employe du zoo
    public $enclosure; // nombre d'enclos
    public $arrayEnclosure; // tableau d'enclos

    // getters obtenir valeur attribut
    public function getName ($name) {
        return $this->$name;
    }

    public function getEmployee ($employee) {
        return $this->$employee;
    }

    public function getEnclosure ($enclosure) {
        return $this->$enclosure;
    }

    public function getArrayEnclosure ($arrayEnclosure) {
        return $this->$arrayEnclosure;
    }

    // setters modifier valeur attribut
    public function setName ($name) {
        $this->$name = $name;
    }

    public function setEmployee ($employee) {
        $this->$employee = $employee;
    }

    public function setEnclosure ($enclosure) {
        $this->$enclosure = $enclosure;
    }

    public function setArrayEnclosure ($arrayEnclosure) {
        $this->$arrayEnclosure = $arrayEnclosure;
    }

}

?>