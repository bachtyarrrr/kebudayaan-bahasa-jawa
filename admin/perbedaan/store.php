<?php
require_once '../config/connection.php';

// $result = mysqli_query($connection, "SELECT COUNT(*) as jumlah FROM pengertian");
// $row = mysqli_fetch_assoc($result);
// $count = $row['jumlah'];
// $no = (int)$count + 1;

$perbedaan = $_POST['perbedaan'];
$deskripsi = $_POST['deskripsi'];

$query = mysqli_query($connection, "INSERT INTO perbedaan (perbedaan, deskripsi) value( '$perbedaan', '$deskripsi')");
if ($query) {
    $_SESSION['info'] = [
        'status' => 'success',
        'message' => 'Berhasil menambah data'
    ];
    header('Location: ./index.php');
} else {
    $_SESSION['info'] = [
        'status' => 'failed',
        'message' => mysqli_error($connection)
    ];
    header('Location: ./index.php');
}