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
            <div class="bg-secondary rounded h-100 p-4">
                <h6 class="mb-4">Table Pembayaran</h6>
               <a href="index.php?url=pembayaran_form">
            <button type="button" class="btn btn-primary btn-sm">Tambah</button>
                                            </a>
                                      
                <div class="table-responsive">
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">id</th>
                                <th scope="col">Metode Pembayaran</th>
                                <th scope="col">ToTal_Harga</th>
                                <th scope="col">id pengiriman</th>
                                <th scope='col'>Aksi</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $d = 1; ?>
                            <?php foreach ($data_pembayaran as $row) : ?>
                                <tr>
                                    <th scope="row"><?= $d++; ?></th>
                                    <td><?= $row['id']; ?></td>
                                    <td><?= $row['metode']; ?></td>
                                    <td><?= $row['total_harga']; ?></td>
                                    <td><?= $row['pengiriman_id']; ?></td>
                                    <td>
                                    <form>
                                            <a href="index.php?url=pembayaran_detail&id=<?= $row['id'] ?>">
                                                <button type="button" class="btn btn-danger btn-sm">Details</button>
                                            </a>
                                        </form>
                                    </td>
                                    <td>
                                   
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