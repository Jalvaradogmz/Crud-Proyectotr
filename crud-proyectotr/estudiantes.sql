create database crudproyectotr;
use crudproyectotr;

CREATE TABLE `estudiantes` (
  `Nombre` varchar(30) NOT NULL,
  `Apellidos` varchar(30) NOT NULL,
  `Edad` int(30) NOT NULL,
  `Cedula` int(30) NOT NULL,
  `Correo` varchar(30) NOT NULL,
  `Telefono` int(30) NOT NULL,
  `Fecha_creacion` timestamp NOT NULL DEFAULT current_timestamp()
);

