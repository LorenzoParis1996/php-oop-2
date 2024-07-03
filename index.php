<?php

require_once __DIR__ . "/classes/Food.php";
require_once __DIR__ . "/classes/Accessories.php";
require_once __DIR__ . "/classes/Toys.php";
require_once __DIR__ . "/classes/Category.php";

$product1 = new Food("HERE GOES IMAGE", "good food", 20, 1, "beef meat");

$product2 = new Toys("HERE GOES IMAGE", "funny toy", 10, "has lot of lights", "10cm x 15cm");

$product3 = new Accessories("HERE GOES IMAGE", "comfortable cage", 30, "wood", "50cm x 70cm");

$dog = new Category("dog");
$cat = new Category("cat");
$bird = new Category("bird");
$fish = new Category("fish");



?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/style.css">
    <title>Document</title>
</head>

<body>
    <div class="container">
        <section class="cards">
            <div class="card" style="width: 18rem;">
                <img src="https://arcaplanet.vtexassets.com/arquivos/ids/300306/Royal-Canin-Mini-Adult-Alimento-Completo-per-Cani-Adulti-di-Piccola-Taglia-10120604-1.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <p class="card-text"><?php echo $dog->getAnimal() ?></p>
                    <p class="card-text"><?php echo $product1->getTitle() ?></p>
                    <p class="card-text"><?php echo $product1->getPrice() ?></p>
                    <p class="card-text"><?php echo $product1->getWeight() ?></p>
                    <p class="card-text"><?php echo $product1->getIngredients() ?></p>
                </div>
            </div>
            <div class="card" style="width: 18rem;">
                <img src="https://arcaplanet.vtexassets.com/arquivos/ids/300306/Royal-Canin-Mini-Adult-Alimento-Completo-per-Cani-Adulti-di-Piccola-Taglia-10120604-1.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <p class="card-text"><?php echo $product2->getTitle() ?></p>
                    <p class="card-text"><?php echo $product2->getPrice() ?></p>
                    <p class="card-text"><?php echo $product2->getFeatures() ?></p>
                    <p class="card-text"><?php echo $product2->getDimensions() ?></p>
                </div>
            </div>
            <div class="card" style="width: 18rem;">
                <img src="https://arcaplanet.vtexassets.com/arquivos/ids/300306/Royal-Canin-Mini-Adult-Alimento-Completo-per-Cani-Adulti-di-Piccola-Taglia-10120604-1.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <p class="card-text"><?php echo $product3->getTitle() ?></p>
                    <p class="card-text"><?php echo $product3->getPrice() ?></p>
                    <p class="card-text"><?php echo $product3->getMaterials() ?></p>
                    <p class="card-text"><?php echo $product3->getDimensions() ?></p>
                </div>
            </div>
        </section>
    </div>
</body>

</html>