<?php

function getSecondLargest(array $arr) {
    sort($arr);

    return $arr[count($arr) -2 ];
}

$array = [rand(),rand(),rand()];

echo "array random : <br>";
print_r($array);

//mendapatkan nilai terbesar ke dua
$secondLargest = getSecondLargest($array);

echo "<br> Nilai Terbesar kedua adalah :". $secondLargest;


?>