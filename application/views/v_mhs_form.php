
    <div class="container mt-2 col-lg-8">

    <div class="card p-3">

        
        <h4>Form Registrasi Mahasiswa</h4>
        <hr>
        
        <form class="text-dark" action="<?= base_url('/mahasiswa/simpan'); ?>" method="POST">
            <div class="form-group row">
                <label for="colFormLabelSm" class="col-sm-2 col-form-label col-form-label-sm">NIM</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control form-control-sm" id="colFormLabelSm" name="nim">
                </div>
            </div>
            <div class="form-group row  mt-1">
                <label for="colFormLabelSm" class="col-sm-2 col-form-label col-form-label-sm">Nama Mahasiswa</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control form-control-sm" id="colFormLabelSm" name="nmmhs">
                </div>
            </div>
            <div class="form-group row  mt-1">
                <label for="colFormLabelSm" class="col-sm-2 col-form-label col-form-label-sm">Program Studi</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control form-control-sm" id="colFormLabelSm" name="prodi">
                </div>
            </div>
            <div class="form-group row  mt-1">
                <label for="colFormLabelSm" class="col-sm-2 col-form-label col-form-label-sm">Jurusan</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control form-control-sm" id="colFormLabelSm" name="jurusan">
                </div>
            </div>
            <div class="form-group row  mt-1">
            <div class="col-sm-10 ">
                      <button class="btn btn-primary" type="submit">Simpan</button>
                      <button class="btn btn-secondary" type="button">Batal</button>

            </div>
            </div>

          
            
        </form>
        
    </div>
    </div>
