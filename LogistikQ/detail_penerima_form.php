<?php
$obj_detail_penerimaan = new detail_penerimaan();
$rs = $obj_detail_penerimaan->datadetail_penerimaan();
?>

<h2 align="center">Form Detail Penerima</h2>
<form action="detail_penerimacontroller.php" method="POST">
  <div class="form-group row">
    <label for="text" class="col-4 col-form-label">Kode</label> 
    <div class="col-8">
      <div class="input-group">
        <div class="input-group-prepend">
          <div class="input-group-text">
            <i class="fa fa-address-card"></i>
          </div>
        </div> 
        <input id="text" name="kode" type="text" class="form-control">
      </div>
    </div>
  </div>
  <div class="form-group row">
    <label for="text1" class="col-4 col-form-label">pengiriman_id</label> 
    <div class="col-8">
      <input id="text1" name="pengiriman_id" type="text" class="form-control">
    </div>
  </div>
  <div class="form-group row">
    <label for="text2" class="col-4 col-form-label">nama_penerima</label> 
    <div class="col-8">
      <input id="text2" name="nama_penerima" type="text" class="form-control">
    </div>
  </div>
  <div class="form-group row">
    <label for="text3" class="col-4 col-form-label">waktu_penerima</label> 
    <div class="col-8">
      <input id="text3" name="waktu_penerima" type="text" class="form-control">
    </div>
  </div> 
  <div class="form-group row">
    <div class="offset-4 col-8">
      <button name="proses" value="simpan" type="submit" class="btn btn-primary">Submit</button>
    </div>
  </div>
</form>
