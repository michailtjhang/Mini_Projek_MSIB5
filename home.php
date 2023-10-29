
<section class="section" data-aos="fade-up" data-aos-delay="200">
  <div class="container">
    <div class="row align-items-center">
      <div class="col-md-12 me-auto">
        <h2 class="mb-12 text-center " style="font-family: 'Josefin Sans', sans-serif;
font-family: 'Open Sans', sans-serif;
font-family: 'Oswald', sans-serif;">LACAK PAKETMU DISINI</h2>
        <div class="col-md-12 mt-3">
            <form  method="POST">
            <input type="text" class=" border-5 form-control" name="kode" required>
            <input type="submit" class="btn btn-primary d-block mt-5  mx-auto " name="proses" value="cek">
            </form>
        </div>
    </div>
  </div>
  <?php


if(isset($_POST['proses'])){
    $kode = $_POST['kode'];
    $model = new lacak();
    $kirim = $model->cetakresi($kode);
    if($kirim == 0){
        ?>
        <script>alert("Username atau password anda salah silahkan coba lagi");
        document.location="index.php?hal=home";</script>
        <?php
    }else{
        ?>
        <div class="row mt-5"> 
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
                <div class="col-md-6 form-group mt-3 mt-md-0">
                  <label for="name" class="fw-bold text-primary ">Tujuan Pengiriman</label>
                  <input type="text" class="form-control" value="<?= $kirim['lokasi_tujuan'] ?>" name="subject" id="subject" readonly>
                </div>
          </div>
        </div>
      </div>
    <?php
    }
    
     
}?>
</section>
</main><!-- End #main -->