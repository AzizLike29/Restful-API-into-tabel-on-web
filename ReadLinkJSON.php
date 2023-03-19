<?php
$ArrContextOptions = array(
    "ssl" => array(
        "verify_peer" => false,
        "verify_peer_name" => false,
    ),
);

$LinkAPI = "http://localhost/Projects/kampus/";
$Response = file_get_contents($LinkAPI, false, stream_context_create($ArrContextOptions));

// mencode kampus.json
$data = json_decode($Response, true);

?>

<!DOCTYPE html>
<html>

<body style="background-image: url('Gambar/Background.jpg');">
    <div class="container">
        <div class="text-bg-success">
            <h4 style="text-align: center; margin-left: 50px;">Data Jumlah Perguruan Tinggi dan Jumlah Mahasiswa Di Indonesia<br>
                <!-- mengatur logo gambar pada php -->
                <div style="float: left; position: absolute; top: 10px; margin-left: 10px">
                    <img src="Gambar/Kampus Merdeka.png" alt="Kampus Merdeka" width="65" height="65">
                </div>
                <div style="float: right; position: relative; margin-right: 55px; bottom: 20px;">
                    <img src="Gambar/Tut Wuri Handayani.png" alt="Tut Wuri Handayani" width="65" height="65">
                </div>
                <!-- Teks pada php -->
                <a href="https://www.bps.go.id/indikator/indikator/view_data_pub/0000/api_pub/cmdTdG5vU0IwKzBFR20rQnpuZEYzdz09/da_04/1" style="color: #043927; margin-left: 50px;">Badan Pusat Statistik</a><br>
                <small class="text-light" style="margin-left: 50px;">Berdasarkan Data Tahun 2020 dan 2021</small>
            </h4>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-22 text-center">
                <img src="Gambar/data perguruan tinggi.png" class="img-fluid" alt="Gambar/data perguruan tinggi.png" width="1300" height="200">
            </div>
        </div>
        <div class="table-responsive">
            <table class="table">
                <thead class="table-success">
                    <tr class="text-center">
                        <th>id</th>
                        <th>Provinsi</th>
                        <th>Jumlah Perguruan Tinggi di Bawah KemristekDikti Negeri</th>
                        <th>Jumlah Perguruan Tinggi di Bawah KemristekDikti Swasta</th>
                        <th>Jumlah Perguruan Tinggi di Bawah KemristekDikti Negeri dan Swasta</th>
                        <th>Jumlah Mahasiswa di Bawah KemristekDikti Negeri</th>
                        <th>Jumlah Mahasiswa di Bawah KemristekDikti Swasta</th>
                        <th>Jumlah Mahasiswa di Bawah KemristekDikti Negeri dan Swasta</th>
                    </tr>
                </thead>
                <tbody class="text-center">
                    <?php foreach ($data as $row) : ?>
                        <tr class="table-secondary">
                            <td><?= $row['id'] ?></td>
                            <td><?= $row['Provinsi'] ?></td>
                            <td><?= $row['Jumlah_Perguruan_Tinggi_di_Bawah_KemristekDikti_Negeri'] ?></td>
                            <td><?= $row['Jumlah_Perguruan_Tinggi_di_Bawah_KemristekDikti_Swasta'] ?></td>
                            <td><?= $row['Perguruan_Tinggi_di_Bawah_KemristekDikti_Negeri_dan_Swasta'] ?></td>
                            <td><?= $row['Jumlah_Mahasiswa_di_Bawah_KemristekDikti_Negeri'] ?></td>
                            <td><?= $row['Jumlah_Mahasiswa_di_Bawah_KemristekDikti_Swasta'] ?></td>
                            <td><?= $row['Jumlah_Mahasiswa_di_Bawah_KemristekDikti_Negeri_dan_Swasta'] ?></td>
                        </tr>
                    <?php endforeach ?>
                </tbody>
            </table>
        </div>
        <table class="table">
            <thead class="table-success">
                <tr class="text-center">
                    <th style="color: green;">Copyright © 2023 - Pemrograman Mobile 2</th>
                </tr>
            </thead>
        </table>
</body>

</html>