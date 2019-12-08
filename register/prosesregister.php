<?php 
session_start();
include 'koneksi.php';

$username = $_POST['username'];
$password = $_POST['password'];

$username = mysqli_real_escape_string($koneksi,$username);
$password = mysqli_real_escape_string($koneksi, $password);

if ($username == "" && $password == ""){
    header("location:index.php?pesan=kosong");
}
else
{
$change = "SELECT username FROM admin WHERE username='$username'";
$prsdt = mysqli_query($koneksi,$change);
$cek = mysqli_fetch_array($prsdt, MYSQLI_ASSOC);
if (mysqli_num_rows($prsdt)==1){
    header("location:index.php?pesan=ganti");
}
else {
        $query = mysqli_query($koneksi,"INSERT INTO admin (username, password) VALUES ('$username', '$password')");
        header("location:../login/index.php");
}
}
?>