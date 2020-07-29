<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Skor Terbesar</title>
</head>
<body>

<?php
function skor_terbesar($arr){
//kode di sini
$length = count($arr);
$higestScore = $arr;
$laravel = 0;
$reactNative = 0;
$reactJS = 0;
$keylaravel = 0;
$keyReactNative = 0;
$keyReactJS = 0;

for ($i=0; $i < $length; $i++) { 
    # code...
    if ($arr[$i]["kelas"]=="Laravel") {
        # code...
        if ($arr[$i]["nilai"]> $laravel) {
            # code...
            $laravel = $arr[$i]["nilai"];
            $keylaravel = $i;
        }
    }
    elseif ($arr[$i]["kelas"]=="React Native") {
        # code...
        if ($arr[$i]["nilai"]> $reactNative) {
            # code...
            $reactNative = $arr[$i]["nilai"];
            $keyReactNative = $i;
        }
    }
    elseif ($arr[$i]["kelas"]=="React JS") {
        # code...
        if ($arr[$i]["nilai"]> $reactJS) {
            # code...
            $reactJS = $arr[$i]["nilai"];
            $keyReactJS = $i;
        }
    }    
}

for ($i=0; $i < $length; $i++) { 
    # code...
    if ($i == $keylaravel || $i == $keyReactJS || $i == $keyReactNative) {
        # code...
    }
    else{
        unset($higestScore[$i]);
    }
}

$length2 = count($higestScore);

for ($i=1; $i <= $length2; $i++) { 
    # code...
    print_r ($higestScore[$i]);
    echo "<br>";
}

// print_r($higestScore);

}

// TEST CASES
$skor = [
  [
    "nama" => "Bobby",
    "kelas" => "Laravel",
    "nilai" => 78
  ],
  [
    "nama" => "Regi",
    "kelas" => "React Native",
    "nilai" => 86
  ],
  [
    "nama" => "Aghnat",
    "kelas" => "Laravel",
    "nilai" => 90
  ],
  [
    "nama" => "Indra",
    "kelas" => "React JS",
    "nilai" => 85
  ],
  [
    "nama" => "Yoga",
    "kelas" => "React Native",
    "nilai" => 77
  ],
];

print_r(skor_terbesar($skor));
/* OUTPUT
  Array (
    [Laravel] => Array
              (
                [nama] => Aghnat
                [kelas] => Laravel
                [nilai] => 90
              )
    [React Native] => Array
                  (
                    [nama] => Regi
                    [kelas] => React Native
                    [nilai] => 86
                  )
    [React JS] => Array
                (
                  [nama] => Indra
                  [kelas] => React JS
                  [nilai] => 85
                )
  )
*/
?> 

</body>
</html>