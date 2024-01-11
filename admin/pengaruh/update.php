<?php
require_once '../config/connection.php';

$id = $_POST['id'];
$pengaruh = $_POST['pengaruh'];
$deskripsi = $_POST['deskripsi'];

$query = mysqli_query($connection, "UPDATE pengaruh SET name = '$name', deskripsi = '$deskripsi' WHERE id = '$id'");
if ($query) {
    $_SESSION['info'] = [
        'status' => 'success',
        'message' => 'Berhasil mengubah data'
    ];
    header('Location: ./index.php');
} else {
    $_SESSION['info'] = [
        'status' => 'failed',
        'message' => mysqli_error($connection)
    ];
    header('Location: ./index.php');
}