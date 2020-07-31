<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php 

require_once 'animal.php';
require_once 'Frog.php';
require_once 'Ape.php';

$sheep = new animal("shaun");

echo $sheep->name . "<br>";// "shaun"
echo $sheep->get_legs() . "<br>"; // 2
echo $sheep->get_cold_blooded() . "<br>"; // false

// NB: Boleh juga menggunakan method get (get_name(), get_legs(), 
//     get_cold_blooded())

$sungokong = new Ape("kera sakti");
echo "<br>".  $sungokong->name . "<br>";
echo $sungokong->get_legs() . "<br>";
$sungokong->get_yell() . "<br><br>"; // "Auooo"

$kodok = new Frog("buduk");
$kodok->set_legs(4);
echo "<br><br>". $kodok->name . "<br>";
echo $kodok->get_legs() . "<br>";
$kodok->get_jump() . "<br><br>"; // "hop hop"

?>    

</body>
</html>