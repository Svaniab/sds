-- phpMyAdmin SQL Dump
-- version 4.9.6
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 19-04-2021 a las 03:35:06
-- Versión del servidor: 10.4.10-MariaDB
-- Versión de PHP: 7.1.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `sds`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `empleados`
--

CREATE TABLE `empleados` (
  `id` int(11) NOT NULL,
  `primer_nombre` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `segundo_nombre` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `primer_apellido` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `segundo_apellido` varchar(50) CHARACTER SET utf32 COLLATE utf32_unicode_ci DEFAULT NULL,
  `genero` enum('masculino','femenino') COLLATE utf8_unicode_ci DEFAULT NULL,
  `celular` varchar(12) COLLATE utf8_unicode_ci DEFAULT NULL,
  `direccion` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `fotografia` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `empleados`
--

INSERT INTO `empleados` (`id`, `primer_nombre`, `segundo_nombre`, `primer_apellido`, `segundo_apellido`, `genero`, `celular`, `direccion`, `fotografia`) VALUES
(255, 'Alejandra', NULL, 'Cespedes', 'Morales', 'femenino', '78965412', 'Sopocachi, Calle. Ricardo Mujia, Nro. 458', 'empleado_d7322b18bf97d2cc20210419_000010.jpg'),
(256, 'Mariana', NULL, 'Delgadillo', 'Arias', 'femenino', '78963020', 'Achumani, Calle 17, Nro 258', 'empleado_d7322b18bf97d2cc20210419_000010.jpg'),
(257, 'Jorge', 'Federico', 'Mercado', 'Roman', 'masculino', '79553010', 'Miraflores, C.10', 'empleado_d7322b18bf97d2cc20210419_000010.jpg'),
(258, 'Alejandra', NULL, 'Cespedes', 'Morales', 'femenino', '78965412', 'Sopocachi, Calle. Ricardo Mujia, Nro. 458', 'empleado_d7322b18bf97d2cc20210419_000010.jpg'),
(259, 'Mariana', NULL, 'Delgadillo', 'Arias', 'femenino', '78963020', 'Achumani, Calle 17, Nro 258', 'empleado_d7322b18bf97d2cc20210419_000010.jpg'),
(260, 'Jorge', 'Federico', 'Mercado', 'Roman', 'masculino', '79553010', 'Miraflores, C.10', 'empleado_d7322b18bf97d2cc20210419_000010.jpg'),
(261, 'Alejandra', NULL, 'Cespedes', 'Morales', 'femenino', '78965412', 'Sopocachi, Calle. Ricardo Mujia, Nro. 458', 'empleado_d7322b18bf97d2cc20210419_000010.jpg'),
(262, 'Mariana', NULL, 'Delgadillo', 'Arias', 'femenino', '78963020', 'Achumani, Calle 17, Nro 258', 'empleado_d7322b18bf97d2cc20210419_000010.jpg'),
(263, 'Jorge', 'Federico', 'Mercado', 'Roman', 'masculino', '79553010', 'Miraflores, C.10', 'empleado_d7322b18bf97d2cc20210419_000010.jpg'),
(264, 'Alejandra', NULL, 'Cespedes', 'Morales', 'femenino', '78965412', 'Sopocachi, Calle. Ricardo Mujia, Nro. 458', 'empleado_d7322b18bf97d2cc20210419_000010.jpg'),
(265, 'Mariana', NULL, 'Delgadillo', 'Arias', 'femenino', '78963020', 'Achumani, Calle 17, Nro 258', 'empleado_d7322b18bf97d2cc20210419_000010.jpg'),
(266, 'Jorge', 'Federico', 'Mercado', 'Roman', 'masculino', '79553010', 'Miraflores, C.10', 'empleado_d7322b18bf97d2cc20210419_000010.jpg'),
(267, 'Alejandra', NULL, 'Cespedes', 'Morales', 'femenino', '78965412', 'Sopocachi, Calle. Ricardo Mujia, Nro. 458', 'empleado_d7322b18bf97d2cc20210419_000010.jpg'),
(268, 'Mariana', NULL, 'Delgadillo', 'Arias', 'femenino', '78963020', 'Achumani, Calle 17, Nro 258', 'empleado_d7322b18bf97d2cc20210419_000010.jpg'),
(269, 'Jorge', 'Federico', 'Mercado', 'Roman', 'masculino', '79553010', 'Miraflores, C.10', 'empleado_d7322b18bf97d2cc20210419_000010.jpg'),
(270, 'Alejandra', NULL, 'Cespedes', 'Morales', 'femenino', '78965412', 'Sopocachi, Calle. Ricardo Mujia, Nro. 458', 'empleado_d7322b18bf97d2cc20210419_000010.jpg'),
(271, 'Mariana', NULL, 'Delgadillo', 'Arias', 'femenino', '78963020', 'Achumani, Calle 17, Nro 258', 'empleado_d7322b18bf97d2cc20210419_000010.jpg'),
(272, 'Jorge', 'Federico', 'Mercado', 'Roman', 'masculino', '79553010', 'Miraflores, C.10', 'empleado_d7322b18bf97d2cc20210419_000010.jpg'),
(273, 'Alejandra', NULL, 'Cespedes', 'Morales', 'femenino', '78965412', 'Sopocachi, Calle. Ricardo Mujia, Nro. 458', 'empleado_d7322b18bf97d2cc20210419_000010.jpg'),
(274, 'Mariana', NULL, 'Delgadillo', 'Arias', 'femenino', '78963020', 'Achumani, Calle 17, Nro 258', 'empleado_d7322b18bf97d2cc20210419_000010.jpg'),
(275, 'Jorge', 'Federico', 'Mercado', 'Roman', 'masculino', '79553010', 'Miraflores, C.10', 'empleado_d7322b18bf97d2cc20210419_000010.jpg'),
(276, 'Alejandra', NULL, 'Cespedes', 'Morales', 'femenino', '78965412', 'Sopocachi, Calle. Ricardo Mujia, Nro. 458', 'empleado_d7322b18bf97d2cc20210419_000010.jpg'),
(277, 'Mariana', NULL, 'Delgadillo', 'Arias', 'femenino', '78963020', 'Achumani, Calle 17, Nro 258', 'empleado_d7322b18bf97d2cc20210419_000010.jpg'),
(278, 'Jorge', 'Federico', 'Mercado', 'Roman', 'masculino', '79553010', 'Miraflores, C.10', 'empleado_d7322b18bf97d2cc20210419_000010.jpg'),
(283, 'Swania', 'Betty', 'Guarachi', '', 'femenino', '79551771', 'Santiago II, calle 5', 'empleado_d7322b18bf97d2cc20210419_000010.jpg'),
(284, 'Esteban', '', 'Silva', 'Mejia', 'masculino', '75852120', 'Calacoto, Calle 23', 'empleado_d7322b18bf97d2cc20210419_000010.jpg'),
(285, 'Maria', 'Fernanda', 'Alvarez', 'Cari', 'femenino', '68014157', 'Sopocachi', 'empleado_d7322b18bf97d2cc20210419_000010.jpg'),
(286, 'Maria', 'Fernanda', 'Alvarez', 'Cari', 'femenino', '68014157', 'Sopocachi', 'empleado_d7322b18bf97d2cc20210419_000010.jpg'),
(287, 'Maria', 'Fernanda', 'Alvarez', 'Cari', 'femenino', '68014157', 'Sopocachi', 'empleado_d7322b18bf97d2cc20210419_000010.jpg'),
(288, 'Maria', 'Fernanda', 'Alvarez', 'Cari', 'femenino', '68014157', 'Sopocachi', 'empleado_d7322b18bf97d2cc20210419_000010.jpg'),
(289, 'Freddy', '', 'Alvarez', 'Cari', 'masculino', '77514785', 'Guanay', 'empleado_d7322b18bf97d2cc20210419_000010.jpg'),
(290, 'Freddy', '', 'Alvarez', 'Cari', 'masculino', '77514785', 'Guanay', 'empleado_d7322b18bf97d2cc20210419_000010.jpg'),
(291, 'Swania', '', 'Guarachi', 'Velasco', 'femenino', '79551771', 'Santiago II, calle 5', 'empleado_d7322b18bf97d2cc20210419_000010.jpg'),
(292, 'Swania', '', 'Guarachi', 'Velasco', 'femenino', '79551771', 'Santiago II, calle 5', 'empleado_d7322b18bf97d2cc20210419_000010.jpg'),
(293, 'Swania', '', 'Guarachi', 'Velasco', 'femenino', '79551771', 'Santiago II, calle 5', 'empleado_d7322b18bf97d2cc20210419_000010.jpg'),
(294, 'Swania', '', 'Guarachi', 'Velasco', 'femenino', '79551771', 'Santiago II, calle 5', 'empleado_d7322b18bf97d2cc20210419_000010.jpg'),
(295, 'Swania', '', 'Guarachi', 'Velasco', 'femenino', '79551771', 'Santiago II, calle 5', 'empleado_d7322b18bf97d2cc20210419_000010.jpg'),
(296, 'Swania', '', 'Guarachi', 'Velasco', 'femenino', '79551771', 'Santiago II, calle 5', 'empleado_d7322b18bf97d2cc20210419_000010.jpg'),
(297, 'Swania', 'Betty', 'Guarachi', 'Velasco', 'femenino', '79551771', 'Santiago II, calle 5', 'empleado_d7322b18bf97d2cc20210419_000010.jpg'),
(298, 'Swania', 'Betty', 'Guarachi', 'Velasco', 'femenino', '79551771', 'Santiago II, calle 5', 'empleado_d7322b18bf97d2cc20210419_000010.jpg'),
(299, 'Swania', 'Betty', 'Guarachi', 'Velasco', 'femenino', '79551771', 'Santiago II, calle 5', 'empleado_d7322b18bf97d2cc20210419_000010.jpg'),
(300, 'Swania', 'Betty', 'Guarachi', 'Velasco', 'femenino', '79551771', 'Santiago II, calle 5', 'empleado_d7322b18bf97d2cc20210419_000010.jpg'),
(301, 'Swania', 'Betty', 'Guarachi', 'Velasco', 'femenino', '79551771', 'Santiago II, calle 5', 'empleado_d7322b18bf97d2cc20210419_000010.jpg'),
(302, 'Swania', 'Betty', 'Guarachi', 'Velasco', 'femenino', '79551771', 'Sopocachi', 'empleado_d7322b18bf97d2cc20210419_000010.jpg'),
(303, 'Swania', 'Betty', 'Guarachi', 'Velasco', 'femenino', '79551771', 'Sopocachi', 'empleado_d7322b18bf97d2cc20210419_000010.jpg'),
(304, 'Swania', 'Betty', 'Guarachi', 'Velasco', 'femenino', '79551771', 'Sopocachi', 'empleado_d7322b18bf97d2cc20210419_000010.jpg'),
(305, 'Swania', 'Betty', 'Guarachi', 'Velasco', 'femenino', '79551771', 'Sopocachi', 'empleado_d7322b18bf97d2cc20210419_000010.jpg'),
(310, 'Pablo', '', 'Marmol', '', 'masculino', '65432102', 'Roca, Piedra', 'empleado_bc1209749276df7620210418_185445.png'),
(316, 'Pedro', '', 'Picapiedra', '', 'masculino', '65432101', 'Pierda dura', 'empleado_d7322b18bf97d2cc20210419_000040.jpg');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `primer_nombre` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `segundo_nombre` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `primer_apellido` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `segundo_apellido` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `rol` varchar(15) COLLATE utf8_unicode_ci DEFAULT NULL,
  `usuario` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `clave` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id`, `primer_nombre`, `segundo_nombre`, `primer_apellido`, `segundo_apellido`, `rol`, `usuario`, `clave`) VALUES
(19910907, 'Swania', 'Betty', 'Guarachi', 'Velasco', 'admin', 'Sguarachi', '$2y$10$gtoItQbzUsqkmyABxchti.5XYVUA27MlcY5IOztc8EEIFbeNe/o.6'),
(19910908, 'Raul', NULL, 'Gomez', 'Fernandez', 'invitado', 'Rgomez', '$2y$10$gtoItQbzUsqkmyABxchti.5XYVUA27MlcY5IOztc8EEIFbeNe/o.6');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `empleados`
--
ALTER TABLE `empleados`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `empleados`
--
ALTER TABLE `empleados`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=318;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19910910;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
