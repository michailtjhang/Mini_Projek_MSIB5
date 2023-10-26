<?php

$model =  new detail_penerimaan();
$data_detail_penerimaan = $model->datadetail_penerimaan();

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
                <a href="index.php?url=detail_penerima_form">
                <button class="btn btn-sm btn-primary">Tambah</button></a>
                <div class="table-responsive">
                    <table id="datapegawai" class="table">
                        <thead>
                            <tr>
                                <th class="text-info" scope="col">No</th>
                                <th class="text-info" scope="col">kode</th>
                                <th class="text-info" scope="col">pengiriman_id</th>
                                <th class="text-info" scope="col">nama_penerima</th>
                                <th class="text-info" scope="col">waktu_penerima</th>
                                <th class="text-info" scope="col">aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $id = 1; ?>
                            <?php foreach ($data_detail_penerimaan as $row) : ?>
                                <tr>
                                    <td><?= $id; ?></td>
                                    <td><?= $row['kode']; ?></td>
                                    <td><?= $row['pengiriman_id']; ?></td>
                                    <td><?= $row['nama_penerima']; ?></td>
                                    <td><?= $row['waktu_penerima']; ?></td>
                                    <td>
                                    <form>
                                        <a href="index.php?url=penerimaan&id=<?= $row['id'] ?>">
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