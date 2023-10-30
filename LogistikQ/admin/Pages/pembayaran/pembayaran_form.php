<?php
error_reporting(0);
$objp = new pembayaran();
$objpengirim = new pengiriman();
$sr_pembayaran =$objp->dataPembayaran();
$sr_pengiriman = $objpengirim->dataKirim();
$idedit = $_REQUEST['idedit'];
$objpembayaran1 = new pembayaran();
if(!empty($idedit)){
  $row = $objp->getPembayaran($idedit);
}else{
  $row = array();
}


?>


<form action="Pages/pembayaran/pembayaran_controler.php" method="POST">
<div class="col-sm-12 col-xl-9">
      <div class="bg-light rounded h-100 p-4">
        <!-- input pertama -->
        <h6 class="mb-4">Data Pembayaran</h6>
        <div class="form-floating mb-3">
          <input type="text" name="text1" class="form-control" id="floatingKode" placeholder="Masukkan metode" value="<?= $row['metode'] ?>">
          <label for="floatingKode">metode</label>
        </div>
        <div class="form-floating mb-3">
          <input type="text" name="text2" class="form-control" id="floatingKode" placeholder="Masukkan total bayar" value="<?= $row['total_harga'] ?>">
          <label for="floatingKode">Total Harga</label>
        </div>
        <!-- input kedua -->
        <div class="form-floating mb-3">
                    <select class="form-select" name="select" id="nama_user" aria-label="Floating label select example">
                        <option selected>--- Nama User ---</option>
                        <?php foreach( $sr_pengiriman as $pengirim ) : 
                            $sel = ($pengirim['id'] == $row['pengiriman_id']) ? 'selected' : '';?>
                            <option value="<?= $pengirim['id'] ?>" <?= $sel; ?>><?= $pengirim['kode'] ?></option>
                        <?php endforeach; ?>
                    </select>
                    <label for="nama_user">id Pengiriman</label>
                </div> 
               
        <!-- input ke tiga -->
         <br>
        <?php if (empty($idedit)) { ?>
          <button name="submit" value="simpan" type="submit" class="btn btn-primary">Submit</button>
        <?php } else { ?>
          <button type="submit" name="submit" value="ubah" class="btn btn-warning">Ubah</button>
        <?php } ?>
        <input type="hidden" name="idx" value="<?= $idedit; ?>">
      </div>
    </div>
</form>