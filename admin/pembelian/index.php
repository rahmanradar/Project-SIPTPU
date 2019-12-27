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
    <title>Halaman Data Pembelian | SIPTPU</title>
</head>
<body>
    <div class="head">
        <h1>Halaman Data Pembelian</h1>
        <h3>Transaksi Pembelian</h3>
    </div>
    <div class="main">
        <a href="tambahpembelian.php">Tambah Pembelian</a>
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
                <td><a href="proseshapus.php">Hapus</a> / <a href="tambahpembelian.php">Edit</a></td>
            </tr>
        </table>
    </div>
</body>
<?php   
}
?>