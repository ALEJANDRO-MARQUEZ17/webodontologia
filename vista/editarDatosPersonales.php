<?php /*
session_start();
if($_SESSION['us_tipo']==1){*/
    include_once 'layouts/header.php';
?>
        <title>SISTEMA ODONTOLOGIA</title>
<?php
    include_once 'layouts/nav.php';
?>
<div class="content-wrapper">
    <section class="content-header">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>Datos Personales</h1>
            </div>
        </div>
    </section>
    <section>
        <div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-3">
                        <div class="card card-info card-outline">
                            <div class="card-body boxprofile">
                                <div class="text-center">
                                    <img src="../img/avatar.png" class="profile-user-img img-fluid img-circle">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
<?php 
include_once 'layouts/footer.php'
/*
}
else{
    header('Location: /webodontologia/vista/login.php');
}*/
?>