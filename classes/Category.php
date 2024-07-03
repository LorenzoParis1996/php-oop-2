<?php 

require_once __DIR__ . "/Products.php";

class Category {
    private $animal;

    public function __construct($animal) {
        $this->animal = $animal;
    }

    public function getAnimal() {
        return $this-> animal;
    }

    public function setAnimal($animal) {
        $this->animal = $animal;
    }
}

?>