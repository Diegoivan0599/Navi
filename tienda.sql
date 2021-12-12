-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 18-07-2021 a las 07:48:38
-- Versión del servidor: 10.1.37-MariaDB
-- Versión de PHP: 7.3.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `tienda`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_clientes`
--

CREATE TABLE `tbl_clientes` (
  `ID` int(11) NOT NULL,
  `Nombre` varchar(100) NOT NULL,
  `a_paterno` varchar(100) NOT NULL,
  `a_materno` varchar(100) NOT NULL,
  `correo` varchar(100) NOT NULL,
  `clave` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `tbl_clientes`
--

INSERT INTO `tbl_clientes` (`ID`, `Nombre`, `a_paterno`, `a_materno`, `correo`, `clave`) VALUES
(1, 'Diego Ivan', 'Landeros', 'Marin', 'landy0599@gmail.com', '1234'),
(3, 'Jose Luis', 'Roman', 'Rosas', 'jlrr@gmail.com', 'j1234');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_detalleventa`
--

CREATE TABLE `tbl_detalleventa` (
  `ID` int(11) NOT NULL,
  `IDventa` int(11) NOT NULL,
  `IDproducto` int(11) NOT NULL,
  `PrecioUnitario` decimal(20,0) NOT NULL,
  `Cantidad` int(11) NOT NULL,
  `Pagado` int(1) NOT NULL,
  `token_pago` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_productos`
--

CREATE TABLE `tbl_productos` (
  `ID` int(11) NOT NULL,
  `Nombre` varchar(255) NOT NULL,
  `Precio` decimal(20,2) NOT NULL,
  `Descripcion` text NOT NULL,
  `Imagen` varchar(255) NOT NULL,
  `stock` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `tbl_productos`
--

INSERT INTO `tbl_productos` (`ID`, `Nombre`, `Precio`, `Descripcion`, `Imagen`, `stock`) VALUES
(1, 'Prada camisa \"Impossible Love\"', '1100.00', 'Camisa estilo bowling Impossible Love en algodón de color variado de Prada con cuello italiano, cierre con botones, manga corta, dobladillo recto y corte recto. Talla M', 'https://cdna.lystit.com/photos/giglio/6c1b3a97/prada-Black-Shirt-Men.jpeg', 1),
(2, 'RAF SIMONS, Silver \'RS\' Short Oversized Sweater', '2500.00', 'Sueter de lana y merino corte Oversize color plata, logo bordado al frente y corte cropped a la cintura talla L', 'https://static.footshop.com/519016/105547.jpg', 1),
(3, 'Rick Owens Mega Laced pants', '1200.00', 'Pantalones con detalle de cordones de Rick Owens,corte slim. talla M', 'https://cdn-images.farfetch-contents.com/14/77/12/73/14771273_23701603_1000.jpg', 1),
(4, ' PUBLISHED BY Ruby’s Lost Stone Mini Bag', '900.00', 'Bolso metalico unisex marca PUBLISHED BY en color plata', 'https://www.ln-cc.com/dw/image/v2/AAGA_PRD/on/demandware.static/-/Sites-09/default/dw0a89ef6b/images/zoom/pbb0342001_sil_01.jpg', 1),
(5, 'Rick Owens x Dr. Martens 1460 boots', '5000.00', 'Botas de piel de bovino 100% colaboracion de Dr Martens con el diseñador Rick Owens talla 28MX 43 EUR', 'https://cdn-images.farfetch-contents.com/16/19/89/00/16198900_32557235_1000.jpg', 1),
(6, 'Rhude \"Nice Tee\"', '750.00', 'Camiseta 100% algodon marca Rhude con estampado en el pecho talla XL', 'https://cdn-images.farfetch-contents.com/15/90/43/67/15904367_32867231_1000.jpg', 1),
(7, 'Camisa Casablanca Maui', '1150.00', 'Camisa Maui con estampado de paisaje en espalda y pecho marca Casablanca talla S', 'https://cdn-images.farfetch-contents.com/16/84/70/14/16847014_33421293_1000.jpg', 1),
(8, 'Marni Pana Overshirt', '1500.00', 'Sobrecamisa de pana con cierre marca Marni talla S', 'https://cdn-images.farfetch-contents.com/16/28/17/11/16281711_31314067_1000.jpg', 1),
(9, 'Homme Plissé Issey Miyake', '780.00', 'Pantalones plisados corte Slim marca Issey Miyake talla S-M', 'https://cdn-images.farfetch-contents.com/16/68/83/62/16688362_32856620_1000.jpg', 1),
(10, 'Varsity Jacket Burberry', '2900.00', 'Chamarra de lana y mangas de cuero corte bomber varsity marca Burberry talla L', 'https://cdn-images.farfetch-contents.com/16/47/09/04/16470904_31856784_1000.jpg', 1),
(11, 'Shopper Bag Saint Laurent', '950.00', 'Bolsa de lona 100% con estampado al frente marca Saint Laurent', 'https://cdn-images.farfetch-contents.com/16/01/84/83/16018483_32872461_1000.jpg', 1),
(12, 'Ambush Blazer', '1500.00', 'Blazer de lana 100% con cierre de laso Ambush talla S-M', 'https://cdn-images.farfetch-contents.com/16/25/29/90/16252990_32205478_1000.jpg', 1),
(14, 'Saint Laurent Wyatt suede boots', '2500.00', 'Botas de ante con tacón bajo grueso, puntera de almendra y detalles en tono dorado.  Talle 41 Eur 27 MX', 'https://cdn-images.farfetch-contents.com/15/51/07/72/15510772_29000771_1000.jpg', 1),
(15, 'Black Comme Des Garçons- belted cut-out biker jacket', '1800.00', 'Chamara corte Bicker 100% algodon marca Comme-Des-Garcons talla L', 'https://cdn-images.farfetch-contents.com/16/93/63/52/16936352_34294348_1000.jpg', 1),
(16, 'Balenciaga lentes de sol espejadas', '1300.00', 'Lentes de sol corte corte curveado y montura estilo escudo marca Balenciaga', 'https://cdn-images.farfetch-contents.com/15/89/53/23/15895323_29319865_1000.jpg', 1),
(17, 'Raf Simons abrigo Oversize', '2200.00', 'Abrigo Raf Simons corte Oversize de doble botonadura talla S (Amplio a M-L)', 'https://cdn-images.farfetch-contents.com/16/14/47/95/16144795_32354441_1000.jpg', 1),
(18, 'Cardigan multilogo Vetemens', '1750.00', 'Cardigan corte Oversize marca Vetements talla S muy amplio a L-XL', 'https://cdn-images.farfetch-contents.com/15/70/41/08/15704108_32130346_1000.jpg', 1),
(19, 'Margiela Tabi Boots', '3300.00', 'Botas Maison Margiela corte Tabi en la puntera, talla 26MX-40EUR', 'https://cdn-images.farfetch-contents.com/14/70/63/08/14706308_23358110_1000.jpg', 1),
(20, 'Varsity Jacket Kent & Curwen', '3150.00', 'Chamarra corte bomber varsisy talla M compuesta de lana hecha en italia', 'https://cdn-images.farfetch-contents.com/12/65/90/34/12659034_12422457_1000.jpg', 1),
(21, 'Jaquemus Mini Shopper bag', '4100.00', 'Bolso pequeño de hombro marca Jaquemus', 'https://cdn-images.farfetch-contents.com/16/47/14/49/16471449_31828391_1000.jpg', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_ventas`
--

CREATE TABLE `tbl_ventas` (
  `ID` int(11) NOT NULL,
  `ClaveTransaccion` varchar(250) NOT NULL,
  `PaypalDatos` text NOT NULL,
  `Fecha` datetime NOT NULL,
  `Correo` varchar(5000) NOT NULL,
  `Total` decimal(60,0) NOT NULL,
  `status` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `tbl_clientes`
--
ALTER TABLE `tbl_clientes`
  ADD PRIMARY KEY (`ID`);

--
-- Indices de la tabla `tbl_detalleventa`
--
ALTER TABLE `tbl_detalleventa`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `IDventa` (`IDventa`),
  ADD KEY `IDproducto` (`IDproducto`);

--
-- Indices de la tabla `tbl_productos`
--
ALTER TABLE `tbl_productos`
  ADD PRIMARY KEY (`ID`);

--
-- Indices de la tabla `tbl_ventas`
--
ALTER TABLE `tbl_ventas`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `tbl_clientes`
--
ALTER TABLE `tbl_clientes`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `tbl_detalleventa`
--
ALTER TABLE `tbl_detalleventa`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `tbl_productos`
--
ALTER TABLE `tbl_productos`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT de la tabla `tbl_ventas`
--
ALTER TABLE `tbl_ventas`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `tbl_detalleventa`
--
ALTER TABLE `tbl_detalleventa`
  ADD CONSTRAINT `tbl_detalleventa_ibfk_1` FOREIGN KEY (`IDventa`) REFERENCES `tbl_ventas` (`ID`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `tbl_detalleventa_ibfk_2` FOREIGN KEY (`IDproducto`) REFERENCES `tbl_productos` (`ID`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
