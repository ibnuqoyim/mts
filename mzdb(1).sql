-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Dec 10, 2018 at 06:03 PM
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
(1, 1, 'hahahahahah', 'am.sql', '2018-11-15'),
(2, 22, 'hhehehehe', 'MTS.graphml', '2018-11-15'),
(3, 35, '', NULL, '2018-11-18'),
(4, 34, 'dokumen belum detail, masih banyak salahnya.', 'cv-library-general-cv-template.docx', '2018-11-18'),
(5, 34, 'bagus', NULL, '2018-11-18'),
(6, 36, 'tidak bisa dipahami masbro', 'Surat Pernyataan.pdf', '2018-11-20'),
(7, 36, 'mantap, gitu dong bro. hehehe', NULL, '2018-11-20'),
(8, 36, 'hlhlkhlhlkh', NULL, '2018-11-20'),
(9, 38, 'k;lk;k', NULL, '2018-12-03'),
(10, 37, 'lkjlkjlj', NULL, '2018-12-03'),
(11, 33, 'ljlkjlkjljl', NULL, '2018-12-03'),
(12, 1, '', NULL, '2018-12-03'),
(13, 39, 'goooooood', NULL, '2018-12-09'),
(14, 40, 'sdfsdfsd', 'PRICE LIST.xlsx', '2018-12-10');

-- --------------------------------------------------------

--
-- Table structure for table `dok_eng`
--

