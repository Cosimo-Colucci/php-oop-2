<?php
    include_once __DIR__ . '/classes/kennels.php';
    include_once __DIR__ . '/classes/croquettes.php';
    include_once __DIR__ . '/classes/toys.php';
    class Categories {
        public $name;
        
        function __construct($name){
            $this->name =$name;
        }
    }
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
    </div>
</body>
</html>