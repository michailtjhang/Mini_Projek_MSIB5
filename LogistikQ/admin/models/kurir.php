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

    public function getkurir($id)
    {
        // mengambil dan melihat table jenis_produk
        $sql = "SELECT * FROM kurir WHERE id=?";

        // menggunakan mekanisme prepere statement PDO
        $ps = $this->koneksi->prepare($sql);
        $ps->execute([$id]);
        $rs = $ps->fetch();

        return $rs;
    }

    public function ubah($data)
    {
        $sql = "UPDATE kurir set nama=?, nomor_telepon=?, jadwal=? WHERE id = ?";
        $ps = $this->koneksi->prepare($sql);
        $ps->execute($data);
    }

    public function simpan($data)
    {
        $sql = "INSERT INTO kurir (nama, nomor_telepon, jadwal)
        VALUES (?,?,?)";
        $ps = $this->koneksi->prepare($sql);
        $ps->execute($data);
    }

    public function hapus($data)
    {
        $sql = "DELETE FROM kurir WHERE id=?";
        $ps = $this->koneksi->prepare($sql);
        $ps->execute($data);
    }
}
