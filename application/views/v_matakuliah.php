
<div class="container mt-2">

        
<a href="<?= base_url('/mata_kuliah/add') ?>"><button class="btn btn-primary">Add Data</button></a>
<table class="table">
    <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Kode Mata Kuliah</th>
                <th scope="col">Nama Mata kuliah</th>
                <th scope="col">Sks</th>
                <th scope="col">Status</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
           <?php
           $no = 1;
                foreach ($matakuliah as $row) {
                    echo '<tr>
                   <th scope="row">'.$no.'</th>
                   <td>'.$row->kd_matakuliah.'</td>
                   <td>'.$row->nm_matakuliah.'</td>
                   <td>'.$row->num_sks.'</td>
                   <td>'.$row->status.'</td>
                    <td><a href="'.base_url('mata_kuliah/view?kd_matakuliah='.$row->kd_matakuliah.'').'">Lihat</a> | <a href="'.base_url('mata_kuliah/edit?kd_matakuliah='.$row->kd_matakuliah.'').'">Edit</a> | <a href="'.base_url('mata_kuliah/delete?kd_matakuliah='.$row->kd_matakuliah.'').'">Hapus</a> </td>
                   ';
                   $no++;
                }


            ?>
        </tbody>
    </table>
    
</div>
