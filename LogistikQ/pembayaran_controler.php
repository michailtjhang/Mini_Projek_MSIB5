<?php
include_once 'databases/koneksi.php';
include_once 'models/pembayaran.php';
//tangkap reuest
$nama = $_POST['text1'];
$harga = $_POST['text2'];
$pengirim = $_POST['select'];

$data = [$nama,$harga,$pengirim];

$model= new pembayaran();
$tombol= $_REQUEST['submit'];
switch($tombol){
    case 'simpan': $model->simpandata($data); break;
    case 'ubah' : $data[] = $_POST['idx']; $model->ubahpembayaran($data); break;
    default;
    header('location:index.php?url=dtpembayaran');
    break;
}
header('location:index.php?url=dtpembayaran');