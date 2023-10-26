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

    public function getKirim($id) {
        // mengambil dan melihat table jenis_produk
        $sql = "SELECT p.id, p.kode, p.kode_barang, p.tanggal, p.nama_penerima, p.lokasi_tujuan, p.status_pengiriman, p.nomor_telp_penerima,
                u.nama AS nama_user, k.nama AS nama_kurir
                FROM pengiriman p
                INNER JOIN user u ON u.id = p.id_user
                INNER JOIN kurir k ON k.id = p.kurir_id
                where p.id = ?";

        // menggunakan mekanisme prepere statement PDO
        $ps = $this->koneksi->prepare($sql);
        $ps->execute([$id]);
        $rs = $ps->fetch();

        return $rs;
    }

    public function save($data) {
        $sql = "INSERT INTO pengiriman (kode, id_user, kode_barang, tanggal, nama_penerima, 
                lokasi_tujuan, status_pengiriman, nomor_telp_penerima, kurir_id) 
                VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)";

        $ps = $this->koneksi->prepare($sql);
        $ps->execute($data);
    }

    public function ubah($data) {
        $sql = "UPDATE pengiriman SET kode = ?, id_user = ? , kode_barang = ?, tanggal = ?,
                nama_penerima = ?, lokasi_tujuan = ?, status_pengiriman = ?, 
                nomor_telp_penerima = ?, kurir_id = ?
                WHERE id = ?";

        $ps = $this->koneksi->prepare($sql);
        $ps->execute($data);
    }

    public function hapus($data) {
        $sql = "DELETE FROM pengiriman WHERE id = ?";

        $ps = $this->koneksi->prepare($sql);
        $ps->execute($data);
    }
}

?>