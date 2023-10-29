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
  <h2 class="text-center mb-5 text-info">Tambah data Penerima</h2>

  <form action="Pages/detail_penerima/detail_penerimacontroller.php" method="POST">
    <div class="form-group row">
      <label for="text" class="col-4 col-form-label">Kode</label>
      <div class="col-8">
        <div class="input-group">
          <input id="text1" name="kode" value="<?= $row['kode']; ?>" placeholder="masukkan kode" type="text"
            class="form-control" required="required">
        </div>
      </div>
    </div>
    <div class="form-group row">
      <label for="select" class="col-4 col-form-label text-danger">id pengiriman</label>
      <div class="col-8">
        <select id="select" name="pengiriman_id" class="custom-select">
          <?php foreach ($sr_pengiriman as $pengirim) {
            $sel = ($pengirim['id'] == $row['pengiriman_id']) ? 'selected ' : '';
            ?>
            <option value="<?= $pengirim['id']; ?>" <?= $sel; ?>>
              <?= $pengirim['kode']; ?>
            </option>

            <?php } ?>
        </select>
      </div>
      <div class="form-group row">
        <label for="text2" class="col-4 col-form-label">nama_penerima</label>
        <div class="col-8">
          <input id="text2" name="nama_penerima" value="<?= $row['nama_penerima']; ?>"
            placeholder="masukkan nama_penerima" type="text" class="form-control" required="required">
        </div>
      </div>
      <div class="form-group row">
        <label for="text3" class="col-4 col-form-label">waktu_penerima</label>
        <div class="col-8">
          <input id="text3" name="waktu_penerima" value="<?= $row['waktu_penerima']; ?>"
            placeholder="masukkan waktu_penerima" type="text" class="form-control" required="required">
        </div>
      </div>
      <div class="form-group row">
        <div class="offset-4 col-8">
          <?php
          if (empty($idedit)) { ?>
            <button name="proses" value="simpan" type="submit" class="btn btn-primary">Submit</button>
          <?php } else {
            ?>
            <button type="submit" name="proses" value="ubah" class="btn btn-warning">Update</button>
          <?php } ?>
          <input type="hidden" name="idx" value="<?= $idedit; ?>">
        </div>
      </div>
  </form>
</div>