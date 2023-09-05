<?= $this->extend('layouts/admin'); ?>
<?= $this->section('content'); ?>

<div class="container-fluid">
    <!-- Page Heading --><br>
    <div class="d-sm-flex align-items-center justify-content-between mb-2">
        <div class="card-hidden">
            <div class="row">
                <div class=" col-sm mx-auto" aria-label="breadcrumb" style="width: 320px;">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="<?= base_url('home') ?>">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Dashboard</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
    <!-- Content Row -->
    <div class="row">
        <!-- Earnings (Monthly) Card Example -->
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-primary shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Jumlah Murid</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">328 Anak</div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-solid fa-users fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Earnings (Monthly) Card Example -->
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-success shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-success text-uppercase mb-1">Jumlah Pendidik</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">14 Guru dan Staf</div>
                        </div>
                        <div class="col-auto"><i class="fas fa-user-tie fa-2x text-gray-300"></i></div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Earnings (Monthly) Card Example -->
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-info shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-info text-uppercase mb-1">Jumlah Kelas</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">6 Kelas</div>
                        </div>
                        <div class="col-auto"><i class="fas fa-solid fa-user fa-2x text-gray-300"></i></div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Content Row -->
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-info shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-info text-uppercase mb-1">Status Akreditasi</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">A (Sangat Baik)</div>
                        </div>
                        <div class="col-auto"><i class="fas fa-school fa-2x text-gray-300"></i></div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="card-hidden">
        <div class="row">
            <div class="col-md-auto mb-3">
                <div class="card" style="width: 440px;">
                    <div class="card-header" style="background-color:dodgerblue;">
                        <a class="table" style="color: white; font-family:'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif">IDENTITAS SEKOLAH</a>
                    </div>
                    <div class="card-body" style="text-justify: auto; color:black; font-family:'Times New Roman', Times, serif">
                        NPSN : 20222662 <br>
                        Status : Negeri <br>
                        Bentuk Pendidikan : SD <br>
                        Status Kepemilikan : Pemerintah Daerah <br>
                        SK Pendirian Sekolah : 421/0564/SD/VII/1998 <br>
                        Tanggal SK Pendirian : 1998-07-01 <br>
                        SK Izin Operasional : - <br>
                        Tanggal SK Izin Operasional : 1910-01-01 <br>
                    </div>
                </div>
            </div>
            <div class="col-md-auto mb-3">
                <div class="card" style="width: 500px;">
                    <div class="card-header" style="background-color:dodgerblue;">
                        <a class="table" style="color: white; font-family:'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif">Data PTK dan PDD</a>
                    </div>
                    <ul class="list-group list-group-flush">
                        <!-- Table of Content -->
                        <table class="table table" id="dataTable" width="50%" cellspacing="0">
                            <thead class="table-dark">
                                <tr>
                                    <th>Uraian</th>
                                    <th>Guru</th>
                                    <th>Tendik</th>
                                    <th>PD</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Laki-laki</td>
                                    <td>5</td>
                                    <td>0</td>
                                    <td>166</td>
                                </tr>
                                <tr>
                                    <td>Perempuan</td>
                                    <td>8</td>
                                    <td>1</td>
                                    <td>162</td>
                                </tr>
                                <tr>
                                    <td><b>Total</b></td>
                                    <td><b>13</b< /td>
                                    <td><b>1</b< /td>
                                    <td><b>328</b< /td>
                                </tr>
                            </tbody>
                        </table>
                        <!-- End of table content -->
                    </ul>
                    <a style="font-family:'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif; color:black; padding:5px; text-align:justify ">
                        Keterangan :
                        <span> Penghitungan PTK adalah yang sudah mendapat penugasan, berstatus aktif dan terdaftar di sekolah induk.
                            Data Rekap Per Tanggal <span id="tanggalwaktu" style="text-align:left"></span>
                            <script>
                                var tw = new Date();
                                if (tw.getTimezoneOffset() == 0)(a = tw.getTime() + (7 * 60 * 60 * 1000))
                                else(a = tw.getTime());
                                tw.setTime(a);
                                var tahun = tw.getFullYear();
                                var bulan = tw.getMonth();
                                var tanggal = tw.getDate();
                                var bulanarray = new Array("Januari", "Februari", "Maret", "April", "Mei", "Juni", "Juli", "Agustus", "September", "Oktober", "Nopember", "Desember");
                                document.getElementById("tanggalwaktu").innerHTML = tanggal + " " + bulanarray[bulan] + " " + tahun;
                            </script>.
                        </span>
                    </a>
                </div>
            </div>
            <div class="col-md-auto mb-3">
                <img src="assets/icon/sd.png" class="img-thumbnail">
            </div>
        </div>
    </div>
</div>

<?= $this->endSection(); ?>