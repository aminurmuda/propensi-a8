-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 19, 2017 at 03:22 PM
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
(4, 6, NULL, NULL, 1, '1', 1, 'Manajemen', 0),
(5, 7, NULL, NULL, 1, '4', 0, NULL, NULL),
(6, 8, NULL, NULL, 1, '1', 1, 'Sastra Inggris', 0),
(7, 9, NULL, NULL, 1, '3', 0, NULL, NULL),
(8, 10, NULL, NULL, 1, '1', 1, NULL, NULL),
(9, 11, NULL, NULL, 1, '2', 1, NULL, NULL),
(10, 12, NULL, NULL, 1, '4', 0, NULL, NULL),
(11, 13, NULL, NULL, 1, '4', 0, NULL, NULL),
(12, 1, NULL, NULL, 1, '1', 1, 'Sistem Informasi', 1),
(13, 5, NULL, NULL, 1, '2', 1, 'Sistem Informasi', 1),
(14, 59, NULL, NULL, 1, '1', 1, 'Sistem Informasi', 1),
(15, 60, NULL, NULL, 1, '2', 1, 'Sistem Informasi', 0),
(16, 61, NULL, NULL, 1, '1', 1, 'Ilmu Komputer', 0),
(17, 62, NULL, NULL, 1, '1', 1, 'Sistem Informasi', 1),
(18, 63, NULL, NULL, 1, '2', 1, 'Sistem Informasi', 0),
(19, 64, NULL, NULL, 1, '1', 1, 'Ilmu Komputer', 0),
(20, 65, NULL, NULL, 1, '2', 1, 'Sistem Informasi', 0),
(21, 66, NULL, NULL, 1, '1', 1, 'Ilmu Komputer', 0),
(22, 67, NULL, NULL, 1, '2', 1, 'Sistem Informasi', 0),
(23, 68, NULL, NULL, 1, '1', 1, 'Ilmu Komputer', 0),
(24, 69, NULL, NULL, 1, '2', 0, 'Sistem Informasi', 0),
(25, 70, NULL, NULL, 1, '1', 0, 'Ilmu Komputer', 0),
(26, 71, NULL, NULL, 1, '2', 0, 'Ilmu Komputer', 1),
(27, 72, NULL, NULL, 1, '1', 0, 'Sistem Informasi', 1),
(28, 73, NULL, NULL, 1, '2', 1, 'Ilmu Komputer', 1),
(29, 74, NULL, NULL, 1, '1', 1, 'Sistem Informasi', 1),
(30, 75, NULL, NULL, 1, '1', 1, 'Ilmu Komputer', 1),
(31, 76, NULL, NULL, 1, '2', 1, 'Sistem Informasi', 0),
(32, 77, NULL, NULL, 1, '1', 1, 'Sistem Informasi', 1),
(33, 78, NULL, NULL, 1, '2', 1, 'Sistem Informasi', 0),
(34, 79, NULL, NULL, 1, '2', 1, 'Sistem Informasi', 0),
(35, 80, NULL, NULL, 1, '2', 1, 'Ilmu Komputer', 1),
(36, 81, NULL, NULL, 1, '2', 1, 'Sistem Informasi', 0),
(37, 82, NULL, NULL, 1, '2', 1, 'Ilmu Komputer', 0),
(38, 83, NULL, NULL, 1, '1', 1, 'Sistem Informasi', 1),
(39, 84, NULL, NULL, 1, '1', 1, 'Ilmu Komputer', 0),
(40, 85, NULL, NULL, 1, '1', 1, 'Sistem Informasi', 1),
(41, 86, NULL, NULL, 1, '1', 1, 'Ilmu Komputer', 0),
(42, 87, NULL, NULL, 1, '1', 1, 'Ilmu Komputer', 0),
(43, 88, NULL, NULL, 1, '1', 1, 'Sistem Informasi', 1),
(44, 89, NULL, NULL, 1, '2', 1, 'Ilmu Komputer', 1),
(45, 90, NULL, NULL, 1, '1', 1, 'Sistem Informasi', 1),
(46, 91, NULL, NULL, 1, '2', 1, 'Sistem Informasi', 0),
(47, 92, NULL, NULL, 1, '1', 1, 'Ilmu Komputer', 0);

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

--
-- Dumping data for table `jenis_tendik`
--

