<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php
function pasangan_terbesar($angka){
// kode di sini
    $length = strlen($angka);
    $array =[];

    for ($i=1; $i < $length ; $i++) { 
        # code...
        $container ="";
        $strangka = strval($angka);
        $container .= $strangka[$i-1];
        $container .= $strangka[$i];

        array_push($array, intval($container));
        
    }

    $higestValue=0;
    $length2= count($array);
    for ($i=0; $i < $length2 ; $i++) { 
         # code...
        if ($array[$i]>$higestValue) {
            # code...
            $higestValue = $array[$i];
        }
    }

    echo $higestValue;
    echo "<br>";
}

// TEST CASES
echo pasangan_terbesar(641573); // 73
echo pasangan_terbesar(12783456); // 83
echo pasangan_terbesar(910233); // 91
echo pasangan_terbesar(71856421); // 85
echo pasangan_terbesar(79918293); // 99

?>
</body>
</html>