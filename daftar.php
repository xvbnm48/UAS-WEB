<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="index.css">
    <script src="assets/jquery/jquery-3.5.1.min.js"></script>
    <title>Daftar BPJS </title>
</head>
<body>
<!DOCTYPE html>
<html>
<head>
<title>Form Pendaftaran Anggota</title>
    <!-- Load file CSS Bootstrap offline -->
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="index.css">
</head>
<body >
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
                <a class="nav-link" href="index.php">Beranda <span class="sr-only">(current)</span></a>
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
        <div class="panel panel-default">
            <div class="panel-heading">Form Pendaftaran BPJS/div>
            <div class="panel-body">
            <!-- membuat form  -->
            <!-- gunakan tanda [] untuk menampung array  -->
                <form action="proses.php" method="POST">
                <div class="control-group after-add-more">
                    <label>Nama</label>
                    <input type="text" name="nama[]" class="form-control">
                    <label>Umur</label>
                    <input type="text" name="umur[]" class="form-control">  
                    <label>NIK</label>
                    <input type="text" name="nik[]" class="form-control">
                    <label>alamat</label>
                    <input type="text" name="alamat[]" class="form-control">
                    <br>
                    <button class="btn btn-success add-more" type="button">
                    <i class="glyphicon glyphicon-plus"></i> Add
                    </button>
                    <hr>
                </div>
                <button class="btn btn-success" type="submit">Submit</button>
                </form>

                <!-- class hide membuat form disembunyikan  -->
                <!-- hide adalah fungsi bootstrap 3, klo bootstrap 4 pake invisible  -->
                <div class="copy hide">
                    <div class="control-group">
                    <label>Nama</label>
                    <input type="text" name="nama[]" class="form-control">
                    <label>Umur</label>
                    <input type="text" name="umur[]" class="form-control">
                    <label>NIK</label>
                    <input type="text" name="nik[]" class="form-control">
                    <label>alamat</label>
                    <input type="text" name="alamat[]" class="form-control">
                    <br>
                    <button class="btn btn-danger remove" type="button"><i class="glyphicon glyphicon-remove"></i> Remove</button>
                    <hr>
                    </div>
                </div>
                </div>
        </div>
    </div>
    </div>
<!-- fungsi javascript untuk menampilkan form dinamis  -->
<!-- penjelasan :
saat tombol add-more ditekan, maka akan memunculkan div dengan class copy -->
    <div class="row footer">
        <div class="col text-center">
        <p class="mt-5 mb-3 text-muted">Copyright &copy; All Right Reserved by Fariz 2020-2021</p>
  
        </div>
    </div>
<script type="text/javascript">
    $(document).ready(function() {
      $(".add-more").click(function(){ 
          var html = $(".copy").html();
          $(".after-add-more").after(html);
      });

      // saat tombol remove dklik control group akan dihapus 
      $("body").on("click",".remove",function(){ 
          $(this).parents(".control-group").remove();
      });
    });
</script>
</body>
</html>
</body>
</html>