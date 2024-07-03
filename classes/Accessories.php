<?php 

require_once __DIR__ . "/Products.php";

class Accessories extends Products {
    private $materials;
    private $dimensions;

    public function __construct($image, $title, $price, $materials, $dimensions) {
        parent::__construct($image, $title, $price);
        $this->materials = $materials;
        $this->dimensions = $dimensions;
    }

    public function getMaterials() {
        return $this-> materials;
    }

    public function getDimensions() {
        return $this-> dimensions;
    }

    public function setMaterials($materials) {
        $this-> materials = $materials;
    }

    public function setDimensions($dimensions) {
        $this->dimensions = $dimensions;
    }
}

?>