<?php
include "../include/_sidebar.php";
include "../include/_header.php";
require_once '../config/connection.php';

$result = mysqli_query($connection, "SELECT * FROM perbedaan");
?>

<div class="content">
    <div class="tabel">
        <div class="title">
            <h2>Perbedaan Bahasa Jawa</h2>
            <a href="./create.php" class="btn">Tambah Data</a>
        </div>
        <table>
            <tr>
                <th>No</th>
                <th>Perbedaan</th>
                <th>Deskripsi</th>
                <th>Aksi</th>
            </tr>
            <?php
            $no = 1;
            while ($data = mysqli_fetch_array($result)) :
            ?>
            <tr>
                <td>
                    <?= $no++ ?>
                </td>
                <td><?= $data['perbedaan'] ?></td>
                <td><?= $data['deskripsi'] ?></td>
                <td>
                    <a href="edit.php?id=<?= $data['id'] ?>"" class=" btn">Edit</a>
                    <a href="delete.php?id=<?= $data['id'] ?>"" class=" btn">Hapus</a>
                </td>
            </tr>
            <?php
            endwhile;
            ?>
        </table>
    </div>
</div>