CREATE TABLE `dok_eng` (
  `id` int(11) NOT NULL,
  `material` int(11) NOT NULL,
  `file` varchar(100) NOT NULL,
  `deskripsi` text,
  `tgl_create` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `dok_eng`
--

INSERT INTO `dok_eng` (`id`, `material`, `file`, `deskripsi`, `tgl_create`) VALUES
(1, 2, 'ksjdafklasdjfklj', 'sdalkjfklasdjfklas', '0000-00-00');

-- --------------------------------------------------------

--
-- Table structure for table `hasilinspeksiwh`
--

CREATE TABLE `hasilinspeksiwh` (
  `id` int(11) NOT NULL,
  `id_material` int(11) NOT NULL,
  `file` varchar(100) NOT NULL,
  `desk` text NOT NULL,
  `tgl_create` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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
  `id` int(11) NOT NULL,
  `id_material` int(11) NOT NULL,
  `irn` varchar(100) NOT NULL,
  `tgl_create` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `irn`
--

INSERT INTO `irn` (`id`, `id_material`, `irn`, `tgl_create`) VALUES
(1, 2, '3423242324', '2018-11-19'),
(2, 2, '3423242324', '2018-11-19'),
(3, 36, 'jhj6767676', '2018-11-20'),
(4, 14, '90238490238', '2018-12-02'),
(5, 40, 'fdsafsfasfd', '2018-12-10');

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
  `id` int(11) NOT NULL,
  `id_material` int(11) NOT NULL,
  `tanggal` date NOT NULL,
  `tempat` varchar(100) NOT NULL,
  `tgl_create` date NOT NULL,
  `keterangan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kom`
--

INSERT INTO `kom` (`id`, `id_material`, `tanggal`, `tempat`, `tgl_create`, `keterangan`) VALUES
(1, 11, '2018-11-02', 'PT WIKA (Persero)', '2018-11-17', 'Harus hadir'),
(2, 2, '2018-11-20', 'Wika tower 2', '2018-11-19', 'pukul 5-9'),
(3, 36, '2018-11-22', 'PT WIKA (Persero)', '2018-11-20', 'jadslkkjsafd;lkkl dksljklsajdklf'),
(4, 40, '2018-12-11', 'dfsdfsdfs', '2018-12-10', 'sdfsfsdfs');

-- --------------------------------------------------------

--
-- Table structure for table `kontrak`
--

CREATE TABLE `kontrak` (
  `id` int(11) NOT NULL,
  `id_material` int(11) NOT NULL,
  `file` varchar(250) NOT NULL,
  `deskripsi` varchar(250) NOT NULL,
  `tgl_create` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kontrak`
--

INSERT INTO `kontrak` (`id`, `id_material`, `file`, `deskripsi`, `tgl_create`) VALUES
(1, 11, 'MTS.graphml', 'sadadasdas', '2018-11-16'),
(2, 2, 'PMO ayaa.pdf', 'sfsdfsdfsdfs', '2018-11-19'),
(3, 36, 'ceklist TA(AutoRecovered).xlsx', 'asdfsadfasfasdf', '2018-11-20'),
(4, 40, 'desktop.ini', 'ewrwerwe', '2018-12-10');

-- --------------------------------------------------------

--
-- Table structure for table `material`
--

CREATE TABLE `material` (
  `id` int(11) NOT NULL,
  `serial` varchar(110) DEFAULT NULL,
  `kategori` int(11) DEFAULT NULL,
  `client` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `dokeng` varchar(100) NOT NULL,
  `status` float DEFAULT NULL,
  `progres` int(11) DEFAULT NULL,
  `pemenang` varchar(110) DEFAULT NULL,
  `stok` int(11) DEFAULT NULL,
  `status_tender` int(11) NOT NULL,
  `deadline_responclient` datetime DEFAULT NULL,
  `actual_responclient` datetime DEFAULT NULL,
  `deadline_dokpemintaan` datetime DEFAULT NULL,
  `actual_dokpermintaan` datetime DEFAULT NULL,
  `deadline_dokpenawaran` datetime DEFAULT NULL,
  `actual_dokpenawaran` datetime DEFAULT NULL,
  `deadline_pemenang` datetime DEFAULT NULL,
  `actual_pemenang` datetime DEFAULT NULL,
  `deadline_kontrak` datetime DEFAULT NULL,
  `actual_kontrak` datetime DEFAULT NULL,
  `deadline_kom` datetime DEFAULT NULL,
  `actual_kom` datetime DEFAULT NULL,
  `deadline_produksi` datetime DEFAULT NULL,
  `actual_produksi` datetime DEFAULT NULL,
  `deadline_inspeksiqc` datetime DEFAULT NULL,
  `actual_inspeksiqc` datetime DEFAULT NULL,
  `deadline_repair` datetime DEFAULT NULL,
  `actual_repair` datetime DEFAULT NULL,
  `deadline_fatnirn` datetime DEFAULT NULL,
  `actual_fatnirn` datetime DEFAULT NULL,
  `deadline_pengiriman` datetime DEFAULT NULL,
  `actual_pengiriman` datetime DEFAULT NULL,
  `create_date` date NOT NULL,
  `last_update` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `material`
--

INSERT INTO `material` (`id`, `serial`, `kategori`, `client`, `nama`, `dokeng`, `status`, `progres`, `pemenang`, `stok`, `status_tender`, `deadline_responclient`, `actual_responclient`, `deadline_dokpemintaan`, `actual_dokpermintaan`, `deadline_dokpenawaran`, `actual_dokpenawaran`, `deadline_pemenang`, `actual_pemenang`, `deadline_kontrak`, `actual_kontrak`, `deadline_kom`, `actual_kom`, `deadline_produksi`, `actual_produksi`, `deadline_inspeksiqc`, `actual_inspeksiqc`, `deadline_repair`, `actual_repair`, `deadline_fatnirn`, `actual_fatnirn`, `deadline_pengiriman`, `actual_pengiriman`, `create_date`, `last_update`) VALUES
(1, NULL, NULL, 1, 'Material A', 'PRICE LIST.xlsx', 5, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2018-12-03', '2018-12-03'),
(2, NULL, NULL, 1, 'Material B', '', 15, NULL, '4', 1245, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2018-11-07', '2018-11-07'),
(8, NULL, NULL, 2, 'Material C', '', 3, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2018-11-07', '2018-11-07'),
(9, NULL, NULL, 1, 'Material D', '', 4, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2018-11-08', '2018-11-08'),
(10, NULL, NULL, 1, 'Material E', '', 5, NULL, '', 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2018-11-08', '2018-11-08'),
(11, NULL, NULL, 1, 'Material F', '', 11, NULL, '51', NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2018-11-08', '2018-11-08'),
(12, NULL, NULL, 2, 'Material G', '', 7, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2018-11-08', '2018-11-08'),
(13, NULL, NULL, 1, 'Material H', '', 8, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2018-11-08', '2018-11-08'),
(14, NULL, NULL, 2, 'Material I', '', 12, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2018-11-08', '2018-11-08'),
(15, NULL, NULL, 1, 'Material J', '', 10, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2018-11-08', '2018-11-08'),
(16, NULL, NULL, 2, 'Material K', '', 11, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2018-11-08', '2018-11-08'),
(17, NULL, NULL, 1, 'Material L', '', 12, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2018-11-08', '2018-11-08'),
(18, NULL, NULL, 2, 'Material M', '', 13, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2018-11-08', '2018-11-08'),
(19, NULL, NULL, 1, 'Material  N', '', 14, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2018-11-08', '2018-11-08'),
(20, NULL, NULL, 2, 'Material  O', '', 15, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2018-11-08', '2018-11-08'),
(21, NULL, NULL, 1, 'Material  P', '', 15, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2018-11-08', '2018-11-08'),
(22, NULL, NULL, 2, 'material  Z', 'Understanding the IoT.pdf', 5, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2018-11-09', '2018-11-09'),
(33, NULL, NULL, 2, 'material XX', 'Understanding the IoT.pdf 	', 5, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2018-11-18', '2018-11-18'),
(34, NULL, NULL, 1, 'Material Z3', 'resume.docx', 8.5, 50, '51', NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2018-11-18', '2018-11-18'),
(35, NULL, NULL, 2, 'Material Z5', 'resume.docx', 5, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2018-11-18', '2018-11-18'),
(36, NULL, NULL, 1, 'Mx2310', 'Materi 15 Mei 2018.pptx', 15, NULL, '51', 2342342, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2018-11-20', '2018-11-20'),
(37, NULL, NULL, 1, 'Beton', 'ceklist TA(AutoRecovered).xlsx', 5, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2018-12-01', '2018-12-01'),
(40, NULL, 1, 2, 'xxx', 'PRICE LIST.xlsx', 12, NULL, '4', NULL, 2, '2018-12-24 14:51:08', '2018-12-10 14:51:51', '2018-12-12 14:51:51', '2018-12-10 14:52:34', '2018-12-27 14:52:34', '2018-12-10 16:55:38', '2018-12-27 16:55:38', '2018-12-10 17:00:15', '2018-12-15 17:00:15', NULL, NULL, NULL, NULL, '2018-12-10 17:50:28', NULL, '2018-12-10 17:56:53', '2018-12-15 17:56:53', '2018-12-10 17:59:41', '2018-12-13 17:59:41', '2018-12-10 18:01:28', '2018-12-17 18:01:28', NULL, '2018-12-10', '2018-12-10');

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
  `deskripsi` varchar(250) NOT NULL,
  `tgl_create` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `penawaran`
--

INSERT INTO `penawaran` (`id`, `id_user`, `id_material`, `file_administrasi`, `file_teknis`, `deskripsi`, `tgl_create`) VALUES
(1, 4, 2, 'MTS.graphml', NULL, 'asdfsadfasdfasd', '2018-11-16'),
(2, 6, 2, 'list table.ods', NULL, 'fwefwerwf', '2018-11-19'),
(3, 4, 36, 'Peralatan.pdf', NULL, 'bala bala bala bala bala', '2018-11-20'),
(4, 6, 36, 'modulpwdlaravel.pdf', NULL, 'bala bala balabasdjflkasjdfanlksdkflasjflkjadsjfljadslkfjlkdsajf', '2018-11-20'),
(5, 51, 36, 'IFIXUP NOTA.xlsm', NULL, 'lkasjfklasjdfkljasdlkfjdsalkf lkdsajfjsalkfjlsadkjf ljsdalkfjklasdfjadtk ljklsdajfklsajfdlkasdjl', '2018-11-20'),
(6, 51, 40, 'PRICE LIST.xlsx', 'IFIXUP NOTA.xlsm', 'dsgsgfdsdfsd', '2018-12-10'),
(7, 4, 40, 'PRICE LIST.xlsx', 'PRICE LIST.xlsx', 'dfsfdsfsdf', '2018-12-10');

-- --------------------------------------------------------

--
-- Table structure for table `pengiriman`
--

CREATE TABLE `pengiriman` (
  `id` int(11) NOT NULL,
  `id_material` int(11) NOT NULL,
  `tanggal_pengiriman` date NOT NULL,
  `tujuan` varchar(100) NOT NULL,
  `status` varchar(100) NOT NULL,
  `pic` varchar(100) NOT NULL,
  `kontak` int(20) NOT NULL,
  `tgl_create` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pengiriman`
--

INSERT INTO `pengiriman` (`id`, `id_material`, `tanggal_pengiriman`, `tujuan`, `status`, `pic`, `kontak`, `tgl_create`) VALUES
(1, 2, '2018-11-20', 'Warehouse Pusat', 'Akan dikirim', 'jhon', 2147483647, '2018-11-19'),
(2, 36, '2018-11-23', 'Warehouse Pusat', 'Akan dikirim', 'asdfasdfds', 2147483647, '2018-11-20');

-- --------------------------------------------------------

--
-- Table structure for table `permintaan`
--

CREATE TABLE `permintaan` (
  `id` int(11) NOT NULL,
  `id_material` int(11) NOT NULL,
  `file` varchar(100) NOT NULL,
  `status` varchar(50) DEFAULT NULL,
  `deskripsi` varchar(300) DEFAULT NULL,
  `tgl_create` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `permintaan`
--

INSERT INTO `permintaan` (`id`, `id_material`, `file`, `status`, `deskripsi`, `tgl_create`) VALUES
(1, 2, 'MTS.graphml', NULL, 'dsafasfsadfsadf', '2018-11-14'),
(3, 34, 'UTF-8\'\'Flow Proses Bisnis - Improvement (R.1)31.08.2018.xlsx', NULL, 'harus menjelaskan detail banget', '2018-11-18'),
(4, 36, 'HARI AKHIR.pptx', NULL, 'asdjfklasdjfaslkfjsalkjdf', '2018-11-20'),
(5, 22, 'PRICE LIST.xlsx', '0000-00-00 00:00:00', NULL, '2018-12-03'),
(6, 35, 'PRICE LIST.xlsx', '0000-00-00 00:00:00', 'ljkl', '2018-12-03'),
(7, 38, 'PRICE LIST.xlsx', '0000-00-00 00:00:00', 'kjljljljl', '2018-12-03'),
(8, 37, 'PRICE LIST.xlsx', '2018-12-03 16:53:39', 'jlkjlkjljl', '2018-12-03'),
(9, 33, 'PRICE LIST.xlsx', '0000-00-00 00:00:00', 'k;k;l', '2018-12-03'),
(10, 1, 'PRICE LIST.xlsx', '2018-12-13 00:00:00', NULL, '2018-12-03'),
(11, 1, 'PRICE LIST.xlsx', 'buka', 'klhklhlkh', '2018-12-03');

-- --------------------------------------------------------

--
-- Table structure for table `pni`
--

CREATE TABLE `pni` (
  `id` int(11) NOT NULL,
  `id_material` int(11) NOT NULL,
  `file` varchar(110) NOT NULL,
  `desk` varchar(110) NOT NULL,
  `tgl_create` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pni`
--

INSERT INTO `pni` (`id`, `id_material`, `file`, `desk`, `tgl_create`) VALUES
(1, 11, 'MTS.graphml', 'vxvxcvxcvxcv', '2018-11-18'),
(2, 2, 'PC EDI.xlsx', 'dasfasdfasdfsa', '2018-11-19'),
(3, 36, 'PRICE LIST.xlsx', 'sadadsfsfafasfadf', '2018-11-20'),
(4, 40, 'IFIXUP NOTA.xlsm', 'dffdggdfgdfgd', '2018-12-10'),
(5, 40, 'PRICE LIST.xlsx', 'sadasdas', '2018-12-10'),
(6, 40, 'PRICE LIST.xlsx', 'sdfsdfsdf', '2018-12-10'),
(7, 40, 'PRICE LIST.xlsx', 'dfsfsdfsdfsdfsdf', '2018-12-10'),
(8, 40, 'IFIXUP NOTA copy2.xlsx', 'dsafsdfsadf', '2018-12-10'),
(9, 40, 'PRICE LIST.xlsx', 'xcvxzvvds', '2018-12-10'),
(10, 40, 'IFIXUP NOTA copy2.xlsx', 'vds', '2018-12-10'),
(11, 40, 'PRICE LIST.xlsx', 'fdgf', '2018-12-10');

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
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `hasilinspeksiwh`
--
ALTER TABLE `hasilinspeksiwh`
  ADD PRIMARY KEY (`id`);

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
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kom`
--
ALTER TABLE `kom`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kontrak`
--
ALTER TABLE `kontrak`
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
-- Indexes for table `pengiriman`
--
ALTER TABLE `pengiriman`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `permintaan`
--
ALTER TABLE `permintaan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pni`
--
ALTER TABLE `pni`
  ADD PRIMARY KEY (`id`);

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `dok_eng`
--
ALTER TABLE `dok_eng`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `hasilinspeksiwh`
--
ALTER TABLE `hasilinspeksiwh`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `kategori`
--
ALTER TABLE `kategori`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `kom`
--
ALTER TABLE `kom`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `kontrak`
--
ALTER TABLE `kontrak`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `material`
--
ALTER TABLE `material`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT for table `penawaran`
--
ALTER TABLE `penawaran`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `pengiriman`
--
ALTER TABLE `pengiriman`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `permintaan`
--
ALTER TABLE `permintaan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `pni`
--
ALTER TABLE `pni`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

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
