<?php

$model =  new pembayaran();
$data_pembayaran = $model->dataPembayaran();

?>

<div class="container-fluid pt-4 px-4">
    <h1 class="mt-4">Pembayaran</h1>
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item"><a href="index.php?url=dashboard">Dashboard</a></li>
        <li class="breadcrumb-item active">Data Pengiriman</li>
        <li class="breadcrumb-item active">Pembayaran</li>
    </ol>
    <div class="row g-4">
        <div class="col-12">
            <div class="bg-light rounded overflow-hidden h-100 p-4">
                <h6 class="mb-4">Table Pembayaran</h6>
                <a href="index.php?url=Pages/pembayaran/pembayaran_form">
                    <button type="button" class="btn btn-primary btn-sm mb-3">Tambah</button>
                </a>

                <div class="table-responsive">
                    <table id="datapegawai" class="table">
                        <thead>
                            <tr>
                                <th class="text-bold" scope="col">No</th>
                                <th class="text-bold" scope="col">Metode Pembayaran</th>
                                <th class="text-bold" scope="col">ToTal_Harga</th>
                                <th class="text-bold" scope="col">id pengiriman</th>
                                <th class="text-bold" scope='col'>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $d = 1; ?>
                            <?php foreach ($data_pembayaran as $row) : ?>
                                <tr>
                                    <td><?= $row['id']; ?></td>
                                    <td><?= $row['metode']; ?></td>
                                    <td><?= $row['total_harga']; ?></td>
                                    <td><?= $row['pengiriman_id']; ?></td>
                                    <td>
                                        <form action="Pages/pembayaran/pembayaran_controler.php" method="POST">
                                            <a href="index.php?url=Pages/pembayaran/pembayaran_form&idedit=<?= $row['id'] ?>">
                                                <button type="button"  class="btn btn-warning btn-sm">Update</button>
                                            </a>
                                            <input type="submit" name="submit" class="btn btn-danger btn-sm" 
                                            value="hapus" onclick="return confirm('Anda yakin ingin menghapus data ini ?')">
                                            <a href="index.php?url=Pages/pembayaran/pembayaran_detail&id=<?= $row['id'] ?>">
                                                <button type="button" class="btn btn-info btn-sm">Details</button>
                                            </a>
                                            <input type="hidden" name="idx" value="<?=$row['id']; ?>">
                                        </form>
                                    </td>
                                </tr>
                                <?php $d++; ?>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>