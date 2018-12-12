-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 13-12-2018 a las 00:07:57
-- Versión del servidor: 10.1.32-MariaDB
-- Versión de PHP: 5.6.36

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `cevicheronconcancha`
--

DELIMITER $$
--
-- Procedimientos
--
CREATE DEFINER=`` PROCEDURE `sp_insertar_Entrada` (IN `id` INT(11), IN `fecha` TIMESTAMP)  NO SQL
INSERT INTO `registro_entrada`(`usuario_id`, `fecha_entrada`) VALUES (id,fecha)$$

CREATE DEFINER=`` PROCEDURE `sp_validar_Usuario` (IN `codigo` INT(11), OUT `identificador` INT(11), OUT `nombre` VARCHAR(500), OUT `activo` INT(11), OUT `existe` INT(11))  BEGIN

    DECLARE v_cantidad INT(11);
    
    SELECT 
           usuario.usuario_id
           ,usuario.alicorp_nombrenegocio
           ,usuario.usuario_estado
           ,COUNT(usuario.usuario_id)
           
    INTO 
           identificador
           ,nombre
           ,activo
           ,v_cantidad
           
  	FROM usuario 
   	WHERE usuario.alicorp_codigo = codigo AND usuario.usuario_estado=1;    
            IF (v_cantidad = 1) THEN
             SET  existe = 1;
             ELSE
             SET existe = 0;
            END IF;

END$$

DELIMITER ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `canje_productos`
--

