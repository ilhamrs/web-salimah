<!DOCTYPE html>
<html lang="en">
<!-- START: Head-->

<!-- Mirrored from html.designstream.co.in/pick/html/page-login.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 12 Jul 2020 02:12:38 GMT -->

<head>
    <meta charset="UTF-8">
    <title>Masuk</title>
    <link rel="shortcut icon" href="img/logo2.png" />
    <meta name="viewport" content="width=device-width,initial-scale=1">

    <!-- START: Template CSS-->
    <link rel="stylesheet" href="dist/vendors/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="dist/vendors/jquery-ui/jquery-ui.min.css">
    <link rel="stylesheet" href="dist/vendors/jquery-ui/jquery-ui.theme.min.css">
    <link rel="stylesheet" href="dist/vendors/simple-line-icons/css/simple-line-icons.css">
    <link rel="stylesheet" href="dist/vendors/flags-icon/css/flag-icon.min.css">

    <!-- END Template CSS-->

    <!-- START: Page CSS-->
    <link rel="stylesheet" href="dist/vendors/social-button/bootstrap-social.css" />
    <!-- END: Page CSS-->

    <!-- START: Custom CSS-->
    <link rel="stylesheet" href="dist/css/main.css">
    <!-- END: Custom CSS-->
</head>
<!-- END Head-->

<!-- START: Body-->

<body id="main-container" class="default">
    <!-- START: Main Content-->
    <div class="container">
        <div class="row vh-100 justify-content-between align-items-center">
            <div class="col-12">
                <form action="post" class="row row-eq-height lockscreen  mt-5 mb-5">
                    <div class="lock-image col-12 col-sm-5" style="background-image: url('img/salimah pattern 1.png');"></div>
                    <div class="login-form col-12 col-sm-7">
                        <h4>Masuk</h4>
                        <div class="form-group mb-3">
                            <label for="usermail">Email/Username</label>
                            <input class="form-control" type="text" id="usermail" required="" placeholder="Masukkan email/username">
                        </div>

                        <div class="form-group mb-3">
                            <label for="password">Password</label>
                            <input class="form-control" type="password" required="" id="password" placeholder="Masukkan Password">
                        </div>

                        <div class="form-group mb-3">
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="checkbox-signin" checked="">
                                <label class="custom-control-label" for="checkbox-signin">Ingat saya</label>
                            </div>
                        </div>

                        <div class="form-group mb-0">
                            <a type="button" href="http://localhost/Salimah_CI/" class="btn btn-primary btn-block mb-2" id="tombol_login">Masuk</a>
                        </div>

                        <div class="mt-2">Lupa password? <a href="http://localhost/Salimah_CI/Forget_Password">Klik disini</a></div>
                        <div class="mt-2">Belum punya akun? <a href="http://localhost/Salimah_CI/Register">Daftar</a></div>
                    </div>
                </form>
            </div>

        </div>
    </div>
    <!-- END: Content-->

    <!-- START: Template JS-->
    <script src="dist/vendors/jquery/jquery-3.3.1.min.js"></script>
    <script src="dist/vendors/jquery-ui/jquery-ui.min.js"></script>
    <script src="dist/vendors/moment/moment.js"></script>
    <script src="dist/vendors/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="dist/vendors/slimscroll/jquery.slimscroll.min.js"></script>

    <!-- END: Template JS-->

    <script>
        $(document).ready(function() {
            $("#tombol_login").click(function() {
                var usermail = $("#usermail").val();
                var password = $("#password").val();

                if (usermail.length == "") {

                } else if (password.length == "") {

                } else {
                    $.ajax({
                        url: "<?php echo base_url() ?>index.php/login/cek_login",
                        type: "POST",
                        data: {
                            "usermail": usermail,
                            "password": password
                        },

                        success:function(response){
                            if(response == "success"){
                                window.location.href = "<?php echo base_url() ?>index.php";
                            }else{

                            }
                        }
                    })
                }
            })
        })
    </script>
</body>
<!-- END: Body-->

<!-- Mirrored from html.designstream.co.in/pick/html/page-login.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 12 Jul 2020 02:12:38 GMT -->

</html>