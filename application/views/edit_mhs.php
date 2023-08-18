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
    <div class="container mt-2 col-lg-8">

    <div class="card p-3">

        
        <h4>Update Profile Mahasiswa</h4>
        <hr>
        
        <form class="text-dark" action="<?= base_url('/mahasiswa/update'); ?>" method="POST">
            <div class="form-group row">
                <label for="colFormLabelSm" class="col-sm-2 col-form-label col-form-label-sm">NIM</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control form-control-sm" id="colFormLabelSm" name="nim" value="<?php echo $profile->nim; ?>" readonly>
                </div>
            </div>
            <div class="form-group row  mt-1">
                <label for="colFormLabelSm" class="col-sm-2 col-form-label col-form-label-sm">Nama Mahasiswa</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control form-control-sm" id="colFormLabelSm" name="nmmhs" value="<?php echo $profile->nama; ?>">
                </div>
            </div>
            <div class="form-group row  mt-1">
                <label for="colFormLabelSm" class="col-sm-2 col-form-label col-form-label-sm">Program Studi</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control form-control-sm" id="colFormLabelSm" name="prodi" value="<?php echo $profile->prodi; ?>">
                </div>
            </div>
            <div class="form-group row  mt-1">
                <label for="colFormLabelSm" class="col-sm-2 col-form-label col-form-label-sm">Jurusan</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control form-control-sm" id="colFormLabelSm" name="jurusan" value="<?php echo $profile->jurusan; ?>">
                </div>
            </div>
            <div class="form-group row  mt-1">
            <div class="col-sm-10 ">
                      <button class="btn btn-primary" type="submit">Update</button>

            </div>
            </div>

          
            
        </form>
        
    </div>
    </div>
</body>

</html>