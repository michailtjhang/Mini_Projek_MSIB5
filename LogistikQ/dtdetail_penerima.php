<?php

$model =  new detail_penerima();
$data_detail_penerima = $model->datadetail_penerima();

?>

<div class="container-fluid pt-4 px-4">
    <h1 class="mt-4">Detail Penerima</h1>
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item"><a href="index.php?url=dashboard">Dashboard</a></li>
        <li class="breadcrumb-item active">Data Pengiriman</li>
        <li class="breadcrumb-item active">Penerima</li>
    </ol>
    <div class="row g-4">
        <div class="col-12">
            <div class="bg-secondary rounded h-100 p-4">
                <h6 class="mb-4">Table Detail Penerima</h6>
                <div class="table-responsive">
                    <table id="datapegawai" class="table">
                        <thead>
                            <tr>
                                <th class="text-info" scope="col">#</th>
                                <th class="text-info" scope="col">kode</th>
                                <th class="text-info" scope="col">pengiriman_id</th>
                                <th class="text-info" scope="col">nama_penerima</th>
                                <th class="text-info" scope="col">waktu_penerima</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $id = 1; ?>
                            <?php foreach ($data_detail_penerima as $row) : ?>
                                <tr>
                                    <td><?= $id; ?></td>
                                    <td><?= $row['kode']; ?></td>
                                    <td><?= $row['pengiriman_id']; ?></td>
                                    <td><?= $row['nama_penerima']; ?></td>
                                    <td><?= $row['waktu_penerima']; ?></td>
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