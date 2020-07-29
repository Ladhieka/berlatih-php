<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<?php
function tentukan_deret_geometri($arr) {
// kode di sini
$length = count($arr);
$different = $arr[1]/$arr[0];
$flag = true;

for ($i=2; $i < $length; $i++) { 
    # code...
    if ($arr[$i] != $arr[$i-1] * $different) {
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
//TEST CASES
echo tentukan_deret_geometri([1, 3, 9, 27, 81]); // true
echo tentukan_deret_geometri([2, 4, 8, 16, 32]); // true
echo tentukan_deret_geometri([2, 4, 6, 8]); // false
echo tentukan_deret_geometri([2, 6, 18, 54]); // true
echo tentukan_deret_geometri([1, 2, 3, 4, 7, 9]); //false
?>

</body>
</html>