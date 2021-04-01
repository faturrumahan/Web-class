<?php
    $id = "root";
    $pass = "";
    $db = "becomp";
    $server = "localhost";

    $link = mysqli_connect($server,$id,$pass,$db);

    $det = $_GET['det'];
	$sql = "select * from produk where id = $det";
    $data_pro = mysqli_query($link,$sql);
    $row=mysqli_fetch_object($data_pro);
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
            <a class="navbar-brand" href="index.php">BeComp</a>
            <form class="form-inline" action="produk.php" method="post">
                <input class="form-control" type="search" placeholder="Search" aria-label="Search" name="search" autocomplete="off">
            </form>
            <a class="navbar-item btn btn-primary" href="login.php" role="button">Admin</a>
        </div>
    </nav>

    <!-- konten -->
    <div class="container">
        <div class="row about">
            <div class="col" style="margin-top: 120px;">
                <?='<img src="data:image/jpeg;base64,'.base64_encode( $row -> gambar ).'"/>'?>
            </div>
            <div class="col">
                <h1 style="margin-top: 90px; margin-bottom: 20px; color: black;"><?=$row -> nama?></h1>
                <p><?=$row -> deskripsi?></p> <br> <br>
                <div class="row">
                    <div class="col">
                        <h3 style="color: black;">Rp <?=$row -> harga?></h3>
                    </div>
                    <div class="col">
                    <a href="
                            https://mail.google.com/mail/?view=cm&fs=1&to=sales@becomp.com&su=Ketersediaan+Produk&body=Halo,+apakah+produk+<?=$row -> nama?>+tersedia?
                        " target="_blank" class="btn btn-success" role="button">Hubungi Kami</a>
                    </div>
                </div>              
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