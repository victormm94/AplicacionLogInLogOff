-- Crear base de datos --
	CREATE DATABASE if NOT EXISTS DAW208_DBMantenimientoTema6
;
-- Crear del usuario --
	CREATE USER IF NOT EXISTS 'DAW208MantenimientoTema6'@'%' identified BY 'paso'; 
	
-- Uso de la base de datos. --
	USE DAW208_DBMantenimientoTema6;

-- Crear tablas. --
    CREATE TABLE IF NOT EXISTS T02_Departamentos1(
        CodDepartamento char(3) PRIMARY KEY,
	DescDepartamento varchar(255) NOT null,
        FechaBaja varchar(10)
        )
	ENGINE=INNODB;

    CREATE TABLE IF NOT EXISTS T01_Usuarios1(
        T01_CodUsuario varchar(15) PRIMARY KEY,
	T01_DescUsuario varchar(255),
	T01_Password varchar(255),
	T01_Perfil enum('administrador','usuario'),
	T01_NumAccesos int,
	T01_FechaHoraUltimaConexion int        
	)
	ENGINE=INNODB;

-- Dar permisos al usuario --
	GRANT ALL PRIVILEGES ON DAW208_DBMantenimientoTema6.* TO 'DAW208MantenimientoTema6'@'%'; 

