<!DOCTYPE html>
<html>

<head>
    <title>Tutor-Q</title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="stylesheet" type="text/css" href="css/all.css">
    <meta name="viewport" content="width=device-width, initial-scale=1" charset="utf-8">
    
</head>

<body>
        

    <?php
    error_reporting(0);
    session_start();
    $nama = $_SESSION['nama'];
    $tutor  = $_SESSION['tutor'];
    $link = mysqli_connect("localhost","root","","tutorq");
    $query = " SELECT * FROM siswa WHERE nama = '$nama' ";
    $query2 = "SELECT * FROM tutor WHERE nama = '$tutor'";

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
                        <a class="nav-link" href="#">Tentang Kami</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="tutor.php">Tutor</a>
                    </li>            
                    <li class="nav-item">
                        <a class="nav-link" href="#">Kontak Kami</a>
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
        <article class="col-md-12 col-sm-12 row" style="margin: 100px auto">
            <div class="col-md-8" id="payment-box">
                <h3 style="text-align: center"><b>Pembayaran</b></h3>
                <p style="text-align: center;">Silahkan isi form pembayaran dengan data yang benar</p>

                <div>
                    <p>Nama : <?php echo $data['nama']?></p>
                    <p>Jenis Kelamin : <?php echo $data['jk']?></p>
                    <p>Jenjang : <?php echo $data['jenjang']?></p>
                    <p>Email : <?php echo $data['email']?></p>
                    <p>Alamat : <?php echo $data['alamat']?></p>
                </div>
                <form id="form" action="complete.php" method="POST" class="col-md-12" style="padding:0" >                                     
                    <div class="row col-md-12">
                        <div class="form-group col-md-3" style="padding:0">
                        <label for="metode">Pembayaran :</label>
                        <select class="form-control">
                            <option>ATM</option>
                            <option>Transfer</option>
                            <option>OVO</option>
                            <option>DANA</option>
                            <option>Alfamart</option>
                            <option>Indomaret</option>
                        </select>
                    </div>
                        <div class="form-group col-md-4" style="padding-left:10px">
                            <label for="jp">Jenis Pembayaran : </label>
                            <select  class="form-control">                               
                                <option>Debit</option>
                                <option>Kredit</option>
                                <option>Giro</option>
                            </select>
                        </div>
                        <div class="form-group col-md-4" style="padding-left:0">
                            <label for="jp">Tanggal Berlangganan :</label>
                            <input type="date" name="Tanggal" class="form-control">                           
                        </div>
                    </div>    
                    <div class="row col-md-12">
                        <div class="form-group col-md-6" style="padding:0 10px 0 0">
                            <label for="jp">Pertemuan / minggu :</label>
                            <select class="form-control 1" name="minggu" onchange="hitung()" id="minggu">
                                <option>1x</option>
                                <option>2x</option>
                                <option>3x</option>
                            </select>
                        </div>
                        <div class="form-group col-md-6" style="padding-left:10px">
                            <label for="jp">Durasi Belajar:</label>
                            <select  class="form-control" id="jam" onchange="hitung()">
                                <option>Pilih durasi</option>
                                <option>1 Jam</option>
                                <option>2 Jam</option>
                                <option>3 Jam</option>
                            </select>
                        </div>
                        
                        <p>Tarif / pertemuan : Rp.</p><p id="tarif"></p>                        
                    </div>                    
                    <div class="form-group form-row col-md-10" style="padding:0;margin:auto">
                        <p for="jp" style="text-align:center">Hari Pertemuan :</p>
                        <div class="form-control">
                            <input type="radio" value="radio" />
                            <label class="hari">Senin</label>
                            <input type="radio" value="radio">
                            <label class="hari">Selasa</label>
                            <input type="radio" value="radio" />
                            <label class="hari">Rabu</label>
                            <input type="radio" value="radio" />
                            <label class="hari">Kamis</label>
                            <input type="radio" value="radio" />
                            <label class="hari">Jumat</label>
                            <input type="radio" value="radio" />
                            <label class="hari">Sabtu</label>
                            <input type="radio" value="radio" />
                            <label class="hari">Minggu</label>

                            
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4" id="cont-center"></div>
                        <div class="col-md-4">
                            <input type="submit" class="btn btn-success" value="Bayar" style="margin-top:10px">
                        </div>
                        <div class="col-md-4" id="cont-center"></div>
                    </div>
                    
                </form>
                
            </div>

            <div class="col-md-4" id="left-form-box">
            	<div class="row">
            		<div class="col-md-1" id="cont-center"></div>
            		<div class="col-md-10">
            			<img style="height: 300px;padding: 10px" <?php echo $data2['foto'] ?>>
            		</div>
            		<div class="col-md-1" id="cont-center"></div>
            	</div>
                <p>Nama Tutor : <?php echo $data2['nama']?> </p>
                <p>Jenis Kelamin : <?php echo $data2['jk']?></p>
                <p>Jenjang : <?php echo $data2['jenjang']?></p>
                <p>Mata Pelajaran : <?php echo $data2['matpel']?> </p>
                <div class="row">
                	<p style="margin-left: 15px">Tarif Tutor : Rp. </p><p id="harga" style="margin-left: 10px"><?php echo $data2['tarif']?></p><p> / Jam</p>
                </div>
                <p>Domisili : <?php echo $data2['domisili']?></p>
                <p>Alamat Tutor : <?php echo $data2['alamat']?> </p>
            </div>
        </article>
    </div>
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
    <script>
    	function validasiJam(n){
    		if(n=='1 Jam'){
           		jam = 1;
           }
           else if(n=='2 Jam'){
           		jam = 2;
           }
           else if(n=='3 Jam'){
           		jam = 3;
           }
           return jam;
    	}

    	function validasiMinggu(m){
    		if(m=='1x'){
           		minggu = 1;
           }
           else if(m=='2x'){
           		minggu = 2;
           }
           else if(m=='3x'){
           		minggu = 3;
           }
           return minggu;
    	}

        function hitung(){
        //<div name="minggu">poi</div>
           var harga = document.getElementById("harga").innerHTML;
           var n = document.getElementById("jam").value;
           var m = document.getElementById("minggu").value;
           var jam,minggu;
           jam = validasiJam(n);
           minggu = validasiMinggu(m);
           document.getElementById("tarif").innerHTML = (jam*harga)*minggu;
        }
        //hitung();
    </script>
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