
<?php
    // session_start();
    if(empty($_SESSION['email_pariwisata'])){
        header('location:login ');
    }

    include "proses/connect.php";
    $query = mysqli_query($conn,"SELECT * FROM tbUser WHERE email = '$_SESSION[email_pariwisata]'");
    $hasil = mysqli_fetch_array($query);

?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>The light of Aceh</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <link rel="icon" href="assets/Logo-The-Light-of-Aceh.jpeg">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
</head>

<body>

    <!-- header start -->
    <?php
    include "header.php";
    ?>
    <!-- header end -->

    <!-- carousel start -->
    <div id="carouselExampleCaptions" class="carousel slide">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active"
                aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1"
                aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2"
                aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="assets/Masjid-Baiturrahman-Aceh-3-2048x1152.jpg" class="d-block w-100"
                    alt="Mesjid Baiturahman Banda Aceh">
                <div class="carousel-caption d-none d-md-block">
                    <h5>Mesjid Baiturahman Banda Aceh</h5>
                    <p>Masjid Raya Baiturrahman, Banda Aceh salah satu destinasi wisata religi favorit wisatawan di Kota
                        Banda Aceh. Masjid bersejarah ini bukan hanya ikon Serambi Mekkah, tapi juga simbol perjuangan
                        dan penyebaran Islam di Indonesia hingga semenjung Asia Tenggara.</p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="assets/Hutan_Gunung_Leuser_Aceh.jpg" class="d-block w-100"
                    alt="Taman Nasional Gunung Leuser ">
                <div class="carousel-caption d-none d-md-block">
                    <h5>Taman Nasional Gunung Leuser</h5>
                    <p>Taman Nasional Gunung Leuser merupakan laboratorium alam yang kaya keanekaragaman hayati. Taman
                        nasional ini merupakan habitat sebagian besar fauna, mulai dari mamalia, burung, reptil,
                        ampibia, ikan, dan invertebrata.</p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="assets/pulobanyak-scaled.jpg" class="d-block w-100" alt="Pulau Banyak di Aceh Singkil">
                <div class="carousel-caption d-none d-md-block">
                    <h5>Pulau Banyak di Aceh Singkil</h5>
                    <p>Pulau Banyak di Aceh Singkil adalah destinasi wisata yang belum banyak dikenal. Namun, keindahan
                        alam dan kehidupan lautnya yang kaya menjadikannya tempat yang harus dikunjungi. Pecinta alam
                        dan penggemar snorkeling akan menemukan surga di sini.</p>
                </div>
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions"
            data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions"
            data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
    <!-- carousel end -->


    <!-- sidebar navigasi -->
    <?php
    include "sidebar.php";
    ?>
    <!-- sidebar navigasi end -->


    <!-- content -->
    <?php
        include  $page;
    ?>
    <!-- end content -->

    <div class="kaki">
        <div class="text-center bg-dark fixed-bottom footer">
            &copy;2024 The Light of Aceh
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
            crossorigin="anonymous"></script>
</body>

</html>