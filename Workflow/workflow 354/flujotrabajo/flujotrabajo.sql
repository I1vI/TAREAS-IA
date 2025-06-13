

-- Crear la base de datos
CREATE DATABASE IF NOT EXISTS flujotrabajo;
USE flujotrabajo;

-- Establecer configuraciones de transacción
SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;

-- Crear la tabla flujoproceso
CREATE TABLE `flujoproceso` (
  `flujo` varchar(3) NOT NULL,
  `proceso` varchar(3) NOT NULL,
  `siguiente` varchar(3) DEFAULT NULL,
  `rol` varchar(10) DEFAULT NULL,
  `pantalla` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- Insertar datos en la tabla flujoproceso
INSERT INTO `flujoproceso` (`flujo`, `proceso`, `siguiente`, `rol`, `pantalla`) VALUES
('F1', 'P1', 'P2', 'Usuario', 'Ingresar'),
('F1', 'P2', 'P3', 'Usuario', 'Buscar'),
('F1', 'P3', 'P4', 'Usuario', 'Seleccionar'),
('F1', 'P4', 'P5', 'Recepcioni', 'Recibir 1'),
('F1', 'P5', 'P6', 'Recepcioni', 'Verificar'),
('F1', 'P6', 'P7', 'Biblioteca', 'Registrar'),
('F1', 'P7', 'P8', 'Biblioteca', 'Entregar'),
('F1', 'P8', NULL, 'Usuario', 'Recibir 2');

-- Confirmar la transacción
COMMIT;
