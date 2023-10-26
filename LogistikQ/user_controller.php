<?php
include_once 'databases/koneksi.php';
include_once 'models/user.php';

$nama = $_POST['nama'];
$username = $_POST['username'];
$password = $_POST['password'];
$nomor_telepon = $_POST['nomor_telepon'];
$alamat = $_POST['alamat'];
$data = [
    $nama, $username, $password, $nomor_telepon, $alamat
];
$model = new user();
$tombol = $_REQUEST['proses'];
switch($tombol){
    case 'simpan':$model->simpan($data); break;
    case 'ubah': $data[] = $_POST['idx']; $model->ubah($data);break;
    case 'hapus': unset($data);
    $data[] = $_POST['idx'];
    $model->hapus($data); break;
    default:
    header('Location:index.php?url=dtUser');
    break;
}
header('Location:index.php?url=dtUser');

?>