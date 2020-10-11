-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 11-Out-2020 às 12:44
-- Versão do servidor: 10.1.38-MariaDB
-- versão do PHP: 7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `anime`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `personagem`
--

CREATE TABLE `personagem` (
  `Id_P` varchar(200) NOT NULL,
  `Nome` varchar(100) NOT NULL,
  `Anime` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `personagem`
--

INSERT INTO `personagem` (`Id_P`, `Nome`, `Anime`) VALUES
('1602324017', 'Hinata Hyuga', 'Naruto'),
('1602326029', 'Momonga Sama', 'Overlord'),
('1602326520', 'Alphonse Elric', 'Full Meta Alchimist'),
('1602332466', 'Glutony', 'Full Meta Alchimist'),
('1602334546', 'Kuroko Tetsuya', 'Kuroko no Basket'),
('1602334630', 'Murasakibara', 'Kuroko no Basket'),
('1602334709', 'Aomine Daik', 'Kuroko no Basket'),
('1602403848', 'Lust', 'Full Metal Alchimist'),
('1602404981', 'Midorima', 'Kuroko no Basket'),
('1602405078', 'Alex', 'Kuroko no Basket'),
('1602405876', 'Alex Armastrong', 'Full Metal Alchimist'),
('1602406003', 'Our Father', 'Full Metal Alchimist'),
('1602406456', 'Naruto Uzumak', 'Naruto'),
('1602407161', 'Zamatsu ', 'Dragon Ball'),
('1602408035', 'Vegeta', 'Dragon Ball'),
('2345678912', 'Sasuke Uchia', 'Naruto');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `personagem`
--
ALTER TABLE `personagem`
  ADD PRIMARY KEY (`Id_P`),
  ADD UNIQUE KEY `Nome` (`Nome`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
