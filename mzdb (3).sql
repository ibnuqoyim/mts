-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 19 Des 2018 pada 10.43
-- Versi server: 10.1.31-MariaDB
-- Versi PHP: 5.6.34

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
(28, 50, 'Bagus', NULL, '2018-12-17');

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
(50, 'penguin-156616_960_720.png', 'CV_Muhamad Ibnu Q.pdf', NULL, NULL, NULL, '2018-12-31', '2018-12-17', NULL, NULL, NULL),
(51, 'HC.pdf', '', NULL, NULL, NULL, '2019-01-02', NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `hasilinspeksiwh`
--

CREATE TABLE `hasilinspeksiwh` (
  `id_material` int(11) NOT NULL,
  `file_hasil_inspeksi` varchar(110) NOT NULL,
  `hasil_inspeksi` varchar(100) NOT NULL,
  `pic` varchar(100) NOT NULL,
  `lokasi` varchar(100) NOT NULL,
  `tgl_create` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `hasilinspeksiwh`
--

INSERT INTO `hasilinspeksiwh` (`id_material`, `file_hasil_inspeksi`, `hasil_inspeksi`, `pic`, `lokasi`, `tgl_create`) VALUES
(50, 'html5.html', 'apa', '11', '', '2018-12-17');

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
  `plan_release` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `irn`
--

INSERT INTO `irn` (`id_material`, `irn`, `actual_release`, `plan_release`) VALUES
(50, '123', '2018-12-17', NULL);

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
(50, '2018-12-19', '2018-12-17', 'Tower 1 Wika', '2018-12-17', 8, 'test');

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
(50, 'HC.pdf', '5', '', '2018-12-17');

-- --------------------------------------------------------

--
-- Struktur dari tabel `log`
--

CREATE TABLE `log` (
  `id` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `kegiatan` varchar(110) NOT NULL,
  `tgl` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `log`
--

INSERT INTO `log` (`id`, `id_user`, `kegiatan`, `tgl`) VALUES
(109, 51, 'Berhasil login ke sistem', '2018-12-17 00:00:00'),
(110, 3, 'Berhasil login ke sistem', '2018-12-17 00:00:00'),
(111, 3, 'Mengajukan material baru', '2018-12-17 00:00:00'),
(112, 7, 'Berhasil login ke sistem', '2018-12-17 00:00:00'),
(113, 7, 'Memberikan approval untuk pengajuan material  Materia Z1', '2018-12-17 00:00:00'),
(114, 5, 'Berhasil login ke sistem', '2018-12-17 00:00:00'),
(115, 5, 'Upload dokumen permintaan penawaran vendor unuk pengadaan material  Materia Z1', '2018-12-17 00:00:00'),
(116, 6, 'Berhasil login ke sistem', '2018-12-17 00:00:00'),
(117, 6, 'Input penawaran untuk tender pengadaan material  Materia Z1', '2018-12-17 00:00:00'),
(118, 3, 'Berhasil login ke sistem', '2018-12-17 00:00:00'),
(119, 3, 'Memberikan memberikan review untuk penawaran  ', '2018-12-17 00:00:00'),
(120, 4, 'Berhasil login ke sistem', '2018-12-17 00:00:00'),
(121, 4, 'Input penawaran untuk tender pengadaan material  Materia Z1', '2018-12-17 00:00:00'),
(122, 5, 'Menutup tender untuk material Materia Z1', '2018-12-17 00:00:00'),
(123, 5, 'Menentukan pemenang tender untuk  Materia Z1', '2018-12-17 00:00:00'),
(124, 6, 'Berhasil login ke sistem', '2018-12-17 00:00:00'),
(125, 5, 'Upload dokumen kontrak untuk pengadaan material  Materia Z1', '2018-12-17 00:00:00'),
(126, 8, 'Berhasil login ke sistem', '2018-12-17 00:00:00'),
(127, 8, 'Membuat jadwal dan undangan untuk pelaksanaan Kick of Meeting pelaksanaan pengadaan material  Materia Z1', '2018-12-17 00:00:00'),
(128, 6, 'Mengkonfirmasi undangan Kick of Meeting untuk pengdaan material  Materia Z1', '2018-12-17 00:00:00'),
(129, 8, 'Upload dokumen Production and Inspection Plan untuk pengadaan material  Materia Z1', '2018-12-17 00:00:00'),
(130, 6, 'Update progres 25% untuk pengadaan material  Materia Z1', '2018-12-17 00:00:00'),
(131, 6, 'Update progres 100% untuk pengadaan material  Materia Z1', '2018-12-17 00:00:00'),
(132, 10, 'Berhasil login ke sistem', '2018-12-17 00:00:00'),
(133, 10, 'Upload dokumen hasil Inspeksi dari QC untuk material  Materia Z1 untuk status LULUS', '2018-12-17 11:57:07'),
(134, 10, 'Input IRN untuk material  Materia Z1', '2018-12-17 00:00:00'),
(135, 9, 'Berhasil login ke sistem', '2018-12-17 00:00:00'),
(136, 9, 'Input detail pengiriman untuk material  Materia Z1', '2018-12-17 00:00:00'),
(137, 11, 'Berhasil login ke sistem', '2018-12-17 00:00:00'),
(138, 11, 'Konfirmasi penerimaan material  Materia Z1', '2018-12-17 00:00:00'),
(139, 11, 'Menginput hasil inspeksi di warehouse untuk material  Materia Z1', '2018-12-17 00:00:00'),
(140, 51, 'Melihat log material Materia Z1', '2018-12-17 12:01:40'),
(141, 51, 'Melihat detail material Materia Z1', '2018-12-17 12:02:27'),
(142, 51, 'Berhasil login ke sistem', '2018-12-19 00:00:00'),
(143, 51, 'Mengajukan material baru', '2018-12-19 00:00:00');

-- --------------------------------------------------------

--
-- Struktur dari tabel `material`
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
-- Dumping data untuk tabel `material`
--

INSERT INTO `material` (`id`, `proyek`, `kategori`, `client`, `nama`, `status`, `progres`, `pemenang`, `stok`, `status_tender`, `plan_tender`, `plan_kontrak`, `plan_kom`, `plan_irn`, `plan_pengiriman`, `plan_penerimaan`, `plan_inspeksiwh`, `plan_finish`, `actual_finish`, `create_date`, `last_update`, `pic`) VALUES
(50, NULL, 1, 1, 'Materia Z1', 15, NULL, '6', 12, 2, '2018-12-19', '2018-12-22', NULL, '2018-12-20', '2018-12-24', '2018-12-19', '0000-00-00', '2018-12-19', '2018-12-17', '2018-12-17', '2018-12-17', 3),
(51, '332sd4', 1, 0, 'Pompa', 1, NULL, NULL, NULL, 0, NULL, NULL, NULL, '0000-00-00', NULL, '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00', '2018-12-19', '2018-12-19', 51);

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
(19, 6, 50, 'html4.html', 'index.html', 'test', 'html5.html', 'k;ksdkf;skfs;d', '2018-12-17'),
(20, 4, 50, 'html4.html', 'html5.html', '', '', 'test', '2018-12-17');

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
(50, '0000-00-00', '2018-12-19', 'Warehouse Surabaya', '', 9, '2018-12-17', '2018-12-17');

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
(50, 'Presentation1.pptx', NULL, 'dokumen', '2018-12-27', '2018-12-17', '2019-01-03', '2018-12-17', '2018-12-17', 5);

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
  `file_repair` varchar(100) DEFAULT NULL,
  `tgl_create` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `pni`
--

INSERT INTO `pni` (`id_material`, `desk`, `pic`, `file`, `pic_qc`, `plan_produksi`, `actual_produksi`, `progres`, `plan_inspeksi`, `actual_inspeksi`, `hasil_inspeksi`, `status_inspeksi`, `file_hasil_inspeksi`, `plan_repair`, `actual_repair`, `file_repair`, `tgl_create`) VALUES
(50, 'jkdjkjsf', 8, 'html4.html', 10, '2019-01-05', '2018-12-17', '100', '2018-12-19', '2018-12-17', 'test', 'Lulus', 'html4.html', NULL, NULL, NULL, '2018-12-17');

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
(52, 'Proyek', 'a', 'muhamadibnu9@gmail.com', '089673569437', 'Proyek', 'a5f40f0fe04a6fdc0e423e17cb44e984', '5be05f019290b0.38714493', 'Proyek', '');

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
-- Indeks untuk tabel `pengiriman`
--
ALTER TABLE `pengiriman`
  ADD PRIMARY KEY (`id_material`);

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

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
  MODIFY `id_material` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;

--
-- AUTO_INCREMENT untuk tabel `kategori`
--
ALTER TABLE `kategori`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `log`
--
ALTER TABLE `log`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=144;

--
-- AUTO_INCREMENT untuk tabel `material`
--
ALTER TABLE `material`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=52;

--
-- AUTO_INCREMENT untuk tabel `penawaran`
--
ALTER TABLE `penawaran`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT untuk tabel `produksi`
--
ALTER TABLE `produksi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=53;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
