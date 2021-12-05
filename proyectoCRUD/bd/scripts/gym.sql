-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 20-05-2021 a las 16:47:06
-- Versión del servidor: 10.4.18-MariaDB
-- Versión de PHP: 7.3.27



/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `gym`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `clase`
--
CREATE DATABASE `gym`;
USE 'gym';
CREATE TABLE `clase` (
  `ID_clase` int(10) NOT NULL,
  `nombre_clase` varchar(50) NOT NULL,
  `instructor` varchar(50) NOT NULL,
  `horas_totales` varchar(50) NOT NULL,
  `dia` varchar(50) NOT NULL,
  `horario` varchar(50) NOT NULL,
  `costo` varchar(50) NOT NULL
);

--
-- Volcado de datos para la tabla `clase`
--

INSERT INTO `clase` (`ID_clase`, `nombre_clase`, `instructor`, `horas_totales`, `dia`, `horario`, `costo`) VALUES
(1, 'Zumba', 'Juan', '15', 'Lunes-Miercoles-Viernes', '12:30-2:00', '500'),
(2, 'Zumba', 'Ramon', '15', 'Martes-Jueves', '4:00-6:00', '500');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `instructor`
--

CREATE TABLE `instructor` (
  `nombre_instructor` varchar(50) NOT NULL,
  `telefono` int(10) NOT NULL,
  `horario` varchar(10) NOT NULL
);

--
-- Volcado de datos para la tabla `instructor`
--

INSERT INTO `instructor` (`nombre_instructor`, `telefono`, `horario`) VALUES
('juan', 1234567891, '12:20'),
('Luis', 1234567890, '12:30-2:00');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `ID` int(10) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `nombre_usuario` varchar(50) NOT NULL,
  `contraseña` varchar(50) NOT NULL,
  `tipo_usuario` varchar(50) NOT NULL,
  `direccion` varchar(50) NOT NULL,
  `correo` varchar(50) NOT NULL
); 

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`ID`, `nombre`, `nombre_usuario`, `contraseña`, `tipo_usuario`, `direccion`, `correo`) VALUES
(1, 'ramon', 'ram', 'asd', 'admin', 'asdas', 'asdlui@gmail.com'),
(2, 'luis', 'asd', '123', 'usuario', 'esteban', 'luis@gmail.cm'),
(3, 'angel', 'ang_1', '123', 'usuario', '123asd', 'angel@itleon.com'),
(4, 'aleida', 'ale', '123', 'usuario', 'juanito', 'aleida@hotmail.com'),
(5, 'Luis Angel ', 'Angel', '123', 'admin', 'Leon Moderno', 'Angel@hotmail.com');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `clase`
--
ALTER TABLE `clase`
  ADD PRIMARY KEY (`ID_clase`);

--
-- Indices de la tabla `instructor`
--
ALTER TABLE `instructor`
  ADD PRIMARY KEY (`nombre_instructor`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `clase`
--
/*
ALTER TABLE `clase`
  MODIFY `ID_clase` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `usuario`
--
ALTER TABLE `usuario`
  MODIFY `ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;
*/

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
