<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>palindrome Angka</title>
</head>
<body>
<?php

function palindrome_angka($angka) {
  // tulis kode di sini
    $next = intval($angka);
    
    do {
        # code...
        $next++;
        $strnext = strval($next);
        $length = strlen($strnext);
        $reverse ="";
        for ($i=$length-1; $i >=0 ; $i--) { 
        # code...
            $reverse .= $strnext[$i];
        }
            
        if ($next == intval($reverse)) {
            echo $next;
        } 
        
    } while ($next != intval($reverse));
    echo "<br>";
}

// TEST CASES
echo palindrome_angka(8); // 9
echo palindrome_angka(10); // 11
echo palindrome_angka(117); // 121
echo palindrome_angka(175); // 181
echo palindrome_angka(1000); // 1001

?>
</body>
</html>