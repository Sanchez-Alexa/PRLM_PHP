<!DOCTYPE html>
<?php


//Step 2:Multidimensional Array
$techProducts = [
    "Wireless Mouse" => ["price" => 350, "stock" => 12],
    "Mechanical Keyboard" => ["price" => 1499, "stock" => 5],
    "Wireless Headphones" => ["price" => 299, "stock" => 20],
    "USB Flash Drive" => ["price" => 120, "stock" => 8],
    "Webcam" => ["price" => 850, "stock" => 3],
    "Laptop Stand" => ["price" => 499, "stock" => 15],
];

//Step 3:Global Tax Rate
$taxRate = 12;

//Step 4–5:Reorder Message Function
function get_reorder_message(int $stock): string {
    return $stock < 10 ? "Yes" : "No";
}

//Step 6–7:Total Value of Stock Function
function get_total_value(float $price, int $qty): float {
    return $price * $qty;
}

//Step 8–9:Tax Due Function
function get_tax_due(float $price, int $qty, int $tax = 0): float {
    $total = $price * $qty;
    return $total * ($tax / 100);
}
?>
<html>
<head>
    <title>Stock Monitoring</title>
    <style>
        body {
            background: #e6f0ff;
            font-family: Arial, sans-serif;
            padding: 20px;
        }
        table {
            width: 80%;
            margin: auto;
            border-collapse: collapse;
            background: white;
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
        h1 {
            text-align: center;
            margin-bottom: 20px;
            color: #222;
        }
    </style>
    <nav>
    <a href="store.php">Home</a>
    <a href="functions.php">Stock Monitor</a>
    </nav>

</head>
<body>
<h1>📦 Techy Essentials — Stock Monitoring</h1>
<table>
    <tr>
        <th>Product</th>
        <th>Stock</th>
        <th>Reorder?</th>
        <th>Total Stock Value (₱)</th>
        <th>Tax Due (₱)</th>
    </tr>

<?php
// Step 10: Foreach Loop
foreach ($techProducts as $productName => $data) {
    $price = $data["price"];
    $stock = $data["stock"];

    $reorder = get_reorder_message($stock);
    $value = get_total_value($price, $stock);
    $tax = get_tax_due($price, $stock, $taxRate);
    echo "
    <tr>
        <td>$productName</td>
        <td>$stock</td>
        <td>$reorder</td>
        <td>" . number_format($value, 2) . "</td>
        <td>" . number_format($tax, 2) . "</td>
    </tr>
    ";
}
?>
</table>
</body>
</html>
