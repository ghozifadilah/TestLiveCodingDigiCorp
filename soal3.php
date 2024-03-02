<?php 

function polaRambu() {
    static $colors = ["merah","kuning",'hijau'];

    static $posisi = 0;

    $warna = $colors[$posisi];

    $posisi++;

    if ($posisi == count($colors)) {
        $posisi = 0;
    }

    return $warna;


}

echo polaRambu()."<br>";
echo polaRambu()."<br>";
echo polaRambu()."<br>";
echo polaRambu()."<br>";


?>