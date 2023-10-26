<?php

class detail_penerimaan
{
    private $koneksi;
    public function __construct()
    {
        global $dbh;
        $this->koneksi = $dbh;
    }

    public function datadetail_penerimaan()
    {
        // mengambil dan melihat table jenis_produk
        $sql = "SELECT * FROM detail_penerimaan";

        // menggunakan mekanisme prepere statement PDO
        $ps = $this->koneksi->prepare($sql);
        $ps->execute();
        $rs = $ps->fetchALL();

        return $rs;
    }

    public function getdetail_penerimaan($id)
    {
        // mengambil dan melihat table jenis_produk
        $sql = "SELECT * FROM detail_penerimaan WHERE id=?";

        // menggunakan mekanisme prepere statement PDO
        $ps = $this->koneksi->prepare($sql);
        $ps->execute([$id]);
        $rs = $ps->fetch();

        return $rs;
    }

    public function simpan($data){
        $sql = "INSERT INTO detail_penerimaan (kode, pengiriman_id, nama_penerima, waktu_penerima)
        VALUES (?,?,?,?)";
        $ps = $this->koneksi->prepare($sql);
        $ps->execute($data);
    }
}
