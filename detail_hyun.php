<?php
    session_start();
    error_reporting(0);
    $nama = $_SESSION['nama'];
    // $tutor = $_POST['Kim So Hyun'];
    $link = mysqli_connect("localhost","root","","tutorq");
    $query = " SELECT * FROM siswa WHERE nama = '$nama' ";
    $query2 = "SELECT * FROM tutor WHERE nama = 'Kim So Hyun'";

    // trim($query);
    
    $result = mysqli_query($link,$query);
    $result2 = mysqli_query($link,$query2);
    
    if(mysqli_num_rows($result) )
    {
        // echo "Berhasil ";
        $data = mysqli_fetch_assoc( $result );
    }
    if(mysqli_num_rows($result2) )
    {
        // echo "Berhasil ";
        $data2 = mysqli_fetch_assoc( $result2 );
    }
?>
<!DOCTYPE html>
<html>

<head>
    <title>Tutor-Q</title>
    <link rel="stylesheet" type="text/css" href="css/all.css">
  <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1" charset="utf-8">

</head>

<body>
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
            <h1 style="text-align:center;margin-top: 20px">Detail Tutor</h1>
            <div class="row">
                <div class="col-md-1" id="left-form-box" style="height:600px"></div>
                <div class="col-md-11" id="form-box"  style="height:600px;margin-bottom: 50px">
                    <div class="row">
                        <div class="col-md-3">
                            <img src="pas5.jpg" style="border: solid  #bebebe">
                        </div>
                        <div class="col-md-9 ">
                            <p style="text-align:justify"> Lorem ipsum dolor sit amet consectetur adipisicing elit.
                             Ut excepturi incidunt corrupti veritatis, accusantium nisi similique eum quas tenetur ducimus quo, quam reprehenderit esse saepe? 
                             Excepturi nesciunt nobis quia aspernatur.</p>
                            <table class="table table-striped">
                                <table class="table table-striped">
                                    <tbody>
                                        <tr>
                                            <th scope="row" style="width:170px" >Nama</th>
                                            <th style="width:130px">:</th>
                                            <td style="width:auto"><?php echo $data2['nama']?></td>                                            
                                        </tr>
                                        <tr>
                                            <th scope="row">Jenis Kelamin </th>
                                            <th>:</th>
                                            <td><?php echo $data2['jk']?></td>
                                        </tr>
                                        <tr>
                                            <th scope="row">Mata Pelajaran</th>
                                            <th>:</th>
                                            <td><?php echo $data2['matpel']?></td>

                                        </tr>
                                        <tr>
                                            <th scope="row">Jenjang :</th>
                                            <th style="width:130px">:</th>
                                            <td><?php echo $data2['jenjang']?></td>
                                        </tr>
                                        <tr>
                                            <th scope="row">Tarif :</th>
                                            <th style="width:130px">:</th>
                                            <td>Rp.<?php echo $data2['tarif']?> per Pertemuan</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">Domisili :</th>
                                            <th style="width:130px">:</th>
                                            <td><?php echo $data2['domisili']?></td>
                                        </tr>
                                        <tr>
                                            <th scope="row">Alamat :</th>
                                            <th style="width:130px">:</th>
                                            <td><?php echo $data2['alamat']?></td>
                                        </tr>
                                    </tbody>
                                </table>
                                <form action="payment.php">
                                        <div class="form-group row">
                                            <div class="col-md-4" id="cont-center"></div>
                                            <div class="col-md-4">
                                                <input type="submit" class="btn btn-success col-md-12" value="Pilih Tutor">
                                                <?php
                                                session_start();
                                                $_SESSION['tutor'] = 'Kim So Hyun';
                                            ?>
                                            </div>
                                            <div class="col-md-4" id="cont-center"></div>
                                        </div>
                                    </form>
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