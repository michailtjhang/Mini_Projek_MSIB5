<?php
$objkurir = new kurir();
$rs = $objkurir->dataKurir();
?>

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

<h2 align="center" class="mt-4">Form Kurir</h2>
<form action="kurir_controller.php" method="POST">
    <div class="form-group row mb-1">
        <label for="text1" class="col-4 col-form-label">Nama</label>
        <div class="col-8">
            <input id="text1" name="nama" type="text" class="form-control">
        </div>
    </div>
    <div class="form-group row mb-1">
        <label for="text4" class="col-4 col-form-label">Nomor Telepon</label>
        <div class="col-8">
            <input id="text4" name="nomor_telepon" type="text" class="form-control">
        </div>
    </div>
    <div class="form-group row">
        <label for="text5" class="col-4 col-form-label">Jadwal</label>
        <div class="col-8">
            <input id="text5" name="jadwal" type="text" class="form-control">
        </div>
    </div>
    <br>
    <div class="form-group row">
        <div class="offset-4 col-8">
            <button name="proses" value="simpan" type="submit" class="btn btn-primary">Submit</button>
        </div>
    </div>
</form>