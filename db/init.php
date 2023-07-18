<?php

$catItems = new Categories('Cat Items', 'Items for cats', ''); 
$dogItems = new Categories('Dog Items', 'Items for dogs', '');

$foodProduct = new Product ('Crocchette', 'Deliziose crocchette', 29.45, 'https://www.cortilia.it/_next/image?url=https%3A%2F%2Fmedia.cortilia.it%2Fimages%2Fv1%2Fpc%2F076PROD0421.841x862.jpg&w=1080&q=75', $catItems, 20);
$kennelProduct = new Product ('Cuccia', 'Splendida cuccia', 57.45, 'https://i0.wp.com/www.zoologos.net/wp-content/uploads/2020/08/htb1ldyjrfzqk1rjszfoq6zfcxxa3.jpg?fit=800%2C800&ssl=1', $catItems, 50);
$toysProduct = new Product ('Paperella', 'Paperella QUA QUA', 72.45, 'https://arcaplanet.vtexassets.com/arquivos/ids/278395-1800-1800/united-pets-gioco-per-cani-emma-papera-gialla.jpg?v=1774175203&quality=1&width=1800&height=1800', $dogItems, 5);


$products = [
    $foodProduct,
    $kennelProduct,
    $toysProduct,
];