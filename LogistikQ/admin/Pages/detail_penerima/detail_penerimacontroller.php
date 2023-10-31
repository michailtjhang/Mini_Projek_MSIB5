<?php
include_once '../../databases/koneksi.php';
include_once '../../models/detail_penerima.php';

$kode = $_POST['kode'];
$pengiriman_id = $_POST['pengiriman_id'];
$nama_penerima = $_POST['nama_penerima'];
$data = [
    $kode, $pengiriman_id, $nama_penerima
];
$model = new detail_penerimaan();
$tombol = $_REQUEST['proses'];
switch($tombol){
    case 'simpan': $model->simpan($data); break;
    case 'ubah': $data[] = $_POST['idx']; $model->ubah($data);break;
    case 'hapus': unset($data);
    $data[] = $_POST['idx'];
    $model->hapus($data); break;
    default;
    header('Location:../../index.php?url=Pages/detail_penerima/dtdetail_penerima');
    break;
}
header('Location:../../index.php?url=Pages/detail_penerima/dtdetail_penerima');

?>