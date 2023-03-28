-- phpMyAdmin SQL Dump
-- version 5.1.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Mar 28, 2023 at 08:58 AM
-- Server version: 5.7.24
-- PHP Version: 8.0.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `escuela`
--

-- --------------------------------------------------------

--
-- Table structure for table `alumnos`
--

CREATE TABLE `alumnos` (
  `id` int(11) NOT NULL,
  `id_carrera` int(11) NOT NULL,
  `nombre` varchar(255) NOT NULL,
  `foto` varchar(255) DEFAULT NULL,
  `apellido` varchar(64) NOT NULL,
  `email` varchar(128) NOT NULL COMMENT 'correo',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `alumnos`
--

INSERT INTO `alumnos` (`id`, `id_carrera`, `nombre`, `foto`, `apellido`, `email`, `created_at`, `updated_at`) VALUES
(21, 2, 'Luigi Daniel', NULL, 'Herrera', 'maxalejandrorh@gmail.com', '2023-03-27 16:20:52', '2023-03-27 16:20:52');

-- --------------------------------------------------------

--
-- Table structure for table `carreras`
--

CREATE TABLE `carreras` (
  `id` int(11) NOT NULL,
  `nombre` varchar(128) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `carreras`
--

INSERT INTO `carreras` (`id`, `nombre`, `created_at`, `updated_at`) VALUES
(1, 'Ing. Multimedia', '2023-03-08 21:05:55', NULL),
(2, 'Ing. Industrial', '2023-03-08 21:05:55', NULL),
(3, 'Lic. Arquitectura', '2023-03-08 21:05:55', NULL),
(4, 'Lic. Marca', '2023-03-13 20:16:16', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `funciones`
--

CREATE TABLE `funciones` (
  `id` int(11) NOT NULL,
  `id_pelicula` int(11) NOT NULL,
  `id_usuario` int(11) NOT NULL,
  `hora` time NOT NULL,
  `fecha` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `generos`
--

CREATE TABLE `generos` (
  `id` int(11) NOT NULL,
  `nombre` varchar(64) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `generos_pelicula`
--

CREATE TABLE `generos_pelicula` (
  `id_genero` int(11) NOT NULL,
  `id_pelicula` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `generos_pelicula`
--

INSERT INTO `generos_pelicula` (`id_genero`, `id_pelicula`) VALUES
(3, 1),
(1, 3),
(4, 2);

-- --------------------------------------------------------

--
-- Table structure for table `peliculas`
--

CREATE TABLE `peliculas` (
  `id` int(11) NOT NULL,
  `id_genero` int(11) DEFAULT NULL,
  `titulo` varchar(64) NOT NULL,
  `descripcion` text NOT NULL,
  `anio` year(4) NOT NULL,
  `imagen` varchar(255) DEFAULT NULL,
  `duracion_minutos` tinyint(128) NOT NULL,
  `director` varchar(64) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `tipos_usuario`
--

CREATE TABLE `tipos_usuario` (
  `id` int(11) NOT NULL,
  `nombre` int(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `id_tipo_usuario` int(11) NOT NULL,
  `correo` varchar(128) NOT NULL,
  `contrasena` varchar(128) NOT NULL,
  `nombre` varchar(128) NOT NULL,
  `foto` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `alumnos`
--
ALTER TABLE `alumnos`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_carrera` (`id_carrera`);

--
-- Indexes for table `carreras`
--
ALTER TABLE `carreras`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `funciones`
--
ALTER TABLE `funciones`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_pelicula` (`id_pelicula`),
  ADD KEY `id_usuario` (`id_usuario`);

--
-- Indexes for table `generos`
--
ALTER TABLE `generos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `generos_pelicula`
--
ALTER TABLE `generos_pelicula`
  ADD KEY `id_genero` (`id_genero`),
  ADD KEY `id_pelicula` (`id_pelicula`);

--
-- Indexes for table `peliculas`
--
ALTER TABLE `peliculas`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_genero` (`id_genero`);

--
-- Indexes for table `tipos_usuario`
--
ALTER TABLE `tipos_usuario`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_tipo_usuario` (`id_tipo_usuario`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `alumnos`
--
ALTER TABLE `alumnos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `carreras`
--
ALTER TABLE `carreras`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `funciones`
--
ALTER TABLE `funciones`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `generos`
--
ALTER TABLE `generos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `peliculas`
--
ALTER TABLE `peliculas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tipos_usuario`
--
ALTER TABLE `tipos_usuario`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `alumnos`
--
ALTER TABLE `alumnos`
  ADD CONSTRAINT `alumnos_ibfk_1` FOREIGN KEY (`id_carrera`) REFERENCES `carreras` (`id`);

--
-- Constraints for table `funciones`
--
ALTER TABLE `funciones`
  ADD CONSTRAINT `funciones_ibfk_1` FOREIGN KEY (`id_pelicula`) REFERENCES `peliculas` (`id`),
  ADD CONSTRAINT `funciones_ibfk_2` FOREIGN KEY (`id_usuario`) REFERENCES `alumnos` (`id`);

--
-- Constraints for table `peliculas`
--
ALTER TABLE `peliculas`
  ADD CONSTRAINT `peliculas_ibfk_1` FOREIGN KEY (`id_genero`) REFERENCES `generos` (`id`);

--
-- Constraints for table `usuarios`
--
ALTER TABLE `usuarios`
  ADD CONSTRAINT `usuarios_ibfk_1` FOREIGN KEY (`id_tipo_usuario`) REFERENCES `tipos_usuario` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
