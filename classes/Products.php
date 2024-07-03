<?php 

require_once __DIR__ . "/Food.php";
require_once __DIR__ . "/Accesories.php";
require_once __DIR__ . "/Toys.php";
require_once __DIR__ . "/Category.php";



class Products {
    private $image;
    private $title;
    private $price;

    public function __construct($image, $title, $price) {
        $this->image = $image;
        $this->title = $title;
        $this->price = $price;
    }

    public function getImage() {
        return $this-> image;
    }

    public function getTitle() {
        return $this-> title;
    }

    public function getPrice() {
        return $this-> price;
    }

    public function setImage($image) {
        $this->image = $image;
    }

    public function setTitle($title) {
        $this->title = $title;
    }

    public function setPrice($price) {
        $this->price = $price;
    }

}

?>