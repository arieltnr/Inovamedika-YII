-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 21 Jul 2022 pada 06.42
-- Versi server: 10.4.24-MariaDB
-- Versi PHP: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `inovamedika`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `migration`
--

CREATE TABLE `migration` (
  `version` varchar(180) NOT NULL,
  `apply_time` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `migration`
--

INSERT INTO `migration` (`version`, `apply_time`) VALUES
('m000000_000000_base', 1658251629),
('m130524_201442_init', 1658256243),
('m190124_110200_add_verification_token_column_to_user_table', 1658256243);

-- --------------------------------------------------------

--
-- Struktur dari tabel `obat`
--

CREATE TABLE `obat` (
  `id_obt` char(11) NOT NULL,
  `nama_obt` varchar(30) NOT NULL,
  `jenis_obt` varchar(20) NOT NULL,
  `harga` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `obat`
--

INSERT INTO `obat` (`id_obt`, `nama_obt`, `jenis_obt`, `harga`) VALUES
('O01', 'Obeha Komix', 'Batuk & Flu', 6000),
('O02', 'Paracetamol', 'Demam', 7000),
('O03', 'Freshcare', 'Minyak Angin', 10000),
('O04', 'Bodrex', 'Sakit Kepala', 10000);

-- --------------------------------------------------------

--
-- Struktur dari tabel `pasien`
--

CREATE TABLE `pasien` (
  `id_psn` int(11) NOT NULL,
  `nik` int(16) NOT NULL,
  `nama_psn` varchar(50) NOT NULL,
  `gender_psn` enum('Pria','Wanita') NOT NULL,
  `alamat_psn` text NOT NULL,
  `usia` int(11) NOT NULL,
  `no_hp` char(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `pasien`
--

INSERT INTO `pasien` (`id_psn`, `nik`, `nama_psn`, `gender_psn`, `alamat_psn`, `usia`, `no_hp`) VALUES
(3, 24455665, 'Ijah', 'Wanita', 'Cicalengka', 44, '82345758'),
(4, 858758478, 'Hendra', 'Pria', 'Karawangn', 81, '221394848'),
(6, 3424823, 'Mintarsih', 'Wanita', 'Lebak Bulus', 31, '0873748954'),
(7, 63466382, 'Gunawan', 'Pria', 'Tanjung Sari', 24, '0213385856'),
(8, 87777777, 'Xavier', 'Pria', 'Spanyol', 34, '083343444'),
(9, 4444444, 'Sherla', 'Wanita', 'Bojong', 22, '02233938488');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pegawai`
--

CREATE TABLE `pegawai` (
  `id_krywn` int(11) NOT NULL,
  `nip` int(20) NOT NULL,
  `nama_krywn` varchar(50) NOT NULL,
  `gender_krywn` enum('Pria','Wanita') NOT NULL,
  `alamat_krywn` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `pegawai`
--

INSERT INTO `pegawai` (`id_krywn`, `nip`, `nama_krywn`, `gender_krywn`, `alamat_krywn`) VALUES
(1, 11111, 'Bambang', 'Pria', 'Cikarang Selatan'),
(2, 22222, 'Susi', 'Wanita', 'Surabaya');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pendaftaran`
--

CREATE TABLE `pendaftaran` (
  `id_pdf` char(10) NOT NULL,
  `nik` int(20) NOT NULL,
  `tgl_pdf` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `total` int(11) NOT NULL,
  `ket` char(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `pendaftaran`
--

INSERT INTO `pendaftaran` (`id_pdf`, `nik`, `tgl_pdf`, `total`, `ket`) VALUES
('P01', 63466382, '2022-07-17 20:56:54', 417000, 'Selesai'),
('P02', 858758478, '2022-07-17 21:07:36', 223000, 'Selesai'),
('P03', 555555, '2022-07-18 22:40:31', 37000, 'Selesai'),
('P04', 24455665, '2022-07-19 01:49:56', 327000, 'Selesai');

-- --------------------------------------------------------

--
-- Struktur dari tabel `rincian_daftar`
--

CREATE TABLE `rincian_daftar` (
  `id_rc` int(11) NOT NULL,
  `id_pdf` char(10) NOT NULL,
  `id_tdk` char(10) NOT NULL,
  `id_obt` char(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `rincian_daftar`
--

INSERT INTO `rincian_daftar` (`id_rc`, `id_pdf`, `id_tdk`, `id_obt`) VALUES
(199, 'P01', 'T01', 'O02'),
(200, 'P01', 'T01', 'O03'),
(201, 'P02', 'T03', 'O01'),
(202, 'P02', 'T03', 'O02'),
(203, 'P02', 'T03', 'O03'),
(212, 'P03', 'T05', 'O02'),
(213, 'P03', 'T05', 'O03'),
(214, 'P04', 'T07', 'O02'),
(215, 'P04', 'T07', 'O03'),
(216, 'P04', 'T07', 'O04');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tindakan`
--

CREATE TABLE `tindakan` (
  `id_tdk` char(10) NOT NULL,
  `nama_tdk` varchar(30) NOT NULL,
  `biaya` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tindakan`
--

INSERT INTO `tindakan` (`id_tdk`, `nama_tdk`, `biaya`) VALUES
('T01', 'Operasi', 400000),
('T02', 'Rawat Inap', 100000),
('T03', 'UGD', 200000),
('T05', 'Cek Darah', 20000),
('T06', 'Suntik Imun', 30000),
('T07', 'Bersalin', 300000),
('T08', 'Kretek Abal', 40000);

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `nip` int(11) NOT NULL,
  `username` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `auth_key` varchar(32) COLLATE utf8_unicode_ci NOT NULL,
  `password_hash` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password_reset_token` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `status` smallint(6) NOT NULL DEFAULT 10,
  `created_at` int(11) NOT NULL,
  `updated_at` int(11) NOT NULL,
  `verification_token` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id`, `nip`, `username`, `auth_key`, `password_hash`, `password_reset_token`, `email`, `status`, `created_at`, `updated_at`, `verification_token`) VALUES
(2, 11111, 'admin', '4UAot9ASdd3QrR5Y2RlsAukI2Wc-spMr', '$2y$13$3GDNHl3fetOG69V.7mjfT.VtLMLGeYlvDjNr5nZFFrLFSAjRkt3Wy', NULL, 'admin@admin.com', 10, 1658256430, 1658256430, 'yTs2zdBoo3M76aoiZ1TM-aJ5BPbPhuDz_1658256430'),
(3, 22222, 'operator', 'W3KDvut0VvwaW7pTkyexxQXVKDOZ9zHc', '$2y$13$cSotAT8MN8dsUuZpxqg4Au/.0l6n2ci1tXO9LN8xVWR3glD4vtZ1a', NULL, 'operator@operator.com', 10, 1658307342, 1658307342, 'nTvbi03JJz33Yq3u0xnIbENJz2rJVGqv_1658307342');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `migration`
--
ALTER TABLE `migration`
  ADD PRIMARY KEY (`version`);

--
-- Indeks untuk tabel `obat`
--
ALTER TABLE `obat`
  ADD PRIMARY KEY (`id_obt`);

--
-- Indeks untuk tabel `pasien`
--
ALTER TABLE `pasien`
  ADD PRIMARY KEY (`id_psn`);

--
-- Indeks untuk tabel `pegawai`
--
ALTER TABLE `pegawai`
  ADD PRIMARY KEY (`id_krywn`);

--
-- Indeks untuk tabel `pendaftaran`
--
ALTER TABLE `pendaftaran`
  ADD PRIMARY KEY (`id_pdf`);

--
-- Indeks untuk tabel `rincian_daftar`
--
ALTER TABLE `rincian_daftar`
  ADD PRIMARY KEY (`id_rc`);

--
-- Indeks untuk tabel `tindakan`
--
ALTER TABLE `tindakan`
  ADD PRIMARY KEY (`id_tdk`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `password_reset_token` (`password_reset_token`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `pasien`
--
ALTER TABLE `pasien`
  MODIFY `id_psn` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT untuk tabel `pegawai`
--
ALTER TABLE `pegawai`
  MODIFY `id_krywn` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `rincian_daftar`
--
ALTER TABLE `rincian_daftar`
  MODIFY `id_rc` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=217;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
