<?php
include_once '../databases/koneksi.php';
include_once '../models/barang.php';

//tangkap reuest
$kode = $_POST['kode'];
$kategori = $_POST['kategori'];
$deskripsi = $_POST['deskripsi'];
$harga = $_POST['harga'];

$data = [
    $kode, $kategori, $deskripsi, $harga
];

$model= new barang();
$tombol= $_REQUEST['proses'];

switch($tombol){
    case 'save': $model->save($data); break;
    default;
    header('location:index.php?url=barang/dtbarang');
    break;
}
header('location:index.php?url=barang/dtbarang');