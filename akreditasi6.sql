-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 19, 2017 at 04:12 AM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 7.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `akreditasi`
--

-- --------------------------------------------------------

--
-- Table structure for table `borang`
--

CREATE TABLE `borang` (
  `id` varchar(10) NOT NULL,
  `isi` text,
  `tahun` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `dosen`
--

CREATE TABLE `dosen` (
  `id_dosen` int(11) NOT NULL,
  `id_pegawai` bigint(20) NOT NULL,
  `id_kinerja_dosen` int(11) DEFAULT NULL,
  `id_remunerasi_dosen` int(11) DEFAULT NULL,
  `flag_aktif` tinyint(1) NOT NULL,
  `kode_prodi_pengajaran` varchar(30) NOT NULL,
  `isDosenTetap` tinyint(1) NOT NULL,
  `bidang_keahlian` varchar(20) DEFAULT NULL,
  `flag_kesesuaian` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `dosen`
--

INSERT INTO `dosen` (`id_dosen`, `id_pegawai`, `id_kinerja_dosen`, `id_remunerasi_dosen`, `flag_aktif`, `kode_prodi_pengajaran`, `isDosenTetap`, `bidang_keahlian`, `flag_kesesuaian`) VALUES
(1, 2, NULL, NULL, 1, '1', 1, 'Sistem Informasi', 1),
(2, 3, NULL, NULL, 1, '2', 1, 'Ilmu Komputer', 1),
(3, 4, NULL, NULL, 1, '2', 0, NULL, NULL),
(4, 6, NULL, NULL, 1, '3', 1, NULL, NULL),
(5, 7, NULL, NULL, 1, '4', 0, NULL, NULL),
(6, 8, NULL, NULL, 1, '4', 1, NULL, NULL),
(7, 9, NULL, NULL, 1, '3', 0, NULL, NULL),
(8, 10, NULL, NULL, 1, '1', 1, NULL, NULL),
(9, 11, NULL, NULL, 1, '2', 1, NULL, NULL),
(10, 12, NULL, NULL, 1, '4', 0, NULL, NULL),
(11, 13, NULL, NULL, 1, '4', 0, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `dosen_mata_kuliah`
--

CREATE TABLE `dosen_mata_kuliah` (
  `id_dosen` int(11) NOT NULL,
  `kode_mata_kuliah` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `evaluasi_dana_akhir`
--

CREATE TABLE `evaluasi_dana_akhir` (
  `id` int(11) NOT NULL,
  `id_proyek` int(11) NOT NULL,
  `id_proposal` int(11) NOT NULL,
  `dana_pribadi` bigint(20) NOT NULL,
  `dana_pt` bigint(20) NOT NULL,
  `dana_dikti` bigint(20) NOT NULL,
  `dana_institusi_dalam_negeri` bigint(20) NOT NULL,
  `dana_institusi_luar_negeri` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `fakultas`
--

CREATE TABLE `fakultas` (
  `kode_fakultas` varchar(50) NOT NULL,
  `nama_fakultas` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `fakultas`
--

INSERT INTO `fakultas` (`kode_fakultas`, `nama_fakultas`) VALUES
('1', 'Fakultas Ilmu Komputer'),
('10', 'Fakultas Kedokteran'),
('2', 'Fakultas Hukum'),
('3', 'Fakultas Psikologi'),
('4', 'Fakultas Ilmu Keperawatan'),
('5', 'Fakultas Kesehatan Masyarakat'),
('6', 'Fakultas Farmasi'),
('7', 'Fakultas ekonomi'),
('8', 'Fakultas Ilmu Budaya'),
('9', 'Fakultas Teknik');

-- --------------------------------------------------------

--
-- Table structure for table `histori_akreditasi`
--

CREATE TABLE `histori_akreditasi` (
  `id` int(11) NOT NULL,
  `nilai` int(11) NOT NULL,
  `keterangan` varchar(50) NOT NULL,
  `peringkat_akreditasi` varchar(20) NOT NULL,
  `tahun_keluar` varchar(50) NOT NULL,
  `masa_berlaku` varchar(20) NOT NULL,
  `kode_prodi` varchar(30) NOT NULL,
  `id_borang` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `jenis_luaran`
--

CREATE TABLE `jenis_luaran` (
  `id` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `sks` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `jenis_tendik`
--

CREATE TABLE `jenis_tendik` (
  `id_jenis_tendik` int(11) NOT NULL,
  `nama_jenis_tendik` varchar(20) NOT NULL,
  `unit_kerja` varchar(10) NOT NULL,
  `flag_aktif` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `kegiatan_dosen`
--

CREATE TABLE `kegiatan_dosen` (
  `id` int(11) NOT NULL,
  `id_dosen` int(11) NOT NULL,
  `nama_kegiatan` varchar(100) NOT NULL,
  `jenis` varchar(20) NOT NULL,
  `tempat` varchar(20) NOT NULL,
  `waktu` date NOT NULL,
  `peran` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `kelas`
--

CREATE TABLE `kelas` (
  `kode_mata_kuliah` varchar(30) NOT NULL,
  `kode_kelas` varchar(30) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `kapasitas` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `kelola_akreditasi`
--

CREATE TABLE `kelola_akreditasi` (
  `id_pegawai` bigint(20) NOT NULL,
  `id_histori` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `kerja_sama`
--

CREATE TABLE `kerja_sama` (
  `id` int(11) NOT NULL,
  `kode_prodi` varchar(30) NOT NULL,
  `nama_instansi` varchar(50) NOT NULL,
  `jenis_kegiatan` varchar(50) NOT NULL,
  `tgl_mulai` date NOT NULL,
  `tgl_akhir` date NOT NULL,
  `manfaat` varchar(100) NOT NULL,
  `isDalamNegeri` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `manajemen_dosen`
--

CREATE TABLE `manajemen_dosen` (
  `id` int(11) NOT NULL,
  `id_dosen` int(11) NOT NULL,
  `sks` int(11) NOT NULL,
  `isPTSendiri` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `mata_kuliah`
--

CREATE TABLE `mata_kuliah` (
  `kode_mata_kuliah` varchar(30) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `sesi` int(11) NOT NULL,
  `kelompok_mata_kuliah` varchar(30) DEFAULT NULL,
  `prasyarat` text,
  `kode_kurikulum` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `organisasi_dosen`
--

CREATE TABLE `organisasi_dosen` (
  `id` int(11) NOT NULL,
  `id_dosen` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `kurun_waktu` varchar(10) NOT NULL,
  `tingkat` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `pegawai`
--

CREATE TABLE `pegawai` (
  `id_pegawai` bigint(20) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `no_pegawai` varchar(20) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `no_handphone` varchar(13) DEFAULT NULL,
  `jenis_kelamin` int(11) DEFAULT NULL,
  `tempat_lahir` varchar(20) DEFAULT NULL,
  `jenis_identitas` varchar(20) DEFAULT NULL,
  `no_identitas` varchar(16) NOT NULL,
  `tanggal_lahir` date DEFAULT NULL,
  `alamat_ktp` text,
  `alamat_saat_ini` text,
  `id_agama` int(11) DEFAULT NULL,
  `id_status` int(11) DEFAULT NULL,
  `id_pangkat` int(11) DEFAULT NULL,
  `isDosen` tinyint(1) NOT NULL,
  `id_status_perikahan` int(11) DEFAULT NULL,
  `id_jabatan_struktural` int(11) DEFAULT NULL,
  `id_riwayat_pendidikan` int(11) DEFAULT NULL,
  `npwp` varchar(25) DEFAULT NULL,
  `id_bank` int(11) DEFAULT NULL,
  `no_rekening` varchar(36) DEFAULT NULL,
  `nama_rekening` int(11) DEFAULT NULL,
  `thn_masuk` date DEFAULT NULL,
  `angka_kredit` int(11) DEFAULT NULL,
  `id_role_pegawai` int(11) DEFAULT NULL,
  `isPimpinan` tinyint(1) NOT NULL,
  `id_pimpinan` int(11) DEFAULT NULL,
  `isTimAkreditasi` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  `isAdmin` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pegawai`
--

INSERT INTO `pegawai` (`id_pegawai`, `username`, `password`, `no_pegawai`, `nama`, `no_handphone`, `jenis_kelamin`, `tempat_lahir`, `jenis_identitas`, `no_identitas`, `tanggal_lahir`, `alamat_ktp`, `alamat_saat_ini`, `id_agama`, `id_status`, `id_pangkat`, `isDosen`, `id_status_perikahan`, `id_jabatan_struktural`, `id_riwayat_pendidikan`, `npwp`, `id_bank`, `no_rekening`, `nama_rekening`, `thn_masuk`, `angka_kredit`, `id_role_pegawai`, `isPimpinan`, `id_pimpinan`, `isTimAkreditasi`, `created_at`, `updated_at`, `isAdmin`) VALUES
(1, 'aminur.muda', '123', '1406580511', 'Aminur Muda', NULL, NULL, NULL, NULL, 'B98394A739', NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, 1, 0, '2017-03-15 10:06:03', '2017-03-15 11:30:35', 0),
(2, 'ayesha.maharani', '234', '1406557554', 'Ayesha Maharani', NULL, NULL, NULL, NULL, 'K8937F38', NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, 1, '2017-03-15 10:06:03', '2017-03-19 02:56:48', 0),
(3, 'gemma.adhatien', '456', '1406574895', 'Gemma Adhatien', NULL, NULL, NULL, NULL, 'H637808348', NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, 1, '2017-03-15 10:06:03', NULL, 0),
(4, 'muchamad.lutfi', '567', '1406623152', 'Lutfi Maulana', NULL, NULL, NULL, NULL, 'F87648E2873', NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, 1, '2017-03-15 10:06:03', NULL, 1),
(5, 'ristya.nintyana', '789', '1406574623', 'Ristya Nintyana', NULL, NULL, NULL, NULL, 'F398E2897', NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, 2, 0, '2017-03-15 10:06:03', NULL, 0),
(6, 'ridha.aulia', '8479', '1406534739', 'Ridha Aulia', NULL, NULL, NULL, NULL, 'F873983', NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, 0, '2017-03-15 10:06:03', NULL, 0),
(7, 'intania.nuranifah', '0324934', '140673834', 'Intania Nuranifah', NULL, NULL, NULL, NULL, 'GKJS63472', NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, 0, '2017-03-15 10:06:03', NULL, 0),
(8, 'mutia.khairunnisa', '3987934', '140675349', 'Mutia Khairunnisa', NULL, NULL, NULL, NULL, 'F873983u39', NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, 0, '2017-03-15 10:06:03', NULL, 0),
(9, 'sumayyah', '347347', '140657832', 'Sumayyah', NULL, NULL, NULL, NULL, 'H8093js2309', NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, 0, '2017-03-15 10:06:03', NULL, 0),
(10, 'ivana.putri', '32984', '140657392', 'Ivana Putri', NULL, NULL, NULL, NULL, 'J49834F292', NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, 0, '2017-03-15 10:06:03', NULL, 0),
(11, 'joshua.casey', '3493', '1405573728', 'Joshua Casey', NULL, NULL, NULL, NULL, 'L294D292', NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, 0, '2017-03-15 10:06:03', NULL, 0),
(12, 'kholid.abdurrahman', '897348', 'H30934A92', 'Kholid Abdurrahman', NULL, NULL, NULL, NULL, 'L90843G23', NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, 0, '2017-03-15 10:06:03', NULL, 0),
(13, 'ratih.ajeng', '98373', '1406749834', 'Ratih Ajeng', NULL, NULL, NULL, NULL, 'D40893A09834', NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, 0, '2017-03-15 10:06:03', NULL, 0);

-- --------------------------------------------------------

--
-- Table structure for table `pimpinan`
--

CREATE TABLE `pimpinan` (
  `id_pimpinan` int(11) NOT NULL,
  `isBPMA` int(11) NOT NULL,
  `isPimpinanFakultas` int(11) NOT NULL,
  `id_fakultas` varchar(50) NOT NULL,
  `isPimpinanUniv` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pimpinan`
--

INSERT INTO `pimpinan` (`id_pimpinan`, `isBPMA`, `isPimpinanFakultas`, `id_fakultas`, `isPimpinanUniv`) VALUES
(1, 1, 0, '1', 0),
(2, 0, 1, '2', 0);

-- --------------------------------------------------------

--
-- Table structure for table `prestasi_dosen`
--

CREATE TABLE `prestasi_dosen` (
  `id` int(11) NOT NULL,
  `id_dosen` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `waktu` int(11) NOT NULL,
  `tingkat` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `program_studi`
--

CREATE TABLE `program_studi` (
  `kode_prodi` varchar(30) NOT NULL,
  `nama_prodi` varchar(100) NOT NULL,
  `kode_fakultas` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `program_studi`
--

INSERT INTO `program_studi` (`kode_prodi`, `nama_prodi`, `kode_fakultas`) VALUES
('1', 'Sistem Informasi', '1'),
('2', 'Ilmu Komputer', '1'),
('3', 'Sastra Jawa', '8'),
('4', 'Sastra Inggris', '8');

-- --------------------------------------------------------

--
-- Table structure for table `proyek`
--

CREATE TABLE `proyek` (
  `id` int(11) NOT NULL,
  `status` varchar(10) DEFAULT NULL,
  `id_pengaju` int(11) DEFAULT NULL,
  `id_jenis_proyek` int(11) DEFAULT NULL,
  `id_dosen` int(11) NOT NULL,
  `lokasi` varchar(140) DEFAULT NULL,
  `tanggal_mulai` int(11) NOT NULL,
  `tanggal_selesai` int(11) NOT NULL,
  `dana_internal` int(11) DEFAULT NULL,
  `dana_eksternal` int(11) DEFAULT NULL,
  `mitra` varchar(54) DEFAULT NULL,
  `rumpun_ilmu` varchar(24) DEFAULT NULL,
  `nama` varchar(54) NOT NULL,
  `id_jenis_luaran` int(11) NOT NULL,
  `tingkat` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `rincian_kinerja_pengajaran`
--

CREATE TABLE `rincian_kinerja_pengajaran` (
  `id_rincian_kinerja_pengajaran` int(11) NOT NULL,
  `kode_mata_kuliah` varchar(30) NOT NULL,
  `sks_matkul` int(11) NOT NULL,
  `term` varchar(10) NOT NULL,
  `periode_pendidikan` varchar(20) NOT NULL,
  `flag_aktif` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `riwayat_pendidikan`
--

CREATE TABLE `riwayat_pendidikan` (
  `id_riwayat_pendidikan` int(11) NOT NULL,
  `id_dosen` int(11) NOT NULL,
  `riwayat_pendidikan` varchar(50) NOT NULL,
  `instansi_pendidikan` varchar(40) NOT NULL,
  `gelar_pendidikan` varchar(10) NOT NULL,
  `flag_aktif` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `sesi`
--

CREATE TABLE `sesi` (
  `id_kelas_mk` varchar(20) NOT NULL,
  `id_mk` varchar(30) NOT NULL,
  `tahun` char(9) NOT NULL,
  `semester` varchar(10) NOT NULL,
  `tanggal` date NOT NULL,
  `status_pengganti` tinyint(1) DEFAULT NULL,
  `deskripsi` text,
  `absen_dosen` varchar(10) NOT NULL,
  `ruangan` varchar(10) NOT NULL,
  `komentar` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `standar`
--

CREATE TABLE `standar` (
  `id_borang` varchar(10) NOT NULL,
  `nomor_standar` varchar(10) NOT NULL,
  `deskripsi` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tendik`
--

CREATE TABLE `tendik` (
  `id_tendik` int(11) NOT NULL,
  `id_kinerja_tendik` int(11) DEFAULT NULL,
  `id_remunerasi_tendik` int(11) DEFAULT NULL,
  `flag_aktif` tinyint(1) NOT NULL,
  `id_jenis_tendik` int(11) NOT NULL,
  `id_role` int(11) DEFAULT NULL,
  `id_pegawai` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `borang`
--
ALTER TABLE `borang`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `dosen`
--
ALTER TABLE `dosen`
  ADD PRIMARY KEY (`id_dosen`),
  ADD KEY `id_pegawai` (`id_pegawai`),
  ADD KEY `kode_prodi_pengajaran` (`kode_prodi_pengajaran`);

--
-- Indexes for table `dosen_mata_kuliah`
--
ALTER TABLE `dosen_mata_kuliah`
  ADD PRIMARY KEY (`id_dosen`,`kode_mata_kuliah`),
  ADD KEY `kode_mata_kuliah` (`kode_mata_kuliah`);

--
-- Indexes for table `evaluasi_dana_akhir`
--
ALTER TABLE `evaluasi_dana_akhir`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_proyek` (`id_proyek`);

--
-- Indexes for table `fakultas`
--
ALTER TABLE `fakultas`
  ADD PRIMARY KEY (`kode_fakultas`);

--
-- Indexes for table `histori_akreditasi`
--
ALTER TABLE `histori_akreditasi`
  ADD PRIMARY KEY (`id`),
  ADD KEY `kode_prodi` (`kode_prodi`),
  ADD KEY `id_borang` (`id_borang`);

--
-- Indexes for table `jenis_luaran`
--
ALTER TABLE `jenis_luaran`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `jenis_tendik`
--
ALTER TABLE `jenis_tendik`
  ADD PRIMARY KEY (`id_jenis_tendik`);

--
-- Indexes for table `kegiatan_dosen`
--
ALTER TABLE `kegiatan_dosen`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_dosen` (`id_dosen`);

--
-- Indexes for table `kelas`
--
ALTER TABLE `kelas`
  ADD PRIMARY KEY (`kode_kelas`),
  ADD KEY `kode_mata_kuliah` (`kode_mata_kuliah`);

--
-- Indexes for table `kelola_akreditasi`
--
ALTER TABLE `kelola_akreditasi`
  ADD PRIMARY KEY (`id_pegawai`,`id_histori`),
  ADD KEY `id_histori` (`id_histori`);

--
-- Indexes for table `kerja_sama`
--
ALTER TABLE `kerja_sama`
  ADD PRIMARY KEY (`id`),
  ADD KEY `kode_prodi` (`kode_prodi`);

--
-- Indexes for table `manajemen_dosen`
--
ALTER TABLE `manajemen_dosen`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_dosen` (`id_dosen`);

--
-- Indexes for table `mata_kuliah`
--
ALTER TABLE `mata_kuliah`
  ADD PRIMARY KEY (`kode_mata_kuliah`);

--
-- Indexes for table `organisasi_dosen`
--
ALTER TABLE `organisasi_dosen`
  ADD KEY `id_dosen` (`id_dosen`);

--
-- Indexes for table `pegawai`
--
ALTER TABLE `pegawai`
  ADD PRIMARY KEY (`id_pegawai`),
  ADD KEY `id_riwayat_pendidikan` (`id_riwayat_pendidikan`),
  ADD KEY `id_pimpinan` (`id_pimpinan`);

--
-- Indexes for table `pimpinan`
--
ALTER TABLE `pimpinan`
  ADD PRIMARY KEY (`id_pimpinan`),
  ADD KEY `id_fakultas` (`id_fakultas`);

--
-- Indexes for table `prestasi_dosen`
--
ALTER TABLE `prestasi_dosen`
  ADD PRIMARY KEY (`id`),
  ADD KEY `prestasi_dosen_ibfk_1` (`id_dosen`);

--
-- Indexes for table `program_studi`
--
ALTER TABLE `program_studi`
  ADD PRIMARY KEY (`kode_prodi`),
  ADD KEY `kode_fakultas` (`kode_fakultas`);

--
-- Indexes for table `proyek`
--
ALTER TABLE `proyek`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_dosen` (`id_dosen`),
  ADD KEY `id_jenis_luaran` (`id_jenis_luaran`);

--
-- Indexes for table `rincian_kinerja_pengajaran`
--
ALTER TABLE `rincian_kinerja_pengajaran`
  ADD PRIMARY KEY (`id_rincian_kinerja_pengajaran`),
  ADD KEY `kode_mata_kuliah` (`kode_mata_kuliah`);

--
-- Indexes for table `riwayat_pendidikan`
--
ALTER TABLE `riwayat_pendidikan`
  ADD PRIMARY KEY (`id_riwayat_pendidikan`),
  ADD KEY `id_dosen` (`id_dosen`);

--
-- Indexes for table `sesi`
--
ALTER TABLE `sesi`
  ADD PRIMARY KEY (`id_kelas_mk`,`id_mk`,`tahun`,`semester`,`tanggal`),
  ADD KEY `id_mk` (`id_mk`);

--
-- Indexes for table `standar`
--
ALTER TABLE `standar`
  ADD PRIMARY KEY (`nomor_standar`),
  ADD KEY `id_borang` (`id_borang`);

--
-- Indexes for table `tendik`
--
ALTER TABLE `tendik`
  ADD KEY `id_jenis_tendik` (`id_jenis_tendik`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `dosen`
--
ALTER TABLE `dosen`
  MODIFY `id_dosen` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `evaluasi_dana_akhir`
--
ALTER TABLE `evaluasi_dana_akhir`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `histori_akreditasi`
--
ALTER TABLE `histori_akreditasi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `jenis_luaran`
--
ALTER TABLE `jenis_luaran`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `jenis_tendik`
--
ALTER TABLE `jenis_tendik`
  MODIFY `id_jenis_tendik` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `kegiatan_dosen`
--
ALTER TABLE `kegiatan_dosen`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `kerja_sama`
--
ALTER TABLE `kerja_sama`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `manajemen_dosen`
--
ALTER TABLE `manajemen_dosen`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `pegawai`
--
ALTER TABLE `pegawai`
  MODIFY `id_pegawai` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT for table `pimpinan`
--
ALTER TABLE `pimpinan`
  MODIFY `id_pimpinan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `prestasi_dosen`
--
ALTER TABLE `prestasi_dosen`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `proyek`
--
ALTER TABLE `proyek`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `rincian_kinerja_pengajaran`
--
ALTER TABLE `rincian_kinerja_pengajaran`
  MODIFY `id_rincian_kinerja_pengajaran` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `riwayat_pendidikan`
--
ALTER TABLE `riwayat_pendidikan`
  MODIFY `id_riwayat_pendidikan` int(11) NOT NULL AUTO_INCREMENT;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `dosen`
--
ALTER TABLE `dosen`
  ADD CONSTRAINT `dosen_ibfk_1` FOREIGN KEY (`id_pegawai`) REFERENCES `pegawai` (`id_pegawai`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `dosen_ibfk_2` FOREIGN KEY (`kode_prodi_pengajaran`) REFERENCES `program_studi` (`kode_prodi`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `dosen_mata_kuliah`
--
ALTER TABLE `dosen_mata_kuliah`
  ADD CONSTRAINT `dosen_mata_kuliah_ibfk_1` FOREIGN KEY (`id_dosen`) REFERENCES `dosen` (`id_dosen`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `dosen_mata_kuliah_ibfk_2` FOREIGN KEY (`kode_mata_kuliah`) REFERENCES `mata_kuliah` (`kode_mata_kuliah`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `evaluasi_dana_akhir`
--
ALTER TABLE `evaluasi_dana_akhir`
  ADD CONSTRAINT `evaluasi_dana_akhir_ibfk_1` FOREIGN KEY (`id_proyek`) REFERENCES `proyek` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `histori_akreditasi`
--
ALTER TABLE `histori_akreditasi`
  ADD CONSTRAINT `histori_akreditasi_ibfk_1` FOREIGN KEY (`kode_prodi`) REFERENCES `program_studi` (`kode_prodi`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `histori_akreditasi_ibfk_2` FOREIGN KEY (`id_borang`) REFERENCES `borang` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `kegiatan_dosen`
--
ALTER TABLE `kegiatan_dosen`
  ADD CONSTRAINT `kegiatan_dosen_ibfk_1` FOREIGN KEY (`id_dosen`) REFERENCES `dosen` (`id_dosen`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `kelas`
--
ALTER TABLE `kelas`
  ADD CONSTRAINT `kelas_ibfk_1` FOREIGN KEY (`kode_mata_kuliah`) REFERENCES `mata_kuliah` (`kode_mata_kuliah`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `kelola_akreditasi`
--
ALTER TABLE `kelola_akreditasi`
  ADD CONSTRAINT `kelola_akreditasi_ibfk_1` FOREIGN KEY (`id_pegawai`) REFERENCES `pegawai` (`id_pegawai`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `kelola_akreditasi_ibfk_2` FOREIGN KEY (`id_histori`) REFERENCES `histori_akreditasi` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `kerja_sama`
--
ALTER TABLE `kerja_sama`
  ADD CONSTRAINT `kerja_sama_ibfk_1` FOREIGN KEY (`kode_prodi`) REFERENCES `program_studi` (`kode_prodi`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `manajemen_dosen`
--
ALTER TABLE `manajemen_dosen`
  ADD CONSTRAINT `manajemen_dosen_ibfk_1` FOREIGN KEY (`id_dosen`) REFERENCES `dosen` (`id_dosen`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `organisasi_dosen`
--
ALTER TABLE `organisasi_dosen`
  ADD CONSTRAINT `organisasi_dosen_ibfk_1` FOREIGN KEY (`id_dosen`) REFERENCES `dosen` (`id_dosen`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `pegawai`
--
ALTER TABLE `pegawai`
  ADD CONSTRAINT `pegawai_ibfk_1` FOREIGN KEY (`id_riwayat_pendidikan`) REFERENCES `riwayat_pendidikan` (`id_riwayat_pendidikan`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `pegawai_ibfk_2` FOREIGN KEY (`id_pimpinan`) REFERENCES `pimpinan` (`id_pimpinan`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `pimpinan`
--
ALTER TABLE `pimpinan`
  ADD CONSTRAINT `pimpinan_ibfk_1` FOREIGN KEY (`id_fakultas`) REFERENCES `fakultas` (`kode_fakultas`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `prestasi_dosen`
--
ALTER TABLE `prestasi_dosen`
  ADD CONSTRAINT `prestasi_dosen_ibfk_1` FOREIGN KEY (`id_dosen`) REFERENCES `dosen` (`id_dosen`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `program_studi`
--
ALTER TABLE `program_studi`
  ADD CONSTRAINT `program_studi_ibfk_1` FOREIGN KEY (`kode_fakultas`) REFERENCES `fakultas` (`kode_fakultas`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `proyek`
--
ALTER TABLE `proyek`
  ADD CONSTRAINT `proyek_ibfk_1` FOREIGN KEY (`id_dosen`) REFERENCES `dosen` (`id_dosen`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `proyek_ibfk_2` FOREIGN KEY (`id_jenis_luaran`) REFERENCES `jenis_luaran` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `rincian_kinerja_pengajaran`
--
ALTER TABLE `rincian_kinerja_pengajaran`
  ADD CONSTRAINT `rincian_kinerja_pengajaran_ibfk_1` FOREIGN KEY (`kode_mata_kuliah`) REFERENCES `mata_kuliah` (`kode_mata_kuliah`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `riwayat_pendidikan`
--
ALTER TABLE `riwayat_pendidikan`
  ADD CONSTRAINT `riwayat_pendidikan_ibfk_1` FOREIGN KEY (`id_dosen`) REFERENCES `dosen` (`id_dosen`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `sesi`
--
ALTER TABLE `sesi`
  ADD CONSTRAINT `sesi_ibfk_1` FOREIGN KEY (`id_kelas_mk`) REFERENCES `kelas` (`kode_kelas`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `sesi_ibfk_2` FOREIGN KEY (`id_mk`) REFERENCES `mata_kuliah` (`kode_mata_kuliah`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `standar`
--
ALTER TABLE `standar`
  ADD CONSTRAINT `standar_ibfk_1` FOREIGN KEY (`id_borang`) REFERENCES `borang` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tendik`
--
ALTER TABLE `tendik`
  ADD CONSTRAINT `tendik_ibfk_1` FOREIGN KEY (`id_jenis_tendik`) REFERENCES `jenis_tendik` (`id_jenis_tendik`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
