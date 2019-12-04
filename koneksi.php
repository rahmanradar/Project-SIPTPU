<?php
$koneksi=mysqli_connect("localhost","root", "", "siptpu");
if (mysqli_connect_errno()){
    echo "Koneksi ke Database Gagal : " . mysqli_connect_error();
}

?>