<?php
include 'koneksi.php';
session_start();
$act = $_GET['act'];
if ($act == 'add') {
    if (isset($_GET['id'])) {
        $id = mysqli_real_escape_string($koneksi, $_GET['id']);
        $query = "SELECT * FROM material WHERE idmaterial='$id';";
        $result = mysqli_query($koneksi, $query);
        if (mysqli_num_rows($result) > 0) {
            $r = mysqli_fetch_array($result);
            $_SESSION['cart'][$r['idmaterial']] += 1;
            header("Location: cart.php");
        } else {
            echo "<script>
            alert('Material tidak dikenal!!!.');
        </script>";
            echo "<script>
            window.location.href = 'material.php';
        </script>";
        }
    } else {
        echo "<script>
            alert('Material tidak diset!!!');
        </script>";
        echo "<script>
            window.location.href = 'material.php';
        </script>";
    }
} elseif ($act == 'delete') {
    unset($_SESSION['cart']);
    echo "<script>
            alert('Keranjang belanja dikosongkan!');
        </script>";
    echo "<script>
            window.location.href = 'cart.php';
        </script>";
}
?>