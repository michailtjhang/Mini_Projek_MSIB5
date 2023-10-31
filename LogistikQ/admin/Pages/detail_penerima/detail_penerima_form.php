<?php
error_reporting(0);
$obj_detail_penerimaan = new detail_penerimaan();
$objpengirim = new pengiriman();

$rs = $obj_detail_penerimaan->datadetail_penerimaan();
$sr_pengiriman = $objpengirim->dataKirim();

$idedit = $_REQUEST['idedit'];
$obj_detailPenerimaan = new detail_penerimaan();

if (!empty($idedit)) {
  $row = $obj_detailPenerimaan->getdetail_penerimaan($idedit);

} else {
  $row = array();
}

?>

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

<div class="container-fluid pt-4 px-4">
  <h2 class="text-center mb-5 text-info"> data Penerima</h2>

  <form action="Pages/detail_penerima/detail_penerimacontroller.php" method="POST">
  <div class="col-sm-12 col-xl-9">
      <div class="bg-light rounded h-100 p-4">
        <!-- input pertama -->
        <h6 class="mb-4">Data Barang</h6>
        <div class="form-floating mb-3">
          <input type="text" name="kode" class="form-control" id="floatingKode" placeholder="Masukkan kode barang" value="<?= $row['kode'] ?>">
          <label for="floatingKode">Kode penerima</label>
        </div>

        <!-- input kedua -->
        <div class="form-floating mb-3">
                    <select class="form-select" name="pengiriman_id" id="nama_user" aria-label="Floating label select example">
                        <option selected>--- Nama User ---</option>
                        <?php foreach( $sr_pengiriman as $pengirim ) : 
                            $sel = ($pengirim['id'] == $row['pengiriman_id']) ? 'selected' : '';?>
                            <option value="<?= $pengirim['id'] ?>" <?= $sel; ?>><?= $pengirim['kode'] ?></option>
                        <?php endforeach; ?>
                    </select>
                    <label for="nama_user">id Pengiriman</label>
                </div> 
                <div class="form-floating mb-3">
          <input type="text" name="nama_penerima" class="form-control" id="floatingKode" placeholder="Masukkan Nama penerima" value="<?= $row['kode'] ?>">
          <label for="floatingKode">Nama penerima</label>
        </div>
        <!-- input ke tiga -->
        <div class="form-floating mb-3">
            <input type="datetime-local" name="waktu_penerima" class="form-control" id="floatingDeskripsi" placeholder="" value="<?= $row['waktu_penerima'] ?>">
            <label for="floatingDeskripsi">Waktu Penerimaan</label>
        </div>
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
</div>