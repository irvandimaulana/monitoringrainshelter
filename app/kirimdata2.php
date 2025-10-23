<?php 
$konek = mysqli_connect("localhost", "root", "", "sensor_db");


$nilai_sensor = $_GET['cuaca'] ;


mysqli_query($konek, "UPDATE hujan SET cuaca='$nilai_sensor'");
 ?>