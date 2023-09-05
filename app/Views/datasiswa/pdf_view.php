<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Generate PDF</title>

</head>

<body>
   <div class="container-fluid">
      <div class="col md-8 mx-auto">
         <h2>Data Siswa </h2>
         <a href="<?php echo site_url('print') ?>">
            Download PDF
         </a>
      </div>
      <table border=1 width=100% cellpadding=2 cellspacing=0 style="margin-top: 5px; text-align:center">
         <thead>
            <tr bgcolor=lightgray align=center>

               <td width="10%">No</td>
               <td width="25%">Tahun Ajaran</td>
               <td width="30%">Nama</td>
               <td width="20%">Tempat Lahir</td>
               <td width="25%">Tanggal Lahir</td>
               <td width="20%">Jenis Kelamin</td>
               <td width="20%">Agama</td>
               <td width="20%">Alamat</td>
               <td width="20%">Anak Urut</td>
               <td width="20%">Jumlah Saudara</td>
               <td width="20%">No. Telepon</td>
               <td width="20%">Nama Orangtua</td>
               <td width="20%">Pekerjaan Orangtua</td>
               <td width="20%">Alamat Orangtua</td>
            </tr>
         </thead>
         <tbody>
            <?php $x = 0; ?>
            <?php foreach ($data as $s) : ?>
               <tr>
                  <td><?= ++$x ?></td>
                  <td><?= $s['tahun_ajaran'] ?></td>
                  <td><?= $s['nama_lengkap'] ?></td>
                  <td><?= $s['tempat_lahir'] ?></td>
                  <td><?= $s['tgl_lahir'] ?></td>
                  <td><?= $s['jenis_kelamin'] ?></td>
                  <td><?= $s['agama'] ?></td>
                  <td><?= $s['alamat'] ?></td>
                  <td><?= $s['anak'] ?></td>
                  <td><?= $s['jum_sdr'] ?></td>
                  <td><?= $s['telp'] ?></td>
                  <td><?= $s['nama_ortu'] ?></td>
                  <td><?= $s['pekerjaan'] ?></td>
                  <td><?= $s['alamat_ortu'] ?></td>
               </tr>
            <?php endforeach; ?>
         </tbody>
      </table>
      <p>Jumlah data : <?= count($data) ?></p>
   </div>
</body>

</html>