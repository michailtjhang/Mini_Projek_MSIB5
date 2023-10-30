<?php

$model =  new pengiriman();
$data_kirim = $model->dataKirim();

?>

<div class="container-fluid pt-4 px-4">
    <h1 class="mt-4">Laporan Pengiriman</h1>
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item"><a href="index.php?url=dashboard">Dashboard</a></li>
    </ol>
    <div class="row g-4">
        <div class="col-12">
            <div class="bg-light rounded overflow-hidden h-100 p-4">
                <h6 class="mb-4">Table Laporan Pengiriman</h6>
                
                    
                <div class="table-responsive">
                    <table id="example" class="table">
                        <thead>
                            <tr>
                                <th class="text-bold" scope="col">NO</th>
                                <th class="text-bold" scope="col">Kode</th>
                                <th class="text-bold" scope="col">Nama User</th>
                                <th class="text-bold" scope="col">Kode Barang</th>
                                <th class="text-bold" scope="col">Tanggal</th>
                                <th class="text-bold" scope="col">Nama Penerima</th>
                                <th class="text-bold" scope="col">Lokasi Tujuan</th>
                                <th class="text-bold" scope="col">Status Pengiriman</th>
                                <th class="text-bold" scope="col">No Telp Penerima</th>
                                <th class="text-bold" scope="col">Nama Kurir</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $id = 1; ?>
                            <?php foreach ($data_kirim as $row) : ?>
                                <tr>
                                    <th scope="row"><?= $id; ?></th>
                                    <td><?= $row['kode']; ?></td>
                                    <td><?= $row['nama_user']; ?></td>
                                    <td><?= $row['kode_barang']; ?></td>
                                    <td><?= $row['tanggal']; ?></td>
                                    <td><?= $row['nama_penerima']; ?></td>
                                    <td><?= $row['lokasi_tujuan']; ?></td>
                                    <td><?= $row['status_pengiriman']; ?></td>
                                    <td><?= $row['nomor_telp_penerima']; ?></td>
                                    <td><?= $row['nama_kurir']; ?></td>
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

