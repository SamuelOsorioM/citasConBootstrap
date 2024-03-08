<?php
session_start();
extract($_POST);
require"/php/controladores/conectarBaseDatos.php";
require"/php/clases/claseAtencionMedica.php";

$nuevaAtencionMedica=New AtencionMedica();
$nuevaAtencionMedica->crearAtencionMedica(
                                $_POST['idAtencionMedica'],
                                $_POST['idCitaMedica'],
                                $_POST['sintomas'],
                                $_POST ['idDiagnostico'],
                                $_POST['idMedicamentos'],
                                $_POST['psologia'],
                                $_POST['observacionesMedico']);
$resultado=$nuevaAtencionMedica->agregarAtencionMedica();

if($resultado)
    header("location:../vistas/CONFIRMACION-EMPLEADO-NUEVO.html");
else
    header("location:../vistas/CONFIRMACION-noSeCreoPaciente.html");
?>