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

<h2 align="center" class="mt-4">Form Kurir</h2>
        <form action="Pages/kurir/kurir_controller.php" method="POST">
        <div class="col-sm-12 col-xl-9">
      <div class="bg-light rounded h-100 p-4">
        <!-- input pertama -->
        <h6 class="mb-4">Data kurir</h6>
        <div class="form-floating mb-3">
          <input type="text" name="nama" class="form-control" id="floatingKode" placeholder="Masukkan nama kurir" value="<?= $row['nama'] ?>">
          <label for="floatingKode">Nama Kurir</label>
        </div>
        <div class="form-floating mb-3">
          <input type="text" name="nomor_telepon" class="form-control" id="floatingKode" placeholder="Masukkan nomor telepon" value="<?= $row['nomor_telepon'] ?>">
          <label for="floatingKode">Nomor Telepon</label>
        </div>
        <!-- input kedua -->
        <div class="form-floating mb-3">
          <input type="text" name="jadwal" class="form-control" id="floatingKode" placeholder="Masukkan jadwal" value="<?= $row['jadwal'] ?>">
          <label for="floatingKode">Jadwal</label>
        </div>
               
        <!-- input ke tiga -->
         <br>
        <?php if (empty($idedit)) { ?>
          <button name="proses" value="simpan" type="submit" class="btn btn-primary">Submit</button>
        <?php } else { ?>
          <button type="submit" name="proses" value="ubah" class="btn btn-warning">Ubah</button>
        <?php } ?>
        <input type="hidden" name="idx" value="<?= $idedit; ?>">
      </div>
    </div>
        </form>