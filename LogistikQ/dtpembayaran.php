<?php  

$model =  new pembayaran();
$data_pembayaran = $model->dataPembayaran();

?>

            <div class="container-fluid pt-4 px-4">
                <h1 class="mt-4">Pembayaran</h1>
                    <ol class="breadcrumb mb-4">
                        <li class="breadcrumb-item"><a href="index.php?url=dashboard">Dashboard</a></li>
                        <li class="breadcrumb-item active">Tables</li>
                    </ol>
                <div class="row g-4">
                    <div class="col-12">
                        <div class="bg-secondary rounded h-100 p-4">
                            <h6 class="mb-4">Table Pembayaran</h6>
                            <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th scope="col">no</th>
                                            <th scope="col">id</th>
                                            <th scope="col">Metode Pembayaran</th>
                                            <th scope="col">ToTal_Harga</th
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php $d = 1; ?>
                                    <?php foreach ( $data_pembayaran as $row ) : ?>
                                        <tr>
                                            <th scope="row"><?= $d; ?></th>
                                            <td><?= $row['id']; ?></td>
                                            <td><?= $row['metoďe']; ?></td>
                                            <td><?= $row['total_harga']; ?></td>
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
