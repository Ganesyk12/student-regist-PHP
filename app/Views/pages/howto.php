<?= $this->extend('layouts/admin'); ?>
<?= $this->section('content'); ?>

<!-- This content -->
<div class="container-fluid">
      <div class="col d-sm-flex align-items-center justify-content-between mb-1">
            <div class="card-hidden">
                  <div class="row">
                        <div class=" col-sm mx-auto mt-3" aria-label="breadcrumb" style="width: 360px;">
                              <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="<?= base_url('home') ?>">Home</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Syarat & Tata Cara Pendaftaran</li>
                              </ol>
                        </div>
                  </div>
            </div>
      </div>
      <div class="col-md-6 mx-auto mt-2">
            <h5 class="h5 mb-0 text-gray-800" style="text-align:center; font-family:'Times New Roman', Times, serif;">
                  PERSYARATAN PENDAFTARAN CALON SISWA / SISWI <br> SDN MARGAHAYU VIII </h5><br>

            <div class="container-fluid mt-4" style="text-align: left;">
                  <p>1. Usia calon peserta didik 7 (tujuh) tahun atau paling rendah 6 (enam) tahun per tanggal 1 juli tahun berjalan</p>
                  <p>2. Bertempat tinggal di Bekasi</p>
                  <p>3. Fotocopy Akta Kelahiran</p>
                  <p>4. Fotocopy Kartu Keluarga</p>
                  <p>5. Pas foto calon peserta didik tampak muka jelas</p>

            </div>
      </div>
      <hr>
      <div class="col-md-6 mx-auto mt-2">
            <h5 class="h5 mb-0 text-gray-800" style="text-align:center; font-family:'Times New Roman', Times, serif;">
                  TATA CARA PENDAFTARAN CALON SISWA / SISWI <br> SDN MARGAHAYU VIII </h5><br>

            <div class="container-fluid mt-4" style="text-align: left;">
                  <p>1. Klik Menu Formulir pendaftaran pada halaman Home</p>
                  <p>2. Masukka data diri siswa dan orang tua / wali</p>
                  <p>3. Pastikan semua data diinput dengan benar</p>
                  <p>4. Klik Submit</p>
                  <p>5. Cek informasi data di pengumuman</p>

            </div>
      </div>
      <!-- Page Heading -->
</div>

<?= $this->endSection(); ?>