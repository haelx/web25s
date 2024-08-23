<?php
include_once "../modelo/modCliente.php";
//Llenado de los datos del formulario html.
if($_POST) {
    $nombre = htmlspecialchars($_POST['nombre']);
    $apellido1 = htmlspecialchars($_POST['apellido1']);
    $apellido2 = htmlspecialchars($_POST['apellido2']);
    $email = htmlspecialchars($_POST['email']);
    $direccion = htmlspecialchars($_POST['direccion']);

    $modCli= new Cliente();
    $modCli->setNombre($nombre);
    $modCli->setApellido1($apellido1);
    $modCli->setApellido2($apellido2);
    $modCli->setEmail($email);
    $modCli->setDireccion($direccion);
    $modCli->RegistrarCliente();
}