<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php
function tentukan_deret_aritmatika($arr) {
// kode di sini
$length = count($arr);
$different = $arr[1]-$arr[0];
$flag = true;

for ($i=2; $i < $length; $i++) { 
    # code...
    if ($arr[$i] != $arr[0] + ($different * $i)) {
        # code...
        $flag = false;
    }
}

if ($flag == true) {
    # code...
    echo "true";
}else{
    echo "false";
}
echo "<br>";

}

// TEST CASES
echo tentukan_deret_aritmatika([1, 2, 3, 4, 5, 6]);// true
echo tentukan_deret_aritmatika([2, 4, 6, 12, 24]);// false
echo tentukan_deret_aritmatika([2, 4, 6, 8]); //true
echo tentukan_deret_aritmatika([2, 6, 18, 54]);// false
echo tentukan_deret_aritmatika([1, 2, 3, 4, 7, 9]);// false
?>
    
</body>
</html>