<?php
include_once __DIR__ . '/classes/Categories.php';
include_once __DIR__ . '/classes/Product.php';
// include_once __DIR__ . '/classes/Food.php';
// include_once __DIR__ . '/classes/Toys.php';
include_once __DIR__ . '/db/init.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shop</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1>
                    Shop
                </h1>
                <?php echo var_dump ($foodProduct, $kennelProduct, $toysProduct); ?>
                   
                <?php ?>
            </div>
        </div>
    </div>
</body>
</html>