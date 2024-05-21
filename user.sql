-- phpMyAdmin SQL Dump
-- version 4.5.4.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: 21.05.2024 klo 18:27
-- Palvelimen versio: 5.7.11
-- PHP Version: 5.6.18

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `login_db`
--

-- --------------------------------------------------------

--
-- Rakenne taululle `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `name` varchar(128) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password_hash` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Vedos taulusta `user`
--

INSERT INTO `user` (`id`, `name`, `email`, `password_hash`) VALUES
(15, 'Alex', 'notuni2006@outlook.com', '$2y$10$0SaC0T9vN1DnpXITZchF4eMgg8sgptUKCBOWztW79XUS8dhog9xgS'),
(16, 'Sotapingu', 'Lionkingmaster1@outlook.com', '$2y$10$GdCcK78aPHArWnf7HH8YY.V5jLm7n8lndPpa0F1X7AXw0mtoT3PdG'),
(17, 'Alex', 'notuni2006@outlook.com', '$2y$10$aFfitxeQYT0m3dVIrWBB1unxafbBDPphxl.0zkqIkYm3z.99aFGbe'),
(18, 'Testi bot', 'NOTUNI2006@gmail.com', '$2y$10$qkejT.6Q4FZpJlWbzjvwz.b3.Uwu8fC2.PEXrSTz9vXjVWcURx11K'),
(19, 'Alex', 'a@outlook.com', '$2y$10$ymUauAkh.NLCTf/qCGULc.glg.iDzCNhXoupsmz9.RTtPafiwIZLO'),
(20, 'Alex', 'o@outlook.com', '$2y$10$sS7/dj3ewYatoormhc7QeOCqG0Ov/XeNFyU.fqo8wCI/Yu6pJd7ci'),
(21, 'Gamba', 'e@gmail.com', '$2y$10$wK9/1R2JnToVrtNrdWWmQONO4LjZtUtBqEsf07v2tHptrdilz6eea'),
(22, 'Alex', 'Lionkingmaster1@outlook.com', '$2y$10$ysT4xLMlwpY6oJuzWeoMnu/qOl0b.a6uEtv5RN6qbTK8RFEr3gyg2');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
