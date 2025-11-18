-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 06-Nov-2025 às 22:39
-- Versão do servidor: 10.1.38-MariaDB
-- versão do PHP: 7.3.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ccoanalitica`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `cco_contratos_logs`
--

CREATE TABLE `cco_contratos_logs` (
  `id` int(11) NOT NULL,
  `user_identifier` text,
  `ip_address` text,
  `user_agent` text,
  `accept_lang` text,
  `data_aceite` text,
  `hash_validacao` text,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `cco_contratos_logs`
--

INSERT INTO `cco_contratos_logs` (`id`, `user_identifier`, `ip_address`, `user_agent`, `accept_lang`, `data_aceite`, `hash_validacao`, `created_at`) VALUES
(1, '1399074775', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:144.0) Gecko/20100101 Firefox/144.0', 'pt-BR,pt;q=0.8,en-US;q=0.5,en;q=0.3', '2025-10-27 22:29:02', 'd94dc4eb7a96465e0e707857db09b9f2fe8370a16ca295fcf502188656aa54a5', '2025-10-28 01:29:02'),
(2, '202608153', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:144.0) Gecko/20100101 Firefox/144.0', 'pt-BR,pt;q=0.8,en-US;q=0.5,en;q=0.3', '2025-10-28 18:01:54', '1892daa972f38a842c8b5e2a0596265557811cb5f07da1ba988870a5b7293b03', '2025-10-28 21:01:54'),
(3, '62993615459', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:144.0) Gecko/20100101 Firefox/144.0', 'pt-BR,pt;q=0.8,en-US;q=0.5,en;q=0.3', '2025-10-30 08:46:03', 'ad10c7850615d130ba0756f3fc3d252d23bfdb9a069122cc3197e1febb0a50da', '2025-10-30 11:46:03'),
(4, '62993615459', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:144.0) Gecko/20100101 Firefox/144.0', 'pt-BR,pt;q=0.8,en-US;q=0.5,en;q=0.3', '2025-10-30 08:48:22', '90b6e8abed78a631dd6966c7398f290de32326668376d3df59a3963c238eef86', '2025-10-30 11:48:22'),
(5, '1920810930', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:144.0) Gecko/20100101 Firefox/144.0', 'pt-BR,pt;q=0.8,en-US;q=0.5,en;q=0.3', '2025-10-30 17:01:08', 'e43d17e2ed0cde1caa6a85d1783a1f7281aa9eb14679c0493fee90bb2f485f13', '2025-10-30 20:01:08');

-- --------------------------------------------------------

--
-- Estrutura da tabela `cco_forms`
--

CREATE TABLE `cco_forms` (
  `id` int(11) NOT NULL,
  `company_identifier` text NOT NULL,
  `company_model` int(11) DEFAULT NULL,
  `idf_company_type` text,
  `idf_company_name` text,
  `idf_company_document` text,
  `idf_company_document_type` text NOT NULL,
  `idf_company_whatsapp` text,
  `idf_company_email` text,
  `idf_company_responsible_name` text,
  `company_name` text,
  `company_domain` text,
  `company_history` text,
  `company_description` text,
  `company_services` text,
  `company_services_descriptions` text,
  `company_services_prices` text,
  `company_main_color` text,
  `company_secundary_color` text,
  `company_third_color` text,
  `company_networks` text,
  `company_testmonials` text,
  `company_map_address` text,
  `company_phones` text,
  `company_emails` text,
  `company_data` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `is_deleted` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `cco_forms`
--

INSERT INTO `cco_forms` (`id`, `company_identifier`, `company_model`, `idf_company_type`, `idf_company_name`, `idf_company_document`, `idf_company_document_type`, `idf_company_whatsapp`, `idf_company_email`, `idf_company_responsible_name`, `company_name`, `company_domain`, `company_history`, `company_description`, `company_services`, `company_services_descriptions`, `company_services_prices`, `company_main_color`, `company_secundary_color`, `company_third_color`, `company_networks`, `company_testmonials`, `company_map_address`, `company_phones`, `company_emails`, `company_data`, `is_deleted`) VALUES
(69, '62993615459', 2, 'personal', 'daniel', '045.001.451-76', 'cpf', '(62) 6 5564-6546', 'a@a.com', '', 'Nome da Empresa *', '', '', 'Descrição do que a empresa faz *', 'Lista completa dos serviços/produtos *', '', '', '#1a3d10', '#d4af37', '#f4f4f4', '', '', 'Endereço Completo da empresa *', 'Telefones para contato *', 'E-mail(s) para contato *', '2025-10-30 16:29:29', 1),
(70, '8888888888888', 3, 'company', 'cco', '50.108.880/0001-92', 'cnpj', '(55) 5 5555-5555', '5@3.com', 'juliana 8', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2025-10-30 16:29:29', 1),
(71, '202608153', 3, 'personal', 'dnaiel', '045.001.451-76', 'cpf', '(55) 5 5555-5555', '5@5.com', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2025-10-30 16:29:29', 1),
(79, '1920810930', 3, 'personal', 'Daniel Ribeiro', '045.001.451-76', 'cpf', '(62) 9 9361-5459', 'dantars@outlook.com', '', 'cco analitica', 'Ainda não', 'Nasceu em 2023 com intuito de ajudar pessoas.', 'Fazemos sites e aplicativos', 'Sites\r\nAplicativos\r\n\r\nPlataformas', 'Sites\r\nsites one page e multi page\r\n\r\nAplicativos\r\naplicaitvos para android e ios\r\n\r\nPlataformas\r\ntodos as linguagens', 'Sites\r\nR$ 590,90\r\n\r\nAplicativos\r\nR$ 59000,90\r\n\r\nPlataformas\r\nR$ 5900,90', '#ff0080', '#d4af37', '#f4f4f4', 'isntagram.com/ccoanalitica\r\nisntagram.com/beleza', '- Joao marcos,\r\nfio excelentes.', 'Rua 12 terminal 2', '62993615459', 'contato@gmail.com', '2025-10-30 16:57:30', 0);

-- --------------------------------------------------------

--
-- Estrutura da tabela `cco_forms_files`
--

CREATE TABLE `cco_forms_files` (
  `id` int(11) NOT NULL,
  `file_path` text NOT NULL,
  `file_slug` text NOT NULL,
  `file_identifier` int(11) NOT NULL,
  `file_data` datetime DEFAULT CURRENT_TIMESTAMP,
  `is_deleted` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `cco_forms_files`
--

INSERT INTO `cco_forms_files` (`id`, `file_path`, `file_slug`, `file_identifier`, `file_data`, `is_deleted`) VALUES
(27, './uploads/imagens_empresa/2025-10-30/6903c3d1f04ee_espaco-fsico-1.png', 'imagens_empresa', 1920810930, '2025-10-30 17:00:17', 0),
(28, './uploads/imagens_empresa/2025-10-30/6903c3d1f391e_espaco-fsico-2.png', 'imagens_empresa', 1920810930, '2025-10-30 17:00:17', 0),
(29, './uploads/imagens_servicos/2025-10-30/6903c3d201ed7_servico-2.png', 'imagens_servicos', 1920810930, '2025-10-30 17:00:18', 0),
(30, './uploads/imagens_servicos/2025-10-30/6903c3d2073b1_servico-1.png', 'imagens_servicos', 1920810930, '2025-10-30 17:00:18', 0),
(31, './uploads/logomarca/2025-10-30/6903c3d20afea_LOGO-AQUIAPRENDO_1_.png', 'logomarca', 1920810930, '2025-10-30 17:00:18', 0),
(32, './uploads/videos/2025-10-30/6903c3d20e381_video-1.png', 'videos', 1920810930, '2025-10-30 17:00:18', 0),
(33, './uploads/videos/2025-10-30/6903c3d210324_video-2.png', 'videos', 1920810930, '2025-10-30 17:00:18', 0);

-- --------------------------------------------------------

--
-- Estrutura da tabela `cco_models`
--

CREATE TABLE `cco_models` (
  `id` int(11) NOT NULL,
  `model_title` varchar(255) NOT NULL,
  `model_image` varchar(255) DEFAULT NULL,
  `model_link` text NOT NULL,
  `model_description` text,
  `model_language` varchar(50) DEFAULT NULL,
  `is_deleted` tinyint(1) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `cco_models`
--

INSERT INTO `cco_models` (`id`, `model_title`, `model_image`, `model_link`, `model_description`, `model_language`, `is_deleted`) VALUES
(1, 'Modelo OK', 'https://ccoanalitica.com/wp-content/webp-express/webp-images/uploads/2022/11/innovia.webp', 'https://ccoanalitica.com/demo/87987', '', 'html', 0),
(2, 'Modelo Top', 'https://ccoanalitica.com/wp-content/webp-express/webp-images/uploads/2022/11/innovia.webp', 'https://ccoanalitica.com/demo/87987', NULL, 'wordpress', 0),
(3, 'Modelo FIsk ', 'https://ccoanalitica.com/wp-content/webp-express/webp-images/uploads/2022/11/innovia.webp', 'https://ccoanalitica.com/demo/87987 ', '3 ', 'html', 0),
(4, 'Modelo Crew 2', 'https://ccoanalitica.com/wp-content/webp-express/webp-images/uploads/2022/11/innovia.webp 2', 'https://ccoanalitica.com/demo/87987 2', '222 ', 'js 2', 0),
(5, 'Modelo Mant', 'https://ccoanalitica.com/wp-content/webp-express/webp-images/uploads/2022/11/innovia.webp', 'https://ccoanalitica.com/demo/87987', NULL, 'html', 0),
(6, 'criado agora', 'https://ccoanalitica.com/wp-content/webp-express/webp-images/uploads/2022/11/innovia.webp', 'https://ccoanalitica.com/demo/099999', 'oioi', 'ola', 0),
(7, 'teste', 'https://ccoanalitica.com/wp-content/webp-express/webp-images/uploads/2022/11/innovia.webp', 'https://ccoanalitica.com/demo/099999', 'ad', 'asd', 0),
(8, '9999', 'https://ccoanalitica.com/wp-content/webp-express/webp-images/uploads/2022/11/innovia.webp 3', 'https://ccoanalitica.com/demo/099999', '999', '99999', 0),
(9, '9999', 'https://ccoanalitica.com/wp-content/webp-express/webp-images/uploads/2022/11/innovia.webp 3', 'https://ccoanalitica.com/demo/099999', '999', '99999', 0),
(10, '8888', '88888', '88888', '8888888', '888888', 0),
(11, 'Meicy', 'https://ccoanalitica.com/demo/html/meicy/imagem', 'https://ccoanalitica.com/demo/html/meicy/', '', 'html', 0),
(12, 'Sycho', 'https://ccoanalitica.com/demo/html/sycho/imagem', 'https://ccoanalitica.com/demo/html/sycho', '', 'html', 0);

-- --------------------------------------------------------

--
-- Estrutura da tabela `cco_models_tags`
--

CREATE TABLE `cco_models_tags` (
  `id` int(11) NOT NULL,
  `model_id` int(11) NOT NULL,
  `tag_id` int(11) NOT NULL,
  `is_deleted` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `cco_models_tags`
--

INSERT INTO `cco_models_tags` (`id`, `model_id`, `tag_id`, `is_deleted`) VALUES
(13, 1, 1, 1),
(14, 1, 2, 1),
(15, 1, 2, 1),
(16, 1, 2, 1),
(17, 1, 1, 1),
(18, 1, 3, 1),
(19, 1, 3, 1),
(20, 1, 2, 1),
(21, 1, 1, 1),
(22, 1, 1, 1),
(23, 1, 3, 1),
(24, 1, 1, 0),
(25, 1, 3, 0),
(26, 1, 2, 0),
(27, 2, 1, 0),
(28, 3, 1, 0),
(29, 3, 2, 0),
(30, 6, 2, 0),
(31, 9, 1, 0),
(32, 9, 2, 0),
(33, 9, 8, 0),
(34, 11, 9, 0),
(35, 11, 11, 0),
(36, 11, 10, 0),
(37, 12, 9, 0),
(38, 12, 11, 0),
(39, 12, 10, 0);

-- --------------------------------------------------------

--
-- Estrutura da tabela `cco_optionals`
--

CREATE TABLE `cco_optionals` (
  `id` int(11) NOT NULL,
  `cco_item` text NOT NULL,
  `cco_identifier` int(11) NOT NULL,
  `cco_data` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `is_deleted` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `cco_optionals`
--

INSERT INTO `cco_optionals` (`id`, `cco_item`, `cco_identifier`, `cco_data`, `is_deleted`) VALUES
(21, '1', 1399074775, '2025-10-27 18:38:28', 0),
(22, '2', 1399074775, '2025-10-27 18:38:28', 0),
(23, '3', 1399074775, '2025-10-27 18:38:28', 0),
(24, '4', 1399074775, '2025-10-27 18:38:28', 0),
(25, '5', 1399074775, '2025-10-27 18:38:28', 0),
(26, '6', 1399074775, '2025-10-27 18:38:28', 0),
(27, '6', 2147483647, '2025-10-30 08:45:40', 0);

-- --------------------------------------------------------

--
-- Estrutura da tabela `cco_optionals_shop`
--

CREATE TABLE `cco_optionals_shop` (
  `id` int(11) NOT NULL,
  `cco_item_name` text NOT NULL,
  `cco_item_long_description` text NOT NULL,
  `cco_item_short_description` text NOT NULL,
  `cco_item_image` text NOT NULL,
  `cco_item_price` text NOT NULL,
  `is_deleted` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `cco_optionals_shop`
--

INSERT INTO `cco_optionals_shop` (`id`, `cco_item_name`, `cco_item_long_description`, `cco_item_short_description`, `cco_item_image`, `cco_item_price`, `is_deleted`) VALUES
(1, 'Criação de Logomarca', '', 'Identidade visual exclusiva e moderna para destacar sua marca.', '', '350.00', 0),
(2, 'Modelo de Proposta Comercial', '', 'Documento profissional e elegante com sua identidade visual.', '', '222.00', 0),
(3, 'Apresentação da Empresa (PDF)', '', 'Apresentação institucional profissional para destacar seus diferenciais.', '', '280.00', 0),
(4, 'Cartão de Visita', '', 'Versão digital e impressa, alinhada à sua identidade visual.', '', '150.00', 0),
(5, 'Identidade Visual Completa', '', 'Pacote com logomarca, cores, tipografia e materiais padronizados.', '', '690.00', 0),
(6, 'Gestão de Redes Sociais', '', 'Criação e manutenção de conteúdo para redes sociais da empresa.', '', '490.00', 0);

-- --------------------------------------------------------

--
-- Estrutura da tabela `cco_tags`
--

CREATE TABLE `cco_tags` (
  `id` int(11) NOT NULL,
  `tag_name` varchar(100) NOT NULL,
  `tag_slug` varchar(100) NOT NULL,
  `tag_description` text,
  `is_deleted` tinyint(1) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `cco_tags`
--

INSERT INTO `cco_tags` (`id`, `tag_name`, `tag_slug`, `tag_description`, `is_deleted`) VALUES
(1, 'Arquitetura', 'arquitetura', 'Sites profissionais prontos para advogados, otimizados para performance e conversão.', 0),
(2, 'Advocacia', 'advocacia', 'Sites profissionais prontos para advogados, otimizados para performance e conversão.', 0),
(3, 'Clínica Médica', 'clinica_medica', 'Sites profissionais prontos para advogados, otimizados para performance e conversão.', 0),
(4, 'Tag Um', 'tag_um', 'sololds ', 1),
(8, 'Tag Dois', 'tag_dois', 'asdasdasd', 0),
(9, 'Psicologia', 'psicologia', 'Sites profissionais prontos para psicologos, otimizados para performance e conversão.', 0),
(10, 'Terapia', 'terapia', 'Sites profissionais prontos para terapeutas, otimizados para performance e conversão.', 0),
(11, 'Psiquiatria', 'psiquiatria', 'Sites profissionais prontos para psiquiatras, otimizados para performance e conversão.', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cco_contratos_logs`
--
ALTER TABLE `cco_contratos_logs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cco_forms`
--
ALTER TABLE `cco_forms`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cco_forms_files`
--
ALTER TABLE `cco_forms_files`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cco_models`
--
ALTER TABLE `cco_models`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cco_models_tags`
--
ALTER TABLE `cco_models_tags`
  ADD PRIMARY KEY (`id`),
  ADD KEY `model_id` (`model_id`),
  ADD KEY `tag_id` (`tag_id`);

--
-- Indexes for table `cco_optionals`
--
ALTER TABLE `cco_optionals`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cco_optionals_shop`
--
ALTER TABLE `cco_optionals_shop`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cco_tags`
--
ALTER TABLE `cco_tags`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `tag_slug` (`tag_slug`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cco_contratos_logs`
--
ALTER TABLE `cco_contratos_logs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `cco_forms`
--
ALTER TABLE `cco_forms`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=80;

--
-- AUTO_INCREMENT for table `cco_forms_files`
--
ALTER TABLE `cco_forms_files`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `cco_models`
--
ALTER TABLE `cco_models`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `cco_models_tags`
--
ALTER TABLE `cco_models_tags`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- AUTO_INCREMENT for table `cco_optionals`
--
ALTER TABLE `cco_optionals`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `cco_optionals_shop`
--
ALTER TABLE `cco_optionals_shop`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `cco_tags`
--
ALTER TABLE `cco_tags`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- Constraints for dumped tables
--

--
-- Limitadores para a tabela `cco_models_tags`
--
ALTER TABLE `cco_models_tags`
  ADD CONSTRAINT `cco_models_tags_ibfk_1` FOREIGN KEY (`model_id`) REFERENCES `cco_models` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `cco_models_tags_ibfk_2` FOREIGN KEY (`tag_id`) REFERENCES `cco_tags` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
