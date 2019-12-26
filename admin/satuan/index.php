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
    <title>Halaman ~ Data Satuan</title>
</head>

<body>
    <div class="head">
        <h1>Halaman Data Satuan Barang</h1>
        <h3>Satuan barang terbagi seperti dibawah ini:</h3>
    </div>
    <div class="menu">
        <a href="tambahsatuan.php">Tambah Satuan</a>
    </div>
    <div class="tabel">
        <table>
            <tr>
                <td>No</td>
                <td>Id Satuan</td>
                <td>Keterangan</td>
                <td>Aksi</td>
            </tr>
            <tr>
                <td>1</td>
                <td>P1</td>
                <td>Bungkus</td>
                <td><a href="proseshapus.php">Hapus</a> / <a href="tambahsatuan.php">Edit</a></td>
            </tr>
        </table>
    </div>
</body>
<?php   
}    
?>