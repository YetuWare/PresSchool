<?php
    
    session_start();

    //include '../conexao.php';
    if(isset($_POST['btnentrar'])){
    $email_telefone = $_POST['email_telefone'];
    $senha = $_POST['senha'];

    $verifica = mysqli_query($conexao,"select * from admin WHERE email = '$email_telefone' AND  senha = '$senha'");

    if(mysqli_num_rows($verifica)<=0){

        echo "<script>alert('Email ou password errado');</script>";

        }
    else{
        while($linha2 = mysqli_fetch_assoc($verifica)){
            $nome_usuario = $linha2['nome'];
            $id_usuario = $linha2['id'];
            $senha_admin = $linha2['senha'];
        }
        $_SESSION['nome'] = $nome_usuario;
        $_SESSION['id'] = $id_usuario;
        $_SESSION['senha'] = $senha;
        header('location:index1.php');
        
        
    }
    }

?>
<!DOCTYPE html>
<html lang="pt-PT">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <meta name="keywords" content="">

    <!-- Title Page-->
    <title>Login</title>

    <!-- Fontfaces CSS-->
    <link href="admin/css/font-face.css" rel="stylesheet" media="all">
    <link href="admin/vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <link href="admin/vendor/font-awesome-5/css/fontawesome-all.min.css" rel="stylesheet" media="all">
    <link href="admin/vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">

    <!-- Bootstrap CSS-->
    <link href="admin/vendor/bootstrap-4.1/bootstrap.min.css" rel="stylesheet" media="all">

    <!-- Vendor CSS-->
    <link href="admin/vendor/animsition/animsition.min.css" rel="stylesheet" media="all">
    <link href="admin/vendor/bootstrap-progressbar/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet" media="all">
    <link href="admin/vendor/wow/animate.css" rel="stylesheet" media="all">
    <link href="admin/vendor/css-hamburgers/hamburgers.min.css" rel="stylesheet" media="all">
    <link href="admin/vendor/slick/slick.css" rel="stylesheet" media="all">
    <link href="admin/vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="admin/vendor/perfect-scrollbar/perfect-scrollbar.css" rel="stylesheet" media="all">
    <!-- Main CSS-->
    <link href="../admin/css/theme.css" rel="stylesheet" media="all">

</head>

<body class="animsition">
    <div class="page-wrapper">
        <div class="page-content--bge5">
            <div class="container">
                <div class="login-wrap">
                    <div class="login-content">
                        <div class="login-logo">
                            <a href="#">
                                PRES SCHOOL ADMIN
                            </a>
                        </div>
                        <div class="login-form">
                            <form  method="post">
                                <div class="form-group">
                                    <label>Email Address</label>
                                    <input class="au-input au-input--full" type="email" name="email_telefone" placeholder="Email">
                                </div>
                                <div class="form-group">
                                    <label>Password</label>
                                    <input class="au-input au-input--full" type="password" name="senha" placeholder="Password">
                                </div>
                                <div class="login-checkbox">
                                    <label>
                                        <input type="checkbox" name="remember">Remember Me
                                    </label>
                                    <label>
                                        <a href="#">Forgotten Password?</a>
                                    </label>
                                </div>
                                <button class="au-btn au-btn--block au-btn--green m-b-20" type="submit" name="btnentrar">Login</button>
                                <div class="social-login-content">
                                    <div class="social-button">
                                        <button class="au-btn au-btn--block au-btn--blue m-b-20">sign in with facebook</button>
                                        <button class="au-btn au-btn--block au-btn--blue2">sign in with twitter</button>
                                    </div>
                                </div>
                            </form>
                            <div class="register-link">
                                <p>
                                    Don't you have account?
                                    <a href="#">Sign Up Here</a>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <!-- Jquery JS-->
    <script src="../admin/vendor/jquery-3.2.1.min.js"></script>
    <!-- Bootstrap JS-->
    <script src="../admin/vendor/bootstrap-4.1/popper.min.js"></script>
    <script src="../admin/vendor/bootstrap-4.1/bootstrap.min.js"></script>
    <!-- Vendor JS       -->
    <script src="../admin/vendor/slick/slick.min.js">
    </script>
    <script src="../admin/vendor/wow/wow.min.js"></script>
    <script src="../admin/vendor/animsition/animsition.min.js"></script>
    <script src="../admin/vendor/bootstrap-progressbar/bootstrap-progressbar.min.js">
    </script>
    <script src="../admin/vendor/counter-up/jquery.waypoints.min.js"></script>
    <script src="../admin/vendor/counter-up/jquery.counterup.min.js">
    </script>
    <script src="../admin/vendor/circle-progress/circle-progress.min.js"></script>
    <script src="../admin/vendor/perfect-scrollbar/perfect-scrollbar.js"></script>
    <script src="../admin/vendor/chartjs/Chart.bundle.min.js"></script>
    <script src="../admin/vendor/select2/select2.min.js">
    </script>

    <!-- Main JS-->
    <script src="../admin/js/main.js"></script>

</body>

</html>
<!-- end document-->