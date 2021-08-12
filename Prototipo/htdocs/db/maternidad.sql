-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost
-- Tiempo de generación: 10-08-2021 a las 19:24:19
-- Versión del servidor: 10.4.19-MariaDB
-- Versión de PHP: 7.4.20

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `maternidad`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `bebe`
--

CREATE TABLE `bebe` (
  `id_bebe` int(11) NOT NULL,
  `nombre_bebe` varchar(10) DEFAULT NULL,
  `fecha_nacimiento_bebe` date DEFAULT NULL,
  `id_genero` int(11) DEFAULT NULL,
  `id_lactancia` int(11) DEFAULT NULL,
  `id_cliente` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cliente`
--

CREATE TABLE `cliente` (
  `id_cliente` int(11) NOT NULL,
  `nombre_cliente` varchar(10) NOT NULL,
  `apellido_cliente_paterno` varchar(10) DEFAULT NULL,
  `apellido_cliente_materno` varchar(10) DEFAULT NULL,
  `id_etapa` int(11) NOT NULL,
  `fecha_regreso` date DEFAULT NULL,
  `id_genero` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `estado_etapa`
--

CREATE TABLE `estado_etapa` (
  `id_estado_etapa` int(11) NOT NULL,
  `fecha_inicio` date DEFAULT NULL,
  `fecha_fin` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `etapa_cliente`
--

CREATE TABLE `etapa_cliente` (
  `id_etapa` int(11) NOT NULL,
  `nombre_etapa` varchar(10) NOT NULL,
  `id_estado_etapa` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `genero`
--

CREATE TABLE `genero` (
  `id_genero` int(11) NOT NULL,
  `tipo_genero` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `peso_bebe`
--

CREATE TABLE `peso_bebe` (
  `id_bebe` int(11) NOT NULL,
  `peso_bebe` double(9,2) DEFAULT NULL,
  `id_medida` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipo_lactancia`
--

CREATE TABLE `tipo_lactancia` (
  `id_lactancia` int(11) NOT NULL,
  `tipo_lactancia` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipo_medida`
--

CREATE TABLE `tipo_medida` (
  `id_medida` int(11) NOT NULL,
  `tipo_medida` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `idusuario` int(11) NOT NULL,
  `nombre_usuario` varchar(255) NOT NULL,
  `correo` varchar(255) NOT NULL,
  `pass` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`idusuario`, `nombre_usuario`, `correo`, `pass`) VALUES
(1, 's', 'f', 'g'),
(2, 's', 's', 's');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `bebe`
--
ALTER TABLE `bebe`
  ADD PRIMARY KEY (`id_bebe`);

--
-- Indices de la tabla `cliente`
--
ALTER TABLE `cliente`
  ADD PRIMARY KEY (`id_cliente`);

--
-- Indices de la tabla `estado_etapa`
--
ALTER TABLE `estado_etapa`
  ADD PRIMARY KEY (`id_estado_etapa`);

--
-- Indices de la tabla `etapa_cliente`
--
ALTER TABLE `etapa_cliente`
  ADD PRIMARY KEY (`id_etapa`);

--
-- Indices de la tabla `genero`
--
ALTER TABLE `genero`
  ADD PRIMARY KEY (`id_genero`);

--
-- Indices de la tabla `tipo_lactancia`
--
ALTER TABLE `tipo_lactancia`
  ADD PRIMARY KEY (`id_lactancia`);

--
-- Indices de la tabla `tipo_medida`
--
ALTER TABLE `tipo_medida`
  ADD PRIMARY KEY (`id_medida`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`idusuario`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `bebe`
--
ALTER TABLE `bebe`
  MODIFY `id_bebe` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `cliente`
--
ALTER TABLE `cliente`
  MODIFY `id_cliente` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `estado_etapa`
--
ALTER TABLE `estado_etapa`
  MODIFY `id_estado_etapa` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `etapa_cliente`
--
ALTER TABLE `etapa_cliente`
  MODIFY `id_etapa` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `genero`
--
ALTER TABLE `genero`
  MODIFY `id_genero` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `tipo_lactancia`
--
ALTER TABLE `tipo_lactancia`
  MODIFY `id_lactancia` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `tipo_medida`
--
ALTER TABLE `tipo_medida`
  MODIFY `id_medida` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `usuario`
--
ALTER TABLE `usuario`
  MODIFY `idusuario` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
