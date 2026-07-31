<?php

include '../koneksi.php';
if (isset($_GET['id'])) {
    $id = mysqli_real_escape_string($koneksi, $_GET['id']);
    $query = "DELETE FROM material WHERE idmaterial = '$id'";
    $result = mysqli_query($koneksi, $query);
    if (mysqli_affected_rows($koneksi) > 0) {
        echo "<script>
            alert('Material telah dihapus!!!.');
        </script>";
        echo "<script>
            window.location.href = 'mmaterial.php';
        </script>";
    } else {
        echo "<script>
            alert('Material gagal dihapus!!!.');
        </script>";
        echo "<script>
            window.location.href = 'mmaterial.php';
        </script>";
    }
} else {
    echo "<script>
            alert('Material tidak ditemukan!!!.');
        </script>";
    echo "<script>
            window.location.href = 'mmaterial.php';
        </script>";
}
?>