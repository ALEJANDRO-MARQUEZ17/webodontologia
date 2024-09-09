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
                        <a href="/webodontologia/vista/adm.php" class="nav-link">Home</a>
                    </li>
                </ul>
                <ul class="navbar-nav ml-auto">
                    
                        <a href="/webodontologia/controlador/logOut.php" style="color: white">Cerrar Sesion</a>
                    
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
                        <li class="nav-header">Usuario</li>
                            <li class="nav-item">
                                <a href="editarDatosPersonales.php" class="nav-link">
                                <i class="fa-solid fa-user-cog"></i>
                                <p>
                                Datos Personales
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
                </nav>
        </div>
            </aside>