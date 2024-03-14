-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: db
-- Tiempo de generación: 14-03-2024 a las 14:10:13
-- Versión del servidor: 8.2.0
-- Versión de PHP: 8.2.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `Mantenimiento`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `maquinas`
--

CREATE TABLE `maquinas` (
  `id_maquina` int NOT NULL,
  `nombreMaquina` varchar(30) NOT NULL,
  `foto` varchar(500) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `planos` varchar(500) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `manuales` varchar(500) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `despiece` varchar(500) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `seccion` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Volcado de datos para la tabla `maquinas`
--

INSERT INTO `maquinas` (`id_maquina`, `nombreMaquina`, `foto`, `planos`, `manuales`, `despiece`, `seccion`) VALUES
(1, 'Lacado Vertical', 'imagenes/vertical.webp', 'documentos/planos.pdf', 'documentos/manual.pdf', 'documentos/despiece.pdf', 'Lacados'),
(2, 'Lacado Horizontal', '/imagenes/horizontal.webp', 'documentos/planos.pdf', 'documentos/manual.pdf', 'documentos/despiece.pdf', 'Lacados'),
(3, 'Imitacion Madera', '/imagenes/madera.jpeg', 'documentos/planos.pdf', 'documentos/manual.pdf', 'documentos/despiece.pdf', 'Lacados'),
(4, 'Anodizado 1', '/imagenes/anodizado.jpeg', 'documentos/planos.pdf', 'documentos/manual.pdf', 'documentos/despiece.pdf', 'Anodizados'),
(5, 'Pulidora', '/imagenes/pulidora.jpeg', 'documentos/planos.pdf', 'documentos/manual.pdf', 'documentos/despiece.pdf', 'Anodizados'),
(6, 'Granalladora', '/imagenes/granalladora.webp', 'documentos/planos.pdf', 'documentos/manual.pdf', 'documentos/despiece.pdf', 'Anodizados'),
(7, 'Prensa 3', '/imagenes/prensa.webp', 'documentos/planos.pdf', 'documentos/manual.pdf', 'documentos/despiece.pdf', 'Extrusion'),
(14, 'Fundicion', '/imagenes/fundicion.avif', 'documentos/planos.pdf', 'documentos/manual.pdf', 'documentos/despiece.pdf', 'Extrusion'),
(15, 'Prensa 16', '/imagenes/prensa.webp', 'documentos/planos.pdf', 'documentos/manual.pdf', 'documentos/despiece.pdf', 'Extrusion');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `maquinas`
--
ALTER TABLE `maquinas`
  ADD PRIMARY KEY (`id_maquina`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `maquinas`
--
ALTER TABLE `maquinas`
  MODIFY `id_maquina` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
