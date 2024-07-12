<?php
session_start();
include "connect.php";
$email = (isset(($_POST['email']))) ? htmlentities($_POST['email']) : "";
$password = (isset(($_POST['email']))) ? md5(htmlentities($_POST['password'])) : "";
if (!empty($_POST['submit_validate'])) {
    $query = mysqli_query($conn,"SELECT * FROM tbUser WHERE email = '$email' && password = '$password'  ");
    $hasil = mysqli_fetch_array($query);
    if ($hasil) {
        $_SESSION['email_pariwisata'] = $email;
        $_SESSION['level_pariwisata'] = $hasil['level'];
        header('location:../home');
    } else { ?>
        <script>
            alert('username atau password yang anda masukkan salah');
            window.location = '../login';
        </script>
    <?php
    }
}
?>