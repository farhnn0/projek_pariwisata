<?php
    // session_start();
    if(!empty($_SESSION['email_pariwisata'])){
        header('location:home');
    }
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <link rel="icon" href="assets/Logo-The-Light-of-Aceh.jpeg">
    <link rel="stylesheet" href="Form_login/login.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>

<body>
    <div class="wrapper">
        <form class="needs-validation" novalidate action="proses/proses_login.php" method="POST">
            <h1>Login</h1>
            <div class="input-box">
                <input type="email" name="email" placeholder="email" required>
                <i class='bx bx-user'></i>
                <div class="invalid-feedback">
                    Masukkan email yang valid!
                </div>
            </div>
            <div class="input-box">
                <input type="password" name="password" placeholder="password" required>
                <div class="invalid-feedback">
                    Masukkan password!
                </div>
                <i class='bx bx-lock-alt'></i>
            </div>
            <div class="remeber-forgot">
                <label><input type="checkbox">Remeber me</label>
                <a href="#">Forgot Password</a>
            </div>
            <button type="submit" name="submit_validate" value="abc" class="btn">Login</button>
        </form><br>
        <p class="text-center">&copy;2024 The Light of Aceh</p>
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
</body>

</html>