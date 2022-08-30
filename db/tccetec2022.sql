-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 31-Ago-2022 às 00:55
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
CREATE DEFINER=`root`@`localhost` PROCEDURE `salvar_noticia` (IN `var_id` INT, IN `var_titulo` VARCHAR(50), IN `var_subtitulo` VARCHAR(200), IN `var_data` DATE, IN `var_corpo` VARCHAR(5000), IN `var_imagem` VARCHAR(100))  NO SQL
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
(55, 'Lula diz que igreja não é palanque político em ato', 'Candidato do PT à Presidência da República defendeu o Estado laico. O evento aconteceu no Vale do Anhangabaú, no fim da manhã deste sábado (20).', '2022-08-20', 'O ex-presidente Luiz Inácio Lula da Silva (PT), candidato à Presidência da República, reuniu militantes e apoiadores no fim da manhã deste sábado (20) em um ato de campanha no Vale do Anhangabaú, em São Paulo.\r\n\r\nNo discurso, o candidato acusou seus opositores de estarem usando a igreja como palanque político. Lula disse que defende o Estado laico.\r\n\r\n“Tem muita fake news religiosa correndo por esse mundo, tem demônio sendo chamado de Deus e gente honesta sendo chamada de demônio, porque tem gente que não está tratando da igreja para gostar da fé e da espiritualidade e está fazendo da igreja um palanque político ou uma empresa para ganhar dinheiro&#34;, afirmou.\r\n\r\nE emendou: &#34;E eu quero dizer para vocês. Eu, Luiz Inácio Lula da Silva, defendo o Estado laico, o Estado não tem que ter religião e todas as religiões precisam ser defendidas pelo Estado, e as igrejas não têm que ter partido político porque as igrejas precisam cuidar da fé e da espiritualidade das pessoas, e não cuidar da candidatura de falsos profetas ou de fariseus que estão engando esse povo o dia inteiro. Eu falo isso com a tranquilidade de um homem que crê em Deus. Eu, quando quero conversar com Deus, não preciso de padres ou de pastores. Eu posso me trancar no meu quarto e conversar com Deus quantas horas eu quiser e sem precisar de favores.&#34;\r\n\r\nLula dividiu o palanque com o candidato ao governo de São Paulo, Fernando Haddad (PT), o candidato a vice-presidente, Geraldo Alckmin (PSB); a ex-presidente Dilma Rousseff (PT), o senador Randolfe Rodrigues (Rede), o deputado federal André Janones (Avante) e o candidato ao Senado por São Paulo Márcio França(PSB) .\r\n\r\nNo início do seu discurso, Lula fez uma defesa da ex-presidente Dilma e lembrou a campanha do impeachment. Sem citar o nome do presidente Jair Bolsonaro (PL), o petista disse: &#34; O que é uma pedalada contra as motociatas que esse genocida faz hoje? &#34;\r\n\r\nO evento começou por volta das 11h e durou cerca de duas horas e meia. Antes de Lula, discursaram Janones, Randolfe, Márcio França, Alckmin e Dilma. Um palco com cinco telões foi montado para o evento. Neles também eram exibidos jingles e imagens da campanha.\r\n\r\nDurante o ato, militantes e convidados cantaram músicas com referência ao recente episódio em que o presidente Bolsonaro foi chamado de &#34;tchutchuca do Centrão&#34; por um influencer.', 'IMG-63013b6e9a3017.58198550.png'),
(56, 'Noticia boa', 'Abc', '2022-08-20', 'Muito boa', 'IMG-63013b9e97ca98.88987293.jpg'),
(58, 'Lorem ipsum dolor sit amet', 'In vel metus eget felis imperdiet vehicula eu ut quam.', '2022-08-20', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras gravida imperdiet metus, vitae varius nulla egestas at. Donec fringilla tincidunt erat, vel porttitor turpis consectetur non. In laoreet vel eros bibendum sagittis. Mauris non iaculis quam. Maecenas at blandit erat, in laoreet nibh. Donec mauris erat, finibus sed orci non, interdum vehicula risus. Curabitur ornare facilisis pretium. Integer lacinia porta libero, non blandit dui rutrum non. Integer a dolor id lacus auctor pretium sed quis diam. Duis vulputate aliquam lacus sed elementum.\r\n\r\nIn vel metus eget felis imperdiet vehicula eu ut quam. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Morbi consectetur, tellus et cursus vestibulum, lorem sapien vehicula dolor, ac euismod justo nibh condimentum nisl. Cras tellus nibh, tristique nec ultricies sit amet, molestie vel elit. Morbi nec ultricies ligula. Morbi vitae tempor tellus, ut consequat dolor. Nullam gravida venenatis est, interdum fermentum sem ullamcorper at. Nunc ultricies lobortis augue vel finibus. Morbi sit amet diam nulla. Aenean non elementum ante. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi felis enim, dapibus vulputate elit sed, tristique eleifend dui. Pellentesque a faucibus nisi. Vestibulum ullamcorper, nibh a elementum scelerisque, nunc turpis rutrum magna, non sagittis arcu lacus in purus. Integer tristique facilisis fringilla. Nullam et fringilla mi, vel tincidunt enim.\r\n\r\nVivamus a eros felis. Morbi hendrerit suscipit neque eu facilisis. Proin dictum eu justo et commodo. Nullam pharetra, odio tincidunt varius maximus, lorem tortor lobortis lacus, sit amet ornare velit turpis quis sem. Nullam risus turpis, posuere vel finibus ut, molestie vel est. Nam vestibulum purus non leo lobortis aliquet. Morbi commodo mi eu lacus porta, eu cursus est sollicitudin. Phasellus dignissim eros vel est maximus, id ultricies magna vestibulum.\r\n\r\nMorbi id libero maximus ex scelerisque dictum. Phasellus placerat nibh eget nisl rutrum pellentesque. Phasellus lorem tellus, accumsan in mi eget, pellentesque consequat diam. Integer scelerisque eget tortor sed accumsan. Morbi consequat nulla sapien. Aliquam aliquam lorem odio, ut cursus lectus pharetra nec. Nullam vel purus ligula. Sed accumsan feugiat sapien in rutrum. Nulla in dictum purus. Vestibulum at nisl id augue sagittis congue. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae; Cras viverra, mi at vehicula blandit, massa sem sollicitudin sapien, quis vulputate nisi velit vitae nisl. Nam in pharetra est.\r\n\r\nDonec et fermentum tellus, eget euismod massa. Praesent vel sagittis nunc. Etiam id efficitur risus. Quisque efficitur nunc quis tempus pulvinar. Duis vitae imperdiet eros. Duis libero arcu, dictum vitae risus non, fringilla tincidunt nunc. Pellentesque dignissim diam ut elementum maximus. Sed condimentum magna vel massa fermentum, sit amet mollis metus laoreet. Suspendisse suscipit ut diam sit amet tempor. Ut consequat tellus est, ac tempor velit efficitur eu. Fusce et congue eros. Sed est odio, accumsan cursus egestas at, convallis a nisi. Praesent convallis, ex lacinia aliquam ultrices, erat sem bibendum libero, vel rhoncus magna arcu id risus. In hac habitasse platea dictumst.', 'IMG-63013eef3dda68.56875364.png'),
(59, 'Lorem ipsum dolor sit amet', 'In vel metus eget felis imperdiet vehicula eu ut quam.', '2022-08-20', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras gravida imperdiet metus, vitae varius nulla egestas at. Donec fringilla tincidunt erat, vel porttitor turpis consectetur non. In laoreet vel eros bibendum sagittis. Mauris non iaculis quam. Maecenas at blandit erat, in laoreet nibh. Donec mauris erat, finibus sed orci non, interdum vehicula risus. Curabitur ornare facilisis pretium. Integer lacinia porta libero, non blandit dui rutrum non. Integer a dolor id lacus auctor pretium sed quis diam. Duis vulputate aliquam lacus sed elementum.\r\n\r\nIn vel metus eget felis imperdiet vehicula eu ut quam. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Morbi consectetur, tellus et cursus vestibulum, lorem sapien vehicula dolor, ac euismod justo nibh condimentum nisl. Cras tellus nibh, tristique nec ultricies sit amet, molestie vel elit. Morbi nec ultricies ligula. Morbi vitae tempor tellus, ut consequat dolor. Nullam gravida venenatis est, interdum fermentum sem ullamcorper at. Nunc ultricies lobortis augue vel finibus. Morbi sit amet diam nulla. Aenean non elementum ante. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi felis enim, dapibus vulputate elit sed, tristique eleifend dui. Pellentesque a faucibus nisi. Vestibulum ullamcorper, nibh a elementum scelerisque, nunc turpis rutrum magna, non sagittis arcu lacus in purus. Integer tristique facilisis fringilla. Nullam et fringilla mi, vel tincidunt enim.\r\n\r\nVivamus a eros felis. Morbi hendrerit suscipit neque eu facilisis. Proin dictum eu justo et commodo. Nullam pharetra, odio tincidunt varius maximus, lorem tortor lobortis lacus, sit amet ornare velit turpis quis sem. Nullam risus turpis, posuere vel finibus ut, molestie vel est. Nam vestibulum purus non leo lobortis aliquet. Morbi commodo mi eu lacus porta, eu cursus est sollicitudin. Phasellus dignissim eros vel est maximus, id ultricies magna vestibulum.\r\n\r\nMorbi id libero maximus ex scelerisque dictum. Phasellus placerat nibh eget nisl rutrum pellentesque. Phasellus lorem tellus, accumsan in mi eget, pellentesque consequat diam. Integer scelerisque eget tortor sed accumsan. Morbi consequat nulla sapien. Aliquam aliquam lorem odio, ut cursus lectus pharetra nec. Nullam vel purus ligula. Sed accumsan feugiat sapien in rutrum. Nulla in dictum purus. Vestibulum at nisl id augue sagittis congue. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae; Cras viverra, mi at vehicula blandit, massa sem sollicitudin sapien, quis vulputate nisi velit vitae nisl. Nam in pharetra est.\r\n\r\nDonec et fermentum tellus, eget euismod massa. Praesent vel sagittis nunc. Etiam id efficitur risus. Quisque efficitur nunc quis tempus pulvinar. Duis vitae imperdiet eros. Duis libero arcu, dictum vitae risus non, fringilla tincidunt nunc. Pellentesque dignissim diam ut elementum maximus. Sed condimentum magna vel massa fermentum, sit amet mollis metus laoreet. Suspendisse suscipit ut diam sit amet tempor. Ut consequat tellus est, ac tempor velit efficitur eu. Fusce et congue eros. Sed est odio, accumsan cursus egestas at, convallis a nisi. Praesent convallis, ex lacinia aliquam ultrices, erat sem bibendum libero, vel rhoncus magna arcu id risus. In hac habitasse platea dictumst.', 'IMG-63013f1df2df86.81782601.jpeg'),
(60, 'Lorem ipsum dolor sit amet, consectetur adipiscing', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras gravida imperdiet metus, vitae varius nulla egestas at. Donec fringilla tincidunt erat, vel porttitor turpis consectetur non. In laoreet v', '2022-08-20', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras gravida imperdiet metus, vitae varius nulla egestas at. Donec fringilla tincidunt erat, vel porttitor turpis consectetur non. In laoreet vel eros bibendum sagittis. Mauris non iaculis quam. Maecenas at blandit erat, in laoreet nibh. Donec mauris erat, finibus sed orci non, interdum vehicula risus. Curabitur ornare facilisis pretium. Integer lacinia porta libero, non blandit dui rutrum non. Integer a dolor id lacus auctor pretium sed quis diam. Duis vulputate aliquam lacus sed elementum.\r\n\r\nIn vel metus eget felis imperdiet vehicula eu ut quam. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Morbi consectetur, tellus et cursus vestibulum, lorem sapien vehicula dolor, ac euismod justo nibh condimentum nisl. Cras tellus nibh, tristique nec ultricies sit amet, molestie vel elit. Morbi nec ultricies ligula. Morbi vitae tempor tellus, ut consequat dolor. Nullam gravida venenatis est, interdum fermentum sem ullamcorper at. Nunc ultricies lobortis augue vel finibus. Morbi sit amet diam nulla. Aenean non elementum ante. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi felis enim, dapibus vulputate elit sed, tristique eleifend dui. Pellentesque a faucibus nisi. Vestibulum ullamcorper, nibh a elementum scelerisque, nunc turpis rutrum magna, non sagittis arcu lacus in purus. Integer tristique facilisis fringilla. Nullam et fringilla mi, vel tincidunt enim.\r\n\r\nVivamus a eros felis. Morbi hendrerit suscipit neque eu facilisis. Proin dictum eu justo et commodo. Nullam pharetra, odio tincidunt varius maximus, lorem tortor lobortis lacus, sit amet ornare velit turpis quis sem. Nullam risus turpis, posuere vel finibus ut, molestie vel est. Nam vestibulum purus non leo lobortis aliquet. Morbi commodo mi eu lacus porta, eu cursus est sollicitudin. Phasellus dignissim eros vel est maximus, id ultricies magna vestibulum.\r\n\r\nMorbi id libero maximus ex scelerisque dictum. Phasellus placerat nibh eget nisl rutrum pellentesque. Phasellus lorem tellus, accumsan in mi eget, pellentesque consequat diam. Integer scelerisque eget tortor sed accumsan. Morbi consequat nulla sapien. Aliquam aliquam lorem odio, ut cursus lectus pharetra nec. Nullam vel purus ligula. Sed accumsan feugiat sapien in rutrum. Nulla in dictum purus. Vestibulum at nisl id augue sagittis congue. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae; Cras viverra, mi at vehicula blandit, massa sem sollicitudin sapien, quis vulputate nisi velit vitae nisl. Nam in pharetra est.\r\n\r\nDonec et fermentum tellus, eget euismod massa. Praesent vel sagittis nunc. Etiam id efficitur risus. Quisque efficitur nunc quis tempus pulvinar. Duis vitae imperdiet eros. Duis libero arcu, dictum vitae risus non, fringilla tincidunt nunc. Pellentesque dignissim diam ut elementum maximus. Sed condimentum magna vel massa fermentum, sit amet mollis metus laoreet. Suspendisse suscipit ut diam sit amet tempor. Ut consequat tellus est, ac tempor velit efficitur eu. Fusce et congue eros. Sed est odio, accumsan cursus egestas at, convallis a nisi. Praesent convallis, ex lacinia aliquam ultrices, erat sem bibendum libero, vel rhoncus magna arcu id risus. In hac habitasse platea dictumst.', 'IMG-63013f2f6c9cd2.07425016.png');

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
-- AUTO_INCREMENT de tabela `noticia`
--
ALTER TABLE `noticia`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=61;

--
-- AUTO_INCREMENT de tabela `usuario`
--
ALTER TABLE `usuario`
  MODIFY `usuario_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
