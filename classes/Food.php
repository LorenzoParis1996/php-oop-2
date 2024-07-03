<?php

require_once __DIR__ . "/Products.php";

class Food extends Products {
    private $weight;
    private $ingredients;
       
    public function __construct($image, $title, $price, $weight, $ingredients) {
        parent::__construct($image, $title, $price);
        $this->weight = $weight;
        $this->ingredients = $ingredients;
    }
    
    public function getWeight() {
        return $this-> weight;
    }

    public function getIngredients() {
        return $this-> ingredients;
    }

    public function setWeight($weight) {
        $this-> weight = $weight;
    }

    public function setIngredients($ingredients) {
        $this->ingredients = $ingredients;
    }
    
}




?>