<?php 

class Nilai{

    public $mapel;
    public $nilai;

    public function __construct($mapel , $nilai) {
        $this->mapel = $mapel;
        $this->nilai = $nilai;
    }

}

class Siswa{

    public $nrp;
    public $nama;
    public $daftarNilai = [];
    
    public function __construct($nrp, $nama) {
        $this->nrp = $nrp;
        $this->nama = $nama;
    }

    public function tambahNilai($mapel,$nilai) {
        $this->daftarNilai[] = new Nilai($mapel, $nilai);
    }


}

// a
$daftarNilai = [new Nilai("inggris",100), new Nilai("Indonesia", 80), new Nilai('jepang',90)];

//b
$siswa1 = new Siswa("01","Ghozi");
$siswa1->tambahNilai("inggris", 100);

//c
for ($i = 0; $i < 10; $i++) {
    $namaRandom = '';

    for ($j=0; $j <10 ; $j++) { 
        $namaRandom .= chr(rand(65,90)); //random A-Z
    }

    $mapelRandom = ["Inggris", "Indonesia", "Jepang"][array_rand(["Inggris", "Indonesia", "Jepang"])];
    
    $nilaiRandom = rand(0,100);

    $siswa = new Siswa("0".($i+1),$namaRandom);
    $siswa->tambahNilai($mapelRandom,$nilaiRandom);

    echo "Siswa". $siswa->nrp.".".$siswa->nama.".Mapel".$mapelRandom."Nilai.".$nilaiRandom."<br>";

}






?>