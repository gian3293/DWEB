<?php
declare(strict_types=1);

// -----------------------------------------
// 2. Multidimensional array of products
// -----------------------------------------
$products = [
    "Toffee" => ["price" => 3.00, "stock" => 12],
    "Mints" => ["price" => 2.00, "stock" => 26],
    "Fudge" => ["price" => 4.00, "stock" => 8],
    "Lollipop" => ["price" => 5.00, "stock" => 15],
    "Gummies" => ["price" => 6.00, "stock" => 7],
    "Chocolate Bar" => ["price" => 10.00, "stock" => 20],
    "Caramel Candy" => ["price" => 3.50, "stock" => 9],
    "Sour Tape" => ["price" => 4.50, "stock" => 11]
];

// -----------------------------------------
// 3. Global tax rate
// -----------------------------------------
$tax_rate = 20; // 20%

// -----------------------------------------
// FUNCTIONS
// -----------------------------------------
function get_reorder_message(int $stock): string {
    return ($stock < 10) ? "Yes" : "No";
}

function get_total_value(float $price, int $qty): float {
    return $price * $qty;
}

function get_tax_due(float $price, int $qty, int $rate = 0): float {
    return ($price * $qty) * ($rate / 100);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Candy Store Stock Control</title>

    <!-- LINK YOUR CSS HERE -->
    <link rel="stylesheet" href="css/styles.css">

</head>


<h1>The Candy Store</h1>
<h2>STOCK CONTROL</h2>

<table>
    <tr>
        <th>PRODUCT</th>
        <th>STOCK</th>
        <th>RE-ORDER</th>
        <th>TOTAL VALUE</th>
        <th>TAX DUE</th>
    </tr>

    <?php foreach ($products as $product_name => $data): ?>
        <tr>
            <td><?= htmlspecialchars($product_name) ?></td>
            <td><?= $data["stock"] ?></td>
            <td><?= get_reorder_message($data["stock"]) ?></td>
            <td>₱<?= number_format(get_total_value($data["price"], $data["stock"]), 2) ?></td>
            <td>₱<?= number_format(get_tax_due($data["price"], $data["stock"], $tax_rate), 2) ?></td>
        </tr>
    <?php endforeach; ?>

</table>

</body>
</html>
