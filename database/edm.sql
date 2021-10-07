-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 07 Okt 2021 pada 08.51
-- Versi server: 10.4.21-MariaDB
-- Versi PHP: 8.0.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `edm`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `area`
--

CREATE TABLE `area` (
  `areaCode` char(11) NOT NULL,
  `namaArea` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `area`
--

INSERT INTO `area` (`areaCode`, `namaArea`) VALUES
('11', 'RADIATOR AREA'),
('12', 'OIL COOLER AREA'),
('13', 'HVAC'),
('14', 'ECM'),
('15', 'SPARK PLUG PARTS AREA'),
('16', 'STICK COIL AREA'),
('17', 'SPARK PLUG ASSY AREA'),
('18', 'O2 SENSOR AREA'),
('19', 'HAMADEN AREA'),
('20', 'QA/MACHINERY/UTLITY AREA'),
('21', 'CENTER CORE'),
('22', 'STAMPING PRESS'),
('24', 'CONDENSOR'),
('66', 'SUPPORT OTHERS'),
('99', 'TRIAL');

-- --------------------------------------------------------

--
-- Struktur dari tabel `bu`
--

CREATE TABLE `bu` (
  `buCode` char(11) NOT NULL,
  `buName` varchar(100) NOT NULL,
  `pabrik` varchar(50) NOT NULL,
  `departemen` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `bu`
--

INSERT INTO `bu` (`buCode`, `buName`, `pabrik`, `departemen`) VALUES
('3301', 'INFORMATION SYSTEM SUNTER', 'SUNTER', ''),
('3302', 'INFORMATION SYSTEM BEKASI', 'BEKASI', ''),
('3303', 'INFORMATION SYSTEM FAJAR', 'FAJAR', ''),
('4012', 'INDIRECT PRODUCTION-BEKASI', 'BEKASI', ''),
('4411', 'DIES MAINTENANCE & REPAIR P1', 'SUNTER', ''),
('4412', 'DIES MAINTENANCE & REPAIR P2', 'BEKASI', ''),
('4413', 'DIES MAINTENANCE & REPAIR P3', 'FAJAR', ''),
('4420', 'MACHINNERY BEKASI', 'BEKASI', ''),
('7212', 'PRESS - CAR AC & AL.RADIATOR', 'BEKASI', ''),
('7213', 'CAR AC INJECTION MOLDING', 'BEKASI', ''),
('7254', 'ALUM RAD.INJECTION MOLDING', 'BEKASI', ''),
('H4410', 'DIE JIG & TOOL DESIGN', 'BEKASI', ''),
('H6120', 'PRESS HORN HDI', 'BEKASI', ''),
('H6140', 'MOULDING HDI', 'BEKASI', '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `dies`
--

CREATE TABLE `dies` (
  `diesNo` char(20) NOT NULL,
  `diesName` varchar(60) NOT NULL,
  `buCode` char(11) NOT NULL,
  `areaCode` char(11) NOT NULL,
  `critical` char(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `dies`
--

INSERT INTO `dies` (`diesNo`, `diesName`, `buCode`, `areaCode`, `critical`) VALUES
('301-001-000', 'FIN EVAPORATOR A3/A4', '7212', '', ''),
('301-002-000', 'FIN EVAPORATOR A2', '7212', '', ''),
('301-005-000', 'FIN EVAPORATOR 510T/APV', '7212', '', ''),
('301-006-000', 'FIN EVAPORATOR D38A', '7212', '', ''),
('301-008-000', 'FIN EVAPORATOR D01N', '7212', '', ''),
('301-026-000', 'FAN BLOWER IMV', '7213', '', ''),
('301-029-000', 'CASE REAR IMV', '7213', '', ''),
('301-033-000', 'CASE HEATER D40G LH', '7213', '13', ''),
('301-034-000', 'CASE HEATER D40G RH', '7213', '', ''),
('301-035-000', 'CASE BLOWER D40G R/L', '7213', '', '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pic`
--

CREATE TABLE `pic` (
  `npk` char(11) NOT NULL,
  `nama` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `pic`
--

INSERT INTO `pic` (`npk`, `nama`) VALUES
('2000803', 'SARIFUDIN'),
('2101052', 'MUHAMMAD WAHYUDIANTO'),
('2120325', 'REZA INDRA JULYAN'),
('2121344', 'IMAM HERMANSYAH'),
('2131054', 'DANI PRASETYO'),
('2150913', 'SHONY ALEX PRASETYO'),
('2150917', 'VICKI PONNIK'),
('2150933', 'M.SUKRON WAHYUDI'),
('2161330', 'HENGKY AJI RINALDI'),
('2161894', 'MUTIARA VIRGIN R.A'),
('2171801', 'JOKO WIDAGDO'),
('890711', 'WAGIRAN'),
('890920', 'LUCKY RUBIANTO'),
('900303', 'AMIRRUDIN'),
('950703', 'MUDJIONO'),
('960514', 'SARWO EDI'),
('970632', 'RACHMAT KAMTONO'),
('990451', 'BUDIYANTO'),
('990606', 'RASIM');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `buCode` char(11) NOT NULL,
  `npk` char(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `userId` char(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`buCode`, `npk`, `nama`, `userId`) VALUES
('4412', '2000803', 'SARIFUDIN', '2000803'),
('4412', '2101052', 'MUHAMMAD WAHYUDIANTO', '2101052'),
('4412', '2120325', 'REZA INDRA JULYAN', '2120325'),
('4412', '2121344', 'IMAM HERMANSYAH', '2121344'),
('4412', '2131054', 'DANI PRASETYO', '2131054'),
('4412', '2150913', 'SHONY ALEX PRASETYO', '2150913'),
('4412', '2150917', 'VICKI PONNIK', '2150917'),
('4412', '2150933', 'M.SUKRON WAHYUDI', '2150933'),
('4412', '2161330', 'HENGKY AJI RINALDI', '2161330'),
('4412', '2161894', 'MUTIARA VIRGIN R.A', '2161894'),
('4412', '890920', 'LUCKY RUBIANTO', '890920'),
('4413', '960514', 'SARWO EDI', '960514');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `area`
--
ALTER TABLE `area`
  ADD PRIMARY KEY (`areaCode`);

--
-- Indeks untuk tabel `bu`
--
ALTER TABLE `bu`
  ADD PRIMARY KEY (`buCode`);

--
-- Indeks untuk tabel `dies`
--
ALTER TABLE `dies`
  ADD PRIMARY KEY (`diesNo`),
  ADD KEY `buCode` (`buCode`);

--
-- Indeks untuk tabel `pic`
--
ALTER TABLE `pic`
  ADD PRIMARY KEY (`npk`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`userId`),
  ADD KEY `buCode` (`buCode`),
  ADD KEY `npk` (`npk`);

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `dies`
--
ALTER TABLE `dies`
  ADD CONSTRAINT `dies_ibfk_1` FOREIGN KEY (`buCode`) REFERENCES `bu` (`buCode`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `user`
--
ALTER TABLE `user`
  ADD CONSTRAINT `user_ibfk_1` FOREIGN KEY (`buCode`) REFERENCES `bu` (`buCode`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `user_ibfk_2` FOREIGN KEY (`npk`) REFERENCES `pic` (`npk`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
