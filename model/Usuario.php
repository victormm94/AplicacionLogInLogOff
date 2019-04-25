<?php

require_once 'UsuarioPDO.php';

class Usuario {

    private $CodUsuario;
    private $Password;
    private $DescUsuario;
    private $Perfil;
    private $NumAccesos;
    private $FechaHoraUltimaConexion;
    private $listaOpinionesUsuario;

    public function __construct($CodUsuario, $Password, $DescUsuario, $Perfil, $NumAccesos, $FechaHoraUltimaConexion) {
        $this->CodUsuario = $CodUsuario;
        $this->Password = $Password;
        $this->DescUsuario = $DescUsuario;
        $this->Perfil = $Perfil;
        $this->NumAccesos = $NumAccesos;
        $this->FechaHoraUltimaConexion = $FechaHoraUltimaConexion;
    }

    public function getCodUsuario() {
        return $this->CodUsuario;
    }

    public function setCodUsuario($CodUsuario) {
        $this->CodUsuario = $CodUsuario;
    }

    public function getPassword() {
        return $this->Password;
    }

    public function setPassword($Password) {
        $this->Password = $Password;
    }

    public function getDescUsuario() {
        return $this->DescUsuario;
    }

    public function setDescUsuario($DescUsuario) {
        $this->DescUsuario = $DescUsuario;
    }

    public function getNumAccesos() {
        return $this->NumAccesos;
    }

    public function setNumAccesos($NumAccesos) {
        $this->NumAccesos = $NumAccesos;
    }

    public function getFechaHoraUltimaConexion() {
        return $this->FechaHoraUltimaConexion;
    }

    public function setFechaHoraUltimaConexion($FechaHoraUltimaConexion) {
        $this->FechaHoraUltimaConexion = $FechaHoraUltimaConexion;
    }

    public function getPerfil() {
        return $this->Perfil;
    }

    public function setPerfil($Perfil) {
        $this->Perfil = $Perfil;
    }

    public function getListaOpinionesUsuario() {
        return $this->listaOpinionesUsuario;
    }

    public function setListaOpinionesUsuario($listaOpinionesUsuario) {
        $this->listaOpinionesUsuario = $listaOpinionesUsuario;
    }

    public static function validarUsuario($CodUsuario, $Password) {
        $usuario = null;
        $aUsuario = UsuarioPDO::validarUsuario($CodUsuario, $Password);
        if (!empty($aUsuario)) {
            $usuario = new Usuario($CodUsuario, $Password, $aUsuario['T01_DescUsuario'], $aUsuario['T01_Perfil'], $aUsuario['T01_NumAccesos'], $aUsuario['T01_FechaHoraUltimaConexion']);
        }
        return $usuario;
    }

    public function registrarUltimaConexion() {
        setlocale(LC_TIME, 'es_ES.UTF-8');
        date_default_timezone_set('Europe/Madrid');
        $CodUsuario = $this->getCodUsuario();
        $aNumAccesos = UsuarioPDO::registrarUltimaConexion($CodUsuario);
        $fecha = date('d-m-Y, H:i:s', $aNumAccesos['T01_FechaHoraUltimaConexion']);
        $numAccesos = $aNumAccesos['T01_NumAccesos'];
        if ($numAccesos == 0) {
            $ultimaConexion = 'Bienvenido por primera vez, ' . $this->getCodUsuario() . '.';
        } else {
            $ultimaConexion = 'Hola ' . $this->getCodUsuario() . ', número de visitas anteriores ' . $this->getNumAccesos() . '.<br>Fecha de su ultimo acceso ' . $fecha . '.';
        }
        return $ultimaConexion;
    }

}
