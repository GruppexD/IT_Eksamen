
-- --------------------------------------------------------

--
-- Struktur-dump for tabellen `bordgruppe`
--
-- Oprettelse: 04. 04 2017 kl. 09:09:32
-- Seneste opdatering: 07. 04 2017 kl. 07:04:20
--

CREATE TABLE `bordgruppe` (
  `B_ID` int(11) NOT NULL,
  `Navn` text CHARACTER SET utf8 COLLATE utf8_danish_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Data dump for tabellen `bordgruppe`
--

INSERT INTO `bordgruppe` (`B_ID`, `Navn`) VALUES
(1, 'bo01'),
(2, 'bo01'),
(3, 'bo03'),
(4, 'bo04'),
(5, 'bo05');
