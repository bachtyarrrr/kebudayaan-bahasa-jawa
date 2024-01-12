<?php
include "../include/_sidebar.php";
include "../include/_header.php";
require_once '../config/connection.php';

$query = mysqli_query($connection, "SELECT * FROM profile");
?>

<div class="content">
    <div class="tabel">
        <div class="title">
            <h2>Profile Saya</h2>
        </div>
        <form action="./update.php" method="POST" enctype="multipart/form-data">
            <?php
            while ($row = mysqli_fetch_array($query)) {
            ?>
            <table>
                <tr>
                    <td>Nama</td>
                    <td><input type="text" name="name" value="<?= $row['name'] ?>" required></td>
                </tr>
                <tr>
                    <td>Username</td>
                    <td><input type="text" name="username" value="<?= $row['username'] ?>" required></td>
                </tr>
                <tr>
                    <td>Password</td>
                    <td><input type="password" name="password" value="<?= $row['password'] ?>" required></td>
                </tr>
                <tr>
                    <td>Deskripsi Diri</td>
                    <td><input type="text" name="deskripsi" value="<?= $row['deskripsi'] ?>" required></td>
                </tr>
                <tr>
                    <td>Instagram</td>
                    <td><input type="text" name="instagram" value="<?= $row['instagram'] ?>" required></td>
                </tr>
                <tr>
                    <td>Email</td>
                    <td><input type="email" name="email" value="<?= $row['email'] ?>" required></td>
                </tr>
                <tr>
                    <td>Foto</td>
                    <td><img src=" ../assets/img/<?php echo $row['gambar']; ?>"
                            style="width: 50px;float: left;margin-bottom: 5px;"><input type="file" name="gambar"><i
                            style="float: left;font-size: 11px;color: red">*Abaikan jika tidak merubah
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