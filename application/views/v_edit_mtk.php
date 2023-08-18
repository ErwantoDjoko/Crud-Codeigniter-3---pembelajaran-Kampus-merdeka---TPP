
    <div class="container mt-2 col-lg-8">

    <div class="card p-3">
        
        <h4>Eit Registrasi Mata Kuliah</h4>
        <hr>
        
        <form class="text-dark" action="<?= base_url('/mata_kuliah/update'); ?>" method="POST">
            <div class="form-group row">
                <label for="colFormLabelSm" class="col-sm-2 col-form-label col-form-label-sm">Kode Mata Kuliah</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control form-control-sm" id="colFormLabelSm" name="kode_mata_kuliah"  value="<?php echo $matakuliah->kd_matakuliah; ?>">
                </div>
            </div>
            <div class="form-group row  mt-1">
                <label for="colFormLabelSm" class="col-sm-2 col-form-label col-form-label-sm">Nama Mata Kuliah</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control form-control-sm" id="colFormLabelSm" name="nama_mata_kuliah" value="<?php echo $matakuliah->nm_matakuliah; ?>">
                </div>
            </div>
            <div class="form-group row  mt-1">
                <label for="colFormLabelSm" class="col-sm-2 col-form-label col-form-label-sm">Num Sks</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control form-control-sm" id="colFormLabelSm" name="num_sks" value="<?php echo $matakuliah->num_sks; ?>">
                </div>
            </div>
            <div class="form-group row  mt-1">
                <label for="colFormLabelSm" class="col-sm-2 col-form-label col-form-label-sm">Status</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control form-control-sm" id="colFormLabelSm" name="status" value="<?php echo $matakuliah->status; ?>">
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
