<html>

<head>
    <title>Halaman Login | SIPTPU</title>
    <link rel="stylesheet" href="../assets/template/css/main.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="../assets/template/login/vendor/bootstrap/css/bootstrap.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="../assets/template/login/fonts/iconic/css/material-design-iconic-font.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="../assets/template/login/vendor/animate/animate.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="../assets/template/login/vendor/css-hamburgers/hamburgers.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="../assets/template/login/vendor/animsition/css/animsition.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="../assets/template/login/vendor/select2/select2.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="../assets/template/login/vendor/daterangepicker/daterangepicker.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="../assets/template/css/util.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="../assets/template/css/main.css">
    <!--===============================================================================================-->
    <style>
        .form-control {
            border: none;
            font-size: 14px;
            padding: 0;
        }

        .notice-login100 {
            border: none;
            font-size: 16px;
            margin-top: 20;
            background-color: orange;
            text-align: center;
        }
    </style>
</head>

<body>
    <div class="limiter">
        <div class="container-login100">
            <div class="wrap-login100">

                <form action="proseslogin.php" method="post">

                    <div class="wrap-input100">
                        <input class="input100" type="text" name="username" required>
                        <span class="focus-input100" data-placeholder="Username"></span>
                    </div>
                    <div class="wrap-input100" data-validate="Enter password">
                        <span class="btn-show-pass">
                            <i class="zmdi zmdi-eye"></i>
                        </span>
                        <input class="input100" type="password" name="password" required>
                        <span class="focus-input100" data-placeholder="Password"></span>
                    </div>
                    <div class="container-login100-form-btn">
                        <div class="wrap-login100-form-btn">
                            <div class="login100-form-bgbtn"></div>
                            <button class="login100-form-btn">
                                Login
                            </button>
                        </div>
                    </div>

                    <div class="notice-login100">
                        <?php
                        if (isset($_GET['pesan'])) {
                            if ($_GET['pesan'] == "gagal") {
                                echo "Login Gagal, Username dan Password Salah ";
                            } else if ($_GET['pesan'] == "logout") {
                                echo "Berhasil Logout";
                            } else if ($_GET['pesan'] == "blm") {
                                echo "Silahkan Login Terlebih Dahulu";
                            }
                        }
                        ?>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!--===============================================================================================-->
    <script src="../assets/template/login/vendor/jquery/jquery-3.2.1.min.js"></script>
    <!--===============================================================================================-->
    <script src="../assets/template/login/vendor/animsition/js/animsition.min.js"></script>
    <!--===============================================================================================-->
    <script src="../assets/template/login/vendor/bootstrap/js/popper.js"></script>
    <!--===============================================================================================-->
    <script src="../assets/template/login/vendor/bootstrap/js/bootstrap.min.js"></script>
    <!--===============================================================================================-->
    <script src="../assets/template/login/vendor/select2/select2.min.js"></script>
    <!--===============================================================================================-->
    <script src="../assets/template/login/vendor/daterangepicker/moment.min.js"></script>
    <!--===============================================================================================-->
    <script src="../assets/template/login/vendor/daterangepicker/daterangepicker.js"></script>
    <!--===============================================================================================-->
    <script src="../assets/template/login/vendor/countdowntime/countdowntime.js"></script>
    <!--===============================================================================================-->
    <script src="../assets/template/login/js/main.js"></script>
    <script>
        window.setTimeout(function() {
            $(".alert-danger").fadeTo(500, 0).slideUp(500,
                function() {
                    $(this).remove();
                });
        }, 2000);
    </script>
</body>

</html>