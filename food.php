<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>The light of Aceh</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="kalender.css">
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
    <div class="col-lg-9">
        <div id="hero">
            <div class="hero w-100 h-100 p-5 mx-auto text-center d-flex justify-content-center
                    align-items-center">
                <main>
                    <h2>destinasi sorotan</h2>
                </main>
            </div>
        </div>
        <div class="container mt-1">
            <div class="row">
                <div class="col-lg-3 col-md-4 col-6 mb-4">
                    <div class="card">
                        <img src="assets/sabang.jpg" class="card-img-top" alt="Sabang">
                        <div class="card-body">
                            <h5 class="card-title">Sabang</h5>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-6 mb-4">
                    <div class="card">
                        <img src="assets/Pulo Banyak.webp" class="card-img-top" alt="Pulo Banyak">
                        <div class="card-body">
                            <h5 class="card-title">Pulo Banyak</h5>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-6 mb-4">
                    <div class="card">
                        <img src="assets/takengon.jpg" class="card-img-top" alt="Takengon">
                        <div class="card-body">
                            <h5 class="card-title">Takengon</h5>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-6 mb-4">
                    <div class="card">
                        <img src="assets/lhoknga.jpeg" class="card-img-top" alt="Lhoknga">
                        <div class="card-body">
                            <h5 class="card-title">Lhoknga</h5>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-6 mb-4">
                    <div class="card">
                        <img src="assets/museum tsunami.jpeg" class="card-img-top" alt="Museum Tsunami">
                        <div class="card-body">
                            <h5 class="card-title">Museum Tsunami</h5>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-6 mb-4">
                    <div class="card">
                        <img src="assets/pltd apung.jpg" class="card-img-top" alt="PLTD Apung 1">
                        <div class="card-body">
                            <h5 class="card-title">PLTD Apung 1</h5>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-6 mb-4">
                    <div class="card">
                        <img src="assets/baiturrahman.jpg" class="card-img-top" alt="Mesjid Raya Baiturrahman">
                        <div class="card-body">
                            <h5 class="card-title">Mesjid Raya</h5>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-6 mb-4">
                    <div class="card">
                        <img src="assets/Titik Nol Kilometer Indonesia.jpg" class="card-img-top"
                            alt="Tugu 0 km Indonesia">
                        <div class="card-body">
                            <h5 class="card-title">Tugu 0 km</h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- end content -->
    </div>
    </div>
    <!-- card end -->
    <div class="kaki">
        <div class="text-center bg-dark fixed-bottom footer">
            &copy;2024 The Light of Aceh
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
            crossorigin="anonymous"></script>
</body>

</html>