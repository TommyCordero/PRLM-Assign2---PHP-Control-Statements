<?php 
    $items = 2;
    $cost = 60;
    $subtotal = $cost * $items;
    $tax = ($subtotal/100) * 10;
    $total = $subtotal + $tax;
    $nutrition = [
        'calories' => 293,
        'carbs' => 23,
        'protein' => 3,
        'fat' => 12,
        'sugar' => 14,
    ];

      $cookies = [
    'Chocolate cookies' => [
        'price' => 60, 
        'stock' => 9 
    ],

    'Oreo cookies' => [
        'price' => 70, 
        'stock' => 12 
    ],

    'Mocha cookies' => [
        'price' => 60, 
        'stock' => 5 
    ],
    ];

    $tax_rate = 10;

    function get_reorder_message($stock){
        return($stock<10) ? "Yes" : "No";
    }

    function get_total_value($price,$quantity){
        return $price * $quantity;
    }

    function get_tax_due($price, $quantity, $tax = 0){
        $total_value = $price * $quantity;
        return $total_value * ($tax / 100);
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
    <?php include 'basic-functions.php'; ?>
    <?php write_logo(); ?>

    <?php include 'header.php';?>
    <h2 id="cookies">PRODUCT INVENTORY</h2>
    <table>
        <tr>
            <th>COOKIE FLAVOR</th>
            <th>STOCK</th>
            <th>RE-ORDER</th>
            <th>TOTAL VALUE</th>
            <th>TAX DUE</th>
        </tr>

        <?php
        foreach($cookies as $product_name => $data){
            echo "<tr>";
            echo "<td> $product_name </td>";
            echo "<td> {$data['stock']} </td>";
            echo "<td>" . get_reorder_message ($data['stock']) . "</td>";
            echo "<td> ₱" . get_total_value ($data['price'], $data['stock']) . "</td>";
            echo "<td> ₱" . get_tax_due ($data['price'], $data['stock'], $tax_rate) . "</td>";
            echo "</tr>";
        }

        ?>

    </table>

    <h2>Nutritional Facts</h2>
    <p>Calories: <?php echo $nutrition['calories']; ?>kcal</p>
    <p>Carbs: <?php echo $nutrition['carbs']; ?>g</p>
    <p>Protein: <?php echo $nutrition['protein']; ?>g</p>
    <p>Fat: <?php echo $nutrition['fat']; ?>g</p>
    <p>Sugar: <?php echo $nutrition['sugar']; ?>g</p>

    <h2>Shopping Cart</h2>
    <p>Items: <?= $items ?> Chocolate Cookies</p>
    <p>Cost per item: ₱<?=$cost ?></p>
    <p>Subtotal: ₱<?=$subtotal ?></p>
    <p>Tax: ₱<?=$tax ?></p>
    <p>Total: ₱<?=$total ?></p>

    <?php include 'footer.php'; ?>
</body>
</html>
