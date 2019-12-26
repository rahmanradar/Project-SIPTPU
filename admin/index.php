<?php   
session_start();
if(!isset($_SESSION['username']))
{
    header("location:../login/index.php?pesan=blm");
}
else{    
?>
<html>

<head>
    <title>Halaman Dashboard ~ SIPTPU</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
        <header>
            <ul>
                <li> <a href="barang/index.php">Barang</a> </li>
                <li><a href="pelanggan/index.php">Pelanggan</a></li>
                <li><a href="pembelian/index.php">Pembelian</a></li>
                <li><a href="penjualan/index.php">Penjualan</a></li>
                <li><a href="satuan/index.php">Satuan</a></li>
                <li><a href="keluar.php">Logout</a></li>
            </ul>
            
        </header>

        <section>
            <center>
                <h1>Selamat Datang <?php echo $_SESSION['username']?> 
                Di Sistem Informasi Penjualan Toko Pak Uban</h1>
                <h3>Silahkan Pilih Menu Dibawah ini</h3>
            </center>
        </section>

        <footer>
            Copyright &copy: 2019 Toko Pak Uban. All Right Reserved.
        </footer>
</body>

</html>
<?php
}
?>