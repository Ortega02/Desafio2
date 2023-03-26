-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Mar 26, 2023 at 01:28 AM
-- Server version: 8.0.31
-- PHP Version: 8.0.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
Database: textilexport
--

-- --------------------------------------------------------

--
-- Table structure for table `categoria`
--

DROP TABLE IF EXISTS `categoria`;
CREATE TABLE IF NOT EXISTS `categoria` (
  `IdCategoria` int NOT NULL AUTO_INCREMENT,
  `NombreCategoria` varchar(25) DEFAULT NULL,
  PRIMARY KEY (`IdCategoria`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `categoria`
--

INSERT INTO `categoria` (`IdCategoria`, `NombreCategoria`) VALUES
(1, '1'),(2,'2');

-- --------------------------------------------------------
--
-- Table structure for table `productos`
--
DROP TABLE IF EXISTS `productos`;
CREATE TABLE IF NOT EXISTS `productos` (
`IdProducto` varchar(6) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `Titulo` varchar(25) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `Precio` decimal(7,2) DEFAULT NULL,
  `Cantidad` int DEFAULT NULL,
  `Categoria` int DEFAULT NULL,
  `Descripcion` varchar(300) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `Disponibilidad` varchar(25) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `imagen` varchar(300) NOT NULL,
  PRIMARY KEY (`IdProducto`),
  KEY `IdCategoria` (`IdCategoria`)
  )ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
  --
-- Dumping data for table `productos`
--

INSERT INTO `productos`  (`IdProducto`, `Titulo`, `Precio`, `Cantidad`, `Categoria`, `Descripcion`, `Disponibilidad`, `imagen`) VALUES
(1, 'Producto1','15.70', '10', '1', 'este es el producto1','disponible', 'sudadera.jpg'),
(2, 'Producto2','35.40', '40', '1', 'este es el producto1','disponible', 'camiseta.jpg');

--
-- --------------------------------------------------------
-- Table structure for table `usuario `
--

DROP TABLE IF EXISTS `usuarios`;
CREATE TABLE IF NOT EXISTS `usuarios` (
  `IdUsuario` int NOT NULL AUTO_INCREMENT,
  `Rol` int NOT NULL,
  `Nombres` varchar(50) DEFAULT NULL,
  `Apellidos` varchar(50) DEFAULT NULL,
  `Telefono` varchar(8) DEFAULT NULL,
  `Correo` varchar(50) DEFAULT NULL,
  `Direccion` varchar(100) DEFAULT NULL,
  `Clave` varchar(25) DEFAULT NULL,
  PRIMARY KEY (`IdUsuario`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `cliente`
--

INSERT INTO `usuarios` (`IdUsuario`,`Rol`, `Nombres`, `Apellidos`, `Telefono`, `Correo`, `Direccion`, `Clave`) VALUES
(1, '1','Anthony', 'Ortega', '78965282', 'io.ortega.tony@gmail.com', 'Soyapango', 'anthony123'),(2, '2', 'Abigail', 'Acu�a', '77777777', 'acuaby@gmail.com', 'Soyapango', 'abby123');


/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
