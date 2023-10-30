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
    <h2 class="text-center mb-5 text-info">Tambah data Pembayaran</h2>
  <div class="form-group row">
   
  </div>
  <div class="form-group row">
    <label for="text1" class="col-4 col-form-label text-danger">metode</label> 
    <div class="col-8">
      <input  id="text1" name="text1" value="<?= $row['metode']; ?>" placeholder="masukkan metode pembayaran" type="text" class="form-control" required="required">
    </div>
  </div>
  <div class="form-group row">
    <label for="text2" class="col-4 col-form-label text-danger font">total harga</label> 
    <div class="col-8">
      <input id="text2" name="text2" value="<?= $row['total_harga']; ?>" placeholder="masukkan total harga" type="text" class="form-control" required="required">
    </div>
  </div> 
  <div class="form-group row">
    <label for="select" class="col-4 col-form-label text-danger">id pengiriman</label> 
    <div class="col-8">
      <select id="select" name="select" class="custom-select">
      <?php foreach($sr_pengiriman as $pengirim){
        $sel = ($pengirim['id']== $row['pengiriman_id']) ? 'selected ' : '';
        ?>
        <option value="<?= $pengirim['id'];?>"  <?= $sel;?>><?= $pengirim['kode'];?></option>

        <?php
    }?>
      </select>
   
    </div>
  </div> 

  <div class="form-group row">
    <div class="offset-4 col-8">
      <?php
      if(empty($idedit)){?>
      <button name="submit" type="submit" value='simpan' class="btn btn-primary">Submit</button>
      <?php
      }else {?>
      <button name="submit" type="submit" value='ubah' class="btn btn-warning">Update</button>
      <?php } ?>
      <input type="hidden" name="idx" value="<?= $idedit; ?>">
    </div>
  </div>
</form>