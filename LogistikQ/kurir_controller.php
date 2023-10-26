<?php
include_once 'databases/koneksi.php';
include_once 'models/kurir.php';

$nama = $_POST['nama'];
$nomor_telepon = $_POST['nomor_telepon'];
$jadwal = $_POST['jadwal'];
$data = [
    $nama, $nomor_telepon, $jadwal
];
$model = new kurir();
$tombol = $_REQUEST['proses'];
switch ($tombol) {
    case 'simpan':
        $model->simpan($data);
        break;
    case 'ubah':
        $data[] = $_POST['idx'];
        $model->ubah($data);
        break;
    case 'hapus':
        unset($data);
        $data[] = $_POST['idx'];
        $model->hapus($data);
        break;
    default:
        header('Location:index.php?url=dtkurir');
        break;
}
header('Location:index.php?url=dtkurir');
