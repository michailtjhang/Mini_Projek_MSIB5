<?php
$kode = $_POST['kode'];
$proses= $_POST['proses'];
if(isset($proses)){
    $model = new lacak();
    $kirim = $model->cetakresi($kode);
    ?>
    <div class="row"> 
    <h2 class="text-center" data-aos="fade-up">Informasi Paket Anda</h2>
          <div class="col-md-12 mb-5 mt-5 mb-md-0" data-aos="fade-up">
              <div class="row">
                <div class="col-md-12 form-group">
                  <label for="name" class="fw-bold text-primary " >Status Paket Anda Sekarang</label>
                  <input type="text" name="name" class="form-control" id="name" value="<?= $kirim['status_pengiriman'] ?> " readonly>
                </div>
                <div class="col-md-6 form-group mt-3 mt-md-0">
                  <label for="name" class="fw-bold text-primary ">nama Penerima</label>
                  <input type="email" class="form-control" value="<?= $kirim['nama_penerima'] ?>" name="email" id="email"readonly>
                </div>
                <div class="col-md-6 form-group mt-3 mt-md-0 ">
                  <label for="name" class="fw-bold text-primary ">tanggal</label>
                  <input type="text" class="form-control" value="<?= $kirim['tanggal'] ?>" name="subject" id="subject" readonly>
                </div>
                <div class="col-md-6 form-group mt-3 mt-md-0">
                  <label for="name" class="fw-bold text-primary ">Kurir</label>
                  <input type="text" class="form-control" value="<?= $kirim['nama'] ?>" name="subject" id="subject" readonly>
                </div>
          </div>
        </div>
      </div>
      <?php
}?>