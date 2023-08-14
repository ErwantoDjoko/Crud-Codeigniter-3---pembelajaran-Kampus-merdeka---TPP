
    <div class="container mt-2">


        <a href="<?= base_url('/mahasiswa') ?>"><small>Kembali</small></a>

        <div class="col-lg-8">
        <h5>Profile</h5>
        <hr>
            <table class="table table-sm">

                <tbody>
                    <tr>
                        <th>NIM</th>
                        <td>
                            <?php echo $profile->nim; ?>
                        </td>
                    </tr>
                    <tr>
                        <th>Nama Mahasiswa</th>
                        <td>
                            <?php echo $profile->nama; ?>
                        </td>
                    </tr>
                    <tr>
                        <th>Program Studi</th>
                        <td>
                            <?php echo $profile->prodi; ?>
                        </td>
                    </tr>
                    <tr>
                        <th>Jurusan</th>
                        <td>
                            <?php echo $profile->jurusan; ?>
                        </td>
                    </tr>
                </tbody>
            </table>

        </div>
    <h5>Mata Kuliah</h5>         <a href="#"><button class="btn btn-primary">Add Mata Kuliah</button></a>
        <hr>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Mata Kuliah</th>
                    <th scope="col">Jml SKS</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $no = 1;
                foreach ($mata_kuliah as $row) {
                    echo '<tr>
                           <th scope="row">' . $no . '</th>
                           <td>' . $row->nm_matakuliah . '</td>
                           <td>' . $row->num_sks . '</td>
                           </tr>';
                    $no++;
                }


                ?>
            </tbody>
        </table>

    </div>
</body>

</html>