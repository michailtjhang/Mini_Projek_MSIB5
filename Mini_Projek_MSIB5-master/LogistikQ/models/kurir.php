<?php

class kurir
{
    private $koneksi;
    public function __construct()
    {
        global $dbh;
        $this->koneksi = $dbh;
    }

    public function dataKurir()
    {
        // mengambil dan melihat table jenis_produk
        $sql = "SELECT * FROM kurir";

        // menggunakan mekanisme prepere statement PDO
        $ps = $this->koneksi->prepare($sql);
        $ps->execute();
        $rs = $ps->fetchALL();

        return $rs;
    }
}
