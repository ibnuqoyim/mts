-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Feb 17, 2019 at 03:57 PM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.1.26

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
(24, 49, 'dsfsdf', NULL, '2018-12-18'),
(25, 51, 'sdasdasd', NULL, '2019-02-05'),
(26, 53, 'dasdasd', 'yiicmd.php', '2019-02-05'),
(27, 53, 'sdasdasd', NULL, '2019-02-05'),
(28, 52, 'wsdasda', NULL, '2019-02-05'),
(29, 51, '', NULL, '2019-02-05'),
(30, 51, '', NULL, '2019-02-05'),
(31, 54, 'sadasd', NULL, '2019-02-06'),
(32, 56, 'k.mn,bkn,', NULL, '2019-02-09'),
(33, 56, 'ljlkjjlk', NULL, '2019-02-09'),
(34, 55, '', NULL, '2019-02-10'),
(35, 57, '', NULL, '2019-02-10');

-- --------------------------------------------------------

--
-- Table structure for table `dokpermintaan`
--

CREATE TABLE `dokpermintaan` (
  `id` int(11) NOT NULL,
  `file_dokpermintaan` varchar(111) NOT NULL,
  `id_material` int(11) NOT NULL,
  `id_vendor` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `dokpermintaan`
--

INSERT INTO `dokpermintaan` (`id`, `file_dokpermintaan`, `id_material`, `id_vendor`) VALUES
(1, 'newfile.txt', 54, 4),
(2, 'list table.ods', 54, 6),
(3, 'list table.ods', 56, 6),
(4, 'yiicmd.php', 56, 4),
(5, 'newfile.txt', 55, 4),
(6, 'yiicmd.php', 55, 4),
(7, 'yiicmd.php', 57, 4);

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
(49, '', '', NULL, NULL, NULL, '2019-01-01', '2018-12-18', NULL, NULL, NULL),
(50, '', '', NULL, NULL, NULL, '2019-02-13', NULL, NULL, NULL, NULL),
(51, 'newfile.txt', '', NULL, NULL, NULL, '2019-02-14', '2019-02-05', '2019-02-05', NULL, NULL),
(52, '', '', NULL, NULL, NULL, '2019-02-19', NULL, '2019-02-05', NULL, NULL),
(53, 'newfile.txt', 'newfile.txt', 'list table.ods', 'mzdb (3).sql', NULL, '2019-02-19', NULL, '2019-02-05', NULL, NULL),
(54, 'yiicmd.php', '', NULL, NULL, NULL, '2019-02-20', '2019-02-06', NULL, NULL, NULL),
(55, 'phpinfo.php', '', NULL, NULL, NULL, '2019-02-20', '2019-02-10', NULL, NULL, NULL),
(56, 'phpinfo.php', 'index.php', 'list table.ods', NULL, NULL, '2019-02-23', '2019-02-09', '2019-02-09', NULL, NULL),
(57, '', '', NULL, NULL, NULL, '2019-02-24', '2019-02-10', NULL, NULL, NULL);

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
(48, 'sadasdasd', 'am.sql', 'sadsadas', '51', '2018-12-18'),
(54, 'sdafsadfasfd', 'yiicmd.php', 'dsfsfasdf', '51', '2019-02-10'),
(55, 'fghfhf', 'newfile.txt', ';k;lk;k', '51', '2019-02-10'),
(56, 'sdasd', 'newfile.txt', 'dadasda', '51', '2019-02-17');

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
  `sertifikat` varchar(110) NOT NULL,
  `actual_release` date DEFAULT NULL,
  `plan_release` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `irn`
--

INSERT INTO `irn` (`id_material`, `irn`, `sertifikat`, `actual_release`, `plan_release`) VALUES
(1, '3423242324', '', '2018-11-19', NULL),
(2, '3423242324', '', '2018-11-19', NULL),
(3, 'jhj6767676', '', '2018-11-20', NULL),
(4, '90238490238', '', '2018-12-02', NULL),
(5, 'fdsafsfasfd', '', '2018-12-10', NULL),
(43, '3423242324', '', '2018-12-12', NULL),
(44, ';k;k;', '', '2018-12-18', NULL),
(45, '223423432', '', '2018-12-13', NULL),
(48, 'asdasd', '', '2018-12-18', NULL),
(54, 'asadsadas', 'yiicmd.php', '2019-02-10', NULL),
(55, '6997987', 'phpinfo.php', '2019-02-10', NULL),
(56, '332423', 'yiicmd.php', '2019-02-17', NULL),
(57, '90-9', 'yiicmd.php', '2019-02-10', NULL);

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
(48, '2018-12-14', '2018-12-18', 'sadad', '2018-12-18', 51, 'sadasdasd'),
(54, '2019-02-17', '2019-02-10', 'wito', '2019-02-10', 51, 'hlkjlkjlk'),
(55, '2019-02-24', '2019-02-10', 'witok', '2019-02-10', 51, 'hkjhkhk'),
(56, '2019-02-16', '2019-02-17', 'sdfsd', '2019-02-17', 8, 'sdfsdfsdf'),
(57, '2019-02-24', '2019-02-10', 'e', '2019-02-10', 51, 'erw');

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
(48, 'am.sql', '51', '', '2018-12-18'),
(54, 'newfile.txt', '51', '', '2019-02-10'),
(55, 'list table.ods', '51', '', '2019-02-10'),
(56, 'yiicmd.php', '51', '', '2019-02-17'),
(57, 'error_log', '51', '', '2019-02-10');

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
(54, 51, 'Berhasil login ke sistem', '2018-12-20 00:00:00'),
(55, 51, 'Berhasil login ke sistem', '2019-01-30 00:00:00'),
(56, 51, 'Mengajukan material baru', '2019-01-30 00:00:00'),
(57, 51, 'Berhasil login ke sistem', '2019-01-30 00:00:00'),
(58, 51, 'Berhasil login ke sistem', '2019-01-31 00:00:00'),
(59, 51, 'Mengajukan material baru', '2019-01-31 00:00:00'),
(60, 51, 'Mengupdate dokumen engineering untuk material tetikus', '2019-01-31 00:00:00'),
(61, 51, 'Upload dokumen permintaan penawaran vendor unuk pengadaan material  kljljlkjlk', '2019-01-31 00:00:00'),
(62, 51, 'Berhasil login ke sistem', '2019-02-02 00:00:00'),
(63, 51, 'Berhasil login ke sistem', '2019-02-04 00:00:00'),
(64, 51, 'Berhasil login ke sistem', '2019-02-05 00:00:00'),
(65, 51, 'Berhasil login ke sistem', '2019-02-05 00:00:00'),
(66, 51, 'membuat material baru', '2019-02-05 00:00:00'),
(67, 51, 'mensubmit material baru', '2019-02-05 00:00:00'),
(68, 51, 'mensubmit material baru', '2019-02-05 00:00:00'),
(69, 51, 'Memberikan penolakan untuk pengajuan material  tetikus', '2019-02-05 00:00:00'),
(70, 51, 'Mengupdate dokumen engineering untuk material tetikus', '2019-02-05 00:00:00'),
(71, 51, 'Mengupdate dokumen engineering untuk material tetikus', '2019-02-05 00:00:00'),
(72, 51, 'mensubmit material baru', '2019-02-05 00:00:00'),
(73, 51, 'membuat material baru', '2019-02-05 00:00:00'),
(74, 51, 'Mengupdate dokumen engineering untuk material sad', '2019-02-05 00:00:00'),
(75, 51, 'Mengupdate dokumen engineering untuk material sad', '2019-02-05 00:00:00'),
(76, 51, 'Mengupdate dokumen engineering untuk material sad', '2019-02-05 00:00:00'),
(77, 51, 'Mengupdate dokumen engineering untuk material sad', '2019-02-05 00:00:00'),
(78, 51, 'Mengupdate dokumen engineering untuk material sad', '2019-02-05 00:00:00'),
(79, 51, 'Mengupdate dokumen engineering untuk material sad', '2019-02-05 00:00:00'),
(80, 51, 'Mengupdate dokumen engineering untuk material sad', '2019-02-05 00:00:00'),
(81, 51, 'mensubmit material baru', '2019-02-05 00:00:00'),
(82, 51, 'Memberikan penolakan untuk pengajuan material  sad', '2019-02-05 00:00:00'),
(83, 51, 'mensubmit material baru', '2019-02-05 00:00:00'),
(84, 51, 'Memberikan penolakan untuk pengajuan material  sad', '2019-02-05 00:00:00'),
(85, 51, 'Mengupdate dokumen engineering untuk material sad', '2019-02-05 00:00:00'),
(86, 51, 'Mengupdate dokumen engineering untuk material sad', '2019-02-05 00:00:00'),
(87, 51, 'Memberikan penolakan untuk pengajuan material  asdasd', '2019-02-05 00:00:00'),
(88, 51, 'Memberikan penolakan untuk pengajuan material  tetikus', '2019-02-05 00:00:00'),
(89, 51, 'Mengupdate dokumen engineering untuk material tetikus', '2019-02-05 00:00:00'),
(90, 51, 'Mengupdate dokumen engineering untuk material tetikus', '2019-02-05 00:00:00'),
(91, 51, 'mensubmit material baru', '2019-02-05 00:00:00'),
(92, 51, 'Memberikan approval untuk pengajuan material  tetikus', '2019-02-05 00:00:00'),
(93, 51, 'mensubmit material baru', '2019-02-05 00:00:00'),
(94, 51, 'Berhasil login ke sistem', '2019-02-06 00:00:00'),
(95, 51, 'membuat material baru', '2019-02-06 00:00:00'),
(96, 51, 'mensubmit material baru', '2019-02-06 00:00:00'),
(97, 51, 'Memberikan approval untuk pengajuan material  sadasdda', '2019-02-06 00:00:00'),
(98, 51, 'Berhasil login ke sistem', '2019-02-06 00:00:00'),
(99, 51, 'Upload dokumen permintaan penawaran vendor unuk pengadaan material  sadasdda', '2019-02-06 00:00:00'),
(100, 51, 'membuat material baru', '2019-02-06 00:00:00'),
(101, 51, 'Upload dokumen permintaan penawaran vendor unuk pengadaan material  sadasdda', '2019-02-06 00:00:00'),
(102, 51, 'Upload dokumen permintaan penawaran vendor unuk pengadaan material  sadasdda', '2019-02-06 00:00:00'),
(103, 51, 'Upload dokumen permintaan penawaran vendor unuk pengadaan material  sadasdda', '2019-02-06 00:00:00'),
(104, 4, 'Berhasil login ke sistem', '2019-02-06 00:00:00'),
(105, 51, 'mensubmit dokumen permintaan material baru', '2019-02-06 00:00:00'),
(106, 51, 'mensubmit dokumen permintaan material baru', '2019-02-06 00:00:00'),
(107, 51, 'Berhasil login ke sistem', '2019-02-06 00:00:00'),
(108, 4, 'Berhasil login ke sistem', '2019-02-06 00:00:00'),
(109, 6, 'Berhasil login ke sistem', '2019-02-06 00:00:00'),
(110, 6, 'Input penawaran untuk tender pengadaan material  sadasdda', '2019-02-06 00:00:00'),
(111, 4, 'Input penawaran untuk tender pengadaan material  sadasdda', '2019-02-06 00:00:00'),
(112, 51, 'Berhasil login ke sistem', '2019-02-09 00:00:00'),
(113, 51, 'membuat material baru', '2019-02-09 00:00:00'),
(114, 51, 'Mengupdate dokumen engineering untuk material werwer', '2019-02-09 00:00:00'),
(115, 51, 'mensubmit material baru', '2019-02-09 00:00:00'),
(116, 51, 'Memberikan penolakan untuk pengajuan material  werwer', '2019-02-09 00:00:00'),
(117, 51, 'Mengupdate dokumen engineering untuk material werwer', '2019-02-09 00:00:00'),
(118, 51, 'Mengupdate dokumen engineering untuk material werwer', '2019-02-09 00:00:00'),
(119, 51, 'mensubmit material baru', '2019-02-09 00:00:00'),
(120, 51, 'Memberikan approval untuk pengajuan material  werwer', '2019-02-09 00:00:00'),
(121, 51, 'mensubmit material baru', '2019-02-10 00:00:00'),
(122, 51, 'Memberikan approval untuk pengajuan material  asdasd', '2019-02-10 00:00:00'),
(123, 51, 'Upload dokumen permintaan penawaran vendor unuk pengadaan material  asdasd', '2019-02-10 00:00:00'),
(124, 51, 'membuat material baru', '2019-02-10 00:00:00'),
(125, 51, 'mensubmit material baru', '2019-02-10 00:00:00'),
(126, 51, 'Memberikan approval untuk pengajuan material  swer', '2019-02-10 00:00:00'),
(127, 51, 'Upload dokumen permintaan penawaran vendor unuk pengadaan material  swer', '2019-02-10 00:00:00'),
(128, 51, 'mensubmit dokumen permintaan material baru', '2019-02-10 00:00:00'),
(129, 51, 'mensubmit dokumen permintaan material baru', '2019-02-10 00:00:00'),
(130, 51, 'mensubmit dokumen permintaan material baru', '2019-02-10 00:00:00'),
(131, 4, 'Berhasil login ke sistem', '2019-02-10 00:00:00'),
(132, 4, 'Input penawaran untuk tender pengadaan material  swer', '2019-02-10 00:00:00'),
(133, 51, 'Menutup tender untuk material swer', '2019-02-10 00:00:00'),
(134, 51, 'Memberikan memberikan review untuk penawaran  ', '2019-02-10 00:00:00'),
(135, 51, 'Memberikan memberikan review untuk penawaran  ', '2019-02-10 00:00:00'),
(136, 51, 'Berhasil login ke sistem', '2019-02-10 00:00:00'),
(137, 51, 'Memberikan memberikan review untuk penawaran  ', '2019-02-10 00:00:00'),
(138, 51, 'Menutup tender untuk material sadasdda', '2019-02-10 00:00:00'),
(139, 51, 'Menentukan pemenang tender untuk  sadasdda', '2019-02-10 00:00:00'),
(140, 6, 'Berhasil login ke sistem', '2019-02-10 00:00:00'),
(141, 51, 'Upload dokumen kontrak untuk pengadaan material  sadasdda', '2019-02-10 00:00:00'),
(142, 51, 'Input penawaran untuk tender pengadaan material  werwer', '2019-02-10 00:00:00'),
(143, 51, 'Menentukan pemenang tender untuk  swer', '2019-02-10 00:00:00'),
(144, 51, 'Upload dokumen kontrak untuk pengadaan material  swer', '2019-02-10 00:00:00'),
(145, 51, 'Update dokumen kontrak untuk pengadaan material  swer', '2019-02-10 00:00:00'),
(146, 51, 'mensubmit dokumen kontrak material baru', '2019-02-10 00:00:00'),
(147, 51, 'Membuat jadwal dan undangan untuk pelaksanaan Kick of Meeting pelaksanaan pengadaan material  sadasdda', '2019-02-10 00:00:00'),
(148, 51, 'mensubmit jadwal Kick Of Meeting', '2019-02-10 00:00:00'),
(149, 6, 'Berhasil login ke sistem', '2019-02-10 00:00:00'),
(150, 6, 'Mengkonfirmasi undangan Kick of Meeting untuk pengdaan material  sadasdda', '2019-02-10 00:00:00'),
(151, 51, 'Upload dokumen Production and Inspection Plan untuk pengadaan material  sadasdda', '2019-02-10 00:00:00'),
(152, 51, 'Update dokumen Production and Inspection Plan untuk pengadaan material  sadasdda', '2019-02-10 00:00:00'),
(153, 51, 'Update dokumen Production and Inspection Plan untuk pengadaan material  sadasdda', '2019-02-10 00:00:00'),
(154, 51, 'Update dokumen Production and Inspection Plan untuk pengadaan material  sadasdda', '2019-02-10 00:00:00'),
(155, 51, 'Update dokumen Production and Inspection Plan untuk pengadaan material  sadasdda', '2019-02-10 00:00:00'),
(156, 51, 'Update dokumen Production and Inspection Plan untuk pengadaan material  sadasdda', '2019-02-10 00:00:00'),
(157, 51, 'mensubmit dokumen Plan Produksi material baru', '2019-02-10 00:00:00'),
(158, 6, 'Update progres 100% untuk pengadaan material  sadasdda', '2019-02-10 00:00:00'),
(159, 51, 'Upload dokumen hasil inspeksi dari QC untuk pengadaan material  sadasdda untuk status Repair', '2019-02-10 16:38:19'),
(160, 51, 'Input IRN untuk material  sadasdda', '2019-02-10 00:00:00'),
(161, 51, 'Input detail pengiriman untuk material  sadasdda', '2019-02-10 00:00:00'),
(162, 51, 'Konfirmasi penerimaan material  sadasdda', '2019-02-10 00:00:00'),
(163, 51, 'Menginput hasil inspeksi di warehouse untuk material  sadasdda', '2019-02-10 00:00:00'),
(164, 51, 'Menginput hasil inspeksi di warehouse untuk material  sadasdda', '2019-02-10 00:00:00'),
(165, 51, 'Menginput hasil inspeksi di warehouse untuk material  sadasdda', '2019-02-10 00:00:00'),
(166, 51, 'mensubmit dokumen Plan Produksi material baru', '2019-02-10 00:00:00'),
(167, 51, 'Membuat jadwal dan undangan untuk pelaksanaan Kick of Meeting pelaksanaan pengadaan material  swer', '2019-02-10 00:00:00'),
(168, 51, 'Mengupdate jadwal dan undangan untuk pelaksanaan Kick of Meeting pelaksanaan pengadaan material  swer', '2019-02-10 00:00:00'),
(169, 51, 'mensubmit jadwal Kick Of Meeting', '2019-02-10 00:00:00'),
(170, 51, 'mensubmit jadwal Kick Of Meeting', '2019-02-10 00:00:00'),
(171, 6, 'Mengkonfirmasi undangan Kick of Meeting untuk pengdaan material  swer', '2019-02-10 00:00:00'),
(172, 51, 'Upload dokumen Production and Inspection Plan untuk pengadaan material  swer', '2019-02-10 00:00:00'),
(173, 51, 'mensubmit dokumen Plan Produksi material baru', '2019-02-10 00:00:00'),
(174, 6, 'Update progres 100% untuk pengadaan material  swer', '2019-02-10 00:00:00'),
(175, 51, 'Upload dokumen hasil inspeksi dari QC untuk pengadaan material  swer untuk status Repair', '2019-02-10 17:29:07'),
(176, 51, 'Input IRN untuk material  swer', '2019-02-10 00:00:00'),
(177, 51, 'Input detail pengiriman untuk material  swer', '2019-02-10 00:00:00'),
(178, 51, 'update detail pengiriman untuk material  swer', '2019-02-10 00:00:00'),
(179, 51, 'mensubmit Detail Pengiriman', '2019-02-10 00:00:00'),
(180, 51, 'Konfirmasi penerimaan material  swer', '2019-02-10 00:00:00'),
(181, 4, 'Berhasil login ke sistem', '2019-02-10 00:00:00'),
(182, 51, 'Berhasil login ke sistem', '2019-02-10 00:00:00'),
(183, 4, 'Input penawaran untuk tender pengadaan material  asdasd', '2019-02-10 00:00:00'),
(184, 4, 'Input penawaran untuk tender pengadaan material  ', '2019-02-10 00:00:00'),
(185, 51, 'Memberikan memberikan review untuk penawaran  ', '2019-02-10 00:00:00'),
(186, 51, 'Memberikan memberikan review untuk penawaran  ', '2019-02-10 00:00:00'),
(187, 51, 'Memberikan memberikan review untuk penawaran  ', '2019-02-10 00:00:00'),
(188, 51, 'Memberikan memberikan review untuk penawaran  ', '2019-02-10 00:00:00'),
(189, 51, 'Memberikan memberikan review untuk penawaran  ', '2019-02-10 00:00:00'),
(190, 51, 'Memberikan memberikan review untuk penawaran  ', '2019-02-10 00:00:00'),
(191, 51, 'Menutup tender untuk material asdasd', '2019-02-10 00:00:00'),
(192, 51, 'Menentukan pemenang tender untuk  asdasd', '2019-02-10 00:00:00'),
(193, 51, 'Upload dokumen kontrak untuk pengadaan material  asdasd', '2019-02-10 00:00:00'),
(194, 51, 'Update dokumen kontrak untuk pengadaan material  asdasd', '2019-02-10 00:00:00'),
(195, 51, 'Update dokumen kontrak untuk pengadaan material  asdasd', '2019-02-10 00:00:00'),
(196, 51, 'mensubmit dokumen kontrak material baru', '2019-02-10 00:00:00'),
(197, 51, 'Membuat jadwal dan undangan untuk pelaksanaan Kick of Meeting pelaksanaan pengadaan material  asdasd', '2019-02-10 00:00:00'),
(198, 51, 'Mengupdate jadwal dan undangan untuk pelaksanaan Kick of Meeting pelaksanaan pengadaan material  asdasd', '2019-02-10 00:00:00'),
(199, 51, 'mensubmit jadwal Kick Of Meeting', '2019-02-10 00:00:00'),
(200, 4, 'Mengkonfirmasi undangan Kick of Meeting untuk pengdaan material  asdasd', '2019-02-10 00:00:00'),
(201, 51, 'Upload dokumen Production and Inspection Plan untuk pengadaan material  asdasd', '2019-02-10 00:00:00'),
(202, 51, 'Update dokumen Production and Inspection Plan untuk pengadaan material  asdasd', '2019-02-10 00:00:00'),
(203, 51, 'Update dokumen Production and Inspection Plan untuk pengadaan material  asdasd', '2019-02-10 00:00:00'),
(204, 51, 'mensubmit dokumen Plan Produksi material baru', '2019-02-10 00:00:00'),
(205, 4, 'Update progres 25% untuk pengadaan material  asdasd', '2019-02-10 00:00:00'),
(206, 4, 'Update progres 100% untuk pengadaan material  asdasd', '2019-02-10 00:00:00'),
(207, 51, 'Upload dokumen hasil Inspeksi dari QC untuk material  asdasd untuk status LULUS', '2019-02-10 23:42:30'),
(208, 51, 'Input IRN untuk material  asdasd', '2019-02-10 00:00:00'),
(209, 51, 'Input detail pengiriman untuk material  asdasd', '2019-02-10 00:00:00'),
(210, 51, 'update detail pengiriman untuk material  asdasd', '2019-02-10 00:00:00'),
(211, 51, 'mensubmit Detail Pengiriman', '2019-02-10 00:00:00'),
(212, 51, 'Konfirmasi penerimaan material  asdasd', '2019-02-10 00:00:00'),
(213, 51, 'Menginput hasil inspeksi di warehouse untuk material  asdasd', '2019-02-10 00:00:00'),
(214, 51, 'Menginput hasil inspeksi di warehouse untuk material  asdasd', '2019-02-10 00:00:00'),
(215, 51, 'mensubmit dokumen Plan Produksi material baru', '2019-02-10 00:00:00'),
(216, 51, 'Pengajuan Material oleh user', '2019-02-10 00:00:00'),
(217, 51, 'Menerima pengajuan untuk material sadasdda yang diajukan oleh Admin', '2019-02-10 00:00:00'),
(218, 51, 'Berhasil login ke sistem', '2019-02-13 00:00:00'),
(219, 4, 'Berhasil login ke sistem', '2019-02-13 00:00:00'),
(220, 8, 'Berhasil login ke sistem', '2019-02-17 00:00:00'),
(221, 51, 'Berhasil login ke sistem', '2019-02-17 00:00:00'),
(222, 51, 'Memberikan memberikan review untuk penawaran  ', '2019-02-17 00:00:00'),
(223, 51, 'Memberikan memberikan review untuk penawaran  ', '2019-02-17 00:00:00'),
(224, 51, 'Menutup tender untuk material werwer', '2019-02-17 00:00:00'),
(225, 51, 'Menentukan pemenang tender untuk  werwer', '2019-02-17 00:00:00'),
(226, 51, 'Upload dokumen kontrak untuk pengadaan material  werwer', '2019-02-17 00:00:00'),
(227, 51, 'Update dokumen kontrak untuk pengadaan material  werwer', '2019-02-17 00:00:00'),
(228, 51, 'mensubmit dokumen kontrak material baru', '2019-02-17 00:00:00'),
(229, 8, 'Membuat jadwal dan undangan untuk pelaksanaan Kick of Meeting pelaksanaan pengadaan material  werwer', '2019-02-17 00:00:00'),
(230, 8, 'mensubmit jadwal Kick Of Meeting', '2019-02-17 00:00:00'),
(231, 51, 'Mengkonfirmasi undangan Kick of Meeting untuk pengdaan material  werwer', '2019-02-17 00:00:00'),
(232, 8, 'Upload dokumen Production and Inspection Plan untuk pengadaan material  werwer', '2019-02-17 00:00:00'),
(233, 8, 'mensubmit dokumen Plan Produksi material baru', '2019-02-17 00:00:00'),
(234, 51, 'Update progres 25% untuk pengadaan material  werwer', '2019-02-17 00:00:00'),
(235, 51, 'Update progres 100% untuk pengadaan material  werwer', '2019-02-17 00:00:00'),
(236, 51, 'Upload dokumen hasil Inspeksi dari QC untuk material  werwer untuk status LULUS', '2019-02-17 15:52:23'),
(237, 51, 'Input IRN untuk material  werwer', '2019-02-17 00:00:00'),
(238, 51, 'Input detail pengiriman untuk material  werwer', '2019-02-17 00:00:00'),
(239, 51, 'mensubmit Detail Pengiriman', '2019-02-17 00:00:00'),
(240, 51, 'Konfirmasi penerimaan material  werwer', '2019-02-17 00:00:00'),
(241, 51, 'Menginput hasil inspeksi di warehouse untuk material  werwer', '2019-02-17 00:00:00'),
(242, 51, 'mensubmit dokumen Plan Produksi material baru', '2019-02-17 00:00:00'),
(243, 11, 'Berhasil login ke sistem', '2019-02-17 00:00:00');

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
  `pic` int(11) NOT NULL,
  `kode` varchar(110) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `material`
--

INSERT INTO `material` (`id`, `proyek`, `kategori`, `client`, `nama`, `status`, `progres`, `pemenang`, `stok`, `status_tender`, `plan_tender`, `plan_kontrak`, `plan_kom`, `plan_irn`, `plan_pengiriman`, `plan_penerimaan`, `plan_inspeksiwh`, `plan_finish`, `actual_finish`, `create_date`, `last_update`, `pic`, `kode`) VALUES
(54, '0', 1, 0, 'sadasdda', 15, NULL, '6', 42, 2, '2019-02-08', '2019-02-15', NULL, '2019-02-13', '2019-02-17', '2019-02-17', '0000-00-00', '2019-02-12', '2019-02-10', '2019-02-06', '2019-02-06', 51, 'esadsd'),
(55, '0', 1, 0, 'asdasd', 15, NULL, '4', 32, 2, '2019-02-12', '2019-02-15', NULL, '2019-02-13', '2019-02-17', '2019-03-31', '0000-00-00', '2019-02-12', '2019-02-10', '2019-02-06', '2019-02-06', 51, 'sadasd'),
(56, '0', 2, 0, 'werwer', 15, NULL, '51', 12, 2, '2019-02-11', '2019-02-22', NULL, '2019-02-20', '2019-02-24', '2019-02-24', '0000-00-00', '2019-02-19', '2019-02-17', '2019-02-09', '2019-02-09', 51, 'essdf'),
(57, '0', 2, 0, 'swer', 13, NULL, '6', NULL, 2, '2019-02-12', '2019-02-15', NULL, '2019-02-13', '2019-02-17', '2019-02-28', '0000-00-00', '2019-02-12', '0000-00-00', '2019-02-10', '2019-02-10', 51, 'sss');

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
(13, 51, 44, 'am.sql', 'mzdb(1).sql', '', '', 'jkhkjh', '2018-12-18'),
(14, 6, 54, 'FORMAT DRH.docx', 'FORMAT DRH.pdf', 'ffdfd', 'index.php', 'sdfsdfsdf', '2019-02-06'),
(15, 4, 54, 'list table.ods', 'index.php', '', '', 'saasdasdasd', '2019-02-06'),
(16, 4, 57, 'newfile.txt', 'newfile.txt', '', '', 'dsadfsad', '2019-02-10'),
(17, 51, 56, 'yiicmd.php', 'newfile.txt', 'dfsfsdfsd', 'yiicmd.php', 'dsaasdasd', '2019-02-10'),
(18, 4, 55, 'yiicmd.php', 'error_log', 'lkjjljljl', 'phpinfo.php', 'hjhkhjkhjk', '2019-02-10');

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

--
-- Dumping data for table `pengajuan`
--

INSERT INTO `pengajuan` (`id`, `id_material`, `id_pengaju`, `jumlah`, `disetujui`, `pic_wh`, `tgl_setujui`, `diterima`, `id_penerima`, `tgl_diterima`, `tgl_create`) VALUES
(1, 54, 51, 90, 1, 51, '2019-02-10', 0, 0, '0000-00-00', '2019-02-10');

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
(48, '0000-00-00', '2018-12-29', 'Warehouse Pusat', '', 51, '2018-12-18', '2018-12-18'),
(54, '0000-00-00', '2019-02-17', 'Warehouse Pusat', '', 51, '2019-02-10', '2019-02-10'),
(55, '0000-00-00', '2019-03-31', 'Warehouse Surabaya', '', 51, '2019-02-10', '2019-02-10'),
(56, '0000-00-00', '2019-02-24', 'Warehouse Site', '', 51, '2019-02-17', '2019-02-17'),
(57, '0000-00-00', '2019-02-28', 'Warehouse Surabaya', '', 51, '2019-02-10', '2019-02-10');

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
(54, '', '5', 'harus dikumpulkan 1 hari', '2019-02-16', '2019-02-10', '2019-02-27', '2019-02-10', '2019-02-06', 51),
(55, '', NULL, NULL, NULL, '2019-02-10', '2019-02-27', '2019-02-10', '0000-00-00', 0),
(56, '', NULL, NULL, NULL, '2019-02-17', '2019-03-06', '2019-02-17', '0000-00-00', 0),
(57, '', NULL, NULL, NULL, '2019-02-10', '2019-02-27', '2019-02-10', '0000-00-00', 0);

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
(48, 'dssadasd', 51, 'am.sql', 51, '2018-12-22', '2018-12-18', '100', '2018-12-20', '2018-12-18', 'sdasdas', 'Lulus', 'am.sql', NULL, NULL, NULL, '2018-12-18'),
(54, 'sdasdasdasd', 51, 'yiicmd.php', 51, '2019-02-24', '2019-02-10', '100', '2019-02-12', '2019-02-10', 'dasdasdasd', 'Repair', 'newfile.txt', '2019-02-15', '2019-02-10', '0000-00-00', '2019-02-10'),
(55, 'kjkhjkh', 51, 'list table.ods', 51, '2019-03-10', '2019-02-10', '100', '2019-02-12', '2019-02-10', 'kjlkjkljkl', 'Lulus', 'yiicmd.php', NULL, NULL, NULL, '2019-02-10'),
(56, 'ljlkkljlk', 8, 'KJP-Company-Profile.pdf', 51, '2019-02-28', '2019-02-17', '100', '2019-02-19', '2019-02-17', 'dsfsdf', 'Lulus', 'yiicmd.php', NULL, NULL, NULL, '2019-02-17'),
(57, 'ljlj', 51, 'phpinfo.php', 51, '2019-02-24', '2019-02-10', '100', '2019-02-12', '2019-02-10', 'lkjjk', 'Repair', 'list table.ods', '2019-02-15', '2019-02-10', '0000-00-00', '2019-02-10');

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
(0.5, 'Material in Draft', 'Pengajuan Material masih dalam tahap draft'),
(1, 'Waiting for Approval', 'Dokumen Engineering menunggu respon klien'),
(2, 'Document Approved', 'Dokumen Engineering sudah di approve klien	'),
(3, 'Document Rejected', 'Dokumen Engineering ditolak klien, sedang diperbaiki engineer	'),
(4, 'Request a tender', 'Pengadaan telah membuat dokumen permintaan penawaran, menunggu penawaran vendor	'),
(4.5, 'Permintaan Penawaran draft', 'draft'),
(5, 'Tender', 'Pengumpulan dokumen penawaran dari vendor	'),
(6, 'Tender Result', '	Pemenang telah dipilih, fase pembuatan kontrak	'),
(6.5, 'Draft Kontrak', 'Kontrak belum di submit'),
(7, 'Kick of Meeting	', '	Perencanaan Kick of Meeting	'),
(7.5, 'Kick of Meeting', 'Jadwal Kick of Meeting telah dibuat. Silahkan Konfirmasi.'),
(8, 'Production Planning', 'Rencana Produksi & Inspeksi'),
(8.5, 'Production', 'Fase Produksi Material'),
(9, 'Inspection', 'Inspeksi Material oleh QC'),
(10, 'Repair', 'Fase Repair Punch List oleh Vendor	'),
(11, 'Repair Check', 'Pengecekan Hasil Repair Punch List'),
(12, 'Material shipping', 'Fase Pengiriman Material	'),
(12.5, 'Draft Pengiriman', 'Detail Pengiriman belum disubmit'),
(13, 'Material received', 'Material telah diterima Warehouse	'),
(13.5, 'Draft Inspeksi WareHouse', 'Inspeksi Warehouse belum di submit'),
(14, 'Material inspection', 'Material telah di inspeksi Warehouse	'),
(15, 'Material in Stock', 'Stok Material telah di update	'),
(75, 'Draft Jadwal Kick of Meeting', 'Jadwal Kick of Meeting belum Fix'),
(85, 'Draft Plan Produksi ', 'Dokumen Plan Produksi belum di submit'),
(125, 'Dalam Pengiriman', 'Material sedang dikirim');

-- --------------------------------------------------------

--
-- Table structure for table `testtabel`
--

CREATE TABLE `testtabel` (
  `id` int(11) NOT NULL,
  `namatest` varchar(100) NOT NULL,
  `tgl_test` date NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `testtabel`
--

INSERT INTO `testtabel` (`id`, `namatest`, `tgl_test`, `password`) VALUES
(1, 'ibnuqoyim', '2019-02-14', 'Sintiaibnu17');

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
  `perusahaan` varchar(200) NOT NULL,
  `kodeAsrama` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `nama`, `alamat`, `email`, `telp`, `username`, `password`, `enkrip`, `role`, `perusahaan`, `kodeAsrama`) VALUES
(3, 'Agus S', 'PT Wijaya Karya', '-', '085711112228', 'Engineering', 'a5f40f0fe04a6fdc0e423e17cb44e984', '5be05f019290b0.38714493', 'Engineering', 'PT Wijaya Karya', ''),
(4, 'Edi I', 'PT Wahana Safety', '-', '085711112212', 'Vendor1', 'a5f40f0fe04a6fdc0e423e17cb44e984', '5be05f019290b0.38714493', 'Vendor', 'PT Wahana Safety', ''),
(5, 'Shabirin', 'PT Wijaya Karya', '-', '085711112216', 'Pengadaan', 'a5f40f0fe04a6fdc0e423e17cb44e984', '5be05f019290b0.38714493', 'Pengadaan', 'PT Wijaya Karya', ''),
(6, 'Fakhri', 'PT Berkat Niaga', '-', '085711112220', 'Vendor2', 'a5f40f0fe04a6fdc0e423e17cb44e984', '5be05f019290b0.38714493', 'Vendor', 'PT Berkat Niaga', ''),
(7, 'Irfan', 'PT Aneka Tambang', '-', '085711112224', 'Client', 'a5f40f0fe04a6fdc0e423e17cb44e984', '5be05f019290b0.38714493', 'Client', 'PT Aneka Tambang', ''),
(8, 'Toni', 'PT Wijaya Karya', '-', '085711112228', 'Expedeting', 'a5f40f0fe04a6fdc0e423e17cb44e984', '5be05f019290b0.38714493', 'Expedeting', 'PT Wijaya Karya', ''),
(9, 'Emili', 'PT Wijaya Karya', '-', '085711112232', 'Traffic', 'a5f40f0fe04a6fdc0e423e17cb44e984', '5be05f019290b0.38714493', 'Traffic', 'PT Wijaya Karya', ''),
(10, 'Sizuka', 'PT Wijaya Karya', '-', '085711112236', 'QC', 'a5f40f0fe04a6fdc0e423e17cb44e984', '5be05f019290b0.38714493', 'QC', 'PT Wijaya Karya', ''),
(11, 'Edo', 'PT Wijaya Karya', '-', '085711112240', 'Warehouse', 'a5f40f0fe04a6fdc0e423e17cb44e984', '5be05f019290b0.38714493', 'Warehouse', 'PT Wijaya Karya', ''),
(51, 'Arif', 'PT Wijaya Karya', 'muhamadibnu9@gmail.com', '089673569437', 'Admin', 'a5f40f0fe04a6fdc0e423e17cb44e984', '5be05f019290b0.38714493', 'Admin', 'PT Wijaya Karya', ''),
(52, 'Tomo', 'PT Wijaya Karya', 'muhamadibnu9@gmail.com', '089673569437', 'Proyek', 'a5f40f0fe04a6fdc0e423e17cb44e984', '5be05f019290b0.38714493', 'Proyek', 'PT Wijaya Karya', '');

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
-- Indexes for table `dokpermintaan`
--
ALTER TABLE `dokpermintaan`
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
-- Indexes for table `testtabel`
--
ALTER TABLE `testtabel`
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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT for table `dokpermintaan`
--
ALTER TABLE `dokpermintaan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

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
  MODIFY `id_material` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=58;

--
-- AUTO_INCREMENT for table `kategori`
--
ALTER TABLE `kategori`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `log`
--
ALTER TABLE `log`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=244;

--
-- AUTO_INCREMENT for table `material`
--
ALTER TABLE `material`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=58;

--
-- AUTO_INCREMENT for table `penawaran`
--
ALTER TABLE `penawaran`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `pengajuan`
--
ALTER TABLE `pengajuan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `produksi`
--
ALTER TABLE `produksi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `testtabel`
--
ALTER TABLE `testtabel`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=53;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
