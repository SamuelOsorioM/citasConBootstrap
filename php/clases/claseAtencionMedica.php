<?php

class AtencionMedica
{
    //-----Definicion de atributos
    protected $idAtencionMedica;
    protected $idCitaMedica;
    protected $sintomas;
    protected $idDiagnostico;
    protected $idMedicamentos;
    protected $psologia;
    protected $Conexion;
    
    //------Fin Definicion de atributos-------
    
    //-----Definicion de metodos-----

    //1.Metodo constructor
    public function crearAtencionMedica($idAtencionMedica, $idCitaMedica, $sintomas, 
                                        $idDiagnostico, $idMedicamentos, $psologia, )
    {
    $this->idAtencionMedica=$idAtencionMedica;
    $this->idCitaMedica=$idCitaMedica;
    $this->sintomas=$sintomas;
    $this->idDiagnostico=$idDiagnostico;
    $this->idMedicamentos=$idMedicamentos;
    $this->psologia=$psologia;
    }
    
     //---fin metodo constructor

    //2.Metodo get (metodo accesor-consultores)

    public function getidAtencionMedica()
        {
        return $this->idAtencionMedica;
        }
    public function getidCitaMedica()
        {
        return $this->idCitaMedica;
        }
    public function getsintomas()
        {
        return $this->sintomas;
        }
    public function getidDiagnostico()
        {
        return $this->idDiagnostico;
        }
    public function getidMedicamentos()
        {
        return $this->idMedicamentos;
        }
    public function getpsologia()
        {
        return $this->psologia;
        }


    //3. Metodo set (metodo modificador-fijadores)

    public function setidAtencionMedica($idAtencionMedica)
        {
        $this->$idAtencionMedica;
        }
    public function setidCitaMedica($idCitaMedica)
        {
        $this->$idCitaMedica;
        }
    public function setsintomas($sintomas)
        {
        $this->$sintomas;
        }
    public function setidDiagnostico($idDiagnostico)
        {
        $this->$idDiagnostico;
        }
    public function setidMedicamentos($idMedicamentos)
        {
        $this->$idMedicamentos;
        }
    public function setpsologia($psologia)
        {
        $this->$psologia;
        }

    
    //4. Métodos Asociados al CRUD y Otros
    public function agregarAtencionMedica()
    {
        $this->Conexion=conectarBaseDatos();
        $sentenciaSQL="insert into atencion_medica(
                                            idTRATAMIENTOS, 
                                            idCitaMedica, 
                                            SINTOMAS, 
                                            DIAGNOSTICO, 
                                            MEDICAMENTO, 
                                            Psologia)
                        values(
                                '$this->idAtencionMedica'
                                '$this->idCitaMedica'
                                '$this->sintomas'
                                '$this->idDiagnostico'
                                '$this->idMedicamentos'
                                '$this->psologia')";
        $resultado=$this->Conexion->query($sentenciaSQL);
        $this->Conexion->close();
        return $resultado;
    }

    public function consultarAtencionMedica($idAtencionMedica)
    {
        $this->Conexion=conectarBaseDatos();
        $sentenciaSQL="select * from atencion_medica where idTRATAMIENTOS = '$idAtencionMedica'";
        $resultado=$this->Conexion->query($sentenciaSQL);
		$this->Conexion->close();
		return $resultado;
    }

    public function actualizarAtencionMedica()
	{	
		$this->Conexion=conectarBaseDatos();
		$sentenciaSQL="update atencion_medica set
                                idCitaMedica='$this->idCitaMedica',
                                SINTOMAS='$this->sintomas', 
                                DIAGNOSTICO='$this->idDiagnostico', 
                                MEDICAMENTO='$this->idMedicamentos', 
                                Psologia='$this->psologia',
                            where idTRATAMIENTOS = '$_POST[idAtencionMedica]'";
		$resultado=$this->Conexion->query($sentenciaSQL);
		$this->Conexion->close();
		return $resultado;
    }




    

        

}

?>