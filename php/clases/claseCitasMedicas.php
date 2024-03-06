<?php

class nuevaCita
{

     //-----Definicion de atributos

     public $idCitaMedica;
     public $fechaCitaMedica;
     public $horaCitaMedica;
     public $estadoCitaMedica;
     public $cedulaPaciente;
     public $primerNombrePaciente;
     public $segundoNombrePaciente;
     public $primerApellidoPaciente;
     public $segundoApellidoPaciente;
     private $correoElectronicoPaciente;
     private $telefonoCelularPaciente;
     public $especialidadMedica;
     public $identificacionConsultorio;
     public $identificacionMedico;
     protected $Conexion;

    //------Fin Definicion de atributos-------
        //-----Definicion de metodos-----

    //1.Metodo constructor

    public function crearNuevaCita($idCitaMedica, $fechaCitaMedica, $horaCitaMedica,
                                $estadoCitaMedica, $cedulaPaciente, 
                                $primerNombrePaciente, $segundoNombrePaciente, 
                                $primerApellidoPaciente, $segundoApellidoPaciente, 
                                $correoElectronicoPaciente, $telefonoCelularPaciente, 
                                $especialidadMedica, $identificacionConsultorio, $identificacionMedico)
    {
        $this->idCitaMedica=$idCitaMedica;
        $this->fechaCitaMedica=$fechaCitaMedica;
        $this->horaCitaMedica=$horaCitaMedica;
        $this->estadoCitaMedica=$estadoCitaMedica;
        $this->cedulaPaciente=$cedulaPaciente;
        $this->primerNombrePaciente=$primerNombrePaciente;
        $this->segundoNombrePaciente=$segundoNombrePaciente;
        $this->primerApellidoPaciente=$primerApellidoPaciente;
        $this->segundoApellidoPaciente=$segundoApellidoPaciente;
        $this->correoElectronicoPaciente=$correoElectronicoPaciente;
        $this->telefonoCelularPaciente=$telefonoCelularPaciente;
        $this->especialidadMedica=$especialidadMedica;
        $this->identificacionConsultorio=$identificacionConsultorio;
        $this->identificacionMedico=$identificacionMedico;
  
    }

        //---fin metodo constructor

    //2.Metodo get (metodo accesor-consultores)
        public function getIdCitaMedica()
        {
        return $this->idCitaMedica;
        }
        public function getFechaCitaMedica()
        {
        return $this->fechaCitaMedica;
        }
        public function getHoraCitaMedica()
        {
        return $this->horaCitaMedica;
        }
        public function getEstadoCitaMedica()
        {
        return $this->estadoCitaMedica;
        }
        public function getCedulaPaciente()
        {
        return $this->cedulaPaciente;
        }
        public function getPrimerNombrePaciente()
        {
        return $this->primerNombrePaciente;
        }
        public function getSegundoNombrePaciente()
        {
        return $this->segundoNombrePaciente;
        }
        public function getPrimerApellidoPaciente()
        {
        return $this->primerApellidoPaciente;
        }
        public function getSegundoApellidoPaciente()
        {
        return $this->segundoApellidoPaciente;
        }
        public function getcorreoElectronicoPaciente()
        {
         return $this->correoElectronicoPaciente;   
        }
        public function telefonoCelularPaciente()
        {
            return $this->telefonoCelularPaciente;
        }
        public function getidentificacionConsultorio()
        {
            return $this->identificacionConsultorio;
        }

        public function getidentificacionMedico()
        {
            return $this->identificacionMedico;
        }
    
        //3. Metodo set (metodo modificador-fijadores)

        public function setIdCitaMedica($idCitaMedica)
        {
            $this->idCitaMedica = $idCitaMedica;
        }

        public function setFechaCitaMedica($fechaCitaMedica)
        {
            $this->fechaCitaMedica = $fechaCitaMedica;
        }

        public function setHoraCitaMedica($horaCitaMedica)
        {
            $this->horaCitaMedica = $horaCitaMedica;
        }

