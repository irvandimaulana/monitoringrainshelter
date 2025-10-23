<?php 
// Koneksi ke database sensor tanah
$koneksi_tanah = mysqli_connect("localhost", "root", "", "sensor_db");

// Baca tabel sensor tanah
$sql_tanah = mysqli_query($koneksi_tanah, "SELECT * FROM kel");
$data_tanah = mysqli_fetch_array($sql_tanah);

// Ambil nilai sensor dari tabel tanah
$nilai_sensor_tanah = $data_tanah['tanah'];

// Koneksi ke database sensor cuaca
$koneksi_cuaca = mysqli_connect("localhost", "root", "", "sensor_db");

// Baca tabel sensor cuaca
$sql_cuaca = mysqli_query($koneksi_cuaca, "SELECT * FROM hujan");
$data_cuaca = mysqli_fetch_array($sql_cuaca);

// Ambil nilai sensor dari tabel cuaca
$nilai_sensor_cuaca = $data_cuaca['cuaca'];

// Logika untuk menentukan keterangan
if ($nilai_sensor_tanah >= 50 && $nilai_sensor_cuaca == 1)
    $keterangan = "Terbuka"; // Jika nilai sensor tanah >= 50 dan nilai sensor cuaca = 1, keterangan = buka
elseif ($nilai_sensor_tanah >= 50 && $nilai_sensor_cuaca == 0)
    $keterangan = "Tertutup"; // Jika nilai sensor tanah >= 50 dan nilai sensor cuaca = 0, keterangan = Buka
elseif ($nilai_sensor_tanah <= 49 && $nilai_sensor_cuaca == 1)
    $keterangan = "Terbuka"; // Jika nilai sensor tanah <= 49 dan nilai sensor cuaca = 1, keterangan = Buka
elseif ($nilai_sensor_tanah <= 49 && $nilai_sensor_cuaca == 0)
    $keterangan = "Terbuka"; // Kondisi lainnya, keterangan = Kurang Air
?>

<h1 style="font-size: 65px;"> <?php echo $keterangan; ?> </h1>
