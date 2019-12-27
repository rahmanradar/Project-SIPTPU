<?php
session_start();
if (!isset($_SESSION['username'])) {
    header("location:../login/index.php?pesan=blm");
} else {
?>
    <html>

    <head>
        <title>Halaman Dashboard ~ SIPTPU</title>
        <link rel="stylesheet" href="style.css">
    </head>

    <body>
        <!--logo perusahaan-->
        <div class="main-header">
            <div class="logo-header" data-background-color="blue">
                <a href="index.php" class="logo">
                    <img src="../assets/img/test.png" height="60" alt="navbar brand" class="navbar-brand">
                </a>
            </div>
        </div>
        <button class="navbar-toggler sidenav-toggler ml-auto" type="button" data-toggle="collapse" data-target="collapse" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon">
                <i class="icon-menu"></i>
            </span>
        </button>
        <button class="topbar-toggler more"><i class="icon-options-vertical"></i></button>
        <div class="nav-toggle">
            <button class="btn btn-toggle toggle-sidebar">
                <i class="icon-menu"></i>
            </button>
        </div>
        <!--logo perusahaan-->



        <!--  <header>
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
                <h1>Selamat Datang <?php echo $_SESSION['username'] ?> 
                Di Sistem Informasi Penjualan Toko Pak Uban</h1>
                <h3>Silahkan Pilih Menu Dibawah ini</h3>
            </center>
        </section>

        <footer>
            Copyright &copy: 2019 Toko Pak Uban. All Right Reserved.
        </footer>
        -->
    </body>

    </html>
<?php
}
?>