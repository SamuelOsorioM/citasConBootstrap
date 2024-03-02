<?php

class Pacientes
{
    //-----Definicion de atributos
    public $cedulaPaciente;
    public $primerNombrePaciente;
    public $segundoNombrePaciente;
    public $primerApellidoPaciente;
    public $segundoApellidoPaciente;
    private $direccionPaciente;
    private $telefonoCelularPaciente;
    private $telefonoConvencionalPaciente;
    public $fechaDeNacimientoPaciente;
    public $sexoPaciente;
    private $correoElectronicoPaciente;
    protected $password;
    private $Conexion;

    //------Fin Definicion de atributos-------

    //-----Definicion de metodos-----

    //1.Metodo constructor
    public function crearPaciente($cedulaPaciente, $primerNombrePaciente, $segundoNombrePaciente, $primerApellidoPaciente, 
                                $segundoApellidoPaciente, $direccionPaciente, $telefonoCelularPaciente, $telefonoConvencionalPaciente, 
                                $fechaDeNacimientoPaciente, $sexoPaciente, $correoElectronicoPaciente, $password)
    {
        $this->cedulaPaciente=$cedulaPaciente;
        $this->primerNombrePaciente=$primerNombrePaciente;
        $this->segundoNombrePaciente=$segundoNombrePaciente;
        $this->primerApellidoPaciente=$primerApellidoPaciente;
        $this->segundoApellidoPaciente=$segundoApellidoPaciente;
        $this->direccionPaciente=$direccionPaciente;
        $this->telefonoCelularPaciente=$telefonoCelularPaciente;
        $this->telefonoConvencionalPaciente=$telefonoConvencionalPaciente;
        $this->fechaDeNacimientoPaciente=$fechaDeNacimientoPaciente;
        $this->sexoPaciente=$sexoPaciente;
        $this->correoElectronicoPaciente=$correoElectronicoPaciente;
        $this->password=$password;
    }                            
    //---fin metodo constructor

    //2.Metodo get (metodo accesor-consultores) 
    public function getCedulaPaciente()
        {
        return $this->cedulaPaciente;
        }
    public function getPrimerNombrePaciente()
        {
        return $this->primerNombrePaciente;
        }
    public function getCegundoNombrePaciente()
        {
        return $this->segundoNombrePaciente;
        }
    public function getCrimerApellidoPaciente()
        {
        return $this->primerApellidoPaciente;
        }
    public function getCegundoApellidoPaciente()
        {
        return $this->segundoApellidoPaciente;
        }
    public function getCireccionPaciente()
        {
        return $this->direccionPaciente;
        }
    public function getCelefonoCelularPaciente()
        {
        return $this->telefonoCelularPaciente;
        }
    public function getCelefonoConvencionalPaciente()
        {
        return $this->telefonoConvencionalPaciente;
        }
    public function getCechaDeNacimientoPaciente()
        {
        return $this->fechaDeNacimientoPaciente;
        }
    public function getCexoPaciente()
        {
        return $this->sexoPaciente;
        }
    public function getCorreoElectronicoPaciente()
        {
        return $this->correoElectronicoPaciente;
        }
    public function getpassword()
        {
        return $this->password;
        }

    //3. Metodo set (metodo modificador-fijadores)
    
    public function setCedulaPaciente($cedulaPaciente)
        {
        $this->$cedulaPaciente;
        }
    public function setPrimerNombrePaciente($primerNombrePaciente)
        {
        $this->$primerNombrePaciente;
        }
    public function setSegundoNombrePaciente($segundoNombrePaciente)
        {
        $this->$segundoNombrePaciente;
        }
    public function setPrimerApellidoPaciente($primerApellidoPaciente)
        {
        $this->$primerApellidoPaciente;
        }
    public function setSegundoApellidoPaciente($segundoApellidoPaciente)
        {
        $this->$segundoApellidoPaciente;
        }
    public function setDireccionPaciente($direccionPaciente)
        {
        $this->$direccionPaciente;
        }
    public function setTelefonoCelularPaciente($telefonoCelularPaciente)
        {
        $this->$telefonoCelularPaciente;
        }
    public function setTelefonoConvencionalPaciente($telefonoConvencionalPaciente)
        {
        $this->$telefonoConvencionalPaciente;
        }
    public function setFechaDeNacimientoPaciente($fechaDeNacimientoPaciente)
        {
        $this->$fechaDeNacimientoPaciente;
        }
    public function setSexoPaciente($sexoPaciente)
        {
        $this->$sexoPaciente;
        }
    public function setCorreoElectronicoPaciente($correoElectronicoPaciente)
        {
        $this->$correoElectronicoPaciente;
        }
    public function setpassword($password)
        {
        $this->$password;
        }
    
    //4. Métodos Asociados al CRUD y Otros

    public function agregarPaciente()
    {
       $this->Conexion=conectarBaseDatos();
       $sentenciaSQL="insert into pacientes(
                                CEDULA,
                                PRIMER NOMBRE, 
                                SEGUNDO NOMBRE,	
                                PRIMER APELLIDO,
                                SEGUNDO APELLIDO,
                                DIRECCION,
                                TELEFONO CELULAR,
                                TELEFONO CONVENCIONAL,
                                FECHA DE NACIMIENTO,
                                SEXO,
                                CORREO ELECTRONICO,
                                PASSWORD USUARIO)
                 values('$this->cedulaPaciente',
                        '$this->primerNombrePaciente',
                        '$this->segundoNombrePaciente',
                        '$this->primerApellidoPaciente',
                        '$this->segundoApellidoPaciente',
                        '$this->direccionPaciente',
                        '$this->telefonoCelularPaciente',
                        '$this->telefonoConvencionalPaciente',
                        '$this->fechaDeNacimientoPaciente',
                        '$this->sexoPaciente',
                        '$this->correoElectronicoPaciente',
                        '$this->password')";
        $resultado=$this->Conexion->query($sentenciaSQL);
        $this->Conexion->close();
        return $resultado;
    }

    public function consultarPaciente($cedulaPaciente)
    {
        $this->Conexion=conectarBaseDatos();
        $sentenciaSQL="select * from pacientes where CEDULA = '$cedulaPaciente'";
        $resultado=$this->Conexion->query($sentenciaSQL);
		$this->Conexion->close();
		return $resultado;
    }

    public function actualizarPaciente()
	{	
		$this->Conexion=conectarBaseDatos();
		$sentenciaSQL="update pacientes set 
                            PRIMER NOMBRE= '$this->primerNombrePaciente',
                            SEGUNDO NOMBRE= '$this->segundoNombrePaciente',
                            PRIMER APELLIDO='$this->primerApellidoPaciente',
                            SEGUNDO APELLIDO='$this->segundoApellidoPaciente',
                            DIRECCION='$this->direccionPaciente',
                            TELEFONO CELULAR='$this->telefonoCelularPaciente',
                            TELEFONO CONVENCIONAL='$this->telefonoConvencionalPaciente',
                            FECHA DE NACIMIENTO='$this->fechaDeNacimientoPaciente',
                            SEXO='$this->sexoPaciente',
                            CORREO ELECTRONICO='$this->correoElectronicoPaciente'         
                            where CEDULA = '$_POST[cedulaPaciente]'";
		$resultado=$this->Conexion->query($sentenciaSQL);
		$this->Conexion->close();
		return $resultado;
    }

}
?>