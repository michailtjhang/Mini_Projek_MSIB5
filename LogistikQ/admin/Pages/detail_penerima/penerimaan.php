<?php
$id = $_REQUEST['id'];
$model = new detail_penerimaan();
$produk = $model->getdetail_penerimaan($id);
?>
<div class="container-fluid pt-4 px-4">
    <div class="col-sm-12 col-xl-10">
        <div class="bg-light rounded h-100 p-4">
            <h6 class="mb-4">Details Penerimaan</h6>
            <form>
                <div class="row mb-3">
                    <label for="kode" class="col-sm-4 col-form-label">Kode</label>
                    <div class="col-sm-7">
                        <input type="text" class="form-control" id="kode" value="<?= $produk['kode']; ?>" disabled>
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="nama" class="col-sm-4 col-form-label">id pengirim</label>
                    <div class="col-sm-7">
                        <input type="text" class="form-control" id="nama" value="<?= $produk['pengiriman_id']; ?>" disabled>
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="nama" class="col-sm-4 col-form-label">nama penerima</label>
                    <div class="col-sm-7">
                        <input type="text" class="form-control" id="nama" value="<?= $produk['nama_penerima']; ?>" disabled>
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="nama" class="col-sm-4 col-form-label">waktu penerimaan</label>
                    <div class="col-sm-7">
                        <input type="text" class="form-control" id="nama" value="<?= $produk['waktu_penerima']; ?>" disabled>
                    </div>
                </div>
                </div>
                <a href="index.php?url=Pages/detail_penerima/dtdetail_penerima"><button type="button" class="btn btn-primary">Kembali</button></a>
            </form>
        </div>
    </div>