<?php
$kon = mysqli_connect('localhost', 'root', '', 'sensor_db');
// cek koneksi
if (!$kon){
    die("koneksi gagal".mysqli_connect_error());
}
else{
    echo "koneksi berhasil";
}
?>