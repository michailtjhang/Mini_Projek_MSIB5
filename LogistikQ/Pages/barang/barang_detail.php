<?php

$id = $_REQUEST['id'];
$model = new barang();
$produk = $model->getBarang($id);

?>


    <div class="container px-4 px-lg-5 my-5 bg-light">
        <div class="row gx-4 gx-lg-5 align-items-center" style="padding: 30px 0;">
            <div class="col-md-6"><img class="card-img-top mb-3 mb-md-0"
                    src="https://dummyimage.com/600x700/dee2e6/6c757d.jpg" alt="..." /></div>
            <div class="col-md-6">
                <div class="small mb-1">
                    <?= $produk['kode'] ?>
                </div>
                <h1 class="display-5 fw-bolder">
                    <?= $produk['kategori'] ?>
                </h1>
                <div class="fs-5 mb-5">
                    <span>Kisaran Harga Barang</span> <br>
                    <span>Rp.
                        <?= $produk['kisaran_harga'] ?>
                    </span>
                </div>
                <p class="lead">Deskripsi : <br> <?= $produk['deskripsi'] ?></p>
                <div class="d-flex">
                    <a href="index.php?url=Pages/barang/dtbarang"><button type="button" class="btn btn-primary">Kembali</button></a>
                </div>
            </div>
        </div>
    </div>