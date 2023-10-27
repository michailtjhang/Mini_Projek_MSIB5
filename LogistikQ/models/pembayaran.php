<?php  

class pembayaran{
    private $koneksi;
    public function __construct() {
        global $dbh;
        $this->koneksi = $dbh;
    }

    public function dataPembayaran() {
        // mengambil dan melihat table jenis_produk
        $sql = "SELECT * FROM pembayaran ";

        // menggunakan mekanisme prepere statement PDO
        $ps = $this->koneksi->prepare($sql);
        $ps->execute();
        $rs = $ps->fetchALL();

        return $rs;
    }

    public function getPembayaran($id) {
        // mengambil dan melihat table jenis_produk
        $sql = "SELECT * FROM pembayaran where id = ?";

        // menggunakan mekanisme prepere statement PDO
        $ps = $this->koneksi->prepare($sql);
        $ps->execute([$id]);
        $rs = $ps->fetch();

        return $rs;
    }
    public function simpandata($data){
        $sql = "INSERT INTO pembayaran (metode, total_harga,pengiriman_id) VALUES (?,?,?)";
        $ps = $this->koneksi->prepare($sql);
        $ps->execute($data);
    }
    public function ubahpembayaran($data){
        $sql = "UPDATE pembayaran set metode=?, total_harga=?, pengiriman_id=? where id=?";
        $ps = $this->koneksi->prepare($sql);
        $ps->execute($data);

    }
    public function hapuspembayaran($data){
        $sql = "DELETE FROM pembayaran WHERE id=?";
        $ps = $this->koneksi->prepare($sql);
        $ps->execute($data);
    }
}

?>
