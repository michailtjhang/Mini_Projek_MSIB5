<?php
error_reporting(0);
$objkurir = new kurir();
$rs = $objkurir->dataKurir();
$idedit = $_REQUEST['idedit'];
$objkurir = new kurir();
if (!empty($idedit)) {
    $row = $objkurir->getkurir($idedit);
} else {
    $row = array();
}
?>

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

<h2 align="center" class="mt-4">Form Kurir</h2>

<div class="container-fluid" style="margin: 0 0 0 15px;">
    <div class="form-kurir bg-light p-3 m-4 rounded-3">
        <form action="kurir_controller.php" method="POST">
            <div class="form-group row mb-2">
                <label for="text1" class="col-4 col-form-label">Nama</label>
                <div class="col-8">
                    <input id="text1" name="nama" type="text" class="form-control " value="<?= $row['nama'] ?>" placeholder="Masukan Nama">
                </div>
            </div>
            <div class="form-group row mb-2">
                <label for="text4" class="col-4 col-form-label">Nomor Telepon</label>
                <div class="col-8">
                    <input id="text4" name="nomor_telepon" type="text" class="form-control" value="<?= $row['nomor_telepon'] ?>" placeholder="Masukan Nomor">
                </div>
            </div>
            <div class="form-group row mb-2">
                <label for="text5" class="col-4 col-form-label">Jadwal</label>
                <div class="col-8">
                    <input id="text5" name="jadwal" type="text" class="form-control" value="<?= $row['jadwal'] ?>" placeholder="Masukan Jadwal">
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
                        <button type="submit" name="proses" value="ubah" class="btn btn-warning">Ubah</button>
                    <?php } ?>
                    <input type="hidden" name="idx" value="<?= $idedit; ?>">
                </div>
            </div>
        </form>