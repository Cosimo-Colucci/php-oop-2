<?php
    include_once __DIR__ . '/Categories.php';
    
    class Product {
        public $name;
        public $description;
        public $price;
        public $image;
        public $category;
        public $quantity;
        
        function __construct(String $name, String $description, Float $price, String $image, Categories $category, INt $quantity){
            $this->name =$name;
            $this->description =$description;
            $this->price =$napriceme;
            $this->image =$image;
            $this->category =$category;
            $this->quantity =$quantity;
        }
    }
?>