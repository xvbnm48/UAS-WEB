<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="index.css">
    <title>DARTAR BPJS</title>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light">
        <a class="navbar-brand" href="index.php">
            <img src="assets/img/logo.png" width="30" height="30" alt="">
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ml-auto">
            <li class="nav-item active">
                <a class="nav-link" href="index.html">Beranda <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="profil.php">Profil Peserta</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Berita</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Jaminan Kesehatan</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Layanan</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Informasi publik</a>
            </li>
            </ul>
        </div>
    </nav> 
    
        <div class="container">
            <h3>Daftar nama peserta BPJS yang telah terdaftar</h3>
            <table class="table" border="1">
            <tr><th>NAMA</th><th>UMUR</th><th>NIK</th><th>ALAMAT</th></tr>
                <?php
                include "koneksi.php";
                $peserta = mysqli_query($con, "SELECT * from peserta");
                $no=1;
                foreach ($peserta as $row){
                    echo "<tr>
                        <td>".$row['nama']."</td>
                        <td>".$row['umur']."</td>
                        <td>".$row['nik']."</td>
                        <td>".$row['alamat']."</td>
                        </tr>";
                    $no++;
                }
                ?>
            </table>
        </div>    
        
</body>
</html>