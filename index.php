<?php 

require_once __DIR__ . "/classes/Food.php";
require_once __DIR__ . "/classes/Accessories.php";
require_once __DIR__ . "/classes/Toys.php";
require_once __DIR__ . "/classes/Category.php";

$product1 = new Food ("HERE GOES IMAGE", "good food", 20, 1, "beef meat");

$product2 = new Toys ("HERE GOES IMAGE", "funny toy", 10, "has lot of lights", "10cm x 15cm");

$product3 = new Accessories ("HERE GOES IMAGE", "comfortable cage", 30, "wood", "50cm x 70cm");

var_dump($product1);

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <ul>
        <li><?php echo $product1->getImage() ?></li>
        <li><?php echo $product1->getTitle() ?></li>
        <li><?php echo $product1->getPrice() ?></li>
        <li><?php echo $product1->getWeight() ?></li>
        <li><?php echo $product1->getIngredients() ?></li>
    </ul>
    <ul>
        <li><?php echo $product2->getImage() ?></li>
        <li><?php echo $product2->getTitle() ?></li>
        <li><?php echo $product2->getPrice() ?></li>
        <li><?php echo $product2->getFeatures() ?></li>
        <li><?php echo $product2->getDimensions() ?></li>
    </ul>
    <ul>
        <li><?php echo $product3->getImage() ?></li>
        <li><?php echo $product3->getTitle() ?></li>
        <li><?php echo $product3->getPrice() ?></li>
        <li><?php echo $product3->getMaterials() ?></li>
        <li><?php echo $product3->getDimensions() ?></li>
    </ul>
</body>
</html>