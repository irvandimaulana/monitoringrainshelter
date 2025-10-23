<?php 
// koneksi ke database
$koneksi = mysqli_connect("localhost", "root", "", "sensor_db");
// baca tabel sensor_db
$sql = mysqli_query($koneksi, "SELECT * FROM kel");
// ambil nilai dari tabel tanah
$data = mysqli_fetch_array($sql);
// ambil nilai field dari sensor
$nilai= $data['tanah'];
// uji nilai
if($nilai >= 50)
    $keterangan = "Cukup Air";
else
    $keterangan = "Kurang Air"
 ?>

<h1 style="font-size: 65px;"> <?php echo $keterangan; ?> </h1>