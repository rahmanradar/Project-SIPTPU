<?php 
session_start();
include 'koneksi.php';
$username = $_POST['username'];
$username = mysqli_real_escape_string($koneksi,$username);
$password = $_POST['password'];

if ($username == "" && $password == ""){
    header("location:register.php?pesan=kosong");
}
else
{
$change = "SELECT username FROM login WHERE username='$username'";
$prsdt = mysqli_query($koneksi,$change);
$cek = mysqli_fetch_array($prsdt, MYSQLI_ASSOC);
if (mysqli_num_rows($prsdt)==1){
    header("location:register.php?pesan=ganti");
}
else {
    $password = md5($password);
    $query = mysqli_query($koneksi,"INSERT INTO login (username, password) VALUES ('$username', '$password')");
}
}
?>