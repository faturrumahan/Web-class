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

    <!-- jumbotron -->
    <div class="jumbotron jumbotron-fluid">
        <div class="container">
            <h1 class="display-4">TOKO KOMPUTER <span>TERMURAH</span><br> DAN <span>TERPERCAYA</span></h1>
        </div>
    </div>

    <!-- konten -->
    <div class="container">
        <!-- layanan -->
        <div class="row justify-content-center">
            <div class="col-10 layanan">
                <div class="row">
                    <div class="col-lg">
                        <img src="img/harware.png" alt="hardware" class="float-left">
                        <h4>Hardware</h4>
                        <p>Sparepart, Laptop, Aksesoris, dll</p>
                    </div>
                    <div class="col-lg">
                        <img src="img/os.png" alt="software" class="float-left">
                        <h4>Software</h4>
                        <p>OS, Aplikasi, Game, dll</p>
                    </div>
                    <div class="col-lg">
                        <img src="img/service.png" alt="service" class="float-left">
                        <h4>Service</h4>
                        <p>Reparasi, Instalasi, dll</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- produk -->
        <h1>Kategori Produk</h1> <br>
        <div class="row produk">
            <div class="col-lg-3 col-md-3 col-sm-6">
                <div class="card h-100">
                    <a href="#"><img class="card-img-top" src="img/laptop.jpg" alt="" height="145px"></a>
                    <div class="card-body">
                        <h4 class="card-title">
                            <a href="produk.php?kat=<?=1?>">Laptop</a>
                        </h4>
                        <p class="card-text">Gaming, Mainstream, 2in1, dll</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-6">
                <div class="card h-100">
                    <a href="#"><img class="card-img-top" src="img/aksesoris.jpg" alt="" height="145px"></a>
                    <div class="card-body">
                        <h4 class="card-title">
                            <a href="produk.php?kat=<?=2?>">Aksesoris</a>
                        </h4>
                        <p class="card-text">Keyboard, Mouse, Audio, dll</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-6">
                <div class="card h-100">
                    <a href="#"><img class="card-img-top" src="img/penyimpanan.jpeg" alt="" height="145px"></a>
                    <div class="card-body">
                        <h4 class="card-title">
                            <a href="produk.php?kat=<?=3?>">Penyimpanan</a>
                        </h4>
                        <p class="card-text">HDD, SSD, dll</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-6">
                <div class="card h-100">
                    <a href="#"><img class="card-img-top" src="img/software.png" alt="" height="145px"></a>
                    <div class="card-body">
                        <h4 class="card-title">
                            <a href="produk.php?kat=<?=4?>">Software</a>
                        </h4>
                        <p class="card-text">Aplikasi, OS, dll</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="row produk">
            <div class="col-lg-3 col-md-3 col-sm-6">
                <div class="card h-100">
                    <a href="#"><img class="card-img-top" src="img/ram.jpg" alt="" height="145px"></a>
                    <div class="card-body">
                        <h4 class="card-title">
                            <a href="produk.php?kat=<?=5?>">Memori</a>
                        </h4>
                        <p class="card-text">RAM DIMM & SODIMM</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-6">
                <div class="card h-100">
                    <a href="#"><img class="card-img-top" src="img/monitor.jpg" alt="" height="145px"></a>
                    <div class="card-body">
                        <h4 class="card-title">
                            <a href="produk.php?kat=<?=6?>">Monitor</a>
                        </h4>
                        <p class="card-text">Gaming, Multimedia, dll</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-6">
                <div class="card h-100">
                    <a href="#"><img class="card-img-top" src="img/jaringan.jpg" alt="" height="145px"></a>
                    <div class="card-body">
                        <h4 class="card-title">
                            <a href="produk.php?kat=<?=7?>">Jaringan</a>
                        </h4>
                        <p class="card-text">Router, Modem, LAN, dll</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-6">
                <div class="card h-100">
                    <a href="#"><img class="card-img-top" src="img/lainnya.jpg" alt="" height="145px"></a>
                    <div class="card-body">
                        <h4 class="card-title">
                            <a href="produk.php?kat=<?=8?>">Lainnya</a>
                        </h4>
                        <p class="card-text">Sparepart, dll</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- About -->
        <h1 style="text-align: right;">Tentang Kami</h1> <br>
        <div class="row about">
            <div class="col">
                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Sint, molestias sunt corrupti distinctio
                    vero perspiciatis earum autem consectetur inventore adipisci nisi, unde fuga? Cumque.</p>
                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Harum quis, quas doloremque blanditiis
                    culpa iste aliquid dolore ex perferendis, necessitatibus dicta dolorum! Nam, non ut, pariatur
                    voluptate expedita laudantium reprehenderit quidem, sint libero praesentium quam. Perferendis.</p>
                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Et, enim quia velit fugiat, omnis
                    dignissimos odit quas optio dolores vero consequuntur!</p>
            </div>
            <div class="col">
                <img src="img/about.jpg" alt="about" class="float-right">
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
                                    alt="" width="50px" ></a>
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