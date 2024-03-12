-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: db
-- Tiempo de generación: 10-03-2024 a las 17:10:40
-- Versión del servidor: 8.0.31
-- Versión de PHP: 8.0.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `mantenimiento`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `clientes`
--

CREATE TABLE `clientes` (
  `id_cliente` int NOT NULL,
  `nombre_cliente` varchar(50) DEFAULT NULL,
  `zona` varchar(50) DEFAULT NULL,
  `id_usuario` int DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

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

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `mensajes`
--

CREATE TABLE `mensajes` (
  `id` int NOT NULL,
  `mensaje` varchar(500) NOT NULL,
  `prioridad` varchar(50) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `zona` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Volcado de datos para la tabla `mensajes`
--

INSERT INTO `mensajes` (`id`, `mensaje`, `prioridad`, `nombre`, `zona`) VALUES
(11, 'El quemador del lado del almacen se bloqueo en el primer arranque.', 'warning', 'Alvaro', 'Horno Secado L3'),
(12, 'Guardamotor del motor de lodos salta sin motivo aparente.', 'warning', 'Juan', 'Gratadora L2'),
(13, 'Precaución al transitar las naves de lacados debido a las obras, maquinaria pesada en continuo movimiento.', 'danger', 'Seguridad', 'Naves de lacados'),
(16, 'Hemos mejorado el rendimieto en un 15%', 'success', 'Alvaro', 'Todas las zonas'),
(18, 'Alcantarilla rota en la carretera de la rotonda interior.', 'danger', 'Pepe', 'Anodizados'),
(20, 'Motor puente grua quemado. Se sustituye.', 'warning', 'Alvaro', 'Lacados'),
(22, 'Nave abierta por obras. Hace mucho frio.', 'warning', 'Alvaro', 'Lacados'),
(23, 'Chapa suelta en el tejado de lacados Vertical.\r\n', 'danger', 'Pepe', 'Anodizados'),
(24, 'Hola Mundo', 'success', 'Alvaro', 'Lacados'),
(25, 'Las puertas del secadero no abren.', 'success', 'Alvaro', 'Lacados');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `operarios`
--

CREATE TABLE `operarios` (
  `id` int NOT NULL,
  `usuario` varchar(30) NOT NULL,
  `nombre` varchar(30) NOT NULL,
  `apellido` varchar(30) NOT NULL,
  `email` varchar(50) DEFAULT NULL,
  `telefono` int DEFAULT NULL,
  `seccion` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Volcado de datos para la tabla `operarios`
--

INSERT INTO `operarios` (`id`, `usuario`, `nombre`, `apellido`, `email`, `telefono`, `seccion`) VALUES
(1, 'alvaro', 'Alvaro', 'Mosquera', 'a@a.com', 123456789, 'lacados'),
(2, 'ramon', 'Ramon', 'Garcia', 'a@a.com', 123456789, 'lacados'),
(3, 'juan', 'Juan', 'Magan', 'a@a.com', 987654321, 'extrusion'),
(4, 'Pepe', 'Pepe', 'Prado', 'a@a.com', 654321987, 'anodizados');

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

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int NOT NULL,
  `usuario` varchar(30) DEFAULT NULL,
  `pass` varchar(500) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `rol` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id`, `usuario`, `pass`, `rol`) VALUES
(4, 'alvaro', '$2y$10$QkGkr.AYyGsKFp3Hee5lr.UM3hFbr8kDG4SyEOeXxiqJ.K4pyVlva', 'administrador'),
(5, 'ramon', '$2y$10$dayTV8kWT1UPp8XbZh5u3uZP/83yiL4glZsZ82oJ1gqvP8ZiNeWL2', 'operario'),
(6, 'juan', '$2y$10$pQ2sOiJ3qFzZiHHnRXtrxu.JdVDo2D9KGd8lm1oEiqUcOJ.9jdvVO', 'cliente'),
(7, 'Pepe', '$2y$10$vyibox4DaqiA0vHtlLYCaumGrf5RbFLbAG5hquToKCCS6hbDNh6tK', 'cliente'),
(8, 'pedro', '$2y$10$bnzfmOlTg3rOQ0N5extL6uHkgJhh/da006kdyaoozFlWq3powU9fW', 'operario'),
(10, 'Mosquera', '$2y$10$8fe28ETjdUjcLwXcdzCfg.INcuhxkGWw0zUz7W6e9pgwmT3PSQzH.', 'cliente'),
(11, 'Jose', '$2y$10$aeLZ8.fvgTmGMQp/tr5gkOu0u9SJ2gFJcDXMP3h/rdjeIB8QQM0G6', 'operario');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `_usuarios`
--

CREATE TABLE `_usuarios` (
  `id_usuario` int NOT NULL,
  `nombreUsuario` varchar(30) NOT NULL,
  `rol` varchar(30) NOT NULL,
  `pass` varchar(500) NOT NULL,
  `nombreOperario` varchar(30) NOT NULL,
  `apellido` varchar(30) DEFAULT NULL,
  `email` varchar(30) DEFAULT NULL,
  `telefono` int DEFAULT NULL,
  `seccion` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Volcado de datos para la tabla `_usuarios`
--

INSERT INTO `_usuarios` (`id_usuario`, `nombreUsuario`, `rol`, `pass`, `nombreOperario`, `apellido`, `email`, `telefono`, `seccion`) VALUES
(1, 'alvaro', 'administrador', '$2y$10$16VWmMKnrwSRwYjp7fK/1OlZpeaFcm1YN.yU/S6Ze0R9s.KFbOkKm', 'Alvaro', 'Mosquera Rial', 'a@a.com', 123456789, 'Lacados'),
(2, 'ramon', 'tecnico', '$2y$10$x5wq0K6wN7wTnDZ7RCRnHeiNQ9NmpMcjUXnicHN.uyXooXIWYnkFy', 'Ramon', 'Garcia', 'a@a.com', 123456789, 'Anodizados'),
(3, 'juan', 'cliente', '$2y$10$uA9ORHGuYB9Z54Ew9S88GO1LTYo33XziQmz43CkzLNs2L7jyP7igS', 'Juan', 'Magan', 'a@a.com', 987765432, 'Extrusion'),
(4, 'pepe', 'tecnico', '$2y$10$X2ZFDrXUvMN3GWT340p8quIziB7ApKjkQ0tEI8eucLzA9xpK91QEO', 'Pepe', 'Prado', 'a@a.com', 123456789, 'Anodizados'),
(5, 'maría', 'cliente', '$2y$10$QkGkr.AYyGsKFp3Hee5lr.UM3hFbr8kDG4SyEOeXxiqJ.K4pyVlva', 'María', 'Gómez', 'maria2@example.com', 987654321, 'Anodizados'),
(6, 'carlos', 'tecnico', '$2y$10$QkGkr.AYyGsKFp3Hee5lr.UM3hFbr8kDG4SyEOeXxiqJ.K4pyVlva', 'Carlos', 'Martínez', 'carlos3@example.com', 555555555, 'Extrusion'),
(7, 'laura', 'cliente', '$2y$10$QkGkr.AYyGsKFp3Hee5lr.UM3hFbr8kDG4SyEOeXxiqJ.K4pyVlva', 'Laura', 'Sánchez', 'laura50@example.com', 999999999, 'Anodizados'),
(8, 'perico', 'tecnico', '$2y$10$LcTDB8Sc8ArAgAMHhUVZi./9gGB6dBxbyjoPIsts9bROTAxOs7Z3y', 'Perico', 'Palotes', 'a@a.com', 123456789, 'Anodizados'),
(12, 'romero', 'tecnico', '$2y$10$bUfWrHIvob7BkWpWGhg8wOnz72BntjmIruA1DbOCfVXHTOdko7JPW', 'Fran', 'Romero', 'a@a.com', 123456789, 'Lacados'),
(13, 'alberto', 'tecnico', '$2y$10$3OPwB1H6teijhMSnBOSDKehMrRl3cSPQ6FeCFJ.i96PtKw1ktkX4S', 'Alberto', 'Carril', 'a@a.com', 123456789, 'lacados'),
(14, 'picado', 'cliente', '$2y$10$E/coNyCqv6FtF4YC70mVx.o1Tn0rzxctkJCgelKYx/7dKUqA1JvjW', 'Picado', 'Nonsei', 'a@a.com', 132456, 'lacados'),
(18, 'pedro', 'tecnico', '$2y$10$KMGG.RBPrlUKXT73VZaxT.TwHf6SLEr2.y4hRrXjmgpfEEYnkbufq', 'Pedro', 'Brasi', 'a@a', 123456789, 'Extrusion'),
(19, 'fernando', 'tecnico', '$2y$10$u..Erb7w4NuiUIbHQO9Bp.gMKUL85Oo.0UKUywVNAXwmkFL6lQP.2', 'Fernando', 'perico', 'a@a.com', 123456, 'Extrusion');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `clientes`
--
ALTER TABLE `clientes`
  ADD PRIMARY KEY (`id_cliente`);

--
-- Indices de la tabla `maquinas`
--
ALTER TABLE `maquinas`
  ADD PRIMARY KEY (`id_maquina`);

--
-- Indices de la tabla `mensajes`
--
ALTER TABLE `mensajes`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `operarios`
--
ALTER TABLE `operarios`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `parteAveria`
--
ALTER TABLE `parteAveria`
  ADD PRIMARY KEY (`ID_parte`),
  ADD KEY `maquinas_ID` (`maquinas_ID`),
  ADD KEY `_usuarios` (`operarios_ID`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `_usuarios`
--
ALTER TABLE `_usuarios`
  ADD PRIMARY KEY (`id_usuario`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `clientes`
--
ALTER TABLE `clientes`
  MODIFY `id_cliente` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `maquinas`
--
ALTER TABLE `maquinas`
  MODIFY `id_maquina` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT de la tabla `mensajes`
--
ALTER TABLE `mensajes`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT de la tabla `operarios`
--
ALTER TABLE `operarios`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `parteAveria`
--
ALTER TABLE `parteAveria`
  MODIFY `ID_parte` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT de la tabla `_usuarios`
--
ALTER TABLE `_usuarios`
  MODIFY `id_usuario` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

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
