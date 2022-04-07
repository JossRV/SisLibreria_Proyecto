CREATE DATABASE `Fundamentos`;
CREATE TABLE `Fundamentos`.`t_usuarios` (
  `id_usuario` INT NOT NULL AUTO_INCREMENT,
  `usuario` VARCHAR(245) NOT NULL,
  `password` VARCHAR(245) NOT NULL,
  `nombre` VARCHAR(245) NOT NULL,
  `apellido_paterno` VARCHAR(245) NOT NULL,
  `apellido_materno` VARCHAR(245) NOT NULL,
  PRIMARY KEY (`id_usuario`));