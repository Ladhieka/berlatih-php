<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cari Mean</title>
</head>
<body>

<?php

function cari_mean($arr){
//kode di sini
    $total = 0;
    $length = count($arr);
    for ($i=0; $i < $length ; $i++) { 
        # code...
        $total += $arr[$i];
    }

    echo intval($total / $length);
    echo "<br>";
}

//TEST CASE 
echo cari_mean([1, 2, 3, 4, 5]); // 3
echo cari_mean([3, 5, 7, 5, 3]); // 5
echo cari_mean([6, 5, 4, 7, 3]); // 5
echo cari_mean([1, 3, 3]); // 2
echo cari_mean([7, 7, 7, 7, 7]); // 7

?>

</body>
</html>