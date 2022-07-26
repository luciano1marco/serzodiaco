-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 07-Jan-2022 às 14:05
-- Versão do servidor: 10.4.20-MariaDB
-- versão do PHP: 8.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `conexao`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `admin_preferences`
--

CREATE TABLE `admin_preferences` (
  `id` tinyint(1) NOT NULL,
  `user_panel` tinyint(1) NOT NULL DEFAULT 0,
  `sidebar_form` tinyint(1) NOT NULL DEFAULT 0,
  `messages_menu` tinyint(1) NOT NULL DEFAULT 0,
  `notifications_menu` tinyint(1) NOT NULL DEFAULT 0,
  `tasks_menu` tinyint(1) NOT NULL DEFAULT 0,
  `user_menu` tinyint(1) NOT NULL DEFAULT 1,
  `ctrl_sidebar` tinyint(1) NOT NULL DEFAULT 0,
  `transition_page` tinyint(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `admin_preferences`
--

INSERT INTO `admin_preferences` (`id`, `user_panel`, `sidebar_form`, `messages_menu`, `notifications_menu`, `tasks_menu`, `user_menu`, `ctrl_sidebar`, `transition_page`) VALUES
(1, 0, 0, 0, 0, 0, 1, 0, 0);

-- --------------------------------------------------------

--
-- Estrutura da tabela `apoiador`
--

CREATE TABLE `apoiador` (
  `id` int(11) UNSIGNED NOT NULL,
  `idpessoas` int(11) NOT NULL,
  `idzonas` int(11) UNSIGNED DEFAULT NULL,
  `idtipos` int(11) UNSIGNED DEFAULT NULL,
  `idunidades` int(11) UNSIGNED DEFAULT NULL,
  `idcampos` int(11) UNSIGNED DEFAULT NULL,
  `idservicos` int(11) UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `apoiador`
--

INSERT INTO `apoiador` (`id`, `idpessoas`, `idzonas`, `idtipos`, `idunidades`, `idcampos`, `idservicos`) VALUES
(1, 1, 6, 2, 25, 2, 112);

-- --------------------------------------------------------

--
-- Estrutura da tabela `bairros`
--

CREATE TABLE `bairros` (
  `id` int(11) NOT NULL,
  `descricao` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `bairros`
--

INSERT INTO `bairros` (`id`, `descricao`) VALUES
(1, 'Centro'),
(2, 'Porto Novo'),
(3, 'Santa Tereza'),
(4, 'Parque'),
(6, 'Buchholz'),
(7, 'Bráz'),
(8, 'São Miguel'),
(9, 'Parque Residencial Coelho'),
(10, 'Vila Cibrazém'),
(11, 'FURG Carreiros'),
(12, 'São João'),
(13, 'Recreio'),
(14, 'Santa Rosa'),
(15, 'Aeroporto'),
(16, 'Trevo'),
(17, 'Parque Marinha'),
(18, 'Parque São Pedro'),
(19, 'Distrito Industrial'),
(20, 'Senandes'),
(21, 'Bolaxa'),
(22, 'Barra'),
(23, 'Cassino'),
(25, 'BGV'),
(26, 'Vila Militar'),
(27, 'Vila Nossa Senhora dos Navegantes'),
(29, 'Lar Gaúcho'),
(30, 'Barra Nova'),
(31, 'Vila Mangueira'),
(32, 'Industrial Tamandaré'),
(33, 'Parque Residencial Salgado Filho'),
(34, 'Cidade Nova'),
(35, 'Lagoa'),
(36, 'Cohab I'),
(37, 'Cohab II'),
(38, 'Vila Leonidas'),
(39, 'Vila Rural'),
(40, 'Vila Braz'),
(41, 'Vila Junção'),
(42, 'Municipal'),
(43, 'Vila São Paulo'),
(45, 'Miguel de Castro Moreira'),
(46, 'América'),
(47, 'Vila Prado'),
(48, 'Santa Rita de Cássia'),
(49, 'Bosque'),
(50, 'Profilurb'),
(51, 'Cohab IV'),
(52, 'Vila Maria dos Anjos'),
(53, 'Vila Recreio'),
(54, 'Carlos Santos'),
(55, 'Vila Nossa Senhora de Fátima'),
(56, 'Cidade de Águeda'),
(57, 'Castelo Branco'),
(58, 'Vila Bernardet'),
(59, 'Cisbrazém'),
(60, 'Vila Maria'),
(61, 'Vila Maria José'),
(62, 'Parque Residencial são Pedro II'),
(63, 'Marluz'),
(64, 'Vila Mate Amargo'),
(65, 'Parque Universitário'),
(66, 'Carreiros'),
(67, 'Jardim do sol'),
(68, 'Vila São Jorge'),
(69, 'Stela Maris'),
(70, 'Querência'),
(71, 'ABC'),
(72, 'Parque Guanabara'),
(74, 'Ilha dos Marinheiros'),
(75, 'Ilha da Torotama'),
(76, 'Ilha do Machadinho'),
(77, 'Quinta'),
(78, 'Quintinha'),
(79, 'Taim'),
(80, 'Sitio Santa Cruz'),
(81, 'Agostinho Petroni');

-- --------------------------------------------------------

--
-- Estrutura da tabela `bairrozona`
--

CREATE TABLE `bairrozona` (
  `id` int(11) UNSIGNED NOT NULL,
  `idzonas` int(11) UNSIGNED DEFAULT NULL,
  `idbairros` int(11) UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `bairrozona`
--

INSERT INTO `bairrozona` (`id`, `idzonas`, `idbairros`) VALUES
(1, 1, 22),
(3, 1, 25),
(4, 1, 1),
(5, 1, 32),
(6, 1, 29),
(7, 1, 9),
(11, 1, 26),
(12, 1, 27),
(13, 2, 46),
(14, 2, 6),
(15, 2, 34),
(16, 2, 36),
(17, 2, 37),
(18, 2, 35),
(19, 2, 45),
(20, 2, 42),
(21, 2, 40),
(22, 2, 41),
(23, 2, 38),
(24, 2, 47),
(25, 2, 39),
(26, 2, 43),
(27, 2, 81),
(28, 3, 49),
(29, 3, 54),
(30, 3, 57),
(31, 3, 56),
(32, 3, 51),
(33, 3, 50),
(34, 3, 48),
(35, 3, 14),
(36, 3, 12),
(37, 3, 8),
(38, 3, 52),
(39, 3, 55),
(40, 3, 53),
(41, 4, 15),
(42, 4, 66),
(43, 4, 59),
(44, 4, 67),
(45, 4, 63),
(46, 4, 17),
(47, 4, 9),
(48, 4, 62),
(49, 4, 18),
(50, 4, 65),
(51, 4, 58),
(52, 4, 60),
(53, 4, 61),
(54, 4, 64),
(55, 4, 68),
(56, 5, 71),
(57, 5, 21),
(58, 5, 23),
(59, 5, 72),
(60, 5, 70),
(61, 5, 20),
(62, 5, 69),
(63, 6, 75),
(64, 6, 76),
(65, 6, 74),
(66, 6, 2),
(67, 6, 77),
(68, 6, 78),
(69, 6, 80),
(70, 6, 79);

-- --------------------------------------------------------

--
-- Estrutura da tabela `campos`
--

CREATE TABLE `campos` (
  `id` int(11) UNSIGNED NOT NULL,
  `descricao` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `idgroups` int(11) UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `campos`
--

INSERT INTO `campos` (`id`, `descricao`, `idgroups`) VALUES
(1, 'Assistência Social', 3),
(3, 'Educação', 5),
(4, 'Garantia de Direitos', 6),
(5, 'Comunidade', 7),
(6, 'Saude', 5);

-- --------------------------------------------------------

--
-- Estrutura da tabela `diagnosticos`
--

CREATE TABLE `diagnosticos` (
  `id` int(11) UNSIGNED NOT NULL,
  `nome` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `alta` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `estrategia` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `atualizacao` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `reuniao` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `dataregistro` date DEFAULT NULL,
  `reintegracao` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `idusuariorede` int(11) UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `diagnosticos`
--

INSERT INTO `diagnosticos` (`id`, `nome`, `alta`, `estrategia`, `atualizacao`, `reuniao`, `dataregistro`, `reintegracao`, `idusuariorede`) VALUES
(8, 'testetst', 'lçklklçklçklçkçl', 'lçklçklçklklçkçl', 'lçklçklçklçklçkçl', 'lçklçklçklçklçkç', '2020-09-03', 'lklçklçklçklçklçk', 6);

-- --------------------------------------------------------

--
-- Estrutura da tabela `estrategias`
--

CREATE TABLE `estrategias` (
  `id` int(11) UNSIGNED NOT NULL,
  `idusuariorede` int(11) UNSIGNED DEFAULT NULL,
  `idunidades` int(11) UNSIGNED DEFAULT NULL,
  `idapoiador` int(11) UNSIGNED DEFAULT NULL,
  `descricao` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `dataregistro` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `estrategias`
--

INSERT INTO `estrategias` (`id`, `idusuariorede`, `idunidades`, `idapoiador`, `descricao`, `dataregistro`) VALUES
(9, 6, 1, 1, 'lkkljkljk kj kklj klj klj kljklj kl', '2020-09-23');

-- --------------------------------------------------------

--
-- Estrutura da tabela `groups`
--

CREATE TABLE `groups` (
  `id` mediumint(8) UNSIGNED NOT NULL,
  `name` varchar(20) NOT NULL,
  `description` varchar(100) NOT NULL,
  `bgcolor` char(7) NOT NULL DEFAULT '#607D8B'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `groups`
--

INSERT INTO `groups` (`id`, `name`, `description`, `bgcolor`) VALUES
(1, 'admin', 'Administrator', '#F44336'),
(2, 'members', 'General User', '#2196F3'),
(3, 'conexao', 'Conexão', '#607D8B'),
(4, 'cadastros', 'Cadastros', '#607D8B'),
(5, 'areas', 'Areas', '#607D8B');

-- --------------------------------------------------------

--
-- Estrutura da tabela `login_attempts`
--

CREATE TABLE `login_attempts` (
  `id` int(11) UNSIGNED NOT NULL,
  `ip_address` varchar(15) NOT NULL,
  `login` varchar(100) NOT NULL,
  `time` int(11) UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `menugroups`
--

CREATE TABLE `menugroups` (
  `id` int(11) NOT NULL,
  `grupo` int(11) DEFAULT NULL,
  `menu` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `menugroups`
--

INSERT INTO `menugroups` (`id`, `grupo`, `menu`) VALUES
(16, 4, 4),
(18, 4, 5),
(21, 4, 3),
(23, 5, 13),
(24, 4, 6),
(25, 5, 10),
(26, 5, 12),
(27, 5, 11),
(28, 4, 7),
(29, 4, 2),
(30, 3, 9),
(31, 5, 14),
(32, 3, 8),
(33, 4, 15);

-- --------------------------------------------------------

--
-- Estrutura da tabela `menuitens`
--

CREATE TABLE `menuitens` (
  `id` int(11) NOT NULL,
  `controller` varchar(30) NOT NULL,
  `descricao` varchar(50) NOT NULL,
  `icone` varchar(30) DEFAULT NULL,
  `section` int(11) DEFAULT NULL,
  `publicado` int(11) UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `menuitens`
--

INSERT INTO `menuitens` (`id`, `controller`, `descricao`, `icone`, `section`, `publicado`) VALUES
(1, 'license', 'Licenças', 'fa fa-legal', 1, NULL),
(2, 'unidades', 'Unidades', 'home', 4, 1),
(3, 'pessoas', 'Pessoas', 'user-o', 4, 1),
(4, 'bairrozona', 'Bairro-Zona', 'bold', 4, 1),
(5, 'campos', 'Campos', 'file', 4, 1),
(6, 'servicos', 'Serviços', 'cog', 4, 1),
(7, 'tiposapoiadores', 'Tipos de Plano de Cuidado', 'street-view', 4, 1),
(8, 'apoiador', 'Papel no plano de cuidado', 'address-card-o', 3, 1),
(9, 'usuariorede', 'Plano Terapeutico', 'rmb', 3, 1),
(10, 'smcas', 'SMCAS', 'arrow-right', 2, 1),
(11, 'sms', 'SMS', 'arrow-right', 2, 1),
(12, 'smed', 'SMED', 'arrow-right', 2, 1),
(13, 'garantia', 'Garantia de Direitos', 'arrow-right', 2, 1),
(14, 'comunidade', 'Comunidade', 'arrow-right', 2, 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `menusection`
--

CREATE TABLE `menusection` (
  `id` int(11) NOT NULL,
  `descricao` varchar(50) DEFAULT NULL,
  `publicado` int(11) UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `menusection`
--

INSERT INTO `menusection` (`id`, `descricao`, `publicado`) VALUES
(1, 'Seção de Menu', NULL),
(2, 'Áreas', 1),
(3, 'Conexão', 1),
(4, 'Cadastros', 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `pessoas`
--

CREATE TABLE `pessoas` (
  `id` int(11) UNSIGNED NOT NULL,
  `nome` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `telefone` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `pessoas`
--

INSERT INTO `pessoas` (`id`, `nome`, `email`, `telefone`) VALUES
(1, 'Silvana Costa', 'silvana.costa@riogrande.rs.gov.br', '53-981409948'),
(2, 'Jussara', 'jussarasms@riogrande.rs.gov.br', '53-999295793'),
(3, 'Suelen Cunha', 'suelen.dacunha@riogrande.rs.gov.br', '53-984374003'),
(4, 'Michele Peixoto', 'michele.silva@riogrande.rs.gov.br', '53-981443834'),
(5, 'Gabriela Alves Christello', 'gabriela.alves@riogrande.rs.gov.br', '53-999540309'),
(6, 'Fernando Rafael da Costa Bitello', 'fernando.bitello@riogrande.rs.gov.br', '53-984282015'),
(7, 'Robini Duarte', 'robini.duarte@riogrande.rs.gov.br', '53-9984466816'),
(8, 'Carliuza Luna', 'carliuzaluna@riogrande.rs.gov.br', '53-991411057'),
(9, 'Dinarte Ballester', 'dinarte.ballester@riogrande.rs.gov.br', '53-32330241'),
(10, 'Liziane Furtado Duarte', 'ss.emergencia@santacasarg.com.br', '53-32337208'),
(11, 'Ildomar Silveira', 'ildo_universitario@hotmail.com', '53-32317470'),
(12, 'Fabiana Costa', 'ubsf.bgv@riogrande.rd.gov.br', '53-32317470'),
(13, 'Vania Elisabete Garcia', 'ubsf.santateresa@riogrande.rs.gov.br', '53-32335442'),
(14, 'Denise Alcantara', 'ubsf.santateresa@riogrande.rs.gov.br', '53-32335442'),
(15, 'Leila Vasconcelos', '', '53-30351761'),
(16, 'Veronica Lopes', '', '53-32307715'),
(17, 'Fernanda Amaral', '', '53-32304030'),
(18, 'Aline Alves', '', '53-32311627'),
(19, 'Guilherme Zdradrek Guimarães', 'ubsf.profilurb@riogrande.rs.gov.br', '53-32308093'),
(20, 'Esther Regina Lopes', 'esther@vetorial.net', '53-32357797'),
(21, 'Mairla Gomes de Barros', 'ubsf.saomiguel1@riogrande.rs.gov.br', '53-32357797'),
(22, 'Kátia Viana Mendes', 'ubsf.saomiguel2@riogrande.rs.gov.br', '53-32306961'),
(23, 'Bárbara Simone Conceição', 'ubsf.saomiguel2@riogrande.rs.gov.br', '53-32306961'),
(24, 'Ana Kellen Oliveira de Biasi', 'ubsf.saojoao@riogrande.rs.gov.br', '53-32312161'),
(25, 'Maria Inês Soares Andreolla', 'ubsf.castelobranco@riogrande.rs.gov.br', '53-32311938'),
(26, 'Maria Cristina Lima da Silveira', 'ubsf.castelobranco@riogrande.rs.gov.br', '53-32311938'),
(27, 'Marilice Loureiro', 'ubsf.cidadeaguida@riogrande.rs.gov.br', '53-32312306'),
(28, 'Carla Mazuco', 'ubsf.santarosa@riogrande.rs.gov.br', '53-32355173'),
(29, 'Cintia Rubira', 'ubsf.santarosa@riogrande.rs.gov.br', '53-32355173'),
(30, 'Ana Paula', 'ubsf.santarosa@riogrande.rs.gov.br', '53-32355173'),
(31, 'Carla Mazuco', 'ubsf.bbv@riogrande.rs.gov.br', '53-32351334'),
(32, 'Sabrina Machado Selayaran', 'ubsf.bbv@riogrande.rs.gov.br', '53-32351334'),
(33, 'Jucelia Zimermann', '', '53-32313716'),
(34, 'Suzi Mara Teixeira Bromberger', 'ubsf.caic@riogrande.rs.gov.br', '53-32336607'),
(35, 'Geruza Oliveira', 'ubsf.bernardeth@riogrande.rs.gov.br', '53-32357808'),
(36, 'Daiane Ribeiro', 'ubsf.aeroporto@riogrande.rs.gov.br', '53-32303888'),
(37, 'Priscila F. da Cruz', 'ubsf.aeroporto@riogrande.rs.gov.br', '53-32303888'),
(38, 'Elisangela Nunes Brum', 'ubsf.marluz@riogrande.rs.gov.br', '53-32312304'),
(39, 'Maria Nazareti Ribeiro Borges', 'ubsf.marluz@riogrande.rs.gov.br', '53-32312304'),
(40, 'Patricia Santa Catharina Santos', 'ubsf.barro@riogrande.rs.gov.br', '53-32341785'),
(41, 'Maria Márcia dos Santos Julio', 'ubsf.barro@riogrande.rs.gov.br', '53-32341785'),
(42, 'Naira Barros Machado', 'ubsf.senandes@riogrande.rs.gov.br', '53-32311083'),
(43, 'Maria da Graça Jundi', 'ubsf.senandes@riogrande.rs.gov.br', '53-32311083'),
(44, 'Zelionara Branco', 'ubsf.bolaxa@riogrande.rs.gov.br', '53-32362506'),
(45, 'Jossiane Ferreira', 'ubsf.bolaxa@riogrande.rs.gov.br', '53-32362506'),
(46, 'Vânia do Amaral Leivas', 'ubsf.querencia@riogrande.rs.gov.br', '53-32367103'),
(47, 'Enis Regina dos Santos', 'ubsf.querencia@riogrande.rs.gov.br', '53-32367103'),
(48, 'Eglanine Alves', 'ubsf.ilhadatorotama.riogrande.rs.gov.br', '53-32377029'),
(49, 'Edilene Apolenário', 'ubsf.ilhadatorotama.riogrande.rs.gov.br', '53-32377029'),
(50, 'Suzana Lima', 'ubsf.povonovo@riogrande.rs.gov.br', '53-32379157'),
(51, 'Jenifer Campelo', 'ubsf.povonovo@riogrande.rs.gov.br', '53-32379157'),
(52, 'Rosemary Velho Alves', 'ubsf.domingospetroline@riogrande.rs.gov.br', '53-38021002'),
(53, 'Rosimeri de Diogo', 'ubsf.quinta@riogrande.rs.gov.br', '53-32391200'),
(54, 'Sheila Ribeiro de Mello', 'ubsf.quintinha@riogrande.rs.gov.br', '53-32391298'),
(55, 'SilvioTerres', 'ubsf.taim@riogrande.rs.gov.br', '53-99639683'),
(56, 'Lúbia Souza da Silva', 'ubsf.taim@riogrande.rs.gov.br', '53-99639683'),
(57, 'Celso Antônio Guilamelon', 'ubsf.ilhadosmarinheiros@riogrande.rs.gov.br', '53-32378039'),
(58, 'Luciane', '', '53-9843497658'),
(59, 'Silvia', '', '53-984333213'),
(60, 'Morgani', '', '53-91636574'),
(61, 'Marli', '', '53-984291940'),
(62, 'Caroline', '', '53-984299880'),
(63, 'Eduardo', '', '53-981229132'),
(64, 'Daiana', '', '53-999012437'),
(65, 'Mauren Ritta', 'maurenritta@yahoo.com.br', '53-32312899'),
(66, 'Darlene Joanol', 'djoanol@hotmail.com', '53-32303888'),
(67, 'Michele Dorneles', 'mimidorneles@msn.com', '53-32391298'),
(68, 'Ataulfo Guarani', 'ataulfo.guarani@riogrande.rs.gov.br', '53-32306961'),
(69, 'Kátia Telles', 'k.telles@ibest.co.br', '53-32351334'),
(70, 'Vanessa Silva', 'vanessasilva@riogrande.gov.br', '53-32355173'),
(71, 'Jessica Farias Rodrigues', 'capsirg@hotmail.com', '53-32333239'),
(72, 'Alex Lagos', 'capsad.rg@hotmail.com', '53-32317375'),
(73, 'Erika Fernanda Jensen', 'erikafernandajensen@gmail.com', '53-32317375'),
(74, 'Alessandra Salum', 'alessandra.salum@riogrande.rs.gov.br', '53-32311532'),
(75, 'Marisa Helena Braga Zauk', 'marisa.zauk@riogrande.rs.gov.br', '53-984428662'),
(76, 'Ângela Pietro', 'angela.torma@riogrande.rs.gov.br', '53-991512799'),
(77, 'Arlete Costa', 'arletecosta@riogrande.rs.gov.br', '53-999453102');

-- --------------------------------------------------------

--
-- Estrutura da tabela `public_preferences`
--

CREATE TABLE `public_preferences` (
  `id` int(1) NOT NULL,
  `transition_page` tinyint(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `public_preferences`
--

INSERT INTO `public_preferences` (`id`, `transition_page`) VALUES
(1, 0);

-- --------------------------------------------------------

--
-- Estrutura da tabela `referencia`
--

CREATE TABLE `referencia` (
  `id` int(11) NOT NULL,
  `periodo` varchar(50) NOT NULL,
  `idusuariorede` int(11) NOT NULL,
  `idunidades` int(11) UNSIGNED DEFAULT NULL,
  `idservicos` tinyint(1) UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `referencia`
--

INSERT INTO `referencia` (`id`, `periodo`, `idusuariorede`, `idunidades`, `idservicos`) VALUES
(8, '2020-09-03', 6, NULL, 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `responsaveis`
--

CREATE TABLE `responsaveis` (
  `id` int(11) NOT NULL,
  `descricao` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `responsaveis`
--

INSERT INTO `responsaveis` (`id`, `descricao`) VALUES
(1, 'Pai'),
(2, 'Mãe'),
(3, 'Tio(a)'),
(4, 'Irmão(ã)'),
(5, 'Dindo(a)'),
(6, 'Vizinho(a)'),
(7, 'Outros');

-- --------------------------------------------------------

--
-- Estrutura da tabela `servicos`
--

CREATE TABLE `servicos` (
  `id` int(11) NOT NULL,
  `descricao` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `servicos`
--

INSERT INTO `servicos` (`id`, `descricao`) VALUES
(1, 'EMEI Fraternidade'),
(2, 'EMEF Navegantes'),
(3, 'EMEF Helena Small'),
(4, 'EMEF Admar Correa'),
(5, 'EMEF Alcides Barcellos'),
(6, 'EMEF Viriato Corrêa'),
(7, 'EMEI Oscar Moraes'),
(8, 'EMEI Rio Branco'),
(9, 'EMEI Frederico Bucholz'),
(10, 'EMEF França Pinto'),
(11, 'EMEF Clemente Pinto'),
(12, 'EMEE Maria Lucia Luzzardi'),
(13, 'EMEF Sant’Ana'),
(14, 'EMEF Cipriano Porto Alegre'),
(15, 'EMEI Casa da Criança Dr. Augusto Duprat'),
(16, 'Escola Viva'),
(17, 'EMEI Nilza Alves Gonçalves'),
(18, 'UBSF BGV'),
(19, 'UBSF Santa Teresa'),
(20, 'UBS Rita Lobato'),
(21, 'UBS Barra'),
(22, 'CRAS Portuário'),
(23, 'UBS Hidráulica'),
(24, 'UBS Junção'),
(25, 'Materno Infantil'),
(26, 'Núcleo da Criança da SMS'),
(29, 'EMEI Tia Luizinha'),
(30, 'EMEI Castelo Branco'),
(31, 'EMEI Lyons Club'),
(32, 'EMEI Daisy Guma Pagel'),
(33, 'EMEF Assis Brasil'),
(34, 'EMEF Maria da Glória P. Pereira'),
(35, 'EMEFTI Valdir de Castro'),
(36, 'EMEF Zelly Pereira Esmeraldo'),
(37, 'EMEF João de Oliveira'),
(38, 'EMEF Jayme Monteiro'),
(39, 'EMEF D. Pedro II'),
(40, 'EMEF São João'),
(41, 'EMEF São Miguel'),
(42, 'EMEF Dr. Rui Poester Peixoto'),
(43, 'UBSF Profilurb'),
(44, 'UBSF São Miguel I'),
(45, 'UBSF São Miguel II'),
(46, 'UBSF São João'),
(47, 'UBSF Castelo Branco'),
(48, 'UBSF Cidade de Águeda'),
(49, 'UBSF Santa Rosa'),
(50, 'UBSF PPV – Castelo Branco'),
(51, 'CRAS Dra. Lúcia Nader'),
(53, 'EMEI Verenice Ferreira Gonçalves'),
(54, 'EMEI Eva Mann'),
(55, 'EMEF Porto Seguro'),
(56, 'EMEF Zenir de Souza Braga'),
(57, 'EMEF Cidade do Rio Grande'),
(58, 'EMEF Mate Amargo'),
(59, 'EMEF Anselmo Dias Lopes'),
(60, 'EMEF Altamir de Lacerda'),
(61, 'EMEF Roque Aíta Jr'),
(62, 'EMEF Manoel Mano'),
(63, 'EMEF Marília Rodrigues Santos'),
(64, 'UBS Parque Marinha'),
(65, 'UBS Parque São Pedro'),
(66, 'UBSF CAIC'),
(67, 'UBSF Bernardeth'),
(68, 'UBSF Aeroporto'),
(69, 'UBSF Marluz'),
(71, 'CRAS Cidade de Águeda'),
(72, 'EMEI Querência'),
(73, 'EMEI Vovó Zoquinha'),
(74, 'EMEF Maria da Graça Reyes'),
(75, 'EMEI Deborah Thomé Sayão'),
(76, 'EMEF Ramiz Galvão'),
(77, 'EMEF Eliézer de Carvalho Rios'),
(78, 'EMEF Wanda Rocha Martins'),
(79, 'EMEF Pedro Carlos Peixoto Primo'),
(80, 'EMEF Dolores Garcia'),
(81, 'UBS Barra'),
(82, 'UBS Cassino'),
(83, 'UBSF Senandes'),
(84, 'UBSF Bolaxa'),
(85, 'UBSF Querência'),
(86, 'CRAS Hidráulica'),
(88, 'EMEF Humberto de Campos'),
(89, 'EMEF Nilo da Fonseca'),
(90, 'EMEI Vila da Quinta'),
(91, 'EMEF Apolinário Porto Alegre'),
(92, 'EMEF Sylvia Centeno Xavier'),
(93, 'EMEF Coração de Maria'),
(94, 'EMEF Renascer'),
(95, 'EMEF Bento Gonçalves'),
(96, 'EMEF Coriolano Benício'),
(97, 'EMEF Olavo Bilac'),
(98, 'EMEF Antônio Carlos Lopes'),
(99, 'EMEF Liberato Salzano Vieira Vieira da Cunha'),
(100, 'EEMEF Cristóvão Pereira de Abreu'),
(101, 'EMEF Luiza Tavares Schimidt'),
(102, 'EMEF Alcides Maia'),
(103, 'EMEF Argemiro Dias de Lima'),
(104, 'EMEF Franklin Roosevelt'),
(105, 'EMEF Maria Angélica'),
(106, 'EMEF Pedro Osório'),
(107, 'EMEF Aurora Cadaval'),
(108, 'EMEF Alba Olinto'),
(109, 'UBSF Ilha da Torotama'),
(110, 'UBSF Povo Novo'),
(111, 'UBSF Domingos Petroline'),
(112, 'UBSF Quinta'),
(113, 'UBSF Quintinha'),
(114, 'UBSF Taim'),
(115, 'UBSF Ilha dos Marinheiros'),
(118, 'EMEF Ana Neri');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tiposapoiadores`
--

CREATE TABLE `tiposapoiadores` (
  `id` int(11) NOT NULL,
  `descricao` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `tiposapoiadores`
--

INSERT INTO `tiposapoiadores` (`id`, `descricao`) VALUES
(1, 'Apoiador(a)'),
(2, 'Técnico(a)'),
(3, 'Coordenador(a)'),
(4, 'Superintendente'),
(5, 'Gestor(a)'),
(6, 'Supervisor(a)'),
(7, 'Técnico de Referência do Território'),
(8, 'Técnico de Referência do Especializado');

-- --------------------------------------------------------

--
-- Estrutura da tabela `unidades`
--

CREATE TABLE `unidades` (
  `id` int(11) NOT NULL,
  `descricao` varchar(100) NOT NULL,
  `idgroups` tinyint(1) UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `unidades`
--

INSERT INTO `unidades` (`id`, `descricao`, `idgroups`) VALUES
(1, 'UBS/UBSF', NULL),
(2, 'NASF', NULL),
(3, 'PIM/PSE', NULL),
(4, 'CAPSI / CAPS CONVIVER / CAPS AD', NULL),
(5, 'ESPECIALISTAS / AMBULATÓRIO / SEREG', NULL),
(6, 'HOSPITAIS (HP, HU, FURG, SANTA CASA)', NULL),
(8, 'CREAS/ABORDAGEM SOCIAL/PETI', NULL),
(9, 'CASA DE PASSAGEM', NULL),
(10, 'ABRIGOS GOVERNAMENTAIS/ABRIGOS NÃO GOVERNAMENTAIS', NULL),
(11, 'ESCOLA', NULL),
(12, 'SALA DE RECURSO/ORIENTADORA EDUCACIONAL', NULL),
(13, 'REDE FLUXO', NULL),
(14, 'ATENDIMENTOS CONVÊNIO', NULL),
(15, 'FAMíLIA/NUCLEAR', NULL),
(16, 'CONVIVÊNCIA COMUNITÁRIA', NULL),
(17, 'PROJETOS COMUNITÁRIOS', NULL),
(18, 'LAZER', NULL),
(19, 'CONSELHO TUTELAR', NULL),
(20, 'MP OU DEFENSORIA PÊBLICA', NULL),
(21, 'JUIZADO DA INFÂNCIA E JUVENTUDE', NULL),
(22, 'CREAS - MEDIDAS SOCIOEDUCATIVAS', NULL),
(23, 'FAMÍLIA AMPLIADA', NULL),
(24, 'CRAS', NULL),
(25, 'ESF-ESTRATEGIA SAUDE DA FAMILIA', NULL),
(27, 'APOIO AOS PROGRAMAS', NULL),
(28, 'SAÚDE MENTAL', NULL),
(29, 'NUCLEO DE SAUDE MENTAL', NULL),
(30, 'NUMESC - NUCLEO MUNICIPAL DE EDUCAçãO EM SAUDE COLETIVA', NULL),
(32, 'PROTEÇÃO ESPECIAL', NULL),
(33, 'ALTA COMPLEXIDADE', NULL),
(34, 'PROTEÇÃO BÁSICA', NULL);

-- --------------------------------------------------------

--
-- Estrutura da tabela `users`
--

CREATE TABLE `users` (
  `id` int(11) UNSIGNED NOT NULL,
  `ip_address` varchar(15) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL,
  `salt` varchar(255) DEFAULT NULL,
  `email` varchar(100) NOT NULL,
  `activation_code` varchar(40) DEFAULT NULL,
  `forgotten_password_code` varchar(40) DEFAULT NULL,
  `forgotten_password_time` int(11) UNSIGNED DEFAULT NULL,
  `remember_code` varchar(40) DEFAULT NULL,
  `created_on` int(11) UNSIGNED NOT NULL,
  `last_login` int(11) UNSIGNED DEFAULT NULL,
  `active` tinyint(1) UNSIGNED DEFAULT NULL,
  `first_name` varchar(50) DEFAULT NULL,
  `last_name` varchar(50) DEFAULT NULL,
  `company` varchar(100) DEFAULT NULL,
  `phone` varchar(20) DEFAULT NULL,
  `admin` int(11) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `users`
--

INSERT INTO `users` (`id`, `ip_address`, `username`, `password`, `salt`, `email`, `activation_code`, `forgotten_password_code`, `forgotten_password_time`, `remember_code`, `created_on`, `last_login`, `active`, `first_name`, `last_name`, `company`, `phone`, `admin`) VALUES
(1, '127.0.0.1', 'administrator', '$2a$07$SeBknntpZror9uyftVopmu61qg0ms8Qv1yV6FG.kQOSM.9QhmTo36', '', 'admin@admin.com', '', NULL, NULL, NULL, 1268889823, 1637930320, 1, 'Admin', 'istrator', 'ADMIN', '0', 1),
(3, '::1', 'luciano marco', '$2y$08$YqWt5zV0fWMXK7pv6/k22.HWI4NbFVHUGtJG.JmLIKysYvcqEzxJq', NULL, 'lucianomarco@msn.com', NULL, NULL, NULL, NULL, 1599070992, 1605490720, 1, 'luciano', 'marco', 'Prefeitura Municipal de Rio Grande', '98432-1028', 0);

-- --------------------------------------------------------

--
-- Estrutura da tabela `users_groups`
--

CREATE TABLE `users_groups` (
  `id` int(11) UNSIGNED NOT NULL,
  `user_id` int(11) UNSIGNED NOT NULL,
  `group_id` mediumint(8) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `users_groups`
--

INSERT INTO `users_groups` (`id`, `user_id`, `group_id`) VALUES
(1, 1, 1),
(12, 3, 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuariorede`
--

CREATE TABLE `usuariorede` (
  `id` int(11) UNSIGNED NOT NULL,
  `nome` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `endereco` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `telefone` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `datanasc` date DEFAULT NULL,
  `foco` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `justificativa` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `idapoiador` int(11) UNSIGNED DEFAULT NULL,
  `responsavel` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tipo` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `usuariorede`
--

INSERT INTO `usuariorede` (`id`, `nome`, `endereco`, `telefone`, `datanasc`, `foco`, `justificativa`, `idapoiador`, `responsavel`, `tipo`) VALUES
(6, 'testeeeeee', 'av presidente vargas, 323', '(53)991221393', '2020-08-31', 'testet teste tetetst ', 'kljkljkjlk kljk lkj klj j jkljkljklj kj kj lk', 1, 'luciano', 4);

-- --------------------------------------------------------

--
-- Estrutura da tabela `zonas`
--

CREATE TABLE `zonas` (
  `id` int(11) NOT NULL,
  `descricao` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `zonas`
--

INSERT INTO `zonas` (`id`, `descricao`) VALUES
(1, 'Zona Portuária'),
(2, 'Zona Cidade Nova/Lagoa'),
(3, 'Zona Oeste'),
(4, 'Zona Itália'),
(5, 'Zona Litorânea'),
(6, 'Zona Rural'),
(7, 'Sem Zona');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `admin_preferences`
--
ALTER TABLE `admin_preferences`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `apoiador`
--
ALTER TABLE `apoiador`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `bairros`
--
ALTER TABLE `bairros`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `bairrozona`
--
ALTER TABLE `bairrozona`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `campos`
--
ALTER TABLE `campos`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `diagnosticos`
--
ALTER TABLE `diagnosticos`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `estrategias`
--
ALTER TABLE `estrategias`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `groups`
--
ALTER TABLE `groups`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `login_attempts`
--
ALTER TABLE `login_attempts`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `menugroups`
--
ALTER TABLE `menugroups`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `menuitens`
--
ALTER TABLE `menuitens`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `menusection`
--
ALTER TABLE `menusection`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `pessoas`
--
ALTER TABLE `pessoas`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `public_preferences`
--
ALTER TABLE `public_preferences`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `referencia`
--
ALTER TABLE `referencia`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `responsaveis`
--
ALTER TABLE `responsaveis`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `servicos`
--
ALTER TABLE `servicos`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `tiposapoiadores`
--
ALTER TABLE `tiposapoiadores`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `unidades`
--
ALTER TABLE `unidades`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `users_groups`
--
ALTER TABLE `users_groups`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `uc_users_groups` (`user_id`,`group_id`),
  ADD KEY `fk_users_groups_users1_idx` (`user_id`),
  ADD KEY `fk_users_groups_groups1_idx` (`group_id`);

--
-- Índices para tabela `usuariorede`
--
ALTER TABLE `usuariorede`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `zonas`
--
ALTER TABLE `zonas`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `admin_preferences`
--
ALTER TABLE `admin_preferences`
  MODIFY `id` tinyint(1) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de tabela `apoiador`
--
ALTER TABLE `apoiador`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de tabela `bairros`
--
ALTER TABLE `bairros`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=84;

--
-- AUTO_INCREMENT de tabela `bairrozona`
--
ALTER TABLE `bairrozona`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=73;

--
-- AUTO_INCREMENT de tabela `campos`
--
ALTER TABLE `campos`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de tabela `diagnosticos`
--
ALTER TABLE `diagnosticos`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de tabela `estrategias`
--
ALTER TABLE `estrategias`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT de tabela `groups`
--
ALTER TABLE `groups`
  MODIFY `id` mediumint(8) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de tabela `login_attempts`
--
ALTER TABLE `login_attempts`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `menugroups`
--
ALTER TABLE `menugroups`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT de tabela `menuitens`
--
ALTER TABLE `menuitens`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT de tabela `menusection`
--
ALTER TABLE `menusection`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de tabela `pessoas`
--
ALTER TABLE `pessoas`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=80;

--
-- AUTO_INCREMENT de tabela `public_preferences`
--
ALTER TABLE `public_preferences`
  MODIFY `id` int(1) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de tabela `referencia`
--
ALTER TABLE `referencia`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de tabela `responsaveis`
--
ALTER TABLE `responsaveis`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de tabela `servicos`
--
ALTER TABLE `servicos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=121;

--
-- AUTO_INCREMENT de tabela `tiposapoiadores`
--
ALTER TABLE `tiposapoiadores`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT de tabela `unidades`
--
ALTER TABLE `unidades`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT de tabela `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de tabela `users_groups`
--
ALTER TABLE `users_groups`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT de tabela `usuariorede`
--
ALTER TABLE `usuariorede`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de tabela `zonas`
--
ALTER TABLE `zonas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- Restrições para despejos de tabelas
--

--
-- Limitadores para a tabela `users_groups`
--
ALTER TABLE `users_groups`
  ADD CONSTRAINT `fk_users_groups_groups1` FOREIGN KEY (`group_id`) REFERENCES `groups` (`id`) ON DELETE CASCADE ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_users_groups_users1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
