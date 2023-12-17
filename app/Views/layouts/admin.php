<!DOCTYPE html>
<html lang="en">

<!-- Header -->

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <title><?= $title; ?></title>
    <!-- Custom fonts for this template-->
    <link href="<?= base_url() ?>/assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
    <!-- Custom styles for this template-->
    <link href="<?= base_url('assets/css/sb-admin-2.min.css') ?>" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <?= $this->renderSection('styles') ?>
</head>



<!-- Body -->

<body id="page-top">
    <!-- Page Wrapper -->
    <div id="wrapper">
    </div>
    <div id="content-wrapper" class="d-flex flex-column">
        <?= $this->renderSection('content'); ?>
    </div>
    <div class="scroll">
        <a class="scroll-to-top rounded" href="#page-top">
            <i class="fas fa-angle-up"></i>
        </a>
    </div>


    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header bg-primary">
                    <h5 class="modal-title" id="exampleModalLabel" style="color: white;">Ready to Leave?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true" style="color: white;">×</span>
                    </button>
                </div>
                <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                <div class="modal-footer">
                    <!-- <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button> -->
                    <a class="btn btn-primary" href="/login">Logout</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Delete Modal-->
    <div class="modal fade" id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header bg-danger">
                    <h5 class="modal-title" id="exampleModalLabel" style="color: white;">Hapus Data?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true" style="color: white;">×</span>
                    </button>
                </div>
                <div class="modal-body">Pilih "Hapus" jika Anda yakin ingin menghapusnya.</div>
                <div class="modal-footer">
                    <!-- <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button> -->
                    <a class="btn btn-primary" href="">Hapus</a>
                </div>
            </div>
        </div>
    </div>

<br>
    <!-- Footer -->
    <footer class="sticky-footer bg-warning">
        <div class="container my-auto">
            <div class="copyright text-center my-auto" style="font-size: large; font-family:'Times New Roman', Times, serif; color:black">
                <span>Template Website Penerimaan Peserta Didik SDN Margahayu VIII Kota Bekasi<br>
                    Tahun Ajaran 2023 / 2024</span> <br><br>
                <span>Copyright Kel.2-6BP &copy; Universitas Bani Saleh <?= Date('Y') ?> </span>
            </div>
        </div>
    </footer>


    <?= $this->renderSection('scripts') ?>

</html>