-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 22-Nov-2022 às 22:34
-- Versão do servidor: 10.4.17-MariaDB
-- versão do PHP: 8.0.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `tccetec2022`
--

DELIMITER $$
--
-- Procedimentos
--
CREATE DEFINER=`root`@`localhost` PROCEDURE `salvar_curso` (IN `var_id` INT, IN `var_titulo` VARCHAR(100), IN `var_modalidade` VARCHAR(200), IN `var_eixotec` VARCHAR(200), IN `var_corpo` VARCHAR(5000), IN `var_imagem` VARCHAR(100), IN `var_planocurso` VARCHAR(200), IN `var_matriz` VARCHAR(200))  NO SQL
BEGIN
    DECLARE id_curso int;
    SET id_curso = (SELECT id FROM curso WHERE id = var_id);
   
    IF (id_curso > 0) THEN
        UPDATE curso SET 
        	titulo = var_titulo,
            modalidade = var_modalidade,
        	eixotec = var_eixotec, 
        	corpo = var_corpo,
        	imagem = var_imagem,
            planocurso = var_planocurso,
            matriz = var_matriz
        WHERE id = var_id;
        COMMIT;
    ELSE
        INSERT INTO curso VALUES(var_id, var_titulo, var_modalidade, var_eixotec, var_corpo, var_imagem, var_planocurso, var_matriz);
        COMMIT;
    END IF;
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `salvar_noticia` (IN `var_id` INT, IN `var_titulo` VARCHAR(100), IN `var_subtitulo` VARCHAR(200), IN `var_data` DATE, IN `var_corpo` VARCHAR(5000), IN `var_imagem` VARCHAR(100))  NO SQL
BEGIN
    DECLARE id_noticia int;
    SET id_noticia = (SELECT id FROM noticia WHERE id = var_id);
   
    IF (id_noticia > 0) THEN
        UPDATE noticia SET 
        	titulo = var_titulo,
            subtitulo = var_subtitulo,
        	data = var_data, 
        	corpo = var_corpo, 
        	imagem = var_imagem 
        WHERE id = var_id;
        COMMIT;
    ELSE
        INSERT INTO noticia VALUES(var_id, var_titulo, var_subtitulo, var_data, var_corpo, var_imagem);
        COMMIT;
    END IF;
END$$

DELIMITER ;

-- --------------------------------------------------------

--
-- Estrutura da tabela `curso`
--

