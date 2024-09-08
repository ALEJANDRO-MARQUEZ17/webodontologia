
<?php
/*
session_start();
if($_SESSION['us_tipo']==1){
*/
?>
<!DOCTYPE html>
<html lang="es" class="" style="height: auto;">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>SISTEMA ODONTOLOGIA</title>
        <!-- FONTS -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@700&display=swap" rel="stylesheet">
        <!-- Font Awesome -->
        <link rel="stylesheet" href="/webodontologia/css/fontawesome-free-6.6.0-web/css/all.min.css">
        <!-- Theme style -->
        <link rel="stylesheet" href="/webodontologia/css/adminlte.min.css">
    </head>
    <body class="sidebar-mini dark-mode layout-navbar-fixed layout-fixed layout-footer-fixed accent-lightblue sidebar-collapse" style="height: auto;">
        <div class="wrapper">
            <nav class="main-header navbar navbar-expand border-bottom-0 navbar-light bg-lightblue">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
                    </li>
                    <li class="nav-item d-none d-sm-inline-block">
                        <a href="/webodontologia/adm.php" class="nav-link">Home</a>
                    </li>
                </ul>
            </nav>
            <aside class="main-sidebar elevation-4 sidebar-light-lightblue">
                <a href="/webodontologia/adm.php" class="brand-link bg-lightblue">
                    <img src="/webodontologia/img/logo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
                    <span class="brand-text font-weight-light">ODONTOLOGIA</span>
                </a>
                <div class="sidebar os-theme-dark" style="overflow-y: auto;">
                    <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                        <div class="image">
                            <img src="/webodontologia/img/avatar.png" class="img-circle elevation-2" alt="User Image">
                        </div>
                        <div class="info">
                            <a href="/webodontologia/adm.php" class="d-block">Usuario administrador</a>
                        </div>
                    </div>
                <nav class="mt-2">
                    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                        <li class="nav-header">PACIENTES</li>
                            <li class="nav-item">
                                <a href="#" class="nav-link">
                                <i class="nav-icon far fa-image"></i>
                                <p>
                                lista de pacientes
                                </p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="#" class="nav-link">
                                <i class="nav-icon far fa-image"></i>
                                <p>
                                agregar paciente
                                </p>
                                </a>
                            </li>
                        </li>
                    </ul>
                    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                        <li class="nav-header">DOCTORES</li>
                            <li class="nav-item">
                                <a href="#" class="nav-link">
                                <i class="nav-icon far fa-image"></i>
                                <p>
                                lista de doctores
                                </p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="#" class="nav-link">
                                <i class="nav-icon far fa-image"></i>
                                <p>
                                agregar doctor
                                </p>
                                </a>
                            </li>
                        </li>
                    </ul>
                </nav>
        </div>
            </aside>
        <footer class="main-footer text-sm">
            <div class="float-right d-none d-sm-block">
                    <b>Version</b> 1.0.0
                </div>
            <strong>Copyright © 2024-2030 <a href="https:www.utb.edu.bo">Alaugon</a>.</strong> Todos los derechos reservados.
        </footer>
        <script src="/webodontologia/js/jquery.min.js"></script>
        <script src="/webodontologia/js/bootstrap.bundle.min.js"></script>
        <script src="/webodontologia/js/adminlte.min.js"></script>
    </body>
</html>
<?php
/*
}
else{
header('Location: ../vista/login.php');
*/
?>