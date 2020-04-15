create database crudproyectotr;
use crudproyectotr;

CREATE TABLE `estudiantes` (
  `nombre` varchar(30) NOT NULL,
  `apellidos` varchar(30) NOT NULL,
  `edad` int(30) NOT NULL,
  `cedula` int(30) NOT NULL,
  `correo` varchar(30) NOT NULL,
  `telefono` int(30) NOT NULL,
  `fecha_creacion` timestamp NOT NULL DEFAULT current_timestamp()
);

