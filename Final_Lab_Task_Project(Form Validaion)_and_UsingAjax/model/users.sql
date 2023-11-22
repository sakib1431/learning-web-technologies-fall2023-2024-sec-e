-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 22, 2023 at 08:34 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pro`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `name` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `mobile` varchar(100) NOT NULL,
  `gender` varchar(100) NOT NULL,
  `id` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`name`, `username`, `email`, `mobile`, `gender`, `id`, `password`) VALUES
('Omar Faruk Sakib', 'sakib11', 'sakibkst38@gmail.com', '01732546538', 'Male', '1111', '$2y$10$UTmWrUkv5HWbZrSotlc26edkK/.fPwwk4WxFPa5hAG9Vzs/ZvUoQG'),
('sakib', 'sakibkst', 'sakibkst3338@gmail.com', '017325465388', 'Male', '2222', '$2y$10$f5/gWrAjC061TLhFiVYtTOIh7TGEGgycdgtZx4sVWZaSbolErBUX6'),
('nice', 'sakibkst', 'sakibkst3338@gmail.com', '01732', 'Male', '5555', '$2y$10$rgBJrwBEOU9x0WNLiYleW.tVBku9LiEJVxkcj9hu6RxH4hfkrUmS2'),
('sakib11', 'sakibkst1', 'sakibkst358@gmail.com', '01732546538', 'Male', '1515', '$2y$10$GK9dF1nI5y.ug16nhap4Nuo.vAc4dB62SxIrv1DZNqxwtK14K0.ba'),
('sakibgg', 'ggg', 'sakibkst328@gmail.com', '0173254653884', 'Male', '9999', '$2y$10$w/.HnY7PlhqfK3z98AGNbO6Qf8OFV4DBqL1eN89zroA0jG7yI5pYa'),
('dsafh', 'dfh', 'sakibkfst38@gmail.com', '111', 'Female', '8888', '$2y$10$JGJ2pWO/UdjJa.5z1tkE2Obiq.eYz0tMIfNPa4Uwc0aEdZn5JKWqG'),
('3333', '333', 'sakibkst38@gmail.com', '33', 'Female', '3333', '$2y$10$cj52LkidVmBmqDSBCX4ngeEswXPPI1m2YmMp8ItWLpORR/MaydcXa'),
('ss', 'ssss', 'sakibksts38@gmail.com', '01732546538', 'Male', '6699', '$2y$10$3RWoBNF7qmikH8vYykitOeMCPh7YrLBwOXKUs1xecJkDAM3rWiF0e'),
(' Faruk Sakib x', 'sakibkst1', 'sakibkst386@gmail.com', '01732546538', 'Male', '0000', '$2y$10$wEpLlstBOu0XDnNK3dgPQeqCVcdRzaYF4umSBeqC6cxz50xD9EVNS'),
('Md Omar Faruk Sakibb', 'ssff1', 'sakibkst382@gmail.com', '01732546537', 'Male', '111555', '@Sakib111'),
('Md Omar Faruk Sakibaa', 'ssff11', 'sakibkst3282@gmail.com', '01732556537', 'Male', '121212', '$2y$10$iN9mRqOSWT/qKawr1IBsJuoJfbL9quyix/sLzZvuDbNsNAL6WtOlq'),
('Md Omar Faruk ', 'ssff1123', 'sakibkst3844@gmail.com', '01732545', 'Male', '112233', '$2y$10$pzVzpxdg6RnFR.zA4PKTJeqebISeU6nQkJzuzb5oXZ3wCa.nqhU1e'),
('Md Omar Faruk Sakiba', 'kst143', 'sakibkst3811@gmail.com', '01732546538', 'Male', '11', '$2y$10$YDzMMC.B/vbYYylUL9u.pOXwo9oBuggTJ5UXRNYr/xdOCAN19SH/y'),
('Maya Hasan', 'samir143', 'samir@gmail.com', '01732546444', 'Female', '420420', '$2y$10$bK5nU0gDdkieGyc4m/xC5.wtAccKODDjKl/o9R4yFxJjpjCkZbmxS'),
('Md Omar Faruk Sakibb', 'ssff1', 'sakibkst38@gmail.com', '01732546537', 'Male', '1115553', '$2y$10$RQvgth1/n2xXz8Zc35tZle3c53yMF0XcHygmDD.im868eVb7yEyA2');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
