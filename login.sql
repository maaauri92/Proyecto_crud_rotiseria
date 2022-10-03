-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 27-09-2022 a las 01:11:47
-- Versión del servidor: 10.4.24-MariaDB
-- Versión de PHP: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `login`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `id_user` int(11) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` char(64) NOT NULL,
  `email` varchar(80) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `active` enum('si','no') DEFAULT 'si'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id_user`, `username`, `password`, `email`, `created_at`, `active`) VALUES
(1, 'maria', '8d969eef6ecad3c29a3a629280e686cf0c3f5d5a86aff3ca12020c923adc6c92', 'mariadb@gmail.com', '2022-07-06 23:05:37', 'si'),
(2, 'joel', '5994471abb01112afcc18159f6cc74b4f511b99806da59b3caf5a9c173cacfc5', 'joel@gmail.com', '2022-07-06 23:24:25', 'si'),
(3, 'pamela', 'd3a50c7f9a396c36afbcb87d0a3245b834f4c30dcfc3e67fdc428409fb264f40', 'pamela@gmail.com', '2022-07-06 23:25:07', 'si'),
(4, 'mario', 'b4728a4cdc82644eb648f4f4a26844e94557d56356b1b615c6698e81f7907601', 'mario@gmail.com', '2022-07-11 21:47:17', 'si'),
(5, 'marta', '1559dc6836c651c9ddfe573694f48c116b9613542a2a7ccbbfde452560a18a1f', 'marta@gmail.com', '2022-07-11 21:49:19', 'si'),
(6, 'claudio', '8cface989a3a91edb14989e82ff3ab67cfd3046906d0cee828f8882a8e137823', 'claudio@gmail.com', '2022-08-03 23:10:08', 'si'),
(7, 'joaquin', '8bb6f507c35bcc84c44a95286219d79c98c9c167c117aca9aece035c4731290b', 'joaquin@gmail.com', '2022-08-08 23:11:28', 'si');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
