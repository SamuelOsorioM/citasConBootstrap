<?php

class TiposContratos{

    //-----Definicion de atributos

    protected $idTipoContrato;
    protected $tipoContrato;
    protected $Conexion;

    //------Fin Definicion de atributos-------

    //-----Definicion de metodos-----

    //1.Metodo constructor
    public function crearTiposContratos($idTipoContrato, $tipoContrato)
    {
        $this->idTipoContrato=$idTipoContrato;
        $this->tipoContrato=$tipoContrato;
    }

    //---fin metodo constructor

    //2.Metodo get (metodo accesor-consultores)

    public function getidTipoContrato()
        {
        return $this->idTipoContrato;
        }
    
    public function gettipoContrato()
        {
        return $this->tipoContrato;
        }


    //3. Metodo set (metodo modificador-fijadores)

    public function setidTipoContrato($idTipoContrato)
        {
        $this->$idTipoContrato;
        }

    public function settipoContrato($tipoContrato)
        {
        $this->$tipoContrato;
        }

    //4. Métodos Asociados al CRUD y Otros

    public function agregarTipoContrato()
    {
       $this->Conexion=conectarBaseDatos();
       $sentenciaSQL="INSERT INTO tipo_contrato(
                            ID TIPO CONTRATO,
                            TIPO DE CONTRATO)
                    VALUES(
                        '$this->idTipoContrato';
                        '$this->tipoContrato')";
        $resultado=$this->Conexion->query($sentenciaSQL);
        $this->Conexion->close();
        return $resultado;
    }

    public function consultarTipoContrato($idTipoContrato)
    {
        $this->Conexion=conectarBaseDatos();
        $sentenciaSQL="SELECT * FROM tipo_contrato WHERE ID TIPO CONTRATO = '$idTipoContrato'";
        $resultado=$this->Conexion->query($sentenciaSQL);
		$this->Conexion->close();
		return $resultado;
    }

    public function actualizarTipoContrato()
	{	
		$this->Conexion=conectarBaseDatos();
		$sentenciaSQL="UPDATE tipo_contrato SET
                            TIPO DE CONTRATO ='$this->idTipoContrato',
                            WHERE ID TIPO CONTRATO = '$_POST[tipoContrato]'";
		$resultado=$this->Conexion->query($sentenciaSQL);
		$this->Conexion->close();
		return $resultado;
    }
    
    
}
?>