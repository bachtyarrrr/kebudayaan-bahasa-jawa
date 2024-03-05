<?php
require_once 'admin/config/connection.php';
if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    $role = $_POST['role'];

    $query = mysqli_query($connection, "INSERT INTO users (name, email, username, password, role) value( '$name', '$email', '$username', '$password', '$role')");
    if ($query) {
        $_SESSION['info'] = [
            'status' => 'success',
            'message' => 'Berhasil menambah data'
        ];
        header('Location: login.php');
    } else {
        $_SESSION['info'] = [
            'status' => 'failed',
            'message' => mysqli_error($connection)
        ];
        header('Location: register.php');
    }
}
$result = mysqli_query($connection, "SELECT * FROM pengaturan");
while ($row = mysqli_fetch_array($result)) {
?>

    <!DOCTYPE HTML>
    <html lang="en">
    <html>

    <head>
        <title>Register</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta charset="utf-8">
        <link rel="stylesheet" type="text/css" href="admin/assets/css/login_style.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link href='https://fonts.googleapis.com/css?family=Titillium+Web:400,300,600' rel='stylesheet' type='text/css'>
        <link href='https://fonts.googleapis.com/css?family=Titillium+Web:400,300,600' rel='stylesheet' type='text/css'>
        <script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.1/css/all.css" integrity="sha384-vp86vTRFVJgpjF9jiIGPEEqYqlDwgyBgEF109VFjmqGmIY/Y4HV4d3Gp2irVfcrp" crossorigin="anonymous">
    </head>

    <body class="body">

        <div class="login-page">
            <div class="form">
                <h4>Selamat datang di</h4>
                <form method="POST" action="">
                    <h2><?= $row['name'] ?></h2>
                <?php } ?>
                <input type="text" placeholder="&#xf007;  Masukkan Nama" name="name" required />
                <input type="email" placeholder="&#xf007;  Masukkan Email" name="email" required />
                <input type="text" placeholder="&#xf007;  Masukkan Username" name="username" required />
                <input type="password" id="password" placeholder="&#xf023;  password" name="password" required />
                <input type="text" name="role" value="user" hidden required />
                <i class="fas fa-eye" onclick="show()"></i>
                <br>
                <br>
                <button name="submit" type="submit">SIGN UP</button>
                <p class="message"></p>
                </form>

                <form class="login-form">
                    <button type="button" onclick="window.location.href='login.php'">Sudah punya akun? LOGIN</button>
                </form>
            </div>
        </div>

        <script>
            function show() {
                var password = document.getElementById("password");
                var icon = document.querySelector(".fas")

                // ========== Checking type of password ===========
                if (password.type === "password") {
                    password.type = "text";
                } else {
                    password.type = "password";
                }
            };
        </script>
    </body>

    </html>