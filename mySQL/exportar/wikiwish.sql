-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 05-11-2024 a las 01:35:03
-- Versión del servidor: 10.4.28-MariaDB
-- Versión de PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `wikiwish`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `directorio_personajes`
--

CREATE TABLE `directorio_personajes` (
  `id_DP` int(8) NOT NULL,
  `nombre_DP` varchar(30) NOT NULL,
  `rareza_DP` int(1) NOT NULL,
  `elemento_DP` varchar(10) NOT NULL,
  `arma_DP` varchar(20) NOT NULL,
  `imagenURL_DP` varchar(200) NOT NULL,
  `descripcion_DP` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `directorio_personajes`
--

INSERT INTO `directorio_personajes` (`id_DP`, `nombre_DP`, `rareza_DP`, `elemento_DP`, `arma_DP`, `imagenURL_DP`, `descripcion_DP`) VALUES
(1, 'Faruzan', 4, 'anemo', 'arco', 'http://localhost/Wiki/imagenes/personajes/faruzan.WEbP', 'Una erudita “con cien años de antigüedad” a la que le encanta recalcar que tiene más experiencia que los demás. '),
(6, 'Kinich', 5, 'dendro', 'mandoble', 'http://localhost/Wiki/imagenes/personajes/kinich.WEbP', 'Un cazasaurios de Huitztlán experto en calcular el precio de las cosas.');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id_usuarios` int(6) NOT NULL,
  `nombre_usuario` varchar(20) NOT NULL,
  `email_usuarios` varchar(70) NOT NULL,
  `contraseña_usuarios` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id_usuarios`, `nombre_usuario`, `email_usuarios`, `contraseña_usuarios`) VALUES
(1, 'hola', 'hola@gmail.com', 'adios.'),
(5, 'airin', 'airinpaynemil@gmail.com', '$2y$10$AM71mGzKmmdIi'),
(9, 'julieta', 'sca@gmail.com', 'yippie'),
(10, 'pepeBotella', 'pepe@gmail.com', 'pancito');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `directorio_personajes`
--
ALTER TABLE `directorio_personajes`
  ADD PRIMARY KEY (`id_DP`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id_usuarios`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `directorio_personajes`
--
ALTER TABLE `directorio_personajes`
  MODIFY `id_DP` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id_usuarios` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
