<?php
// memanggil file koneksi.php untuk melakukan koneksi database
require_once '../config/connection.php';

// membuat variabel untuk menampung data dari form
$name = $_POST['name'];
$deskripsi = $_POST['deskripsi'];
$instagram  = $_POST['instagram'];
$email = $_POST['email'];
$gambar = $_FILES['gambar']['name'];
//cek dulu jika merubah gambar produk jalankan coding ini
if ($gambar != "") {
    $ekstensi_diperbolehkan = array('png', 'jpeg', 'jpg'); //ekstensi file gambar yang bisa diupload 
    $x = explode('.', $gambar); //memisahkan nama file dengan ekstensi yang diupload
    $ekstensi = strtolower(end($x));
    $file_tmp = $_FILES['gambar']['tmp_name'];
    $logo_baru = 'foto-' . $name . '.png'; //menggabungkan angka acak dengan nama file sebenarnya
    if (in_array($ekstensi, $ekstensi_diperbolehkan) === true) {
        move_uploaded_file($file_tmp, '../assets/img/' . $logo_baru); //memindah file gambar ke folder gambar

        // jalankan query INSERT INTO unutk menambahkan data
        $query  = mysqli_query($connection, "INSERT INTO profile (name, deskripsi, instagram, email, gambar) VALUE ('$name', '$deskripsi', '$instagram', '$email', '$logo_baru') ");
        // periska query apakah ada error
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
    } else {
        //jika file ekstensi tidak jpg dan png maka alert ini yang tampil
        $_SESSION['info'] = [
            'status' => 'failed',
            'message' => mysqli_error($connection)
        ];
        header('Location: ./index.php');
    }
} else {
    // jalankan query INSERT INTO unutk menambahkan data
    $query  = mysqli_query($connection, "INSERT INTO profile (name, deskripsi, instagram, email) VALUE ('$name', '$deskripsi', '$instagram', '$email')");
    // periska query apakah ada error
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
}
