-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 21/11/2023 às 03:16
-- Versão do servidor: 10.4.28-MariaDB
-- Versão do PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `physcore_db`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `usuarios`
--

CREATE TABLE `usuarios` (
  `tipo_usuario` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `usuarios`
--

INSERT INTO `usuarios` (`tipo_usuario`, `username`, `password`, `email`) VALUES
('Aluno', 'Tayse Santos', '$2y$10$8tjNc59dsjsY1OwZ01mFAeQPjvU94PcmNOzqEhA20D0/mP8nV3HPO', 'silvasantostayse@gmail.com'),
('Professor', 'Lucas Alencar ', '$2y$10$ZhNaMs6cFxjycJPf3tIcQ.OObvJ3a1mk.wQDyes7EBpVR60uYCfbW', 'lucasa.miranda@hotmail.com'),
('Professor', 'Lucas Alencar ', '$2y$10$NlGJ./gh82x2HZYr2d7YwORBMl9PuAHY6xI0lwsR6vbFeM2DaUY0u', 'lucasa.miranda@hotmail.com'),
('Aluno', 'Cida Miranda', '$2y$10$v1daBSrs5mI1dIvBTr8IP.0R6mZqaWPOmbeIHkxhxrleBtB1RN8ZW', 'cida@gmail.com'),
('Aluno', 'Cida Miranda', '$2y$10$D2fjNGZKEdtL9gxSW3lNUeC.VJGdmAMMfFaR5CXt5I8ujygm5Ck1i', 'cida@gmail.com'),
('Aluno', 'Cida Miranda', '$2y$10$Dx7SHNMSO5Xds2fxERU0fuVNgd2v2RWFcU3I5CZ95Brne4nPFdT1a', 'cida@gmail.com'),
('Aluno', 'Cida Alencar', '$2y$10$fao3pz8D1duNB2H62UFdqeWmJYooZEoIbBnxyGA//f/2n91IqAK6m', 'cida@gmail.com'),
('Aluno', 'Cida Miranda', '$2y$10$M1kE5Ung7mFc4eGuZem2qeUWSM3uzvsO9LvopB.P1Pa7f5JE6Q8sm', 'cida@gmail.com');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
