-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 17 Des 2018 pada 11.10
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

-- --------------------------------------------------------

--
-- Struktur dari tabel `hasilinspeksiwh`
--

CREATE TABLE `hasilinspeksiwh` (
  `id_material` int(11) NOT NULL,
  `file_hasil_inspeksi` varchar(110) NOT NULL,
  `hasil_inspeksi` varchar(100) NOT NULL,
  `pic` varchar(100) NOT NULL,
  `tgl_create` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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
(109, 51, 'Berhasil login ke sistem', '2018-12-17 00:00:00');

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT untuk tabel `hasilpni`
--
ALTER TABLE `hasilpni`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT untuk tabel `hasilrepair`
--
ALTER TABLE `hasilrepair`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `irn`
--
ALTER TABLE `irn`
  MODIFY `id_material` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=50;

--
-- AUTO_INCREMENT untuk tabel `kategori`
--
ALTER TABLE `kategori`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `log`
--
ALTER TABLE `log`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=110;

--
-- AUTO_INCREMENT untuk tabel `material`
--
ALTER TABLE `material`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=50;

--
-- AUTO_INCREMENT untuk tabel `penawaran`
--
ALTER TABLE `penawaran`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT untuk tabel `produksi`
--
ALTER TABLE `produksi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=58;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
