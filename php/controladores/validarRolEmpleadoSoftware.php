<?php
session_start();
extract($_POST);
require"/php/controladores/conectarBaseDatos.php";
require"/php/clases/claseRolEmpleadoSoftware.php";

$nuevoRolSoftware=New RoleEmpleadoSoftware();
$nuevoRolSoftware->crearRolEmpleadoSoftware(
                                $_POST['idRolEmpleadoSoftware'],
                                $_POST['tipoRolEmpleadoEnSoftware']);
$resultado=$nuevoRolSoftware->agregarRolEmpleadoSoftware();

if($resultado)
    header("location:../vistas/CONFIRMACION-EMPLEADO-NUEVO.html");
else
    header("location:../vistas/CONFIRMACION-noSeCreoPaciente.html");
?>