-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 16-11-2020 a las 18:48:11
-- Versión del servidor: 10.4.14-MariaDB
-- Versión de PHP: 7.4.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `products`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `place` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `imagen` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `categoria` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `categotiia_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `products`
--

INSERT INTO `products` (`id`, `name`, `place`, `description`, `imagen`, `categoria`, `categotiia_id`) VALUES
(1, 'Nueva-York', '', 'Comunmente llamada la gran ,manzana es uno de los lugares mas deseados para visitar en estados unidos.', 'Nueva-York.png', 'USA', NULL),
(2, 'Boston', '', 'Recomendación personal, al ser de las ciudades mas antiguas de este continente este contraste le da un gran encanto cultural.', 'Boston.png', 'USA', NULL),
(3, 'Chicago', '', 'Llamada coloquialmente la ciudad del viento,', 'Chicago.png', 'USA', NULL),
(4, 'Londres', '', 'Para mi mi lugar favorito en la tierra , la he visitado seis veces , en todas las estaciones del año, la he vivido en navidad en verano en grandes festividades y me ha enamorado. \r\nPara mi la combinacion perfecta entre modernismo y antiguedad .\r\nNecesario visitarlo una vez en la vida', 'Londres.png', 'Europe', NULL),
(5, 'Galway', '', 'Despues de haber vivido mas de tres meses en este hermoso lugar , he de decir que es uno de los lugares mas bonitos y recomendables si quieres viajar a Irlanda.', 'Galway.png', 'Europe', NULL),
(6, 'Islandia', '', 'Paraje natural por antonomasia si eres amante de la naturaleza este es tu lugar', 'Islandia.png', 'Europe', NULL),
(7, 'Tailandia', '', 'Mi destino favorito para viajar de Asia, esta en mi lista de futuros viajes, combinacion perfecta entre viaje cultural y viaje de relajacion desde perderte en sus preciosas playas hasta verte inmerso en uno de sus muchsimos templos', 'Tailandia.png', 'Asia', NULL),
(26, 'Japon', '', 'Uno de los lugares mas desarrolados de Asia pero que conserva su encanto de tiempos antiguos desde los templos hasta sus tradiciones milenarias.', 'Japon.png', 'Asia', NULL),
(27, 'India', '', 'Viaje  al que debes ir preparado , vas a estar contiunuamente sometido a estimulos tan olfativos como visuales , pero valdra la pena por ver sus parajes naturales y sus templos.', 'India.png', 'Asia', NULL);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`),
  ADD KEY `IDX_B3BA5A5AFE225398` (`categotiia_id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `FK_B3BA5A5AFE225398` FOREIGN KEY (`categotiia_id`) REFERENCES `categoria` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
