<?php

$model =  new barang();
$data_barang = $model->dataBarang();

?>

<div class="container-fluid pt-4 px-4">
    <div class="row g-4">
        <div class="col-12">
            <div class="bg-secondary rounded h-100 p-4">
                <h6 class="mb-4">Table Barang</h6>
                <div class="table-responsive">
                    <table id="datapegawai" class="table">
                        <thead>
                            <tr>
                                <th class="text-info" scope="col">#</th>
                                <th class="text-info" scope="col">Kode</th>
                                <th class="text-info" scope="col">Kategori</th>
                                <th class="text-info" scope="col">Deskripsi</th>
                                <th class="text-info" scope="col">Kisaran Harga</th>
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