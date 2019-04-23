-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 23-04-2019 a las 03:13:48
-- Versión del servidor: 5.7.14
-- Versión de PHP: 5.6.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `tiendavirtual_bd`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categoria`
--

CREATE TABLE `categoria` (
  `id` int(11) NOT NULL,
  `descripcion` varchar(100) COLLATE utf8_spanish_ci DEFAULT NULL,
  `estado` tinyint(1) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci COMMENT='Son las categorias en las cuales se agrupan los productos.';

--
-- Volcado de datos para la tabla `categoria`
--

INSERT INTO `categoria` (`id`, `descripcion`, `estado`) VALUES
(1, 'EN VENTA', 1),
(2, 'LO NUEVO', 1),
(3, 'MUJERES', 1),
(4, 'HOMBRES', 1),
(5, 'ACCESORIOS', 1),
(6, 'CALZADOS', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cliente`
--

CREATE TABLE `cliente` (
  `id` int(11) NOT NULL,
  `nombre` varchar(100) COLLATE utf8_spanish_ci DEFAULT NULL,
  `email` varchar(100) COLLATE utf8_spanish_ci DEFAULT NULL,
  `telefono` varchar(20) COLLATE utf8_spanish_ci DEFAULT NULL,
  `direccion` varchar(200) COLLATE utf8_spanish_ci DEFAULT NULL,
  `documento` varchar(20) COLLATE utf8_spanish_ci DEFAULT NULL,
  `empresa` int(11) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci COMMENT='Almacena la informaci?n de los clientes de la tienda.  Hay separaci?n de clientes por cada tienda';

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `detallepedido`
--

CREATE TABLE `detallepedido` (
  `producto` int(11) NOT NULL,
  `pedido` int(11) NOT NULL,
  `cantidad` int(11) DEFAULT NULL COMMENT 'Almacena la cantidad del producto solicitado en el pedido',
  `precio` decimal(10,0) DEFAULT NULL COMMENT 'Almacena la informaci?n del precio del producto en el momento en que se realiz? el pedido'
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci COMMENT='Almacena el detalle del pedido, de los productos asociados al pedido.';

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `empresa`
--

CREATE TABLE `empresa` (
  `id` int(11) NOT NULL,
  `referencia` varchar(20) COLLATE utf8_spanish_ci DEFAULT NULL,
  `nit` varchar(20) COLLATE utf8_spanish_ci DEFAULT NULL,
  `nombre` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `slogan` varchar(500) COLLATE utf8_spanish_ci DEFAULT NULL,
  `direccion` varchar(100) COLLATE utf8_spanish_ci DEFAULT NULL,
  `email` varchar(50) COLLATE utf8_spanish_ci DEFAULT NULL,
  `instagram` varchar(100) COLLATE utf8_spanish_ci DEFAULT NULL,
  `twitter` varchar(100) COLLATE utf8_spanish_ci DEFAULT NULL,
  `facebook` varchar(100) COLLATE utf8_spanish_ci DEFAULT NULL,
  `informacion` text COLLATE utf8_spanish_ci,
  `telefono` varchar(50) COLLATE utf8_spanish_ci DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci COMMENT='Almacena la informaci?n de la empresa a la cual corresponde el comercio';

--
-- Volcado de datos para la tabla `empresa`
--

INSERT INTO `empresa` (`id`, `referencia`, `nit`, `nombre`, `slogan`, `direccion`, `email`, `instagram`, `twitter`, `facebook`, `informacion`, `telefono`) VALUES
(1, '001', '001', 'EMPRESA ONE', 'TU PRIMER EMPRESA', 'AV 1 CALLE 1', 'empresaone@gmail.com', 'empresaone', '#empresaone', 'empresaone', 'Empresa One', '001');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `estadopedido`
--

CREATE TABLE `estadopedido` (
  `id` int(11) NOT NULL,
  `descripcion` varchar(50) COLLATE utf8_spanish_ci DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci COMMENT='Almacena el estado de los pedidos';

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `estadopedidohis`
--

CREATE TABLE `estadopedidohis` (
  `id` int(11) NOT NULL,
  `estado` int(11) DEFAULT NULL,
  `pedido` int(11) DEFAULT NULL,
  `fecha` datetime DEFAULT NULL COMMENT 'Almacena la fecha del cambio de estado',
  `observacion` text COLLATE utf8_spanish_ci
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci COMMENT='Almacena el estado historico de los pedidos';

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `favorito`
--

CREATE TABLE `favorito` (
  `producto` int(11) NOT NULL,
  `cliente` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci COMMENT='Almacena la relaci?n de los productos favoritos de cada cliente';

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `marca`
--

CREATE TABLE `marca` (
  `id` int(11) NOT NULL,
  `empresa` int(11) DEFAULT NULL,
  `nombre` varchar(100) COLLATE utf8_spanish_ci DEFAULT NULL,
  `estado` tinyint(1) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci COMMENT='Almacena la informaci?n de las marcas asociadas a la empresa.  Cada empresa puede registrar las distintas marcas';

--
-- Volcado de datos para la tabla `marca`
--

INSERT INTO `marca` (`id`, `empresa`, `nombre`, `estado`) VALUES
(1, 1, 'MARCA 1', 1),
(2, 1, 'MARCA 2', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pedido`
--

CREATE TABLE `pedido` (
  `id` int(11) NOT NULL,
  `numerointerno` int(11) DEFAULT NULL,
  `fecha` date DEFAULT NULL,
  `cliente` int(11) DEFAULT NULL,
  `estado` int(11) DEFAULT NULL COMMENT 'Almacena el estado del pedido, el cual puede ser en pedido, pagado, despachado y demas'
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci COMMENT='Almacena el pedido del cliente';

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `producto`
--

CREATE TABLE `producto` (
  `id` int(11) NOT NULL COMMENT 'Almacena la informaci?n del identificador interno del producto',
  `referencia` varchar(20) COLLATE utf8_spanish_ci DEFAULT NULL COMMENT 'Almacena la referencia del producto',
  `nombre` varchar(100) COLLATE utf8_spanish_ci DEFAULT NULL COMMENT 'Almacena el nombre del producto',
  `descripcion` text COLLATE utf8_spanish_ci COMMENT 'Almacena la descripci?n en HMTL del producto',
  `categoria` int(11) DEFAULT NULL COMMENT 'Almacena la informaci?n de la categoria del producto',
  `empresa` int(11) DEFAULT NULL COMMENT 'Almacena el identificador de la empresa.  Esto gestiona si la plataforma se utiliza para varias empresas',
  `infoadicional` text COLLATE utf8_spanish_ci COMMENT 'Almacena la informaci?n adicional del producto',
  `stock` int(11) DEFAULT NULL COMMENT 'Almacena la cantidad actual del producto',
  `precio` decimal(10,0) DEFAULT NULL COMMENT 'Almacena el precio actual del producto.  Este valor es reemplazado con cada nuevo ingreso de productos.',
  `estado` tinyint(1) DEFAULT NULL,
  `marca` int(11) DEFAULT NULL,
  `descuento` int(11) DEFAULT '0' COMMENT 'Almacena el porcentaje de descuento del producto, por defecto es cero (0)'
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci COMMENT='Almacena la informaci?n del producto';

--
-- Volcado de datos para la tabla `producto`
--

INSERT INTO `producto` (`id`, `referencia`, `nombre`, `descripcion`, `categoria`, `empresa`, `infoadicional`, `stock`, `precio`, `estado`, `marca`, `descuento`) VALUES
(1, '001', 'PANTALON', 'PRODUCTO 1', 1, 1, 'PRODUCTO 1', 1, '30000', 1, 1, 0),
(2, '002', 'BLUSA', 'PRODUCTO 2', 1, 1, 'PRODUCTO 2', 1, '35000', 1, 1, 0),
(3, '003', 'CAMISA', 'PRODUCTO 3', 1, 1, 'PRODUCTO 3', 1, '48000', 1, 1, 0),
(4, '004', 'SACO', 'PRODUCTO 4', 1, 1, 'PRODUCTO 4', 1, '42000', 1, 1, 0),
(5, '005', 'SACO', 'PRODUCTO 5', 2, 1, 'PRODUCTO 5', 1, '45000', 1, 1, 0),
(6, '006', 'SACO', 'PRODUCTO 6', 2, 1, 'PRODUCTO 6', 1, '41000', 1, 1, 0),
(7, '007', 'SACO', 'PRODUCTO 7', 2, 1, 'PRODUCTO 7', 1, '55000', 1, 1, 0),
(8, '008', 'SACO', 'PRODUCTO 8', 3, 1, 'PRODUCTO 8', 1, '55000', 1, 1, 0),
(9, '009', 'SACO', 'PRODUCTO 9', 3, 1, 'PRODUCTO 9', 1, '55000', 1, 1, 0),
(10, '010', 'SACO', 'PRODUCTO 10', 3, 1, 'PRODUCTO 10', 1, '58000', 1, 1, 0),
(11, '011', 'SACO', 'PRODUCTO 11', 4, 1, 'PRODUCTO 11', 1, '28000', 1, 1, 0),
(12, '012', 'SACO', 'PRODUCTO 12', 4, 1, 'PRODUCTO 12', 1, '27000', 1, 1, 0),
(13, '013', 'SACO', 'PRODUCTO 13', 4, 1, 'PRODUCTO 13', 1, '20000', 1, 1, 0),
(14, '014', 'SACO', 'PRODUCTO 14', 5, 1, 'PRODUCTO 14', 1, '20000', 1, 1, 0),
(15, '015', 'SACO', 'PRODUCTO 15', 5, 1, 'PRODUCTO 15', 1, '20000', 1, 1, 0),
(16, '016', 'SACO', 'PRODUCTO 16', 5, 1, 'PRODUCTO 16', 1, '20000', 1, 1, 0),
(17, '017', 'SACO', 'PRODUCTO 17', 6, 1, 'PRODUCTO 17', 1, '24000', 1, 1, 0),
(18, '018', 'SACO', 'PRODUCTO 18', 6, 1, 'PRODUCTO 18', 1, '26000', 1, 1, 0),
(19, '019', 'SACO', 'PRODUCTO 19', 6, 1, 'PRODUCTO 19', 1, '27000', 1, 1, 0),
(20, '020', 'SACO', 'PRODUCTO 20', 6, 1, 'PRODUCTO 20', 1, '21000', 1, 1, 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `relacionado`
--

CREATE TABLE `relacionado` (
  `producto` int(11) NOT NULL,
  `relacionado` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci COMMENT='Almacena la relaci?n de los productos relacionados de un producto especifico';

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tag`
--

CREATE TABLE `tag` (
  `id` int(11) NOT NULL,
  `empresa` int(11) DEFAULT NULL,
  `descripcion` varchar(100) COLLATE utf8_spanish_ci DEFAULT NULL,
  `tipo` int(11) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci COMMENT='Almacena la relaci?n de las etiquetas de la empresa';

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tagproducto`
--

CREATE TABLE `tagproducto` (
  `tag` int(11) NOT NULL,
  `producto` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci COMMENT='Almacena la relaci?n de las etiquetas de los distintos productos';

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipotag`
--

CREATE TABLE `tipotag` (
  `id` int(11) NOT NULL,
  `descripcion` varchar(100) COLLATE utf8_spanish_ci DEFAULT NULL,
  `estado` tinyint(1) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci COMMENT='Define el tipo de tag de la tienda.  Los tags pueden ser por ejemplo Tipo prenda, Genero, etc.  Las descripciones son genericas para todas las empresas';

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `categoria`
--
ALTER TABLE `categoria`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `cliente`
--
ALTER TABLE `cliente`
  ADD PRIMARY KEY (`id`),
  ADD KEY `FK_cliente_empresa` (`empresa`);

--
-- Indices de la tabla `detallepedido`
--
ALTER TABLE `detallepedido`
  ADD PRIMARY KEY (`producto`,`pedido`),
  ADD KEY `FK_detallepedido_pedido` (`pedido`);

--
-- Indices de la tabla `empresa`
--
ALTER TABLE `empresa`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `estadopedido`
--
ALTER TABLE `estadopedido`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `estadopedidohis`
--
ALTER TABLE `estadopedidohis`
  ADD PRIMARY KEY (`id`),
  ADD KEY `FK_estadopedidohis_estadopedido` (`estado`),
  ADD KEY `FK_estadopedidohis_pedido` (`pedido`);

--
-- Indices de la tabla `favorito`
--
ALTER TABLE `favorito`
  ADD PRIMARY KEY (`producto`,`cliente`),
  ADD KEY `FK_favorito_cliente` (`cliente`);

--
-- Indices de la tabla `marca`
--
ALTER TABLE `marca`
  ADD PRIMARY KEY (`id`),
  ADD KEY `FK_marca_empresa` (`empresa`);

--
-- Indices de la tabla `pedido`
--
ALTER TABLE `pedido`
  ADD PRIMARY KEY (`id`),
  ADD KEY `FK_pedido_cliente` (`cliente`),
  ADD KEY `FK_pedido_estadopedido` (`estado`);

--
-- Indices de la tabla `producto`
--
ALTER TABLE `producto`
  ADD PRIMARY KEY (`id`),
  ADD KEY `FK_producto_empresa` (`empresa`),
  ADD KEY `FK_producto_marca` (`marca`),
  ADD KEY `FK_producto_categoria` (`categoria`);

--
-- Indices de la tabla `relacionado`
--
ALTER TABLE `relacionado`
  ADD PRIMARY KEY (`producto`,`relacionado`),
  ADD KEY `FK_relacionado_producto_02` (`relacionado`);

--
-- Indices de la tabla `tag`
--
ALTER TABLE `tag`
  ADD PRIMARY KEY (`id`),
  ADD KEY `FK_tag_empresa` (`empresa`),
  ADD KEY `FK_tag_tipotag` (`tipo`);

--
-- Indices de la tabla `tagproducto`
--
ALTER TABLE `tagproducto`
  ADD PRIMARY KEY (`tag`,`producto`),
  ADD KEY `FK_tagproducto_producto` (`producto`);

--
-- Indices de la tabla `tipotag`
--
ALTER TABLE `tipotag`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `categoria`
--
ALTER TABLE `categoria`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT de la tabla `cliente`
--
ALTER TABLE `cliente`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `empresa`
--
ALTER TABLE `empresa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT de la tabla `marca`
--
ALTER TABLE `marca`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT de la tabla `pedido`
--
ALTER TABLE `pedido`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `producto`
--
ALTER TABLE `producto`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'Almacena la informaci?n del identificador interno del producto', AUTO_INCREMENT=21;
--
-- AUTO_INCREMENT de la tabla `tag`
--
ALTER TABLE `tag`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
