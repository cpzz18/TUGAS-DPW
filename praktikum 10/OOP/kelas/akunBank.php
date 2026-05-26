<?php
class akunBank
{
    protected $accountNumber;
    protected $jmlUang;
    protected $nama;

    public function __construct($nomorAkun, $nominal, $nama)
    {
        $this->accountNumber = $nomorAkun;
        $this->jmlUang = $nominal;
        $this->nama = $nama;
    }

    public function setNama($nama)
    {
        $this->nama = $nama;
    }

    public function getNama()
    {
        return $this->nama;
    }

    public function tambahUang($jumlah)
    {
        if ($jumlah > 0) {
            $this->jmlUang += $jumlah;
            echo "Berhasil menambah uang sebesar Rp." .
                number_format($jumlah, 0, ",", ".") .
                " ke saldo Anda." .
                "<br>";
        } else {
            echo "Jumlah uang harus lebih dari 0<br>";
        }
    }

    public function kurangiUang($jumlah)
    {
        if ($jumlah > 0 && $jumlah <= $this->jmlUang) {
            $this->jmlUang -= $jumlah;
            echo "Berhasil mengurangi uang sebesar Rp." .
                number_format($jumlah, 0, ",", ".") .
                " dari saldo Anda." .
                "<br>";
        } elseif ($jumlah > $this->jmlUang) {
            echo "Jumlah uang tidak bisa melebihi saldo<br>";
        } else {
            echo "Jumlah uang harus lebih dari 0<br>";
        }
    }

    public function tampilkanSaldo()
    {
        echo "Saldo Anda: Rp." .
            number_format($this->jmlUang, 0, ",", ".") .
            "<br>";
    }

    public function hitungPajak()
    {
        $pajak = $this->jmlUang * 0.11;
        echo "Pajak 11% yang harus dibayar: Rp." .
            number_format($pajak, 0, ",", ".") .
            "<br>";
    }

    public function getSaldo()
    {
        return $this->jmlUang;
    }

    public function getAccountNumber()
    {
        return $this->accountNumber;
    }
}
