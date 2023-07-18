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
            </div>
        </div>
        <div class="row justify-content-around">
            <?php foreach ($products as $product) { ?>
                <div class="col-3 m-4 p-0">
                    <img class="card-img-top" src="<?php echo $product->image; ?>" alt="<?php echo $product->name; ?>">
                    <div class="card-body">
                        <h5 class="card-title"><?php echo $product->name ?></h5>
                        <h6 class="card-submint"><?php echo $product->category->name; ?></h6>
                        <p class="card-text"><?php echo $product->description; ?></p>
                        <a href="#" class="btn btn-primary">Only for<?php echo $product->price ?>€</a>
                    </div>                  
                </div>
            <?php } ?>
        </div>
                <?php
                // echo var_dump ($foodProduct, $kennelProduct, $toysProduct);
                ?>
    </div>
</body>
</html>