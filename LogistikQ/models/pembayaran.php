<?php  

class pembayaran{
    private $koneksi;
    public function __construct() {
        global $dbh;
        $this->koneksi = $dbh;
    }

    public function dataPembayaran() {
        // mengambil dan melihat table jenis_produk
        $sql = "SELECT * FROM pembayaran";

        // menggunakan mekanisme prepere statement PDO
        $ps = $this->koneksi->prepare($sql);
        $ps->execute();
        $rs = $ps->fetchALL();

        return $rs;
    }
}

?>
