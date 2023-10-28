<?php

$id = $_REQUEST['id'];
$model = new pengiriman();
$kirim = $model->getKirim($id);

?>
<div class="container-fluid pt-4 px-4">
    <div class="col-sm-12 col-xl-10">
        <div class="bg-secondary rounded h-100 p-4">
            <h6 class="mb-4">Details Pengiriman</h6>
            <form>
                <div class="row mb-3">
                    <label for="kode" class="col-sm-4 col-form-label">Kode</label>
                    <div class="col-sm-7">
                        <input type="text" class="form-control bg-dark" id="kode" value="<?= $kirim['kode']; ?>" disabled>
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="nama" class="col-sm-4 col-form-label">Nama User</label>
                    <div class="col-sm-7">
                        <input type="text" class="form-control bg-dark" id="nama" value="<?= $kirim['nama_user']; ?>" disabled>
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="Kode_barang" class="col-sm-4 col-form-label">Kode Barang</label>
                    <div class="col-sm-7">
                        <input type="text" class="form-control bg-dark" id="Kode_barang" value="<?= $kirim['kode_barang']; ?>" disabled>
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="tgl_kirim" class="col-sm-4 col-form-label">Tanggal Pengiriman</label>
                    <div class="col-sm-7">
                        <input type="text" class="form-control bg-dark" id="tgl_kirim" value="<?= $kirim['tanggal']; ?>" disabled>
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="nama_terima" class="col-sm-4 col-form-label">Nama_terima Penerima</label>
                    <div class="col-sm-7">
                        <input type="text" class="form-control bg-dark" id="nama_terima" value="<?= $kirim['nama_penerima']; ?>" disabled>
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="lokasi" class="col-sm-4 col-form-label">Lokasi Penerima</label>
                    <div class="col-sm-7">
                        <input type="text" class="form-control bg-dark" id="lokasi" value="<?= $kirim['lokasi_tujuan']; ?>" disabled>
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="status" class="col-sm-4 col-form-label">Status Pengiriman Barang</label>
                    <div class="col-sm-7">
                        <input type="text" class="form-control bg-dark" id="status" value="<?= $kirim['status_pengiriman']; ?>" disabled>
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="telp" class="col-sm-4 col-form-label">Nomor Telepon Penerima</label>
                    <div class="col-sm-7">
                        <input type="text" class="form-control bg-dark" id="telp" value="<?= $kirim['nomor_telp_penerima']; ?>" disabled>
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="nama_kurir" class="col-sm-4 col-form-label">Nama Kurir</label>
                    <div class="col-sm-7">
                        <input type="text" class="form-control bg-dark" id="nama_kurir" value="<?= $kirim['nama_kurir']; ?>" disabled>
                    </div>
                </div>
                <button type="button" class="btn btn-info"><a href="index.php?url=Pages/Kirim/dtKirim">Kembali</a></button>
            </form>
        </div>
    </div>
</div>