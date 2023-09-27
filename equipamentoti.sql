-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 27-Set-2023 às 09:05
-- Versão do servidor: 10.4.28-MariaDB
-- versão do PHP: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `equipamentoti`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `emprestimo`
--

CREATE TABLE `emprestimo` (
  `data_devolucao` datetime NOT NULL,
  `data_emprestimo` datetime NOT NULL,
  `descricao` varchar(50) NOT NULL,
  `equipamento` varchar(30) NOT NULL,
  `funcao` varchar(25) NOT NULL,
  `nome_completo` varchar(40) NOT NULL,
  `quantidade` int(3) NOT NULL,
  `ra` int(8) NOT NULL,
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Extraindo dados da tabela `emprestimo`
--

INSERT INTO `emprestimo` (`data_devolucao`, `data_emprestimo`, `descricao`, `equipamento`, `funcao`, `nome_completo`, `quantidade`, `ra`, `id`) VALUES
('0000-00-00 00:00:00', '2023-09-27 03:39:00', '.', 'notebook', 'funcionario', 'efra', 8, 123, 13),
('0000-00-00 00:00:00', '2023-09-27 03:45:00', '.', 'notebook', 'funcionario', 'teste', 5, 10000000, 14),
('0000-00-00 00:00:00', '2023-09-27 03:47:00', '.', 'notebook', 'funcionario', 'efra', 1, 123, 15),
('0000-00-00 00:00:00', '2023-09-27 03:58:00', '.', 'notebook', 'funcionario', 'efra', 1, 123, 16);

-- --------------------------------------------------------

--
-- Estrutura da tabela `estoque`
--

CREATE TABLE `estoque` (
  `equipamento` varchar(20) NOT NULL,
  `quantidade` int(3) NOT NULL,
  `disponivel` int(3) NOT NULL,
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Extraindo dados da tabela `estoque`
--

INSERT INTO `estoque` (`equipamento`, `quantidade`, `disponivel`, `id`) VALUES
('notebook', 40, 23, 2);

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuario`
--

CREATE TABLE `usuario` (
  `nome` varchar(45) NOT NULL,
  `ra` int(8) NOT NULL,
  `funcao` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Extraindo dados da tabela `usuario`
--

INSERT INTO `usuario` (`nome`, `ra`, `funcao`) VALUES
('efra', 123, 'aprendiz'),
('teste', 10000000, 'teste');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `emprestimo`
--
ALTER TABLE `emprestimo`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `estoque`
--
ALTER TABLE `estoque`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `emprestimo`
--
ALTER TABLE `emprestimo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT de tabela `estoque`
--
ALTER TABLE `estoque`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
