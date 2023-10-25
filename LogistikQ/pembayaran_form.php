<?php
$objp = new pembayaran();
$objpengirim = new pengiriman();
$sr_pembayaran =$objp->dataPembayaran();
$sr_pengiriman = $objpengirim->dataKirim();

?>

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

<form action="pembayaran_controler.php" method="POST">
    <h2 class="text-center mb-5 text-info">Tambah data Pembayaran</h2>
  <div class="form-group row">
   
  </div>
  <div class="form-group row">
    <label for="text1" class="col-4 col-form-label text-danger">metode</label> 
    <div class="col-8">
      <input id="text1" name="text1" placeholder="masukkan metode pembayaran" type="text" class="form-control" required="required">
    </div>
  </div>
  <div class="form-group row">
    <label for="text2" class="col-4 col-form-label text-danger font">total harga</label> 
    <div class="col-8">
      <input id="text2" name="text2" placeholder="masukkan total harga" type="text" class="form-control" required="required">
    </div>
  </div> 
  <div class="form-group row">
    <label for="select" class="col-4 col-form-label text-danger">id pengiriman</label> 
    <div class="col-8">
      <select id="select" name="select" class="custom-select">
      <?php foreach($sr_pengiriman as $pengirim){
        ?>
        <option value="<?= $pengirim['id'];?>"><?= $pengirim['kode'];?> </option>

        <?php
    }?>
      </select>
   
    </div>
  </div> 

  <div class="form-group row">
    <div class="offset-4 col-8">
      <button name="submit" type="submit" value='simpan' class="btn btn-primary">Submit</button>
    </div>
  </div>
</form>