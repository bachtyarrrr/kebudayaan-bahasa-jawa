<?php
include "../include/_sidebar.php";
include "../include/_header.php";
require_once '../config/connection.php';

$id = $_GET['id'];
$query = mysqli_query($connection, "SELECT * FROM users WHERE id='$id'");
?>

<div class="content">
    <div class="tabel">
        <div class="title">
            <h2>Edit Data</h2>
        </div>
        <form action="./update.php" method="POST" enctype="multipart/form-data">
            <?php
            while ($row = mysqli_fetch_array($query)) {
            ?>
            <table>
                <input type="hidden" name="id" value="<?= $row['id'] ?>">
                <tr>
                    <td>Nama</td>
                    <td><input type="text" name="name" value="<?= $row['name'] ?>" required></td>
                </tr>
                <tr>
                    <td>Email</td>
                    <td><input type="email" name="email" value="<?= $row['email'] ?>" required></td>
                </tr>
                <tr>
                    <td>Username</td>
                    <td><input type="text" name="username" value="<?= $row['username'] ?>" required></td>
                </tr>
                <tr>
                    <td>Password</td>
                    <td><input type="password" name="password" value="<?= $row['password'] ?>" required></td>
                </tr>
                <!-- <tr>
                        <td>Role</td>
                        <td><input list="role" value="<?= $row['role'] ?>" name="role">
                            <datalist id="role">
                                <option value="admin">
                                <option value="user">
                            </datalist>
                        </td>
                    </tr> -->
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