CREATE TABLE `canje_productos` (
  `canje_id` int(11) NOT NULL,
  `usuario_id` int(11) NOT NULL,
  `producto_id` int(11) NOT NULL,
  `fecha_canje` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `juego`
--

CREATE TABLE `juego` (
  `juego_id` int(11) NOT NULL,
  `juego_nombre` varchar(150) NOT NULL,
  `juego_estado` varchar(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `juego_usuario`
--

CREATE TABLE `juego_usuario` (
  `juegojugado_id` int(11) NOT NULL,
  `usuario_id` int(11) NOT NULL,
  `juego_id` int(11) NOT NULL,
  `puntos_id` int(11) NOT NULL,
  `fecha_juego` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `producto`
--

CREATE TABLE `producto` (
  `producto_id` int(11) NOT NULL,
  `producto_nombre` varchar(45) NOT NULL,
  `producto_costepuntos` varchar(45) NOT NULL,
  `producto_stock` varchar(4) NOT NULL,
  `producto_categoria` varchar(80) NOT NULL,
  `producto_estado` varchar(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `puntos`
--

CREATE TABLE `puntos` (
  `puntos_id` int(11) NOT NULL,
  `puntos_cantidad` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `registro_entrada`
--

CREATE TABLE `registro_entrada` (
  `entrada_id` int(11) NOT NULL,
  `usuario_id` int(11) NOT NULL,
  `fecha_entrada` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `registro_entrada`
--

INSERT INTO `registro_entrada` (`entrada_id`, `usuario_id`, `fecha_entrada`) VALUES
(1, 1, '2018-12-12 22:15:42'),
(2, 1, '2018-12-12 22:16:15'),
(3, 1, '2018-12-12 22:16:54'),
(4, 1, '2018-12-12 22:19:38'),
(5, 1, '2018-12-12 22:20:20'),
(6, 1, '2018-12-12 22:22:39'),
(7, 1, '2018-12-12 22:25:36'),
(8, 1, '2018-12-12 22:28:25');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `usuario_id` int(11) NOT NULL,
  `usuario_nombre` varchar(300) DEFAULT NULL,
  `usuario_dni` varchar(8) DEFAULT NULL,
  `usuario_direccion` varchar(250) DEFAULT NULL,
  `usuario_departamento` varchar(150) NOT NULL,
  `usuario_provincia` varchar(80) DEFAULT NULL,
  `usuario_distrito` varchar(100) DEFAULT NULL,
  `usuario_telefono` varchar(9) DEFAULT NULL,
  `usuario_email` varchar(120) DEFAULT NULL,
  `alicorp_nombredex` varchar(150) NOT NULL,
  `alicorp_codigo` varchar(8) NOT NULL,
  `alicorp_nombrenegocio` varchar(150) NOT NULL,
  `alicorp_telefono` varchar(9) NOT NULL,
  `usuario_estado` varchar(1) NOT NULL,
  `usuario_fecha` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`usuario_id`, `usuario_nombre`, `usuario_dni`, `usuario_direccion`, `usuario_departamento`, `usuario_provincia`, `usuario_distrito`, `usuario_telefono`, `usuario_email`, `alicorp_nombredex`, `alicorp_codigo`, `alicorp_nombrenegocio`, `alicorp_telefono`, `usuario_estado`, `usuario_fecha`) VALUES
(1, 'Prueba Alicorp', '13245678', 'Av. Prueba', 'Lima', 'Lima', 'Ate', '994224498', 'alicorp@alicorp.com.pe', 'ALICORP S.A.C', '1234567', 'Alicorp', '999999999', '1', '2018-12-12 05:00:00');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario_productocomprado`
--

CREATE TABLE `usuario_productocomprado` (
  `compra_id` int(11) NOT NULL,
  `usuario_usuario_id` int(11) NOT NULL,
  `puntoscomprado` int(11) NOT NULL,
  `fecha_compra` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `canje_productos`
--
ALTER TABLE `canje_productos`
  ADD PRIMARY KEY (`canje_id`),
  ADD KEY `fk_usuario_has_producto_producto1_idx` (`producto_id`),
  ADD KEY `fk_usuario_has_producto_usuario1_idx` (`usuario_id`);

--
-- Indices de la tabla `juego`
--
ALTER TABLE `juego`
  ADD PRIMARY KEY (`juego_id`);

--
-- Indices de la tabla `juego_usuario`
--
ALTER TABLE `juego_usuario`
  ADD PRIMARY KEY (`juegojugado_id`),
  ADD KEY `fk_usuario_has_juego_juego1_idx` (`juego_id`),
  ADD KEY `fk_usuario_has_juego_usuario1_idx` (`usuario_id`),
  ADD KEY `fk_usuario_has_juego_puntos1_idx` (`puntos_id`);

--
-- Indices de la tabla `producto`
--
ALTER TABLE `producto`
  ADD PRIMARY KEY (`producto_id`);

--
-- Indices de la tabla `puntos`
--
ALTER TABLE `puntos`
  ADD PRIMARY KEY (`puntos_id`);

--
-- Indices de la tabla `registro_entrada`
--
ALTER TABLE `registro_entrada`
  ADD PRIMARY KEY (`entrada_id`),
  ADD KEY `fk_registro_entrada_usuario_idx` (`usuario_id`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`usuario_id`);

--
-- Indices de la tabla `usuario_productocomprado`
--
ALTER TABLE `usuario_productocomprado`
  ADD PRIMARY KEY (`compra_id`),
  ADD KEY `fk_usuario_productocomprado_usuario1_idx` (`usuario_usuario_id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `canje_productos`
--
ALTER TABLE `canje_productos`
  MODIFY `canje_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `juego`
--
ALTER TABLE `juego`
  MODIFY `juego_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `juego_usuario`
--
ALTER TABLE `juego_usuario`
  MODIFY `juegojugado_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `producto`
--
ALTER TABLE `producto`
  MODIFY `producto_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `puntos`
--
ALTER TABLE `puntos`
  MODIFY `puntos_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `registro_entrada`
--
ALTER TABLE `registro_entrada`
  MODIFY `entrada_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de la tabla `usuario`
--
ALTER TABLE `usuario`
  MODIFY `usuario_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `usuario_productocomprado`
--
ALTER TABLE `usuario_productocomprado`
  MODIFY `compra_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `canje_productos`
--
ALTER TABLE `canje_productos`
  ADD CONSTRAINT `fk_usuario_has_producto_producto1` FOREIGN KEY (`producto_id`) REFERENCES `producto` (`producto_id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_usuario_has_producto_usuario1` FOREIGN KEY (`usuario_id`) REFERENCES `usuario` (`usuario_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `juego_usuario`
--
ALTER TABLE `juego_usuario`
  ADD CONSTRAINT `fk_usuario_has_juego_juego1` FOREIGN KEY (`juego_id`) REFERENCES `juego` (`juego_id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_usuario_has_juego_puntos1` FOREIGN KEY (`puntos_id`) REFERENCES `puntos` (`puntos_id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_usuario_has_juego_usuario1` FOREIGN KEY (`usuario_id`) REFERENCES `usuario` (`usuario_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `registro_entrada`
--
ALTER TABLE `registro_entrada`
  ADD CONSTRAINT `fk_registro_entrada_usuario` FOREIGN KEY (`usuario_id`) REFERENCES `usuario` (`usuario_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `usuario_productocomprado`
--
ALTER TABLE `usuario_productocomprado`
  ADD CONSTRAINT `fk_usuario_productocomprado_usuario1` FOREIGN KEY (`usuario_usuario_id`) REFERENCES `usuario` (`usuario_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
