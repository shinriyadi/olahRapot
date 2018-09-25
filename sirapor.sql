-- phpMyAdmin SQL Dump
-- version 4.3.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 22, 2018 at 03:35 PM
-- Server version: 5.6.24
-- PHP Version: 5.6.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `sirapor`
--

-- --------------------------------------------------------

--
-- Stand-in structure for view `keter`
--
CREATE TABLE IF NOT EXISTS `keter` (
`nama` varchar(35)
,`mapel` varchar(100)
,`nilai` int(5)
,`wali` int(3)
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `penge`
--
CREATE TABLE IF NOT EXISTS `penge` (
`nama` varchar(35)
,`mapel` varchar(100)
,`nilai` int(5)
,`wali` int(3)
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `pengetahuan`
--
CREATE TABLE IF NOT EXISTS `pengetahuan` (
`nama` varchar(35)
,`mapel` varchar(100)
,`nilai` int(5)
);

-- --------------------------------------------------------

--
-- Table structure for table `tb_detail_nilai`
--

CREATE TABLE IF NOT EXISTS `tb_detail_nilai` (
  `id_detail_nilai` int(5) NOT NULL,
  `id_siswa` int(5) DEFAULT NULL,
  `id_mapel` int(5) DEFAULT NULL,
  `uh1` int(5) DEFAULT NULL,
  `uh2` int(5) DEFAULT NULL,
  `uh3` int(5) DEFAULT NULL,
  `pengetahuan_akhir` int(5) DEFAULT NULL,
  `keterampilan_akhir` int(5) DEFAULT NULL,
  `uh4` int(5) DEFAULT NULL,
  `uh5` int(5) DEFAULT NULL,
  `uh6` int(5) DEFAULT NULL,
  `ket1` int(5) DEFAULT NULL,
  `ket2` int(5) DEFAULT NULL,
  `ket3` int(5) DEFAULT NULL,
  `ket4` int(5) DEFAULT NULL,
  `uts` int(5) DEFAULT NULL,
  `uas` int(5) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=41 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_detail_nilai`
--

INSERT INTO `tb_detail_nilai` (`id_detail_nilai`, `id_siswa`, `id_mapel`, `uh1`, `uh2`, `uh3`, `pengetahuan_akhir`, `keterampilan_akhir`, `uh4`, `uh5`, `uh6`, `ket1`, `ket2`, `ket3`, `ket4`, `uts`, `uas`) VALUES
(2, 4, 1, 78, 0, 0, 78, 84, 0, 0, 0, 84, 0, 0, 0, 80, 78),
(3, 4, 3, 80, 75, 0, 47, 90, 0, 0, 0, 90, 0, 0, 0, 0, 0),
(4, 4, 7, 90, 1, 50, 64, 46, 0, 0, 0, 89, 2, 0, 0, 90, 90),
(5, 4, 12, 90, 80, 1, 41, 46, 0, 0, 0, 90, 1, 0, 0, 65, 2),
(6, 4, 13, 67, 54, 0, 56, 84, 0, 0, 0, 78, 90, 0, 0, 56, 45),
(7, 4, 5, 90, 78, 0, 85, 46, 0, 0, 0, 90, 1, 0, 0, 75, 90),
(8, 4, 4, 56, 56, 0, 70, 78, 0, 0, 0, 78, 0, 0, 0, 100, 87),
(9, 4, 6, 89, 90, 0, 86, 61, 0, 0, 0, 67, 54, 0, 0, 90, 76),
(10, 4, 9, 89, 76, 0, 78, 83, 0, 0, 0, 90, 76, 0, 0, 85, 65),
(11, 4, 8, 80, 75, 0, 54, 85, 0, 0, 0, 85, 0, 0, 0, 75, 0),
(12, 4, 20, 90, 0, 0, 84, 74, 0, 0, 0, 90, 58, 0, 0, 67, 78),
(13, 4, 21, 89, 78, 0, 80, 78, 0, 0, 0, 67, 89, 0, 0, 65, 78),
(14, 4, 14, 45, 90, 0, 73, 51, 0, 0, 0, 45, 0, 56, 0, 89, 78),
(15, 4, 10, 56, 78, 0, 77, 73, 0, 0, 0, 56, 90, 0, 0, 78, 98),
(16, 4, 15, 56, 76, 0, 69, 78, 0, 0, 0, 78, 0, 0, 0, 56, 78),
(17, 4, 11, 56, 78, 0, 69, 62, 0, 0, 0, 34, 89, 0, 0, 90, 67),
(18, 5, 3, 89, 67, 90, 82, 78, 0, 0, 0, 78, 0, 0, 0, 67, 87),
(19, 5, 7, 67, 67, 0, 74, 78, 0, 0, 0, 78, 0, 0, 0, 67, 90),
(20, 5, 20, 80, 80, 0, 80, 80, 0, 0, 0, 80, 0, 0, 0, 80, 80),
(21, 5, 12, 67, 67, 67, 71, 67, 0, 0, 0, 67, 0, 0, 0, 78, 78),
(22, 5, 13, 78, 0, 0, 77, 98, 0, 0, 0, 98, 0, 0, 0, 78, 76),
(23, 5, 22, 67, 0, 0, 79, 67, 0, 0, 0, 67, 0, 0, 0, 89, 99),
(24, 5, 21, 88, 0, 0, 79, 67, 0, 0, 0, 67, 0, 0, 0, 89, 56),
(25, 5, 24, 67, 0, 0, 65, 54, 0, 0, 0, 54, 0, 0, 0, 78, 56),
(26, 5, 14, 45, 0, 0, 53, 78, 0, 0, 0, 78, 0, 0, 0, 90, 56),
(27, 5, 23, 56, 0, 0, 69, 56, 0, 0, 0, 56, 0, 0, 0, 56, 99),
(28, 5, 5, 77, 0, 0, 77, 77, 0, 0, 0, 77, 0, 0, 0, 77, 77),
(29, 5, 1, 88, 0, 0, 75, 88, 0, 0, 0, 88, 0, 0, 0, 55, 55),
(30, 5, 9, 67, 0, 0, 70, 55, 0, 0, 0, 55, 0, 0, 0, 67, 78),
(31, 5, 4, 56, 67, 0, 62, 45, 0, 0, 0, 45, 0, 0, 0, 78, 56),
(32, 5, 26, 70, 0, 0, 63, 70, 0, 0, 0, 70, 0, 0, 0, 60, 50),
(33, 5, 6, 70, 0, 0, 74, 40, 0, 0, 0, 40, 0, 0, 0, 80, 80),
(34, 5, 8, 50, 0, 0, 66, 80, 0, 0, 0, 80, 0, 0, 0, 90, 90),
(35, 5, 10, 90, 0, 0, 83, 98, 0, 0, 0, 98, 0, 0, 0, 23, 90),
(36, 5, 15, 78, 0, 0, 78, 78, 0, 0, 0, 78, 0, 0, 0, 78, 78),
(37, 5, 11, 88, 0, 0, 88, 88, 0, 0, 0, 88, 0, 0, 0, 88, 88),
(38, 5, 25, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(39, 4, 25, 67, 0, 0, 75, 89, 0, 0, 0, 89, 0, 0, 0, 78, 90),
(40, 1, 17, 78, 0, 0, 83, 87, 0, 0, 0, 87, 0, 0, 0, 90, 89);

-- --------------------------------------------------------

--
-- Table structure for table `tb_ekstra`
--

CREATE TABLE IF NOT EXISTS `tb_ekstra` (
  `id_ekstra` int(5) NOT NULL,
  `nama_ekstra` varchar(35) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_ekstra`
--

INSERT INTO `tb_ekstra` (`id_ekstra`, `nama_ekstra`) VALUES
(2, 'sepak bola'),
(3, 'Renang'),
(6, 'Basket'),
(7, '-');

-- --------------------------------------------------------

--
-- Table structure for table `tb_kelas`
--

CREATE TABLE IF NOT EXISTS `tb_kelas` (
  `id_kelas` int(5) NOT NULL,
  `tingkat` enum('XII','XI','X') DEFAULT NULL,
  `id_user` int(3) DEFAULT NULL,
  `kode_jurusan` enum('DKV','TB','TKJ') DEFAULT NULL,
  `nama_jurusan` enum('Tata Busana','Teknik Komputer Jaringan','Desain Komunikasi Visual') DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_kelas`
--

INSERT INTO `tb_kelas` (`id_kelas`, `tingkat`, `id_user`, `kode_jurusan`, `nama_jurusan`) VALUES
(1, 'X', 17, 'TKJ', 'Teknik Komputer Jaringan'),
(2, 'X', 15, 'DKV', 'Desain Komunikasi Visual'),
(3, 'X', 20, 'TB', 'Tata Busana'),
(4, 'XI', 21, 'DKV', 'Desain Komunikasi Visual'),
(5, 'XI', 23, 'TB', 'Tata Busana'),
(6, 'XI', 18, 'TKJ', 'Desain Komunikasi Visual'),
(7, 'XII', 14, 'DKV', 'Desain Komunikasi Visual'),
(8, 'XII', 16, 'TB', 'Tata Busana'),
(9, 'XII', 19, 'TKJ', 'Teknik Komputer Jaringan');

-- --------------------------------------------------------

--
-- Table structure for table `tb_kepribadian`
--

CREATE TABLE IF NOT EXISTS `tb_kepribadian` (
  `id_kepribadian` int(5) NOT NULL,
  `id_siswa` int(5) DEFAULT NULL,
  `id_ekstra` int(5) DEFAULT NULL,
  `keterangan_ekstra` varchar(35) DEFAULT NULL,
  `sakit` int(5) DEFAULT NULL,
  `izin` int(5) DEFAULT NULL,
  `tanpa_keterangan` int(5) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_kepribadian`
--

INSERT INTO `tb_kepribadian` (`id_kepribadian`, `id_siswa`, `id_ekstra`, `keterangan_ekstra`, `sakit`, `izin`, `tanpa_keterangan`) VALUES
(1, 4, 2, 'sangat baik', 1, 0, 3),
(2, 5, 7, '', 4, 0, 0),
(3, 6, 3, 'baik', 0, 0, 3);

-- --------------------------------------------------------

--
-- Table structure for table `tb_keterangan`
--

CREATE TABLE IF NOT EXISTS `tb_keterangan` (
  `id_keterangan_mapel` int(5) NOT NULL,
  `id_mapel` int(5) DEFAULT NULL,
  `a_pengetahuan` tinytext,
  `b_pengetahuan` tinytext,
  `c_pengetahuan` tinytext,
  `d_pengetahuan` tinytext,
  `a_keterampilan` tinytext,
  `b_keterampilan` tinytext,
  `c_keterampilan` tinytext,
  `d_keterampilan` tinytext
) ENGINE=InnoDB AUTO_INCREMENT=39 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_keterangan`
--

INSERT INTO `tb_keterangan` (`id_keterangan_mapel`, `id_mapel`, `a_pengetahuan`, `b_pengetahuan`, `c_pengetahuan`, `d_pengetahuan`, `a_keterampilan`, `b_keterampilan`, `c_keterampilan`, `d_keterampilan`) VALUES
(5, 3, 'baik baik baik baik baik ', 'baik baik baik ', 'baik baik ', 'baik ', 'baik baik baik baik baik baik baik ', 'baik baik baik ', 'baik baik ', 'baik '),
(6, 7, 'baik baik baik baik baik baik ', 'baik baik baik ', 'baik baik ', 'baik ', 'baik baik baik baik baik baik baik baik ', 'baik baik baik baik ', 'baik baik baik ', 'baik baik '),
(7, 12, 'baik baik baik baik baik baik ', 'baik baik baik ', 'baik baik baik baik baik ', 'baik baik ', 'baik baik baik baik baik ', 'baik baik baik ', 'baik baik ', 'baik '),
(8, 14, 'baik baik baik baik baik baik baik ', 'baik baik ', 'baik baik baik baik baik ', 'baik baik ', 'baik baik baik baik baik baik baik ', 'baik baik ', 'baik baik baik ', 'baik baik '),
(9, 5, 'baik baik baik baik baik baik baik baik baik ', 'baik ', 'baik baik baik baik baik ', 'baik baik baik ', 'baik baik baik baik baik baik baik baik baik baik ', 'baik baik baik baik baik ', 'baik baik baik baik ', 'baik baik '),
(10, 9, 'baik baik baik baik baik baik baik baik baik ', 'baik ', 'baik baik baik baik baik ', 'baik baik baik ', 'baik baik baik baik baik baik baik baik baik baik ', 'baik baik baik baik baik ', 'baik baik baik baik ', 'baik baik '),
(11, 4, 'baik baik baik baik baik baik baik ', 'baik baik ', 'baik baik baik baik baik baik baik baik baik ', 'baik ', 'baik ', 'baik baik baik baik baik baik baik baik ', 'baik baik baik baik ', 'baik baik '),
(12, 6, 'baik baik baik baik baik baik baik baik baik baik baik baik baik baik baik baik baik ', 'baik baik baik baik ', 'baik baik ', 'baik baik baik baik baik ', 'baik baik baik baik baik ', 'baik baik baik ', 'baik baik baik baik ', 'baik baik baik baik '),
(13, 8, 'baik baik baik baik baik baik baik baik baik ', 'baik baik baik ', 'baik baik ', 'baik baik baik baik ', 'baik baik baik baik baik ', 'baik baik baik baik ', 'baik baik ', 'baik '),
(14, 10, 'baik baik baik ', 'baik baik ', 'baik baik baik baik baik baik ', 'baik baik ', 'baik baik baik baik baik baik baik baik baik ', 'baik baik ', 'baik ', 'baik vbaik baik baik baik baik '),
(15, 11, 'baik baik baik baik baik baik baik baik baik baik baik ', 'baik baik baik ', 'baik baik baik ', 'baik baik ', 'baik baik baik baik baik baik baik baik baik ', 'baik baik ', 'baik baik baik baik baik ', 'baik baik baik '),
(16, 20, 'kjajkaljfkadfjklfaj', 'lksjdfkldkjfk', 'sfj', 'sdjfkhkg', 'skdfjaskld', 'sdfkjdfgjdfjgk', 'jkdgdgj', 'jkdgkgf'),
(17, 21, 'wqwertyuiop', 'werty', 'wefghjfkg', 'zxcvbnm,', 'dfghjsdcvb', 'nm,sdvnfcm,s', 'cxvbnm,s', 'sgdhjkf'),
(21, NULL, '', '', '', '', '', '', '', ''),
(33, 1, 'a', 'b', 'c', 'd', 'a', 'b', 'c', 'd'),
(38, 15, 'asd', 'asf', 'dfg', 'dfhfgh', 'hgj', 'jhkhjklkl', 'jklkl;lhj', 'dfsfdsdffds');

-- --------------------------------------------------------

--
-- Table structure for table `tb_kompetensi`
--

CREATE TABLE IF NOT EXISTS `tb_kompetensi` (
  `id_kompetensi` int(5) NOT NULL,
  `nama_kompetensi` varchar(35) DEFAULT NULL,
  `kurikulum` enum('k13','ktsp') DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_kompetensi`
--

INSERT INTO `tb_kompetensi` (`id_kompetensi`, `nama_kompetensi`, `kurikulum`) VALUES
(1, 'Muatan Nasional', 'k13'),
(2, 'Muatan Kewilayahan', 'k13'),
(3, 'Dasar Bidang Keahlian', 'k13'),
(4, 'Muatan Lokal', 'k13'),
(6, 'Kompetensi Keahlian', 'k13'),
(7, 'Pengembangan Diri', 'k13'),
(8, 'Tambahan Yayasan', 'k13'),
(9, 'Kelompok Normatif', 'ktsp'),
(10, 'Kelompok Adaptif', 'ktsp'),
(11, 'Dasar Kompetensi Kejuruan', 'ktsp'),
(12, 'Kompetensi Kejuruan', 'ktsp'),
(13, 'Muatan Lokal', 'ktsp'),
(14, 'Dasar Program Keahlian', 'k13');

-- --------------------------------------------------------

--
-- Table structure for table `tb_mapel`
--

CREATE TABLE IF NOT EXISTS `tb_mapel` (
  `id_mapel` int(5) NOT NULL,
  `nama_mapel` varchar(100) DEFAULT NULL,
  `kkm_pengetahuan` int(3) DEFAULT NULL,
  `kkm_keterampilan` int(3) DEFAULT NULL,
  `id_user` int(5) DEFAULT NULL,
  `id_kompetensi` int(5) DEFAULT NULL,
  `id_kelas` int(5) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=29 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_mapel`
--

INSERT INTO `tb_mapel` (`id_mapel`, `nama_mapel`, `kkm_pengetahuan`, `kkm_keterampilan`, `id_user`, `id_kompetensi`, `id_kelas`) VALUES
(1, 'Pendidikan Agama dan Budi Pekerti', 75, 75, 15, 1, 2),
(3, 'Bahasa Indonesia', 75, 75, 19, 1, 2),
(4, 'Pendidikan Pancasila dan Kewarganegaraan', 75, 75, 18, 1, 2),
(5, 'Matematika', 75, 75, 28, 1, 2),
(6, 'Sejarah Indonesia', 75, 75, 32, 1, 2),
(7, 'Bahasa Inggris', 75, 75, 20, 1, 2),
(8, 'Seni Budaya', 75, 75, 21, 2, 2),
(9, 'Pendidikan Jasmani Olahraga dan Kesehatan			', 75, 75, 33, 2, 2),
(10, 'Simulasi dan Komunikasi Digital			', 75, 75, 23, 3, 2),
(11, 'Tinjauan Seni			', 75, 75, 22, 3, 2),
(12, 'Dasar-dasar Kreativitas			', 75, 75, 21, 3, 2),
(13, 'Dasar-dasar Seni Rupa', 0, 0, 22, 14, 2),
(14, 'Gambar', 75, 75, 21, 14, 2),
(15, 'Sketsa			', 75, 75, 22, 14, 2),
(17, 'Pendidikan Agama dan Budi Pekerti', NULL, NULL, 15, 1, 1),
(19, 'Pendidikan Agama dan Budi Pekerti', 0, 0, 15, 1, 3),
(20, 'Bahasa Jawa', 75, 75, 31, 4, 2),
(21, 'Dinul Islam', 75, 75, 34, 4, 2),
(22, 'Desain Publikasi', 0, 0, 1, 6, 2),
(23, 'Komputer Grafis', 0, 0, 1, 6, 2),
(24, 'Fotografi', 0, 0, 1, 6, 2),
(25, 'Videografi', 0, 0, 1, 6, 2),
(26, 'Produk Kreatif dan Kewirausahaan', 0, 0, 1, 6, 2),
(27, 'Bahasa Indonesia', 0, 0, 19, 1, 1),
(28, 'Bahasa Indonesia', 0, 0, 19, 1, 3);

-- --------------------------------------------------------

--
-- Table structure for table `tb_pkl`
--

CREATE TABLE IF NOT EXISTS `tb_pkl` (
  `id_pkl` int(5) NOT NULL,
  `id_siswa` int(5) DEFAULT NULL,
  `mitra_pkl` varchar(35) DEFAULT NULL,
  `lokasi_pkl` varchar(35) DEFAULT NULL,
  `lama_pkl` varchar(5) DEFAULT NULL,
  `keterangan_pkl` varchar(35) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_pkl`
--

INSERT INTO `tb_pkl` (`id_pkl`, `id_siswa`, `mitra_pkl`, `lokasi_pkl`, `lama_pkl`, `keterangan_pkl`) VALUES
(2, 4, '-', '-', '-', '-');

-- --------------------------------------------------------

--
-- Table structure for table `tb_prestasi`
--

CREATE TABLE IF NOT EXISTS `tb_prestasi` (
  `id_prestasi` int(5) NOT NULL,
  `jenis_prestasi` varchar(35) DEFAULT NULL,
  `keterangan_prestasi` varchar(35) DEFAULT NULL,
  `id_siswa` int(5) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_prestasi`
--

INSERT INTO `tb_prestasi` (`id_prestasi`, `jenis_prestasi`, `keterangan_prestasi`, `id_siswa`) VALUES
(1, '-', '-', 4),
(2, '-', '-', 4);

-- --------------------------------------------------------

--
-- Table structure for table `tb_sekolah`
--

CREATE TABLE IF NOT EXISTS `tb_sekolah` (
  `id_sekolah` int(5) NOT NULL,
  `nama_sekolah` varchar(50) DEFAULT NULL,
  `alamat_sekolah` varchar(50) DEFAULT NULL,
  `tahun_ajaran` varchar(35) DEFAULT NULL,
  `semester` varchar(10) DEFAULT NULL,
  `kepala_sekolah` varchar(35) DEFAULT NULL,
  `sikap_spiritual` text,
  `niy_kepala` varchar(50) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_sekolah`
--

INSERT INTO `tb_sekolah` (`id_sekolah`, `nama_sekolah`, `alamat_sekolah`, `tahun_ajaran`, `semester`, `kepala_sekolah`, `sikap_spiritual`, `niy_kepala`) VALUES
(1, 'SMK 2 PIRI Yogyakarta', 'Jl. Kemuning 14 Baciro Yogyakarta					', '2017/2018', '2', 'EKO FEBRIANTO, S.E.', 'Selalu bersyukur, selalu berdoa sebelum melakukan kegiatan, toleran pada agama yang berbeda, dan perlu meningkatkan ketaatan beribadah serta selalu bersikap santun peduli, percaya diri dan perlu meningkatkan sikap jujur, disiplin dan tanggung jawab	', '117702037');

-- --------------------------------------------------------

--
-- Table structure for table `tb_siswa`
--

CREATE TABLE IF NOT EXISTS `tb_siswa` (
  `id_siswa` int(5) NOT NULL,
  `nis` int(5) NOT NULL,
  `nama_siswa` varchar(35) DEFAULT NULL,
  `id_kelas` int(3) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_siswa`
--

INSERT INTO `tb_siswa` (`id_siswa`, `nis`, `nama_siswa`, `id_kelas`) VALUES
(1, 2530, 'AHMAD IQBAL ANDIKA PUTRA', 1),
(2, 2531, 'DANY KURNIAWAN', 1),
(3, 2532, 'DIAMOND DAREL REDONDO', 1),
(4, 2521, 'ALDO PRAMUDITYA', 2),
(5, 2522, 'APRILIA SUSANTI', 2),
(6, 2523, 'HAMDAN YUAFI SUKANDAR', 2),
(7, 2524, 'HARIF FITRIANSYAH', 2),
(8, 2525, 'RIZKI NUR  RADITE', 2),
(9, 2526, 'SRI HARTINI', 2),
(10, 2527, 'SWARA PANJI PANGESTU S', 2),
(11, 2528, 'WAHYU ANDETIKA SETIAWAN', 2),
(12, 2529, 'YUNISA PANGESTUTI', 2);

-- --------------------------------------------------------

--
-- Table structure for table `tb_user`
--

CREATE TABLE IF NOT EXISTS `tb_user` (
  `id_user` int(5) NOT NULL,
  `username` varchar(15) NOT NULL,
  `password` varchar(32) DEFAULT NULL,
  `nama_user` varchar(35) DEFAULT NULL,
  `status` enum('WALI KELAS','GURU','BK','ADMIN') DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=35 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_user`
--

INSERT INTO `tb_user` (`id_user`, `username`, `password`, `nama_user`, `status`) VALUES
(1, 'admin', 'admin', 'Administrator', 'ADMIN'),
(2, 'bk', 'bk', 'BK', 'BK'),
(14, '1', 'c977ac', 'EKO FEBRIANTO, S.E', 'WALI KELAS'),
(15, 'fadlan', 'fadlan', 'Drs. FADLAN', 'WALI KELAS'),
(16, '3', '00ee23', 'NURNINGIH, S.Ag', 'WALI KELAS'),
(17, '4', '4834ae', 'Dra. INUK INGGIT MERDEKAWATI', 'WALI KELAS'),
(18, '5', 'e856d1', 'BUDI PRESETYO, S.Pd', 'WALI KELAS'),
(19, '6', '819bb9', 'SITI KHOTIJAH, S.Pd', 'WALI KELAS'),
(20, '7', '196079', 'MIMIN SUKAESIH, S.Pd', 'WALI KELAS'),
(21, '8', 'c4d797', 'TIWI PURBANDARI,S.Pd', 'WALI KELAS'),
(22, 'maryanto', 'maryanto', 'MARYANTO, S.Pd', 'GURU'),
(23, '10', '212981', 'M REZA PRIMADI, S.Pd', 'WALI KELAS'),
(24, '11', '59c8c1', 'TRI HANDAYANI, S.Pd', 'GURU'),
(25, 'estri', 'estri', 'ESTRI WIYANI, S.Pd', 'GURU'),
(26, '13', '6d3e6c', 'Dra. TUTI LESTARI', 'GURU'),
(27, '14', 'f3b273', 'Dra. SHOIMAH', 'GURU'),
(28, '15', 'de8585', 'NENI SUPIYANTI, S.Pd', 'GURU'),
(29, '16', 'e60915', 'PUNGKY INDRA P. S.Pd', 'GURU'),
(30, '17', 'b90592', 'WAHYU SANJAYA, S.Pd', 'GURU'),
(31, '18', '6096aa', 'ARIS HIDAYAT, S.Pd', 'GURU'),
(32, '19', 'debe22', 'SUSI HARTINI,S.Pd', 'GURU'),
(33, '20', '25977b', 'DANANG DWI PURWANTO, S.Pd. Jas, M.P', 'GURU'),
(34, '21', '5b2fe9', 'AGUS SUMANTO', 'GURU');

-- --------------------------------------------------------

--
-- Structure for view `keter`
--
DROP TABLE IF EXISTS `keter`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `keter` AS select `s`.`nama_siswa` AS `nama`,`m`.`nama_mapel` AS `mapel`,`d`.`keterampilan_akhir` AS `nilai`,`k`.`id_user` AS `wali` from (((`tb_siswa` `s` join `tb_kelas` `k` on((`s`.`id_kelas` = `k`.`id_kelas`))) join `tb_detail_nilai` `d` on((`s`.`id_siswa` = `d`.`id_siswa`))) join `tb_mapel` `m` on((`d`.`id_mapel` = `m`.`id_mapel`))) order by `s`.`nama_siswa`,`m`.`nama_mapel`;

-- --------------------------------------------------------

--
-- Structure for view `penge`
--
DROP TABLE IF EXISTS `penge`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `penge` AS select `s`.`nama_siswa` AS `nama`,`m`.`nama_mapel` AS `mapel`,`d`.`pengetahuan_akhir` AS `nilai`,`k`.`id_user` AS `wali` from (((`tb_siswa` `s` join `tb_kelas` `k` on((`s`.`id_kelas` = `k`.`id_kelas`))) join `tb_detail_nilai` `d` on((`s`.`id_siswa` = `d`.`id_siswa`))) join `tb_mapel` `m` on((`d`.`id_mapel` = `m`.`id_mapel`))) order by `s`.`nama_siswa`,`m`.`nama_mapel`;

-- --------------------------------------------------------

--
-- Structure for view `pengetahuan`
--
DROP TABLE IF EXISTS `pengetahuan`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `pengetahuan` AS select `s`.`nama_siswa` AS `nama`,`m`.`nama_mapel` AS `mapel`,`d`.`pengetahuan_akhir` AS `nilai` from ((`tb_siswa` `s` join `tb_detail_nilai` `d` on((`s`.`id_siswa` = `d`.`id_siswa`))) join `tb_mapel` `m` on((`d`.`id_mapel` = `m`.`id_mapel`))) order by `s`.`nama_siswa`,`m`.`nama_mapel`;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_detail_nilai`
--
ALTER TABLE `tb_detail_nilai`
  ADD PRIMARY KEY (`id_detail_nilai`), ADD KEY `kesiswa` (`id_siswa`), ADD KEY `kemapel` (`id_mapel`);

--
-- Indexes for table `tb_ekstra`
--
ALTER TABLE `tb_ekstra`
  ADD PRIMARY KEY (`id_ekstra`);

--
-- Indexes for table `tb_kelas`
--
ALTER TABLE `tb_kelas`
  ADD PRIMARY KEY (`id_kelas`), ADD KEY `user` (`id_user`), ADD KEY `jurusan` (`kode_jurusan`);

--
-- Indexes for table `tb_kepribadian`
--
ALTER TABLE `tb_kepribadian`
  ADD PRIMARY KEY (`id_kepribadian`), ADD KEY `pribadi` (`id_siswa`), ADD KEY `ekstra` (`id_ekstra`);

--
-- Indexes for table `tb_keterangan`
--
ALTER TABLE `tb_keterangan`
  ADD PRIMARY KEY (`id_keterangan_mapel`), ADD KEY `ket_mapel` (`id_mapel`);

--
-- Indexes for table `tb_kompetensi`
--
ALTER TABLE `tb_kompetensi`
  ADD PRIMARY KEY (`id_kompetensi`);

--
-- Indexes for table `tb_mapel`
--
ALTER TABLE `tb_mapel`
  ADD PRIMARY KEY (`id_mapel`), ADD KEY `keguru` (`id_user`), ADD KEY `kekompetensi` (`id_kompetensi`), ADD KEY `kekelas` (`id_kelas`);

--
-- Indexes for table `tb_pkl`
--
ALTER TABLE `tb_pkl`
  ADD PRIMARY KEY (`id_pkl`), ADD KEY `siswa` (`id_siswa`);

--
-- Indexes for table `tb_prestasi`
--
ALTER TABLE `tb_prestasi`
  ADD PRIMARY KEY (`id_prestasi`), ADD KEY `prestasi_siswa` (`id_siswa`);

--
-- Indexes for table `tb_sekolah`
--
ALTER TABLE `tb_sekolah`
  ADD PRIMARY KEY (`id_sekolah`);

--
-- Indexes for table `tb_siswa`
--
ALTER TABLE `tb_siswa`
  ADD PRIMARY KEY (`id_siswa`), ADD UNIQUE KEY `nis` (`nis`), ADD KEY `kelas` (`id_kelas`);

--
-- Indexes for table `tb_user`
--
ALTER TABLE `tb_user`
  ADD PRIMARY KEY (`id_user`), ADD UNIQUE KEY `username` (`username`) USING HASH;

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_detail_nilai`
--
ALTER TABLE `tb_detail_nilai`
  MODIFY `id_detail_nilai` int(5) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=41;
--
-- AUTO_INCREMENT for table `tb_ekstra`
--
ALTER TABLE `tb_ekstra`
  MODIFY `id_ekstra` int(5) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `tb_kelas`
--
ALTER TABLE `tb_kelas`
  MODIFY `id_kelas` int(5) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `tb_kepribadian`
--
ALTER TABLE `tb_kepribadian`
  MODIFY `id_kepribadian` int(5) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `tb_keterangan`
--
ALTER TABLE `tb_keterangan`
  MODIFY `id_keterangan_mapel` int(5) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=39;
--
-- AUTO_INCREMENT for table `tb_kompetensi`
--
ALTER TABLE `tb_kompetensi`
  MODIFY `id_kompetensi` int(5) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT for table `tb_mapel`
--
ALTER TABLE `tb_mapel`
  MODIFY `id_mapel` int(5) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=29;
--
-- AUTO_INCREMENT for table `tb_pkl`
--
ALTER TABLE `tb_pkl`
  MODIFY `id_pkl` int(5) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `tb_prestasi`
--
ALTER TABLE `tb_prestasi`
  MODIFY `id_prestasi` int(5) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `tb_sekolah`
--
ALTER TABLE `tb_sekolah`
  MODIFY `id_sekolah` int(5) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `tb_siswa`
--
ALTER TABLE `tb_siswa`
  MODIFY `id_siswa` int(5) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `tb_user`
--
ALTER TABLE `tb_user`
  MODIFY `id_user` int(5) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=35;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `tb_detail_nilai`
--
ALTER TABLE `tb_detail_nilai`
ADD CONSTRAINT `kemapel` FOREIGN KEY (`id_mapel`) REFERENCES `tb_mapel` (`id_mapel`) ON DELETE CASCADE ON UPDATE CASCADE,
ADD CONSTRAINT `kesiswa` FOREIGN KEY (`id_siswa`) REFERENCES `tb_siswa` (`id_siswa`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tb_kelas`
--
ALTER TABLE `tb_kelas`
ADD CONSTRAINT `user` FOREIGN KEY (`id_user`) REFERENCES `tb_user` (`id_user`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tb_kepribadian`
--
ALTER TABLE `tb_kepribadian`
ADD CONSTRAINT `ekstra` FOREIGN KEY (`id_ekstra`) REFERENCES `tb_ekstra` (`id_ekstra`) ON DELETE CASCADE ON UPDATE CASCADE,
ADD CONSTRAINT `pribadi` FOREIGN KEY (`id_siswa`) REFERENCES `tb_siswa` (`id_siswa`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tb_keterangan`
--
ALTER TABLE `tb_keterangan`
ADD CONSTRAINT `ket_mapel` FOREIGN KEY (`id_mapel`) REFERENCES `tb_mapel` (`id_mapel`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tb_mapel`
--
ALTER TABLE `tb_mapel`
ADD CONSTRAINT `keguru` FOREIGN KEY (`id_user`) REFERENCES `tb_user` (`id_user`) ON DELETE CASCADE ON UPDATE CASCADE,
ADD CONSTRAINT `kekelas` FOREIGN KEY (`id_kelas`) REFERENCES `tb_kelas` (`id_kelas`) ON DELETE CASCADE ON UPDATE CASCADE,
ADD CONSTRAINT `kekompetensi` FOREIGN KEY (`id_kompetensi`) REFERENCES `tb_kompetensi` (`id_kompetensi`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tb_pkl`
--
ALTER TABLE `tb_pkl`
ADD CONSTRAINT `siswa` FOREIGN KEY (`id_siswa`) REFERENCES `tb_siswa` (`id_siswa`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tb_prestasi`
--
ALTER TABLE `tb_prestasi`
ADD CONSTRAINT `prestasi_siswa` FOREIGN KEY (`id_siswa`) REFERENCES `tb_siswa` (`id_siswa`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tb_siswa`
--
ALTER TABLE `tb_siswa`
ADD CONSTRAINT `kelas` FOREIGN KEY (`id_kelas`) REFERENCES `tb_kelas` (`id_kelas`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
