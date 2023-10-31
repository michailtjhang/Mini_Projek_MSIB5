<?php

$model =  new barang();
$data_barang = $model->dataBarang();

?>

<div class="container-fluid pt-4 px-4">
    <h1 class="mt-4">Barang</h1>
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item"><a href="index.php?url=dashboard">Dashboard</a></li>
        <li class="breadcrumb-item active">Data Pengiriman</li>
        <li class="breadcrumb-item active">Barang</li>
    </ol>
    <div class="row g-4">
        <div class="col-12">
            <div class="bg-light rounded h-100 p-4">
                <h6 class="mb-4">Table Barang</h6>
                <a href="index.php?url=Pages/barang/form_barang">
                    <button type="button" class="btn btn-primary btn-sm mb-3">Tambah</button>
                </a>
                <div class="table-responsive">
                    <table id="datapegawai" class="table">
                        <thead>
                            <tr>
                                <th class="text-bold" scope="col">No</th>
                                <th class="text-bold" scope="col">Kode</th>
                                <th class="text-bold" scope="col">Kategori</th>
                                <th class="text-bold" scope="col">Deskripsi</th>
                                <th class="text-bold" scope="col">Kisaran Harga</th>

                                <th class="text-bold text-center" scope="col">Aksi</th>

                            </tr>
                        </thead>
                        <tbody>
                            <?php $id = 1; ?>
                            <?php foreach ($data_barang as $row) : ?>
                                <tr>
                                    <th scope="row"><?= $id; ?></th>
                                    <td><?= $row['kode']; ?></td>
                                    <td><?= $row['kategori']; ?></td>
                                    <td><?= $row['deskripsi']; ?></td>
                                    <td><?= $row['kisaran_harga']; ?></td>
                                    <td class="text-center"> 
                                        <form action="Pages/barang/Control_barang.php" method="post">
                                            <a href="index.php?url=Pages/barang/barang_detail&id=<?= $row['kode'] ?>">
                                                <button type="button" class="btn btn-info btn-sm">Details</button>
                                            </a>
                                            <?php 
                                                if ($sesi['level'] != 'operator') :
                                            ?>
                                            <a href="index.php?url=Pages/barang/form_barang&idedit=<?= $row['kode'] ?>">
                                                <button type="button" class="btn btn-warning btn-sm">Ubah</button>
                                            </a>
                                            <button type="submit" class="btn btn-danger btn-sm" name="proses" value="hapus" onclick="return confirm('Apakah Anda Yakin Ingin Menghapus?')">Hapus</button>
                                            
                                            <input type="hidden" name="idx" value="<?= $row['kode'] ?>">
                                            <?php  
                                             endif;
                                            ?>
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
