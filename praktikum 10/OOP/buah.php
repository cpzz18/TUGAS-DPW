<?php
class Buah {
    public $nama;
    protected $warna;
    private $berat;

    public function __construct($nama, $warna, $berat) {
        $this->nama = $nama;
        $this->warna = $warna;
        $this->berat = $berat;
    }

    public function getNama() {
        return $this->nama;
    }

    public function getWarna() {
        return $this->warna;
    }

    public function getBerat() {
        return $this->berat;
    }
    
}

$manggo = new Buah("Manggo", "Kuning", 300);
echo $manggo->getNama(); 
echo $manggo->getWarna(); 
echo $manggo->getBerat(); 

//simpulan error bagian pertama
// karena protected itu hanya bisa diakses di dalam kelas itu sendiri atau kelas turunannya, tapi tidak bisa diakses langsung dari objek di luar kelas. Sedangkan private hanya bisa diakses di dalam kelas itu sendiri, tidak bisa dari kelas turunan maupun dari luar kelas.
