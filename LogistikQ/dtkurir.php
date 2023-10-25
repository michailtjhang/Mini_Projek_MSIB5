<?php

$model =  new kurir();
$data_kurir = $model->dataKurir();

?>

<div class="container-fluid pt-4 px-4">
    <h1 class="mt-4">Kurir</h1>
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item"><a href="index.php?url=dashboard">Dashboard</a></li>
        <li class="breadcrumb-item active">Kurir</li>
    </ol>
    <div class="row g-4">
        <div class="col-12">
            <div class="bg-secondary rounded p-4">
                <h6 class="mb-4">Table Kurir</h6>
                <div class="">
                    <table id="datapegawai" class="table">
                        <thead>
                            <tr>
                                <th class="text-info" scope="col">#</th>
                                <th class="text-info" scope="col">Nama</th>
                                <th class="text-info" scope="col">Nomor Telepon</th>
                                <th class="text-info" scope="col">Jadwal</th>
                                <th class="text-info" scope="col">Aksi</th></th>
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