<?php
include '../koneksi.php';
$nama_material = mysqli_real_escape_string($koneksi, $_POST['nama']);
$harga = mysqli_real_escape_string($koneksi, $_POST['harga']);

$target_dir = "../material/";
$target_file = $target_dir . basename($_FILES["gambar"]["name"]);

$uploadOk = 1;
$imageFileType = pathinfo($target_file, PATHINFO_EXTENSION);
// Check if image file is a actual image or fake image

$filename = md5(uniqid()) . '.' . $imageFileType;
$target_file = $target_dir . $filename;
$query = "INSERT INTO material(nama_material, harga, gambar) VALUES('$nama_material', '$harga', '$filename')";
$result = mysqli_query($koneksi, $query);
if ($_FILES["gambar"]) {
    if (mysqli_affected_rows($koneksi) > 0) {
        $check = getimagesize($_FILES["gambar"]["tmp_name"]);
        if ($check !== false) {
            $uploadOk = 1;
            if (move_uploaded_file($_FILES["gambar"]["tmp_name"], $target_file)) {
                echo "<script>
                alert('Material telah ditambahkan!');
            </script>";
                echo "<script>
                window.location.href = 'mmaterial.php';
            </script>";
            } else {
                echo "<script>
                alert('Material gagal ditambahkan!');
            </script>";
                echo "<script>
                window.location.href = 'mmaterial.php';
            </script>";
            }
        } else {
            echo "<script>
            alert('File yang diupload bukan gambar!!!.');
        </script>";
            echo "<script>
            window.location.href = 'mmaterial.php';
        </script>";

            $uploadOk = 0;
        }
    } else {
        echo "<script>
            alert('Gagal menambahkan material!!!.');
        </script>";
        echo "<script>
            window.location.href = 'mmaterial.php';
        </script>";
    }
} else {
    echo "<script>
            alert('Anda belum memasukan gambar!!!.');
        </script>";
    echo "<script>
            window.location.href = 'mmaterial.php';
        </script>";
}

?>