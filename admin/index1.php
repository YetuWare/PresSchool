<?php

//    error_reporting(0);
//    ini_set(“display_errors”, 0);
    session_start();
    include '../conexao.php';
    $nomee = $_SESSION['nome'];
    /*if((!isset ($_SESSION['nome_admin']) == true) and (!isset ($_SESSION['senha'] )== true)){

        unset($_SESSION['nome_admin']);
        unset($_SESSION['senha']);
        header('Location:../index.php');

    }*/
    if(isset($_POST['editar'])){
                                    
        $n_produto = $_POST['nome'];
        $id = $_POST['id'];
        $p_produto = $_POST['preco'];
        $quantidade = $_POST['quantidade'];
        $cor = $_POST['cor'];
        $categoria = $_POST['categoria'];
        $imagem = $_POST['imagem'];
        mysqli_query($connection,"update produtos SET nome_produto='$n_produto', preco='$p_produto', quantidade='$quantidade', cor='$cor', categoria='$categoria', imagem='$imagem' WHERE id_produto='$id'");

        header('location: index1.php');
    }
    if(isset($_POST['editar2'])){
       $id_usuario = $_POST['id_usuario'];
       $n_usuario = $_POST['nome_usuario'];
       $email_telefone = $_POST['email_telefone'];
       $morada = $_POST['morada'];
       $senha = $_POST['senha'];        
       mysqli_query($connection,"update usuario SET nome_usuario='$n_usuario', email_telefone='$email_telefone', morada='$morada', senha='$senha' WHERE id_usuario='$id_usuario'");

       header('location: index1.php');
    }
    if(isset($_POST['editar3'])){
        $id_admin = $_POST['id_admin'];
        $n_admin = $_POST['nome_admin'];
        $email_telefone = $_POST['email_telefone'];
        $morada = $_POST['morada'];
        $senha = $_POST['senha'];        
        mysqli_query($connection,"update admin SET nome_admin='$n_admin', email_telefone='$email_telefone', morada='$morada', senha='$senha' WHERE id_admin='$id_admin'");
 
        header('location: index1.php');
     }
