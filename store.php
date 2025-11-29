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
        th { background: #222; color: #fff; }
    </style>
</head>
<body>

<h1>🛒 Welcome to My PHP Store</h1>
<?php

require "products.php";

//variables
$storeName = "Techy Essentials";
$shippingFee = 50;
$isOpen = true;

//conditional statement
if ($isOpen) {
    echo "<p><b>Store Status:</b> Open</p>";
} else {
    echo "<p><b>Store Status:</b> Closed</p>";
}

//another condition
if (count($products) > 3) {
    echo "<p><i>We currently have many items available!</i></p>";
} else {
    echo "<p><i>Limited items available.</i></p>";
}
echo "<p><b>Shipping Fee:</b> ₱$shippingFee</p><br>";
?>
<table>
    <tr>
        <th>Product</th>
        <th>Price (₱)</th>
        <th>Total with Shipping</th>
        <th>Category</th>
    </tr>

<?php

//loop through products
foreach ($products as $item) {
    $price = $item["price"];
    $total = $price + $shippingFee;
    //conditional inside loop
    if ($price >= 1000) {
        $category = "Expensive";
    } else {
        $category = "Budget";
    }
    echo "
    <tr>
        <td>{$item['name']}</td>
        <td>$price</td>
        <td>$total</td>
        <td>$category</td>
    </tr>
    ";
}
?>
</table>
</body>
</html>
