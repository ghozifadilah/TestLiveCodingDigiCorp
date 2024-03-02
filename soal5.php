<?php 

function karakterTerbanyak($kata) {
    $hasil = array();
    $karakter = str_split($kata);

    foreach ($karakter as $k) {
            if (isset($hasil[$k]) ) {
                $hasil[$k]++;
            }else{
                $hasil[$k] = 1;
            }
    }

    $maxs = max($hasil);
    
    $karakterTerbanyak = array_search($maxs,$hasil);

    return $karakterTerbanyak." ".$maxs."x";

}

echo "kata Welcome Memiliki Jumlah Karakter : ".karakterTerbanyak('welcome');
echo "<br> kata Strawberry Memiliki Jumlah Karakter : ".karakterTerbanyak('Strawberry');

?>