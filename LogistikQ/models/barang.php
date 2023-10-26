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

    public function getBarang($id) {
        // mengambil dan melihat table jenis_produk
        $sql = "SELECT * FROM barang where kode = ?";

        // menggunakan mekanisme prepere statement PDO
        $ps = $this->koneksi->prepare($sql);
        $ps->execute([$id]);
        $rs = $ps->fetch();

        return $rs;
    }

    public function save($data) {
        $sql = "INSERT INTO barang (kode, kategori, deskripsi, kisaran_harga) 
                VALUES (?, ?, ?, ?)";

        $ps = $this->koneksi->prepare($sql);
        $ps->execute($data);
    }

    public function ubah($data) {
        $sql = "UPDATE barang SET kode = ?, kategori = ?, deskripsi = ?, kisaran_harga = ? 
        WHERE kode = ?";

        $ps = $this->koneksi->prepare($sql);
        $ps->execute($data);
    }

    public function hapus($data) {
        $sql = "DELETE FROM barang WHERE kode = ?";

        $ps = $this->koneksi->prepare($sql);
        $ps->execute($data);
    }
}

?>