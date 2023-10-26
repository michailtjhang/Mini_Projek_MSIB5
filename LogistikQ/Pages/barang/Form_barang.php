<?php

error_reporting(0);

$obj_barang = new barang();
$sr_barang = $obj_barang->dataBarang();

$idedit = $_REQUEST['idedit'];
$objBarang = new barang();

if( !empty($idedit) ) {
  $barang = $objBarang->getBarang($idedit);
} else {
  $barang = array();
}

?>

<div class="container-fluid pt-4 px-4">
  <!-- form start -->
  <form action="Pages/barang/Control_barang.php" method="POST">
    <div class="col-sm-12 col-xl-9">
      <div class="bg-secondary rounded h-100 p-4">
        <!-- input pertama -->
        <h6 class="mb-4">Tambah Data Barang</h6>
        <div class="form-floating mb-3">
          <input type="text" name="kode" class="form-control" id="floatingKode" placeholder="Masukkan kode barang" value="<?= $barang['kode'] ?>">
          <label for="floatingKode">Kode Barang</label>
        </div>

        <!-- input kedua -->
        <div class="form-floating mb-3">
          <input type="text" name="kategori" class="form-control" id="floatingKategori" placeholder="Masukkan Kategori Barang" value="<?= $barang['kategori'] ?>">
          <label for="floatingKategori">Kategori Barang</label>
        </div>

        <!-- input ke tiga -->
        <div class="form-floating mb-3">
          <input type="text" name="deskripsi" class="form-control" id="floatingDeskripsi" placeholder="Masukkan deskripsi Barang" value="<?= $barang['deskripsi'] ?>">
          <label for="floatingDeskripsi">Deskripsi Barang</label>
        </div>

        <!-- input ke empat -->
        <div class="form-floating mb-3">
          <input type="text" name="harga" class="form-control" id="floatingHarga" placeholder="Masukkan Kisaran harga Barang" value="<?= $barang['kisaran_harga'] ?>">
          <label for="floatingHarga">Kisaran harga Barang</label>
        </div> <br>
        <?php if (empty($idedit)) { ?>
          <button name="proses" value="save" type="submit" class="btn btn-primary">Submit</button>
        <?php } else { ?>
          <button type="submit" name="proses" value="ubah" class="btn btn-success">Ubah</button>
        <?php } ?>
        <input type="hidden" name="idx" value="<?= $idedit ?>">
      </div>
    </div>
  </form>
  <!-- form end -->
</div>