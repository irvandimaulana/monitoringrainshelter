<?php
$koneksi = mysqli_connect("localhost", "root", "", "sensor_db");

if (mysqli_connect_errno()) {
    echo "error";
    exit();
}

$sql_tanah = mysqli_query($koneksi, "SELECT * FROM kel ORDER BY id DESC LIMIT 1");
if ($sql_tanah && $data_tanah = mysqli_fetch_array($sql_tanah)) {
    $nilai_sensor_tanah = $data_tanah['tanah'];
} else {
    echo "error";
    exit();
}

$sql_hujan = mysqli_query($koneksi, "SELECT * FROM hujan ORDER BY id DESC LIMIT 1");
if ($sql_hujan && $data_hujan = mysqli_fetch_array($sql_hujan)) {
    $nilai_sensor_hujan = $data_hujan['cuaca'];
} else {
    echo "error";
    exit();
}

$keterangan_hujan = ($nilai_sensor_hujan >= 1) ? "Terang" : "Hujan";

date_default_timezone_set('Asia/Jakarta');
$waktu = date("H:i:s");
$tanggal = date("d F Y");

$querySimpanData = "INSERT INTO data (tanah, cuaca, waktu, tanggal) VALUES (?, ?, ?, ?)";
$stmt = mysqli_prepare($koneksi, $querySimpanData);
if ($stmt) {
    mysqli_stmt_bind_param($stmt, 'isss', $nilai_sensor_tanah, $keterangan_hujan, $waktu, $tanggal);

    if (mysqli_stmt_execute($stmt)) {
        echo "success";
    } else {
        echo "error";
    }

    mysqli_stmt_close($stmt);
} else {
    echo "error";
}

mysqli_close($koneksi);
?>
