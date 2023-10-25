<?php

class user
{
    private $koneksi;
    public function __construct()
    {
        global $dbh;
        $this->koneksi = $dbh;
    }

    public function dataUser()
    {
        // mengambil dan melihat table jenis_produk
        $sql = "SELECT * FROM user";

        // menggunakan mekanisme prepere statement PDO
        $ps = $this->koneksi->prepare($sql);
        $ps->execute();
        $rs = $ps->fetchALL();

        return $rs;
    }
    public function simpan($data){
        $sql = "INSERT INTO user (nama, username,password, nomor_telepon, alamat)
        VALUES (?,?,?,?,?)";
        $ps = $this->koneksi->prepare($sql);
        $ps->execute($data);
    }
}
?>
