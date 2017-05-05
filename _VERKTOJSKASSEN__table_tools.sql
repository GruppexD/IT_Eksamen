
-- --------------------------------------------------------

--
-- Struktur-dump for tabellen `tools`
--
-- Oprettelse: 28. 03 2017 kl. 09:22:17
-- Seneste opdatering: 07. 04 2017 kl. 07:03:48
--

CREATE TABLE `tools` (
  `V_ID` int(11) NOT NULL,
  `Navn` tinytext CHARACTER SET utf8 COLLATE utf8_danish_ci NOT NULL,
  `Type` tinytext CHARACTER SET utf8 COLLATE utf8_danish_ci NOT NULL,
  `Specification` text CHARACTER SET utf8 COLLATE utf8_danish_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Data dump for tabellen `tools`
--

INSERT INTO `tools` (`V_ID`, `Navn`, `Type`, `Specification`) VALUES
(1, 'h1', 'Hammer', 'liste'),
(4, 'h4', 'Hammer', 'liste'),
(2, 'h2', 'Hammer', 'liste'),
(5, 'h5', 'Hammer', 'liste'),
(3, 'h3', 'Hammer', 'liste'),
(6, 'h6', 'Hammer', 'liste'),
(7, 'f1', 'Fil', 'fin'),
(8, 'f2', 'Fil', 'fin'),
(9, 'f3', 'Fil', 'grov'),
(10, 'f4', 'Fil', 'grov'),
(11, 'v1', 'Vinkel', 'jern'),
(12, 'v2', 'Vinkel', 'jern'),
(13, 'l1', 'Lineal', 'wood 1 m'),
(14, 'l2', 'Lineal', 'wood 1 m'),
(15, 'l3', 'Lineal', 'wood 1 m'),
(16, 'l4', 'Lineal', 'wood 1 m'),
(17, 'l5', 'Lineal', 'wood 1 m'),
(18, 'l6', 'Lineal', 'wood 1 m'),
(19, 'b1', 'Boremaskine', 'husk bateri');
