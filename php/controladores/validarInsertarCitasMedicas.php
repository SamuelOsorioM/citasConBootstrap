<?php
session_start();
extract($_POST);
require"controlador/conectarBaseDatos.php";
require"modelo/claseCitasMedicas.php";

$nuevaCita=New nuevaCita();
$nuevoCita->crearNuevaCita(
                        $_POST['idCitaMedica'],
                        $_POST['fechaCitaMedica'],
                        $_POST['horaCitaMedica'],
                        $_POST['estadoCitaMedica'],
                        $_POST['cedulaPaciente'],
                        $_POST['primerNombrePaciente'],
                        $_POST['segundoNombrepaciente'],
                        $_POST['primerApellidoPaciente'],
                        $_POST['segundoApellidoPaciente'],
                        $_POST['correoElectronicoPaciente'],
                        $_POST['telefonoCelularPaciente'],
                        $_POST['especialidadMedica'],
                        $_POST['identificacionConusltorio'],
                        $_POST['identificacionMedico']);
$resultado=$nuevoCita->agregarCitaMedica();

//if($resultado)
//    header("location:vista/html/CONFIRMACION-CITA-MEDICA.html");
//else
//    header("location:../vistas/CONFIRMACION-noSeCreoPaciente.html");

?>