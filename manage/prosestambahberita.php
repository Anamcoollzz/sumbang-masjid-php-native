<?php

include '../koneksi.php';

$judul = mysqli_real_escape_string($koneksi, $_POST['judul']);
$teks = mysqli_real_escape_string($koneksi, $_POST['teks']);

$query = "INSERT INTO berita(judul, teks) VALUES('$judul', '$teks');";
$result = mysqli_query($koneksi, $query);

if (mysqli_affected_rows($koneksi) > 0) {
    echo "<script>
                alert('Berita telah ditambahkan!');
            </script>";
    echo "<script>
                window.location.href = 'mberita.php';
            </script>";
} else {
    echo "<script>
                alert('Berita gagal ditambahkan!');
            </script>";
    echo "<script>
                window.location.href = 'mberita.php';
            </script>";
}
?>