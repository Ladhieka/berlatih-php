<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ubah Huruf</title>
</head>
<body>
    
<?php
function ubah_huruf($string){
//kode di sini
$length = strlen($string);
$lowercase = strtolower($string);
$container ="";
for ($i=0; $i < $length ; $i++) { 
    # code...
switch ($lowercase[$i]) {
    case 'a':
        # code...
        $container.="b";
        break;
    case 'b':
        # code...
        $container.="c";
        break;
    case 'c':
        # code...
        $container.="d";
        break;
    case 'd':
        # code...
        $container.="e";
        break;
    case 'e':
        # code...
        $container.="f";
        break;
    case 'f':
        # code...
        $container.="g";
        break;
    case 'g':
        # code...
        $container.="h";
        break;
    case 'h':
        # code...
        $container.="i";
        break;
    case 'i':
        # code...
        $container.="j";
        break;
    case 'j':
        # code...
        $container.="k";
        break;
    case 'k':
        # code...
        $container.="l";
        break;
    case 'l':
        # code...
        $container.="m";
        break;
    case 'm':
        # code...
        $container.="n";
        break;
    case 'n':
        # code...
        $container.="o";
        break;
    case 'o':
        # code...
        $container.="p";
        break;
    case 'p':
        # code...
        $container.="q";
        break;
    case 'q':
        # code...
        $container.="r";
        break;
    case 'r':
        # code...
        $container.="s";
        break;
    case 's':
        # code...
        $container.="t";
        break;
    case 't':
        # code...
        $container.="u";
        break;
    case 'u':
        # code...
        $container.="v";
        break;
    case 'v':
        # code...
        $container.="w";
        break;
    case 'w':
        # code...
        $container.="x";
        break;
    case 'x':
        # code...
        $container.="y";
        break;
    case 'y':
        # code...
        $container.="z";
        break;
    case 'z':
        # code...
        $container.="a";
        break;
    default:
        # code...
        break;
}

}
echo $container;
echo "<br>";
}

// TEST CASES
echo ubah_huruf('wow'); // xpx
echo ubah_huruf('developer'); // efwfmpqfs
echo ubah_huruf('laravel'); // mbsbwfm
echo ubah_huruf('keren'); // lfsfo
echo ubah_huruf('semangat'); // tfnbohbu

?>
    
</body>
</html>