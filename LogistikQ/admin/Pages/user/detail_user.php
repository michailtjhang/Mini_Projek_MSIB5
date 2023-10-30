<?php
$id = $_REQUEST['id'];
$model = new user();
$user = $model->getUser($id);
?>

<div class="container-fluid pt-4 px-4">
    <div class="col-sm-12 col-xl-10">
        <div class="bg-light rounded h-100 p-4">
            <h6 class="mb-4">Details Kurir</h6>
            <form>
                <div class="row mb-3">
                    <label for="kode" class="col-sm-4 col-form-label">Nama</label>
                    <div class="col-sm-7">
                        <input type="text" class="form-control" id="kode" value="<?= $user['nama']; ?>" disabled>
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="nama" class="col-sm-4 col-form-label">username</label>
                    <div class="col-sm-7">
                        <input type="text" class="form-control" id="nama" value="<?= $user['username']; ?>" disabled>
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="nama" class="col-sm-4 col-form-label">password</label>
                    <div class="col-sm-7">
                        <input type="text" class="form-control" id="nama" value="<?= $user['password']; ?>" disabled>
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="nama" class="col-sm-4 col-form-label">Nomor Telp</label>
                    <div class="col-sm-7">
                        <input type="text" class="form-control" id="nama" value="<?= $user['nomor_telepon']; ?>" disabled>
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="nama" class="col-sm-4 col-form-label">Alamat</label>
                    <div class="col-sm-7">
                        <input type="text" class="form-control" id="nama" value="<?= $user['alamat']; ?>" disabled>
                    </div>
                </div>
                </div>
                <a href="index.php?url=Pages/user/dtUser"><button type="button" class="btn btn-primary">Kembali</button></a>
            </form>
        </div>
    </div>