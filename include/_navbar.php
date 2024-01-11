<!DOCTYPE html>
<html lang="en">
<?php require_once "../admin/config/connection.php";

$pengertian = mysqli_query($connection, "SELECT * FROM pengertian");
$jenis = mysqli_query($connection, "SELECT * FROM jenis");
$pengaruh = mysqli_query($connection, "SELECT * FROM pengaruh");
$perbedaan = mysqli_query($connection, "SELECT * FROM perbedaan");
?>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Explore Bahasa Jawa</title>
    <link rel="stylesheet" href="../assets/css/style.css">
</head>

<body>
    <!-- Navbar -->
    <nav>
        <div class="nav-logo">
            <a href="../" style="color: white; font-weight: bold; letter-spacing: 2px">
                JavaneseExpression
            </a>
        </div>
        <ul class="nav-links">
            <li class="link"><a href="../pages/profile.php">Profil</a></li>
            <li class="link"><a href="#">Pengertian</a>
                <div class="sub-menu-1">
                    <ul>
                        <?php
                        while ($data = mysqli_fetch_array($pengertian)) :
                        ?>
                        <li><a href=""><?= $data['pengertian'] ?></a></li>
                        <?php endwhile; ?>
                        <li class="menu-2"><a href="#">Jenis Bahasa Jawa</a>
                            <div class="sub-menu-2">
                                <ul>
                                    <?php
                                    while ($data = mysqli_fetch_array($jenis)) :
                                    ?>
                                    <li><a href=""><?= $data['name'] ?></a></li>
                                    <?php endwhile; ?>
                                </ul>
                            </div>
                        </li>
                    </ul>
                </div>
            </li>
            <li class="link"><a href="#">Pengaruh</a>
                <div class="sub-menu-1">
                    <ul>
                        <?php
                        while ($data = mysqli_fetch_array($pengaruh)) :
                        ?>
                        <li><a href="">di <?= $data['pengaruh'] ?></a></li>
                        <?php endwhile; ?>
                    </ul>
                </div>
            </li>
            <li class="link"><a href="#">Perbedaan</a>
                <div class="sub-menu-1">
                    <ul>
                        <?php
                        while ($data = mysqli_fetch_array($perbedaan)) :
                        ?>
                        <li><a href=""><?= $data['perbedaan'] ?></a></li>
                        <?php endwhile; ?>
                    </ul>
                </div>
            </li>
        </ul>
    </nav>