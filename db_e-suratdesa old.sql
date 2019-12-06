-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Oct 13, 2019 at 08:55 AM
-- Server version: 10.1.19-MariaDB
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
-- Table structure for table `login`
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
-- Dumping data for table `login`
--

INSERT INTO `login` (`id`, `nama`, `username`, `email`, `password`, `level`) VALUES
(1, 'Administrator', 'admin', 'admin@e-suratdesa.com', '21232f297a57a5a743894a0e4a801fc3', 'admin'),
(2, 'Kepala Desa', 'kades', 'kepaladesa@desa.id', '0cfa66469d25bd0d9e55d7ba583f9f2f', 'kades');

-- --------------------------------------------------------

--
-- Table structure for table `pejabat_desa`
--

CREATE TABLE `pejabat_desa` (
  `id_pejabat_desa` int(11) NOT NULL,
  `nama_pejabat_desa` varchar(50) NOT NULL,
  `nik_pejabat_desa` varchar(20) NOT NULL,
  `jabatan` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pejabat_desa`
--

INSERT INTO `pejabat_desa` (`id_pejabat_desa`, `nama_pejabat_desa`, `nik_pejabat_desa`, `jabatan`) VALUES
(1, 'NUR SALIM, S.S., S.IP.', '3517081412970002', 'PJ Kepala Desa'),
(2, 'ALI MAHFUD, S.Pd.', '3517081412970003', 'Sekretaris Desa');

-- --------------------------------------------------------

--
-- Table structure for table `penduduk`
--

CREATE TABLE `penduduk` (
  `id_penduduk` int(11) NOT NULL,
  `nik` varchar(20) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `tempat_lahir` varchar(50) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `jenis_kelamin` varchar(10) NOT NULL,
  `agama` varchar(15) NOT NULL,
  `dusun` varchar(50) NOT NULL,
  `rw` varchar(5) NOT NULL,
  `rt` varchar(5) NOT NULL,
  `no_kk` varchar(20) NOT NULL,
  `pend_kk` varchar(20) NOT NULL,
  `pend_terakhir` varchar(20) NOT NULL,
  `pend_ditempuh` varchar(20) NOT NULL,
  `pekerjaan` varchar(50) NOT NULL,
  `status_perkawinan` varchar(20) NOT NULL,
  `status_dlm_keluarga` varchar(20) NOT NULL,
  `kewarganegaraan` varchar(5) NOT NULL,
  `nama_ayah` varchar(50) NOT NULL,
  `nama_ibu` varchar(50) NOT NULL,
  `gol_darah` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `penduduk`
--

INSERT INTO `penduduk` (`id_penduduk`, `nik`, `nama`, `tempat_lahir`, `tgl_lahir`, `jenis_kelamin`, `agama`, `dusun`, `rw`, `rt`, `no_kk`, `pend_kk`, `pend_terakhir`, `pend_ditempuh`, `pekerjaan`, `status_perkawinan`, `status_dlm_keluarga`, `kewarganegaraan`, `nama_ayah`, `nama_ibu`, `gol_darah`) VALUES
(13, '1927', 'a', 'a', '2019-10-03', 'Perempuan', 'aa', 'Babatan', '001', '001', 'a', 'SLTP/SEDERAJAT', 'SLTP/SEDERAJAT', 'SLTA/SEDERAJAT', 'a', 'Menikah', 'Ayah', 'WNA', 'a', 'a', 'A'),
(9, '3517112233440001', 'Adi Fahrian Hidayat', 'Jombang', '2000-02-11', 'Laki-laki', 'Islam', 'Babatan', '003', '006', '3517112233449999', 'SD/SEDERAJAT', 'SLTA/SEDERAJAT', 'SLTA/SEDERAJAT', 'PELAJAR/MAHASISWA', 'Belum Menikah', 'Anak', 'WNI', 'AYAAAAAH', 'IBUUUUU', 'AB'),
(10, '3517112233440002', 'Supriyanto', 'Jombang', '2000-02-12', 'Laki-laki', 'Islam', 'Kedawong', '003', '006', '3517112233449999', 'SD/SEDERAJAT', 'SLTA/SEDERAJAT', 'SLTA/SEDERAJAT', 'PELAJAR/MAHASISWA', 'Belum Menikah', 'Anak', 'WNI', 'AYAAAAAH', 'IBUUUUU', 'AB'),
(11, '3517112233440003', 'Ahmad Ervan Satria', 'Pontianak', '2000-02-13', 'Laki-laki', 'Islam', 'Bote', '003', '006', '3517112233449999', 'SD/SEDERAJAT', 'SLTA/SEDERAJAT', 'SLTA/SEDERAJAT', 'PELAJAR/MAHASISWA', 'Belum Menikah', 'Anak', 'WNI', 'AYAAAAAH', 'IBUUUUU', 'AB');

-- --------------------------------------------------------

--
-- Table structure for table `profil_desa`
--

CREATE TABLE `profil_desa` (
  `id_profil_desa` int(11) NOT NULL,
  `nama_desa` varchar(50) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `kecamatan` varchar(50) NOT NULL,
  `kabupaten` varchar(50) NOT NULL,
  `provinsi` varchar(20) NOT NULL,
  `kode_pos` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `profil_desa`
--

INSERT INTO `profil_desa` (`id_profil_desa`, `nama_desa`, `alamat`, `kecamatan`, `kabupaten`, `provinsi`, `kode_pos`) VALUES
(1, 'Kedawong', 'Jl. Gajahmada No. 49', 'Diwek', 'Jombang', 'Jawa Timur', '61471');

-- --------------------------------------------------------

--
-- Table structure for table `surat_keterangan`
--

CREATE TABLE `surat_keterangan` (
  `id_sk` int(11) NOT NULL,
  `jenis_surat` varchar(50) NOT NULL,
  `no_surat` varchar(20) DEFAULT NULL,
  `nik` varchar(20) NOT NULL,
  `atribut_umum` varchar(30) DEFAULT NULL,
  `keperluan` varchar(50) NOT NULL,
  `tanggal_surat` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `id_pejabat_desa` int(11) DEFAULT NULL,
  `status_surat` varchar(15) NOT NULL,
  `id_profil_desa` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `surat_keterangan`
--

INSERT INTO `surat_keterangan` (`id_sk`, `jenis_surat`, `no_surat`, `nik`, `atribut_umum`, `keperluan`, `tanggal_surat`, `id_pejabat_desa`, `status_surat`, `id_profil_desa`) VALUES
(120, 'Surat Keterangan', '1927', '3517112233440001', NULL, 'Melamar Pekerjaan', '2020-01-01 17:56:22', 1, 'SELESAI', 1),
(121, 'Surat Keterangan', '1927', '3517112233440002', NULL, 'Melamar Pekerjaan', '2019-10-10 17:56:29', 2, 'SELESAI', 1),
(122, 'Surat Keterangan', '1927', '3517112233440001', NULL, 'Melamar Pekerjaan', '2019-10-12 18:10:04', 2, 'SELESAI', 1),
(123, 'Surat Keterangan', '1927', '3517112233440002', NULL, 'Melamar Pekerjaan', '2019-10-13 07:03:50', 1, 'SELESAI', 1),
(124, 'Surat Keterangan', NULL, '3517112233440001', NULL, 'Melamar Pekerjaan', '2019-10-13 13:38:35', NULL, 'PENDING', 1),
(125, 'Surat Keterangan', NULL, '3517112233440003', NULL, 'Melamar Pekerjaan', '2019-10-13 13:45:19', NULL, 'PENDING', 1),
(126, 'Surat Keterangan', NULL, '3517112233440002', NULL, 'Melamar Pekerjaan', '2019-10-13 13:46:41', NULL, 'PENDING', 1);

-- --------------------------------------------------------

--
-- Table structure for table `surat_keterangan_berkelakuan_baik`
--

CREATE TABLE `surat_keterangan_berkelakuan_baik` (
  `id_skbb` int(11) NOT NULL,
  `jenis_surat` varchar(50) NOT NULL,
  `no_surat` varchar(20) DEFAULT NULL,
  `nik` varchar(20) NOT NULL,
  `atribut_umum` varchar(30) DEFAULT NULL,
  `keperluan` varchar(50) NOT NULL,
  `tanggal_surat` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `id_pejabat_desa` int(11) DEFAULT NULL,
  `status_surat` varchar(15) NOT NULL,
  `id_profil_desa` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `surat_keterangan_berkelakuan_baik`
--

INSERT INTO `surat_keterangan_berkelakuan_baik` (`id_skbb`, `jenis_surat`, `no_surat`, `nik`, `atribut_umum`, `keperluan`, `tanggal_surat`, `id_pejabat_desa`, `status_surat`, `id_profil_desa`) VALUES
(1, 'Surat Keterangan Berkelakuan Baik', '1927', '3517112233440001', NULL, 'Melamar Pekerjaan', '2019-10-12 09:10:17', 1, 'SELESAI', 1),
(2, 'Surat Keterangan Berkelakuan Baik', '1927', '3517112233440002', NULL, 'Melamar Pekerjaan', '2019-10-13 08:35:48', 1, 'SELESAI', 1),
(3, 'Surat Keterangan Berkelakuan Baik', NULL, '3517112233440003', NULL, 'Melamar Pekerjaan', '2019-10-13 13:45:29', NULL, 'PENDING', 1),
(4, 'Surat Keterangan Berkelakuan Baik', NULL, '3517112233440001', NULL, 'Melamar Pekerjaan', '2019-10-13 13:48:40', NULL, 'PENDING', 1);

-- --------------------------------------------------------

--
-- Table structure for table `surat_keterangan_domisili`
--

CREATE TABLE `surat_keterangan_domisili` (
  `id_skd` int(11) NOT NULL,
  `jenis_surat` varchar(50) NOT NULL,
  `no_surat` varchar(20) DEFAULT NULL,
  `nik` varchar(20) NOT NULL,
  `atribut_umum` varchar(30) DEFAULT NULL,
  `keperluan` varchar(50) NOT NULL,
  `tanggal_surat` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `id_pejabat_desa` int(11) DEFAULT NULL,
  `status_surat` varchar(15) NOT NULL,
  `id_profil_desa` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `surat_keterangan_domisili`
--

INSERT INTO `surat_keterangan_domisili` (`id_skd`, `jenis_surat`, `no_surat`, `nik`, `atribut_umum`, `keperluan`, `tanggal_surat`, `id_pejabat_desa`, `status_surat`, `id_profil_desa`) VALUES
(1, 'Surat Keterangan Domisili', '1927', '3517112233440001', NULL, 'Melamar Pekerjaan', '2020-02-01 02:00:56', 1, 'SELESAI', 1),
(2, 'Surat Keterangan Domisili', NULL, '3517112233440002', NULL, 'Melamar Pekerjaan', '2019-10-13 09:37:48', NULL, 'PENDING', 1),
(3, 'Surat Keterangan Domisili', NULL, '3517112233440001', NULL, 'Melamar Pekerjaan', '2019-10-13 13:47:24', NULL, 'PENDING', 1);

-- --------------------------------------------------------

--
-- Table structure for table `surat_keterangan_usaha`
--

CREATE TABLE `surat_keterangan_usaha` (
  `id_sku` int(11) NOT NULL,
  `jenis_surat` varchar(50) NOT NULL,
  `no_surat` varchar(20) DEFAULT NULL,
  `nik` varchar(20) NOT NULL,
  `atribut_umum` varchar(30) DEFAULT NULL,
  `keperluan` varchar(50) NOT NULL,
  `tanggal_surat` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `id_pejabat_desa` int(11) DEFAULT NULL,
  `status_surat` varchar(15) NOT NULL,
  `id_profil_desa` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `surat_keterangan_usaha`
--

INSERT INTO `surat_keterangan_usaha` (`id_sku`, `jenis_surat`, `no_surat`, `nik`, `atribut_umum`, `keperluan`, `tanggal_surat`, `id_pejabat_desa`, `status_surat`, `id_profil_desa`) VALUES
(1, 'Surat Keterangan Usaha', '1927', '3517112233440001', 'Toko BAngunan', 'Melamar Pekerjaan', '2019-10-13 02:01:06', 1, 'SELESAI', 1),
(2, 'Surat Keterangan Usaha', NULL, '3517112233440001', 'Toko BAngunan', 'Melamar Pekerjaan', '2019-10-13 09:37:55', NULL, 'PENDING', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pejabat_desa`
--
ALTER TABLE `pejabat_desa`
  ADD PRIMARY KEY (`id_pejabat_desa`);

--
-- Indexes for table `penduduk`
--
ALTER TABLE `penduduk`
  ADD PRIMARY KEY (`nik`),
  ADD KEY `idx_id_penduduk` (`id_penduduk`);

--
-- Indexes for table `profil_desa`
--
ALTER TABLE `profil_desa`
  ADD PRIMARY KEY (`id_profil_desa`);

--
-- Indexes for table `surat_keterangan`
--
ALTER TABLE `surat_keterangan`
  ADD PRIMARY KEY (`id_sk`),
  ADD KEY `idx_nik` (`nik`),
  ADD KEY `idx_id_pejabat_desa` (`id_pejabat_desa`),
  ADD KEY `idx_id_profil_desa` (`id_profil_desa`);

--
-- Indexes for table `surat_keterangan_berkelakuan_baik`
--
ALTER TABLE `surat_keterangan_berkelakuan_baik`
  ADD PRIMARY KEY (`id_skbb`),
  ADD KEY `idx_id_pejabat_desa` (`id_pejabat_desa`),
  ADD KEY `idx_nik` (`nik`),
  ADD KEY `idx_id_profil_desa` (`id_profil_desa`);

--
-- Indexes for table `surat_keterangan_domisili`
--
ALTER TABLE `surat_keterangan_domisili`
  ADD PRIMARY KEY (`id_skd`),
  ADD KEY `idx_nik` (`nik`),
  ADD KEY `idx_id_pejabat_desa` (`id_pejabat_desa`),
  ADD KEY `idx_id_profil_desa` (`id_profil_desa`);

--
-- Indexes for table `surat_keterangan_usaha`
--
ALTER TABLE `surat_keterangan_usaha`
  ADD PRIMARY KEY (`id_sku`),
  ADD KEY `idx_nik` (`nik`),
  ADD KEY `idx_id_pejabat_desa` (`id_pejabat_desa`),
  ADD KEY `idx_id_profil_desa` (`id_profil_desa`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `pejabat_desa`
--
ALTER TABLE `pejabat_desa`
  MODIFY `id_pejabat_desa` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `penduduk`
--
ALTER TABLE `penduduk`
  MODIFY `id_penduduk` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT for table `profil_desa`
--
ALTER TABLE `profil_desa`
  MODIFY `id_profil_desa` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `surat_keterangan`
--
ALTER TABLE `surat_keterangan`
  MODIFY `id_sk` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=127;
--
-- AUTO_INCREMENT for table `surat_keterangan_berkelakuan_baik`
--
ALTER TABLE `surat_keterangan_berkelakuan_baik`
  MODIFY `id_skbb` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `surat_keterangan_domisili`
--
ALTER TABLE `surat_keterangan_domisili`
  MODIFY `id_skd` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `surat_keterangan_usaha`
--
ALTER TABLE `surat_keterangan_usaha`
  MODIFY `id_sku` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `surat_keterangan`
--
ALTER TABLE `surat_keterangan`
  ADD CONSTRAINT `fi_id_profil_desa_sk` FOREIGN KEY (`id_profil_desa`) REFERENCES `profil_desa` (`id_profil_desa`) ON DELETE NO ACTION ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_id_pejabat_desa_sk` FOREIGN KEY (`id_pejabat_desa`) REFERENCES `pejabat_desa` (`id_pejabat_desa`) ON DELETE NO ACTION ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_nik_sk` FOREIGN KEY (`nik`) REFERENCES `penduduk` (`nik`) ON DELETE NO ACTION ON UPDATE CASCADE;

--
-- Constraints for table `surat_keterangan_berkelakuan_baik`
--
ALTER TABLE `surat_keterangan_berkelakuan_baik`
  ADD CONSTRAINT `fi_id_profil_desa_skbb` FOREIGN KEY (`id_profil_desa`) REFERENCES `profil_desa` (`id_profil_desa`) ON DELETE NO ACTION ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_id_pejabat_desa_skbb` FOREIGN KEY (`id_pejabat_desa`) REFERENCES `pejabat_desa` (`id_pejabat_desa`) ON DELETE NO ACTION ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_nik_skbb` FOREIGN KEY (`nik`) REFERENCES `penduduk` (`nik`) ON DELETE NO ACTION ON UPDATE CASCADE;

--
-- Constraints for table `surat_keterangan_domisili`
--
ALTER TABLE `surat_keterangan_domisili`
  ADD CONSTRAINT `fi_id_profil_desa_skd` FOREIGN KEY (`id_profil_desa`) REFERENCES `profil_desa` (`id_profil_desa`) ON DELETE NO ACTION ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_id_pejabat_desa_skd` FOREIGN KEY (`id_pejabat_desa`) REFERENCES `pejabat_desa` (`id_pejabat_desa`) ON DELETE NO ACTION ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_nik_skd` FOREIGN KEY (`nik`) REFERENCES `penduduk` (`nik`) ON DELETE NO ACTION ON UPDATE CASCADE;

--
-- Constraints for table `surat_keterangan_usaha`
--
ALTER TABLE `surat_keterangan_usaha`
  ADD CONSTRAINT `fi_id_profil_desa_sku` FOREIGN KEY (`id_profil_desa`) REFERENCES `profil_desa` (`id_profil_desa`) ON DELETE NO ACTION ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_id_pejabat_desa_sku` FOREIGN KEY (`id_pejabat_desa`) REFERENCES `pejabat_desa` (`id_pejabat_desa`) ON DELETE NO ACTION ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_nik_sku` FOREIGN KEY (`nik`) REFERENCES `penduduk` (`nik`) ON DELETE NO ACTION ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
