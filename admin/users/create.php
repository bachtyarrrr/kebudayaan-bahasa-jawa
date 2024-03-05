<?php
include "../include/_sidebar.php";
include "../include/_header.php";
require_once '../config/connection.php';
?>

<div class="content">
    <div class="tabel">
        <div class="title">
            <h2>Tambah Data</h2>
        </div>
        <form action="./store.php" method="POST" enctype="multipart/form-data">
            <table>
                <tr>
                    <td>Nama</td>
                    <td><input type="text" name="name" placeholder="Masukkan Nama..." required></td>
                </tr>
                <tr>
                    <td>Email</td>
                    <td><input type="email" name="email" placeholder="Masukkan Email..." required></td>
                </tr>
                <tr>
                    <td>Username</td>
                    <td><input type="text" name="username" placeholder="Masukkan Username..." required></td>
                </tr>
                <tr>
                    <td>Password</td>
                    <td><input type="password" name="password" placeholder="Masukkan Password..." required></td>
                </tr>
                <tr>
                    <td>Role</td>
                    <td><input list="role" placeholder="Pilih Role..." name="role">
                        <datalist id="role">
                            <option value="admin">
                            <option value="user">
                        </datalist>
                    </td>
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