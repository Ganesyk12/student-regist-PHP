<?= $this->extend('layouts/admin'); ?>
<?= $this->section('scripts'); ?>

<!-- Bootstrap core JavaScript-->

<script src="<?= base_url('assets/vendor/jquery/jquery.min.js') ?>"></script>
<script src="<?= base_url('assets/vendor/bootstrap/js/bootstrap.bundle.min.js') ?>"></script>
<!-- Core plugin JavaScript-->
<script src="<?= base_url('assets/vendor/jquery-easing/jquery.easing.min.js') ?>"></script>
<!-- Custom scripts for all pages-->
<script src="<?= base_url('assets/js/sb-admin-2.min.js') ?>"></script>
<!-- Page level plugins -->
<script src="<?= base_url('assets/vendor/datatables/jquery.dataTables.min.js') ?>"></script>
<script src="<?= base_url('assets/vendor/datatables/dataTables.bootstrap4.min.js') ?>"></script>
<?php $this->section('scripts') ?>
<!-- Page level custom scripts -->
<script>
   // Call the dataTables jQuery plugin
   $(document).ready(function() {
      $('#dataTable').DataTable();
   });
</script>
<?php $this->endSection() ?>
<script>
   function preview() {
      const akta = document.querySelector('#scanakta');
      const aktaLabel = document.querySelector('.custom-file-label');
      const imgPreview = document.querySelector('.img-imgPreview');
      aktaLabel.textContent = akta.files[0].name;
      const fileakta = new FileReader();
      fileakta.readAsDataURL(akta.files[0]);
      fileakta.onload = function(e) {
         imgPreview.src = e.target.result;
      }
   }
</script>
<?= $this->endSection(); ?>