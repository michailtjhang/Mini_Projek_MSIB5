<?php
include_once 'databases/koneksi.php';
include_once 'models/detail_penerima.php';

$kode = $_POST['kode'];
$pengiriman_id = $_POST['pengiriman_id'];
$nama_penerima = $_POST['nama_penerima'];
$waktu_penerima = $_POST['waktu_penerima'];
$data = [
    $kode, $pengiriman_id, $nama_penerima, $waktu_penerima
];
$model = new detail_penerimaan();
$tombol = $_REQUEST['proses'];
switch($tombol){
    case 'simpan': $model->simpan($data); break;
    default;
    header('Location:index.php?url=dtdetail_penerima');
    break;
}
header('Location:index.php?url=dtdetail_penerima');

?>