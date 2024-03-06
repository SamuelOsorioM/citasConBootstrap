<?php

class Empleados
{
    //-----Definicion de atributos
    public $cedulaEmpleados;
    public $primerNombreEmpleado;
    public $segundoNombreEmpleado;
    public $primerApellidoEmpleado;
    public $segundoApellidoEmpleado;
    private $direccionEmpleado;
    public $correoElectronicoEmpleado;
    private $telefonoCelularEmpleado;
    private $idCargoEmpleado;
    private $idEspecilidadMedica;
    private $idTipoDeContraoEmpleado;
    private $idRolEmpleadoEnSoftware;
    protected $passwordEmpleado;
    protected $Conexion;
    
    //------Fin Definicion de atributos-------
    //-----Definicion de metodos-----

    //1.Metodo constructor
    public function crearEmpleado($cedulaEmpleados, $primerNombreEmpleado, $segundoNombreEmpleado, 
                                $primerApellidoEmpleado, $segundoApellidoEmpleado, $direccionEmpleado, 
                                $correoElectronicoEmpleado, $telefonoCelularEmpleado, $idCargoEmpleado, 
                                $idEspecilidadMedica, $idTipoDeContraoEmpleado, $idRolEmpleadoEnSoftware, 
                                $passwordEmpleado)
    {
    $this->cedulaEmpleados=$cedulaEmpleados;
    $this->primerNombreEmpleado=$primerNombreEmpleado;
    $this->segundoNombreEmpleado=$segundoNombreEmpleado;
    $this->primerApellidoEmpleado=$primerApellidoEmpleado;
    $this->segundoApellidoEmpleado=$segundoApellidoEmpleado;
    $this->direccionEmpleado=$direccionEmpleado;
    $this->correoElectronicoEmpleado=$correoElectronicoEmpleado;
    $this->telefonoCelularEmpleado=$telefonoCelularEmpleado;
    $this->idCargoEmpleado=$idCargoEmpleado;
    $this->idEspecilidadMedica=$idEspecilidadMedica;
    $this->idTipoDeContraoEmpleado=$idTipoDeContraoEmpleado;
    $this->idRolEmpleadoEnSoftware=$idRolEmpleadoEnSoftware;
    $this->passwordEmpleado=$passwordEmpleado;
    }
    
     //---fin metodo constructor

    //2.Metodo get (metodo accesor-consultores)
    public function getCedulaEmpleados()
    {
    return $this->cedulaEmpleados;
    }
    
    public function getPrimerNombreEmpleado()
    {
    return $this->primerNombreEmpleado;
    }

    public function getSegundoNombreEmpleado()
    {
    return $this->segundoNombreEmpleado;
    }

    public function getPrimerApellidoEmpleado()
    {
    return $this->primerApellidoEmpleado;
    }

    public function getSegundoApellidoEmpleado()
    {
    return $this->segundoApellidoEmpleado;
    }

    public function getDireccionEmpleado()
    {
    return $this->direccionEmpleado;
    }

    public function getCorreoElectronicoEmpleado()
    {
    return $this->correoElectronicoEmpleado;
    }

    public function getTelefonoCelularEmpleado()
    {
    return $this->telefonoCelularEmpleado;
    }

    public function getIdCargoEmpleado()
    {
    return $this->idCargoEmpleado;
    }

    public function getIdEspecilidadMedica()
    {
    return $this->idEspecilidadMedica;
    }

    public function getIdTipoDeContraoEmpleado()
    {
    return $this->idTipoDeContraoEmpleado;
    }

    public function getIdRolEmpleadoEnSoftware()
    {
    return $this->idRolEmpleadoEnSoftware;
    }

    public function getPasswordEmpleado()
        {
        return $this->passwordEmpleado;
        }


    //3. Metodo set (metodo modificador-fijadores)
    
    public function setCedulaEmpleados($cedulaEmpleados)
    {
    $this->$cedulaEmpleados;
    }

    public function setPrimerNombreEmpleado($primerNombreEmpleado)
        {
        $this->$primerNombreEmpleado;
        }

    public function setsSegundoNombreEmpleado($segundoNombreEmpleado)
    {
    $this->$segundoNombreEmpleado;
    }

    public function setPrimerApellidoEmpleado($primerApellidoEmpleado)
    {
    $this->$primerApellidoEmpleado;
    }

    public function setSegundoApellidoEmpleado($segundoApellidoEmpleado)
    {
    $this->$segundoApellidoEmpleado;
    }

