-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 18 Mei 2017 pada 07.20
-- Versi Server: 10.1.21-MariaDB
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
-- Struktur dari tabel `borang`
--

CREATE TABLE `borang` (
  `id` int(10) NOT NULL,
  `id_histori` int(11) NOT NULL,
  `kode_prodi` varchar(30) NOT NULL,
  `jenis` varchar(20) NOT NULL COMMENT '"3A", "3B" or "Evaluasi diri"',
  `standar` int(11) DEFAULT NULL,
  `isi` longtext,
  `tahun` int(11) DEFAULT NULL,
  `is_reviewed` tinyint(1) NOT NULL DEFAULT '0',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `borang`
--

INSERT INTO `borang` (`id`, `id_histori`, `kode_prodi`, `jenis`, `standar`, `isi`, `tahun`, `is_reviewed`, `created_at`, `updated_at`) VALUES
(1, 1, '311225', '3A', 2, '{\"standar2\":{\"judul\":\"2. TATA PAMONG, KEPEMIMPINAN, SISTEM PENGELOLAAN, DAN PENJAMINAN MUTU\",\"2.1\":{\"judul\":\"2.1 Sistem Tata Pamong\",\"narasi\":\"Sistem tata pamong berjalan secara efektif melalui mekanisme yang disepakati bersama, serta dapat memelihara dan mengakomodasi semua unsur, fungsi, dan peran dalam program studi. Tata pamong didukung dengan budaya organisasi yang dicerminkan dengan ada dan tegaknya aturan, tatacara pemilihan pimpinan, etika dosen, etika mahasiswa, etika tenaga kependidikan, sistem penghargaan dan sanksi serta pedoman dan prosedur pelayanan (administrasi, perpustakaan, laboratorium, dan studio). Sistem tata pamong (input, proses, output dan outcome serta lingkungan eksternal yang menjamin terlaksananya tata pamong yang baik) harus diformulasikan, disosialisasikan, dilaksanakan,  dipantau dan dievaluasi dengan peraturan dan prosedur yang jelas. \",\"perintah\":\"Uraikan secara ringkas sistem dan pelaksanaan tata pamong di Program Studi untuk  membangun sistem tata pamong yang kredibel, transparan, akuntabel, bertanggung jawab dan adil.\",\"isian\":\"%3Cp%3ETata%20pamong%20adalah%20suatu%20sistem%20yang%20dapat%20menjadikan%20kepemimpinan%2C%20sistem%20pengelolaan%20dan%20penjaminan%20mutu%20berjalan%20secara%20efektif%20di%20dalam%20Universitas%2FInstitusi%20yang%20mengelola%20Program%20Studi.%20Hal-hal%20yang%20menjadi%20fokus%20di%20dalam%20tata%20pamong%20termasuk%20bagaimana%20kebijakan%20dan%20strategi%20disusun%20sedemikian%20rupa%20sehingga%20memungkinkan%20terpilihnya%20pemimpin%20dan%20pengelola%20yang%20kredibel%20dan%20sistem%20penyelenggaraan%20Program%20Studi%20secara%20kredibel%2C%20transparan%2C%20akuntabel%2C%20bertanggungjawab%20dan%20menerapkan%20prinsip-prinsip%20keadilan.%3C%2Fp%3E%3Cp%3E%3Cbr%3E%3C%2Fp%3E%3Cp%3EKegiatan%20tata%20pamong%20di%20Program%20Studi%20Manajemen%20Universitas%20Victory%20mengikuti%20berbagai%20peraturan%20dan%20perundang-undangan%20yang%20ditetapkan%20oleh%20Kementerian%20Pendidikan%20dan%20Kebudayaan%2C%20keputusan%20Universitas%20dan%20Keputusan%20Fakultas.%20Tugas%20masing-masing%20unsur%20dan%20struktur%20dalam%20tata%20pamong%2C%20hubungan%20kerja%20antar%20unsur-unsur%20dalam%20tata%20pamong%2C%20serta%20berbagai%20peraturan%20akademik%20di%20lingkup%20Universitas%20telah%20dibuat%20oleh%20pimpinan%20Universitas%20Victory%20dan%20secara%20lebih%20spesifik%20telah%20dibuat%20oleh%20pimpinan%20Fakultas%20Ekonomi%20Universitas%20Victory%20melalui%20Pedoman%20Job%20Description%20sehingga%20penyelenggaraan%20tata%20pamong%20dapat%20menjamin%20tercapainya%20visi%2C%20misi%20dan%20tujuan%20Program%20Studi%20Manajemen%20Universitas%20Victory%3Cbr%3E%3C%2Fp%3E\"},\"2.2\":{\"judul\":\"2.2 Kepemimpinan\",\"narasi\":\"Kepemimpinan efektif mengarahkan dan mempengaruhi perilaku semua unsur dalam program studi, mengikuti nilai, norma, etika, dan budaya organisasi yang disepakati bersama, serta mampu membuat keputusan yang tepat dan cepat. Kepemimpinan mampu memprediksi masa depan, merumuskan dan mengartikulasi visi yang realistik, kredibel, serta mengkomunikasikan visi ke depan, yang menekankan pada keharmonisan hubungan manusia dan mampu menstimulasi secara intelektual dan arif bagi anggota untuk mewujudkan visi organisasi, serta mampu memberikan arahan, tujuan, peran, dan tugas kepada seluruh unsur dalam perguruan tinggi. Dalam menjalankan fungsi kepemimpinan dikenal kepemimpinan operasional, kepemimpinan organisasi, dan kepemimpinan publik.  Kepemimpinan operasional berkaitan dengan kemampuan menjabarkan visi, misi ke dalam kegiatan operasional program studi.  Kepemimpinan organisasi berkaitan dengan pemahaman tata kerja antar unit dalam organisasi perguruan tinggi.  Kepemimpinan publik berkaitan dengan kemampuan menjalin kerjasama dan menjadi rujukan bagi publik.\",\"perintah\":\"Jelaskan pola kepemimpinan dalam Program Studi.\",\"isian\":\"%3Cp%3EBab%20II%20Tentang%20Sistem%20Penyelenggaraan%20Pendidikan%2C%20Pasal%206%20Tentang%20Kegiatan%20Pendidikan.%3C%2Fp%3E%3Col%3E%3Cli%3EKegiatan%20operasional%20di%20bidang%20pendidikan.%20Jadwal%20mengajar%2C%20SK%20mengajar%2C%20evaluasi%20Menentukan%20prioritas%20pekerjaan%20%282%29%20Memberi%20nilai%20kinerja%20bawahan%3C%2Fli%3E%3Cli%3EKegiatan%20operasional%20di%20bidang%20Penelitian%20%28Mengacu%20kepada%20Dokumen%20Renstra%20maka%20Program%20Studi%20melakukan%20seminar%20metodologi%20penelitian%2C%20bantuan%20pendanaan%20penelitian%2C%20bantuan%20biaya%20publikasi%20jurnal%20ilmiah%2C%20workshop%29%3C%2Fli%3E%3Cli%3EKegiatan%20operasional%20di%20bidang%20pengabdian%20masyarakat%20%28Mengacu%20kepada%20Dokum%20Renstra%20maka%20Program%20Studi%20melakukan%20pelatihan%2C%20pendampingan%2C%20workshop%29%3C%2Fli%3E%3C%2Fol%3E\"},\"2.3\":{\"judul\":\"2.3 Sistem Pengelolaan\",\"narasi\":\"Sistem pengelolaan fungsional dan operasional program studi mencakup <i>planning</i>, <i>organizing</i>, <i>staffing</i>, <i>leading</i>, <i>controlling</i> dalam kegiatan  internal maupun eksternal.\",\"perintah\":\"Jelaskan sistem pengelolaan Program Studi serta dokumen pendukungnya.\",\"isian\":\"<p>jsadnsajdaaskdmaksm</p>\"},\"2.4\":{\"judul\":\"2.4 Penjaminan Mutu\",\"perintah\":\"Bagaimanakah pelaksanaan penjaminan mutu pada Program Studi? Jelaskan.\",\"isian\":\"<p>asdkasjd jdasnkdjan</p>\"},\"2.5\":{\"judul\":\"2.5 Umpan Balik\",\"perintah\":\"Apakah program studi telah melakukan kajian tentang proses pembelajaran melalui umpan balik dari dosen, mahasiswa, alumni, dan pengguna lulusan mengenai harapan dan persepsi mereka?  Jika Ya, jelaskan isi umpan balik dan tindak lanjutnya.\",\"isian\":\"%3Ctable%20style%3D%22width%3A%20100%25%3B%22%3E%3Ctbody%3E%3Ctr%3E%3Ctd%20style%3D%22width%3A%2024.9129%25%3B%20background-color%3A%20rgb%28204%2C%20204%2C%20204%29%3B%22%3E%3Cdiv%20style%3D%22text-align%3A%20center%3B%22%3E%3Cstrong%3EUmpan%20Balik%20Dari%3Cbr%3E%281%29%3C%2Fstrong%3E%3C%2Fdiv%3E%3C%2Ftd%3E%3Ctd%20style%3D%22width%3A%2041.5498%25%3B%20background-color%3A%20rgb%28204%2C%20204%2C%20204%29%3B%22%3E%3Cdiv%20style%3D%22text-align%3A%20center%3B%22%3E%3Cstrong%3EIsi%20Umpan%20Balik%3Cbr%3E%282%29%3C%2Fstrong%3E%3C%2Fdiv%3E%3C%2Ftd%3E%3Ctd%20style%3D%22width%3A%2033.3333%25%3B%20background-color%3A%20rgb%28204%2C%20204%2C%20204%29%3B%22%3E%3Cdiv%20style%3D%22text-align%3A%20center%3B%22%3E%3Cstrong%3ETin%3C%2Fstrong%3E%3Cstrong%3Edak%20Lanjut%3Cbr%3E%283%29%3C%2Fstrong%3E%3C%2Fdiv%3E%3C%2Ftd%3E%3C%2Ftr%3E%3Ctr%3E%3Ctd%20style%3D%22width%3A%2024.9129%25%3B%20background-color%3A%20rgb%28255%2C%20255%2C%20255%29%3B%22%3EDosen%3Cbr%3E%3C%2Ftd%3E%3Ctd%20style%3D%22width%3A%2041.5498%25%3B%20background-color%3A%20rgb%28255%2C%20255%2C%20255%29%3B%22%3E%3Cdiv%20data-empty%3D%22true%22%3E%3Cbr%3E%3C%2Fdiv%3E%3C%2Ftd%3E%3Ctd%20style%3D%22width%3A%2033.3333%25%3B%20background-color%3A%20rgb%28255%2C%20255%2C%20255%29%3B%22%3E%3Cdiv%20data-empty%3D%22true%22%3E%3Cbr%3E%3C%2Fdiv%3E%3C%2Ftd%3E%3C%2Ftr%3E%3Ctr%3E%3Ctd%20style%3D%22width%3A%2024.9129%25%3B%20background-color%3A%20rgb%28255%2C%20255%2C%20255%29%3B%22%3EMahasiswa%3Cbr%3E%3C%2Ftd%3E%3Ctd%20style%3D%22width%3A%2041.5498%25%3B%20background-color%3A%20rgb%28255%2C%20255%2C%20255%29%3B%22%3E%3Cdiv%20data-empty%3D%22true%22%3E%3Cbr%3E%3C%2Fdiv%3E%3C%2Ftd%3E%3Ctd%20style%3D%22width%3A%2033.3333%25%3B%20background-color%3A%20rgb%28255%2C%20255%2C%20255%29%3B%22%3E%3Cdiv%20data-empty%3D%22true%22%3E%3Cbr%3E%3C%2Fdiv%3E%3C%2Ftd%3E%3C%2Ftr%3E%3Ctr%3E%3Ctd%20style%3D%22width%3A%2024.9129%25%3B%20background-color%3A%20rgb%28255%2C%20255%2C%20255%29%3B%22%3EAlumni%3Cbr%3E%3C%2Ftd%3E%3Ctd%20style%3D%22width%3A%2041.5498%25%3B%20background-color%3A%20rgb%28255%2C%20255%2C%20255%29%3B%22%3E%3Cdiv%20data-empty%3D%22true%22%3E%3Cbr%3E%3C%2Fdiv%3E%3C%2Ftd%3E%3Ctd%20style%3D%22width%3A%2033.3333%25%3B%20background-color%3A%20rgb%28255%2C%20255%2C%20255%29%3B%22%3E%3Cdiv%20data-empty%3D%22true%22%3E%3Cbr%3E%3C%2Fdiv%3E%3C%2Ftd%3E%3C%2Ftr%3E%3Ctr%3E%3Ctd%20style%3D%22width%3A%2024.9129%25%3B%20background-color%3A%20rgb%28255%2C%20255%2C%20255%29%3B%22%3EPengguna%20Lulusan%3Cbr%3E%3C%2Ftd%3E%3Ctd%20style%3D%22width%3A%2041.5498%25%3B%20background-color%3A%20rgb%28255%2C%20255%2C%20255%29%3B%22%3E%3Cdiv%20data-empty%3D%22true%22%3E%3Cbr%3E%3C%2Fdiv%3E%3C%2Ftd%3E%3Ctd%20style%3D%22width%3A%2033.3333%25%3B%20background-color%3A%20rgb%28255%2C%20255%2C%20255%29%3B%22%3E%3Cdiv%20data-empty%3D%22true%22%3E%3Cbr%3E%3C%2Fdiv%3E%3C%2Ftd%3E%3C%2Ftr%3E%3C%2Ftbody%3E%3C%2Ftable%3E\"},\"2.6\":{\"judul\":\"2.6 Keberlanjutan\",\"perintah\":\"Jelaskan upaya untuk menjamin keberlanjutan (sustainability) program studi ini, khususnya dalam hal:\",\"pertanyaan\":[\"a. Upaya untuk peningkatan animo calon mahasiswa\",\"b. Upaya peningkatan mutu manajemen\",\"c. Upaya untuk peningkatan mutu lulusan\",\"d. Upaya untuk pelaksanaan dan hasil kerjasama kemitraan\",\"e. Upaya dan prestasi memperoleh dana hibah kompetitif\"],\"isian\":\"<p>askdns ajskdnakj askjndasj</p>\"}}}', 2017, 0, '2017-05-18 05:17:00', '2017-05-18 05:17:00'),
(2, 1, '311225', '3A', 4, '{\"standar4\":{\"4.1\":{\"judul\":\"Sistem Seleksi dan Pengembangan\",\"narasi\":\"-\",\"perintah\":\"Jelaskan sistem seleksi/perekrutan, penempatan, pengembangan, retensi, dan pemberhentian dosen dan tenaga kependidikan untuk menjamin mutu penyelenggaraan program akademik (termasuk informasi tentang ketersediaan pedoman tertulis dan konsistensi pelaksanaannya).\",\"isian\":\"%3Cp%3Egege%3C%2Fp%3E\"},\"4.2\":{\"judul\":\"Monitoring dan Evaluasi\",\"narasi\":\"-\",\"perintah\":\"Jelaskan sistem monitoring dan evaluasi, serta rekam jejak kinerja akademik dosen dan kinerja tenaga kependidikan (termasuk informasi tentang ketersediaan pedoman tertulis, dan monitoring dan evaluasi kinerja dosen dalam tridarma serta dokumentasinya).\",\"isian\":\"\"},\"4.3\":{\"judul\":\"Dosen Tetap\",\"narasi\":\"Dosen tetap dalam borang akreditasi BAN-PT adalah dosen yang diangkat dan ditempatkan sebagai tenaga tetap pada PT yang bersangkutan termasuk dosen penugasan Kopertis, dan dosen yayasan pada PTS dalam bidang yang relevan dengan keahlian bidang studinya. Seorang dosen hanya dapat menjadi dosen tetap pada satu perguruan tinggi, dan mempunyai penugasan kerja minimum 36 jam/minggu.nDosen tetap dipilah dalam 2 kelompok, yaitu:n1. dosen tetap yang bidang keahliannya sesuai dengan PSn2. dosen tetap yang bidang keahliannya di luar PS\",\"isian\":{\"4.3.1\":{\"perintah\":\"Data dosen tetap yang bidang keahliannya sesuai dengan bidang PS:\",\"tabel\":[{\"Nama Dosen Tetap\":\"\",\"NIDN**\":\"\",\"Tgl. Lahir\":\"\",\"Jabatan Akademik***\":\"\",\"Gelar Akademik\":\"\",\"Pendidikan S1, S2, S3 dan Asal PT*\":\"\",\"Bidang Keahlian untuk Setiap Jenjang Pendidikan\":\"\"}],\"keterangan\":\"* Lampirkan fotokopi ijazahn** NIDN : Nomor Induk Dosen Nasionaln** Dosen yang telah memperoleh sertifikat dosen agar diberi tanda (***) dan fotokopi sertifikatnya agar dilampirkan.\"},\"4.3.2\":{\"perintah\":\"Data dosen tetap yang bidang keahliannya di luar bidang PS:\",\"tabel\":[{\"Nama Dosen Tetap\":\"\",\"NIDN**\":\"\",\"Tgl. Lahir\":\"\",\"Jabatan Akademik***\":\"\",\"Gelar Akademik\":\"\",\"Pendidikan S1, S2, S3 dan Asal PT*\":\"\",\"Bidang Keahlian untuk Setiap Jenjang Pendidikan\":\"\"}],\"keterangan\":\"* Lampirkan fotokopi ijazahn** NIDN : Nomor Induk Dosen Nasionaln*** Dosen yang telah memperoleh sertifikat dosen agar diberi tanda (***) dan fotokopi sertifikatnya agar dilampirkan.\"},\"4.3.3\":{\"perintah\":\"Aktivitas dosen tetap yang bidang bidang keahliannya sesuai dengan PS dinyatakan dalam sks rata-rata per semester pada satu tahun akademik terakhir, diisi dengan perhitungan sesuai SK Dirjen DIKTI no. 48 tahun 1983 (12 sks setara dengan 36 jam kerja per minggu)\",\"tabel\":[{\"Nama Dosen Tetap\":\"\",\"sks Pengajaran pada\":{\"PS Sendiri\":\"\",\"PS Lain PT Sendiri\":\"\",\"PT Lain\":\"\"},\"sks Penelitian\":\"\",\"sks Pengabdian kepada Masyarakat\":\"\",\"sks Manajemen**\":{\"PT Sendiri\":\"\",\"PT Lain\":\"\"},\"Jumlah sks\":\"\",\"Jumlah\":{\"3\":\"\",\"4\":\"\",\"5\":\"\",\"6\":\"\",\"7\":\"\",\"8\":\"\",\"9\":\"\",\"10\":\"\"},\"Rata-rata*\":{\"3\":\"\",\"4\":\"\",\"5\":\"\",\"6\":\"\",\"7\":\"\",\"8\":\"\",\"9\":\"\",\"10\":\"\"}}],\"keterangan\":\"Catatan: n Sks pengajaran sama dengan sks mata kuliah yang diajarkan. Bila dosen mengajar kelas paralel, maka beban sks pengajaran untuk satu tambahan kelas paralel adalah 1 / 2 kali sks mata kuliah.n * rata - rata adalah jumlah sks dibagi dengan jumlah dosen tetap. n ** sks manajemen dihitung sbb: n Beban kerja manajemen untuk jabatan - jabatan ini adalah sbb.nBeban kerja manajemen untuk jabatan - jabatan ini adalah sbb. n - rektor / direktur politeknik 12 sks n - pembantu rektor / dekan / ketua sekolah tinggi / direktur akademi 10 sks n - ketua lembaga / kepala UPT 8 sksn - pembantu dekan / ketua jurusan / kepala pusat / ketua senat akademik / ketua senat fakultas 6 sksn - sekretaris jurusan / sekretaris pusat / sekretaris senat akademik / sekretaris senat universitas / sekretaris senat fakultas / kepala lab.atau studio / kepala balai / ketua PS 4 sksn - sekretaris PS 3 sksn Bagi PT yang memiliki struktur organisasi yang berbeda, beban kerja manajemen untuk jabatan baru disamakan dengan beban kerja jabatan yang setara.\"},\"4.3.4\":{\"perintah\":\"Tuliskan data aktivitas mengajar dosen tetap yang bidang keahliannya sesuai dengan PS,  dalam satu tahun akademik terakhir di PS ini dengan mengikuti format tabel berikut:\",\"tabel\":[{\"Nama Dosen Tetap\":\"\",\"Bidang Keahlian\":\"\",\"Kode Mata Kuliah\":\"\",\"Nama Mata Kuliah\":\"\",\"Jumlah Kelas\":\"\",\"Jumlah Pertemuan yang Direncanakan\":\"\",\"Jumlah Pertemuan yang Dilaksanakan\":\"\",\"Jumlah\":{\"7\":\"\",\"8\":\"\"}}]},\"4.3.5\":{\"perintah\":\"Tuliskan data aktivitas mengajar dosen tetap yang bidang keahliannya di luar PS,  dalam satu tahun akademik terakhir di PS ini dengan mengikuti format tabel berikut:\",\"tabel\":[{\"Nama Dosen Tetap\":\"\",\"Bidang Keahlian\":\"\",\"Kode Mata Kuliah\":\"\",\"Nama Mata Kuliah\":\"\",\"Jumlah Kelas\":\"\",\"Jumlah Pertemuan yang Direncanakan\":\"\",\"Jumlah Pertemuan yang Dilaksanakan\":\"\",\"Jumlah\":{\"7\":\"\",\"8\":\"\"}}]}}},\"4.4\":{\"judul\":\"Dosen Tidak Tetap\",\"4.4.1\":{\"perintah\":\"Tuliskan data dosen tidak tetap pada PS dengan mengikuti format tabel berikut:\",\"tabel\":[{\"Nama Dosen Tidak Tetap\":\"\",\"NIDN**\":\"\",\"Tgl. Lahir\":\"\",\"Jabatan Akademik***\":\"\",\"Gelar Akademik\":\"\",\"Pendidikan S1, S2, S3 dan Asal PT*\":\"\",\"Bidang Keahliah untuk Setiap Jenjang Pendidikan\":\"\"}],\"keterangan\":\"* Lampirkan fotokopi ijazah.n** NIDN : Nomor Induk Dosen Nasionaln*** Dosen yang telah memperoleh sertifikat dosen agar diberi tanda (***)dan fotokopi sertifikatnya agar dilampirkan.\"},\"4.4.2\":{\"perintah\":\"Tuliskan data aktivitas mengajar dosen tidak tetap pada satu tahun terakhir di PS ini dengan mengikuti format tabel berikut:\",\"tabel\":[{\"Nama Dosen Tdk Tetap\":\"\",\"Bidang Keahlian\":\"\",\"Kode Mata Kuliah\":\"\",\"Nama Mata Kuliah\":\"\",\"Jumlah Kelas\":\"\",\"Jumlah Pertemuan yang Direncanakan\":\"\",\"Jumlah Pertemuan yang Dilaksanakan\":\"\",\"Jumlah\":{\"7\":\"\",\"8\":\"\"}}]}},\"4.5\":{\"judul\":\"Upaya Peningkatan Sumber Daya Manusia (SDM) dalam tiga tahun terakhir\",\"4.5.1\":{\"perintah\":\"Kegiatan tenaga ahli/pakar sebagai pembicara dalam seminar/pelatihan, pembicara tamu, dsb, dari luar PT sendiri (tidak termasuk dosen tidak tetap)\",\"tabel\":[{\"Nama Tenaga Ahli/Pakar\":\"\",\"Nama dan Judul Kegiatan\":\"\",\"Waktu Pelaksanaan\":\"\"}]},\"4.5.2\":{\"perintah\":\"Peningkatan kemampuan dosen tetap melalui program tugas belajar dalam bidang yang sesuai dengan bidang PS\",\"tabel\":[{\"Nama Dosen\":\"\",\"Jenjang Pendidikan Lanjut\":\"\",\"Bidang Studi\":\"\",\"Perguruan Tinggi\":\"\",\"Negara\":\"\",\"Tahun Mulai Studi\":\"\"}]},\"4.5.3\":{\"perintah\":\"Kegiatan dosen tetap yang bidang keahliannya sesuai dengan PS dalam seminar ilmiah/lokakarya/penataran/workshop/ pagelaran/ pameran/peragaan yang tidak hanya melibatkan dosen PT sendiri\",\"tabel\":[{\"Nama Dosen\":\"\",\"Jenis Kegiatan*\":\"\",\"Tempat\":\"\",\"Waktu\":\"\",\"Sebagai\":{\"Penyaji\":\"\",\"Peserta\":\"\"}}],\"keterangan\":\"* Jenis kegiatan : Seminar ilmiah, Lokakarya, Penataran/Pelatihan, Workshop, Pagelaran, Pameran, Peragaan dll\"},\"4.5.4\":{\"perintah\":\"Sebutkan pencapaian prestasi/reputasi dosen (misalnya prestasi dalam pendidikan, penelitian dan pelayanan/pengabdian kepada masyarakat).\",\"keterangan\":\"* Sediakan dokumen pendukung pada saat asesmen lapangan.\",\"tabel\":[{\"Nama Dosen\":\"\",\"Prestasi yang Dicapai*\":\"\",\"Waktu Pencapaian\":\"\",\"Tingkat (Lokal, Nasional, Internasional)\":\"\"}]},\"4.5.5\":{\"perintah\":\"Sebutkan keikutsertaan dosen tetap dalam organisasi keilmuan atau organisasi profesi.\",\"tabel\":[{\"Nama Dosen\":\"\",\"Nama Organisasi Keilmuan atau Organisasi Profesi\":\"\",\"Kurun Waktu\":\"\",\"Tingkat (Lokal, Nasional, Internasional\":\"\"}]}},\"4.6\":{\"judul\":\"Tenaga Kependidikan\",\"4.6.1\":{\"perintah\":\"Tuliskan data tenaga kependidikan  yang ada di PS, Jurusan, Fakultas atau PT yang melayani mahasiswa PS dengan mengikuti format tabel berikut:\",\"tabel\":[{\"Jenis Tenaga Kependidikan\":\"Pustakawan*\",\"Jumlah Tenaga Kependidikan dengan Pendidikan Terakhir\":{\"S3\":\"\",\"S2\":\"\",\"S1\":\"\",\"D4\":\"\",\"D3\":\"\",\"D2\":\"\",\"D1\":\"\",\"SMA/SMK\":\"\"},\"Unit Kerja\":\"\"},{\"Jenis Tenaga Kependidikan\":\"Laboran/ Teknisi/ Analis/ Operator/ Programmer\",\"Jumlah Tenaga Kependidikan dengan Pendidikan Terakhir\":{\"S3\":\"\",\"S2\":\"\",\"S1\":\"\",\"D4\":\"\",\"D3\":\"\",\"D2\":\"\",\"D1\":\"\",\"SMA/SMK\":\"\"},\"Unit Kerja\":\"\"},{\"Jenis Tenaga Kependidikan\":\"Administrasi\",\"Jumlah Tenaga Kependidikan dengan Pendidikan Terakhir\":{\"S3\":\"\",\"S2\":\"\",\"S1\":\"\",\"D4\":\"\",\"D3\":\"\",\"D2\":\"\",\"D1\":\"\",\"SMA/SMK\":\"\"},\"Unit Kerja\":\"\"},{\"Jumlah Tenaga Kependidikan dengan Pendidikan Terakhir\":{\"S3\":\"\",\"S2\":\"\",\"S1\":\"\",\"D4\":\"\",\"D3\":\"\",\"D2\":\"\",\"D1\":\"\",\"SMA/SMK\":\"\"}}],\"keterangan\":\"* Hanya yang memiliki pendidikan formal dalam bidang perpustakaan\"},\"4.6.2\":{\"perintah\":\"Jelaskan upaya yang telah dilakukan PS dalam meningkatkan kualifikasi dan kompetensi tenaga kependidikan, dalam hal pemberian kesempatan belajar/pelatihan, pemberian fasilitas termasuk dana, dan jenjang karir.\",\"isian\":\"%3Cp%3EPada%20tingkat%20Fakultas%2F%20Program%20Studi%2C%20dilakukan%20pertemuan%20rutin%20tenaga%20kependidikan%20dengan%20pimpinan%20untuk%20mengadakan%20koordinasi%20sekaligus%20sebagai%20wahana%20peningkatan%20kompetensi%20dan%20kualifikasi%20mereka%20%28setiap%20awal%20semester%29.%3C%2Fp%3E\"}}}}', 2017, 0, '2017-05-18 04:26:13', '2017-05-18 04:26:13'),
(3, 1, '311225', '3A', 7, '{\"standar7\":{\"judul\":\"7. PENELITIAN, PELAYANAN/PENGABDIAN KEPADA MASYARAKAT, DAN KERJASAMA\",\"7.1\":{\"judul\":\"7.1 Penelitian Dosen Tetap yang Bidang Keahliannya Sesuai dengan PS\",\"7.1.1\":{\"perintah\":\"Tuliskan jumlah judul penelitian* yang sesuai dengan bidang keilmuan PS, yang dilakukan oleh dosen tetap yang bidang keahliannya sesuai dengan PS selama tiga tahun terakhir dengan mengikuti format tabel berikut:\",\"keterangan\":\"Catatan: (*) sediakan data pendukung pada saat asesmen lapangan\"},\"7.1.2\":{\"perintah\":\"Adakah mahasiswa tugas akhir yang dilibatkan dalam penelitian dosen dalam tiga tahun terakhir?\",\"perintah2\":\"Jika ada, banyaknya mahasiswa PS yang ikut serta dalam penelitian dosen adalah  ... orang, dari ... mahasiswa yang melakukan tugas akhir melalui skripsi.\",\"isian\":\"<p>asdas</p>rnrn<p>asda</p>\"},\"7.1.3\":{\"perintah\":\"Tuliskan judul artikel ilmiah/karya ilmiah/karya seni/buku yang dihasilkan selama tiga tahun terakhir oleh dosen tetap yang bidang keahliannya sesuai dengan PS dengan mengikuti format tabel berikut:\",\"keterangan\":\"Catatan: * = Tuliskan banyaknya dosen pada sel yang sesuai\"},\"7.1.4\":{\"perintah\":\"Sebutkan karya dosen dan atau mahasiswa Program Studi yang telah memperoleh/sedang memproses perlindungan Hak atas Kekayaan Intelektual (HaKI) selama tiga tahun terakhir.\",\"keterangan\":\"*Lampirkan surat paten HaKI atau keterangan sejenis.\"}},\"7.2\":{\"judul\":\"7.2 Kegiatan Pelayanan/Pengabdian kepada Masyarakat (PKM)\",\"7.2.1\":{\"perintah\":\"Tuliskan jumlah kegiatan Pelayanan/Pengabdian kepada Masyarakat (*) yang sesuai dengan bidang keilmuan PS selama tiga tahun terakhir yang dilakukan oleh dosen tetap yang bidang keahliannya sesuai dengan PS dengan mengikuti format tabel berikut:\",\"keterangan\":\"Catatan: (*) Pelayanan/Pengabdian kepada Masyarakat adalah penerapan bidang ilmu untuk menyelesaikan masalah di masyarakat (termasuk masyarakat industri, pemerintah, dsb.)\"},\"7.2.2\":{\"perintah\":\"Adakah mahasiswa yang dilibatkan dalam kegiatan pelayanan/pengabdian kepada masyarakat dalam tiga tahun terakhir?\",\"perintah2\":\"Jika Ya, jelaskan tingkat partisipasi dan bentuk keterlibatan mahasiswa dalam kegiatan pelayanan/pengabdian kepada masyarakat\",\"isian\":\"\"}},\"7.3\":{\"judul\":\"7.3 Kegiatan Kerjasama dengan Instansi Lain\",\"7.3.1\":{\"perintah\":\"Tuliskan instansi dalam negeri yang menjalin kerjasama* yang terkait dengan program studi/jurusan dalam tiga tahun terakhir.\",\"keterangan\":\"Catatan : (*) dokumen pendukung disediakan pada saat asesmen lapangan\"},\"7.3.2\":{\"perintah\":\"Tuliskan instansi luar negeri yang menjalin kerjasama* yang terkait dengan program studi/jurusan dalam tiga tahun terakhir.\",\"keterangan\":\"Catatan : (*) dokumen pendukung disediakan pada saat asesmen lapangan\"}},\"7\":{\"isian\":{\"nomorIsian\":\"\"}}}}\n', 2017, 0, '2017-05-16 11:27:06', '2017-05-16 11:27:06'),
(4, 1, '311225', '3B', 2, '{\"standar2\":{\"judul\":\"2. TATA PAMONG, KEPEMIMPINAN, SISTEM PENGELOLAAN, DAN PENJAMINAN MUTU\",\"2.1\":{\"judul\":\"2.1 Tata Pamong\",\"narasi\":\"Tata pamong adalah suatu sistem yang dapat menjadikan kepemimpinan, sistem pengelolaan dan penjaminan mutu berjalan secara efektif di dalam universitas/institusi yang mengelola program studi.  Hal-hal yang menjadi fokus di dalam tata pamong termasuk bagaimana kebijakan  dan strategi disusun sedemikian rupa sehingga memungkinkan terpilihnya pemimpin dan pengelola yang kredibel dan sistem penyelenggaraan program studi secara kredibel, transparan, akuntabel, bertanggung jawab dan  menerapkan prinsip-prinsip keadilan. Organisasi dan sistem tata pamong yang baik <i>(good governance)</i> mencerminkan kredibilitas, transparansi, akuntabilitas, tanggungjawab dan keadilan Fakultas/Sekolah Tinggi dalam mengelola program studi. \",\"perintah\":\"Uraikan secara ringkas sistem dan pelaksanaan tata pamong di Fakultas/Sekolah Tinggi untuk memilih pemimpin dan membangun sistem tata pamong yang kredibel, akuntabel, transparan, bertanggung jawab dan adil.\",\"isian\":\"%3Cp%3ETes%20isi%202.1%20h%3C%2Fp%3E\"},\"2.2\":{\"judul\":\" 2.2  Struktur Organisasi, Kordinasi, dan Cara Kerja Fakultas/Sekolah Tinggi\",\"narasi\":\"\",\"perintah\":\"Gambarkan struktur organisasi  Fakultas/Sekolah Tinggi serta tugas/fungsi dari tiap unit yang ada.\",\"isian\":\"%3Cp%3ETes%20isi%202.2hh%3C%2Fp%3E\"},\"2.3\":{\"judul\":\"2.3 Kepemimpinan\",\"narasi\":\"Kepemimpinan efektif mengarahkan dan mempengaruhi perilaku semua unsur dalam program studi, mengikuti nilai, norma, etika, dan budaya organisasi yang disepakati bersama, serta mampu  membuat keputusan yang tepat dan cepat.Kepemimpinan mampu memprediksi masa depan, merumuskan dan  mengartikulasi visi yang realistis, kredibel,  serta mengkomunikasikan visi ke depan, yang menekankan pada keharmonisan hubungan manusia dan mampu menstimulasi secara  intelektual dan arif bagi anggota untuk mewujudkan visi organisasi, serta mampu memberikan arahan, tujuan, peran, dan tugas kepada  seluruh unsur dalam perguruan tinggi. Dalam menjalankan fungsi   kepemimpinan dikenal kepemimpinan operasional, kepemimpinan  organisasi, dan kepemimpinan publik.  Kepemimpinan operasional  berkaitan dengan kemampuan menjabarkan visi, misi ke dalam   kegiatan operasional program studi.  Kepemimpinan organisasi   berkaitan dengan pemahaman tata kerja antar unit dalam organisasi  perguruan tinggi.  Kepemimpinan publik berkaitan dengan kemampuan  menjalin kerjasama dan menjadi rujukan bagi publik.\",\"perintah\":\"Jelaskan pola kepemimpinan dalam Fakultas/Sekolah Tinggi.\",\"isian\":\"%3Cp%3ETes%20isi%202.3huh%3C%2Fp%3E\"},\"2.4\":{\"judul\":\"2.4 Sistem Pengelolaan\",\"narasi\":\"Sistem pengelolaan fungsional dan operasional program studi mencakup <i>planning, organizing, staffing, leading, controlling,</i> serta operasi internal dan eksternal\",\"perintah\":\"Jelaskan sistem pengelolaan Fakultas/Sekolah Tinggi serta ketersediaan Renstra dan Renop.\",\"isian\":\"%3Cp%3ETes%20isi%202.4%20hh%3C%2Fp%3E\"},\"2.5\":{\"judul\":\"2.5 Sistem Penjaminan Mutu Fakultas/Sekolah Tinggi\",\"perintah\":\"Jelaskan sistem penjaminan mutu dalam Fakultas/Sekolah Tinggi.  Jelaskan pula standar mutu yang digunakan.\",\"isian\":\"%3Cp%3ETes%20isi%202.5%20hh%3C%2Fp%3E\"}}}', 2017, 0, '2017-05-18 04:38:53', '2017-05-18 04:38:53'),
(5, 1, '311225', '3B', 4, '{\"standar4\":{\"4.1\":{\"judul\":\"Dosen Tetap\",\"narasi\":\"Dosen tetap dalam borang akreditasi BAN-PT adalah dosen yang diangkat dan ditempatkan sebagai tenaga tetap pada PT yang bersangkutan; termasuk dosen penugasan Kopertis, dan dosen yayasan pada PTS dalam bidang yang relevan dengan keahlian bidang studinya. Seorang dosen hanya dapat menjadi dosen tetap pada satu perguruan tinggi, dan mempunyai penugasan kerja minimum 20jam/minggu.\",\"isian\":\"-\",\"4.1.1\":{\"perintah\":\"Tuliskan jumlah dosen tetap yang bidang keahliannya sesuai dengan masing-masing PS di lingkungan Fakultas/Sekolah Tinggi, berdasarkan jabatan fungsional dan pendidikan tertinggi, dengan mengikuti format tabel berikut:\",\"tabel\":\"-\",\"isian\":\"-\",\"keterangan\":\"-\"},\"4.1.2\":{\"perintah\":\"Tuliskan banyaknya penggantian dan perekrutan serta pengembangan dosen tetap yang bidang keahliannya sesuai dengan program studi pada Fakultas/Sekolah Tinggi dalam tiga tahun terakhir dengan mengikuti format tabel berikut:\",\"tabel\":\"-\",\"isian\":\"-\",\"keterangan\":\"-\"},\"4.1.3\":{\"perintah\":\"Uraikan pandangan Fakultas/Sekolah Tinggi tentang data pada butir 4.1.1 dan 4.1.2, yang mencakup aspek: kecukupan, kualifikasi, dan pengembangan karir. Jelaskan kendala yang ada dalam pengembangan tenaga dosen tetap.\",\"tabel\":\"-\",\"isian\":\"\",\"keterangan\":\"-\"}},\"4.2\":{\"judul\":\"Tenaga Kependidikan\",\"perintah\":\"Uraikan pandangan Fakultas/Sekolah Tinggi tentang data pada butir 4.1.1 dan 4.1.2, yang mencakup aspek: kecukupan, kualifikasi, dan pengembangan karir. Jelaskan kendala yang ada dalam pengembangan tenaga dosen tetap.\",\"tabel\":\"-\",\"isian\":\"\",\"keterangan\":\"-\"}}}', 2017, 0, '2017-05-18 04:38:57', '2017-05-18 04:38:57'),
(6, 1, '311225', '3B', 7, '{\"standar7\":{\"7.1\":{\"judul\":\"Penelitian\",\"narasi\":\"-\",\"isian\":\"-\",\"7.1.1\":{\"perintah\":\"Tuliskan jumlah dan dana penelitian yang dilakukan oleh masing-masing PS di lingkungan Fakultas/Sekolah Tinggi dalam tiga tahun terakhir dengan mengikuti format tabel berikut:\",\"tabel\":\"-\",\"isian\":\"-\",\"keterangan\":\"-\"},\"7.1.2\":{\"perintah\":\"Uraikan pandangan pimpinan Fakultas/Sekolah Tinggi tentang data pada butir 7.1.1, dalam perspektif: kesesuaian dengan Visi dan Misi, kecukupan, kewajaran, upaya pengembangan dan peningkatan mutu. Uraikan pula kendala-kendala yang dihadapi.\",\"tabel\":\"-\",\"isian\":\"%3Cp%3Ehahaha%3C%2Fp%3E%3Cp%3Ehehehe%3C%2Fp%3E%3Cp%3Ehohoho%3C%2Fp%3E%3Cp%3Eheheheh%3Cbr%3E%3C%2Fp%3E%3Cp%3E%3Cbr%3E%3C%2Fp%3E\",\"keterangan\":\"-\"}},\"7.2\":{\"judul\":\"Pelayanan/Pengabdian kepada Masyarakat\",\"narasi\":\"Pelayanan/Pengabdian kepada Masyarakat adalah penerapan bidang ilmu untuk menyelesaikan masalah di masyarakat (termasuk masyarakat industri, pemerintah, dsb.)\",\"isian\":\"-\",\"7.2.1\":{\"perintah\":\"Tuliskan jumlah dan dana kegiatan pelayanan/pengabdian kepada masyarakat yang dilakukan oleh masing-masing PS di lingkungan Fakultas dalam tiga tahun terakhir dengan mengikuti format tabel berikut:\",\"tabel\":\"-\",\"isian\":\"-\",\"keterangan\":\"-\"},\"7.2.2\":{\"perintah\":\"Uraikan pandangan Fakultas/Sekolah Tinggi tentang data pada butir 7.2.1 dalam perspektif: kesesuaian dengan Visi dan Misi, kecukupan, kewajaran, upaya pengembangan dan peningkatan mutu. Uraikan pula kendala-kendala yang dihadapi.\",\"tabel\":\"-\",\"isian\":\"<p>7.2.2</p>\",\"keterangan\":\"-\"}}}}', 2017, 0, '2017-05-18 04:39:02', '2017-05-18 04:39:02'),
(7, 1, '311225', 'ED', 0, '', 2017, 0, '2017-05-18 04:39:06', '2017-05-18 04:39:06'),
(8, 2, '311166', '3A', 2, '{\"standar2\":{\"judul\":\"2. TATA PAMONG, KEPEMIMPINAN, SISTEM PENGELOLAAN, DAN PENJAMINAN MUTU\",\"2.1\":{\"judul\":\"2.1 Sistem Tata Pamong\",\"narasi\":\"Sistem tata pamong berjalan secara efektif melalui mekanisme yang disepakati bersama, serta dapat memelihara dan mengakomodasi semua unsur, fungsi, dan peran dalam program studi. Tata pamong didukung dengan budaya organisasi yang dicerminkan dengan ada dan tegaknya aturan, tatacara pemilihan pimpinan, etika dosen, etika mahasiswa, etika tenaga kependidikan, sistem penghargaan dan sanksi serta pedoman dan prosedur pelayanan (administrasi, perpustakaan, laboratorium, dan studio). Sistem tata pamong (input, proses, output dan outcome serta lingkungan eksternal yang menjamin terlaksananya tata pamong yang baik) harus diformulasikan, disosialisasikan, dilaksanakan,  dipantau dan dievaluasi dengan peraturan dan prosedur yang jelas. \",\"perintah\":\"Uraikan secara ringkas sistem dan pelaksanaan tata pamong di Program Studi untuk  membangun sistem tata pamong yang kredibel, transparan, akuntabel, bertanggung jawab dan adil.\",\"isian\":\"%3Cp%3ETata%20pamong%20adalah%20suatu%20sistem%20yang%20dapat%20menjadikan%20kepemimpinan%2C%20sistem%20pengelolaan%20dan%20penjaminan%20mutu%20berjalan%20secara%20efektif%20di%20dalam%20Universitas%2FInstitusi%20yang%20mengelola%20Program%20Studi.%20Hal-hal%20yang%20menjadi%20fokus%20di%20dalam%20tata%20pamong%20termasuk%20bagaimana%20kebijakan%20dan%20strategi%20disusun%20sedemikian%20rupa%20sehingga%20memungkinkan%20terpilihnya%20pemimpin%20dan%20pengelola%20yang%20kredibel%20dan%20sistem%20penyelenggaraan%20Program%20Studi%20secara%20kredibel%2C%20transparan%2C%20akuntabel%2C%20bertanggungjawab%20dan%20menerapkan%20prinsip-prinsip%20keadilan.%3C%2Fp%3E%3Cp%3E%3Cbr%3E%3C%2Fp%3E%3Cp%3EKegiatan%20tata%20pamong%20di%20Program%20Studi%20Manajemen%20Universitas%20Victory%20mengikuti%20berbagai%20peraturan%20dan%20perundang-undangan%20yang%20ditetapkan%20oleh%20Kementerian%20Pendidikan%20dan%20Kebudayaan%2C%20keputusan%20Universitas%20dan%20Keputusan%20Fakultas.%20Tugas%20masing-masing%20unsur%20dan%20struktur%20dalam%20tata%20pamong%2C%20hubungan%20kerja%20antar%20unsur-unsur%20dalam%20tata%20pamong%2C%20serta%20berbagai%20peraturan%20akademik%20di%20lingkup%20Universitas%20telah%20dibuat%20oleh%20pimpinan%20Universitas%20Victory%20dan%20secara%20lebih%20spesifik%20telah%20dibuat%20oleh%20pimpinan%20Fakultas%20Ekonomi%20Universitas%20Victory%20melalui%20Pedoman%20Job%20Description%20sehingga%20penyelenggaraan%20tata%20pamong%20dapat%20menjamin%20tercapainya%20visi%2C%20misi%20dan%20tujuan%20Program%20Studi%20Manajemen%20Universitas%20Victory%3Cbr%3E%3C%2Fp%3E\"},\"2.2\":{\"judul\":\"2.2 Kepemimpinan\",\"narasi\":\"Kepemimpinan efektif mengarahkan dan mempengaruhi perilaku semua unsur dalam program studi, mengikuti nilai, norma, etika, dan budaya organisasi yang disepakati bersama, serta mampu membuat keputusan yang tepat dan cepat. Kepemimpinan mampu memprediksi masa depan, merumuskan dan mengartikulasi visi yang realistik, kredibel, serta mengkomunikasikan visi ke depan, yang menekankan pada keharmonisan hubungan manusia dan mampu menstimulasi secara intelektual dan arif bagi anggota untuk mewujudkan visi organisasi, serta mampu memberikan arahan, tujuan, peran, dan tugas kepada seluruh unsur dalam perguruan tinggi. Dalam menjalankan fungsi kepemimpinan dikenal kepemimpinan operasional, kepemimpinan organisasi, dan kepemimpinan publik.  Kepemimpinan operasional berkaitan dengan kemampuan menjabarkan visi, misi ke dalam kegiatan operasional program studi.  Kepemimpinan organisasi berkaitan dengan pemahaman tata kerja antar unit dalam organisasi perguruan tinggi.  Kepemimpinan publik berkaitan dengan kemampuan menjalin kerjasama dan menjadi rujukan bagi publik.\",\"perintah\":\"Jelaskan pola kepemimpinan dalam Program Studi.\",\"isian\":\"%3Cp%3EBab%20II%20Tentang%20Sistem%20Penyelenggaraan%20Pendidikan%2C%20Pasal%206%20Tentang%20Kegiatan%20Pendidikan.%3C%2Fp%3E%3Col%3E%3Cli%3EKegiatan%20operasional%20di%20bidang%20pendidikan.%20Jadwal%20mengajar%2C%20SK%20mengajar%2C%20evaluasi%20Menentukan%20prioritas%20pekerjaan%20%282%29%20Memberi%20nilai%20kinerja%20bawahan%3C%2Fli%3E%3Cli%3EKegiatan%20operasional%20di%20bidang%20Penelitian%20%28Mengacu%20kepada%20Dokumen%20Renstra%20maka%20Program%20Studi%20melakukan%20seminar%20metodologi%20penelitian%2C%20bantuan%20pendanaan%20penelitian%2C%20bantuan%20biaya%20publikasi%20jurnal%20ilmiah%2C%20workshop%29%3C%2Fli%3E%3Cli%3EKegiatan%20operasional%20di%20bidang%20pengabdian%20masyarakat%20%28Mengacu%20kepada%20Dokum%20Renstra%20maka%20Program%20Studi%20melakukan%20pelatihan%2C%20pendampingan%2C%20workshop%29%3C%2Fli%3E%3C%2Fol%3E\"},\"2.3\":{\"judul\":\"2.3 Sistem Pengelolaan\",\"narasi\":\"Sistem pengelolaan fungsional dan operasional program studi mencakup <i>planning</i>, <i>organizing</i>, <i>staffing</i>, <i>leading</i>, <i>controlling</i> dalam kegiatan  internal maupun eksternal.\",\"perintah\":\"Jelaskan sistem pengelolaan Program Studi serta dokumen pendukungnya.\",\"isian\":\"<p>jsadnsajdaaskdmaksm</p>\"},\"2.4\":{\"judul\":\"2.4 Penjaminan Mutu\",\"perintah\":\"Bagaimanakah pelaksanaan penjaminan mutu pada Program Studi? Jelaskan.\",\"isian\":\"<p>asdkasjd jdasnkdjan</p>\"},\"2.5\":{\"judul\":\"2.5 Umpan Balik\",\"perintah\":\"Apakah program studi telah melakukan kajian tentang proses pembelajaran melalui umpan balik dari dosen, mahasiswa, alumni, dan pengguna lulusan mengenai harapan dan persepsi mereka?  Jika Ya, jelaskan isi umpan balik dan tindak lanjutnya.\",\"isian\":\"%3Ctable%20style%3D%22width%3A%20100%25%3B%22%3E%3Ctbody%3E%3Ctr%3E%3Ctd%20style%3D%22width%3A%2024.9129%25%3B%20background-color%3A%20rgb%28204%2C%20204%2C%20204%29%3B%22%3E%3Cdiv%20style%3D%22text-align%3A%20center%3B%22%3E%3Cstrong%3EUmpan%20Balik%20Dari%3Cbr%3E%281%29%3C%2Fstrong%3E%3C%2Fdiv%3E%3C%2Ftd%3E%3Ctd%20style%3D%22width%3A%2041.5498%25%3B%20background-color%3A%20rgb%28204%2C%20204%2C%20204%29%3B%22%3E%3Cdiv%20style%3D%22text-align%3A%20center%3B%22%3E%3Cstrong%3EIsi%20Umpan%20Balik%3Cbr%3E%282%29%3C%2Fstrong%3E%3C%2Fdiv%3E%3C%2Ftd%3E%3Ctd%20style%3D%22width%3A%2033.3333%25%3B%20background-color%3A%20rgb%28204%2C%20204%2C%20204%29%3B%22%3E%3Cdiv%20style%3D%22text-align%3A%20center%3B%22%3E%3Cstrong%3ETin%3C%2Fstrong%3E%3Cstrong%3Edak%20Lanjut%3Cbr%3E%283%29%3C%2Fstrong%3E%3C%2Fdiv%3E%3C%2Ftd%3E%3C%2Ftr%3E%3Ctr%3E%3Ctd%20style%3D%22width%3A%2024.9129%25%3B%20background-color%3A%20rgb%28255%2C%20255%2C%20255%29%3B%22%3EDosen%3Cbr%3E%3C%2Ftd%3E%3Ctd%20style%3D%22width%3A%2041.5498%25%3B%20background-color%3A%20rgb%28255%2C%20255%2C%20255%29%3B%22%3E%3Cdiv%20data-empty%3D%22true%22%3E%3Cbr%3E%3C%2Fdiv%3E%3C%2Ftd%3E%3Ctd%20style%3D%22width%3A%2033.3333%25%3B%20background-color%3A%20rgb%28255%2C%20255%2C%20255%29%3B%22%3E%3Cdiv%20data-empty%3D%22true%22%3E%3Cbr%3E%3C%2Fdiv%3E%3C%2Ftd%3E%3C%2Ftr%3E%3Ctr%3E%3Ctd%20style%3D%22width%3A%2024.9129%25%3B%20background-color%3A%20rgb%28255%2C%20255%2C%20255%29%3B%22%3EMahasiswa%3Cbr%3E%3C%2Ftd%3E%3Ctd%20style%3D%22width%3A%2041.5498%25%3B%20background-color%3A%20rgb%28255%2C%20255%2C%20255%29%3B%22%3E%3Cdiv%20data-empty%3D%22true%22%3E%3Cbr%3E%3C%2Fdiv%3E%3C%2Ftd%3E%3Ctd%20style%3D%22width%3A%2033.3333%25%3B%20background-color%3A%20rgb%28255%2C%20255%2C%20255%29%3B%22%3E%3Cdiv%20data-empty%3D%22true%22%3E%3Cbr%3E%3C%2Fdiv%3E%3C%2Ftd%3E%3C%2Ftr%3E%3Ctr%3E%3Ctd%20style%3D%22width%3A%2024.9129%25%3B%20background-color%3A%20rgb%28255%2C%20255%2C%20255%29%3B%22%3EAlumni%3Cbr%3E%3C%2Ftd%3E%3Ctd%20style%3D%22width%3A%2041.5498%25%3B%20background-color%3A%20rgb%28255%2C%20255%2C%20255%29%3B%22%3E%3Cdiv%20data-empty%3D%22true%22%3E%3Cbr%3E%3C%2Fdiv%3E%3C%2Ftd%3E%3Ctd%20style%3D%22width%3A%2033.3333%25%3B%20background-color%3A%20rgb%28255%2C%20255%2C%20255%29%3B%22%3E%3Cdiv%20data-empty%3D%22true%22%3E%3Cbr%3E%3C%2Fdiv%3E%3C%2Ftd%3E%3C%2Ftr%3E%3Ctr%3E%3Ctd%20style%3D%22width%3A%2024.9129%25%3B%20background-color%3A%20rgb%28255%2C%20255%2C%20255%29%3B%22%3EPengguna%20Lulusan%3Cbr%3E%3C%2Ftd%3E%3Ctd%20style%3D%22width%3A%2041.5498%25%3B%20background-color%3A%20rgb%28255%2C%20255%2C%20255%29%3B%22%3E%3Cdiv%20data-empty%3D%22true%22%3E%3Cbr%3E%3C%2Fdiv%3E%3C%2Ftd%3E%3Ctd%20style%3D%22width%3A%2033.3333%25%3B%20background-color%3A%20rgb%28255%2C%20255%2C%20255%29%3B%22%3E%3Cdiv%20data-empty%3D%22true%22%3E%3Cbr%3E%3C%2Fdiv%3E%3C%2Ftd%3E%3C%2Ftr%3E%3C%2Ftbody%3E%3C%2Ftable%3E\"},\"2.6\":{\"judul\":\"2.6 Keberlanjutan\",\"perintah\":\"Jelaskan upaya untuk menjamin keberlanjutan (sustainability) program studi ini, khususnya dalam hal:\",\"pertanyaan\":[\"a. Upaya untuk peningkatan animo calon mahasiswa\",\"b. Upaya peningkatan mutu manajemen\",\"c. Upaya untuk peningkatan mutu lulusan\",\"d. Upaya untuk pelaksanaan dan hasil kerjasama kemitraan\",\"e. Upaya dan prestasi memperoleh dana hibah kompetitif\"],\"isian\":\"<p>askdns ajskdnakj askjndasj</p>\"}}}', 2017, 0, '2017-05-18 05:17:17', '2017-05-18 05:17:17'),
(9, 2, '311166', '3A', 4, '{\"standar4\":{\"4.1\":{\"judul\":\"Sistem Seleksi dan Pengembangan\",\"narasi\":\"-\",\"perintah\":\"Jelaskan sistem seleksi/perekrutan, penempatan, pengembangan, retensi, dan pemberhentian dosen dan tenaga kependidikan untuk menjamin mutu penyelenggaraan program akademik (termasuk informasi tentang ketersediaan pedoman tertulis dan konsistensi pelaksanaannya).\",\"isian\":\"\"},\"4.2\":{\"judul\":\"Monitoring dan Evaluasi\",\"narasi\":\"-\",\"perintah\":\"Jelaskan sistem monitoring dan evaluasi, serta rekam jejak kinerja akademik dosen dan kinerja tenaga kependidikan (termasuk informasi tentang ketersediaan pedoman tertulis, dan monitoring dan evaluasi kinerja dosen dalam tridarma serta dokumentasinya).\",\"isian\":\"\"},\"4.3\":{\"judul\":\"Dosen Tetap\",\"narasi\":\"Dosen tetap dalam borang akreditasi BAN-PT adalah dosen yang diangkat dan ditempatkan sebagai tenaga tetap pada PT yang bersangkutan termasuk dosen penugasan Kopertis, dan dosen yayasan pada PTS dalam bidang yang relevan dengan keahlian bidang studinya. Seorang dosen hanya dapat menjadi dosen tetap pada satu perguruan tinggi, dan mempunyai penugasan kerja minimum 36 jam/minggu.\\nDosen tetap dipilah dalam 2 kelompok, yaitu:\\n1. dosen tetap yang bidang keahliannya sesuai dengan PS\\n2. dosen tetap yang bidang keahliannya di luar PS\",\"isian\":{\"4.3.1\":{\"perintah\":\"Data dosen tetap yang bidang keahliannya sesuai dengan bidang PS:\",\"tabel\":[{\"Nama Dosen Tetap\":\"\",\"NIDN**\":\"\",\"Tgl. Lahir\":\"\",\"Jabatan Akademik***\":\"\",\"Gelar Akademik\":\"\",\"Pendidikan S1, S2, S3 dan Asal PT*\":\"\",\"Bidang Keahlian untuk Setiap Jenjang Pendidikan\":\"\"}],\"keterangan\":\"* Lampirkan fotokopi ijazah\\n** NIDN : Nomor Induk Dosen Nasional\\n** Dosen yang telah memperoleh sertifikat dosen agar diberi tanda (***) dan fotokopi sertifikatnya agar dilampirkan.\"},\"4.3.2\":{\"perintah\":\"Data dosen tetap yang bidang keahliannya di luar bidang PS:\",\"tabel\":[{\"Nama Dosen Tetap\":\"\",\"NIDN**\":\"\",\"Tgl. Lahir\":\"\",\"Jabatan Akademik***\":\"\",\"Gelar Akademik\":\"\",\"Pendidikan S1, S2, S3 dan Asal PT*\":\"\",\"Bidang Keahlian untuk Setiap Jenjang Pendidikan\":\"\"}],\"keterangan\":\"* Lampirkan fotokopi ijazah\\n** NIDN : Nomor Induk Dosen Nasional\\n*** Dosen yang telah memperoleh sertifikat dosen agar diberi tanda (***) dan fotokopi sertifikatnya agar dilampirkan.\"},\"4.3.3\":{\"perintah\":\"Aktivitas dosen tetap yang bidang bidang keahliannya sesuai dengan PS dinyatakan dalam sks rata-rata per semester pada satu tahun akademik terakhir, diisi dengan perhitungan sesuai SK Dirjen DIKTI no. 48 tahun 1983 (12 sks setara dengan 36 jam kerja per minggu)\",\"tabel\":[{\"Nama Dosen Tetap\":\"\",\"sks Pengajaran pada\":{\"PS Sendiri\":\"\",\"PS Lain PT Sendiri\":\"\",\"PT Lain\":\"\"},\"sks Penelitian\":\"\",\"sks Pengabdian kepada Masyarakat\":\"\",\"sks Manajemen**\":{\"PT Sendiri\":\"\",\"PT Lain\":\"\"},\"Jumlah sks\":\"\",\"Jumlah\":{\"3\":\"\",\"4\":\"\",\"5\":\"\",\"6\":\"\",\"7\":\"\",\"8\":\"\",\"9\":\"\",\"10\":\"\"},\"Rata-rata*\":{\"3\":\"\",\"4\":\"\",\"5\":\"\",\"6\":\"\",\"7\":\"\",\"8\":\"\",\"9\":\"\",\"10\":\"\"}}],\"keterangan\":\"Catatan: \\n Sks pengajaran sama dengan sks mata kuliah yang diajarkan. Bila dosen mengajar kelas paralel, maka beban sks pengajaran untuk satu tambahan kelas paralel adalah 1 / 2 kali sks mata kuliah.\\n * rata - rata adalah jumlah sks dibagi dengan jumlah dosen tetap. \\n ** sks manajemen dihitung sbb: \\n Beban kerja manajemen untuk jabatan - jabatan ini adalah sbb.\\nBeban kerja manajemen untuk jabatan - jabatan ini adalah sbb. \\n - rektor / direktur politeknik 12 sks \\n - pembantu rektor / dekan / ketua sekolah tinggi / direktur akademi 10 sks \\n - ketua lembaga / kepala UPT 8 sks\\n - pembantu dekan / ketua jurusan / kepala pusat / ketua senat akademik / ketua senat fakultas 6 sks\\n - sekretaris jurusan / sekretaris pusat / sekretaris senat akademik / sekretaris senat universitas / sekretaris senat fakultas / kepala lab.atau studio / kepala balai / ketua PS 4 sks\\n - sekretaris PS 3 sks\\n Bagi PT yang memiliki struktur organisasi yang berbeda, beban kerja manajemen untuk jabatan baru disamakan dengan beban kerja jabatan yang setara.\"},\"4.3.4\":{\"perintah\":\"Tuliskan data aktivitas mengajar dosen tetap yang bidang keahliannya sesuai dengan PS,  dalam satu tahun akademik terakhir di PS ini dengan mengikuti format tabel berikut:\",\"tabel\":[{\"Nama Dosen Tetap\":\"\",\"Bidang Keahlian\":\"\",\"Kode Mata Kuliah\":\"\",\"Nama Mata Kuliah\":\"\",\"Jumlah Kelas\":\"\",\"Jumlah Pertemuan yang Direncanakan\":\"\",\"Jumlah Pertemuan yang Dilaksanakan\":\"\",\"Jumlah\":{\"7\":\"\",\"8\":\"\"}}]},\"4.3.5\":{\"perintah\":\"Tuliskan data aktivitas mengajar dosen tetap yang bidang keahliannya di luar PS,  dalam satu tahun akademik terakhir di PS ini dengan mengikuti format tabel berikut:\",\"tabel\":[{\"Nama Dosen Tetap\":\"\",\"Bidang Keahlian\":\"\",\"Kode Mata Kuliah\":\"\",\"Nama Mata Kuliah\":\"\",\"Jumlah Kelas\":\"\",\"Jumlah Pertemuan yang Direncanakan\":\"\",\"Jumlah Pertemuan yang Dilaksanakan\":\"\",\"Jumlah\":{\"7\":\"\",\"8\":\"\"}}]}}},\"4.4\":{\"judul\":\"Dosen Tidak Tetap\",\"4.4.1\":{\"perintah\":\"Tuliskan data dosen tidak tetap pada PS dengan mengikuti format tabel berikut:\",\"tabel\":[{\"Nama Dosen Tidak Tetap\":\"\",\"NIDN**\":\"\",\"Tgl. Lahir\":\"\",\"Jabatan Akademik***\":\"\",\"Gelar Akademik\":\"\",\"Pendidikan S1, S2, S3 dan Asal PT*\":\"\",\"Bidang Keahliah untuk Setiap Jenjang Pendidikan\":\"\"}],\"keterangan\":\"* Lampirkan fotokopi ijazah.\\n** NIDN : Nomor Induk Dosen Nasional\\n*** Dosen yang telah memperoleh sertifikat dosen agar diberi tanda (***)dan fotokopi sertifikatnya agar dilampirkan.\"},\"4.4.2\":{\"perintah\":\"Tuliskan data aktivitas mengajar dosen tidak tetap pada satu tahun terakhir di PS ini dengan mengikuti format tabel berikut:\",\"tabel\":[{\"Nama Dosen Tdk Tetap\":\"\",\"Bidang Keahlian\":\"\",\"Kode Mata Kuliah\":\"\",\"Nama Mata Kuliah\":\"\",\"Jumlah Kelas\":\"\",\"Jumlah Pertemuan yang Direncanakan\":\"\",\"Jumlah Pertemuan yang Dilaksanakan\":\"\",\"Jumlah\":{\"7\":\"\",\"8\":\"\"}}]}},\"4.5\":{\"judul\":\"Upaya Peningkatan Sumber Daya Manusia (SDM) dalam tiga tahun terakhir\",\"4.5.1\":{\"perintah\":\"Kegiatan tenaga ahli/pakar sebagai pembicara dalam seminar/pelatihan, pembicara tamu, dsb, dari luar PT sendiri (tidak termasuk dosen tidak tetap)\",\"tabel\":[{\"Nama Tenaga Ahli/Pakar\":\"\",\"Nama dan Judul Kegiatan\":\"\",\"Waktu Pelaksanaan\":\"\"}]},\"4.5.2\":{\"perintah\":\"Peningkatan kemampuan dosen tetap melalui program tugas belajar dalam bidang yang sesuai dengan bidang PS\",\"tabel\":[{\"Nama Dosen\":\"\",\"Jenjang Pendidikan Lanjut\":\"\",\"Bidang Studi\":\"\",\"Perguruan Tinggi\":\"\",\"Negara\":\"\",\"Tahun Mulai Studi\":\"\"}]},\"4.5.3\":{\"perintah\":\"Kegiatan dosen tetap yang bidang keahliannya sesuai dengan PS dalam seminar ilmiah/lokakarya/penataran/workshop/ pagelaran/ pameran/peragaan yang tidak hanya melibatkan dosen PT sendiri\",\"tabel\":[{\"Nama Dosen\":\"\",\"Jenis Kegiatan*\":\"\",\"Tempat\":\"\",\"Waktu\":\"\",\"Sebagai\":{\"Penyaji\":\"\",\"Peserta\":\"\"}}],\"keterangan\":\"* Jenis kegiatan : Seminar ilmiah, Lokakarya, Penataran/Pelatihan, Workshop, Pagelaran, Pameran, Peragaan dll\"},\"4.5.4\":{\"perintah\":\"Sebutkan pencapaian prestasi/reputasi dosen (misalnya prestasi dalam pendidikan, penelitian dan pelayanan/pengabdian kepada masyarakat).\",\"keterangan\":\"* Sediakan dokumen pendukung pada saat asesmen lapangan.\",\"tabel\":[{\"Nama Dosen\":\"\",\"Prestasi yang Dicapai*\":\"\",\"Waktu Pencapaian\":\"\",\"Tingkat (Lokal, Nasional, Internasional)\":\"\"}]},\"4.5.5\":{\"perintah\":\"Sebutkan keikutsertaan dosen tetap dalam organisasi keilmuan atau organisasi profesi.\",\"tabel\":[{\"Nama Dosen\":\"\",\"Nama Organisasi Keilmuan atau Organisasi Profesi\":\"\",\"Kurun Waktu\":\"\",\"Tingkat (Lokal, Nasional, Internasional\":\"\"}]}},\"4.6\":{\"judul\":\"Tenaga Kependidikan\",\"4.6.1\":{\"perintah\":\"Tuliskan data tenaga kependidikan  yang ada di PS, Jurusan, Fakultas atau PT yang melayani mahasiswa PS dengan mengikuti format tabel berikut:\",\"tabel\":[{\"Jenis Tenaga Kependidikan\":\"Pustakawan*\",\"Jumlah Tenaga Kependidikan dengan Pendidikan Terakhir\":{\"S3\":\"\",\"S2\":\"\",\"S1\":\"\",\"D4\":\"\",\"D3\":\"\",\"D2\":\"\",\"D1\":\"\",\"SMA/SMK\":\"\"},\"Unit Kerja\":\"\"},{\"Jenis Tenaga Kependidikan\":\"Laboran/ Teknisi/ Analis/ Operator/ Programmer\",\"Jumlah Tenaga Kependidikan dengan Pendidikan Terakhir\":{\"S3\":\"\",\"S2\":\"\",\"S1\":\"\",\"D4\":\"\",\"D3\":\"\",\"D2\":\"\",\"D1\":\"\",\"SMA/SMK\":\"\"},\"Unit Kerja\":\"\"},{\"Jenis Tenaga Kependidikan\":\"Administrasi\",\"Jumlah Tenaga Kependidikan dengan Pendidikan Terakhir\":{\"S3\":\"\",\"S2\":\"\",\"S1\":\"\",\"D4\":\"\",\"D3\":\"\",\"D2\":\"\",\"D1\":\"\",\"SMA/SMK\":\"\"},\"Unit Kerja\":\"\"},{\"Jumlah Tenaga Kependidikan dengan Pendidikan Terakhir\":{\"S3\":\"\",\"S2\":\"\",\"S1\":\"\",\"D4\":\"\",\"D3\":\"\",\"D2\":\"\",\"D1\":\"\",\"SMA/SMK\":\"\"}}],\"keterangan\":\"* Hanya yang memiliki pendidikan formal dalam bidang perpustakaan\"},\"4.6.2\":{\"perintah\":\"Jelaskan upaya yang telah dilakukan PS dalam meningkatkan kualifikasi dan kompetensi tenaga kependidikan, dalam hal pemberian kesempatan belajar/pelatihan, pemberian fasilitas termasuk dana, dan jenjang karir.\",\"isian\":\"\"}}}}', 2017, 0, '2017-05-16 02:16:13', NULL);
INSERT INTO `borang` (`id`, `id_histori`, `kode_prodi`, `jenis`, `standar`, `isi`, `tahun`, `is_reviewed`, `created_at`, `updated_at`) VALUES
(10, 2, '311166', '3A', 7, '{\"standar7\":{\"judul\":\"7. PENELITIAN, PELAYANAN/PENGABDIAN KEPADA MASYARAKAT, DAN KERJASAMA\",\"7.1\":{\"judul\":\"7.1 Penelitian Dosen Tetap yang Bidang Keahliannya Sesuai dengan PS\",\"7.1.1\":{\"perintah\":\"Tuliskan jumlah judul penelitian* yang sesuai dengan bidang keilmuan PS, yang dilakukan oleh dosen tetap yang bidang keahliannya sesuai dengan PS selama tiga tahun terakhir dengan mengikuti format tabel berikut:\",\"keterangan\":\"Catatan: (*) sediakan data pendukung pada saat asesmen lapangan\"},\"7.1.2\":{\"perintah\":\"Adakah mahasiswa tugas akhir yang dilibatkan dalam penelitian dosen dalam tiga tahun terakhir?\",\"perintah2\":\"Jika ada, banyaknya mahasiswa PS yang ikut serta dalam penelitian dosen adalah  ... orang, dari ... mahasiswa yang melakukan tugas akhir melalui skripsi.\",\"isian\":\"<p>asdas</p>rnrn<p>asda</p>\"},\"7.1.3\":{\"perintah\":\"Tuliskan judul artikel ilmiah/karya ilmiah/karya seni/buku yang dihasilkan selama tiga tahun terakhir oleh dosen tetap yang bidang keahliannya sesuai dengan PS dengan mengikuti format tabel berikut:\",\"keterangan\":\"Catatan: * = Tuliskan banyaknya dosen pada sel yang sesuai\"},\"7.1.4\":{\"perintah\":\"Sebutkan karya dosen dan atau mahasiswa Program Studi yang telah memperoleh/sedang memproses perlindungan Hak atas Kekayaan Intelektual (HaKI) selama tiga tahun terakhir.\",\"keterangan\":\"*Lampirkan surat paten HaKI atau keterangan sejenis.\"}},\"7.2\":{\"judul\":\"7.2 Kegiatan Pelayanan/Pengabdian kepada Masyarakat (PKM)\",\"7.2.1\":{\"perintah\":\"Tuliskan jumlah kegiatan Pelayanan/Pengabdian kepada Masyarakat (*) yang sesuai dengan bidang keilmuan PS selama tiga tahun terakhir yang dilakukan oleh dosen tetap yang bidang keahliannya sesuai dengan PS dengan mengikuti format tabel berikut:\",\"keterangan\":\"Catatan: (*) Pelayanan/Pengabdian kepada Masyarakat adalah penerapan bidang ilmu untuk menyelesaikan masalah di masyarakat (termasuk masyarakat industri, pemerintah, dsb.)\"},\"7.2.2\":{\"perintah\":\"Adakah mahasiswa yang dilibatkan dalam kegiatan pelayanan/pengabdian kepada masyarakat dalam tiga tahun terakhir?\",\"perintah2\":\"Jika Ya, jelaskan tingkat partisipasi dan bentuk keterlibatan mahasiswa dalam kegiatan pelayanan/pengabdian kepada masyarakat\",\"isian\":\"\"}},\"7.3\":{\"judul\":\"7.3 Kegiatan Kerjasama dengan Instansi Lain\",\"7.3.1\":{\"perintah\":\"Tuliskan instansi dalam negeri yang menjalin kerjasama* yang terkait dengan program studi/jurusan dalam tiga tahun terakhir.\",\"keterangan\":\"Catatan : (*) dokumen pendukung disediakan pada saat asesmen lapangan\"},\"7.3.2\":{\"perintah\":\"Tuliskan instansi luar negeri yang menjalin kerjasama* yang terkait dengan program studi/jurusan dalam tiga tahun terakhir.\",\"keterangan\":\"Catatan : (*) dokumen pendukung disediakan pada saat asesmen lapangan\"}},\"7\":{\"isian\":{\"nomorIsian\":\"<p>hahaha?</p>\"}}}}', 2017, 0, '2017-05-16 09:09:55', '2017-05-16 09:09:55'),
(11, 2, '311166', '3B', 2, '{\"standar2\":{\"judul\":\"2. TATA PAMONG, KEPEMIMPINAN, SISTEM PENGELOLAAN, DAN PENJAMINAN MUTU\",\"2.1\":{\"judul\":\"2.1 Tata Pamong\",\"narasi\":\"Tata pamong adalah suatu sistem yang dapat menjadikan kepemimpinan, sistem pengelolaan dan penjaminan mutu berjalan secara efektif di dalam universitas/institusi yang mengelola program studi.  Hal-hal yang menjadi fokus di dalam tata pamong termasuk bagaimana kebijakan  dan strategi disusun sedemikian rupa sehingga memungkinkan terpilihnya pemimpin dan pengelola yang kredibel dan sistem penyelenggaraan program studi secara kredibel, transparan, akuntabel, bertanggung jawab dan  menerapkan prinsip-prinsip keadilan. Organisasi dan sistem tata pamong yang baik <i>(good governance)</i> mencerminkan kredibilitas, transparansi, akuntabilitas, tanggungjawab dan keadilan Fakultas/Sekolah Tinggi dalam mengelola program studi. \",\"perintah\":\"Uraikan secara ringkas sistem dan pelaksanaan tata pamong di Fakultas/Sekolah Tinggi untuk memilih pemimpin dan membangun sistem tata pamong yang kredibel, akuntabel, transparan, bertanggung jawab dan adil.\",\"isian\":\"Tes isi 2.1\"},\"2.2\":{\"judul\":\" 2.2  Struktur Organisasi, Kordinasi, dan Cara Kerja Fakultas/Sekolah Tinggi\",\"narasi\":\"\",\"perintah\":\"Gambarkan struktur organisasi  Fakultas/Sekolah Tinggi serta tugas/fungsi dari tiap unit yang ada.\",\"isian\":\"Tes isi 2.2\"},\"2.3\":{\"judul\":\"2.3 Kepemimpinan\",\"narasi\":\"Kepemimpinan efektif mengarahkan dan mempengaruhi perilaku semua unsur dalam program studi, mengikuti nilai, norma, etika, dan budaya organisasi yang disepakati bersama, serta mampu  membuat keputusan yang tepat dan cepat.Kepemimpinan mampu memprediksi masa depan, merumuskan dan  mengartikulasi visi yang realistis, kredibel,  serta mengkomunikasikan visi ke depan, yang menekankan pada keharmonisan hubungan manusia dan mampu menstimulasi secara  intelektual dan arif bagi anggota untuk mewujudkan visi organisasi, serta mampu memberikan arahan, tujuan, peran, dan tugas kepada  seluruh unsur dalam perguruan tinggi. Dalam menjalankan fungsi   kepemimpinan dikenal kepemimpinan operasional, kepemimpinan  organisasi, dan kepemimpinan publik.  Kepemimpinan operasional  berkaitan dengan kemampuan menjabarkan visi, misi ke dalam   kegiatan operasional program studi.  Kepemimpinan organisasi   berkaitan dengan pemahaman tata kerja antar unit dalam organisasi  perguruan tinggi.  Kepemimpinan publik berkaitan dengan kemampuan  menjalin kerjasama dan menjadi rujukan bagi publik.\",\"perintah\":\"Jelaskan pola kepemimpinan dalam Fakultas/Sekolah Tinggi.\",\"isian\":\"Tes isi 2.3\"},\"2.4\":{\"judul\":\"2.4 Sistem Pengelolaan\",\"narasi\":\"Sistem pengelolaan fungsional dan operasional program studi mencakup <i>planning, organizing, staffing, leading, controlling,</i> serta operasi internal dan eksternal\",\"perintah\":\"Jelaskan sistem pengelolaan Fakultas/Sekolah Tinggi serta ketersediaan Renstra dan Renop.\",\"isian\":\"Tes isi 2.4\"},\"2.5\":{\"judul\":\"2.5 Sistem Penjaminan Mutu Fakultas/Sekolah Tinggi\",\"perintah\":\"Jelaskan sistem penjaminan mutu dalam Fakultas/Sekolah Tinggi.  Jelaskan pula standar mutu yang digunakan.\",\"isian\":\"Tes isi 2.5\"}}}', 2017, 0, '2017-05-18 04:39:11', '2017-05-18 04:39:11'),
(12, 2, '311166', '3B', 4, '{\"standar4\":{\"4.1\":{\"judul\":\"Dosen Tetap\",\"narasi\":\"Dosen tetap dalam borang akreditasi BAN-PT adalah dosen yang diangkat dan ditempatkan sebagai tenaga tetap pada PT yang bersangkutan; termasuk dosen penugasan Kopertis, dan dosen yayasan pada PTS dalam bidang yang relevan dengan keahlian bidang studinya. Seorang dosen hanya dapat menjadi dosen tetap pada satu perguruan tinggi, dan mempunyai penugasan kerja minimum 20jam/minggu.\",\"isian\":\"-\",\"4.1.1\":{\"perintah\":\"Tuliskan jumlah dosen tetap yang bidang keahliannya sesuai dengan masing-masing PS di lingkungan Fakultas/Sekolah Tinggi, berdasarkan jabatan fungsional dan pendidikan tertinggi, dengan mengikuti format tabel berikut:\",\"tabel\":\"-\",\"isian\":\"-\",\"keterangan\":\"-\"},\"4.1.2\":{\"perintah\":\"Tuliskan banyaknya penggantian dan perekrutan serta pengembangan dosen tetap yang bidang keahliannya sesuai dengan program studi pada Fakultas/Sekolah Tinggi dalam tiga tahun terakhir dengan mengikuti format tabel berikut:\",\"tabel\":\"-\",\"isian\":\"-\",\"keterangan\":\"-\"},\"4.1.3\":{\"perintah\":\"Uraikan pandangan Fakultas/Sekolah Tinggi tentang data pada butir 4.1.1 dan 4.1.2, yang mencakup aspek: kecukupan, kualifikasi, dan pengembangan karir. Jelaskan kendala yang ada dalam pengembangan tenaga dosen tetap.\",\"tabel\":\"-\",\"isian\":\"\",\"keterangan\":\"-\"}},\"4.2\":{\"judul\":\"Tenaga Kependidikan\",\"perintah\":\"Uraikan pandangan Fakultas/Sekolah Tinggi tentang data pada butir 4.1.1 dan 4.1.2, yang mencakup aspek: kecukupan, kualifikasi, dan pengembangan karir. Jelaskan kendala yang ada dalam pengembangan tenaga dosen tetap.\",\"tabel\":\"-\",\"isian\":\"\",\"keterangan\":\"-\"}}}', 2017, 0, '2017-05-18 04:39:14', '2017-05-18 04:39:14'),
(13, 2, '311166', '3B', 7, '{\"standar7\":{\"7.1\":{\"judul\":\"Penelitian\",\"narasi\":\"-\",\"isian\":\"-\",\"7.1.1\":{\"perintah\":\"Tuliskan jumlah dan dana penelitian yang dilakukan oleh masing-masing PS di lingkungan Fakultas/Sekolah Tinggi dalam tiga tahun terakhir dengan mengikuti format tabel berikut:\",\"tabel\":\"-\",\"isian\":\"-\",\"keterangan\":\"-\"},\"7.1.2\":{\"perintah\":\"Uraikan pandangan pimpinan Fakultas/Sekolah Tinggi tentang data pada butir 7.1.1, dalam perspektif: kesesuaian dengan Visi dan Misi, kecukupan, kewajaran, upaya pengembangan dan peningkatan mutu. Uraikan pula kendala-kendala yang dihadapi.\",\"tabel\":\"-\",\"isian\":\"%3Cp%3Ehahaha%3C%2Fp%3E%3Cp%3Ehehehe%3C%2Fp%3E%3Cp%3Ehohoho%3C%2Fp%3E%3Cp%3Eheheheh%3Cbr%3E%3C%2Fp%3E%3Cp%3E%3Cbr%3E%3C%2Fp%3E\",\"keterangan\":\"-\"}},\"7.2\":{\"judul\":\"Pelayanan/Pengabdian kepada Masyarakat\",\"narasi\":\"Pelayanan/Pengabdian kepada Masyarakat adalah penerapan bidang ilmu untuk menyelesaikan masalah di masyarakat (termasuk masyarakat industri, pemerintah, dsb.)\",\"isian\":\"-\",\"7.2.1\":{\"perintah\":\"Tuliskan jumlah dan dana kegiatan pelayanan/pengabdian kepada masyarakat yang dilakukan oleh masing-masing PS di lingkungan Fakultas dalam tiga tahun terakhir dengan mengikuti format tabel berikut:\",\"tabel\":\"-\",\"isian\":\"-\",\"keterangan\":\"-\"},\"7.2.2\":{\"perintah\":\"Uraikan pandangan Fakultas/Sekolah Tinggi tentang data pada butir 7.2.1 dalam perspektif: kesesuaian dengan Visi dan Misi, kecukupan, kewajaran, upaya pengembangan dan peningkatan mutu. Uraikan pula kendala-kendala yang dihadapi.\",\"tabel\":\"-\",\"isian\":\"<p>7.2.2</p>\",\"keterangan\":\"-\"}}}}', 2017, 0, '2017-05-18 04:39:18', '2017-05-18 04:39:18'),
(14, 2, '311166', 'ED', 0, '<p>daskmdak</p>', 2017, 0, '2017-05-18 04:39:22', '2017-05-18 04:39:22'),
(15, 3, '311166', '3A', 2, '{\"standar2\":{\"judul\":\"2. TATA PAMONG, KEPEMIMPINAN, SISTEM PENGELOLAAN, DAN PENJAMINAN MUTU\",\"2.1\":{\"judul\":\"2.1 Sistem Tata Pamong\",\"narasi\":\"Sistem tata pamong berjalan secara efektif melalui mekanisme yang disepakati bersama, serta dapat memelihara dan mengakomodasi semua unsur, fungsi, dan peran dalam program studi. Tata pamong didukung dengan budaya organisasi yang dicerminkan dengan ada dan tegaknya aturan, tatacara pemilihan pimpinan, etika dosen, etika mahasiswa, etika tenaga kependidikan, sistem penghargaan dan sanksi serta pedoman dan prosedur pelayanan (administrasi, perpustakaan, laboratorium, dan studio). Sistem tata pamong (input, proses, output dan outcome serta lingkungan eksternal yang menjamin terlaksananya tata pamong yang baik) harus diformulasikan, disosialisasikan, dilaksanakan,  dipantau dan dievaluasi dengan peraturan dan prosedur yang jelas. \",\"perintah\":\"Uraikan secara ringkas sistem dan pelaksanaan tata pamong di Program Studi untuk  membangun sistem tata pamong yang kredibel, transparan, akuntabel, bertanggung jawab dan adil.\",\"isian\":\"%3Cp%3ETata%20pamong%20adalah%20suatu%20sistem%20yang%20dapat%20menjadikan%20kepemimpinan%2C%20sistem%20pengelolaan%20dan%20penjaminan%20mutu%20berjalan%20secara%20efektif%20di%20dalam%20Universitas%2FInstitusi%20yang%20mengelola%20Program%20Studi.%20Hal-hal%20yang%20menjadi%20fokus%20di%20dalam%20tata%20pamong%20termasuk%20bagaimana%20kebijakan%20dan%20strategi%20disusun%20sedemikian%20rupa%20sehingga%20memungkinkan%20terpilihnya%20pemimpin%20dan%20pengelola%20yang%20kredibel%20dan%20sistem%20penyelenggaraan%20Program%20Studi%20secara%20kredibel%2C%20transparan%2C%20akuntabel%2C%20bertanggungjawab%20dan%20menerapkan%20prinsip-prinsip%20keadilan.%3C%2Fp%3E%3Cp%3E%3Cbr%3E%3C%2Fp%3E%3Cp%3EKegiatan%20tata%20pamong%20di%20Program%20Studi%20Manajemen%20Universitas%20Victory%20mengikuti%20berbagai%20peraturan%20dan%20perundang-undangan%20yang%20ditetapkan%20oleh%20Kementerian%20Pendidikan%20dan%20Kebudayaan%2C%20keputusan%20Universitas%20dan%20Keputusan%20Fakultas.%20Tugas%20masing-masing%20unsur%20dan%20struktur%20dalam%20tata%20pamong%2C%20hubungan%20kerja%20antar%20unsur-unsur%20dalam%20tata%20pamong%2C%20serta%20berbagai%20peraturan%20akademik%20di%20lingkup%20Universitas%20telah%20dibuat%20oleh%20pimpinan%20Universitas%20Victory%20dan%20secara%20lebih%20spesifik%20telah%20dibuat%20oleh%20pimpinan%20Fakultas%20Ekonomi%20Universitas%20Victory%20melalui%20Pedoman%20Job%20Description%20sehingga%20penyelenggaraan%20tata%20pamong%20dapat%20menjamin%20tercapainya%20visi%2C%20misi%20dan%20tujuan%20Program%20Studi%20Manajemen%20Universitas%20Victory%3Cbr%3E%3C%2Fp%3E\"},\"2.2\":{\"judul\":\"2.2 Kepemimpinan\",\"narasi\":\"Kepemimpinan efektif mengarahkan dan mempengaruhi perilaku semua unsur dalam program studi, mengikuti nilai, norma, etika, dan budaya organisasi yang disepakati bersama, serta mampu membuat keputusan yang tepat dan cepat. Kepemimpinan mampu memprediksi masa depan, merumuskan dan mengartikulasi visi yang realistik, kredibel, serta mengkomunikasikan visi ke depan, yang menekankan pada keharmonisan hubungan manusia dan mampu menstimulasi secara intelektual dan arif bagi anggota untuk mewujudkan visi organisasi, serta mampu memberikan arahan, tujuan, peran, dan tugas kepada seluruh unsur dalam perguruan tinggi. Dalam menjalankan fungsi kepemimpinan dikenal kepemimpinan operasional, kepemimpinan organisasi, dan kepemimpinan publik.  Kepemimpinan operasional berkaitan dengan kemampuan menjabarkan visi, misi ke dalam kegiatan operasional program studi.  Kepemimpinan organisasi berkaitan dengan pemahaman tata kerja antar unit dalam organisasi perguruan tinggi.  Kepemimpinan publik berkaitan dengan kemampuan menjalin kerjasama dan menjadi rujukan bagi publik.\",\"perintah\":\"Jelaskan pola kepemimpinan dalam Program Studi.\",\"isian\":\"%3Cp%3EBab%20II%20Tentang%20Sistem%20Penyelenggaraan%20Pendidikan%2C%20Pasal%206%20Tentang%20Kegiatan%20Pendidikan.%3C%2Fp%3E%3Col%3E%3Cli%3EKegiatan%20operasional%20di%20bidang%20pendidikan.%20Jadwal%20mengajar%2C%20SK%20mengajar%2C%20evaluasi%20Menentukan%20prioritas%20pekerjaan%20%282%29%20Memberi%20nilai%20kinerja%20bawahan%3C%2Fli%3E%3Cli%3EKegiatan%20operasional%20di%20bidang%20Penelitian%20%28Mengacu%20kepada%20Dokumen%20Renstra%20maka%20Program%20Studi%20melakukan%20seminar%20metodologi%20penelitian%2C%20bantuan%20pendanaan%20penelitian%2C%20bantuan%20biaya%20publikasi%20jurnal%20ilmiah%2C%20workshop%29%3C%2Fli%3E%3Cli%3EKegiatan%20operasional%20di%20bidang%20pengabdian%20masyarakat%20%28Mengacu%20kepada%20Dokum%20Renstra%20maka%20Program%20Studi%20melakukan%20pelatihan%2C%20pendampingan%2C%20workshop%29%3C%2Fli%3E%3C%2Fol%3E\"},\"2.3\":{\"judul\":\"2.3 Sistem Pengelolaan\",\"narasi\":\"Sistem pengelolaan fungsional dan operasional program studi mencakup <i>planning</i>, <i>organizing</i>, <i>staffing</i>, <i>leading</i>, <i>controlling</i> dalam kegiatan  internal maupun eksternal.\",\"perintah\":\"Jelaskan sistem pengelolaan Program Studi serta dokumen pendukungnya.\",\"isian\":\"<p>jsadnsajdaaskdmaksm</p>\"},\"2.4\":{\"judul\":\"2.4 Penjaminan Mutu\",\"perintah\":\"Bagaimanakah pelaksanaan penjaminan mutu pada Program Studi? Jelaskan.\",\"isian\":\"<p>asdkasjd jdasnkdjan</p>\"},\"2.5\":{\"judul\":\"2.5 Umpan Balik\",\"perintah\":\"Apakah program studi telah melakukan kajian tentang proses pembelajaran melalui umpan balik dari dosen, mahasiswa, alumni, dan pengguna lulusan mengenai harapan dan persepsi mereka?  Jika Ya, jelaskan isi umpan balik dan tindak lanjutnya.\",\"isian\":\"%3Ctable%20style%3D%22width%3A%20100%25%3B%22%3E%3Ctbody%3E%3Ctr%3E%3Ctd%20style%3D%22width%3A%2024.9129%25%3B%20background-color%3A%20rgb%28204%2C%20204%2C%20204%29%3B%22%3E%3Cdiv%20style%3D%22text-align%3A%20center%3B%22%3E%3Cstrong%3EUmpan%20Balik%20Dari%3Cbr%3E%281%29%3C%2Fstrong%3E%3C%2Fdiv%3E%3C%2Ftd%3E%3Ctd%20style%3D%22width%3A%2041.5498%25%3B%20background-color%3A%20rgb%28204%2C%20204%2C%20204%29%3B%22%3E%3Cdiv%20style%3D%22text-align%3A%20center%3B%22%3E%3Cstrong%3EIsi%20Umpan%20Balik%3Cbr%3E%282%29%3C%2Fstrong%3E%3C%2Fdiv%3E%3C%2Ftd%3E%3Ctd%20style%3D%22width%3A%2033.3333%25%3B%20background-color%3A%20rgb%28204%2C%20204%2C%20204%29%3B%22%3E%3Cdiv%20style%3D%22text-align%3A%20center%3B%22%3E%3Cstrong%3ETin%3C%2Fstrong%3E%3Cstrong%3Edak%20Lanjut%3Cbr%3E%283%29%3C%2Fstrong%3E%3C%2Fdiv%3E%3C%2Ftd%3E%3C%2Ftr%3E%3Ctr%3E%3Ctd%20style%3D%22width%3A%2024.9129%25%3B%20background-color%3A%20rgb%28255%2C%20255%2C%20255%29%3B%22%3EDosen%3Cbr%3E%3C%2Ftd%3E%3Ctd%20style%3D%22width%3A%2041.5498%25%3B%20background-color%3A%20rgb%28255%2C%20255%2C%20255%29%3B%22%3E%3Cdiv%20data-empty%3D%22true%22%3E%3Cbr%3E%3C%2Fdiv%3E%3C%2Ftd%3E%3Ctd%20style%3D%22width%3A%2033.3333%25%3B%20background-color%3A%20rgb%28255%2C%20255%2C%20255%29%3B%22%3E%3Cdiv%20data-empty%3D%22true%22%3E%3Cbr%3E%3C%2Fdiv%3E%3C%2Ftd%3E%3C%2Ftr%3E%3Ctr%3E%3Ctd%20style%3D%22width%3A%2024.9129%25%3B%20background-color%3A%20rgb%28255%2C%20255%2C%20255%29%3B%22%3EMahasiswa%3Cbr%3E%3C%2Ftd%3E%3Ctd%20style%3D%22width%3A%2041.5498%25%3B%20background-color%3A%20rgb%28255%2C%20255%2C%20255%29%3B%22%3E%3Cdiv%20data-empty%3D%22true%22%3E%3Cbr%3E%3C%2Fdiv%3E%3C%2Ftd%3E%3Ctd%20style%3D%22width%3A%2033.3333%25%3B%20background-color%3A%20rgb%28255%2C%20255%2C%20255%29%3B%22%3E%3Cdiv%20data-empty%3D%22true%22%3E%3Cbr%3E%3C%2Fdiv%3E%3C%2Ftd%3E%3C%2Ftr%3E%3Ctr%3E%3Ctd%20style%3D%22width%3A%2024.9129%25%3B%20background-color%3A%20rgb%28255%2C%20255%2C%20255%29%3B%22%3EAlumni%3Cbr%3E%3C%2Ftd%3E%3Ctd%20style%3D%22width%3A%2041.5498%25%3B%20background-color%3A%20rgb%28255%2C%20255%2C%20255%29%3B%22%3E%3Cdiv%20data-empty%3D%22true%22%3E%3Cbr%3E%3C%2Fdiv%3E%3C%2Ftd%3E%3Ctd%20style%3D%22width%3A%2033.3333%25%3B%20background-color%3A%20rgb%28255%2C%20255%2C%20255%29%3B%22%3E%3Cdiv%20data-empty%3D%22true%22%3E%3Cbr%3E%3C%2Fdiv%3E%3C%2Ftd%3E%3C%2Ftr%3E%3Ctr%3E%3Ctd%20style%3D%22width%3A%2024.9129%25%3B%20background-color%3A%20rgb%28255%2C%20255%2C%20255%29%3B%22%3EPengguna%20Lulusan%3Cbr%3E%3C%2Ftd%3E%3Ctd%20style%3D%22width%3A%2041.5498%25%3B%20background-color%3A%20rgb%28255%2C%20255%2C%20255%29%3B%22%3E%3Cdiv%20data-empty%3D%22true%22%3E%3Cbr%3E%3C%2Fdiv%3E%3C%2Ftd%3E%3Ctd%20style%3D%22width%3A%2033.3333%25%3B%20background-color%3A%20rgb%28255%2C%20255%2C%20255%29%3B%22%3E%3Cdiv%20data-empty%3D%22true%22%3E%3Cbr%3E%3C%2Fdiv%3E%3C%2Ftd%3E%3C%2Ftr%3E%3C%2Ftbody%3E%3C%2Ftable%3E\"},\"2.6\":{\"judul\":\"2.6 Keberlanjutan\",\"perintah\":\"Jelaskan upaya untuk menjamin keberlanjutan (sustainability) program studi ini, khususnya dalam hal:\",\"pertanyaan\":[\"a. Upaya untuk peningkatan animo calon mahasiswa\",\"b. Upaya peningkatan mutu manajemen\",\"c. Upaya untuk peningkatan mutu lulusan\",\"d. Upaya untuk pelaksanaan dan hasil kerjasama kemitraan\",\"e. Upaya dan prestasi memperoleh dana hibah kompetitif\"],\"isian\":\"<p>askdns ajskdnakj askjndasj</p>\"}}}', 2012, 0, '2017-05-18 05:17:32', '2017-05-18 05:17:32'),
(16, 3, '311166', '3A', 4, '{\"standar4\":{\"4.1\":{\"judul\":\"Sistem Seleksi dan Pengembangan\",\"narasi\":\"-\",\"perintah\":\"Jelaskan sistem seleksi/perekrutan, penempatan, pengembangan, retensi, dan pemberhentian dosen dan tenaga kependidikan untuk menjamin mutu penyelenggaraan program akademik (termasuk informasi tentang ketersediaan pedoman tertulis dan konsistensi pelaksanaannya).\",\"isian\":\"\"},\"4.2\":{\"judul\":\"Monitoring dan Evaluasi\",\"narasi\":\"-\",\"perintah\":\"Jelaskan sistem monitoring dan evaluasi, serta rekam jejak kinerja akademik dosen dan kinerja tenaga kependidikan (termasuk informasi tentang ketersediaan pedoman tertulis, dan monitoring dan evaluasi kinerja dosen dalam tridarma serta dokumentasinya).\",\"isian\":\"\"},\"4.3\":{\"judul\":\"Dosen Tetap\",\"narasi\":\"Dosen tetap dalam borang akreditasi BAN-PT adalah dosen yang diangkat dan ditempatkan sebagai tenaga tetap pada PT yang bersangkutan termasuk dosen penugasan Kopertis, dan dosen yayasan pada PTS dalam bidang yang relevan dengan keahlian bidang studinya. Seorang dosen hanya dapat menjadi dosen tetap pada satu perguruan tinggi, dan mempunyai penugasan kerja minimum 36 jam/minggu.nDosen tetap dipilah dalam 2 kelompok, yaitu:n1. dosen tetap yang bidang keahliannya sesuai dengan PSn2. dosen tetap yang bidang keahliannya di luar PS\",\"isian\":{\"4.3.1\":{\"perintah\":\"Data dosen tetap yang bidang keahliannya sesuai dengan bidang PS:\",\"tabel\":[{\"Nama Dosen Tetap\":\"\",\"NIDN**\":\"\",\"Tgl. Lahir\":\"\",\"Jabatan Akademik***\":\"\",\"Gelar Akademik\":\"\",\"Pendidikan S1, S2, S3 dan Asal PT*\":\"\",\"Bidang Keahlian untuk Setiap Jenjang Pendidikan\":\"\"}],\"keterangan\":\"* Lampirkan fotokopi ijazahn** NIDN : Nomor Induk Dosen Nasionaln** Dosen yang telah memperoleh sertifikat dosen agar diberi tanda (***) dan fotokopi sertifikatnya agar dilampirkan.\"},\"4.3.2\":{\"perintah\":\"Data dosen tetap yang bidang keahliannya di luar bidang PS:\",\"tabel\":[{\"Nama Dosen Tetap\":\"\",\"NIDN**\":\"\",\"Tgl. Lahir\":\"\",\"Jabatan Akademik***\":\"\",\"Gelar Akademik\":\"\",\"Pendidikan S1, S2, S3 dan Asal PT*\":\"\",\"Bidang Keahlian untuk Setiap Jenjang Pendidikan\":\"\"}],\"keterangan\":\"* Lampirkan fotokopi ijazahn** NIDN : Nomor Induk Dosen Nasionaln*** Dosen yang telah memperoleh sertifikat dosen agar diberi tanda (***) dan fotokopi sertifikatnya agar dilampirkan.\"},\"4.3.3\":{\"perintah\":\"Aktivitas dosen tetap yang bidang bidang keahliannya sesuai dengan PS dinyatakan dalam sks rata-rata per semester pada satu tahun akademik terakhir, diisi dengan perhitungan sesuai SK Dirjen DIKTI no. 48 tahun 1983 (12 sks setara dengan 36 jam kerja per minggu)\",\"tabel\":[{\"Nama Dosen Tetap\":\"\",\"sks Pengajaran pada\":{\"PS Sendiri\":\"\",\"PS Lain PT Sendiri\":\"\",\"PT Lain\":\"\"},\"sks Penelitian\":\"\",\"sks Pengabdian kepada Masyarakat\":\"\",\"sks Manajemen**\":{\"PT Sendiri\":\"\",\"PT Lain\":\"\"},\"Jumlah sks\":\"\",\"Jumlah\":{\"3\":\"\",\"4\":\"\",\"5\":\"\",\"6\":\"\",\"7\":\"\",\"8\":\"\",\"9\":\"\",\"10\":\"\"},\"Rata-rata*\":{\"3\":\"\",\"4\":\"\",\"5\":\"\",\"6\":\"\",\"7\":\"\",\"8\":\"\",\"9\":\"\",\"10\":\"\"}}],\"keterangan\":\"Catatan: n Sks pengajaran sama dengan sks mata kuliah yang diajarkan. Bila dosen mengajar kelas paralel, maka beban sks pengajaran untuk satu tambahan kelas paralel adalah 1 / 2 kali sks mata kuliah.n * rata - rata adalah jumlah sks dibagi dengan jumlah dosen tetap. n ** sks manajemen dihitung sbb: n Beban kerja manajemen untuk jabatan - jabatan ini adalah sbb.nBeban kerja manajemen untuk jabatan - jabatan ini adalah sbb. n - rektor / direktur politeknik 12 sks n - pembantu rektor / dekan / ketua sekolah tinggi / direktur akademi 10 sks n - ketua lembaga / kepala UPT 8 sksn - pembantu dekan / ketua jurusan / kepala pusat / ketua senat akademik / ketua senat fakultas 6 sksn - sekretaris jurusan / sekretaris pusat / sekretaris senat akademik / sekretaris senat universitas / sekretaris senat fakultas / kepala lab.atau studio / kepala balai / ketua PS 4 sksn - sekretaris PS 3 sksn Bagi PT yang memiliki struktur organisasi yang berbeda, beban kerja manajemen untuk jabatan baru disamakan dengan beban kerja jabatan yang setara.\"},\"4.3.4\":{\"perintah\":\"Tuliskan data aktivitas mengajar dosen tetap yang bidang keahliannya sesuai dengan PS,  dalam satu tahun akademik terakhir di PS ini dengan mengikuti format tabel berikut:\",\"tabel\":[{\"Nama Dosen Tetap\":\"\",\"Bidang Keahlian\":\"\",\"Kode Mata Kuliah\":\"\",\"Nama Mata Kuliah\":\"\",\"Jumlah Kelas\":\"\",\"Jumlah Pertemuan yang Direncanakan\":\"\",\"Jumlah Pertemuan yang Dilaksanakan\":\"\",\"Jumlah\":{\"7\":\"\",\"8\":\"\"}}]},\"4.3.5\":{\"perintah\":\"Tuliskan data aktivitas mengajar dosen tetap yang bidang keahliannya di luar PS,  dalam satu tahun akademik terakhir di PS ini dengan mengikuti format tabel berikut:\",\"tabel\":[{\"Nama Dosen Tetap\":\"\",\"Bidang Keahlian\":\"\",\"Kode Mata Kuliah\":\"\",\"Nama Mata Kuliah\":\"\",\"Jumlah Kelas\":\"\",\"Jumlah Pertemuan yang Direncanakan\":\"\",\"Jumlah Pertemuan yang Dilaksanakan\":\"\",\"Jumlah\":{\"7\":\"\",\"8\":\"\"}}]}}},\"4.4\":{\"judul\":\"Dosen Tidak Tetap\",\"4.4.1\":{\"perintah\":\"Tuliskan data dosen tidak tetap pada PS dengan mengikuti format tabel berikut:\",\"tabel\":[{\"Nama Dosen Tidak Tetap\":\"\",\"NIDN**\":\"\",\"Tgl. Lahir\":\"\",\"Jabatan Akademik***\":\"\",\"Gelar Akademik\":\"\",\"Pendidikan S1, S2, S3 dan Asal PT*\":\"\",\"Bidang Keahliah untuk Setiap Jenjang Pendidikan\":\"\"}],\"keterangan\":\"* Lampirkan fotokopi ijazah.n** NIDN : Nomor Induk Dosen Nasionaln*** Dosen yang telah memperoleh sertifikat dosen agar diberi tanda (***)dan fotokopi sertifikatnya agar dilampirkan.\"},\"4.4.2\":{\"perintah\":\"Tuliskan data aktivitas mengajar dosen tidak tetap pada satu tahun terakhir di PS ini dengan mengikuti format tabel berikut:\",\"tabel\":[{\"Nama Dosen Tdk Tetap\":\"\",\"Bidang Keahlian\":\"\",\"Kode Mata Kuliah\":\"\",\"Nama Mata Kuliah\":\"\",\"Jumlah Kelas\":\"\",\"Jumlah Pertemuan yang Direncanakan\":\"\",\"Jumlah Pertemuan yang Dilaksanakan\":\"\",\"Jumlah\":{\"7\":\"\",\"8\":\"\"}}]}},\"4.5\":{\"judul\":\"Upaya Peningkatan Sumber Daya Manusia (SDM) dalam tiga tahun terakhir\",\"4.5.1\":{\"perintah\":\"Kegiatan tenaga ahli/pakar sebagai pembicara dalam seminar/pelatihan, pembicara tamu, dsb, dari luar PT sendiri (tidak termasuk dosen tidak tetap)\",\"tabel\":[{\"Nama Tenaga Ahli/Pakar\":\"\",\"Nama dan Judul Kegiatan\":\"\",\"Waktu Pelaksanaan\":\"\"}]},\"4.5.2\":{\"perintah\":\"Peningkatan kemampuan dosen tetap melalui program tugas belajar dalam bidang yang sesuai dengan bidang PS\",\"tabel\":[{\"Nama Dosen\":\"\",\"Jenjang Pendidikan Lanjut\":\"\",\"Bidang Studi\":\"\",\"Perguruan Tinggi\":\"\",\"Negara\":\"\",\"Tahun Mulai Studi\":\"\"}]},\"4.5.3\":{\"perintah\":\"Kegiatan dosen tetap yang bidang keahliannya sesuai dengan PS dalam seminar ilmiah/lokakarya/penataran/workshop/ pagelaran/ pameran/peragaan yang tidak hanya melibatkan dosen PT sendiri\",\"tabel\":[{\"Nama Dosen\":\"\",\"Jenis Kegiatan*\":\"\",\"Tempat\":\"\",\"Waktu\":\"\",\"Sebagai\":{\"Penyaji\":\"\",\"Peserta\":\"\"}}],\"keterangan\":\"* Jenis kegiatan : Seminar ilmiah, Lokakarya, Penataran/Pelatihan, Workshop, Pagelaran, Pameran, Peragaan dll\"},\"4.5.4\":{\"perintah\":\"Sebutkan pencapaian prestasi/reputasi dosen (misalnya prestasi dalam pendidikan, penelitian dan pelayanan/pengabdian kepada masyarakat).\",\"keterangan\":\"* Sediakan dokumen pendukung pada saat asesmen lapangan.\",\"tabel\":[{\"Nama Dosen\":\"\",\"Prestasi yang Dicapai*\":\"\",\"Waktu Pencapaian\":\"\",\"Tingkat (Lokal, Nasional, Internasional)\":\"\"}]},\"4.5.5\":{\"perintah\":\"Sebutkan keikutsertaan dosen tetap dalam organisasi keilmuan atau organisasi profesi.\",\"tabel\":[{\"Nama Dosen\":\"\",\"Nama Organisasi Keilmuan atau Organisasi Profesi\":\"\",\"Kurun Waktu\":\"\",\"Tingkat (Lokal, Nasional, Internasional\":\"\"}]}},\"4.6\":{\"judul\":\"Tenaga Kependidikan\",\"4.6.1\":{\"perintah\":\"Tuliskan data tenaga kependidikan  yang ada di PS, Jurusan, Fakultas atau PT yang melayani mahasiswa PS dengan mengikuti format tabel berikut:\",\"tabel\":[{\"Jenis Tenaga Kependidikan\":\"Pustakawan*\",\"Jumlah Tenaga Kependidikan dengan Pendidikan Terakhir\":{\"S3\":\"\",\"S2\":\"\",\"S1\":\"\",\"D4\":\"\",\"D3\":\"\",\"D2\":\"\",\"D1\":\"\",\"SMA/SMK\":\"\"},\"Unit Kerja\":\"\"},{\"Jenis Tenaga Kependidikan\":\"Laboran/ Teknisi/ Analis/ Operator/ Programmer\",\"Jumlah Tenaga Kependidikan dengan Pendidikan Terakhir\":{\"S3\":\"\",\"S2\":\"\",\"S1\":\"\",\"D4\":\"\",\"D3\":\"\",\"D2\":\"\",\"D1\":\"\",\"SMA/SMK\":\"\"},\"Unit Kerja\":\"\"},{\"Jenis Tenaga Kependidikan\":\"Administrasi\",\"Jumlah Tenaga Kependidikan dengan Pendidikan Terakhir\":{\"S3\":\"\",\"S2\":\"\",\"S1\":\"\",\"D4\":\"\",\"D3\":\"\",\"D2\":\"\",\"D1\":\"\",\"SMA/SMK\":\"\"},\"Unit Kerja\":\"\"},{\"Jumlah Tenaga Kependidikan dengan Pendidikan Terakhir\":{\"S3\":\"\",\"S2\":\"\",\"S1\":\"\",\"D4\":\"\",\"D3\":\"\",\"D2\":\"\",\"D1\":\"\",\"SMA/SMK\":\"\"}}],\"keterangan\":\"* Hanya yang memiliki pendidikan formal dalam bidang perpustakaan\"},\"4.6.2\":{\"perintah\":\"Jelaskan upaya yang telah dilakukan PS dalam meningkatkan kualifikasi dan kompetensi tenaga kependidikan, dalam hal pemberian kesempatan belajar/pelatihan, pemberian fasilitas termasuk dana, dan jenjang karir.\",\"isian\":\"\"}}}}', 2012, 0, '2017-05-17 08:23:13', NULL),
(17, 3, '311166', '3A', 7, '{\"standar7\":{\"judul\":\"7. PENELITIAN, PELAYANAN/PENGABDIAN KEPADA MASYARAKAT, DAN KERJASAMA\",\"7.1\":{\"judul\":\"7.1 Penelitian Dosen Tetap yang Bidang Keahliannya Sesuai dengan PS\",\"7.1.1\":{\"perintah\":\"Tuliskan jumlah judul penelitian* yang sesuai dengan bidang keilmuan PS, yang dilakukan oleh dosen tetap yang bidang keahliannya sesuai dengan PS selama tiga tahun terakhir dengan mengikuti format tabel berikut:\",\"keterangan\":\"Catatan: (*) sediakan data pendukung pada saat asesmen lapangan\"},\"7.1.2\":{\"perintah\":\"Adakah mahasiswa tugas akhir yang dilibatkan dalam penelitian dosen dalam tiga tahun terakhir?\",\"perintah2\":\"Jika ada, banyaknya mahasiswa PS yang ikut serta dalam penelitian dosen adalah  ... orang, dari ... mahasiswa yang melakukan tugas akhir melalui skripsi.\",\"isian\":\"\"},\"7.1.3\":{\"perintah\":\"Tuliskan judul artikel ilmiah/karya ilmiah/karya seni/buku yang dihasilkan selama tiga tahun terakhir oleh dosen tetap yang bidang keahliannya sesuai dengan PS dengan mengikuti format tabel berikut:\",\"keterangan\":\"Catatan: * = Tuliskan banyaknya dosen pada sel yang sesuai\"},\"7.1.4\":{\"perintah\":\"Sebutkan karya dosen dan atau mahasiswa Program Studi yang telah memperoleh/sedang memproses perlindungan Hak atas Kekayaan Intelektual (HaKI) selama tiga tahun terakhir.\",\"keterangan\":\"*Lampirkan surat paten HaKI atau keterangan sejenis.\"}},\"7.2\":{\"judul\":\"7.2 Kegiatan Pelayanan/Pengabdian kepada Masyarakat (PKM)\",\"7.2.1\":{\"perintah\":\"Tuliskan jumlah kegiatan Pelayanan/Pengabdian kepada Masyarakat (*) yang sesuai dengan bidang keilmuan PS selama tiga tahun terakhir yang dilakukan oleh dosen tetap yang bidang keahliannya sesuai dengan PS dengan mengikuti format tabel berikut:\",\"keterangan\":\"Catatan: (*) Pelayanan/Pengabdian kepada Masyarakat adalah penerapan bidang ilmu untuk menyelesaikan masalah di masyarakat (termasuk masyarakat industri, pemerintah, dsb.)\"},\"7.2.2\":{\"perintah\":\"Adakah mahasiswa yang dilibatkan dalam kegiatan pelayanan/pengabdian kepada masyarakat dalam tiga tahun terakhir?\",\"perintah2\":\"Jika Ya, jelaskan tingkat partisipasi dan bentuk keterlibatan mahasiswa dalam kegiatan pelayanan/pengabdian kepada masyarakat\",\"isian\":\"\"}},\"7.3\":{\"judul\":\"7.3 Kegiatan Kerjasama dengan Instansi Lain\",\"7.3.1\":{\"perintah\":\"Tuliskan instansi dalam negeri yang menjalin kerjasama* yang terkait dengan program studi/jurusan dalam tiga tahun terakhir.\",\"keterangan\":\"Catatan : (*) dokumen pendukung disediakan pada saat asesmen lapangan\"},\"7.3.2\":{\"perintah\":\"Tuliskan instansi luar negeri yang menjalin kerjasama* yang terkait dengan program studi/jurusan dalam tiga tahun terakhir.\",\"keterangan\":\"Catatan : (*) dokumen pendukung disediakan pada saat asesmen lapangan\"}},\"7\":{\"isian\":{\"nomorIsian\":\"\"}}}}\r\n', 2012, 0, '2017-05-17 08:23:13', NULL),
(18, 3, '311166', '3B', 2, '{\"standar2\":{\"judul\":\"2. TATA PAMONG, KEPEMIMPINAN, SISTEM PENGELOLAAN, DAN PENJAMINAN MUTU\",\"2.1\":{\"judul\":\"2.1 Tata Pamong\",\"narasi\":\"Tata pamong adalah suatu sistem yang dapat menjadikan kepemimpinan, sistem pengelolaan dan penjaminan mutu berjalan secara efektif di dalam universitas/institusi yang mengelola program studi.  Hal-hal yang menjadi fokus di dalam tata pamong termasuk bagaimana kebijakan  dan strategi disusun sedemikian rupa sehingga memungkinkan terpilihnya pemimpin dan pengelola yang kredibel dan sistem penyelenggaraan program studi secara kredibel, transparan, akuntabel, bertanggung jawab dan  menerapkan prinsip-prinsip keadilan. Organisasi dan sistem tata pamong yang baik <i>(good governance)</i> mencerminkan kredibilitas, transparansi, akuntabilitas, tanggungjawab dan keadilan Fakultas/Sekolah Tinggi dalam mengelola program studi. \",\"perintah\":\"Uraikan secara ringkas sistem dan pelaksanaan tata pamong di Fakultas/Sekolah Tinggi untuk memilih pemimpin dan membangun sistem tata pamong yang kredibel, akuntabel, transparan, bertanggung jawab dan adil.\",\"isian\":\"\"},\"2.2\":{\"judul\":\" 2.2  Struktur Organisasi, Kordinasi, dan Cara Kerja Fakultas/Sekolah Tinggi\",\"narasi\":\"\",\"perintah\":\"Gambarkan struktur organisasi  Fakultas/Sekolah Tinggi serta tugas/fungsi dari tiap unit yang ada.\",\"isian\":\"\"},\"2.3\":{\"judul\":\"2.3 Kepemimpinan\",\"narasi\":\"Kepemimpinan efektif mengarahkan dan mempengaruhi perilaku semua unsur dalam program studi, mengikuti nilai, norma, etika, dan budaya organisasi yang disepakati bersama, serta mampu  membuat keputusan yang tepat dan cepat.Kepemimpinan mampu memprediksi masa depan, merumuskan dan  mengartikulasi visi yang realistis, kredibel,  serta mengkomunikasikan visi ke depan, yang menekankan pada keharmonisan hubungan manusia dan mampu menstimulasi secara  intelektual dan arif bagi anggota untuk mewujudkan visi organisasi, serta mampu memberikan arahan, tujuan, peran, dan tugas kepada  seluruh unsur dalam perguruan tinggi. Dalam menjalankan fungsi   kepemimpinan dikenal kepemimpinan operasional, kepemimpinan  organisasi, dan kepemimpinan publik.  Kepemimpinan operasional  berkaitan dengan kemampuan menjabarkan visi, misi ke dalam   kegiatan operasional program studi.  Kepemimpinan organisasi   berkaitan dengan pemahaman tata kerja antar unit dalam organisasi  perguruan tinggi.  Kepemimpinan publik berkaitan dengan kemampuan  menjalin kerjasama dan menjadi rujukan bagi publik.\",\"perintah\":\"Jelaskan pola kepemimpinan dalam Fakultas/Sekolah Tinggi.\",\"isian\":\"\"},\"2.4\":{\"judul\":\"2.4 Sistem Pengelolaan\",\"narasi\":\"Sistem pengelolaan fungsional dan operasional program studi mencakup <i>planning, organizing, staffing, leading, controlling,</i> serta operasi internal dan eksternal\",\"perintah\":\"Jelaskan sistem pengelolaan Fakultas/Sekolah Tinggi serta ketersediaan Renstra dan Renop.\",\"isian\":\"\"},\"2.5\":{\"judul\":\"2.5 Sistem Penjaminan Mutu Fakultas/Sekolah Tinggi\",\"perintah\":\"Jelaskan sistem penjaminan mutu dalam Fakultas/Sekolah Tinggi.  Jelaskan pula standar mutu yang digunakan.\",\"isian\":\"\"}}}', 2012, 0, '2017-05-17 08:23:13', NULL),
(19, 3, '311166', '3B', 4, '{\"standar4\":{\"4.1\":{\"judul\":\"Dosen Tetap\",\"narasi\":\"Dosen tetap dalam borang akreditasi BAN-PT adalah dosen yang diangkat dan ditempatkan sebagai tenaga tetap pada PT yang bersangkutan; termasuk dosen penugasan Kopertis, dan dosen yayasan pada PTS dalam bidang yang relevan dengan keahlian bidang studinya. Seorang dosen hanya dapat menjadi dosen tetap pada satu perguruan tinggi, dan mempunyai penugasan kerja minimum 20jam/minggu.\",\"isian\":\"-\",\"4.1.1\":{\"perintah\":\"Tuliskan jumlah dosen tetap yang bidang keahliannya sesuai dengan masing-masing PS di lingkungan Fakultas/Sekolah Tinggi, berdasarkan jabatan fungsional dan pendidikan tertinggi, dengan mengikuti format tabel berikut:\",\"tabel\":\"-\",\"isian\":\"-\",\"keterangan\":\"-\"},\"4.1.2\":{\"perintah\":\"Tuliskan banyaknya penggantian dan perekrutan serta pengembangan dosen tetap yang bidang keahliannya sesuai dengan program studi pada Fakultas/Sekolah Tinggi dalam tiga tahun terakhir dengan mengikuti format tabel berikut:\",\"tabel\":\"-\",\"isian\":\"-\",\"keterangan\":\"-\"},\"4.1.3\":{\"perintah\":\"Uraikan pandangan Fakultas/Sekolah Tinggi tentang data pada butir 4.1.1 dan 4.1.2, yang mencakup aspek: kecukupan, kualifikasi, dan pengembangan karir. Jelaskan kendala yang ada dalam pengembangan tenaga dosen tetap.\",\"tabel\":\"-\",\"isian\":\"\",\"keterangan\":\"-\"}},\"4.2\":{\"judul\":\"Tenaga Kependidikan\",\"perintah\":\"Uraikan pandangan Fakultas/Sekolah Tinggi tentang data pada butir 4.1.1 dan 4.1.2, yang mencakup aspek: kecukupan, kualifikasi, dan pengembangan karir. Jelaskan kendala yang ada dalam pengembangan tenaga dosen tetap.\",\"tabel\":\"-\",\"isian\":\"\",\"keterangan\":\"-\"}}}', 2012, 0, '2017-05-17 08:23:13', NULL),
(20, 3, '311166', '3B', 7, '{\"standar7\":{\"7.1\":{\"judul\":\"Penelitian\",\"narasi\":\"-\",\"isian\":\"-\",\"7.1.1\":{\"perintah\":\"Tuliskan jumlah dan dana penelitian yang dilakukan oleh masing-masing PS di lingkungan Fakultas/Sekolah Tinggi dalam tiga tahun terakhir dengan mengikuti format tabel berikut:\",\"tabel\":\"-\",\"isian\":\"-\",\"keterangan\":\"-\"},\"7.1.2\":{\"perintah\":\"Uraikan pandangan pimpinan Fakultas/Sekolah Tinggi tentang data pada butir 7.1.1, dalam perspektif: kesesuaian dengan Visi dan Misi, kecukupan, kewajaran, upaya pengembangan dan peningkatan mutu. Uraikan pula kendala-kendala yang dihadapi.\",\"tabel\":\"-\",\"isian\":\"\",\"keterangan\":\"-\"}},\"7.2\":{\"judul\":\"Pelayanan/Pengabdian kepada Masyarakat\",\"narasi\":\"Pelayanan/Pengabdian kepada Masyarakat adalah penerapan bidang ilmu untuk menyelesaikan masalah di masyarakat (termasuk masyarakat industri, pemerintah, dsb.)\",\"isian\":\"-\",\"7.2.1\":{\"perintah\":\"Tuliskan jumlah dan dana kegiatan pelayanan/pengabdian kepada masyarakat yang dilakukan oleh masing-masing PS di lingkungan Fakultas dalam tiga tahun terakhir dengan mengikuti format tabel berikut:\",\"tabel\":\"-\",\"isian\":\"-\",\"keterangan\":\"-\"},\"7.2.2\":{\"perintah\":\"Uraikan pandangan Fakultas/Sekolah Tinggi tentang data pada butir 7.2.1 dalam perspektif: kesesuaian dengan Visi dan Misi, kecukupan, kewajaran, upaya pengembangan dan peningkatan mutu. Uraikan pula kendala-kendala yang dihadapi.\",\"tabel\":\"-\",\"isian\":\"\",\"keterangan\":\"-\"}}}}', 2012, 0, '2017-05-17 08:23:13', NULL),
(21, 3, '311166', 'ED', NULL, '', 2012, 0, '2017-05-17 08:23:13', NULL),
(22, 4, '311225', '3A', 2, '{\"standar2\":{\"judul\":\"2. TATA PAMONG, KEPEMIMPINAN, SISTEM PENGELOLAAN, DAN PENJAMINAN MUTU\",\"2.1\":{\"judul\":\"2.1 Sistem Tata Pamong\",\"narasi\":\"Sistem tata pamong berjalan secara efektif melalui mekanisme yang disepakati bersama, serta dapat memelihara dan mengakomodasi semua unsur, fungsi, dan peran dalam program studi. Tata pamong didukung dengan budaya organisasi yang dicerminkan dengan ada dan tegaknya aturan, tatacara pemilihan pimpinan, etika dosen, etika mahasiswa, etika tenaga kependidikan, sistem penghargaan dan sanksi serta pedoman dan prosedur pelayanan (administrasi, perpustakaan, laboratorium, dan studio). Sistem tata pamong (input, proses, output dan outcome serta lingkungan eksternal yang menjamin terlaksananya tata pamong yang baik) harus diformulasikan, disosialisasikan, dilaksanakan,  dipantau dan dievaluasi dengan peraturan dan prosedur yang jelas. \",\"perintah\":\"Uraikan secara ringkas sistem dan pelaksanaan tata pamong di Program Studi untuk  membangun sistem tata pamong yang kredibel, transparan, akuntabel, bertanggung jawab dan adil.\",\"isian\":\"%3Cp%3ETata%20pamong%20adalah%20suatu%20sistem%20yang%20dapat%20menjadikan%20kepemimpinan%2C%20sistem%20pengelolaan%20dan%20penjaminan%20mutu%20berjalan%20secara%20efektif%20di%20dalam%20Universitas%2FInstitusi%20yang%20mengelola%20Program%20Studi.%20Hal-hal%20yang%20menjadi%20fokus%20di%20dalam%20tata%20pamong%20termasuk%20bagaimana%20kebijakan%20dan%20strategi%20disusun%20sedemikian%20rupa%20sehingga%20memungkinkan%20terpilihnya%20pemimpin%20dan%20pengelola%20yang%20kredibel%20dan%20sistem%20penyelenggaraan%20Program%20Studi%20secara%20kredibel%2C%20transparan%2C%20akuntabel%2C%20bertanggungjawab%20dan%20menerapkan%20prinsip-prinsip%20keadilan.%3C%2Fp%3E%3Cp%3E%3Cbr%3E%3C%2Fp%3E%3Cp%3EKegiatan%20tata%20pamong%20di%20Program%20Studi%20Manajemen%20Universitas%20Victory%20mengikuti%20berbagai%20peraturan%20dan%20perundang-undangan%20yang%20ditetapkan%20oleh%20Kementerian%20Pendidikan%20dan%20Kebudayaan%2C%20keputusan%20Universitas%20dan%20Keputusan%20Fakultas.%20Tugas%20masing-masing%20unsur%20dan%20struktur%20dalam%20tata%20pamong%2C%20hubungan%20kerja%20antar%20unsur-unsur%20dalam%20tata%20pamong%2C%20serta%20berbagai%20peraturan%20akademik%20di%20lingkup%20Universitas%20telah%20dibuat%20oleh%20pimpinan%20Universitas%20Victory%20dan%20secara%20lebih%20spesifik%20telah%20dibuat%20oleh%20pimpinan%20Fakultas%20Ekonomi%20Universitas%20Victory%20melalui%20Pedoman%20Job%20Description%20sehingga%20penyelenggaraan%20tata%20pamong%20dapat%20menjamin%20tercapainya%20visi%2C%20misi%20dan%20tujuan%20Program%20Studi%20Manajemen%20Universitas%20Victory%3Cbr%3E%3C%2Fp%3E\"},\"2.2\":{\"judul\":\"2.2 Kepemimpinan\",\"narasi\":\"Kepemimpinan efektif mengarahkan dan mempengaruhi perilaku semua unsur dalam program studi, mengikuti nilai, norma, etika, dan budaya organisasi yang disepakati bersama, serta mampu membuat keputusan yang tepat dan cepat. Kepemimpinan mampu memprediksi masa depan, merumuskan dan mengartikulasi visi yang realistik, kredibel, serta mengkomunikasikan visi ke depan, yang menekankan pada keharmonisan hubungan manusia dan mampu menstimulasi secara intelektual dan arif bagi anggota untuk mewujudkan visi organisasi, serta mampu memberikan arahan, tujuan, peran, dan tugas kepada seluruh unsur dalam perguruan tinggi. Dalam menjalankan fungsi kepemimpinan dikenal kepemimpinan operasional, kepemimpinan organisasi, dan kepemimpinan publik.  Kepemimpinan operasional berkaitan dengan kemampuan menjabarkan visi, misi ke dalam kegiatan operasional program studi.  Kepemimpinan organisasi berkaitan dengan pemahaman tata kerja antar unit dalam organisasi perguruan tinggi.  Kepemimpinan publik berkaitan dengan kemampuan menjalin kerjasama dan menjadi rujukan bagi publik.\",\"perintah\":\"Jelaskan pola kepemimpinan dalam Program Studi.\",\"isian\":\"%3Cp%3EBab%20II%20Tentang%20Sistem%20Penyelenggaraan%20Pendidikan%2C%20Pasal%206%20Tentang%20Kegiatan%20Pendidikan.%3C%2Fp%3E%3Col%3E%3Cli%3EKegiatan%20operasional%20di%20bidang%20pendidikan.%20Jadwal%20mengajar%2C%20SK%20mengajar%2C%20evaluasi%20Menentukan%20prioritas%20pekerjaan%20%282%29%20Memberi%20nilai%20kinerja%20bawahan%3C%2Fli%3E%3Cli%3EKegiatan%20operasional%20di%20bidang%20Penelitian%20%28Mengacu%20kepada%20Dokumen%20Renstra%20maka%20Program%20Studi%20melakukan%20seminar%20metodologi%20penelitian%2C%20bantuan%20pendanaan%20penelitian%2C%20bantuan%20biaya%20publikasi%20jurnal%20ilmiah%2C%20workshop%29%3C%2Fli%3E%3Cli%3EKegiatan%20operasional%20di%20bidang%20pengabdian%20masyarakat%20%28Mengacu%20kepada%20Dokum%20Renstra%20maka%20Program%20Studi%20melakukan%20pelatihan%2C%20pendampingan%2C%20workshop%29%3C%2Fli%3E%3C%2Fol%3E\"},\"2.3\":{\"judul\":\"2.3 Sistem Pengelolaan\",\"narasi\":\"Sistem pengelolaan fungsional dan operasional program studi mencakup <i>planning</i>, <i>organizing</i>, <i>staffing</i>, <i>leading</i>, <i>controlling</i> dalam kegiatan  internal maupun eksternal.\",\"perintah\":\"Jelaskan sistem pengelolaan Program Studi serta dokumen pendukungnya.\",\"isian\":\"<p>jsadnsajdaaskdmaksm</p>\"},\"2.4\":{\"judul\":\"2.4 Penjaminan Mutu\",\"perintah\":\"Bagaimanakah pelaksanaan penjaminan mutu pada Program Studi? Jelaskan.\",\"isian\":\"<p>asdkasjd jdasnkdjan</p>\"},\"2.5\":{\"judul\":\"2.5 Umpan Balik\",\"perintah\":\"Apakah program studi telah melakukan kajian tentang proses pembelajaran melalui umpan balik dari dosen, mahasiswa, alumni, dan pengguna lulusan mengenai harapan dan persepsi mereka?  Jika Ya, jelaskan isi umpan balik dan tindak lanjutnya.\",\"isian\":\"%3Ctable%20style%3D%22width%3A%20100%25%3B%22%3E%3Ctbody%3E%3Ctr%3E%3Ctd%20style%3D%22width%3A%2024.9129%25%3B%20background-color%3A%20rgb%28204%2C%20204%2C%20204%29%3B%22%3E%3Cdiv%20style%3D%22text-align%3A%20center%3B%22%3E%3Cstrong%3EUmpan%20Balik%20Dari%3Cbr%3E%281%29%3C%2Fstrong%3E%3C%2Fdiv%3E%3C%2Ftd%3E%3Ctd%20style%3D%22width%3A%2041.5498%25%3B%20background-color%3A%20rgb%28204%2C%20204%2C%20204%29%3B%22%3E%3Cdiv%20style%3D%22text-align%3A%20center%3B%22%3E%3Cstrong%3EIsi%20Umpan%20Balik%3Cbr%3E%282%29%3C%2Fstrong%3E%3C%2Fdiv%3E%3C%2Ftd%3E%3Ctd%20style%3D%22width%3A%2033.3333%25%3B%20background-color%3A%20rgb%28204%2C%20204%2C%20204%29%3B%22%3E%3Cdiv%20style%3D%22text-align%3A%20center%3B%22%3E%3Cstrong%3ETin%3C%2Fstrong%3E%3Cstrong%3Edak%20Lanjut%3Cbr%3E%283%29%3C%2Fstrong%3E%3C%2Fdiv%3E%3C%2Ftd%3E%3C%2Ftr%3E%3Ctr%3E%3Ctd%20style%3D%22width%3A%2024.9129%25%3B%20background-color%3A%20rgb%28255%2C%20255%2C%20255%29%3B%22%3EDosen%3Cbr%3E%3C%2Ftd%3E%3Ctd%20style%3D%22width%3A%2041.5498%25%3B%20background-color%3A%20rgb%28255%2C%20255%2C%20255%29%3B%22%3E%3Cdiv%20data-empty%3D%22true%22%3E%3Cbr%3E%3C%2Fdiv%3E%3C%2Ftd%3E%3Ctd%20style%3D%22width%3A%2033.3333%25%3B%20background-color%3A%20rgb%28255%2C%20255%2C%20255%29%3B%22%3E%3Cdiv%20data-empty%3D%22true%22%3E%3Cbr%3E%3C%2Fdiv%3E%3C%2Ftd%3E%3C%2Ftr%3E%3Ctr%3E%3Ctd%20style%3D%22width%3A%2024.9129%25%3B%20background-color%3A%20rgb%28255%2C%20255%2C%20255%29%3B%22%3EMahasiswa%3Cbr%3E%3C%2Ftd%3E%3Ctd%20style%3D%22width%3A%2041.5498%25%3B%20background-color%3A%20rgb%28255%2C%20255%2C%20255%29%3B%22%3E%3Cdiv%20data-empty%3D%22true%22%3E%3Cbr%3E%3C%2Fdiv%3E%3C%2Ftd%3E%3Ctd%20style%3D%22width%3A%2033.3333%25%3B%20background-color%3A%20rgb%28255%2C%20255%2C%20255%29%3B%22%3E%3Cdiv%20data-empty%3D%22true%22%3E%3Cbr%3E%3C%2Fdiv%3E%3C%2Ftd%3E%3C%2Ftr%3E%3Ctr%3E%3Ctd%20style%3D%22width%3A%2024.9129%25%3B%20background-color%3A%20rgb%28255%2C%20255%2C%20255%29%3B%22%3EAlumni%3Cbr%3E%3C%2Ftd%3E%3Ctd%20style%3D%22width%3A%2041.5498%25%3B%20background-color%3A%20rgb%28255%2C%20255%2C%20255%29%3B%22%3E%3Cdiv%20data-empty%3D%22true%22%3E%3Cbr%3E%3C%2Fdiv%3E%3C%2Ftd%3E%3Ctd%20style%3D%22width%3A%2033.3333%25%3B%20background-color%3A%20rgb%28255%2C%20255%2C%20255%29%3B%22%3E%3Cdiv%20data-empty%3D%22true%22%3E%3Cbr%3E%3C%2Fdiv%3E%3C%2Ftd%3E%3C%2Ftr%3E%3Ctr%3E%3Ctd%20style%3D%22width%3A%2024.9129%25%3B%20background-color%3A%20rgb%28255%2C%20255%2C%20255%29%3B%22%3EPengguna%20Lulusan%3Cbr%3E%3C%2Ftd%3E%3Ctd%20style%3D%22width%3A%2041.5498%25%3B%20background-color%3A%20rgb%28255%2C%20255%2C%20255%29%3B%22%3E%3Cdiv%20data-empty%3D%22true%22%3E%3Cbr%3E%3C%2Fdiv%3E%3C%2Ftd%3E%3Ctd%20style%3D%22width%3A%2033.3333%25%3B%20background-color%3A%20rgb%28255%2C%20255%2C%20255%29%3B%22%3E%3Cdiv%20data-empty%3D%22true%22%3E%3Cbr%3E%3C%2Fdiv%3E%3C%2Ftd%3E%3C%2Ftr%3E%3C%2Ftbody%3E%3C%2Ftable%3E\"},\"2.6\":{\"judul\":\"2.6 Keberlanjutan\",\"perintah\":\"Jelaskan upaya untuk menjamin keberlanjutan (sustainability) program studi ini, khususnya dalam hal:\",\"pertanyaan\":[\"a. Upaya untuk peningkatan animo calon mahasiswa\",\"b. Upaya peningkatan mutu manajemen\",\"c. Upaya untuk peningkatan mutu lulusan\",\"d. Upaya untuk pelaksanaan dan hasil kerjasama kemitraan\",\"e. Upaya dan prestasi memperoleh dana hibah kompetitif\"],\"isian\":\"<p>askdns ajskdnakj askjndasj</p>\"}}}', 2012, 0, '2017-05-18 05:17:43', '2017-05-18 05:17:43');
INSERT INTO `borang` (`id`, `id_histori`, `kode_prodi`, `jenis`, `standar`, `isi`, `tahun`, `is_reviewed`, `created_at`, `updated_at`) VALUES
(23, 4, '311225', '3A', 4, '{\"standar4\":{\"4.1\":{\"judul\":\"Sistem Seleksi dan Pengembangan\",\"narasi\":\"-\",\"perintah\":\"Jelaskan sistem seleksi/perekrutan, penempatan, pengembangan, retensi, dan pemberhentian dosen dan tenaga kependidikan untuk menjamin mutu penyelenggaraan program akademik (termasuk informasi tentang ketersediaan pedoman tertulis dan konsistensi pelaksanaannya).\",\"isian\":\"\"},\"4.2\":{\"judul\":\"Monitoring dan Evaluasi\",\"narasi\":\"-\",\"perintah\":\"Jelaskan sistem monitoring dan evaluasi, serta rekam jejak kinerja akademik dosen dan kinerja tenaga kependidikan (termasuk informasi tentang ketersediaan pedoman tertulis, dan monitoring dan evaluasi kinerja dosen dalam tridarma serta dokumentasinya).\",\"isian\":\"\"},\"4.3\":{\"judul\":\"Dosen Tetap\",\"narasi\":\"Dosen tetap dalam borang akreditasi BAN-PT adalah dosen yang diangkat dan ditempatkan sebagai tenaga tetap pada PT yang bersangkutan termasuk dosen penugasan Kopertis, dan dosen yayasan pada PTS dalam bidang yang relevan dengan keahlian bidang studinya. Seorang dosen hanya dapat menjadi dosen tetap pada satu perguruan tinggi, dan mempunyai penugasan kerja minimum 36 jam/minggu.nDosen tetap dipilah dalam 2 kelompok, yaitu:n1. dosen tetap yang bidang keahliannya sesuai dengan PSn2. dosen tetap yang bidang keahliannya di luar PS\",\"isian\":{\"4.3.1\":{\"perintah\":\"Data dosen tetap yang bidang keahliannya sesuai dengan bidang PS:\",\"tabel\":[{\"Nama Dosen Tetap\":\"\",\"NIDN**\":\"\",\"Tgl. Lahir\":\"\",\"Jabatan Akademik***\":\"\",\"Gelar Akademik\":\"\",\"Pendidikan S1, S2, S3 dan Asal PT*\":\"\",\"Bidang Keahlian untuk Setiap Jenjang Pendidikan\":\"\"}],\"keterangan\":\"* Lampirkan fotokopi ijazahn** NIDN : Nomor Induk Dosen Nasionaln** Dosen yang telah memperoleh sertifikat dosen agar diberi tanda (***) dan fotokopi sertifikatnya agar dilampirkan.\"},\"4.3.2\":{\"perintah\":\"Data dosen tetap yang bidang keahliannya di luar bidang PS:\",\"tabel\":[{\"Nama Dosen Tetap\":\"\",\"NIDN**\":\"\",\"Tgl. Lahir\":\"\",\"Jabatan Akademik***\":\"\",\"Gelar Akademik\":\"\",\"Pendidikan S1, S2, S3 dan Asal PT*\":\"\",\"Bidang Keahlian untuk Setiap Jenjang Pendidikan\":\"\"}],\"keterangan\":\"* Lampirkan fotokopi ijazahn** NIDN : Nomor Induk Dosen Nasionaln*** Dosen yang telah memperoleh sertifikat dosen agar diberi tanda (***) dan fotokopi sertifikatnya agar dilampirkan.\"},\"4.3.3\":{\"perintah\":\"Aktivitas dosen tetap yang bidang bidang keahliannya sesuai dengan PS dinyatakan dalam sks rata-rata per semester pada satu tahun akademik terakhir, diisi dengan perhitungan sesuai SK Dirjen DIKTI no. 48 tahun 1983 (12 sks setara dengan 36 jam kerja per minggu)\",\"tabel\":[{\"Nama Dosen Tetap\":\"\",\"sks Pengajaran pada\":{\"PS Sendiri\":\"\",\"PS Lain PT Sendiri\":\"\",\"PT Lain\":\"\"},\"sks Penelitian\":\"\",\"sks Pengabdian kepada Masyarakat\":\"\",\"sks Manajemen**\":{\"PT Sendiri\":\"\",\"PT Lain\":\"\"},\"Jumlah sks\":\"\",\"Jumlah\":{\"3\":\"\",\"4\":\"\",\"5\":\"\",\"6\":\"\",\"7\":\"\",\"8\":\"\",\"9\":\"\",\"10\":\"\"},\"Rata-rata*\":{\"3\":\"\",\"4\":\"\",\"5\":\"\",\"6\":\"\",\"7\":\"\",\"8\":\"\",\"9\":\"\",\"10\":\"\"}}],\"keterangan\":\"Catatan: n Sks pengajaran sama dengan sks mata kuliah yang diajarkan. Bila dosen mengajar kelas paralel, maka beban sks pengajaran untuk satu tambahan kelas paralel adalah 1 / 2 kali sks mata kuliah.n * rata - rata adalah jumlah sks dibagi dengan jumlah dosen tetap. n ** sks manajemen dihitung sbb: n Beban kerja manajemen untuk jabatan - jabatan ini adalah sbb.nBeban kerja manajemen untuk jabatan - jabatan ini adalah sbb. n - rektor / direktur politeknik 12 sks n - pembantu rektor / dekan / ketua sekolah tinggi / direktur akademi 10 sks n - ketua lembaga / kepala UPT 8 sksn - pembantu dekan / ketua jurusan / kepala pusat / ketua senat akademik / ketua senat fakultas 6 sksn - sekretaris jurusan / sekretaris pusat / sekretaris senat akademik / sekretaris senat universitas / sekretaris senat fakultas / kepala lab.atau studio / kepala balai / ketua PS 4 sksn - sekretaris PS 3 sksn Bagi PT yang memiliki struktur organisasi yang berbeda, beban kerja manajemen untuk jabatan baru disamakan dengan beban kerja jabatan yang setara.\"},\"4.3.4\":{\"perintah\":\"Tuliskan data aktivitas mengajar dosen tetap yang bidang keahliannya sesuai dengan PS,  dalam satu tahun akademik terakhir di PS ini dengan mengikuti format tabel berikut:\",\"tabel\":[{\"Nama Dosen Tetap\":\"\",\"Bidang Keahlian\":\"\",\"Kode Mata Kuliah\":\"\",\"Nama Mata Kuliah\":\"\",\"Jumlah Kelas\":\"\",\"Jumlah Pertemuan yang Direncanakan\":\"\",\"Jumlah Pertemuan yang Dilaksanakan\":\"\",\"Jumlah\":{\"7\":\"\",\"8\":\"\"}}]},\"4.3.5\":{\"perintah\":\"Tuliskan data aktivitas mengajar dosen tetap yang bidang keahliannya di luar PS,  dalam satu tahun akademik terakhir di PS ini dengan mengikuti format tabel berikut:\",\"tabel\":[{\"Nama Dosen Tetap\":\"\",\"Bidang Keahlian\":\"\",\"Kode Mata Kuliah\":\"\",\"Nama Mata Kuliah\":\"\",\"Jumlah Kelas\":\"\",\"Jumlah Pertemuan yang Direncanakan\":\"\",\"Jumlah Pertemuan yang Dilaksanakan\":\"\",\"Jumlah\":{\"7\":\"\",\"8\":\"\"}}]}}},\"4.4\":{\"judul\":\"Dosen Tidak Tetap\",\"4.4.1\":{\"perintah\":\"Tuliskan data dosen tidak tetap pada PS dengan mengikuti format tabel berikut:\",\"tabel\":[{\"Nama Dosen Tidak Tetap\":\"\",\"NIDN**\":\"\",\"Tgl. Lahir\":\"\",\"Jabatan Akademik***\":\"\",\"Gelar Akademik\":\"\",\"Pendidikan S1, S2, S3 dan Asal PT*\":\"\",\"Bidang Keahliah untuk Setiap Jenjang Pendidikan\":\"\"}],\"keterangan\":\"* Lampirkan fotokopi ijazah.n** NIDN : Nomor Induk Dosen Nasionaln*** Dosen yang telah memperoleh sertifikat dosen agar diberi tanda (***)dan fotokopi sertifikatnya agar dilampirkan.\"},\"4.4.2\":{\"perintah\":\"Tuliskan data aktivitas mengajar dosen tidak tetap pada satu tahun terakhir di PS ini dengan mengikuti format tabel berikut:\",\"tabel\":[{\"Nama Dosen Tdk Tetap\":\"\",\"Bidang Keahlian\":\"\",\"Kode Mata Kuliah\":\"\",\"Nama Mata Kuliah\":\"\",\"Jumlah Kelas\":\"\",\"Jumlah Pertemuan yang Direncanakan\":\"\",\"Jumlah Pertemuan yang Dilaksanakan\":\"\",\"Jumlah\":{\"7\":\"\",\"8\":\"\"}}]}},\"4.5\":{\"judul\":\"Upaya Peningkatan Sumber Daya Manusia (SDM) dalam tiga tahun terakhir\",\"4.5.1\":{\"perintah\":\"Kegiatan tenaga ahli/pakar sebagai pembicara dalam seminar/pelatihan, pembicara tamu, dsb, dari luar PT sendiri (tidak termasuk dosen tidak tetap)\",\"tabel\":[{\"Nama Tenaga Ahli/Pakar\":\"\",\"Nama dan Judul Kegiatan\":\"\",\"Waktu Pelaksanaan\":\"\"}]},\"4.5.2\":{\"perintah\":\"Peningkatan kemampuan dosen tetap melalui program tugas belajar dalam bidang yang sesuai dengan bidang PS\",\"tabel\":[{\"Nama Dosen\":\"\",\"Jenjang Pendidikan Lanjut\":\"\",\"Bidang Studi\":\"\",\"Perguruan Tinggi\":\"\",\"Negara\":\"\",\"Tahun Mulai Studi\":\"\"}]},\"4.5.3\":{\"perintah\":\"Kegiatan dosen tetap yang bidang keahliannya sesuai dengan PS dalam seminar ilmiah/lokakarya/penataran/workshop/ pagelaran/ pameran/peragaan yang tidak hanya melibatkan dosen PT sendiri\",\"tabel\":[{\"Nama Dosen\":\"\",\"Jenis Kegiatan*\":\"\",\"Tempat\":\"\",\"Waktu\":\"\",\"Sebagai\":{\"Penyaji\":\"\",\"Peserta\":\"\"}}],\"keterangan\":\"* Jenis kegiatan : Seminar ilmiah, Lokakarya, Penataran/Pelatihan, Workshop, Pagelaran, Pameran, Peragaan dll\"},\"4.5.4\":{\"perintah\":\"Sebutkan pencapaian prestasi/reputasi dosen (misalnya prestasi dalam pendidikan, penelitian dan pelayanan/pengabdian kepada masyarakat).\",\"keterangan\":\"* Sediakan dokumen pendukung pada saat asesmen lapangan.\",\"tabel\":[{\"Nama Dosen\":\"\",\"Prestasi yang Dicapai*\":\"\",\"Waktu Pencapaian\":\"\",\"Tingkat (Lokal, Nasional, Internasional)\":\"\"}]},\"4.5.5\":{\"perintah\":\"Sebutkan keikutsertaan dosen tetap dalam organisasi keilmuan atau organisasi profesi.\",\"tabel\":[{\"Nama Dosen\":\"\",\"Nama Organisasi Keilmuan atau Organisasi Profesi\":\"\",\"Kurun Waktu\":\"\",\"Tingkat (Lokal, Nasional, Internasional\":\"\"}]}},\"4.6\":{\"judul\":\"Tenaga Kependidikan\",\"4.6.1\":{\"perintah\":\"Tuliskan data tenaga kependidikan  yang ada di PS, Jurusan, Fakultas atau PT yang melayani mahasiswa PS dengan mengikuti format tabel berikut:\",\"tabel\":[{\"Jenis Tenaga Kependidikan\":\"Pustakawan*\",\"Jumlah Tenaga Kependidikan dengan Pendidikan Terakhir\":{\"S3\":\"\",\"S2\":\"\",\"S1\":\"\",\"D4\":\"\",\"D3\":\"\",\"D2\":\"\",\"D1\":\"\",\"SMA/SMK\":\"\"},\"Unit Kerja\":\"\"},{\"Jenis Tenaga Kependidikan\":\"Laboran/ Teknisi/ Analis/ Operator/ Programmer\",\"Jumlah Tenaga Kependidikan dengan Pendidikan Terakhir\":{\"S3\":\"\",\"S2\":\"\",\"S1\":\"\",\"D4\":\"\",\"D3\":\"\",\"D2\":\"\",\"D1\":\"\",\"SMA/SMK\":\"\"},\"Unit Kerja\":\"\"},{\"Jenis Tenaga Kependidikan\":\"Administrasi\",\"Jumlah Tenaga Kependidikan dengan Pendidikan Terakhir\":{\"S3\":\"\",\"S2\":\"\",\"S1\":\"\",\"D4\":\"\",\"D3\":\"\",\"D2\":\"\",\"D1\":\"\",\"SMA/SMK\":\"\"},\"Unit Kerja\":\"\"},{\"Jumlah Tenaga Kependidikan dengan Pendidikan Terakhir\":{\"S3\":\"\",\"S2\":\"\",\"S1\":\"\",\"D4\":\"\",\"D3\":\"\",\"D2\":\"\",\"D1\":\"\",\"SMA/SMK\":\"\"}}],\"keterangan\":\"* Hanya yang memiliki pendidikan formal dalam bidang perpustakaan\"},\"4.6.2\":{\"perintah\":\"Jelaskan upaya yang telah dilakukan PS dalam meningkatkan kualifikasi dan kompetensi tenaga kependidikan, dalam hal pemberian kesempatan belajar/pelatihan, pemberian fasilitas termasuk dana, dan jenjang karir.\",\"isian\":\"\"}}}}', 2012, 0, '2017-05-17 08:23:29', NULL),
(24, 4, '311225', '3A', 7, '{\"standar7\":{\"judul\":\"7. PENELITIAN, PELAYANAN/PENGABDIAN KEPADA MASYARAKAT, DAN KERJASAMA\",\"7.1\":{\"judul\":\"7.1 Penelitian Dosen Tetap yang Bidang Keahliannya Sesuai dengan PS\",\"7.1.1\":{\"perintah\":\"Tuliskan jumlah judul penelitian* yang sesuai dengan bidang keilmuan PS, yang dilakukan oleh dosen tetap yang bidang keahliannya sesuai dengan PS selama tiga tahun terakhir dengan mengikuti format tabel berikut:\",\"keterangan\":\"Catatan: (*) sediakan data pendukung pada saat asesmen lapangan\"},\"7.1.2\":{\"perintah\":\"Adakah mahasiswa tugas akhir yang dilibatkan dalam penelitian dosen dalam tiga tahun terakhir?\",\"perintah2\":\"Jika ada, banyaknya mahasiswa PS yang ikut serta dalam penelitian dosen adalah  ... orang, dari ... mahasiswa yang melakukan tugas akhir melalui skripsi.\",\"isian\":\"\"},\"7.1.3\":{\"perintah\":\"Tuliskan judul artikel ilmiah/karya ilmiah/karya seni/buku yang dihasilkan selama tiga tahun terakhir oleh dosen tetap yang bidang keahliannya sesuai dengan PS dengan mengikuti format tabel berikut:\",\"keterangan\":\"Catatan: * = Tuliskan banyaknya dosen pada sel yang sesuai\"},\"7.1.4\":{\"perintah\":\"Sebutkan karya dosen dan atau mahasiswa Program Studi yang telah memperoleh/sedang memproses perlindungan Hak atas Kekayaan Intelektual (HaKI) selama tiga tahun terakhir.\",\"keterangan\":\"*Lampirkan surat paten HaKI atau keterangan sejenis.\"}},\"7.2\":{\"judul\":\"7.2 Kegiatan Pelayanan/Pengabdian kepada Masyarakat (PKM)\",\"7.2.1\":{\"perintah\":\"Tuliskan jumlah kegiatan Pelayanan/Pengabdian kepada Masyarakat (*) yang sesuai dengan bidang keilmuan PS selama tiga tahun terakhir yang dilakukan oleh dosen tetap yang bidang keahliannya sesuai dengan PS dengan mengikuti format tabel berikut:\",\"keterangan\":\"Catatan: (*) Pelayanan/Pengabdian kepada Masyarakat adalah penerapan bidang ilmu untuk menyelesaikan masalah di masyarakat (termasuk masyarakat industri, pemerintah, dsb.)\"},\"7.2.2\":{\"perintah\":\"Adakah mahasiswa yang dilibatkan dalam kegiatan pelayanan/pengabdian kepada masyarakat dalam tiga tahun terakhir?\",\"perintah2\":\"Jika Ya, jelaskan tingkat partisipasi dan bentuk keterlibatan mahasiswa dalam kegiatan pelayanan/pengabdian kepada masyarakat\",\"isian\":\"\"}},\"7.3\":{\"judul\":\"7.3 Kegiatan Kerjasama dengan Instansi Lain\",\"7.3.1\":{\"perintah\":\"Tuliskan instansi dalam negeri yang menjalin kerjasama* yang terkait dengan program studi/jurusan dalam tiga tahun terakhir.\",\"keterangan\":\"Catatan : (*) dokumen pendukung disediakan pada saat asesmen lapangan\"},\"7.3.2\":{\"perintah\":\"Tuliskan instansi luar negeri yang menjalin kerjasama* yang terkait dengan program studi/jurusan dalam tiga tahun terakhir.\",\"keterangan\":\"Catatan : (*) dokumen pendukung disediakan pada saat asesmen lapangan\"}},\"7\":{\"isian\":{\"nomorIsian\":\"\"}}}}\r\n', 2012, 0, '2017-05-17 08:23:29', NULL),
(25, 4, '311225', '3B', 2, '{\"standar2\":{\"judul\":\"2. TATA PAMONG, KEPEMIMPINAN, SISTEM PENGELOLAAN, DAN PENJAMINAN MUTU\",\"2.1\":{\"judul\":\"2.1 Tata Pamong\",\"narasi\":\"Tata pamong adalah suatu sistem yang dapat menjadikan kepemimpinan, sistem pengelolaan dan penjaminan mutu berjalan secara efektif di dalam universitas/institusi yang mengelola program studi.  Hal-hal yang menjadi fokus di dalam tata pamong termasuk bagaimana kebijakan  dan strategi disusun sedemikian rupa sehingga memungkinkan terpilihnya pemimpin dan pengelola yang kredibel dan sistem penyelenggaraan program studi secara kredibel, transparan, akuntabel, bertanggung jawab dan  menerapkan prinsip-prinsip keadilan. Organisasi dan sistem tata pamong yang baik <i>(good governance)</i> mencerminkan kredibilitas, transparansi, akuntabilitas, tanggungjawab dan keadilan Fakultas/Sekolah Tinggi dalam mengelola program studi. \",\"perintah\":\"Uraikan secara ringkas sistem dan pelaksanaan tata pamong di Fakultas/Sekolah Tinggi untuk memilih pemimpin dan membangun sistem tata pamong yang kredibel, akuntabel, transparan, bertanggung jawab dan adil.\",\"isian\":\"\"},\"2.2\":{\"judul\":\" 2.2  Struktur Organisasi, Kordinasi, dan Cara Kerja Fakultas/Sekolah Tinggi\",\"narasi\":\"\",\"perintah\":\"Gambarkan struktur organisasi  Fakultas/Sekolah Tinggi serta tugas/fungsi dari tiap unit yang ada.\",\"isian\":\"\"},\"2.3\":{\"judul\":\"2.3 Kepemimpinan\",\"narasi\":\"Kepemimpinan efektif mengarahkan dan mempengaruhi perilaku semua unsur dalam program studi, mengikuti nilai, norma, etika, dan budaya organisasi yang disepakati bersama, serta mampu  membuat keputusan yang tepat dan cepat.Kepemimpinan mampu memprediksi masa depan, merumuskan dan  mengartikulasi visi yang realistis, kredibel,  serta mengkomunikasikan visi ke depan, yang menekankan pada keharmonisan hubungan manusia dan mampu menstimulasi secara  intelektual dan arif bagi anggota untuk mewujudkan visi organisasi, serta mampu memberikan arahan, tujuan, peran, dan tugas kepada  seluruh unsur dalam perguruan tinggi. Dalam menjalankan fungsi   kepemimpinan dikenal kepemimpinan operasional, kepemimpinan  organisasi, dan kepemimpinan publik.  Kepemimpinan operasional  berkaitan dengan kemampuan menjabarkan visi, misi ke dalam   kegiatan operasional program studi.  Kepemimpinan organisasi   berkaitan dengan pemahaman tata kerja antar unit dalam organisasi  perguruan tinggi.  Kepemimpinan publik berkaitan dengan kemampuan  menjalin kerjasama dan menjadi rujukan bagi publik.\",\"perintah\":\"Jelaskan pola kepemimpinan dalam Fakultas/Sekolah Tinggi.\",\"isian\":\"\"},\"2.4\":{\"judul\":\"2.4 Sistem Pengelolaan\",\"narasi\":\"Sistem pengelolaan fungsional dan operasional program studi mencakup <i>planning, organizing, staffing, leading, controlling,</i> serta operasi internal dan eksternal\",\"perintah\":\"Jelaskan sistem pengelolaan Fakultas/Sekolah Tinggi serta ketersediaan Renstra dan Renop.\",\"isian\":\"\"},\"2.5\":{\"judul\":\"2.5 Sistem Penjaminan Mutu Fakultas/Sekolah Tinggi\",\"perintah\":\"Jelaskan sistem penjaminan mutu dalam Fakultas/Sekolah Tinggi.  Jelaskan pula standar mutu yang digunakan.\",\"isian\":\"\"}}}', 2012, 0, '2017-05-17 08:23:29', NULL),
(26, 4, '311225', '3B', 4, '{\"standar4\":{\"4.1\":{\"judul\":\"Dosen Tetap\",\"narasi\":\"Dosen tetap dalam borang akreditasi BAN-PT adalah dosen yang diangkat dan ditempatkan sebagai tenaga tetap pada PT yang bersangkutan; termasuk dosen penugasan Kopertis, dan dosen yayasan pada PTS dalam bidang yang relevan dengan keahlian bidang studinya. Seorang dosen hanya dapat menjadi dosen tetap pada satu perguruan tinggi, dan mempunyai penugasan kerja minimum 20jam/minggu.\",\"isian\":\"-\",\"4.1.1\":{\"perintah\":\"Tuliskan jumlah dosen tetap yang bidang keahliannya sesuai dengan masing-masing PS di lingkungan Fakultas/Sekolah Tinggi, berdasarkan jabatan fungsional dan pendidikan tertinggi, dengan mengikuti format tabel berikut:\",\"tabel\":\"-\",\"isian\":\"-\",\"keterangan\":\"-\"},\"4.1.2\":{\"perintah\":\"Tuliskan banyaknya penggantian dan perekrutan serta pengembangan dosen tetap yang bidang keahliannya sesuai dengan program studi pada Fakultas/Sekolah Tinggi dalam tiga tahun terakhir dengan mengikuti format tabel berikut:\",\"tabel\":\"-\",\"isian\":\"-\",\"keterangan\":\"-\"},\"4.1.3\":{\"perintah\":\"Uraikan pandangan Fakultas/Sekolah Tinggi tentang data pada butir 4.1.1 dan 4.1.2, yang mencakup aspek: kecukupan, kualifikasi, dan pengembangan karir. Jelaskan kendala yang ada dalam pengembangan tenaga dosen tetap.\",\"tabel\":\"-\",\"isian\":\"\",\"keterangan\":\"-\"}},\"4.2\":{\"judul\":\"Tenaga Kependidikan\",\"perintah\":\"Uraikan pandangan Fakultas/Sekolah Tinggi tentang data pada butir 4.1.1 dan 4.1.2, yang mencakup aspek: kecukupan, kualifikasi, dan pengembangan karir. Jelaskan kendala yang ada dalam pengembangan tenaga dosen tetap.\",\"tabel\":\"-\",\"isian\":\"\",\"keterangan\":\"-\"}}}', 2012, 0, '2017-05-17 08:23:29', NULL),
(27, 4, '311225', '3B', 7, '{\"standar7\":{\"7.1\":{\"judul\":\"Penelitian\",\"narasi\":\"-\",\"isian\":\"-\",\"7.1.1\":{\"perintah\":\"Tuliskan jumlah dan dana penelitian yang dilakukan oleh masing-masing PS di lingkungan Fakultas/Sekolah Tinggi dalam tiga tahun terakhir dengan mengikuti format tabel berikut:\",\"tabel\":\"-\",\"isian\":\"-\",\"keterangan\":\"-\"},\"7.1.2\":{\"perintah\":\"Uraikan pandangan pimpinan Fakultas/Sekolah Tinggi tentang data pada butir 7.1.1, dalam perspektif: kesesuaian dengan Visi dan Misi, kecukupan, kewajaran, upaya pengembangan dan peningkatan mutu. Uraikan pula kendala-kendala yang dihadapi.\",\"tabel\":\"-\",\"isian\":\"\",\"keterangan\":\"-\"}},\"7.2\":{\"judul\":\"Pelayanan/Pengabdian kepada Masyarakat\",\"narasi\":\"Pelayanan/Pengabdian kepada Masyarakat adalah penerapan bidang ilmu untuk menyelesaikan masalah di masyarakat (termasuk masyarakat industri, pemerintah, dsb.)\",\"isian\":\"-\",\"7.2.1\":{\"perintah\":\"Tuliskan jumlah dan dana kegiatan pelayanan/pengabdian kepada masyarakat yang dilakukan oleh masing-masing PS di lingkungan Fakultas dalam tiga tahun terakhir dengan mengikuti format tabel berikut:\",\"tabel\":\"-\",\"isian\":\"-\",\"keterangan\":\"-\"},\"7.2.2\":{\"perintah\":\"Uraikan pandangan Fakultas/Sekolah Tinggi tentang data pada butir 7.2.1 dalam perspektif: kesesuaian dengan Visi dan Misi, kecukupan, kewajaran, upaya pengembangan dan peningkatan mutu. Uraikan pula kendala-kendala yang dihadapi.\",\"tabel\":\"-\",\"isian\":\"\",\"keterangan\":\"-\"}}}}', 2012, 0, '2017-05-17 08:23:29', NULL),
(28, 4, '311225', 'ED', NULL, '', 2012, 0, '2017-05-17 08:23:29', NULL),
(29, 5, '311166', '3A', 2, '{\"standar2\":{\"judul\":\"2. TATA PAMONG, KEPEMIMPINAN, SISTEM PENGELOLAAN, DAN PENJAMINAN MUTU\",\"2.1\":{\"judul\":\"2.1 Sistem Tata Pamong\",\"narasi\":\"Sistem tata pamong berjalan secara efektif melalui mekanisme yang disepakati bersama, serta dapat memelihara dan mengakomodasi semua unsur, fungsi, dan peran dalam program studi. Tata pamong didukung dengan budaya organisasi yang dicerminkan dengan ada dan tegaknya aturan, tatacara pemilihan pimpinan, etika dosen, etika mahasiswa, etika tenaga kependidikan, sistem penghargaan dan sanksi serta pedoman dan prosedur pelayanan (administrasi, perpustakaan, laboratorium, dan studio). Sistem tata pamong (input, proses, output dan outcome serta lingkungan eksternal yang menjamin terlaksananya tata pamong yang baik) harus diformulasikan, disosialisasikan, dilaksanakan,  dipantau dan dievaluasi dengan peraturan dan prosedur yang jelas. \",\"perintah\":\"Uraikan secara ringkas sistem dan pelaksanaan tata pamong di Program Studi untuk  membangun sistem tata pamong yang kredibel, transparan, akuntabel, bertanggung jawab dan adil.\",\"isian\":\"%3Cp%3ETata%20pamong%20adalah%20suatu%20sistem%20yang%20dapat%20menjadikan%20kepemimpinan%2C%20sistem%20pengelolaan%20dan%20penjaminan%20mutu%20berjalan%20secara%20efektif%20di%20dalam%20Universitas%2FInstitusi%20yang%20mengelola%20Program%20Studi.%20Hal-hal%20yang%20menjadi%20fokus%20di%20dalam%20tata%20pamong%20termasuk%20bagaimana%20kebijakan%20dan%20strategi%20disusun%20sedemikian%20rupa%20sehingga%20memungkinkan%20terpilihnya%20pemimpin%20dan%20pengelola%20yang%20kredibel%20dan%20sistem%20penyelenggaraan%20Program%20Studi%20secara%20kredibel%2C%20transparan%2C%20akuntabel%2C%20bertanggungjawab%20dan%20menerapkan%20prinsip-prinsip%20keadilan.%3C%2Fp%3E%3Cp%3E%3Cbr%3E%3C%2Fp%3E%3Cp%3EKegiatan%20tata%20pamong%20di%20Program%20Studi%20Manajemen%20Universitas%20Victory%20mengikuti%20berbagai%20peraturan%20dan%20perundang-undangan%20yang%20ditetapkan%20oleh%20Kementerian%20Pendidikan%20dan%20Kebudayaan%2C%20keputusan%20Universitas%20dan%20Keputusan%20Fakultas.%20Tugas%20masing-masing%20unsur%20dan%20struktur%20dalam%20tata%20pamong%2C%20hubungan%20kerja%20antar%20unsur-unsur%20dalam%20tata%20pamong%2C%20serta%20berbagai%20peraturan%20akademik%20di%20lingkup%20Universitas%20telah%20dibuat%20oleh%20pimpinan%20Universitas%20Victory%20dan%20secara%20lebih%20spesifik%20telah%20dibuat%20oleh%20pimpinan%20Fakultas%20Ekonomi%20Universitas%20Victory%20melalui%20Pedoman%20Job%20Description%20sehingga%20penyelenggaraan%20tata%20pamong%20dapat%20menjamin%20tercapainya%20visi%2C%20misi%20dan%20tujuan%20Program%20Studi%20Manajemen%20Universitas%20Victory%3Cbr%3E%3C%2Fp%3E\"},\"2.2\":{\"judul\":\"2.2 Kepemimpinan\",\"narasi\":\"Kepemimpinan efektif mengarahkan dan mempengaruhi perilaku semua unsur dalam program studi, mengikuti nilai, norma, etika, dan budaya organisasi yang disepakati bersama, serta mampu membuat keputusan yang tepat dan cepat. Kepemimpinan mampu memprediksi masa depan, merumuskan dan mengartikulasi visi yang realistik, kredibel, serta mengkomunikasikan visi ke depan, yang menekankan pada keharmonisan hubungan manusia dan mampu menstimulasi secara intelektual dan arif bagi anggota untuk mewujudkan visi organisasi, serta mampu memberikan arahan, tujuan, peran, dan tugas kepada seluruh unsur dalam perguruan tinggi. Dalam menjalankan fungsi kepemimpinan dikenal kepemimpinan operasional, kepemimpinan organisasi, dan kepemimpinan publik.  Kepemimpinan operasional berkaitan dengan kemampuan menjabarkan visi, misi ke dalam kegiatan operasional program studi.  Kepemimpinan organisasi berkaitan dengan pemahaman tata kerja antar unit dalam organisasi perguruan tinggi.  Kepemimpinan publik berkaitan dengan kemampuan menjalin kerjasama dan menjadi rujukan bagi publik.\",\"perintah\":\"Jelaskan pola kepemimpinan dalam Program Studi.\",\"isian\":\"%3Cp%3EBab%20II%20Tentang%20Sistem%20Penyelenggaraan%20Pendidikan%2C%20Pasal%206%20Tentang%20Kegiatan%20Pendidikan.%3C%2Fp%3E%3Col%3E%3Cli%3EKegiatan%20operasional%20di%20bidang%20pendidikan.%20Jadwal%20mengajar%2C%20SK%20mengajar%2C%20evaluasi%20Menentukan%20prioritas%20pekerjaan%20%282%29%20Memberi%20nilai%20kinerja%20bawahan%3C%2Fli%3E%3Cli%3EKegiatan%20operasional%20di%20bidang%20Penelitian%20%28Mengacu%20kepada%20Dokumen%20Renstra%20maka%20Program%20Studi%20melakukan%20seminar%20metodologi%20penelitian%2C%20bantuan%20pendanaan%20penelitian%2C%20bantuan%20biaya%20publikasi%20jurnal%20ilmiah%2C%20workshop%29%3C%2Fli%3E%3Cli%3EKegiatan%20operasional%20di%20bidang%20pengabdian%20masyarakat%20%28Mengacu%20kepada%20Dokum%20Renstra%20maka%20Program%20Studi%20melakukan%20pelatihan%2C%20pendampingan%2C%20workshop%29%3C%2Fli%3E%3C%2Fol%3E\"},\"2.3\":{\"judul\":\"2.3 Sistem Pengelolaan\",\"narasi\":\"Sistem pengelolaan fungsional dan operasional program studi mencakup <i>planning</i>, <i>organizing</i>, <i>staffing</i>, <i>leading</i>, <i>controlling</i> dalam kegiatan  internal maupun eksternal.\",\"perintah\":\"Jelaskan sistem pengelolaan Program Studi serta dokumen pendukungnya.\",\"isian\":\"<p>jsadnsajdaaskdmaksm</p>\"},\"2.4\":{\"judul\":\"2.4 Penjaminan Mutu\",\"perintah\":\"Bagaimanakah pelaksanaan penjaminan mutu pada Program Studi? Jelaskan.\",\"isian\":\"<p>asdkasjd jdasnkdjan</p>\"},\"2.5\":{\"judul\":\"2.5 Umpan Balik\",\"perintah\":\"Apakah program studi telah melakukan kajian tentang proses pembelajaran melalui umpan balik dari dosen, mahasiswa, alumni, dan pengguna lulusan mengenai harapan dan persepsi mereka?  Jika Ya, jelaskan isi umpan balik dan tindak lanjutnya.\",\"isian\":\"%3Ctable%20style%3D%22width%3A%20100%25%3B%22%3E%3Ctbody%3E%3Ctr%3E%3Ctd%20style%3D%22width%3A%2024.9129%25%3B%20background-color%3A%20rgb%28204%2C%20204%2C%20204%29%3B%22%3E%3Cdiv%20style%3D%22text-align%3A%20center%3B%22%3E%3Cstrong%3EUmpan%20Balik%20Dari%3Cbr%3E%281%29%3C%2Fstrong%3E%3C%2Fdiv%3E%3C%2Ftd%3E%3Ctd%20style%3D%22width%3A%2041.5498%25%3B%20background-color%3A%20rgb%28204%2C%20204%2C%20204%29%3B%22%3E%3Cdiv%20style%3D%22text-align%3A%20center%3B%22%3E%3Cstrong%3EIsi%20Umpan%20Balik%3Cbr%3E%282%29%3C%2Fstrong%3E%3C%2Fdiv%3E%3C%2Ftd%3E%3Ctd%20style%3D%22width%3A%2033.3333%25%3B%20background-color%3A%20rgb%28204%2C%20204%2C%20204%29%3B%22%3E%3Cdiv%20style%3D%22text-align%3A%20center%3B%22%3E%3Cstrong%3ETin%3C%2Fstrong%3E%3Cstrong%3Edak%20Lanjut%3Cbr%3E%283%29%3C%2Fstrong%3E%3C%2Fdiv%3E%3C%2Ftd%3E%3C%2Ftr%3E%3Ctr%3E%3Ctd%20style%3D%22width%3A%2024.9129%25%3B%20background-color%3A%20rgb%28255%2C%20255%2C%20255%29%3B%22%3EDosen%3Cbr%3E%3C%2Ftd%3E%3Ctd%20style%3D%22width%3A%2041.5498%25%3B%20background-color%3A%20rgb%28255%2C%20255%2C%20255%29%3B%22%3E%3Cdiv%20data-empty%3D%22true%22%3E%3Cbr%3E%3C%2Fdiv%3E%3C%2Ftd%3E%3Ctd%20style%3D%22width%3A%2033.3333%25%3B%20background-color%3A%20rgb%28255%2C%20255%2C%20255%29%3B%22%3E%3Cdiv%20data-empty%3D%22true%22%3E%3Cbr%3E%3C%2Fdiv%3E%3C%2Ftd%3E%3C%2Ftr%3E%3Ctr%3E%3Ctd%20style%3D%22width%3A%2024.9129%25%3B%20background-color%3A%20rgb%28255%2C%20255%2C%20255%29%3B%22%3EMahasiswa%3Cbr%3E%3C%2Ftd%3E%3Ctd%20style%3D%22width%3A%2041.5498%25%3B%20background-color%3A%20rgb%28255%2C%20255%2C%20255%29%3B%22%3E%3Cdiv%20data-empty%3D%22true%22%3E%3Cbr%3E%3C%2Fdiv%3E%3C%2Ftd%3E%3Ctd%20style%3D%22width%3A%2033.3333%25%3B%20background-color%3A%20rgb%28255%2C%20255%2C%20255%29%3B%22%3E%3Cdiv%20data-empty%3D%22true%22%3E%3Cbr%3E%3C%2Fdiv%3E%3C%2Ftd%3E%3C%2Ftr%3E%3Ctr%3E%3Ctd%20style%3D%22width%3A%2024.9129%25%3B%20background-color%3A%20rgb%28255%2C%20255%2C%20255%29%3B%22%3EAlumni%3Cbr%3E%3C%2Ftd%3E%3Ctd%20style%3D%22width%3A%2041.5498%25%3B%20background-color%3A%20rgb%28255%2C%20255%2C%20255%29%3B%22%3E%3Cdiv%20data-empty%3D%22true%22%3E%3Cbr%3E%3C%2Fdiv%3E%3C%2Ftd%3E%3Ctd%20style%3D%22width%3A%2033.3333%25%3B%20background-color%3A%20rgb%28255%2C%20255%2C%20255%29%3B%22%3E%3Cdiv%20data-empty%3D%22true%22%3E%3Cbr%3E%3C%2Fdiv%3E%3C%2Ftd%3E%3C%2Ftr%3E%3Ctr%3E%3Ctd%20style%3D%22width%3A%2024.9129%25%3B%20background-color%3A%20rgb%28255%2C%20255%2C%20255%29%3B%22%3EPengguna%20Lulusan%3Cbr%3E%3C%2Ftd%3E%3Ctd%20style%3D%22width%3A%2041.5498%25%3B%20background-color%3A%20rgb%28255%2C%20255%2C%20255%29%3B%22%3E%3Cdiv%20data-empty%3D%22true%22%3E%3Cbr%3E%3C%2Fdiv%3E%3C%2Ftd%3E%3Ctd%20style%3D%22width%3A%2033.3333%25%3B%20background-color%3A%20rgb%28255%2C%20255%2C%20255%29%3B%22%3E%3Cdiv%20data-empty%3D%22true%22%3E%3Cbr%3E%3C%2Fdiv%3E%3C%2Ftd%3E%3C%2Ftr%3E%3C%2Ftbody%3E%3C%2Ftable%3E\"},\"2.6\":{\"judul\":\"2.6 Keberlanjutan\",\"perintah\":\"Jelaskan upaya untuk menjamin keberlanjutan (sustainability) program studi ini, khususnya dalam hal:\",\"pertanyaan\":[\"a. Upaya untuk peningkatan animo calon mahasiswa\",\"b. Upaya peningkatan mutu manajemen\",\"c. Upaya untuk peningkatan mutu lulusan\",\"d. Upaya untuk pelaksanaan dan hasil kerjasama kemitraan\",\"e. Upaya dan prestasi memperoleh dana hibah kompetitif\"],\"isian\":\"<p>askdns ajskdnakj askjndasj</p>\"}}}', 2007, 0, '2017-05-18 05:18:31', '2017-05-18 05:18:31'),
(30, 5, '311166', '3A', 4, '{\"standar4\":{\"4.1\":{\"judul\":\"Sistem Seleksi dan Pengembangan\",\"narasi\":\"-\",\"perintah\":\"Jelaskan sistem seleksi/perekrutan, penempatan, pengembangan, retensi, dan pemberhentian dosen dan tenaga kependidikan untuk menjamin mutu penyelenggaraan program akademik (termasuk informasi tentang ketersediaan pedoman tertulis dan konsistensi pelaksanaannya).\",\"isian\":\"\"},\"4.2\":{\"judul\":\"Monitoring dan Evaluasi\",\"narasi\":\"-\",\"perintah\":\"Jelaskan sistem monitoring dan evaluasi, serta rekam jejak kinerja akademik dosen dan kinerja tenaga kependidikan (termasuk informasi tentang ketersediaan pedoman tertulis, dan monitoring dan evaluasi kinerja dosen dalam tridarma serta dokumentasinya).\",\"isian\":\"\"},\"4.3\":{\"judul\":\"Dosen Tetap\",\"narasi\":\"Dosen tetap dalam borang akreditasi BAN-PT adalah dosen yang diangkat dan ditempatkan sebagai tenaga tetap pada PT yang bersangkutan termasuk dosen penugasan Kopertis, dan dosen yayasan pada PTS dalam bidang yang relevan dengan keahlian bidang studinya. Seorang dosen hanya dapat menjadi dosen tetap pada satu perguruan tinggi, dan mempunyai penugasan kerja minimum 36 jam/minggu.nDosen tetap dipilah dalam 2 kelompok, yaitu:n1. dosen tetap yang bidang keahliannya sesuai dengan PSn2. dosen tetap yang bidang keahliannya di luar PS\",\"isian\":{\"4.3.1\":{\"perintah\":\"Data dosen tetap yang bidang keahliannya sesuai dengan bidang PS:\",\"tabel\":[{\"Nama Dosen Tetap\":\"\",\"NIDN**\":\"\",\"Tgl. Lahir\":\"\",\"Jabatan Akademik***\":\"\",\"Gelar Akademik\":\"\",\"Pendidikan S1, S2, S3 dan Asal PT*\":\"\",\"Bidang Keahlian untuk Setiap Jenjang Pendidikan\":\"\"}],\"keterangan\":\"* Lampirkan fotokopi ijazahn** NIDN : Nomor Induk Dosen Nasionaln** Dosen yang telah memperoleh sertifikat dosen agar diberi tanda (***) dan fotokopi sertifikatnya agar dilampirkan.\"},\"4.3.2\":{\"perintah\":\"Data dosen tetap yang bidang keahliannya di luar bidang PS:\",\"tabel\":[{\"Nama Dosen Tetap\":\"\",\"NIDN**\":\"\",\"Tgl. Lahir\":\"\",\"Jabatan Akademik***\":\"\",\"Gelar Akademik\":\"\",\"Pendidikan S1, S2, S3 dan Asal PT*\":\"\",\"Bidang Keahlian untuk Setiap Jenjang Pendidikan\":\"\"}],\"keterangan\":\"* Lampirkan fotokopi ijazahn** NIDN : Nomor Induk Dosen Nasionaln*** Dosen yang telah memperoleh sertifikat dosen agar diberi tanda (***) dan fotokopi sertifikatnya agar dilampirkan.\"},\"4.3.3\":{\"perintah\":\"Aktivitas dosen tetap yang bidang bidang keahliannya sesuai dengan PS dinyatakan dalam sks rata-rata per semester pada satu tahun akademik terakhir, diisi dengan perhitungan sesuai SK Dirjen DIKTI no. 48 tahun 1983 (12 sks setara dengan 36 jam kerja per minggu)\",\"tabel\":[{\"Nama Dosen Tetap\":\"\",\"sks Pengajaran pada\":{\"PS Sendiri\":\"\",\"PS Lain PT Sendiri\":\"\",\"PT Lain\":\"\"},\"sks Penelitian\":\"\",\"sks Pengabdian kepada Masyarakat\":\"\",\"sks Manajemen**\":{\"PT Sendiri\":\"\",\"PT Lain\":\"\"},\"Jumlah sks\":\"\",\"Jumlah\":{\"3\":\"\",\"4\":\"\",\"5\":\"\",\"6\":\"\",\"7\":\"\",\"8\":\"\",\"9\":\"\",\"10\":\"\"},\"Rata-rata*\":{\"3\":\"\",\"4\":\"\",\"5\":\"\",\"6\":\"\",\"7\":\"\",\"8\":\"\",\"9\":\"\",\"10\":\"\"}}],\"keterangan\":\"Catatan: n Sks pengajaran sama dengan sks mata kuliah yang diajarkan. Bila dosen mengajar kelas paralel, maka beban sks pengajaran untuk satu tambahan kelas paralel adalah 1 / 2 kali sks mata kuliah.n * rata - rata adalah jumlah sks dibagi dengan jumlah dosen tetap. n ** sks manajemen dihitung sbb: n Beban kerja manajemen untuk jabatan - jabatan ini adalah sbb.nBeban kerja manajemen untuk jabatan - jabatan ini adalah sbb. n - rektor / direktur politeknik 12 sks n - pembantu rektor / dekan / ketua sekolah tinggi / direktur akademi 10 sks n - ketua lembaga / kepala UPT 8 sksn - pembantu dekan / ketua jurusan / kepala pusat / ketua senat akademik / ketua senat fakultas 6 sksn - sekretaris jurusan / sekretaris pusat / sekretaris senat akademik / sekretaris senat universitas / sekretaris senat fakultas / kepala lab.atau studio / kepala balai / ketua PS 4 sksn - sekretaris PS 3 sksn Bagi PT yang memiliki struktur organisasi yang berbeda, beban kerja manajemen untuk jabatan baru disamakan dengan beban kerja jabatan yang setara.\"},\"4.3.4\":{\"perintah\":\"Tuliskan data aktivitas mengajar dosen tetap yang bidang keahliannya sesuai dengan PS,  dalam satu tahun akademik terakhir di PS ini dengan mengikuti format tabel berikut:\",\"tabel\":[{\"Nama Dosen Tetap\":\"\",\"Bidang Keahlian\":\"\",\"Kode Mata Kuliah\":\"\",\"Nama Mata Kuliah\":\"\",\"Jumlah Kelas\":\"\",\"Jumlah Pertemuan yang Direncanakan\":\"\",\"Jumlah Pertemuan yang Dilaksanakan\":\"\",\"Jumlah\":{\"7\":\"\",\"8\":\"\"}}]},\"4.3.5\":{\"perintah\":\"Tuliskan data aktivitas mengajar dosen tetap yang bidang keahliannya di luar PS,  dalam satu tahun akademik terakhir di PS ini dengan mengikuti format tabel berikut:\",\"tabel\":[{\"Nama Dosen Tetap\":\"\",\"Bidang Keahlian\":\"\",\"Kode Mata Kuliah\":\"\",\"Nama Mata Kuliah\":\"\",\"Jumlah Kelas\":\"\",\"Jumlah Pertemuan yang Direncanakan\":\"\",\"Jumlah Pertemuan yang Dilaksanakan\":\"\",\"Jumlah\":{\"7\":\"\",\"8\":\"\"}}]}}},\"4.4\":{\"judul\":\"Dosen Tidak Tetap\",\"4.4.1\":{\"perintah\":\"Tuliskan data dosen tidak tetap pada PS dengan mengikuti format tabel berikut:\",\"tabel\":[{\"Nama Dosen Tidak Tetap\":\"\",\"NIDN**\":\"\",\"Tgl. Lahir\":\"\",\"Jabatan Akademik***\":\"\",\"Gelar Akademik\":\"\",\"Pendidikan S1, S2, S3 dan Asal PT*\":\"\",\"Bidang Keahliah untuk Setiap Jenjang Pendidikan\":\"\"}],\"keterangan\":\"* Lampirkan fotokopi ijazah.n** NIDN : Nomor Induk Dosen Nasionaln*** Dosen yang telah memperoleh sertifikat dosen agar diberi tanda (***)dan fotokopi sertifikatnya agar dilampirkan.\"},\"4.4.2\":{\"perintah\":\"Tuliskan data aktivitas mengajar dosen tidak tetap pada satu tahun terakhir di PS ini dengan mengikuti format tabel berikut:\",\"tabel\":[{\"Nama Dosen Tdk Tetap\":\"\",\"Bidang Keahlian\":\"\",\"Kode Mata Kuliah\":\"\",\"Nama Mata Kuliah\":\"\",\"Jumlah Kelas\":\"\",\"Jumlah Pertemuan yang Direncanakan\":\"\",\"Jumlah Pertemuan yang Dilaksanakan\":\"\",\"Jumlah\":{\"7\":\"\",\"8\":\"\"}}]}},\"4.5\":{\"judul\":\"Upaya Peningkatan Sumber Daya Manusia (SDM) dalam tiga tahun terakhir\",\"4.5.1\":{\"perintah\":\"Kegiatan tenaga ahli/pakar sebagai pembicara dalam seminar/pelatihan, pembicara tamu, dsb, dari luar PT sendiri (tidak termasuk dosen tidak tetap)\",\"tabel\":[{\"Nama Tenaga Ahli/Pakar\":\"\",\"Nama dan Judul Kegiatan\":\"\",\"Waktu Pelaksanaan\":\"\"}]},\"4.5.2\":{\"perintah\":\"Peningkatan kemampuan dosen tetap melalui program tugas belajar dalam bidang yang sesuai dengan bidang PS\",\"tabel\":[{\"Nama Dosen\":\"\",\"Jenjang Pendidikan Lanjut\":\"\",\"Bidang Studi\":\"\",\"Perguruan Tinggi\":\"\",\"Negara\":\"\",\"Tahun Mulai Studi\":\"\"}]},\"4.5.3\":{\"perintah\":\"Kegiatan dosen tetap yang bidang keahliannya sesuai dengan PS dalam seminar ilmiah/lokakarya/penataran/workshop/ pagelaran/ pameran/peragaan yang tidak hanya melibatkan dosen PT sendiri\",\"tabel\":[{\"Nama Dosen\":\"\",\"Jenis Kegiatan*\":\"\",\"Tempat\":\"\",\"Waktu\":\"\",\"Sebagai\":{\"Penyaji\":\"\",\"Peserta\":\"\"}}],\"keterangan\":\"* Jenis kegiatan : Seminar ilmiah, Lokakarya, Penataran/Pelatihan, Workshop, Pagelaran, Pameran, Peragaan dll\"},\"4.5.4\":{\"perintah\":\"Sebutkan pencapaian prestasi/reputasi dosen (misalnya prestasi dalam pendidikan, penelitian dan pelayanan/pengabdian kepada masyarakat).\",\"keterangan\":\"* Sediakan dokumen pendukung pada saat asesmen lapangan.\",\"tabel\":[{\"Nama Dosen\":\"\",\"Prestasi yang Dicapai*\":\"\",\"Waktu Pencapaian\":\"\",\"Tingkat (Lokal, Nasional, Internasional)\":\"\"}]},\"4.5.5\":{\"perintah\":\"Sebutkan keikutsertaan dosen tetap dalam organisasi keilmuan atau organisasi profesi.\",\"tabel\":[{\"Nama Dosen\":\"\",\"Nama Organisasi Keilmuan atau Organisasi Profesi\":\"\",\"Kurun Waktu\":\"\",\"Tingkat (Lokal, Nasional, Internasional\":\"\"}]}},\"4.6\":{\"judul\":\"Tenaga Kependidikan\",\"4.6.1\":{\"perintah\":\"Tuliskan data tenaga kependidikan  yang ada di PS, Jurusan, Fakultas atau PT yang melayani mahasiswa PS dengan mengikuti format tabel berikut:\",\"tabel\":[{\"Jenis Tenaga Kependidikan\":\"Pustakawan*\",\"Jumlah Tenaga Kependidikan dengan Pendidikan Terakhir\":{\"S3\":\"\",\"S2\":\"\",\"S1\":\"\",\"D4\":\"\",\"D3\":\"\",\"D2\":\"\",\"D1\":\"\",\"SMA/SMK\":\"\"},\"Unit Kerja\":\"\"},{\"Jenis Tenaga Kependidikan\":\"Laboran/ Teknisi/ Analis/ Operator/ Programmer\",\"Jumlah Tenaga Kependidikan dengan Pendidikan Terakhir\":{\"S3\":\"\",\"S2\":\"\",\"S1\":\"\",\"D4\":\"\",\"D3\":\"\",\"D2\":\"\",\"D1\":\"\",\"SMA/SMK\":\"\"},\"Unit Kerja\":\"\"},{\"Jenis Tenaga Kependidikan\":\"Administrasi\",\"Jumlah Tenaga Kependidikan dengan Pendidikan Terakhir\":{\"S3\":\"\",\"S2\":\"\",\"S1\":\"\",\"D4\":\"\",\"D3\":\"\",\"D2\":\"\",\"D1\":\"\",\"SMA/SMK\":\"\"},\"Unit Kerja\":\"\"},{\"Jumlah Tenaga Kependidikan dengan Pendidikan Terakhir\":{\"S3\":\"\",\"S2\":\"\",\"S1\":\"\",\"D4\":\"\",\"D3\":\"\",\"D2\":\"\",\"D1\":\"\",\"SMA/SMK\":\"\"}}],\"keterangan\":\"* Hanya yang memiliki pendidikan formal dalam bidang perpustakaan\"},\"4.6.2\":{\"perintah\":\"Jelaskan upaya yang telah dilakukan PS dalam meningkatkan kualifikasi dan kompetensi tenaga kependidikan, dalam hal pemberian kesempatan belajar/pelatihan, pemberian fasilitas termasuk dana, dan jenjang karir.\",\"isian\":\"\"}}}}', 2007, 0, '2017-05-17 08:23:43', NULL),
(31, 5, '311166', '3A', 7, '{\"standar7\":{\"judul\":\"7. PENELITIAN, PELAYANAN/PENGABDIAN KEPADA MASYARAKAT, DAN KERJASAMA\",\"7.1\":{\"judul\":\"7.1 Penelitian Dosen Tetap yang Bidang Keahliannya Sesuai dengan PS\",\"7.1.1\":{\"perintah\":\"Tuliskan jumlah judul penelitian* yang sesuai dengan bidang keilmuan PS, yang dilakukan oleh dosen tetap yang bidang keahliannya sesuai dengan PS selama tiga tahun terakhir dengan mengikuti format tabel berikut:\",\"keterangan\":\"Catatan: (*) sediakan data pendukung pada saat asesmen lapangan\"},\"7.1.2\":{\"perintah\":\"Adakah mahasiswa tugas akhir yang dilibatkan dalam penelitian dosen dalam tiga tahun terakhir?\",\"perintah2\":\"Jika ada, banyaknya mahasiswa PS yang ikut serta dalam penelitian dosen adalah  ... orang, dari ... mahasiswa yang melakukan tugas akhir melalui skripsi.\",\"isian\":\"\"},\"7.1.3\":{\"perintah\":\"Tuliskan judul artikel ilmiah/karya ilmiah/karya seni/buku yang dihasilkan selama tiga tahun terakhir oleh dosen tetap yang bidang keahliannya sesuai dengan PS dengan mengikuti format tabel berikut:\",\"keterangan\":\"Catatan: * = Tuliskan banyaknya dosen pada sel yang sesuai\"},\"7.1.4\":{\"perintah\":\"Sebutkan karya dosen dan atau mahasiswa Program Studi yang telah memperoleh/sedang memproses perlindungan Hak atas Kekayaan Intelektual (HaKI) selama tiga tahun terakhir.\",\"keterangan\":\"*Lampirkan surat paten HaKI atau keterangan sejenis.\"}},\"7.2\":{\"judul\":\"7.2 Kegiatan Pelayanan/Pengabdian kepada Masyarakat (PKM)\",\"7.2.1\":{\"perintah\":\"Tuliskan jumlah kegiatan Pelayanan/Pengabdian kepada Masyarakat (*) yang sesuai dengan bidang keilmuan PS selama tiga tahun terakhir yang dilakukan oleh dosen tetap yang bidang keahliannya sesuai dengan PS dengan mengikuti format tabel berikut:\",\"keterangan\":\"Catatan: (*) Pelayanan/Pengabdian kepada Masyarakat adalah penerapan bidang ilmu untuk menyelesaikan masalah di masyarakat (termasuk masyarakat industri, pemerintah, dsb.)\"},\"7.2.2\":{\"perintah\":\"Adakah mahasiswa yang dilibatkan dalam kegiatan pelayanan/pengabdian kepada masyarakat dalam tiga tahun terakhir?\",\"perintah2\":\"Jika Ya, jelaskan tingkat partisipasi dan bentuk keterlibatan mahasiswa dalam kegiatan pelayanan/pengabdian kepada masyarakat\",\"isian\":\"\"}},\"7.3\":{\"judul\":\"7.3 Kegiatan Kerjasama dengan Instansi Lain\",\"7.3.1\":{\"perintah\":\"Tuliskan instansi dalam negeri yang menjalin kerjasama* yang terkait dengan program studi/jurusan dalam tiga tahun terakhir.\",\"keterangan\":\"Catatan : (*) dokumen pendukung disediakan pada saat asesmen lapangan\"},\"7.3.2\":{\"perintah\":\"Tuliskan instansi luar negeri yang menjalin kerjasama* yang terkait dengan program studi/jurusan dalam tiga tahun terakhir.\",\"keterangan\":\"Catatan : (*) dokumen pendukung disediakan pada saat asesmen lapangan\"}},\"7\":{\"isian\":{\"nomorIsian\":\"\"}}}}\r\n', 2007, 0, '2017-05-17 08:23:44', NULL),
(32, 5, '311166', '3B', 2, '{\"standar2\":{\"judul\":\"2. TATA PAMONG, KEPEMIMPINAN, SISTEM PENGELOLAAN, DAN PENJAMINAN MUTU\",\"2.1\":{\"judul\":\"2.1 Tata Pamong\",\"narasi\":\"Tata pamong adalah suatu sistem yang dapat menjadikan kepemimpinan, sistem pengelolaan dan penjaminan mutu berjalan secara efektif di dalam universitas/institusi yang mengelola program studi.  Hal-hal yang menjadi fokus di dalam tata pamong termasuk bagaimana kebijakan  dan strategi disusun sedemikian rupa sehingga memungkinkan terpilihnya pemimpin dan pengelola yang kredibel dan sistem penyelenggaraan program studi secara kredibel, transparan, akuntabel, bertanggung jawab dan  menerapkan prinsip-prinsip keadilan. Organisasi dan sistem tata pamong yang baik <i>(good governance)</i> mencerminkan kredibilitas, transparansi, akuntabilitas, tanggungjawab dan keadilan Fakultas/Sekolah Tinggi dalam mengelola program studi. \",\"perintah\":\"Uraikan secara ringkas sistem dan pelaksanaan tata pamong di Fakultas/Sekolah Tinggi untuk memilih pemimpin dan membangun sistem tata pamong yang kredibel, akuntabel, transparan, bertanggung jawab dan adil.\",\"isian\":\"\"},\"2.2\":{\"judul\":\" 2.2  Struktur Organisasi, Kordinasi, dan Cara Kerja Fakultas/Sekolah Tinggi\",\"narasi\":\"\",\"perintah\":\"Gambarkan struktur organisasi  Fakultas/Sekolah Tinggi serta tugas/fungsi dari tiap unit yang ada.\",\"isian\":\"\"},\"2.3\":{\"judul\":\"2.3 Kepemimpinan\",\"narasi\":\"Kepemimpinan efektif mengarahkan dan mempengaruhi perilaku semua unsur dalam program studi, mengikuti nilai, norma, etika, dan budaya organisasi yang disepakati bersama, serta mampu  membuat keputusan yang tepat dan cepat.Kepemimpinan mampu memprediksi masa depan, merumuskan dan  mengartikulasi visi yang realistis, kredibel,  serta mengkomunikasikan visi ke depan, yang menekankan pada keharmonisan hubungan manusia dan mampu menstimulasi secara  intelektual dan arif bagi anggota untuk mewujudkan visi organisasi, serta mampu memberikan arahan, tujuan, peran, dan tugas kepada  seluruh unsur dalam perguruan tinggi. Dalam menjalankan fungsi   kepemimpinan dikenal kepemimpinan operasional, kepemimpinan  organisasi, dan kepemimpinan publik.  Kepemimpinan operasional  berkaitan dengan kemampuan menjabarkan visi, misi ke dalam   kegiatan operasional program studi.  Kepemimpinan organisasi   berkaitan dengan pemahaman tata kerja antar unit dalam organisasi  perguruan tinggi.  Kepemimpinan publik berkaitan dengan kemampuan  menjalin kerjasama dan menjadi rujukan bagi publik.\",\"perintah\":\"Jelaskan pola kepemimpinan dalam Fakultas/Sekolah Tinggi.\",\"isian\":\"\"},\"2.4\":{\"judul\":\"2.4 Sistem Pengelolaan\",\"narasi\":\"Sistem pengelolaan fungsional dan operasional program studi mencakup <i>planning, organizing, staffing, leading, controlling,</i> serta operasi internal dan eksternal\",\"perintah\":\"Jelaskan sistem pengelolaan Fakultas/Sekolah Tinggi serta ketersediaan Renstra dan Renop.\",\"isian\":\"\"},\"2.5\":{\"judul\":\"2.5 Sistem Penjaminan Mutu Fakultas/Sekolah Tinggi\",\"perintah\":\"Jelaskan sistem penjaminan mutu dalam Fakultas/Sekolah Tinggi.  Jelaskan pula standar mutu yang digunakan.\",\"isian\":\"\"}}}', 2007, 0, '2017-05-17 08:23:44', NULL),
(33, 5, '311166', '3B', 4, '{\"standar4\":{\"4.1\":{\"judul\":\"Dosen Tetap\",\"narasi\":\"Dosen tetap dalam borang akreditasi BAN-PT adalah dosen yang diangkat dan ditempatkan sebagai tenaga tetap pada PT yang bersangkutan; termasuk dosen penugasan Kopertis, dan dosen yayasan pada PTS dalam bidang yang relevan dengan keahlian bidang studinya. Seorang dosen hanya dapat menjadi dosen tetap pada satu perguruan tinggi, dan mempunyai penugasan kerja minimum 20jam/minggu.\",\"isian\":\"-\",\"4.1.1\":{\"perintah\":\"Tuliskan jumlah dosen tetap yang bidang keahliannya sesuai dengan masing-masing PS di lingkungan Fakultas/Sekolah Tinggi, berdasarkan jabatan fungsional dan pendidikan tertinggi, dengan mengikuti format tabel berikut:\",\"tabel\":\"-\",\"isian\":\"-\",\"keterangan\":\"-\"},\"4.1.2\":{\"perintah\":\"Tuliskan banyaknya penggantian dan perekrutan serta pengembangan dosen tetap yang bidang keahliannya sesuai dengan program studi pada Fakultas/Sekolah Tinggi dalam tiga tahun terakhir dengan mengikuti format tabel berikut:\",\"tabel\":\"-\",\"isian\":\"-\",\"keterangan\":\"-\"},\"4.1.3\":{\"perintah\":\"Uraikan pandangan Fakultas/Sekolah Tinggi tentang data pada butir 4.1.1 dan 4.1.2, yang mencakup aspek: kecukupan, kualifikasi, dan pengembangan karir. Jelaskan kendala yang ada dalam pengembangan tenaga dosen tetap.\",\"tabel\":\"-\",\"isian\":\"\",\"keterangan\":\"-\"}},\"4.2\":{\"judul\":\"Tenaga Kependidikan\",\"perintah\":\"Uraikan pandangan Fakultas/Sekolah Tinggi tentang data pada butir 4.1.1 dan 4.1.2, yang mencakup aspek: kecukupan, kualifikasi, dan pengembangan karir. Jelaskan kendala yang ada dalam pengembangan tenaga dosen tetap.\",\"tabel\":\"-\",\"isian\":\"\",\"keterangan\":\"-\"}}}', 2007, 0, '2017-05-17 08:23:44', NULL),
(34, 5, '311166', '3B', 7, '{\"standar7\":{\"7.1\":{\"judul\":\"Penelitian\",\"narasi\":\"-\",\"isian\":\"-\",\"7.1.1\":{\"perintah\":\"Tuliskan jumlah dan dana penelitian yang dilakukan oleh masing-masing PS di lingkungan Fakultas/Sekolah Tinggi dalam tiga tahun terakhir dengan mengikuti format tabel berikut:\",\"tabel\":\"-\",\"isian\":\"-\",\"keterangan\":\"-\"},\"7.1.2\":{\"perintah\":\"Uraikan pandangan pimpinan Fakultas/Sekolah Tinggi tentang data pada butir 7.1.1, dalam perspektif: kesesuaian dengan Visi dan Misi, kecukupan, kewajaran, upaya pengembangan dan peningkatan mutu. Uraikan pula kendala-kendala yang dihadapi.\",\"tabel\":\"-\",\"isian\":\"\",\"keterangan\":\"-\"}},\"7.2\":{\"judul\":\"Pelayanan/Pengabdian kepada Masyarakat\",\"narasi\":\"Pelayanan/Pengabdian kepada Masyarakat adalah penerapan bidang ilmu untuk menyelesaikan masalah di masyarakat (termasuk masyarakat industri, pemerintah, dsb.)\",\"isian\":\"-\",\"7.2.1\":{\"perintah\":\"Tuliskan jumlah dan dana kegiatan pelayanan/pengabdian kepada masyarakat yang dilakukan oleh masing-masing PS di lingkungan Fakultas dalam tiga tahun terakhir dengan mengikuti format tabel berikut:\",\"tabel\":\"-\",\"isian\":\"-\",\"keterangan\":\"-\"},\"7.2.2\":{\"perintah\":\"Uraikan pandangan Fakultas/Sekolah Tinggi tentang data pada butir 7.2.1 dalam perspektif: kesesuaian dengan Visi dan Misi, kecukupan, kewajaran, upaya pengembangan dan peningkatan mutu. Uraikan pula kendala-kendala yang dihadapi.\",\"tabel\":\"-\",\"isian\":\"\",\"keterangan\":\"-\"}}}}', 2007, 0, '2017-05-17 08:23:44', NULL),
(35, 5, '311166', 'ED', NULL, '', 2007, 0, '2017-05-17 08:23:44', NULL);
INSERT INTO `borang` (`id`, `id_histori`, `kode_prodi`, `jenis`, `standar`, `isi`, `tahun`, `is_reviewed`, `created_at`, `updated_at`) VALUES
(36, 6, '311225', '3A', 2, '{\"standar2\":{\"judul\":\"2. TATA PAMONG, KEPEMIMPINAN, SISTEM PENGELOLAAN, DAN PENJAMINAN MUTU\",\"2.1\":{\"judul\":\"2.1 Sistem Tata Pamong\",\"narasi\":\"Sistem tata pamong berjalan secara efektif melalui mekanisme yang disepakati bersama, serta dapat memelihara dan mengakomodasi semua unsur, fungsi, dan peran dalam program studi. Tata pamong didukung dengan budaya organisasi yang dicerminkan dengan ada dan tegaknya aturan, tatacara pemilihan pimpinan, etika dosen, etika mahasiswa, etika tenaga kependidikan, sistem penghargaan dan sanksi serta pedoman dan prosedur pelayanan (administrasi, perpustakaan, laboratorium, dan studio). Sistem tata pamong (input, proses, output dan outcome serta lingkungan eksternal yang menjamin terlaksananya tata pamong yang baik) harus diformulasikan, disosialisasikan, dilaksanakan,  dipantau dan dievaluasi dengan peraturan dan prosedur yang jelas. \",\"perintah\":\"Uraikan secara ringkas sistem dan pelaksanaan tata pamong di Program Studi untuk  membangun sistem tata pamong yang kredibel, transparan, akuntabel, bertanggung jawab dan adil.\",\"isian\":\"%3Cp%3ETata%20pamong%20adalah%20suatu%20sistem%20yang%20dapat%20menjadikan%20kepemimpinan%2C%20sistem%20pengelolaan%20dan%20penjaminan%20mutu%20berjalan%20secara%20efektif%20di%20dalam%20Universitas%2FInstitusi%20yang%20mengelola%20Program%20Studi.%20Hal-hal%20yang%20menjadi%20fokus%20di%20dalam%20tata%20pamong%20termasuk%20bagaimana%20kebijakan%20dan%20strategi%20disusun%20sedemikian%20rupa%20sehingga%20memungkinkan%20terpilihnya%20pemimpin%20dan%20pengelola%20yang%20kredibel%20dan%20sistem%20penyelenggaraan%20Program%20Studi%20secara%20kredibel%2C%20transparan%2C%20akuntabel%2C%20bertanggungjawab%20dan%20menerapkan%20prinsip-prinsip%20keadilan.%3C%2Fp%3E%3Cp%3E%3Cbr%3E%3C%2Fp%3E%3Cp%3EKegiatan%20tata%20pamong%20di%20Program%20Studi%20Manajemen%20Universitas%20Victory%20mengikuti%20berbagai%20peraturan%20dan%20perundang-undangan%20yang%20ditetapkan%20oleh%20Kementerian%20Pendidikan%20dan%20Kebudayaan%2C%20keputusan%20Universitas%20dan%20Keputusan%20Fakultas.%20Tugas%20masing-masing%20unsur%20dan%20struktur%20dalam%20tata%20pamong%2C%20hubungan%20kerja%20antar%20unsur-unsur%20dalam%20tata%20pamong%2C%20serta%20berbagai%20peraturan%20akademik%20di%20lingkup%20Universitas%20telah%20dibuat%20oleh%20pimpinan%20Universitas%20Victory%20dan%20secara%20lebih%20spesifik%20telah%20dibuat%20oleh%20pimpinan%20Fakultas%20Ekonomi%20Universitas%20Victory%20melalui%20Pedoman%20Job%20Description%20sehingga%20penyelenggaraan%20tata%20pamong%20dapat%20menjamin%20tercapainya%20visi%2C%20misi%20dan%20tujuan%20Program%20Studi%20Manajemen%20Universitas%20Victory%3Cbr%3E%3C%2Fp%3E\"},\"2.2\":{\"judul\":\"2.2 Kepemimpinan\",\"narasi\":\"Kepemimpinan efektif mengarahkan dan mempengaruhi perilaku semua unsur dalam program studi, mengikuti nilai, norma, etika, dan budaya organisasi yang disepakati bersama, serta mampu membuat keputusan yang tepat dan cepat. Kepemimpinan mampu memprediksi masa depan, merumuskan dan mengartikulasi visi yang realistik, kredibel, serta mengkomunikasikan visi ke depan, yang menekankan pada keharmonisan hubungan manusia dan mampu menstimulasi secara intelektual dan arif bagi anggota untuk mewujudkan visi organisasi, serta mampu memberikan arahan, tujuan, peran, dan tugas kepada seluruh unsur dalam perguruan tinggi. Dalam menjalankan fungsi kepemimpinan dikenal kepemimpinan operasional, kepemimpinan organisasi, dan kepemimpinan publik.  Kepemimpinan operasional berkaitan dengan kemampuan menjabarkan visi, misi ke dalam kegiatan operasional program studi.  Kepemimpinan organisasi berkaitan dengan pemahaman tata kerja antar unit dalam organisasi perguruan tinggi.  Kepemimpinan publik berkaitan dengan kemampuan menjalin kerjasama dan menjadi rujukan bagi publik.\",\"perintah\":\"Jelaskan pola kepemimpinan dalam Program Studi.\",\"isian\":\"%3Cp%3EBab%20II%20Tentang%20Sistem%20Penyelenggaraan%20Pendidikan%2C%20Pasal%206%20Tentang%20Kegiatan%20Pendidikan.%3C%2Fp%3E%3Col%3E%3Cli%3EKegiatan%20operasional%20di%20bidang%20pendidikan.%20Jadwal%20mengajar%2C%20SK%20mengajar%2C%20evaluasi%20Menentukan%20prioritas%20pekerjaan%20%282%29%20Memberi%20nilai%20kinerja%20bawahan%3C%2Fli%3E%3Cli%3EKegiatan%20operasional%20di%20bidang%20Penelitian%20%28Mengacu%20kepada%20Dokumen%20Renstra%20maka%20Program%20Studi%20melakukan%20seminar%20metodologi%20penelitian%2C%20bantuan%20pendanaan%20penelitian%2C%20bantuan%20biaya%20publikasi%20jurnal%20ilmiah%2C%20workshop%29%3C%2Fli%3E%3Cli%3EKegiatan%20operasional%20di%20bidang%20pengabdian%20masyarakat%20%28Mengacu%20kepada%20Dokum%20Renstra%20maka%20Program%20Studi%20melakukan%20pelatihan%2C%20pendampingan%2C%20workshop%29%3C%2Fli%3E%3C%2Fol%3E\"},\"2.3\":{\"judul\":\"2.3 Sistem Pengelolaan\",\"narasi\":\"Sistem pengelolaan fungsional dan operasional program studi mencakup <i>planning</i>, <i>organizing</i>, <i>staffing</i>, <i>leading</i>, <i>controlling</i> dalam kegiatan  internal maupun eksternal.\",\"perintah\":\"Jelaskan sistem pengelolaan Program Studi serta dokumen pendukungnya.\",\"isian\":\"<p>jsadnsajdaaskdmaksm</p>\"},\"2.4\":{\"judul\":\"2.4 Penjaminan Mutu\",\"perintah\":\"Bagaimanakah pelaksanaan penjaminan mutu pada Program Studi? Jelaskan.\",\"isian\":\"<p>asdkasjd jdasnkdjan</p>\"},\"2.5\":{\"judul\":\"2.5 Umpan Balik\",\"perintah\":\"Apakah program studi telah melakukan kajian tentang proses pembelajaran melalui umpan balik dari dosen, mahasiswa, alumni, dan pengguna lulusan mengenai harapan dan persepsi mereka?  Jika Ya, jelaskan isi umpan balik dan tindak lanjutnya.\",\"isian\":\"%3Ctable%20style%3D%22width%3A%20100%25%3B%22%3E%3Ctbody%3E%3Ctr%3E%3Ctd%20style%3D%22width%3A%2024.9129%25%3B%20background-color%3A%20rgb%28204%2C%20204%2C%20204%29%3B%22%3E%3Cdiv%20style%3D%22text-align%3A%20center%3B%22%3E%3Cstrong%3EUmpan%20Balik%20Dari%3Cbr%3E%281%29%3C%2Fstrong%3E%3C%2Fdiv%3E%3C%2Ftd%3E%3Ctd%20style%3D%22width%3A%2041.5498%25%3B%20background-color%3A%20rgb%28204%2C%20204%2C%20204%29%3B%22%3E%3Cdiv%20style%3D%22text-align%3A%20center%3B%22%3E%3Cstrong%3EIsi%20Umpan%20Balik%3Cbr%3E%282%29%3C%2Fstrong%3E%3C%2Fdiv%3E%3C%2Ftd%3E%3Ctd%20style%3D%22width%3A%2033.3333%25%3B%20background-color%3A%20rgb%28204%2C%20204%2C%20204%29%3B%22%3E%3Cdiv%20style%3D%22text-align%3A%20center%3B%22%3E%3Cstrong%3ETin%3C%2Fstrong%3E%3Cstrong%3Edak%20Lanjut%3Cbr%3E%283%29%3C%2Fstrong%3E%3C%2Fdiv%3E%3C%2Ftd%3E%3C%2Ftr%3E%3Ctr%3E%3Ctd%20style%3D%22width%3A%2024.9129%25%3B%20background-color%3A%20rgb%28255%2C%20255%2C%20255%29%3B%22%3EDosen%3Cbr%3E%3C%2Ftd%3E%3Ctd%20style%3D%22width%3A%2041.5498%25%3B%20background-color%3A%20rgb%28255%2C%20255%2C%20255%29%3B%22%3E%3Cdiv%20data-empty%3D%22true%22%3E%3Cbr%3E%3C%2Fdiv%3E%3C%2Ftd%3E%3Ctd%20style%3D%22width%3A%2033.3333%25%3B%20background-color%3A%20rgb%28255%2C%20255%2C%20255%29%3B%22%3E%3Cdiv%20data-empty%3D%22true%22%3E%3Cbr%3E%3C%2Fdiv%3E%3C%2Ftd%3E%3C%2Ftr%3E%3Ctr%3E%3Ctd%20style%3D%22width%3A%2024.9129%25%3B%20background-color%3A%20rgb%28255%2C%20255%2C%20255%29%3B%22%3EMahasiswa%3Cbr%3E%3C%2Ftd%3E%3Ctd%20style%3D%22width%3A%2041.5498%25%3B%20background-color%3A%20rgb%28255%2C%20255%2C%20255%29%3B%22%3E%3Cdiv%20data-empty%3D%22true%22%3E%3Cbr%3E%3C%2Fdiv%3E%3C%2Ftd%3E%3Ctd%20style%3D%22width%3A%2033.3333%25%3B%20background-color%3A%20rgb%28255%2C%20255%2C%20255%29%3B%22%3E%3Cdiv%20data-empty%3D%22true%22%3E%3Cbr%3E%3C%2Fdiv%3E%3C%2Ftd%3E%3C%2Ftr%3E%3Ctr%3E%3Ctd%20style%3D%22width%3A%2024.9129%25%3B%20background-color%3A%20rgb%28255%2C%20255%2C%20255%29%3B%22%3EAlumni%3Cbr%3E%3C%2Ftd%3E%3Ctd%20style%3D%22width%3A%2041.5498%25%3B%20background-color%3A%20rgb%28255%2C%20255%2C%20255%29%3B%22%3E%3Cdiv%20data-empty%3D%22true%22%3E%3Cbr%3E%3C%2Fdiv%3E%3C%2Ftd%3E%3Ctd%20style%3D%22width%3A%2033.3333%25%3B%20background-color%3A%20rgb%28255%2C%20255%2C%20255%29%3B%22%3E%3Cdiv%20data-empty%3D%22true%22%3E%3Cbr%3E%3C%2Fdiv%3E%3C%2Ftd%3E%3C%2Ftr%3E%3Ctr%3E%3Ctd%20style%3D%22width%3A%2024.9129%25%3B%20background-color%3A%20rgb%28255%2C%20255%2C%20255%29%3B%22%3EPengguna%20Lulusan%3Cbr%3E%3C%2Ftd%3E%3Ctd%20style%3D%22width%3A%2041.5498%25%3B%20background-color%3A%20rgb%28255%2C%20255%2C%20255%29%3B%22%3E%3Cdiv%20data-empty%3D%22true%22%3E%3Cbr%3E%3C%2Fdiv%3E%3C%2Ftd%3E%3Ctd%20style%3D%22width%3A%2033.3333%25%3B%20background-color%3A%20rgb%28255%2C%20255%2C%20255%29%3B%22%3E%3Cdiv%20data-empty%3D%22true%22%3E%3Cbr%3E%3C%2Fdiv%3E%3C%2Ftd%3E%3C%2Ftr%3E%3C%2Ftbody%3E%3C%2Ftable%3E\"},\"2.6\":{\"judul\":\"2.6 Keberlanjutan\",\"perintah\":\"Jelaskan upaya untuk menjamin keberlanjutan (sustainability) program studi ini, khususnya dalam hal:\",\"pertanyaan\":[\"a. Upaya untuk peningkatan animo calon mahasiswa\",\"b. Upaya peningkatan mutu manajemen\",\"c. Upaya untuk peningkatan mutu lulusan\",\"d. Upaya untuk pelaksanaan dan hasil kerjasama kemitraan\",\"e. Upaya dan prestasi memperoleh dana hibah kompetitif\"],\"isian\":\"<p>askdns ajskdnakj askjndasj</p>\"}}}', 2007, 0, '2017-05-18 05:18:31', '2017-05-18 05:18:31'),
(37, 6, '311225', '3A', 4, '{\"standar4\":{\"4.1\":{\"judul\":\"Sistem Seleksi dan Pengembangan\",\"narasi\":\"-\",\"perintah\":\"Jelaskan sistem seleksi/perekrutan, penempatan, pengembangan, retensi, dan pemberhentian dosen dan tenaga kependidikan untuk menjamin mutu penyelenggaraan program akademik (termasuk informasi tentang ketersediaan pedoman tertulis dan konsistensi pelaksanaannya).\",\"isian\":\"\"},\"4.2\":{\"judul\":\"Monitoring dan Evaluasi\",\"narasi\":\"-\",\"perintah\":\"Jelaskan sistem monitoring dan evaluasi, serta rekam jejak kinerja akademik dosen dan kinerja tenaga kependidikan (termasuk informasi tentang ketersediaan pedoman tertulis, dan monitoring dan evaluasi kinerja dosen dalam tridarma serta dokumentasinya).\",\"isian\":\"\"},\"4.3\":{\"judul\":\"Dosen Tetap\",\"narasi\":\"Dosen tetap dalam borang akreditasi BAN-PT adalah dosen yang diangkat dan ditempatkan sebagai tenaga tetap pada PT yang bersangkutan termasuk dosen penugasan Kopertis, dan dosen yayasan pada PTS dalam bidang yang relevan dengan keahlian bidang studinya. Seorang dosen hanya dapat menjadi dosen tetap pada satu perguruan tinggi, dan mempunyai penugasan kerja minimum 36 jam/minggu.nDosen tetap dipilah dalam 2 kelompok, yaitu:n1. dosen tetap yang bidang keahliannya sesuai dengan PSn2. dosen tetap yang bidang keahliannya di luar PS\",\"isian\":{\"4.3.1\":{\"perintah\":\"Data dosen tetap yang bidang keahliannya sesuai dengan bidang PS:\",\"tabel\":[{\"Nama Dosen Tetap\":\"\",\"NIDN**\":\"\",\"Tgl. Lahir\":\"\",\"Jabatan Akademik***\":\"\",\"Gelar Akademik\":\"\",\"Pendidikan S1, S2, S3 dan Asal PT*\":\"\",\"Bidang Keahlian untuk Setiap Jenjang Pendidikan\":\"\"}],\"keterangan\":\"* Lampirkan fotokopi ijazahn** NIDN : Nomor Induk Dosen Nasionaln** Dosen yang telah memperoleh sertifikat dosen agar diberi tanda (***) dan fotokopi sertifikatnya agar dilampirkan.\"},\"4.3.2\":{\"perintah\":\"Data dosen tetap yang bidang keahliannya di luar bidang PS:\",\"tabel\":[{\"Nama Dosen Tetap\":\"\",\"NIDN**\":\"\",\"Tgl. Lahir\":\"\",\"Jabatan Akademik***\":\"\",\"Gelar Akademik\":\"\",\"Pendidikan S1, S2, S3 dan Asal PT*\":\"\",\"Bidang Keahlian untuk Setiap Jenjang Pendidikan\":\"\"}],\"keterangan\":\"* Lampirkan fotokopi ijazahn** NIDN : Nomor Induk Dosen Nasionaln*** Dosen yang telah memperoleh sertifikat dosen agar diberi tanda (***) dan fotokopi sertifikatnya agar dilampirkan.\"},\"4.3.3\":{\"perintah\":\"Aktivitas dosen tetap yang bidang bidang keahliannya sesuai dengan PS dinyatakan dalam sks rata-rata per semester pada satu tahun akademik terakhir, diisi dengan perhitungan sesuai SK Dirjen DIKTI no. 48 tahun 1983 (12 sks setara dengan 36 jam kerja per minggu)\",\"tabel\":[{\"Nama Dosen Tetap\":\"\",\"sks Pengajaran pada\":{\"PS Sendiri\":\"\",\"PS Lain PT Sendiri\":\"\",\"PT Lain\":\"\"},\"sks Penelitian\":\"\",\"sks Pengabdian kepada Masyarakat\":\"\",\"sks Manajemen**\":{\"PT Sendiri\":\"\",\"PT Lain\":\"\"},\"Jumlah sks\":\"\",\"Jumlah\":{\"3\":\"\",\"4\":\"\",\"5\":\"\",\"6\":\"\",\"7\":\"\",\"8\":\"\",\"9\":\"\",\"10\":\"\"},\"Rata-rata*\":{\"3\":\"\",\"4\":\"\",\"5\":\"\",\"6\":\"\",\"7\":\"\",\"8\":\"\",\"9\":\"\",\"10\":\"\"}}],\"keterangan\":\"Catatan: n Sks pengajaran sama dengan sks mata kuliah yang diajarkan. Bila dosen mengajar kelas paralel, maka beban sks pengajaran untuk satu tambahan kelas paralel adalah 1 / 2 kali sks mata kuliah.n * rata - rata adalah jumlah sks dibagi dengan jumlah dosen tetap. n ** sks manajemen dihitung sbb: n Beban kerja manajemen untuk jabatan - jabatan ini adalah sbb.nBeban kerja manajemen untuk jabatan - jabatan ini adalah sbb. n - rektor / direktur politeknik 12 sks n - pembantu rektor / dekan / ketua sekolah tinggi / direktur akademi 10 sks n - ketua lembaga / kepala UPT 8 sksn - pembantu dekan / ketua jurusan / kepala pusat / ketua senat akademik / ketua senat fakultas 6 sksn - sekretaris jurusan / sekretaris pusat / sekretaris senat akademik / sekretaris senat universitas / sekretaris senat fakultas / kepala lab.atau studio / kepala balai / ketua PS 4 sksn - sekretaris PS 3 sksn Bagi PT yang memiliki struktur organisasi yang berbeda, beban kerja manajemen untuk jabatan baru disamakan dengan beban kerja jabatan yang setara.\"},\"4.3.4\":{\"perintah\":\"Tuliskan data aktivitas mengajar dosen tetap yang bidang keahliannya sesuai dengan PS,  dalam satu tahun akademik terakhir di PS ini dengan mengikuti format tabel berikut:\",\"tabel\":[{\"Nama Dosen Tetap\":\"\",\"Bidang Keahlian\":\"\",\"Kode Mata Kuliah\":\"\",\"Nama Mata Kuliah\":\"\",\"Jumlah Kelas\":\"\",\"Jumlah Pertemuan yang Direncanakan\":\"\",\"Jumlah Pertemuan yang Dilaksanakan\":\"\",\"Jumlah\":{\"7\":\"\",\"8\":\"\"}}]},\"4.3.5\":{\"perintah\":\"Tuliskan data aktivitas mengajar dosen tetap yang bidang keahliannya di luar PS,  dalam satu tahun akademik terakhir di PS ini dengan mengikuti format tabel berikut:\",\"tabel\":[{\"Nama Dosen Tetap\":\"\",\"Bidang Keahlian\":\"\",\"Kode Mata Kuliah\":\"\",\"Nama Mata Kuliah\":\"\",\"Jumlah Kelas\":\"\",\"Jumlah Pertemuan yang Direncanakan\":\"\",\"Jumlah Pertemuan yang Dilaksanakan\":\"\",\"Jumlah\":{\"7\":\"\",\"8\":\"\"}}]}}},\"4.4\":{\"judul\":\"Dosen Tidak Tetap\",\"4.4.1\":{\"perintah\":\"Tuliskan data dosen tidak tetap pada PS dengan mengikuti format tabel berikut:\",\"tabel\":[{\"Nama Dosen Tidak Tetap\":\"\",\"NIDN**\":\"\",\"Tgl. Lahir\":\"\",\"Jabatan Akademik***\":\"\",\"Gelar Akademik\":\"\",\"Pendidikan S1, S2, S3 dan Asal PT*\":\"\",\"Bidang Keahliah untuk Setiap Jenjang Pendidikan\":\"\"}],\"keterangan\":\"* Lampirkan fotokopi ijazah.n** NIDN : Nomor Induk Dosen Nasionaln*** Dosen yang telah memperoleh sertifikat dosen agar diberi tanda (***)dan fotokopi sertifikatnya agar dilampirkan.\"},\"4.4.2\":{\"perintah\":\"Tuliskan data aktivitas mengajar dosen tidak tetap pada satu tahun terakhir di PS ini dengan mengikuti format tabel berikut:\",\"tabel\":[{\"Nama Dosen Tdk Tetap\":\"\",\"Bidang Keahlian\":\"\",\"Kode Mata Kuliah\":\"\",\"Nama Mata Kuliah\":\"\",\"Jumlah Kelas\":\"\",\"Jumlah Pertemuan yang Direncanakan\":\"\",\"Jumlah Pertemuan yang Dilaksanakan\":\"\",\"Jumlah\":{\"7\":\"\",\"8\":\"\"}}]}},\"4.5\":{\"judul\":\"Upaya Peningkatan Sumber Daya Manusia (SDM) dalam tiga tahun terakhir\",\"4.5.1\":{\"perintah\":\"Kegiatan tenaga ahli/pakar sebagai pembicara dalam seminar/pelatihan, pembicara tamu, dsb, dari luar PT sendiri (tidak termasuk dosen tidak tetap)\",\"tabel\":[{\"Nama Tenaga Ahli/Pakar\":\"\",\"Nama dan Judul Kegiatan\":\"\",\"Waktu Pelaksanaan\":\"\"}]},\"4.5.2\":{\"perintah\":\"Peningkatan kemampuan dosen tetap melalui program tugas belajar dalam bidang yang sesuai dengan bidang PS\",\"tabel\":[{\"Nama Dosen\":\"\",\"Jenjang Pendidikan Lanjut\":\"\",\"Bidang Studi\":\"\",\"Perguruan Tinggi\":\"\",\"Negara\":\"\",\"Tahun Mulai Studi\":\"\"}]},\"4.5.3\":{\"perintah\":\"Kegiatan dosen tetap yang bidang keahliannya sesuai dengan PS dalam seminar ilmiah/lokakarya/penataran/workshop/ pagelaran/ pameran/peragaan yang tidak hanya melibatkan dosen PT sendiri\",\"tabel\":[{\"Nama Dosen\":\"\",\"Jenis Kegiatan*\":\"\",\"Tempat\":\"\",\"Waktu\":\"\",\"Sebagai\":{\"Penyaji\":\"\",\"Peserta\":\"\"}}],\"keterangan\":\"* Jenis kegiatan : Seminar ilmiah, Lokakarya, Penataran/Pelatihan, Workshop, Pagelaran, Pameran, Peragaan dll\"},\"4.5.4\":{\"perintah\":\"Sebutkan pencapaian prestasi/reputasi dosen (misalnya prestasi dalam pendidikan, penelitian dan pelayanan/pengabdian kepada masyarakat).\",\"keterangan\":\"* Sediakan dokumen pendukung pada saat asesmen lapangan.\",\"tabel\":[{\"Nama Dosen\":\"\",\"Prestasi yang Dicapai*\":\"\",\"Waktu Pencapaian\":\"\",\"Tingkat (Lokal, Nasional, Internasional)\":\"\"}]},\"4.5.5\":{\"perintah\":\"Sebutkan keikutsertaan dosen tetap dalam organisasi keilmuan atau organisasi profesi.\",\"tabel\":[{\"Nama Dosen\":\"\",\"Nama Organisasi Keilmuan atau Organisasi Profesi\":\"\",\"Kurun Waktu\":\"\",\"Tingkat (Lokal, Nasional, Internasional\":\"\"}]}},\"4.6\":{\"judul\":\"Tenaga Kependidikan\",\"4.6.1\":{\"perintah\":\"Tuliskan data tenaga kependidikan  yang ada di PS, Jurusan, Fakultas atau PT yang melayani mahasiswa PS dengan mengikuti format tabel berikut:\",\"tabel\":[{\"Jenis Tenaga Kependidikan\":\"Pustakawan*\",\"Jumlah Tenaga Kependidikan dengan Pendidikan Terakhir\":{\"S3\":\"\",\"S2\":\"\",\"S1\":\"\",\"D4\":\"\",\"D3\":\"\",\"D2\":\"\",\"D1\":\"\",\"SMA/SMK\":\"\"},\"Unit Kerja\":\"\"},{\"Jenis Tenaga Kependidikan\":\"Laboran/ Teknisi/ Analis/ Operator/ Programmer\",\"Jumlah Tenaga Kependidikan dengan Pendidikan Terakhir\":{\"S3\":\"\",\"S2\":\"\",\"S1\":\"\",\"D4\":\"\",\"D3\":\"\",\"D2\":\"\",\"D1\":\"\",\"SMA/SMK\":\"\"},\"Unit Kerja\":\"\"},{\"Jenis Tenaga Kependidikan\":\"Administrasi\",\"Jumlah Tenaga Kependidikan dengan Pendidikan Terakhir\":{\"S3\":\"\",\"S2\":\"\",\"S1\":\"\",\"D4\":\"\",\"D3\":\"\",\"D2\":\"\",\"D1\":\"\",\"SMA/SMK\":\"\"},\"Unit Kerja\":\"\"},{\"Jumlah Tenaga Kependidikan dengan Pendidikan Terakhir\":{\"S3\":\"\",\"S2\":\"\",\"S1\":\"\",\"D4\":\"\",\"D3\":\"\",\"D2\":\"\",\"D1\":\"\",\"SMA/SMK\":\"\"}}],\"keterangan\":\"* Hanya yang memiliki pendidikan formal dalam bidang perpustakaan\"},\"4.6.2\":{\"perintah\":\"Jelaskan upaya yang telah dilakukan PS dalam meningkatkan kualifikasi dan kompetensi tenaga kependidikan, dalam hal pemberian kesempatan belajar/pelatihan, pemberian fasilitas termasuk dana, dan jenjang karir.\",\"isian\":\"\"}}}}', 2007, 0, '2017-05-17 08:23:53', NULL),
(38, 6, '311225', '3A', 7, '{\"standar7\":{\"judul\":\"7. PENELITIAN, PELAYANAN/PENGABDIAN KEPADA MASYARAKAT, DAN KERJASAMA\",\"7.1\":{\"judul\":\"7.1 Penelitian Dosen Tetap yang Bidang Keahliannya Sesuai dengan PS\",\"7.1.1\":{\"perintah\":\"Tuliskan jumlah judul penelitian* yang sesuai dengan bidang keilmuan PS, yang dilakukan oleh dosen tetap yang bidang keahliannya sesuai dengan PS selama tiga tahun terakhir dengan mengikuti format tabel berikut:\",\"keterangan\":\"Catatan: (*) sediakan data pendukung pada saat asesmen lapangan\"},\"7.1.2\":{\"perintah\":\"Adakah mahasiswa tugas akhir yang dilibatkan dalam penelitian dosen dalam tiga tahun terakhir?\",\"perintah2\":\"Jika ada, banyaknya mahasiswa PS yang ikut serta dalam penelitian dosen adalah  ... orang, dari ... mahasiswa yang melakukan tugas akhir melalui skripsi.\",\"isian\":\"\"},\"7.1.3\":{\"perintah\":\"Tuliskan judul artikel ilmiah/karya ilmiah/karya seni/buku yang dihasilkan selama tiga tahun terakhir oleh dosen tetap yang bidang keahliannya sesuai dengan PS dengan mengikuti format tabel berikut:\",\"keterangan\":\"Catatan: * = Tuliskan banyaknya dosen pada sel yang sesuai\"},\"7.1.4\":{\"perintah\":\"Sebutkan karya dosen dan atau mahasiswa Program Studi yang telah memperoleh/sedang memproses perlindungan Hak atas Kekayaan Intelektual (HaKI) selama tiga tahun terakhir.\",\"keterangan\":\"*Lampirkan surat paten HaKI atau keterangan sejenis.\"}},\"7.2\":{\"judul\":\"7.2 Kegiatan Pelayanan/Pengabdian kepada Masyarakat (PKM)\",\"7.2.1\":{\"perintah\":\"Tuliskan jumlah kegiatan Pelayanan/Pengabdian kepada Masyarakat (*) yang sesuai dengan bidang keilmuan PS selama tiga tahun terakhir yang dilakukan oleh dosen tetap yang bidang keahliannya sesuai dengan PS dengan mengikuti format tabel berikut:\",\"keterangan\":\"Catatan: (*) Pelayanan/Pengabdian kepada Masyarakat adalah penerapan bidang ilmu untuk menyelesaikan masalah di masyarakat (termasuk masyarakat industri, pemerintah, dsb.)\"},\"7.2.2\":{\"perintah\":\"Adakah mahasiswa yang dilibatkan dalam kegiatan pelayanan/pengabdian kepada masyarakat dalam tiga tahun terakhir?\",\"perintah2\":\"Jika Ya, jelaskan tingkat partisipasi dan bentuk keterlibatan mahasiswa dalam kegiatan pelayanan/pengabdian kepada masyarakat\",\"isian\":\"\"}},\"7.3\":{\"judul\":\"7.3 Kegiatan Kerjasama dengan Instansi Lain\",\"7.3.1\":{\"perintah\":\"Tuliskan instansi dalam negeri yang menjalin kerjasama* yang terkait dengan program studi/jurusan dalam tiga tahun terakhir.\",\"keterangan\":\"Catatan : (*) dokumen pendukung disediakan pada saat asesmen lapangan\"},\"7.3.2\":{\"perintah\":\"Tuliskan instansi luar negeri yang menjalin kerjasama* yang terkait dengan program studi/jurusan dalam tiga tahun terakhir.\",\"keterangan\":\"Catatan : (*) dokumen pendukung disediakan pada saat asesmen lapangan\"}},\"7\":{\"isian\":{\"nomorIsian\":\"\"}}}}\r\n', 2007, 0, '2017-05-17 08:23:53', NULL),
(39, 6, '311225', '3B', 2, '{\"standar2\":{\"judul\":\"2. TATA PAMONG, KEPEMIMPINAN, SISTEM PENGELOLAAN, DAN PENJAMINAN MUTU\",\"2.1\":{\"judul\":\"2.1 Tata Pamong\",\"narasi\":\"Tata pamong adalah suatu sistem yang dapat menjadikan kepemimpinan, sistem pengelolaan dan penjaminan mutu berjalan secara efektif di dalam universitas/institusi yang mengelola program studi.  Hal-hal yang menjadi fokus di dalam tata pamong termasuk bagaimana kebijakan  dan strategi disusun sedemikian rupa sehingga memungkinkan terpilihnya pemimpin dan pengelola yang kredibel dan sistem penyelenggaraan program studi secara kredibel, transparan, akuntabel, bertanggung jawab dan  menerapkan prinsip-prinsip keadilan. Organisasi dan sistem tata pamong yang baik <i>(good governance)</i> mencerminkan kredibilitas, transparansi, akuntabilitas, tanggungjawab dan keadilan Fakultas/Sekolah Tinggi dalam mengelola program studi. \",\"perintah\":\"Uraikan secara ringkas sistem dan pelaksanaan tata pamong di Fakultas/Sekolah Tinggi untuk memilih pemimpin dan membangun sistem tata pamong yang kredibel, akuntabel, transparan, bertanggung jawab dan adil.\",\"isian\":\"\"},\"2.2\":{\"judul\":\" 2.2  Struktur Organisasi, Kordinasi, dan Cara Kerja Fakultas/Sekolah Tinggi\",\"narasi\":\"\",\"perintah\":\"Gambarkan struktur organisasi  Fakultas/Sekolah Tinggi serta tugas/fungsi dari tiap unit yang ada.\",\"isian\":\"\"},\"2.3\":{\"judul\":\"2.3 Kepemimpinan\",\"narasi\":\"Kepemimpinan efektif mengarahkan dan mempengaruhi perilaku semua unsur dalam program studi, mengikuti nilai, norma, etika, dan budaya organisasi yang disepakati bersama, serta mampu  membuat keputusan yang tepat dan cepat.Kepemimpinan mampu memprediksi masa depan, merumuskan dan  mengartikulasi visi yang realistis, kredibel,  serta mengkomunikasikan visi ke depan, yang menekankan pada keharmonisan hubungan manusia dan mampu menstimulasi secara  intelektual dan arif bagi anggota untuk mewujudkan visi organisasi, serta mampu memberikan arahan, tujuan, peran, dan tugas kepada  seluruh unsur dalam perguruan tinggi. Dalam menjalankan fungsi   kepemimpinan dikenal kepemimpinan operasional, kepemimpinan  organisasi, dan kepemimpinan publik.  Kepemimpinan operasional  berkaitan dengan kemampuan menjabarkan visi, misi ke dalam   kegiatan operasional program studi.  Kepemimpinan organisasi   berkaitan dengan pemahaman tata kerja antar unit dalam organisasi  perguruan tinggi.  Kepemimpinan publik berkaitan dengan kemampuan  menjalin kerjasama dan menjadi rujukan bagi publik.\",\"perintah\":\"Jelaskan pola kepemimpinan dalam Fakultas/Sekolah Tinggi.\",\"isian\":\"\"},\"2.4\":{\"judul\":\"2.4 Sistem Pengelolaan\",\"narasi\":\"Sistem pengelolaan fungsional dan operasional program studi mencakup <i>planning, organizing, staffing, leading, controlling,</i> serta operasi internal dan eksternal\",\"perintah\":\"Jelaskan sistem pengelolaan Fakultas/Sekolah Tinggi serta ketersediaan Renstra dan Renop.\",\"isian\":\"\"},\"2.5\":{\"judul\":\"2.5 Sistem Penjaminan Mutu Fakultas/Sekolah Tinggi\",\"perintah\":\"Jelaskan sistem penjaminan mutu dalam Fakultas/Sekolah Tinggi.  Jelaskan pula standar mutu yang digunakan.\",\"isian\":\"\"}}}', 2007, 0, '2017-05-17 08:23:53', NULL),
(40, 6, '311225', '3B', 4, '{\"standar4\":{\"4.1\":{\"judul\":\"Dosen Tetap\",\"narasi\":\"Dosen tetap dalam borang akreditasi BAN-PT adalah dosen yang diangkat dan ditempatkan sebagai tenaga tetap pada PT yang bersangkutan; termasuk dosen penugasan Kopertis, dan dosen yayasan pada PTS dalam bidang yang relevan dengan keahlian bidang studinya. Seorang dosen hanya dapat menjadi dosen tetap pada satu perguruan tinggi, dan mempunyai penugasan kerja minimum 20jam/minggu.\",\"isian\":\"-\",\"4.1.1\":{\"perintah\":\"Tuliskan jumlah dosen tetap yang bidang keahliannya sesuai dengan masing-masing PS di lingkungan Fakultas/Sekolah Tinggi, berdasarkan jabatan fungsional dan pendidikan tertinggi, dengan mengikuti format tabel berikut:\",\"tabel\":\"-\",\"isian\":\"-\",\"keterangan\":\"-\"},\"4.1.2\":{\"perintah\":\"Tuliskan banyaknya penggantian dan perekrutan serta pengembangan dosen tetap yang bidang keahliannya sesuai dengan program studi pada Fakultas/Sekolah Tinggi dalam tiga tahun terakhir dengan mengikuti format tabel berikut:\",\"tabel\":\"-\",\"isian\":\"-\",\"keterangan\":\"-\"},\"4.1.3\":{\"perintah\":\"Uraikan pandangan Fakultas/Sekolah Tinggi tentang data pada butir 4.1.1 dan 4.1.2, yang mencakup aspek: kecukupan, kualifikasi, dan pengembangan karir. Jelaskan kendala yang ada dalam pengembangan tenaga dosen tetap.\",\"tabel\":\"-\",\"isian\":\"\",\"keterangan\":\"-\"}},\"4.2\":{\"judul\":\"Tenaga Kependidikan\",\"perintah\":\"Uraikan pandangan Fakultas/Sekolah Tinggi tentang data pada butir 4.1.1 dan 4.1.2, yang mencakup aspek: kecukupan, kualifikasi, dan pengembangan karir. Jelaskan kendala yang ada dalam pengembangan tenaga dosen tetap.\",\"tabel\":\"-\",\"isian\":\"\",\"keterangan\":\"-\"}}}', 2007, 0, '2017-05-17 08:23:53', NULL),
(41, 6, '311225', '3B', 7, '{\"standar7\":{\"7.1\":{\"judul\":\"Penelitian\",\"narasi\":\"-\",\"isian\":\"-\",\"7.1.1\":{\"perintah\":\"Tuliskan jumlah dan dana penelitian yang dilakukan oleh masing-masing PS di lingkungan Fakultas/Sekolah Tinggi dalam tiga tahun terakhir dengan mengikuti format tabel berikut:\",\"tabel\":\"-\",\"isian\":\"-\",\"keterangan\":\"-\"},\"7.1.2\":{\"perintah\":\"Uraikan pandangan pimpinan Fakultas/Sekolah Tinggi tentang data pada butir 7.1.1, dalam perspektif: kesesuaian dengan Visi dan Misi, kecukupan, kewajaran, upaya pengembangan dan peningkatan mutu. Uraikan pula kendala-kendala yang dihadapi.\",\"tabel\":\"-\",\"isian\":\"\",\"keterangan\":\"-\"}},\"7.2\":{\"judul\":\"Pelayanan/Pengabdian kepada Masyarakat\",\"narasi\":\"Pelayanan/Pengabdian kepada Masyarakat adalah penerapan bidang ilmu untuk menyelesaikan masalah di masyarakat (termasuk masyarakat industri, pemerintah, dsb.)\",\"isian\":\"-\",\"7.2.1\":{\"perintah\":\"Tuliskan jumlah dan dana kegiatan pelayanan/pengabdian kepada masyarakat yang dilakukan oleh masing-masing PS di lingkungan Fakultas dalam tiga tahun terakhir dengan mengikuti format tabel berikut:\",\"tabel\":\"-\",\"isian\":\"-\",\"keterangan\":\"-\"},\"7.2.2\":{\"perintah\":\"Uraikan pandangan Fakultas/Sekolah Tinggi tentang data pada butir 7.2.1 dalam perspektif: kesesuaian dengan Visi dan Misi, kecukupan, kewajaran, upaya pengembangan dan peningkatan mutu. Uraikan pula kendala-kendala yang dihadapi.\",\"tabel\":\"-\",\"isian\":\"\",\"keterangan\":\"-\"}}}}', 2007, 0, '2017-05-17 08:23:53', NULL),
(42, 6, '311225', 'ED', NULL, '', 2007, 0, '2017-05-17 08:23:54', NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `dosen`
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
  `flag_kesesuaian` tinyint(1) DEFAULT NULL,
  `id_status_dosen` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `dosen`
--

INSERT INTO `dosen` (`id_dosen`, `NIDN`, `id_pegawai`, `id_kinerja_dosen`, `id_remunerasi_dosen`, `flag_aktif`, `kode_prodi_pengajaran`, `isDosenTetap`, `bidang_keahlian`, `flag_kesesuaian`, `id_status_dosen`) VALUES
(1, 'A92392348', 1, 0, 0, 1, '311225', 1, 'Sistem Informasi', 1, 4),
(2, 'B238979', 2, 0, 0, 1, '311166', 1, 'Ilmu Komputer', 1, 4),
(3, 'F324A349', 3, 0, 0, 1, '311166', 0, 'NULL', 0, 0),
(4, 'A92392349', 4, 0, 0, 1, '311225', 1, 'Manajemen', 0, 0),
(5, 'B238980', 5, 0, 0, 1, '311225', 0, 'NULL', 0, 0),
(6, 'F324A350', 6, 0, 0, 1, '311225', 1, 'Sastra Inggris', 0, 0),
(7, 'A92392350', 7, 0, 0, 1, '311166', 0, 'NULL', 0, 0),
(8, 'B238981', 8, 0, 0, 1, '311225', 1, 'NULL', 0, 0),
(9, 'F324A351', 9, 0, 0, 1, '311166', 1, 'NULL', 0, 0),
(10, 'A92392351', 10, 0, 0, 1, '311225', 0, 'NULL', 0, 0),
(11, 'A92392349', 11, 0, 0, 1, '311225', 0, 'NULL', 0, 0),
(12, 'B238980', 12, 0, 0, 1, '311225', 1, 'Sistem Informasi', 1, 0),
(13, 'F324A350', 13, 0, 0, 1, '311225', 1, 'Sistem Informasi', 1, 0),
(14, 'A92392350', 14, 0, 0, 1, '311225', 1, 'Sistem Informasi', 1, 0),
(15, 'B238981', 15, 0, 0, 1, '311166', 1, 'Sistem Informasi', 0, 0),
(16, 'F324A351', 16, 0, 0, 1, '311225', 1, 'Ilmu Komputer', 0, 0),
(17, 'A92392351', 17, 0, 0, 1, '311225', 1, 'Sistem Informasi', 1, 0),
(18, 'B238982', 62, 0, 0, 1, '311166', 1, 'Sistem Informasi', 0, 0),
(19, 'F324A352', 63, 0, 0, 1, '311225', 1, 'Ilmu Komputer', 0, 0),
(20, 'A92392352', 64, 0, 0, 1, '311166', 1, 'Sistem Informasi', 0, 0),
(21, 'A92392350', 65, 0, 0, 1, '311225', 1, 'Ilmu Komputer', 0, 0),
(22, 'B238981', 66, 0, 0, 1, '311166', 1, 'Sistem Informasi', 0, 0),
(23, 'F324A351', 67, 0, 0, 1, '311225', 1, 'Ilmu Komputer', 0, 0),
(24, 'A92392351', 68, 0, 0, 1, '311166', 0, 'NULL', 0, 0),
(25, 'B238982', 69, 0, 0, 1, '311225', 0, 'NULL', 0, 0),
(26, 'F324A352', 70, 0, 0, 1, '311166', 0, 'NULL', 0, 0),
(27, 'A92392352', 71, 0, 0, 1, '311225', 0, 'NULL', 0, 0),
(28, 'B238983', 72, 0, 0, 1, '311166', 1, 'Ilmu Komputer', 1, 0),
(29, 'F324A353', 73, 0, 0, 1, '311225', 1, 'Sistem Informasi', 1, 0),
(30, 'A92392353', 74, 0, 0, 1, '311225', 1, 'Ilmu Komputer', 1, 0),
(31, 'A92392351', 75, 0, 0, 1, '311166', 1, 'Sistem Informasi', 0, 0),
(32, 'B238982', 76, 0, 0, 1, '311225', 1, 'Sistem Informasi', 1, 0),
(33, 'F324A352', 77, 0, 0, 1, '311166', 1, 'Sistem Informasi', 0, 0),
(34, 'A92392352', 78, 0, 0, 1, '311166', 1, 'Sistem Informasi', 0, 0),
(35, 'B238983', 79, 0, 0, 1, '311166', 1, 'Ilmu Komputer', 1, 0),
(36, 'F324A353', 80, 0, 0, 1, '311166', 1, 'Sistem Informasi', 0, 0),
(37, 'A92392353', 81, 0, 0, 1, '311166', 1, 'Ilmu Komputer', 0, 0),
(38, 'B238984', 82, 0, 0, 1, '311225', 1, 'Sistem Informasi', 1, 0),
(39, 'F324A354', 83, 0, 0, 1, '311225', 1, 'Ilmu Komputer', 0, 0),
(40, 'A92392354', 84, 0, 0, 1, '311225', 1, 'Sistem Informasi', 1, 0),
(41, 'A92392352', 85, 0, 0, 1, '311225', 1, 'Ilmu Komputer', 0, 0),
(42, 'B238983', 86, 0, 0, 1, '311225', 1, 'Ilmu Komputer', 0, 0),
(43, 'F324A353', 87, 0, 0, 1, '311225', 1, 'Sistem Informasi', 1, 0),
(44, 'A92392353', 88, 0, 0, 1, '311166', 1, 'Ilmu Komputer', 1, 0),
(45, 'B238984', 89, 0, 0, 1, '311225', 1, 'Sistem Informasi', 1, 0),
(46, 'F324A354', 90, 0, 0, 1, '311166', 1, 'Sistem Informasi', 0, 0),
(47, 'A92392354', 91, 0, 0, 1, '311225', 1, 'Ilmu Komputer', 0, 0),
(48, 'B238985', 92, 0, 0, 1, '311166', 1, 'Ilmu Komputer', 1, 0),
(49, 'F324A355', 93, 0, 0, 1, '311166', 1, 'Ilmu Komputer', 1, 0),
(50, 'A92392355', 94, 0, 0, 1, '311166', 1, 'Ilmu Komputer', 1, 0);

-- --------------------------------------------------------

--
-- Struktur dari tabel `dosen_mata_kuliah`
--

CREATE TABLE `dosen_mata_kuliah` (
  `id_dosen` int(11) NOT NULL,
  `kode_mata_kuliah` varchar(30) NOT NULL,
  `rencana_pengajaran` int(11) NOT NULL,
  `realisasi_pengajaran` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `dosen_mata_kuliah`
--

INSERT INTO `dosen_mata_kuliah` (`id_dosen`, `kode_mata_kuliah`, `rencana_pengajaran`, `realisasi_pengajaran`) VALUES
(1, 'IKI10100', 13, 15),
(2, 'IKI10200', 14, 16),
(7, 'IKO21502', 11, 14),
(10, 'IKO12500', 22, 22),
(12, 'IKO21105', 18, 17),
(14, 'IKO22401', 19, 18),
(16, 'IKO31503', 21, 21),
(17, 'IKO32104', 21, 20),
(19, 'IKO32402', 22, 22),
(21, 'IKO32205', 20, 20),
(22, 'IKI40902', 23, 23),
(23, 'IKI40903', 18, 18),
(24, 'IKO12108', 19, 19),
(25, 'IKO12500', 19, 19),
(26, 'IKO21502', 23, 23),
(27, 'IKO21105', 18, 15),
(28, 'IKO22401', 19, 18),
(29, 'IKO22203', 19, 18),
(30, 'IKO31204', 20, 18),
(31, 'IKO31300', 21, 18),
(32, 'IKO31900', 21, 18),
(33, 'IKO31503', 21, 21),
(34, 'IKO32104', 22, 22),
(35, 'IKO32402', 23, 23),
(36, 'IKO32205', 18, 18),
(37, 'IKO31258', 19, 13),
(38, 'IKO31550', 19, 8),
(39, 'IKO31551', 20, 3),
(40, 'IKO32150', 21, 18),
(41, 'IKO32257', 21, 20),
(42, 'IKO32453', 21, 20),
(43, 'IKO32751', 22, 20),
(44, 'IKO41151', 19, 18),
(45, 'IKO41554', 19, 19),
(46, 'IKO41557', 23, 23),
(47, 'IKO42360', 18, 18),
(48, 'IKO42553', 19, 19),
(49, 'IKO42555', 19, 19),
(50, 'IKI40999', 20, 20);

-- --------------------------------------------------------

--
-- Struktur dari tabel `evaluasi_dana_akhir`
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

--
-- Dumping data untuk tabel `evaluasi_dana_akhir`
--

INSERT INTO `evaluasi_dana_akhir` (`id`, `id_proyek`, `id_proposal`, `dana_depdiknas_dalam_negeri`, `dana_pt`, `dana_pribadi`, `dana_institusi_dalam_negeri`, `dana_institusi_luar_negeri`) VALUES
(1, 1, 0, 0, 5000000, 0, 0, 0),
(2, 2, 0, 10000000, 0, 0, 0, 0),
(3, 3, 0, 0, 0, 0, 2000000, 0),
(4, 4, 0, 0, 0, 0, 0, 3500000),
(5, 5, 0, 0, 0, 0, 500000, 0),
(6, 6, 0, 1000000, 0, 0, 0, 0),
(7, 7, 0, 0, 10000000, 0, 0, 0),
(8, 8, 0, 500000, 0, 0, 0, 0),
(9, 9, 0, 4500000, 0, 0, 0, 0),
(10, 10, 0, 0, 5000000, 0, 0, 0),
(11, 11, 0, 10000000, 0, 0, 0, 0),
(12, 12, 0, 0, 0, 0, 2000000, 0),
(13, 13, 0, 0, 0, 0, 0, 3500000),
(14, 14, 0, 0, 0, 0, 500000, 0),
(15, 15, 0, 1000000, 0, 0, 0, 0),
(16, 16, 0, 0, 10000000, 0, 0, 0),
(17, 17, 0, 500000, 0, 10000000, 0, 0),
(18, 18, 0, 4500000, 0, 10000000, 0, 0),
(19, 19, 0, 0, 5000000, 10000000, 0, 0),
(20, 20, 0, 10000000, 0, 10000000, 0, 0),
(21, 21, 0, 0, 0, 0, 2000000, 0),
(22, 22, 0, 0, 0, 7000000, 0, 3500000),
(23, 23, 0, 0, 0, 7000000, 500000, 0),
(24, 24, 0, 1000000, 0, 7000000, 0, 0),
(25, 25, 0, 0, 10000000, 7000000, 0, 0),
(26, 26, 0, 500000, 0, 7000000, 0, 0),
(27, 27, 0, 4500000, 0, 0, 0, 0),
(28, 28, 0, 0, 5000000, 0, 0, 0),
(29, 29, 0, 10000000, 0, 0, 0, 0),
(30, 30, 0, 0, 0, 0, 2000000, 0),
(31, 31, 0, 0, 0, 0, 0, 3500000),
(32, 32, 0, 0, 0, 0, 500000, 0),
(33, 33, 0, 1000000, 0, 0, 0, 0),
(34, 34, 0, 0, 10000000, 0, 0, 0);

-- --------------------------------------------------------

--
-- Struktur dari tabel `evaluasi_dana_pengmas`
--

CREATE TABLE `evaluasi_dana_pengmas` (
  `id` int(11) NOT NULL,
  `id_pengmas` int(11) NOT NULL,
  `dana_depdiknas_dalam_negeri` bigint(20) NOT NULL,
  `dana_pt` bigint(20) NOT NULL,
  `dana_pribadi` bigint(20) NOT NULL,
  `dana_institusi_dalam_negeri` bigint(20) NOT NULL,
  `dana_institusi_luar_negeri` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `evaluasi_dana_pengmas`
--

INSERT INTO `evaluasi_dana_pengmas` (`id`, `id_pengmas`, `dana_depdiknas_dalam_negeri`, `dana_pt`, `dana_pribadi`, `dana_institusi_dalam_negeri`, `dana_institusi_luar_negeri`) VALUES
(1, 1, 0, 5000000, 0, 0, 0),
(2, 2, 10000000, 0, 0, 0, 0),
(3, 3, 0, 0, 0, 2000000, 0),
(4, 4, 0, 0, 0, 0, 3500000),
(5, 5, 0, 0, 0, 500000, 0),
(6, 6, 1000000, 0, 0, 0, 0),
(7, 7, 0, 10000000, 0, 0, 0),
(8, 8, 500000, 0, 0, 0, 0),
(9, 9, 4500000, 0, 0, 0, 0),
(10, 10, 0, 5000000, 0, 0, 0),
(11, 11, 10000000, 0, 0, 0, 0),
(12, 12, 0, 0, 0, 2000000, 0),
(13, 13, 0, 0, 0, 0, 3500000),
(14, 14, 0, 0, 0, 500000, 0),
(15, 15, 1000000, 0, 0, 0, 0),
(16, 16, 0, 10000000, 0, 0, 0),
(17, 17, 500000, 0, 10000000, 0, 0),
(18, 18, 4500000, 0, 10000000, 0, 0),
(19, 19, 0, 5000000, 10000000, 0, 0),
(20, 20, 10000000, 0, 10000000, 0, 0),
(21, 21, 0, 0, 0, 2000000, 0),
(22, 22, 0, 0, 7000000, 0, 3500000),
(23, 23, 0, 0, 7000000, 500000, 0),
(24, 24, 1000000, 0, 7000000, 0, 0),
(25, 25, 0, 10000000, 7000000, 0, 0),
(26, 26, 500000, 0, 7000000, 0, 0),
(27, 27, 4500000, 0, 0, 0, 0),
(28, 28, 0, 5000000, 0, 0, 0),
(29, 29, 10000000, 0, 0, 0, 0),
(30, 30, 0, 0, 0, 2000000, 0),
(31, 31, 0, 0, 0, 0, 3500000),
(32, 32, 0, 0, 0, 500000, 0),
(33, 33, 1000000, 0, 0, 0, 0),
(34, 34, 0, 10000000, 0, 0, 0),
(35, 35, 0, 100000000, 0, 0, 0),
(36, 36, 0, 100000000, 0, 0, 0),
(37, 37, 50000000, 0, 0, 0, 0),
(38, 38, 0, 0, 0, 20000000, 0),
(39, 39, 50000000, 0, 0, 0, 0),
(40, 40, 0, 0, 5000000, 0, 0),
(41, 41, 50000000, 0, 0, 0, 0),
(42, 42, 0, 10000000, 0, 0, 0),
(43, 43, 0, 0, 5000000, 0, 0),
(44, 44, 0, 0, 0, 0, 3500000),
(45, 45, 50000000, 0, 0, 0, 0),
(46, 46, 0, 0, 0, 2000000, 0),
(47, 47, 0, 100000000, 0, 0, 0),
(48, 48, 50000000, 0, 0, 0, 0),
(49, 49, 0, 0, 0, 20000000, 0),
(50, 50, 50000000, 0, 0, 0, 0),
(51, 51, 0, 0, 5000000, 0, 0),
(52, 52, 50000000, 0, 0, 0, 0),
(53, 53, 0, 10000000, 0, 0, 0),
(54, 54, 0, 0, 5000000, 0, 0),
(55, 55, 0, 0, 0, 0, 3500000),
(56, 56, 50000000, 0, 0, 0, 0),
(57, 57, 0, 0, 0, 2000000, 0);

-- --------------------------------------------------------

--
-- Struktur dari tabel `fakultas`
--

CREATE TABLE `fakultas` (
  `kode_fakultas` varchar(50) NOT NULL,
  `nama_fakultas` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `fakultas`
--

INSERT INTO `fakultas` (`kode_fakultas`, `nama_fakultas`) VALUES
('1', 'Fakultas Ilmu Komputer'),
('10', 'Fakultas Hukum'),
('11', 'Fakultas Kedokteran Gigi'),
('12', 'Fakultas Matematika dan Ilmu P'),
('13', 'Fakultas Ilmu Sosial dan Ilmu '),
('14', 'Fakultas Ilmu Administrasi'),
('2', 'Fakultas Kedokteran'),
('3', 'Fakultas Teknik'),
('4', 'Fakultas Ilmu Keperawatan'),
('5', 'Fakultas Kesehatan Masyarakat'),
('6', 'Fakultas Psikologi'),
('7', 'Fakultas Ekonomi'),
('8', 'Fakultas Ilmu Budaya'),
('9', 'Fakultas Farmasi');

-- --------------------------------------------------------

--
-- Struktur dari tabel `histori_akreditasi`
--

CREATE TABLE `histori_akreditasi` (
  `id` int(11) NOT NULL,
  `nilai` decimal(11,2) DEFAULT NULL,
  `peringkat_akreditasi` varchar(20) DEFAULT NULL,
  `keterangan` varchar(30) DEFAULT NULL,
  `tahun_keluar` varchar(50) NOT NULL,
  `masa_berlaku` varchar(20) DEFAULT NULL,
  `kode_prodi` varchar(30) NOT NULL,
  `status` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `histori_akreditasi`
--

INSERT INTO `histori_akreditasi` (`id`, `nilai`, `peringkat_akreditasi`, `keterangan`, `tahun_keluar`, `masa_berlaku`, `kode_prodi`, `status`, `created_at`, `updated_at`) VALUES
(1, '0.00', 'NULL', 'NULL', '2017', 'NULL', '311225', 1, '2017-05-16 02:13:02', '2017-05-16 02:13:02'),
(2, '0.00', 'NULL', 'NULL', '2017', 'NULL', '311166', 1, '2017-05-16 02:13:02', '2017-05-16 02:13:02'),
(3, NULL, NULL, NULL, '2012', NULL, '311166', 1, '2017-05-17 08:23:13', '2017-05-17 08:23:13'),
(4, NULL, NULL, NULL, '2012', NULL, '311225', 1, '2017-05-17 08:23:28', '2017-05-17 08:23:28'),
(5, NULL, NULL, NULL, '2007', NULL, '311166', 5, '2017-05-17 08:23:43', '2017-05-17 08:23:43'),
(6, NULL, NULL, NULL, '2007', NULL, '311225', 1, '2017-05-17 08:23:53', '2017-05-17 08:23:53'),
(7, NULL, NULL, NULL, '2002', NULL, '311225', 1, '2017-05-18 04:44:46', '2017-05-18 04:44:46'),
(8, NULL, NULL, NULL, '2002', NULL, '311225', 1, '2017-05-18 04:45:07', '2017-05-18 04:45:07'),
(9, NULL, NULL, NULL, '2002', NULL, '311225', 1, '2017-05-18 04:46:19', '2017-05-18 04:46:19'),
(10, NULL, NULL, NULL, '1997', NULL, '311225', 1, '2017-05-18 04:46:59', '2017-05-18 04:46:59');

-- --------------------------------------------------------

--
-- Struktur dari tabel `jabatan_struktural`
--

CREATE TABLE `jabatan_struktural` (
  `id` int(11) NOT NULL,
  `nama` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `jabatan_struktural`
--

INSERT INTO `jabatan_struktural` (`id`, `nama`) VALUES
(1, 'Lektor'),
(2, 'Tenaga Pengajar'),
(3, 'Asisten Ahli'),
(4, 'Tenaga Kependidikan');

-- --------------------------------------------------------

--
-- Struktur dari tabel `jenis_luaran`
--

CREATE TABLE `jenis_luaran` (
  `id` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `sks` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `jenis_luaran`
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
-- Struktur dari tabel `jenis_tendik`
--

CREATE TABLE `jenis_tendik` (
  `id_jenis_tendik` int(11) NOT NULL,
  `nama_jenis_tendik` varchar(20) NOT NULL,
  `unit_kerja` varchar(30) NOT NULL,
  `flag_aktif` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `jenis_tendik`
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
-- Struktur dari tabel `kegiatan_dosen`
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
-- Dumping data untuk tabel `kegiatan_dosen`
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
-- Struktur dari tabel `kelas`
--

CREATE TABLE `kelas` (
  `kode_mata_kuliah` varchar(30) NOT NULL,
  `kode_kelas` varchar(30) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `kapasitas` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `kelas`
--

INSERT INTO `kelas` (`kode_mata_kuliah`, `kode_kelas`, `nama`, `kapasitas`) VALUES
('IKI10100', '1', 'MD 1 - A', 60),
('IKI10200', '10', 'DDP - E', 60),
('IKI10100', '2', 'MD 1 - B', 60),
('IKO21502', '23', 'POK - A', 50),
('IKO21502', '24', 'POK - B', 50),
('IKO21502', '25', 'POK - C', 50),
('IKI10100', '3', 'MD 1 - C', 60),
('IKO32205', '35', 'PPL - A', 50),
('IKO32205', '36', 'PPL - A', 50),
('IKO32205', '37', 'PPL - A', 50),
('IKO12500', '38', 'PSD - A', 50),
('IKO12500', '39', 'PSD - B', 50),
('IKI10100', '4', 'MD 1 - D', 60),
('IKO12500', '40', 'PSD - C', 50),
('IKO21105', '44', 'Matdas 1 - A', 50),
('IKO21105', '45', 'Matdas 1 - B', 50),
('IKO21105', '46', 'Matdas 1 - C', 50),
('IKI10100', '5', 'MD 1 - E', 60),
('IKO22401', '50', 'TBA - A', 50),
('IKO22401', '51', 'TBA - A', 50),
('IKI10200', '6', 'DDP - A', 60),
('IKI10200', '7', 'DDP - B', 60),
('IKI10200', '8', 'DDP - C', 60),
('IKI10200', '9', 'DDP - D', 60);

-- --------------------------------------------------------

--
-- Struktur dari tabel `kerja_sama`
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
-- Dumping data untuk tabel `kerja_sama`
--

INSERT INTO `kerja_sama` (`id`, `kode_prodi`, `nama_instansi`, `jenis_kegiatan`, `tgl_mulai`, `tgl_akhir`, `manfaat`, `isDalamNegeri`) VALUES
(1, '311225', 'BAPEDA Kota Sorong', 'Praktek Kerja Lapangan', '2011-01-01', '2014-01-01', 'Memahami tata cara kerja yang benar', 1),
(2, '311166', 'BAPEDA Kabupaten Sorong', 'Praktek Kerja Lapangan', '2011-01-02', '2014-01-02', 'Memahami tata cara kerja yang benar', 1),
(3, '311225', 'Dinas Perdagangan Sorong', 'Pelatihan Kewirausahaan', '2011-01-03', '2014-01-03', 'Mahasiswa dapat mngaplikasikan ilmu dengan kondisi di lapangan', 1),
(4, '311166', 'Badan Keuangan Inspektorat Kabupaten Sorong', 'Model Pertanggungjawaban', '2011-01-04', '2014-01-04', 'mahasiswa dapat memahami pertanggungjawaban keuangan', 1),
(5, '311225', 'Dinas Tenaga Kerja Kabupaten Sorong', 'Pelatihan rekrutmen tenaga kerja', '2011-01-05', '2014-01-05', 'mahasiswa dapat memahami rekrutmen pegawai', 1),
(6, '311225', 'Distrik Sorong TImur', 'Pelatihan usaha mikro', '2011-01-06', '2014-01-06', 'memahami prinsip-prinsip usaha mikro', 1),
(7, '311225', 'Dinas Koperasi Kabupaten Sorong', 'Pelatihan pendirian koperasi', '2011-01-07', '2014-01-07', 'mahasiswa memahami tata cara pendirian koperasi yang benar', 1),
(8, '311166', 'PT. Pelayaran Tanjung Kumawa', 'Praktek Kerja Lapangan', '2012-12-01', '2015-12-01', 'memahami tata cara kerja yang benar', 1),
(9, '311166', 'PT. Buma Perindalindo Jakarta', 'Pelatihan Pemasaran', '2012-12-02', '2015-12-02', 'distribusi barang dan jasa', 1),
(10, '311225', 'PT. Teluk Membramo', 'Pelatihan Kepemimpinan', '2012-12-03', '2015-12-03', 'memahami kepemimpinan', 1),
(11, '311225', 'Bukalapak', 'Praktek Kerja Lapangan', '2012-12-04', '2015-12-04', 'Memahami tata cara kerja yang benar', 1),
(12, '311225', 'Traveloka', 'Praktek Kerja Lapangan', '2012-12-05', '2015-12-05', 'Memahami tata cara kerja yang benar', 1),
(13, '311166', 'Tokopedia', 'Pelatihan Kewirausahaan', '2012-12-06', '2015-12-06', 'Mahasiswa dapat mngaplikasikan ilmu dengan kondisi di lapangan', 1),
(14, '311166', 'GO-JEK', 'Model Pertanggungjawaban', '2012-12-07', '2015-12-07', 'mahasiswa dapat memahami pertanggungjawaban keuangan', 1),
(15, '311225', 'Institut Teknologi Bandung', 'Pelatihan rekrutmen tenaga kerja', '2012-12-08', '2015-12-08', 'mahasiswa dapat memahami rekrutmen pegawai', 1),
(16, '311166', 'Universitas Gunadarma', 'Pelatihan usaha mikro', '2012-12-09', '2015-12-09', 'memahami prinsip-prinsip usaha mikro', 1),
(17, '311225', 'Google', 'Pelatihan pendirian koperasi', '2012-12-10', '2015-12-10', 'mahasiswa memahami tata cara pendirian koperasi yang benar', 0),
(18, '311166', 'Facebook', 'Praktek Kerja Lapangan', '2012-12-11', '2015-12-11', 'memahami tata cara kerja yang benar', 0),
(19, '311225', 'Twitter', 'Pelatihan Pemasaran', '2013-09-20', '2016-09-20', 'distribusi barang dan jasa', 0),
(20, '311225', 'Universitas Pancasila', 'Pelatihan Kepemimpinan', '2013-09-21', '2016-09-21', 'memahami kepemimpinan', 1),
(21, '311225', 'Institut Pertanian Bogor', 'Praktek Kerja Lapangan', '2014-01-03', '2017-01-03', 'Memahami tata cara kerja yang benar', 1),
(22, '311166', 'PBB', 'Praktek Kerja Lapangan', '2014-01-04', '2017-01-04', 'Memahami tata cara kerja yang benar', 0),
(23, '311166', 'Unicef', 'Pelatihan Kewirausahaan', '2014-01-05', '2017-01-05', 'Mahasiswa dapat mngaplikasikan ilmu dengan kondisi di lapangan', 0),
(24, '311225', 'Astra International', 'Model Pertanggungjawaban', '2014-01-06', '2017-01-06', 'mahasiswa dapat memahami pertanggungjawaban keuangan', 0);

-- --------------------------------------------------------

--
-- Struktur dari tabel `komentar`
--

CREATE TABLE `komentar` (
  `id` int(11) NOT NULL,
  `id_borang` int(11) NOT NULL,
  `nomor_standar` varchar(10) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `isi` text NOT NULL,
  `id_reviewer` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `manajemen_dosen`
--

CREATE TABLE `manajemen_dosen` (
  `id` int(11) NOT NULL,
  `id_dosen` int(11) NOT NULL,
  `sks` int(11) NOT NULL,
  `isPTSendiri` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `manajemen_dosen`
--

INSERT INTO `manajemen_dosen` (`id`, `id_dosen`, `sks`, `isPTSendiri`) VALUES
(1, 35, 3, 1),
(2, 39, 3, 1),
(3, 40, 3, 1),
(4, 41, 3, 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `mata_kuliah`
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
-- Dumping data untuk tabel `mata_kuliah`
--

INSERT INTO `mata_kuliah` (`kode_mata_kuliah`, `nama`, `sesi`, `kelompok_mata_kuliah`, `prasyarat`, `kode_kurikulum`, `isProdiSendiri`, `isPT`) VALUES
('FSK10111', 'Fisika Dasar 1', 3, '', 'NULL', 11, 1, 1),
('FSK10112', 'Basis Data Lanjut', 3, '', 'NULL', 11, 0, 1),
('IKI10100', 'Matematika Diskret 1', 3, '', 'NULL', 11, 1, 1),
('IKI10101', 'Teknik Kompilator', 4, '', 'NULL', 11, 0, 1),
('IKI10103', 'Aljabar Linier', 3, '', 'NULL', 11, 1, 1),
('IKI10200', 'Dasar-Dasar Pemrograman', 6, '', 'NULL', 11, 1, 1),
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
('IKO31258', 'Pemrograman Konkuren & Parallel', 4, '', 'NULL', 11, 0, 1),
('IKO31300', 'Sistem Cerdas', 4, '', 'NULL', 11, 1, 1),
('IKO31503', 'Jaringan Komputer', 4, '', 'NULL', 11, 0, 1),
('IKO31550', 'Organisasi Sistem Komputer', 3, '', 'NULL', 11, 0, 1),
('IKO31551', 'Embedded Systems', 3, '', 'NULL', 11, 0, 1),
('IKO31900', 'Penulisan Ilmiah', 2, '', 'NULL', 11, 0, 1),
('IKO32104', 'Analisis Numerik', 3, '', 'NULL', 11, 0, 1),
('IKO32150', 'Teori Informasi', 3, '', 'NULL', 11, 0, 1),
('IKO32205', 'Proyek Perangkat Lunak', 6, '', 'NULL', 11, 0, 1),
('IKO32257', 'Teknik Kompilator', 4, '', 'NULL', 11, 0, 1),
('IKO32402', 'Desain & Analisis Algoritma', 4, '', 'NULL', 11, 0, 1),
('IKO32453', 'Kriptografi & Keamanan Informasi', 4, '', 'NULL', 11, 0, 1),
('IKO32751', 'Layanan & Aplikasi Web', 3, '', 'NULL', 11, 0, 1),
('IKO41151', 'Simulasi & Pemodelan', 3, '', 'NULL', 11, 0, 1),
('IKO41554', 'Sistem Terdistribusi', 3, '', 'NULL', 11, 0, 1),
('IKO41557', 'Ubiquitous & Net-Centric Computing', 3, '', 'NULL', 11, 0, 1),
('IKO42360', 'Robotika', 3, '', 'NULL', 11, 0, 1),
('IKO42553', 'Rancangan Sistem Dijital', 3, '', 'NULL', 11, 0, 1),
('IKO42555', 'Topik Khusus Arsitektur & Infrastruktur', 3, '', 'NULL', 11, 0, 1),
('MAT10113', 'Matematika Dasar 1', 2, '', 'NULL', 11, 1, 1),
('UUI11001', 'Mata kuliah Pengembangan Kepribadian Terintegrasi ', 6, '', 'NULL', 11, 1, 1),
('UUI11002', 'Mata kuliah Pengembangan Kepribadian Terintegrasi ', 6, '', 'NULL', 11, 1, 1),
('UUI11010', 'Mata kuliah Pengembangan Kepridian Bahasa Inggris', 3, '', 'NULL', 11, 1, 1),
('UUI12020', 'Mata kuliah Pengembangan Kepribadian Agama Islam', 2, '', 'NULL', 11, 1, 1),
('UUI12027', 'Semantic Web', 3, '', 'NULL', 11, 0, 1),
('UUI12030', 'Mata kuliah Pengembangan Kepridian Seni dan Olahra', 1, '', 'NULL', 11, 1, 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `organisasi_dosen`
--

CREATE TABLE `organisasi_dosen` (
  `id` int(11) NOT NULL,
  `id_dosen` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `tahun_mulai` varchar(5) NOT NULL,
  `tahun_selesai` varchar(5) DEFAULT NULL,
  `tingkat` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `organisasi_dosen`
--

INSERT INTO `organisasi_dosen` (`id`, `id_dosen`, `nama`, `tahun_mulai`, `tahun_selesai`, `tingkat`) VALUES
(1, 1, 'Ikatan Sarjana Komputer Indonesia', '2012', '2016', 'Lokal'),
(2, 2, 'Komunitas HCI Indonesia', '2013', '2015', 'Lokal'),
(3, 3, 'Komunitas Aljabar Indonesia', '2011', '2011', 'Lokal'),
(4, 4, 'Organisasi Master Komputer Indonesia', '2015', '2017', 'Lokal'),
(5, 12, 'Ikatan Sarjana Komputer Indonesia', '2016', NULL, 'Lokal'),
(6, 13, 'Komunitas HCI Indonesia', '2017', NULL, 'Lokal'),
(7, 14, 'Komunitas Aljabar Indonesia', '2012', '2016', 'Lokal'),
(8, 15, 'Organisasi Master Komputer Indonesia', '2013', '2015', 'Lokal'),
(9, 16, 'Ikatan Sarjana Komputer Indonesia', '2012', '2011', 'Lokal'),
(10, 22, 'Komunitas HCI Indonesia', '2013', '2017', 'Lokal'),
(11, 23, 'Komunitas Aljabar Indonesia', '2012', '2014', 'Lokal'),
(12, 24, 'Organisasi Master Komputer Indonesia', '2013', '2015', 'Lokal'),
(13, 25, 'Ikatan Sarjana Komputer Indonesia', '2011', '2015', 'Lokal'),
(14, 27, 'Komunitas HCI Indonesia', '2012', '2011', 'Lokal'),
(15, 28, 'Komunitas Aljabar Indonesia', '2012', '2017', 'Lokal'),
(16, 29, 'Organisasi Master Komputer Indonesia', '2013', '2014', 'Lokal'),
(17, 30, 'Ikatan Sarjana Komputer Indonesia', '2011', '2015', 'Lokal'),
(18, 31, 'Komunitas HCI Indonesia', '2015', NULL, 'Lokal'),
(19, 32, 'Komunitas Aljabar Indonesia', '2016', NULL, 'Lokal'),
(20, 33, 'Organisasi Master Komputer Indonesia', '2017', NULL, 'Lokal'),
(21, 34, 'Ikatan Sarjana Komputer Indonesia', '2013', '2014', 'Lokal'),
(22, 42, 'Komunitas HCI Indonesia', '2012', '2015', 'Lokal'),
(23, 43, 'Komunitas Aljabar Indonesia', '2013', '2015', 'Lokal'),
(24, 44, 'Organisasi Master Komputer Indonesia', '2011', '2011', 'Lokal'),
(25, 45, 'Ikatan Sarjana Komputer Indonesia', '2015', '2017', 'Lokal'),
(26, 46, 'Komunitas HCI Indonesia', '2016', '2014', 'Lokal'),
(27, 47, 'Komunitas Aljabar Indonesia', '2017', NULL, 'Lokal');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pegawai`
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
  `id_prodi_tim_akreditasi` varchar(30) DEFAULT NULL,
  `is_reviewer_fakultas` tinyint(1) NOT NULL,
  `is_reviewer_prodi` tinyint(1) NOT NULL,
  `id_prodi_reviewer` varchar(30) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  `isAdmin` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `pegawai`
--

INSERT INTO `pegawai` (`id_pegawai`, `username`, `password`, `no_pegawai`, `nama`, `no_handphone`, `jenis_kelamin`, `tempat_lahir`, `jenis_identitas`, `no_identitas`, `tanggal_lahir`, `alamat_ktp`, `alamat_saat_ini`, `id_agama`, `id_status`, `id_pangkat`, `isDosen`, `id_status_pernikahan`, `id_jabatan_struktural`, `npwp`, `id_bank`, `no_rekening`, `nama_rekening`, `thn_masuk`, `angka_kredit`, `id_role_pegawai`, `isPimpinan`, `id_pimpinan`, `isTimAkreditasi`, `id_prodi_tim_akreditasi`, `is_reviewer_fakultas`, `is_reviewer_prodi`, `id_prodi_reviewer`, `created_at`, `updated_at`, `isAdmin`) VALUES
(1, 'aminur.muda', '123', '1406580511', 'Aminur Muda', 'NULL', 0, 'NULL', 'NULL', 'B98394A739', '0000-00-00', 'NULL', 'NULL', 0, 0, 0, 1, 0, 1, 'NULL', 0, 'NULL', 0, '0000-00-00', 0, 0, 1, 1, 0, '1', 0, 0, 'NULL', '2017-05-16 02:01:35', '2017-05-18 04:48:54', 0),
(2, 'ayesha.maharani', '234', '1406557554', 'Ayesha Maharani', 'NULL', 0, 'NULL', 'NULL', 'K8937F38', '1982-02-01', 'NULL', 'NULL', 0, 0, 0, 1, 0, 2, 'NULL', 0, 'NULL', 0, '0000-00-00', 0, 0, 1, 2, 0, 'NULL', 0, 0, 'NULL', '2017-05-16 02:01:36', '2017-05-16 02:41:25', 0),
(3, 'gemma.adhatien', '456', '1406574895', 'Gemma Adhatien', 'NULL', 0, 'NULL', 'NULL', 'H637808348', '1984-03-01', 'NULL', 'NULL', 0, 0, 0, 1, 0, 2, 'NULL', 0, 'NULL', 0, '0000-00-00', 0, 0, 0, 0, 0, 'NULL', 0, 0, 'NULL', '2017-05-16 02:01:36', '2017-05-16 02:41:21', 1),
(4, 'muchamad.lutfi', '567', '1406623152', 'Lutfi Maulana', 'NULL', 0, 'NULL', 'NULL', 'F87648E2873', '1986-04-01', 'NULL', 'NULL', 0, 0, 0, 1, 0, 2, 'NULL', 0, 'NULL', 0, '0000-00-00', 0, 0, 1, 3, 0, 'NULL', 0, 0, 'NULL', '2017-05-16 02:01:36', NULL, 0),
(5, 'ristya.nintyana', '789', '1406574623', 'Ristya Nintyana', 'NULL', 0, 'NULL', 'NULL', 'F398E2897', '1988-05-01', 'NULL', 'NULL', 0, 0, 0, 1, 0, 2, 'NULL', 0, 'NULL', 0, '0000-00-00', 0, 0, 1, 4, 0, 'NULL', 0, 0, 'NULL', '2017-05-16 02:01:36', NULL, 0),
(6, 'muhammad.alif41', '234546', '1406526094', 'Muhammd Alif Fauzan', 'NULL', 0, 'NULL', 'NULL', 'F398E2898', '1990-06-01', 'NULL', 'NULL', 0, 0, 0, 1, 0, 2, 'NULL', 0, 'NULL', 0, '0000-00-00', 0, 0, 0, 0, 1, '311225', 0, 0, 'NULL', '2017-05-16 02:01:36', NULL, 0),
(7, 'benathavia.di', '23345456', '1406477565', 'Benathavia Di Ayeesha', 'NULL', 0, 'NULL', 'NULL', 'F398E2899', '1992-07-01', 'NULL', 'NULL', 0, 0, 0, 1, 0, 2, 'NULL', 0, 'NULL', 0, '0000-00-00', 0, 0, 0, 0, 0, 'NULL', 0, 1, '311225', '2017-05-16 02:01:36', NULL, 0),
(8, 'ayu.fatmawati41', '46456366', '1406429036', 'Ayu Fatmawati', 'NULL', 0, 'NULL', 'NULL', 'F398E2900', '1994-08-01', 'NULL', 'NULL', 0, 0, 0, 1, 0, 2, 'NULL', 0, 'NULL', 0, '0000-00-00', 0, 0, 0, 0, 0, 'NULL', 0, 1, '311166', '2017-05-16 02:01:36', NULL, 0),
(9, 'ahmad.nazhif', '69567276', '1406380507', 'Ahmad Nazhif R', 'NULL', 0, 'NULL', 'NULL', 'F398E2901', '1994-08-02', 'NULL', 'NULL', 0, 0, 0, 1, 0, 2, 'NULL', 0, 'NULL', 0, '0000-00-00', 0, 0, 0, 0, 1, '311166', 0, 0, 'NULL', '2017-05-16 02:01:36', NULL, 0),
(10, 'ridha.aulia', '8479', '1406534739', 'Ridha Aulia', 'NULL', 0, 'NULL', 'NULL', 'F873983', '1990-06-01', 'NULL', 'NULL', 0, 0, 0, 1, 0, 2, 'NULL', 0, 'NULL', 0, '0000-00-00', 0, 0, 0, 0, 0, 'NULL', 0, 0, 'NULL', '2017-05-16 02:01:36', NULL, 0),
(11, 'intania.nuranifah', '324934', '140673834', 'Intania Nuranifah', 'NULL', 0, 'NULL', 'NULL', 'GKJS63472', '1992-07-01', 'NULL', 'NULL', 0, 0, 0, 1, 0, 2, 'NULL', 0, 'NULL', 0, '0000-00-00', 0, 0, 0, 0, 0, 'NULL', 0, 0, 'NULL', '2017-05-16 02:01:36', NULL, 0),
(12, 'mutia.khairunnisa', '3987934', '140675349', 'Mutia Khairunnisa', 'NULL', 0, 'NULL', 'NULL', 'F873983u39', '1994-08-01', 'NULL', 'NULL', 0, 0, 0, 1, 0, 2, 'NULL', 0, 'NULL', 0, '0000-00-00', 0, 0, 0, 0, 0, 'NULL', 0, 0, 'NULL', '2017-05-16 02:01:36', NULL, 0),
(13, 'sumayyah', '347347', '140657832', 'Sumayyah', 'NULL', 0, 'NULL', 'NULL', 'H8093js2309', '1980-01-01', 'NULL', 'NULL', 0, 0, 0, 1, 0, 2, 'NULL', 0, 'NULL', 0, '0000-00-00', 0, 0, 0, 0, 0, 'NULL', 1, 0, 'NULL', '2017-05-16 02:01:36', NULL, 0),
(14, 'ivana.putri', '32984', '140657392', 'Ivana Putri', 'NULL', 0, 'NULL', 'NULL', 'J49834F292', '1982-02-01', 'NULL', 'NULL', 0, 0, 0, 1, 0, 2, 'NULL', 0, 'NULL', 0, '0000-00-00', 0, 0, 0, 0, 0, 'NULL', 0, 1, 'NULL', '2017-05-16 02:01:36', NULL, 0),
(15, 'joshua.casey', '3493', '1405573728', 'Joshua Casey', 'NULL', 0, 'NULL', 'NULL', 'L294D292', '1984-03-01', 'NULL', 'NULL', 0, 0, 0, 1, 0, 2, 'NULL', 0, 'NULL', 0, '0000-00-00', 0, 0, 0, 0, 0, 'NULL', 1, 0, 'NULL', '2017-05-16 02:01:36', NULL, 0),
(16, 'kholid.abdurrahman', '897348', 'H30934A92', 'Kholid Abdurrahman', 'NULL', 0, 'NULL', 'NULL', 'L90843G23', '1986-04-01', 'NULL', 'NULL', 0, 0, 0, 1, 0, 2, 'NULL', 0, 'NULL', 0, '0000-00-00', 0, 0, 0, 0, 0, 'NULL', 0, 1, 'NULL', '2017-05-16 02:01:36', NULL, 0),
(17, 'ratih.ajeng', '98373', '1406749834', 'Ratih Ajeng', 'NULL', 0, 'NULL', 'NULL', 'D40893A09834', '1988-05-01', 'NULL', 'NULL', 0, 0, 0, 1, 0, 3, 'NULL', 0, 'NULL', 0, '0000-00-00', 0, 0, 0, 0, 0, 'NULL', 0, 1, 'NULL', '2017-05-16 02:01:36', NULL, 0),
(18, 'Muthy.Afifah', '603950', '1471032420', 'Muthy Afifah', 'NULL', 0, 'NULL', 'NULL', '893-53-3726', '1990-06-01', 'NULL', 'NULL', 0, 0, 0, 0, 0, 4, 'NULL', 0, 'NULL', 0, '0000-00-00', 0, 0, 0, 0, 0, 'NULL', 0, 0, 'NULL', '2017-05-16 02:01:36', NULL, 0),
(19, 'Tengku.Chavia.Zagita', '929529', '1551633247', 'Tengku Chavia Zagita', 'NULL', 0, 'NULL', 'NULL', '912-01-8394', '1992-07-01', 'NULL', 'NULL', 0, 0, 0, 0, 0, 4, 'NULL', 0, 'NULL', 0, '0000-00-00', 0, 0, 0, 0, 0, 'NULL', 0, 0, 'NULL', '2017-05-16 02:01:36', NULL, 0),
(20, 'Meliza.Litasari', '354789', '1421156997', 'Meliza Litasari', 'NULL', 0, 'NULL', 'NULL', '532-31-2204', '1994-08-01', 'NULL', 'NULL', 0, 0, 0, 0, 0, 4, 'NULL', 0, 'NULL', 0, '0000-00-00', 0, 0, 0, 0, 0, 'NULL', 0, 0, 'NULL', '2017-05-16 02:01:36', NULL, 0),
(21, 'Lidya.Dwiputri.Rinle', '171426', '1481234669', 'Lidya Dwiputri Rinlestari', 'NULL', 0, 'NULL', 'NULL', '748-96-4562', '1980-01-01', 'NULL', 'NULL', 0, 0, 0, 0, 0, 4, 'NULL', 0, 'NULL', 0, '0000-00-00', 0, 0, 0, 0, 0, 'NULL', 0, 0, 'NULL', '2017-05-16 02:01:36', NULL, 0),
(22, 'Fikri.Pratama.Afif', '937317', '1552017567', 'Fikri Pratama Afif', 'NULL', 0, 'NULL', 'NULL', '520-19-5866', '1982-02-01', 'NULL', 'NULL', 0, 0, 0, 0, 0, 4, 'NULL', 0, 'NULL', 0, '0000-00-00', 0, 0, 0, 0, 0, 'NULL', 0, 0, 'NULL', '2017-05-16 02:01:37', NULL, 0),
(23, 'Alif.Fauzan', '985245', '1408603198', 'Alif Fauzan', 'NULL', 0, 'NULL', 'NULL', '440-86-6623', '1984-03-01', 'NULL', 'NULL', 0, 0, 0, 0, 0, 4, 'NULL', 0, 'NULL', 0, '0000-00-00', 0, 0, 0, 0, 0, 'NULL', 0, 0, 'NULL', '2017-05-16 02:01:37', NULL, 0),
(24, 'R..PB.Prameshwara.De', '286186', '1517785050', 'R. PB Prameshwara Dermawan', 'NULL', 0, 'NULL', 'NULL', '879-90-4357', '1986-04-01', 'NULL', 'NULL', 0, 0, 0, 0, 0, 4, 'NULL', 0, 'NULL', 0, '0000-00-00', 0, 0, 0, 0, 0, 'NULL', 0, 0, 'NULL', '2017-05-16 02:01:37', NULL, 0),
(25, 'Aulia.Hafiz.Nur.Rahm', '227996', '1446634620', 'Aulia Hafiz Nur Rahman', 'NULL', 0, 'NULL', 'NULL', '908-85-1763', '1988-05-01', 'NULL', 'NULL', 0, 0, 0, 0, 0, 4, 'NULL', 0, 'NULL', 0, '0000-00-00', 0, 0, 0, 0, 0, 'NULL', 0, 0, 'NULL', '2017-05-16 02:01:37', NULL, 0),
(26, 'Muhammad.Aldi.Yusron', '620105', '1427137261', 'Muhammad Aldi Yusron', 'NULL', 0, 'NULL', 'NULL', '705-56-7649', '1990-06-01', 'NULL', 'NULL', 0, 0, 0, 0, 0, 4, 'NULL', 0, 'NULL', 0, '0000-00-00', 0, 0, 0, 0, 0, 'NULL', 0, 0, 'NULL', '2017-05-16 02:01:37', NULL, 0),
(27, 'Nurhaya.Kushadi.Gita', '198282', '1543298725', 'Nurhaya Kushadi Gitasari', 'NULL', 0, 'NULL', 'NULL', '182-34-7856', '1992-07-01', 'NULL', 'NULL', 0, 0, 0, 0, 0, 4, 'NULL', 0, 'NULL', 0, '0000-00-00', 0, 0, 0, 0, 0, 'NULL', 0, 0, 'NULL', '2017-05-16 02:01:37', NULL, 0),
(28, 'Samuel.Yang', '985016', '1472818326', 'Samuel Yang', 'NULL', 0, 'NULL', 'NULL', '527-73-9568', '1994-08-01', 'NULL', 'NULL', 0, 0, 0, 0, 0, 4, 'NULL', 0, 'NULL', 0, '0000-00-00', 0, 0, 0, 0, 0, 'NULL', 0, 0, 'NULL', '2017-05-16 02:01:37', NULL, 0),
(29, 'Adityo.Anggraito', '513799', '1513781886', 'Adityo Anggraito', 'NULL', 0, 'NULL', 'NULL', '714-48-4754', '1980-01-01', 'NULL', 'NULL', 0, 0, 0, 0, 0, 4, 'NULL', 0, 'NULL', 0, '0000-00-00', 0, 0, 0, 0, 0, 'NULL', 0, 0, 'NULL', '2017-05-16 02:01:37', NULL, 0),
(30, 'Wresni.Ronggowerdhi', '105532', '1427077194', 'Wresni Ronggowerdhi', 'NULL', 0, 'NULL', 'NULL', '915-99-3941', '1982-02-01', 'NULL', 'NULL', 0, 0, 0, 0, 0, 4, 'NULL', 0, 'NULL', 0, '0000-00-00', 0, 0, 0, 0, 0, 'NULL', 0, 0, 'NULL', '2017-05-16 02:01:37', NULL, 0),
(31, 'Muhammad.Fadhillah', '905005', '1413228454', 'Muhammad Fadhillah', 'NULL', 0, 'NULL', 'NULL', '702-38-7749', '1984-03-01', 'NULL', 'NULL', 0, 0, 0, 0, 0, 4, 'NULL', 0, 'NULL', 0, '0000-00-00', 0, 0, 0, 0, 0, 'NULL', 0, 0, 'NULL', '2017-05-16 02:01:37', NULL, 0),
(32, 'Maulana.Wisnu.P', '308025', '1499956958', 'Maulana Wisnu P', 'NULL', 0, 'NULL', 'NULL', '444-51-7740', '1986-04-01', 'NULL', 'NULL', 0, 0, 0, 0, 0, 4, 'NULL', 0, 'NULL', 0, '0000-00-00', 0, 0, 0, 0, 0, 'NULL', 0, 0, 'NULL', '2017-05-16 02:01:37', NULL, 0),
(33, 'Ario.Hardi.Wibowo', '707397', '1469594020', 'Ario Hardi Wibowo', 'NULL', 0, 'NULL', 'NULL', '653-63-8183', '1988-05-01', 'NULL', 'NULL', 0, 0, 0, 0, 0, 4, 'NULL', 0, 'NULL', 0, '0000-00-00', 0, 0, 0, 0, 0, 'NULL', 0, 0, 'NULL', '2017-05-16 02:01:37', NULL, 0),
(34, 'Abdurrahman.Faris.Ag', '842303', '1410375872', 'Abdurrahman Faris Agianda', 'NULL', 0, 'NULL', 'NULL', '702-36-2126', '1990-06-01', 'NULL', 'NULL', 0, 0, 0, 0, 0, 4, 'NULL', 0, 'NULL', 0, '0000-00-00', 0, 0, 0, 0, 0, 'NULL', 0, 0, 'NULL', '2017-05-16 02:01:37', NULL, 0),
(35, 'Hamdan.Fachry.HImawa', '398428', '1465730716', 'Hamdan Fachry HImawan', 'NULL', 0, 'NULL', 'NULL', '948-85-0079', '1992-07-01', 'NULL', 'NULL', 0, 0, 0, 0, 0, 4, 'NULL', 0, 'NULL', 0, '0000-00-00', 0, 0, 0, 0, 0, 'NULL', 0, 0, 'NULL', '2017-05-16 02:01:37', NULL, 0),
(36, 'Insan.Ariandanu.Sufa', '564892', '1544085003', 'Insan Ariandanu Sufajar', 'NULL', 0, 'NULL', 'NULL', '381-91-0567', '1994-08-01', 'NULL', 'NULL', 0, 0, 0, 0, 0, 4, 'NULL', 0, 'NULL', 0, '0000-00-00', 0, 0, 0, 0, 0, 'NULL', 0, 0, 'NULL', '2017-05-16 02:01:37', NULL, 0),
(37, 'Muhammad.Umar.Farisi', '1192611', '1421616089', 'Muhammad Umar Farisi', 'NULL', 0, 'NULL', 'NULL', '369-47-4411', '1980-01-01', 'NULL', 'NULL', 0, 0, 0, 0, 0, 4, 'NULL', 0, 'NULL', 0, '0000-00-00', 0, 0, 0, 0, 0, 'NULL', 0, 0, 'NULL', '2017-05-16 02:01:37', NULL, 0),
(38, 'Farhan.Nurdiatama.P', '351752', '1533435132', 'Farhan Nurdiatama P', 'NULL', 0, 'NULL', 'NULL', '363-90-7461', '1982-02-01', 'NULL', 'NULL', 0, 0, 0, 0, 0, 4, 'NULL', 0, 'NULL', 0, '0000-00-00', 0, 0, 0, 0, 0, 'NULL', 0, 0, 'NULL', '2017-05-16 02:01:37', NULL, 0),
(39, 'Asti.Dwiyana', '189686', '1540867264', 'Asti Dwiyana', 'NULL', 0, 'NULL', 'NULL', '647-49-4408', '1984-03-01', 'NULL', 'NULL', 0, 0, 0, 0, 0, 4, 'NULL', 0, 'NULL', 0, '0000-00-00', 0, 0, 0, 0, 0, 'NULL', 0, 0, 'NULL', '2017-05-16 02:01:37', NULL, 0),
(40, 'Aditya.Beta.Sutopo', '1220175', '1534525848', 'Aditya Beta Sutopo', 'NULL', 0, 'NULL', 'NULL', '638-73-4542', '1986-04-01', 'NULL', 'NULL', 0, 0, 0, 0, 0, 4, 'NULL', 0, 'NULL', 0, '0000-00-00', 0, 0, 0, 0, 0, 'NULL', 0, 0, 'NULL', '2017-05-16 02:01:37', NULL, 0),
(41, 'Dipo.Anugrah', '1077110', '1440884494', 'Dipo Anugrah', 'NULL', 0, 'NULL', 'NULL', '886-21-4062', '1988-05-01', 'NULL', 'NULL', 0, 0, 0, 0, 0, 4, 'NULL', 0, 'NULL', 0, '0000-00-00', 0, 0, 0, 0, 0, 'NULL', 0, 0, 'NULL', '2017-05-16 02:01:37', NULL, 0),
(42, 'Muh.Azri.Sofyan', '921527', '1536993865', 'Muh Azri Sofyan', 'NULL', 0, 'NULL', 'NULL', '475-58-1981', '1990-06-01', 'NULL', 'NULL', 0, 0, 0, 0, 0, 4, 'NULL', 0, 'NULL', 0, '0000-00-00', 0, 0, 0, 0, 0, 'NULL', 0, 0, 'NULL', '2017-05-16 02:01:37', NULL, 0),
(43, 'Norma.Puspitasari', '673656', '1535163172', 'Norma Puspitasari', 'NULL', 0, 'NULL', 'NULL', '410-52-7729', '1992-07-01', 'NULL', 'NULL', 0, 0, 0, 0, 0, 4, 'NULL', 0, 'NULL', 0, '0000-00-00', 0, 0, 0, 0, 0, 'NULL', 0, 0, 'NULL', '2017-05-16 02:01:37', NULL, 0),
(44, 'Wilson.Cristian', '853025', '1418727178', 'Wilson Cristian', 'NULL', 0, 'NULL', 'NULL', '754-46-2165', '1994-08-01', 'NULL', 'NULL', 0, 0, 0, 0, 0, 4, 'NULL', 0, 'NULL', 0, '0000-00-00', 0, 0, 0, 0, 0, 'NULL', 0, 0, 'NULL', '2017-05-16 02:01:37', NULL, 0),
(45, 'Edison.Tantra', '1117753', '1455031888', 'Edison Tantra', 'NULL', 0, 'NULL', 'NULL', '914-57-9028', '1980-01-01', 'NULL', 'NULL', 0, 0, 0, 0, 0, 4, 'NULL', 0, 'NULL', 0, '0000-00-00', 0, 0, 0, 0, 0, 'NULL', 0, 0, 'NULL', '2017-05-16 02:01:37', NULL, 0),
(46, 'Jevi.Fronatalia', '1145101', '1419504429', 'Jevi Fronatalia', 'NULL', 0, 'NULL', 'NULL', '425-41-0185', '1982-02-01', 'NULL', 'NULL', 0, 0, 0, 0, 0, 4, 'NULL', 0, 'NULL', 0, '0000-00-00', 0, 0, 0, 0, 0, 'NULL', 0, 0, 'NULL', '2017-05-16 02:01:37', NULL, 0),
(47, 'Indra.Pambudi', '419877', '1477808699', 'Indra Pambudi', 'NULL', 0, 'NULL', 'NULL', '444-63-8228', '1984-03-01', 'NULL', 'NULL', 0, 0, 0, 0, 0, 4, 'NULL', 0, 'NULL', 0, '0000-00-00', 0, 0, 0, 0, 0, 'NULL', 0, 0, 'NULL', '2017-05-16 02:01:38', NULL, 0),
(48, 'Muhammad.Rizal.Diant', '437134', '1542679298', 'Muhammad Rizal Diantoro', 'NULL', 0, 'NULL', 'NULL', '546-05-0447', '1986-04-01', 'NULL', 'NULL', 0, 0, 0, 0, 0, 4, 'NULL', 0, 'NULL', 0, '0000-00-00', 0, 0, 0, 0, 0, 'NULL', 0, 0, 'NULL', '2017-05-16 02:01:38', NULL, 0),
(49, 'Bryanza.Novirahman', '282323', '1553156236', 'Bryanza Novirahman', 'NULL', 0, 'NULL', 'NULL', '146-86-9973', '1988-05-01', 'NULL', 'NULL', 0, 0, 0, 0, 0, 4, 'NULL', 0, 'NULL', 0, '0000-00-00', 0, 0, 0, 0, 0, 'NULL', 0, 0, 'NULL', '2017-05-16 02:01:38', NULL, 0),
(50, 'Wendy.Damar.Wisma.Tr', '1086692', '1427451947', 'Wendy Damar Wisma Trisna Bayu', 'NULL', 0, 'NULL', 'NULL', '401-15-3546', '1990-06-01', 'NULL', 'NULL', 0, 0, 0, 0, 0, 4, 'NULL', 0, 'NULL', 0, '0000-00-00', 0, 0, 0, 0, 0, 'NULL', 0, 0, 'NULL', '2017-05-16 02:01:38', NULL, 0),
(51, 'Akbar.Septriyan', '305969', '1533731842', 'Akbar Septriyan', 'NULL', 0, 'NULL', 'NULL', '244-75-9167', '1992-07-01', 'NULL', 'NULL', 0, 0, 0, 0, 0, 4, 'NULL', 0, 'NULL', 0, '0000-00-00', 0, 0, 0, 0, 0, 'NULL', 0, 0, 'NULL', '2017-05-16 02:01:38', NULL, 0),
(52, 'Claudia.Teresa.Br.Si', '286992', '1494928590', 'Claudia Teresa Br Sigalingging', 'NULL', 0, 'NULL', 'NULL', '104-14-7731', '1980-01-01', 'NULL', 'NULL', 0, 0, 0, 0, 0, 4, 'NULL', 0, 'NULL', 0, '0000-00-00', 0, 0, 0, 0, 0, 'NULL', 0, 0, 'NULL', '2017-05-16 02:01:38', NULL, 0),
(53, 'Firda.Dhea.Sauzan', '1056051', '1410918402', 'Firda Dhea Sauzan', 'NULL', 0, 'NULL', 'NULL', '523-60-1566', '1982-02-01', 'NULL', 'NULL', 0, 0, 0, 0, 0, 4, 'NULL', 0, 'NULL', 0, '0000-00-00', 0, 0, 0, 0, 0, 'NULL', 0, 0, 'NULL', '2017-05-16 02:01:38', NULL, 0),
(54, 'Hafizh.Rafizal.Adnan', '1079265', '1493002443', 'Hafizh Rafizal Adnan', 'NULL', 0, 'NULL', 'NULL', '977-10-1833', '1984-03-01', 'NULL', 'NULL', 0, 0, 0, 0, 0, 4, 'NULL', 0, 'NULL', 0, '0000-00-00', 0, 0, 0, 0, 0, 'NULL', 0, 0, 'NULL', '2017-05-16 02:01:38', NULL, 0),
(55, 'Alben', '514083', '1493083172', 'Alben', 'NULL', 0, 'NULL', 'NULL', '608-46-7275', '1986-04-01', 'NULL', 'NULL', 0, 0, 0, 0, 0, 4, 'NULL', 0, 'NULL', 0, '0000-00-00', 0, 0, 0, 0, 0, 'NULL', 0, 0, 'NULL', '2017-05-16 02:01:38', NULL, 0),
(56, 'Abdurrahman.Saleh', '318731', '1550862618', 'Abdurrahman Saleh', 'NULL', 0, 'NULL', 'NULL', '926-32-2944', '1988-05-01', 'NULL', 'NULL', 0, 0, 0, 0, 0, 4, 'NULL', 0, 'NULL', 0, '0000-00-00', 0, 0, 0, 0, 0, 'NULL', 0, 0, 'NULL', '2017-05-16 02:01:38', NULL, 0),
(57, 'Satria.Bagus.Wicakso', '309599', '1571380953', 'Satria Bagus Wicaksono', 'NULL', 0, 'NULL', 'NULL', '618-23-2932', '1990-06-01', 'NULL', 'NULL', 0, 0, 0, 0, 0, 4, 'NULL', 0, 'NULL', 0, '0000-00-00', 0, 0, 0, 0, 0, 'NULL', 0, 0, 'NULL', '2017-05-16 02:01:38', NULL, 0),
(58, 'Andre.Ramadhani', '541994', '1453328869', 'Andre Ramadhani', 'NULL', 0, 'NULL', 'NULL', '594-24-0706', '1992-07-01', 'NULL', 'NULL', 0, 0, 0, 0, 0, 4, 'NULL', 0, 'NULL', 0, '0000-00-00', 0, 0, 0, 0, 0, 'NULL', 0, 0, 'NULL', '2017-05-16 02:01:38', NULL, 0),
(59, 'Gentur.Waskito.Triwi', '251375', '1507020496', 'Gentur Waskito Triwinasis', 'NULL', 0, 'NULL', 'NULL', '564-84-3016', '1994-08-01', 'NULL', 'NULL', 0, 0, 0, 0, 0, 4, 'NULL', 0, 'NULL', 0, '0000-00-00', 0, 0, 0, 0, 0, 'NULL', 0, 0, 'NULL', '2017-05-16 02:01:38', NULL, 0),
(60, 'Zamil.Majdy', '1077202', '1429819818', 'Zamil Majdy', 'NULL', 0, 'NULL', 'NULL', '277-88-3603', '1980-01-01', 'NULL', 'NULL', 0, 0, 0, 0, 0, 4, 'NULL', 0, 'NULL', 0, '0000-00-00', 0, 0, 0, 0, 0, 'NULL', 0, 0, 'NULL', '2017-05-16 02:01:38', NULL, 0),
(61, 'Muhammad.Ayaz.Dzulfi', '691834', '1553615921', 'Muhammad Ayaz Dzulfikar', 'NULL', 0, 'NULL', 'NULL', '781-12-4105', '1982-02-01', 'NULL', 'NULL', 0, 0, 0, 0, 0, 4, 'NULL', 0, 'NULL', 0, '0000-00-00', 0, 0, 0, 0, 0, 'NULL', 0, 0, 'NULL', '2017-05-16 02:01:38', NULL, 0),
(62, 'komang.adelia', '1218064', '1434713720', 'Komang Adelia', 'NULL', 0, 'NULL', 'NULL', '882-17-8815', '1984-03-01', 'NULL', 'NULL', 0, 0, 0, 1, 0, 3, 'NULL', 0, 'NULL', 0, '0000-00-00', 0, 0, 0, 0, 0, 'NULL', 0, 0, 'NULL', '2017-05-16 02:01:38', NULL, 0),
(63, 'Alva.Thomson', '128041', '1553536925', 'Alva Thomson', 'NULL', 0, 'NULL', 'NULL', '882-17-8816', '1986-04-01', 'NULL', 'NULL', 0, 0, 0, 1, 0, 3, 'NULL', 0, 'NULL', 0, '0000-00-00', 0, 0, 0, 0, 0, 'NULL', 0, 0, 'NULL', '2017-05-16 02:01:38', NULL, 0),
(64, 'Muhammad.Gilang.Janu', '995449', '1415051428', 'Muhammad Gilang Januar', 'NULL', 0, 'NULL', 'NULL', '882-17-8817', '1988-05-01', 'NULL', 'NULL', 0, 0, 0, 1, 0, 3, 'NULL', 0, 'NULL', 0, '0000-00-00', 0, 0, 0, 0, 0, 'NULL', 0, 0, 'NULL', '2017-05-16 02:01:38', NULL, 0),
(65, 'Ricky.Putra.Nursalim', '643704', '1427094701', 'Ricky Putra Nursalim', 'NULL', 0, 'NULL', 'NULL', '882-17-8818', '1990-06-01', 'NULL', 'NULL', 0, 0, 0, 1, 0, 2, 'NULL', 0, 'NULL', 0, '0000-00-00', 0, 0, 0, 0, 0, 'NULL', 0, 0, 'NULL', '2017-05-16 02:01:38', NULL, 0),
(66, 'Gunawan.Santoso', '229682', '1493915297', 'Gunawan Santoso', 'NULL', 0, 'NULL', 'NULL', '882-17-8819', '1992-07-01', 'NULL', 'NULL', 0, 0, 0, 1, 0, 2, 'NULL', 0, 'NULL', 0, '0000-00-00', 0, 0, 0, 0, 0, 'NULL', 0, 0, 'NULL', '2017-05-16 02:01:38', NULL, 0),
(67, 'Risyad.Ridho.Hasbull', '602652', '1476251704', 'Risyad Ridho Hasbullah', 'NULL', 0, 'NULL', 'NULL', '882-17-8820', '1994-08-01', 'NULL', 'NULL', 0, 0, 0, 1, 0, 2, 'NULL', 0, 'NULL', 0, '0000-00-00', 0, 0, 0, 0, 0, 'NULL', 0, 0, 'NULL', '2017-05-16 02:01:38', NULL, 0),
(68, 'Geraldo', '385764', '1462439748', 'Geraldo', 'NULL', 0, 'NULL', 'NULL', '882-17-8821', '1970-03-01', 'NULL', 'NULL', 0, 0, 0, 1, 0, 2, 'NULL', 0, 'NULL', 0, '0000-00-00', 0, 0, 0, 0, 0, 'NULL', 0, 0, 'NULL', '2017-05-16 02:01:38', NULL, 0),
(69, 'Ricky.Kurniawan', '832953', '1408728209', 'Ricky Kurniawan', 'NULL', 0, 'NULL', 'NULL', '882-17-8822', '1971-03-05', 'NULL', 'NULL', 0, 0, 0, 1, 0, 2, 'NULL', 0, 'NULL', 0, '0000-00-00', 0, 0, 0, 0, 0, 'NULL', 0, 0, 'NULL', '2017-05-16 02:01:38', NULL, 0),
(70, 'Ilyas.Fahreza', '609837', '1477502900', 'Ilyas Fahreza', 'NULL', 0, 'NULL', 'NULL', '882-17-8823', '1972-03-08', 'NULL', 'NULL', 0, 0, 0, 1, 0, 2, 'NULL', 0, 'NULL', 0, '0000-00-00', 0, 0, 0, 0, 0, 'NULL', 0, 0, 'NULL', '2017-05-16 02:01:38', NULL, 0),
(71, 'Meta.Andrini.Utari', '399307', '1487833260', 'Meta Andrini Utari', 'NULL', 0, 'NULL', 'NULL', '882-17-8824', '1973-03-12', 'NULL', 'NULL', 0, 0, 0, 1, 0, 2, 'NULL', 0, 'NULL', 0, '0000-00-00', 0, 0, 0, 0, 0, 'NULL', 0, 0, 'NULL', '2017-05-16 02:01:38', NULL, 0),
(72, 'Bthari.Smartnastiti', '253788', '1438266132', 'Bthari Smartnastiti', 'NULL', 0, 'NULL', 'NULL', '882-17-8825', '1974-03-16', 'NULL', 'NULL', 0, 0, 0, 1, 0, 2, 'NULL', 0, 'NULL', 0, '0000-00-00', 0, 0, 0, 0, 0, 'NULL', 0, 0, 'NULL', '2017-05-16 02:01:38', NULL, 0),
(73, 'Ismail.Shalih.Abdul.', '422660', '1553814612', 'Ismail Shalih Abdul K', 'NULL', 0, 'NULL', 'NULL', '882-17-8826', '1975-03-20', 'NULL', 'NULL', 0, 0, 0, 1, 0, 2, 'NULL', 0, 'NULL', 0, '0000-00-00', 0, 0, 0, 0, 0, 'NULL', 0, 0, 'NULL', '2017-05-16 02:01:38', NULL, 0),
(74, 'Kenny.Reida.Dharmawa', '314435', '1437126816', 'Kenny Reida Dharmawan', 'NULL', 0, 'NULL', 'NULL', '882-17-8827', '1976-03-23', 'NULL', 'NULL', 0, 0, 0, 1, 0, 2, 'NULL', 0, 'NULL', 0, '0000-00-00', 0, 0, 0, 0, 0, 'NULL', 0, 0, 'NULL', '2017-05-16 02:01:39', NULL, 0),
(75, 'Muhammad.Risyad.Ilma', '219320', '1410601080', 'Muhammad Risyad Ilmawan', 'NULL', 0, 'NULL', 'NULL', '882-17-8828', '1977-03-27', 'NULL', 'NULL', 0, 0, 0, 1, 0, 2, 'NULL', 0, 'NULL', 0, '0000-00-00', 0, 0, 0, 0, 0, 'NULL', 0, 0, 'NULL', '2017-05-16 02:01:39', NULL, 0),
(76, 'Tinna.Fauziah.Azhar', '194726', '1516241746', 'Tinna Fauziah Azhar', 'NULL', 0, 'NULL', 'NULL', '882-17-8829', '1978-03-31', 'NULL', 'NULL', 0, 0, 0, 1, 0, 2, 'NULL', 0, 'NULL', 0, '0000-00-00', 0, 0, 0, 0, 0, 'NULL', 0, 0, 'NULL', '2017-05-16 02:01:39', NULL, 0),
(77, 'Tjokorde.Gde.Agung.O', '1118409', '1494837834', 'Tjokorde Gde Agung Octavio P', 'NULL', 0, 'NULL', 'NULL', '882-17-8830', '1979-04-04', 'NULL', 'NULL', 0, 0, 0, 1, 0, 2, 'NULL', 0, 'NULL', 0, '0000-00-00', 0, 0, 0, 0, 0, 'NULL', 0, 0, 'NULL', '2017-05-16 02:01:39', NULL, 0),
(78, 'Fatah.Fadhlurrohman', '421904', '1485630368', 'Fatah Fadhlurrohman', 'NULL', 0, 'NULL', 'NULL', '882-17-8832', '1981-04-11', 'NULL', 'NULL', 0, 0, 0, 1, 0, 2, 'NULL', 0, 'NULL', 0, '0000-00-00', 0, 0, 0, 0, 0, 'NULL', 0, 0, 'NULL', '2017-05-16 02:01:39', NULL, 0),
(79, 'Ahmad.Elang', '335289', '1452093177', 'Ahmad Elang', 'NULL', 0, 'NULL', 'NULL', '882-17-8833', '1982-04-15', 'NULL', 'NULL', 0, 0, 0, 1, 0, 2, 'NULL', 0, 'NULL', 0, '0000-00-00', 0, 0, 0, 0, 0, 'NULL', 0, 0, 'NULL', '2017-05-16 02:01:39', NULL, 0),
(80, 'Muhammad.Ibrohim', '1048941', '1473402431', 'Muhammad Ibrohim', 'NULL', 0, 'NULL', 'NULL', '882-17-8834', '1983-04-19', 'NULL', 'NULL', 0, 0, 0, 1, 0, 2, 'NULL', 0, 'NULL', 0, '0000-00-00', 0, 0, 0, 0, 0, 'NULL', 0, 0, 'NULL', '2017-05-16 02:01:39', NULL, 0),
(81, 'Safitri.Difa.Kaluza.', '916318', '1552086855', 'Safitri Difa Kaluza ', 'NULL', 0, 'NULL', 'NULL', '882-17-8835', '1984-04-22', 'NULL', 'NULL', 0, 0, 0, 1, 0, 2, 'NULL', 0, 'NULL', 0, '0000-00-00', 0, 0, 0, 0, 0, 'NULL', 0, 0, 'NULL', '2017-05-16 02:01:39', NULL, 0),
(82, 'Farah.Agia.Ramadhina', '898592', '1515001752', 'Farah Agia Ramadhina', 'NULL', 0, 'NULL', 'NULL', '882-17-8836', '1985-04-26', 'NULL', 'NULL', 0, 0, 0, 1, 0, 2, 'NULL', 0, 'NULL', 0, '0000-00-00', 0, 0, 0, 0, 0, 'NULL', 0, 0, 'NULL', '2017-05-16 02:01:39', NULL, 0),
(83, 'Arfi.Renaldi', '226668', '1542666923', 'Arfi Renaldi', 'NULL', 0, 'NULL', 'NULL', '882-17-8837', '1986-04-30', 'NULL', 'NULL', 0, 0, 0, 1, 0, 2, 'NULL', 0, 'NULL', 0, '0000-00-00', 0, 0, 0, 0, 0, 'NULL', 0, 0, 'NULL', '2017-05-16 02:01:39', NULL, 0),
(84, 'Faqrul.Anshurulloh', '124754', '1485453481', 'Faqrul Anshurulloh', 'NULL', 0, 'NULL', 'NULL', '882-17-8838', '1987-05-04', 'NULL', 'NULL', 0, 0, 0, 1, 0, 2, 'NULL', 0, 'NULL', 0, '0000-00-00', 0, 0, 0, 0, 0, 'NULL', 0, 0, 'NULL', '2017-05-16 02:01:39', NULL, 0),
(85, 'Mutia.Khairunnisa', '602296', '1433602438', 'Mutia Khairunnisa', 'NULL', 0, 'NULL', 'NULL', '882-17-8839', '1988-05-07', 'NULL', 'NULL', 0, 0, 0, 1, 0, 2, 'NULL', 0, 'NULL', 0, '0000-00-00', 0, 0, 0, 0, 0, 'NULL', 0, 0, 'NULL', '2017-05-16 02:01:39', NULL, 0),
(86, 'Farizki.Yazid', '243821', '1570807174', 'Farizki Yazid', 'NULL', 0, 'NULL', 'NULL', '882-17-8840', '1989-05-11', 'NULL', 'NULL', 0, 0, 0, 1, 0, 2, 'NULL', 0, 'NULL', 0, '0000-00-00', 0, 0, 0, 0, 0, 'NULL', 0, 0, 'NULL', '2017-05-16 02:01:39', NULL, 0),
(87, 'Muhammad.Alvin.Abyan', '757680', '1451696557', 'Muhammad Alvin Abyan', 'NULL', 0, 'NULL', 'NULL', '882-17-8841', '1990-05-15', 'NULL', 'NULL', 0, 0, 0, 1, 0, 2, 'NULL', 0, 'NULL', 0, '0000-00-00', 0, 0, 0, 0, 0, 'NULL', 0, 0, 'NULL', '2017-05-16 02:01:39', NULL, 0),
(88, 'Ahmad.Faqih', '1116980', '1417495290', 'Ahmad Faqih', 'NULL', 0, 'NULL', 'NULL', '882-17-8842', '1970-03-01', 'NULL', 'NULL', 0, 0, 0, 1, 0, 2, 'NULL', 0, 'NULL', 0, '0000-00-00', 0, 0, 0, 0, 0, 'NULL', 0, 0, 'NULL', '2017-05-16 02:01:39', NULL, 0),
(89, 'Alberto.Daulat', '953777', '1418793943', 'Alberto Daulat', 'NULL', 0, 'NULL', 'NULL', '882-17-8843', '1971-03-05', 'NULL', 'NULL', 0, 0, 0, 1, 0, 2, 'NULL', 0, 'NULL', 0, '0000-00-00', 0, 0, 0, 0, 0, 'NULL', 0, 0, 'NULL', '2017-05-16 02:01:39', NULL, 0),
(90, 'Alvin.Wardhana.Utama', '862690', '1560432675', 'Alvin Wardhana Utama', 'NULL', 0, 'NULL', 'NULL', '882-17-8844', '1972-03-08', 'NULL', 'NULL', 0, 0, 0, 1, 0, 2, 'NULL', 0, 'NULL', 0, '0000-00-00', 0, 0, 0, 0, 0, 'NULL', 0, 0, 'NULL', '2017-05-16 02:01:39', NULL, 0),
(91, 'Andi.Yeskafauzan', '605433', '1449488628', 'Andi Yeskafauzan', 'NULL', 0, 'NULL', 'NULL', '882-17-8845', '1973-03-12', 'NULL', 'NULL', 0, 0, 0, 1, 0, 2, 'NULL', 0, 'NULL', 0, '0000-00-00', 0, 0, 0, 0, 0, 'NULL', 0, 0, 'NULL', '2017-05-16 02:01:39', NULL, 0),
(92, 'Bagaskoro.Meyca.Dwiy', '1001190', '1459811435', 'Bagaskoro Meyca Dwiyananda Putra', 'NULL', 0, 'NULL', 'NULL', '882-17-8846', '1974-03-16', 'NULL', 'NULL', 0, 0, 0, 1, 0, 2, 'NULL', 0, 'NULL', 0, '0000-00-00', 0, 0, 0, 0, 0, 'NULL', 0, 0, 'NULL', '2017-05-16 02:01:39', NULL, 0),
(93, 'Luthfi.Aulia.Sulaima', '646758', '1495945637', 'Luthfi Aulia Sulaiman', 'NULL', 0, 'NULL', 'NULL', '882-17-8847', '1975-03-20', 'NULL', 'NULL', 0, 0, 0, 1, 0, 2, 'NULL', 0, 'NULL', 0, '0000-00-00', 0, 0, 0, 0, 0, 'NULL', 0, 0, 'NULL', '2017-05-16 02:01:39', NULL, 0),
(94, 'Muhammad.Izzan.Nurud', '741585', '1504935714', 'Muhammad Izzan Nuruddin', 'NULL', 0, 'NULL', 'NULL', '882-17-8848', '1976-03-23', 'NULL', 'NULL', 0, 0, 0, 1, 0, 2, 'NULL', 0, 'NULL', 0, '0000-00-00', 0, 0, 0, 0, 0, 'NULL', 0, 0, 'NULL', '2017-05-16 02:01:39', NULL, 0);

-- --------------------------------------------------------

--
-- Struktur dari tabel `pengmas_dosen`
--

CREATE TABLE `pengmas_dosen` (
  `id_pengmas` int(11) NOT NULL,
  `id_dosen` int(11) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `tahun` varchar(5) NOT NULL,
  `sks` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `pengmas_dosen`
--

INSERT INTO `pengmas_dosen` (`id_pengmas`, `id_dosen`, `nama`, `tahun`, `sks`) VALUES
(1, 1, 'Gerakan Mengajar', '2014', 4),
(2, 2, 'Kerja Bakti Sungai Ciliwung', '2015', 4),
(3, 3, 'Hari Kartini', '2015', 5),
(4, 4, 'Bakti Sosial se-Jabodetabek', '2016', 6),
(5, 5, 'Global Citizen AIESEC', '2016', 4),
(6, 6, 'Volunteer Acara Menanam 1000 p', '2017', 4),
(7, 7, 'Volunteer International Comput', '2017', 4),
(8, 8, 'Volunteer hari pendidikan nasi', '2014', 4),
(9, 9, 'Volunteer hari pendidikan nasi', '2015', 4),
(10, 10, 'Gotong Royong pembersihan Kali', '2017', 3),
(11, 11, 'Bakti Sosial Universitas Indon', '2014', 3),
(12, 12, 'Gerakan Mengajar', '2015', 2),
(13, 13, 'Kerja Bakti Sungai Ciliwung', '2015', 2),
(14, 14, 'Bakti Sosial Universitas Indon', '2016', 2),
(15, 15, 'Bakti Sosial Universitas Indon', '2016', 4),
(16, 16, 'Gerakan Mengajar', '2017', 4),
(17, 17, 'Kerja Bakti Sungai Ciliwung', '2017', 4),
(18, 18, 'Hari Kartini', '2014', 5),
(19, 19, 'Bakti Sosial se-Jabodetabek', '2015', 6),
(20, 20, 'Volunteer Posko Banjir', '2017', 6),
(21, 21, 'Volunteer Acara Menanam 1000 p', '2017', 6),
(22, 22, 'Volunteer International Comput', '2016', 6),
(23, 23, 'Volunteer hari pendidikan nasi', '2017', 6),
(24, 24, 'Bakti Sosial Universitas Indon', '2014', 1),
(25, 25, 'Volunteer Posko Banjir', '2015', 1),
(26, 26, 'Kerja Bakti Sungai Ciliwung', '2015', 1),
(27, 27, 'Hari Kartini', '2016', 1),
(28, 28, 'Bakti Sosial Universitas Indon', '2016', 2),
(29, 29, 'Gerakan Mengajar', '2017', 2),
(30, 30, 'Kerja Bakti Sungai Ciliwung', '2017', 2),
(31, 31, 'Bakti Sosial Universitas Indon', '2014', 2),
(32, 32, 'Volunteer Posko Banjir', '2012', 3),
(33, 33, 'Kerja Bakti Sungai Ciliwung', '2011', 4),
(34, 34, 'Hari Kartini', '2010', 5),
(35, 35, 'Bakti Sosial se-Jabodetabek', '2017', 6),
(36, 36, 'Global Citizen AIESEC', '2017', 3),
(37, 37, 'Volunteer Acara Menanam 1000 p', '2017', 3),
(38, 38, 'Volunteer International Comput', '2014', 2),
(39, 39, 'Volunteer hari pendidikan nasi', '2015', 3),
(40, 40, 'Gotong Royong pembersihan Kali', '2015', 4),
(41, 41, 'Bakti Sosial Universitas Indon', '2016', 1),
(42, 42, 'Gerakan Mengajar', '2016', 4),
(43, 43, 'Kerja Bakti Sungai Ciliwung', '2017', 2),
(44, 44, 'Hari Kartini', '2017', 4),
(45, 45, 'Bakti Sosial se-Jabodetabek', '2014', 2),
(46, 46, 'Global Citizen AIESEC', '2015', 4),
(47, 47, 'Volunteer Acara Menanam 1000 p', '2015', 2),
(48, 4, 'Gerakan Membantu Rakyat', '2012', 4),
(49, 5, 'Volunteer hari pendidikan nasi', '2013', 1),
(50, 6, 'Gotong Royong pembersihan Kali', '2014', 2),
(51, 7, 'Bakti Sosial Universitas Indon', '2014', 3),
(52, 8, 'Gerakan Menanam 1000 Pohon', '2012', 4),
(53, 9, 'Kerja Bakti Sungai Ciliwung', '2011', 3),
(54, 10, 'Kerja Bakti Sungai Ciliwung', '2010', 4),
(55, 11, 'Volunteer Posko Banjir', '2015', 3),
(56, 12, 'Bakti Sosial se-Jabodetabek', '2016', 4),
(57, 13, 'Global Citizen AIESEC', '2017', 2);

-- --------------------------------------------------------

--
-- Struktur dari tabel `pimpinan`
--

CREATE TABLE `pimpinan` (
  `id_pimpinan` int(11) NOT NULL,
  `isBPMA` int(11) NOT NULL,
  `isPimpinanFakultas` int(11) DEFAULT NULL,
  `id_fakultas` varchar(50) DEFAULT NULL,
  `isPimpinanUniv` tinyint(1) NOT NULL,
  `isUPMAF` tinyint(4) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `pimpinan`
--

INSERT INTO `pimpinan` (`id_pimpinan`, `isBPMA`, `isPimpinanFakultas`, `id_fakultas`, `isPimpinanUniv`, `isUPMAF`, `created_at`, `updated_at`) VALUES
(1, 0, 0, NULL, 1, 0, '2017-05-16 01:55:15', NULL),
(2, 0, 1, '1', 0, 0, '2017-05-16 01:55:15', NULL),
(3, 1, 0, NULL, 0, 0, '2017-05-16 01:58:35', NULL),
(4, 0, 0, '1', 0, 1, '2017-05-16 01:58:35', NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `prestasi_dosen`
--

CREATE TABLE `prestasi_dosen` (
  `id` int(11) NOT NULL,
  `id_dosen` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `waktu` int(11) NOT NULL,
  `tingkat` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `prestasi_dosen`
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
-- Struktur dari tabel `program_studi`
--

CREATE TABLE `program_studi` (
  `kode_prodi` varchar(30) NOT NULL,
  `nama_prodi` varchar(100) NOT NULL,
  `kode_fakultas` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `program_studi`
--

INSERT INTO `program_studi` (`kode_prodi`, `nama_prodi`, `kode_fakultas`) VALUES
('311011', 'PENDIDIKAN DOKTER', '2'),
('311025', 'PENDIDIKAN DOKTER GIGI', '11'),
('311033', 'MATEMATIKA', '12'),
('311041', 'FISIKA', '12'),
('311055', 'KIMIA', '12'),
('311063', 'BIOLOGI', '12'),
('311071', 'FARMASI', '9'),
('311085', 'GEOGRAFI', '12'),
('311093', 'TEKNIK SIPIL', '3'),
('311106', 'TEKNIK MESIN', '3'),
('311114', 'TEKNIK ELEKTRO', '3'),
('311122', 'TEKNIK METALURGI & MATERIAL', '3'),
('311136', 'ARSITEKTUR', '3'),
('311144', 'TEKNIK KIMIA', '3'),
('311152', 'ILMU KEPERAWATAN', '4'),
('311166', 'ILMU KOMPUTER', '1'),
('311174', 'ILMU KESEHATAN MASYARAKAT', '5'),
('311182', 'TEKNIK INDUSTRI', '3'),
('311196', 'TEKNIK PERKAPALAN', '3'),
('311203', 'TEKNIK LINGKUNGAN', '3'),
('311211', 'TEKNIK KOMPUTER', '3'),
('311225', 'SISTEM INFORMASI', '1'),
('311233', 'ARSITEKTUR INTERIOR', '3'),
('311241', 'TEKNOLOGI BIOPROSES', '3'),
('311255', 'GIZI', '5'),
('311263', 'KESEHATAN LINGKUNGAN', '5'),
('311271', 'KESELAMATAN DAN KESEHATAN KERJA', '5'),
('311285', 'GEOFISIKA', '12'),
('311293', 'GEOLOGI', '12'),
('311306', 'STATISTIKA', '12'),
('312013', 'ILMU HUKUM', '10'),
('312021', 'ARKEOLOGI INDONESIA', '8'),
('312035', 'ILMU SEJARAH', '8'),
('312043', 'ILMU PSIKOLOGI', '6'),
('312051', 'ILMU KOMUNIKASI', '13'),
('312065', 'ILMU POLITIK', '13'),
('312073', 'ILMU ADMINISTRASI NEGARA', '14'),
('312081', 'KRIMINOLOGI', '13'),
('312095', 'SOSIOLOGI', '13'),
('312102', 'ILMU KESEJAHTERAAN SOSIAL', '13'),
('312116', 'ANTROPOLOGI SOSIAL', '8'),
('312124', 'ILMU EKONOMI', '7'),
('312132', 'ILMU ADMINISTRASI NIAGA', '14'),
('312146', 'ILMU ADMINISTRASI FISKAL', '14'),
('312154', 'MANAJEMEN', '7'),
('312162', 'AKUNTANSI', '7'),
('312176', 'ILMU HUBUNGAN INTERNASIONAL', '13'),
('312184', 'ILMU PERPUSTAKAAN', '8'),
('312192', 'ILMU FILSAFAT', '8'),
('312205', 'SASTRA INDONESIA', '8'),
('312213', 'SASTRA DAERAH UNTUK SASTRA JAWA', '8'),
('312221', 'SASTRA JEPANG', '8'),
('312235', 'SASTRA CINA', '8'),
('312243', 'SASTRA ARAB', '8'),
('312251', 'SASTRA PERANCIS', '8'),
('312265', 'SASTRA INGGRIS', '8'),
('312273', 'SASTRA JERMAN', '8'),
('312281', 'SASTRA BELANDA', '8'),
('312295', 'SASTRA RUSIA', '8'),
('312302', 'BAHASA DAN KEBUDAYAAN KOREA', '8'),
('312316', 'ILMU EKONOMI ISLAM', '7'),
('312324', 'BISNIS ISLAM', '7');

-- --------------------------------------------------------

--
-- Struktur dari tabel `program_tugas_dosen`
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
-- Dumping data untuk tabel `program_tugas_dosen`
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
-- Struktur dari tabel `proyek`
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
  `sks_penelitian` int(11) NOT NULL,
  `tingkat` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `proyek`
--

INSERT INTO `proyek` (`id`, `status`, `id_pengaju`, `id_jenis_proyek`, `id_dosen`, `lokasi`, `tanggal_mulai`, `tanggal_selesai`, `dana_internal`, `dana_eksternal`, `mitra`, `rumpun_ilmu`, `nama`, `id_jenis_luaran`, `sks_penelitian`, `tingkat`) VALUES
(1, 'NULL', 0, 0, 14, 'Jurnal Baca (Pusat Kajian Lembaga Penelitian Universitas Pepabri Makasar)', 2011, 2014, 0, 0, 'NULL', 'NULL', 'Kemampuan Kreativitas Sumber Daya Manusia Terhadap Mot', 1, 3, 'Lokal'),
(2, 'NULL', 0, 0, 15, 'Perpustakaan Pusat', 2011, 2014, 0, 0, 'NULL', 'NULL', 'Sistem Persamaan Linear dan Metode penyelesaiannya', 1, 3, 'Nasional'),
(3, 'NULL', 0, 0, 16, 'Digital Library', 2011, 2014, 0, 0, 'NULL', 'NULL', 'Pengaruh IT dengan kemajuan ekonomi bangsa', 1, 3, 'Internasional'),
(4, 'NULL', 0, 0, 17, 'Digital Library', 2011, 2014, 0, 0, 'NULL', 'NULL', 'E-commerce masa kini', 1, 3, 'Internasional'),
(5, 'NULL', 0, 0, 18, 'Perpustakaan Pusat', 2011, 2014, 0, 0, 'NULL', 'NULL', 'Perkembangan e-health management', 1, 3, 'Nasional'),
(6, 'NULL', 0, 0, 19, 'Jurnal Baca (Pusat Kajian Lembaga Penelitian Universitas Pepabri Makasar)', 2011, 2014, 0, 0, 'NULL', 'NULL', 'Implementasi knowledge Management terhadap kantor peme', 1, 3, 'Lokal'),
(7, 'NULL', 0, 0, 20, 'Jurnal Baca (Pusat Kajian Lembaga Penelitian Universitas Pepabri Makasar)', 2011, 2014, 0, 0, 'NULL', 'NULL', 'Hubungan smart city dengan Indonesia', 1, 3, 'Lokal'),
(8, 'NULL', 0, 0, 21, 'Perpustakaan Pusat', 2012, 2015, 0, 0, 'NULL', 'NULL', 'Dampak persebaran penduduk di Kalimantan terhadap kema', 1, 3, 'Nasional'),
(9, 'NULL', 0, 0, 22, 'Digital Library', 2012, 2015, 0, 0, 'NULL', 'NULL', 'Implementasi knowledge Management terhadap sistem peru', 1, 3, 'Internasional'),
(10, 'NULL', 0, 0, 23, 'Digital Library', 2012, 2015, 0, 0, 'NULL', 'NULL', 'Teknik pembuatan biogas', 1, 3, 'Internasional'),
(11, 'NULL', 0, 0, 24, 'Perpustakaan Pusat', 2012, 2015, 0, 0, 'NULL', 'NULL', 'Kemampuan Kreativitas Sumber Daya Manusia Terhadap IT ', 1, 3, 'Nasional'),
(12, 'NULL', 0, 0, 25, 'Jurnal Baca (Pusat Kajian Lembaga Penelitian Universitas Pepabri Makasar)', 2012, 2015, 0, 0, 'NULL', 'NULL', 'Kemajuan sistem Koperasi Indonesia', 1, 3, 'Lokal'),
(13, 'NULL', 0, 0, 26, 'Jurnal Baca (Pusat Kajian Lembaga Penelitian Universitas Pepabri Makasar)', 2012, 2015, 0, 0, 'NULL', 'NULL', 'Hubungan antara keamanan e-payment dengan loyalitas ko', 1, 3, 'Lokal'),
(14, 'NULL', 0, 0, 27, 'Perpustakaan Pusat', 2012, 2015, 0, 0, 'NULL', 'NULL', 'Aplikasi Pemesanan Rental Mobil Hafa Yogyakarta Dengan', 1, 3, 'Nasional'),
(15, 'NULL', 0, 0, 28, 'Digital Library', 2012, 2015, 0, 0, 'NULL', 'NULL', 'Analisis dan Perancangan Sistem Informasi Pemasaran da', 5, 3, 'Internasional'),
(16, 'NULL', 0, 0, 29, 'Digital Library', 2012, 2015, 0, 0, 'NULL', 'NULL', 'Perancangan Perangkat Lunak Tender untuk Jasa Konsulta', 5, 3, 'Internasional'),
(17, 'NULL', 0, 0, 30, 'Perpustakaan Pusat', 2012, 2015, 0, 0, 'NULL', 'NULL', 'Deteksi Muka Depan Manusia dari Sebuah Citra Berwarna ', 5, 3, 'Nasional'),
(18, 'NULL', 0, 0, 31, 'Jurnal Baca (Pusat Kajian Lembaga Penelitian Universitas Pepabri Makasar)', 2012, 2015, 0, 0, 'NULL', 'NULL', 'Perangkat Lunak Sistem Informasi Pegawai PT. Stannia B', 5, 3, 'Lokal'),
(19, 'NULL', 0, 0, 32, 'Jurnal Baca (Pusat Kajian Lembaga Penelitian Universitas Pepabri Makasar)', 2013, 2016, 0, 0, 'NULL', 'NULL', 'Perangkat Lunak Pemenuhan Kebutuhan Gizi pada Orang Sa', 5, 3, 'Lokal'),
(20, 'NULL', 0, 0, 33, 'Perpustakaan Pusat', 2013, 2016, 0, 0, 'NULL', 'NULL', 'Analisa & Perancangan Sistem Monitoring Inventaris Bar', 5, 3, 'Nasional'),
(21, 'NULL', 0, 0, 34, 'Digital Library', 2013, 2016, 0, 0, 'NULL', 'NULL', 'Implementasi SMS gateway dengan menggunakan bahasa ala', 5, 3, 'Internasional'),
(22, 'NULL', 0, 0, 35, 'Digital Library', 2013, 2016, 0, 0, 'NULL', 'NULL', 'Studi dan Implementasi Konsep Business to Costumer den', 5, 3, 'Internasional'),
(23, 'NULL', 0, 0, 36, 'Perpustakaan Pusat', 2013, 2016, 0, 0, 'NULL', 'NULL', 'Perancangan Sistem Informasi Berbasis Web pada Perpust', 5, 3, 'Nasional'),
(24, 'NULL', 0, 0, 37, 'Jurnal Baca (Pusat Kajian Lembaga Penelitian Universitas Pepabri Makasar)', 2013, 2016, 0, 0, 'NULL', 'NULL', 'Sistem Aplikasi Try Out SPMB dan EBTANAS Berbasis Web ', 5, 3, 'Lokal'),
(25, 'NULL', 0, 0, 38, 'Jurnal Baca (Pusat Kajian Lembaga Penelitian Universitas Pepabri Makasar)', 2013, 2016, 0, 0, 'NULL', 'NULL', 'Aplikasi Logika Fuzzy untuk Prediksi Penyakit dengan M', 5, 3, 'Lokal'),
(26, 'NULL', 0, 0, 39, 'Perpustakaan Pusat', 2013, 2016, 0, 0, 'NULL', 'NULL', 'Sistem Informasi Eksekutif untuk Perencanaan Tata Leta', 8, 3, 'Nasional'),
(27, 'NULL', 0, 0, 40, 'Digital Library', 2013, 2016, 0, 0, 'NULL', 'NULL', 'Membangun Aplikasi Pustaka (Pusat Data Informatika) Be', 8, 3, 'Internasional'),
(28, 'NULL', 0, 0, 41, 'Digital Library', 2013, 2016, 0, 0, 'NULL', 'NULL', 'Aplikasi Algoritma Minimax pada Permainan Checkers', 8, 3, 'Internasional'),
(29, 'NULL', 0, 0, 42, 'Perpustakaan Pusat', 2014, 2017, 0, 0, 'NULL', 'NULL', 'Sistem Pendukung Keputusan Penentuan Porsi Dana Invest', 8, 3, 'Nasional'),
(30, 'NULL', 0, 0, 43, 'Jurnal Baca (Pusat Kajian Lembaga Penelitian Universitas Pepabri Makasar)', 2014, 2017, 0, 0, 'NULL', 'NULL', 'Rancang Bangun Multiplayer Game Real Time Strategy Ber', 8, 3, 'Lokal'),
(31, 'NULL', 0, 0, 44, 'Jurnal Baca (Pusat Kajian Lembaga Penelitian Universitas Pepabri Makasar)', 2014, 2017, 0, 0, 'NULL', 'NULL', 'Menentukan Volume Produksi dengan Menggunakan Metode S', 8, 3, 'Lokal'),
(32, 'NULL', 0, 0, 45, 'Perpustakaan Pusat', 2014, 2017, 0, 0, 'NULL', 'NULL', 'Sistem Informasi dan Analisa Akuntansi di PT. Prima Ci', 8, 3, 'Nasional'),
(33, 'NULL', 0, 0, 46, 'Digital Library', 2014, 2017, 0, 0, 'NULL', 'NULL', 'Penentuan Lokasi Optimal untuk Distribusi Unit Pelayan', 8, 3, 'Internasional'),
(34, 'NULL', 0, 0, 47, 'Digital Library', 2014, 2017, 0, 0, 'NULL', 'NULL', 'Rancang Bangun Sistem Informasi Geografis Daerah Pariw', 8, 3, 'Internasional');

-- --------------------------------------------------------

--
-- Struktur dari tabel `rincian_kinerja_pengajaran`
--

CREATE TABLE `rincian_kinerja_pengajaran` (
  `id_rincian_kinerja_pengajaran` int(11) NOT NULL,
  `kode_mata_kuliah` varchar(30) NOT NULL,
  `sks_matkul` int(11) NOT NULL,
  `term` varchar(10) NOT NULL,
  `periode_pendidikan` varchar(20) NOT NULL,
  `jumlah_kelas` int(11) NOT NULL,
  `flag_aktif` tinyint(1) NOT NULL,
  `rencana_pengajaran` int(11) NOT NULL,
  `realisasi_pengajaran` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `rincian_kinerja_pengajaran`
--

INSERT INTO `rincian_kinerja_pengajaran` (`id_rincian_kinerja_pengajaran`, `kode_mata_kuliah`, `sks_matkul`, `term`, `periode_pendidikan`, `jumlah_kelas`, `flag_aktif`, `rencana_pengajaran`, `realisasi_pengajaran`) VALUES
(1, 'UUI11001', 6, '1', '2016/2017', 3, 1, 20, 20),
(2, 'UUI11002', 6, '1', '2016/2017', 2, 1, 21, 21),
(3, 'UUI12020', 2, '1', '2015/2016', 1, 1, 12, 12),
(4, 'UUI11010', 3, '1', '2014/2015', 1, 1, 12, 12),
(5, 'UUI12030', 1, '1', '2016/2017', 1, 1, 12, 12),
(6, 'MAT10113', 2, '1', '2014/2015', 2, 1, 20, 19),
(7, 'FSK10111', 3, '1', '2014/2015', 3, 1, 22, 22),
(8, 'IKI10100', 3, '1', '2014/2015', 4, 1, 22, 22),
(9, 'IKI10200', 6, '1', '2016/2017', 5, 1, 23, 23),
(10, 'IKI10400', 4, '1', '2016/2017', 5, 1, 23, 22),
(11, 'IKI10103', 3, '1', '2015/2016', 3, 1, 21, 20),
(12, 'IKI20101', 3, '1', '2014/2015', 2, 1, 21, 20),
(13, 'IKI20102', 4, '1', '2016/2017', 2, 1, 20, 21),
(14, 'IKI20201', 3, '1', '2016/2017', 1, 1, 12, 10),
(15, 'IKI20505', 4, '1', '2014/2015', 1, 1, 12, 10),
(16, 'IKI20700', 4, '1', '2014/2015', 1, 1, 12, 10),
(17, 'IKI30202', 3, '1', '2014/2015', 2, 1, 21, 22),
(18, 'IKI40902', 3, '1', '2016/2017', 3, 1, 20, 21),
(19, 'IKI40903', 3, '1', '2016/2017', 2, 1, 19, 19),
(20, 'IKO12108', 3, '1', '2014/2015', 1, 1, 12, 12),
(21, 'IKO12500', 4, '1', '2014/2015', 1, 1, 12, 12),
(22, 'IKO21502', 3, '1', '2014/2015', 1, 1, 12, 12),
(23, 'IKO21105', 4, '1', '2016/2017', 2, 1, 21, 21),
(24, 'IKO22401', 4, '1', '2016/2017', 2, 1, 20, 20),
(25, 'IKO22203', 3, '1', '2016/2017', 1, 1, 12, 12),
(26, 'IKO31204', 3, '1', '2014/2015', 1, 1, 12, 12),
(27, 'IKO31300', 4, '1', '2014/2015', 1, 1, 12, 12),
(28, 'IKO31900', 2, '1', '2016/2017', 2, 1, 18, 18),
(29, 'IKO31503', 4, '1', '2014/2015', 3, 1, 19, 19),
(30, 'IKO32104', 3, '1', '2014/2015', 4, 1, 20, 21),
(31, 'IKO32402', 4, '1', '2014/2015', 2, 1, 18, 18),
(32, 'IKO32205', 6, '1', '2016/2017', 1, 1, 12, 12),
(33, 'IKO31258', 4, '1', '2014/2015', 2, 1, 12, 11),
(34, 'IKO31550', 3, '1', '2014/2015', 2, 1, 12, 11),
(35, 'IKO31551', 3, '1', '2014/2015', 2, 1, 12, 12),
(36, 'IKO32150', 3, '1', '2016/2017', 1, 1, 12, 12),
(37, 'IKO32257', 4, '1', '2016/2017', 1, 1, 12, 12),
(38, 'IKO32453', 4, '1', '2014/2015', 1, 1, 12, 12),
(39, 'IKO32751', 3, '1', '2014/2015', 2, 1, 12, 12),
(40, 'IKO41151', 3, '1', '2014/2015', 3, 1, 13, 12),
(41, 'IKO41554', 3, '1', '2016/2017', 4, 1, 13, 13),
(42, 'IKO41557', 3, '1', '2016/2017', 5, 1, 23, 23),
(43, 'IKO42360', 3, '1', '2015/2016', 5, 1, 23, 23),
(44, 'IKO42553', 3, '1', '2014/2015', 3, 1, 12, 11),
(45, 'IKO42555', 3, '1', '2016/2017', 2, 1, 13, 13),
(46, 'IKI40999', 6, '1', '2015/2016', 2, 1, 13, 13),
(47, 'IKI40990', 4, '1', '2014/2015', 2, 1, 23, 22),
(48, 'FSK10112', 3, '1', '2016/2017', 2, 1, 23, 23),
(49, 'IKI10101', 4, '1', '2016/2017', 1, 1, 12, 12),
(50, 'IKO12107', 4, '1', '2014/2015', 1, 1, 12, 12),
(51, 'IKO12501', 4, '1', '2014/2015', 1, 1, 12, 11),
(52, 'UUI12027', 3, '1', '2015/2016', 2, 1, 13, 13),
(53, 'IKI20105', 3, '1', '2014/2015', 3, 1, 13, 13),
(54, 'IKI20106', 4, '1', '2016/2017', 4, 1, 23, 23),
(55, 'IKI30203', 4, '1', '2016/2017', 2, 1, 23, 23),
(56, 'IKO12106', 3, '1', '2015/2016', 1, 1, 12, 11),
(57, 'IKO12502', 3, '1', '2014/2015', 1, 1, 12, 12),
(58, 'IKO21106', 3, '1', '2016/2017', 1, 1, 12, 12),
(59, 'IKO22402', 3, '1', '2016/2017', 2, 1, 12, 12),
(60, 'IKO22204', 3, '2', '2015/2016', 3, 1, 13, 13),
(61, 'IKO31204', 4, '2', '2014/2015', 4, 1, 13, 12),
(62, 'IKO31300', 3, '2', '2016/2017', 5, 1, 23, 23),
(63, 'IKO31900', 3, '2', '2016/2017', 5, 1, 23, 23),
(64, 'IKO31503', 3, '2', '2015/2016', 2, 1, 20, 20),
(65, 'IKO32104', 3, '2', '2014/2015', 1, 1, 12, 11);

-- --------------------------------------------------------

--
-- Struktur dari tabel `riwayat_pendidikan`
--

CREATE TABLE `riwayat_pendidikan` (
  `id_riwayat_pendidikan` int(11) NOT NULL,
  `id_pegawai` bigint(20) NOT NULL,
  `riwayat_pendidikan` varchar(50) NOT NULL,
  `instansi_pendidikan` varchar(40) NOT NULL,
  `gelar_pendidikan` varchar(10) DEFAULT NULL,
  `bidang_keahlian` varchar(30) DEFAULT NULL,
  `flag_aktif` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `riwayat_pendidikan`
--

INSERT INTO `riwayat_pendidikan` (`id_riwayat_pendidikan`, `id_pegawai`, `riwayat_pendidikan`, `instansi_pendidikan`, `gelar_pendidikan`, `bidang_keahlian`, `flag_aktif`) VALUES
(1, 2, 'S1', 'Universitas Indonesia', 'S. Kom', 'Ilmu Komputer', 1),
(2, 3, 'S1', 'Institut Teknologi Bandung', 'S.T', 'Teknik Informatika', 1),
(3, 1, 'S1', 'Massachusetts Institute of Technology', 'SB', 'Sains', 1),
(4, 5, 'S1', 'Universitas Indonesia', 'S. Kom', 'Ilmu Komputer', 1),
(5, 3, 'S2', 'Universitas Indonesia', 'M. Kom', 'Teknologi Informasi', 1),
(6, 6, 'S1', 'Universitas Negeri Jakarta', 'S.T', 'Teknik Elekro', 1),
(7, 9, 'S1', 'Universitas Indonesia', 'S. Hum', 'Sastra Inggris', 1),
(8, 4, 'S1', 'Universitas Negeri Jakarta', 'S. Kom', 'Sistem Informasi', 1),
(9, 7, 'S1', 'Universitas Indonesia', 'S.T', 'Teknik Industri', 1),
(10, 9, 'S1', 'Universitas Indonesia', 'S. Kom', 'Ilmu Komputer', 1),
(11, 12, 'S1', 'Institut Teknologi Sepuluh November', 'S. Kom', 'Ilmu Komputer', 1),
(12, 4, 'S2', 'Universitas Indonesia', 'M. Kom', 'Teknologi Informasi', 1),
(13, 9, 'S2', 'Institut Teknologi Sepuluh November', 'M.T', 'Teknik Elektro', 1),
(14, 14, 'S1', 'Universitas Indonesia', 'S. Hum', 'Sastra Jawa', 1),
(15, 14, 'S2', 'Institut Teknologi Bandung', 'M.T', 'Teknik Informatika', 1),
(16, 14, 'S3', 'Massachusetts Institute of Technology', 'PhD', 'Teknologi Informasi', 1),
(17, 15, 'D4', 'Universitas Indonesia', NULL, 'Sistem Informasi', 1),
(18, 16, 'D3', 'Universitas Indonesia', NULL, 'Sistem Informasi', 1),
(19, 17, 'D2', 'Universitas Negeri Jakarta', NULL, 'Sistem Informasi', 1),
(20, 18, 'D1', 'Universitas Indonesia', NULL, 'Sistem Informasi', 1),
(21, 19, 'SMA/SMK', 'SMAN 1 Depok', NULL, NULL, 1),
(22, 20, 'S1', 'Universitas Indonesia', 'S.T', NULL, 1),
(23, 21, 'S1', 'Universitas Indonesia', 'S. Kom', 'Ilmu Komputer', 1),
(24, 24, 'D4', 'Institut Teknologi Sepuluh November', NULL, 'Administrasi', 1),
(25, 25, 'D3', 'Universitas Indonesia', NULL, 'Administrasi', 1),
(26, 26, 'D2', 'Institut Teknologi Sepuluh November', NULL, 'Administrasi', 1),
(27, 27, 'D1', 'Universitas Indonesia', NULL, 'Administrasi', 1),
(28, 28, 'SMA/SMK', 'SMAN 28 Jakarta', NULL, NULL, 1),
(29, 22, 'S1', 'Massachusetts Institute of Technology', 'SB', 'Sains', 1),
(30, 23, 'S1', 'Universitas Indonesia', 'S. Kom', NULL, 1),
(31, 31, 'D4', 'Universitas Indonesia', NULL, 'Ilmu Komputer', 1),
(32, 32, 'D3', 'Universitas Negeri Jakarta', NULL, 'Administrasi', 1),
(33, 33, 'D2', 'Universitas Indonesia', NULL, 'Administrasi', 1),
(34, 34, 'D1', 'Universitas Negeri Jakarta', NULL, NULL, 1),
(35, 35, 'SMA/SMK', 'SMAN 8 Jakarta', NULL, 'Administrasi', 1),
(36, 36, 'S1', 'Universitas Indonesia', 'S.T', 'Teknik Komputer', 1),
(37, 37, 'S1', 'Institut Teknologi Sepuluh November', 'S. Kom', 'Sistem Informasi', 1),
(38, 38, 'D4', 'Universitas Indonesia', NULL, 'Sistem Informasi', 1),
(39, 39, 'D3', 'Institut Teknologi Sepuluh November', NULL, 'Sistem Informasi', 1),
(40, 40, 'D2', 'Universitas Indonesia', NULL, 'Sistem Informasi', 1),
(41, 41, 'D1', 'Institut Teknologi Bandung', NULL, 'Sistem Informasi', 1),
(42, 42, 'SMA/SMK', 'SMKN 57 Jakarta', NULL, NULL, 1),
(43, 43, 'S2', 'Universitas Indonesia', 'S.Ikom', 'Sistem Informasi', 1),
(44, 44, 'S3', 'Universitas Indonesia', 'PhD', 'Sastra', 1),
(45, 45, 'D4', 'Universitas Negeri Jakarta', NULL, 'Administrasi', 1),
(46, 46, 'D3', 'Universitas Indonesia', NULL, 'Administrasi', 1),
(47, 47, 'D2', 'Universitas Negeri Jakarta', NULL, 'Administrasi', 1),
(48, 48, 'D1', 'Universitas Indonesia', NULL, 'Administrasi', 1),
(49, 49, 'SMA/SMK', 'SMAN 1 Depok', NULL, NULL, 1),
(50, 50, 'S1', 'Institut Teknologi Sepuluh November', 'S.Ikom', 'Sistem Informasi', 1),
(51, 51, 'S1', 'Universitas Indonesia', 'S.Hum', 'Perpustakaan', 1),
(52, 52, 'D4', 'STAN', NULL, 'Akuntansi', 1),
(53, 53, 'D3', 'Universitas Indonesia', NULL, 'Akuntansi', 1),
(54, 54, 'D2', 'STAN', NULL, 'Akuntansi', 1),
(55, 55, 'D1', 'STAN', NULL, 'Bea Cukai', 1),
(56, 56, 'SMA/SMK', 'SMAN 3 Depok', NULL, NULL, 1),
(57, 57, 'S1', 'Universitas Indonesia', 'S.Ikom', 'Sistem Informasi', 1),
(58, 58, 'S1', 'Universitas Negeri Jakarta', 'S.T', 'Teknik Elektri', 1),
(59, 59, 'D4', 'Universitas Indonesia', NULL, 'Administrasi', 1),
(60, 29, 'S1', 'Universitas Indonesia', 'S.T', 'Teknik Elektro', 1),
(61, 30, 'S1', 'Universitas Negeri Jakarta', 'S.E', 'Manajemen', 1),
(62, 59, 'S3', 'Universitas Indonesia', 'PhD', NULL, 1),
(63, 59, 'S2', 'Universitas Negeri Jakarta', 'M.T', 'Teknik Industri', 1),
(64, 59, 'S1', 'Universitas Indonesia', 'S.Kom', 'Ilmu Komputer', 1),
(65, 62, 'S1', 'Universitas Negeri Jakarta', 'S.Kom', 'Sistem Informasi', 1),
(66, 63, 'S1', 'Universitas Indonesia', 'S.Kom', 'Ilmu Komputer', 1),
(67, 64, 'S2', 'Universitas Indonesia', 'M.Kom', 'Teknologi Informasi', 1),
(68, 64, 'S1', 'Institut Teknologi Sepuluh November', 'S.T', 'Teknik Elektro', 1),
(69, 66, 'S1', 'Universitas Indonesia', 'S.kom', 'Sistem Informasi', 1),
(70, 67, 'S1', 'Institut Teknologi Sepuluh November', 'S.Sc', 'Matematika', 1),
(71, 68, 'S1', 'Universitas Indonesia', 'S.Kom', 'Sistem Informasi', 1),
(72, 69, 'S1', 'Institut Teknologi Bandung', 'S.T', 'Teknik Elektro', 1),
(73, 70, 'S1', 'Massachusetts Institute of Technology', 'SB', 'Sains', 1),
(74, 71, 'S1', 'Universitas Indonesia', 'S.Kom', 'Teknik Elektro', 1),
(75, 72, 'S2', 'Universitas Indonesia', 'M.Kom', 'Teknologi Informasi', 1),
(76, 72, 'S1', 'Universitas Negeri Jakarta', 'S.T', 'Teknik Industri', 1),
(77, 74, 'S1', 'Universitas Indonesia', 'S.Kom', 'Ilmu Komputer', 1),
(78, 75, 'S3', 'Universitas Indonesia', 'PhD', NULL, 1),
(79, 75, 'S2', 'Universitas Negeri Jakarta', 'M.T', 'Teknik Elektro', 1),
(80, 75, 'S1', 'Universitas Indonesia', 'S.Kom', 'Ilmu Komputer', 1),
(81, 78, 'S1', 'Universitas Negeri Jakarta', 'S.T', 'Teknik Industri', 1),
(82, 79, 'S2', 'Universitas Indonesia', 'M.Kom', 'Teknologi Informasi', 1),
(83, 79, 'S1', 'Universitas Indonesia', 'S.E', 'Manajemen', 1),
(84, 81, 'S1', 'Universitas Indonesia', 'S.Kom', 'Ilmu Komputer', 1),
(85, 82, 'D4', 'Universitas Negeri Jakarta', NULL, NULL, 1),
(86, 83, 'S3', 'Universitas Indonesia', 'PhD', NULL, 1),
(87, 83, 'S2', 'Universitas Negeri Jakarta', 'M.T', 'Teknik Industri', 1),
(88, 83, 'S1', 'Universitas Indonesia', 'S.Kom', 'Ilmu Komputer', 1),
(89, 86, 'S1', 'Universitas Indonesia', 'S.Kom', 'Ilmu Komputer', 1),
(90, 87, 'S1', 'Institut Teknologi Sepuluh November', 'S.Kom', 'Teknik Informatika', 1),
(91, 88, 'S1', 'Universitas Indonesia', 'S.Sc', 'Matematika', 1),
(92, 89, 'S2', 'Institut Teknologi Sepuluh November', 'MBA', 'Bisnis', 1),
(93, 89, 'S1', 'Universitas Indonesia', 'S.Kom', 'Ilmu Komputer', 1),
(94, 91, 'S1', 'Institut Teknologi Bandung', 'S.Sc', 'Matematika', 1),
(95, 92, 'S1', 'Massachusetts Institute of Technology', 'SB', 'Sains', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `sesi`
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
-- Dumping data untuk tabel `sesi`
--

INSERT INTO `sesi` (`id_kelas_mk`, `id_mk`, `tahun`, `semester`, `tanggal`, `status_pengganti`, `deskripsi`, `absen_dosen`, `ruangan`, `komentar`) VALUES
('1', 'IKI10100', '2016', '1', '0000-00-00', 1, 'NULL', 'NULL', 'NULL', 'NULL'),
('10', 'IKI10200', '2016', '1', '0000-00-00', 0, 'NULL', 'NULL', 'NULL', 'NULL'),
('2', 'IKI10100', '2016', '2', '0000-00-00', 0, 'NULL', 'NULL', 'NULL', 'NULL'),
('23', 'IKO21502', '2016', '1', '0000-00-00', 0, 'NULL', 'NULL', 'NULL', 'NULL'),
('24', 'IKO21502', '2016', '2', '0000-00-00', 0, 'NULL', 'NULL', 'NULL', 'NULL'),
('25', 'IKO21502', '2016', '2', '0000-00-00', 0, 'NULL', 'NULL', 'NULL', 'NULL'),
('3', 'IKI10100', '2016', '1', '0000-00-00', 1, 'NULL', 'NULL', 'NULL', 'NULL'),
('35', 'IKO32205', '2016', '1', '0000-00-00', 0, 'NULL', 'NULL', 'NULL', 'NULL'),
('36', 'IKO32205', '2016', '1', '0000-00-00', 0, 'NULL', 'NULL', 'NULL', 'NULL'),
('37', 'IKO32205', '2016', '1', '0000-00-00', 0, 'NULL', 'NULL', 'NULL', 'NULL'),
('38', 'IKO12500', '2016', '1', '0000-00-00', 0, 'NULL', 'NULL', 'NULL', 'NULL'),
('39', 'IKO12500', '2016', '1', '0000-00-00', 0, 'NULL', 'NULL', 'NULL', 'NULL'),
('4', 'IKI10100', '2016', '2', '0000-00-00', 0, 'NULL', 'NULL', 'NULL', 'NULL'),
('40', 'IKO12500', '2016', '1', '0000-00-00', 0, 'NULL', 'NULL', 'NULL', 'NULL'),
('44', 'IKO21105', '2016', '1', '0000-00-00', 0, 'NULL', 'NULL', 'NULL', 'NULL'),
('45', 'IKO21105', '2016', '1', '0000-00-00', 0, 'NULL', 'NULL', 'NULL', 'NULL'),
('46', 'IKO21105', '2016', '1', '0000-00-00', 0, 'NULL', 'NULL', 'NULL', 'NULL'),
('5', 'IKI10100', '2016', '1', '0000-00-00', 1, 'NULL', 'NULL', 'NULL', 'NULL'),
('50', 'IKO22401', '2016', '2', '0000-00-00', 0, 'NULL', 'NULL', 'NULL', 'NULL'),
('51', 'IKO22401', '2016', '2', '0000-00-00', 0, 'NULL', 'NULL', 'NULL', 'NULL'),
('6', 'IKI10200', '2016', '2', '0000-00-00', 0, 'NULL', 'NULL', 'NULL', 'NULL'),
('7', 'IKI10200', '2016', '1', '0000-00-00', 1, 'NULL', 'NULL', 'NULL', 'NULL'),
('8', 'IKI10200', '2016', '2', '0000-00-00', 0, 'NULL', 'NULL', 'NULL', 'NULL'),
('9', 'IKI10200', '2016', '1', '0000-00-00', 0, 'NULL', 'NULL', 'NULL', 'NULL');

-- --------------------------------------------------------

--
-- Struktur dari tabel `status`
--

CREATE TABLE `status` (
  `id` int(11) NOT NULL,
  `nama` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `status`
--

INSERT INTO `status` (`id`, `nama`) VALUES
(1, 'New'),
(2, 'Masa pengisian'),
(3, 'Selesai Pengisian'),
(4, 'Dikirim ke BPMA'),
(5, 'Asesmen'),
(6, 'Aktif'),
(7, 'Kadaluwarsa');

-- --------------------------------------------------------

--
-- Struktur dari tabel `status_dosen`
--

CREATE TABLE `status_dosen` (
  `id` int(11) NOT NULL,
  `nama_status_dosen` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `status_dosen`
--

INSERT INTO `status_dosen` (`id`, `nama_status_dosen`) VALUES
(1, 'Pensiun'),
(2, 'Berhenti'),
(3, 'Dosen Baru'),
(4, 'Tugas Belajar S2/Sp-1'),
(5, 'Tugas Belajar S3/Sp-2');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tendik`
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
-- Dumping data untuk tabel `tendik`
--

INSERT INTO `tendik` (`id_tendik`, `id_kinerja_tendik`, `id_remunerasi_tendik`, `flag_aktif`, `id_jenis_tendik`, `id_role`, `id_pegawai`, `id_prodi`) VALUES
(1, 0, 0, 1, 2, 0, 14, '311225'),
(2, 0, 0, 1, 3, 0, 15, '311166'),
(3, 0, 0, 1, 5, 0, 16, '311166'),
(4, 0, 0, 1, 7, 0, 17, '311225'),
(5, 0, 0, 1, 1, 0, 18, '311166'),
(6, 0, 0, 1, 3, 0, 19, '311225'),
(7, 0, 0, 1, 6, 0, 20, '311225'),
(8, 0, 0, 1, 7, 0, 21, '311225'),
(9, 0, 0, 1, 1, 0, 22, '311225'),
(10, 0, 0, 1, 7, 0, 23, '311225'),
(11, 0, 0, 1, 3, 0, 24, '311166'),
(12, 0, 0, 1, 2, 0, 25, '311166'),
(13, 0, 0, 1, 5, 0, 26, '311166'),
(14, 0, 0, 1, 5, 0, 27, '311166'),
(15, 0, 0, 1, 6, 0, 28, '311166'),
(16, 0, 0, 1, 5, 0, 29, '311166'),
(17, 0, 0, 1, 7, 0, 30, '311166'),
(18, 0, 0, 1, 7, 0, 31, '311166'),
(19, 0, 0, 1, 4, 0, 32, '311225'),
(20, 0, 0, 1, 7, 0, 33, '311225'),
(21, 0, 0, 1, 1, 0, 34, '311225'),
(22, 0, 0, 1, 2, 0, 35, '311225'),
(23, 0, 0, 1, 6, 0, 36, '311225'),
(24, 0, 0, 1, 1, 0, 37, '311225'),
(25, 0, 0, 1, 5, 0, 38, '311166'),
(26, 0, 0, 1, 5, 0, 39, '311166'),
(27, 0, 0, 1, 7, 0, 40, '311166'),
(28, 0, 0, 1, 7, 0, 41, '311225'),
(29, 0, 0, 1, 3, 0, 42, '311166'),
(30, 0, 0, 1, 4, 0, 43, '311225'),
(31, 0, 0, 1, 7, 0, 44, '311166'),
(32, 0, 0, 1, 7, 0, 45, '311225'),
(33, 0, 0, 1, 4, 0, 46, '311166'),
(34, 0, 0, 1, 3, 0, 47, '311225'),
(35, 0, 0, 1, 4, 0, 48, '311225'),
(36, 0, 0, 1, 2, 0, 49, '311166'),
(37, 0, 0, 1, 3, 0, 50, '311225'),
(38, 0, 0, 1, 6, 0, 51, '311225'),
(39, 0, 0, 1, 5, 0, 52, '311166'),
(40, 0, 0, 1, 5, 0, 53, '311225'),
(41, 0, 0, 1, 6, 0, 54, '311225'),
(42, 0, 0, 1, 2, 0, 55, '311166'),
(43, 0, 0, 1, 4, 0, 56, '311225'),
(44, 0, 0, 1, 2, 0, 57, '311166'),
(45, 0, 0, 1, 1, 0, 58, '311225'),
(46, 0, 0, 1, 7, 0, 59, '311225');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `borang`
--
ALTER TABLE `borang`
  ADD PRIMARY KEY (`id`),
  ADD KEY `kode_prodi` (`kode_prodi`);

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
-- Indexes for table `evaluasi_dana_pengmas`
--
ALTER TABLE `evaluasi_dana_pengmas`
  ADD KEY `id_pengmas` (`id_pengmas`);

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
  ADD KEY `kode_prodi` (`kode_prodi`);

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
-- Indexes for table `kerja_sama`
--
ALTER TABLE `kerja_sama`
  ADD PRIMARY KEY (`id`),
  ADD KEY `kode_prodi` (`kode_prodi`);

--
-- Indexes for table `komentar`
--
ALTER TABLE `komentar`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_borang` (`id_borang`),
  ADD KEY `id_reviewer` (`id_reviewer`);

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
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_dosen` (`id_dosen`);

--
-- Indexes for table `pegawai`
--
ALTER TABLE `pegawai`
  ADD PRIMARY KEY (`id_pegawai`),
  ADD KEY `id_pimpinan` (`id_pimpinan`),
  ADD KEY `pegawai_ibfk_3` (`id_prodi_reviewer`),
  ADD KEY `id_prodi_tim_akreditasi` (`id_prodi_tim_akreditasi`);

--
-- Indexes for table `pengmas_dosen`
--
ALTER TABLE `pengmas_dosen`
  ADD PRIMARY KEY (`id_pengmas`);

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
-- Indexes for table `status`
--
ALTER TABLE `status`
  ADD PRIMARY KEY (`id`);

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
-- AUTO_INCREMENT for table `borang`
--
ALTER TABLE `borang`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=71;
--
-- AUTO_INCREMENT for table `dosen`
--
ALTER TABLE `dosen`
  MODIFY `id_dosen` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;
--
-- AUTO_INCREMENT for table `evaluasi_dana_akhir`
--
ALTER TABLE `evaluasi_dana_akhir`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;
--
-- AUTO_INCREMENT for table `histori_akreditasi`
--
ALTER TABLE `histori_akreditasi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
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
  MODIFY `id_pegawai` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=95;
--
-- AUTO_INCREMENT for table `pimpinan`
--
ALTER TABLE `pimpinan`
  MODIFY `id_pimpinan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
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
  MODIFY `id_rincian_kinerja_pengajaran` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=66;
--
-- AUTO_INCREMENT for table `riwayat_pendidikan`
--
ALTER TABLE `riwayat_pendidikan`
  MODIFY `id_riwayat_pendidikan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=96;
--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `dosen`
--
ALTER TABLE `dosen`
  ADD CONSTRAINT `dosen_ibfk_1` FOREIGN KEY (`id_pegawai`) REFERENCES `pegawai` (`id_pegawai`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `dosen_ibfk_2` FOREIGN KEY (`kode_prodi_pengajaran`) REFERENCES `program_studi` (`kode_prodi`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `dosen_mata_kuliah`
--
ALTER TABLE `dosen_mata_kuliah`
  ADD CONSTRAINT `dosen_mata_kuliah_ibfk_1` FOREIGN KEY (`id_dosen`) REFERENCES `dosen` (`id_dosen`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `dosen_mata_kuliah_ibfk_2` FOREIGN KEY (`kode_mata_kuliah`) REFERENCES `mata_kuliah` (`kode_mata_kuliah`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `evaluasi_dana_akhir`
--
ALTER TABLE `evaluasi_dana_akhir`
  ADD CONSTRAINT `evaluasi_dana_akhir_ibfk_1` FOREIGN KEY (`id_proyek`) REFERENCES `proyek` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `evaluasi_dana_pengmas`
--
ALTER TABLE `evaluasi_dana_pengmas`
  ADD CONSTRAINT `evaluasi_dana_pengmas_ibfk_1` FOREIGN KEY (`id_pengmas`) REFERENCES `pengmas_dosen` (`id_pengmas`);

--
-- Ketidakleluasaan untuk tabel `histori_akreditasi`
--
ALTER TABLE `histori_akreditasi`
  ADD CONSTRAINT `histori_akreditasi_ibfk_1` FOREIGN KEY (`kode_prodi`) REFERENCES `program_studi` (`kode_prodi`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `kegiatan_dosen`
--
ALTER TABLE `kegiatan_dosen`
  ADD CONSTRAINT `kegiatan_dosen_ibfk_1` FOREIGN KEY (`id_dosen`) REFERENCES `dosen` (`id_dosen`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `kelas`
--
ALTER TABLE `kelas`
  ADD CONSTRAINT `kelas_ibfk_1` FOREIGN KEY (`kode_mata_kuliah`) REFERENCES `mata_kuliah` (`kode_mata_kuliah`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `kerja_sama`
--
ALTER TABLE `kerja_sama`
  ADD CONSTRAINT `kerja_sama_ibfk_1` FOREIGN KEY (`kode_prodi`) REFERENCES `program_studi` (`kode_prodi`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `komentar`
--
ALTER TABLE `komentar`
  ADD CONSTRAINT `komentar_ibfk_1` FOREIGN KEY (`id_borang`) REFERENCES `borang` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `komentar_ibfk_2` FOREIGN KEY (`id_reviewer`) REFERENCES `pegawai` (`id_pegawai`);

--
-- Ketidakleluasaan untuk tabel `manajemen_dosen`
--
ALTER TABLE `manajemen_dosen`
  ADD CONSTRAINT `manajemen_dosen_ibfk_1` FOREIGN KEY (`id_dosen`) REFERENCES `dosen` (`id_dosen`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `organisasi_dosen`
--
ALTER TABLE `organisasi_dosen`
  ADD CONSTRAINT `organisasi_dosen_ibfk_1` FOREIGN KEY (`id_dosen`) REFERENCES `dosen` (`id_dosen`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `pimpinan`
--
ALTER TABLE `pimpinan`
  ADD CONSTRAINT `pimpinan_ibfk_1` FOREIGN KEY (`id_fakultas`) REFERENCES `fakultas` (`kode_fakultas`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
