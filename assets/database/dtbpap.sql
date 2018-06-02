-- phpMyAdmin SQL Dump
-- version 4.8.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 02-Jun-2018 às 14:51
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
  `IdTurma` int(11) NOT NULL,
  `Nome` text NOT NULL,
  `Morada` text NOT NULL,
  `Localidade` text NOT NULL,
  `CC` text NOT NULL,
  `Sexo` text NOT NULL,
  `DataNascimento` date NOT NULL,
  `foto` longblob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `alunos`
--

INSERT INTO `alunos` (`IdAlunos`, `IdEncarregados`, `IdTurma`, `Nome`, `Morada`, `Localidade`, `CC`, `Sexo`, `DataNascimento`, `foto`) VALUES
(1, 1, 1, 'João Jacinto', 'Casa nº27', 'Batalha', '10111213', 'Masculino', '1998-11-01', 0x89504e470d0a1a0a0000000d49484452000000790000007908030000002a247e7b0000008d504c5445ffffff000000e4e4e40000ffababffe0e0ff8a89ff9998ffe7e6fff7f7fffafaff7170ffc9c9fffcfcffd8d8ffececff3635ff6d6bfff3f3ff4240ffb2b1ff9695ffc3c2ffb7b6ffcbcbcbbfbeffceceffa8a7ff7978ff7d7cff7573ff3331ff4946ff6463ff4d4bff8584ffd4d3ffa3a2ff9290ff5f5dff1816ff9e9dff2a28ff5251ff5856ff3c3bff2321ffb74efe2900000464494441546881ed9b0973ab380c807915241c010321e1e5c2811c1072fcff9fb792ecd069b629c96e3bd9c39a360863fcc9b2ec489da9f5eb5562fdfafdf60af98de437eb15f266c8866cc8866cc8866cc8866cc8866cc8866cc8866cc8866cc886fc7f27fb0700687621e94e82fad0e7f6ac0138cdef0fe652dff588f5590c709eb19aaeb079933e422e4116858484c012ea62ccaa35803848a0b98b762e705c9500c4cbe0922417c8095cc1b1a8601cf693a7d0a281620d687d0207f4c111a69615c125a521cff7c8056cf0730e6761090911aa4deb59d6909b97b0e8276f801d16c1c0f260cdb381c0b2f6aa39014775f3b3192d82c8a7ea3e95c0d73d4273c519e2fcc333377b70f47ac9491bd14520790a7b1eb4baf856d5baa4e79df12bb0f1336097927967b6d2da21b980ad327e85bf25a96167f11764e1f29264e8e805a82009c0b3a0f2d5fcf7ba9fdf8040db56fa3674055f4b44ac4105145247b45e3cffa897ac2407f4d241775f12b966d5455768d94229daf8e36bfe809ecb46ddc1c99a699f1c1e24bb4b90f31b72794bc668afe063a88fc6507b9f92778f91f70085cbddd5c005914f7f22fbe3cef5ea196e683e06e22bb9c6e5b01f9fb333865275cbf56b3592e598d76eaed78d445cb4394aa6008350f7e76814b827e6bca968c7f44758ba065b6f7b479d216e7b0cd1e36ccd446d2eed8a12b2ee6e0ef156ab07159933d859a295a4faeb58f4920fd8ff2a4d43fd29cc71fee459bd3d593218e026ee065cbfab91b238a1a9d73cd92d2c3f523e23cb261bb1386475b575723ed4ac0a164e54be9be5d27136d28147531e6fd57b29edf57d146dd8d111c891336d95ffbf26c355c8ca212992e30c971f65753d7ffd9afd1ee8504023af823e4f4fa49cf8d8ca496df21bca67e49dad64a178b69debef9930b7ed6dd74decf8d814b6263b8beb7becf4a96d5f03c2cdecec66c6ffb8ef674336644336e4ff2cd9cbb6f71e45d96d21f1ad6457e7189fc8fe26edf866b290c37b8f863f4bfe427e822c5c4ce455261fbab8982e1703d8442da97e7225a7c275fb17fc4172095ca1169e5ee78413bf9cb3ad2ca64c25edc839ddb7d9d7033e4c0ea09193c911d69ecab73dcaf604c421e18e874309e754933390fbdd5ec2f4bbc8153ad4abb15e5099fe1c33e92595012924546e0da8ce6372c91968747f073c4be6fc798b89bdae3106b0e22cd8d639fd65dd9179bf8bbe957e98cc5964184357dd8ca1a2cb061a9d716af2b6013918f507f97364c475e45ad5962b8895c86b848961d5403308ef0ef62459f9b4bd5cc939482e1207f0eed66e3f7ba3f2f68f137f9dcc01b3c08b22bb701471e3508d31a127a3cb44939335dda7f4f78def21c322f467543e287289e5dd940a1b5cfa2cf41d49f506935790797eba81bb67ecb3e480a3c8d627c981f15cd8382ac2a8b49d10d9c57bfca9bc9e211f26fbd322d8700095b6e5252b1ad82d02dccbe92e504facbca668482741b0bcada2fe06b96f0a4f8b21df958d7c15f907c4900dd9900dd9900dd9900dd9900dd9900dd990ffcde4d7fdefe0abe40fb02147f7477e738e0000000049454e44ae426082),
(2, 2, 1, 'Rodrigo Fernandes', 'Casa nº12', 'Leiria', '151917821', 'Masculino', '1998-05-11', 0x89504e470d0a1a0a0000000d49484452000000790000007908030000002a247e7b0000008d504c5445ffffff000000e4e4e40000ffababffe0e0ff8a89ff9998ffe7e6fff7f7fffafaff7170ffc9c9fffcfcffd8d8ffececff3635ff6d6bfff3f3ff4240ffb2b1ff9695ffc3c2ffb7b6ffcbcbcbbfbeffceceffa8a7ff7978ff7d7cff7573ff3331ff4946ff6463ff4d4bff8584ffd4d3ffa3a2ff9290ff5f5dff1816ff9e9dff2a28ff5251ff5856ff3c3bff2321ffb74efe2900000464494441546881ed9b0973ab380c807915241c010321e1e5c2811c1072fcff9fb792ecd069b629c96e3bd9c39a360863fcc9b2ec489da9f5eb5562fdfafdf60af98de437eb15f266c8866cc8866cc8866cc8866cc8866cc8866cc8866cc8866cc886fc7f27fb0700687621e94e82fad0e7f6ac0138cdef0fe652dff588f5590c709eb19aaeb079933e422e4116858484c012ea62ccaa35803848a0b98b762e705c9500c4cbe0922417c8095cc1b1a8601cf693a7d0a281620d687d0207f4c111a69615c125a521cff7c8056cf0730e6761090911aa4deb59d6909b97b0e8276f801d16c1c0f260cdb381c0b2f6aa39014775f3b3192d82c8a7ea3e95c0d73d4273c519e2fcc333377b70f47ac9491bd14520790a7b1eb4baf856d5baa4e79df12bb0f1336097927967b6d2da21b980ad327e85bf25a96167f11764e1f29264e8e805a82009c0b3a0f2d5fcf7ba9fdf8040db56fa3674055f4b44ac4105145247b45e3cffa897ac2407f4d241775f12b966d5455768d94229daf8e36bfe809ecb46ddc1c99a699f1c1e24bb4b90f31b72794bc668afe063a88fc6507b9f92778f91f70085cbddd5c005914f7f22fbe3cef5ea196e683e06e22bb9c6e5b01f9fb333865275cbf56b3592e598d76eaed78d445cb4394aa6008350f7e76814b827e6bca968c7f44758ba065b6f7b479d216e7b0cd1e36ccd446d2eed8a12b2ee6e0ef156ab07159933d859a295a4faeb58f4920fd8ff2a4d43fd29cc71fee459bd3d593218e026ee065cbfab91b238a1a9d73cd92d2c3f523e23cb261bb1386475b575723ed4ac0a164e54be9be5d27136d28147531e6fd57b29edf57d146dd8d111c891336d95ffbf26c355c8ca212992e30c971f65753d7ffd9afd1ee8504023af823e4f4fa49cf8d8ca496df21bca67e49dad64a178b69debef9930b7ed6dd74decf8d814b6263b8beb7becf4a96d5f03c2cdecec66c6ffb8ef674336644336e4ff2cd9cbb6f71e45d96d21f1ad6457e7189fc8fe26edf866b290c37b8f863f4bfe427e822c5c4ce455261fbab8982e1703d8442da97e7225a7c275fb17fc4172095ca1169e5ee78413bf9cb3ad2ca64c25edc839ddb7d9d7033e4c0ea09193c911d69ecab73dcaf604c421e18e874309e754933390fbdd5ec2f4bbc8153ad4abb15e5099fe1c33e92595012924546e0da8ce6372c91968747f073c4be6fc798b89bdae3106b0e22cd8d639fd65dd9179bf8bbe957e98cc5964184357dd8ca1a2cb061a9d716af2b6013918f507f97364c475e45ad5962b8895c86b848961d5403308ef0ef62459f9b4bd5cc939482e1207f0eed66e3f7ba3f2f68f137f9dcc01b3c08b22bb701471e3508d31a127a3cb44939335dda7f4f78def21c322f467543e287289e5dd940a1b5cfa2cf41d49f506935790797eba81bb67ecb3e480a3c8d627c981f15cd8382ac2a8b49d10d9c57bfca9bc9e211f26fbd322d8700095b6e5252b1ad82d02dccbe92e504facbca668482741b0bcada2fe06b96f0a4f8b21df958d7c15f907c4900dd9900dd9900dd9900dd9900dd9900dd990ffcde4d7fdefe0abe40fb02147f7477e738e0000000049454e44ae426082),
(3, 3, 2, 'Jodelle Ferland', 'Casa do Miguel', 'Batalha', '123456789', 'Feminino', '1994-10-09', 0x89504e470d0a1a0a0000000d49484452000000790000007908030000002a247e7b0000008d504c5445ffffff000000e4e4e40000ffababffe0e0ff8a89ff9998ffe7e6fff7f7fffafaff7170ffc9c9fffcfcffd8d8ffececff3635ff6d6bfff3f3ff4240ffb2b1ff9695ffc3c2ffb7b6ffcbcbcbbfbeffceceffa8a7ff7978ff7d7cff7573ff3331ff4946ff6463ff4d4bff8584ffd4d3ffa3a2ff9290ff5f5dff1816ff9e9dff2a28ff5251ff5856ff3c3bff2321ffb74efe2900000464494441546881ed9b0973ab380c807915241c010321e1e5c2811c1072fcff9fb792ecd069b629c96e3bd9c39a360863fcc9b2ec489da9f5eb5562fdfafdf60af98de437eb15f266c8866cc8866cc8866cc8866cc8866cc8866cc8866cc8866cc886fc7f27fb0700687621e94e82fad0e7f6ac0138cdef0fe652dff588f5590c709eb19aaeb079933e422e4116858484c012ea62ccaa35803848a0b98b762e705c9500c4cbe0922417c8095cc1b1a8601cf693a7d0a281620d687d0207f4c111a69615c125a521cff7c8056cf0730e6761090911aa4deb59d6909b97b0e8276f801d16c1c0f260cdb381c0b2f6aa39014775f3b3192d82c8a7ea3e95c0d73d4273c519e2fcc333377b70f47ac9491bd14520790a7b1eb4baf856d5baa4e79df12bb0f1336097927967b6d2da21b980ad327e85bf25a96167f11764e1f29264e8e805a82009c0b3a0f2d5fcf7ba9fdf8040db56fa3674055f4b44ac4105145247b45e3cffa897ac2407f4d241775f12b966d5455768d94229daf8e36bfe809ecb46ddc1c99a699f1c1e24bb4b90f31b72794bc668afe063a88fc6507b9f92778f91f70085cbddd5c005914f7f22fbe3cef5ea196e683e06e22bb9c6e5b01f9fb333865275cbf56b3592e598d76eaed78d445cb4394aa6008350f7e76814b827e6bca968c7f44758ba065b6f7b479d216e7b0cd1e36ccd446d2eed8a12b2ee6e0ef156ab07159933d859a295a4faeb58f4920fd8ff2a4d43fd29cc71fee459bd3d593218e026ee065cbfab91b238a1a9d73cd92d2c3f523e23cb261bb1386475b575723ed4ac0a164e54be9be5d27136d28147531e6fd57b29edf57d146dd8d111c891336d95ffbf26c355c8ca212992e30c971f65753d7ffd9afd1ee8504023af823e4f4fa49cf8d8ca496df21bca67e49dad64a178b69debef9930b7ed6dd74decf8d814b6263b8beb7becf4a96d5f03c2cdecec66c6ffb8ef674336644336e4ff2cd9cbb6f71e45d96d21f1ad6457e7189fc8fe26edf866b290c37b8f863f4bfe427e822c5c4ce455261fbab8982e1703d8442da97e7225a7c275fb17fc4172095ca1169e5ee78413bf9cb3ad2ca64c25edc839ddb7d9d7033e4c0ea09193c911d69ecab73dcaf604c421e18e874309e754933390fbdd5ec2f4bbc8153ad4abb15e5099fe1c33e92595012924546e0da8ce6372c91968747f073c4be6fc798b89bdae3106b0e22cd8d639fd65dd9179bf8bbe957e98cc5964184357dd8ca1a2cb061a9d716af2b6013918f507f97364c475e45ad5962b8895c86b848961d5403308ef0ef62459f9b4bd5cc939482e1207f0eed66e3f7ba3f2f68f137f9dcc01b3c08b22bb701471e3508d31a127a3cb44939335dda7f4f78def21c322f467543e287289e5dd940a1b5cfa2cf41d49f506935790797eba81bb67ecb3e480a3c8d627c981f15cd8382ac2a8b49d10d9c57bfca9bc9e211f26fbd322d8700095b6e5252b1ad82d02dccbe92e504facbca668482741b0bcada2fe06b96f0a4f8b21df958d7c15f907c4900dd9900dd9900dd9900dd9900dd9900dd990ffcde4d7fdefe0abe40fb02147f7477e738e0000000049454e44ae426082);

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
(1, 1, 3, 'Batalha', 'Rua da Ponte Nova', 'Masculino', 'João Jacinto'),
(2, 2, 5, 'Leiria', 'Rua da Ponte Nova', 'Masculino', 'Rodrigo Fernandes'),
(3, 3, 6, 'Porto de Mós', 'Rua da Ponte Nova', 'Feminino', 'Ana Sobrinho');

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
(1, 'Escola Básica e Secundária da Batalha', 'Batalha', 244769290, 'es3batalha@gmail.com'),
(2, 'Escola Secundária de Porto de Mós', 'Porto de Mós', 244499170, 'secretaria.aepmos@gmail.com');

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
(1, 2, 'Samuel'),
(2, 4, 'Rodrigo');

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
(1, 1, 1, 2, 'O seu educando comportou-se mal na sala de aula.', '2018-05-20', '0000-00-00', 'n'),
(2, 1, 1, 1, 'O seu educando falou mal a um colega na sala de aula.', '2018-05-20', '0000-00-00', 'n');

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
(1, 1, 1, 1, 'C'),
(2, 1, 1, 2, 'A'),
(3, 1, 2, 3, 'A'),
(4, 1, 2, 4, 'B'),
(5, 2, 1, 1, 'D');

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
(4, 'professor', '123', 'pope@francis.com', 1),
(5, 'enc2', '123', 'enc2@enc.enc', 2),
(6, 'enc3', '123', 'enc3@enc.enc', 2);

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
  MODIFY `IdEncarregado` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `escolas`
--
ALTER TABLE `escolas`
  MODIFY `IdEscolas` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `estabelecimento`
--
ALTER TABLE `estabelecimento`
  MODIFY `IdEstablecimento` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `professores`
--
ALTER TABLE `professores`
  MODIFY `IdProfessor` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `recados`
--
ALTER TABLE `recados`
  MODIFY `IdRecados` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `turmas`
--
ALTER TABLE `turmas`
  MODIFY `IdTurma` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `IdUser` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
