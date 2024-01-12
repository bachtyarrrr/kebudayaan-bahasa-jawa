<?php
require_once 'config/connection.php';
session_start();
if (isset($_POST['submit'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $sql = "SELECT * FROM profile WHERE username='$username' and password='$password' LIMIT 1";
    $result = mysqli_query($connection, $sql);

    $row = mysqli_fetch_assoc($result);
    if ($row) {
        $_SESSION['login'] = $row;
        header('Location: index.php');
    }
}
$result = mysqli_query($connection, "SELECT * FROM pengaturan");
while ($row = mysqli_fetch_array($result)) {
?>

<!DOCTYPE HTML>
<html lang="en">
<html>

<head>
    <title>Login</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="assets/css/login_style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href='https://fonts.googleapis.com/css?family=Titillium+Web:400,300,600' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Titillium+Web:400,300,600' rel='stylesheet' type='text/css'>
    <script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.1/css/all.css"
        integrity="sha384-vp86vTRFVJgpjF9jiIGPEEqYqlDwgyBgEF109VFjmqGmIY/Y4HV4d3Gp2irVfcrp" crossorigin="anonymous">
</head>

<body class="body">

    <div class="login-page">
        <div class="form">
            <h4>Selamat datang di Administrator</h4>
            <form method="POST" action="">
                <h2><?= $row['name'] ?></h2>
                <?php } ?>
                <input type="text" placeholder="&#xf007;  username" name="username" required />
                <input type="password" id="password" placeholder="&#xf023;  password" name="password" required />
                <i class="fas fa-eye" onclick="show()"></i>
                <br>
                <br>
                <button name="submit" type="submit">LOGIN</button>
                <p class="message"></p>
            </form>

            <!-- <form class="login-form">
      <button type="button" onclick="window.location.href='signup.html'">SIGN UP</button>
    </form> -->
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