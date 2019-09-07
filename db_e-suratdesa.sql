-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 08 Sep 2019 pada 01.49
-- Versi Server: 10.1.19-MariaDB
-- PHP Version: 5.6.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_e-suratdesa`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `login`
--

CREATE TABLE `login` (
  `id` int(11) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `username` varchar(15) NOT NULL,
  `email` varchar(30) NOT NULL,
  `password` varchar(32) NOT NULL,
  `level` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `login`
--

INSERT INTO `login` (`id`, `nama`, `username`, `email`, `password`, `level`) VALUES
(1, 'Administrator', 'admin', 'admin@e-suratdesa.com', '21232f297a57a5a743894a0e4a801fc3', 'admin');

-- --------------------------------------------------------

--
-- Struktur dari tabel `penduduk`
--

CREATE TABLE `penduduk` (
  `nik` varchar(20) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `t_lahir` varchar(20) NOT NULL,
  `j_kelamin` varchar(10) NOT NULL,
  `agama` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `penduduk`
--

INSERT INTO `penduduk` (`nik`, `nama`, `t_lahir`, `j_kelamin`, `agama`) VALUES
('3517112233440001', 'adi1', 'Jombang', 'Laki-laki', 'Islam'),
('3517112233440002', 'adi2', 'Jombang', 'Laki-laki', 'Islam'),
('3517112233440003', 'adi3', 'Jombang', 'Laki-laki', 'Islam'),
('3517112233440004', 'adi4', 'Jombang', 'Laki-laki', 'Islam'),
('3517112233440005', 'adi5', 'Jombang', 'Laki-laki', 'Islam'),
('3517112233440006', 'adi6', 'Jombang', 'Laki-laki', 'Islam'),
('3517112233440007', 'adi7', 'Jombang', 'Laki-laki', 'Islam'),
('3517112233440008', 'adi8', 'Jombang', 'Laki-laki', 'Islam'),
('3517112233440009', 'adi9', 'Jombang', 'Laki-laki', 'Islam'),
('3517112233440010', 'adi10', 'Jombang', 'Laki-laki', 'Islam'),
('3517112233440011', 'adi11', 'Jombang', 'Laki-laki', 'Islam'),
('3517112233440012', 'adi12', 'Jombang', 'Laki-laki', 'Islam'),
('3517112233440013', 'adi13', 'Jombang', 'Laki-laki', 'Islam'),
('3517112233440014', 'adi14', 'Jombang', 'Laki-laki', 'Islam'),
('3517112233440015', 'adi15', 'Jombang', 'Laki-laki', 'Islam'),
('3517112233440016', 'adi16', 'Jombang', 'Laki-laki', 'Islam'),
('3517112233440017', 'adi17', 'Jombang', 'Laki-laki', 'Islam'),
('3517112233440018', 'adi18', 'Jombang', 'Laki-laki', 'Islam'),
('3517112233440019', 'adi19', 'Jombang', 'Laki-laki', 'Islam'),
('3517112233440020', 'adi20', 'Jombang', 'Laki-laki', 'Islam'),
('3517112233440021', 'adi21', 'Jombang', 'Laki-laki', 'Islam'),
('3517112233440022', 'adi22', 'Jombang', 'Laki-laki', 'Islam'),
('3517112233440023', 'adi23', 'Jombang', 'Laki-laki', 'Islam'),
('3517112233440024', 'adi24', 'Jombang', 'Laki-laki', 'Islam'),
('3517112233440025', 'adi25', 'Jombang', 'Laki-laki', 'Islam'),
('3517112233440026', 'adi26', 'Jombang', 'Laki-laki', 'Islam'),
('3517112233440027', 'adi27', 'Jombang', 'Laki-laki', 'Islam'),
('3517112233440028', 'adi28', 'Jombang', 'Laki-laki', 'Islam'),
('3517112233440029', 'adi29', 'Jombang', 'Laki-laki', 'Islam'),
('3517112233440030', 'adi30', 'Jombang', 'Laki-laki', 'Islam'),
('3517112233440031', 'adi31', 'Jombang', 'Laki-laki', 'Islam'),
('3517112233440032', 'adi32', 'Jombang', 'Laki-laki', 'Islam'),
('3517112233440033', 'adi33', 'Jombang', 'Laki-laki', 'Islam'),
('3517112233440034', 'adi34', 'Jombang', 'Laki-laki', 'Islam'),
('3517112233440035', 'adi35', 'Jombang', 'Laki-laki', 'Islam'),
('3517112233440036', 'adi36', 'Jombang', 'Laki-laki', 'Islam'),
('3517112233440037', 'adi37', 'Jombang', 'Laki-laki', 'Islam'),
('3517112233440038', 'adi38', 'Jombang', 'Laki-laki', 'Islam'),
('3517112233440039', 'adi39', 'Jombang', 'Laki-laki', 'Islam'),
('3517112233440040', 'adi40', 'Jombang', 'Laki-laki', 'Islam'),
('3517112233440041', 'adi41', 'Jombang', 'Laki-laki', 'Islam'),
('3517112233440042', 'adi42', 'Jombang', 'Laki-laki', 'Islam'),
('3517112233440043', 'adi43', 'Jombang', 'Laki-laki', 'Islam'),
('3517112233440044', 'adi44', 'Jombang', 'Laki-laki', 'Islam'),
('3517112233440045', 'adi45', 'Jombang', 'Laki-laki', 'Islam'),
('3517112233440046', 'adi46', 'Jombang', 'Laki-laki', 'Islam'),
('3517112233440047', 'adi47', 'Jombang', 'Laki-laki', 'Islam'),
('3517112233440048', 'adi48', 'Jombang', 'Laki-laki', 'Islam'),
('3517112233440049', 'adi49', 'Jombang', 'Laki-laki', 'Islam'),
('3517112233440050', 'adi50', 'Jombang', 'Laki-laki', 'Islam'),
('3517112233440051', 'adi51', 'Jombang', 'Laki-laki', 'Islam'),
('3517112233440052', 'adi52', 'Jombang', 'Laki-laki', 'Islam'),
('3517112233440053', 'adi53', 'Jombang', 'Laki-laki', 'Islam'),
('3517112233440054', 'adi54', 'Jombang', 'Laki-laki', 'Islam'),
('3517112233440055', 'adi55', 'Jombang', 'Laki-laki', 'Islam'),
('3517112233440056', 'adi56', 'Jombang', 'Laki-laki', 'Islam'),
('3517112233440057', 'adi57', 'Jombang', 'Laki-laki', 'Islam'),
('3517112233440058', 'adi58', 'Jombang', 'Laki-laki', 'Islam'),
('3517112233440059', 'adi59', 'Jombang', 'Laki-laki', 'Islam'),
('3517112233440060', 'adi60', 'Jombang', 'Laki-laki', 'Islam'),
('3517112233440061', 'adi61', 'Jombang', 'Laki-laki', 'Islam'),
('3517112233440062', 'adi62', 'Jombang', 'Laki-laki', 'Islam'),
('3517112233440063', 'adi63', 'Jombang', 'Laki-laki', 'Islam'),
('3517112233440064', 'adi64', 'Jombang', 'Laki-laki', 'Islam'),
('3517112233440065', 'adi65', 'Jombang', 'Laki-laki', 'Islam'),
('3517112233440066', 'adi66', 'Jombang', 'Laki-laki', 'Islam'),
('3517112233440067', 'adi67', 'Jombang', 'Laki-laki', 'Islam'),
('3517112233440068', 'adi68', 'Jombang', 'Laki-laki', 'Islam'),
('3517112233440069', 'adi69', 'Jombang', 'Laki-laki', 'Islam');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `penduduk`
--
ALTER TABLE `penduduk`
  ADD PRIMARY KEY (`nik`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
