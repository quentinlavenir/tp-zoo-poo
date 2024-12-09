<?php
class EnclosureCleanliness {
    public const CLEAN = 'CLEAN';
    public const CORRECT = 'CORRECT';
    public const DIRTY = 'DIRTY';
}

class Enclosure {
    public const MAX_CAPACITY = 6; // capacité maximale de l'enclos

    protected $name; // nom de l'enclos
    protected $cleanliness; // propreté de l'enclos
    protected $animals = [];

    protected $species = null;

    // Constructeur pour initialiser les propriétés de l'enclos
    public function __construct($name, $cleanliness = EnclosureCleanliness::CLEAN) {
        $this->name = $name;
        $this->cleanliness = $cleanliness;
    }

    public function __toString() {
        $cleanliness = $this->cleanliness == EnclosureCleanliness::CLEAN ? 'Enclos propre' : ($this->cleanliness === EnclosureCleanliness::CORRECT ? 'Enclos correct' : 'Enclos sale');
        $animals = array_map(function ($animal) {
            return $animal->__toString();
        }, $this->animals);

        return "
        Nom de l'enclos : $this->name, <br>
        $cleanliness, <br>
        Animaux : <br>
        <ul>
            <li>" . implode("</li><li>", $animals) . "</li>
        </ul> <br>
        ";
    }

    public function getName() {
        return $this->name;
    }

    // getters obtenir valeur attribut
    public function getCleanliness () {
        return $this->cleanliness;
    }

    public function getAnimals () {
        return $this->animals;
    }

    public function getSpecies () {
        return $this->species;
    }

    // setters modifier valeur attribut

    public function setName ($name) {
        $this->name = $name;
    }

    // setters propreté de l'enclos
    public function setCleanliness ($cleanliness) {
        $this->cleanliness = $cleanliness;
    }

    public function setSpecies ($species) {
        $this->species = $species;
    }

    public function addAnimal ($animal) {
        if (count($this->animals) >= self::MAX_CAPACITY) {
            throw new Exception("L'enclos est plein");
        }

        if ($this->species == $animal->getSpecies() || $this->species == null ) {
            $this->animals[] = $animal;
            $this->species = $animal->getSpecies();
        }
        else {
            throw new Exception("L'animal n'est pas de la même espèce que les autres animaux de l'enclos");
        }

    }

    // maintenance
    public function maintenance() {
        if (count($this->animals) > 0) {
            throw new Exception("L'enclos n'est pas vide, impossible de l'entretenir");
        }

        $this->cleanliness = EnclosureCleanliness::CLEAN;
    }

    // supprimer animal d'un enclos
    public function removeAnimal($name) {
        $animals = array_filter($this->animals, function ($animal) use ($name) {
            return $animal->getName() !== $name;
        });

        $this->animals = $animals;
        if (count($this->animals) == 0) {
            $this->species = null;
        }
    }
}

// class parents enclos oiseaux
class Aviary extends Enclosure {
    private $height;

    public function getHeight() {
        return $this->height;
    }

    public function setHeight($height) {
        $this->height = $height;
    }

    public function checkEnclosureCeiling() {
        echo "Sommet de la cage vérifié";
    }

    public function addAnimal ($animal) {
        if ($animal->getType() != AnimalType::FLYING) {
            throw new Exception("Les volières n'acceptent que des animaux volants");
        }

        parent::addAnimal($animal);
    }

    public function maintenance() {
        parent::maintenance();

        $this->checkEnclosureCeiling();
    }
}

// class parents enclos poissons
class Aquarium extends Enclosure {
    private $salinity;

    public function getSalinity() {
        return $this->salinity;
    }

    public function setSalinity($salinity) {
        $this->salinity = $salinity;
    }

    public function checkSalinity() {
        echo "Salinité vérifiée";
    }

    public function addAnimal ($animal) {
        if ($animal->getType() != AnimalType::MARINE) {
            throw new Exception("Les aquariums n'acceptent que des animaux marins");
        }

        parent::addAnimal($animal);
    }

    public function maintenance() {
        parent::maintenance();

        $this->checkSalinity();
    }
}

// class parents enclos terrestre
class Wander extends Enclosure {
    private $salinity;

    public function getSalinity() {
        return $this->salinity;
    }

    public function setSalinity($salinity) {
        $this->salinity = $salinity;
    }

    public function checkSalinity() {
        echo "Salinité vérifiée";
    }

    public function addAnimal ($animal) {
        if ($animal->getType() != AnimalType::TERRESTRIAL) {
            throw new Exception("La terre n'acceptent que des animaux vagabondants");
        }

        parent::addAnimal($animal);
    }

    public function maintenance() {
        parent::maintenance();

        $this->checkSalinity();
    }
}

?>