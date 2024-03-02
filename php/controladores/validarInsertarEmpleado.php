<?php
session_start();
extract($_POST);
require"/php/controladores/conectarBaseDatos.php";
require"/php/clases/claseEmpleados.php";

$nuevoPaciente=New Pacientes();
$nuevoPaciente->crearPaciente($_POST['cedulaEmpleados'],
                                $_POST['primerNombreEmpleado'],
                                $_POST['segundoNombreEmpleado'],
                                $_POST['primerApellidoEmpleado'],
                                $_POST['segundoApellidoEmpleado'],
                                $_POST['direccionEmpleado'],
                                $_POST['correoElectronicoEmpleado'],
                                $_POST['telefonoCelularEmpleado'],
                                $_POST['idCargoEmpleado'],
                                $_POST['idEspecialidadMedica'],
                                $_POST['idTipoDeContratoEmpleado'],
                                $_POST['idRolEmpleadoEnSoftware'],
                                $_POST['passwordEmpleado']);
$resultado=$nuevoPaciente->agregarPaciente();

if($resultado)
    header("location:../vistas/CONFIRMACION-EMPLEADO-NUEVO.html");
else
    header("location:../vistas/CONFIRMACION-noSeCreoEmpleado.html");

?>