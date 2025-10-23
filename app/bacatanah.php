<?php 
// koneksi ke database
$koneksi = mysqli_connect("localhost", "root", "", "sensor_db");
// baca tabel sensor_db
$sql = mysqli_query($koneksi, "SELECT * FROM kel");
// ambil nilai dari tabel tanah
$data = mysqli_fetch_array($sql);
// ambil nilai field dari sensor
$nilai= $data['tanah'];
 ?>
<h1 style="font-size: 130px;"> <?php echo $nilai; ?>  </h1>