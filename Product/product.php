<?php
    class Product{
        private $id;
        private $name;
        private $des;
        private $price;
        private $num;

        function __construct($id, $name, $des, $price, $num) {
            $this->id= $id;
            $this->name = $name; 
            $this->des = $des; 
            $this->price = $price;
            $this->num= $num; 
        }
        function setId($id){
            $this->id = $id;
        }
        function getId(){
        return $this->id;
        }
        function setName($name){
            $this->name = $name;
        }
        function getName(){
        return $this->name;
        }
        function setDes($des){
            $this->des = $des;
        }
        function getDes(){
        return $this->des;
        }
        function setPrice($price){
            $this->price = $price;
        }
        function getPrice(){
        return $this->price;
        }
        function setNum($num){
            $this->num = $num;
        }
        function getNum(){
        return $this->num;
        }
        function displayProductInfo(){
             echo "ID:{$this->id} <br> Tên: {$this->name} <br> Mô tả: {$this->des}   <br>Số lượng:{$this->num}"  ;
        }
    }
?>