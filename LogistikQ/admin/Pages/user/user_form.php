<?php
error_reporting(0);
$obj_user = new user();
$rs = $obj_user->dataUser();

$data_user = $obj_user->dataUser();
$idedit = $_REQUEST['idedit'];
$obj_user = new user();
if (!empty($idedit)) {
  $row = $obj_user->getUser($idedit);
} else {
  $row = array();
}

?>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

<h2 align="center" class="mt-4">Form User</h2>
<div class="container-fluid">
  <div class="form-user bg-light p-4 m-4">
    <form action="Pages/user/user_controller.php " method="POST">
      <div class="form-group row mb-2">
        <label for="text1" class="col-4 col-form-label">Nama</label>
        <div class="col-8">
          <input id="text1" name="nama" type="text" class="form-control" placeholder="masukan nama" value="<?= $row['nama'] ?>">
        </div>
      </div>
      <div class="form-group row mb-2">
        <label for="text2" class="col-4 col-form-label">Username</label>
        <div class="col-8">
          <input id="text2" name="username" type="text" class="form-control" placeholder="masukan Username" value="<?= $row['username'] ?>">
        </div>
      </div>
      <div class="form-group row mb-2">
        <label for="text3" class="col-4 col-form-label">Password</label>
        <div class="col-8">
          <input id="text3" name="password" type="text" class="form-control" placeholder="masukan Password" value="<?= $row['password'] ?>">
        </div>
      </div>
      <div class="form-group row mb-2">
        <label for="text4" class="col-4 col-form-label">Nomor Telepon</label>
        <div class="col-8">
          <input id="text4" name="nomor_telepon" type="text" class="form-control" placeholder="masukan nomor" value="<?= $row['nomor_telepon'] ?>">
        </div>
      </div>
      <div class="form-group row mb-2">
        <label for="text5" class="col-4 col-form-label">Alamat</label>
        <div class="col-8">
          <input id="text5" name="alamat" type="text" class="form-control" placeholder="masukan alamat" value="<?= $row['alamat'] ?>">
        </div>
      </div>
      <br>
      <div class="form-group row">
        <div class="offset-5 col-4">
          <?php
          if (empty($idedit)) { ?>
            <button name="proses" value="simpan" type="submit" class="btn btn-primary">Submit</button>
          <?php } else {
          ?>
            <button type="submit" name="proses" value="ubah" class="btn btn-warning">Update</button>
          <?php } ?>
          <input type="hidden" name="idx" value="<?= $idedit; ?>">
        </div>
      </div>
    </form>
  </div>
</div>