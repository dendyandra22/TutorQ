<!DOCTYPE html>
<html>

<head>
    <title>Tutor-Q</title>
    <meta charset="utf-8">

    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">

    <link rel="stylesheet" type="text/css" href="css/all.css">
    <meta name="viewport" content="width=device-width, initial-scale=1" charset="utf-8">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="style.css">

</head>

<body>
    <?php session_start(); ?>
    <header>
        <nav class="navbar navbar-expand-lg navbar-dark" style="background-color:#048ece">
            <a class="navbar-brand" href="index.php">Tutor-Q</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse container" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="index.php">Beranda <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="aboutus.php">Tentang Kami</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="tutor.php">Tutor</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="contact.php">Kontak Kami</a>
                    </li>
                </ul>

                <form class="form-inline my-2 my-lg-0">
                    <input class="form-control mr-sm-2 search-box" type="search" placeholder="Cari apa?"
                        aria-label="Search">
                    <button class="btn btn-outline-light my-2 my-sm-0 button-trans" type="submit"><i
                            class="font-color fas fa-search"></i></button>
                </form>
                <p style="color:white;margin:auto 5px;">
                    <?php error_reporting(0);                
                    $nama = $_SESSION['nama'];
                    if($nama){
                    echo "Halo ".$nama;
                    }    
                    ?>
                </p>
                <?php 
                error_reporting(0);                
                $stat = $_SESSION['status'];
                if($stat=='login'){
                $logout = 'Logout';
                $address = 'logout.php';
                }else{
                $logout = 'Login';
                $address = 'login.html';
                }
                ?>
                <form action="<?php echo $address ?>">
                    <input class="btn btn-outline-light my-2 my-sm-0" type="submit" value="<?php echo $logout ?>">
                </form>
                </form>
            </div>
        </nav>
    </header>
    <div class="container">
        <article>
            <div style="border-bottom:1px  solid #bebebe">
                <h1 style="text-align:center;margin-top: 20px">Daftar Tutor</h1>
                <p style="text-align:center;margin-bottom: 0">Berikut tutor-tutor terbaik yang menjadi mitra Tutor-Q</p>
            </div>
            <div class="card-deck" style="margin: 50px 0;">
                <div class="card col-md-3" style="padding:10px;height: 600px">
                    <img src="pas7.jpg" class="card-img-top" alt="..." style="height:65%;width:auto">
                    <div class="card-body">
                        <h5 class="card-title" style="text-align:center"><b>Katya Lischina</b></h5>
                        <p class="card-cap">Tutor Biologi</p>
                        <p class="card-text" style="text-align:justify">Tutor asal Rusia yang menyukai segala sesuatu
                            mengenai biologi
                            dan telah ditekuni sejak kecil.</p>
                        <div class="col-md-3" style="padding-left: 60px">
                            <form action="detail_katya.php" method="POST">
                                <input type="submit" class="btn btn-primary" value="Detail">
                            </form>
                        </div>
                    </div>
                </div>
                <div class="card col-md-3" style="padding:10px">
                    <img src="pas1.jpg" class="card-img-top" alt="..." style="height:75%;width: auto">
                    <div class="card-body">
                        <h5 class="card-title" style="text-align:center"><b>Max Havelaar</b></h5>
                        <p class="card-cap">Tutor Fisika</p>
                        <p class="card-text" style="text-align:justify">Fisika sudah menjadi bagian dari hidup tutor
                            asal Nigeria ini,
                            bahkan hingga dijuluki "Mad Scientist".</p>
                        <div class="col-md-3" style="padding-left: 60px">
                            <a href="#" class="btn btn-primary">Detail</a>
                        </div>
                    </div>
                </div>
                <div class="card col-md-3" style="padding:10px">
                    <img src="pas3.jpg" class="card-img-top" alt="..." style="height:75%;width: auto">
                    <div class="card-body">
                        <h5 class="card-title" style="text-align:center"><b>Ayu Ayuzawa</b></h5>
                        <p class="card-cap">Tutor B.Jepang</p>
                        <p class="card-text" style="text-align:justify">Kecintaan terhadap budaya Jepang memotivasinya
                            untuk menjadi
                            tutor Bahasa Jepang.</p>
                        <div class="col-md-3" style="padding-left: 60px">
                            <a href="#" class="btn btn-primary">Detail</a>
                        </div>
                    </div>
                </div>
                <div class="card col-md-3" style="padding:10px;height:600px">
                    <img src="pas4.jpg" class="card-img-top" alt="..." style="height:75%;width: auto">
                    <div class="card-body">
                        <h5 class="card-title" style="text-align:center"><b>Kim Jong Un</b></h5>
                        <p class="card-cap">Tutor PKN</p>
                        <p class="card-text" style="text-align:justify">Tegas namun ramah senyum ciri khas dari tutor
                            gagah lulusan Pyongyang
                            Unversity ini .</p>
                        <div class="col-md-3" style="padding-left: 60px">
                            <a href="#" class="btn btn-primary">Detail</a>
                        </div>
                    </div>
                </div>
                <div class="card-deck" style="margin: 50px 0;">
                    <div class="card col-md-3" style="padding:10px;height: 600px">
                        <img src="pas5.jpg" class="card-img-top" alt="..." style="height:75%;width: auto">
                        <div class="card-body">
                            <h5 class="card-title" style="text-align:center"><b>Kim So Hyun</b></h5>
                            <p class="card-cap">Tutor Kimia</p>
                            <p class="card-text" style="text-align:justify">Memiliki minat untuk mengajar menjadi
                                motivasi besar tutor cantik asal
                                Korea Selatan .</p>
                            <div class="col-md-3" style="padding-left: 60px">
                                <form action="detail_hyun.php" method="POST">
                                    <input type="submit" class="btn btn-primary" value="Detail">
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="card col-md-3" style="padding:10px">
                        <img src="pas8.jpg" class="card-img-top" alt="..." style="height:75%;width: auto">
                        <div class="card-body">
                            <h5 class="card-title" style="text-align:center"><b>Adolf Hitler</b></h5>
                            <p class="card-cap">Tutor Sejarah</p>
                            <p class="card-text" style="text-align:justify">Sebuah kebanggaan bisa menjadi tutor sejarah
                                menurut tutor
                                dengan kumisnya yang khas ini.</p>
                            <div class="col-md-3" style="padding-left: 60px">
                                <a href="detail_adolf.php" class="btn btn-primary">Detail</a>
                            </div>
                        </div>
                    </div>
                    <div class="card col-md-3" style="padding:10px;height:600px">
                        <img src="pas10.jpg" class="card-img-top" alt="..." style="height:75%;width: auto">
                        <div class="card-body">
                            <h5 class="card-title" style="text-align:center"><b>Bill Gates</b></h5>
                            <p class="card-cap">Tutor TIK</p>
                            <p class="card-text" style="text-align:justify">Cerdas dan ramah menjadi ciri khas tutor
                                asal Amerika yang suka
                                mengotak-atik komputer .</p>
                            <div class="col-md-3" style="padding-left: 60px">
                                <a href="#" class="btn btn-primary">Detail</a>
                            </div>
                        </div>
                    </div>
                    <div class="card col-md-3" style="padding:10px">
                        <img src="pas9.jpg" class="card-img-top" alt="..." style="height:80%;width: auto">
                        <div class="card-body">
                            <h5 class="card-title" style="text-align:center"><b>Melody Nurrahmadani</b></h5>
                            <p class="card-cap">Tutor B.Indonesia</p>
                            <p class="card-text" style="text-align:justify">Cinta pada bahasa
                                memotivasinya untuk menjadi
                                tutor Bahasa Indonesia.</p>
                            <div class="col-md-3" style="padding-left: 60px">
                                <a href="#" class="btn btn-primary">Detail</a>
                            </div>
                        </div>
                    </div>
        </article>
    </div>

    <footer>
        <footer>
            <div class="row">
                <div class="footer col-sm-12">
                    <div class="col" style="margin: auto">
                        <div class="row">
                            <div class="foot-art col-sm-4 footer-art">
                                <h5 style="text-align:center">Lokasi <i class="fas fa-map-marker-alt"></i> </h5>
                                <p class="socmed"> Telkom Unversity</p>
                                <p class="socmed">Dayeuhkolot, West Java</p>
                            </div>
                            <div class="footer-art col-sm-4">
                                <h5 style="text-align:center">Sosial Media</h5>
                                <div class="socmed">
                                    <button class="btn my-2 my-sm-0 socmedlogo" type="submit">
                                        <i class="fab fa-twitter"></i>
                                    </button>
                                    <button class="btn my-2 my-sm-0 socmedlogo" type="submit">
                                        <i class="fab fa-google-plus-g"></i>
                                    </button>
                                    <button class="btn my-2 my-sm-0 socmedlogo" type="submit">
                                        <i class="fab fa-facebook-square"></i>
                                    </button>
                                    <button class="btn my-2 my-sm-0 socmedlogo" type="submit">
                                        <i class="fab fa-instagram"></i>
                                    </button>
                                </div>
                            </div>
                            <div class="footer-art col-sm-4">
                                <h5 style="text-align:center">Siapa Kami</h5>
                                <p class="socmed">We're still developing for better future</p>
                            </div>
                        </div>
                    </div>
                </div>
        </footer>
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
            integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
        </script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
            integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
        </script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
            integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
        </script>
</body>

</html>