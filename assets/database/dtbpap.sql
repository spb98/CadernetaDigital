-- phpMyAdmin SQL Dump
-- version 4.8.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 20-Maio-2018 às 16:19
-- Versão do servidor: 10.1.31-MariaDB
-- PHP Version: 7.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dtbpap`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `alunos`
--

CREATE TABLE `alunos` (
  `IdAlunos` int(11) NOT NULL,
  `IdEncarregados` int(11) NOT NULL,
  `Nome` text NOT NULL,
  `Morada` text NOT NULL,
  `Localidade` text NOT NULL,
  `CC` text NOT NULL,
  `Sexo` text NOT NULL,
  `DataNascimento` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `alunos`
--

INSERT INTO `alunos` (`IdAlunos`, `IdEncarregados`, `Nome`, `Morada`, `Localidade`, `CC`, `Sexo`, `DataNascimento`) VALUES
(1, 1, 'JoÃ£o Jacinto', 'Casa nÂº27', 'Batalha', '10111213', 'Masculino', '1998-11-01'),
(2, 2, 'Rodrigo Fernandes', 'Casa nÂº12', 'Leiria', '151917821', 'Masculino', '1998-05-11'),
(3, 3, 'Jodelle Ferland', 'Casa do Miguel', 'Batalha', '123456789', 'Feminino', '1994-10-09');

-- --------------------------------------------------------

--
-- Estrutura da tabela `encarregados`
--

CREATE TABLE `encarregados` (
  `IdEncarregado` int(11) NOT NULL,
  `IdAlunos` int(11) NOT NULL,
  `IdUsers` int(11) NOT NULL,
  `Localidade` text COLLATE utf8_unicode_ci NOT NULL,
  `Morada` text COLLATE utf8_unicode_ci NOT NULL,
  `Sexo` text COLLATE utf8_unicode_ci NOT NULL,
  `Nome` text COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Extraindo dados da tabela `encarregados`
--

INSERT INTO `encarregados` (`IdEncarregado`, `IdAlunos`, `IdUsers`, `Localidade`, `Morada`, `Sexo`, `Nome`) VALUES
(1, 12, 23, 'Batalha', 'Rua da Ponte Nova', 'Feminino', 'Jodelle Ferland');

-- --------------------------------------------------------

--
-- Estrutura da tabela `escolas`
--

CREATE TABLE `escolas` (
  `IdEscolas` int(11) NOT NULL,
  `Designacao` text COLLATE utf8_unicode_ci NOT NULL,
  `Localidade` text COLLATE utf8_unicode_ci NOT NULL,
  `Contacto` int(15) NOT NULL,
  `Email` text COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Extraindo dados da tabela `escolas`
--

INSERT INTO `escolas` (`IdEscolas`, `Designacao`, `Localidade`, `Contacto`, `Email`) VALUES
(1, 'Escola BÃ¡sica e SecundÃ¡ria da Batalha', 'hhhhh', 134567890, 'aqui@ali.com');

-- --------------------------------------------------------

--
-- Estrutura da tabela `estabelecimento`
--

CREATE TABLE `estabelecimento` (
  `IdEstablecimento` int(11) NOT NULL,
  `Designacao` text COLLATE utf8_unicode_ci NOT NULL,
  `Localidade` text COLLATE utf8_unicode_ci NOT NULL,
  `Contacto` int(15) NOT NULL,
  `Email` text COLLATE utf8_unicode_ci NOT NULL,
  `Website` text COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Extraindo dados da tabela `estabelecimento`
--

INSERT INTO `estabelecimento` (`IdEstablecimento`, `Designacao`, `Localidade`, `Contacto`, `Email`, `Website`) VALUES
(1, 'Estabelea', 'cimentob', 123456787, 'asss@fasdasd2.comd', 'www.google.bre');

-- --------------------------------------------------------

--
-- Estrutura da tabela `professores`
--

CREATE TABLE `professores` (
  `IdProfessor` int(11) NOT NULL,
  `IdUsers` int(11) NOT NULL,
  `Nome` text COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Extraindo dados da tabela `professores`
--

INSERT INTO `professores` (`IdProfessor`, `IdUsers`, `Nome`) VALUES
(1, 69, 'Jodelle');

-- --------------------------------------------------------

--
-- Estrutura da tabela `recados`
--

CREATE TABLE `recados` (
  `IdRecados` int(11) NOT NULL,
  `IdProfessores` int(11) NOT NULL,
  `IdEscolas` int(11) NOT NULL,
  `IdEncarregados` int(11) NOT NULL,
  `Mensagem` text COLLATE utf8_unicode_ci NOT NULL,
  `DataEnvio` date NOT NULL,
  `DataConfirmacao` date NOT NULL,
  `Lido` varchar(2) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Extraindo dados da tabela `recados`
--

INSERT INTO `recados` (`IdRecados`, `IdProfessores`, `IdEscolas`, `IdEncarregados`, `Mensagem`, `DataEnvio`, `DataConfirmacao`, `Lido`) VALUES
(1, 7, 8, 9, 'Fizeste isto mal', '2018-05-20', '0000-00-00', 's');

-- --------------------------------------------------------

--
-- Estrutura da tabela `turmas`
--

CREATE TABLE `turmas` (
  `IdTurma` int(11) NOT NULL,
  `IdEscolas` int(11) NOT NULL,
  `IdProfessor` int(11) NOT NULL,
  `Ano` int(2) NOT NULL,
  `Turma` text COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Extraindo dados da tabela `turmas`
--

INSERT INTO `turmas` (`IdTurma`, `IdEscolas`, `IdProfessor`, `Ano`, `Turma`) VALUES
(1, 12, 32, 10, 'C');

-- --------------------------------------------------------

--
-- Estrutura da tabela `users`
--

CREATE TABLE `users` (
  `IdUser` int(11) NOT NULL,
  `Username` text COLLATE utf8_unicode_ci NOT NULL,
  `Password` text COLLATE utf8_unicode_ci NOT NULL,
  `Email` text COLLATE utf8_unicode_ci NOT NULL,
  `Nivel` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Extraindo dados da tabela `users`
--

INSERT INTO `users` (`IdUser`, `Username`, `Password`, `Email`, `Nivel`) VALUES
(1, 'admin', '123', 'admin@admin.admin', 0),
(2, 'prof', '123', 'prof@prof.prof', 1),
(3, 'enc', '123', 'enc@enc.enc', 2),
(4, 'professor', '123456789', 'pope@francis.com', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `alunos`
--
ALTER TABLE `alunos`
  ADD PRIMARY KEY (`IdAlunos`);

--
-- Indexes for table `encarregados`
--
ALTER TABLE `encarregados`
  ADD PRIMARY KEY (`IdEncarregado`);

--
-- Indexes for table `escolas`
--
ALTER TABLE `escolas`
  ADD PRIMARY KEY (`IdEscolas`);

--
-- Indexes for table `estabelecimento`
--
ALTER TABLE `estabelecimento`
  ADD PRIMARY KEY (`IdEstablecimento`);

--
-- Indexes for table `professores`
--
ALTER TABLE `professores`
  ADD PRIMARY KEY (`IdProfessor`);

--
-- Indexes for table `recados`
--
ALTER TABLE `recados`
  ADD PRIMARY KEY (`IdRecados`);

--
-- Indexes for table `turmas`
--
ALTER TABLE `turmas`
  ADD PRIMARY KEY (`IdTurma`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`IdUser`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `alunos`
--
ALTER TABLE `alunos`
  MODIFY `IdAlunos` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `encarregados`
--
ALTER TABLE `encarregados`
  MODIFY `IdEncarregado` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `escolas`
--
ALTER TABLE `escolas`
  MODIFY `IdEscolas` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `estabelecimento`
--
ALTER TABLE `estabelecimento`
  MODIFY `IdEstablecimento` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `professores`
--
ALTER TABLE `professores`
  MODIFY `IdProfessor` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `recados`
--
ALTER TABLE `recados`
  MODIFY `IdRecados` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `turmas`
--
ALTER TABLE `turmas`
  MODIFY `IdTurma` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `IdUser` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
