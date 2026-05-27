<?php
class Buah2  {
    public $nama;
    public $warna;
    public $berat;

    function set_nama($n) {
        $this->nama = $n;
    }

    // protected function set_color($n) {
    //     $this->warna = $n;
    // }

    // private function set_weight($n) {
    //     $this->berat = $n;
    // }

    public function set_color($n) {
        $this->warna = $n;
    }

    public function set_weight($n) {
        $this->berat = $n;
    }
}

$manggo = new Buah2();
$manggo->set_nama("Manggo");
$manggo->set_color("Kuning");
$manggo->set_weight(300);

echo "Nama buah: " . $manggo->nama . "<br>" . "\n";
echo "Warna buah: " . $manggo->warna . "<br>" . "\n";
echo "Berat buah: " . $manggo->berat . "<br>" . "\n";

// kesimpulan erro: karena method protected hanya bisa diakses di dalam kelas itu sendiri atau kelas turunannya, tidak bisa diakses langsung dari objek di luar kelas. Sedangkan method private hanya bisa diakses di dalam kelas itu sendiri, tidak bisa dari kelas turunan maupun dari luar kelas. Jadi saat $manggo->set_color() dan $manggo->set_weight() dipanggil, muncul error fatal.
?>