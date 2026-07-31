<?php
include 'koneksi.php';

$nama = mysqli_real_escape_string($koneksi, $_POST['nama']);
$email = mysqli_real_escape_string($koneksi, $_POST['email']);
$telepon = mysqli_real_escape_string($koneksi, $_POST['telepon']);
$pesan = mysqli_real_escape_string($koneksi, $_POST['pesan']);

$query = "INSERT INTO pesan (nama, email, telepon, pertanyaan) VALUES('$nama', '$email', '$telepon', '$pesan');";
$result = mysqli_query($koneksi, $query);
if(mysqli_affected_rows($koneksi) > 0){
    echo "<script>
            alert('Pesan anda telah terkirim!!!.');
        </script>";
            echo "<script>
            window.location.href = 'kontak.php';
        </script>";
} else {
    echo "<script>
            alert('Pesan anda gagal terkirim!!!.');
        </script>";
            echo "<script>
            window.location.href = 'kontak.php';
        </script>";
}