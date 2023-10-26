<?php
error_reporting(0);
$obj_detail_penerimaan = new detail_penerimaan();
$rs = $obj_detail_penerimaan->datadetail_penerimaan();
$data_detail_penerimaan = $obj_detail_penerimaan->datadetail_penerimaan();
$idedit = $_REQUEST ['idedit'];
$obj_detail_penerimaan = new detail_penerimaan();
if (!empty($idedit)){
  $row = $obj_detail_penerimaan->getdetail_penerimaan($idedit);

} else {
  $row = array();
}

?>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

?>

<form action="detail_penerimacontroller.php" method="POST">
<h2 class="text-center mb-5 text-info">Tambah data Penerima</h2>
  <div class="form-group row">
    <label for="text" class="col-4 col-form-label">Kode</label> 
    <div class="col-8">
      <div class="input-group">
        <div class="input-group-prepend">
          <div class="input-group-text">
            <i class="fa fa-address-card"></i>
          </div>
        </div> 
        <input  id="text1" name="text1" value="<?= $row['metode']; ?>" placeholder="masukkan kode" type="text" class="form-control" required="required">
      </div>
    </div>
  </div>
  <div class="form-group row">
    <label for="text1" class="col-4 col-form-label">pengiriman_id</label> 
    <div class="col-8">
    <input  id="text1" name="text1" value="<?= $row['metode']; ?>" placeholder="masukkan pengiriman_id" type="text" class="form-control" required="required">
    </div>
  </div>
  <div class="form-group row">
    <label for="text2" class="col-4 col-form-label">nama_penerima</label> 
    <div class="col-8">
    <input  id="text2" name="text1" value="<?= $row['metode']; ?>" placeholder="masukkan nama_penerima" type="text" class="form-control" required="required">
    </div>
  </div>
  <div class="form-group row">
    <label for="text3" class="col-4 col-form-label">waktu_penerima</label> 
    <div class="col-8">
    <input  id="text3" name="text1" value="<?= $row['metode']; ?>" placeholder="masukkan waktu_penerima" type="text" class="form-control" required="required">
    </div>
  </div> 
  <div class="form-group row">
    <div class="offset-4 col-8">
      <?php
      if(empty($idedit)){?>
      <button name="proses" value="simpan" type="submit" class="btn btn-primary">Submit</button>
      <?php } else{
        ?>
        <button type="submit" name="proses" value="ubah" class="btn btn-warning">Update</button>
        <?php } ?>
      <input type="hidden" name="idx" value="<?= $idedit;?>">
    </div>
  </div>
</form>
