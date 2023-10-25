<?php
include_once '../../databases/koneksi.php';
include_once '../../models/pengiriman.php';

//tangkap reuest
$kode = $_POST['kode'];
$id_user = $_POST['id_user'];
$kode_barang = $_POST['kode_barang'];
$tanggal = $_POST['tanggal'];
$nama_penerima = $_POST['nama_penerima'];
$lokasi_tujuan = $_POST['lokasi_tujuan'];
$status_pengiriman = $_POST['status_pengiriman'];
$nomor_telp_penerima = $_POST['nomor_telp_penerima'];
$kurir_id = $_POST['kurir_id'];

$data = [
    $kode, $id_user, $kode_barang, $tanggal, 
    $nama_penerima, $lokasi_tujuan, $status_pengiriman,
    $nomor_telp_penerima, $kurir_id
];

$model= new pengiriman();
$tombol= $_REQUEST['proses'];

switch($tombol){
    case 'save': 
        $model->save($data);
        break;
        default;
        header('location:../../index.php?url=Pages/Kirim/dtKirim');
        break;
    }
header('location:../../index.php?url=Pages/Kirim/dtKirim');