    public function setDireccionEmpleado($direccionEmpleado)
    {
    $this->$direccionEmpleado;
    }

    public function setCorreoElectronicoEmpleado($correoElectronicoEmpleado)
    {
    $this->$correoElectronicoEmpleado;
    }

    public function setTelefonoCelularEmpleado($telefonoCelularEmpleado)
    {
    $this->$telefonoCelularEmpleado;
    }

    public function setIdCargoEmpleado($idCargoEmpleado)
    {
    $this->$idCargoEmpleado;
    }

    public function setIdEspecilidadMedica($idEspecilidadMedica)
    {
    $this->$idEspecilidadMedica;
    }

    public function setIdTipoDeContraoEmpleado($idTipoDeContraoEmpleado)
    {
    $this->$idTipoDeContraoEmpleado;
    }

    public function setIdRolEmpleadoEnSoftware($idRolEmpleadoEnSoftware)
    {
    $this->$idRolEmpleadoEnSoftware;
    }

    public function setPasswordEmpleado($passwordEmpleado)
    {
    $this->$passwordEmpleado;
    }

    //4. Métodos Asociados al CRUD y Otros

    public function agregarEmpleado()
    {
        $this->Conexion=conectarBaseDatos();
        $sentenciaSQL="INSERT INTO  empleados(
                                            CEDULA_EMPLEADOS, 
                                            PRIMER_NOMBRE, 
                                            SEGUNDO_NOBRE, 
                                            PRIMER_APELLIDO, 
                                            SEGUNDO_APELIDO, 
                                            DIRECCION_EMPLEADO, 
                                            CORREO_ELECTRONICO_EMPLEADO, 
                                            TEL_CEL_EMPLEADO, 
                                            cargos_emplados_ID CARGOS, 
                                            tipo_contrato_ID TIPO CONTRATO, 
                                            ROL EN EL GESTOR_ID ROL EN EL GESTOR, 
                                            PASSWORD EMPLEADOS)
                        VALUES(
                            '$this->cedulaEmpleados',
                            '$this->primerNombreEmpleado',
                            '$this->segundoNombreEmpleado',
                            '$this->primerApellidoEmpleado',
                            '$this->segundoApellidoEmpleado',
                            '$this->direccionEmpleado',
                            '$this->correoElectronicoEmpleado',
                            '$this->telefonoCelularEmpleado',
                            '$this->idCargoEmpleado',
                            '$this->idEspecilidadMedica',
                            '$this->idTipoDeContraoEmpleado',
                            '$this->idRolEmpleadoEnSoftware',
                            '$this->passwordEmpleado')";
        $resultado=$this->Conexion->query($sentenciaSQL);
        $this->Conexion->close();
        return $resultado;

    }

    public function consultarEmpleado($cedulaEmpleados)
    {
        $this->Conexion=conectarBaseDatos();
        $sentenciaSQL="SELECT * FROM empleados WHERE CEDULA_EMPLEADOS = '$cedulaEmpleados'";
        $resultado=$this->Conexion->query($sentenciaSQL);
		$this->Conexion->close();
		return $resultado;
    }

    public function actualizarEmpleado()
	{	
		$this->Conexion=conectarBaseDatos();
		$sentenciaSQL="UPDATE empleados SET
                                        PRIMER_NOMBRE ='$this->primerNombreEmpleado',
                                        SEGUNDO_NOBRE ='$this->segundoNombreEmpleado',
                                        PRIMER_APELLIDO ='$this->primerApellidoEmpleado',
                                        SEGUNDO_APELIDO ='$this->segundoApellidoEmpleado',
                                        DIRECCION_EMPLEADO ='$this->direccionEmpleado',
                                        CORREO_ELECTRONICO_EMPLEADO ='$this->correoElectronicoEmpleado',
                                        TEL_CEL_EMPLEADO ='$this->telefonoCelularEmpleado',
                                        cargos_emplados_ID CARGOS ='$this->idCargoEmpleado',
                                        tipo_contrato_ID TIPO CONTRATO ='$this->idEspecilidadMedica',
                                        ROL EN EL GESTOR_ID ROL EN EL GESTOR ='$this->idTipoDeContraoEmpleado',
                                        PASSWORD EMPLEADOS='$this->idRolEmpleadoEnSoftware'
                            WHERE CEDULA_EMPLEADOS='$_POST[cedulaEmpleados]'";  
        $resultado=$this->Conexion->query($sentenciaSQL);
        $this->Conexion->close();
        return $resultado;
    }

        


    
    

}




?>