CREATE TABLE `curso` (
  `id` int(11) NOT NULL,
  `titulo` varchar(100) NOT NULL,
  `modalidade` varchar(200) NOT NULL,
  `eixotec` varchar(200) NOT NULL,
  `corpo` varchar(5000) NOT NULL,
  `imagem` varchar(100) DEFAULT NULL,
  `planocurso` varchar(200) DEFAULT NULL,
  `matriz` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `curso`
--

INSERT INTO `curso` (`id`, `titulo`, `modalidade`, `eixotec`, `corpo`, `imagem`, `planocurso`, `matriz`) VALUES
(2, 'DESENVOLVIMENTO DE SISTEMAS', 'MTEC - ENSINO MÉDIO COM HABILITAÇÃO TÉCNICA PROFISSIONAL', 'INFORMAÇÃO E COMUNICAÇÃO', '&lt;p&gt;&lt;strong&gt;Modalidade:&lt;/strong&gt;&lt;br /&gt;\r\nMTEC - ENSINO M&amp;Eacute;DIO COM HABILITA&amp;Ccedil;&amp;Atilde;O T&amp;Eacute;CNICA PROFISSIONAL&lt;/p&gt;\r\n\r\n&lt;p&gt;&lt;strong&gt;Eixo Tecnol&amp;oacute;gico:&lt;/strong&gt;&lt;br /&gt;\r\nINFORMA&amp;Ccedil;&amp;Atilde;O E COMUNICA&amp;Ccedil;&amp;Atilde;O&lt;/p&gt;\r\n\r\n&lt;p&gt;&amp;nbsp;&lt;/p&gt;\r\n\r\n&lt;p&gt;&lt;strong&gt;Descri&amp;ccedil;&amp;atilde;o:&lt;/strong&gt;&lt;br /&gt;\r\n&amp;Eacute; o profissional que analisa e projeta sistemas. Constr&amp;oacute;i, documenta, realiza testes e mant&amp;eacute;m sistemas de informa&amp;ccedil;&amp;atilde;o. Utiliza ambientes de desenvolvimento e linguagens de programa&amp;ccedil;&amp;atilde;o espec&amp;iacute;fica. Modela, implementa e mant&amp;eacute;m bancos de dados.&lt;/p&gt;\r\n\r\n&lt;p&gt;&amp;nbsp;&lt;/p&gt;\r\n\r\n&lt;p&gt;&lt;strong&gt;Mercado de Trabalho:&lt;/strong&gt;&lt;br /&gt;\r\nEmpresas e departamentos de desenvolvimento de sistemas em organiza&amp;ccedil;&amp;otilde;es governamentais e n&amp;atilde;o governamentais, podendo tamb&amp;eacute;m atuar como profissional aut&amp;ocirc;nomo.&lt;/p&gt;', 'IMG-632a67e756c5d5.97010746.png', '', NULL),
(3, 'DESENVOLVIMENTO DE SISTEMAS', 'ETIM - CURSOS TÉCNICOS INTEGRADOS AO ENSINO MÉDIO', 'INFORMAÇÃO E COMUNICAÇÃO', '&lt;p&gt;&lt;strong&gt;Modalidade:&lt;/strong&gt;&lt;br /&gt;\r\nETIM - CURSOS T&amp;Eacute;CNICOS INTEGRADOS AO ENSINO M&amp;Eacute;DIO&lt;/p&gt;\r\n\r\n&lt;p&gt;&lt;strong&gt;Eixo Tecnol&amp;oacute;gico:&lt;/strong&gt;&lt;br /&gt;\r\nINFORMA&amp;Ccedil;&amp;Atilde;O E COMUNICA&amp;Ccedil;&amp;Atilde;O&lt;/p&gt;\r\n\r\n&lt;p&gt;&amp;nbsp;&lt;/p&gt;\r\n\r\n&lt;p&gt;&lt;strong&gt;Descri&amp;ccedil;&amp;atilde;o:&lt;/strong&gt;&lt;br /&gt;\r\nO T&amp;Eacute;CNICO EM DESENVOLVIMENTO DE SISTEMAS &amp;eacute; o profissional que desenvolve sistemas computacionais utilizando ambiente de desenvolvimento. Modela, implementa e mant&amp;eacute;m banco de dados. Utiliza linguagem de programa&amp;ccedil;&amp;atilde;o espec&amp;iacute;fica. Realiza testes de programas de computador. Mant&amp;eacute;m registros para an&amp;aacute;lise e refinamento de resultados. Elabora documenta&amp;ccedil;&amp;atilde;o do sistema. Aplica princ&amp;iacute;pios e defini&amp;ccedil;&amp;atilde;o de an&amp;aacute;lise de dados. Executa manuten&amp;ccedil;&amp;atilde;o de programas de computador.&lt;/p&gt;\r\n\r\n&lt;p&gt;&amp;nbsp;&lt;/p&gt;\r\n\r\n&lt;p&gt;&lt;strong&gt;Mercado de Trabalho:&lt;/strong&gt;&lt;br /&gt;\r\nEmpresas e departamentos de desenvolvimento de sistemas em organiza&amp;ccedil;&amp;otilde;es governamentais e n&amp;atilde;o governamentais, podendo tamb&amp;eacute;m atuar como profissional aut&amp;ocirc;nomo.&lt;/p&gt;', 'IMG-635d19b5bd3426.54778783.png', '', NULL),
(4, 'MEIO AMBIENTE', 'ETIM - CURSOS TÉCNICOS INTEGRADOS AO ENSINO MÉDIO', 'AMBIENTE E SAÚDE', '&lt;p&gt;&lt;strong&gt;Modalidade:&lt;/strong&gt;&lt;br /&gt;\r\nETIM - CURSOS T&amp;Eacute;CNICOS INTEGRADOS AO ENSINO M&amp;Eacute;DIO&lt;/p&gt;\r\n\r\n&lt;p&gt;&lt;strong&gt;Eixo Tecnol&amp;oacute;gico:&lt;/strong&gt;&lt;br /&gt;\r\nAMBIENTE E SA&amp;Uacute;DE&lt;/p&gt;\r\n\r\n&lt;p&gt;&amp;nbsp;&lt;/p&gt;\r\n\r\n&lt;p&gt;&lt;strong&gt;Descri&amp;ccedil;&amp;atilde;o:&lt;/strong&gt;&lt;br /&gt;\r\nO T&amp;Eacute;CNICO EM MEIO AMBIENTE &amp;eacute; o profissional que coleta, armazena e interpreta informa&amp;ccedil;&amp;otilde;es, dados e documenta&amp;ccedil;&amp;otilde;es ambientais. Colabora na elabora&amp;ccedil;&amp;atilde;o de laudos, relat&amp;oacute;rios e estudos ambientais. Auxilia na elabora&amp;ccedil;&amp;atilde;o, no acompanhamento e na execu&amp;ccedil;&amp;atilde;o de sistemas de gest&amp;atilde;o ambiental. Atua na organiza&amp;ccedil;&amp;atilde;o de programas de educa&amp;ccedil;&amp;atilde;o ambiental, de conserva&amp;ccedil;&amp;atilde;o e de preserva&amp;ccedil;&amp;atilde;o de recursos naturais, de redu&amp;ccedil;&amp;atilde;o, reuso e reciclagem. Identifica as interven&amp;ccedil;&amp;otilde;es ambientais, analisa suas consequ&amp;ecirc;ncias e operacionaliza a execu&amp;ccedil;&amp;atilde;o de a&amp;ccedil;&amp;otilde;es para preserva&amp;ccedil;&amp;atilde;o, conserva&amp;ccedil;&amp;atilde;o, otimiza&amp;ccedil;&amp;atilde;o, minimiza&amp;ccedil;&amp;atilde;o e remedia&amp;ccedil;&amp;atilde;o dos seus efeitos.&lt;/p&gt;\r\n\r\n&lt;p&gt;&amp;nbsp;&lt;/p&gt;\r\n\r\n&lt;p&gt;&lt;strong&gt;Mercado de Trabalho:&lt;/strong&gt;&lt;br /&gt;\r\nInstitui&amp;ccedil;&amp;otilde;es p&amp;uacute;blicas (municipais, estaduais e federais, secretarias, &amp;oacute;rg&amp;atilde;os ambientais, unidades de conserva&amp;ccedil;&amp;atilde;o ambiental, entre outras); terceiro setor (constitu&amp;iacute;do por organiza&amp;ccedil;&amp;otilde;es sem fins lucrativos e n&amp;atilde;o governamentais, que tem como objetivo gerar servi&amp;ccedil;os de car&amp;aacute;ter p&amp;uacute;blico); empresas prestadoras de servi&amp;ccedil;os na &amp;aacute;rea Ambiental (an&amp;aacute;lise da qualidade da &amp;aacute;gua, ar, ru&amp;iacute;do e solo); empresas que possuem ou implementam Sistemas de Gest&amp;atilde;o Ambiental; esta&amp;ccedil;&amp;otilde;es de tratamento de &amp;aacute;gua, efluentes, res&amp;iacute;duos, laborat&amp;oacute;rios e centros de pesquisa da &amp;aacute;rea Ambiental, industrias no geral, consultorias t&amp;eacute;cnico-ambientais. Ao concluir o curso, o T&amp;Eacute;CNICO EM MEIO AMBIENTE dever&amp;aacute; ter constru&amp;iacute;do as seguintes compet&amp;ecirc;ncias gerais: Identificar e caracterizar os sistemas, ecossistemas e os elementos que os comp&amp;otilde;em e suas respectivas fun&amp;ccedil;&amp;otilde;es; Identificar e caracterizar as grandezas envolvidas nos processos naturais de conserva&amp;ccedil;&amp;atilde;o, utilizando os m&amp;eacute;todos e sistemas de unidades de medida e ordens de grandeza; Identificar os indicadores de qualidade ambiental dos recursos naturais (solo, &amp;aacute;gua e ar); Classificar os recursos naturais (&amp;aacute;gua e solo), correlacionando suas caracter&amp;iacute;sticas f&amp;iacute;sicas, qu&amp;iacute;micas e biol&amp;oacute;gicas, segundo seus usos; Identificar as fontes e a&amp;ccedil;&amp;otilde;es de impacto ambiental utilizando m&amp;eacute;todos de medi&amp;ccedil;&amp;atilde;o e an&amp;aacute;lise; Identificar caracter&amp;iacute;sticas b&amp;aacute;sicas de atividades de explora&amp;ccedil;&amp;atilde;o de recursos naturais renov&amp;aacute;veis e n&amp;atilde;o renov&amp;aacute;veis que interv&amp;ecirc;m no meio ambiente; Identificar e caracterizar situa&amp;ccedil;&amp;otilde;es de pequeno e m&amp;eacute;dio risco e aplicar m&amp;eacute;todos de elimina&amp;ccedil;&amp;atilde;o ou de redu&amp;ccedil;&amp;atilde;o de impactos ambientais; Identificar processos de interven&amp;ccedil;&amp;atilde;o antr&amp;oacute;pica sobre o meio ambiente e as caracter&amp;iacute;sticas das atividades produtivas geradoras de res&amp;iacute;duos s&amp;oacute;lidos, efluentes l&amp;iacute;quidos, emiss&amp;otilde;es atmosf&amp;eacute;ricas e ru&amp;iacute;dos; Avaliar os efeitos causados pela produ&amp;ccedil;&amp;atilde;o, emiss&amp;atilde;o e disposi&amp;ccedil;&amp;atilde;o de res&amp;iacute;duos s&amp;oacute;lidos, poluentes atmosf&amp;eacute;ricos e efluentes l&amp;iacute;quidos, identificando as consequ&amp;ecirc;ncias sobre o meio ambiente; Utilizar sistemas informatizados de gest&amp;atilde;o ambiental; Interpretar resultados anal&amp;iacute;ticos referentes aos padr&amp;otilde;es de qualidade do solo, ar, &amp;aacute;gua e da polui&amp;ccedil;&amp;atilde;o visual e sonora, propondo medidas mitigadoras e compensat&amp;oacute;rias; Manusear e operar instrumentos de precis&amp;atilde;o; Interpretar mapas, cartas, fotografias a&amp;eacute;reas e imagens de sat&amp;eacute;lite. Deve ser capaz tamb&amp;eacute;m, por ser concluinte do Ensino M&amp;eacute;dio, de: 1.&', 'IMG-635d19e43bbc22.86562509.png', 'PDF-planocurso.pdf', 'PDF-matriz.pdf');

-- --------------------------------------------------------

--
-- Estrutura da tabela `noticia`
--

CREATE TABLE `noticia` (
  `id` int(11) NOT NULL,
  `titulo` varchar(100) NOT NULL,
  `subtitulo` varchar(200) NOT NULL,
  `data` date NOT NULL,
  `corpo` varchar(5000) NOT NULL,
  `imagem` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `noticia`
--

INSERT INTO `noticia` (`id`, `titulo`, `subtitulo`, `data`, `corpo`, `imagem`) VALUES
(106, 'Rússia acusa Ucrânia de tentar atacar região próxima a usina nuclear com drones', 'Ministério da Defesa russo diz ter abatido 8 drones não tripulados.', '2022-09-26', '&lt;p&gt;O Minist&amp;eacute;rio da Defesa da&amp;nbsp;&lt;a href=&quot;https://g1.globo.com/tudo-sobre/russia/&quot;&gt;R&amp;uacute;ssia&lt;/a&gt;&amp;nbsp;acusou neste domingo (25) a&amp;nbsp;&lt;a href=&quot;https://g1.globo.com/tudo-sobre/ucrania/&quot;&gt;Ucr&amp;acirc;nia&lt;/a&gt;&amp;nbsp;de tentar realizar um ataque com 8 drones &amp;quot;kamikaze&amp;quot; perto da usina nuclear de Zaporizhzhia, informaram as ag&amp;ecirc;ncias estatais russas &amp;quot;TASS&amp;quot; e &amp;quot;RIA&amp;quot; citando um comunicado oficial.&lt;/p&gt;\r\n\r\n&lt;p&gt;Esse documento informa que todos os drones n&amp;atilde;o eram tripulados e foram derrubados e que os n&amp;iacute;veis de radia&amp;ccedil;&amp;atilde;o pr&amp;oacute;ximos &amp;agrave; usina est&amp;atilde;o normais.&lt;/p&gt;\r\n\r\n&lt;p&gt;&lt;img alt=&quot;Mapa mostra conflito em Zaporizhzhia — Foto: g1&quot; src=&quot;https://s2.glbimg.com/hP9Zd6Y20ch88qbxP54_T27WPvg=/0x0:650x706/984x0/smart/filters:strip_icc()/i.s3.glbimg.com/v1/AUTH_59edd422c0c84a879bd37670ae4f538a/internal_photos/bs/2022/m/p/swaascSHCinZ6PIlMiHw/mapas-ucrania-5-1-.png&quot; /&gt;&lt;/p&gt;\r\n\r\n&lt;p&gt;Zaporizhzhia &amp;eacute; uma das cidades que est&amp;aacute; em um referendo de anexa&amp;ccedil;&amp;atilde;o &amp;agrave; R&amp;uacute;ssia. O per&amp;iacute;odo de vota&amp;ccedil;&amp;atilde;o teve in&amp;iacute;cio na &amp;uacute;ltima sexta-feira e deve terminar nesta ter&amp;ccedil;a-feira (27).&lt;/p&gt;\r\n\r\n&lt;p&gt;A vota&amp;ccedil;&amp;atilde;o n&amp;atilde;o &amp;eacute; apoiada pelos membros do G7 e da Uni&amp;atilde;o Europeia. A Ucr&amp;acirc;nia disse que tamb&amp;eacute;m n&amp;atilde;o ir&amp;aacute; reconhecer os resultados.&lt;/p&gt;', 'IMG-6330ad8e6a4e71.56937164.jpg'),
(107, 'O Estado americano onde voltou a valer lei de aborto do século 19', 'A regra proíbe interrupção da gravidez mesmo em caso de estupro.', '2022-09-26', '&lt;p&gt;Uma lei criada no s&amp;eacute;culo 19 que determina a proibi&amp;ccedil;&amp;atilde;o quase total do aborto voltou a valer no Arizona, nos&amp;nbsp;&lt;a href=&quot;https://g1.globo.com/tudo-sobre/estados-unidos/&quot;&gt;Estados Unidos&lt;/a&gt;.&lt;/p&gt;\r\n\r\n&lt;p&gt;Uma ju&amp;iacute;za estadual suspendeu uma liminar que impedia a aplica&amp;ccedil;&amp;atilde;o da lei, que data de 1864. A regra permite aborto apenas para salvar a vida da m&amp;atilde;e.&lt;/p&gt;\r\n\r\n&lt;p&gt;Isso foi poss&amp;iacute;vel porque, em junho deste ano, a Suprema Corte dos EUA revogou a decis&amp;atilde;o no caso conhecido como &amp;quot;Roe versus Wade&amp;quot;, que determinava que havia um direito constitucional ao aborto em &amp;acirc;mbito nacional.&lt;/p&gt;\r\n\r\n&lt;p&gt;A revoga&amp;ccedil;&amp;atilde;o n&amp;atilde;o tornou o aborto automaticamente ilegal, mas deu aos Estados o poder de impor suas pr&amp;oacute;prias proibi&amp;ccedil;&amp;otilde;es. Desde ent&amp;atilde;o, os Estados v&amp;ecirc;m decidindo se o procedimento &amp;eacute; permitido em seu territ&amp;oacute;rio e em quais situa&amp;ccedil;&amp;otilde;es.&lt;/p&gt;\r\n\r\n&lt;p&gt;A lei do Arizona &amp;eacute; anterior at&amp;eacute; mesmo &amp;agrave; funda&amp;ccedil;&amp;atilde;o do Estado e inclui pena de dois a cinco anos de pris&amp;atilde;o para quem ajudar algu&amp;eacute;m a fazer um aborto. A lei havia sido bloqueada por uma decis&amp;atilde;o liminar em 1973, ap&amp;oacute;s a hist&amp;oacute;rica decis&amp;atilde;o de &amp;quot;Roe versus Wade&amp;quot;.&lt;/p&gt;\r\n\r\n&lt;p&gt;A revoga&amp;ccedil;&amp;atilde;o da decis&amp;atilde;o nacional, no entanto, permitiu que a liminar fosse derrubada, o que aconteceu na sexta-feira (23), por decis&amp;atilde;o da ju&amp;iacute;za Kellie Johnson, do Tribunal Superior do Condado de Pima.&lt;/p&gt;', 'IMG-6330f29ae8f144.91224646.jpg'),
(108, 'Em menos de um mês, queimadas consomem 25% do Parque Nacional de Brasília', 'Fogo destruiu plantações de pequenos agricultores da região.', '2022-09-26', '&lt;p&gt;Duas queimadas no m&amp;ecirc;s de setembro j&amp;aacute; consumiram 10 hectares da vegeta&amp;ccedil;&amp;atilde;o de Cerrado do Parque Nacional de&amp;nbsp;&lt;a href=&quot;https://g1.globo.com/df/distrito-federal/cidade/brasilia/&quot;&gt;Bras&amp;iacute;lia&lt;/a&gt;, no DF. O montante &amp;eacute; equivalente a 25% do total da unidade de conserva&amp;ccedil;&amp;atilde;o.&lt;/p&gt;\r\n\r\n&lt;p&gt;O primeiro inc&amp;ecirc;ndio come&amp;ccedil;ou no &amp;uacute;ltimo dia 5 e consumiu quase quatro mil hectares de Cerrado. Foram 5 dias de combate. As equipes mal terminaram um combate e j&amp;aacute; tiveram outro no dia 14.&lt;/p&gt;\r\n\r\n&lt;p&gt;Desta vez, o fogo come&amp;ccedil;ou fora do parque, mas entrou no local, consumindo mais 5 mil hectares de mata nativa.&lt;/p&gt;\r\n\r\n&lt;p&gt;Especialistas explicam que o Cerrado tem capacidade para se recuperar, por conta de suas reservas subterr&amp;acirc;neas e cascas grossas. Essa &amp;eacute; a esperan&amp;ccedil;a de agricultoras que perderam suas planta&amp;ccedil;&amp;otilde;es.&lt;/p&gt;', 'IMG-6330f2bc1a8042.87605743.jpg'),
(109, 'Tempestade Fiona atinge costa leste do Canadá e deixa 500 mil casas sem luz', 'Além dos ventos, ondas de mais de 12 metros também atingiram as praias.', '2022-09-26', '&lt;p&gt;A potente tempestade Fiona atingiu, neste s&amp;aacute;bado (24), a costa atl&amp;acirc;ntica do&amp;nbsp;&lt;a href=&quot;https://g1.globo.com/tudo-sobre/canada/&quot;&gt;Canad&amp;aacute;&lt;/a&gt;, deixando mais de 500.000 casas sem luz e causando fortes chuvas e ventos.&lt;/p&gt;\r\n\r\n&lt;p&gt;Embora n&amp;atilde;o seja mais um furac&amp;atilde;o, Fiona ainda tinha ventos de 137 quil&amp;ocirc;metros por hora, tendo tocado o continente como furac&amp;atilde;o de categoria 1 nesta madrugada, ap&amp;oacute;s castigar o Caribe, informaram meteorologistas.&lt;/p&gt;\r\n\r\n&lt;p&gt;A operadora Nova Scotia Power, que abastece a prov&amp;iacute;ncia de Nova Esc&amp;oacute;cia, impactada por Fiona, relatou mais de 400.000 clientes sem energia por volta das 10h50 (hor&amp;aacute;rio de Bras&amp;iacute;lia).&lt;/p&gt;\r\n\r\n&lt;p&gt;Nas outras duas prov&amp;iacute;ncias mais afetadas, a ilha de Pr&amp;iacute;ncipe Eduardo e New Brunswick, as operadoras reportaram 82.000 e 44.000 resid&amp;ecirc;ncias sem energia, respectivamente.&lt;/p&gt;\r\n\r\n&lt;p&gt;Em seu &amp;uacute;ltimo boletim, &amp;agrave;s 8h45 (hor&amp;aacute;rio de Bras&amp;iacute;lia), o Centro Canadense de furac&amp;otilde;es (CHC, na sigla em ingl&amp;ecirc;s) mencionou ventos de mais de 130 km/h na Nova Esc&amp;oacute;cia e observou que Fiona se movia a uma velocidade de 55 km/h no sentido norte-nordeste.&lt;/p&gt;\r\n\r\n&lt;p&gt;&amp;quot;Grandes ondas atingiram a costa leste da Nova Esc&amp;oacute;cia e o sudoeste de Terra Nova; podem passar de 12 metros&amp;quot;, acrescentou o &amp;oacute;rg&amp;atilde;o.&lt;/p&gt;\r\n\r\n&lt;p&gt;&amp;Agrave;s 10h (hor&amp;aacute;rio de Bras&amp;iacute;lia), o Centro Nacional de Furac&amp;otilde;es dos Estados Unidos (NHC, na sigla em ingl&amp;ecirc;s) divulgou que o furac&amp;atilde;o estava sobre o Golfo de S&amp;atilde;o Louren&amp;ccedil;o.&lt;/p&gt;\r\n\r\n&lt;p&gt;&amp;quot;Nunca vimos condi&amp;ccedil;&amp;otilde;es clim&amp;aacute;ticas como essa&amp;quot;, tuitou a pol&amp;iacute;cia de Charlottetown, na Ilha do Pr&amp;iacute;ncipe Eduardo.&lt;/p&gt;\r\n\r\n&lt;blockquote&gt;&amp;quot;&amp;Eacute; inacredit&amp;aacute;vel. N&amp;atilde;o tem eletricidade, n&amp;atilde;o tem wifi, n&amp;atilde;o tem rede&amp;quot;, confirmou o prefeito da cidade, Philip Brown, em entrevista ao canal p&amp;uacute;blico R&amp;aacute;dio-&lt;a href=&quot;https://g1.globo.com/tudo-sobre/canada/&quot;&gt;Canad&amp;aacute;&lt;/a&gt;.&lt;/blockquote&gt;\r\n\r\n&lt;p&gt;&amp;nbsp;&lt;/p&gt;\r\n\r\n&lt;p&gt;&amp;quot;Muitas &amp;aacute;rvores ca&amp;iacute;ram, h&amp;aacute; muitas inunda&amp;ccedil;&amp;otilde;es nas estradas&amp;quot;, acrescentou.&lt;/p&gt;\r\n\r\n&lt;p&gt;As autoridades da Nova Esc&amp;oacute;cia emitiram um alerta de emerg&amp;ecirc;ncia, anunciando poss&amp;iacute;veis cortes de energia e aconselhando a popula&amp;ccedil;&amp;atilde;o a ficar em casa com mantimentos suficientes para durarem pelo menos 72 horas.&lt;/p&gt;\r\n\r\n&lt;p&gt;O primeiro-ministro canadense, Justin Trudeau, afirmou que a tempestade pode &amp;quot;ter um impacto significativo em toda regi&amp;atilde;o&amp;quot; e pediu a todos que &amp;quot;tomem as precau&amp;ccedil;&amp;otilde;es adequadas&amp;quot;.&lt;/p&gt;\r\n\r\n&lt;p&gt;Em Halifax, capital da Nova Esc&amp;oacute;cia, os moradores compraram cilindros de g&amp;aacute;s propano para acampamento, esgotando os estoques das lojas.&lt;/p&gt;', 'IMG-6330f317082618.19982282.jpg'),
(110, 'Véu islâmico: repressão a protestos por morte de jovem deixa mais de 40 vítimas no Irã', 'Número de vítimas subiu para 41 neste sábado (24). Centenas de manifestantes foram presos, juntamente com ativistas reformistas e 17 jornalistas, segundo organização.', '2022-09-26', '&lt;p&gt;Novos protestos pela morte de uma jovem detida pela pol&amp;iacute;cia da moral eclodiram neste s&amp;aacute;bado (24) no Ir&amp;atilde;, apesar da repress&amp;atilde;o sangrenta das for&amp;ccedil;as de seguran&amp;ccedil;a, que j&amp;aacute; deixou 41 mortos, segundo dados oficiais.&lt;/p&gt;\r\n\r\n&lt;p&gt;O principal partido reformista do Ir&amp;atilde; pediu neste s&amp;aacute;bado ao Estado que ponha fim &amp;agrave; obriga&amp;ccedil;&amp;atilde;o de as mulheres usarem v&amp;eacute;u em p&amp;uacute;blico. O uso do len&amp;ccedil;o isl&amp;acirc;mico foi o que levou &amp;agrave; pris&amp;atilde;o da jovem Mahsa Amini, 22 anos.&lt;/p&gt;\r\n\r\n&lt;p&gt;Centenas de manifestantes foram presos, juntamente com ativistas reformistas e 17 jornalistas, segundo o Comit&amp;ecirc; para a Prote&amp;ccedil;&amp;atilde;o dos Jornalistas (CPJ), entre eles Niloufar Hamedi, do jornal reformista &amp;quot;Shargh&amp;quot;, que noticiou a morte de Mahsa.&lt;/p&gt;\r\n\r\n&lt;p&gt;&lt;strong&gt;LEIA TAMB&amp;Eacute;M&lt;/strong&gt;&lt;/p&gt;\r\n\r\n&lt;p&gt;&amp;nbsp;&lt;/p&gt;\r\n\r\n&lt;ul&gt;\r\n	&lt;li&gt;&lt;a href=&quot;https://g1.globo.com/mundo/noticia/2022/09/22/a-revolta-de-iranianas-contra-uso-obrigatorio-de-veu-islamico.ghtml&quot;&gt;A revolta de iranianas contra uso obrigat&amp;oacute;rio de v&amp;eacute;u isl&amp;acirc;mico&lt;/a&gt;&lt;/li&gt;\r\n	&lt;li&gt;&lt;a href=&quot;https://g1.globo.com/mundo/noticia/2022/09/22/ira-bloqueia-acesso-a-redes-sociais-por-protestos-por-veu-islamico.ghtml&quot;&gt;Ir&amp;atilde; bloqueia acesso a redes sociais por protestos por v&amp;eacute;u isl&amp;acirc;mico&lt;/a&gt;&lt;/li&gt;\r\n&lt;/ul&gt;\r\n\r\n&lt;p&gt;&amp;nbsp;&lt;/p&gt;\r\n\r\n&lt;p&gt;A TV estatal anunciou que o n&amp;uacute;mero de mortos era de 41. Tamb&amp;eacute;m exibiu imagens de manifestantes nas ruas do norte e oeste de Teer&amp;atilde;, bem como em &amp;quot;algumas prov&amp;iacute;ncias&amp;quot;, informando que os mesmos haviam incendiado propriedades p&amp;uacute;blicas e privadas.&lt;/p&gt;\r\n\r\n&lt;p&gt;O grupo Iran Human Rights estimou o n&amp;uacute;mero de mortos em 54, excluindo funcion&amp;aacute;rios da seguran&amp;ccedil;a, e afirmou que, em muitos casos, as autoridades condicionaram a devolu&amp;ccedil;&amp;atilde;o dos corpos dos mortos &amp;agrave;s suas fam&amp;iacute;lias a concordarem com enterros secretos. A ONG, com sede em Oslo, indicou que a maioria das mortes ocorreu nas prov&amp;iacute;ncias de Guilan e Mazandaran.&lt;/p&gt;\r\n\r\n&lt;p&gt;O webmonitor NetBlocks informou que o Skype est&amp;aacute; restrito no pa&amp;iacute;s, como parte do apag&amp;atilde;o nas comunica&amp;ccedil;&amp;otilde;es que afeta outras plataformas e redes sociais, como Instagram, WhatsApp e LinkedIn.&lt;/p&gt;\r\n\r\n&lt;p&gt;&amp;nbsp;&lt;/p&gt;\r\n\r\n&lt;h2&gt;Bases de mil&amp;iacute;cias atacadas&lt;/h2&gt;\r\n\r\n&lt;p&gt;&amp;nbsp;&lt;/p&gt;\r\n\r\n&lt;p&gt;Autoridades reportaram ondas de pris&amp;otilde;es: o chefe de pol&amp;iacute;cia de Guilan anunciou &amp;quot;a deten&amp;ccedil;&amp;atilde;o de 739 manifestantes, incluindo 60 mulheres&amp;quot;, somente naquela prov&amp;iacute;ncia.&lt;/p&gt;\r\n\r\n&lt;p&gt;Os protestos eclodiram novamente na noite deste s&amp;aacute;bado na capital da prov&amp;iacute;ncia, Rasht, bem como em v&amp;aacute;rias partes de Teer&amp;atilde;, segundo v&amp;iacute;deos publicados nas redes sociais. A pol&amp;iacute;cia de choque foi mobilizada em grande n&amp;uacute;mero no norte de Teer&amp;atilde; ap&amp;oacute;s o anoitecer, informaram testemunhas &amp;agrave; AFP.&lt;/p&gt;\r\n\r\n&lt;p&gt;Segundo a ONG curda de defesa dos direitos humanos Hengaw, com sede na Noruega, os manifestantes &amp;quot;tomaram o controle&amp;quot; de partes da cidade de Oshnavih, na prov&amp;iacute;ncia do Azerbaij&amp;atilde;o Ocidental.&lt;/p&gt;\r\n\r\n&lt;p&gt;O Poder Judici&amp;aacute;rio do Ir&amp;atilde; admitiu que os manifestantes haviam atacado tr&amp;ecirc;s bases da Basij&amp;quot;, mil&amp;iacute;cia isl&amp;acirc;mica que trabalha sob ordens do Estado, em Oshnaviyeh, mas negou que as for&amp;ccedil;as de seguran&amp;ccedil;a tenham perdido o controle da cidade.&lt;/p&gt;\r\n\r\n&lt;p&gt;O ultraconservador Ebrahim Raisi, presidente do Ir&amp;atilde;, afirmou que tinha que lidar &amp;quot;com decis&amp;atilde;o&amp;quot; com aqueles que estavam por tr&amp;aacute;s da viol&amp;ecirc;ncia. O coment&amp;aacute;rio foi feito pouco depois de a Anistia Internacional alertar para &amp;quot;o risco de um derramamento de sangue ainda maior&amp;quot;, facilitado por um &amp;quot;apag&amp;atilde;o deliberado da internet&amp;quot; por parte das autoridades, em uma tentativa de dificultar as manifesta&amp;ccedil;&amp;otilde;es e evitar que as imagens da repress&amp;atilde;o cheguem ao exterior.&lt;/p&gt;\r\n\r\n&lt;p&gt;A ONG, com sede em Londres, afirmou que provas colhidas em 20 cidades do Ir&amp;atilde; apontam para &amp;quot;um padr&amp;atilde;o terr&amp;iacute;vel das for&amp;ccedil;as de seguran&amp;ccedil;a iranianas, que atiram d', 'IMG-6330f336d14937.81633228.jpg'),
(111, 'Teste de notícia', 'Subtitulo teste', '2022-09-26', '&lt;p&gt;Teste de conte&amp;uacute;do&lt;/p&gt;', 'IMG-6330f40caffe44.32390998.jpg');

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuario`
--

CREATE TABLE `usuario` (
  `usuario_id` int(11) NOT NULL,
  `usuario` varchar(45) NOT NULL,
  `senha` varchar(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `usuario`
--

INSERT INTO `usuario` (`usuario_id`, `usuario`, `senha`) VALUES
(1, 'admin', '293d8ec45a52e58bb9a942e8b658a24c');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `curso`
--
ALTER TABLE `curso`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `noticia`
--
ALTER TABLE `noticia`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`usuario_id`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `curso`
--
ALTER TABLE `curso`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de tabela `noticia`
--
ALTER TABLE `noticia`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=112;

--
-- AUTO_INCREMENT de tabela `usuario`
--
ALTER TABLE `usuario`
  MODIFY `usuario_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
