<?php

class RoleEmpleadoSoftware{

    //-----Definicion de atributos
    protected $idRolEmpleadoEnSoftware;
    protected $tipoRolEmpleadoEnSoftware;
    protected $Conexion;

    //------Fin Definicion de atributos-------

    //-----Definicion de metodos-----

    //1.Metodo constructor
    public function crearRolEmpleadoSoftware($idRolEmpleadoEnSoftware, $tipoRolEmpleadoEnSoftware)
    {
        $this->idRolEmpleadoEnSoftware=$idRolEmpleadoEnSoftware;
        $this->tipoRolEmpleadoEnSoftware=$tipoRolEmpleadoEnSoftware;
    }

    //---fin metodo constructor

    //2.Metodo get (metodo accesor-consultores)
    public function getidRolEmpleadoEnSoftware()
        {
        return $this->idRolEmpleadoEnSoftware;
        }

    public function gettipoRolEmpleadoEnSoftware()
        {
        return $this->tipoRolEmpleadoEnSoftware;
        }

    //3. Metodo set (metodo modificador-fijadores)

    public function setidRolEmpleadoEnSoftware($idRolEmpleadoEnSoftware)
        {
        $this->$idRolEmpleadoEnSoftware;
        }

    public function settipoRolEmpleadoEnSoftware($tipoRolEmpleadoEnSoftware)
        {
        $this->$tipoRolEmpleadoEnSoftware;
        }

    //4. Métodos Asociados al CRUD y Otros

    public function agregarRolEmpleadoSoftware()
    {
       $this->Conexion=conectarBaseDatos();
       $sentenciaSQL="INSERT INTO rol en el gestor(
                            ID ROL EN EL GESTOR,
                            TIPO DE ROL EN EL GESTOR)
                    VALUES(
                        '$this->idRolEmpleadoEnSoftware';
                        '$this->tipoRolEmpleadoEnSoftware')";
        $resultado=$this->Conexion->query($sentenciaSQL);
        $this->Conexion->close();
        return $resultado;
    }

    public function consultarRolEmpleado($idRolEmpleadoEnSoftware)
    {
        $this->Conexion=conectarBaseDatos();
        $sentenciaSQL="SELECT * FROM rol en el gestor WHERE ID ROL EN EL GESTOR = '$idRolEmpleadoEnSoftware'";
        $resultado=$this->Conexion->query($sentenciaSQL);
		$this->Conexion->close();
		return $resultado;
    }

    public function actualizarRolEmpleado()
	{	
		$this->Conexion=conectarBaseDatos();
		$sentenciaSQL="UPDATE rol en el gestor SET
                            TIPO DE ROL EN EL GESTOR ='$this->tipoRolEmpleadoEnSoftware',
                            WHERE ID ROL EN EL GESTOR = '$_POST[idRolEmpleadoEnSoftware]'";
		$resultado=$this->Conexion->query($sentenciaSQL);
		$this->Conexion->close();
		return $resultado;
    }


}


?>