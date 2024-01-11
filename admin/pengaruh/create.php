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
                    <td>Pengaruh</td>
                    <td><input type="text" name="pengaruh" placeholder="Masukkan Pengaruh..." required></td>
                </tr>
                <tr>
                    <td>Deskripsi</td>
                    <td><textarea type="text" name="deskripsi" placeholder="Masukkan Deskripsi..." required></textarea>
                    </td>
                    <!-- <td><input class="deskripsi" type="text" name="deskripsi" placeholder="Masukkan Deskripsi..."></td> -->
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