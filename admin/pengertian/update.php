<?php
require_once '../config/connection.php';

$id = $_POST['id'];
$pengertian = $_POST['pengertian'];
$deskripsi = $_POST['deskripsi'];

$query = mysqli_query($connection, "UPDATE pengertian SET pengertian = '$pengertian', deskripsi = '$deskripsi' WHERE id = '$id'");
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