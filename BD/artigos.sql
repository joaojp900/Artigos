-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 07/03/2025 às 23:35
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
-- Banco de dados: `artigos`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `artigos`
--

CREATE TABLE `artigos` (
  `id` int(11) NOT NULL,
  `titulo` varchar(100) NOT NULL,
  `descricao` varchar(10000) NOT NULL,
  `contato` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `artigos`
--

INSERT INTO `artigos` (`id`, `titulo`, `descricao`, `contato`) VALUES
(2, '5 Estratégias para Melhorar o Desempenho do Seu Ser Mais e Produtivo', 'A performance de um site é um fator crucial para garantir uma boa experiência do usuário e melhorar a taxa de conversão. Aqui estão cinco estratégias para otimizar o desempenho do seu site:\r\n\r\nOtimização de Imagens: Imagens grandes podem deixar o site mais lento. Compressão e uso de formatos adequados ajudam a acelerar o carregamento.\r\nMinificação de Arquivos CSS, JavaScript e HTML: A redução do tamanho desses arquivos pode melhorar significativamente o tempo de resposta do site.\r\nUso de Cache: Implementar cache de navegador e servidor pode reduzir o tempo de carregamento de páginas ao evitar a necessidade de baixar recursos repetidamente.\r\nRedução de Requisições HTTP: Quanto menos requisições o navegador fizer para carregar um site, mais rápido ele será. Combinar arquivos e utilizar sprites de imagens pode ser uma boa solução.\r\nHospedagem de Qualidade: Escolher um bom provedor de hospedagem, com servidores rápidos e confiáveis, também é essencial para a performance.\r\nCom essas estratégias, seu site ficará mais rápido e eficiente, oferecendo uma melhor experiência para seus visitantes.', 'joaojpwa@gmail.com'),
(3, 'Como a Inteligência Artificial Está Transformando ', 'A inteligência artificial (IA) está revolucionando o mercado de trabalho em vários setores, trazendo mudanças significativas na forma como as empresas operam e os profissionais desempenham suas funções. Aqui estão algumas das transformações:\r\n\r\nAutomação de Tarefas Repetitivas: A IA pode automatizar tarefas repetitivas, como o preenchimento de formulários, análise de dados e atendimento ao cliente, liberando os funcionários para atividades mais criativas e estratégicas.\r\nAnálise de Dados em Tempo Real: Ferramentas de IA são capazes de analisar grandes volumes de dados rapidamente, ajudando empresas a tomar decisões mais informadas.\r\nPersonalização de Experiência: A IA está ajudando as empresas a oferecer uma experiência mais personalizada aos clientes, com recomendações baseadas em seus comportamentos e preferências.\r\nNovas Oportunidades de Trabalho: Embora a IA substitua algumas funções, ela também cria novas oportunidades em áreas como desenvolvimento de IA, análise de dados e manutenção de sistemas automatizados.\r\nA IA está, sem dúvida, mudando o mercado de trabalho, e é fundamental que os profissionais se adaptem a essas novas tecnologias para aproveitar as oportunidades.', 'joaojpwa@gmail.com'),
(4, 'Dicas Práticas para Organizar Melhor o Seu Tempo e Ser Mais Produtivo', 'A gestão eficiente do tempo é essencial para maximizar a produtividade. Aqui estão algumas dicas práticas que podem ajudar a organizar melhor seu tempo:\r\n\r\nUse uma Lista de Tarefas: Listar todas as tarefas do dia ajuda a visualizar o que precisa ser feito e a priorizar as mais importantes.\r\nDivida Tarefas Complexas: Grandes tarefas podem parecer assustadoras. Dividi-las em tarefas menores e mais gerenciáveis torna o trabalho mais fácil e menos estressante.\r\nEstabeleça Prioridades: Determine quais tarefas são mais urgentes e importantes, e comece por elas.\r\nEvite Multitarefa: Focar em uma tarefa por vez geralmente resulta em um trabalho de melhor qualidade e maior eficiência.\r\nFaça Pausas Regulares: A técnica Pomodoro, por exemplo, sugere 25 minutos de trabalho seguidos de 5 minutos de pausa. Isso ajuda a manter o foco e evita o esgotamento.\r\nAplicando essas dicas, você poderá aumentar sua produtividade e alcançar seus objetivos mais rapidamente.', 'joaojpwa@gmail.com'),
(5, 'Curso de Laravel', 'Inicio de Laravel/Php', 'joaojpwa@gmail.com');

--
-- Índices para tabelas despejadas
--

--
-- Índices de tabela `artigos`
--
ALTER TABLE `artigos`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT para tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `artigos`
--
ALTER TABLE `artigos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
