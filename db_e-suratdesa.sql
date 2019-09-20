-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 20 Sep 2019 pada 10.01
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

--
-- Dumping data untuk tabel `pejabat_desa`
--

INSERT INTO `pejabat_desa` (`id_pejabat_desa`, `nama`, `nik`, `jabatan`) VALUES
(1, 'Adi Fahrian Hidayat, S.Kom', '3517081412970002', 'Kepala Desa'),
(2, 'Adi F H, S. Kom.', '3517081412970002', 'Sekretaris Desa');

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
  `gol_darah` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `penduduk`
--

INSERT INTO `penduduk` (`nik`, `nama`, `tempat_lahir`, `tgl_lahir`, `jenis_kelamin`, `agama`, `dusun`, `rw`, `rt`, `no_kk`, `pend_kk`, `pend_terakhir`, `pend_ditempuh`, `pekerjaan`, `status_perkawinan`, `status_dlm_keluarga`, `kewarganegaraan`, `nama_ayah`, `nama_ibu`, `gol_darah`) VALUES
('12345', 'ASD', 'Zimbabwe', '2019-09-01', 'Perempuan', 'Islam', 'Dusun A', '001', '001', '123', 'SD/SEDERAJAT', 'SD/SEDERAJAT', 'SD/SEDERAJAT', 'PELAJAR/MAHASISWA', 'Belum Menikah', 'Ayah', 'WNI', 'AYAAAH', 'IBUUU', 'A'),
('3517112233440001', 'Adi Fahrian Hidayat', 'Jombang', '1997-12-14', 'Laki-laki', 'Islam', 'Dusun A', '003', '001', '3517112233449999', 'SD/SEDERAJAT', 'SMP/SEDERAJAT', 'SLTA/SEDERAJAT', 'PELAJAR/MAHASISWA', 'Belum Menikah', 'Anak', 'WNI', 'AYAAAAAH', 'IBUUUUU', 'AB'),
('3517112233440002', 'Adi Fahrian Hidayat2', 'Jombang', '2000-02-12', 'Laki-laki', 'Islam', 'Dusun B', '003', '001', '3517112233449999', 'SD/SEDERAJAT', '', 'SLTA/SEDERAJAT', 'PELAJAR/MAHASISWA', 'Belum Menikah', 'Anak', 'WNI', 'AYAAAAAH', 'IBUUUUU', 'AB'),
('3517112233440003', 'Adi Fahrian Hidayat3', 'Jombang', '2000-02-13', 'Laki-laki', 'Islam', 'Mojosongo', '003', '008', '3517112233449999', 'TAMAT SD/SEDERAJAT', 'SMP/SEDERAJAT', 'SMA/SEDERAJAT', 'PELAJAR/MAHASISWA', 'Belum Menikah', 'Anak', 'WNI', 'AYAAAAAH', 'IBUUUUU', 'AB'),
('3517112233440004', 'Adi Fahrian Hidayat4', 'Jombang', '2000-02-14', 'Laki-laki', 'Islam', 'Mojosongo', '003', '008', '3517112233449999', 'TAMAT SD/SEDERAJAT', 'SMP/SEDERAJAT', 'SMA/SEDERAJAT', 'PELAJAR/MAHASISWA', 'Belum Menikah', 'Anak', 'WNI', 'AYAAAAAH', 'IBUUUUU', 'AB'),
('3517112233440005', 'Adi Fahrian Hidayat5', 'Jombang', '2000-02-15', 'Laki-laki', 'Islam', 'Mojosongo', '003', '008', '3517112233449999', 'TAMAT SD/SEDERAJAT', 'SMP/SEDERAJAT', 'SMA/SEDERAJAT', 'PELAJAR/MAHASISWA', 'Belum Menikah', 'Anak', 'WNI', 'AYAAAAAH', 'IBUUUUU', 'AB'),
('3517112233440006', 'Adi Fahrian Hidayat6', 'Jombang', '2000-02-16', 'Laki-laki', 'Islam', 'Mojosongo', '003', '008', '3517112233449999', 'TAMAT SD/SEDERAJAT', 'SMP/SEDERAJAT', 'SMA/SEDERAJAT', 'PELAJAR/MAHASISWA', 'Belum Menikah', 'Anak', 'WNI', 'AYAAAAAH', 'IBUUUUU', 'AB'),
('3517112233440007', 'Adi Fahrian Hidayat7', 'Jombang', '2000-02-17', 'Laki-laki', 'Islam', 'Mojosongo', '003', '008', '3517112233449999', 'TAMAT SD/SEDERAJAT', 'SMP/SEDERAJAT', 'SMA/SEDERAJAT', 'PELAJAR/MAHASISWA', 'Belum Menikah', 'Anak', 'WNI', 'AYAAAAAH', 'IBUUUUU', 'AB'),
('3517112233440008', 'Adi Fahrian Hidayat8', 'Jombang', '2000-02-18', 'Laki-laki', 'Islam', 'Mojosongo', '003', '008', '3517112233449999', 'TAMAT SD/SEDERAJAT', 'SMP/SEDERAJAT', 'SMA/SEDERAJAT', 'PELAJAR/MAHASISWA', 'Belum Menikah', 'Anak', 'WNI', 'AYAAAAAH', 'IBUUUUU', 'AB'),
('3517112233440009', 'Adi Fahrian Hidayat9', 'Jombang', '2000-02-19', 'Laki-laki', 'Islam', 'Mojosongo', '003', '008', '3517112233449999', 'TAMAT SD/SEDERAJAT', 'SMP/SEDERAJAT', 'SMA/SEDERAJAT', 'PELAJAR/MAHASISWA', 'Belum Menikah', 'Anak', 'WNI', 'AYAAAAAH', 'IBUUUUU', 'AB'),
('3517112233440010', 'Adi Fahrian Hidayat10', 'Jombang', '2000-02-20', 'Laki-laki', 'Islam', 'Mojosongo', '003', '008', '3517112233449999', 'TAMAT SD/SEDERAJAT', 'SMP/SEDERAJAT', 'SMA/SEDERAJAT', 'PELAJAR/MAHASISWA', 'Belum Menikah', 'Anak', 'WNI', 'AYAAAAAH', 'IBUUUUU', 'AB'),
('3517112233440011', 'Adi Fahrian Hidayat11', 'Jombang', '2000-02-21', 'Laki-laki', 'Islam', 'Mojosongo', '003', '008', '3517112233449999', 'TAMAT SD/SEDERAJAT', 'SMP/SEDERAJAT', 'SMA/SEDERAJAT', 'PELAJAR/MAHASISWA', 'Belum Menikah', 'Anak', 'WNI', 'AYAAAAAH', 'IBUUUUU', 'AB'),
('3517112233440012', 'Adi Fahrian Hidayat12', 'Jombang', '2000-02-22', 'Laki-laki', 'Islam', 'Mojosongo', '003', '008', '3517112233449999', 'TAMAT SD/SEDERAJAT', 'SMP/SEDERAJAT', 'SMA/SEDERAJAT', 'PELAJAR/MAHASISWA', 'Belum Menikah', 'Anak', 'WNI', 'AYAAAAAH', 'IBUUUUU', 'AB'),
('3517112233440013', 'Adi Fahrian Hidayat13', 'Jombang', '2000-02-23', 'Laki-laki', 'Islam', 'Mojosongo', '003', '008', '3517112233449999', 'TAMAT SD/SEDERAJAT', 'SMP/SEDERAJAT', 'SMA/SEDERAJAT', 'PELAJAR/MAHASISWA', 'Belum Menikah', 'Anak', 'WNI', 'AYAAAAAH', 'IBUUUUU', 'AB'),
('3517112233440014', 'Adi Fahrian Hidayat14', 'Jombang', '2000-02-24', 'Laki-laki', 'Islam', 'Mojosongo', '003', '008', '3517112233449999', 'TAMAT SD/SEDERAJAT', 'SMP/SEDERAJAT', 'SMA/SEDERAJAT', 'PELAJAR/MAHASISWA', 'Belum Menikah', 'Anak', 'WNI', 'AYAAAAAH', 'IBUUUUU', 'AB'),
('3517112233440015', 'Adi Fahrian Hidayat15', 'Jombang', '2000-02-25', 'Laki-laki', 'Islam', 'Mojosongo', '003', '008', '3517112233449999', 'TAMAT SD/SEDERAJAT', 'SMP/SEDERAJAT', 'SMA/SEDERAJAT', 'PELAJAR/MAHASISWA', 'Belum Menikah', 'Anak', 'WNI', 'AYAAAAAH', 'IBUUUUU', 'AB'),
('3517112233440016', 'Adi Fahrian Hidayat16', 'Jombang', '2000-02-26', 'Laki-laki', 'Islam', 'Mojosongo', '003', '008', '3517112233449999', 'TAMAT SD/SEDERAJAT', 'SMP/SEDERAJAT', 'SMA/SEDERAJAT', 'PELAJAR/MAHASISWA', 'Belum Menikah', 'Anak', 'WNI', 'AYAAAAAH', 'IBUUUUU', 'AB'),
('3517112233440017', 'Adi Fahrian Hidayat17', 'Jombang', '2000-02-27', 'Laki-laki', 'Islam', 'Mojosongo', '003', '008', '3517112233449999', 'TAMAT SD/SEDERAJAT', 'SMP/SEDERAJAT', 'SMA/SEDERAJAT', 'PELAJAR/MAHASISWA', 'Belum Menikah', 'Anak', 'WNI', 'AYAAAAAH', 'IBUUUUU', 'AB'),
('3517112233440018', 'Adi Fahrian Hidayat18', 'Jombang', '2000-02-28', 'Laki-laki', 'Islam', 'Mojosongo', '003', '008', '3517112233449999', 'TAMAT SD/SEDERAJAT', 'SMP/SEDERAJAT', 'SMA/SEDERAJAT', 'PELAJAR/MAHASISWA', 'Belum Menikah', 'Anak', 'WNI', 'AYAAAAAH', 'IBUUUUU', 'AB'),
('3517112233440019', 'Adi Fahrian Hidayat19', 'Jombang', '2000-02-29', 'Laki-laki', 'Islam', 'Mojosongo', '003', '008', '3517112233449999', 'TAMAT SD/SEDERAJAT', 'SMP/SEDERAJAT', 'SMA/SEDERAJAT', 'PELAJAR/MAHASISWA', 'Belum Menikah', 'Anak', 'WNI', 'AYAAAAAH', 'IBUUUUU', 'AB'),
('3517112233440020', 'Adi Fahrian Hidayat20', 'Jombang', '2000-03-01', 'Laki-laki', 'Islam', 'Mojosongo', '003', '008', '3517112233449999', 'TAMAT SD/SEDERAJAT', 'SMP/SEDERAJAT', 'SMA/SEDERAJAT', 'PELAJAR/MAHASISWA', 'Belum Menikah', 'Anak', 'WNI', 'AYAAAAAH', 'IBUUUUU', 'AB'),
('3517112233440021', 'Adi Fahrian Hidayat21', 'Jombang', '2000-03-02', 'Laki-laki', 'Islam', 'Mojosongo', '003', '008', '3517112233449999', 'TAMAT SD/SEDERAJAT', 'SMP/SEDERAJAT', 'SMA/SEDERAJAT', 'PELAJAR/MAHASISWA', 'Belum Menikah', 'Anak', 'WNI', 'AYAAAAAH', 'IBUUUUU', 'AB');

