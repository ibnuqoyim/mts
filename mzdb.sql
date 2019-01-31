-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 31 Jan 2019 pada 03.56
-- Versi server: 10.1.37-MariaDB
-- Versi PHP: 5.6.40

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
-- Struktur dari tabel `client`
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
-- Dumping data untuk tabel `client`
--

INSERT INTO `client` (`id`, `nama`, `alamat`, `telepon`, `pic`, `kontak_pic`) VALUES
(1, 'PT PLN (Persero)', '-', 22898989, 'Pak Eko', 809898898),
(2, 'PT Telkom ', '-', 22898989, 'Pak Eka', 8989989);

-- --------------------------------------------------------

--
-- Struktur dari tabel `client_respon`
--

CREATE TABLE `client_respon` (
  `id` int(11) NOT NULL,
  `material_id` int(11) NOT NULL,
  `isi` varchar(250) NOT NULL,
  `file_respon` varchar(110) DEFAULT NULL,
  `tgl_create` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `client_respon`
--

INSERT INTO `client_respon` (`id`, `material_id`, `isi`, `file_respon`, `tgl_create`) VALUES
(1, 4, 'MTO belum ada kontigensinya', NULL, '2019-01-31'),
(2, 4, '', NULL, '2019-01-31');

-- --------------------------------------------------------

--
-- Struktur dari tabel `dok_eng`
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
-- Dumping data untuk tabel `dok_eng`
--

INSERT INTO `dok_eng` (`id_material`, `file_mto`, `file_dwg`, `file_spec`, `file_datasheet`, `deskripsi`, `plan_approve`, `actual_approve`, `tgl_rejected`, `tgl_create`, `plan_permintaan`) VALUES
(1, 'P3FH-IN-9000-RFQ-1012-RB_PR for Magnetic Flow Meter.pdf', '', 'P3FH-IN-9000-SPE-1001-R1 APP.pdf', 'P3FH-IN-2000-EDS-1001_R2_Instrument Data Sheet_System 2_for Mag Flow Tx.xlsx', NULL, '2019-02-13', NULL, NULL, NULL, NULL),
(2, 'P3FH-IN-9000-RFQ-1012-RB_PR for Magnetic Flow Meter.pdf', '', 'P3FH-IN-9000-SPE-1001-R1 APP.pdf', 'P3FH-IN-2000-EDS-1001_R2_Instrument Data Sheet_System 2_for Mag Flow Tx.xlsx', NULL, '2019-02-13', NULL, NULL, NULL, NULL),
(3, 'P3FH-IN-9000-RFQ-1012-RB_PR for Magnetic Flow Meter.pdf', '', 'P3FH-IN-9000-SPE-1001-R1 APP.pdf', 'P3FH-IN-2000-EDS-1001_R2_Instrument Data Sheet_System 2_for Mag Flow Tx.xlsx', NULL, '2019-02-13', NULL, NULL, NULL, NULL),
(4, 'P3FH-IN-9000-RFQ-1012-RB_PR for Magnetic Flow Meter.pdf', '', NULL, NULL, NULL, '2019-02-14', '2019-01-31', '2019-01-31', NULL, NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `hasilinspeksiwh`
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
-- Dumping data untuk tabel `hasilinspeksiwh`
--

INSERT INTO `hasilinspeksiwh` (`id_material`, `lokasi`, `file_hasil_inspeksi`, `hasil_inspeksi`, `pic`, `tgl_create`) VALUES
(4, 'Rak 0005-1', 'Total BOQ Manual Valve Galperti.xlsx', 'terjadi scrath body transmitter (minor)', '11', '2019-01-31');

-- --------------------------------------------------------

--
-- Struktur dari tabel `hasilpni`
--

CREATE TABLE `hasilpni` (
  `id` int(11) NOT NULL,
  `id_material` int(11) NOT NULL,
  `status` varchar(110) NOT NULL,
  `file` varchar(100) NOT NULL,
  `desk` text NOT NULL,
  `tgl_create` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `hasilrepair`
--

CREATE TABLE `hasilrepair` (
  `id` int(11) NOT NULL,
  `id_material` int(11) NOT NULL,
  `file` varchar(100) NOT NULL,
  `desk` text NOT NULL,
  `tgl_create` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `irn`
--

CREATE TABLE `irn` (
  `id_material` int(11) NOT NULL,
  `irn` varchar(100) NOT NULL,
  `actual_release` date DEFAULT NULL,
  `plan_release` date DEFAULT NULL,
  `sertifikat` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `irn`
--

INSERT INTO `irn` (`id_material`, `irn`, `actual_release`, `plan_release`, `sertifikat`) VALUES
(4, '87-flowtransmitter', '2019-01-31', NULL, NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `kategori`
--

CREATE TABLE `kategori` (
  `id` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `singkatan` varchar(110) NOT NULL,
  `desk` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `kategori`
--

INSERT INTO `kategori` (`id`, `nama`, `singkatan`, `desk`) VALUES
(1, 'Material Civil', 'CIV', NULL),
(2, 'Pipa & Flange', 'PIP', NULL),
(3, 'Instrument & Electrical', 'IEL', NULL),
(4, 'Material Lainnya', 'OTH', NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `kom`
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
-- Dumping data untuk tabel `kom`
--

INSERT INTO `kom` (`id_material`, `tanggal`, `actual_kom`, `tempat`, `tgl_create`, `pic`, `keterangan`) VALUES
(4, '2019-02-05', '2019-01-31', 'Wika Tower2', '2019-01-31', 8, 'jangan telat');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kontrak`
--

CREATE TABLE `kontrak` (
  `id_material` int(11) NOT NULL,
  `file_kontrak` varchar(110) NOT NULL,
  `pic` varchar(250) NOT NULL,
  `deskripsi` varchar(250) NOT NULL,
  `tgl_submit` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `kontrak`
--

INSERT INTO `kontrak` (`id_material`, `file_kontrak`, `pic`, `deskripsi`, `tgl_submit`) VALUES
(4, 'Valve CMI.xlsx', '5', '', '2019-01-31');

-- --------------------------------------------------------

--
-- Struktur dari tabel `log`
--

CREATE TABLE `log` (
  `id` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `kegiatan` text NOT NULL,
  `tgl` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `log`
--

INSERT INTO `log` (`id`, `id_user`, `kegiatan`, `tgl`) VALUES
(1, 3, 'Berhasil login ke sistem', '2019-01-29 00:00:00'),
(2, 11, 'Berhasil login ke sistem', '2019-01-29 00:00:00'),
(3, 51, 'Berhasil login ke sistem', '2019-01-29 00:00:00'),
(4, 51, 'Berhasil login ke sistem', '2019-01-29 00:00:00'),
(5, 51, 'Mengajukan material baru', '2019-01-30 00:00:00'),
(6, 51, 'Melihat detail material Flow Transmiter', '2019-01-30 10:47:59'),
(7, 3, 'Berhasil login ke sistem', '2019-01-30 00:00:00'),
(8, 3, 'Mengajukan material baru', '2019-01-30 00:00:00'),
(9, 3, 'Mengajukan material baru', '2019-01-30 00:00:00'),
(10, 51, 'Berhasil login ke sistem', '2019-01-30 00:00:00'),
(11, 51, 'Berhasil login ke sistem', '2019-01-31 00:00:00'),
(12, 51, 'Melihat log material Flow Transmiter', '2019-01-31 03:14:01'),
(13, 51, 'Melihat detail material Flow Transmiter', '2019-01-31 03:14:09'),
(14, 3, 'Berhasil login ke sistem', '2019-01-31 00:00:00'),
(15, 7, 'Berhasil login ke sistem', '2019-01-31 00:00:00'),
(16, 3, 'Mengajukan material baru', '2019-01-31 00:00:00'),
(17, 7, 'Memberikan penolakan untuk pengajuan material  Flow Transmiter', '2019-01-31 00:00:00'),
(18, 3, 'Mengupdate dokumen engineering untuk material Flow Transmiter', '2019-01-31 00:00:00'),
(19, 7, 'Memberikan approval untuk pengajuan material  Flow Transmiter', '2019-01-31 00:00:00'),
(20, 5, 'Berhasil login ke sistem', '2019-01-31 00:00:00'),
(21, 5, 'Upload dokumen permintaan penawaran vendor unuk pengadaan material  Flow Transmiter', '2019-01-31 00:00:00'),
(22, 4, 'Berhasil login ke sistem', '2019-01-31 00:00:00'),
(23, 4, 'Input penawaran untuk tender pengadaan material  Flow Transmiter', '2019-01-31 00:00:00'),
(24, 6, 'Berhasil login ke sistem', '2019-01-31 00:00:00'),
(25, 6, 'Input penawaran untuk tender pengadaan material  Flow Transmiter', '2019-01-31 00:00:00'),
(26, 3, 'Berhasil login ke sistem', '2019-01-31 00:00:00'),
(27, 3, 'Memberikan memberikan review untuk penawaran  ', '2019-01-31 00:00:00'),
(28, 3, 'Memberikan memberikan review untuk penawaran  ', '2019-01-31 00:00:00'),
(29, 5, 'Menutup tender untuk material Flow Transmiter', '2019-01-31 00:00:00'),
(30, 5, 'Menentukan pemenang tender untuk  Flow Transmiter', '2019-01-31 00:00:00'),
(31, 5, 'Upload dokumen kontrak untuk pengadaan material  Flow Transmiter', '2019-01-31 00:00:00'),
(32, 8, 'Berhasil login ke sistem', '2019-01-31 00:00:00'),
(33, 8, 'Berhasil login ke sistem', '2019-01-31 00:00:00'),
(34, 8, 'Membuat jadwal dan undangan untuk pelaksanaan Kick of Meeting pelaksanaan pengadaan material  Flow Transmiter', '2019-01-31 00:00:00'),
(35, 4, 'Berhasil login ke sistem', '2019-01-31 00:00:00'),
(36, 4, 'Mengkonfirmasi undangan Kick of Meeting untuk pengdaan material  Flow Transmiter', '2019-01-31 00:00:00'),
(37, 8, 'Upload dokumen Production and Inspection Plan untuk pengadaan material  Flow Transmiter', '2019-01-31 00:00:00'),
(38, 4, 'Update progres 100% untuk pengadaan material  Flow Transmiter', '2019-01-31 00:00:00'),
(39, 10, 'Berhasil login ke sistem', '2019-01-31 00:00:00'),
(40, 10, 'Upload dokumen hasil Inspeksi dari QC untuk material  Flow Transmiter untuk status LULUS', '2019-01-31 03:45:29'),
(41, 10, 'Input IRN untuk material  Flow Transmiter', '2019-01-31 00:00:00'),
(42, 9, 'Berhasil login ke sistem', '2019-01-31 00:00:00'),
(43, 9, 'Input detail pengiriman untuk material  Flow Transmiter', '2019-01-31 00:00:00'),
(44, 11, 'Berhasil login ke sistem', '2019-01-31 00:00:00'),
(45, 11, 'Konfirmasi penerimaan material  Flow Transmiter', '2019-01-31 00:00:00'),
(46, 11, 'Menginput hasil inspeksi di warehouse untuk material  Flow Transmiter', '2019-01-31 00:00:00'),
(47, 52, 'Berhasil login ke sistem', '2019-01-31 00:00:00'),
(48, 52, 'Pengajuan Material oleh user', '2019-01-31 00:00:00'),
(49, 11, 'Menerima pengajuan untuk material Flow Transmiter yang diajukan oleh Proyek', '2019-01-31 00:00:00'),
(50, 52, 'Konfirmasi penerimaan untuk material Flow Transmiter yang diajukan oleh Proyek', '2019-01-31 00:00:00'),
(51, 51, 'Berhasil login ke sistem', '2019-01-31 00:00:00'),
(52, 51, 'Melihat log material Flow Transmiter', '2019-01-31 03:51:59'),
(53, 51, 'Melihat detail material Flow Transmiter', '2019-01-31 03:52:18');

-- --------------------------------------------------------

--
-- Struktur dari tabel `material`
--

CREATE TABLE `material` (
  `id` int(11) NOT NULL,
  `proyek` varchar(110) DEFAULT NULL,
  `kategori` int(11) DEFAULT NULL,
  `kode` varchar(110) NOT NULL,
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
-- Dumping data untuk tabel `material`
--

INSERT INTO `material` (`id`, `proyek`, `kategori`, `kode`, `client`, `nama`, `status`, `progres`, `pemenang`, `stok`, `status_tender`, `plan_tender`, `plan_kontrak`, `plan_kom`, `plan_irn`, `plan_pengiriman`, `plan_penerimaan`, `plan_inspeksiwh`, `plan_finish`, `actual_finish`, `create_date`, `last_update`, `pic`) VALUES
(1, '1', 3, '', 0, 'Flow Transmiter', 1, NULL, NULL, NULL, 0, NULL, NULL, NULL, '0000-00-00', NULL, '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00', '2019-01-30', '2019-01-30', 51),
(2, '1', 3, '', 0, 'Flow Meter', 1, NULL, NULL, NULL, 0, NULL, NULL, NULL, '0000-00-00', NULL, '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00', '2019-01-30', '2019-01-30', 3),
(3, '1', 3, '', 0, 'Flow Transmiter', 1, NULL, NULL, NULL, 0, NULL, NULL, NULL, '0000-00-00', NULL, '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00', '2019-01-30', '2019-01-30', 3),
(4, '0', 3, '', 0, 'Flow Transmiter', 15, NULL, '4', 0, 2, '2019-02-02', '2019-02-05', NULL, '2019-02-03', '2019-02-07', '2019-03-03', '0000-00-00', '2019-02-02', '2019-01-31', '2019-01-31', '2019-01-31', 3);

-- --------------------------------------------------------

--
-- Struktur dari tabel `penawaran`
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
-- Dumping data untuk tabel `penawaran`
--

INSERT INTO `penawaran` (`id`, `id_user`, `id_material`, `file_administrasi`, `file_teknis`, `review_engineering`, `file_review_eng`, `deskripsi`, `tgl_create`) VALUES
(1, 4, 4, 'DRL-1 Supplier Data Requirements - Magnetic Flow Transmitter.xlsx', 'DRL-3 Exception-Deviation List - Magnetic Flow Transmitter.doc', 'ada yang kurang di poin 001', 'Report TKDN SA 12C COT 31 May 2018.pdf', 'Dokumen tender untuk penawaran flow transmiter proyek feni', '2019-01-31'),
(2, 6, 4, 'Report TKDN SA 12C COT 31 May 2018.pdf', 'Update Progress EPC Juni 18.xlsx', 'sudah pas', 'Report TKDN SA 12C COT 31 May 2018.pdf', '-', '2019-01-31');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pengajuan`
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
-- Dumping data untuk tabel `pengajuan`
--

INSERT INTO `pengajuan` (`id`, `id_material`, `id_pengaju`, `jumlah`, `disetujui`, `pic_wh`, `tgl_setujui`, `diterima`, `id_penerima`, `tgl_diterima`, `tgl_create`) VALUES
(1, 4, 52, 2, 3, 11, '2019-01-31', 0, 52, '2019-01-31', '2019-01-31');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pengiriman`
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
-- Dumping data untuk tabel `pengiriman`
--

INSERT INTO `pengiriman` (`id_material`, `actual_pengiriman`, `plan_penerimaan`, `tujuan`, `status`, `pic`, `actual_penerimaan`, `tgl_create`) VALUES
(4, '0000-00-00', '2019-03-03', 'Warehouse Pusat', '', 9, '2019-01-31', '2019-01-31');

-- --------------------------------------------------------

--
-- Struktur dari tabel `penilaian`
--

CREATE TABLE `penilaian` (
  `id` int(11) NOT NULL,
  `aspek_penilaian` varchar(100) NOT NULL,
  `hari` int(11) NOT NULL,
  `tgl_create` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `permintaan`
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
-- Dumping data untuk tabel `permintaan`
--

INSERT INTO `permintaan` (`id_material`, `file`, `status`, `deskripsi`, `deadline_tutup`, `actual_tutup`, `plan_pemenang`, `actual_pemenang`, `tgl_create`, `pic`) VALUES
(4, 'DRL-4 List of Special Tools - Magnetic Flow Transmitter.doc', NULL, 'Permintaan Penawaran Flow transmitter untuk proyek Feni Haltim', '2019-02-10', '2019-01-31', '2019-02-17', '2019-01-31', '2019-01-31', 5);

-- --------------------------------------------------------

--
-- Struktur dari tabel `pni`
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
-- Dumping data untuk tabel `pni`
--

INSERT INTO `pni` (`id_material`, `desk`, `pic`, `file`, `pic_qc`, `plan_produksi`, `actual_produksi`, `progres`, `plan_inspeksi`, `actual_inspeksi`, `hasil_inspeksi`, `status_inspeksi`, `file_hasil_inspeksi`, `plan_repair`, `actual_repair`, `file_repair`, `tgl_create`) VALUES
(4, 'mantap', 8, 'Report TKDN SA 12C COT 31 May 2018.pdf', 10, '2019-03-05', '2019-01-31', '100', '2019-02-02', '2019-01-31', 'baguss', 'Lulus', 'Report TKDN SA 12C COT 31 May 2018.pdf', NULL, NULL, NULL, '2019-01-31');

-- --------------------------------------------------------

--
-- Struktur dari tabel `produksi`
--

CREATE TABLE `produksi` (
  `id` int(11) NOT NULL,
  `id_material` int(11) NOT NULL,
  `progres` int(11) NOT NULL,
  `keterangan` text NOT NULL,
  `tgl_create` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `status`
--

CREATE TABLE `status` (
  `id` float NOT NULL,
  `namaStatus` varchar(50) NOT NULL,
  `keterangan` varchar(110) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `status`
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
-- Struktur dari tabel `user`
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
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id`, `nama`, `alamat`, `email`, `telp`, `username`, `password`, `enkrip`, `role`, `kodeAsrama`) VALUES
(3, 'Heldi', '-', '-', '081348924409', 'Engineering', 'c8918242d6e22477e4836c734d839fdb', '5c517b3b8cf510.40887171', 'Engineering', ''),
(4, 'Vendor1', '-', '-', '085711112212', 'Vendor1', 'a5f40f0fe04a6fdc0e423e17cb44e984', '5be05f019290b0.38714493', 'Vendor', ''),
(5, 'Pengadaan', '-', '-', '085711112216', 'Pengadaan', 'a5f40f0fe04a6fdc0e423e17cb44e984', '5be05f019290b0.38714493', 'Pengadaan', ''),
(6, 'Vendor2', '-', '-', '085711112220', 'Vendor2', 'a5f40f0fe04a6fdc0e423e17cb44e984', '5be05f019290b0.38714493', 'Vendor', ''),
(7, 'Client', '-', '-', '085711112224', 'Client', 'a5f40f0fe04a6fdc0e423e17cb44e984', '5be05f019290b0.38714493', 'Client', ''),
(8, 'Expedeting', '-', '-', '085711112228', 'Expedeting', 'a5f40f0fe04a6fdc0e423e17cb44e984', '5be05f019290b0.38714493', 'Expedeting', ''),
(9, 'Traffic', '-', '-', '085711112232', 'Traffic', 'a5f40f0fe04a6fdc0e423e17cb44e984', '5be05f019290b0.38714493', 'Traffic', ''),
(10, 'QC', '-', '-', '085711112236', 'QC', 'a5f40f0fe04a6fdc0e423e17cb44e984', '5be05f019290b0.38714493', 'QC', ''),
(11, 'Warehouse', '-', '-', '085711112240', 'Warehouse', 'a5f40f0fe04a6fdc0e423e17cb44e984', '5be05f019290b0.38714493', 'Warehouse', ''),
(51, 'Admin', '-', '-', '089673569437', 'admin', 'a5f40f0fe04a6fdc0e423e17cb44e984', '5be05f019290b0.38714493', 'Admin', ''),
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
-- Indeks untuk tabel `client`
--
ALTER TABLE `client`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `client_respon`
--
ALTER TABLE `client_respon`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `dok_eng`
--
ALTER TABLE `dok_eng`
  ADD PRIMARY KEY (`id_material`);

--
-- Indeks untuk tabel `hasilinspeksiwh`
--
ALTER TABLE `hasilinspeksiwh`
  ADD PRIMARY KEY (`id_material`);

--
-- Indeks untuk tabel `hasilpni`
--
ALTER TABLE `hasilpni`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `hasilrepair`
--
ALTER TABLE `hasilrepair`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `irn`
--
ALTER TABLE `irn`
  ADD PRIMARY KEY (`id_material`);

--
-- Indeks untuk tabel `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `kom`
--
ALTER TABLE `kom`
  ADD PRIMARY KEY (`id_material`);

--
-- Indeks untuk tabel `kontrak`
--
ALTER TABLE `kontrak`
  ADD PRIMARY KEY (`id_material`);

--
-- Indeks untuk tabel `log`
--
ALTER TABLE `log`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `material`
--
ALTER TABLE `material`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `penawaran`
--
ALTER TABLE `penawaran`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `pengajuan`
--
ALTER TABLE `pengajuan`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `pengiriman`
--
ALTER TABLE `pengiriman`
  ADD PRIMARY KEY (`id_material`);

--
-- Indeks untuk tabel `penilaian`
--
ALTER TABLE `penilaian`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `permintaan`
--
ALTER TABLE `permintaan`
  ADD PRIMARY KEY (`id_material`);

--
-- Indeks untuk tabel `pni`
--
ALTER TABLE `pni`
  ADD PRIMARY KEY (`id_material`);

--
-- Indeks untuk tabel `produksi`
--
ALTER TABLE `produksi`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `status`
--
ALTER TABLE `status`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `client`
--
ALTER TABLE `client`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `client_respon`
--
ALTER TABLE `client_respon`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `hasilpni`
--
ALTER TABLE `hasilpni`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `hasilrepair`
--
ALTER TABLE `hasilrepair`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `irn`
--
ALTER TABLE `irn`
  MODIFY `id_material` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `kategori`
--
ALTER TABLE `kategori`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `log`
--
ALTER TABLE `log`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=54;

--
-- AUTO_INCREMENT untuk tabel `material`
--
ALTER TABLE `material`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `penawaran`
--
ALTER TABLE `penawaran`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `pengajuan`
--
ALTER TABLE `pengajuan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `produksi`
--
ALTER TABLE `produksi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=58;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
