<?php

$model =  new barang();
$data_barang = $model->dataBarang();

?>

<div class="container-fluid pt-4 px-4">
    <h1 class="mt-4">Barang</h1>
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item"><a href="index.php?url=dashboard">Dashboard</a></li>
        <li class="breadcrumb-item active">Data Pengiriman</li>
        <li class="breadcrumb-item active">Barang</li>
    </ol>
    <div class="row g-4">
        <div class="col-12">
            <div class="bg-secondary rounded overflow-hidden    h-100 p-4">
                <h6 class="mb-4">Table Barang</h6>
                <a href="index.php?url=Pages/barang/form_barang">
                    <button type="button" class="btn btn-primary btn-sm mb-3">Tambah</button>
                </a>
                <div class="table-responsive">
                    <table id="datapegawai" class="table">
                        <thead>
                            <tr>
                                <th class="text-info" scope="col">No</th>
                                <th class="text-info" scope="col">Kode</th>
                                <th class="text-info" scope="col">Kategori</th>
                                <th class="text-info" scope="col">Deskripsi</th>
                                <th class="text-info" scope="col">Kisaran Harga</th>
                                <th class="text-info" scope="col">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $id = 1; ?>
                            <?php foreach ($data_barang as $row) : ?>
                                <tr>
                                    <th scope="row"><?= $id; ?></th>
                                    <td><?= $row['kode']; ?></td>
                                    <td><?= $row['kategori']; ?></td>
                                    <td><?= $row['deskripsi']; ?></td>
                                    <td><?= $row['kisaran_harga']; ?></td>
                                    <td>
                                        <form>
                                            <a href="index.php?url=Pages/barang/barang_detail&id=<?= $row['kode'] ?>">
                                                <button type="button" class="btn btn-danger btn-sm">Details</button>
                                            </a>
                                        </form>
                                    </td>
                                </tr>
                                <?php $id++; ?>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
