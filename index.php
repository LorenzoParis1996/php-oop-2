<?php 

require_once __DIR__ . "/classes/Food.php";
require_once __DIR__ . "/classes/Accesories.php";
require_once __DIR__ . "/classes/Toys.php";
require_once __DIR__ . "/classes/Category.php";

$product = new Food ("HERE GOES IMAGE", "good food", 20, 1, "beef meat");

var_dump($product);

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
</body>
</html>