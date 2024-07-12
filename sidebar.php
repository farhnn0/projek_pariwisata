<!-- sidebar navigasi -->
<div class="container-lg">
    <div class="row">
        <div class="col-lg-3">
            <ul class="nav nav-pills flex-column mt-5">
                <li class="nav-item">
                    <a class="nav-link ps-2 <?php echo ((isset($_GET['x']) && $_GET['x'] == 'home') || !(isset($_GET['x']))) ? 'active link-light' : 'link-dark'; ?>" aria-current="page" href="home"><i class="bi bi-house-door-fill"></i> Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link ps-2 <?php echo (isset($_GET['x']) && $_GET['x'] == 'destination') ? 'active link-light' : 'link-dark'; ?>" href="
                        destination"><i class="bi bi-award-fill"></i> Wisata Unggulan</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link ps-2 <?php echo (isset($_GET['x']) && $_GET['x'] == 'blog') ? 'active link-light' : 'link-dark'; ?>" href="blog"><i class="bi bi-pc-display"></i> Blog</a>
                </li>
                <?php if ($hasil['level'] == 1) { ?>
                    <li class="nav-item">
                        <a class="nav-link ps-2 <?php echo (isset($_GET['x']) && $_GET['x'] == 'package') ? 'active link-light' : 'link-dark'; ?>" aria-current="page" href="package"><i class="bi bi-box-fill"></i> Paket
                            Wisata</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link ps-2 <?php echo (isset($_GET['x']) && $_GET['x'] == 'report') ? 'active link-light' : 'link-dark'; ?>"" href=" report"><i class="bi bi-journal-text"></i> Report</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link ps-2 <?php echo (isset($_GET['x']) && $_GET['x'] == 'user') ? 'active link-light' : 'link-dark'; ?>" href="
                        user"><i class="bi bi-person-plus-fill"></i> User</a>
                    </li>
                <?php } ?>
            </ul>
        </div>
        <!-- sidebar navigasi end -->