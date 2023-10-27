<?php

$model =  new kurir();
$data_kurir = $model->dataKurir();

?>

<div class="container-fluid pt-4 px-4">
    <h1 class="mt-4">Kurir</h1>
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item"><a href="index.php?url=Pages/kurir/dashboard">Dashboard</a></li>
        <li class="breadcrumb-item active">Kurir</li>
    </ol>
    <div class="row g-4">
        <div class="col-12">
            <div class="bg-secondary rounded h-100 p-4">
                <h6 class="mb-4">Table Kurir</h6>
                <a href="index.php?url=Pages/kurir/kurir_form">
                    <button class="btn btn-sm btn-primary mb-3">Tambah</button>
                </a>
                <div class="table-responsive">
                    <table class="table">
                        <thead>
                            <tr>
                                <th class="text-info" scope="col">No</th>
                                <th class="text-info" scope="col">Nama</th>
                                <th class="text-info" scope="col">Nomor Telepon</th>
                                <th class="text-info" scope="col">Jadwal</th>
                                <th class="text-info" scope="col">Aksi</th>
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $id = 1; ?>
                            <?php foreach ($data_kurir as $row) : ?>
                                <tr>
                                    <th scope="row"><?= $id; ?></th>
                                    <td><?= $row['nama']; ?></td>
                                    <td><?= $row['nomor_telepon']; ?></td>
                                    <td><?= $row['jadwal']; ?></td>
                                    <td>
                                        <form action="Pages/kurir/kurir_controller.php" method="POST">
                                            <a href="index.php?url=Pages/kurir/kurir_form&idedit=<?= $row['id'] ?>">
                                                <button type="button" class="btn btn-success btn-sm">Ubah</button>
                                            </a>
                                            <button type="submit" class="btn btn-warning btn-sm" name="proses" value="hapus" onclick="return confirm('Yakin ingin menghapus')">Hapus</button>
                                            <input type="hidden" name="idx" value="<?= $row['id'] ?>">
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