<?php 
// koneksi ke database
$konek = mysqli_connect("localhost", "root", "", "sensor_db");
// baca tabel sensor_db
$sqli = mysqli_query($konek, "SELECT * FROM hujan");
// ambil nilai dari tabel tanah
$data2 = mysqli_fetch_array($sqli);
// ambil nilai field dari sensor
$nilai_sensor = $data2['cuaca'];
// uji nilai
if($nilai_sensor >=1 )
    $keterangan = "Terang";
else
    $keterangan = "Hujan"
 ?>

<h1 style="font-size: 100px;"> <?php echo $keterangan; ?> </h1>