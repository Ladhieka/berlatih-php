<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tukar Besar Kecil</title>
</head>
<body>

<?php
function tukar_besar_kecil($string){
//kode di sini
$length = strlen($string);
$container ="";
for ($i=0; $i < $length ; $i++) { 
    # code...
switch ($string[$i]) {
    case 'a':
        # code...
        $container.=strtoupper($string[$i]);
        break;
    case 'b':
        # code...
        $container.=strtoupper($string[$i]);
        break;
    case 'c':
        # code...
        $container.=strtoupper($string[$i]);
        break;
    case 'd':
        # code...
        $container.=strtoupper($string[$i]);
        break;
    case 'e':
        # code...
        $container.=strtoupper($string[$i]);
        break;
    case 'f':
        # code...
        $container.=strtoupper($string[$i]);
        break;
    case 'g':
        # code...
        $container.=strtoupper($string[$i]);
        break;
    case 'h':
        # code...
        $container.=strtoupper($string[$i]);
        break;
    case 'i':
        # code...
        $container.=strtoupper($string[$i]);
        break;
    case 'j':
        # code...
        $container.=strtoupper($string[$i]);
        break;
    case 'k':
        # code...
        $container.=strtoupper($string[$i]);
        break;
    case 'l':
        # code...
        $container.=strtoupper($string[$i]);
        break;
    case 'm':
        # code...
        $container.=strtoupper($string[$i]);
        break;
    case 'n':
        # code...
        $container.=strtoupper($string[$i]);
        break;
    case 'o':
        # code...
        $container.=strtoupper($string[$i]);
        break;
    case 'p':
        # code...
        $container.=strtoupper($string[$i]);
        break;
    case 'q':
        # code...
        $container.=strtoupper($string[$i]);
        break;
    case 'r':
        # code...
        $container.=strtoupper($string[$i]);
        break;
    case 's':
        # code...
        $container.=strtoupper($string[$i]);
        break;
    case 't':
        # code...
        $container.=strtoupper($string[$i]);
        break;
    case 'u':
        # code...
        $container.=strtoupper($string[$i]);
        break;
    case 'v':
        # code...
        $container.=strtoupper($string[$i]);
        break;
    case 'w':
        # code...
        $container.=strtoupper($string[$i]);
        break;
    case 'x':
        # code...
        $container.=strtoupper($string[$i]);
        break;
    case 'y':
        # code...
        $container.=strtoupper($string[$i]);
        break;
    case 'z':
        # code...
        $container.=strtoupper($string[$i]);
        break;
    case 'A':
        # code...
        $container.=strtolower($string[$i]);
        break;
    case 'B':
        # code...
        $container.=strtolower($string[$i]);
        break;
    case 'C':
        # code...
        $container.=strtolower($string[$i]);
        break;
    case 'D':
        # code...
        $container.=strtolower($string[$i]);
        break;
    case 'E':
        # code...
        $container.=strtolower($string[$i]);
        break;
    case 'F':
        # code...
        $container.=strtolower($string[$i]);
        break;
    case 'G':
        # code...
        $container.=strtolower($string[$i]);
        break;
    case 'H':
        # code...
        $container.=strtolower($string[$i]);
        break;
    case 'I':
        # code...
        $container.=strtolower($string[$i]);
        break;
    case 'J':
        # code...
        $container.=strtolower($string[$i]);
        break;
    case 'K':
        # code...
        $container.=strtolower($string[$i]);
        break;
    case 'L':
        # code...
        $container.=strtolower($string[$i]);
        break;
    case 'M':
        # code...
        $container.=strtolower($string[$i]);
        break;
    case 'N':
        # code...
        $container.=strtolower($string[$i]);
        break;
    case 'O':
        # code...
        $container.=strtolower($string[$i]);
        break;
    case 'P':
        # code...
        $container.=strtolower($string[$i]);
        break;
    case 'Q':
        # code...
        $container.=strtolower($string[$i]);
        break;
    case 'R':
        # code...
        $container.=strtolower($string[$i]);
        break;
    case 'S':
        # code...
        $container.=strtolower($string[$i]);
        break;
    case 'T':
        # code...
        $container.=strtolower($string[$i]);
        break;
    case 'U':
        # code...
        $container.=strtolower($string[$i]);
        break;
    case 'V':
        # code...
        $container.=strtolower($string[$i]);
        break;
    case 'W':
        # code...
        $container.=strtolower($string[$i]);
        break;
    case 'X':
        # code...
        $container.=strtolower($string[$i]);
        break;
    case 'Y':
        # code...
        $container.=strtolower($string[$i]);
        break;
    case 'Z':
        # code...
        $container.=strtolower($string[$i]);
        break;
    default:
        # code...
        $container .= $string[$i];
        break;
}

}
echo $container;
echo "<br>";
}

// TEST CASES
echo tukar_besar_kecil('Hello World'); // "hELLO wORLD"
echo tukar_besar_kecil('I aM aLAY'); // "i Am Alay"
echo tukar_besar_kecil('My Name is Bond!!'); // "mY nAME IS bOND!!"
echo tukar_besar_kecil('IT sHOULD bE me'); // "it Should Be ME"
echo tukar_besar_kecil('001-A-3-5TrdYW'); // "001-a-3-5tRDyw"

?>

</body>
</html>