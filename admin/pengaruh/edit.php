<?php
include "../include/_sidebar.php";
include "../include/_header.php";
require_once '../config/connection.php';

$id = $_GET['id'];
$query = mysqli_query($connection, "SELECT * FROM pengaruh WHERE id='$id'");
?>

<div class="content">
    <div class="tabel">
        <div class="title">
            <h2>Tambah Data</h2>
        </div>
        <form action="./update.php" method="POST" enctype="multipart/form-data">
            <?php
            while ($row = mysqli_fetch_array($query)) {
            ?>
                <table>
                    <input type="hidden" name="id" value="<?= $row['id'] ?>">
                    <tr>
                        <td>Pengaruh</td>
                        <td><input type="text" name="name" value="<?= $row['name'] ?>" required></td>
                    </tr>
                    <tr>
                        <td>Deskripsi</td>
                        <td><input type="text" name="deskripsi" value="<?= $row['deskripsi'] ?>" required></td>
                    </tr>
                    <tr>
                        <td>Gambar</td>
                        <td><img src=" ../assets/img/<?php echo $row['gambar']; ?>" style="width: 50px;float: left;margin-bottom: 5px;"><input type="file" name="gambar"><i style="float: left;font-size: 11px;color: red">*Abaikan jika tidak merubah
                                foto</i></td>
                    </tr>
                    <tr>
                        <td>
                            <input type="reset" class="btn" value="Reset">

                        </td>
                        <td><input type="submit" class="btn" value="Simpan"></td>
                    </tr>
                </table>
            <?php } ?>
        </form>
    </div>
</div>