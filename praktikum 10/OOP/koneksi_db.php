<?php
class KoneksiDB
{
    private $db_host = "localhost";
    private $db_user = "root";
    private $db_pass = "root";
    private $db_name = "konek";

    private $conn = false;
    private $hasil = [];

    public function connect()
    {
        if (!$this->conn) {
            $myconn = @mysqli_connect(
                $this->db_host,
                $this->db_user,
                $this->db_pass,
            );
            $seldb = @mysqli_set_charset($myconn, "utf8");
            
            if ($myconn) {
                $seldb = @mysqli_select_db($myconn, $this->db_name);
                if ($seldb) {
                    $this->conn = true;
                    @array_push($this->hasil, "Berhasil terhubung ke database: " . $this->db_name);
                    return true;
                } else {
                    @array_push($this->hasil, "Gagal memilih database: " . mysqli_error($myconn));
                    return false;
                }
            } else {
                @array_push($this->hasil, "Gagal terhubung ke database: " . mysqli_connect_error());
                return false;
            }
        } else {
            return true;
        }
    }

    public function getHasil()
    {
        return $this->hasil;
    }
}