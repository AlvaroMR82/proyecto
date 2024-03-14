-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: db
-- Tiempo de generación: 14-03-2024 a las 14:35:59
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
-- Estructura de tabla para la tabla `parteAveria`
--

CREATE TABLE `parteAveria` (
  `ID_parte` int NOT NULL,
  `Fecha` varchar(50) DEFAULT NULL,
  `Zona` varchar(50) DEFAULT NULL,
  `operarios_ID` int DEFAULT NULL,
  `maquinas_ID` int DEFAULT NULL,
  `estado` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL DEFAULT 'pendiente',
  `incidencia` varchar(500) NOT NULL,
  `solucion` varchar(500) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `fecha_cierre` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `id_cliente` int DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Volcado de datos para la tabla `parteAveria`
--

INSERT INTO `parteAveria` (`ID_parte`, `Fecha`, `Zona`, `operarios_ID`, `maquinas_ID`, `estado`, `incidencia`, `solucion`, `fecha_cierre`, `id_cliente`) VALUES
(10, '06/02/2024', 'Extrusion', 6, 14, 'asignado', 'La puerta del horno de fundicion esta rota.', 'Reparar puerta.', NULL, 3),
(11, '06/02/2024', 'Lacados', 12, 2, 'cerrado', 'Lacado atascado.', 'Percha torcida. se recoloca y se pone en marcha.', NULL, 1),
(13, '22/02/2024', 'Lacados', 1, 2, 'asignado', 'Puertas de lacados horizontal no se abren.', NULL, NULL, 1),
(14, '26/02/2024', 'Lacados', 12, 1, 'cerrado', 'La cadena de transporte va a golpes.', NULL, NULL, 1),
(15, '26/02/2024', 'Lacados', 12, 2, 'cerrado', 'La malla del ciclon esta rota.', 'Cambiar la malla del ciclon\nReviar los engranajes\n', NULL, 1),
(16, '26/02/2024', 'Lacados', 1, 3, 'asignado', 'Las guias de los bodoques del horno estan gatadas e incluso afrietadas por el uso.', NULL, NULL, 1),
(17, '26/02/2024', 'Anodizados', 2, 4, 'pendiente', 'Rotura de un cable del polipasto del robot doble.', NULL, NULL, 1),
(18, '26/02/2024', 'Anodizados', 2, 5, 'pendiente', 'Al hacer varias pasadas los motores se calientan y saltan las protecciones.', NULL, NULL, 1),
(19, '26/02/2024', 'Anodizados', 2, 6, 'pendiente', 'La zona de la derecha de la granalladora tiene desgaste y pierde la granalla.', NULL, NULL, 1),
(20, '26/02/2024', 'Extrusion', 6, 7, 'pendiente', 'Chatarrera de la prensa esta atascada y no se mueve.', NULL, NULL, 1),
(21, '26/02/2024', 'Extrusion', 6, 14, 'pendiente', 'La refrigeración de la puerta del horno esta rota y pierde agua.', NULL, NULL, 1),
(22, '26/02/2024', 'Extrusion', 6, 15, 'pendiente', 'El alumbrado de la prensa 16 tiene muchos focos apagados.', NULL, NULL, 1),
(23, '29/02/2024', 'lacados', NULL, 1, 'pendiente', 'Hormo de polimerizado hecha mucha pavesa.', NULL, NULL, 14),
(24, '29/02/2024', 'lacados', NULL, 3, 'pendiente', 'Embolsadora no hace bien el cierre y pierde vacio en el horno.', NULL, NULL, 14),
(25, '29/02/2024', 'lacados', NULL, 2, 'pendiente', 'Robot numero 1 de las cubas tiene la lampara de actividad siempre apagada.', NULL, NULL, 14),
(26, '29/02/2024', 'lacados', NULL, 3, 'pendiente', 'Embolsadora no hace bien el cierre y pierde vacio en el horno.', NULL, NULL, 14);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `parteAveria`
--
ALTER TABLE `parteAveria`
  ADD PRIMARY KEY (`ID_parte`),
  ADD KEY `maquinas_ID` (`maquinas_ID`),
  ADD KEY `_usuarios` (`operarios_ID`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `parteAveria`
--
ALTER TABLE `parteAveria`
  MODIFY `ID_parte` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `parteAveria`
--
ALTER TABLE `parteAveria`
  ADD CONSTRAINT `_usuarios` FOREIGN KEY (`operarios_ID`) REFERENCES `_usuarios` (`id_usuario`),
  ADD CONSTRAINT `parteAveria_ibfk_2` FOREIGN KEY (`maquinas_ID`) REFERENCES `maquinas` (`id_maquina`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
