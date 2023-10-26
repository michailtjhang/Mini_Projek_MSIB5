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
            <div class="bg-secondary rounded overflow-hidden h-100 p-4">
                <h6 class="mb-4">Table Pengiriman</h6>
                <a href="index.php?url=Pages/Kirim/form_kirim">
                    <button type="button" class="btn btn-primary btn-sm mb-3">Tambah</button>
                </a>
                <div class="table-responsive">
                    <table id="datapegawai" class="table">
                        <thead>
                            <tr>
                                <th class="text-info" scope="col">NO</th>
                                <th class="text-info" scope="col">Kode</th>
                                <th class="text-info" scope="col">Nama User</th>
                                <th class="text-info" scope="col">Kode Barang</th>
                                <th class="text-info" scope="col">Tanggal</th>
                                <th class="text-info" scope="col">Nama Penerima</th>
                                <th class="text-info" scope="col">Lokasi Tujuan</th>
                                <th class="text-info" scope="col">Status Pengiriman</th>
                                <th class="text-info" scope="col">No Telp Penerima</th>
                                <th class="text-info" scope="col">Nama Kurir</th>
                                <th class="text-info" scope="col">Aksi</th>
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
                                        <form action="Pages/Kirim/control_kirim.php" method="post">
                                            <a href="index.php?url=Pages/Kirim/form_kirim&idedit=<?= $row['id'] ?>">
                                                <button type="button" class="btn btn-success btn-sm">Ubah</button>
                                            </a>
                                            <button type="submit" class="btn btn-warning btn-sm" name="proses" value="hapus" onclick="return confirm('Apakah Anda Yakin Ingin Menghapus?')">Hapus</button>
                                            <a href="index.php?url=Pages/Kirim/kirim_detail&id=<?= $row['id'] ?>">
                                                <button type="button" class="btn btn-primary btn-sm">Details</button>
                                            </a>
                                            <input type="hidden" name="idx" value="<?= $idedit ?>">
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