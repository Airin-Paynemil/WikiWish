-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 11-11-2024 a las 04:54:21
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
-- Estructura de tabla para la tabla `directorio_armas`
--

CREATE TABLE `directorio_armas` (
  `id_DA` int(8) NOT NULL,
  `nombre_DA` varchar(50) NOT NULL,
  `atributo_DA` varchar(20) NOT NULL,
  `calidad_DA` int(1) NOT NULL,
  `tipo_DA` varchar(20) NOT NULL,
  `imagenURL_DA` varchar(200) NOT NULL,
  `descripcion_DA` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `directorio_armas`
--

INSERT INTO `directorio_armas` (`id_DA`, `nombre_DA`, `atributo_DA`, `calidad_DA`, `tipo_DA`, `imagenURL_DA`, `descripcion_DA`) VALUES
(1, 'Borla Blanca', 'prob.crit', 3, 'lanza', 'http://localhost/Wiki/imagenes/armas/borlablanca.webp', 'Un arma estándar de la Geoarmada. Tiene un eje firme y una punta de lanza afilada. Es un arma muy fiable.'),
(2, 'Reminiscencia de Tulaytulah', 'daño.crit', 5, 'catalizador', 'http://localhost/Wiki/imagenes/armas/tula.webp', 'Una campana hecha de zafiro y plata pura. Su lejana reverberación es, paradójicamente, muy nítida.'),
(3, 'Espada de Favonius', 'recarga', 4, 'espada', 'http://localhost/Wiki/imagenes/armas/favonius.webp', 'Una espada larga estándar de los Caballeros de Favonius. ¡Canalizar el poder de los elementos nunca fue tan fácil como con esta espada!.'),
(4, 'Prototipo Arcaico', 'ataque', 4, 'espada', 'http://localhost/Wiki/imagenes/armas/prototipo.webp', 'Una gran espada descubierta en la Forja Peñasco Oscuro. Al blandirla, tiene tal poder que uno puede sentir como si pudiera cortar a través del espacio.'),
(5, 'Garrote del Dialogo', 'prob.crit', 4, 'mandoble', 'http://localhost/Wiki/imagenes/armas/garrote.webp', 'Una gran maza con incrustaciones de obsidiana y un excelente poder de persuasión.'),
(8, 'Corazon de la Lluvia', 'vida', 5, 'arco', 'http://localhost/Wiki/imagenes/armas/corazon.webp', 'Ya sea en un escenario o un campo de batalla, la música que produce conmueve fácilmente el corazón de quien la escucha.'),
(10, 'COLOR', 'defensa', 5, 'lanza', 'http://localhost/Wiki/imagenes/upload/armas/flor.png', 'GDFG'),
(11, 'jythrg', 'vida', 5, 'lanza', 'http://localhost/Wiki/imagenes/upload/armas/bc0fc4e45589ed52945e81ea13971ce2-icono-de-delicada-flor-de-acuarela.png', 'efwffeewf');

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
(6, 'Kinich', 5, 'dendro', 'mandoble', 'http://localhost/Wiki/imagenes/personajes/kinich.WEbP', 'Un cazasaurios de Huitztlán experto en calcular el precio de las cosas.'),
(7, 'Gaming', 4, 'pyro', 'mandoble', 'http://localhost/Wiki/imagenes/personajes/gaming.WEbP', 'Escolta de la Agencia de Transporte Seguro Cofrespada y líder del grupo Bestias Místicas Poderosas.'),
(8, 'Raiden Shogun', 5, 'electro', 'lanza', 'http://localhost/Wiki/imagenes/personajes/raiden.WEbP', 'Su Excelencia, la todopoderosa Narukami, quien le prometió al pueblo de Inazuma la inmutable eternidad.'),
(9, 'Wriothesley', 5, 'cryo', 'catalizador', 'http://localhost/Wiki/imagenes/personajes/Wriothesley.WEbP', 'El duque del Fuerte Merópide y gobernante oculto del oscuro fondo marino.'),
(10, 'Navia', 5, 'geo', 'mandoble', 'http://localhost/Wiki/imagenes/personajes/navia.WEbP', 'La actual presidenta de Spina di Rosula, una jefa adorable.'),
(11, 'Kaedehara Kazuha', 5, 'anemo', 'espada', 'http://localhost/Wiki/imagenes/personajes/kazuha.WEbP', 'Un samurái errante de Inazuma que actualmente se hospeda en la Flota Crux Meridianam de Liyue.'),
(12, 'Kachina', 4, 'geo', 'lanza', 'http://localhost/Wiki/imagenes/personajes/kachina.WEbP', 'Una joven guerrera de Nanatzcayan agraciada con el nombre antiguo de “Uthabiti”.'),
(13, 'Yoimiya', 5, 'pyro', 'arco', 'http://localhost/Wiki/imagenes/personajes/yoimiya.WEbP', 'La dueña de la tienda Pirotecnia Naganohara y Reina del Festival de Verano.'),
(14, 'Furina', 5, 'hydro', 'espada', 'http://localhost/Wiki/imagenes/personajes/furina.WEbP', 'El foco de atención absoluto del escenario durante los juicios, hasta que la obra termina y el público rompe a aplaudir.'),
(15, 'Chongyun', 4, 'cryo', 'mandoble', 'http://localhost/Wiki/imagenes/personajes/chongyun.WEbP', 'Un joven exorcista procedente de una familia de exorcistas. Hace todo lo que puede para reprimir su propia “positividad congénita”.'),
(16, 'Sethos', 4, 'electro', 'arco', 'http://localhost/Wiki/imagenes/personajes/sethos.WEbP', 'El heredero del Templo del Silencio. Portador de secretos y procedente del desierto.'),
(17, 'Nahida', 5, 'dendro', 'catalizador', 'http://localhost/Wiki/imagenes/personajes/nahida.WEbP', 'Un pajarito enjaulado en el Santuario Surasthana que solo puede contemplar el mundo desde sus sueños.'),
(18, 'Mualani', 5, 'hydro', 'catalizador', 'http://localhost/Wiki/imagenes/personajes/mualani.WEbP', 'Una guía de Natlan muy famosa que lleva una tienda de suministros acuáticos.'),
(24, 'dani', 5, 'pyro', 'mandoble', 'http://localhost/Wiki/imagenes/upload/personajes/text_to_image_v6_poster_01_f038887d26.jpg', 'sdfcgvhb'),
(25, 'ewgrgterg', 4, 'geo', 'lanza', 'http://localhost/Wiki/imagenes/upload/personajes/haruki-kudo-hyperrealistic-cat-drawings-17.jpg', 'efwfwefwfe'),
(26, 'Yo', 5, 'geo', 'arco', 'http://localhost/Wiki/imagenes/upload/personajes/84c37257fc76a22cb5f13759e0e471fe.gif', 'xd iuhdsai');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `equipos_favoritos`
--

CREATE TABLE `equipos_favoritos` (
  `id_equipo` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `nombre_equipo` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `equipos_favoritos`
--

INSERT INTO `equipos_favoritos` (`id_equipo`, `user_id`, `nombre_equipo`) VALUES
(21, 9, 'bebe'),
(22, 9, 'Tu chingame a mi');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `equipo_personajes`
--

CREATE TABLE `equipo_personajes` (
  `id_EP` int(11) NOT NULL,
  `id_equipo_EP` int(11) DEFAULT NULL,
  `id_personaje_EP` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `equipo_personajes`
--

INSERT INTO `equipo_personajes` (`id_EP`, `id_equipo_EP`, `id_personaje_EP`) VALUES
(11, NULL, 12),
(12, NULL, 1),
(58, 21, 8),
(59, 21, 12),
(60, 21, 18),
(61, 21, 24),
(62, 22, 6),
(63, 22, 7),
(64, 22, 9),
(65, 22, 11);

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
(10, 'pepeBotella', 'pepe@gmail.com', 'pancito'),
(11, 'holis', 'asa@gmail.com', '963258');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `directorio_armas`
--
ALTER TABLE `directorio_armas`
  ADD PRIMARY KEY (`id_DA`);

--
-- Indices de la tabla `directorio_personajes`
--
ALTER TABLE `directorio_personajes`
  ADD PRIMARY KEY (`id_DP`);

--
-- Indices de la tabla `equipos_favoritos`
--
ALTER TABLE `equipos_favoritos`
  ADD PRIMARY KEY (`id_equipo`),
  ADD KEY `fk_user_id` (`user_id`);

--
-- Indices de la tabla `equipo_personajes`
--
ALTER TABLE `equipo_personajes`
  ADD PRIMARY KEY (`id_EP`),
  ADD KEY `id_equipo_EP` (`id_equipo_EP`),
  ADD KEY `id_personaje_EP` (`id_personaje_EP`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id_usuarios`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `directorio_armas`
--
ALTER TABLE `directorio_armas`
  MODIFY `id_DA` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT de la tabla `directorio_personajes`
--
ALTER TABLE `directorio_personajes`
  MODIFY `id_DP` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT de la tabla `equipos_favoritos`
--
ALTER TABLE `equipos_favoritos`
  MODIFY `id_equipo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT de la tabla `equipo_personajes`
--
ALTER TABLE `equipo_personajes`
  MODIFY `id_EP` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=66;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id_usuarios` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `equipos_favoritos`
--
ALTER TABLE `equipos_favoritos`
  ADD CONSTRAINT `equipos_favoritos_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `usuarios` (`id_usuarios`) ON DELETE CASCADE,
  ADD CONSTRAINT `fk_user_id` FOREIGN KEY (`user_id`) REFERENCES `usuarios` (`id_usuarios`) ON DELETE CASCADE;

--
-- Filtros para la tabla `equipo_personajes`
--
ALTER TABLE `equipo_personajes`
  ADD CONSTRAINT `equipo_personajes_ibfk_1` FOREIGN KEY (`id_equipo_EP`) REFERENCES `equipos_favoritos` (`id_equipo`) ON DELETE CASCADE,
  ADD CONSTRAINT `equipo_personajes_ibfk_2` FOREIGN KEY (`id_personaje_EP`) REFERENCES `directorio_personajes` (`id_DP`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
