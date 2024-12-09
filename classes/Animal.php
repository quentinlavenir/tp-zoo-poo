<?php
class Animal {
    protected $name; // nom de l'animal
    protected $species; // espece de l'animal
    protected $weight; // poids de l'animal
    protected $size; // taille de l'animal
    protected $age; // âge de l'animal

    protected $isHungry; // si l'animal mange
    protected $isSleeping; // si l'animal dort
    protected $isSick; // si l'animal est malade

    // constructeur
    public function __construct($data) {
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

    public function __toString() {
        return json_encode ([
            "Name" => $this->name,
            "Species" => $this->species,
            "Weight" => $this->weight,
            "Size" => $this->size,
            "Age" => $this->age,
            "isHungry" => $this->isHungry,
            "isSleeping" => $this->isSleeping,
            "isSick" => $this->isSick,
        ]);
    }

    // getters obtenir valeur attribut
    public function getName ($name){
        return $this->$name;
    }

    public function getSpecies ($species){
        return $this->$species;
    }

    public function getWeigh ($weight){
        return $this->$weight;
    }

    public function getSize ($size){
        return $this->$size;
    }

    public function getAge ($age){
        return $this->$age;
    }

    public function getsetIsEating ($isEating){
        return $this->$isEating;
    }

    public function getIsSleeping ($isSleeping){
        return $this->$isSleeping;
    }

    public function getIsSick ($isSick){
        return $this->$isSick;
    }

    // Setters modifier valeur attribut

    public function setName ($name){
        $this->$name = $name;
    }

    public function setSpecies ($species){
        $this->$species = $species;
    }

    public function setWeight ($weight){
        $this->$weight = $weight;
    }

    public function setSize ($size){
        $this->$size = $size;
    }

    public function setAge ($age){
        $this->$age = $age;
    }

    public function setIsHungry ($isHungry){
        $this->$isHungry = $isHungry;
    }

    public function setIsSleeping ($isSleeping){
        $this->$isSleeping = $isSleeping;
    }

    public function setIsSick ($isSick){
        $this->$isSick = $isSick;
    }

    // Fonction
    public function eat (){
        $this->setIsHungry(false);
    }

    public function sleep () {
        $this->setIsSleeping(false);
    }

    public function sick () {
        $this->setIsSick(false);
    }

    // Méthode
    public function song () {
        $this->song = true;
    }

    public function heal () {
        $this->heal = true;
    }

    public function wakeup () {
        $this->wakeup = true;
    }

    public function nager () {
        $this->nager = true;
    }

    public function voler () {
        $this->voler = true;
    }
}
    // Classe poissons
    class Fish extends Animal {
        public function swim() {
        echo $this->name . " nage";
        }
    }

    // classe oiseaux
    class Bird extends Animal {
        public function fly() {
        echo $this->name . " vole";
        }
    }

    // classe parents 
    class Tiger extends Animal {
        public function __construct($data) {
            parent::__construct($data);
        }
        public function run() {
        echo $this->name . " court";
        }
    }

?>