<?php

$model =  new user();
$data_user = $model->dataUser();

?>

<div class="container-fluid pt-4 px-4">
    <h1 class="mt-4">User</h1>
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item"><a href="index.php?url=dashboard">Dashboard</a></li>
        <li class="breadcrumb-item active">Profile</li>
    </ol>
    <div class="row g-4">
        <div class="col-12">
            <div class="bg-secondary rounded h-100 p-4">
                <h6 class="mb-4">Table User</h6>
                <a href="index.php?url=user_form">
                <button class="btn btn-sm btn-primary mb-3">Tambah</button></a>
                <div class="table-responsive">
                    <table id="datapegawai" class="table">
                        <thead>
                            <tr>
                                <th class="text-info" scope="col">no</th>
                                <th class="text-info" scope="col">nama</th>
                                <th class="text-info" scope="col">username</th>
                                <th class="text-info" scope="col">password</th>
                                <th class="text-info" scope="col">nomor_telepon</th>
                                <th class="text-info" scope="col">alamat</th>
                                <th class="text-info" scope="col">aksi</th>
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
                                    <td>
                                    <form action="user_controller.php" method="POST">
                                            <a href="index.php?url=detail_user&id=<?= $row['id'] ?>">
                                                <button type="button" class="btn btn-success btn-sm">Details</button>
                                            </a>
                                            <a href="index.php?url=user_form&idedit=<?= $row['id'] ?>">
                                                <button type="button"  class="btn btn-warning btn-sm">Update</button>
                                            </a>
                                            <button type="submit" class="btn btn-danger btn-sm" name="proses" value="hapus"
                                            onclick="return confirm('Apakah anda yakin ingin menghapusnya?')">Delete</button>
                                            <input type="hidden" name="idx" value="<?= $row['id']?>">
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