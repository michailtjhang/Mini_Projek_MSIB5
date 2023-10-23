<?php

class detail_penerima
{
    private $koneksi;
    public function __construct()
    {
        global $dbh;
        $this->koneksi = $dbh;
    }

    public function datadetail_penerima()
    {
        // mengambil dan melihat table jenis_produk
        $sql = "SELECT * FROM detail_penerima";

        // menggunakan mekanisme prepere statement PDO
        $ps = $this->koneksi->prepare($sql);
        $ps->execute();
        $rs = $ps->fetchALL();

        return $rs;
    }
}
