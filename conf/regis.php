
<?php
require('konfig.php');
$fullname = $_POST['fullname'];
$username = $_POST['username'];
$password = $_POST['password'];
$level = $_POST['level'];

$cek_user = mysqli_query($kon, "SELECT * FROM tb_user WHERE username='$username'");
$cek_login = mysqli_num_rows($cek_user);

if ($cek_login > 0) {
    header('Location: ../register.php?error=1');

} else if (empty($username) || empty($password) || empty($fullname) || empty($level)) {
    header('Location: ../register.php?error=3');
} else {
    $query = mysqli_query($kon, "INSERT INTO tb_user (fullname, username, password, level) VALUES ('$fullname', '$username', '$password', '$level')");
        
    if ($query) {
        // Insertion was successful
        header('Location: ../index.php');
        exit();
    } else {
        // Insertion failed
        echo "Error: " . mysqli_error($kon);
    }
}
?>

