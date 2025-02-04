<?php 

require_once __DIR__ . "/Products.php";

class Toys extends Products {
    private $features;
    private $dimensions;

    public function __construct($image, $title, $price, $features, $dimensions) {
        parent::__construct($image, $title, $price);
        $this->features = $features;
        $this->dimensions = $dimensions;
    }

    public function getFeatures() {
        return $this-> features;
    }

    public function getDimensions() {
        return $this-> dimensions;
    }

    public function setFeatures($features) {
        $this->features = $features;
    }

    public function setDimensions($dimensions) {
        $this->dimensions = $dimensions;
    }
}

?>