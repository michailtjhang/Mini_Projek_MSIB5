<?php

$model =  new pengiriman();
$data_kirim = $model->dataKirim();

?>

<div class="container-fluid pt-4 px-4">
    <h1 class="mt-4">Pengiriman</h1>
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item"><a href="index.php?url=dashboard">Dashboard</a></li>
        <li class="breadcrumb-item active">Data Pengiriman</li>
        <li class="breadcrumb-item active">Detail Pengiriman</li>
    </ol>
    <div class="row g-4">
        <div class="col-12">
            <div class="bg-secondary rounded h-100 p-4">
                <h6 class="mb-4">Table Pengiriman</h6>
                <div class="table-responsive">
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Kode</th>
                                <th scope="col">Nama User</th>
                                <th scope="col">Kode Barang</th>
                                <th scope="col">Tanggal</th>
                                <th scope="col">Nama Penerima</th>
                                <th scope="col">Lokasi Tujuan</th>
                                <th scope="col">Status Pengiriman</th>
                                <th scope="col">No Telp Penerima</th>
                                <th scope="col">Nama Kurir</th>
                                <th scope="col">Aksi</th>
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
                                    <td>
                                        <form>
                                            <a href="index.php?url=kurir_details&id=<?= $row['id'] ?>">
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