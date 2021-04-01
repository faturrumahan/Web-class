<?php
    session_start();
    if (!isset($_SESSION["login"])) {
		header("location: login.php");
	}

    $id = "root";
    $pass = "";
    $db = "becomp";
    $server = "localhost";
    
    $link = mysqli_connect($server,$id,$pass,$db);

    if (isset($_POST["submit"])) {
      $nama = $_POST["nama"];
      $kategori = $_POST["kategori"];
      $deskripsi = $_POST["deskripsi"];
      $harga = $_POST["harga"];
      $foto = $_FILES['foto']['tmp_name'];

      if ($kategori > 0) {
        $sql = "insert into produk values 
                ('','$nama','$kategori','$deskripsi','$harga','".addslashes(file_get_contents($foto))."')
                ";
        mysqli_query($link,$sql);
    
        //cek
        if (mysqli_affected_rows($link) > 0) {  
          echo "
                <script>
                  alert('data berhasil ditambahkan');
                  document.location.href = 'admin.php';
                </script>
               ";
        } 
        else {
          echo "
                <script>
                  alert('data gagal ditambahkan');
                  document.location.href = 'admin.php';
                </script>
               ";
        }
          
      }
      $error = true;     
    }
?>

<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
    integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

  <!-- custom css -->
  <link rel="stylesheet" href="style.css">

  <title>BeComp Store</title>
</head>

<body>
  <!-- navbar -->
  <nav class="navbar navbar-dark bg-dark fixed-top">
    <div class="container">
      <a class="navbar-brand">BeComp</a>
      <a class="navbar-item btn btn-danger" href="logout.php" role="button">Logout</a>
    </div>
  </nav>

  <!-- konten -->
  <div class="container">
    <h1 style="margin-top: 90px; text-align: center;">Tambah Produk</h1> <br>
    <!-- form -->
    <div class="input row justify-content-center">
      <div class="col-8">
        <form action="" method="post" enctype="multipart/form-data">
          <div class="form-group">
            <label for="nama">Nama</label>
            <input type="text" class="form-control" name="nama" id="nama" placeholder="ex : Headset Hyperx Cloud Alpha"
              required>
          </div>
          <div class="row">
            <div class="form-group col-6">
              <label for="kategori">Kategori</label>
              <select class="form-control" name="kategori" id="kategori" required>
                <option selected value="0">Pilih Kategori</option>
                <option value="1">Laptop</option>
                <option value="2">Aksesoris</option>
                <option value="3">penyimpanan</option>
                <option value="4">Software</option>
                <option value="5">Memori</option>
                <option value="6">Monitor</option>
                <option value="7">Jaringan</option>
                <option value="8">Lainnya</option>
              </select>
            </div>
            <div class="form-group col">
              <label for="harga">Harga</label>
              <div class="input-group">
                <div class="input-group-prepend">
                  <div class="input-group-text">Rp</div>
                </div>
                <input type="number" class="form-control" name="harga" id="harga" placeholder="" required>
              </div>
            </div>
          </div>
          <div class="form-group">
            <label for="deskripsi">Detail</label>
            <textarea class="form-control" name="deskripsi" id="deskripsi" placeholder="Spesifikasi, dll" rows="5"
              required></textarea>
          </div>
          <div class="form-group">
            <label for="foto">Foto Produk</label>
            <input type="file" class="form-control-file" name="foto" id="foto" required>
          </div>
          <button type="submit" class="btn btn-primary btn-lg btn-block" name="submit">Submit</button>
          <?php if (isset($error)) : ?>
                <p>Pilih kategori terlebih dulu</p>
          <?php endif; ?>
        </form>
      </div>
    </div>
  </div>

  <!-- footer -->
  <div class="foot">
    <footer class="bg-dark text-lg-start">
      <!-- Grid container -->
      <div class="container p-4">
        <!--Grid row-->
        <div class="row">
          <!--Grid column-->
          <div class="col-lg-6 col-md-12 mb-4 mb-md-0">
            <h5>BeComp</h5>
            <img src="img/wa.png" alt="" width="20px" class="float-left">
            <p>0815 - 2772 - 3233</p>
            <img src="img/store.png" alt="" width="20px" class="float-left">
            <p>Jl. Cempaka Indah no. 29, Yogyakarta</p>
            <img src="img/mail.png" alt="" width="20px" class="float-left">
            <p>Sales@becomp.co.id</p>
          </div>
          <!--Grid column-->

          <!--Grid column-->
          <div class="col-lg-6 col-md-12 mb-4 mb-md-0">
            <h5 style="text-align: right;">Official Partner</h5>
            <div class="brand">
              <a href="https://www.asus.com/id/" target="_blank"><img src="img/brand/asus.png" alt="" width="150px"></a>
              <br>
              <a href="https://www.hyperxgaming.com/unitedstates/us" target="_blank"><img src="img/brand/hyperx.png"
                  alt="" width="150px"></a> <br>
              <a href="https://www.digitalalliance.co.id/" target="_blank"><img src="img/brand/da.png" alt=""
                  width="50px"></a>
            </div>
          </div>
          <!--Grid column-->
        </div>
        <!--Grid row-->
      </div>
      <!-- Grid container -->

      <!-- Copyright -->
      <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2)">
        © 2020 Copyright:
        <a class="text-light" href="/">Becomp.co.id</a>
      </div>
      <!-- Copyright -->
    </footer>
  </div>


  <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
    integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
  </script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous">
  </script>

</body>

</html>