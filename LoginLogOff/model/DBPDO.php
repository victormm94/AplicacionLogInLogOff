<?php

require_once 'config/configuracion.php';

class DBPDO {

    public static function ejecutarConsulta($sentencia, $parametros) {
        try {
            $miBD = new PDO(mysql, usuario, pass);
            $miBD->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $consulta = $miBD->prepare($sentencia);
            $consulta->execute($parametros);
        } catch (PDOException $mensajeError) {
            $consulta = null;
            $mensajeError->getMessage();
            $mensajeError->getCode();
        } finally {
            unset($miBD); //Se cierra la conexion
        }
        return $consulta;
    }

}
