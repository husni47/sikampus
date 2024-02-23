<?php 
include ('config.php');
$username = $_POST ['username'];
$password = $_POST ['password'];

$query = mysqli_query($koneksi, "SELECT * FROM tb_users WHERE username='$username' AND password='$password'");
if(mysqli_num_rows($query)==1){
// echo $username;
// echo $password;
//kita buat jika login berhasil maka akan menuju halaman dashboard
header('location:../app');
}
else if ($username == '' || $password == '') {
    header('location:../index.php?error=2');
  }
else {
// echo "login tidak berhasil";
//jika login berhasil maka akan menuju halaman dashboard
header('location:../index.php?error=1');
}
?>