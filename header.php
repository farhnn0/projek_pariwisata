<!-- header start -->
<nav class="navbar navbar-expand-md bg-dark navbar-dark mynavbar">
        <div class="container-fluid">
            <a class="navbar-brand" href="index.php">The Light of Aceh</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link active nav" aria-current="page" href="index.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link nav" href="blog.php">Blog</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle nav" href="#" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            Gallery
                        </a>
                        <ul class="dropdown-menu dropdown-menu-end mt-2">
                            <li><a class="dropdown-item" href="food.php">Food</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item" href="video.php">Video Documentation</a></li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown nav-white">
                        <a class="nav-link dropdown-toggle nav" href="#" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            <?php  echo $hasil['email']; ?>
                        </a>
                        <ul class="dropdown-menu dropdown-menu-end mt-2">
                            <li><a class="dropdown-item" href="#"><i class="bi bi-person-circle"></i> Profil</a></li>
                            <hr>
                            <li><a class="dropdown-item" href="#"><i class="bi bi-gear-fill"></i> Pengaturan</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item" href="logout"><i class="bi bi-box-arrow-left"></i> Logout</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- header end -->
