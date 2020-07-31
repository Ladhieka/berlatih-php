<?php 

class Ape extends animal{


    public $yell = "Auooo";



    public function set_legs ($legs){
        $this->legs = $legs;
    }

    public function get_legs (){
        return $this->legs;
    }
    
    public function set_yell ($yell){
        $this->yell = $yell;
    }

    public function get_yell (){
        echo $this->yell;
    }

}




?>