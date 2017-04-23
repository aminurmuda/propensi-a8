-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 22, 2017 at 07:31 AM
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
  `jenis` varchar(20) NOT NULL COMMENT '"3A", "3B" or "Evaluasi diri"',
  `isi` text,
  `tahun` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `dosen`
--

CREATE TABLE `dosen` (
  `id_dosen` int(11) NOT NULL,
  `NIDN` varchar(20) NOT NULL,
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

INSERT INTO `dosen` (`id_dosen`, `NIDN`, `id_pegawai`, `id_kinerja_dosen`, `id_remunerasi_dosen`, `flag_aktif`, `kode_prodi_pengajaran`, `isDosenTetap`, `bidang_keahlian`, `flag_kesesuaian`) VALUES
(1, 'A92392348', 2, NULL, NULL, 1, '1', 1, 'Sistem Informasi', 1),
(2, 'B238979', 3, NULL, NULL, 1, '2', 1, 'Ilmu Komputer', 1),
(3, 'F324A349', 4, NULL, NULL, 1, '2', 0, NULL, NULL),
(4, 'A92392349', 6, NULL, NULL, 1, '1', 1, 'Manajemen', 0),
(5, 'B238980', 7, NULL, NULL, 1, '1', 0, NULL, NULL),
(6, 'F324A350', 8, NULL, NULL, 1, '1', 1, 'Sastra Inggris', 0),
(7, 'A92392350', 9, NULL, NULL, 1, '2', 0, NULL, NULL),
(8, 'B238981', 10, NULL, NULL, 1, '1', 1, NULL, NULL),
(9, 'F324A351', 11, NULL, NULL, 1, '2', 1, NULL, NULL),
(10, 'A92392351', 12, NULL, NULL, 1, '1', 0, NULL, NULL),
(11, 'A92392349', 13, NULL, NULL, 1, '1', 0, NULL, NULL),
(12, 'B238980', 1, NULL, NULL, 1, '1', 1, 'Sistem Informasi', 1),
(13, 'F324A350', 5, NULL, NULL, 1, '2', 1, 'Sistem Informasi', 1),
(14, 'A92392350', 59, NULL, NULL, 1, '1', 1, 'Sistem Informasi', 1),
(15, 'B238981', 60, NULL, NULL, 1, '2', 1, 'Sistem Informasi', 0),
(16, 'F324A351', 61, NULL, NULL, 1, '1', 1, 'Ilmu Komputer', 0),
(17, 'A92392351', 62, NULL, NULL, 1, '1', 1, 'Sistem Informasi', 1),
(18, 'B238982', 63, NULL, NULL, 1, '2', 1, 'Sistem Informasi', 0),
(19, 'F324A352', 64, NULL, NULL, 1, '1', 1, 'Ilmu Komputer', 0),
(20, 'A92392352', 65, NULL, NULL, 1, '2', 1, 'Sistem Informasi', 0),
(21, 'A92392350', 66, NULL, NULL, 1, '1', 1, 'Ilmu Komputer', 0),
(22, 'B238981', 67, NULL, NULL, 1, '2', 1, 'Sistem Informasi', 0),
(23, 'F324A351', 68, NULL, NULL, 1, '1', 1, 'Ilmu Komputer', 0),
(24, 'A92392351', 69, NULL, NULL, 1, '2', 0, 'Sistem Informasi', 0),
(25, 'B238982', 70, NULL, NULL, 1, '1', 0, 'Ilmu Komputer', 0),
(26, 'F324A352', 71, NULL, NULL, 1, '2', 0, 'Ilmu Komputer', 1),
(27, 'A92392352', 72, NULL, NULL, 1, '1', 0, 'Sistem Informasi', 1),
(28, 'B238983', 73, NULL, NULL, 1, '2', 1, 'Ilmu Komputer', 1),
(29, 'F324A353', 74, NULL, NULL, 1, '1', 1, 'Sistem Informasi', 1),
(30, 'A92392353', 75, NULL, NULL, 1, '1', 1, 'Ilmu Komputer', 1),
(31, 'A92392351', 76, NULL, NULL, 1, '2', 1, 'Sistem Informasi', 0),
(32, 'B238982', 77, NULL, NULL, 1, '1', 1, 'Sistem Informasi', 1),
(33, 'F324A352', 78, NULL, NULL, 1, '2', 1, 'Sistem Informasi', 0),
(34, 'A92392352', 79, NULL, NULL, 1, '2', 1, 'Sistem Informasi', 0),
(35, 'B238983', 80, NULL, NULL, 1, '2', 1, 'Ilmu Komputer', 1),
(36, 'F324A353', 81, NULL, NULL, 1, '2', 1, 'Sistem Informasi', 0),
(37, 'A92392353', 82, NULL, NULL, 1, '2', 1, 'Ilmu Komputer', 0),
(38, 'B238984', 83, NULL, NULL, 1, '1', 1, 'Sistem Informasi', 1),
(39, 'F324A354', 84, NULL, NULL, 1, '1', 1, 'Ilmu Komputer', 0),
(40, 'A92392354', 85, NULL, NULL, 1, '1', 1, 'Sistem Informasi', 1),
(41, 'A92392352', 86, NULL, NULL, 1, '1', 1, 'Ilmu Komputer', 0),
(42, 'B238983', 87, NULL, NULL, 1, '1', 1, 'Ilmu Komputer', 0),
(43, 'F324A353', 88, NULL, NULL, 1, '1', 1, 'Sistem Informasi', 1),
(44, 'A92392353', 89, NULL, NULL, 1, '2', 1, 'Ilmu Komputer', 1),
(45, 'B238984', 90, NULL, NULL, 1, '1', 1, 'Sistem Informasi', 1),
(46, 'F324A354', 91, NULL, NULL, 1, '2', 1, 'Sistem Informasi', 0),
(47, 'A92392354', 92, NULL, NULL, 1, '1', 1, 'Ilmu Komputer', 0);

-- --------------------------------------------------------

--
-- Table structure for table `dosen_mata_kuliah`
--

CREATE TABLE `dosen_mata_kuliah` (
  `id_dosen` int(11) NOT NULL,
  `kode_mata_kuliah` varchar(30) NOT NULL,
  `rencana_pengajaran` int(11) NOT NULL,
  `realisasi_pengajaran` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `dosen_mata_kuliah`
--

INSERT INTO `dosen_mata_kuliah` (`id_dosen`, `kode_mata_kuliah`, `rencana_pengajaran`, `realisasi_pengajaran`) VALUES
(1, 'IKI10100', 13, 15),
(2, 'IKI10200', 14, 16),
(12, 'IKS12800', 16, 18),
(13, 'IKS12600', 19, 14),
(14, 'IKS21501', 20, 18),
(15, 'IKS21601', 12, 15),
(16, 'IKO21502', 11, 14),
(17, 'IKS22602', 16, 15),
(18, 'IKS32206', 21, 21),
(19, 'IKO12500', 22, 22),
(20, 'IKS31603', 23, 23),
(21, 'IKO21105', 18, 17),
(22, 'IKS31604', 19, 18),
(23, 'IKO22401', 19, 18),
(24, 'IKS31605', 20, 19),
(25, 'IKO31503', 21, 21),
(26, 'IKO32104', 21, 20),
(27, 'IKS31504', 21, 21),
(28, 'IKO32402', 22, 22),
(29, 'IKS32606', 22, 22),
(30, 'IKO32205', 20, 20);

-- --------------------------------------------------------

--
-- Table structure for table `evaluasi_dana_akhir`
--

CREATE TABLE `evaluasi_dana_akhir` (
  `id` int(11) NOT NULL,
  `id_proyek` int(11) NOT NULL,
  `id_proposal` int(11) DEFAULT NULL,
  `dana_depdiknas_dalam_negeri` bigint(20) NOT NULL,
  `dana_pt` bigint(20) NOT NULL,
  `dana_pribadi` bigint(20) NOT NULL,
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
-- Table structure for table `jabatan_struktural`
--

CREATE TABLE `jabatan_struktural` (
  `id` int(11) NOT NULL,
  `nama` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jabatan_struktural`
--

INSERT INTO `jabatan_struktural` (`id`, `nama`) VALUES
(1, 'Lektor'),
(2, 'Tenaga Pengajar'),
(3, 'Asisten Ahli'),
(4, 'Tenaga Kependidikan');

-- --------------------------------------------------------

--
-- Table structure for table `jenis_luaran`
--

CREATE TABLE `jenis_luaran` (
  `id` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `sks` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jenis_luaran`
--

INSERT INTO `jenis_luaran` (`id`, `nama`, `sks`) VALUES
(1, 'Publikasi Ilmiah', 1),
(2, 'Pemakalah dalam temu ilmiah', 1),
(3, 'Invited speaker', 1),
(4, 'Visiting Lecturer', 1),
(5, 'Hak Kekayaan Intelektual', 1),
(6, 'Teknologi tepat guna', 1),
(7, 'Model/Purwarupa', 1),
(8, 'Buku Ajar(ISBN)', 1);

-- --------------------------------------------------------

--
-- Table structure for table `jenis_tendik`
--

CREATE TABLE `jenis_tendik` (
  `id_jenis_tendik` int(11) NOT NULL,
  `nama_jenis_tendik` varchar(20) NOT NULL,
  `unit_kerja` varchar(30) NOT NULL,
  `flag_aktif` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jenis_tendik`
--

INSERT INTO `jenis_tendik` (`id_jenis_tendik`, `nama_jenis_tendik`, `unit_kerja`, `flag_aktif`) VALUES
(1, 'Pustakawan', 'Perpustakaan', 1),
(2, 'Laboran', 'Fakultas & Program Studi', 1),
(3, 'Teknisi', 'Fakultas & Program Studi', 1),
(4, 'Analis', 'Fakultas & Program Studi', 1),
(5, 'Operator', 'Fakultas & Program Studi', 1),
(6, 'Programmer', 'Fakultas & Program Studi', 1),
(7, 'Administrasi', 'Fakultas & Program Studi', 1);

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

--
-- Dumping data for table `kegiatan_dosen`
--

INSERT INTO `kegiatan_dosen` (`id`, `id_dosen`, `nama_kegiatan`, `jenis`, `tempat`, `waktu`, `peran`) VALUES
(1, 30, 'Pekerti', 'Lokakarya', 'Depok', '2011-09-01', 'Penyaji'),
(2, 31, 'Tentang Lomba Gemastik 9', 'Seminar', 'Depok', '2014-09-01', 'Peserta'),
(3, 32, 'Design Sprint', 'Workshop', 'Jakarta', '2015-09-01', 'Peserta'),
(4, 33, 'Kepemimpinan', 'Pelatihan', 'Singapore', '2015-04-06', 'Penyaji'),
(5, 34, 'Evaluasi Diri Perguruan Tinggi', 'Bimtek', 'Depok', '2016-12-06', 'Peserta'),
(6, 35, 'Seminar CompFest 7', 'Seminar', 'Jakarta', '2015-04-06', 'Penyaji'),
(7, 35, 'Seminar CompFest 8', 'Seminar', 'Depok', '2016-12-06', 'Penyaji'),
(8, 35, 'Seminar CompFest 9', 'Seminar', 'Jakarta', '2017-12-06', 'Penyaji'),
(9, 35, 'Seminar CompFest 10', 'Seminar', 'Depok', '2017-04-06', 'Penyaji'),
(10, 39, 'AA UU No. 1 Tahun 2013', 'Lokakarya', 'Depok', '2013-11-10', 'Penyaji'),
(11, 40, 'Pelatihan Pengawasan Ujian', 'Pelatihan', 'Depok', '2012-11-10', 'Peserta'),
(12, 41, 'Game Development', 'Workshop', 'London', '2014-11-10', 'Peserta'),
(13, 42, 'Seminar Hari Komputer Indonesia', 'Seminar', 'Bandung', '2014-04-06', 'Penyaji'),
(14, 43, 'Pelatihan Pengecekan', 'Pelatihan', 'Puncak', '2014-12-06', 'Peserta'),
(15, 43, 'Pelatihan Dosen', 'Pelatihan', 'Puncak', '2015-11-10', 'Penyaji'),
(16, 43, 'Pelatihan Dosen dan tendik', 'Pelatihan', 'Bogor', '2016-12-06', 'Peserta');

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

--
-- Dumping data for table `kelas`
--

INSERT INTO `kelas` (`kode_mata_kuliah`, `kode_kelas`, `nama`, `kapasitas`) VALUES
('IKI10100', '1', 'MD 1 - A', 60),
('IKI10200', '10', 'DDP - E', 60),
('IKS12800', '11', 'PPSI - A', 50),
('IKS12800', '12', 'PPSI - B', 50),
('IKS12800', '13', 'PPSI - C', 50),
('IKS12600', '14', 'Adbis - A', 50),
('IKS12600', '15', 'Adbis - B', 50),
('IKS12600', '16', 'Adbis - C', 50),
('IKS21501', '17', 'DDAK - A', 50),
('IKS21501', '18', 'DDAK - B', 50),
('IKS21501', '19', 'DDAK - C', 50),
('IKI10100', '2', 'MD 1 - B', 60),
('IKS21601', '20', 'PPM - A', 50),
('IKS21601', '21', 'PPM - B', 50),
('IKS21601', '22', 'PPM - C', 50),
('IKO21502', '23', 'POK - A', 50),
('IKO21502', '24', 'POK - B', 50),
('IKO21502', '25', 'POK - C', 50),
('IKS22602', '26', 'ERP - A', 50),
('IKS22602', '27', 'ERP - B', 50),
('IKS22602', '28', 'ERP - C', 50),
('IKS32606', '29', 'SIAK - A', 50),
('IKI10100', '3', 'MD 1 - C', 60),
('IKS32606', '30', 'SIAK - B', 50),
('IKS32606', '31', 'SIAK - C', 50),
('IKS32206', '32', 'Propensi - A', 50),
('IKS32206', '33', 'Propensi - B', 50),
('IKS32206', '34', 'Propensi - C', 50),
('IKO32205', '35', 'PPL - A', 50),
('IKO32205', '36', 'PPL - A', 50),
('IKO32205', '37', 'PPL - A', 50),
('IKO12500', '38', 'PSD - A', 50),
('IKO12500', '39', 'PSD - B', 50),
('IKI10100', '4', 'MD 1 - D', 60),
('IKO12500', '40', 'PSD - C', 50),
('IKS31603', '41', 'CRM - A', 50),
('IKS31603', '42', 'CRM - B', 50),
('IKS31603', '43', 'CRM - C', 50),
('IKO21105', '44', 'Matdas 1 - A', 50),
('IKO21105', '45', 'Matdas 1 - B', 50),
('IKO21105', '46', 'Matdas 1 - C', 50),
('IKS31604', '47', 'MSDM - A', 50),
('IKS31604', '48', 'MSDM - A', 50),
('IKS31604', '49', 'MSDM - A', 50),
('IKI10100', '5', 'MD 1 - E', 60),
('IKO22401', '50', 'TBA - A', 50),
('IKO22401', '51', 'TBA - A', 50),
('IKO22401', '52', 'TBA - A', 50),
('IKS31605', '53', 'SCM - A', 50),
('IKS31605', '54', 'SCM - A', 50),
('IKS31605', '55', 'SCM - A', 50),
('IKO31503', '56', 'Jarkom - A', 50),
('IKO31503', '57', 'Jarkom - A', 50),
('IKO31503', '58', 'Jarkom - A', 50),
('IKO32104', '59', 'Anum - A', 50),
('IKI10200', '6', 'DDP - A', 60),
('IKO32104', '60', 'Anum - A', 50),
('IKO32104', '61', 'Anum - A', 50),
('IKO32402', '62', 'DAA - A', 50),
('IKO32402', '63', 'DAA - A', 50),
('IKO32402', '64', 'DAA - A', 50),
('IKI10200', '7', 'DDP - B', 60),
('IKI10200', '8', 'DDP - C', 60),
('IKI10200', '9', 'DDP - D', 60);

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

--
-- Dumping data for table `kerja_sama`
--

INSERT INTO `kerja_sama` (`id`, `kode_prodi`, `nama_instansi`, `jenis_kegiatan`, `tgl_mulai`, `tgl_akhir`, `manfaat`, `isDalamNegeri`) VALUES
(1, '1', 'BAPEDA Kota Sorong', 'Praktek Kerja Lapangan', '2011-01-01', '2014-01-01', 'Memahami tata cara kerja yang benar', 1),
(2, '2', 'BAPEDA Kabupaten Sorong', 'Praktek Kerja Lapangan', '2011-01-02', '2014-01-02', 'Memahami tata cara kerja yang benar', 1),
(3, '1', 'Dinas Perdagangan Sorong', 'Pelatihan Kewirausahaan', '2011-01-03', '2014-01-03', 'Mahasiswa dapat mngaplikasikan ilmu dengan kondisi di lapangan', 1),
(4, '2', 'Badan Keuangan Inspektorat Kabupaten Sorong', 'Model Pertanggungjawaban', '2011-01-04', '2014-01-04', 'mahasiswa dapat memahami pertanggungjawaban keuangan', 1),
(5, '1', 'Dinas Tenaga Kerja Kabupaten Sorong', 'Pelatihan rekrutmen tenaga kerja', '2011-01-05', '2014-01-05', 'mahasiswa dapat memahami rekrutmen pegawai', 1),
(6, '1', 'Distrik Sorong TImur', 'Pelatihan usaha mikro', '2011-01-06', '2014-01-06', 'memahami prinsip-prinsip usaha mikro', 1),
(7, '1', 'Dinas Koperasi Kabupaten Sorong', 'Pelatihan pendirian koperasi', '2011-01-07', '2014-01-07', 'mahasiswa memahami tata cara pendirian koperasi yang benar', 1),
(8, '2', 'PT. Pelayaran Tanjung Kumawa', 'Praktek Kerja Lapangan', '2012-12-01', '2015-12-01', 'memahami tata cara kerja yang benar', 1),
(9, '2', 'PT. Buma Perindalindo Jakarta', 'Pelatihan Pemasaran', '2012-12-02', '2015-12-02', 'distribusi barang dan jasa', 1),
(10, '1', 'PT. Teluk Membramo', 'Pelatihan Kepemimpinan', '2012-12-03', '2015-12-03', 'memahami kepemimpinan', 1),
(11, '1', 'Bukalapak', 'Praktek Kerja Lapangan', '2012-12-04', '2015-12-04', 'Memahami tata cara kerja yang benar', 1),
(12, '1', 'Traveloka', 'Praktek Kerja Lapangan', '2012-12-05', '2015-12-05', 'Memahami tata cara kerja yang benar', 1),
(13, '2', 'Tokopedia', 'Pelatihan Kewirausahaan', '2012-12-06', '2015-12-06', 'Mahasiswa dapat mngaplikasikan ilmu dengan kondisi di lapangan', 1),
(14, '2', 'GO-JEK', 'Model Pertanggungjawaban', '2012-12-07', '2015-12-07', 'mahasiswa dapat memahami pertanggungjawaban keuangan', 1),
(15, '1', 'Institut Teknologi Bandung', 'Pelatihan rekrutmen tenaga kerja', '2012-12-08', '2015-12-08', 'mahasiswa dapat memahami rekrutmen pegawai', 1),
(16, '2', 'Universitas Gunadarma', 'Pelatihan usaha mikro', '2012-12-09', '2015-12-09', 'memahami prinsip-prinsip usaha mikro', 1),
(17, '1', 'Google', 'Pelatihan pendirian koperasi', '2012-12-10', '2015-12-10', 'mahasiswa memahami tata cara pendirian koperasi yang benar', 0),
(18, '2', 'Facebook', 'Praktek Kerja Lapangan', '2012-12-11', '2015-12-11', 'memahami tata cara kerja yang benar', 0),
(19, '1', 'Twitter', 'Pelatihan Pemasaran', '2013-09-20', '2016-09-20', 'distribusi barang dan jasa', 0),
(20, '1', 'Universitas Pancasila', 'Pelatihan Kepemimpinan', '2013-09-21', '2016-09-21', 'memahami kepemimpinan', 1),
(21, '1', 'Institut Pertanian Bogor', 'Praktek Kerja Lapangan', '2014-01-03', '2017-01-03', 'Memahami tata cara kerja yang benar', 1),
(22, '2', 'PBB', 'Praktek Kerja Lapangan', '2014-01-04', '2017-01-04', 'Memahami tata cara kerja yang benar', 0),
(23, '2', 'Unicef', 'Pelatihan Kewirausahaan', '2014-01-05', '2017-01-05', 'Mahasiswa dapat mngaplikasikan ilmu dengan kondisi di lapangan', 0),
(24, '1', 'Astra International', 'Model Pertanggungjawaban', '2014-01-06', '2017-01-06', 'mahasiswa dapat memahami pertanggungjawaban keuangan', 0);

-- --------------------------------------------------------

--
-- Table structure for table `komentar`
--

CREATE TABLE `komentar` (
  `id` int(11) NOT NULL,
  `nomor_standar` int(11) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `isi` text NOT NULL,
  `id_reviewer` bigint(20) NOT NULL
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
  `kode_kurikulum` int(11) DEFAULT NULL,
  `isProdiSendiri` tinyint(1) NOT NULL,
  `isPT` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mata_kuliah`
--

INSERT INTO `mata_kuliah` (`kode_mata_kuliah`, `nama`, `sesi`, `kelompok_mata_kuliah`, `prasyarat`, `kode_kurikulum`, `isProdiSendiri`, `isPT`) VALUES
('CSCE604174', 'Basis Data Lanjut', 3, '', 'NULL', 11, 0, 0),
('CSCE604179', 'Teknologi Mobile', 4, '', 'NULL', 11, 0, 0),
('CSCM601252', 'Pengantar Organisasi Komputer', 3, '', 'NULL', 11, 0, 1),
('CSCM603228', 'Proyek Perangkat Lunak', 6, '', 'NULL', 11, 0, 1),
('CSGE601010', 'Matematika Diskret 1', 3, '', 'NULL', 11, 0, 0),
('CSGE601011', 'Matematika Diskret 2', 3, '', 'NULL', 11, 0, 0),
('CSGE601020', 'Dasar-Dasar Pemrograman 1', 3, '', 'NULL', 11, 0, 0),
('CSGE601021', 'Dasar-Dasar Pemrograman 2', 3, '', 'NULL', 11, 0, 0),
('CSGE602012', 'Aljabar Linier', 3, '', 'NULL', 11, 0, 0),
('CSGE602013', 'Statistika & Probabilitas', 3, '', 'NULL', 11, 0, 0),
('CSGE602022', 'Perancangan & Pemrograman Web', 3, '', 'NULL', 11, 0, 0),
('CSGE602040', 'Struktur Data & Algoritma', 3, '', 'NULL', 11, 0, 0),
('CSGE602055', 'Sistem Operasi', 3, '', 'NULL', 11, 0, 0),
('CSGE602070', 'Basis Data', 6, '', 'NULL', 11, 0, 0),
('CSGE603291', 'Metodologi Penelitian & Penulisan Ilmiah', 3, '', 'NULL', 11, 0, 0),
('CSGE604098', 'Kerja Praktik', 4, '', 'NULL', 11, 0, 0),
('CSGE614093', 'Komputer & Masyarakat', 4, '', 'NULL', 11, 0, 0),
('CSIE604160', 'Perdagangan Elektronik', 3, '', 'NULL', 11, 0, 0),
('CSIE604161', 'Kesehatan Elektronik', 3, '', 'NULL', 11, 0, 0),
('CSIE604163', 'Manajemen Hubungan Pelanggan', 3, '', 'NULL', 11, 1, 0),
('CSIE604165', 'Manajemen Rantai Suplai', 3, '', 'NULL', 11, 1, 0),
('CSIE604177', 'Manajemen Keamanan Informasi', 4, '', 'NULL', 11, 0, 0),
('CSIE604180', 'Manajemen Pengetahuan', 3, '', 'NULL', 11, 0, 0),
('CSIE604181', 'Dasar-Dasar Audit SI', 3, '', 'NULL', 11, 0, 0),
('CSIE604224', 'Pengembangan Perangkat Lunak Open Source', 4, '', 'NULL', 11, 0, 0),
('CSIE604265', 'Topik Khusus Bidang Minat Solusi Perusahaan', 3, '', 'NULL', 11, 1, 1),
('CSIE604266', 'Konfigurasi ERP', 3, '', 'NULL', 11, 0, 0),
('CSIE604270', 'Topik Khusus Bidang Minat Manajemen SI/TI', 3, '', 'NULL', 11, 0, 0),
('CSIE604271', 'Penambangan Data & Inteligensia Bisnis', 3, '', 'NULL', 11, 1, 0),
('CSIE604273', 'Pengelolaan Data Besar', 3, '', 'NULL', 11, 1, 0),
('CSIE604274', 'Administrasi Sistem', 3, '', 'NULL', 11, 0, 0),
('CSIE604275', 'Integrasi Aplikasi Perusahaan', 3, '', 'NULL', 11, 0, 0),
('CSIE604276', 'Manajemen Infrastruktur TI', 6, '', 'NULL', 11, 0, 0),
('CSIE604284', 'Analitika Media Sosial', 3, '', 'NULL', 11, 1, 0),
('CSIE604285', 'Sistem Informasi Sumber Daya Manusia', 3, '', 'NULL', 11, 1, 0),
('CSIE604290', 'Technopreneurship', 3, '', 'NULL', 11, 0, 0),
('CSIE604378', 'Manajemen Layanan TI', 3, '', 'NULL', 11, 0, 0),
('CSIM601251', 'Dasar-Dasar Arsitektur Komputer', 3, '', 'NULL', 11, 0, 0),
('CSIM601280', 'Prinsip-Prinsip Sistem Informasi', 4, '', 'NULL', 11, 0, 0),
('CSIM602160', 'Administrasi Bisnis', 3, '', 'NULL', 11, 0, 0),
('CSIM602161', 'Prinsip-Prinsip Manajemen', 3, '', 'NULL', 11, 0, 0),
('CSIM602262', 'Sistem-Sistem Perusahaan', 3, '', 'NULL', 11, 0, 0),
('CSIM602266', 'Sistem Informasi Akuntansi Keuangan', 3, '', 'NULL', 11, 0, 0),
('CSIM603026', 'Pemrograman Skala Perusahaan', 3, '', 'NULL', 11, 0, 0),
('CSIM603124', 'Sistem Interaksi', 3, '', 'NULL', 11, 0, 0),
('CSIM603154', 'Jaringan Komunikasi Data', 3, '', 'NULL', 11, 0, 0),
('CSIM603183', 'Analisis dan Perancangan Sistem Informasi', 3, '', 'NULL', 11, 0, 0),
('CSIM603189', 'Manajemen Proyek TI', 3, '', 'NULL', 11, 0, 0),
('CSIM603216', 'Statistika Terapan', 3, '', 'NULL', 11, 0, 0),
('CSIM603229', 'Proyek Pengembangan Sistem Informasi', 6, '', 'NULL', 11, 0, 0),
('CSIM603291', 'Komunikasi Bisnis dan Teknis', 3, '', 'NULL', 11, 0, 0),
('CSIM604182', 'Manajemen Sistem Informasi', 3, '', 'NULL', 11, 0, 0),
('FSK10111', 'Fisika Dasar 1', 3, '', 'NULL', 11, 1, 1),
('FSK10112', 'Basis Data Lanjut', 3, '', 'NULL', 11, 0, 1),
('FSK10113', 'Fisika Dasar 1', 3, '', 'NULL', 11, 1, 1),
('IKI10100', 'Matematika Diskret 1', 3, '', 'NULL', 11, 1, 1),
('IKI10101', 'Teknik Kompilator', 4, '', 'NULL', 11, 0, 1),
('IKI10103', 'Aljabar Linier', 3, '', 'NULL', 11, 1, 1),
('IKI10104', 'Matematika Diskret 1', 3, '', 'NULL', 11, 1, 1),
('IKI10200', 'Dasar-Dasar Pemrograman', 6, '', 'NULL', 11, 1, 1),
('IKI10201', 'Dasar-Dasar Pemrograman', 6, '', 'NULL', 11, 1, 1),
('IKI10400', 'Struktur Data & Algoritma', 4, '', 'NULL', 11, 1, 1),
('IKI20101', 'Matematika Diskret 2', 3, '', 'NULL', 11, 1, 1),
('IKI20102', 'Statistika & Probabilitas', 4, '', 'NULL', 11, 1, 1),
('IKI20105', 'Pengajaran Berbantuan Komputer', 3, '', 'NULL', 11, 1, 1),
('IKI20106', 'Metode Formal', 4, '', 'NULL', 11, 0, 1),
('IKI20201', 'Perancangan & Pemrograman Web', 3, '', 'NULL', 11, 1, 1),
('IKI20505', 'Sistem Operasi', 4, '', 'NULL', 11, 1, 1),
('IKI20700', 'Basis Data', 4, '', 'NULL', 11, 1, 1),
('IKI30202', 'Rekayasa Perangkat Lunak', 3, '', 'NULL', 11, 1, 1),
('IKI30203', 'Pengolahan Citra', 4, '', 'NULL', 11, 1, 1),
('IKI40902', 'Kerja Praktik', 3, '', 'NULL', 11, 1, 1),
('IKI40903', 'Komputer & Masyarakat', 3, '', 'NULL', 11, 1, 1),
('IKI40990', 'Sistem Interaksi', 4, '', 'NULL', 11, 0, 1),
('IKI40999', 'Tugas Akhir', 6, '', 'NULL', 11, 0, 1),
('IKO12106', 'Pemelajaran Mesin', 3, '', 'NULL', 11, 0, 1),
('IKO12107', 'Pemrograman Logika', 4, '', 'NULL', 11, 0, 1),
('IKO12108', 'Fisika Dasar 2', 3, '', 'NULL', 11, 1, 1),
('IKO12500', 'Pengantar Sistem Dijital', 4, '', 'NULL', 11, 1, 1),
('IKO12501', 'Penjaminan Mutu Perangkat Lunak', 4, '', 'NULL', 11, 1, 1),
('IKO12502', 'Pengolahan Bahasa Manusia', 3, '', 'NULL', 11, 1, 1),
('IKO21105', 'Matematika Dasar 2', 4, '', 'NULL', 11, 1, 1),
('IKO21106', 'Pengolahan Multimedia', 3, '', 'NULL', 11, 0, 1),
('IKO21502', 'Pengantar Organisasi Komputer', 3, '', 'NULL', 11, 1, 1),
('IKO22203', 'Pemrograman Deklaratif', 3, '', 'NULL', 11, 1, 1),
('IKO22204', 'Geometric Modelling', 3, '', 'NULL', 11, 0, 1),
('IKO22401', 'Teori Bahasa & Automata', 4, '', 'NULL', 11, 1, 1),
('IKO22402', 'Perolehan Informasi', 3, '', 'NULL', 11, 1, 1),
('IKO31204', 'Pemrograman Sistem', 3, '', 'NULL', 11, 1, 1),
('IKO31250', 'Sistem Interaksi', 6, '', 'NULL', 11, 0, 1),
('IKO31258', 'Pemrograman Konkuren & Parallel', 4, '', 'NULL', 11, 0, 1),
('IKO31300', 'Sistem Cerdas', 4, '', 'NULL', 11, 1, 1),
('IKO31350', 'Bioinformatika', 3, '', 'NULL', 11, 1, 1),
('IKO31355', 'Pengolahan Citra', 3, '', 'NULL', 11, 1, 1),
('IKO31503', 'Jaringan Komputer', 4, '', 'NULL', 11, 0, 1),
('IKO31550', 'Organisasi Sistem Komputer', 3, '', 'NULL', 11, 0, 1),
('IKO31551', 'Embedded Systems', 3, '', 'NULL', 11, 0, 1),
('IKO31554', 'Teori Informasi', 3, '', 'NULL', 11, 0, 1),
('IKO31555', 'Persamaan Diferensial', 3, '', 'NULL', 11, 0, 1),
('IKO31754', 'Basis Data Lanjut', 3, '', 'NULL', 11, 0, 1),
('IKO31900', 'Penulisan Ilmiah', 2, '', 'NULL', 11, 0, 1),
('IKO32104', 'Analisis Numerik', 3, '', 'NULL', 11, 0, 1),
('IKO32105', 'Computational Geometry', 3, '', 'NULL', 11, 0, 1),
('IKO32150', 'Teori Informasi', 3, '', 'NULL', 11, 0, 1),
('IKO32205', 'Proyek Perangkat Lunak', 6, '', 'NULL', 11, 0, 1),
('IKO32206', 'Bioinformatika', 6, '', 'NULL', 11, 0, 1),
('IKO32257', 'Teknik Kompilator', 4, '', 'NULL', 11, 0, 1),
('IKO32353', 'Pemelajaran Mesin', 3, '', 'NULL', 11, 1, 1),
('IKO32354', 'Pengolahan Bahasa Manusia', 3, '', 'NULL', 11, 1, 1),
('IKO32402', 'Desain & Analisis Algoritma', 4, '', 'NULL', 11, 0, 1),
('IKO32453', 'Kriptografi & Keamanan Informasi', 4, '', 'NULL', 11, 0, 1),
('IKO32751', 'Layanan & Aplikasi Web', 3, '', 'NULL', 11, 0, 1),
('IKO41151', 'Simulasi & Pemodelan', 3, '', 'NULL', 11, 0, 1),
('IKO41153', 'Aproksimasi & Sistem Nonlinier', 3, '', 'NULL', 11, 1, 1),
('IKO41154', 'Aljabar Linier Numerik', 3, '', 'NULL', 11, 1, 1),
('IKO41352', 'Komputasi Lunak', 3, '', 'NULL', 11, 0, 1),
('IKO41361', 'Semantic Web', 3, '', 'NULL', 11, 0, 1),
('IKO41454', 'Logika Komputasional', 3, '', 'NULL', 11, 0, 1),
('IKO41554', 'Sistem Terdistribusi', 3, '', 'NULL', 11, 0, 1),
('IKO41557', 'Ubiquitous & Net-Centric Computing', 3, '', 'NULL', 11, 0, 1),
('IKO41854', 'Sistem Informasi Geografis', 4, '', 'NULL', 11, 1, 1),
('IKO42351', 'Data Mining', 3, '', 'NULL', 11, 0, 1),
('IKO42358', 'Topik Khusus Kecerdasan Komputasional', 3, '', 'NULL', 11, 0, 1),
('IKO42359', 'Topik Khusus Pengolahan Informasi', 4, '', 'NULL', 11, 1, 1),
('IKO42360', 'Robotika', 3, '', 'NULL', 11, 0, 1),
('IKO42553', 'Rancangan Sistem Dijital', 3, '', 'NULL', 11, 0, 1),
('IKO42555', 'Topik Khusus Arsitektur & Infrastruktur', 3, '', 'NULL', 11, 0, 1),
('IKS12600', 'Administrasi Bisnis', 3, '', 'NULL', 11, 1, 1),
('IKS12800', 'Prinsip-Prinsip Sistem Informasi', 3, '', 'NULL', 11, 1, 1),
('IKS21501', 'Dasar-Dasar Arsitektur Komputer', 3, '', 'NULL', 11, 1, 1),
('IKS21601', 'Prinsip-Prinsip Manajemen', 3, '', 'NULL', 11, 1, 0),
('IKS22403', 'Riset Operasi', 3, '', 'NULL', 11, 0, 0),
('IKS22602', 'Enterprise Resource Planning', 6, '', 'NULL', 11, 1, 0),
('IKS31259', 'Manajemen Proyek TI', 3, '', 'NULL', 11, 0, 0),
('IKS31504', 'Jaringan Komunikasi Data', 3, '', 'NULL', 11, 1, 0),
('IKS31603', 'Customer Relationship Management', 4, '', 'NULL', 11, 0, 0),
('IKS31604', 'Manajemen Sumber Daya Manusia', 4, '', 'NULL', 11, 0, 0),
('IKS31605', 'Supply Chain Management', 4, '', 'NULL', 11, 1, 0),
('IKS31650', 'E-Commerce', 3, '', 'NULL', 11, 0, 0),
('IKS31951', 'Komunikasi Bisnis dan Teknis', 3, '', 'NULL', 11, 0, 0),
('IKS32206', 'Proyek Pengembangan Sistem Informasi', 6, '', 'NULL', 11, 1, 0),
('IKS32606', 'Sistem Informasi Akuntansi dan Keuangan', 3, '', 'NULL', 11, 1, 0),
('IKS32656', 'Konfigurasi ERP', 3, '', 'NULL', 11, 0, 0),
('IKS32753', 'Administrasi Sistem', 3, '', 'NULL', 11, 1, 0),
('IKS32756', 'Infrastruktur TI Modern', 3, '', 'NULL', 11, 1, 0),
('IKS32758', 'Manajemen Layanan TI', 3, '', 'NULL', 11, 1, 0),
('IKS32855', 'Sistem Informasi Kesehatan', 3, '', 'NULL', 11, 0, 0),
('IKS32901', 'Metodologi Penelitian & Penulisan Ilmiah', 3, '', 'NULL', 11, 1, 0),
('IKS40652', 'Pengembangan dan Pemasaran Produk', 3, '', 'NULL', 11, 0, 0),
('IKS41653', 'Perilaku Organisasi', 3, '', 'NULL', 11, 0, 0),
('IKS41757', 'Manajemen Keamanan Informasi', 3, '', 'NULL', 11, 1, 0),
('IKS41759', 'Teknologi Mobile', 3, '', 'NULL', 11, 1, 0),
('IKS41850', 'Manajemen Pengetahuan', 3, '', 'NULL', 11, 0, 0),
('IKS41851', 'Dasar-Dasar Audit SI', 6, '', 'NULL', 11, 1, 0),
('IKS41852', 'Manajemen Sistem Informasi', 3, '', 'NULL', 11, 1, 0),
('IKS42260', 'Pengembangan Perangkat Lunak Open Source', 4, '', 'NULL', 11, 0, 0),
('IKS42651', 'Business Intelligence', 4, '', 'NULL', 11, 0, 0),
('IKS42655', 'Topik Khusus Bidang Minat Enterprise System', 3, '', 'NULL', 11, 0, 0),
('IKS42755', 'Enterprise Application Integration', 3, '', 'NULL', 11, 0, 0),
('IKS42760', 'Topik Khusus BidanG Minat teknologi Informasi', 4, '', 'NULL', 11, 0, 0),
('IKS42950', 'Technopreneurship', 3, '', 'NULL', 11, 0, 0),
('MAT10113', 'Matematika Dasar 1', 2, '', 'NULL', 11, 1, 1),
('MAT10114', 'Matematika Dasar 1', 2, '', 'NULL', 11, 1, 1),
('UIGE600001', 'Mata kuliah Pengembangan Kepribadian Terintegrasi ', 6, '', 'NULL', 11, 0, 0),
('UIGE600002', 'Mata kuliah Pengembangan Kepribadian Terintegrasi ', 3, '', 'NULL', 11, 0, 0),
('UIGE600003', 'Mata kuliah Pengembangan Kepridian Bahasa Inggris', 4, '', 'NULL', 11, 0, 0),
('UIGE60001', 'Mata kuliah Pengembangan Kepribadian Agama', 2, '', 'NULL', 11, 0, 0),
('UIGE60004', 'Mata kuliah Pengembangan Kepridian Seni dan Olahra', 4, '', 'NULL', 11, 0, 0),
('UIST601014', 'Matematika Dasar 1', 4, '', 'NULL', 11, 0, 0),
('UIST601111', 'Fisika Dasar 1', 3, '', 'NULL', 11, 0, 0),
('UUI11001', 'Mata kuliah Pengembangan Kepribadian Terintegrasi ', 6, '', 'NULL', 11, 1, 1),
('UUI11002', 'Mata kuliah Pengembangan Kepribadian Terintegrasi ', 6, '', 'NULL', 11, 1, 1),
('UUI11003', 'Mata kuliah Pengembangan Kepribadian Terintegrasi ', 6, '', 'NULL', 11, 1, 1),
('UUI11004', 'Mata kuliah Pengembangan Kepribadian Terintegrasi ', 6, '', 'NULL', 11, 1, 1),
('UUI11010', 'Mata kuliah Pengembangan Kepridian Bahasa Inggris', 3, '', 'NULL', 11, 1, 1),
('UUI11011', 'Mata kuliah Pengembangan Kepridian Bahasa Inggris', 3, '', 'NULL', 11, 1, 1),
('UUI12016', 'Mata kuliah Pengembangan Kepribadian Agama Katolik', 2, '', 'NULL', 11, 1, 1),
('UUI12020', 'Mata kuliah Pengembangan Kepribadian Agama Islam', 2, '', 'NULL', 11, 1, 1),
('UUI12021', 'Mata kuliah Pengembangan Kepribadian Agama Kristen', 2, '', 'NULL', 11, 1, 1),
('UUI12022', 'Mata kuliah Pengembangan Kepribadian Agama Katolik', 2, '', 'NULL', 11, 1, 1),
('UUI12023', 'Mata kuliah Pengembangan Kepribadian Agama Hindu', 2, '', 'NULL', 11, 1, 1),
('UUI12024', 'Mata kuliah Pengembangan Kepribadian Agama Budha', 2, '', 'NULL', 11, 1, 1),
('UUI12025', 'Mata kuliah Pengembangan Kepribadian Agama Kristen', 2, '', 'NULL', 11, 1, 1),
('UUI12027', 'Semantic Web', 3, '', 'NULL', 11, 0, 1),
('UUI12028', 'Mata kuliah Pengembangan Kepribadian Agama Islam', 2, '', 'NULL', 11, 1, 1),
('UUI12029', 'Mata kuliah Pengembangan Kepribadian Agama Islam', 2, '', 'NULL', 11, 1, 1),
('UUI12030', 'Mata kuliah Pengembangan Kepridian Seni dan Olahra', 1, '', 'NULL', 11, 1, 1),
('UUI12032', 'Mata kuliah Pengembangan Kepridian Seni dan Olahra', 1, '', 'NULL', 11, 1, 1);

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

--
-- Dumping data for table `organisasi_dosen`
--

INSERT INTO `organisasi_dosen` (`id`, `id_dosen`, `nama`, `kurun_waktu`, `tingkat`) VALUES
(1, 1, 'Ikatan Sarjana Komputer Indonesia', '2 tahun', 'Lokal'),
(2, 2, 'Komunitas HCI Indonesia', '2 tahun', 'Lokal'),
(3, 3, 'Komunitas Aljabar Indonesia', '3 tahun', 'Lokal'),
(4, 4, 'Organisasi Master Komputer Indonesia', '5 tahun', 'Lokal'),
(5, 12, 'Ikatan Sarjana Komputer Indonesia', '7 tahun', 'Lokal'),
(6, 13, 'Komunitas HCI Indonesia', '7 tahun', 'Lokal'),
(7, 14, 'Komunitas Aljabar Indonesia', '2 tahun', 'Lokal'),
(8, 15, 'Organisasi Master Komputer Indonesia', '3 tahun', 'Lokal'),
(9, 16, 'Ikatan Sarjana Komputer Indonesia', '2 tahun', 'Lokal'),
(10, 22, 'Komunitas HCI Indonesia', '2 tahun', 'Lokal'),
(11, 23, 'Komunitas Aljabar Indonesia', '3 tahun', 'Lokal'),
(12, 24, 'Organisasi Master Komputer Indonesia', '5 tahun', 'Lokal'),
(13, 25, 'Ikatan Sarjana Komputer Indonesia', '7 tahun', 'Lokal'),
(14, 27, 'Komunitas HCI Indonesia', '7 tahun', 'Lokal'),
(15, 28, 'Komunitas Aljabar Indonesia', '2 tahun', 'Lokal'),
(16, 29, 'Organisasi Master Komputer Indonesia', '3 tahun', 'Lokal'),
(17, 30, 'Ikatan Sarjana Komputer Indonesia', '1 tahun', 'Lokal'),
(18, 31, 'Komunitas HCI Indonesia', '2 tahun', 'Lokal'),
(19, 32, 'Komunitas Aljabar Indonesia', '6 tahun', 'Lokal'),
(20, 33, 'Organisasi Master Komputer Indonesia', '5 tahun', 'Lokal'),
(21, 34, 'Ikatan Sarjana Komputer Indonesia', '7 tahun', 'Lokal'),
(22, 42, 'Komunitas HCI Indonesia', '7 tahun', 'Lokal'),
(23, 43, 'Komunitas Aljabar Indonesia', '2 tahun', 'Lokal'),
(24, 44, 'Organisasi Master Komputer Indonesia', '3 tahun', 'Lokal'),
(25, 45, 'Ikatan Sarjana Komputer Indonesia', '1 tahun', 'Lokal'),
(26, 46, 'Komunitas HCI Indonesia', '2 tahun', 'Lokal'),
(27, 47, 'Komunitas Aljabar Indonesia', '6 tahun', 'Lokal');

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
  `id_status_pernikahan` int(11) DEFAULT NULL,
  `id_jabatan_struktural` int(11) DEFAULT NULL,
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
  `is_reviewer_univ` tinyint(1) NOT NULL,
  `is_reviewer_prodi` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  `isAdmin` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pegawai`
--

INSERT INTO `pegawai` (`id_pegawai`, `username`, `password`, `no_pegawai`, `nama`, `no_handphone`, `jenis_kelamin`, `tempat_lahir`, `jenis_identitas`, `no_identitas`, `tanggal_lahir`, `alamat_ktp`, `alamat_saat_ini`, `id_agama`, `id_status`, `id_pangkat`, `isDosen`, `id_status_pernikahan`, `id_jabatan_struktural`, `npwp`, `id_bank`, `no_rekening`, `nama_rekening`, `thn_masuk`, `angka_kredit`, `id_role_pegawai`, `isPimpinan`, `id_pimpinan`, `isTimAkreditasi`, `is_reviewer_univ`, `is_reviewer_prodi`, `created_at`, `updated_at`, `isAdmin`) VALUES
(1, 'aminur.muda', '123', '1406580511', 'Aminur Muda', NULL, NULL, NULL, NULL, 'B98394A739', '1980-01-01', NULL, NULL, NULL, NULL, NULL, 1, NULL, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, 1, 0, 0, 0, '2017-04-19 12:35:11', NULL, 0),
(2, 'ayesha.maharani', '234', '1406557554', 'Ayesha Maharani', NULL, NULL, NULL, NULL, 'K8937F38', '1982-02-01', NULL, NULL, NULL, NULL, NULL, 1, NULL, 2, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, 1, 0, 0, '2017-04-19 12:35:12', NULL, 0),
(3, 'gemma.adhatien', '456', '1406574895', 'Gemma Adhatien', NULL, NULL, NULL, NULL, 'H637808348', '1984-03-01', NULL, NULL, NULL, NULL, NULL, 1, NULL, 2, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, 1, 0, 0, '2017-04-19 12:35:12', NULL, 0),
(4, 'muchamad.lutfi', '567', '1406623152', 'Lutfi Maulana', NULL, NULL, NULL, NULL, 'F87648E2873', '1986-04-01', NULL, NULL, NULL, NULL, NULL, 1, NULL, 2, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, 0, 0, 0, '2017-04-19 12:35:12', NULL, 1),
(5, 'ristya.nintyana', '789', '1406574623', 'Ristya Nintyana', NULL, NULL, NULL, NULL, 'F398E2897', '1988-05-01', NULL, NULL, NULL, NULL, NULL, 1, NULL, 2, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, 2, 0, 0, 0, '2017-04-19 12:35:12', NULL, 0),
(6, 'ridha.aulia', '8479', '1406534739', 'Ridha Aulia', NULL, NULL, NULL, NULL, 'F873983', '1990-06-01', NULL, NULL, NULL, NULL, NULL, 1, NULL, 2, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, 0, 0, 0, '2017-04-19 12:35:12', NULL, 0),
(7, 'intania.nuranifah', '324934', '140673834', 'Intania Nuranifah', NULL, NULL, NULL, NULL, 'GKJS63472', '1992-07-01', NULL, NULL, NULL, NULL, NULL, 1, NULL, 2, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, 0, 0, 0, '2017-04-19 12:35:12', NULL, 0),
(8, 'mutia.khairunnisa', '3987934', '140675349', 'Mutia Khairunnisa', NULL, NULL, NULL, NULL, 'F873983u39', '1994-08-01', NULL, NULL, NULL, NULL, NULL, 1, NULL, 2, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, 0, 0, 0, '2017-04-19 12:35:12', NULL, 0),
(9, 'sumayyah', '347347', '140657832', 'Sumayyah', NULL, NULL, NULL, NULL, 'H8093js2309', '1980-01-01', NULL, NULL, NULL, NULL, NULL, 1, NULL, 2, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, 0, 1, 0, '2017-04-19 12:35:12', NULL, 0),
(10, 'ivana.putri', '32984', '140657392', 'Ivana Putri', NULL, NULL, NULL, NULL, 'J49834F292', '1982-02-01', NULL, NULL, NULL, NULL, NULL, 1, NULL, 2, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, 0, 0, 1, '2017-04-19 12:35:12', NULL, 0),
(11, 'joshua.casey', '3493', '1405573728', 'Joshua Casey', NULL, NULL, NULL, NULL, 'L294D292', '1984-03-01', NULL, NULL, NULL, NULL, NULL, 1, NULL, 2, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, 0, 1, 0, '2017-04-19 12:35:12', NULL, 0),
(12, 'kholid.abdurrahman', '897348', 'H30934A92', 'Kholid Abdurrahman', NULL, NULL, NULL, NULL, 'L90843G23', '1986-04-01', NULL, NULL, NULL, NULL, NULL, 1, NULL, 2, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, 0, 0, 1, '2017-04-19 12:35:12', NULL, 0),
(13, 'ratih.ajeng', '98373', '1406749834', 'Ratih Ajeng', NULL, NULL, NULL, NULL, 'D40893A09834', '1988-05-01', NULL, NULL, NULL, NULL, NULL, 1, NULL, 3, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, 0, 0, 1, '2017-04-19 12:35:12', NULL, 0),
(14, 'Muthy.Afifah', '831482', '1427841914', 'Muthy Afifah', NULL, NULL, NULL, NULL, '893-53-3726', '1990-06-01', NULL, NULL, NULL, NULL, NULL, 0, NULL, 4, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, 0, 0, 0, '2017-04-19 12:35:12', NULL, 0),
(15, 'Tengku.Chavia.Zagita', '411179', '1538320010', 'Tengku Chavia Zagita', NULL, NULL, NULL, NULL, '912-01-8394', '1992-07-01', NULL, NULL, NULL, NULL, NULL, 0, NULL, 4, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, 0, 0, 0, '2017-04-19 12:35:12', NULL, 0),
(16, 'Meliza.Litasari', '1053300', '1527376687', 'Meliza Litasari', NULL, NULL, NULL, NULL, '532-31-2204', '1994-08-01', NULL, NULL, NULL, NULL, NULL, 0, NULL, 4, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, 0, 0, 0, '2017-04-19 12:35:12', NULL, 0),
(17, 'Lidya.Dwiputri.Rinle', '120998', '1449795989', 'Lidya Dwiputri Rinlestari', NULL, NULL, NULL, NULL, '748-96-4562', '1980-01-01', NULL, NULL, NULL, NULL, NULL, 0, NULL, 4, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, 0, 0, 0, '2017-04-19 12:35:12', NULL, 0),
(18, 'Fikri.Pratama.Afif', '1031500', '1510725858', 'Fikri Pratama Afif', NULL, NULL, NULL, NULL, '520-19-5866', '1982-02-01', NULL, NULL, NULL, NULL, NULL, 0, NULL, 4, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, 0, 0, 0, '2017-04-19 12:35:12', NULL, 0),
(19, 'Alif.Fauzan', '894666', '1526942586', 'Alif Fauzan', NULL, NULL, NULL, NULL, '440-86-6623', '1984-03-01', NULL, NULL, NULL, NULL, NULL, 0, NULL, 4, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, 0, 0, 0, '2017-04-19 12:35:12', NULL, 0),
(20, 'R..PB.Prameshwara.De', '372624', '1472787734', 'R. PB Prameshwara Dermawan', NULL, NULL, NULL, NULL, '879-90-4357', '1986-04-01', NULL, NULL, NULL, NULL, NULL, 0, NULL, 4, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, 0, 0, 0, '2017-04-19 12:35:12', NULL, 0),
(21, 'Aulia.Hafiz.Nur.Rahm', '877489', '1529825024', 'Aulia Hafiz Nur Rahman', NULL, NULL, NULL, NULL, '908-85-1763', '1988-05-01', NULL, NULL, NULL, NULL, NULL, 0, NULL, 4, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, 0, 0, 0, '2017-04-19 12:35:12', NULL, 0),
(22, 'Muhammad.Aldi.Yusron', '799435', '1406844080', 'Muhammad Aldi Yusron', NULL, NULL, NULL, NULL, '705-56-7649', '1990-06-01', NULL, NULL, NULL, NULL, NULL, 0, NULL, 4, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, 0, 0, 0, '2017-04-19 12:35:12', NULL, 0),
(23, 'Nurhaya.Kushadi.Gita', '201673', '1441090769', 'Nurhaya Kushadi Gitasari', NULL, NULL, NULL, NULL, '182-34-7856', '1992-07-01', NULL, NULL, NULL, NULL, NULL, 0, NULL, 4, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, 0, 0, 0, '2017-04-19 12:35:12', NULL, 0),
(24, 'Samuel.Yang', '604456', '1502660003', 'Samuel Yang', NULL, NULL, NULL, NULL, '527-73-9568', '1994-08-01', NULL, NULL, NULL, NULL, NULL, 0, NULL, 4, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, 0, 0, 0, '2017-04-19 12:35:12', NULL, 0),
(25, 'Adityo.Anggraito', '257615', '1511071171', 'Adityo Anggraito', NULL, NULL, NULL, NULL, '714-48-4754', '1980-01-01', NULL, NULL, NULL, NULL, NULL, 0, NULL, 4, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, 0, 0, 0, '2017-04-19 12:35:12', NULL, 0),
(26, 'Wresni.Ronggowerdhi', '584116', '1437047167', 'Wresni Ronggowerdhi', NULL, NULL, NULL, NULL, '915-99-3941', '1982-02-01', NULL, NULL, NULL, NULL, NULL, 0, NULL, 4, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, 0, 0, 0, '2017-04-19 12:35:12', NULL, 0),
(27, 'Muhammad.Fadhillah', '703794', '1500709007', 'Muhammad Fadhillah', NULL, NULL, NULL, NULL, '702-38-7749', '1984-03-01', NULL, NULL, NULL, NULL, NULL, 0, NULL, 4, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, 0, 0, 0, '2017-04-19 12:35:12', NULL, 0),
(28, 'Maulana.Wisnu.P', '527884', '1571749763', 'Maulana Wisnu P', NULL, NULL, NULL, NULL, '444-51-7740', '1986-04-01', NULL, NULL, NULL, NULL, NULL, 0, NULL, 4, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, 0, 0, 0, '2017-04-19 12:35:13', NULL, 0),
(29, 'Ario.Hardi.Wibowo', '787957', '1558197238', 'Ario Hardi Wibowo', NULL, NULL, NULL, NULL, '653-63-8183', '1988-05-01', NULL, NULL, NULL, NULL, NULL, 0, NULL, 4, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, 0, 0, 0, '2017-04-19 12:35:13', NULL, 0),
(30, 'Abdurrahman.Faris.Ag', '1231871', '1410634124', 'Abdurrahman Faris Agianda', NULL, NULL, NULL, NULL, '702-36-2126', '1990-06-01', NULL, NULL, NULL, NULL, NULL, 0, NULL, 4, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, 0, 0, 0, '2017-04-19 12:35:13', NULL, 0),
(31, 'Hamdan.Fachry.HImawa', '876926', '1442011695', 'Hamdan Fachry HImawan', NULL, NULL, NULL, NULL, '948-85-0079', '1992-07-01', NULL, NULL, NULL, NULL, NULL, 0, NULL, 4, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, 0, 0, 0, '2017-04-19 12:35:13', NULL, 0),
(32, 'Insan.Ariandanu.Sufa', '677539', '1439771264', 'Insan Ariandanu Sufajar', NULL, NULL, NULL, NULL, '381-91-0567', '1994-08-01', NULL, NULL, NULL, NULL, NULL, 0, NULL, 4, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, 0, 0, 0, '2017-04-19 12:35:13', NULL, 0),
(33, 'Muhammad.Umar.Farisi', '372684', '1519038310', 'Muhammad Umar Farisi', NULL, NULL, NULL, NULL, '369-47-4411', '1980-01-01', NULL, NULL, NULL, NULL, NULL, 0, NULL, 4, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, 0, 0, 0, '2017-04-19 12:35:13', NULL, 0),
(34, 'Farhan.Nurdiatama.P', '189312', '1565942854', 'Farhan Nurdiatama P', NULL, NULL, NULL, NULL, '363-90-7461', '1982-02-01', NULL, NULL, NULL, NULL, NULL, 0, NULL, 4, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, 0, 0, 0, '2017-04-19 12:35:13', NULL, 0),
(35, 'Asti.Dwiyana', '562959', '1551517492', 'Asti Dwiyana', NULL, NULL, NULL, NULL, '647-49-4408', '1984-03-01', NULL, NULL, NULL, NULL, NULL, 0, NULL, 4, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, 0, 0, 0, '2017-04-19 12:35:13', NULL, 0),
(36, 'Aditya.Beta.Sutopo', '199415', '1438083385', 'Aditya Beta Sutopo', NULL, NULL, NULL, NULL, '638-73-4542', '1986-04-01', NULL, NULL, NULL, NULL, NULL, 0, NULL, 4, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, 0, 0, 0, '2017-04-19 12:35:13', NULL, 0),
(37, 'Dipo.Anugrah', '1167145', '1465983725', 'Dipo Anugrah', NULL, NULL, NULL, NULL, '886-21-4062', '1988-05-01', NULL, NULL, NULL, NULL, NULL, 0, NULL, 4, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, 0, 0, 0, '2017-04-19 12:35:13', NULL, 0),
(38, 'Muh.Azri.Sofyan', '717985', '1473465727', 'Muh Azri Sofyan', NULL, NULL, NULL, NULL, '475-58-1981', '1990-06-01', NULL, NULL, NULL, NULL, NULL, 0, NULL, 4, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, 0, 0, 0, '2017-04-19 12:35:13', NULL, 0),
(39, 'Norma.Puspitasari', '1140100', '1515519005', 'Norma Puspitasari', NULL, NULL, NULL, NULL, '410-52-7729', '1992-07-01', NULL, NULL, NULL, NULL, NULL, 0, NULL, 4, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, 0, 0, 0, '2017-04-19 12:35:13', NULL, 0),
(40, 'Wilson.Cristian', '524984', '1498919058', 'Wilson Cristian', NULL, NULL, NULL, NULL, '754-46-2165', '1994-08-01', NULL, NULL, NULL, NULL, NULL, 0, NULL, 4, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, 0, 0, 0, '2017-04-19 12:35:13', NULL, 0),
(41, 'Edison.Tantra', '536358', '1416658588', 'Edison Tantra', NULL, NULL, NULL, NULL, '914-57-9028', '1980-01-01', NULL, NULL, NULL, NULL, NULL, 0, NULL, 4, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, 0, 0, 0, '2017-04-19 12:35:13', NULL, 0),
(42, 'Jevi.Fronatalia', '1098748', '1538952972', 'Jevi Fronatalia', NULL, NULL, NULL, NULL, '425-41-0185', '1982-02-01', NULL, NULL, NULL, NULL, NULL, 0, NULL, 4, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, 0, 0, 0, '2017-04-19 12:35:13', NULL, 0),
(43, 'Indra.Pambudi', '836722', '1525249686', 'Indra Pambudi', NULL, NULL, NULL, NULL, '444-63-8228', '1984-03-01', NULL, NULL, NULL, NULL, NULL, 0, NULL, 4, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, 0, 0, 0, '2017-04-19 12:35:14', NULL, 0),
(44, 'Muhammad.Rizal.Diant', '569068', '1527771603', 'Muhammad Rizal Diantoro', NULL, NULL, NULL, NULL, '546-05-0447', '1986-04-01', NULL, NULL, NULL, NULL, NULL, 0, NULL, 4, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, 0, 0, 0, '2017-04-19 12:35:14', NULL, 0),
(45, 'Bryanza.Novirahman', '214048', '1456679701', 'Bryanza Novirahman', NULL, NULL, NULL, NULL, '146-86-9973', '1988-05-01', NULL, NULL, NULL, NULL, NULL, 0, NULL, 4, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, 0, 0, 0, '2017-04-19 12:35:14', NULL, 0),
(46, 'Wendy.Damar.Wisma.Tr', '296049', '1489523910', 'Wendy Damar Wisma Trisna Bayu', NULL, NULL, NULL, NULL, '401-15-3546', '1990-06-01', NULL, NULL, NULL, NULL, NULL, 0, NULL, 4, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, 0, 0, 0, '2017-04-19 12:35:14', NULL, 0),
(47, 'Akbar.Septriyan', '456666', '1484205700', 'Akbar Septriyan', NULL, NULL, NULL, NULL, '244-75-9167', '1992-07-01', NULL, NULL, NULL, NULL, NULL, 0, NULL, 4, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, 0, 0, 0, '2017-04-19 12:35:14', NULL, 0),
(48, 'Ahmad.Nazhif.R', '208533', '1425216524', 'Ahmad Nazhif R', NULL, NULL, NULL, NULL, '987-89-7366', '1994-08-01', NULL, NULL, NULL, NULL, NULL, 0, NULL, 4, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, 0, 0, 0, '2017-04-19 12:35:14', NULL, 0),
(49, 'Claudia.Teresa.Br.Si', '852783', '1536010487', 'Claudia Teresa Br Sigalingging', NULL, NULL, NULL, NULL, '104-14-7731', '1980-01-01', NULL, NULL, NULL, NULL, NULL, 0, NULL, 4, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, 0, 0, 0, '2017-04-19 12:35:14', NULL, 0),
(50, 'Firda.Dhea.Sauzan', '107496', '1559663811', 'Firda Dhea Sauzan', NULL, NULL, NULL, NULL, '523-60-1566', '1982-02-01', NULL, NULL, NULL, NULL, NULL, 0, NULL, 4, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, 0, 0, 0, '2017-04-19 12:35:14', NULL, 0),
(51, 'Hafizh.Rafizal.Adnan', '1030513', '1512405747', 'Hafizh Rafizal Adnan', NULL, NULL, NULL, NULL, '977-10-1833', '1984-03-01', NULL, NULL, NULL, NULL, NULL, 0, NULL, 4, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, 0, 0, 0, '2017-04-19 12:35:14', NULL, 0),
(52, 'Alben', '718266', '1430856959', 'Alben', NULL, NULL, NULL, NULL, '608-46-7275', '1986-04-01', NULL, NULL, NULL, NULL, NULL, 0, NULL, 4, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, 0, 0, 0, '2017-04-19 12:35:14', NULL, 0),
(53, 'Abdurrahman.Saleh', '495042', '1414402373', 'Abdurrahman Saleh', NULL, NULL, NULL, NULL, '926-32-2944', '1988-05-01', NULL, NULL, NULL, NULL, NULL, 0, NULL, 4, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, 0, 0, 0, '2017-04-19 12:35:14', NULL, 0),
(54, 'Satria.Bagus.Wicakso', '1126274', '1507413687', 'Satria Bagus Wicaksono', NULL, NULL, NULL, NULL, '618-23-2932', '1990-06-01', NULL, NULL, NULL, NULL, NULL, 0, NULL, 4, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, 0, 0, 0, '2017-04-19 12:35:14', NULL, 0),
(55, 'Andre.Ramadhani', '151469', '1503780902', 'Andre Ramadhani', NULL, NULL, NULL, NULL, '594-24-0706', '1992-07-01', NULL, NULL, NULL, NULL, NULL, 0, NULL, 4, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, 0, 0, 0, '2017-04-19 12:35:14', NULL, 0),
(56, 'Gentur.Waskito.Triwi', '201099', '1510831022', 'Gentur Waskito Triwinasis', NULL, NULL, NULL, NULL, '564-84-3016', '1994-08-01', NULL, NULL, NULL, NULL, NULL, 0, NULL, 4, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, 0, 0, 0, '2017-04-19 12:35:14', NULL, 0),
(57, 'Zamil.Majdy', '1029266', '1438990030', 'Zamil Majdy', NULL, NULL, NULL, NULL, '277-88-3603', '1980-01-01', NULL, NULL, NULL, NULL, NULL, 0, NULL, 4, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, 0, 0, 0, '2017-04-19 12:35:14', NULL, 0),
(58, 'Muhammad.Ayaz.Dzulfi', '338718', '1433960401', 'Muhammad Ayaz Dzulfikar', NULL, NULL, NULL, NULL, '781-12-4105', '1982-02-01', NULL, NULL, NULL, NULL, NULL, 0, NULL, 4, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, 0, 0, 0, '2017-04-19 12:35:14', NULL, 0),
(59, 'komang.adelia', '845597', '1519934654', 'Komang Adelia', NULL, NULL, NULL, NULL, '882-17-8815', '1984-03-01', NULL, NULL, NULL, NULL, NULL, 1, NULL, 4, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, 0, 0, 0, '2017-04-19 12:35:14', NULL, 0),
(60, 'Alva.Thomson', '485099', '1540984284', 'Alva Thomson', NULL, NULL, NULL, NULL, '882-17-8816', '1986-04-01', NULL, NULL, NULL, NULL, NULL, 1, NULL, 3, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, 0, 0, 0, '2017-04-19 12:35:14', NULL, 0),
(61, 'Muhammad.Gilang.Janu', '883514', '1557346703', 'Muhammad Gilang Januar', NULL, NULL, NULL, NULL, '882-17-8817', '1988-05-01', NULL, NULL, NULL, NULL, NULL, 1, NULL, 3, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, 0, 0, 0, '2017-04-19 12:35:14', NULL, 0),
(62, 'Ricky.Putra.Nursalim', '732174', '1446668674', 'Ricky Putra Nursalim', NULL, NULL, NULL, NULL, '882-17-8818', '1990-06-01', NULL, NULL, NULL, NULL, NULL, 1, NULL, 2, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, 0, 0, 0, '2017-04-19 12:35:14', NULL, 0),
(63, 'Gunawan.Santoso', '592424', '1523752590', 'Gunawan Santoso', NULL, NULL, NULL, NULL, '882-17-8819', '1992-07-01', NULL, NULL, NULL, NULL, NULL, 1, NULL, 2, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, 0, 0, 0, '2017-04-19 12:35:14', NULL, 0),
(64, 'Risyad.Ridho.Hasbull', '266213', '1422305161', 'Risyad Ridho Hasbullah', NULL, NULL, NULL, NULL, '882-17-8820', '1994-08-01', NULL, NULL, NULL, NULL, NULL, 1, NULL, 2, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, 0, 0, 0, '2017-04-19 12:35:14', NULL, 0),
(65, 'Geraldo', '144881', '1490928915', 'Geraldo', NULL, NULL, NULL, NULL, '882-17-8821', '1970-03-01', NULL, NULL, NULL, NULL, NULL, 1, NULL, 2, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, 0, 0, 0, '2017-04-19 12:35:14', NULL, 0),
(66, 'Ricky.Kurniawan', '458228', '1564772682', 'Ricky Kurniawan', NULL, NULL, NULL, NULL, '882-17-8822', '1971-03-05', NULL, NULL, NULL, NULL, NULL, 1, NULL, 2, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, 0, 0, 0, '2017-04-19 12:35:14', NULL, 0),
(67, 'Ilyas.Fahreza', '1008011', '1488814620', 'Ilyas Fahreza', NULL, NULL, NULL, NULL, '882-17-8823', '1972-03-08', NULL, NULL, NULL, NULL, NULL, 1, NULL, 2, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, 0, 0, 0, '2017-04-19 12:35:14', NULL, 0),
(68, 'Meta.Andrini.Utari', '613519', '1469183824', 'Meta Andrini Utari', NULL, NULL, NULL, NULL, '882-17-8824', '1973-03-12', NULL, NULL, NULL, NULL, NULL, 1, NULL, 2, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, 0, 0, 0, '2017-04-19 12:35:14', NULL, 0),
(69, 'Bthari.Smartnastiti', '328275', '1548015018', 'Bthari Smartnastiti', NULL, NULL, NULL, NULL, '882-17-8825', '1974-03-16', NULL, NULL, NULL, NULL, NULL, 1, NULL, 2, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, 0, 0, 0, '2017-04-19 12:35:15', NULL, 0),
(70, 'Ismail.Shalih.Abdul.', '857959', '1481758538', 'Ismail Shalih Abdul K', NULL, NULL, NULL, NULL, '882-17-8826', '1975-03-20', NULL, NULL, NULL, NULL, NULL, 1, NULL, 2, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, 0, 0, 0, '2017-04-19 12:35:15', NULL, 0),
(71, 'Kenny.Reida.Dharmawa', '700963', '1467504085', 'Kenny Reida Dharmawan', NULL, NULL, NULL, NULL, '882-17-8827', '1976-03-23', NULL, NULL, NULL, NULL, NULL, 1, NULL, 2, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, 0, 0, 0, '2017-04-19 12:35:15', NULL, 0),
(72, 'Muhammad.Risyad.Ilma', '451504', '1459805047', 'Muhammad Risyad Ilmawan', NULL, NULL, NULL, NULL, '882-17-8828', '1977-03-27', NULL, NULL, NULL, NULL, NULL, 1, NULL, 2, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, 0, 0, 0, '2017-04-19 12:35:15', NULL, 0),
(73, 'Tinna.Fauziah.Azhar', '589503', '1437927828', 'Tinna Fauziah Azhar', NULL, NULL, NULL, NULL, '882-17-8829', '1978-03-31', NULL, NULL, NULL, NULL, NULL, 1, NULL, 2, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, 0, 0, 0, '2017-04-19 12:35:15', NULL, 0),
(74, 'Tjokorde.Gde.Agung.O', '327013', '1500623354', 'Tjokorde Gde Agung Octavio P', NULL, NULL, NULL, NULL, '882-17-8830', '1979-04-04', NULL, NULL, NULL, NULL, NULL, 1, NULL, 2, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, 0, 0, 0, '2017-04-19 12:35:15', NULL, 0),
(75, 'Ristya.Nintyana', '1035059', '1408287893', 'Ristya Nintyana', NULL, NULL, NULL, NULL, '882-17-8831', '1980-04-07', NULL, NULL, NULL, NULL, NULL, 1, NULL, 2, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, 0, 0, 0, '2017-04-19 12:35:15', NULL, 0),
(76, 'Fatah.Fadhlurrohman', '761921', '1429289099', 'Fatah Fadhlurrohman', NULL, NULL, NULL, NULL, '882-17-8832', '1981-04-11', NULL, NULL, NULL, NULL, NULL, 1, NULL, 2, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, 0, 0, 0, '2017-04-19 12:35:15', NULL, 0),
(77, 'Ahmad.Elang', '403181', '1464529385', 'Ahmad Elang', NULL, NULL, NULL, NULL, '882-17-8833', '1982-04-15', NULL, NULL, NULL, NULL, NULL, 1, NULL, 2, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, 0, 0, 0, '2017-04-19 12:35:15', NULL, 0),
(78, 'Muhammad.Ibrohim', '279597', '1515988724', 'Muhammad Ibrohim', NULL, NULL, NULL, NULL, '882-17-8834', '1983-04-19', NULL, NULL, NULL, NULL, NULL, 1, NULL, 2, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, 0, 0, 0, '2017-04-19 12:35:15', NULL, 0),
(79, 'Safitri.Difa.Kaluza.', '356521', '1550540862', 'Safitri Difa Kaluza ', NULL, NULL, NULL, NULL, '882-17-8835', '1984-04-22', NULL, NULL, NULL, NULL, NULL, 1, NULL, 2, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, 0, 0, 0, '2017-04-19 12:35:15', NULL, 0),
(80, 'Farah.Agia.Ramadhina', '225200', '1515476095', 'Farah Agia Ramadhina', NULL, NULL, NULL, NULL, '882-17-8836', '1985-04-26', NULL, NULL, NULL, NULL, NULL, 1, NULL, 2, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, 0, 0, 0, '2017-04-19 12:35:15', NULL, 0),
(81, 'Arfi.Renaldi', '856586', '1551043873', 'Arfi Renaldi', NULL, NULL, NULL, NULL, '882-17-8837', '1986-04-30', NULL, NULL, NULL, NULL, NULL, 1, NULL, 2, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, 0, 0, 0, '2017-04-19 12:35:15', NULL, 0),
(82, 'Faqrul.Anshurulloh', '967615', '1435052444', 'Faqrul Anshurulloh', NULL, NULL, NULL, NULL, '882-17-8838', '1987-05-04', NULL, NULL, NULL, NULL, NULL, 1, NULL, 2, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, 0, 0, 0, '2017-04-19 12:35:15', NULL, 0),
(83, 'Mutia.Khairunnisa', '179479', '1443717947', 'Mutia Khairunnisa', NULL, NULL, NULL, NULL, '882-17-8839', '1988-05-07', NULL, NULL, NULL, NULL, NULL, 1, NULL, 2, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, 0, 0, 0, '2017-04-19 12:35:15', NULL, 0),
(84, 'Farizki.Yazid', '476679', '1530042116', 'Farizki Yazid', NULL, NULL, NULL, NULL, '882-17-8840', '1989-05-11', NULL, NULL, NULL, NULL, NULL, 1, NULL, 2, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, 0, 0, 0, '2017-04-19 12:35:15', NULL, 0),
(85, 'Muhammad.Alvin.Abyan', '397864', '1560845491', 'Muhammad Alvin Abyan', NULL, NULL, NULL, NULL, '882-17-8841', '1990-05-15', NULL, NULL, NULL, NULL, NULL, 1, NULL, 2, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, 0, 0, 0, '2017-04-19 12:35:15', NULL, 0),
(86, 'Ahmad.Faqih', '366480', '1488962824', 'Ahmad Faqih', NULL, NULL, NULL, NULL, '882-17-8842', '1970-03-01', NULL, NULL, NULL, NULL, NULL, 1, NULL, 2, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, 0, 0, 0, '2017-04-19 12:35:15', NULL, 0),
(87, 'Alberto.Daulat', '589495', '1491428816', 'Alberto Daulat', NULL, NULL, NULL, NULL, '882-17-8843', '1971-03-05', NULL, NULL, NULL, NULL, NULL, 1, NULL, 2, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, 0, 0, 0, '2017-04-19 12:35:15', NULL, 0),
(88, 'Alvin.Wardhana.Utama', '861224', '1467342939', 'Alvin Wardhana Utama', NULL, NULL, NULL, NULL, '882-17-8844', '1972-03-08', NULL, NULL, NULL, NULL, NULL, 1, NULL, 2, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, 0, 0, 0, '2017-04-19 12:35:15', NULL, 0),
(89, 'Andi.Yeskafauzan', '448356', '1438448548', 'Andi Yeskafauzan', NULL, NULL, NULL, NULL, '882-17-8845', '1973-03-12', NULL, NULL, NULL, NULL, NULL, 1, NULL, 2, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, 0, 0, 0, '2017-04-19 12:35:15', NULL, 0),
(90, 'Bagaskoro.Meyca.Dwiy', '546220', '1425907432', 'Bagaskoro Meyca Dwiyananda Putra', NULL, NULL, NULL, NULL, '882-17-8846', '1974-03-16', NULL, NULL, NULL, NULL, NULL, 1, NULL, 2, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, 0, 0, 0, '2017-04-19 12:35:16', NULL, 0),
(91, 'Luthfi.Aulia.Sulaima', '984010', '1496845639', 'Luthfi Aulia Sulaiman', NULL, NULL, NULL, NULL, '882-17-8847', '1975-03-20', NULL, NULL, NULL, NULL, NULL, 1, NULL, 2, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, 0, 0, 0, '2017-04-19 12:35:16', NULL, 0),
(92, 'Muhammad.Izzan.Nurud', '294199', '1547875577', 'Muhammad Izzan Nuruddin', NULL, NULL, NULL, NULL, '882-17-8848', '1976-03-23', NULL, NULL, NULL, NULL, NULL, 1, NULL, 2, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, 0, 0, 0, '2017-04-19 12:35:16', NULL, 0);

-- --------------------------------------------------------

--
-- Table structure for table `pimpinan`
--

CREATE TABLE `pimpinan` (
  `id_pimpinan` int(11) NOT NULL,
  `isBPMA` int(11) NOT NULL,
  `isPimpinanFakultas` int(11) NOT NULL,
  `id_fakultas` varchar(50) NOT NULL,
  `isPimpinanUniv` tinyint(1) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pimpinan`
--

INSERT INTO `pimpinan` (`id_pimpinan`, `isBPMA`, `isPimpinanFakultas`, `id_fakultas`, `isPimpinanUniv`, `created_at`, `updated_at`) VALUES
(1, 1, 0, '1', 0, '2017-03-19 12:37:17', '2017-03-19 14:20:32'),
(2, 0, 1, '2', 0, '2017-03-19 12:37:17', '2017-03-19 12:48:56');

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

--
-- Dumping data for table `prestasi_dosen`
--

INSERT INTO `prestasi_dosen` (`id`, `id_dosen`, `nama`, `waktu`, `tingkat`) VALUES
(1, 1, 'Beasiswa studi lanjut dari gubernur', 2014, 'Nasional'),
(2, 2, 'Memenangkan lomba penelitian', 2014, 'Nasional'),
(3, 3, 'Mengikuti konferensi', 2014, 'Internasional'),
(4, 4, 'Beasiswa LPDP', 2014, 'Internasional'),
(5, 5, 'Mendapat gelar dosen of the year', 2015, 'Lokal'),
(6, 6, 'mendapat gelar dosen berprestasi', 2015, 'Lokal'),
(7, 7, 'Ketua organisasi dosen indonesia', 2015, 'Lokal'),
(8, 8, 'Beasiswa studi lanjut dari gubernur', 2015, 'Lokal'),
(9, 9, 'Memenangkan lomba penelitian', 2015, 'Lokal'),
(10, 10, 'Mengikuti konferensi', 2015, 'Lokal'),
(11, 11, 'Beasiswa LPDP', 2015, 'Lokal'),
(12, 12, 'Mendapat gelar dosen of the year', 2015, 'Nasional'),
(13, 13, 'mendapat gelar dosen berprestasi', 2015, 'Nasional'),
(14, 14, 'Ketua organisasi dosen indonesia', 2015, 'Nasional'),
(15, 15, 'Beasiswa studi lanjut dari gubernur', 2015, 'Nasional'),
(16, 16, 'Memenangkan lomba penelitian', 2015, 'Nasional'),
(17, 17, 'Mengikuti konferensi', 2015, 'Nasional'),
(18, 18, 'Beasiswa LPDP', 2016, 'Nasional'),
(19, 19, 'Mendapat gelar dosen of the year', 2016, 'Nasional'),
(20, 20, 'mendapat gelar dosen berprestasi', 2016, 'Nasional'),
(21, 21, 'Ketua organisasi dosen indonesia', 2016, 'Nasional'),
(22, 22, 'Beasiswa studi lanjut dari gubernur', 2016, 'Internasional'),
(23, 23, 'Memenangkan lomba penelitian', 2016, 'Internasional'),
(24, 24, 'Mengikuti konferensi', 2016, 'Internasional'),
(25, 25, 'Beasiswa LPDP', 2016, 'Internasional'),
(26, 26, 'Mendapat gelar dosen of the year', 2016, 'Internasional'),
(27, 27, 'mendapat gelar dosen berprestasi', 2016, 'Internasional'),
(28, 28, 'Ketua organisasi dosen indonesia', 2016, 'Internasional'),
(29, 29, 'Beasiswa studi lanjut dari gubernur', 2016, 'Internasional'),
(30, 30, 'Memenangkan lomba penelitian', 2017, 'Lokal'),
(31, 31, 'Mengikuti konferensi', 2017, 'Lokal'),
(32, 32, 'Beasiswa LPDP', 2017, 'Lokal'),
(33, 33, 'Mendapat gelar dosen of the year', 2017, 'Lokal'),
(34, 34, 'mendapat gelar dosen berprestasi', 2017, 'Lokal'),
(35, 35, 'Ketua organisasi dosen indonesia', 2017, 'Lokal');

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
-- Table structure for table `program_tugas_dosen`
--

CREATE TABLE `program_tugas_dosen` (
  `id_program` int(11) NOT NULL,
  `id_dosen` int(11) NOT NULL,
  `jenjang_lanjut` varchar(30) NOT NULL,
  `bidang_studi` varchar(30) NOT NULL,
  `perguruan_tinggi` varchar(100) NOT NULL,
  `negara` varchar(100) NOT NULL,
  `tahun_mulai` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `program_tugas_dosen`
--

INSERT INTO `program_tugas_dosen` (`id_program`, `id_dosen`, `jenjang_lanjut`, `bidang_studi`, `perguruan_tinggi`, `negara`, `tahun_mulai`) VALUES
(1, 13, 'S3', 'Teknologi Informasi', 'Universitas Indonesia', 'Indonesia', '2014'),
(2, 14, 'S3', 'Manajemen', 'MIT', 'USA', '2015'),
(3, 15, 'S3', 'Teknologi Informasi', 'Universitas Indonesia', 'Indonesia', '2015'),
(4, 16, 'S3', 'Manajemen', 'Universitas Indonesia', 'Indonesia', '2016'),
(5, 17, 'S3', 'Teknologi Informasi', 'Universitas Indonesia', 'Indonesia', '2017'),
(6, 18, 'S3', 'Manajemen', 'Universitas Indonesia', 'Indonesia', '2017'),
(7, 19, 'S3', 'Sistem Informasi', 'Universitas Indonesia', 'Indonesia', '2015'),
(8, 20, 'S3', 'Teknologi Informasi', 'MIT', 'USA', '2015'),
(9, 21, 'S3', 'Manajemen', 'Oxford', 'UK', '2016'),
(10, 22, 'S3', 'Sistem Informasi', 'Universitas Indonesia', 'Indonesia', '2015'),
(11, 23, 'S3', 'Ilmu Komputer', 'MIT', 'USA', '2016'),
(12, 24, 'S3', 'Teknologi Informasi', 'Universitas Indonesia', 'Indonesia', '2017'),
(13, 25, 'S3', 'Manajemen', 'MIT', 'USA', '2015'),
(14, 26, 'S3', 'Teknologi Informasi', 'Oxford', 'UK', '2016'),
(15, 27, 'S3', 'Teknologi Informasi', 'ITB', 'Indonesia', '2017'),
(16, 28, 'S3', 'Teknologi Informasi', 'Universitas Indonesia', 'Indonesia', '2015'),
(17, 29, 'S3', 'Manajemen', 'Universitas Indonesia', 'Indonesia', '2016'),
(18, 30, 'S3', 'Sistem Informasi', 'MIT', 'USA', '2017'),
(19, 31, 'S3', 'Teknologi Informasi', 'Universitas Indonesia', 'Indonesia', '2017'),
(20, 32, 'S3', 'Manajemen', 'MIT', 'USA', '2015'),
(21, 33, 'S3', 'Sistem Informasi', 'Oxford', 'UK', '2016');

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
  `flag_aktif` tinyint(1) NOT NULL,
  `rencana_pengajaran` int(11) NOT NULL,
  `realisasi_pengajaran` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `rincian_kinerja_pengajaran`
--

INSERT INTO `rincian_kinerja_pengajaran` (`id_rincian_kinerja_pengajaran`, `kode_mata_kuliah`, `sks_matkul`, `term`, `periode_pendidikan`, `flag_aktif`, `rencana_pengajaran`, `realisasi_pengajaran`) VALUES
(1, 'UUI11001', 6, '1', '2016', 1, 0, 0),
(2, 'UUI11002', 6, '1', '2016', 1, 0, 0),
(3, 'UUI12020', 2, '1', '2016', 1, 0, 0),
(4, 'UUI11010', 3, '1', '2016', 1, 0, 0),
(5, 'UUI12030', 1, '1', '2016', 1, 0, 0),
(6, 'MAT10113', 2, '1', '2016', 1, 0, 0),
(7, 'FSK10111', 3, '1', '2016', 1, 0, 0),
(8, 'IKI10100', 3, '1', '2016', 1, 0, 0),
(9, 'IKI10200', 6, '1', '2016', 1, 0, 0),
(10, 'IKI10400', 4, '1', '2016', 1, 0, 0),
(11, 'IKI10103', 3, '1', '2016', 1, 0, 0),
(12, 'IKI20101', 3, '1', '2016', 1, 0, 0),
(13, 'IKI20102', 4, '1', '2016', 1, 0, 0),
(14, 'IKI20201', 3, '1', '2016', 1, 0, 0),
(15, 'IKI20505', 4, '1', '2016', 1, 0, 0),
(16, 'IKI20700', 4, '1', '2016', 1, 0, 0),
(17, 'IKI30202', 3, '1', '2016', 1, 0, 0),
(18, 'IKI40902', 3, '1', '2016', 1, 0, 0),
(19, 'IKI40903', 3, '1', '2016', 1, 0, 0),
(20, 'IKO12108', 3, '1', '2016', 1, 0, 0),
(21, 'IKO12500', 4, '1', '2016', 1, 0, 0),
(22, 'IKO21502', 3, '1', '2016', 1, 0, 0),
(23, 'IKO21105', 4, '1', '2016', 1, 0, 0),
(24, 'IKO22401', 4, '1', '2016', 1, 0, 0),
(25, 'IKO22203', 3, '1', '2016', 1, 0, 0),
(26, 'IKO31204', 3, '1', '2016', 1, 0, 0),
(27, 'IKO31300', 4, '1', '2016', 1, 0, 0),
(28, 'IKO31900', 2, '1', '2016', 1, 0, 0),
(29, 'IKO31503', 4, '1', '2016', 1, 0, 0),
(30, 'IKO32104', 3, '1', '2016', 1, 0, 0),
(31, 'IKO32402', 4, '1', '2016', 1, 0, 0),
(32, 'IKO32205', 6, '1', '2016', 1, 0, 0),
(33, 'IKO31258', 4, '1', '2016', 1, 0, 0),
(34, 'IKO31550', 3, '1', '2016', 1, 0, 0),
(35, 'IKO31551', 3, '1', '2016', 1, 0, 0),
(36, 'IKO32150', 3, '1', '2016', 1, 0, 0),
(37, 'IKO32257', 4, '1', '2016', 1, 0, 0),
(38, 'IKO32453', 4, '1', '2016', 1, 0, 0),
(39, 'IKO32751', 3, '1', '2016', 1, 0, 0),
(40, 'IKO41151', 3, '1', '2016', 1, 0, 0),
(41, 'IKO41554', 3, '1', '2016', 1, 0, 0),
(42, 'IKO41557', 3, '1', '2016', 1, 0, 0),
(43, 'IKO42360', 3, '1', '2016', 1, 0, 0),
(44, 'IKO42553', 3, '1', '2016', 1, 0, 0),
(45, 'IKO42555', 3, '1', '2016', 1, 0, 0),
(46, 'IKI40999', 6, '1', '2016', 1, 0, 0),
(47, 'IKI40990', 4, '1', '2016', 1, 0, 0),
(48, 'FSK10112', 3, '1', '2016', 1, 0, 0),
(49, 'IKI10101', 4, '1', '2016', 1, 0, 0),
(50, 'IKO12107', 4, '1', '2016', 1, 0, 0),
(51, 'IKO12501', 4, '1', '2016', 1, 0, 0),
(52, 'UUI12027', 3, '1', '2016', 1, 0, 0),
(53, 'IKI20105', 3, '1', '2016', 1, 0, 0),
(54, 'IKI20106', 4, '1', '2016', 1, 0, 0),
(55, 'IKI30203', 4, '1', '2016', 1, 0, 0),
(56, 'IKO12106', 3, '1', '2016', 1, 0, 0),
(57, 'IKO12502', 3, '1', '2016', 1, 0, 0),
(58, 'IKO21106', 3, '1', '2016', 1, 0, 0),
(59, 'IKO22402', 3, '1', '2016', 1, 0, 0),
(60, 'IKO22204', 3, '2', '2016', 1, 0, 0),
(61, 'IKO31204', 4, '2', '2016', 1, 0, 0),
(62, 'IKO31300', 3, '2', '2016', 1, 0, 0),
(63, 'IKO31900', 3, '2', '2016', 1, 0, 0),
(64, 'IKO31503', 3, '2', '2016', 1, 0, 0),
(65, 'IKO32104', 3, '2', '2016', 1, 0, 0),
(66, 'IKO32206', 6, '2', '2016', 1, 0, 0),
(67, 'IKO31554', 3, '2', '2016', 1, 0, 0),
(68, 'IKO31555', 3, '2', '2016', 1, 0, 0),
(69, 'IKO32257', 3, '2', '2016', 1, 0, 0),
(70, 'IKO41151', 3, '2', '2016', 1, 0, 0),
(71, 'IKO41557', 3, '2', '2016', 1, 0, 0),
(72, 'IKO42553', 3, '2', '2016', 1, 0, 0),
(73, 'IKO42555', 3, '2', '2016', 1, 0, 0),
(74, 'IKO31250', 6, '2', '2016', 1, 0, 0),
(75, 'IKO31754', 3, '2', '2016', 1, 0, 0),
(76, 'IKO32257', 4, '2', '2016', 1, 0, 0),
(77, 'IKO41854', 4, '2', '2016', 1, 0, 0),
(78, 'IKO42359', 4, '2', '2016', 1, 0, 0),
(79, 'IKO31350', 3, '2', '2016', 1, 0, 0),
(80, 'IKO31355', 3, '2', '2016', 1, 0, 0),
(81, 'IKO32353', 3, '2', '2016', 1, 0, 0),
(82, 'IKO32354', 3, '2', '2016', 1, 0, 0),
(83, 'IKO41153', 3, '2', '2016', 1, 0, 0),
(84, 'IKO41154', 3, '2', '2016', 1, 0, 0),
(85, 'IKO41352', 3, '2', '2016', 1, 0, 0),
(86, 'IKO41361', 3, '2', '2016', 1, 0, 0),
(87, 'IKO41454', 3, '2', '2016', 1, 0, 0),
(88, 'IKO42351', 3, '2', '2016', 1, 0, 0),
(89, 'IKO42358', 3, '2', '2016', 1, 0, 0),
(90, 'CSCM601252', 3, '2', '2016', 1, 0, 0),
(91, 'CSCM603228', 6, '2', '2016', 1, 0, 0),
(92, 'IKS12800', 3, '2', '2016', 1, 0, 0),
(93, 'IKS12600', 3, '2', '2016', 1, 0, 0),
(94, 'IKS21501', 3, '2', '2016', 1, 0, 0),
(95, 'IKS21601', 3, '2', '2016', 1, 0, 0),
(96, 'IKS22602', 6, '2', '2016', 1, 0, 0),
(97, 'IKS22403', 3, '2', '2016', 1, 0, 0),
(98, 'IKS31603', 4, '2', '2016', 1, 0, 0),
(99, 'IKS31604', 4, '2', '2016', 1, 0, 0),
(100, 'IKS31605', 4, '2', '2016', 1, 0, 0),
(101, 'IKS31504', 3, '1', '2016', 1, 0, 0),
(102, 'IKS32606', 3, '1', '2016', 1, 0, 0),
(103, 'IKS32901', 3, '1', '2016', 1, 0, 0),
(104, 'IKS32206', 6, '1', '2016', 1, 0, 0),
(105, 'IKS32753', 3, '1', '2016', 1, 0, 0),
(106, 'IKS32756', 3, '1', '2016', 1, 0, 0),
(107, 'IKS32758', 3, '1', '2016', 1, 0, 0),
(108, 'IKS41757', 3, '1', '2016', 1, 0, 0),
(109, 'IKS41759', 3, '1', '2016', 1, 0, 0),
(110, 'IKS41851', 6, '1', '2016', 1, 0, 0),
(111, 'IKS41852', 3, '1', '2016', 1, 0, 0),
(112, 'IKS42260', 4, '1', '2016', 1, 0, 0),
(113, 'IKS42651', 4, '1', '2016', 1, 0, 0),
(114, 'IKS42760', 4, '1', '2016', 1, 0, 0),
(115, 'IKS42950', 3, '1', '2016', 1, 0, 0),
(116, 'IKS31259', 3, '1', '2016', 1, 0, 0),
(117, 'IKS40652', 3, '1', '2016', 1, 0, 0),
(118, 'IKS31650', 3, '1', '2016', 1, 0, 0),
(119, 'IKS31951', 3, '1', '2016', 1, 0, 0),
(120, 'IKS32656', 3, '1', '2016', 1, 0, 0),
(121, 'IKS32855', 3, '1', '2016', 1, 0, 0),
(122, 'IKS41653', 3, '1', '2016', 1, 0, 0),
(123, 'IKS41850', 3, '1', '2016', 1, 0, 0),
(124, 'IKS41852', 3, '1', '2016', 1, 0, 0),
(125, 'IKS42655', 3, '1', '2016', 1, 0, 0),
(126, 'IKS42755', 3, '1', '2016', 1, 0, 0),
(127, 'UIGE600002', 3, '1', '2016', 1, 0, 0),
(128, 'UIGE600001', 6, '1', '2016', 1, 0, 0),
(129, 'UIGE60001', 2, '1', '2016', 1, 0, 0),
(130, 'UIGE600003', 4, '1', '2016', 1, 0, 0),
(131, 'UIGE60004', 4, '1', '2016', 1, 0, 0),
(132, 'UIST601014', 4, '1', '2016', 1, 0, 0),
(133, 'UIST601111', 3, '1', '2016', 1, 0, 0),
(134, 'CSGE601010', 3, '1', '2016', 1, 0, 0),
(135, 'CSGE601020', 3, '1', '2016', 1, 0, 0),
(136, 'CSGE601011', 3, '1', '2016', 1, 0, 0),
(137, 'CSGE601021', 3, '1', '2016', 1, 0, 0),
(138, 'CSGE602012', 3, '1', '2016', 1, 0, 0),
(139, 'CSGE602022', 3, '1', '2016', 1, 0, 0),
(140, 'CSGE602040', 3, '1', '2016', 1, 0, 0),
(141, 'CSGE602013', 3, '1', '2016', 1, 0, 0),
(142, 'CSGE602055', 3, '1', '2016', 1, 0, 0),
(143, 'CSGE602070', 6, '1', '2016', 1, 0, 0),
(144, 'CSGE603291', 3, '1', '2016', 1, 0, 0),
(145, 'CSGE604098', 4, '1', '2016', 1, 0, 0),
(146, 'CSGE614093', 4, '1', '2016', 1, 0, 0),
(147, 'CSIM601280', 4, '1', '2016', 1, 0, 0),
(148, 'CSIM601251', 3, '1', '2016', 1, 0, 0),
(149, 'CSIM602160', 3, '1', '2016', 1, 0, 0),
(150, 'CSIM602161', 3, '1', '2016', 1, 0, 0),
(151, 'CSIM602262', 3, '1', '2016', 1, 0, 0),
(152, 'CSIM602266', 3, '1', '2016', 1, 0, 0),
(153, 'CSIM603124', 3, '1', '2016', 1, 0, 0),
(154, 'CSIM603183', 3, '1', '2016', 1, 0, 0),
(155, 'CSIM603026', 3, '1', '2016', 1, 0, 0),
(156, 'CSIM603189', 3, '1', '2016', 1, 0, 0),
(157, 'CSIM603154', 3, '1', '2016', 1, 0, 0),
(158, 'CSIM603229', 6, '1', '2016', 1, 0, 0),
(159, 'CSIM603291', 3, '1', '2016', 1, 0, 0),
(160, 'CSIM603216', 3, '1', '2016', 1, 0, 0),
(161, 'CSIM604182', 3, '1', '2016', 1, 0, 0),
(162, 'CSCE604174', 3, '1', '2016', 1, 0, 0),
(163, 'CSIE604378', 3, '1', '2016', 1, 0, 0),
(164, 'CSIE604274', 3, '1', '2016', 1, 0, 0),
(165, 'CSIE604276', 6, '1', '2016', 1, 0, 0),
(166, 'CSIE604290', 3, '1', '2016', 1, 0, 0),
(167, 'CSCE604179', 4, '1', '2016', 1, 0, 0),
(168, 'CSIE604177', 4, '1', '2016', 1, 0, 0),
(169, 'CSIE604224', 4, '1', '2016', 1, 0, 0),
(170, 'CSIE604275', 3, '1', '2016', 1, 0, 0),
(171, 'CSIE604181', 3, '1', '2016', 1, 0, 0),
(172, 'CSIE604270', 3, '1', '2016', 1, 0, 0),
(173, 'CSIE604160', 3, '1', '2016', 1, 0, 0),
(174, 'CSIE604161', 3, '1', '2016', 1, 0, 0),
(175, 'CSIE604266', 3, '1', '2016', 1, 0, 0),
(176, 'CSIE604180', 3, '1', '2016', 1, 0, 0),
(177, 'CSIE604284', 3, '1', '2016', 1, 0, 0),
(178, 'CSIE604271', 3, '1', '2016', 1, 0, 0),
(179, 'CSIE604273', 3, '1', '2016', 1, 0, 0),
(180, 'CSIE604285', 3, '1', '2016', 1, 0, 0),
(181, 'CSIE604163', 3, '1', '2016', 1, 0, 0),
(182, 'CSIE604165', 3, '1', '2016', 1, 0, 0),
(183, 'CSIE604265', 3, '1', '2016', 1, 0, 0),
(184, 'UUI11003', 6, '1', '2016', 1, 0, 0),
(185, 'UUI11004', 6, '1', '2016', 1, 0, 0),
(186, 'UUI12029', 2, '1', '2016', 1, 0, 0),
(187, 'UUI11011', 3, '1', '2016', 1, 0, 0),
(188, 'UUI12032', 1, '1', '2016', 1, 0, 0),
(189, 'MAT10114', 2, '1', '2016', 1, 0, 0),
(190, 'FSK10113', 3, '1', '2016', 1, 0, 0),
(191, 'IKI10104', 3, '1', '2016', 1, 0, 0),
(192, 'IKI10201', 6, '1', '2016', 1, 0, 0),
(193, 'UUI12021', 2, '1', '2016', 1, 0, 0),
(194, 'UUI12022', 2, '1', '2016', 1, 0, 0),
(195, 'UUI12023', 2, '1', '2016', 1, 0, 0),
(196, 'UUI12024', 2, '1', '2016', 1, 0, 0),
(197, 'UUI12028', 2, '1', '2016', 1, 0, 0),
(198, 'UUI12025', 2, '1', '2016', 1, 0, 0),
(199, 'UUI12016', 2, '1', '2016', 1, 0, 0),
(200, 'UUI12027', 2, '1', '2016', 1, 0, 0),
(201, 'UUI12029', 2, '1', '2016', 1, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `riwayat_pendidikan`
--

CREATE TABLE `riwayat_pendidikan` (
  `id_riwayat_pendidikan` int(11) NOT NULL,
  `id_pegawai` bigint(20) NOT NULL,
  `riwayat_pendidikan` varchar(50) NOT NULL,
  `instansi_pendidikan` varchar(40) NOT NULL,
  `gelar_pendidikan` varchar(10) NOT NULL,
  `flag_aktif` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `riwayat_pendidikan`
--

INSERT INTO `riwayat_pendidikan` (`id_riwayat_pendidikan`, `id_pegawai`, `riwayat_pendidikan`, `instansi_pendidikan`, `gelar_pendidikan`, `flag_aktif`) VALUES
(1, 2, 'S1', 'Universitas Indonesia', 'S. Kom', 1),
(2, 3, 'S1', 'Institut Teknologi Bandung', 'S.T', 1),
(3, 1, 'S1', 'Massachusetts Institute of Technology', 'S. Kom', 1),
(4, 5, 'S1', 'Universitas Indonesia', 'S. Kom', 1),
(5, 3, 'S2', 'Universitas Indonesia', 'M. Kom', 1),
(6, 6, 'S1', 'Universitas Negeri Jakarta', 'S.T', 1),
(7, 9, 'S1', 'Universitas Indonesia', 'S. Hum', 1),
(8, 4, 'S1', 'Universitas Negeri Jakarta', 'S. Kom', 1),
(9, 7, 'S1', 'Universitas Indonesia', 'S.T', 1),
(10, 9, 'S1', 'Universitas Indonesia', 'S. Kom', 1),
(11, 12, 'S1', 'Institut Teknologi Sepuluh November', 'S. Kom', 1),
(12, 4, 'S2', 'Universitas Indonesia', 'M. Kom', 1),
(13, 9, 'S2', 'Institut Teknologi Sepuluh November', 'S.T', 1),
(14, 14, 'S1', 'Universitas Indonesia', 'S. Hum', 1),
(15, 14, 'S2', 'Institut Teknologi Bandung', 'M.T', 1),
(16, 14, 'S3', 'Massachusetts Institute of Technology', 'PhD', 1),
(17, 15, 'D4', 'Universitas Indonesia', 'S. Kom', 1),
(18, 16, 'D3', 'Universitas Indonesia', 'M. Kom', 1),
(19, 17, 'D2', 'Universitas Negeri Jakarta', 'S.T', 1),
(20, 18, 'D1', 'Universitas Indonesia', 'S. Hum', 1),
(21, 19, 'SMA/SMK', 'SMAN 1 Depok', 'NULL', 1),
(22, 20, 'S1', 'Universitas Indonesia', 'S.T', 1),
(23, 21, 'S1', 'Universitas Indonesia', 'S. Kom', 1),
(24, 24, 'D4', 'Institut Teknologi Sepuluh November', 'S. Kom', 1),
(25, 25, 'D3', 'Universitas Indonesia', 'M. Kom', 1),
(26, 26, 'D2', 'Institut Teknologi Sepuluh November', 'S.T', 1),
(27, 27, 'D1', 'Universitas Indonesia', 'S. Hum', 1),
(28, 28, 'SMA/SMK', 'SMAN 28 Jakarta', 'NULL', 1),
(29, 22, 'S1', 'Massachusetts Institute of Technology', 'S.T', 1),
(30, 23, 'S1', 'Universitas Indonesia', 'S. Kom', 1),
(31, 31, 'D4', 'Universitas Indonesia', 'S. Kom', 1),
(32, 32, 'D3', 'Universitas Negeri Jakarta', 'M. Kom', 1),
(33, 33, 'D2', 'Universitas Indonesia', 'S.T', 1),
(34, 34, 'D1', 'Universitas Negeri Jakarta', 'S. Hum', 1),
(35, 35, 'SMA/SMK', 'SMAN 8 Jakarta', 'NULL', 1),
(36, 36, 'S1', 'Universitas Indonesia', 'S.T', 1),
(37, 37, 'S1', 'Institut Teknologi Sepuluh November', 'S. Kom', 1),
(38, 38, 'D4', 'Universitas Indonesia', 'S. Kom', 1),
(39, 39, 'D3', 'Institut Teknologi Sepuluh November', 'M. Kom', 1),
(40, 40, 'D2', 'Universitas Indonesia', 'S.T', 1),
(41, 41, 'D1', 'Institut Teknologi Bandung', 'S. Hum', 1),
(42, 42, 'SMA/SMK', 'SMKN 57 Jakarta', 'NULL', 1),
(43, 43, 'S2', 'Universitas Indonesia', 'S.Ikom', 1),
(44, 44, 'S3', 'Universitas Indonesia', 'S.Ked', 1),
(45, 45, 'D4', 'Universitas Negeri Jakarta', 'S.Psi', 1),
(46, 46, 'D3', 'Universitas Indonesia', 'M. Kom', 1),
(47, 47, 'D2', 'Universitas Negeri Jakarta', 'S.T', 1),
(48, 48, 'D1', 'Universitas Indonesia', 'S. Hum', 1),
(49, 49, 'SMA/SMK', 'SMAN 1 Depok', 'NULL', 1),
(50, 50, 'S1', 'Institut Teknologi Sepuluh November', 'S.Ikom', 1),
(51, 51, 'S1', 'Universitas Indonesia', 'S.Ked', 1),
(52, 52, 'D4', 'Institut Teknologi Sepuluh November', 'S.Psi', 1),
(53, 53, 'D3', 'Universitas Indonesia', 'M. Kom', 1),
(54, 54, 'D2', 'Institut Teknologi Bandung', 'S.T', 1),
(55, 55, 'D1', 'Massachusetts Institute of Technology', 'S. Hum', 1),
(56, 56, 'SMA/SMK', 'SMAN 3 Depok', 'NULL', 1),
(57, 57, 'S1', 'Universitas Indonesia', 'S.Ikom', 1),
(58, 58, 'S1', 'Universitas Negeri Jakarta', 'S.Ked', 1),
(59, 59, 'D4', 'Universitas Indonesia', 'S.Psi', 1),
(60, 29, 'S1', 'Universitas Indonesia', 'S.Ikom', 1),
(61, 30, 'S1', 'Universitas Negeri Jakarta', 'S.Ked', 1);

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

--
-- Dumping data for table `sesi`
--

INSERT INTO `sesi` (`id_kelas_mk`, `id_mk`, `tahun`, `semester`, `tanggal`, `status_pengganti`, `deskripsi`, `absen_dosen`, `ruangan`, `komentar`) VALUES
('1', 'IKI10100', '2016', '1', '0000-00-00', 1, 'NULL', 'NULL', 'NULL', 'NULL'),
('10', 'IKI10200', '2016', '1', '0000-00-00', 0, 'NULL', 'NULL', 'NULL', 'NULL'),
('11', 'IKS12800', '2016', '2', '0000-00-00', 0, 'NULL', 'NULL', 'NULL', 'NULL'),
('12', 'IKS12800', '2016', '1', '0000-00-00', 0, 'NULL', 'NULL', 'NULL', 'NULL'),
('13', 'IKS12800', '2016', '1', '0000-00-00', 0, 'NULL', 'NULL', 'NULL', 'NULL'),
('14', 'IKS12600', '2016', '2', '0000-00-00', 0, 'NULL', 'NULL', 'NULL', 'NULL'),
('15', 'IKS12600', '2016', '2', '0000-00-00', 0, 'NULL', 'NULL', 'NULL', 'NULL'),
('16', 'IKS12600', '2016', '2', '0000-00-00', 0, 'NULL', 'NULL', 'NULL', 'NULL'),
('17', 'IKS21501', '2016', '1', '0000-00-00', 0, 'NULL', 'NULL', 'NULL', 'NULL'),
('18', 'IKS21501', '2016', '1', '0000-00-00', 0, 'NULL', 'NULL', 'NULL', 'NULL'),
('19', 'IKS21501', '2016', '1', '0000-00-00', 0, 'NULL', 'NULL', 'NULL', 'NULL'),
('2', 'IKI10100', '2016', '2', '0000-00-00', 0, 'NULL', 'NULL', 'NULL', 'NULL'),
('20', 'IKS21601', '2016', '2', '0000-00-00', 0, 'NULL', 'NULL', 'NULL', 'NULL'),
('21', 'IKS21601', '2016', '1', '0000-00-00', 0, 'NULL', 'NULL', 'NULL', 'NULL'),
('22', 'IKS21601', '2016', '2', '0000-00-00', 0, 'NULL', 'NULL', 'NULL', 'NULL'),
('23', 'IKO21502', '2016', '1', '0000-00-00', 0, 'NULL', 'NULL', 'NULL', 'NULL'),
('24', 'IKO21502', '2016', '2', '0000-00-00', 0, 'NULL', 'NULL', 'NULL', 'NULL'),
('25', 'IKO21502', '2016', '2', '0000-00-00', 0, 'NULL', 'NULL', 'NULL', 'NULL'),
('26', 'IKS22602', '2016', '1', '0000-00-00', 0, 'NULL', 'NULL', 'NULL', 'NULL'),
('27', 'IKS22602', '2016', '2', '0000-00-00', 0, 'NULL', 'NULL', 'NULL', 'NULL'),
('28', 'IKS22602', '2016', '2', '0000-00-00', 0, 'NULL', 'NULL', 'NULL', 'NULL'),
('29', 'IKS32606', '2016', '2', '0000-00-00', 0, 'NULL', 'NULL', 'NULL', 'NULL'),
('3', 'IKI10100', '2016', '1', '0000-00-00', 1, 'NULL', 'NULL', 'NULL', 'NULL'),
('30', 'IKS32606', '2016', '2', '0000-00-00', 0, 'NULL', 'NULL', 'NULL', 'NULL'),
('31', 'IKS32606', '2016', '1', '0000-00-00', 0, 'NULL', 'NULL', 'NULL', 'NULL'),
('32', 'IKS32206', '2016', '1', '0000-00-00', 0, 'NULL', 'NULL', 'NULL', 'NULL'),
('33', 'IKS32206', '2016', '1', '0000-00-00', 0, 'NULL', 'NULL', 'NULL', 'NULL'),
('34', 'IKS32206', '2016', '1', '0000-00-00', 0, 'NULL', 'NULL', 'NULL', 'NULL'),
('35', 'IKO32205', '2016', '1', '0000-00-00', 0, 'NULL', 'NULL', 'NULL', 'NULL'),
('36', 'IKO32205', '2016', '1', '0000-00-00', 0, 'NULL', 'NULL', 'NULL', 'NULL'),
('37', 'IKO32205', '2016', '1', '0000-00-00', 0, 'NULL', 'NULL', 'NULL', 'NULL'),
('38', 'IKO12500', '2016', '1', '0000-00-00', 0, 'NULL', 'NULL', 'NULL', 'NULL'),
('39', 'IKO12500', '2016', '1', '0000-00-00', 0, 'NULL', 'NULL', 'NULL', 'NULL'),
('4', 'IKI10100', '2016', '2', '0000-00-00', 0, 'NULL', 'NULL', 'NULL', 'NULL'),
('40', 'IKO12500', '2016', '1', '0000-00-00', 0, 'NULL', 'NULL', 'NULL', 'NULL'),
('41', 'IKS31603', '2016', '1', '0000-00-00', 0, 'NULL', 'NULL', 'NULL', 'NULL'),
('42', 'IKS31603', '2016', '1', '0000-00-00', 0, 'NULL', 'NULL', 'NULL', 'NULL'),
('43', 'IKS31603', '2016', '1', '0000-00-00', 0, 'NULL', 'NULL', 'NULL', 'NULL'),
('44', 'IKO21105', '2016', '1', '0000-00-00', 0, 'NULL', 'NULL', 'NULL', 'NULL'),
('45', 'IKO21105', '2016', '1', '0000-00-00', 0, 'NULL', 'NULL', 'NULL', 'NULL'),
('46', 'IKO21105', '2016', '1', '0000-00-00', 0, 'NULL', 'NULL', 'NULL', 'NULL'),
('47', 'IKS31604', '2016', '1', '0000-00-00', 0, 'NULL', 'NULL', 'NULL', 'NULL'),
('48', 'IKS31604', '2016', '1', '0000-00-00', 0, 'NULL', 'NULL', 'NULL', 'NULL'),
('49', 'IKS31604', '2016', '1', '0000-00-00', 0, 'NULL', 'NULL', 'NULL', 'NULL'),
('5', 'IKI10100', '2016', '1', '0000-00-00', 1, 'NULL', 'NULL', 'NULL', 'NULL'),
('50', 'IKO22401', '2016', '2', '0000-00-00', 0, 'NULL', 'NULL', 'NULL', 'NULL'),
('51', 'IKO22401', '2016', '2', '0000-00-00', 0, 'NULL', 'NULL', 'NULL', 'NULL'),
('52', 'IKO22401', '2016', '2', '0000-00-00', 0, 'NULL', 'NULL', 'NULL', 'NULL'),
('53', 'IKS31605', '2016', '2', '0000-00-00', 0, 'NULL', 'NULL', 'NULL', 'NULL'),
('54', 'IKS31605', '2016', '2', '0000-00-00', 0, 'NULL', 'NULL', 'NULL', 'NULL'),
('55', 'IKS31605', '2016', '2', '0000-00-00', 0, 'NULL', 'NULL', 'NULL', 'NULL'),
('56', 'IKO31503', '2016', '2', '0000-00-00', 0, 'NULL', 'NULL', 'NULL', 'NULL'),
('57', 'IKO31503', '2016', '2', '0000-00-00', 0, 'NULL', 'NULL', 'NULL', 'NULL'),
('58', 'IKO31503', '2016', '2', '0000-00-00', 0, 'NULL', 'NULL', 'NULL', 'NULL'),
('59', 'IKO32104', '2016', '2', '0000-00-00', 0, 'NULL', 'NULL', 'NULL', 'NULL'),
('6', 'IKI10200', '2016', '2', '0000-00-00', 0, 'NULL', 'NULL', 'NULL', 'NULL'),
('60', 'IKO32104', '2016', '2', '0000-00-00', 0, 'NULL', 'NULL', 'NULL', 'NULL'),
('61', 'IKO32104', '2016', '2', '0000-00-00', 0, 'NULL', 'NULL', 'NULL', 'NULL'),
('62', 'IKO32402', '2016', '2', '0000-00-00', 0, 'NULL', 'NULL', 'NULL', 'NULL'),
('63', 'IKO32402', '2016', '2', '0000-00-00', 0, 'NULL', 'NULL', 'NULL', 'NULL'),
('64', 'IKO32402', '2016', '2', '0000-00-00', 0, 'NULL', 'NULL', 'NULL', 'NULL'),
('7', 'IKI10200', '2016', '1', '0000-00-00', 1, 'NULL', 'NULL', 'NULL', 'NULL'),
('8', 'IKI10200', '2016', '2', '0000-00-00', 0, 'NULL', 'NULL', 'NULL', 'NULL'),
('9', 'IKI10200', '2016', '1', '0000-00-00', 0, 'NULL', 'NULL', 'NULL', 'NULL');

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
  `id_pegawai` bigint(20) NOT NULL,
  `id_prodi` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tendik`
--

INSERT INTO `tendik` (`id_tendik`, `id_kinerja_tendik`, `id_remunerasi_tendik`, `flag_aktif`, `id_jenis_tendik`, `id_role`, `id_pegawai`, `id_prodi`) VALUES
(1, 0, 0, 1, 2, 0, 14, '1'),
(2, 0, 0, 1, 3, 0, 15, '2'),
(3, 0, 0, 1, 5, 0, 16, '2'),
(4, 0, 0, 1, 7, 0, 17, '1'),
(5, 0, 0, 1, 1, 0, 18, '2'),
(6, 0, 0, 1, 3, 0, 19, '1'),
(7, 0, 0, 1, 6, 0, 20, '1'),
(8, 0, 0, 1, 7, 0, 21, '1'),
(9, 0, 0, 1, 1, 0, 22, '1'),
(10, 0, 0, 1, 7, 0, 23, '1'),
(11, 0, 0, 1, 3, 0, 24, '2'),
(12, 0, 0, 1, 2, 0, 25, '2'),
(13, 0, 0, 1, 5, 0, 26, '2'),
(14, 0, 0, 1, 5, 0, 27, '2'),
(15, 0, 0, 1, 6, 0, 28, '2'),
(16, 0, 0, 1, 5, 0, 29, '2'),
(17, 0, 0, 1, 7, 0, 30, '2'),
(18, 0, 0, 1, 7, 0, 31, '2'),
(19, 0, 0, 1, 4, 0, 32, '1'),
(20, 0, 0, 1, 7, 0, 33, '1'),
(21, 0, 0, 1, 1, 0, 34, '1'),
(22, 0, 0, 1, 2, 0, 35, '1'),
(23, 0, 0, 1, 6, 0, 36, '1'),
(24, 0, 0, 1, 1, 0, 37, '1'),
(25, 0, 0, 1, 5, 0, 38, '2'),
(26, 0, 0, 1, 5, 0, 39, '2'),
(27, 0, 0, 1, 7, 0, 40, '2'),
(28, 0, 0, 1, 7, 0, 41, '1'),
(29, 0, 0, 1, 3, 0, 42, '2'),
(30, 0, 0, 1, 4, 0, 43, '1'),
(31, 0, 0, 1, 7, 0, 44, '2'),
(32, 0, 0, 1, 7, 0, 45, '1'),
(33, 0, 0, 1, 4, 0, 46, '2'),
(34, 0, 0, 1, 3, 0, 47, '1'),
(35, 0, 0, 1, 4, 0, 48, '1'),
(36, 0, 0, 1, 2, 0, 49, '2'),
(37, 0, 0, 1, 3, 0, 50, '1'),
(38, 0, 0, 1, 6, 0, 51, '1'),
(39, 0, 0, 1, 5, 0, 52, '2'),
(40, 0, 0, 1, 5, 0, 53, '1'),
(41, 0, 0, 1, 6, 0, 54, '1'),
(42, 0, 0, 1, 2, 0, 55, '2'),
(43, 0, 0, 1, 4, 0, 56, '1'),
(44, 0, 0, 1, 2, 0, 57, '2'),
(45, 0, 0, 1, 1, 0, 58, '1'),
(46, 0, 0, 1, 7, 0, 59, '1');

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
-- Indexes for table `jabatan_struktural`
--
ALTER TABLE `jabatan_struktural`
  ADD PRIMARY KEY (`id`);

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
-- Indexes for table `komentar`
--
ALTER TABLE `komentar`
  ADD PRIMARY KEY (`id`);

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
-- Indexes for table `program_tugas_dosen`
--
ALTER TABLE `program_tugas_dosen`
  ADD PRIMARY KEY (`id_program`),
  ADD KEY `id_dosen` (`id_dosen`);

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
  ADD KEY `id_dosen` (`id_pegawai`);

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
  ADD PRIMARY KEY (`id_tendik`),
  ADD KEY `id_jenis_tendik` (`id_jenis_tendik`),
  ADD KEY `id_pegawai` (`id_pegawai`),
  ADD KEY `id_prodi` (`id_prodi`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `dosen`
--
ALTER TABLE `dosen`
  MODIFY `id_dosen` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;
--
-- AUTO_INCREMENT for table `evaluasi_dana_akhir`
--
ALTER TABLE `evaluasi_dana_akhir`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;
--
-- AUTO_INCREMENT for table `histori_akreditasi`
--
ALTER TABLE `histori_akreditasi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `jabatan_struktural`
--
ALTER TABLE `jabatan_struktural`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `jenis_luaran`
--
ALTER TABLE `jenis_luaran`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `jenis_tendik`
--
ALTER TABLE `jenis_tendik`
  MODIFY `id_jenis_tendik` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `kegiatan_dosen`
--
ALTER TABLE `kegiatan_dosen`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
--
-- AUTO_INCREMENT for table `kerja_sama`
--
ALTER TABLE `kerja_sama`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;
--
-- AUTO_INCREMENT for table `komentar`
--
ALTER TABLE `komentar`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `manajemen_dosen`
--
ALTER TABLE `manajemen_dosen`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `pegawai`
--
ALTER TABLE `pegawai`
  MODIFY `id_pegawai` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=93;
--
-- AUTO_INCREMENT for table `pimpinan`
--
ALTER TABLE `pimpinan`
  MODIFY `id_pimpinan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `prestasi_dosen`
--
ALTER TABLE `prestasi_dosen`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;
--
-- AUTO_INCREMENT for table `program_tugas_dosen`
--
ALTER TABLE `program_tugas_dosen`
  MODIFY `id_program` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
--
-- AUTO_INCREMENT for table `proyek`
--
ALTER TABLE `proyek`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;
--
-- AUTO_INCREMENT for table `rincian_kinerja_pengajaran`
--
ALTER TABLE `rincian_kinerja_pengajaran`
  MODIFY `id_rincian_kinerja_pengajaran` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=202;
--
-- AUTO_INCREMENT for table `riwayat_pendidikan`
--
ALTER TABLE `riwayat_pendidikan`
  MODIFY `id_riwayat_pendidikan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=62;
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
-- Constraints for table `program_tugas_dosen`
--
ALTER TABLE `program_tugas_dosen`
  ADD CONSTRAINT `program_tugas_dosen_ibfk_1` FOREIGN KEY (`id_dosen`) REFERENCES `dosen` (`id_dosen`);

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
  ADD CONSTRAINT `riwayat_pendidikan_ibfk_1` FOREIGN KEY (`id_pegawai`) REFERENCES `pegawai` (`id_pegawai`);

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
  ADD CONSTRAINT `tendik_ibfk_1` FOREIGN KEY (`id_jenis_tendik`) REFERENCES `jenis_tendik` (`id_jenis_tendik`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `tendik_ibfk_2` FOREIGN KEY (`id_pegawai`) REFERENCES `pegawai` (`id_pegawai`),
  ADD CONSTRAINT `tendik_ibfk_3` FOREIGN KEY (`id_prodi`) REFERENCES `program_studi` (`kode_prodi`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
