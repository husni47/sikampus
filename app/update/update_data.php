<?php 
include('../../conf/config.php');
$id = $_GET['id'];
$nama = $_GET['nama'];
$nim = $_GET['nim'];
$smt = $_GET['semester'];
$query = mysqli_query($koneksi, "UPDATE tb_mahasiswa SET nama='$nama',nim='$nim',semester='$smt' WHERE id='$id'");
 header('Location: ../index.php?page=data-mahasiswa');
?>