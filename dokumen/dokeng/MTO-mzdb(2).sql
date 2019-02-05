-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Dec 21, 2018 at 12:58 AM
-- Server version: 10.1.34-MariaDB
-- PHP Version: 7.0.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mzdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `client`
--

CREATE TABLE `client` (
  `id` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `alamat` varchar(200) NOT NULL,
  `telepon` int(11) NOT NULL,
  `pic` varchar(40) NOT NULL,
  `kontak_pic` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `client`
--

INSERT INTO `client` (`id`, `nama`, `alamat`, `telepon`, `pic`, `kontak_pic`) VALUES
(1, 'PT PLN (Persero)', '-', 22898989, 'Pak Eko', 809898898),
(2, 'PT Telkom ', '-', 22898989, 'Pak Eka', 8989989);

-- --------------------------------------------------------

--
-- Table structure for table `client_respon`
--

CREATE TABLE `client_respon` (
  `id` int(11) NOT NULL,
  `material_id` int(11) NOT NULL,
  `isi` varchar(250) NOT NULL,
  `file_respon` varchar(110) DEFAULT NULL,
  `tgl_create` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `client_respon`
--

INSERT INTO `client_respon` (`id`, `material_id`, `isi`, `file_respon`, `tgl_create`) VALUES
(16, 43, 'dfddsfsdfsdfsdf', NULL, '2018-12-12'),
(17, 44, 'dsafsdfasfsd', 'mzdb (2).sql', '2018-12-13'),
(18, 45, 'SADASD', NULL, '2018-12-13'),
(19, 46, 'sdfsdfsdf', NULL, '2018-12-16'),
(20, 46, 'sdfsdfsdf', NULL, '2018-12-16'),
(21, 47, 'sadasdasd', NULL, '2018-12-16'),
(22, 48, 'adsadasd', NULL, '2018-12-18'),
(23, 44, 'dsfsdf', NULL, '2018-12-18'),
(24, 49, 'dsfsdf', NULL, '2018-12-18');

-- --------------------------------------------------------

--
-- Table structure for table `dok_eng`
--

CREATE TABLE `dok_eng` (
  `id_material` int(11) NOT NULL,
  `file_mto` varchar(110) NOT NULL,
  `file_dwg` varchar(100) NOT NULL,
  `file_spec` varchar(110) DEFAULT NULL,
  `file_datasheet` varchar(110) DEFAULT NULL,
  `deskripsi` text,
  `plan_approve` date DEFAULT NULL,
  `actual_approve` date DEFAULT NULL,
  `tgl_rejected` date DEFAULT NULL,
  `tgl_create` date DEFAULT NULL,
  `plan_permintaan` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `dok_eng`
--

INSERT INTO `dok_eng` (`id_material`, `file_mto`, `file_dwg`, `file_spec`, `file_datasheet`, `deskripsi`, `plan_approve`, `actual_approve`, `tgl_rejected`, `tgl_create`, `plan_permintaan`) VALUES
(43, 'ARIS.docx', 'Investasi - Aya.xlsx', 'CONTOH LAMPIRAN.pdf', 'kabisaaris.xlsx', NULL, '2018-12-26', '2018-12-12', NULL, NULL, NULL),
(44, '', '', NULL, NULL, NULL, '2018-12-27', '2018-12-18', '2018-12-18', NULL, NULL),
(45, '', '', NULL, NULL, NULL, '2018-12-27', '2018-12-13', NULL, NULL, NULL),
(46, 'MTS.graphml', '', NULL, NULL, NULL, '2018-12-30', '2018-12-16', NULL, NULL, NULL),
(47, 'MTS.graphml', '', NULL, NULL, NULL, '2018-12-30', NULL, '2018-12-16', NULL, NULL),
(48, 'am.sql', '', NULL, NULL, NULL, '2019-01-01', '2018-12-18', NULL, NULL, NULL),
(49, '', '', NULL, NULL, NULL, '2019-01-01', '2018-12-18', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `hasilinspeksiwh`
--

CREATE TABLE `hasilinspeksiwh` (
  `id_material` int(11) NOT NULL,
  `lokasi` varchar(111) NOT NULL,
  `file_hasil_inspeksi` varchar(110) NOT NULL,
  `hasil_inspeksi` varchar(100) NOT NULL,
  `pic` varchar(100) NOT NULL,
  `tgl_create` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `hasilinspeksiwh`
--

INSERT INTO `hasilinspeksiwh` (`id_material`, `lokasi`, `file_hasil_inspeksi`, `hasil_inspeksi`, `pic`, `tgl_create`) VALUES
(43, '', 'mzdb (2).sql', 'gdfsgdsgsdgsdf', '51', '2018-12-13'),
(44, 'sdfsdfsdf', 'mzdb (2).sql', 'sddfsdf', '51', '2018-12-18'),
(45, '', 'mzdb.sql', 'dfssfsdf', '51', '2018-12-13'),
(48, 'sadasdasd', 'am.sql', 'sadsadas', '51', '2018-12-18');

-- --------------------------------------------------------

--
-- Table structure for table `hasilpni`
--

CREATE TABLE `hasilpni` (
  `id` int(11) NOT NULL,
  `id_material` int(11) NOT NULL,
  `status` varchar(110) NOT NULL,
  `file` varchar(100) NOT NULL,
  `desk` text NOT NULL,
  `tgl_create` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `hasilpni`
--

INSERT INTO `hasilpni` (`id`, `id_material`, `status`, `file`, `desk`, `tgl_create`) VALUES
(1, 2, '', 'PMO ayaa.pdf', 'sdfsdfsdfsdf', '2018-11-19'),
(2, 36, '', 'TTS SANLAT 2017 FIX.pptx', 'sdfadsfasfasfsadfs', '2018-11-20'),
(3, 14, 'Lulus', 'ceklist TA(AutoRecovered).xlsx', 'dasfasfasd', '2018-12-02'),
(4, 14, 'Lulus', 'ceklist TA(AutoRecovered).xlsx', 'saDSAas', '2018-12-02'),
(5, 14, 'Lulus', 'ceklist TA(AutoRecovered).xlsx', 'ADFASDFASD', '2018-12-02'),
(6, 14, 'Lulus', 'ceklist TA(AutoRecovered).xlsx', 'dfssdfsd', '2018-12-02'),
(7, 14, 'Lulus', 'ceklist TA(AutoRecovered).xlsx', 'dsdfsdf', '2018-12-02'),
(8, 14, 'Lulus', 'ceklist TA(AutoRecovered).xlsx', 'dfssdafsd', '2018-12-02'),
(9, 14, 'Lulus', 'ceklist TA(AutoRecovered).xlsx', 'dsaadfadf', '2018-12-02'),
(10, 11, 'Repair', 'ceklist TA(AutoRecovered).xlsx', 'adfsdfasd', '2018-12-02'),
(11, 40, 'Repair', 'PRICE LIST.xlsx', 'dsdsfsdfsd', '2018-12-10');

-- --------------------------------------------------------

--
-- Table structure for table `hasilrepair`
--

CREATE TABLE `hasilrepair` (
  `id` int(11) NOT NULL,
  `id_material` int(11) NOT NULL,
  `file` varchar(100) NOT NULL,
  `desk` text NOT NULL,
  `tgl_create` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `hasilrepair`
--

INSERT INTO `hasilrepair` (`id`, `id_material`, `file`, `desk`, `tgl_create`) VALUES
(1, 2, 'Manrisk - Aya.pdf', 'sdafasfasfsadfasdf', '2018-11-19'),
(2, 36, 'Salsabila Comp.jpg', 'dsafasdfadfsad', '2018-11-20'),
(3, 11, 'ceklist TA(AutoRecovered).xlsx', 'jlkjjljl', '2018-12-02'),
(4, 40, 'PRICE LIST.xlsx', 'fdsafasfasd', '2018-12-10');

-- --------------------------------------------------------

--
-- Table structure for table `irn`
--

CREATE TABLE `irn` (
  `id_material` int(11) NOT NULL,
  `irn` varchar(100) NOT NULL,
  `actual_release` date DEFAULT NULL,
  `plan_release` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `irn`
--

INSERT INTO `irn` (`id_material`, `irn`, `actual_release`, `plan_release`) VALUES
(1, '3423242324', '2018-11-19', NULL),
(2, '3423242324', '2018-11-19', NULL),
(3, 'jhj6767676', '2018-11-20', NULL),
(4, '90238490238', '2018-12-02', NULL),
(5, 'fdsafsfasfd', '2018-12-10', NULL),
(43, '3423242324', '2018-12-12', NULL),
(44, ';k;k;', '2018-12-18', NULL),
(45, '223423432', '2018-12-13', NULL),
(48, 'asdasd', '2018-12-18', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `kategori`
--

CREATE TABLE `kategori` (
  `id` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `singkatan` varchar(110) NOT NULL,
  `desk` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kategori`
--

INSERT INTO `kategori` (`id`, `nama`, `singkatan`, `desk`) VALUES
(1, 'Material Civil', 'CIV', NULL),
(2, 'Pipa & Flange', 'PIP', NULL),
(3, 'Instrument & Electrical', 'IEL', NULL),
(4, 'Material Lainnya', 'OTH', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `kom`
--

CREATE TABLE `kom` (
  `id_material` int(11) NOT NULL,
  `tanggal` date DEFAULT NULL,
  `actual_kom` date DEFAULT NULL,
  `tempat` varchar(100) NOT NULL,
  `tgl_create` date NOT NULL,
  `pic` int(11) NOT NULL,
  `keterangan` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kom`
--

INSERT INTO `kom` (`id_material`, `tanggal`, `actual_kom`, `tempat`, `tgl_create`, `pic`, `keterangan`) VALUES
(43, '2018-12-31', '2018-12-12', 'Wika tower 2', '2018-12-12', 51, 'asdasdasdasdasdasdasd'),
(44, '2018-12-29', '2018-12-18', 'klk', '2018-12-18', 51, 'klklkl'),
(45, '2018-12-31', '2018-12-13', 'asdasdas', '2018-12-13', 51, 'dasdasdasd'),
(48, '2018-12-14', '2018-12-18', 'sadad', '2018-12-18', 51, 'sadasdasd');

-- --------------------------------------------------------

--
-- Table structure for table `kontrak`
--

CREATE TABLE `kontrak` (
  `id_material` int(11) NOT NULL,
  `file_kontrak` varchar(110) NOT NULL,
  `pic` varchar(250) NOT NULL,
  `deskripsi` varchar(250) NOT NULL,
  `tgl_submit` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kontrak`
--

INSERT INTO `kontrak` (`id_material`, `file_kontrak`, `pic`, `deskripsi`, `tgl_submit`) VALUES
(43, 'password aris connect.pdf', '51', '', '2018-12-12'),
(44, 'am.sql', '51', '', '2018-12-18'),
(45, 'MTS.graphml', '51', '', '2018-12-13'),
(48, 'am.sql', '51', '', '2018-12-18');

-- --------------------------------------------------------

--
-- Table structure for table `log`
--

CREATE TABLE `log` (
  `id` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `kegiatan` text NOT NULL,
  `tgl` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `log`
--

INSERT INTO `log` (`id`, `id_user`, `kegiatan`, `tgl`) VALUES
(1, 51, 'Mengajukan material baru', '2018-12-16 00:00:00'),
(2, 51, 'Memberikan approval untuk pengajuan material  kljljlkjlk', '2018-12-16 00:00:00'),
(3, 51, 'Memberikan penolakan untuk pengajuan material  kljljlkjlk', '2018-12-16 00:00:00'),
(4, 51, 'Berhasil login ke sistem', '2018-12-18 00:00:00'),
(5, 51, 'Melihat log material Materia Z1', '2018-12-18 14:20:27'),
(6, 51, 'Melihat log material Materia Z1', '2018-12-18 16:00:29'),
(7, 51, 'Mengajukan material baru', '2018-12-18 00:00:00'),
(8, 51, 'Memberikan approval untuk pengajuan material  Pengki Ajaib', '2018-12-18 00:00:00'),
(9, 51, 'Berhasil login ke sistem', '2018-12-18 00:00:00'),
(10, 51, 'Mengupdate dokumen engineering untuk material Pipa', '2018-12-18 00:00:00'),
(11, 51, 'Memberikan approval untuk pengajuan material  Pipa', '2018-12-18 00:00:00'),
(12, 51, 'Mengajukan material baru', '2018-12-18 00:00:00'),
(13, 51, 'Memberikan approval untuk pengajuan material  sdfsdf', '2018-12-18 00:00:00'),
(14, 51, 'Upload dokumen permintaan penawaran vendor unuk pengadaan material  Pengki Ajaib', '2018-12-18 00:00:00'),
(15, 51, 'Input penawaran untuk tender pengadaan material  Pengki Ajaib', '2018-12-18 00:00:00'),
(16, 51, 'Menutup tender untuk material Pengki Ajaib', '2018-12-18 00:00:00'),
(17, 51, 'Menentukan pemenang tender untuk  Pengki Ajaib', '2018-12-18 00:00:00'),
(18, 51, 'Upload dokumen kontrak untuk pengadaan material  Pengki Ajaib', '2018-12-18 00:00:00'),
(19, 51, 'Membuat jadwal dan undangan untuk pelaksanaan Kick of Meeting pelaksanaan pengadaan material  Pengki Ajaib', '2018-12-18 00:00:00'),
(20, 51, 'Mengkonfirmasi undangan Kick of Meeting untuk pengdaan material  Pengki Ajaib', '2018-12-18 00:00:00'),
(21, 51, 'Upload dokumen Production and Inspection Plan untuk pengadaan material  Pengki Ajaib', '2018-12-18 00:00:00'),
(22, 51, 'Update progres 100% untuk pengadaan material  Pengki Ajaib', '2018-12-18 00:00:00'),
(23, 51, 'Upload dokumen hasil Inspeksi dari QC untuk material  Pengki Ajaib untuk status LULUS', '2018-12-18 17:58:51'),
(24, 51, 'Input IRN untuk material  Pengki Ajaib', '2018-12-18 00:00:00'),
(25, 51, 'Input detail pengiriman untuk material  Pengki Ajaib', '2018-12-18 00:00:00'),
(26, 51, 'Konfirmasi penerimaan material  Pengki Ajaib', '2018-12-18 00:00:00'),
(27, 51, 'Menginput hasil inspeksi di warehouse untuk material  Pengki Ajaib', '2018-12-18 00:00:00'),
(28, 51, 'Upload dokumen permintaan penawaran vendor unuk pengadaan material  Pipa', '2018-12-18 00:00:00'),
(29, 51, 'Input penawaran untuk tender pengadaan material  Pipa', '2018-12-18 00:00:00'),
(30, 51, 'Menutup tender untuk material Pipa', '2018-12-18 00:00:00'),
(31, 51, 'Menentukan pemenang tender untuk  Pipa', '2018-12-18 00:00:00'),
(32, 51, 'Upload dokumen kontrak untuk pengadaan material  Pipa', '2018-12-18 00:00:00'),
(33, 51, 'Membuat jadwal dan undangan untuk pelaksanaan Kick of Meeting pelaksanaan pengadaan material  Pipa', '2018-12-18 00:00:00'),
(34, 51, 'Mengkonfirmasi undangan Kick of Meeting untuk pengdaan material  Pipa', '2018-12-18 00:00:00'),
(35, 51, 'Upload dokumen Production and Inspection Plan untuk pengadaan material  Pipa', '2018-12-18 00:00:00'),
(36, 51, 'Update progres 100% untuk pengadaan material  Pipa', '2018-12-18 00:00:00'),
(37, 51, 'Upload dokumen hasil Inspeksi dari QC untuk material  Pipa untuk status LULUS', '2018-12-18 22:43:48'),
(38, 51, 'Input IRN untuk material  Pipa', '2018-12-18 00:00:00'),
(39, 51, 'Input detail pengiriman untuk material  Pipa', '2018-12-18 00:00:00'),
(40, 51, 'Konfirmasi penerimaan material  Pipa', '2018-12-18 00:00:00'),
(41, 51, 'Menginput hasil inspeksi di warehouse untuk material  Pipa', '2018-12-18 00:00:00'),
(42, 51, 'Melihat log material sdfsdf', '2018-12-18 23:13:00'),
(43, 51, 'Melihat log material sdfsdf', '2018-12-18 23:18:55'),
(44, 51, 'Melihat log material sdfsdf', '2018-12-18 23:21:59'),
(45, 51, 'Melihat log material sdfsdf', '2018-12-18 23:23:01'),
(46, 51, 'Melihat log material sdfsdf', '2018-12-18 23:23:55'),
(47, 51, 'Melihat log material sdfsdf', '2018-12-18 23:24:36'),
(48, 51, 'Melihat log material sdfsdf', '2018-12-18 23:25:17'),
(49, 51, 'Melihat log material Materia Z1', '2018-12-18 23:25:32'),
(50, 51, 'Melihat detail material kljljlkjlk', '2018-12-18 23:25:44'),
(51, 51, 'Melihat detail material Materia Z1', '2018-12-18 23:26:00'),
(52, 51, 'Melihat detail material sdfsdf', '2018-12-18 23:34:52'),
(53, 51, 'Melihat detail material sdfsdf', '2018-12-18 23:35:12'),
(54, 51, 'Berhasil login ke sistem', '2018-12-20 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `material`
--

CREATE TABLE `material` (
  `id` int(11) NOT NULL,
  `proyek` varchar(110) DEFAULT NULL,
  `kategori` int(11) DEFAULT NULL,
  `client` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `status` float DEFAULT NULL,
  `progres` int(11) DEFAULT NULL,
  `pemenang` varchar(110) DEFAULT NULL,
  `stok` int(11) DEFAULT NULL,
  `status_tender` int(11) NOT NULL,
  `plan_tender` date DEFAULT NULL,
  `plan_kontrak` date DEFAULT NULL,
  `plan_kom` date DEFAULT NULL,
  `plan_irn` date NOT NULL,
  `plan_pengiriman` date DEFAULT NULL,
  `plan_penerimaan` date NOT NULL,
  `plan_inspeksiwh` date NOT NULL,
  `plan_finish` date NOT NULL,
  `actual_finish` date NOT NULL,
  `create_date` date NOT NULL,
  `last_update` date NOT NULL,
  `pic` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `material`
--

INSERT INTO `material` (`id`, `proyek`, `kategori`, `client`, `nama`, `status`, `progres`, `pemenang`, `stok`, `status_tender`, `plan_tender`, `plan_kontrak`, `plan_kom`, `plan_irn`, `plan_pengiriman`, `plan_penerimaan`, `plan_inspeksiwh`, `plan_finish`, `actual_finish`, `create_date`, `last_update`, `pic`) VALUES
(43, NULL, 2, 1, 'Materia Z1', 15, NULL, '51', 124, 2, '2018-12-14', '2018-12-17', '2018-12-14', '2018-12-15', '2018-12-19', '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00', '2018-12-12', '2018-12-12', 51),
(44, NULL, 2, 1, 'Pipa', 15, NULL, '51', 1, 2, '2018-12-20', '2018-12-23', NULL, '2018-12-21', '2018-12-25', '2018-12-29', '0000-00-00', '2018-12-20', '2018-12-18', '2018-12-18', '2018-12-18', 51),
(45, NULL, 1, 1, 'DASDASD', 15, NULL, '4', 1, 2, '2018-12-15', '2018-12-18', NULL, '2018-12-16', '2018-12-20', '0000-00-00', '2018-12-15', '0000-00-00', '0000-00-00', '2018-12-13', '2018-12-13', 51),
(46, NULL, 1, 1, 'kljljlkjlk', 2, NULL, NULL, NULL, 0, '2018-12-18', NULL, NULL, '0000-00-00', NULL, '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00', '2018-12-16', '2018-12-16', 51),
(47, NULL, 1, 1, 'kljljlkjlk', 3, NULL, NULL, NULL, 0, NULL, NULL, NULL, '0000-00-00', NULL, '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00', '2018-12-16', '2018-12-16', 51),
(48, 'CVL-3440-XX', 1, 0, 'Pengki Ajaib', 15, NULL, '51', 12, 2, '2018-12-20', '2018-12-23', NULL, '2018-12-21', '2018-12-25', '2018-12-29', '0000-00-00', '2018-12-20', '2018-12-18', '2018-12-18', '2018-12-18', 51),
(49, 'fsdfsd', 2, 0, 'sdfsdf', 2, NULL, NULL, NULL, 0, '2018-12-20', NULL, NULL, '0000-00-00', NULL, '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00', '2018-12-18', '2018-12-18', 51);

-- --------------------------------------------------------

--
-- Table structure for table `penawaran`
--

CREATE TABLE `penawaran` (
  `id` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `id_material` int(11) NOT NULL,
  `file_administrasi` varchar(250) NOT NULL,
  `file_teknis` varchar(250) DEFAULT NULL,
  `review_engineering` varchar(110) NOT NULL,
  `file_review_eng` varchar(110) NOT NULL,
  `deskripsi` varchar(250) NOT NULL,
  `tgl_create` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `penawaran`
--

INSERT INTO `penawaran` (`id`, `id_user`, `id_material`, `file_administrasi`, `file_teknis`, `review_engineering`, `file_review_eng`, `deskripsi`, `tgl_create`) VALUES
(1, 4, 2, 'MTS.graphml', NULL, '', '', 'asdfsadfasdfasd', '2018-11-16'),
(2, 6, 2, 'list table.ods', NULL, '', '', 'fwefwerwf', '2018-11-19'),
(3, 4, 36, 'Peralatan.pdf', NULL, '', '', 'bala bala bala bala bala', '2018-11-20'),
(4, 6, 36, 'modulpwdlaravel.pdf', NULL, '', '', 'bala bala balabasdjflkasjdfanlksdkflasjflkjadsjfljadslkfjlkdsajf', '2018-11-20'),
(5, 51, 36, 'IFIXUP NOTA.xlsm', NULL, '', '', 'lkasjfklasjdfkljasdlkfjdsalkf lkdsajfjsalkfjlsadkjf ljsdalkfjklasdfjadtk ljklsdajfklsajfdlkasdjl', '2018-11-20'),
(6, 51, 40, 'PRICE LIST.xlsx', 'IFIXUP NOTA.xlsm', '', '', 'dsgsgfdsdfsd', '2018-12-10'),
(7, 4, 40, 'PRICE LIST.xlsx', 'PRICE LIST.xlsx', '', '', 'dfsfdsfsdf', '2018-12-10'),
(8, 51, 42, 'lapooran service.xlsx', 'ACARA BERSAMA FOKALISMAS Qcard.docx', '', '', 'hlkhlkj', '2018-12-11'),
(9, 51, 43, 'CV_Muhamad Ibnu Q.pdf', 'penguin-156616_960_720.png', '', 'HC.pdf', 'dsfsdfsdfsdf', '2018-12-12'),
(10, 4, 45, 'db.graphml', 'mzdb.sql', '', '', 'sdafasdfsadf', '2018-12-13'),
(11, 51, 45, 'mzdb.sql', 'MTS.graphml', '', '', 'adadasdasdasd', '2018-12-13'),
(12, 51, 48, 'am.sql', 'mzdb(1).sql', '', '', 'esdsdsdfsdf', '2018-12-18'),
(13, 51, 44, 'am.sql', 'mzdb(1).sql', '', '', 'jkhkjh', '2018-12-18');

-- --------------------------------------------------------

--
-- Table structure for table `pengajuan`
--

CREATE TABLE `pengajuan` (
  `id` int(11) NOT NULL,
  `id_material` int(11) NOT NULL,
  `id_pengaju` int(11) NOT NULL,
  `jumlah` int(11) NOT NULL,
  `disetujui` int(11) NOT NULL,
  `pic_wh` int(11) NOT NULL,
  `tgl_setujui` date NOT NULL,
  `diterima` int(11) NOT NULL,
  `id_penerima` int(11) NOT NULL,
  `tgl_diterima` date NOT NULL,
  `tgl_create` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `pengiriman`
--

CREATE TABLE `pengiriman` (
  `id_material` int(11) NOT NULL,
  `actual_pengiriman` date NOT NULL,
  `plan_penerimaan` date NOT NULL,
  `tujuan` varchar(100) NOT NULL,
  `status` varchar(100) NOT NULL,
  `pic` int(100) NOT NULL,
  `actual_penerimaan` date NOT NULL,
  `tgl_create` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pengiriman`
--

INSERT INTO `pengiriman` (`id_material`, `actual_pengiriman`, `plan_penerimaan`, `tujuan`, `status`, `pic`, `actual_penerimaan`, `tgl_create`) VALUES
(43, '0000-00-00', '0000-00-00', 'Warehouse Pusat', '', 51, '2018-12-12', '2018-12-12'),
(44, '0000-00-00', '2018-12-29', 'Warehouse Pusat', '', 51, '2018-12-18', '2018-12-18'),
(45, '0000-00-00', '0000-00-00', 'Warehouse Pusat', '', 51, '2018-12-13', '2018-12-13'),
(48, '0000-00-00', '2018-12-29', 'Warehouse Pusat', '', 51, '2018-12-18', '2018-12-18');

-- --------------------------------------------------------

--
-- Table structure for table `penilaian`
--

CREATE TABLE `penilaian` (
  `id` int(11) NOT NULL,
  `aspek_penilaian` varchar(100) NOT NULL,
  `hari` int(11) NOT NULL,
  `tgl_create` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `permintaan`
--

CREATE TABLE `permintaan` (
  `id_material` int(11) NOT NULL,
  `file` varchar(100) NOT NULL,
  `status` varchar(50) DEFAULT NULL,
  `deskripsi` varchar(300) DEFAULT NULL,
  `deadline_tutup` date DEFAULT NULL,
  `actual_tutup` date DEFAULT NULL,
  `plan_pemenang` date DEFAULT NULL,
  `actual_pemenang` date DEFAULT NULL,
  `tgl_create` date NOT NULL,
  `pic` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `permintaan`
--

INSERT INTO `permintaan` (`id_material`, `file`, `status`, `deskripsi`, `deadline_tutup`, `actual_tutup`, `plan_pemenang`, `actual_pemenang`, `tgl_create`, `pic`) VALUES
(43, 'Presentation1.pptx', NULL, 'dsfsdfsdfsd', '2018-12-22', NULL, NULL, '2018-12-12', '2018-12-12', 51),
(44, 'am.sql', NULL, 'gjgjhg', '2018-12-28', '2018-12-18', '2019-01-04', '2018-12-18', '2018-12-18', 51),
(45, 'db.graphml', NULL, 'SADADASD', '2018-12-23', '2018-12-13', '2018-12-30', '2018-12-13', '2018-12-13', 51),
(48, 'mzdb (2).sql', NULL, 'dsfsdfsdf', '2018-12-28', '2018-12-18', '2019-01-04', '2018-12-18', '2018-12-18', 51);

-- --------------------------------------------------------

--
-- Table structure for table `pni`
--

CREATE TABLE `pni` (
  `id_material` int(11) NOT NULL,
  `desk` text NOT NULL,
  `pic` int(11) DEFAULT NULL,
  `file` varchar(100) DEFAULT NULL,
  `pic_qc` int(11) DEFAULT NULL,
  `plan_produksi` date NOT NULL,
  `actual_produksi` date NOT NULL,
  `progres` varchar(110) NOT NULL,
  `plan_inspeksi` date NOT NULL,
  `actual_inspeksi` date DEFAULT NULL,
  `hasil_inspeksi` varchar(100) DEFAULT NULL,
  `status_inspeksi` varchar(100) DEFAULT NULL,
  `file_hasil_inspeksi` varchar(100) DEFAULT NULL,
  `plan_repair` date DEFAULT NULL,
  `actual_repair` date DEFAULT NULL,
  `file_repair` date DEFAULT NULL,
  `tgl_create` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pni`
--

INSERT INTO `pni` (`id_material`, `desk`, `pic`, `file`, `pic_qc`, `plan_produksi`, `actual_produksi`, `progres`, `plan_inspeksi`, `actual_inspeksi`, `hasil_inspeksi`, `status_inspeksi`, `file_hasil_inspeksi`, `plan_repair`, `actual_repair`, `file_repair`, `tgl_create`) VALUES
(43, 'ax', 51, 'CV_Muhamad Ibnu Q.pdf', 51, '2019-01-05', '2018-12-12', '100', '2018-12-14', NULL, 'sdfsdffdsf', 'Lulus', 'HC.pdf', NULL, NULL, NULL, '2018-12-12'),
(44, 'lkjkljlk', 51, 'am.sql', 51, '2018-12-22', '2018-12-18', '100', '2018-12-20', '2018-12-18', 'hlhlhlk', 'Lulus', 'db.graphml', NULL, NULL, NULL, '2018-12-18'),
(45, '', 51, '', 51, '0000-00-00', '2018-12-13', '100', '2018-12-15', NULL, 'dsafasdfasdfsdfsdf', 'Lulus', 'db.graphml', NULL, NULL, NULL, '2018-12-13'),
(48, 'dssadasd', 51, 'am.sql', 51, '2018-12-22', '2018-12-18', '100', '2018-12-20', '2018-12-18', 'sdasdas', 'Lulus', 'am.sql', NULL, NULL, NULL, '2018-12-18');

-- --------------------------------------------------------

--
-- Table structure for table `produksi`
--

CREATE TABLE `produksi` (
  `id` int(11) NOT NULL,
  `id_material` int(11) NOT NULL,
  `progres` int(11) NOT NULL,
  `keterangan` text NOT NULL,
  `tgl_create` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `produksi`
--

INSERT INTO `produksi` (`id`, `id_material`, `progres`, `keterangan`, `tgl_create`) VALUES
(1, 34, 25, 'kjdalfksjfalksfj', '2018-12-03'),
(2, 34, 50, ';lakf;sldkf;l', '2018-12-03'),
(3, 40, 100, 'dfsdfsdfsd', '2018-12-10');

-- --------------------------------------------------------

--
-- Table structure for table `status`
--

CREATE TABLE `status` (
  `id` float NOT NULL,
  `namaStatus` varchar(50) NOT NULL,
  `keterangan` varchar(110) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `status`
--

INSERT INTO `status` (`id`, `namaStatus`, `keterangan`) VALUES
(1, 'Waiting for Approval', 'Dokumen Engineering menunggu respon klien'),
(2, 'Document Approved', 'Dokumen Engineering sudah di approve klien	'),
(3, 'Document Rejected', 'Dokumen Engineering ditolak klien, sedang diperbaiki engineer	'),
(4, 'Request a tender', 'Pengadaan telah membuat dokumen permintaan penawaran, menunggu penawaran vendor	'),
(5, 'Tender', 'Pengumpulan dokumen penawaran dari vendor	'),
(6, 'Tender Result', '	Pemenang telah dipilih, fase pembuatan kontrak	'),
(7, 'Kick of Meeting	', '	Perencanaan Kick of Meeting	'),
(7.5, 'Kick of Meeting', 'Jadwal Kick of Meeting telah dibuat. Silahkan Konfirmasi.'),
(8, 'Production Planning', 'Rencana Produksi & Inspeksi'),
(8.5, 'Production', 'Fase Produksi Material'),
(9, 'Inspection', 'Inspeksi Material oleh QC'),
(10, 'Repair', 'Fase Repair Punch List oleh Vendor	'),
(11, 'Repair Check', 'Pengecekan Hasil Repair Punch List'),
(12, 'Material shipping', 'Fase Pengiriman Material	'),
(13, 'Material received', 'Material telah diterima Warehouse	'),
(14, 'Material inspection', 'Material telah di inspeksi Warehouse	'),
(15, 'Material in Stock', 'Stok Material telah di update	');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `nama` varchar(75) NOT NULL,
  `alamat` text NOT NULL,
  `email` varchar(100) NOT NULL,
  `telp` varchar(15) NOT NULL,
  `username` varchar(75) NOT NULL,
  `password` varchar(100) NOT NULL,
  `enkrip` varchar(50) NOT NULL,
  `role` varchar(75) NOT NULL,
  `kodeAsrama` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `nama`, `alamat`, `email`, `telp`, `username`, `password`, `enkrip`, `role`, `kodeAsrama`) VALUES
(3, 'Engineering', '-', '-', '085711112228', 'Engineering', 'a5f40f0fe04a6fdc0e423e17cb44e984', '5be05f019290b0.38714493', 'Engineering', ''),
(4, 'Vendor1', '-', '-', '085711112212', 'Vendor1', 'a5f40f0fe04a6fdc0e423e17cb44e984', '5be05f019290b0.38714493', 'Vendor', ''),
(5, 'Pengadaan', '-', '-', '085711112216', 'Pengadaan', 'a5f40f0fe04a6fdc0e423e17cb44e984', '5be05f019290b0.38714493', 'Pengadaan', ''),
(6, 'Vendor2', '-', '-', '085711112220', 'Vendor2', 'a5f40f0fe04a6fdc0e423e17cb44e984', '5be05f019290b0.38714493', 'Vendor', ''),
(7, 'Client', '-', '-', '085711112224', 'Client', 'a5f40f0fe04a6fdc0e423e17cb44e984', '5be05f019290b0.38714493', 'Client', ''),
(8, 'Expedeting', '-', '-', '085711112228', 'Expedeting', 'a5f40f0fe04a6fdc0e423e17cb44e984', '5be05f019290b0.38714493', 'Expedeting', ''),
(9, 'Traffic', '-', '-', '085711112232', 'Traffic', 'a5f40f0fe04a6fdc0e423e17cb44e984', '5be05f019290b0.38714493', 'Traffic', ''),
(10, 'QC', '-', '-', '085711112236', 'QC', 'a5f40f0fe04a6fdc0e423e17cb44e984', '5be05f019290b0.38714493', 'QC', ''),
(11, 'Warehouse', '-', '-', '085711112240', 'Warehouse', 'a5f40f0fe04a6fdc0e423e17cb44e984', '5be05f019290b0.38714493', 'Warehouse', ''),
(51, 'Muhamad Ibnu Qoyim', 'Bandung', 'muhamadibnu9@gmail.com', '089673569437', 'ibnuqoyim', 'f08dcb43bb4fc72e778d838ea47aadb5', '5a25118b0c3a85.82618145', 'Admin', ''),
(52, 'Proyek', 'a', 'muhamadibnu9@gmail.com', '089673569437', 'Proyek', 'a5f40f0fe04a6fdc0e423e17cb44e984', '5be05f019290b0.38714493', 'Proyek', ''),
(53, 'Kepala', 'bdg', 'muhamadibnu9@gmail.com', '089673569437', 'kepalaupt', '7b5243076625e1e0559092e5ae4e66c0', '5a2f9e85c99b71.51626435', 'Kepala UPT Asrama', ''),
(54, 'Agung Mr.', '0852 72345 1111', '0852 72345 1111', '0852 72345 1111', 'Agung', '7ee8de7fdda016a44d0081ada2e0662a', '5a8ad923c0c659.21245113', 'Operator Lapangan', ''),
(55, 'Miko Mr.', '0851 7686 2222', '0852 72345 1111', '0851 7686 2222', 'Miko', '54c7a62bdda3b0f339d2b89394d43fb0', '5a8ad956b357b6.51739712', 'Operator Lapangan', ''),
(56, 'Rindang', '0851 7686 2222', '0852 72345 1111', '0851 7686 2222', 'Rindang', 'bee96cac79d6cf489e9c5970d4b1882e', '5a8ad972a6ced8.96886686', 'Manager', ''),
(57, 'Nida', '0851 7686 2222', '0852 72345 1111', '0851 7686 2222', 'Nida', '874782e36cc77b3b36016c4879054d58', '5a8ad9849c1880.70704240', 'Administrator', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `client`
--
ALTER TABLE `client`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `client_respon`
--
ALTER TABLE `client_respon`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `dok_eng`
--
ALTER TABLE `dok_eng`
  ADD PRIMARY KEY (`id_material`);

--
-- Indexes for table `hasilinspeksiwh`
--
ALTER TABLE `hasilinspeksiwh`
  ADD PRIMARY KEY (`id_material`);

--
-- Indexes for table `hasilpni`
--
ALTER TABLE `hasilpni`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `hasilrepair`
--
ALTER TABLE `hasilrepair`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `irn`
--
ALTER TABLE `irn`
  ADD PRIMARY KEY (`id_material`);

--
-- Indexes for table `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kom`
--
ALTER TABLE `kom`
  ADD PRIMARY KEY (`id_material`);

--
-- Indexes for table `kontrak`
--
ALTER TABLE `kontrak`
  ADD PRIMARY KEY (`id_material`);

--
-- Indexes for table `log`
--
ALTER TABLE `log`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `material`
--
ALTER TABLE `material`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `penawaran`
--
ALTER TABLE `penawaran`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pengajuan`
--
ALTER TABLE `pengajuan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pengiriman`
--
ALTER TABLE `pengiriman`
  ADD PRIMARY KEY (`id_material`);

--
-- Indexes for table `penilaian`
--
ALTER TABLE `penilaian`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `permintaan`
--
ALTER TABLE `permintaan`
  ADD PRIMARY KEY (`id_material`);

--
-- Indexes for table `pni`
--
ALTER TABLE `pni`
  ADD PRIMARY KEY (`id_material`);

--
-- Indexes for table `produksi`
--
ALTER TABLE `produksi`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `status`
--
ALTER TABLE `status`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `client`
--
ALTER TABLE `client`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `client_respon`
--
ALTER TABLE `client_respon`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `hasilpni`
--
ALTER TABLE `hasilpni`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `hasilrepair`
--
ALTER TABLE `hasilrepair`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `irn`
--
ALTER TABLE `irn`
  MODIFY `id_material` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;

--
-- AUTO_INCREMENT for table `kategori`
--
ALTER TABLE `kategori`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `log`
--
ALTER TABLE `log`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=55;

--
-- AUTO_INCREMENT for table `material`
--
ALTER TABLE `material`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=50;

--
-- AUTO_INCREMENT for table `penawaran`
--
ALTER TABLE `penawaran`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `pengajuan`
--
ALTER TABLE `pengajuan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `produksi`
--
ALTER TABLE `produksi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=58;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
