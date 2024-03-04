<?php
session_start();
extract($_POST);
require"/php/controladores/conectarBaseDatos.php";
require"/php/clases/claseEmpleados.php";

$nuevoEmpleado=New Empleados();
//$nuevoPaciente->crearPaciente($_POST['cedulaPaciente'],
  //                              $_POST['primerNombrePaciente'],
    //                            $_POST['segundoNombrePaciente'],
      //                          $_POST['primerApellidoPaciente'],
        //                        $_POST['segundoApellidoPaciente'],
          //                      $_POST['direccionPaciente'],
            //                    $_POST['telefonoCelularPaciente'],
              //                  $_POST['telefonoConvencionalPaciente'],
                //                $_POST['fechaDeNacimientoPaciente'],
                  //              $_POST['sexoPaciente'],
//                                $_POST['correoElectronicoPaciente'],
  //                              $_POST['password']);
//$resultado=$nuevoPaciente->agregarPaciente();

//if($resultado)
//    header("location:../vistas/CONFIRMACION-EMPLEADO-NUEVO.html");
//else
//    header("location:../vistas/CONFIRMACION-noSeCreoPaciente.html");

?>