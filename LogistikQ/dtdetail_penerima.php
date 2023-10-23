<?php

$model =  new detail_penerima();
$data_detail_penerima = $model->datadetail_penerima();

?>

<div class="container-fluid pt-4 px-4">
    <div class="row g-4">
        <div class="col-12">
            <div class="bg-secondary rounded h-100 p-4">
                <h6 class="mb-4">Table Detail Penerima</h6>
                <div class="table-responsive">
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">kode</th>
                                <th scope="col">pengiriman_id</th>
                                <th scope="col">nama_penerima</th>
                                <th scope="col">waktu_penerima</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $id = 1; ?>
                            <?php foreach ($data_detail_penerima as $row) : ?>
                                <tr>
                                    <th scope="row"><?= $id; ?></th>
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