<?php
require_once '../config/connection.php';

$id = $_POST['id'];
$perbedaan = $_POST['perbedaan'];
$deskripsi = $_POST['deskripsi'];

$query = mysqli_query($connection, "UPDATE perbedaan SET perbedaan = '$perbedaan', deskripsi = '$deskripsi' WHERE id = '$id'");
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