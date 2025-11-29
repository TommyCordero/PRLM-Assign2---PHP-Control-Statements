<?php 
    $items = 2;
    $cost = 60;
    $subtotal = $cost * $items;
    $tax = ($subtotal/100) * 12;
    $total = $subtotal + $tax;
    $nutrition = [
        'calories' => 293,
        'carbs' => 23,
        'protein' => 3,
        'fat' => 12,
        'sugar' => 14,
    ];
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

    <?php include 'header.php';?>
    <h2 id="cookies">Chocolate Cookie</h2>
    <h2>Nutritional Facts</h2>
    <p>Calories: <?php echo $nutrition['calories']; ?>kcal</p>
    <p>Carbs: <?php echo $nutrition['carbs']; ?>g</p>
    <p>Protein: <?php echo $nutrition['protein']; ?>g</p>
    <p>Fat: <?php echo $nutrition['fat']; ?>g</p>
    <p>Sugar: <?php echo $nutrition['sugar']; ?>g</p>

    <h2>Shopping Cart</h2>
    <p>Items: <?= $items ?></p>
    <p>Cost per item: ₱<?=$cost ?></p>
    <p>Subtotal: ₱<?=$subtotal ?></p>
    <p>Tax: ₱<?=$tax ?></p>
    <p>Total: ₱<?=$total ?></p>

    <?php include 'footer.php'; ?>
</body>

</html>