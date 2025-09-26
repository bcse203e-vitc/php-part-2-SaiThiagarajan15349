<?php

$products = [];
$lines = file("product 2.txt");

foreach ($lines as $line) {
    list($name, $price) = explode(",", trim($line));
    $products[$name] = (int)$price;
}


asort($products);

echo "<h3>Product List</h3>";
echo "<table border='1' cellpadding='5'>
<tr><th>Product</th><th>Price</th></tr>";

foreach ($products as $name => $price) {
    echo "<tr><td>$name</td><td>$price</td></tr>";
}
echo "</table>";
?>

