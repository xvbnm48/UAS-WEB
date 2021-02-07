<!DOCTYPE html>
<html>
<head>
<title>Home</title>
    <!-- Load file CSS Bootstrap offline -->
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="index.css">
    <script src="assets/jquery/jquery-3.5.1.min.js"></script>
</head>
<body >
    <nav class="navbar navbar-expand-lg navbar-light" animated fadeInOut>
        <a class="navbar-brand" href="#">
            <img src="assets/img/logo.png" width="30" height="30" alt="">
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ml-auto">
            <li class="nav-item active">
                <a class="nav-link" href="#">Beranda <span class="sr-only">(current)</span></a>
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
    </nav> -->
    
    <div id="jumbo" class="jumbotron jumbotron-fluid">
        <div class="container">
            <h1 class="display-4">Lindungi <span>keluargamu</span> , daftar <span> BPJS </span>  sekarang</h1>
            <form action="login.php" method="POST">
            <button type="submit" name="submit" class="btn btn-primary">DAFTAR </button>
            </form>
        </div>
    </div>
    <div class="container">
        <div class="row  testimoni1">
            <div class="col-6">
                <img src="assets/img/testi.jpg" class="img-fluid" alt="">
            </div>
            <div class="col-4">
            <h3>Testimoi masyarakat menggunakan <spa>BPJS</spa></h3>
            <p>tunggu apalagi, segera daftarkan keluargamu dengan <span>BPJS</span></p>
            <form action="login.php" method="GET">
            <button type="submit" name="submit" class="btn btn-primary">DAFTAR SEKARANG</button>
            </form>
            </div>
        </div>
    </div>

    <div class="row footer">
        <div class="col text-center">
        <p class="mt-5 mb-3 text-muted">Copyright &copy; All Right Reserved by Fariz 2020-2021</p>
  
        </div>
    </div>
    <script>
        $(document).ready(function(){
        $("button").click(function(){
            $("#jumbo").fadeIn();
        });
        });
    </script>
</body>
</html>