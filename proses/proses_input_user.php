<?php
include "connect.php";

$name = isset($_POST['nama']) ? htmlentities($_POST['nama']) : "";
$email = isset($_POST['email']) ? htmlentities($_POST['email']) : "";
$level = isset($_POST['level']) ? htmlentities($_POST['level']) : "";
$nohp = isset($_POST['no']) ? htmlentities($_POST['no']) : "";
$alamat = isset($_POST['alamat']) ? htmlentities($_POST['alamat']) : "";
$password = md5('password');

if (!empty($_POST['input_user_validate'])) {
    $stmt = $conn->prepare("INSERT INTO tbuser (nama, email, level, nohp, alamat, password) VALUES (?, ?, ?, ?, ?, ?)");
    $stmt->bind_param("ssssss", $name, $email, $level, $nohp, $alamat, $password);

    if ($stmt->execute()) {
        $message = '<script>alert("Data berhasil dimasukkan"); window.location.href="../user";</script>';
    } else {
        $message = '<script>alert("Data gagal dimasukkan"); window.location.href="../user";</script>';
    }

    $stmt->close();
}

$conn->close();
echo $message;
?>
