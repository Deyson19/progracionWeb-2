-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 19-11-2021 a las 20:26:57
-- Versión del servidor: 10.4.19-MariaDB
-- Versión de PHP: 7.4.20

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `bancomysavings`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `created_at` datetime DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`, `created_at`) VALUES
(1, 'deii@mail.com', '$2y$10$HA.z4du.8SPnVZ7WbM7IZOdKq7YaBSwqG2q9YhXSiRnS7UYY2GrLe', '2021-11-12 00:26:54'),
(2, 'free.cuenta@mail.com', '$2y$10$SzJ2knSLXw/yEzftdaa60ONNgvBDQBqUzTx8Q7X8nljjY3llgBT/a', '2021-11-12 00:30:50');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cliente`
--

CREATE TABLE `cliente` (
  `id` int(11) NOT NULL,
  `dni` varchar(12) NOT NULL,
  `tipoDni` char(2) NOT NULL,
  `nombres` varchar(50) NOT NULL,
  `apellidos` varchar(50) NOT NULL,
  `fechaNacimiento` date NOT NULL,
  `numeroCelular` varchar(20) NOT NULL,
  `direccion` varchar(100) NOT NULL,
  `deptoResidencia` varchar(50) NOT NULL,
  `ciudad` varchar(50) NOT NULL,
  `estadoCivil` varchar(10) NOT NULL,
  `correo` varchar(100) NOT NULL,
  `cantidadPrestamo` varchar(50) NOT NULL,
  `cantidadMeses` int(11) NOT NULL,
  `fechaPago` text NOT NULL,
  `valorCuota` varchar(15) NOT NULL,
  `subTotal` varchar(15) NOT NULL,
  `fechaRegistro` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `cliente`
--

INSERT INTO `cliente` (`id`, `dni`, `tipoDni`, `nombres`, `apellidos`, `fechaNacimiento`, `numeroCelular`, `direccion`, `deptoResidencia`, `ciudad`, `estadoCivil`, `correo`, `cantidadPrestamo`, `cantidadMeses`, `fechaPago`, `valorCuota`, `subTotal`, `fechaRegistro`) VALUES
(28, '5295367762', 'Mr', 'Carson', 'Clinnick', '1985-05-18', '265-925-1131', '69 Little Fleur Trail', 'Akershus', 'Asker', '', 'cclinnick0@twitter.com', '$1000.45', 20, '12/06/2021', '$295.59', '$448.78', '2021-11-17 18:32:09'),
(29, '4420367555', 'Mr', 'Maribel', 'Bickmore', '1994-10-02', '569-342-4938', '8 Farmco Park', 'Akershus', 'Asker', '', 'mbickmore1@canalblog.com', '$648.47', 25, '12/05/2021', '$198.48', '$471.71', '2021-11-17 18:32:09'),
(30, '7054207270', 'Ho', 'Toiboid', 'Gunda', '1990-10-12', '984-585-0551', '9021 Merry Road', 'Akershus', 'Asker', '', 'tgunda2@msn.com', '$651.10', 22, '11/25/2021', '$582.96', '$401.26', '2021-11-17 18:32:09'),
(31, '3906269574', 'Ms', 'Clayton', 'Sidnell', '1999-01-22', '203-204-2202', '1 Del Mar Way', 'Abruzzi', 'Pescara', '', 'csidnell3@imgur.com', '$945.74', 24, '12/07/2021', '$506.78', '$476.51', '2021-11-17 18:32:09'),
(32, '8012925249', 'Re', 'Kaspar', 'Lorimer', '1990-09-30', '329-568-4176', '331 Milwaukee Junction', 'Abruzzi', 'Pescara', '', 'klorimer4@posterous.com', '$936.46', 57, '12/14/2021', '$174.44', '$536.06', '2021-11-17 18:32:09'),
(33, '6373429032', 'Mr', 'Mercy', 'Lunge', '1988-12-03', '818-960-5690', '80 Vermont Road', 'Akershus', 'Sandvika', '', 'mlunge5@mozilla.com', '$814.40', 9, '12/14/2021', '$382.08', '$431.73', '2021-11-17 18:32:09'),
(34, '8901841231', 'Ho', 'Davita', 'Folbig', '1994-07-14', '885-243-5811', '53 Monument Street', 'Abruzzi', 'Pescara', '', 'dfolbig6@squarespace.com', '$926.43', 49, '12/13/2021', '$161.03', '$576.71', '2021-11-17 18:32:09'),
(35, '4171534534', 'Mr', 'Dulcine', 'Zamboniari', '1988-04-06', '928-381-4525', '9 Hagan Circle', 'Akershus', 'Sandvika', '', 'dzamboniari7@tamu.edu', '$1363.80', 36, '12/10/2021', '$351.67', '$536.62', '2021-11-17 18:32:09'),
(36, '7742637820', 'Mr', 'Reginauld', 'Goodrick', '1995-05-03', '580-772-8430', '310 Prairieview Pass', 'Akershus', 'Asker', '', 'rgoodrick8@amazon.de', '$1001.80', 50, '12/13/2021', '$627.07', '$528.98', '2021-11-17 18:32:09'),
(37, '7459310379', 'Mr', 'Johannes', 'Burke', '1994-09-28', '565-713-7496', '4 Hayes Avenue', 'Akershus', 'Asker', '', 'jburke9@gravatar.com', '$516.89', 29, '12/14/2021', '$435.31', '$485.13', '2021-11-17 18:32:09'),
(38, '7048315423', 'Mr', 'Brendan', 'Floyde', '1998-02-04', '461-755-0461', '21 Pennsylvania Place', 'Akershus', 'Sandvika', '', 'bfloydea@go.com', '$1361.81', 45, '11/25/2021', '$546.71', '$450.06', '2021-11-17 18:32:09'),
(39, '4087162079', 'Dr', 'Magdalen', 'Leheude', '2001-01-05', '188-360-3202', '259 Toban Parkway', 'Abruzzi', 'Pescara', '', 'mleheudeb@dagondesign.com', '$979.11', 36, '12/10/2021', '$250.47', '$405.17', '2021-11-17 18:32:09'),
(41, '8521661703', 'Mr', 'Kacie', 'Keirle', '1999-04-07', '510-231-3203', '204 Rigney Place', 'Abruzzi', 'Pescara', '', 'kkeirled@freewebs.com', '$1194.68', 16, '12/15/2021', '$153.29', '$590.65', '2021-11-17 18:32:09'),
(42, '8307637643', 'Ho', 'Rickard', 'Fransemai', '2001-12-11', '966-135-1184', '650 Express Trail', 'Akershus', 'Asker', '', 'rfransemaie@hatena.ne.jp', '$1201.48', 9, '11/26/2021', '$301.56', '$439.84', '2021-11-17 18:32:09'),
(44, '6507784125', 'Dr', 'Kym', 'Leele', '2001-03-23', '329-369-6396', '312 Portage Pass', 'Akershus', 'Asker', '', 'kleeleg@un.org', '$1497.55', 15, '11/30/2021', '$595.44', '$404.42', '2021-11-17 18:32:09'),
(46, '8823291127', 'Mr', 'Shaylyn', 'Lindsley', '1993-06-07', '466-340-2084', '88881 Knutson Park', 'Akershus', 'Asker', '', 'slindsleyi@bluehost.com', '$998.40', 7, '12/22/2021', '$335.71', '$441.51', '2021-11-17 18:32:09'),
(47, '2347368361', 'Ho', 'Ailyn', 'Fresson', '1979-01-11', '477-311-6718', '3932 Anthes Court', 'Akershus', 'Sandvika', '', 'afressonj@tuttocitta.it', '$504.91', 13, '12/07/2021', '$428.81', '$418.14', '2021-11-17 18:32:09'),
(48, '7053478785', 'Ms', 'Cchaddie', 'Andryushin', '1997-08-03', '670-390-9023', '25 Oak Valley Park', 'Akershus', 'Sandvika', '', 'candryushink@i2i.jp', '$1215.07', 37, '11/29/2021', '$537.18', '$404.41', '2021-11-17 18:32:09'),
(49, '4207335668', 'Mr', 'Shana', 'Jouhan', '1985-10-19', '881-635-1932', '60010 Luster Alley', 'Akershus', 'Asker', '', 'sjouhanl@tiny.cc', '$1404.57', 8, '11/17/2021', '$485.72', '$540.44', '2021-11-17 18:32:09'),
(50, '2631611136', 'Dr', 'Tamera', 'Maro', '1991-11-20', '891-178-4934', '11 Green Plaza', 'Akershus', 'Asker', '', 'tmarom@chicagotribune.com', '$1249.17', 59, '12/01/2021', '$626.82', '$465.57', '2021-11-17 18:32:09'),
(51, '6160623168', 'Re', 'Mikey', 'Roddell', '1983-09-11', '220-706-9266', '758 Cottonwood Avenue', 'Abruzzi', 'Pescara', '', 'mroddelln@hhs.gov', '$1190.14', 47, '12/10/2021', '$531.55', '$590.00', '2021-11-17 18:32:09'),
(52, '7388791493', 'Mr', 'Trixie', 'Bolland', '2000-11-08', '282-718-9650', '8 Aberg Terrace', 'Akershus', 'Asker', '', 'tbollando@moonfruit.com', '$613.69', 15, '12/14/2021', '$419.45', '$431.84', '2021-11-17 18:32:09'),
(54, '6559318303', 'Re', 'Corey', 'Collisson', '1987-04-04', '785-216-4141', '2 Dayton Terrace', 'Akershus', 'Sandvika', '', 'ccollissonq@com.com', '$636.76', 31, '11/18/2021', '$656.04', '$597.79', '2021-11-17 18:32:09'),
(55, '8737803964', 'Dr', 'Westleigh', 'Kneesha', '1999-07-27', '133-648-2747', '00 Arkansas Plaza', 'Akershus', 'Sandvika', '', 'wkneeshar@nba.com', '$1122.86', 39, '11/20/2021', '$428.04', '$401.32', '2021-11-17 18:32:09'),
(56, '6275914718', 'Ms', 'Karlie', 'Syvret', '1982-11-15', '612-150-4101', '83428 Magdeline Alley', 'Akershus', 'Asker', '', 'ksyvrets@51.la', '$1021.68', 57, '12/12/2021', '$455.34', '$474.50', '2021-11-17 18:32:09'),
(57, '5761304120', 'Mr', 'Abbott', 'Howes', '1984-07-25', '707-987-8737', '0041 Tennessee Lane', 'Abruzzi', 'Pescara', '', 'ahowest@addtoany.com', '$1447.98', 40, '12/25/2021', '$448.18', '$541.86', '2021-11-17 18:32:09'),
(60, '5000086686', 'Ho', 'Guillermo', 'Rhyme', '1995-09-10', '945-823-5555', '691 Surrey Crossing', 'Abruzzi', 'Pescara', '', 'grhymew@bravesites.com', '$1429.57', 10, '12/18/2021', '$444.27', '$576.31', '2021-11-17 18:32:09'),
(61, '5337120832', 'Ho', 'Templeton', 'Butfield', '1982-08-07', '972-506-2033', '5 Raven Point', 'Abruzzi', 'Pescara', '', 'tbutfieldx@furl.net', '$744.29', 8, '11/26/2021', '$590.52', '$556.41', '2021-11-17 18:32:09'),
(62, '5269774119', 'Ms', 'Linnea', 'Llewellin', '1990-06-07', '130-885-4149', '6 Dawn Place', 'Akershus', 'Asker', '', 'lllewelliny@imdb.com', '$795.48', 17, '12/09/2021', '$377.94', '$554.09', '2021-11-17 18:32:09'),
(65, '4231369267', 'Re', 'Celestia', 'Bahde', '1984-06-09', '902-759-2117', '0983 Bunker Hill Drive', 'Akershus', 'Asker', '', 'cbahde11@xing.com', '$1483.77', 52, '12/11/2021', '$212.25', '$545.16', '2021-11-17 18:32:09'),
(66, '4967429874', 'Ho', 'Fredek', 'Sambell', '1982-11-15', '310-428-2674', '20 Tomscot Park', 'Akershus', 'Sandvika', '', 'fsambell12@artisteer.com', '$1005.15', 18, '12/17/2021', '$374.44', '$588.74', '2021-11-17 18:32:09'),
(67, '6680740371', 'Ho', 'Leeanne', 'Train', '1988-01-15', '605-567-0693', '15 Johnson Road', 'Abruzzi', 'Pescara', '', 'ltrain13@cnbc.com', '$643.88', 26, '11/27/2021', '$226.46', '$409.21', '2021-11-17 18:32:09'),
(68, '5915921663', 'Re', 'Kate', 'Fane', '1986-05-21', '159-650-9494', '09758 Meadow Ridge Junction', 'Akershus', 'Asker', '', 'kfane14@vkontakte.ru', '$1228.71', 56, '12/01/2021', '$686.44', '$436.03', '2021-11-17 18:32:09'),
(69, '5322386092', 'Ms', 'Agnes', 'Melburg', '1995-02-16', '910-702-8234', '3 Spenser Circle', 'Akershus', 'Sandvika', '', 'amelburg15@scientificamerican.com', '$775.59', 52, '12/21/2021', '$599.63', '$414.19', '2021-11-17 18:32:09'),
(71, '3300529522', 'Dr', 'Jeanelle', 'Titchener', '1982-05-31', '730-188-4111', '41651 Park Meadow Point', 'Akershus', 'Asker', '', 'jtitchener17@wp.com', '$690.19', 15, '12/15/2021', '$351.90', '$499.78', '2021-11-17 18:32:09'),
(72, '6191170831', 'Re', 'Suzann', 'Kennett', '1989-07-04', '134-901-8445', '11 Coolidge Crossing', 'Abruzzi', 'Pescara', '', 'skennett18@unblog.fr', '$1468.77', 41, '12/23/2021', '$679.49', '$428.63', '2021-11-17 18:32:09'),
(75, '6224210667', 'Mr', 'Sharyl', 'Stairs', '1985-09-06', '296-269-4151', '763 Anhalt Avenue', 'Abruzzi', 'Pescara', '', 'sstairs1b@sitemeter.com', '$870.33', 26, '12/24/2021', '$689.42', '$465.34', '2021-11-17 18:32:09'),
(76, '8741733355', 'Ms', 'Stephanie', 'Leatherborrow', '1999-11-09', '324-449-9506', '87482 Erie Trail', 'Akershus', 'Sandvika', '', 'sleatherborrow1c@alibaba.com', '$1354.70', 44, '11/20/2021', '$356.01', '$507.71', '2021-11-17 18:32:09'),
(77, '5228984682', 'Mr', 'Che', 'Windus', '1991-12-03', '812-240-6292', '823 Michigan Way', 'Akershus', 'Asker', '', 'cwindus1d@ucoz.ru', '$1058.31', 41, '11/22/2021', '$166.11', '$528.81', '2021-11-17 18:32:09'),
(78, '9505284969', 'Mr', 'Pasquale', 'Learoid', '1989-11-18', '637-847-2661', '32650 Northfield Court', 'Akershus', 'Sandvika', '', 'plearoid1e@cdc.gov', '$838.67', 6, '12/18/2021', '$535.06', '$507.56', '2021-11-17 18:32:09'),
(79, '3122510855', 'Re', 'Pauletta', 'Reignard', '1983-04-14', '445-679-3246', '8 Randy Junction', 'Akershus', 'Sandvika', '', 'preignard1f@bloglines.com', '$917.95', 33, '12/20/2021', '$201.98', '$597.61', '2021-11-17 18:32:09'),
(80, '5181576184', 'Mr', 'Michael', 'Packer', '1991-12-27', '741-593-5970', '9 Bluejay Plaza', 'Akershus', 'Asker', '', 'mpacker1g@kickstarter.com', '$843.35', 32, '11/28/2021', '$618.61', '$431.19', '2021-11-17 18:32:09'),
(81, '4361934053', 'Mr', 'Chester', 'Tegeller', '1982-10-16', '336-476-3981', '04 Longview Street', 'Akershus', 'Asker', '', 'ctegeller1h@squidoo.com', '$681.86', 23, '11/29/2021', '$415.68', '$455.21', '2021-11-17 18:32:09'),
(82, '2711329003', 'Mr', 'Ryley', 'Ringe', '1998-12-02', '419-625-3308', '218 Novick Way', 'Abruzzi', 'Pescara', '', 'rringe1i@prnewswire.com', '$813.74', 33, '11/22/2021', '$684.50', '$475.85', '2021-11-17 18:32:09'),
(83, '6353194765', 'Mr', 'Jourdain', 'Vaney', '1981-11-30', '779-368-5621', '9846 Bobwhite Road', 'Akershus', 'Sandvika', '', 'jvaney1j@canalblog.com', '$539.96', 56, '12/18/2021', '$407.84', '$583.95', '2021-11-17 18:32:09'),
(84, '6010232406', 'Re', 'Lothaire', 'Cotterrill', '1979-09-25', '597-719-3164', '010 Graedel Center', 'Akershus', 'Sandvika', '', 'lcotterrill1k@cocolog-nifty.com', '$895.66', 14, '11/24/2021', '$413.24', '$409.61', '2021-11-17 18:32:09'),
(85, '2986331963', 'Mr', 'Valry', 'Blumfield', '1989-11-28', '935-716-2860', '3 Oxford Crossing', 'Abruzzi', 'Pescara', '', 'vblumfield1l@redcross.org', '$1486.02', 18, '11/20/2021', '$168.59', '$577.94', '2021-11-17 18:32:09'),
(86, '3849446069', 'Mr', 'Karen', 'Lehrian', '1993-12-13', '912-823-6091', '3249 Canary Point', 'Abruzzi', 'Pescara', '', 'klehrian1m@a8.net', '$989.89', 60, '11/21/2021', '$123.40', '$547.65', '2021-11-17 18:32:09'),
(87, '8604711996', 'Mr', 'Austin', 'Bayle', '1981-07-20', '302-346-4633', '8 Brickson Park Point', 'Akershus', 'Sandvika', '', 'abayle1n@delicious.com', '$1335.60', 11, '12/10/2021', '$162.75', '$464.72', '2021-11-17 18:32:09'),
(88, '9868512751', 'Mr', 'Maynord', 'Bovey', '1994-11-10', '711-420-4712', '17 Holmberg Alley', 'Akershus', 'Asker', '', 'mbovey1o@amazonaws.com', '$1406.64', 29, '11/21/2021', '$526.30', '$430.35', '2021-11-17 18:32:09'),
(89, '7101651623', 'Mr', 'Trudey', 'Maryin', '1989-05-17', '740-535-1796', '92022 Thierer Lane', 'Abruzzi', 'Pescara', '', 'tmaryin1p@gravatar.com', '$1274.40', 60, '12/15/2021', '$368.81', '$423.48', '2021-11-17 18:32:09'),
(91, '8859671299', 'Ho', 'Domeniga', 'Sherebrooke', '1991-04-22', '411-914-3843', '9356 Red Cloud Trail', 'Akershus', 'Sandvika', '', 'dsherebrooke1r@nhs.uk', '$1079.28', 6, '12/04/2021', '$241.67', '$541.47', '2021-11-17 18:32:09'),
(92, '2978652276', 'Mr', 'Asia', 'Cadagan', '1988-02-13', '304-335-7931', '0 Schmedeman Road', 'Akershus', 'Sandvika', '', 'acadagan1s@slate.com', '$1080.92', 49, '11/24/2021', '$141.60', '$434.67', '2021-11-17 18:32:09'),
(94, '8429980512', 'Ho', 'Upton', 'Glavias', '2000-10-28', '798-343-1842', '7 Grover Way', 'Akershus', 'Asker', '', 'uglavias1u@vinaora.com', '$527.63', 24, '12/06/2021', '$165.12', '$491.91', '2021-11-17 18:32:09'),
(95, '8467939729', 'Mr', 'Tanney', 'Tofano', '1981-07-06', '802-392-2836', '76 Havey Crossing', 'Abruzzi', 'Pescara', '', 'ttofano1v@joomla.org', '$1292.67', 9, '12/21/2021', '$461.40', '$434.69', '2021-11-17 18:32:09'),
(96, '7413187116', 'Dr', 'Cameron', 'Marder', '1996-12-26', '889-104-8172', '533 Waywood Hill', 'Akershus', 'Asker', '', 'cmarder1w@theguardian.com', '$518.29', 26, '12/16/2021', '$223.91', '$445.14', '2021-11-17 18:32:09'),
(97, '3531279807', 'Dr', 'Althea', 'McCuthais', '1992-06-20', '404-361-0670', '5 Muir Crossing', 'Akershus', 'Sandvika', '', 'amccuthais1x@hostgator.com', '$669.08', 23, '12/12/2021', '$365.44', '$420.25', '2021-11-17 18:32:09'),
(98, '6154092393', 'Mr', 'Biddy', 'Wardlaw', '1980-10-16', '277-141-6937', '94 Lakewood Road', 'Abruzzi', 'Pescara', '', 'bwardlaw1y@ycombinator.com', '$586.81', 21, '12/10/2021', '$251.16', '$472.54', '2021-11-17 18:32:09'),
(100, '6440821547', 'Re', 'Emmaline', 'Smoughton', '2001-08-21', '135-954-6328', '43006 Randy Terrace', 'Akershus', 'Sandvika', '', 'esmoughton20@cbsnews.com', '$724.66', 17, '11/28/2021', '$209.72', '$438.14', '2021-11-17 18:32:09'),
(101, '7502614516', 'Ho', 'Millard', 'Lamke', '1982-11-13', '305-690-4859', '28 International Pass', 'Akershus', 'Asker', '', 'mlamke21@statcounter.com', '$588.79', 22, '11/24/2021', '$138.29', '$530.15', '2021-11-17 18:32:09'),
(102, '4429656762', 'Re', 'Mirabelle', 'Raddon', '1988-01-14', '897-566-3394', '35 Schiller Terrace', 'Akershus', 'Asker', '', 'mraddon22@hp.com', '$1401.63', 56, '11/17/2021', '$237.03', '$571.47', '2021-11-17 18:32:09'),
(103, '5010386755', 'Dr', 'Lucy', 'Methringham', '1992-07-04', '116-713-2784', '45 Stone Corner Pass', 'Abruzzi', 'Pescara', '', 'lmethringham23@cbsnews.com', '$1128.40', 8, '11/17/2021', '$251.96', '$585.22', '2021-11-17 18:32:09'),
(104, '9738611377', 'Mr', 'Hollyanne', 'Sawfoot', '1990-12-01', '806-908-6101', '34 Reindahl Place', 'Abruzzi', 'Pescara', '', 'hsawfoot24@ameblo.jp', '$601.46', 55, '11/24/2021', '$132.15', '$592.78', '2021-11-17 18:32:09'),
(105, '9280616064', 'Ho', 'Lesley', 'Alexander', '1985-12-02', '732-578-8372', '9 Union Place', 'Akershus', 'Asker', '', 'lalexander25@live.com', '$1176.90', 51, '11/17/2021', '$140.15', '$592.21', '2021-11-17 18:32:09'),
(106, '3744157342', 'Mr', 'Cory', 'Barnicott', '2000-03-17', '429-709-6547', '7393 Upham Alley', 'Abruzzi', 'Pescara', '', 'cbarnicott26@sakura.ne.jp', '$836.35', 41, '12/02/2021', '$425.33', '$576.21', '2021-11-17 18:32:09'),
(107, '9576063345', 'Ho', 'Marcille', 'Vuitte', '1998-03-28', '709-813-3824', '13222 Kinsman Terrace', 'Abruzzi', 'Pescara', '', 'mvuitte27@ow.ly', '$1449.27', 37, '11/22/2021', '$192.45', '$446.86', '2021-11-17 18:32:09'),
(108, '7554928627', 'Dr', 'Rosella', 'Godney', '2000-04-17', '260-321-7711', '232 Mayer Court', 'Akershus', 'Sandvika', '', 'rgodney28@ucoz.com', '$1343.54', 12, '12/21/2021', '$322.68', '$492.40', '2021-11-17 18:32:09'),
(109, '2098337111', 'Ho', 'Raina', 'St Quenin - Nill', '1993-06-25', '861-687-1950', '22792 Buhler Junction', 'Akershus', 'Sandvika', '', 'rstquenin29@oracle.com', '$545.72', 14, '11/23/2021', '$595.42', '$563.13', '2021-11-17 18:32:09'),
(110, '8858096312', 'Re', 'Krispin', 'Pattenden', '1995-06-16', '819-742-4525', '8783 Bunting Place', 'Abruzzi', 'Pescara', '', 'kpattenden2a@bizjournals.com', '$1243.51', 39, '12/14/2021', '$142.45', '$453.88', '2021-11-17 18:32:09'),
(113, '9031704431', 'Dr', 'Bayard', 'Maciejewski', '1995-03-31', '841-659-4356', '95826 Comanche Park', 'Abruzzi', 'Pescara', '', 'bmaciejewski2d@ezinearticles.com', '$674.04', 31, '11/20/2021', '$263.54', '$572.71', '2021-11-17 18:32:09'),
(114, '5969654574', 'Dr', 'Dewitt', 'Kloisner', '1986-08-12', '392-499-9635', '98 Novick Junction', 'Akershus', 'Asker', '', 'dkloisner2e@godaddy.com', '$1007.38', 43, '11/23/2021', '$160.80', '$451.06', '2021-11-17 18:32:09'),
(115, '5593803773', 'Ho', 'Kirsteni', 'Whyatt', '2001-05-29', '532-268-2178', '06 Union Court', 'Akershus', 'Asker', '', 'kwhyatt2f@amazon.co.uk', '$593.47', 47, '12/11/2021', '$235.73', '$435.67', '2021-11-17 18:32:09'),
(116, '8617722657', 'Re', 'Cleavland', 'Emanueli', '1981-08-30', '427-509-3689', '7 Trailsway Pass', 'Akershus', 'Asker', '', 'cemanueli2g@about.me', '$1048.46', 7, '12/01/2021', '$105.77', '$453.54', '2021-11-17 18:32:09'),
(117, '5153185184', 'Ho', 'Ardelia', 'Pavek', '1982-11-15', '374-856-2525', '382 Farmco Parkway', 'Akershus', 'Asker', '', 'apavek2h@sfgate.com', '$1104.56', 59, '12/13/2021', '$674.73', '$591.87', '2021-11-17 18:32:09'),
(118, '8309807880', 'Mr', 'Pincas', 'Kidde', '1988-05-20', '221-797-8597', '9354 Luster Place', 'Abruzzi', 'Pescara', '', 'pkidde2i@bloomberg.com', '$730.77', 46, '11/25/2021', '$182.26', '$470.81', '2021-11-17 18:32:09'),
(119, '8998178184', 'Mr', 'Oren', 'Vergine', '2001-01-30', '434-551-2603', '311 6th Avenue', 'Abruzzi', 'Pescara', '', 'overgine2j@github.com', '$1213.35', 46, '12/21/2021', '$405.71', '$548.27', '2021-11-17 18:32:09'),
(121, '4397462089', 'Ho', 'Arch', 'Maroney', '1995-04-29', '821-658-9178', '6 Texas Road', 'Akershus', 'Sandvika', '', 'amaroney2l@vistaprint.com', '$559.34', 13, '11/20/2021', '$453.17', '$557.06', '2021-11-17 18:32:09'),
(122, '3422822879', 'Mr', 'Edgard', 'Pook', '1979-09-28', '779-141-4768', '7 Mallory Street', 'Akershus', 'Sandvika', '', 'epook2m@wsj.com', '$1030.10', 14, '12/23/2021', '$470.54', '$503.86', '2021-11-17 18:32:09'),
(124, '3773238118', 'Ms', 'Wendye', 'Abramowitch', '1984-07-17', '309-793-8916', '38 Londonderry Drive', 'Akershus', 'Sandvika', '', 'wabramowitch2o@hhs.gov', '$911.78', 30, '11/19/2021', '$491.91', '$400.45', '2021-11-17 18:32:09'),
(125, '3875883985', 'Dr', 'Giacinta', 'Pardie', '1989-12-10', '560-575-0661', '15946 Fulton Drive', 'Akershus', 'Asker', '', 'gpardie2p@mit.edu', '$1144.70', 8, '12/10/2021', '$442.92', '$446.93', '2021-11-17 18:32:09'),
(126, '242955049', 'Re', 'Elias Nash', 'Gosson', '1988-12-06', '758-427-7731', '404 Schmedeman Place', 'Akershus', 'Sandvika', '', 'egosson2q@admin.ch', '$1004.33', 30, '12/10/2021', '$665.48', '$430.89', '2021-11-17 18:32:09'),
(128, '101005012', 'CE', 'Toby A', 'García', '2021-11-04', '69996416', 'Calle 42-23l', 'Agullas', 'Mesterios', 'Casado', 'tobyal@mail.com', '2830000', 24, 'Tu pago está programado para el: 18 de Enero', '91786', '2111086', '2021-11-19 01:46:12');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `sucursales`
--

CREATE TABLE `sucursales` (
  `codigo` varchar(50) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `direccion` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `sucursales`
--

INSERT INTO `sucursales` (`codigo`, `nombre`, `direccion`) VALUES
('0564619140', 'Bogisich-Barrows', '0855 Waubesa Trail'),
('1474528635', 'Kub, Metz and Powlowski', '0 Doe Crossing Pass'),
('3409510141', 'Crona, Williamson and Carter', '72 Beilfuss Point'),
('3430468469', 'Hoppe Group', '40 Main Trail'),
('3861939770', 'Jacobi and Sons', '6380 Fulton Center'),
('6608953613', 'Kuhlman-West', '62045 Service Point'),
('6608959613', 'Kuhlman-West', '62045 Service Point'),
('7018345308', 'O\'Reilly, Morissette and Wolff', '57 Sauthoff Parkway'),
('7257249520', 'Morar Group', '63313 Southridge Point'),
('8316682060', 'Oberbrunner, Donnelly and Lang', '14 La Follette Place'),
('9015273367', 'Balistreri Group', '268 Knutson Drive');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `user_id` int(10) UNSIGNED NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(60) NOT NULL,
  `password` varchar(60) NOT NULL,
  `social_id` varchar(100) NOT NULL,
  `picture` varchar(250) NOT NULL,
  `created` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`user_id`, `name`, `email`, `password`, `social_id`, `picture`, `created`) VALUES
(1, 'Admin Deyson', 'free.cuenta@mail.com', 'edc86dcbb7c833c5b9f361e430c55c6f', '', '', '2021-11-18 23:01:30');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- Indices de la tabla `cliente`
--
ALTER TABLE `cliente`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `sucursales`
--
ALTER TABLE `sucursales`
  ADD PRIMARY KEY (`codigo`);

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`),
  ADD KEY `email` (`email`),
  ADD KEY `login` (`password`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `cliente`
--
ALTER TABLE `cliente`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=129;

--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
