-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Erstellungszeit: 26. Okt 2017 um 22:08
-- Server-Version: 10.1.21-MariaDB
-- PHP-Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Datenbank: `izlasci`
--

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `album`
--

CREATE TABLE `album` (
  `id_album` int(10) NOT NULL,
  `album_name` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `age_type` int(3) NOT NULL,
  `id_user` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Daten für Tabelle `album`
--

INSERT INTO `album` (`id_album`, `album_name`, `age_type`, `id_user`) VALUES
(35, 'jebac', 18, 33),
(36, '', 0, 34),
(37, 'akl', 0, 34);

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `album_image`
--

CREATE TABLE `album_image` (
  `id_album_img` int(10) NOT NULL,
  `id_album` int(10) NOT NULL,
  `id_image` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Daten für Tabelle `album_image`
--

INSERT INTO `album_image` (`id_album_img`, `id_album`, `id_image`) VALUES
(46, 35, 46),
(47, 36, 47),
(48, 37, 48);

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `boja_kose`
--

CREATE TABLE `boja_kose` (
  `id_boja_kose` int(2) NOT NULL,
  `boja_kose` varchar(30) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Daten für Tabelle `boja_kose`
--

INSERT INTO `boja_kose` (`id_boja_kose`, `boja_kose`) VALUES
(1, 'Keine Antwort'),
(2, 'Blond'),
(3, 'Braun'),
(4, 'Grau'),
(5, 'Graumeliert'),
(6, 'Platinblond'),
(7, 'Rot/Kastanienbraun'),
(8, 'Schwarz'),
(9, 'Silber'),
(10, 'Weiss'),
(11, 'Andere Haarfarbe'),
(12, 'Haare? Welche Haare?');

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `boja_ociju`
--

CREATE TABLE `boja_ociju` (
  `id_boja_ociju` int(1) NOT NULL,
  `boja_ociju` varchar(30) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Daten für Tabelle `boja_ociju`
--

INSERT INTO `boja_ociju` (`id_boja_ociju`, `boja_ociju`) VALUES
(1, 'Keine Antwort'),
(2, 'Schwarz'),
(3, 'Braun'),
(4, 'Blau'),
(5, 'Gemischt (Hazel)'),
(6, 'Grun'),
(7, 'Grau'),
(8, 'Andere'),
(9, 'Undefinierbar/Variabel');

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `brak_status`
--

CREATE TABLE `brak_status` (
  `id_brak_status` int(1) NOT NULL,
  `brak_status` varchar(30) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Daten für Tabelle `brak_status`
--

INSERT INTO `brak_status` (`id_brak_status`, `brak_status`) VALUES
(1, 'Single');

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `brus`
--

CREATE TABLE `brus` (
  `id_brus` int(11) NOT NULL,
  `naziv_brus` text COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Daten für Tabelle `brus`
--

INSERT INTO `brus` (`id_brus`, `naziv_brus`) VALUES
(1, 'Keine Antwort'),
(2, 'A'),
(3, 'B'),
(4, 'C'),
(5, 'D'),
(6, 'DD'),
(7, 'Über DD/E');

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `drzava`
--

CREATE TABLE `drzava` (
  `id_drzava` int(11) NOT NULL,
  `naziv` varchar(30) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Daten für Tabelle `drzava`
--

INSERT INTO `drzava` (`id_drzava`, `naziv`) VALUES
(1, 'Keine Antwort'),
(2, 'Schweiz'),
(3, 'Frankreich'),
(4, 'England'),
(5, 'Deutschland');

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `duzina_kose`
--

CREATE TABLE `duzina_kose` (
  `id_duz_kose` int(1) NOT NULL,
  `duzina_kose` varchar(30) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Daten für Tabelle `duzina_kose`
--

INSERT INTO `duzina_kose` (`id_duz_kose`, `duzina_kose`) VALUES
(1, 'Keine Antwort'),
(2, 'Lang'),
(3, 'Mittellang'),
(4, 'Kurz'),
(5, 'Burstenhaarschnitt'),
(6, 'Rasiert'),
(7, 'Zuruckgehend'),
(8, 'Kahl');

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `gradja`
--

CREATE TABLE `gradja` (
  `id_gradja` int(11) NOT NULL,
  `naziv_gradja` varchar(30) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Daten für Tabelle `gradja`
--

INSERT INTO `gradja` (`id_gradja`, `naziv_gradja`) VALUES
(1, 'Keine Antwort'),
(2, 'Kurvig/Füllig'),
(3, 'Athletisch'),
(4, 'Durchschnitt'),
(5, 'Üppig/Stattlich'),
(6, 'Ein paar Pfund extra'),
(7, 'Schlank');

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `images`
--

CREATE TABLE `images` (
  `id_image` int(10) NOT NULL,
  `image_src` varchar(150) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `image_resized` varchar(150) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Daten für Tabelle `images`
--

INSERT INTO `images` (`id_image`, `image_src`, `image_resized`) VALUES
(46, 'img/albums/hotmiee1.jpg', 'img/albums/albums_resized/hotmiee1.jpg'),
(47, 'img/albums/hotmiee1.35jpg', 'img/albums/albums_resized/hotmiee1.35jpg'),
(48, 'img/albums/68663865-apple-wallpapers.jpg', 'img/albums/albums_resized/68663865-apple-wallpapers.jpg');

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `kanton`
--

CREATE TABLE `kanton` (
  `id_kanton` int(11) NOT NULL,
  `naziv_kanton` varchar(30) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Daten für Tabelle `kanton`
--

INSERT INTO `kanton` (`id_kanton`, `naziv_kanton`) VALUES
(1, 'Zürich'),
(2, 'Bern'),
(3, 'Luzern'),
(4, 'Uri'),
(5, 'Schwyz'),
(6, 'Obwalden'),
(7, 'Nidwalden'),
(8, 'Glarus'),
(9, 'Zug'),
(10, 'Freiburg'),
(11, 'Solothurn'),
(12, 'Basel-Stadt'),
(13, 'Basel-Landschaft'),
(14, 'Schaffhausen'),
(15, 'Appenzell Ausserrhoden'),
(16, 'Appenzell Innerrhoden'),
(17, 'St. Gallen'),
(18, 'Graubünden'),
(19, 'Aargau'),
(20, 'Thurgau'),
(21, 'Tessin'),
(22, 'Waadt'),
(23, 'Wallis'),
(24, 'Neuenburg'),
(25, 'Genf'),
(26, 'Jura');

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `kateg`
--

CREATE TABLE `kateg` (
  `id_kat` int(10) NOT NULL,
  `naziv_kat` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Daten für Tabelle `kateg`
--

INSERT INTO `kateg` (`id_kat`, `naziv_kat`) VALUES
(1, 'Anal'),
(2, 'Sex');

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `kategorije`
--

CREATE TABLE `kategorije` (
  `id_kat` int(10) NOT NULL,
  `kategorija` varchar(50) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Daten für Tabelle `kategorije`
--

INSERT INTO `kategorije` (`id_kat`, `kategorija`) VALUES
(1, 'Feinmassage'),
(2, 'Neunsechzig'),
(3, 'Anal'),
(4, 'Domina'),
(5, 'Sklavin'),
(6, 'Bondage'),
(7, 'Leder, Lack & latex'),
(8, 'Rollenspiele'),
(9, 'Klink'),
(10, 'Fusserotik'),
(11, 'Facesitting'),
(12, 'NS Aktiv'),
(13, 'NS Passiv'),
(14, 'Nymphoman'),
(15, 'Sandwich'),
(16, 'Outdoorsex'),
(17, 'Gang Bang'),
(18, 'Stripetease'),
(19, 'Küssen'),
(20, 'Reizwäsche'),
(21, 'Alles mit schutz'),
(22, 'SM'),
(23, 'Sauna'),
(24, 'Verbalerotik'),
(25, 'Alles ohne schutz'),
(26, 'Anal Aktiv'),
(27, 'Auch mit Behinderten'),
(28, 'Auch mit Paaren'),
(29, 'Bizzar'),
(30, 'Cutting'),
(31, 'Faustfick'),
(32, 'Wachs'),
(33, 'Zungenanal Aktiv'),
(34, 'Zungenanal Passi'),
(35, 'Fisten Anal'),
(36, 'Fisten Vaginal'),
(37, 'Franz mit Aufnahme'),
(38, 'GV'),
(39, 'Hodenmassage'),
(40, 'Kavaier'),
(41, 'Klammern Nadel'),
(42, 'Körpermassage'),
(43, 'Kuschelsex'),
(44, 'Peitschen Paddel'),
(45, 'Ins Gesich Spritzen'),
(46, 'Lesben sex'),
(47, 'Tantra'),
(48, 'Dreier'),
(49, 'Franz nature'),
(50, 'Körperbesamung'),
(51, 'Parkplatz sex'),
(52, 'Busenmassage'),
(53, 'Devot'),
(54, 'Eierlecken'),
(55, 'Escort'),
(56, 'Exhibitionist'),
(57, 'Fetisch'),
(58, 'Dildospiele'),
(59, 'Franz mit schlucken'),
(60, 'Franz. Safe');

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `kome_se_pojavljuje`
--

CREATE TABLE `kome_se_pojavljuje` (
  `id_kome_pojavljuje` int(11) NOT NULL,
  `naziv_pojava` varchar(30) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Daten für Tabelle `kome_se_pojavljuje`
--

INSERT INTO `kome_se_pojavljuje` (`id_kome_pojavljuje`, `naziv_pojava`) VALUES
(1, 'Indianisch'),
(2, 'Asiatisch'),
(3, 'Afrikanisch'),
(4, 'Weiss'),
(5, 'Indisch'),
(6, 'Lateinamerikanisch'),
(7, 'Arabisch'),
(8, 'Gemischt'),
(9, 'Andere');

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `njegova_uloga`
--

CREATE TABLE `njegova_uloga` (
  `id_njeg_uloga` int(10) NOT NULL,
  `naziv_njeg_uloga` varchar(30) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Daten für Tabelle `njegova_uloga`
--

INSERT INTO `njegova_uloga` (`id_njeg_uloga`, `naziv_njeg_uloga`) VALUES
(1, 'Keine Antwort'),
(2, 'Dominant'),
(3, 'Unterwurfig'),
(4, 'Switch'),
(5, 'Nicht zutreffend');

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `nocare_sociva`
--

CREATE TABLE `nocare_sociva` (
  `id_naocare_sociva` int(1) NOT NULL,
  `naziv_naoc_soc` varchar(30) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Daten für Tabelle `nocare_sociva`
--

INSERT INTO `nocare_sociva` (`id_naocare_sociva`, `naziv_naoc_soc`) VALUES
(1, 'Keine Antwort'),
(2, 'Brille'),
(3, 'Kontaktlinsen'),
(4, 'Beides'),
(5, 'Keine');

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `oberweite`
--

CREATE TABLE `oberweite` (
  `id_oberweite` int(2) NOT NULL,
  `oberweite` varchar(30) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Daten für Tabelle `oberweite`
--

INSERT INTO `oberweite` (`id_oberweite`, `oberweite`) VALUES
(1, 'Keine Antwort'),
(2, '32 / 70'),
(3, '34 / 75'),
(4, '46 / 80'),
(5, '38 / 85'),
(6, '40 / 90'),
(7, '42 / 95'),
(8, '44 / 100'),
(9, '46+ / 105+');

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `partneri`
--

CREATE TABLE `partneri` (
  `id` int(11) NOT NULL,
  `link` varchar(140) COLLATE utf8_unicode_ci NOT NULL,
  `slika` varchar(140) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `usr` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `status` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Daten für Tabelle `partneri`
--

INSERT INTO `partneri` (`id`, `link`, `slika`, `email`, `usr`, `status`) VALUES
(1, 'https://www.hottime.ch/', 'img/partneri/sexlink_200x100.gif', 'zoran3001@gmail.com', '', 1),
(2, 'https://www.hottime.ch/', 'img/partneri/escort.jpg', 'zoran3001@gmail.com', '', 1),
(3, 'https://www.hottime.ch/', 'img/partneri/sexlink_200x100.gif', 'zoran3001@gmail.com', '', 1),
(4, 'https://www.hottime.ch/', 'img/partneri/escort.jpg', 'zoran3001@gmail.com', '', 2),
(5, 'https://www.hottime.ch/', 'img/partneri/sexlink_200x100.gif', 'zoran3001@gmail.com', '', 2),
(6, 'https://www.hottime.ch/', 'img/partneri/sms-sextreff_200x100.gif', 'zoran3001@gmail.com', '', 2),
(7, 'https://www.hottime.ch/', 'img/partneri/escort.jpg', 'zoran3001@gmail.com', '', 2),
(8, 'https://www.hottime.ch/', 'img/partneri/sexlink_200x100.gif', 'zoran3001@gmail.com', '', 2),
(9, 'www.zoranmratinkovic.com', 'img/partneri/Capture4.JPG', 'zoran3001@gmail.com', '', 2),
(10, 'www.zoranmratinkovic.com', 'img/partneri/sexlink_200x100.gif', 'zoran3001@gmail.com', '', 2),
(11, 'www.zoranmratinkovic.com', 'img/partneri/Capture4.JPG', 'zoran3001@gmail.com', '', 2),
(12, 'www.zoranmratinkovic.com', 'img/partneri/Capture4.JPG', 'zoran3001@gmail.com', '', 2),
(13, 'www.zoranmratinkovic.com', 'img/partneri/swiss-porn_200x100.gif', 'zoran3001@gmail.com', '', 2),
(14, 'www.zoranmratinkovic.com', 'img/partneri/Capture4.JPG', 'zoran3001@gmail.com', '', 2),
(15, 'www.zoranmratinkovic.com', 'img/partneri/swiss-porn_200x100.gif', 'zoran3001@gmail.com', '', 2),
(16, 'www.zoranmratinkovic.com', 'img/partneri/Capture4.JPG', 'zoran3001@gmail.com', '', 2);

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `poreklo`
--

CREATE TABLE `poreklo` (
  `id_poreklo` int(11) NOT NULL,
  `naziv_poreklo` varchar(30) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Daten für Tabelle `poreklo`
--

INSERT INTO `poreklo` (`id_poreklo`, `naziv_poreklo`) VALUES
(1, 'Keine Antwort'),
(2, 'Indianisch'),
(3, 'Asiatisch'),
(4, 'Afrikanisch'),
(5, 'Weiss'),
(6, 'Indisch'),
(7, 'Lateinamerikanisch'),
(8, 'Arabisch'),
(9, 'Gemischt'),
(10, 'Andere');

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `sex_orj`
--

CREATE TABLE `sex_orj` (
  `id_sexorj` int(11) NOT NULL,
  `naziv_sexorj` varchar(30) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Daten für Tabelle `sex_orj`
--

INSERT INTO `sex_orj` (`id_sexorj`, `naziv_sexorj`) VALUES
(1, 'Keine Antwort'),
(2, 'Heterosexuell'),
(3, 'Schwul/lesbisch'),
(4, 'Bisexuell'),
(5, 'Bi-Neugierig');

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `sredjenost`
--

CREATE TABLE `sredjenost` (
  `id_sredjenost` int(1) NOT NULL,
  `sredjenost` varchar(30) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Daten für Tabelle `sredjenost`
--

INSERT INTO `sredjenost` (`id_sredjenost`, `sredjenost`) VALUES
(1, 'Keine Antwort'),
(2, 'Ja komplett'),
(3, 'Sparlich'),
(4, 'Nein');

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `status_gold`
--

CREATE TABLE `status_gold` (
  `id_status` int(1) NOT NULL,
  `status` varchar(10) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Daten für Tabelle `status_gold`
--

INSERT INTO `status_gold` (`id_status`, `status`) VALUES
(1, 'Normal'),
(2, 'SIlber'),
(3, 'Gold'),
(4, 'Platinum'),
(5, 'Admin');

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `tip`
--

CREATE TABLE `tip` (
  `id_tip` int(11) NOT NULL,
  `naziv_tip` varchar(30) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Daten für Tabelle `tip`
--

INSERT INTO `tip` (`id_tip`, `naziv_tip`) VALUES
(1, 'Mann'),
(2, 'Frau'),
(3, 'Paar'),
(4, 'TS/TV/TG'),
(5, 'Gruppe'),
(6, 'Studio/Club');

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `trazim`
--

CREATE TABLE `trazim` (
  `id_trazim` int(11) NOT NULL,
  `Naziv` varchar(20) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Daten für Tabelle `trazim`
--

INSERT INTO `trazim` (`id_trazim`, `Naziv`) VALUES
(1, 'Männer'),
(2, 'Frauen'),
(3, 'Paaren/Gruppen'),
(4, 'TS/TVs');

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `tvoja_uloga`
--

CREATE TABLE `tvoja_uloga` (
  `id_tvoja_uloga` int(10) NOT NULL,
  `naziv_tvoja_uloga` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Daten für Tabelle `tvoja_uloga`
--

INSERT INTO `tvoja_uloga` (`id_tvoja_uloga`, `naziv_tvoja_uloga`) VALUES
(1, 'Keine Antwort'),
(2, 'Dominant'),
(3, 'Unterwufig'),
(4, 'Switch'),
(5, 'Nicht zutreffend'),
(6, 'Ungewiss');

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `uloga`
--

CREATE TABLE `uloga` (
  `id_user_uloga` int(11) NOT NULL,
  `uloga` varchar(15) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Daten für Tabelle `uloga`
--

INSERT INTO `uloga` (`id_user_uloga`, `uloga`) VALUES
(1, 'user'),
(2, 'anbieter'),
(3, 'admin'),
(4, 'premium'),
(5, 'premiumanbieter'),
(6, 'bordel'),
(7, 'premiummax');

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `user`
--

CREATE TABLE `user` (
  `user_id` int(11) NOT NULL,
  `email` varchar(40) COLLATE utf8_unicode_ci NOT NULL,
  `username` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(80) COLLATE utf8_unicode_ci NOT NULL,
  `male` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `tag` int(3) NOT NULL,
  `monat` int(3) NOT NULL,
  `jahr` int(5) NOT NULL,
  `id_user_uloga` int(2) NOT NULL,
  `age` int(3) NOT NULL,
  `hash_verified` varchar(32) COLLATE utf8_unicode_ci NOT NULL,
  `status_verified` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Daten für Tabelle `user`
--

INSERT INTO `user` (`user_id`, `email`, `username`, `password`, `male`, `tag`, `monat`, `jahr`, `id_user_uloga`, `age`, `hash_verified`, `status_verified`) VALUES
(22, 'zoran_1995@hotmail.com', 'admin', 'zoran3001', 'Frau', 14, 10, 2002, 4, 18, '', 1),
(24, 'bordel@gmail.com', 'bordel', 'bordel123', 'bordel', 1, 1, 1, 6, 11, '', 1),
(28, 'zoran.mratinkovic1@gmail.com', 'zokibodel', 'Zoran123', 'Mann', 18, 10, 2000, 6, 18, '99c5e07b4d5de9d18c350cdf64c5aa3d', 1);

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `user_kat`
--

CREATE TABLE `user_kat` (
  `id_user_kat` int(10) NOT NULL,
  `id_user` int(10) NOT NULL,
  `id_kat` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Daten für Tabelle `user_kat`
--

INSERT INTO `user_kat` (`id_user_kat`, `id_user`, `id_kat`) VALUES
(4, 1, 30),
(5, 1, 50),
(6, 2, 48),
(7, 3, 3),
(8, 4, 48),
(9, 5, 55),
(10, 6, 56),
(11, 7, 29),
(232, 8, 29),
(233, 10, 29),
(234, 11, 29),
(235, 31, 29),
(236, 31, 3),
(237, 31, 6),
(238, 31, 10),
(239, 32, 9),
(240, 32, 13),
(241, 32, 17),
(242, 33, 2),
(243, 34, 2),
(244, 34, 4),
(245, 34, 6);

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `user_oglas`
--

CREATE TABLE `user_oglas` (
  `id_user` int(10) NOT NULL,
  `id_tip` int(5) NOT NULL,
  `id_trazim` int(5) NOT NULL,
  `datum` varchar(30) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `umetnicko_ime` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `id_drzava` int(10) NOT NULL,
  `id_kanton` int(10) NOT NULL,
  `email` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `username` varchar(30) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `sifra` varchar(255) NOT NULL,
  `id_rasa` int(10) NOT NULL,
  `id_kome_pojavljuje` int(10) NOT NULL,
  `id_gradja` int(10) NOT NULL,
  `id_sex_orj` int(10) NOT NULL,
  `id_brak_status` int(1) NOT NULL,
  `id_tvoja_uloga` int(10) NOT NULL,
  `id_njeg_uloga` int(10) NOT NULL,
  `title` varchar(60) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `opis` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `id_pol` int(1) NOT NULL,
  `visina` varchar(10) NOT NULL,
  `id_boja_kose` int(2) NOT NULL,
  `id_duz_kose` int(1) NOT NULL,
  `id_boja_ociju` int(1) NOT NULL,
  `id_naocare_sociva` int(1) NOT NULL,
  `id_brus` int(2) NOT NULL,
  `id_oberweite` int(2) NOT NULL,
  `ulica` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `platz` varchar(15) NOT NULL,
  `id_mesto` varchar(30) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `tel` varchar(20) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `studio_name` varchar(40) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `location_name` varchar(40) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `interfon` varchar(40) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `id_sredjenost` int(1) NOT NULL,
  `link` varchar(100) NOT NULL,
  `profilna_slika` varchar(150) NOT NULL,
  `id_galerija` int(10) NOT NULL,
  `video` varchar(255) NOT NULL,
  `id_status_gold` int(1) NOT NULL,
  `id_user_uloga` int(11) NOT NULL,
  `age` int(3) NOT NULL,
  `bordel` int(10) NOT NULL,
  `hash_verified` varchar(32) NOT NULL,
  `status_verified` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Daten für Tabelle `user_oglas`
--

INSERT INTO `user_oglas` (`id_user`, `id_tip`, `id_trazim`, `datum`, `umetnicko_ime`, `id_drzava`, `id_kanton`, `email`, `username`, `sifra`, `id_rasa`, `id_kome_pojavljuje`, `id_gradja`, `id_sex_orj`, `id_brak_status`, `id_tvoja_uloga`, `id_njeg_uloga`, `title`, `opis`, `id_pol`, `visina`, `id_boja_kose`, `id_duz_kose`, `id_boja_ociju`, `id_naocare_sociva`, `id_brus`, `id_oberweite`, `ulica`, `platz`, `id_mesto`, `tel`, `studio_name`, `location_name`, `interfon`, `id_sredjenost`, `link`, `profilna_slika`, `id_galerija`, `video`, `id_status_gold`, `id_user_uloga`, `age`, `bordel`, `hash_verified`, `status_verified`) VALUES
(1, 2, 1, '18.03.1996', 'Sophia_92', 2, 2, 'ani_25cm@gmail.com', 'ani_car1', 'Andrija12345', 5, 4, 3, 2, 1, 3, 2, 'The crazy girl!', 'But I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete account of the system, and expound the actual teachings of the great explorer of the truth, the master-builder of human happiness. No one rejects, dislikes, or avoids pleasure itself, because it is pleasure, but because those who do not know extremely painful.', 1, '182', 2, 5, 4, 4, 2, 2, 'Moj put', '12', '18', '123123123sd', 'sdadsasda', 'sdadassda', 'axccxcz', 4, 'www.facebook.com', 'img/profiles/hot.jpg', 1, 'asdadsdasdas', 4, 5, 0, 0, '', 1),
(2, 2, 1, '18.03.1996', 'Angela_23', 2, 2, 'ani_25cm@gmail.com', 'ani_car2', 'Andrija12345', 5, 4, 3, 2, 1, 3, 2, 'Party Night? Hell yeah!', 'But I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete account of the system, and expound the actual teachings of the great explorer of the truth, the master-builder of human happiness. No one rejects, dislikes, or avoids pleasure itself, because it is pleasure, but because those who do not know extremely painful.', 1, '182', 2, 5, 4, 4, 2, 2, 'Moj put', '12', '18', '123123123sd', 'sdadsasda', 'sdadassda', 'axccxcz', 4, 'www.facebook.com', 'img/profiles/hot7.jpg', 1, 'asdadsdasdas', 4, 2, 0, 0, '', 1),
(3, 2, 1, '18.03.1996', 'Mia', 2, 2, 'ani_25cm@gmail.com', 'ani_car', 'Andrija12345', 5, 4, 3, 2, 1, 3, 2, 'Freaky? Of courrse!', 'But I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete account of the system, and expound the actual teachings of the great explorer of the truth, the master-builder of human happiness. No one rejects, dislikes, or avoids pleasure itself, because it is pleasure, but because those who do not know extremely painful.', 1, '182', 2, 5, 4, 4, 2, 2, 'Moj put', '12', '18', '123123123sd', 'sdadsasda', 'sdadassda', 'axccxcz', 4, 'www.facebook.com', 'img/profiles/hot2.jpg', 1, 'asdadsdasdas', 4, 2, 0, 0, '', 0),
(4, 2, 1, '18.03.1996', 'Anna', 2, 2, 'ani_25cm@gmail.com', 'ani_car', 'Andrija12345', 5, 4, 3, 2, 1, 3, 2, 'Ani car 25 cm', 'But I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete account of the system, and expound the actual teachings of the great explorer of the truth, the master-builder of human happiness. No one rejects, dislikes, or avoids pleasure itself, because it is pleasure, but because those who do not know extremely painful.', 1, '182', 2, 5, 4, 4, 2, 2, 'Moj put', '12', '18', '123123123sd', 'sdadsasda', 'sdadassda', 'axccxcz', 4, 'www.facebook.com', 'img/profiles/hot3.jpg', 1, 'asdadsdasdas', 4, 2, 0, 0, '', 0),
(5, 2, 1, '18.03.1996', 'Jessie', 2, 2, 'ani_25cm@gmail.com', 'ani_car', 'Andrija12345', 5, 4, 3, 2, 1, 3, 2, 'A Girl ready to party!', 'But I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete account of the system, and expound the actual teachings of the great explorer of the truth, the master-builder of human happiness. No one rejects, dislikes, or avoids pleasure itself, because it is pleasure, but because those who do not know extremely painful.', 1, '182', 2, 5, 4, 4, 2, 2, 'Moj put', '12', '18', '123123123sd', 'sdadsasda', 'sdadassda', 'axccxcz', 4, 'www.facebook.com', 'img/profiles/hot4.jpg', 1, 'asdadsdasdas', 4, 2, 0, 0, '', 0),
(6, 2, 1, '18.03.1996', 'Judy', 2, 2, 'ani_25cm@gmail.com', 'ani_car', 'Andrija12345', 5, 4, 3, 2, 1, 3, 2, 'It\'s going down for real!', 'But I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete account of the system, and expound the actual teachings of the great explorer of the truth, the master-builder of human happiness. No one rejects, dislikes, or avoids pleasure itself, because it is pleasure, but because those who do not know extremely painful.', 1, '182', 2, 5, 4, 4, 2, 2, 'Moj put', '12', '18', '123123123sd', 'sdadsasda', 'sdadassda', 'axccxcz', 4, 'www.facebook.com', 'img/profiles/hot6.jpg', 1, 'asdadsdasdas', 4, 2, 0, 0, '', 0),
(7, 2, 1, '18.03.1996', 'Tammy', 2, 2, 'tammy@gmail.com', 'Tammy_Hem', 'Andrija12345', 5, 4, 3, 2, 1, 3, 2, 'See ya!', 'But I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete account of the system, and expound the actual teachings of the great explorer of the truth, the master-builder of human happiness. No one rejects, dislikes, or avoids pleasure itself, because it is pleasure, but because those who do not know extremely painful.', 1, '182', 2, 5, 4, 4, 2, 2, 'Moj put', '12', '18', '123123123sd', 'sdadsasda', 'sdadassda', 'axccxcz', 4, 'www.facebook.com', 'img/profiles/tammy.jpg', 1, 'asdadsdasdas', 4, 2, 0, 0, '', 0),
(8, 2, 1, '18.03.1996', 'Chocolate', 2, 2, 'tammy@gmail.com', 'black', 'Andrija12345', 5, 4, 3, 2, 1, 3, 2, 'It\'s going down for real!', 'But I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete account of the system, and expound the actual teachings of the great explorer of the truth, the master-builder of human happiness. No one rejects, dislikes, or avoids pleasure itself, because it is pleasure, but because those who do not know extremely painful.', 1, '182', 2, 5, 4, 4, 2, 2, 'Moj put', '12', '18', '123123123sd', 'sdadsasda', 'sdadassda', 'axccxcz', 4, 'www.facebook.com', '/img/profiles/black.jpg', 1, 'asdadsdasdas', 4, 2, 0, 0, '', 0),
(9, 2, 1, '18.03.1991', 'Thai_Girls', 2, 2, 'thai@gmail.com', 'Thai', 'Andrija12345', 5, 4, 3, 2, 1, 3, 2, 'Call me!', 'But I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete account of the system, and expound the actual teachings of the great explorer of the truth, the master-builder of human happiness. No one rejects, dislikes, or avoids pleasure itself, because it is pleasure, but because those who do not know extremely painful.', 1, '182', 2, 5, 4, 4, 2, 2, 'Moj put', '12', '18', '123123123sd', 'sdadsasda', 'sdadassda', 'axccxcz', 4, 'www.facebook.com', 'img/profiles/thai.jpg', 1, 'asdadsdasdas', 4, 2, 0, 0, '', 0),
(10, 2, 1, '18.03.1991', 'Cutie', 2, 2, 'afro@gmail.com', 'African', 'Andrija12345', 5, 4, 3, 2, 1, 3, 2, 'Call me!', 'But I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete account of the system, and expound the actual teachings of the great explorer of the truth, the master-builder of human happiness. No one rejects, dislikes, or avoids pleasure itself, because it is pleasure, but because those who do not know extremely painful.', 1, '182', 2, 5, 4, 4, 2, 2, 'Moj put', '12', '18', '123123123sd', 'sdadsasda', 'sdadassda', 'axccxcz', 4, 'www.facebook.com', 'img/profiles/african.jpg', 1, 'asdadsdasdas', 4, 2, 0, 24, '', 0),
(11, 2, 1, '18.03.1991', 'Asian Babe', 2, 2, 'tammy@gmail.com', 'Asian', 'Andrija12345', 5, 4, 3, 2, 1, 3, 2, 'Call me, daddy!', 'But I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete account of the system, and expound the actual teachings of the great explorer of the truth, the master-builder of human happiness. No one rejects, dislikes, or avoids pleasure itself, because it is pleasure, but because those who do not know extremely painful.', 1, '182', 2, 5, 4, 4, 2, 2, 'Moj put', '12', '18', '123123123sd', 'sdadsasda', 'sdadassda', 'axccxcz', 4, 'www.facebook.com', 'img/profiles/asian.jpg', 1, 'asdadsdasdas', 4, 2, 20, 24, '', 0),
(31, 2, 1, '16.02.1971', 'Larisa', 6, 1, 'zoran3001@gmail.com', 'Hotchick', 'Zoran123', 8, 1, 3, 2, 1, 3, 3, 'Hi there i love everything', 'About me i still love to make my clients happy', 1, '180', 5, 4, 4, 3, 3, 2, 'Burgerstraase 17', '9014', '1', '078881478', 'Lost LIta', 'Studio Lita', '15', 2, 'www.facebook.com', 'img/profiles/hotmiee1.jpg', 4, 'vide ovde . ne treba ovo polje', 4, 2, 29, 0, 'afda332245e2af431fb7b672a68b659d', 1),
(33, 1, 2, '11.01.1999', 'ZoranMratinokvic', 5, 1, 'andrija.pavlovic996@gmail.com', 'Andrija', 'Zoran123', 5, 4, 4, 2, 1, 3, 4, 'Titel about me', 'Text big about me', 1, '180', 5, 4, 3, 3, 4, 6, 'Burger strasse', '9004', '1', '0645913399', 'Lita', 'Studio', 'lingke 15', 2, 'www.facebook.com', 'img//profiles/hotmiee1.jpg', 4, 'vide ovde . ne treba ovo polje', 1, 2, 18, 0, 'a86c450b76fb8c371afead6410d55534', 1);

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `videos`
--

CREATE TABLE `videos` (
  `id_video` int(10) NOT NULL,
  `video_src` varchar(255) NOT NULL,
  `id_user` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indizes der exportierten Tabellen
--

--
-- Indizes für die Tabelle `album`
--
ALTER TABLE `album`
  ADD PRIMARY KEY (`id_album`);

--
-- Indizes für die Tabelle `album_image`
--
ALTER TABLE `album_image`
  ADD PRIMARY KEY (`id_album_img`);

--
-- Indizes für die Tabelle `boja_kose`
--
ALTER TABLE `boja_kose`
  ADD PRIMARY KEY (`id_boja_kose`);

--
-- Indizes für die Tabelle `boja_ociju`
--
ALTER TABLE `boja_ociju`
  ADD PRIMARY KEY (`id_boja_ociju`);

--
-- Indizes für die Tabelle `brak_status`
--
ALTER TABLE `brak_status`
  ADD PRIMARY KEY (`id_brak_status`);

--
-- Indizes für die Tabelle `brus`
--
ALTER TABLE `brus`
  ADD PRIMARY KEY (`id_brus`);

--
-- Indizes für die Tabelle `drzava`
--
ALTER TABLE `drzava`
  ADD PRIMARY KEY (`id_drzava`);

--
-- Indizes für die Tabelle `duzina_kose`
--
ALTER TABLE `duzina_kose`
  ADD PRIMARY KEY (`id_duz_kose`);

--
-- Indizes für die Tabelle `gradja`
--
ALTER TABLE `gradja`
  ADD PRIMARY KEY (`id_gradja`);

--
-- Indizes für die Tabelle `images`
--
ALTER TABLE `images`
  ADD PRIMARY KEY (`id_image`);

--
-- Indizes für die Tabelle `kanton`
--
ALTER TABLE `kanton`
  ADD PRIMARY KEY (`id_kanton`);

--
-- Indizes für die Tabelle `kateg`
--
ALTER TABLE `kateg`
  ADD PRIMARY KEY (`id_kat`);

--
-- Indizes für die Tabelle `kategorije`
--
ALTER TABLE `kategorije`
  ADD PRIMARY KEY (`id_kat`);

--
-- Indizes für die Tabelle `kome_se_pojavljuje`
--
ALTER TABLE `kome_se_pojavljuje`
  ADD PRIMARY KEY (`id_kome_pojavljuje`);

--
-- Indizes für die Tabelle `njegova_uloga`
--
ALTER TABLE `njegova_uloga`
  ADD PRIMARY KEY (`id_njeg_uloga`);

--
-- Indizes für die Tabelle `nocare_sociva`
--
ALTER TABLE `nocare_sociva`
  ADD PRIMARY KEY (`id_naocare_sociva`);

--
-- Indizes für die Tabelle `oberweite`
--
ALTER TABLE `oberweite`
  ADD PRIMARY KEY (`id_oberweite`);

--
-- Indizes für die Tabelle `partneri`
--
ALTER TABLE `partneri`
  ADD PRIMARY KEY (`id`);

--
-- Indizes für die Tabelle `poreklo`
--
ALTER TABLE `poreklo`
  ADD PRIMARY KEY (`id_poreklo`);

--
-- Indizes für die Tabelle `sex_orj`
--
ALTER TABLE `sex_orj`
  ADD PRIMARY KEY (`id_sexorj`);

--
-- Indizes für die Tabelle `sredjenost`
--
ALTER TABLE `sredjenost`
  ADD PRIMARY KEY (`id_sredjenost`);

--
-- Indizes für die Tabelle `status_gold`
--
ALTER TABLE `status_gold`
  ADD PRIMARY KEY (`id_status`);

--
-- Indizes für die Tabelle `tip`
--
ALTER TABLE `tip`
  ADD PRIMARY KEY (`id_tip`);

--
-- Indizes für die Tabelle `trazim`
--
ALTER TABLE `trazim`
  ADD PRIMARY KEY (`id_trazim`);

--
-- Indizes für die Tabelle `tvoja_uloga`
--
ALTER TABLE `tvoja_uloga`
  ADD PRIMARY KEY (`id_tvoja_uloga`);

--
-- Indizes für die Tabelle `uloga`
--
ALTER TABLE `uloga`
  ADD PRIMARY KEY (`id_user_uloga`);

--
-- Indizes für die Tabelle `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`);

--
-- Indizes für die Tabelle `user_kat`
--
ALTER TABLE `user_kat`
  ADD PRIMARY KEY (`id_user_kat`);

--
-- Indizes für die Tabelle `user_oglas`
--
ALTER TABLE `user_oglas`
  ADD PRIMARY KEY (`id_user`);

--
-- Indizes für die Tabelle `videos`
--
ALTER TABLE `videos`
  ADD PRIMARY KEY (`id_video`);

--
-- AUTO_INCREMENT für exportierte Tabellen
--

--
-- AUTO_INCREMENT für Tabelle `album`
--
ALTER TABLE `album`
  MODIFY `id_album` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;
--
-- AUTO_INCREMENT für Tabelle `album_image`
--
ALTER TABLE `album_image`
  MODIFY `id_album_img` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;
--
-- AUTO_INCREMENT für Tabelle `boja_kose`
--
ALTER TABLE `boja_kose`
  MODIFY `id_boja_kose` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT für Tabelle `boja_ociju`
--
ALTER TABLE `boja_ociju`
  MODIFY `id_boja_ociju` int(1) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT für Tabelle `brak_status`
--
ALTER TABLE `brak_status`
  MODIFY `id_brak_status` int(1) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT für Tabelle `brus`
--
ALTER TABLE `brus`
  MODIFY `id_brus` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT für Tabelle `drzava`
--
ALTER TABLE `drzava`
  MODIFY `id_drzava` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT für Tabelle `duzina_kose`
--
ALTER TABLE `duzina_kose`
  MODIFY `id_duz_kose` int(1) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT für Tabelle `gradja`
--
ALTER TABLE `gradja`
  MODIFY `id_gradja` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT für Tabelle `images`
--
ALTER TABLE `images`
  MODIFY `id_image` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;
--
-- AUTO_INCREMENT für Tabelle `kanton`
--
ALTER TABLE `kanton`
  MODIFY `id_kanton` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;
--
-- AUTO_INCREMENT für Tabelle `kateg`
--
ALTER TABLE `kateg`
  MODIFY `id_kat` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT für Tabelle `kategorije`
--
ALTER TABLE `kategorije`
  MODIFY `id_kat` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=61;
--
-- AUTO_INCREMENT für Tabelle `kome_se_pojavljuje`
--
ALTER TABLE `kome_se_pojavljuje`
  MODIFY `id_kome_pojavljuje` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT für Tabelle `njegova_uloga`
--
ALTER TABLE `njegova_uloga`
  MODIFY `id_njeg_uloga` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT für Tabelle `nocare_sociva`
--
ALTER TABLE `nocare_sociva`
  MODIFY `id_naocare_sociva` int(1) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT für Tabelle `oberweite`
--
ALTER TABLE `oberweite`
  MODIFY `id_oberweite` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT für Tabelle `partneri`
--
ALTER TABLE `partneri`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
--
-- AUTO_INCREMENT für Tabelle `poreklo`
--
ALTER TABLE `poreklo`
  MODIFY `id_poreklo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT für Tabelle `sex_orj`
--
ALTER TABLE `sex_orj`
  MODIFY `id_sexorj` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT für Tabelle `sredjenost`
--
ALTER TABLE `sredjenost`
  MODIFY `id_sredjenost` int(1) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT für Tabelle `status_gold`
--
ALTER TABLE `status_gold`
  MODIFY `id_status` int(1) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT für Tabelle `tip`
--
ALTER TABLE `tip`
  MODIFY `id_tip` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT für Tabelle `trazim`
--
ALTER TABLE `trazim`
  MODIFY `id_trazim` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT für Tabelle `tvoja_uloga`
--
ALTER TABLE `tvoja_uloga`
  MODIFY `id_tvoja_uloga` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT für Tabelle `uloga`
--
ALTER TABLE `uloga`
  MODIFY `id_user_uloga` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT für Tabelle `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;
--
-- AUTO_INCREMENT für Tabelle `user_kat`
--
ALTER TABLE `user_kat`
  MODIFY `id_user_kat` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=246;
--
-- AUTO_INCREMENT für Tabelle `user_oglas`
--
ALTER TABLE `user_oglas`
  MODIFY `id_user` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;
--
-- AUTO_INCREMENT für Tabelle `videos`
--
ALTER TABLE `videos`
  MODIFY `id_video` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
