-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 12 Sep 2019 pada 09.19
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
-- Struktur dari tabel `pejabat_desa`
--

CREATE TABLE `pejabat_desa` (
  `id_pejabat_desa` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `nik` varchar(20) NOT NULL,
  `jabatan` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `penduduk`
--

CREATE TABLE `penduduk` (
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
  `gol_darah` varchar(5) NOT NULL,
  `jamkesmas` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `penduduk`
--

INSERT INTO `penduduk` (`nik`, `nama`, `tempat_lahir`, `tgl_lahir`, `jenis_kelamin`, `agama`, `dusun`, `rw`, `rt`, `no_kk`, `pend_kk`, `pend_terakhir`, `pend_ditempuh`, `pekerjaan`, `status_perkawinan`, `status_dlm_keluarga`, `kewarganegaraan`, `nama_ayah`, `nama_ibu`, `gol_darah`, `jamkesmas`) VALUES
('3517112233440001', 'Abu Jahal1', 'Jombang', '2000-02-11', 'Laki-laki', 'Islam', 'Mojosongo', '003', '008', '3517112233449999', 'TAMAT SD/SEDERAJAT', 'SMP/SEDERAJAT', 'SMA/SEDERAJAT', 'PELAJAR/MAHASISWA', 'BELUM KAWIN', 'ANAK', 'WNI', 'AYAAAAAH', 'IBUUUUU', 'AB', 'TIDAK ADA'),
('3517112233440002', 'Abu Jahal2', 'Jombang', '2000-02-12', 'Laki-laki', 'Islam', 'Mojosongo', '003', '008', '3517112233449999', 'TAMAT SD/SEDERAJAT', 'SMP/SEDERAJAT', 'SMA/SEDERAJAT', 'PELAJAR/MAHASISWA', 'BELUM KAWIN', 'ANAK', 'WNI', 'AYAAAAAH', 'IBUUUUU', 'AB', 'TIDAK ADA'),
('3517112233440003', 'Abu Jahal3', 'Jombang', '2000-02-13', 'Laki-laki', 'Islam', 'Mojosongo', '003', '008', '3517112233449999', 'TAMAT SD/SEDERAJAT', 'SMP/SEDERAJAT', 'SMA/SEDERAJAT', 'PELAJAR/MAHASISWA', 'BELUM KAWIN', 'ANAK', 'WNI', 'AYAAAAAH', 'IBUUUUU', 'AB', 'TIDAK ADA'),
('3517112233440004', 'Abu Jahal4', 'Jombang', '2000-02-14', 'Laki-laki', 'Islam', 'Mojosongo', '003', '008', '3517112233449999', 'TAMAT SD/SEDERAJAT', 'SMP/SEDERAJAT', 'SMA/SEDERAJAT', 'PELAJAR/MAHASISWA', 'BELUM KAWIN', 'ANAK', 'WNI', 'AYAAAAAH', 'IBUUUUU', 'AB', 'TIDAK ADA'),
('3517112233440005', 'Abu Jahal5', 'Jombang', '2000-02-15', 'Laki-laki', 'Islam', 'Mojosongo', '003', '008', '3517112233449999', 'TAMAT SD/SEDERAJAT', 'SMP/SEDERAJAT', 'SMA/SEDERAJAT', 'PELAJAR/MAHASISWA', 'BELUM KAWIN', 'ANAK', 'WNI', 'AYAAAAAH', 'IBUUUUU', 'AB', 'TIDAK ADA'),
('3517112233440006', 'Abu Jahal6', 'Jombang', '2000-02-16', 'Laki-laki', 'Islam', 'Mojosongo', '003', '008', '3517112233449999', 'TAMAT SD/SEDERAJAT', 'SMP/SEDERAJAT', 'SMA/SEDERAJAT', 'PELAJAR/MAHASISWA', 'BELUM KAWIN', 'ANAK', 'WNI', 'AYAAAAAH', 'IBUUUUU', 'AB', 'TIDAK ADA'),
('3517112233440007', 'Abu Jahal7', 'Jombang', '2000-02-17', 'Laki-laki', 'Islam', 'Mojosongo', '003', '008', '3517112233449999', 'TAMAT SD/SEDERAJAT', 'SMP/SEDERAJAT', 'SMA/SEDERAJAT', 'PELAJAR/MAHASISWA', 'BELUM KAWIN', 'ANAK', 'WNI', 'AYAAAAAH', 'IBUUUUU', 'AB', 'TIDAK ADA'),
('3517112233440008', 'Abu Jahal8', 'Jombang', '2000-02-18', 'Laki-laki', 'Islam', 'Mojosongo', '003', '008', '3517112233449999', 'TAMAT SD/SEDERAJAT', 'SMP/SEDERAJAT', 'SMA/SEDERAJAT', 'PELAJAR/MAHASISWA', 'BELUM KAWIN', 'ANAK', 'WNI', 'AYAAAAAH', 'IBUUUUU', 'AB', 'TIDAK ADA'),
('3517112233440009', 'Abu Jahal9', 'Jombang', '2000-02-19', 'Laki-laki', 'Islam', 'Mojosongo', '003', '008', '3517112233449999', 'TAMAT SD/SEDERAJAT', 'SMP/SEDERAJAT', 'SMA/SEDERAJAT', 'PELAJAR/MAHASISWA', 'BELUM KAWIN', 'ANAK', 'WNI', 'AYAAAAAH', 'IBUUUUU', 'AB', 'TIDAK ADA'),
('3517112233440010', 'Abu Jahal10', 'Jombang', '2000-02-20', 'Laki-laki', 'Islam', 'Mojosongo', '003', '008', '3517112233449999', 'TAMAT SD/SEDERAJAT', 'SMP/SEDERAJAT', 'SMA/SEDERAJAT', 'PELAJAR/MAHASISWA', 'BELUM KAWIN', 'ANAK', 'WNI', 'AYAAAAAH', 'IBUUUUU', 'AB', 'TIDAK ADA'),
('3517112233440011', 'Abu Jahal11', 'Jombang', '2000-02-21', 'Laki-laki', 'Islam', 'Mojosongo', '003', '008', '3517112233449999', 'TAMAT SD/SEDERAJAT', 'SMP/SEDERAJAT', 'SMA/SEDERAJAT', 'PELAJAR/MAHASISWA', 'BELUM KAWIN', 'ANAK', 'WNI', 'AYAAAAAH', 'IBUUUUU', 'AB', 'TIDAK ADA'),
('3517112233440012', 'Abu Jahal12', 'Jombang', '2000-02-22', 'Laki-laki', 'Islam', 'Mojosongo', '003', '008', '3517112233449999', 'TAMAT SD/SEDERAJAT', 'SMP/SEDERAJAT', 'SMA/SEDERAJAT', 'PELAJAR/MAHASISWA', 'BELUM KAWIN', 'ANAK', 'WNI', 'AYAAAAAH', 'IBUUUUU', 'AB', 'TIDAK ADA'),
('3517112233440013', 'Abu Jahal13', 'Jombang', '2000-02-23', 'Laki-laki', 'Islam', 'Mojosongo', '003', '008', '3517112233449999', 'TAMAT SD/SEDERAJAT', 'SMP/SEDERAJAT', 'SMA/SEDERAJAT', 'PELAJAR/MAHASISWA', 'BELUM KAWIN', 'ANAK', 'WNI', 'AYAAAAAH', 'IBUUUUU', 'AB', 'TIDAK ADA'),
('3517112233440014', 'Abu Jahal14', 'Jombang', '2000-02-24', 'Laki-laki', 'Islam', 'Mojosongo', '003', '008', '3517112233449999', 'TAMAT SD/SEDERAJAT', 'SMP/SEDERAJAT', 'SMA/SEDERAJAT', 'PELAJAR/MAHASISWA', 'BELUM KAWIN', 'ANAK', 'WNI', 'AYAAAAAH', 'IBUUUUU', 'AB', 'TIDAK ADA'),
('3517112233440015', 'Abu Jahal15', 'Jombang', '2000-02-25', 'Laki-laki', 'Islam', 'Mojosongo', '003', '008', '3517112233449999', 'TAMAT SD/SEDERAJAT', 'SMP/SEDERAJAT', 'SMA/SEDERAJAT', 'PELAJAR/MAHASISWA', 'BELUM KAWIN', 'ANAK', 'WNI', 'AYAAAAAH', 'IBUUUUU', 'AB', 'TIDAK ADA'),
('3517112233440016', 'Abu Jahal16', 'Jombang', '2000-02-26', 'Laki-laki', 'Islam', 'Mojosongo', '003', '008', '3517112233449999', 'TAMAT SD/SEDERAJAT', 'SMP/SEDERAJAT', 'SMA/SEDERAJAT', 'PELAJAR/MAHASISWA', 'BELUM KAWIN', 'ANAK', 'WNI', 'AYAAAAAH', 'IBUUUUU', 'AB', 'TIDAK ADA'),
('3517112233440017', 'Abu Jahal17', 'Jombang', '2000-02-27', 'Laki-laki', 'Islam', 'Mojosongo', '003', '008', '3517112233449999', 'TAMAT SD/SEDERAJAT', 'SMP/SEDERAJAT', 'SMA/SEDERAJAT', 'PELAJAR/MAHASISWA', 'BELUM KAWIN', 'ANAK', 'WNI', 'AYAAAAAH', 'IBUUUUU', 'AB', 'TIDAK ADA'),
('3517112233440018', 'Abu Jahal18', 'Jombang', '2000-02-28', 'Laki-laki', 'Islam', 'Mojosongo', '003', '008', '3517112233449999', 'TAMAT SD/SEDERAJAT', 'SMP/SEDERAJAT', 'SMA/SEDERAJAT', 'PELAJAR/MAHASISWA', 'BELUM KAWIN', 'ANAK', 'WNI', 'AYAAAAAH', 'IBUUUUU', 'AB', 'TIDAK ADA'),
('3517112233440019', 'Abu Jahal19', 'Jombang', '2000-02-29', 'Laki-laki', 'Islam', 'Mojosongo', '003', '008', '3517112233449999', 'TAMAT SD/SEDERAJAT', 'SMP/SEDERAJAT', 'SMA/SEDERAJAT', 'PELAJAR/MAHASISWA', 'BELUM KAWIN', 'ANAK', 'WNI', 'AYAAAAAH', 'IBUUUUU', 'AB', 'TIDAK ADA'),
('3517112233440020', 'Abu Jahal20', 'Jombang', '0000-00-00', 'Laki-laki', 'Islam', 'Mojosongo', '003', '008', '3517112233449999', 'TAMAT SD/SEDERAJAT', 'SMP/SEDERAJAT', 'SMA/SEDERAJAT', 'PELAJAR/MAHASISWA', 'BELUM KAWIN', 'ANAK', 'WNI', 'AYAAAAAH', 'IBUUUUU', 'AB', 'TIDAK ADA'),
('3517112233440021', 'Abu Jahal21', 'Jombang', '0000-00-00', 'Laki-laki', 'Islam', 'Mojosongo', '003', '008', '3517112233449999', 'TAMAT SD/SEDERAJAT', 'SMP/SEDERAJAT', 'SMA/SEDERAJAT', 'PELAJAR/MAHASISWA', 'BELUM KAWIN', 'ANAK', 'WNI', 'AYAAAAAH', 'IBUUUUU', 'AB', 'TIDAK ADA');

-- --------------------------------------------------------

--
-- Struktur dari tabel `profil_desa`
--

CREATE TABLE `profil_desa` (
  `id_profil_desa` int(11) NOT NULL,
  `nama_desa` varchar(50) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `kecamatan` varchar(50) NOT NULL,
  `kabupaten` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `surat_keterangan_berkelakuan_baik`
--

CREATE TABLE `surat_keterangan_berkelakuan_baik` (
  `id_skbb` int(11) NOT NULL,
  `nik` varchar(20) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `tempat_tgl_lahir` varchar(50) NOT NULL,
  `jenis_kelamin` varchar(15) NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `agama` varchar(15) NOT NULL,
  `pekerjaan` varchar(30) NOT NULL,
  `kewarganegaraan` varchar(5) NOT NULL,
  `keperluan` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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
  ADD PRIMARY KEY (`nik`);

--
-- Indexes for table `profil_desa`
--
ALTER TABLE `profil_desa`
  ADD PRIMARY KEY (`id_profil_desa`);

--
-- Indexes for table `surat_keterangan_berkelakuan_baik`
--
ALTER TABLE `surat_keterangan_berkelakuan_baik`
  ADD PRIMARY KEY (`id_skbb`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `pejabat_desa`
--
ALTER TABLE `pejabat_desa`
  MODIFY `id_pejabat_desa` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `profil_desa`
--
ALTER TABLE `profil_desa`
  MODIFY `id_profil_desa` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `surat_keterangan_berkelakuan_baik`
--
ALTER TABLE `surat_keterangan_berkelakuan_baik`
  MODIFY `id_skbb` int(11) NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
