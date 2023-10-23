<?php

$model =  new user();
$data_user = $model->dataUser();

?>

<div class="container-fluid pt-4 px-4">
    <div class="row g-4">
        <div class="col-12">
            <div class="bg-secondary rounded h-100 p-4">
                <h6 class="mb-4">Table User</h6>
                <div class="table-responsive">
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">nama</th>
                                <th scope="col">username</th>
                                <th scope="col">password</th>
                                <th scope="col">nomor_telepon</th>
                                <th scope="col">alamat</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $id = 1; ?>
                            <?php foreach ($data_user as $row) : ?>
                                <tr>
                                    <th scope="row"><?= $id; ?></th>
                                    <td><?= $row['nama']; ?></td>
                                    <td><?= $row['username']; ?></td>
                                    <td><?= $row['password']; ?></td>
                                    <td><?= $row['nomor_telepon']; ?></td>
                                    <td><?= $row['alamat']; ?></td>
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