<?php

require_once 'model/DBPDO.php';
require_once 'model/UsuarioDB.php';
require_once 'config/configuracion.php';

class UsuarioPDO implements UsuarioDB {

    public static function validarUsuario($CodUsuario, $Password) {
        $aUsuario = [];
        $sql = 'select * from T01_Usuarios1 where T01_CodUsuario = ? and T01_Password = SHA2(?, 256)';
        $consulta = DBPDO::ejecutarConsulta($sql,[$CodUsuario,$Password]);   
        if ($consulta->rowCount() == 1) {
            $datos = $consulta->fetchObject();
            $aUsuario['T01_CodUsuario'] = $datos->T01_CodUsuario;
            $aUsuario['T01_Password'] = $datos->T01_Password;
            $aUsuario['T01_DescUsuario'] = $datos->T01_DescUsuario;
            $aUsuario['T01_Perfil'] = $datos->T01_Perfil;
            $aUsuario['T01_NumAccesos'] = $datos->T01_NumAccesos;
            $aUsuario['T01_FechaHoraUltimaConexion'] = $datos->T01_FechaHoraUltimaConexion;
        }
        return $aUsuario;
    }

    public function registrarUltimaConexion($CodUsuario) {
        $aFecha = [];
        $fecha = new DateTime();
        $sql = 'select * from T01_Usuarios1 where T01_CodUsuario = ?';
        $consulta = DBPDO::ejecutarConsulta($sql, [$CodUsuario]);
        if ($consulta->rowCount() == 1) {
            $datos = $consulta->fetchObject();
            $aFecha['T01_NumAccesos'] = $datos->T01_NumAccesos;
            $aFecha['T01_FechaHoraUltimaConexion'] = $datos->T01_FechaHoraUltimaConexion;
            $aFecha['T01_DescUsuario'] = $datos->T01_DescUsuario;
        }
        $sql = 'update Usuario set Visitas = Visitas + 1, FechaUltimaConexion = ? where CodUsuario = ?';
        $consulta = DBPDO::ejecutarConsulta($sql, [$fecha->getTimestamp(),$CodUsuario]);
        return $aFecha;
    }

}
