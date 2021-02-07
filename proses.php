<?php
    //membuat koneksi
    $con = mysqli_connect("localhost", "root", "", "bpjs");

    
    //memasukkan data ke array
        $nama       = $_POST['nama'];
        $umur         = $_POST['umur'];
        $nik     = $_POST['nik'];
        $alamat    = $_POST['alamat'];

        $total = count($nama);


    //melakukan perulangan input
    for($i=0; $i<$total; $i++){

        mysqli_query($con, "insert into peserta set
            nama    = '$nama[$i]',
            umur      = '$umur[$i]',
            nik  = '$nik[$i]',
            alamat = '$alamat[$i]'
        ");
    }

    //kembali ke halaman sebelumnya
    header("location: profil.php");