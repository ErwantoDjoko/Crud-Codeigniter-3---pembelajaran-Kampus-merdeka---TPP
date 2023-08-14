<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trafoindo Prima Perkasa</title>

    <link rel="stylesheet" type="text/css"
        href="<?php echo base_url('assets/css/bootstrap-5.3.1/dist/css/bootstrap.css'); ?>">

</head>

<body>
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
                           <td><a href="'.base_url('index.php/hello/view?nim='.$row->nim.'').'">Lihat</a></td>
                         </tr>';
                         $no++;
                        }


                    ?>
                </tbody>
            </table>

</body>

</html>