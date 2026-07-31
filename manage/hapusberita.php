<?php
include '../koneksi.php';
if (isset($_GET['id'])) {
    $id = mysqli_real_escape_string($koneksi, $_GET['id']);
    $query = "DELETE FROM berita WHERE idberita = '$id'";
    $result = mysqli_query($koneksi, $query);
    if (mysqli_affected_rows($koneksi) > 0) {
        echo "<script>
            alert('Berita telah dihapus!!!.');
        </script>";
    } else {
        echo "<script>
            alert('Berita gagal dihapus!!!.');
        </script>";
    }
} else {
    echo "<script>
            alert('Berita tidak ditemukan!!!.');
        </script>";
}
echo "<script>
            window.location.href = 'mberita.php';
        </script>";
?>