INSERT INTO `jenis_tendik` (`id_jenis_tendik`, `nama_jenis_tendik`, `unit_kerja`, `flag_aktif`) VALUES
(1, 'Pustakawan', 'Perpustaka', 1),
(2, 'Laboran', 'Fakultas &', 1),
(3, 'Teknisi', 'Fakultas &', 1),
(4, 'Analis', 'Fakultas &', 1),
(5, 'Operator', 'Fakultas &', 1),
(6, 'Programmer', 'Fakultas &', 1),
(7, 'Administrasi', 'Fakultas &', 1);

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
(1, 30, 'Pekerti', 'Lokakarya', 'Depok', '0000-00-00', 'Penyaji'),
(2, 31, 'Tentang Lomba Gemastik 9', 'Seminar', 'Depok', '0000-00-00', 'Peserta'),
(3, 32, 'Design Sprint', 'Workshop', 'Jakarta', '0000-00-00', 'Peserta'),
(4, 33, 'Kepemimpinan', 'Pelatihan', 'Singapore', '0000-00-00', 'Penyaji'),
(5, 34, 'Evaluasi Diri Perguruan Tinggi', 'Bimtek', 'Depok', '0000-00-00', 'Peserta'),
(6, 35, 'Seminar CompFest 7', 'Seminar', 'Jakarta', '0000-00-00', 'Penyaji'),
(7, 35, 'Seminar CompFest 8', 'Seminar', 'Depok', '0000-00-00', 'Penyaji'),
(8, 35, 'Seminar CompFest 9', 'Seminar', 'Jakarta', '0000-00-00', 'Penyaji'),
(9, 35, 'Seminar CompFest 10', 'Seminar', 'Depok', '0000-00-00', 'Penyaji'),
(10, 39, 'AA UU No. 1 Tahun 2013', 'Lokakarya', 'Depok', '0000-00-00', 'Penyaji'),
(11, 40, 'Pelatihan Pengawasan Ujian', 'Pelatihan', 'Depok', '0000-00-00', 'Peserta'),
(12, 41, 'Game Development', 'Workshop', 'London', '0000-00-00', 'Peserta'),
(13, 42, 'Seminar Hari Komputer Indonesia', 'Seminar', 'Bandung', '0000-00-00', 'Penyaji'),
(14, 43, 'Pelatihan Pengecekan', 'Pelatihan', 'Puncak', '0000-00-00', 'Peserta'),
(15, 43, 'Pelatihan Dosen', 'Pelatihan', 'Puncak', '0000-00-00', 'Penyaji'),
(16, 43, 'Pelatihan Dosen dan tendik', 'Pelatihan', 'Bogor', '0000-00-00', 'Peserta');

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
-- Dumping data for table `tendik`
--

INSERT INTO `tendik` (`id_tendik`, `id_kinerja_tendik`, `id_remunerasi_tendik`, `flag_aktif`, `id_jenis_tendik`, `id_role`, `id_pegawai`) VALUES
(1, NULL, NULL, 1, 2, NULL, 14),
(2, NULL, NULL, 1, 3, NULL, 15),
(3, NULL, NULL, 1, 5, NULL, 16),
(4, NULL, NULL, 1, 7, NULL, 17),
(5, NULL, NULL, 1, 1, NULL, 18),
(6, NULL, NULL, 1, 3, NULL, 19),
(7, NULL, NULL, 1, 6, NULL, 20),
(8, NULL, NULL, 1, 7, NULL, 21),
(9, NULL, NULL, 1, 1, NULL, 22),
(10, NULL, NULL, 1, 7, NULL, 23),
(11, NULL, NULL, 1, 3, NULL, 24),
(12, NULL, NULL, 1, 2, NULL, 25),
(13, NULL, NULL, 1, 5, NULL, 26),
(14, NULL, NULL, 1, 5, NULL, 27),
(15, NULL, NULL, 1, 6, NULL, 28),
(16, NULL, NULL, 1, 5, NULL, 29),
(17, NULL, NULL, 1, 7, NULL, 30),
(18, NULL, NULL, 1, 7, NULL, 31),
(19, NULL, NULL, 1, 4, NULL, 32),
(20, NULL, NULL, 1, 7, NULL, 33),
(21, NULL, NULL, 1, 1, NULL, 34),
(22, NULL, NULL, 1, 2, NULL, 35),
(23, NULL, NULL, 1, 6, NULL, 36),
(24, NULL, NULL, 1, 1, NULL, 37),
(25, NULL, NULL, 1, 5, NULL, 38),
(26, NULL, NULL, 1, 5, NULL, 39),
(27, NULL, NULL, 1, 7, NULL, 40),
(28, NULL, NULL, 1, 7, NULL, 41),
(29, NULL, NULL, 1, 3, NULL, 42),
(30, NULL, NULL, 1, 4, NULL, 43),
(31, NULL, NULL, 1, 7, NULL, 44),
(32, NULL, NULL, 1, 7, NULL, 45),
(33, NULL, NULL, 1, 4, NULL, 46),
(34, NULL, NULL, 1, 3, NULL, 47),
(35, NULL, NULL, 1, 4, NULL, 48),
(36, NULL, NULL, 1, 2, NULL, 49),
(37, NULL, NULL, 1, 3, NULL, 50),
(38, NULL, NULL, 1, 6, NULL, 51),
(39, NULL, NULL, 1, 5, NULL, 52),
(40, NULL, NULL, 1, 5, NULL, 53),
(41, NULL, NULL, 1, 6, NULL, 54),
(42, NULL, NULL, 1, 2, NULL, 55),
(43, NULL, NULL, 1, 4, NULL, 56),
(44, NULL, NULL, 1, 2, NULL, 57),
(45, NULL, NULL, 1, 1, NULL, 58),
(46, NULL, NULL, 1, 7, NULL, 59);

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
  ADD KEY `id_jenis_tendik` (`id_jenis_tendik`),
  ADD KEY `id_pegawai` (`id_pegawai`);

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `pegawai`
--
ALTER TABLE `pegawai`
  MODIFY `id_pegawai` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=97;
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
  ADD CONSTRAINT `tendik_ibfk_2` FOREIGN KEY (`id_pegawai`) REFERENCES `pegawai` (`id_pegawai`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
