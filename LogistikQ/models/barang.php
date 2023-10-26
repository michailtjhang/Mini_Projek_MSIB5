<?php  

class barang{
    private $koneksi;
    public function __construct() {
        global $dbh;
        $this->koneksi = $dbh;
    }

    public function dataBarang() {
        // mengambil dan melihat table jenis_produk
        $sql = "SELECT * FROM barang";

        // menggunakan mekanisme prepere statement PDO
        $ps = $this->koneksi->prepare($sql);
        $ps->execute();
        $rs = $ps->fetchALL();

        return $rs;
    }

    public function save($data) {
        $sql = "INSERT INTO barang (kode, kategori, deskripsi, kisaran_harga) 
                VALUES (?, ?, ?, ?)";

        $ps = $this->koneksi->prepare($sql);
        $ps->execute($data);
    }
}

?>