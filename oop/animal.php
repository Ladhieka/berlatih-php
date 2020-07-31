<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php 

//class
class Animal{

    
    //property
    public $name;
    public $legs = 2;
    public $cold_blooded = 'false';

    //constructor
    public function __construct($name){
        $this->name = $name;
    }

    public function set_legs ($legs){
        $this->legs = $legs;
    }

    public function get_legs (){
        return $this->legs;
    }
    
    public function set_cold_blooded ($cold_blooded){
        $this->cold_blooded = $cold_blooded;
    }

    public function get_cold_blooded (){
        return $this->cold_blooded;
    }
    
    
        
    }


?>    

</body>
</html>