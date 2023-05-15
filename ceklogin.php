<?php
session_start();
include 'koneksidb.php';

// cek apakah tombol login sudah diklik atau belum
if (isset($_POST['login'])) {
    // mengambil nilai inputan dari form login
    $email = $_POST['email'];
    $password = $_POST['password'];


    // Mencari data user dalam database
    $sql = "SELECT * FROM user WHERE email='$email'";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) == 1) {
        $row = mysqli_fetch_assoc($result);
        if (password_verify($password, $row['password'])) {
            // Jika login berhasil, maka redirect ke halaman dashboard
            header("Location: formregist.php");
        } else {
            // Jika password salah, tampilkan pesan error
            $error = "Password yang dimasukkan salah!";
        }
    } else {
        // Jika username tidak ditemukan, tampilkan pesan error
        $error = "Username tidak ditemukan!";
    }
}
?>