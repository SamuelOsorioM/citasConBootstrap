<?php

class CargosEmpleados
{
    //-----Definicion de atributos
    protected $idCargoEmpleado;
    protected $cargoEmpleado;
    protected $Conexion;

    //------Fin Definicion de atributos-------

    //-----Definicion de metodos-----

    //1.Metodo constructor
    public function crearCargoEmpleados($idCargoEmpleado, $cargoEmpleado)
    {
        $this->idCargoEmpleado=$idCargoEmpleado;
        $this->cargoEmpleado=$cargoEmpleado;
    }

    //---fin metodo constructor

    //2.Metodo get (metodo accesor-consultores)

    public function getidCargoEmpleado()
        {
        return $this->idCargoEmpleado;
        }
    
    public function getcargoEmpleado()
        {
        return $this->cargoEmpleado;
        }
    
    //3. Metodo set (metodo modificador-fijadores)

    public function setidCargoEmpleado($idCargoEmpleado)
        {
        $this->$idCargoEmpleado;
        }
    
    public function setcargoEmpleado($cargoEmpleado)
        {
        $this->$cargoEmpleado;
        }
    
    //4. Métodos Asociados al CRUD y Otros

    public function agregarCargoEmpleado()
    {
       $this->Conexion=conectarBaseDatos();
       $sentenciaSQL="INSERT INTO cargos_emplados(
                            ID CARGOS,
                            CARGO EMPLEADO)
                    VALUES(
                        '$this->idCargoEmpleado';
                        '$this->cargoEmpleado')";
        $resultado=$this->Conexion->query($sentenciaSQL);
        $this->Conexion->close();
        return $resultado;
    }

    public function consultarCargoEmpleado($idCargoEmpleado)
    {
        $this->Conexion=conectarBaseDatos();
        $sentenciaSQL="SELECT * FROM cargos_emplados WHERE ID CARGOS = '$idCargoEmpleado'";
        $resultado=$this->Conexion->query($sentenciaSQL);
		$this->Conexion->close();
		return $resultado;
    }

    public function actualizarCargoEmpledao()
	{	
		$this->Conexion=conectarBaseDatos();
		$sentenciaSQL="UPDATE cargos_emplados SET
                            CARGO EMPLEADO ='$this->cargoEmpleado',
                            WHERE ID CARGOS = '$_POST[idCargoEmpleado]'";
		$resultado=$this->Conexion->query($sentenciaSQL);
		$this->Conexion->close();
		return $resultado;
    }
}

?>