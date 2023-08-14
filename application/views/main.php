<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trafoindo Prima Perkasa</title>

    <link rel="stylesheet" type="text/css"
        href="<?php echo base_url('../assets/css/bootstrap-5.3.1/dist/css/bootstrap.css'); ?>">

</head>

<body>

<nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <a class="navbar-brand" href="#"><img src="<?= base_url('../assets/img/kampus_mdk.png')?>" width="100px" style="position:relative;padding-right:5px;" alt=""><img src="<?= base_url('../assets/img/tpp.jpg')?>" width="100px" style="position:relative" alt=""></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
      <div class="navbar-nav">
        <a class="nav-link active" aria-current="page" href="<?= base_url('mahasiswa') ?>">Mahasiswa</a>
        <a class="nav-link"  href="<?= base_url('mata_kuliah') ?>">Mata Kuliah</a>
        
      </div>
    </div>
  </div>
</nav>

<?php include_once($pages.'.php'); ?>

</body>

</html>