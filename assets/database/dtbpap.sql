-- phpMyAdmin SQL Dump
-- version 4.8.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 20-Jun-2018 às 14:26
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
-- Database: `123`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `alunos`
--

CREATE TABLE `alunos` (
  `IdAluno` int(11) NOT NULL,
  `IdEncarregado` int(11) NOT NULL,
  `IdTurma` int(11) NOT NULL,
  `Nome` text NOT NULL,
  `Morada` longtext NOT NULL,
  `Localidade` longtext NOT NULL,
  `CC` longtext NOT NULL,
  `Sexo` longtext NOT NULL,
  `DataNascimento` date NOT NULL,
  `Foto` longblob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `alunos`
--

INSERT INTO `alunos` (`IdAluno`, `IdEncarregado`, `IdTurma`, `Nome`, `Morada`, `Localidade`, `CC`, `Sexo`, `DataNascimento`, `Foto`) VALUES
(1, 1, 1, 'JoÃ£o Jacinto', 'Casa nÂº27', 'Batalha', '10111213', 'Masculino', '1998-11-01', ''),
(2, 2, 1, 'Rodrigo Fernandes', 'Casa nº12', 'Leiria', '151917821', 'Masculino', '1998-05-11', 0x89504e470d0a1a0a0000000d49484452000000790000007908030000002a247e7b0000008d504c5445ffffff000000e4e4e40000ffababffe0e0ff8a89ff9998ffe7e6fff7f7fffafaff7170ffc9c9fffcfcffd8d8ffececff3635ff6d6bfff3f3ff4240ffb2b1ff9695ffc3c2ffb7b6ffcbcbcbbfbeffceceffa8a7ff7978ff7d7cff7573ff3331ff4946ff6463ff4d4bff8584ffd4d3ffa3a2ff9290ff5f5dff1816ff9e9dff2a28ff5251ff5856ff3c3bff2321ffb74efe2900000464494441546881ed9b0973ab380c807915241c010321e1e5c2811c1072fcff9fb792ecd069b629c96e3bd9c39a360863fcc9b2ec489da9f5eb5562fdfafdf60af98de437eb15f266c8866cc8866cc8866cc8866cc8866cc8866cc8866cc8866cc886fc7f27fb0700687621e94e82fad0e7f6ac0138cdef0fe652dff588f5590c709eb19aaeb079933e422e4116858484c012ea62ccaa35803848a0b98b762e705c9500c4cbe0922417c8095cc1b1a8601cf693a7d0a281620d687d0207f4c111a69615c125a521cff7c8056cf0730e6761090911aa4deb59d6909b97b0e8276f801d16c1c0f260cdb381c0b2f6aa39014775f3b3192d82c8a7ea3e95c0d73d4273c519e2fcc333377b70f47ac9491bd14520790a7b1eb4baf856d5baa4e79df12bb0f1336097927967b6d2da21b980ad327e85bf25a96167f11764e1f29264e8e805a82009c0b3a0f2d5fcf7ba9fdf8040db56fa3674055f4b44ac4105145247b45e3cffa897ac2407f4d241775f12b966d5455768d94229daf8e36bfe809ecb46ddc1c99a699f1c1e24bb4b90f31b72794bc668afe063a88fc6507b9f92778f91f70085cbddd5c005914f7f22fbe3cef5ea196e683e06e22bb9c6e5b01f9fb333865275cbf56b3592e598d76eaed78d445cb4394aa6008350f7e76814b827e6bca968c7f44758ba065b6f7b479d216e7b0cd1e36ccd446d2eed8a12b2ee6e0ef156ab07159933d859a295a4faeb58f4920fd8ff2a4d43fd29cc71fee459bd3d593218e026ee065cbfab91b238a1a9d73cd92d2c3f523e23cb261bb1386475b575723ed4ac0a164e54be9be5d27136d28147531e6fd57b29edf57d146dd8d111c891336d95ffbf26c355c8ca212992e30c971f65753d7ffd9afd1ee8504023af823e4f4fa49cf8d8ca496df21bca67e49dad64a178b69debef9930b7ed6dd74decf8d814b6263b8beb7becf4a96d5f03c2cdecec66c6ffb8ef674336644336e4ff2cd9cbb6f71e45d96d21f1ad6457e7189fc8fe26edf866b290c37b8f863f4bfe427e822c5c4ce455261fbab8982e1703d8442da97e7225a7c275fb17fc4172095ca1169e5ee78413bf9cb3ad2ca64c25edc839ddb7d9d7033e4c0ea09193c911d69ecab73dcaf604c421e18e874309e754933390fbdd5ec2f4bbc8153ad4abb15e5099fe1c33e92595012924546e0da8ce6372c91968747f073c4be6fc798b89bdae3106b0e22cd8d639fd65dd9179bf8bbe957e98cc5964184357dd8ca1a2cb061a9d716af2b6013918f507f97364c475e45ad5962b8895c86b848961d5403308ef0ef62459f9b4bd5cc939482e1207f0eed66e3f7ba3f2f68f137f9dcc01b3c08b22bb701471e3508d31a127a3cb44939335dda7f4f78def21c322f467543e287289e5dd940a1b5cfa2cf41d49f506935790797eba81bb67ecb3e480a3c8d627c981f15cd8382ac2a8b49d10d9c57bfca9bc9e211f26fbd322d8700095b6e5252b1ad82d02dccbe92e504facbca668482741b0bcada2fe06b96f0a4f8b21df958d7c15f907c4900dd9900dd9900dd9900dd9900dd9900dd990ffcde4d7fdefe0abe40fb02147f7477e738e0000000049454e44ae426082),
(3, 3, 2, 'Jodelle Ferland', 'Casa do Miguel', 'Batalha', '123456789', 'Feminino', '1994-10-09', 0x89504e470d0a1a0a0000000d49484452000000790000007908030000002a247e7b0000008d504c5445ffffff000000e4e4e40000ffababffe0e0ff8a89ff9998ffe7e6fff7f7fffafaff7170ffc9c9fffcfcffd8d8ffececff3635ff6d6bfff3f3ff4240ffb2b1ff9695ffc3c2ffb7b6ffcbcbcbbfbeffceceffa8a7ff7978ff7d7cff7573ff3331ff4946ff6463ff4d4bff8584ffd4d3ffa3a2ff9290ff5f5dff1816ff9e9dff2a28ff5251ff5856ff3c3bff2321ffb74efe2900000464494441546881ed9b0973ab380c807915241c010321e1e5c2811c1072fcff9fb792ecd069b629c96e3bd9c39a360863fcc9b2ec489da9f5eb5562fdfafdf60af98de437eb15f266c8866cc8866cc8866cc8866cc8866cc8866cc8866cc8866cc886fc7f27fb0700687621e94e82fad0e7f6ac0138cdef0fe652dff588f5590c709eb19aaeb079933e422e4116858484c012ea62ccaa35803848a0b98b762e705c9500c4cbe0922417c8095cc1b1a8601cf693a7d0a281620d687d0207f4c111a69615c125a521cff7c8056cf0730e6761090911aa4deb59d6909b97b0e8276f801d16c1c0f260cdb381c0b2f6aa39014775f3b3192d82c8a7ea3e95c0d73d4273c519e2fcc333377b70f47ac9491bd14520790a7b1eb4baf856d5baa4e79df12bb0f1336097927967b6d2da21b980ad327e85bf25a96167f11764e1f29264e8e805a82009c0b3a0f2d5fcf7ba9fdf8040db56fa3674055f4b44ac4105145247b45e3cffa897ac2407f4d241775f12b966d5455768d94229daf8e36bfe809ecb46ddc1c99a699f1c1e24bb4b90f31b72794bc668afe063a88fc6507b9f92778f91f70085cbddd5c005914f7f22fbe3cef5ea196e683e06e22bb9c6e5b01f9fb333865275cbf56b3592e598d76eaed78d445cb4394aa6008350f7e76814b827e6bca968c7f44758ba065b6f7b479d216e7b0cd1e36ccd446d2eed8a12b2ee6e0ef156ab07159933d859a295a4faeb58f4920fd8ff2a4d43fd29cc71fee459bd3d593218e026ee065cbfab91b238a1a9d73cd92d2c3f523e23cb261bb1386475b575723ed4ac0a164e54be9be5d27136d28147531e6fd57b29edf57d146dd8d111c891336d95ffbf26c355c8ca212992e30c971f65753d7ffd9afd1ee8504023af823e4f4fa49cf8d8ca496df21bca67e49dad64a178b69debef9930b7ed6dd74decf8d814b6263b8beb7becf4a96d5f03c2cdecec66c6ffb8ef674336644336e4ff2cd9cbb6f71e45d96d21f1ad6457e7189fc8fe26edf866b290c37b8f863f4bfe427e822c5c4ce455261fbab8982e1703d8442da97e7225a7c275fb17fc4172095ca1169e5ee78413bf9cb3ad2ca64c25edc839ddb7d9d7033e4c0ea09193c911d69ecab73dcaf604c421e18e874309e754933390fbdd5ec2f4bbc8153ad4abb15e5099fe1c33e92595012924546e0da8ce6372c91968747f073c4be6fc798b89bdae3106b0e22cd8d639fd65dd9179bf8bbe957e98cc5964184357dd8ca1a2cb061a9d716af2b6013918f507f97364c475e45ad5962b8895c86b848961d5403308ef0ef62459f9b4bd5cc939482e1207f0eed66e3f7ba3f2f68f137f9dcc01b3c08b22bb701471e3508d31a127a3cb44939335dda7f4f78def21c322f467543e287289e5dd940a1b5cfa2cf41d49f506935790797eba81bb67ecb3e480a3c8d627c981f15cd8382ac2a8b49d10d9c57bfca9bc9e211f26fbd322d8700095b6e5252b1ad82d02dccbe92e504facbca668482741b0bcada2fe06b96f0a4f8b21df958d7c15f907c4900dd9900dd9900dd9900dd9900dd9900dd990ffcde4d7fdefe0abe40fb02147f7477e738e0000000049454e44ae426082),
(5, 98, 87, 'Waaaffff', 'Asbbbplll', 'LLLLAAAFGGG', 'WQEQWG198196', '13219afadf', '1998-05-05', 0x89504e470d0a1a0a0000000d49484452000000c8000000c808030000009a865eac000002a0504c54450000000600ff0601ff0702ff0803ff0904ff0a05ff0b06ff0c07ff0d08ff0e09ff0f0aff100bff110cff120dff130eff140fff1510ff1611ff1712ff1813ff1914ff1a15ff1b16ff1c17ff1d18ff1e19ff1f1aff201bff211cff221dff231eff241fff2520ff2621ff2722ff2823ff2924ff2a25ff2b26ff2c27ff2d28ff2e29ff2f2aff2f2bff302cff312dff322eff332fff3430ff3531ff3733ff3834ff3935ff3a36ff3b37ff3c38ff3d39ff3e3aff3f3bff403cff413dff423eff433fff4440ff4541ff4642ff4743ff4945ff4a46ff4b47ff4d49ff4e4aff4f4bff504cff514dff524eff534fff5450ff5551ff5652ff5753ff5854ff5955ff5956ff5a57ff5b58ff5c59ff5d5aff5e5bff605dff615eff625fff6461ff6562ff6663ff6764ff6966ff6a67ff6b68ff6c69ff6d6aff6e6bff6f6cff706dff716eff726fff7370ff7471ff7572ff7673ff7774ff7976ff7a77ff7b78ff7c79ff7d7aff7e7bff7f7cff8280ff8381ff8482ff8583ff8684ff8785ff8886ff8987ff8c8aff8f8dff908eff918fff9492ff9593ff9694ff9795ff9896ff9997ff9a98ff9b99ff9c9aff9d9bff9f9dffa2a0ffa3a1ffa4a2ffa5a3ffa6a4ffa9a7ffaaa8ffaba9ffacaaffacabffadacffaeadffafaeffb0afffb3b2ffb4b3ffb5b4ffb7b6ffb8b7ffb9b8ffbab9ffbbbaffbcbbffbdbcffbebdffbfbeffc0bfffc2c1ffc4c3ffc5c4ffc6c5ffc7c6ffc8c7ffc9c8ffcac9ffcbcaffcccbffcdccffcecdffcfceffd0cfffd1d0ffd4d3ffd5d4ffd7d7ffd8d8ffd9d9ffdadaffdbdbffdcdcffddddffdedeffdfdfffe0e0ffe1e1ffe2e2ffe3e3ffe4e4ffe5e5ffe6e6ffe7e7ffeaeaffebebffececffededffeeeeffefeffff0f0fff1f1fff2f2fff3f3fff4f4fff5f5fff6f6fff7f7fff9f9fffafafffbfbfffcfcfffdfdfffefeffffffff91cd4b20000000097048597300000b1300000b1301009a9c180000000774494d4507d4080c1623166d0b1d120000001d74455874436f6d6d656e7400437265617465642077697468205468652047494d50ef64256e0000067d4944415478daed9bf97f135514c53949da345da00242d5568a52a050c04ad9cba614011790aac8a228600515101111456a151059144104c50d28228222a808612920a058a8402545da24ff8a6f982533c9b44970e2f069cffda1efcec9e4cefb26efddf73273dbaa15eda6b36033308210842004210841084210821084200421084108421082108420042108410842108210842004210841084210821084200421084108421082108420042108410842108210842004214893f6e3cc9ea98ecc814baa43d2a979056ed7ddd37f0a3629c560d6c58e0a52370d8ab5f958d596a728d2dc8626a4e86665ec6820fe712240daa8c707bb44fb911258baf2c8920ea2793ed8a814dd2c8d1d0d64ad78fb9ccbc239f3a0b8e85949aa7203f37dc1607d8513d8156c448ac12c8d1d05249027ae25bb0da3819725673af0ac2c950343838d48d1cddad851408e01291715ff3050200dec7478cecb4a7d2e50652ec560d6c68e02b20518a61d64c12dfe6e074a556511b0dc5cd2e6c17dc032c5179fed0b56c68e076405f08c76d019c9e2ef1bc07baab20b98622e8552670652bcd7bd1d407e9da5b1e300f16edc7850f5ab1dc817cd64608f2a9d07fa9b4b215b030c92d2666d2e5c072c8e7d632bfb2bc03cd18c00ce6af3350dd9e6926e4e970015a22d035eb73af60d816c7622f5b468ef017c9a9883747349676733917a3cb81b28ba6679ecf8417c0b1dc06ac9cb07fc9a9c07a7b9a4b70fc4acbe92078f3701b1e304f16fc8819a7d7ae8237781c35c320c2eb182f701de4d44ecf840f6f61797cafa5c3e280442b9271b1e73c960e7da8af7dfef4f48ec3840fe7a4a5ccab3e092723812f84337fb6e37978cf621e03899a0d83183fc20be79e7d35ae6084e01f669fd90f3a18964b499a2bbe5098a1d2bc836b1872e3aa8139602eb547f8fbc429948c618d21e3cc59b90d8b18278d3c5cf0043dafc0698aafacb8095e692de6aee40c6426559b43a76cc20c381578dcad5d6c8fc5b19b322179d3497f4360958e52f969745ab63c70a7200e811fe41ce0016cbde2660646352c88434dc1ff4ba917accf2d831838811b1345c3be5816b7d40383b5b03bb1b9342b9b71d3cc745fba6f835e1b73876ec206213ee70e9ecbab84a4cdd7e2fbe340cf206a911494d996380b725e75af89af8df63c70172278c26ab1549cae13ced233691b4cdef007900ed7722ed84a5b1e300719b5e2ce89dd5d59d943b75bf3e05454a929d4847f261c59f2fc6b8dfc2d8bcd348108210842004210841084210821084200421488b04e9aedd46b0f65c82b47890256565cd032451df1e415a1608d03d18f8a4a4adabe3d84d7e7de7cc8b697e9ed12dc5d569d28e400448edaa3139c9ce5b8bdfaab60dc4f78872137a78b5be7326c534ff3ca7deaf7ee04218c8f62cf5a5ccaf6c02e9560a648f2a4e137d28acd3772ea298c63f419c736fe943d9a2e973d900b23f1970f69df8d820d1a656d903e244bb4fc5a0bab2d8a13c11543b17514cb3427c69d2c337ff67596a519c7aee6860dcef92f3e708634dd7ff088224a5766925907e593f5cc28a69ae7640dfabf22b4732e03ca30749431ba572a6aa8947e9090699adb88181c006c3043616d36c01be54dfb64879ceac9e9b842c2555042a2bbfb709e417d55f07cc3480188b696601b5eaa9df02d3f5207dc580f2d99c7e53b527cc47e4a7c7bab5c1504c23467fb7ee8a750246eb41be1013ec96c9ef1f6ab0112457f3af00bdc316397d314d81f189e10043faddd6552ec81eb3a6d67e903aa0671888be98a6a711a4d0b820fa77ceeeed90f4f65b6c1f5a2780c146104331cd60a0bee92dcaa5af17e58b7cfe9d4d935dabee590f4c3374ce584c3315381d75afe517f96c824d2073d41c552c1724853a672ca659abab3eae1832a4520fd2bbe09dd0442bb0092459f9b78ed56298d5e841c28a696a3c68ff9bb2ea65c0754e0f721bfa29fbc843e21bb40904edb78a4ef89688a9ba40dfb988629a0540a74aa9bf7b3bcb833074aed8af955d2f07fc55a484d7ec01e928f680392543a54d63917ed318594c5337409cd3657c692fd1dc75c100b24f7c0a29439f78544ad1d9176cdac61fcd5312eaa81a7de74c8a692e8ed31691d361937d5db2fa52afa3b6fdb0f29517a539b21ede1ad077ceb4982650f9646e922b7bfce68688ac756c6e616bb83b4fdc586fdf2fc46671a791200421480b01193b7646f300b9798c20042108410842108210842004210841084210821084200421084108421082108420042108410842108210842004210841084290160c42bba9ec5f59daf9c9da55fdcd0000000049454e44ae426082);

-- --------------------------------------------------------

--
-- Estrutura da tabela `encarregados`
--

CREATE TABLE `encarregados` (
  `IdEncarregado` int(11) NOT NULL,
  `IdAluno` int(11) NOT NULL,
  `IdUser` int(11) NOT NULL,
  `Localidade` longtext NOT NULL,
  `Morada` longtext NOT NULL,
  `Sexo` longtext NOT NULL,
  `Nome` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `encarregados`
--

INSERT INTO `encarregados` (`IdEncarregado`, `IdAluno`, `IdUser`, `Localidade`, `Morada`, `Sexo`, `Nome`) VALUES
(1, 1, 3, 'Batalha', 'Rua da Ponte Nova', 'Masculino', 'João Jacinto'),
(3, 3, 6, 'Porto de Mós', 'Rua da Ponte Nova', 'Feminino', 'Ana Sobrinho'),
(5, 0, 55, 'asdasd2222', 'LLLpBBBAAA', 'GGGGGGG', 'FFFawwww');

-- --------------------------------------------------------

--
-- Estrutura da tabela `escolas`
--

CREATE TABLE `escolas` (
  `IdEscola` int(11) NOT NULL,
  `Designacao` longtext NOT NULL,
  `Localidade` longtext NOT NULL,
  `Contacto` int(15) NOT NULL,
  `Email` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `escolas`
--

INSERT INTO `escolas` (`IdEscola`, `Designacao`, `Localidade`, `Contacto`, `Email`) VALUES
(1, 'Escola BÃ¡sica e SecundÃ¡ria da Batalha', 'Batalha', 244769290, 'es3batalha@gmail.com'),
(2, 'Escola Secundária de Porto de Mós', 'Porto de Mós', 244499170, 'secretaria.aepmos@gmail.com');

-- --------------------------------------------------------

--
-- Estrutura da tabela `estabelecimentos`
--

CREATE TABLE `estabelecimentos` (
  `IdEstabelecimento` int(11) NOT NULL,
  `Designacao` longtext NOT NULL,
  `Localidade` longtext NOT NULL,
  `Contacto` int(15) NOT NULL,
  `Email` longtext NOT NULL,
  `Website` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `estabelecimentos`
--

INSERT INTO `estabelecimentos` (`IdEstabelecimento`, `Designacao`, `Localidade`, `Contacto`, `Email`, `Website`) VALUES
(1, 'Estabelea', 'cimentob', 123456787, 'asss@fasdasd2.comÃ©', 'www.google.bre');

-- --------------------------------------------------------

--
-- Estrutura da tabela `professores`
--

CREATE TABLE `professores` (
  `IdProfessor` int(11) NOT NULL,
  `IdUser` int(11) NOT NULL,
  `Nome` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `professores`
--

INSERT INTO `professores` (`IdProfessor`, `IdUser`, `Nome`) VALUES
(1, 2, 'Samuel'),
(2, 4, 'Rodrigo'),
(3, 123, 'Assw'),
(4, 0, ''),
(5, 0, '');

-- --------------------------------------------------------

--
-- Estrutura da tabela `recados`
--

CREATE TABLE `recados` (
  `IdRecado` int(11) NOT NULL,
  `IdProfessor` int(11) NOT NULL,
  `IdEscola` int(11) NOT NULL,
  `IdEncarregado` int(11) NOT NULL,
  `IdAluno` int(11) NOT NULL,
  `Mensagem` longtext NOT NULL,
  `DataEnvio` date NOT NULL,
  `DataConfirmacao` date NOT NULL,
  `Lido` varchar(1) NOT NULL DEFAULT 'n',
  `Comparece` varchar(1) NOT NULL DEFAULT '?'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `recados`
--

INSERT INTO `recados` (`IdRecado`, `IdProfessor`, `IdEscola`, `IdEncarregado`, `IdAluno`, `Mensagem`, `DataEnvio`, `DataConfirmacao`, `Lido`, `Comparece`) VALUES
(1, 1, 1, 2, 2, 'O seu educando comportou-se mal na sala de aula.', '2018-05-20', '0000-00-00', 'n', '?'),
(2, 1, 1, 1, 1, 'O seu educando falou mal a um colega na sala de aula.', '2018-05-20', '2018-06-08', 's', '?'),
(5, 1, 1, 1, 1, 'Vim por este meio avisar X Y Z.', '2018-06-07', '0000-00-00', 'n', '?'),
(6, 1, 1, 2, 2, 'Vim por este meio avisar X Y Z.', '2018-06-07', '0000-00-00', 'n', '?'),
(8, 123, 321, 222, 333, 'asdasdasdasda', '1998-06-22', '2018-06-18', 's', 'a'),
(11, 12, 23, 34, 45, 'asdasdfg', '1999-06-22', '2009-08-22', 's', 'n');

-- --------------------------------------------------------

--
-- Estrutura da tabela `turmas`
--

CREATE TABLE `turmas` (
  `IdTurma` int(11) NOT NULL,
  `IdEscola` int(11) NOT NULL,
  `IdProfessor` int(11) NOT NULL,
  `Ano` int(2) NOT NULL,
  `Turma` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `turmas`
--

INSERT INTO `turmas` (`IdTurma`, `IdEscola`, `IdProfessor`, `Ano`, `Turma`) VALUES
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
  `Username` longtext NOT NULL,
  `Password` longtext NOT NULL,
  `Email` longtext NOT NULL,
  `Nivel` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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
  ADD PRIMARY KEY (`IdAluno`);

--
-- Indexes for table `encarregados`
--
ALTER TABLE `encarregados`
  ADD PRIMARY KEY (`IdEncarregado`);

--
-- Indexes for table `escolas`
--
ALTER TABLE `escolas`
  ADD PRIMARY KEY (`IdEscola`);

--
-- Indexes for table `estabelecimentos`
--
ALTER TABLE `estabelecimentos`
  ADD PRIMARY KEY (`IdEstabelecimento`);

--
-- Indexes for table `professores`
--
ALTER TABLE `professores`
  ADD PRIMARY KEY (`IdProfessor`);

--
-- Indexes for table `recados`
--
ALTER TABLE `recados`
  ADD PRIMARY KEY (`IdRecado`);

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
  MODIFY `IdAluno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `encarregados`
--
ALTER TABLE `encarregados`
  MODIFY `IdEncarregado` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `escolas`
--
ALTER TABLE `escolas`
  MODIFY `IdEscola` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `estabelecimentos`
--
ALTER TABLE `estabelecimentos`
  MODIFY `IdEstabelecimento` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `professores`
--
ALTER TABLE `professores`
  MODIFY `IdProfessor` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `recados`
--
ALTER TABLE `recados`
  MODIFY `IdRecado` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

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
