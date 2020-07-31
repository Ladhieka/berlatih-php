
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<?php 

class Frog extends animal{

    public $jump = "hop hop";

    public function set_jump ($jump){
        $this->jump = $jump;
    }

    public function get_jump (){
        echo $this->jump;
    }

}

?>

</body>
</html>
