<?php  

class pengiriman{
    private $koneksi;
    public function __construct() {
        global $dbh;
        $this->koneksi = $dbh;
    }

    public function dataKirim() {
        // mengambil dan melihat table jenis_produk
        $sql = "SELECT p.id, p.kode, p.kode_barang, p.tanggal, p.nama_penerima, p.lokasi_tujuan, p.status_pengiriman, p.nomor_telp_penerima,
        u.nama AS nama_user, k.nama AS nama_kurir
        FROM pengiriman p
        INNER JOIN user u ON u.id = p.id_user
        INNER JOIN kurir k ON k.id = p.kurir_id;";

        // menggunakan mekanisme prepere statement PDO
        $ps = $this->koneksi->prepare($sql);
        $ps->execute();
        $rs = $ps->fetchALL();

        return $rs;
    }
}

?>