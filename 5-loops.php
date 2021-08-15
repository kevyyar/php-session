<?php

// loops
$people = ['kevin', 'maria', 'erika', 'kilo'];

for ($i = 0; $i < count($people); $i++) {
    echo $people[$i];
    echo "<br />";
}

echo "<hr />";

$people2 = ['joe', 'mario', 'wario', 'kurt'];

foreach ($people2 as $person) {
    echo $person;
    echo "<br />";
}

echo "<hr />";

$products = [
    ['product' => 'Laptop', 'price' => 12000, 'store' => 'Amazon'],
    ['product' => 'Xbox', 'price' => 1500, 'store' => 'WalMart'],
    ['product' => 'Desk', 'price' => 8000, 'store' => 'Costco'],
    ['product' => 'Gaming Chair', 'price' => 11000, 'Store' => 'MercadoLibre'],
];

foreach ($products as $product) {
    echo 'The '.$product['product'].' was bought in '.$product['store'].' and the price was '.$product['price'];
    echo '<br />';
}
?>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Loops</title>
</head>
<body>
    <h1>Products</h1>
    <ul>
        <?php foreach ($products as $product) { ?>
            <h3><?php echo $product['product']; ?></h3>
            <p><?php echo $product['price']; ?></p>
        <?php } ?>
    </ul>
</body>
</html>
