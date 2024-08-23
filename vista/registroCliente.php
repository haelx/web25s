<?php
session_start();
$mensaje=$_SESSION['mensaje'];
if($mensaje!=""){
    echo "<script>alert('$mensaje')</script>";
}
include_once "cabecera.php";
include_once "menu.php";
?>
    <main class="app-content">
        <!--        <div class="app-title">-->
        <!--            <div>-->
        <!--                <h1><i class="bi bi-ui-checks"></i> Registro Cliente</h1>-->
        <!--                <p>Formulario de registro Cliente</p>-->
        <!--            </div>-->
        <!--            <ul class="app-breadcrumb breadcrumb">-->
        <!--                <li class="breadcrumb-item"><i class="bi bi-house-door fs-6"></i></li>-->
        <!--                <li class="breadcrumb-item">Forms</li>-->
        <!--                <li class="breadcrumb-item"><a href="#">Sample Forms</a></li>-->
        <!--            </ul>-->
        <!--        </div>-->
        <div class="row">
            <div class="col-12">
                <div class="tile">
                    <h3 class="tile-title">Register</h3>
                    <div class="tile-body">
                        <form class="form-horizontal" action="../controlador/ctrlCliente.php" method="post">
                            <div class="mb-3 row">
                                <label id="nombre" class="form-label col-md-3">Nombre</label>
                                <div class="col-md-8">
                                    <input required id="nombre" name="nombre" class="form-control" type="text"
                                           placeholder="Ingrese su nombre">
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label id="apellido1" class="form-label col-md-3">Apellido 1</label>
                                <div class="col-md-8">
                                    <input required name="apellido1" id="apellido1" class="form-control" type="text"
                                           placeholder="Ingrese su apellido 1">
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label id="apellido2" class="form-label col-md-3">Apellido 2</label>
                                <div class="col-md-8">
                                    <input name="apellido2" id="apellido2" class="form-control" type="text"
                                           placeholder="Ingrese su apellido 2">
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label id="email" class="form-label col-md-3">Email</label>
                                <div class="col-md-8">
                                    <input required name="email" id="email" class="form-control col-md-8" type="email"
                                           placeholder="Enter email address">
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label id="direccion" class="form-label col-md-3">Direccion</label>
                                <div class="col-md-8">
                                    <textarea name="direccion" id="direccion" class="form-control" rows="4"
                                              placeholder="Ingrese su direccion"></textarea>
                                </div>
                            </div>

                    </div>
                    <div class="tile-footer">
                        <div class="row">
                            <div class="col-md-8 col-md-offset-3">
                                <button class="btn btn-primary" type="submit"><i
                                            class="bi bi-check-circle-fill me-2"></i>Register
                                </button>&nbsp;&nbsp;&nbsp;<a class="btn btn-secondary" href="#"><i
                                            class="bi bi-x-circle-fill me-2"></i>Cancel</a>
                            </div>
                        </div>
                    </div>
                    </form>
                </div>
            </div>
            <div class="clearix"></div>
        </div>
    </main>

<?php
include_once "footer.php";
$_SESSION['mensaje']="";