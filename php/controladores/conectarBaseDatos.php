<?php

function conectarBaseDatos()
{
    $ObjConexion= new mysqli("localhost","root","","citasmedicas");
    if($ObjConexion->connect_errno){
        echo "Error en la conección de la base de datos :(".$ObjConexion->connect_error;
        exit();
    }
    else{
        return $ObjConexion;
    }

}

?>