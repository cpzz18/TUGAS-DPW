<?php
require_once 'Manusia.php';

class Mahasiswa extends Manusia {
    protected $nim;
    protected $jurusan;
    protected $kelas;

public function __construct($nama)
{
    $this->setName($nama);
    
}

public function setNim($nim)
{
    $this->nim = $nim;
}

public function setJurusan($jurusan)
{
    $this->jurusan = $jurusan;
}

public function setKelas($kelas)
{
    $this->kelas = $kelas;
}

public function getNim()
{
    return $this->nim;
}

public function getJurusan()
{
    return $this->jurusan;
}

public function getKelas()
{
    return $this->kelas;
}

    
}
?>