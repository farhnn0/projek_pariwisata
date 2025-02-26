<?php
include "proses/connect.php";
$query = mysqli_query($conn, "SELECT * FROM tbuser");
while ($record = mysqli_fetch_array($query)) {
    $result[] = $record;
}
?>

<div class="col-lg-9">
    <div id="hero">
        <div class="hero w-100 h-100 p-5 mx-auto text-center d-flex justify-content-center
                    align-items-center">
            <main>
                <h2>Halaman User</h2>
            </main>
        </div>
    </div>
    <div class="row">
        <div class="col d-flex justify-content-end mt-1">
            <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#ModalTambahUser">Add user</button>
        </div>
    </div>
    <!-- Modal tambah user baru-->
    <div class="modal fade" id="ModalTambahUser" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-xl modal-fullscreen-md-down">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Tambah User</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form class="needs-validation" novalidate action="proses/proses_input_user.php" method="POST">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="form-floating mb-3">
                                    <input type="text" required class="form-control" id="floatingInput" placeholder="Your Name" name="nama">
                                    <label for="floatingInput">Nama</label>
                                    <div class="invalid-feedback">
                                        Masukkan nama yang valid!
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-floating mb-3">
                                    <input type="email" required class="form-control" id="floatingInput" placeholder="name@example.com" name="email">
                                    <label for="floatingInput">Email Address</label>
                                    <div class="invalid-feedback">
                                        Masukkan email yang valid!
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-4">
                                <div class="form-floating mb-3">
                                    <select class="form-select" aria-label="Default select example" required name="level">
                                        <option selected hidden value="0">Pilih Level User</option>
                                        <option value="1">Pengunjung</option>
                                        <option value="2">Admin</option>
                                    </select>
                                    <label for="floatingInput">Level User</label>
                                    <div class="invalid-feedback">
                                        Pilih level user!
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-8">
                                <div class="form-floating mb-3">
                                    <input type="number" required class="form-control" id="floatingInput" placeholder="085xxxxxx" name="no">
                                    <label for="floatingInput">No HP</label>
                                    <div class="invalid-feedback">
                                        Masukkan nomor hp anda!
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="form-floating mb-3">
                                <input type="password" class="form-control" id="floatingInput" placeholder="Password" disabled value="12345" name="password">
                                <label for="floatingPassword">Password</label>
                            </div>
                        </div>
                        <div class="form-floating">
                            <textarea class="form-control" required style="height:100px" name="alamat"></textarea>
                            <label for="floatingInput">Alamat</label>
                            <div class="invalid-feedback">
                                Masukkan alamat anda!
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <button type="sumbit" class="btn btn-primary" name="input_user_validate" value="12345">Save changes</button>
                        </div>
                    </form>
                </div>

            </div>
        </div>
    </div>
    <!-- Modal end tambah user baru-->

    <!-- Modal view-->
    <div class="modal fade" id="ModalView" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-xl modal-fullscreen-md-down">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Data User</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    ...
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Save changes</button>
                </div>
            </div>
        </div>
    </div>
    <!-- Modal end view-->

    <?php
    if (empty($result)) {
        echo "data user tidak ada";
    } else {


    ?>
        <div class="table-responsive">
            <table class="table table-dark table-hover mt-1">
                <thead>
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">Nama</th>
                        <th scope="col">Email</th>
                        <th scope="col">level</th>
                        <th scope="col">No HP</th>
                        <th scope="col">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $no = 1;
                    foreach ($result as $row) {
                    ?>
                        <tr>
                            <th scope="row"><?php echo $no++ ?></th>
                            <td><?php echo $row['nama'] ?></td>
                            <td><?php echo $row['email'] ?></td>
                            <td><?php echo $row['level'] ?></td>
                            <td><?php echo $row['nohp'] ?></td>
                            <td class="d-flex">
                                <button class="btn btn-info btn-sm me-1" data-bs-toggle="modal" data-bs-target="#ModalView"><i class="bi bi-eye-fill"></i></button>
                                <button class="btn btn-warning btn-sm me-1"><i class="bi bi-pencil-square"></i></button>
                                <button class="btn btn-danger btn-sm"><i class="bi bi-trash"></i></button>
                            </td>
                        </tr>
                    <?php
                    }
                    ?>
                </tbody>
            </table>
        </div>
    <?php
    }
    ?>
</div>
<!-- end content -->
</div>
</div>
<script>
    // Example starter JavaScript for disabling form submissions if there are invalid fields
    (() => {
        'use strict'

        // Fetch all the forms we want to apply custom Bootstrap validation styles to
        const forms = document.querySelectorAll('.needs-validation')

        // Loop over them and prevent submission
        Array.from(forms).forEach(form => {
            form.addEventListener('submit', event => {
                if (!form.checkValidity()) {
                    event.preventDefault()
                    event.stopPropagation()
                }

                form.classList.add('was-validated')
            }, false)
        })
    })()
</script>