-- --------------------------------------------------------

--
-- Struktur dari tabel `profil_desa`
--

CREATE TABLE `profil_desa` (
  `id_profil_desa` int(11) NOT NULL,
  `nama_desa` varchar(50) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `kecamatan` varchar(50) NOT NULL,
  `kabupaten` varchar(50) NOT NULL,
  `kode_pos` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `profil_desa`
--

INSERT INTO `profil_desa` (`id_profil_desa`, `nama_desa`, `alamat`, `kecamatan`, `kabupaten`, `kode_pos`) VALUES
(1, 'Kedawong', 'Jl. Gajahmada No. 49', 'Diwek', 'Jombang', '61471');

-- --------------------------------------------------------

--
-- Struktur dari tabel `surat_keterangan`
--

CREATE TABLE `surat_keterangan` (
  `id_sk` int(11) NOT NULL,
  `no_surat` varchar(20) DEFAULT NULL,
  `nik` varchar(20) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `tempat_tgl_lahir` varchar(50) NOT NULL,
  `jenis_kelamin` varchar(10) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `agama` varchar(15) NOT NULL,
  `pekerjaan` varchar(50) NOT NULL,
  `kewarganegaraan` varchar(5) NOT NULL,
  `keperluan` varchar(50) NOT NULL,
  `tanggal_surat` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `id_pejabat_desa` int(11) DEFAULT NULL,
  `status_surat` varchar(15) NOT NULL,
  `id_profil_desa` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `surat_keterangan_berkelakuan_baik`
--

CREATE TABLE `surat_keterangan_berkelakuan_baik` (
  `id_skbb` int(11) NOT NULL,
  `no_surat` varchar(20) DEFAULT NULL,
  `nik` varchar(20) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `tempat_tgl_lahir` varchar(50) NOT NULL,
  `jenis_kelamin` varchar(10) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `agama` varchar(15) NOT NULL,
  `pekerjaan` varchar(50) NOT NULL,
  `kewarganegaraan` varchar(5) NOT NULL,
  `keperluan` varchar(50) NOT NULL,
  `tanggal_surat` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `id_pejabat_desa` int(11) DEFAULT NULL,
  `status_surat` varchar(15) NOT NULL,
  `id_profil_desa` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `surat_keterangan_berkelakuan_baik`
--

INSERT INTO `surat_keterangan_berkelakuan_baik` (`id_skbb`, `no_surat`, `nik`, `nama`, `tempat_tgl_lahir`, `jenis_kelamin`, `alamat`, `agama`, `pekerjaan`, `kewarganegaraan`, `keperluan`, `tanggal_surat`, `id_pejabat_desa`, `status_surat`, `id_profil_desa`) VALUES
(10, '1927/1927/1927/1927', '3517112233440001', 'Adi Fahrian Hidayat', 'Jombang, 11 February 2000', 'Laki-laki', 'Dsn. Mojosongo, RT008/RW003', 'Islam', 'PELAJAR/MAHASISWA', 'WNI', 'Persyaratan Melamar Pekerjaan', '2019-09-19 09:15:42', 1, 'SELESAI', NULL),
(11, '1927/1927/1927/1927', '3517112233440002', 'Supriyanto', 'Jombang, 12 February 2000', 'Laki-laki', 'Dsn. Mojosongo, RT008/RW003', 'Islam', 'PELAJAR/MAHASISWA', 'WNI', 'Persyaratan Melamar Pekerjaan', '2019-09-19 09:15:50', 1, 'SELESAI', NULL),
(12, '1927/1927/1927/1927', '3517112233440003', 'Ahmad Ervan Satria', 'Jombang, 13 February 2000', 'Laki-laki', 'Dsn. Mojosongo, RT008/RW003', 'Islam', 'PELAJAR/MAHASISWA', 'WNI', 'Persyaratan Melamar Pekerjaan', '2019-09-19 09:15:58', 2, 'SELESAI', NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `surat_keterangan_domisili`
--

CREATE TABLE `surat_keterangan_domisili` (
  `id_skd` int(11) NOT NULL,
  `no_surat` varchar(20) DEFAULT NULL,
  `nik` varchar(20) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `tempat_tgl_lahir` varchar(50) NOT NULL,
  `jenis_kelamin` varchar(10) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `agama` varchar(15) NOT NULL,
  `pekerjaan` varchar(50) NOT NULL,
  `kewarganegaraan` varchar(5) NOT NULL,
  `keperluan` varchar(50) NOT NULL,
  `tanggal_surat` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `id_pejabat_desa` int(11) DEFAULT NULL,
  `status_surat` varchar(15) NOT NULL,
  `id_profil_desa` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `surat_keterangan_usaha`
--

CREATE TABLE `surat_keterangan_usaha` (
  `id_sku` int(11) NOT NULL,
  `no_surat` varchar(20) DEFAULT NULL,
  `nik` varchar(20) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `tempat_tgl_lahir` varchar(50) NOT NULL,
  `jenis_kelamin` varchar(10) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `agama` varchar(15) NOT NULL,
  `pekerjaan` varchar(50) NOT NULL,
  `kewarganegaraan` varchar(5) NOT NULL,
  `keperluan` varchar(50) NOT NULL,
  `tanggal_surat` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `id_pejabat_desa` int(11) DEFAULT NULL,
  `status_surat` varchar(15) NOT NULL,
  `id_profil_desa` int(11) DEFAULT NULL
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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `pejabat_desa`
--
ALTER TABLE `pejabat_desa`
  MODIFY `id_pejabat_desa` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `profil_desa`
--
ALTER TABLE `profil_desa`
  MODIFY `id_profil_desa` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `surat_keterangan`
--
ALTER TABLE `surat_keterangan`
  MODIFY `id_sk` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `surat_keterangan_berkelakuan_baik`
--
ALTER TABLE `surat_keterangan_berkelakuan_baik`
  MODIFY `id_skbb` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT for table `surat_keterangan_domisili`
--
ALTER TABLE `surat_keterangan_domisili`
  MODIFY `id_skd` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `surat_keterangan_usaha`
--
ALTER TABLE `surat_keterangan_usaha`
  MODIFY `id_sku` int(11) NOT NULL AUTO_INCREMENT;
--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `surat_keterangan`
--
ALTER TABLE `surat_keterangan`
  ADD CONSTRAINT `fi_id_profil_desa_sk` FOREIGN KEY (`id_profil_desa`) REFERENCES `profil_desa` (`id_profil_desa`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_id_pejabat_desa_sk` FOREIGN KEY (`id_pejabat_desa`) REFERENCES `pejabat_desa` (`id_pejabat_desa`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_nik_sk` FOREIGN KEY (`nik`) REFERENCES `penduduk` (`nik`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `surat_keterangan_berkelakuan_baik`
--
ALTER TABLE `surat_keterangan_berkelakuan_baik`
  ADD CONSTRAINT `fi_id_profil_desa_skbb` FOREIGN KEY (`id_profil_desa`) REFERENCES `profil_desa` (`id_profil_desa`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_id_pejabat_desa_skbb` FOREIGN KEY (`id_pejabat_desa`) REFERENCES `pejabat_desa` (`id_pejabat_desa`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_nik_skbb` FOREIGN KEY (`nik`) REFERENCES `penduduk` (`nik`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `surat_keterangan_domisili`
--
ALTER TABLE `surat_keterangan_domisili`
  ADD CONSTRAINT `fi_id_profil_desa_skd` FOREIGN KEY (`id_profil_desa`) REFERENCES `profil_desa` (`id_profil_desa`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_id_pejabat_desa_skd` FOREIGN KEY (`id_pejabat_desa`) REFERENCES `pejabat_desa` (`id_pejabat_desa`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_nik_skd` FOREIGN KEY (`nik`) REFERENCES `penduduk` (`nik`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `surat_keterangan_usaha`
--
ALTER TABLE `surat_keterangan_usaha`
  ADD CONSTRAINT `fi_id_profil_desa_sku` FOREIGN KEY (`id_profil_desa`) REFERENCES `profil_desa` (`id_profil_desa`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_id_pejabat_desa_sku` FOREIGN KEY (`id_pejabat_desa`) REFERENCES `pejabat_desa` (`id_pejabat_desa`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_nik_sku` FOREIGN KEY (`nik`) REFERENCES `penduduk` (`nik`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
