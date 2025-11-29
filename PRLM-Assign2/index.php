<?php 
    $stock = 9;
    
   if ($stock >= 10){
    $message = 'Good Availability';
   }

   if ($stock > 0 && $stock < 10){
    $message = 'Low Stock';
   }

   if ($stock == 0){
    $message = 'Out of Stock';
   }


   $packs = 6;
   $price = 60;

   $day = 'Saturday';

   switch($day){
    case 'Saturday':
        $offer = '5% off all Cookie packs!';
        break;
    
    case 'Monday':
        $offer = 'Free Iced Cocoa Drink for every ₱350 purchase';
        break;
 
    default:
        $offer = 'Buy 3 packs, get one free'; 
   }


?>

<!DOCTYPE html>
<html>
<head>
    <meta charset = "utf-8">
    <meta name = "viewport" content = "width=device-width, initial-scale=1">
    <title>Doughlicious Store</title>
    <link rel ="stylesheet" href = "css/styles.css">
</head> 

<body>

    <?php require_once 'header.php'; ?>

    <h2>Welcome to Doughlicious Store</h2>
    <p>Discover the joy of freshly baked cookies made with love and premium ingredients. From timeless classics to bold new flavors, every bite is a sweet escape. Treat yourself today!</p>

    <h3>Chocolate Cookie</h3>
    <p><?= $message ?></p>

    <p></p>
    <h3>Prices for Multiple Packs</h3>
    <p>
        <?php
        do {
            echo $packs;
            echo ' packs cost ₱';
            echo $price * $packs;
            echo '<br>';
            $packs--;
        }
        while ($packs > 0);
        ?>
    </p>

    <h3>Offers on <?= $day;?></h3>
    <p><?= $offer ?></p>

    <?php include 'footer.php'; ?>
    
</body>
</html>

