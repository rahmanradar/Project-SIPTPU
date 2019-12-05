<html>
    <head>
        <title>Halaman Register~SIPTPU</title>
    </head>
    <body>
        <h1>Formulir Pendaftar Admin Baru</h1>
        <h3>Silahkan Masukan Data Admin</h3>
        <form action="prosesregister.php" method="POST">
            <table>
                <tr>
                    <td>Username : </td>
                    <td><input type="text" name="username"></td>
                </tr>
                <tr>
                    <td>Password : </td>
                    <td><input type="password" name="password"></td>
                </tr>
                <tr>
                    <td></td>
                    <td><input type="submit" name="register" value="Register"></td>
                </tr>
            </table>
        </form>
        <?php
        if(isset($_GET['pesan'])){
            if($_GET['pesan']=="kosong")
            {
                echo "Formulir Tidak Boleh Kosong";
            }
            else if ($_GET['pesan']=="ganti")
            {
                echo "Username Tidak Tersedia, Silahkan Coba Username Lain";
            }
        }
        ?>
    </body>
</html>