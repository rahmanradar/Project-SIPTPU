<?php

session_start(); //menjalankan session
include 'koneksi.php'; //mengkoneksikan ke database
$username = $_POST['username']; //menampung nilai yang dikirim form sblmnya
$password = md5($_POST['password']);

$query = mysqli_query($koneksi, "SELECT * FROM admin WHERE username='$username' AND password='$password'"); //tampung query select
$data = mysqli_fetch_assoc($query);
$cek = mysqli_num_rows($query); //tampung jumlah data yang diselect
//Keputusan login/tidak
if($cek > 0)
{
    
    $_SESSION['username']=$data['username'];
    $_SESSION['login']="status";
    header("location:../admin/index.php");
}else
{
    header("location:index.php?pesan=gagal");
}
?>
