<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Papan Catur</title>
</head>
<body>
<?php

function papan_catur($angka) {
// tulis kode di sini

    $length = $angka+0;
    for ($i=1; $i <= $length ; $i++) { 
        # code...
        $container = "";

        if ($i %2==0) {
            # code...
            $initial=2;
        }elseif ($i %2!=0){
            $initial=1;
        }

        for ($j=$initial; $j <= $length; $j++) { 
            # code...
            $container .= "#";
        }

        
        echo $container;
        echo "<br>";
    }
}

// TEST CASES
echo papan_catur(4); 
/*
# # # #
 # # #
# # # #
 # # #
 */

echo papan_catur(8);
/* 
# # # # # # # #
 # # # # # # # 
# # # # # # # #
 # # # # # # # 
# # # # # # # #
 # # # # # # #
# # # # # # # #
 # # # # # # #
*/
echo papan_catur(5) ;
/*
# # # # #
 # # # #
# # # # #
 # # # # 
# # # # #
*/
?>
</body>
</html>