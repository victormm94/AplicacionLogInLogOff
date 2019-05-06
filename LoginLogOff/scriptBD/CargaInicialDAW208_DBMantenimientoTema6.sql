-- Base de datos a usar
USE DAW208_DBMantenimientoTema6;

-- Introduccion de datos dentro de la tabla creada
INSERT INTO T02_Departamentos1(CodDepartamento,DescDepartamento,FechaBaja) VALUES
('INF', 'Departamento que se encarga de la informatica',0),
('VEN', 'Departamento que se encarga de las ventas',0),
('CON', 'Departamento que se encarga de la contabilidad',0),
('LEN', 'Departamento de lengua',0),
('FIS', 'Departamento de fisica',0),
('QUI', 'Departamento de quimica',0),
('HIS', 'Departamento de historia',0),
('ELE', 'Departamento de electricidad',0);

INSERT INTO T01_Usuarios1(T01_CodUsuario,T01_DescUsuario,T01_Password,T01_Perfil,T01_NumAccesos,T01_FechaHoraUltimaConexion) VALUES
('admin', 'administrador',SHA2('paso', 256),'administrador',1,0),
('israel', 'israel',SHA2('paso', 256),'usuario',1,0),
('david', 'david',SHA2('paso', 256),'usuario',1,0),
('victor', 'victor',SHA2('paso', 256),'usuario',1,0),
('laura', 'laura',SHA2('paso', 256),'usuario',1,0),
('amor','amor',SHA2('paso', 256),'usuario',1,0),
('heraclio','heraclio',SHA2('paso', 256),'usuario',1,0);

