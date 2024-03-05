<?php
include "../include/_sidebar.php";
include "../include/_header.php";
require_once '../config/connection.php';
?>

<div class="content">
    <div class="tabel">
        <div class="title">
            <h2>Tambah Anggota</h2>
        </div>
        <form action="./store.php" method="POST" enctype="multipart/form-data">
            <table>
                <tr>
                    <td>Nama</td>
                    <td><input type="text" name="name" placeholder="Masukkan nama" required></td>
                </tr>
                <tr>
                    <td>Deskripsi Diri</td>
                    <td><input type="text" name="deskripsi" placeholder="Masukkan Deskripsi" required></td>
                </tr>
                <tr>
                    <td>Instagram</td>
                    <td><input type="text" name="instagram" placeholder="Masukkan Instagram" required></td>
                </tr>
                <tr>
                    <td>Email</td>
                    <td><input type="email" name="email" placeholder="Masukkan Email" required></td>
                </tr>
                <tr>
                    <td>Foto</td>
                    <td><input type="file" name="gambar"></td>
                </tr>
                <tr>
                    <td>
                        <input type="reset" class="btn" value="Reset">
                    </td>
                    <td><input type="submit" class="btn" value="Simpan"></td>
                </tr>
            </table>
        </form>
    </div>
</div>