?>
<!DOCTYPE html>
<html lang="pt-PT">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Admin</title>

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">
    
    
</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
                
                <div class="sidebar-brand-text mx-3">Admin</div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item active">
                <a class="nav-link" href="index.html">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Dashboard</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
                Administradores
            </div>

            <!-- Nav Item - Utilities Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="addadmin.php" 
                    aria-expanded="true" aria-controls="collapseUtilities">
                    <span>Adicionar Admnistradores</span>
                </a>
               
            </li>
            

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
                Galeria
            </div>

            <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="postmidia.php"
                    aria-expanded="true" aria-controls="collapsePages">
                    <span>Adicionar Fotos/Vídeos</span>
                </a>
               
            </li>

            <div class="sidebar-heading">
                Contadores
            </div>

            <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="contadores.php"
                    aria-expanded="true" aria-controls="collapsePages">
                    <span>Actualizar Números</span>
                </a>
               
            </li>


            

        </ul>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                    <!-- Sidebar Toggle (Topbar) -->
                    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                        <i class="fa fa-bars"></i>
                    </button>

                    
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item dropdown no-arrow d-sm-none">
                            <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-search fa-fw"></i>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in"
                                aria-labelledby="searchDropdown">
                                <form class="form-inline mr-auto w-100 navbar-search">
                                    <div class="input-group">
                                        <input type="text" class="form-control bg-light border-0 small"
                                            placeholder="Search for..." aria-label="Search"
                                            aria-describedby="basic-addon2">
                                        <div class="input-group-append">
                                            <button class="btn btn-primary" type="button">
                                                <i class="fas fa-search fa-sm"></i>
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </li>
                        <li class="nav-item dropdown no-arrow mx-1">
                            <a class="nav-link dropdown-toggle" href="#" id="alertsDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-bell fa-fw"></i>
                                <span class="badge badge-danger badge-counter">3+</span>
                            </a>
                            
                        <li class="nav-item dropdown no-arrow mx-1">
                            <a class="nav-link dropdown-toggle" href="#" id="messagesDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">  
                                <i class="fas fa-envelope fa-fw"></i>
                                <span class="badge badge-danger badge-counter">7</span>
                            </a>
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="mr-2 d-none d-lg-inline text-gray-600 small"><?php echo "$nomee";?></span>
                                <img class="img-profile rounded-circle"
                                    src="img/undraw_profile.svg">
                            </a>
                            <!-- Dropdown - User Information -->
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="userDropdown">
                                
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="index.php">
                                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Terminar sessão
                                </a>
                            </div>
                        </li>

                    </ul>

                </nav>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
                        
                    </div>
                    <div>
                        <h3>Administradores</h3>
                        
                                <?php
                                 
                                    $query = "select * from admin";
                                    $dados = mysqli_query($conexao,$query);
                                    
                                    if($dados){
                                        $total = mysqli_num_rows($dados);
                                        if($total > 0){
                                            
                                            
                                            echo "
                                    
                                            <table class='table table-bordered table-hover table-sm table-responsive'>
                                            <thead class='thead-light'>    
                                            <tr>
                                                    <th>ID</th>
                                                    <th> Nome</th>
                                                    <th>Email / Telefone</th>
                                                    <th>Morada</th>
                                                    <th>Senha</th>
                                                    <th>Acções</th>
                                                </tr></thead>";        
                                while($linha = mysqli_fetch_assoc($dados)){
                                    $identify2 = $linha['id'];
                                    echo "
                                    <tbody>
                                    <tr>
                                    
                                    <td>".$linha['id']."</td>".
                                    "<td>".$linha['nome']."</td>".
                                    "<td>".$linha['email']."
                                    </td>".
                                    "<td>"."*******"."</td>"."
                                    
                                    <td><form method='POST' action='../remadmin.php?id=".$identify2."'>
                                    
                                <button name='btneliminar' style='background-color: transparent;border:none;'>
                                apagar
                                </form>
                                </td>
                                </tr>
                                    <!--<tr id='edit' style=''>
                                    <form method='POST'>
                                        <td> <input type='hidden' name='id_admin' value=".$linha['id_admin']."></input> </td>    
                                        <td> <label>Nome</label><br><input name='nome_admin' value=".$linha['nome_admin']."></input> </td>
                                        <td> <label>Email / Telefone</label><br><input type='text' name='email_telefone' value=".$linha['email_telefone']."></input> </td>
                                        <td> <label>Morada</label><br><input name='morada' value=".$linha['morada']."></input> </td> 
                                        <td> <label>Senha</label><br><input type='password' name='senha'></td>   
                                        <td> <br><button type='submit' name='editar3'> Actualizar </button> </td>
                                    </tr>-->     
                                    </form>    
                                    
                                    ";
                                }
                                      echo "</tr></table>";  
                                    }
                                }

                                

                    ?>
                                
                                
                    </div>
                    <br><br><br>
                    <div>
                        <h3>Usuários</h3>
                        <?php
                                 
                                    $query = "select * from usuario";
                                    $dados = mysqli_query($connection,$query);
                                    
                                    if($dados){
                                        $total = mysqli_num_rows($dados);
                                        if($total > 0){
                                            
                                            
                                            echo "
                                    
                                            <table class='table table-bordered table-hover table-sm table-responsive'>
                                            <thead class='thead-light'>    
                                            <tr>
                                                    <th>ID</th>
                                                    <th> Nome</th>
                                                    <th>Email / Telefone</th>
                                                    <th>Morada</th>
                                                    <th>Senha</th>
                                                    <th>Acções</th>
                                                </tr></thead>";        
                                while($linha = mysqli_fetch_assoc($dados)){
                                    $identify3 = $linha['id_usuario'];
                                    echo "
                                    <tbody>
                                    <tr>
                                    
                                    <td>".$linha['id_usuario']."</td>".
                                    "<td>".$linha['nome_usuario']."</td>".
                                    "<td>".$linha['email_telefone']."
                                    </td>".
                                    "<td>".$linha['morada']."
                                    </td>".
                                    "<td>"."********"."</td>"."
                                    <td><form method='POST' action='../remusuario.php?id=".$identify3."'>
                                    
                                <button name='btneliminar' style='background-color: transparent;border:none;'>
                                <img style='cursor: pointer;' src='../icons/apagar.png'></button>
                                </form>
                                </td>
                                    </tr>
                                    <tr id='edit' style=''>
                                    <form method='POST'>
                                        <td> <input type='hidden' name='id_usuario' value=".$linha['id_usuario']."></input> </td>    
                                        <td> <label>Nome</label><br><input name='nome_usuario' value=".$linha['nome_usuario']."></input> </td>
                                        <td> <label>Email / Telefone</label><br><input type='text' name='email_telefone' value=".$linha['email_telefone']."></input> </td>
                                        <td> <label>Morada</label><br><input name='morada' value=".$linha['morada']."></input> </td> 
                                        <td> <label>Senha</label><br><input type='password' name='senha'></td>   
                                        <td> <br><button type='submit' name='editar2'> Actualizar </button> </td>      
                                    </form>
                                      
                                    
                                    
                                    
                                    ";
                                }
                                      echo "</tr></table>";  
                                    }
                                }

                                

                    ?>
                    <div>
                        <h3>Produtos</h3>
                        <?php
                                 
                                    $query = "select * from produtos";
                                    $dados = mysqli_query($connection,$query);
                                    
                                    if($dados){
                                        $total = mysqli_num_rows($dados);
                                        if($total > 0){
                                            
                                            
                                            echo "
                                    
                                            <table class='table table-bordered table-hover table-sm table-responsive'>
                                            <thead class='thead-light'>    
                                            <tr>
                                                    <th>ID</th>
                                                    <th> Nome</th>
                                                    <th>Foto</th>
                                                    <th>Quantidade</th>
                                                    <th>Preço</th>
                                                    <th>Cor</th>
                                                    <th>Categoria</th>
                                                    <th>Acções</th>
                                                </tr></thead>";        
                                while($linha = mysqli_fetch_assoc($dados)){
                                    $identify1 = $linha['id_produto'];
                                    $imagemm = $linha['imagem'];
                                    echo "
                                    <tbody>
                                    <tr>
                                    
                                    <td>".$linha['id_produto']."</td>".
                                    "<td>".$linha['nome_produto']."</td>".

                                    "<td><img style='height:90px' src='uploads/$imagemm'>".
                                    "<td>".$linha['quantidade'].
                                    "<td>".$linha['preco']."KZ"."
                                    </td>".
                                    "<td>".$linha['cor']."
                                    </td>".
                                    "<td>".$linha['categoria']."</td>"."
                                    <td><form method='POST' action='../remproduto.php?id=".$identify1."'>
                                    
                                <button name='btneliminar' style='background-color: transparent;border:none;'>
                                <img style='cursor: pointer;' src='../icons/apagar.png'></button>
                            </form>
                            </td>
                            </tr>
                            <tr id='edit' style=''>
                            <form method='POST'>
                                <td> <input type='hidden' name='id' value=".$linha['id_produto']."></input> </td>    
                                <td> <label>Nome do Produto</label><input name='nome' value=".$linha['nome_produto']."></input> </td>
                                <td> <label>Imagem do produto</label><input type='file' name='imagem' value=".$linha['imagem']."></input> </td>
                                <td> <label>Quantidade</label><input type='number' name='quantidade' value=".$linha['quantidade']."></input> </td>
                                <td> <label>Cor</label><input type='text' name='cor' value=".$linha['cor']."></input> </td>
                                <td> <label>Preço</label><input name='preco' value=".$linha['preco']."></input> </td> 
                                <td> <label>Categoria</label><select name='categoria'><option value=".$linha['categoria']."></option><option>Casual</option><option>Esportivo</option><option>Sapato</option></select> </td>   
                                <td> <br><button type='submit' name='editar'> Actualizar </button> </td>  
                            </form>  
                                
                                    ";
                                    
                                    

                                    
                                }
                                
                                      echo "</tr></table>";  
                                    }
                                }

                                

                    ?>
                    </div>

                    <!-- Content Row -->
                    
            <!-- Footer -->
            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Copyright &copy; Loja 2021</span>
                    </div>
                </div>
            </footer>
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-primary" href="login.html">Logout</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>

    <!-- Page level plugins -->
    <script src="vendor/chart.js/Chart.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="js/demo/chart-area-demo.js"></script>
    <script src="js/demo/chart-pie-demo.js"></script>
    <script>
        function abrir(){

            document.getElementById("edit").style.display ="block";

        }
        function fechar(){

            document.getElementById("edit").style.display ="none";

        }
    </script>

</body>

</html>