<?php 
// koneksi database
include 'koneksi.php';
 
// menangkap data yang di kirim dari form
$email = $_POST['email'];
$password = $_POST['password'];


 
// menginput data ke database
mysqli_query($koneksi,"insert into akun values('','$email','$password')");
 
// mengalihkan halaman kembali ke index.php
header("location:signin.php");