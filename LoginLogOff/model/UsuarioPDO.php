<?php

require_once 'model/DBPDO.php';
require_once 'model/UsuarioDB.php';

class UsuarioPDO implements UsuarioDB {

    public static function validarUsuario($CodUsuario, $Password) {
        $aUsuario = [];
        $sql = 'select * from T01_Usuarios1 where T01_CodUsuario = ? and T01_Password = SHA2(?, 256)';
        $consulta = DBPDO::ejecutarConsulta($sql, [$CodUsuario, $Password]);
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

    public static function registrarUltimaConexion($CodUsuario) {
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
        $sql = 'update T01_Usuarios1 set T01_NumAccesos = T01_NumAccesos + 1, T01_FechaHoraUltimaConexion = ? where T01_CodUsuario = ?';
        $consulta = DBPDO::ejecutarConsulta($sql, [$fecha->getTimestamp(), $CodUsuario]);
        return $aFecha;
    }

    public static function altaUsuario($CodUsuario, $DescUsuario, $Password) {
        $aUsuario = [];
        $fecha = new DateTime();
        $sql = "INSERT INTO T01_Usuarios1(T01_CodUsuario,T01_DescUsuario,T01_Password,T01_Perfil,T01_NumAccesos,T01_FechaHoraUltimaConexion) VALUES (?, ?, SHA2(?, 256),'usuario', 1, ?)";
        $consulta = DBPDO::ejecutarConsulta($sql, [$CodUsuario, $DescUsuario, $Password, $fecha->getTimestamp()]);
        if ($consulta->rowCount() == 1) {
            $aUsuario['T01_CodUsuario'] = $CodUsuario;            
            $aUsuario['T01_DescUsuario'] = $DescUsuario;
            $aUsuario['T01_Password'] = $Password;
            $aUsuario['T01_Perfil'] = 'usuario';            
            $aUsuario['T01_FechaHoraUltimaConexion'] = $fecha->getTimestamp();
        }
        return $aUsuario;
    }

    public static function validarCodNoExiste($CodUsuario) {
        $existe = false;
        $sql = 'select * from T01_Usuarios1 where T01_CodUsuario = ?';
        $consulta = DBPDO::ejecutarConsulta($sql, [$CodUsuario]);
        if ($consulta->rowCount() == 1) {
            $existe = true;
        }
        return $existe;
    }

    public static function modificarUsuario($CodUsuario, $Password, $DescUsuario) {
        $aUsuario = [];
        if ($DescUsuario != NULL) {
            $sql = 'update T01_Usuarios1 set T01_DescUsuario = ? where T01_CodUsuario = ?';
            $consulta = DBPDO::ejecutarConsulta($sql, [$DescUsuario, $CodUsuario]);
        }
        if ($consulta->rowCount() == 1) {
            $sql = 'select * from T01_Usuarios1 where T01_CodUsuario=?';
            $consulta = DBPDO::ejecutarConsulta($sql, [$CodUsuario]);
            if ($consulta->rowCount() == 1) {
                $datos = $consulta->fetchObject();
                $aUsuario['T01_CodUsuario'] = $datos->T01_CodUsuario;
                $aUsuario['T01_Password'] = $datos->T01_Password;
                $aUsuario['T01_DescUsuario'] = $datos->T01_DescUsuario;
                $aUsuario['T01_Perfil'] = $datos->T01_Perfil;
                $aUsuario['T01_NumAccesos'] = $datos->T01_NumAccesos;
                $aUsuario['T01_FechaHoraUltimaConexion'] = $datos->T01_FechaHoraUltimaConexion;
            }
        }
        return $aUsuario;
    }

    public function borrarUsuario($CodUsuario) {
        $borrarUsuario = false;
        $sql = 'delete from T01_Usuarios1 where T01_CodUsuario = ?';
        $consulta = DBPDO::ejecutarConsulta($sql, [$CodUsuario]);
        if ($consulta->rowCount() == 1) {
            $borrarUsuario = true;
        }
        return $borrarUsuario;
    }

    public function modificarCuenta($CodUsuario, $Password, $DescUsuario, $Perfil) {
        
    }

}
