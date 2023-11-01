<?php  

session_start();
include_once 'admin/databases/koneksi.php';
include_once 'models/member.php';

$unama = $_POST['username'];
$password = $_POST['password'];

$data = [
    $unama, $password
];

$obj = new member();
$rs = $obj->cekLogin($data);

if( !empty($rs) ){
    $_SESSION['MEMBER'] = $rs;

    header('location:admin/index.php?url=dashboard');
} else{
    header('location:index.php?hal=home');
}

?>