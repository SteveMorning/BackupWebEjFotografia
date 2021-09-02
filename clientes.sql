-- phpMyAdmin SQL Dump
-- version 4.9.7
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost:3306
-- Tiempo de generación: 31-08-2021 a las 01:00:56
-- Versión del servidor: 10.3.31-MariaDB
-- Versión de PHP: 7.3.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `estebanj_base_datos`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `clientes`
--

CREATE TABLE `clientes` (
  `codcliente` int(11) NOT NULL,
  `nombre` varchar(255) NOT NULL,
  `clave` varchar(30) NOT NULL,
  `pagina` varchar(255) NOT NULL,
  `descripcion` varchar(255) NOT NULL,
  `titulo` varchar(255) NOT NULL,
  `estado` varchar(255) NOT NULL,
  `privado` int(1) NOT NULL,
  `cliente` varchar(255) NOT NULL,
  `otrodato1` varchar(255) NOT NULL,
  `otrodato2` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `clientes`
--

INSERT INTO `clientes` (`codcliente`, `nombre`, `clave`, `pagina`, `descripcion`, `titulo`, `estado`, `privado`, `cliente`, `otrodato1`, `otrodato2`) VALUES
(1, 'nombre1', 'clave1', 'http://www.estebanjuarezfotografia.com', 'descripcion1', 'titulo1', 'estado1', 1, 'cliente', 'otrodato1', 'otrodato2'),
(2, 'prenoviaricha', 'ricardo', 'https://drive.google.com/drive/u/0/folders/0B-bgFetTqjp-WE9NNUloeGpsZTg', 'Session de prenovia para Andrea. Diseñadora Richa', 'Pre Novia Andrea by Richa', 'Ok', 1, 'Richa', '', ''),
(3, 'mati', 'mati', 'http://www.estebanjuarezfotografia.com/Cliente_afiladosjh.html', 'Catalogo de Productos de la marca Afilados JH', 'Afilados JH', '1', 1, 'Afilados JH', '', ''),
(4, '123456789', '123456', 'https://drive.google.com/drive/u/0/folders/0B-bgFetTqjp-MkZUZm9PY3lVTkU', '', '', '', 0, '', '', ''),
(5, 'richa', 'richa', 'https://www.estebanjuarezfotografia.com/Cliente_Richa.html', '', 'Diseños de Richä', '1', 1, '', '', ''),
(6, 'genifer', 'genifer', 'http://www.estebanjuarezfotografia.com/Cliente_SessionGenifer.html', '', '', '1', 0, '', '', ''),
(7, 'bandas', 'bandas', 'http://www.estebanjuarezfotografia.com/Cliente003.html', '', '', '1', 0, '', '', ''),
(8, 'biofarma2017', 'biofarma2017', 'http://www.estebanjuarezfotografia.com/Cliente_BioFarma2017.html', '', '', '1', 0, '', '', ''),
(9, 'eventobiofarma', 'eventobiofarma', 'http://www.estebanjuarezfotografia.com/Cliente_EventoBioFarma2017.html', '', '', '1', 0, '', '', ''),
(10, 'lucas2017', 'lucas2017', 'http://www.estebanjuarezfotografia.com/Cliente_Lucas2018.html', '', '', '1', 0, '', '', ''),
(11, 'santi2017', 'santi2017', 'http://www.estebanjuarezfotografia.com/Cliente_Santi2017.html', '', '', '1', 1, '', '', ''),
(12, 'jor', 'jor', 'http://www.estebanjuarezfotografia.com/LoMejorDeJorgelina.html', '', 'Lo mejor de Andrea - Sesiones 2013 a 2018', '1', 0, '', '', ''),
(13, 'eze2017', 'eze2017', 'http://www.estebanjuarezfotografia.com/Cliente_EzeFerreyra2017.html', '', '', '1', 1, '', '', ''),
(14, 'justina2018', 'justina2018', 'http://www.estebanjuarezfotografia.com/Cliente_Justina2018.html', '', '', '', 1, '', '', ''),
(15, 'ursula2018', 'ursula2018', 'http://www.estebanjuarezfotografia.com/Cliente_Ursula2018.html', '', '', '', 0, '', '', ''),
(16, 'abrancancha2018', 'abrancancha2018', 'https://www.estebanjuarezfotografia.com/Cliente_AbranCancha2018.html', '', '', '1', 1, '', '', ''),
(17, 'lasbrujas2018', 'lasbrujas2018', 'https://www.estebanjuarezfotografia.com/Cliente_LasBrujas2018.html', '', '', '1', 1, '', '', ''),
(18, 'lasvipinicio2018', 'lasvipinicio2018', 'https://www.estebanjuarezfotografia.com/Cliente_LasVip2018.html', '', '', '1', 1, '', '', ''),
(19, 'efulaapertura2018', 'efulaapertura2018', 'https://www.estebanjuarezfotografia.com/Cliente_EFUL2018.html', '', '', '1', 1, '', '', ''),
(20, 'casacasas2018', 'casacasas2018', 'https://www.estebanjuarezfotografia.com/Cliente_CASACAS2018.html', '', '', '1', 1, '', '', ''),
(21, 'tailandia2018', 'tailandia2018', 'http://www.estebanjuarezfotografia.com/Cliente_SessionKhoPhiPhi.html', '', '', '1', 1, '', '', ''),
(22, 'kenmalibu2018', 'kenmalibu2018', 'http://www.estebanjuarezfotografia.com/Cliente_KenMalibu2018.html', '', 'Session de Ken Malibu', '1', 1, '', '', ''),
(23, 'naty2018', 'naty2018', 'http://www.estebanjuarezfotografia.com/Cliente_Naty2018.html', '', '', '1', 1, '', '', ''),
(24, 'adriana2018', 'adriana2018', 'http://www.estebanjuarezfotografia.com/Cliente_Adrianita2018.html', '', 'Atrapa sueños 2018 - Diseño de Adriana Barrera ', '1', 1, '', '', ''),
(25, 'steve', 'steve', 'https://www.estebanjuarezfotografia.com/phplogin/listadocliente.php', '', 'Listado de Clientes', '1', 1, '', '', ''),
(26, 'sinestesia', 'sinestesia', '  http://www.estebanjuarezfotografia.com/Cliente_Sinestesia2018.html', '', 'Fotos Empresariales Sinestesia', '1', 1, '', '', ''),
(27, 'sinidentidad', 'sinidentidad', 'http://www.estebanjuarezfotografia.com/Cliente_SinIdentidad2018.html', '', 'Sin Identidad en Keller', '1', 1, '', '', ''),
(28, 'paul2018', 'paul2018', 'http://www.estebanjuarezfotografia.com/Cliente_Session_Paul2018.html', '', '', '1', 1, '', '', ''),
(29, 'gbritmos', 'gbritmos', 'https://www.estebanjuarezfotografia.com/Cliente_GBRitmos.html', '', 'Session Instituto GB - 2018', '', 0, '', '', ''),
(30, 'teatraje', 'teatraje', 'https://www.estebanjuarezfotografia.com/Cliente_Teatraje.html', '', 'Sesion de Teatraje y Magia', '', 1, '', '', ''),
(31, 'Teatraje', 'Teatraje', 'https://www.estebanjuarezfotografia.com/Cliente_Teatraje.html', '', 'Sesion de Teatraje y Magia', '', 1, '', '', ''),
(33, 'incorrectos', 'incorrectos', 'https://www.estebanjuarezfotografia.com/Cliente_Incorrectos_2019.html', '', '', '', 0, '', '', ''),
(32, 'urban', 'urban', 'https://www.estebanjuarezfotografia.com/Cliente_Urban_2019.html', '', '', '', 0, '', '', ''),
(34, 'bautismo', 'bautismo', 'http://www.estebanjuarezfotografia.com/Cliente_Bautismo2019.html', 'Bautismo de Hijo de Carina descripción', 'Bautismo de Hijo de Carina titulo', '', 1, '', '', ''),
(36, 'soyvale', 'soyvale', 'http://www.estebanjuarezfotografia.com/Cliente_15_de_Valentina_2019.html', 'Los 15 de Valentina', 'Los 15 de Valentina', '', 0, '', '', ''),
(37, 'el22', 'el22', 'http://www.estebanjuarezfotografia.com/Cliente_El22deGiselle_2019.html', 'Rotiseria El Pajaro Loco', 'Rotiseria El Pajaro Loco', '', 0, '', '', ''),
(38, 'imoc2019', 'imoc2019', 'http://www.estebanjuarezfotografia.com/Cliente_IMOC.html', 'Institucionales de IMOC 2019', 'Institucionales de IMOC 2019', '1', 1, '', '', ''),
(39, 'mariapaz2020', 'mariapaz2020', 'https://www.estebanjuarezfotografia.com/Cliente_Maria_Paz.html', '', 'Los 15 de Maria Paz', '', 1, '', '', ''),
(40, 'emilia2020', 'emilia2020', 'http://www.estebanjuarezfotografia.com/Cliente_Emilia_2020.html', '', 'Los 15 de Emilia Lamaccia', '1', 1, '', '', ''),
(41, 'rocio2020', 'rocio2020', 'https://www.estebanjuarezfotografia.com/Cliente_Rocio2020.html', '', 'Los 15 de Rocio - 21/09/2020', '1', 0, '', '', ''),
(42, 'jhon2020', 'jhon2020', 'https://www.estebanjuarezfotografia.com/Cliente_Session_Jhonatan_2020.html', '', 'Sesión de Jhonatan - Septiembre 2020', '1', 1, '', '', ''),
(43, 'grace2020', 'grace2020', 'https://www.estebanjuarezfotografia.com/Cliente_Graciela_2020.html', '', '', '', 0, 'Graciela Fariña', '', ''),
(44, 'rena2021', 'rena2021', 'https://www.estebanjuarezfotografia.com/Cliente_08_Renata_2021.html', '', 'Los 15 de Renta', '', 1, '', '', ''),
(45, 'vaneyjhonny', 'vaneyjhonny', 'https://www.estebanjuarezfotografia.com/Cliente_Casamiento_Vane_Jony.html', '', '', '', 1, '', '', '');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `clientes`
--
ALTER TABLE `clientes`
  ADD PRIMARY KEY (`codcliente`),
  ADD KEY `codcliente` (`codcliente`),
  ADD KEY `nombre` (`nombre`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
