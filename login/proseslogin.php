<?php

session_start(); //menjalankan session
include 'koneksi.php'; //mengkoneksikan ke database
$username = $_POST['username']; //menampung nilai yang dikirim form sblmnya
$password = $_POST['password'];

$query = mysqli_query($koneksi, "SELECT * FROM login WHERE username='$username' and password='$password'"); //tampung query select
$cek = mysqli_num_rows($query); //tampung jumlah data yang diselect
echo $cek; //tampilkan jumlah count data

//Keputusan login/tidak
if($cek > 0)
{
    $_SESSION['username']=$username;
    $_SESSION['login']="status";
    header("location:../admin/beranda.php");
}else
{
    header("location:index.php?pesan=gagal");
}
?>
