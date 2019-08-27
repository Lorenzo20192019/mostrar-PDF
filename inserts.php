
dbpaginaweb

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(100) NOT NULL,
  `edad` int(3) NOT NULL,
  `email` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;


CREATE TABLE `tb_usuarios` (
  `CORREOE` varchar(80) NOT NULL,
  `CLAVE` varchar(300) DEFAULT NULL,
  `NOMBRECOMPLETO` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`CORREOE`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COMMENT='Tabla de usuarios del sistema de inscripciones';

CREATE TABLE `tb_solicitud` (
  `ID_SOLICITUD` int(11) NOT NULL AUTO_INCREMENT,
  `NOMBREINGRESA` varchar(200) DEFAULT NULL,
  `CORREOINGRESA` varchar(50) DEFAULT NULL,
  `RUTAPDF` varchar(200) DEFAULT NULL,
  `NOMBREARCHIVO` varchar(80) DEFAULT NULL,
  `MOTIVO` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`ID_SOLICITUD`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1 COMMENT='regsitra los nombramientos solicitados desde el interior';


insert into TB_USUARIOS values ('quintana@gmail.com',MD5('PRUEBA'),'Lorenzo Quintana');






