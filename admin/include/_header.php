<?php
require_once '../config/auth.php';

isLogin();
?>

<div class="container">
    <div class="header">
        <div class="nav">
            <div class="search">
                <!-- <input type="text" placeholder="Pencarian...">
                <button type="submit">Cari</button> -->
            </div>
            <div class="user">
                <span><?= $_SESSION['login']['username'] ?></span>
                <a href="../../logout.php">Logout</a>
            </div>
        </div>
    </div>