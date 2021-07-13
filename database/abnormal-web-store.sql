-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 13, 2021 at 10:47 AM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 8.0.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `abnormal-web-store`
--

-- --------------------------------------------------------

--
-- Table structure for table `contactar-registro`
--

CREATE TABLE `contactar-registro` (
  `id` int(9) NOT NULL,
  `nombre` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `asunto` varchar(30) NOT NULL,
  `mensaje` varchar(200) NOT NULL,
  `fecha` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contactar-registro`
--

INSERT INTO `contactar-registro` (`id`, `nombre`, `email`, `asunto`, `mensaje`, `fecha`) VALUES
(56, 'oM', 'DSDS@FDFASF.COM', 'das', 'dasd', '12/07/21'),
(57, 'jkp', 'DSDS@FDFASF.COM', 'dsadasdas', 'dsds', '12/07/21'),
(58, 'jkp', 'DSDS@FDFASF.COM', 'rererdsds', 'dsdsd', '12/07/21'),
(59, 'jkp', 'DSDS@FDFASF.COM', 'rerer', 'ds', '12/07/21'),
(60, 'jkp', 'DSDS@FDFASF.COM', 'rerer', 'dsdas', '13/07/21');

-- --------------------------------------------------------

--
-- Table structure for table `productos`
--

CREATE TABLE `productos` (
  `id` int(9) NOT NULL,
  `imagen` varchar(50) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `coleccion` varchar(30) NOT NULL,
  `descripcion` varchar(300) NOT NULL,
  `precio` decimal(4,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `productos`
--

INSERT INTO `productos` (`id`, `imagen`, `nombre`, `coleccion`, `descripcion`, `precio`) VALUES
(1, 'hombre-ab-camiseta-negra', 'Camiseta Hombre', 'Abnormal series', 'De la colección Abnormal, es una camiseta para hombres de alta calidad cumpliendo los altos estándares de la industria, con un diseño de nuestro logo original, para así tener una experiencia única y diferente para experimentar junto con tus amigos y familiares.', '29.99'),
(2, 'hombre-ab-camisetalarga-negra', 'Camiseta manga larga Hombre', 'Abnormal series', 'De la colección Abnormal, es una camiseta de mangas largas para hombres de alta calidad cumpliendo los altos estándares de la industria, con un diseño de nuestro logo original, para así tener una experiencia única y diferente para experimentar junto con tus amigos y familiares.', '49.99'),
(3, 'mujer-ab-camiseta-negra', 'Camiseta Mujer', 'Abnormal series', 'De la colección Abnormal, es una camiseta para mujeres de alta calidad cumpliendo los altos estándares de la industria, con un diseño de nuestro logo original, para así tener una experiencia única y diferente para experimentar junto con tus amigos y familiares.', '29.99'),
(4, 'mujer-ab-camisetalarga-negra', 'Camiseta manga larga Mujer', 'Abnormal series', 'De la colección Abnormal, es una camiseta de mangas largas para mujeres de alta calidad cumpliendo los altos estándares de la industria, con un diseño de nuestro logo original, para así tener una experiencia única y diferente para experimentar junto con tus amigos y familiares.', '49.99'),
(6, 'hombre-trial-camiseta-negra', 'Camiseta Hombre', 'Trial', 'De la colección Trial, es una camiseta para hombres de alta calidad cumpliendo los altos estándares de la industria, con un diseño de nuestro logo original, para así tener una experiencia única y diferente para experimentar junto con tus amigos y familiares', '29.99'),
(7, 'hombre-trial-camisetalarga-negra', 'Camiseta manga larga Hombre', 'Trial', 'De la colección Trial, es una camiseta de mangas largas para hombres de alta calidad cumpliendo los altos estándares de la industria, con un diseño de nuestro logo original, para así tener una experiencia única y diferente para experimentar junto con tus amigos y familiares.\r\n\r\n', '49.99'),
(8, 'mujer-trial-camiseta-negra', 'Camiseta Mujer', 'Trial', 'De la colección Abnormal, es una camiseta para mujeres de alta calidad cumpliendo los altos estándares de la industria, con un diseño de nuestro logo original, para así tener una experiencia única y diferente para experimentar junto con tus amigos y familiares.', '29.99'),
(9, 'mujer-trial-camisetalarga-negra', 'Camiseta manga larga Mujer', 'Trial', 'De la colección Trial, es una camiseta de mangas largas para mujeres de alta calidad cumpliendo los altos estándares de la industria, con un diseño de nuestro logo original, para así tener una experiencia única y diferente para experimentar junto con tus amigos y familiares.', '49.99'),
(10, 'hombre-cycle-camiseta-negra', 'Camiseta Hombre ', 'Cycle', 'De la colección Cycle, es una camiseta para hombres de alta calidad cumpliendo los altos estándares de la industria, con un diseño de nuestro logo original, para así tener una experiencia única y diferente para experimentar junto con tus amigos y familiares', '29.99'),
(11, 'hombre-cycle-camisetalarga-negra', 'Camiseta manga larga Hombre', 'Cycle', 'De la colección Cycle, es una camiseta de mangas largas para mujeres de alta calidad cumpliendo los altos estándares de la industria, con un diseño de nuestro logo original, para así tener una experiencia única y diferente para experimentar junto con tus amigos y familiares.', '49.99'),
(12, 'mujer-cycle-camiseta-negra', 'Camisa Mujer', 'Cycle', 'De la colección Cycle, es una camiseta para mujeres de alta calidad cumpliendo los altos estándares de la industria, con un diseño de nuestro logo original, para así tener una experiencia única y diferente para experimentar junto con tus amigos y familiares.', '29.99'),
(13, 'mujer-cycle-camisetalarga-negra', 'Camiseta mangas largas Mujer', 'Cycle', 'De la colección Cycle, es una camiseta de mangas largas para mujeres de alta calidad cumpliendo los altos estándares de la industria, con un diseño de nuestro logo original, para así tener una experiencia única y diferente para experimentar junto con tus amigos y familiares.', '49.99'),
(14, 'unisex-ab-sudaderacapucha-negra', 'Sudadera con capucha Unisex', 'Abnormal Series', 'De la colección Abnormal, es una sudadera con capucha para mujeres de alta calidad cumpliendo los altos estándares de la industria, con un diseño de nuestro logo original, para así tener una experiencia única y diferente para experimentar junto con tus amigos y familiares.', '59.99'),
(15, 'unisex-cycle-sudaderacapucha-negra', 'Sudadera con capucha Unisex', 'Cycle', 'De la colección Cycle, es una sudadera con capucha para mujeres de alta calidad cumpliendo los altos estándares de la industria, con un diseño de nuestro logo original, para así tener una experiencia única y diferente para experimentar junto con tus amigos y familiares.', '59.99'),
(16, 'unisex-trial-sudaderacapucha-negra', 'Sudadera con capucha Unisex', 'Trial', 'De la colección Trial, es una sudadera con capucha para mujeres de alta calidad cumpliendo los altos estándares de la industria, con un diseño de nuestro logo original, para así tener una experiencia única y diferente para experimentar junto con tus amigos y familiares.', '59.99'),
(17, 'unisex-ab-sudaderacuelloalto-negra', 'Sudadera con cuello alto Unisex', 'Abnormal series', 'De la colección Abnormal, es una sudadera con cuello alto para mujeres como hombres de alta calidad cumpliendo los altos estándares de la industria, con un diseño de nuestro logo original, para así tener una experiencia única y diferente para experimentar junto con tus amigos y familiares.', '44.99'),
(18, 'unisex-trial-sudaderacuelloalto-negra', 'Sudadera con cuello alto Unisex', 'Trial', 'De la colección Trial, es una sudadera con cuello alto para mujeres como hombres de alta calidad cumpliendo los altos estándares de la industria, con un diseño de nuestro logo original, para así tener una experiencia única y diferente para experimentar junto con tus amigos y familiares.', '45.99'),
(19, 'unisex-cycle-sudaderacuelloalto-negra', 'Sudadera con cuello alto Unisex', 'Cycle', 'De la colección Trial, es una sudadera con cuello alto para mujeres como hombres de alta calidad cumpliendo los altos estándares de la industria, con un diseño de nuestro logo original, para así tener una experiencia única y diferente para experimentar junto con tus amigos y familiares.', '45.99'),
(20, 'unisex-ab-gorropescador-negra', 'Gorro de pescador', 'Abnormal series', 'De la colección Abnormal, es un gorro de pescar para mujeres como hombres de alta calidad cumpliendo los altos estándares de la industria, con un diseño de nuestro logo original, para así tener una experiencia única y diferente para experimentar junto con tus amigos y familiares.', '19.99'),
(21, 'unisex-trial-gorropescador-negra', 'Gorro de pescador', 'Trial', 'De la colección Trial, es un gorro de pescar para mujeres como hombres de alta calidad cumpliendo los altos estándares de la industria, con un diseño de nuestro logo original, para así tener una experiencia única y diferente para experimentar junto con tus amigos y familiares.', '19.99'),
(22, 'unisex-cycle-gorropescador-negra', 'Gorro de pescador', 'Cycle', 'De la colección Cycle, es un gorro de pescar para mujeres como hombres de alta calidad cumpliendo los altos estándares de la industria, con un diseño de nuestro logo original, para así tener una experiencia única y diferente para experimentar junto con tus amigos y familiares.', '19.99'),
(23, 'unisex-ab-pantalonesdeporte-negra', 'Pantalón de deporte Unisex', 'Abnormal series', 'De la colección Abnormal, es un pantalón de deporte para mujeres como hombres de alta calidad cumpliendo los altos estándares de la industria, con un diseño de nuestro logo original, para así tener una experiencia única y diferente para experimentar junto con tus amigos y familiares.', '29.99'),
(24, 'unisex-trial-pantalonesdeporte-negra', 'Pantalón de deporte Unisex', 'Trial', 'De la colección Trial, es un pantalón de deporte para mujeres como hombres de alta calidad cumpliendo los altos estándares de la industria, con un diseño de nuestro logo original, para así tener una experiencia única y diferente para experimentar junto con tus amigos y familiares.', '29.99'),
(25, 'unisex-cycle-pantalonesdeporte-negra', 'Pantalón de deporte Unisex', 'Cycle', 'De la colección cycle, es un pantalón de deporte para mujeres como hombres de alta calidad cumpliendo los altos estándares de la industria, con un diseño de nuestro logo original, para así tener una experiencia única y diferente para experimentar junto con tus amigos y familiares.', '29.99'),
(26, 'unisex-ab-pantalonesdeportecorto-negra', 'Pantalón de deporte cortos Unisex', 'Próximamente ', 'De la colección Abnormal, es un pantalón de deporte corto para mujeres como hombres de alta calidad cumpliendo los altos estándares de la industria, con un diseño de nuestro logo original, para así tener una experiencia única y diferente para experimentar junto con tus amigos y familiares.', '19.99'),
(27, 'unisex-ab-gorrosnapback-negra', 'Gorro Snapback', 'Próximamente ', 'De la colección Abnormal es un gorro snapback para mujeres como hombres de alta calidad cumpliendo los altos estándares de la industria, con un diseño de nuestro logo original, para así tener una experiencia única y diferente para experimentar junto con tus amigos y familiares.', '19.99'),
(28, 'unisex-ab-mochila-negra', 'Mochila', 'Próximamente ', 'De la colección Abnormal, es una mochila para mujeres como hombres de alta calidad cumpliendo los altos estándares de la industria, con un diseño de nuestro logo original, para así tener una experiencia única y diferente para experimentar junto con tus amigos y familiares.', '19.99'),
(29, 'hombre-ab-chaquetauni-negra', 'Cazadora universitaria Hombre', 'Próximamente', 'De la colección Abnormal, es una Cazadora universitaria para hombres de alta calidad cumpliendo los altos estándares de la industria, con un diseño de nuestro logo original, para así tener una experiencia única y diferente para experimentar junto con tus amigos y familiares.', '59.99'),
(30, 'unisex-ab-mochilasaco-negra', 'Mochila de Saco', 'Próximamente ', 'De la colección Abnormal, es una mochila de saco para mujeres como hombres de alta calidad cumpliendo los altos estándares de la industria, con un diseño de nuestro logo original, para así tener una experiencia única y diferente para experimentar junto con tus amigos y familiares.', '19.99');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `contactar-registro`
--
ALTER TABLE `contactar-registro`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `productos`
--
ALTER TABLE `productos`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `contactar-registro`
--
ALTER TABLE `contactar-registro`
  MODIFY `id` int(9) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=61;

--
-- AUTO_INCREMENT for table `productos`
--
ALTER TABLE `productos`
  MODIFY `id` int(9) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
