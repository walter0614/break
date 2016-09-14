drop database if exists break1;
create database break1;
	use break1;
drop TABLE if exists tipo_usuario;

CREATE TABLE break1.`tipo_usuario`(
  `id` int(1) NOT NULL AUTO_INCREMENT,
  `tipo_usuario` varchar(15) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

CREATE TABLE break1.`ciudad`(
  `id` int(15) NOT NULL AUTO_INCREMENT,
  `nombre_ciudad` varchar(30) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;


	CREATE TABLE break1.`usuario` (
  `id` int(15) NOT NULL AUTO_INCREMENT,
  `nombre_usuario` varchar(50) NOT NULL,
  `tipo_usuario` int(1) NOT NULL,
  `contrasena` varchar(40) NOT NULL,
  `numero_telefono` int(20) NOT NULL,
  `direccion` varchar(80) NOT NULL,
  `ciudad` int(15) NOT NULL,
  `cuenta_bancaria` int(30) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `FK_per_user_type` (`tipo_usuario`),
  KEY `FK_ciudad` (`ciudad`),
  CONSTRAINT `FK_per_user_type` FOREIGN KEY (`tipo_usuario`) REFERENCES `tipo_usuario`(`id`),
  CONSTRAINT `FK_ciudad` FOREIGN KEY(`ciudad`) REFERENCES `ciudad`(`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

	CREATE TABLE break1.`clientes` (
  `id` int(15) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(80) NOT NULL,
  `apellido` varchar(80) NOT NULL,
  `edad` varchar(3) NOT NULL,
  `email` varchar(200) NOT NULL,
  `cedula` int(30) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `cedula` (`cedula`),
  CONSTRAINT `FK_USER_id_with_CUSTOMERS_id` FOREIGN KEY (`id`) REFERENCES `usuario` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

	CREATE TABLE break1.`servicios` (
  `id` int(100) NOT NULL AUTO_INCREMENT,
  `servicio` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

	CREATE TABLE break1.`proveedores` (
  `id` int(15) NOT NULL AUTO_INCREMENT,
  `nombre_compañia` varchar(90) NOT NULL,
  `id_compañia` varchar(20) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id_compañia` (`id_compañia`),
  CONSTRAINT `FK_USER_id_with_PROVidER_id` FOREIGN KEY (`id`) REFERENCES `usuario` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

	CREATE TABLE break1.`proveedor_servicio` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `servicio` int(100) NOT NULL,
  `proveedor` int(15) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `FK_SERVICE_TABLE` (`servicio`),
  KEY `FK_provider_TABLE` (`proveedor`),
  CONSTRAINT `FK_SERVICE_TABLE` FOREIGN KEY (`servicio`) REFERENCES `servicios` (`id`),
  CONSTRAINT `FK_provider_TABLE` FOREIGN KEY (`proveedor`) REFERENCES `proveedores` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

	CREATE TABLE break1.`acuerdo` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `servicio_compañia` int(255) NOT NULL,
  `clienteid` int(15) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `FK_service_id_compañia_service_provider` (`servicio_compañia`),
  KEY `FK_customerid_Costumer_id` (`clienteid`),
  CONSTRAINT `FK_customerid_Costumer_id` FOREIGN KEY (`clienteid`) REFERENCES `clientes` (`id`),
  CONSTRAINT `FK_service_company_id_service_provider` FOREIGN KEY (`servicio_compañia`) REFERENCES `proveedor_servicio` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

