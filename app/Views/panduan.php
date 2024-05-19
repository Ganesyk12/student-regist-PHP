<!doctype html>
<html lang="en">

<head>

   </nav>
   <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
   <meta name="description" content="">
   <meta name="author" content="">
   <title>Login</title>
   <!-- Bootstrap core CSS -->
   <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
</head>

<body>
   <!-- NAVBAR CONTENT -->
   <nav class="navbar navbar-expand-lg navbar-light bg-dark py-1 static-top shadow">
      <div class="container-fluid">
         <img src="/assets/banisaleh.jpg" class="icon" width="50px" height="50px"></a>
         <div class="col">
            <a class="navbar-brand"><span class="fw-bolder text-primary" style="text-align:left ;font-family:'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif">
                  UNIVERSITAS BANI SALEH</span></a>
         </div>
         <ul class="navbar-nav ml-auto">
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
               <div class="col">
                  <a class="btn btn-info btn-md" href="<?= base_url('coba'); ?>">Panduan</a>
               </div>
            </div>
         </ul>
      </div>
   </nav>

   <div class="container">
      <div class="row">
         <div class="col-md-6 mx-auto mt-5">
            <?php if (session()->getFlashdata('message')) : ?>
               <div class="alert alert-info">
                  <?= session()->getFlashdata('message') ?>
               </div>
            <?php endif; ?>
            <form method="post" action="<?= base_url('login/auth') ?>">
               <div class="row">
                  <img src="/assets/banisaleh.png" width="500" height="500" class="center">
               </div>
               <h1 class="h3 mb-3 font-weight-normal">Web Inventaris Barang Universitas Bani Saleh</h1>
               <div class="form-group">
                  <label>Username</label>
                  <input type="text" class="form-control" name="username" required="" placeholder="Masukkan Username">
               </div>
               <div class="form-group">
                  <label>Password</label>
                  <input type="password" class="form-control" name="password" required="" placeholder="Masukkan Password">
               </div>
               <div class="form-group">
                  <button class="btn btn-primary btn-block" type="submit">Login</button>
               </div>
            </form>
         </div>
      </div>
   </div>
</body>

</html>