        public function setEstadoCitaMedica($estadoCitaMedica)
        {
            $this->estadoCitaMedica = $estadoCitaMedica;
        }
        
        public function setCedulaPaciente($cedulaPaciente)
        {
            $this->cedulaPaciente = $cedulaPaciente;
        }

        public function setPrimerNombrePaciente($primerNombrePaciente)
        {
            $this->primerNombrePaciente = $primerNombrePaciente;
        }

        public function setSegundoNombrePaciente($segundoNombrePaciente)
        {
            $this->segundoNombrePaciente = $segundoNombrePaciente;
        }

        public function setPrimerApellidoPaciente($primerApellidoPaciente)
        {
            $this->primerApellidoPaciente = $primerApellidoPaciente;
        }

        public function setSegundoApellidoPaciente($segundoApellidoPaciente)
        {
            $this->segundoApellidoPaciente = $segundoApellidoPaciente;
        }

        public function setCorreoElectronicoPaciente($correoElectronicoPaciente)
        {
            $this->correoElectronicoPaciente = $correoElectronicoPaciente;
        }

        public function setTelefonoCelularPaciente($telefonoCelularPaciente)
        {
            $this->telefonoCelularPaciente = $telefonoCelularPaciente;
        }

        public function setIdentificacionConsultorio($identificacionConsultorio)
        {
            $this->identificacionConsultorio = $identificacionConsultorio;
        }

        public function setIdentificacionMedico($identificacionMedico)
        {
            $this->identificacionMedico = $identificacionMedico;
        }
    
        //4. Métodos Asociados al CRUD y Otros

    public function agregarCitaMedica()
    {
    // Sentencia SQL para insertar una nueva cita
        $this->Conexion=conectarBaseDatos();
            $sentenciaSQL = "INSERT INTO citas_medicas (
                                idCitasMedicas,
                                FECHA,
                                HORA,
                                ESTADO_CITA_MEDICA,
                                PACIENTES_CEDULA,
                                CONSULTORIO_idCONSULTORIOS,
                                EMPLEADOS_CEDULA_EMPLEADOS) 
                        VALUES (
                            '$this->idCitaMedica',
                            '$this->fechaCitaMedica',
                            '$this->horaCitaMedica',
                            '$this->cedulaPaciente',
                            '$this->identificacionConsultorio',
                            '$this->identificacionMedico')";

    // Ejecutar la consulta SQL
    $resultado = $this->Conexion->query($sentenciaSQL);

    // Cerrar la conexión a la base de datos
    $this->Conexion->close();

    // Devolver el resultado de la operación (true si se insertó correctamente, false en caso contrario)
    return $resultado;
    }


    public function consultarCita($cedulaPaciente)
    {
    $this->Conexion=conectarBaseDatos();
    $sentenciaSQL="select * from citas_medicas where CEDULA = '$cedulaPaciente'";
    $resultado=$this->Conexion->query($sentenciaSQL);
    $this->Conexion->close();
    return $resultado;
    }

    public function actualizarCita()
	{	
		$this->Conexion=conectarBaseDatos();
		$sentenciaSQL="update citas_medicas set
                            cedulaPaciente='$this->cedulaPaciente',
                            primerNombrePaciente='$this->primerNombrePaciente',
                            segundoNombrePaciente='$this->segundoNombrePaciente',
                            primerApellidoPaciente='$this->primerApellidoPaciente',
                            segundoApellidoPaciente='$this->segundoApellidoPaciente',
                            correoElectronicoPaciente='$this->correoElectronicoPaciente',
                            telefonoCelularPaciente='$this->telefonoCelularPaciente',
                            identificacionConsultorio='$this->identificacionConsultorio'


                            where ID TIPO CONTRATO = '$_POST[tipoContrato]'";
		$resultado=$this->Conexion->query($sentenciaSQL);
		$this->Conexion->close();
		return $resultado;
    }
}
?>