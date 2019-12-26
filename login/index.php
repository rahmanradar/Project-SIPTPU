<html>
<head>
    <title>Halaman Login ~ SIPTPU</title>
</head>

<body>
    <h1>Silahkan Login Terlebih Dahulu</h1>
    <h3>Masukan Username dan Password anda</h3>


    <form action="proseslogin.php" method="post">
        <table>
            <tr>
                <td>Username</td>
                <td><input type="text" name="username"></td>
            </tr>
            <tr>
                <td>Password</td>
                <td><input type="password" name="password"></td>
            </tr>
            <tr>
                <td></td>
                <td><input type="submit" name="login" value="Log In"></td>
            </tr>
        </table>
    </form>
    <?php
    if (isset($_GET['pesan'])) {
        if ($_GET['pesan'] == "gagal") {
            echo "Login Gagal, Username dan Password Salah";
        } else if ($_GET['pesan'] == "logout") {
            echo "Berhasil Logout";
        } else if ($_GET['pesan'] == "blm") {
            echo "Silahkan Login Terlebih Dahulu";
        }
    }
    ?>
</body>

</html>