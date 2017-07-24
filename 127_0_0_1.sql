-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 25-07-2017 a las 00:54:34
-- Versión del servidor: 10.1.22-MariaDB
-- Versión de PHP: 7.1.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `awaap`
--
CREATE DATABASE IF NOT EXISTS `awaap` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `awaap`;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `espacioacademico`
--

CREATE TABLE `espacioacademico` (
  `id` int(11) NOT NULL,
  `nombre` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `espacioacademico`
--

INSERT INTO `espacioacademico` (`id`, `nombre`) VALUES
(1, 'Paradigma Orientado a Objetos'),
(2, 'Lenguaje de Programaci&oacute;n'),
(3, 'Estructuras de Datos');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `estudiante`
--

CREATE TABLE `estudiante` (
  `id` int(11) NOT NULL,
  `documento` varchar(45) DEFAULT NULL,
  `nombre` varchar(45) DEFAULT NULL,
  `correo` varchar(45) DEFAULT NULL,
  `clave` varchar(13) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `estudiante`
--

INSERT INTO `estudiante` (`id`, `documento`, `nombre`, `correo`, `clave`) VALUES
(5, '1234', 'Jose Daniel Isaza Hernandez', 'jdisaza@uniquindio.edu.co', '%4prlIRLfT.kY'),
(6, '123', 'Maria Fernanda Osorio Zambrano', 'mafeosza@gmail.com', '%4O3SOyx3YX4A'),
(7, '1094', 'Ana Maria Osorio Zambrano', 'anitachiqui@hotmail.com', '%4q7r0orP5cd6'),
(8, '1096', 'Diana Franco', 'dianita@gmail.com', '%4uhS4yJAwOTM');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `grupo`
--

CREATE TABLE `grupo` (
  `id` int(11) NOT NULL,
  `numero` int(11) DEFAULT NULL,
  `franja` varchar(45) DEFAULT NULL,
  `Profesor_id` int(11) NOT NULL,
  `EspacioAcademico_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `grupo`
--

INSERT INTO `grupo` (`id`, `numero`, `franja`, `Profesor_id`, `EspacioAcademico_id`) VALUES
(1, 1, 'D', 1, 1),
(2, 2, 'D', 2, 1),
(3, 1, 'D', 3, 2),
(4, 1, 'D', 2, 3);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `intento`
--

CREATE TABLE `intento` (
  `id` int(11) NOT NULL,
  `fecha` datetime NOT NULL,
  `superado` tinyint(1) DEFAULT NULL,
  `puntaje` double DEFAULT NULL,
  `Reto_id` int(11) NOT NULL,
  `Estudiante_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `intento`
--

INSERT INTO `intento` (`id`, `fecha`, `superado`, `puntaje`, `Reto_id`, `Estudiante_id`) VALUES
(1, '2017-05-09 00:00:00', 0, 50, 1, 7),
(2, '2017-05-25 22:33:59', 0, 33, 2, 5),
(3, '2017-05-30 16:31:45', 0, 0, 1, 5),
(4, '2017-05-30 16:32:28', 0, 0, 1, 5),
(5, '2017-05-30 16:33:38', 0, 0, 1, 5),
(6, '2017-05-30 16:33:57', 0, 0, 1, 5),
(7, '2017-05-30 16:34:31', 0, 0, 1, 5),
(8, '2017-05-30 16:35:01', 1, 0, 1, 5),
(9, '2017-05-30 16:37:29', 0, 0, 1, 5),
(10, '2017-05-30 16:38:06', 0, 0, 1, 5),
(11, '2017-05-30 16:38:22', 1, 0, 1, 5),
(12, '2017-05-30 16:39:38', 0, 0, 1, 5),
(13, '2017-05-30 16:39:53', 1, 0, 1, 5),
(14, '2017-05-30 16:40:27', 0, 0, 1, 5),
(15, '2017-05-30 16:40:31', 1, 0, 1, 5),
(16, '2017-05-30 16:47:19', 0, 0, 1, 5),
(17, '2017-05-30 16:47:54', 0, 0, 1, 5),
(18, '2017-05-30 19:33:29', 0, 66.666666666667, 1, 5),
(19, '2017-05-30 19:39:09', 0, 66.666666666667, 1, 5),
(20, '2017-05-30 19:39:19', 0, 66.666666666667, 1, 5),
(21, '2017-05-30 20:01:12', 1, 200, 1, 5),
(22, '2017-05-30 20:06:56', 0, 66.666666666667, 1, 5),
(23, '2017-05-30 20:10:47', 1, 200, 1, 5),
(24, '2017-05-30 20:16:21', 1, 200, 1, 5),
(25, '2017-05-30 20:16:28', 0, 66.666666666667, 1, 5);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `intentotest`
--

CREATE TABLE `intentotest` (
  `id` int(11) NOT NULL,
  `superado` tinyint(1) DEFAULT NULL,
  `Intento_id` int(11) NOT NULL,
  `Test_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `intentotest`
--

INSERT INTO `intentotest` (`id`, `superado`, `Intento_id`, `Test_id`) VALUES
(1, 1, 3, 1),
(2, 0, 3, 2),
(3, 0, 3, 15),
(4, 1, 4, 1),
(5, 0, 4, 2),
(6, 0, 4, 15),
(7, 1, 5, 1),
(8, 0, 5, 2),
(9, 0, 5, 15),
(10, 1, 6, 1),
(11, 0, 6, 2),
(12, 0, 6, 15),
(13, 1, 7, 1),
(14, 0, 7, 2),
(15, 0, 7, 15),
(16, 1, 8, 1),
(17, 1, 8, 2),
(18, 1, 8, 15),
(19, 1, 9, 1),
(20, 0, 9, 2),
(21, 0, 9, 15),
(22, 1, 10, 1),
(23, 0, 10, 2),
(24, 0, 10, 15),
(25, 1, 11, 1),
(26, 1, 11, 2),
(27, 1, 11, 15),
(28, 1, 12, 1),
(29, 0, 12, 2),
(30, 0, 12, 15),
(31, 1, 13, 1),
(32, 1, 13, 2),
(33, 1, 13, 15),
(34, 1, 14, 1),
(35, 0, 14, 2),
(36, 0, 14, 15),
(37, 1, 15, 1),
(38, 1, 15, 2),
(39, 1, 15, 15),
(40, 1, 16, 1),
(41, 0, 16, 2),
(42, 0, 16, 15),
(43, 1, 17, 1),
(44, 0, 17, 2),
(45, 0, 17, 15),
(46, 1, 18, 1),
(47, 0, 18, 2),
(48, 0, 18, 15),
(49, 1, 19, 1),
(50, 0, 19, 2),
(51, 0, 19, 15),
(52, 1, 20, 1),
(53, 0, 20, 2),
(54, 0, 20, 15),
(55, 1, 21, 1),
(56, 1, 21, 2),
(57, 1, 21, 15),
(58, 1, 22, 1),
(59, 0, 22, 2),
(60, 0, 22, 15),
(61, 1, 23, 1),
(62, 1, 23, 2),
(63, 1, 23, 15),
(64, 1, 24, 1),
(65, 1, 24, 2),
(66, 1, 24, 15),
(67, 1, 25, 1),
(68, 0, 25, 2),
(69, 0, 25, 15);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `material`
--

CREATE TABLE `material` (
  `id` int(11) NOT NULL,
  `url` varchar(45) DEFAULT NULL,
  `Tema_id` int(11) NOT NULL,
  `Tema_Unidad_id` int(11) NOT NULL,
  `Nombre` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `material`
--

INSERT INTO `material` (`id`, `url`, `Tema_id`, `Tema_Unidad_id`, `Nombre`) VALUES
(1, '/algo.pdf', 1, 1, 'variables');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `profesor`
--

CREATE TABLE `profesor` (
  `id` int(11) NOT NULL,
  `documento` varchar(45) DEFAULT NULL,
  `nombre` varchar(45) DEFAULT NULL,
  `correo` varchar(45) DEFAULT NULL,
  `clave` varchar(13) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `profesor`
--

INSERT INTO `profesor` (`id`, `documento`, `nombre`, `correo`, `clave`) VALUES
(1, '14896480', 'Julian Esteban Guti&eacute;rrez', 'jgutier@uniquindio.edu.co', '%4O3SOyx3YX4A'),
(2, '1111', 'Andr&eacute;s Felipe Herrera', 'afherrera@uniquindio.edu.co', '%4O3SOyx3YX4A'),
(3, '2222', 'Jes&uacute;s Einer Zapata', 'ezapata@uniquindio.edu.co', '%4O3SOyx3YX4A');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `registro`
--

CREATE TABLE `registro` (
  `id` int(11) NOT NULL,
  `Grupo_id` int(11) NOT NULL,
  `Grupo_Profesor_id` int(11) NOT NULL,
  `Estudiante_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `registro`
--

INSERT INTO `registro` (`id`, `Grupo_id`, `Grupo_Profesor_id`, `Estudiante_id`) VALUES
(1, 1, 1, 7),
(2, 2, 2, 5),
(3, 3, 3, 6),
(4, 3, 3, 5),
(5, 1, 1, 5);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `reto`
--

CREATE TABLE `reto` (
  `id` int(11) NOT NULL,
  `nivelDificultad` int(11) DEFAULT NULL,
  `titulo` varchar(100) DEFAULT NULL,
  `descripcionCorta` text,
  `especificaciones` text,
  `solucionPython` text,
  `solucionJava` text NOT NULL,
  `imagen` text,
  `Tema_id` int(11) NOT NULL,
  `Grupo_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `reto`
--

INSERT INTO `reto` (`id`, `nivelDificultad`, `titulo`, `descripcionCorta`, `especificaciones`, `solucionPython`, `solucionJava`, `imagen`, `Tema_id`, `Grupo_id`) VALUES
(1, 2, 'Suma', 'Crear un algoritmo que sume dos numeros', 'Haciendo uso de las variables codificar un algoritmo que sume dos numeros que introduzca el usuario y retorne el resultado', 'a = int(raw_input())\nb = int(raw_input())\nsuma = a+b\nprint(suma)', '', '../imagenes/python-logo.png', 1, 1),
(2, 1, 'Imprimir', 'CÃ³digo que imprima en pantalla un mensaje ingresado por el usuario', 'Escribir un cÃ³digo que imprima un valor en pantalla', 'mensaje = input()\r\nprint(mensaje)', '', '../imagenes/programar.jpg', 1, 1),
(3, 2, 'Imprimir 2.0', 'Imprimir 2.0 \r\n								', 'Imprimir 2.0 \r\n								', 'Imprimir 2.0 \r\n								', 'Imprimir 2.0 \r\n								', '../imagenes/print-marketing.jpg', 1, 1),
(4, 5, 'sumar2', 'sumar2 \r\n								', 'sumar2 \r\n								', 'sumar2 \r\n								', 'sumar2 \r\n								', '../imagenes/programar.jpg', 2, 1),
(5, 4, 'alguito', 'algo', 'algo', '', 'algo', '../imagenes/programar.jpg', 2, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tema`
--

CREATE TABLE `tema` (
  `id` int(11) NOT NULL,
  `nombre` varchar(45) DEFAULT NULL,
  `Unidad_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `tema`
--

INSERT INTO `tema` (`id`, `nombre`, `Unidad_id`) VALUES
(1, 'Tipos de Variables', 1),
(2, 'Constantes', 2),
(3, 'Hilos', 5),
(4, 'Pilas y Colas', 7);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `test`
--

CREATE TABLE `test` (
  `id` int(11) NOT NULL,
  `descripcion` text NOT NULL,
  `valores` text,
  `visible` tinyint(1) DEFAULT NULL,
  `lenguaje` varchar(45) NOT NULL,
  `Reto_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `test`
--

INSERT INTO `test` (`id`, `descripcion`, `valores`, `visible`, `lenguaje`, `Reto_id`) VALUES
(1, 'Sumar 1 y 1', '1\r\n1', 1, 'python', 1),
(2, 'Sumar 2 y 3', '2\r\n3', 0, 'python', 1),
(4, 'Imprimir hola mundo', '\'hola mundo\'', 1, 'python', 2),
(5, 'Sumar 1 y 1', '1\r\n1', 1, 'java', 1),
(6, 'Sumar 2 y 3', '2\r\n3', 0, 'java', 1),
(11, 'hoho', '\'hola\'', 0, 'python', 2),
(12, 'algo', '\'algo\'', 1, 'python', 3),
(13, 'alguito', '\'rr\'', 0, 'java', 3),
(14, 'bla', '\'frf\'', 1, 'python', 3),
(15, 'Sumar 1 y 3', '1\r\n3', 1, 'python', 1),
(16, 'algo', '212', 1, 'python', 5);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `unidad`
--

CREATE TABLE `unidad` (
  `id` int(11) NOT NULL,
  `numero` int(11) DEFAULT NULL,
  `EspacioAcademico_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `unidad`
--

INSERT INTO `unidad` (`id`, `numero`, `EspacioAcademico_id`) VALUES
(1, 1, 1),
(2, 2, 1),
(3, 3, 1),
(4, 4, 1),
(5, 1, 2),
(6, 2, 2),
(7, 1, 3),
(8, 2, 3);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `espacioacademico`
--
ALTER TABLE `espacioacademico`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `estudiante`
--
ALTER TABLE `estudiante`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `grupo`
--
ALTER TABLE `grupo`
  ADD PRIMARY KEY (`id`,`Profesor_id`,`EspacioAcademico_id`),
  ADD KEY `fk_Grupo_Profesor1_idx` (`Profesor_id`),
  ADD KEY `fk_Grupo_EspacioAcademico1_idx` (`EspacioAcademico_id`);

--
-- Indices de la tabla `intento`
--
ALTER TABLE `intento`
  ADD PRIMARY KEY (`id`,`Reto_id`,`Estudiante_id`),
  ADD KEY `fk_Intento_Reto1_idx` (`Reto_id`),
  ADD KEY `fk_Intento_Estudiante1_idx` (`Estudiante_id`);

--
-- Indices de la tabla `intentotest`
--
ALTER TABLE `intentotest`
  ADD PRIMARY KEY (`id`,`Intento_id`,`Test_id`),
  ADD KEY `fk_IntentoTest_idx` (`Test_id`),
  ADD KEY `fk_Intento` (`Intento_id`);

--
-- Indices de la tabla `material`
--
ALTER TABLE `material`
  ADD PRIMARY KEY (`id`,`Tema_id`,`Tema_Unidad_id`),
  ADD KEY `fk_Material_Tema1_idx` (`Tema_id`,`Tema_Unidad_id`);

--
-- Indices de la tabla `profesor`
--
ALTER TABLE `profesor`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `registro`
--
ALTER TABLE `registro`
  ADD PRIMARY KEY (`id`,`Grupo_id`,`Grupo_Profesor_id`,`Estudiante_id`),
  ADD KEY `fk_Registro_Grupo1_idx` (`Grupo_id`,`Grupo_Profesor_id`),
  ADD KEY `fk_Registro_Estudiante1_idx` (`Estudiante_id`);

--
-- Indices de la tabla `reto`
--
ALTER TABLE `reto`
  ADD PRIMARY KEY (`id`,`Tema_id`),
  ADD KEY `fk_Reto_Tema1_idx` (`Tema_id`),
  ADD KEY `Grupo_id` (`Grupo_id`);

--
-- Indices de la tabla `tema`
--
ALTER TABLE `tema`
  ADD PRIMARY KEY (`id`,`Unidad_id`),
  ADD KEY `fk_Tema_Unidad1_idx` (`Unidad_id`);

--
-- Indices de la tabla `test`
--
ALTER TABLE `test`
  ADD PRIMARY KEY (`id`,`Reto_id`),
  ADD KEY `fk_Test_Reto_idx` (`Reto_id`);

--
-- Indices de la tabla `unidad`
--
ALTER TABLE `unidad`
  ADD PRIMARY KEY (`id`,`EspacioAcademico_id`),
  ADD KEY `fk_Unidad_EspacioAcademico1_idx` (`EspacioAcademico_id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `espacioacademico`
--
ALTER TABLE `espacioacademico`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT de la tabla `estudiante`
--
ALTER TABLE `estudiante`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT de la tabla `grupo`
--
ALTER TABLE `grupo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT de la tabla `intento`
--
ALTER TABLE `intento`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;
--
-- AUTO_INCREMENT de la tabla `intentotest`
--
ALTER TABLE `intentotest`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=70;
--
-- AUTO_INCREMENT de la tabla `material`
--
ALTER TABLE `material`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT de la tabla `profesor`
--
ALTER TABLE `profesor`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT de la tabla `registro`
--
ALTER TABLE `registro`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT de la tabla `reto`
--
ALTER TABLE `reto`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT de la tabla `tema`
--
ALTER TABLE `tema`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT de la tabla `test`
--
ALTER TABLE `test`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
--
-- AUTO_INCREMENT de la tabla `unidad`
--
ALTER TABLE `unidad`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `grupo`
--
ALTER TABLE `grupo`
  ADD CONSTRAINT `fk_Grupo_EspacioAcademico1` FOREIGN KEY (`EspacioAcademico_id`) REFERENCES `espacioacademico` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_Grupo_Profesor1` FOREIGN KEY (`Profesor_id`) REFERENCES `profesor` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `intento`
--
ALTER TABLE `intento`
  ADD CONSTRAINT `fk_Intento_Estudiante1` FOREIGN KEY (`Estudiante_id`) REFERENCES `estudiante` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_Intento_Reto1` FOREIGN KEY (`Reto_id`) REFERENCES `reto` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `intentotest`
--
ALTER TABLE `intentotest`
  ADD CONSTRAINT `fk_Intento` FOREIGN KEY (`Intento_id`) REFERENCES `intento` (`id`),
  ADD CONSTRAINT `fk_Test` FOREIGN KEY (`Test_id`) REFERENCES `test` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `material`
--
ALTER TABLE `material`
  ADD CONSTRAINT `fk_Material_Tema1` FOREIGN KEY (`Tema_id`,`Tema_Unidad_id`) REFERENCES `tema` (`id`, `Unidad_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `registro`
--
ALTER TABLE `registro`
  ADD CONSTRAINT `fk_Registro_Estudiante1` FOREIGN KEY (`Estudiante_id`) REFERENCES `estudiante` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_Registro_Grupo1` FOREIGN KEY (`Grupo_id`,`Grupo_Profesor_id`) REFERENCES `grupo` (`id`, `Profesor_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `reto`
--
ALTER TABLE `reto`
  ADD CONSTRAINT `Reto_ibfk_1` FOREIGN KEY (`Grupo_id`) REFERENCES `grupo` (`id`),
  ADD CONSTRAINT `fk_Reto_Tema1` FOREIGN KEY (`Tema_id`) REFERENCES `tema` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `tema`
--
ALTER TABLE `tema`
  ADD CONSTRAINT `fk_Tema_Unidad1` FOREIGN KEY (`Unidad_id`) REFERENCES `unidad` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `test`
--
ALTER TABLE `test`
  ADD CONSTRAINT `Test_ibfk_1` FOREIGN KEY (`Reto_id`) REFERENCES `reto` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `fk_Test_Reto` FOREIGN KEY (`Reto_id`) REFERENCES `reto` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `unidad`
--
ALTER TABLE `unidad`
  ADD CONSTRAINT `fk_Unidad_EspacioAcademico1` FOREIGN KEY (`EspacioAcademico_id`) REFERENCES `espacioacademico` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;
--
-- Base de datos: `phpmyadmin`
--
CREATE DATABASE IF NOT EXISTS `phpmyadmin` DEFAULT CHARACTER SET utf8 COLLATE utf8_bin;
USE `phpmyadmin`;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pma__bookmark`
--

CREATE TABLE `pma__bookmark` (
  `id` int(11) NOT NULL,
  `dbase` varchar(255) COLLATE utf8_bin NOT NULL DEFAULT '',
  `user` varchar(255) COLLATE utf8_bin NOT NULL DEFAULT '',
  `label` varchar(255) CHARACTER SET utf8 NOT NULL DEFAULT '',
  `query` text COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Bookmarks';

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pma__central_columns`
--

CREATE TABLE `pma__central_columns` (
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL,
  `col_name` varchar(64) COLLATE utf8_bin NOT NULL,
  `col_type` varchar(64) COLLATE utf8_bin NOT NULL,
  `col_length` text COLLATE utf8_bin,
  `col_collation` varchar(64) COLLATE utf8_bin NOT NULL,
  `col_isNull` tinyint(1) NOT NULL,
  `col_extra` varchar(255) COLLATE utf8_bin DEFAULT '',
  `col_default` text COLLATE utf8_bin
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Central list of columns';

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pma__column_info`
--

CREATE TABLE `pma__column_info` (
  `id` int(5) UNSIGNED NOT NULL,
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `table_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `column_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `comment` varchar(255) CHARACTER SET utf8 NOT NULL DEFAULT '',
  `mimetype` varchar(255) CHARACTER SET utf8 NOT NULL DEFAULT '',
  `transformation` varchar(255) COLLATE utf8_bin NOT NULL DEFAULT '',
  `transformation_options` varchar(255) COLLATE utf8_bin NOT NULL DEFAULT '',
  `input_transformation` varchar(255) COLLATE utf8_bin NOT NULL DEFAULT '',
  `input_transformation_options` varchar(255) COLLATE utf8_bin NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Column information for phpMyAdmin';

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pma__designer_settings`
--

CREATE TABLE `pma__designer_settings` (
  `username` varchar(64) COLLATE utf8_bin NOT NULL,
  `settings_data` text COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Settings related to Designer';

--
-- Volcado de datos para la tabla `pma__designer_settings`
--

INSERT INTO `pma__designer_settings` (`username`, `settings_data`) VALUES
('root', '{\"angular_direct\":\"direct\",\"snap_to_grid\":\"off\",\"relation_lines\":\"true\"}');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pma__export_templates`
--

CREATE TABLE `pma__export_templates` (
  `id` int(5) UNSIGNED NOT NULL,
  `username` varchar(64) COLLATE utf8_bin NOT NULL,
  `export_type` varchar(10) COLLATE utf8_bin NOT NULL,
  `template_name` varchar(64) COLLATE utf8_bin NOT NULL,
  `template_data` text COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Saved export templates';

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pma__favorite`
--

CREATE TABLE `pma__favorite` (
  `username` varchar(64) COLLATE utf8_bin NOT NULL,
  `tables` text COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Favorite tables';

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pma__history`
--

CREATE TABLE `pma__history` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `username` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `db` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `table` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `timevalue` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `sqlquery` text COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='SQL history for phpMyAdmin';

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pma__navigationhiding`
--

CREATE TABLE `pma__navigationhiding` (
  `username` varchar(64) COLLATE utf8_bin NOT NULL,
  `item_name` varchar(64) COLLATE utf8_bin NOT NULL,
  `item_type` varchar(64) COLLATE utf8_bin NOT NULL,
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL,
  `table_name` varchar(64) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Hidden items of navigation tree';

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pma__pdf_pages`
--

CREATE TABLE `pma__pdf_pages` (
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `page_nr` int(10) UNSIGNED NOT NULL,
  `page_descr` varchar(50) CHARACTER SET utf8 NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='PDF relation pages for phpMyAdmin';

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pma__recent`
--

CREATE TABLE `pma__recent` (
  `username` varchar(64) COLLATE utf8_bin NOT NULL,
  `tables` text COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Recently accessed tables';

--
-- Volcado de datos para la tabla `pma__recent`
--

INSERT INTO `pma__recent` (`username`, `tables`) VALUES
('root', '[{\"db\":\"planea\",\"table\":\"academicspaces\"},{\"db\":\"planea\",\"table\":\"activityacademics\"},{\"db\":\"planea\",\"table\":\"academicplans\"},{\"db\":\"planea\",\"table\":\"academicprograms\"},{\"db\":\"planea\",\"table\":\"profiles\"},{\"db\":\"planea\",\"table\":\"abilities\"},{\"db\":\"awaap\",\"table\":\"reto\"},{\"db\":\"awaap\",\"table\":\"intento\"},{\"db\":\"awaap\",\"table\":\"intentotest\"},{\"db\":\"awaap\",\"table\":\"test\"}]');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pma__relation`
--

CREATE TABLE `pma__relation` (
  `master_db` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `master_table` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `master_field` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `foreign_db` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `foreign_table` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `foreign_field` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Relation table';

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pma__savedsearches`
--

CREATE TABLE `pma__savedsearches` (
  `id` int(5) UNSIGNED NOT NULL,
  `username` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `search_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `search_data` text COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Saved searches';

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pma__table_coords`
--

CREATE TABLE `pma__table_coords` (
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `table_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `pdf_page_number` int(11) NOT NULL DEFAULT '0',
  `x` float UNSIGNED NOT NULL DEFAULT '0',
  `y` float UNSIGNED NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Table coordinates for phpMyAdmin PDF output';

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pma__table_info`
--

CREATE TABLE `pma__table_info` (
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `table_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `display_field` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Table information for phpMyAdmin';

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pma__table_uiprefs`
--

CREATE TABLE `pma__table_uiprefs` (
  `username` varchar(64) COLLATE utf8_bin NOT NULL,
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL,
  `table_name` varchar(64) COLLATE utf8_bin NOT NULL,
  `prefs` text COLLATE utf8_bin NOT NULL,
  `last_update` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Tables'' UI preferences';

--
-- Volcado de datos para la tabla `pma__table_uiprefs`
--

INSERT INTO `pma__table_uiprefs` (`username`, `db_name`, `table_name`, `prefs`, `last_update`) VALUES
('root', 'awaap', 'intento', '{\"sorted_col\":\"`intento`.`Reto_id` ASC\"}', '2017-06-22 15:03:11');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pma__tracking`
--

CREATE TABLE `pma__tracking` (
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL,
  `table_name` varchar(64) COLLATE utf8_bin NOT NULL,
  `version` int(10) UNSIGNED NOT NULL,
  `date_created` datetime NOT NULL,
  `date_updated` datetime NOT NULL,
  `schema_snapshot` text COLLATE utf8_bin NOT NULL,
  `schema_sql` text COLLATE utf8_bin,
  `data_sql` longtext COLLATE utf8_bin,
  `tracking` set('UPDATE','REPLACE','INSERT','DELETE','TRUNCATE','CREATE DATABASE','ALTER DATABASE','DROP DATABASE','CREATE TABLE','ALTER TABLE','RENAME TABLE','DROP TABLE','CREATE INDEX','DROP INDEX','CREATE VIEW','ALTER VIEW','DROP VIEW') COLLATE utf8_bin DEFAULT NULL,
  `tracking_active` int(1) UNSIGNED NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Database changes tracking for phpMyAdmin';

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pma__userconfig`
--

CREATE TABLE `pma__userconfig` (
  `username` varchar(64) COLLATE utf8_bin NOT NULL,
  `timevalue` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `config_data` text COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='User preferences storage for phpMyAdmin';

--
-- Volcado de datos para la tabla `pma__userconfig`
--

INSERT INTO `pma__userconfig` (`username`, `timevalue`, `config_data`) VALUES
('root', '2017-06-06 19:24:40', '{\"lang\":\"es\",\"collation_connection\":\"utf8mb4_unicode_ci\"}');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pma__usergroups`
--

CREATE TABLE `pma__usergroups` (
  `usergroup` varchar(64) COLLATE utf8_bin NOT NULL,
  `tab` varchar(64) COLLATE utf8_bin NOT NULL,
  `allowed` enum('Y','N') COLLATE utf8_bin NOT NULL DEFAULT 'N'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='User groups with configured menu items';

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pma__users`
--

CREATE TABLE `pma__users` (
  `username` varchar(64) COLLATE utf8_bin NOT NULL,
  `usergroup` varchar(64) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Users and their assignments to user groups';

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `pma__bookmark`
--
ALTER TABLE `pma__bookmark`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `pma__central_columns`
--
ALTER TABLE `pma__central_columns`
  ADD PRIMARY KEY (`db_name`,`col_name`);

--
-- Indices de la tabla `pma__column_info`
--
ALTER TABLE `pma__column_info`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `db_name` (`db_name`,`table_name`,`column_name`);

--
-- Indices de la tabla `pma__designer_settings`
--
ALTER TABLE `pma__designer_settings`
  ADD PRIMARY KEY (`username`);

--
-- Indices de la tabla `pma__export_templates`
--
ALTER TABLE `pma__export_templates`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `u_user_type_template` (`username`,`export_type`,`template_name`);

--
-- Indices de la tabla `pma__favorite`
--
ALTER TABLE `pma__favorite`
  ADD PRIMARY KEY (`username`);

--
-- Indices de la tabla `pma__history`
--
ALTER TABLE `pma__history`
  ADD PRIMARY KEY (`id`),
  ADD KEY `username` (`username`,`db`,`table`,`timevalue`);

--
-- Indices de la tabla `pma__navigationhiding`
--
ALTER TABLE `pma__navigationhiding`
  ADD PRIMARY KEY (`username`,`item_name`,`item_type`,`db_name`,`table_name`);

--
-- Indices de la tabla `pma__pdf_pages`
--
ALTER TABLE `pma__pdf_pages`
  ADD PRIMARY KEY (`page_nr`),
  ADD KEY `db_name` (`db_name`);

--
-- Indices de la tabla `pma__recent`
--
ALTER TABLE `pma__recent`
  ADD PRIMARY KEY (`username`);

--
-- Indices de la tabla `pma__relation`
--
ALTER TABLE `pma__relation`
  ADD PRIMARY KEY (`master_db`,`master_table`,`master_field`),
  ADD KEY `foreign_field` (`foreign_db`,`foreign_table`);

--
-- Indices de la tabla `pma__savedsearches`
--
ALTER TABLE `pma__savedsearches`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `u_savedsearches_username_dbname` (`username`,`db_name`,`search_name`);

--
-- Indices de la tabla `pma__table_coords`
--
ALTER TABLE `pma__table_coords`
  ADD PRIMARY KEY (`db_name`,`table_name`,`pdf_page_number`);

--
-- Indices de la tabla `pma__table_info`
--
ALTER TABLE `pma__table_info`
  ADD PRIMARY KEY (`db_name`,`table_name`);

--
-- Indices de la tabla `pma__table_uiprefs`
--
ALTER TABLE `pma__table_uiprefs`
  ADD PRIMARY KEY (`username`,`db_name`,`table_name`);

--
-- Indices de la tabla `pma__tracking`
--
ALTER TABLE `pma__tracking`
  ADD PRIMARY KEY (`db_name`,`table_name`,`version`);

--
-- Indices de la tabla `pma__userconfig`
--
ALTER TABLE `pma__userconfig`
  ADD PRIMARY KEY (`username`);

--
-- Indices de la tabla `pma__usergroups`
--
ALTER TABLE `pma__usergroups`
  ADD PRIMARY KEY (`usergroup`,`tab`,`allowed`);

--
-- Indices de la tabla `pma__users`
--
ALTER TABLE `pma__users`
  ADD PRIMARY KEY (`username`,`usergroup`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `pma__bookmark`
--
ALTER TABLE `pma__bookmark`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `pma__column_info`
--
ALTER TABLE `pma__column_info`
  MODIFY `id` int(5) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `pma__export_templates`
--
ALTER TABLE `pma__export_templates`
  MODIFY `id` int(5) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `pma__history`
--
ALTER TABLE `pma__history`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `pma__pdf_pages`
--
ALTER TABLE `pma__pdf_pages`
  MODIFY `page_nr` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `pma__savedsearches`
--
ALTER TABLE `pma__savedsearches`
  MODIFY `id` int(5) UNSIGNED NOT NULL AUTO_INCREMENT;--
-- Base de datos: `planea`
--
CREATE DATABASE IF NOT EXISTS `planea` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `planea`;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `abilities`
--

CREATE TABLE `abilities` (
  `id` int(10) UNSIGNED NOT NULL,
  `nombre` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `peso` int(10) UNSIGNED NOT NULL,
  `typeability_id` int(10) UNSIGNED NOT NULL,
  `profile_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `abilities`
--

INSERT INTO `abilities` (`id`, `nombre`, `peso`, `typeability_id`, `profile_id`, `created_at`, `updated_at`) VALUES
(2, 'una nueva habilidad', 23, 1, 1, '2017-07-25 02:56:26', '2017-07-25 02:56:26');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `academicplans`
--

CREATE TABLE `academicplans` (
  `id` int(10) UNSIGNED NOT NULL,
  `nombre` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `academicprogram_id` int(10) UNSIGNED NOT NULL,
  `state_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `academicplans`
--

INSERT INTO `academicplans` (`id`, `nombre`, `academicprogram_id`, `state_id`, `created_at`, `updated_at`) VALUES
(1, 'Plan 1 B', 1, 1, '2017-07-24 06:54:10', '2017-07-24 06:54:10');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `academicprograms`
--

CREATE TABLE `academicprograms` (
  `id` int(10) UNSIGNED NOT NULL,
  `nombre` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `faculty_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `academicprograms`
--

INSERT INTO `academicprograms` (`id`, `nombre`, `faculty_id`, `created_at`, `updated_at`) VALUES
(1, 'CIDBA', 1, '2017-07-24 06:53:24', '2017-07-24 06:53:24');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `academicspaces`
--

CREATE TABLE `academicspaces` (
  `id` int(10) UNSIGNED NOT NULL,
  `codigo` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `nombre` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `numeroCreditos` varchar(2) COLLATE utf8_unicode_ci NOT NULL,
  `horasTeoricas` varchar(2) COLLATE utf8_unicode_ci NOT NULL,
  `horasPracticas` varchar(2) COLLATE utf8_unicode_ci NOT NULL,
  `horasTeoPract` varchar(2) COLLATE utf8_unicode_ci NOT NULL,
  `horasAsesorias` varchar(2) COLLATE utf8_unicode_ci NOT NULL,
  `horasIndependiente` varchar(2) COLLATE utf8_unicode_ci NOT NULL,
  `habilitable` tinyint(1) NOT NULL,
  `validable` tinyint(1) NOT NULL,
  `homologable` tinyint(1) NOT NULL,
  `nucleoTematico` varchar(700) COLLATE utf8_unicode_ci NOT NULL,
  `justificacion` varchar(700) COLLATE utf8_unicode_ci NOT NULL,
  `metodologia` varchar(700) COLLATE utf8_unicode_ci NOT NULL,
  `evaluacion` varchar(700) COLLATE utf8_unicode_ci NOT NULL,
  `descripcion` varchar(700) COLLATE utf8_unicode_ci NOT NULL,
  `contenidoConceptual` varchar(700) COLLATE utf8_unicode_ci NOT NULL,
  `contenidoProcedimental` varchar(700) COLLATE utf8_unicode_ci NOT NULL,
  `contenidoActitudinal` varchar(700) COLLATE utf8_unicode_ci NOT NULL,
  `procesosIntegrativos` varchar(700) COLLATE utf8_unicode_ci NOT NULL,
  `unidades` varchar(9000) COLLATE utf8_unicode_ci NOT NULL,
  `semester_id` int(10) UNSIGNED NOT NULL,
  `academicplan_id` int(10) UNSIGNED NOT NULL,
  `activityacademic_id` int(10) UNSIGNED NOT NULL,
  `typeevaluation_id` int(10) UNSIGNED NOT NULL,
  `typemethodology_id` int(10) UNSIGNED NOT NULL,
  `nature_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `academicspaces`
--

INSERT INTO `academicspaces` (`id`, `codigo`, `nombre`, `numeroCreditos`, `horasTeoricas`, `horasPracticas`, `horasTeoPract`, `horasAsesorias`, `horasIndependiente`, `habilitable`, `validable`, `homologable`, `nucleoTematico`, `justificacion`, `metodologia`, `evaluacion`, `descripcion`, `contenidoConceptual`, `contenidoProcedimental`, `contenidoActitudinal`, `procesosIntegrativos`, `unidades`, `semester_id`, `academicplan_id`, `activityacademic_id`, `typeevaluation_id`, `typemethodology_id`, `nature_id`, `created_at`, `updated_at`) VALUES
(1, '1', 'materia 1', '12', '2', '2', '1', '2', '3', 1, 1, 1, 'este es el nucleo', 'esta es la justificacion ', 'esta es la metodologia', 'esta es la evaluacion', 'esta es la descripcion', 'este es el cont conceptual', 'este es el conteido procedim', 'contenido actitu', 'estos son los procesos integra', 'estas son las unidades', 1, 1, 1, 1, 1, 1, '2017-07-25 03:35:45', '2017-07-25 03:35:45');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `activityacademics`
--

CREATE TABLE `activityacademics` (
  `id` int(10) UNSIGNED NOT NULL,
  `nombre` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `activityacademics`
--

INSERT INTO `activityacademics` (`id`, `nombre`, `created_at`, `updated_at`) VALUES
(1, 'actividad academica 1', NULL, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `authorizes`
--

CREATE TABLE `authorizes` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `rol_id` int(10) UNSIGNED NOT NULL,
  `academicprogram_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `faculties`
--

CREATE TABLE `faculties` (
  `id` int(10) UNSIGNED NOT NULL,
  `nombre` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `university_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `faculties`
--

INSERT INTO `faculties` (`id`, `nombre`, `university_id`, `created_at`, `updated_at`) VALUES
(1, 'Ciencias Basicas', 1, '2017-07-15 23:17:26', '2017-07-15 23:17:26');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2017_07_15_173343_create_universidades_table', 1),
(4, '2017_07_15_173457_create_facultad_table', 1),
(5, '2017_07_15_173553_create_programas_table', 1),
(6, '2017_07_15_173658_create_role_table', 1),
(7, '2017_07_15_173754_create_estadosp_table', 2),
(8, '2017_07_15_173846_create_tmetodologia_table', 3),
(9, '2017_07_15_173923_create_thabilidad_table', 4),
(10, '2017_07_15_173955_create_tevaluacion_table', 5),
(11, '2017_07_15_174111_create_semestre_table', 6),
(12, '2017_07_15_174148_create_natu_table', 6),
(13, '2017_07_15_174344_create_planesa_table', 6),
(14, '2017_07_15_174443_create_perfiles_table', 6),
(15, '2017_07_15_174630_create_autoriza_table', 6),
(16, '2017_07_15_174729_create_actividadesac_table', 6),
(17, '2017_07_15_175307_create_habilidade_table', 7),
(18, '2017_07_15_174853_create_objetivos_table', 8),
(19, '2017_07_15_175043_create_espaciosaca_table', 9),
(20, '2017_07_15_175159_create_requisitos_table', 10),
(21, '2017_07_15_175129_create_objetivoespacio_table', 11),
(22, '2017_07_15_175347_create_pesos_table', 11);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `natures`
--

CREATE TABLE `natures` (
  `id` int(10) UNSIGNED NOT NULL,
  `nombre` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `natures`
--

INSERT INTO `natures` (`id`, `nombre`, `created_at`, `updated_at`) VALUES
(1, 'naturaleza 1', '2017-07-24 07:06:50', '2017-07-24 07:06:50');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `objectiveespaces`
--

CREATE TABLE `objectiveespaces` (
  `id` int(10) UNSIGNED NOT NULL,
  `academicspace_id` int(10) UNSIGNED NOT NULL,
  `objective_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `objectives`
--

CREATE TABLE `objectives` (
  `id` int(10) UNSIGNED NOT NULL,
  `nombre` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `peso` int(10) UNSIGNED NOT NULL,
  `ability_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `profiles`
--

CREATE TABLE `profiles` (
  `id` int(10) UNSIGNED NOT NULL,
  `nombre` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `descripcion` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `academicplan_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `profiles`
--

INSERT INTO `profiles` (`id`, `nombre`, `descripcion`, `academicplan_id`, `created_at`, `updated_at`) VALUES
(1, 'perfil', 'Este es el perfil que el plan le otorga a los estudiantes.', 1, '2017-07-24 06:54:10', '2017-07-24 06:54:10');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `requirements`
--

CREATE TABLE `requirements` (
  `id` int(10) UNSIGNED NOT NULL,
  `academicspaceD_id` int(10) UNSIGNED NOT NULL,
  `academicspace_id` int(10) UNSIGNED NOT NULL,
  `tipo` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `rols`
--

CREATE TABLE `rols` (
  `id` int(10) UNSIGNED NOT NULL,
  `nombre` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `semesters`
--

CREATE TABLE `semesters` (
  `id` int(10) UNSIGNED NOT NULL,
  `nombre` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `semesters`
--

INSERT INTO `semesters` (`id`, `nombre`, `created_at`, `updated_at`) VALUES
(1, 'semestre 1', '2017-07-16 00:09:31', '2017-07-16 00:09:31'),
(2, 'Semestre 2', '2017-07-25 02:55:33', '2017-07-25 02:55:33');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `states`
--

CREATE TABLE `states` (
  `id` int(10) UNSIGNED NOT NULL,
  `nombre` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `states`
--

INSERT INTO `states` (`id`, `nombre`, `created_at`, `updated_at`) VALUES
(1, 'Oferta', '2017-07-24 06:52:53', '2017-07-24 06:52:53'),
(2, 'Vigente', '2017-07-24 06:53:01', '2017-07-24 06:53:01'),
(3, 'Retirado', '2017-07-24 06:53:08', '2017-07-24 06:53:08');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `typeabilities`
--

CREATE TABLE `typeabilities` (
  `id` int(10) UNSIGNED NOT NULL,
  `nombre` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `typeabilities`
--

INSERT INTO `typeabilities` (`id`, `nombre`, `created_at`, `updated_at`) VALUES
(1, 'habilidad 1', '2017-07-24 07:06:36', '2017-07-24 07:06:36');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `typeevaluations`
--

CREATE TABLE `typeevaluations` (
  `id` int(10) UNSIGNED NOT NULL,
  `nombre` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `typeevaluations`
--

INSERT INTO `typeevaluations` (`id`, `nombre`, `created_at`, `updated_at`) VALUES
(1, 'evaluacion tipo 1', '2017-07-24 07:07:07', '2017-07-24 07:07:07');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `typemethodologies`
--

CREATE TABLE `typemethodologies` (
  `id` int(10) UNSIGNED NOT NULL,
  `nombre` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `typemethodologies`
--

INSERT INTO `typemethodologies` (`id`, `nombre`, `created_at`, `updated_at`) VALUES
(1, 'metodologia 1', '2017-07-24 07:06:59', '2017-07-24 07:06:59');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `universities`
--

CREATE TABLE `universities` (
  `id` int(10) UNSIGNED NOT NULL,
  `nombre` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `universities`
--

INSERT INTO `universities` (`id`, `nombre`, `created_at`, `updated_at`) VALUES
(1, 'Universidad del Quindío', '2017-07-15 23:17:14', '2017-07-15 23:17:14');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `weights`
--

CREATE TABLE `weights` (
  `id` int(10) UNSIGNED NOT NULL,
  `peso` int(11) NOT NULL,
  `tipo` tinyint(3) UNSIGNED NOT NULL,
  `objectiveEspace_id` int(10) UNSIGNED NOT NULL,
  `ability_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `abilities`
--
ALTER TABLE `abilities`
  ADD PRIMARY KEY (`id`),
  ADD KEY `abilities_typeability_id_foreign` (`typeability_id`),
  ADD KEY `abilities_profile_id_foreign` (`profile_id`);

--
-- Indices de la tabla `academicplans`
--
ALTER TABLE `academicplans`
  ADD PRIMARY KEY (`id`),
  ADD KEY `academicplans_academicprogram_id_foreign` (`academicprogram_id`),
  ADD KEY `academicplans_state_id_foreign` (`state_id`);

--
-- Indices de la tabla `academicprograms`
--
ALTER TABLE `academicprograms`
  ADD PRIMARY KEY (`id`),
  ADD KEY `academicprograms_faculty_id_foreign` (`faculty_id`);

--
-- Indices de la tabla `academicspaces`
--
ALTER TABLE `academicspaces`
  ADD PRIMARY KEY (`id`),
  ADD KEY `academicspaces_semester_id_foreign` (`semester_id`),
  ADD KEY `academicspaces_academicplan_id_foreign` (`academicplan_id`),
  ADD KEY `academicspaces_activityacademic_id_foreign` (`activityacademic_id`),
  ADD KEY `academicspaces_typeevaluation_id_foreign` (`typeevaluation_id`),
  ADD KEY `academicspaces_typemethodology_id_foreign` (`typemethodology_id`),
  ADD KEY `academicspaces_nature_id_foreign` (`nature_id`);

--
-- Indices de la tabla `activityacademics`
--
ALTER TABLE `activityacademics`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `authorizes`
--
ALTER TABLE `authorizes`
  ADD PRIMARY KEY (`id`),
  ADD KEY `authorizes_user_id_foreign` (`user_id`),
  ADD KEY `authorizes_rol_id_foreign` (`rol_id`),
  ADD KEY `authorizes_academicprogram_id_foreign` (`academicprogram_id`);

--
-- Indices de la tabla `faculties`
--
ALTER TABLE `faculties`
  ADD PRIMARY KEY (`id`),
  ADD KEY `faculties_university_id_foreign` (`university_id`);

--
-- Indices de la tabla `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `natures`
--
ALTER TABLE `natures`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `objectiveespaces`
--
ALTER TABLE `objectiveespaces`
  ADD PRIMARY KEY (`id`),
  ADD KEY `objectiveespaces_academicspace_id_foreign` (`academicspace_id`),
  ADD KEY `objectiveespaces_objective_id_foreign` (`objective_id`);

--
-- Indices de la tabla `objectives`
--
ALTER TABLE `objectives`
  ADD PRIMARY KEY (`id`),
  ADD KEY `objectives_ability_id_foreign` (`ability_id`);

--
-- Indices de la tabla `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`),
  ADD KEY `password_resets_token_index` (`token`);

--
-- Indices de la tabla `profiles`
--
ALTER TABLE `profiles`
  ADD PRIMARY KEY (`id`),
  ADD KEY `profiles_academicplan_id_foreign` (`academicplan_id`);

--
-- Indices de la tabla `requirements`
--
ALTER TABLE `requirements`
  ADD PRIMARY KEY (`id`),
  ADD KEY `requirements_academicspaced_id_foreign` (`academicspaceD_id`),
  ADD KEY `requirements_academicspace_id_foreign` (`academicspace_id`);

--
-- Indices de la tabla `rols`
--
ALTER TABLE `rols`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `semesters`
--
ALTER TABLE `semesters`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `states`
--
ALTER TABLE `states`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `typeabilities`
--
ALTER TABLE `typeabilities`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `typeevaluations`
--
ALTER TABLE `typeevaluations`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `typemethodologies`
--
ALTER TABLE `typemethodologies`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `universities`
--
ALTER TABLE `universities`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indices de la tabla `weights`
--
ALTER TABLE `weights`
  ADD PRIMARY KEY (`id`),
  ADD KEY `weights_objectiveespace_id_foreign` (`objectiveEspace_id`),
  ADD KEY `weights_ability_id_foreign` (`ability_id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `abilities`
--
ALTER TABLE `abilities`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT de la tabla `academicplans`
--
ALTER TABLE `academicplans`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT de la tabla `academicprograms`
--
ALTER TABLE `academicprograms`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT de la tabla `academicspaces`
--
ALTER TABLE `academicspaces`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT de la tabla `activityacademics`
--
ALTER TABLE `activityacademics`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT de la tabla `authorizes`
--
ALTER TABLE `authorizes`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `faculties`
--
ALTER TABLE `faculties`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT de la tabla `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
--
-- AUTO_INCREMENT de la tabla `natures`
--
ALTER TABLE `natures`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT de la tabla `objectiveespaces`
--
ALTER TABLE `objectiveespaces`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `objectives`
--
ALTER TABLE `objectives`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `profiles`
--
ALTER TABLE `profiles`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT de la tabla `requirements`
--
ALTER TABLE `requirements`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `rols`
--
ALTER TABLE `rols`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `semesters`
--
ALTER TABLE `semesters`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT de la tabla `states`
--
ALTER TABLE `states`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT de la tabla `typeabilities`
--
ALTER TABLE `typeabilities`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT de la tabla `typeevaluations`
--
ALTER TABLE `typeevaluations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT de la tabla `typemethodologies`
--
ALTER TABLE `typemethodologies`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT de la tabla `universities`
--
ALTER TABLE `universities`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `weights`
--
ALTER TABLE `weights`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `abilities`
--
ALTER TABLE `abilities`
  ADD CONSTRAINT `abilities_profile_id_foreign` FOREIGN KEY (`profile_id`) REFERENCES `profiles` (`id`),
  ADD CONSTRAINT `abilities_typeability_id_foreign` FOREIGN KEY (`typeability_id`) REFERENCES `typeabilities` (`id`);

--
-- Filtros para la tabla `academicplans`
--
ALTER TABLE `academicplans`
  ADD CONSTRAINT `academicplans_academicprogram_id_foreign` FOREIGN KEY (`academicprogram_id`) REFERENCES `academicprograms` (`id`),
  ADD CONSTRAINT `academicplans_state_id_foreign` FOREIGN KEY (`state_id`) REFERENCES `states` (`id`);

--
-- Filtros para la tabla `academicprograms`
--
ALTER TABLE `academicprograms`
  ADD CONSTRAINT `academicprograms_faculty_id_foreign` FOREIGN KEY (`faculty_id`) REFERENCES `faculties` (`id`);

--
-- Filtros para la tabla `academicspaces`
--
ALTER TABLE `academicspaces`
  ADD CONSTRAINT `academicspaces_academicplan_id_foreign` FOREIGN KEY (`academicplan_id`) REFERENCES `academicplans` (`id`),
  ADD CONSTRAINT `academicspaces_activityacademic_id_foreign` FOREIGN KEY (`activityacademic_id`) REFERENCES `activityacademics` (`id`),
  ADD CONSTRAINT `academicspaces_nature_id_foreign` FOREIGN KEY (`nature_id`) REFERENCES `natures` (`id`),
  ADD CONSTRAINT `academicspaces_semester_id_foreign` FOREIGN KEY (`semester_id`) REFERENCES `semesters` (`id`),
  ADD CONSTRAINT `academicspaces_typeevaluation_id_foreign` FOREIGN KEY (`typeevaluation_id`) REFERENCES `typeevaluations` (`id`),
  ADD CONSTRAINT `academicspaces_typemethodology_id_foreign` FOREIGN KEY (`typemethodology_id`) REFERENCES `typemethodologies` (`id`);

--
-- Filtros para la tabla `authorizes`
--
ALTER TABLE `authorizes`
  ADD CONSTRAINT `authorizes_academicprogram_id_foreign` FOREIGN KEY (`academicprogram_id`) REFERENCES `academicprograms` (`id`),
  ADD CONSTRAINT `authorizes_rol_id_foreign` FOREIGN KEY (`rol_id`) REFERENCES `rols` (`id`),
  ADD CONSTRAINT `authorizes_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Filtros para la tabla `faculties`
--
ALTER TABLE `faculties`
  ADD CONSTRAINT `faculties_university_id_foreign` FOREIGN KEY (`university_id`) REFERENCES `universities` (`id`);

--
-- Filtros para la tabla `objectiveespaces`
--
ALTER TABLE `objectiveespaces`
  ADD CONSTRAINT `objectiveespaces_academicspace_id_foreign` FOREIGN KEY (`academicspace_id`) REFERENCES `academicspaces` (`id`),
  ADD CONSTRAINT `objectiveespaces_objective_id_foreign` FOREIGN KEY (`objective_id`) REFERENCES `objectives` (`id`);

--
-- Filtros para la tabla `objectives`
--
ALTER TABLE `objectives`
  ADD CONSTRAINT `objectives_ability_id_foreign` FOREIGN KEY (`ability_id`) REFERENCES `abilities` (`id`);

--
-- Filtros para la tabla `profiles`
--
ALTER TABLE `profiles`
  ADD CONSTRAINT `profiles_academicplan_id_foreign` FOREIGN KEY (`academicplan_id`) REFERENCES `academicplans` (`id`);

--
-- Filtros para la tabla `requirements`
--
ALTER TABLE `requirements`
  ADD CONSTRAINT `requirements_academicspace_id_foreign` FOREIGN KEY (`academicspace_id`) REFERENCES `academicspaces` (`id`),
  ADD CONSTRAINT `requirements_academicspaced_id_foreign` FOREIGN KEY (`academicspaceD_id`) REFERENCES `academicspaces` (`id`);

--
-- Filtros para la tabla `weights`
--
ALTER TABLE `weights`
  ADD CONSTRAINT `weights_ability_id_foreign` FOREIGN KEY (`ability_id`) REFERENCES `abilities` (`id`),
  ADD CONSTRAINT `weights_objectiveespace_id_foreign` FOREIGN KEY (`objectiveEspace_id`) REFERENCES `objectiveespaces` (`id`);
--
-- Base de datos: `test`
--
CREATE DATABASE IF NOT EXISTS `test` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `test`;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
