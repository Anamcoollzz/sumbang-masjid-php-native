<html>
</body>
<h1><center>Komentar Anda </center> </h1>
<?php
//membuat koneksi ke database
$conn = mysqli_connect("localhost", "root", "root", "masjiddb");
//membuat query select
$sql="select * from pesan";
//membaca data
$hasil=mysqli_query($conn, $sql);
//menampilkan data
while($row=mysqli_fetch_array($hasil)){
//menampilkan field nama
echo "Nama : ".$row['nama']; 
//menampilkan field email
echo "<br>Email : ".$row['email'];
//menampilkan field komentar
echo "<br>Komentar ; ".$row['pertanyaan'];
echo "<hr>";
}
?>
</body>
</html>