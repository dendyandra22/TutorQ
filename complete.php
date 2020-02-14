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
<body style="background-image:url(back2.png)">
    <article>
        <?php
        session_start();
        unset($_SESSION['tutor']);
        ?>
        <section style="margin-top:100px">
            <div class="card text-center">
                <div class="card-body">
                    <h1 class="card-title">Pembayaran Telah Selesai</h1>
                    <p class="card-text">Terima Kasih telah menggunakan layanan kami</p>
                    <a href="index.php" class="btn btn-primary">Kembali ke Beranda</a>
                </div>
            </div>
        </section>
        

    </article>


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