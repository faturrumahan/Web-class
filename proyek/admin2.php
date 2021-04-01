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
    $kat = $_GET['id'];
	$sql = "select * from produk where kategoriID = $kat";
    $data_pro = mysqli_query($link,$sql);

    $query = "select * from kategori where kategoriID = $kat";
    $result = mysqli_query($link, $query);
    $title = mysqli_fetch_object($result);
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
        <h1 style="margin-top: 90px;">Produk
            <?=$title -> nama?>
        </h1> <br>
        <!-- kategori -->
            <table class="table table-striped" style="margin-bottom: 50px;">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Produk</th>
                        <th scope="col">Harga</th>
                        <th scope="col"></th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        while ($row=mysqli_fetch_object($data_pro)) {        
                    ?>
                    <tr>
                        <th scope="row"><?=$row -> id?></th>
                        <td><a href="detail.php?det=<?=$row -> id?>"><?=$row -> nama?></a></td>
                        <td>Rp <?=$row -> harga?></td>
                        <td>
                            <a href="edit.php?id=<?=$row -> id?>" class="btn btn-success" style="margin-right: 10px;" role="button">Edit</a>
                            <a href="hapus.php?id=<?=$row -> id?>" class="btn btn-outline-danger" style="margin-right: -70px;" role="button" onclick="return confirm('yakin?');">Delete</a>
                        </td>
                    </tr>
                    <?php
                        }
                    ?>
                </tbody>
            </table>
            <a href="tambah.php" class="btn btn-primary btn-lg btn-block" style="margin-bottom: 30px;" role="button">Tambah</a>
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
                            <a href="https://www.asus.com/id/" target="_blank"><img src="img/brand/asus.png" alt=""
                                    width="150px"></a> <br>
                            <a href="https://www.hyperxgaming.com/unitedstates/us" target="_blank"><img
                                    src="img/brand/hyperx.png" alt="" width="150px"></a> <br>
                            <a href="https://www.digitalalliance.co.id/" target="_blank"><img src="img/brand/da.png"
                                    alt="" width="50px"></a>
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