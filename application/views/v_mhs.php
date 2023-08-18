
    <div class="container mt-2">

        
        <a href="<?= base_url('/mahasiswa/add') ?>"><button class="btn btn-primary">Add Data</button></a>
        <table class="table">
            <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Nim</th>
                        <th scope="col">Nama Mahasiswa</th>
                        <th scope="col">Program Studi</th>
                        <th scope="col">Jurusan</th>
                        <th scope="col">Mata Kuliah</th>
                    </tr>
                </thead>
                <tbody>
                   <?php
                   $no = 1;
                        foreach ($mhs as $row) {
                            echo '<tr>
                           <th scope="row">'.$no.'</th>
                           <td>'.$row->nim.'</td>
                           <td>'.$row->nama.'</td>
                           <td>'.$row->prodi.'</td>
                           <td>'.$row->jurusan.'</td>
                           <td><a href="'.base_url('mahasiswa/view?nim='.$row->nim.'').'">Lihat</a> | <a href="'.base_url('mahasiswa/edit?nim='.$row->nim.'').'">Edit</a> | <a href="'.base_url('mahasiswa/delete?nim='.$row->nim.'').'">Hapus</a> </td>
                           </tr>';
                           $no++;
                        }


                    ?>
                </tbody>
            </table>
            
        </div>
   