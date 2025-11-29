<!DOCTYPE html>
<html>
<head>
    <title>My Simple PHP Store</title> 
    <style>
        body {
            background: #0051ffff;
            font-family: Arial, sans-serif;
            padding: 20px;
        }
        h1 {
            text-align: center;
            color: #333;
        }
        table {
            border-collapse: collapse;
            width: 70%;
            margin: auto;
            background: white;
            box-shadow: 0px 0px 10px #36028aff;
        }
        th, td {
            padding: 12px;
            border: 1px solid #ccc;
            text-align: center;
        }
        th {
            background: #222;
            color: #fff;
        }
    </style>
</head>
<body>
<h1>🛒 Welcome to My PHP Store</h1>
<?php
$products = [
    ["name" => "Wireless Mouse", "price" => 350],
    ["name" => "Mechanical Keyboard", "price" => 1499],
    ["name" => "Wireless Headphone", "price" => 299]
];

$storeName = "Techy Essentials";
$shippingFee = 50;
$isOpen = true; // boolean example

echo "<p><b>Store:</b> $storeName</p>";
echo "<p><b>Shipping Fee:</b> ₱$shippingFee</p>";
echo "<p><b>Store Open:</b> " . ($isOpen ? "Yes" : "No") . "</p><br>";
?>

<table>
    <tr>
        <th>Product</th>
        <th>Price (₱)</th>
        <th>Total with Shipping</th>
    </tr>

<?php

foreach ($products as $item) {

    // variables
    $price = $item["price"];

    // expression using arithmetic operator (+)
    $totalCost = $price + $shippingFee;

    echo "
    <tr>
        <td>{$item['name']}</td>
        <td>$price</td>
        <td>$totalCost</td>
    </tr>
    ";
}
?>

</table>

</body>
</html>
