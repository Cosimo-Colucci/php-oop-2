<?php
    class Categories {
        public $name;
        public $description;
        public $image;
        
        function __construct($name, $description, $image){
            $this->name =$name;
            $this->description =$description;
            $this->image =$image;
        }
    }
?>