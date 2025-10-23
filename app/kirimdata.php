<?php 
$konek = mysqli_connect("localhost", "root", "", "sensor_db");


$nilai_sensor = $_GET['tanah'] ;


mysqli_query($konek, "UPDATE kel SET tanah='$nilai_sensor'");
 ?>