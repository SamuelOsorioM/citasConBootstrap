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
    protected $observacionesMedico;
    protected $Conexion;
    
    //------Fin Definicion de atributos-------
    
    //-----Definicion de metodos-----

    //1.Metodo constructor
    public function crearAtencionMedica($idAtencionMedica, $idCitaMedica, $sintomas, 
                                        $idDiagnostico, $idMedicamentos, $psologia, 
                                        $observacioesMedico)
    {
    $this->idAtencionMedica=$idAtencionMedica;
    $this->idCitaMedica=$idCitaMedica;
    $this->sintomas=$sintomas;
    $this->idDiagnostico=$idDiagnostico;
    $this->idMedicamentos=$idMedicamentos;
    $this->psologia=$psologia;
    $this->observacionesMedico;
    }
    
     //---fin metodo constructor

    //2.Metodo get (metodo accesor-consultores)

    public function getidAtencionMedica()
        {
        return ($this->idAtencionMedica);
        }
    public function getidCitaMedica()
        {
        return ($this->idCitaMedica);
        }
    public function getsintomas()
        {
        return ($this->sintomas);
        }
    public function getidDiagnostico()
        {
        return ($this->idDiagnostico);
        }
    public function getidMedicamentos()
        {
        return ($this->idMedicamentos);
        }
    public function getpsologia()
        {
        return ($this->psologia);
        }
    public function getObservacionesMedico()
        {
            return ($this->observacionesMedico);
        }

    //3. Metodo set (metodo modificador-fijadores)

    public function setidAtencionMedica($idAtencionMedica)
        {
        $this->idAtencionMedica=$idAtencionMedica;
        }
    public function setidCitaMedica($idCitaMedica)
        {
        $this->idCitaMedica=$idCitaMedica;
        }
    public function setsintomas($sintomas)
        {
        $this->sintomas=$sintomas;
        }
    public function setidDiagnostico($idDiagnostico)
        {
        $this->idDiagnostico=$idDiagnostico;
        }
    public function setidMedicamentos($idMedicamentos)
        {
        $this->idMedicamentos=$idMedicamentos;
        }
    public function setpsologia($psologia)
        {
        $this->psologia=$psologia;
        }
    public function setObservacionesMedico($observacionesMedico)
        {
        $this->observacionesMedico=$observacionesMedico;
        }

    
    //4. Métodos Asociados al CRUD y Otros
    public function agregarAtencionMedica()
    {
        $this->Conexion=conectarBaseDatos();
        $sentenciaSQL="INSERT INTO atencion_medica(
                                            idTRATAMIENTOS, 
                                            idCitaMedica, 
                                            SINTOMAS, 
                                            DIAGNOSTICO, 
                                            MEDICAMENTO, 
                                            Psologia,
                                            OBSERVACIONES ESPECIALISTA)
                        VALUES(
                                '$this->idAtencionMedica'
                                '$this->idCitaMedica'
                                '$this->sintomas'
                                '$this->idDiagnostico'
                                '$this->idMedicamentos'
                                '$this->psologia'
                                '$this->observacionesMedico')";
        $resultado=$this->Conexion->query($sentenciaSQL);
        $this->Conexion->close();
        return $resultado;
    }

    public function consultarAtencionMedica($idAtencionMedica)
    {
        $this->Conexion=conectarBaseDatos();
        $sentenciaSQL="SELECT * FROM atencion_medica WHERE idTRATAMIENTOS = '$idAtencionMedica'";
        $resultado=$this->Conexion->query($sentenciaSQL);
		$this->Conexion->close();
		return $resultado;
    }

    public function actualizarAtencionMedica()
	{	
		$this->Conexion=conectarBaseDatos();
		$sentenciaSQL="UPDATE atencion_medica SET
                                idCitaMedica='$this->idCitaMedica',
                                SINTOMAS='$this->sintomas', 
                                DIAGNOSTICO='$this->idDiagnostico', 
                                MEDICAMENTO='$this->idMedicamentos', 
                                Psologia='$this->psologia',
                                OBSERVACIONES ESPECIALISTA='$this->observacionesMedico'
                            WHERE idTRATAMIENTOS = '$_POST[idAtencionMedica]'";
		$resultado=$this->Conexion->query($sentenciaSQL);
		$this->Conexion->close();
		return $resultado;
    }




    

        

}

?>