<?php
include "../include/_sidebar.php";
include "../include/_header.php";
require_once '../config/connection.php';

$ngaruh = mysqli_query($connection, "SELECT * FROM pengaruh");
$beda = mysqli_query($connection, "SELECT * FROM perbedaan");
$jns = mysqli_query($connection, "SELECT * FROM jenis");

$jenis = mysqli_query($connection, "SELECT COUNT(*) FROM jenis");
$pengaruh = mysqli_query($connection, "SELECT COUNT(*) FROM pengaruh");
$perbedaan = mysqli_query($connection, "SELECT COUNT(*) FROM perbedaan");
$users = mysqli_query($connection, "SELECT COUNT(*) FROM users WHERE role = 'user'");

$total_jenis = mysqli_fetch_array($jenis)[0];
$total_pengaruh = mysqli_fetch_array($pengaruh)[0];
$total_perbedaan = mysqli_fetch_array($perbedaan)[0];
$total_users = mysqli_fetch_array($users)[0];
?>
<div class="content">
    <div class="cards">
        <div class="card">
            <div class="box">
                <h1><?= $total_jenis ?></h1>
                <h3>Jenis-jenis</h3>
            </div>
        </div>
        <div class="card">
            <div class="box">
                <h1><?= $total_pengaruh ?></h1>
                <h3>Pengaruh</h3>
            </div>
        </div>
        <div class="card">
            <div class="box">
                <h1><?= $total_perbedaan ?></h1>
                <h3>Perbedaan</h3>
            </div>
        </div>
        <div class="card">
            <div class="box">
                <h1><?= $total_users ?></h1>
                <h3>Users</h3>
            </div>
        </div>
    </div>
    <div class="content-2">
        <div class="jenis">
            <div class="title">
                <h2>Jenis-Jenis</h2>
                <a href="../jenis/" class="btn">Lihat Semua</a>
            </div>
            <table>
                <tr>
                    <th>No</th>
                    <th>Jenis</th>
                </tr>
                <?php
                $no = 1;
                while ($data = mysqli_fetch_array($jns)) :
                ?>
                    <tr>
                        <td><?= $no++ ?></td>
                        <td><?= $data['name'] ?></td>
                    </tr>
                <?php endwhile; ?>
            </table>
        </div>
        <div class="pengaruh">
            <div class="title">
                <h2>Pengaruh</h2>
                <a href="../pengaruh/" class="btn">Lihat Semua</a>
            </div>
            <table>
                <tr>
                    <th>No</th>
                    <th>Title</th>
                </tr>
                <?php
                $no = 1;
                while ($data = mysqli_fetch_array($ngaruh)) :
                ?>
                    <tr>
                        <td><?= $no++ ?></td>
                        <td>di <?= $data['name'] ?></td>
                    </tr>
                <?php endwhile; ?>
            </table>
        </div>
        <div class="perbedaan">
            <div class="title">
                <h2>Perbedaan</h2>
                <a href="../perbedaan/" class="btn">Lihat Semua</a>
            </div>
            <table>
                <tr>
                    <th>No</th>
                    <th>Nama</th>
                </tr>
                <?php
                $no = 1;
                while ($data = mysqli_fetch_array($beda)) :
                ?>
                    <tr>
                        <td><?= $no++ ?></td>
                        <td><?= $data['name'] ?></td>
                    </tr>
                <?php endwhile; ?>
            </table>
        </div>
    </div>
</div>
</div>
</body>

</html>