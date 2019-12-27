<?php   
session_start();
if(!isset($_SESSION['username']))
{
    header("location:../index.php?pesan=blm");
}
else{    
?>
<!DOCTYPE html>
<head>
    <title>Halaman Data Pelanggan ~ SIPTPU</title>
</head>
<body>
    <div class="head">
        <h1>Halaman Data Pelanggan</h1>
        <h3>Pelanggan adalah customer yang telah terdaftar di Sistem Toko Pak Uban</h3>
    </div>
    <div class="main">
        <a href="tambahpelanggan.php">Tambah Pelanggan</a>
    </div>
    <div class="tabel">
        <table>
            <tr>
                <td>No</td>
                <td>Nama Pelanggan</td>
                <td>Alamat</td>
                <td>No Telp</td>
                <td>Aksi</td>
            </tr>
            <tr>
                <td>1</td>
                <td>Rahmad Darmawan</td>
                <td>Jl.Sumber Pelita Gg.Bb No.27</td>
                <td>0813192565556</td>
                <td><a href="proseshapus.php">Hapus</a> / <a href="tambahpelanggan.php">Edit</a></td>
            </tr>
        </table>
    </div>
</body>
<?php   
}
?>