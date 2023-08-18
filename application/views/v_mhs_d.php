
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
  

    </div>
</body>

</html>