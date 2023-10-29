<?php  

error_reporting(0);

$obj_kirim = new pengiriman();
$obj_user = new user();
$obj_barang = new barang();
$obj_kurir = new kurir();

$data_kirim = $obj_kirim->dataKirim();
$data_user = $obj_user->dataUser();
$data_barang = $obj_barang->dataBarang();
$data_kurir = $obj_kurir->dataKurir();

$idedit = $_REQUEST['idedit'];
$objKirim = new pengiriman();

if( !empty($idedit) ) {
  $kirim = $objKirim->getKirim($idedit);
} else {
  $kirim = array();
}

?>

<div class="container-fluid pt-4 px-10">
    <!-- form start -->
    <form action="Pages/Kirim/control_kirim.php" method="POST">
        <div class="col-sm-12 col-xl-8">
            <div class="bg-light rounded h-100 p-4">
                <h6 class="mb-4">Form Pengiriman</h6>
                <div class="form-floating mb-3">
                    <input type="text" name="kode" class="form-control" id="kode" placeholder="Masukkan Kode Pengiriman" value="<?= $kirim['kode'] ?>">
                    <label for="kode">Kode Pengiriman</label>
                </div>
                <div class="form-floating mb-3">
                    <select class="form-select" name="id_user" id="nama_user" aria-label="Floating label select example">
                        <option selected>--- Nama User ---</option>
                        <?php foreach( $data_user as $user ) : 
                            $sel = ($user['id'] == $kirim['id_user']) ? 'selected' : '';?>
                            <option value="<?= $user['id'] ?>" <?= $sel; ?>><?= $user['nama'] ?></option>
                        <?php endforeach; ?>
                    </select>
                    <label for="nama_user">Nama Pengiriman</label>
                </div> 
                <div class="form-floating mb-3">
                    <select class="form-select" name="kode_barang"id="kode_barang" aria-label="Floating label select example">
                        <option selected>--- Kode Barang ---</option>
                        <?php foreach( $data_barang as $barang ) : 
                            $sel = ($barang['kode'] == $kirim['kode_barang']) ? 'selected' : '';?>
                            <option value="<?= $barang['kode'] ?>" <?= $sel; ?>><?= $barang['kode'] ?></option>
                        <?php endforeach; ?>
                    </select>
                    <label for="kode_barang">Kode Barang Pengiriman</label>
                </div> 
                <div class="form-floating mb-3">
                    <input type="date" name="tanggal" class="form-control" id="tgl" placeholder="Masukkan Tanggal" value="<?= $kirim['tanggal'] ?>">
                    <label for="tgl">Tanggal</label>
                </div>
                <div class="form-floating mb-3">
                    <input type="text" name="nama_penerima" class="form-control" id="nama_nerima" placeholder="Masukkan nama penerima" value="<?= $kirim['nama_penerima'] ?>">
                    <label for="nama_nerima">Nama Penerima</label>
                </div>
                <div class="form-floating mb-3">
                    <input type="text" name="lokasi_tujuan" class="form-control" id="tujuan" placeholder="Masukkan Lokasi Tujuan" value="<?= $kirim['lokasi_tujuan'] ?>">
                    <label for="tujuan">Lokasi Tujuan</label>
                </div>
                <div class="form-floating mb-3">
                    <input type="text" name="status_pengiriman" class="form-control" id="status" placeholder="Masukkan Status pengiriman" value="<?= $kirim['status_pengiriman'] ?>">
                    <label for="status">Status Pengiriman</label>
                </div>
                <div class="form-floating mb-3">
                    <input type="number" name="nomor_telp_penerima" class="form-control" id="telp" placeholder="Masukkan no telp penerima" value="<?= $kirim['nomor_telp_penerima'] ?>">
                    <label for="telp">No Telepon Penerima</label>
                </div>
                <div class="form-floating mb-3">
                    <select class="form-select" name="kurir_id" id="nama_kurir" aria-label="Floating label select example">
                        <option selected>--- Nama Kurir ---</option>
                        <?php foreach( $data_kurir as $kurir ) : 
                            $sel = ($kurir['id'] == $kirim['kurir_id']) ? 'selected' : '';?>
                            <option value="<?= $kurir['id'] ?>" <?= $sel; ?>><?= $kurir['nama'] ?></option>
                        <?php endforeach; ?>
                    </select>
                    <label for="nama_kurir">Nama Kurir</label>
                </div> 
                <br> 
                <?php if (empty($idedit)) { ?>
                    <button name="proses" value="save" type="submit" class="btn btn-primary">Submit</button>
                <?php } else { ?>
                    <button type="submit" name="proses" value="ubah" class="btn btn-warning">Ubah</button>
                <?php } ?>
                <input type="hidden" name="idx" value="<?= $idedit ?>">
            </div>
        </div>
    </form>
</div>