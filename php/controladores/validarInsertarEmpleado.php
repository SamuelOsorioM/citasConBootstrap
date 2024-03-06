<?php
session_start();
extract($_POST);
require"/php/controladores/conectarBaseDatos.php";
require"/php/clases/claseEmpleados.php";

$nuevoEmpleado=New Empleados();
$nuevoEmpleado->crearEmpleado($_POST['cedulaEmpleados'],
                                $_POST['primerNombreEmpleado'],
                                $_POST['segundoNombreEmpleado'],
                                $_POST['primerApellidoEmpleado'],
                                $_POST['segundoApellidoEmpleado'],
                                $_POST['direccionEmpleado'],
                                $_POST['correoElectronicoEmpleado'],
                                $_POST['telefonoCelularEmpleado'],
                                $_POST['idCargoEmpleado'],
                                $_POST['idEspecilidadMedica'],
                                $_POST['idTipoDeContraoEmpleado'],
                                $_POST['idRolEmpleadoEnSoftware'],
                                $_POST['passwordEmpleado']);
$resultado=$nuevoEmpleado->agregarEmpleado();

//if($resultado)
//    header("location:../vistas/CONFIRMACION-EMPLEADO-NUEVO.html");
//else
//    header("location:../vistas/CONFIRMACION-noSeCreoPaciente.html");

?>