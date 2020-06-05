-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 05 Jun 2020 pada 16.07
-- Versi server: 10.3.15-MariaDB
-- Versi PHP: 7.3.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `surat_disnaker`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `perusahaan`
--

CREATE TABLE `perusahaan` (
  `id_perusahaan` char(11) NOT NULL,
  `nama_perusahaan` varchar(50) NOT NULL,
  `alamat_perusahaan` varchar(100) NOT NULL,
  `nomor_telepon` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `perusahaan`
--

INSERT INTO `perusahaan` (`id_perusahaan`, `nama_perusahaan`, `alamat_perusahaan`, `nomor_telepon`) VALUES
('PT01', 'PT Astra Honda Motor', 'Karawang', '0877393472'),
('PT02', 'PT Daihatsu', 'Jakarta Utara', '975937523'),
('PT03', 'PT JVC', 'Karwang', '0437437'),
('PT04', 'PT Yamaha', 'Pulogadung\r\n', '9734598734');

-- --------------------------------------------------------

--
-- Struktur dari tabel `surat_keterangan_tka`
--

CREATE TABLE `surat_keterangan_tka` (
  `id_s_tka` char(10) NOT NULL,
  `id_tka` int(11) NOT NULL,
  `id_perusahaan` char(100) NOT NULL,
  `nip` bigint(18) NOT NULL,
  `alamat_perubahan` varchar(100) NOT NULL,
  `tanggal_surat` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `surat_keterangan_tka`
--

INSERT INTO `surat_keterangan_tka` (`id_s_tka`, `id_tka`, `id_perusahaan`, `nip`, `alamat_perubahan`, `tanggal_surat`) VALUES
('STKA01', 7, 'PT02', 0, 'Jl. Bukit Raya Indah No 23 Vassa Terrace Lippo Ciikarang Bekasi\r\n', '2020-06-05'),
('STKA02', 8, 'PT03', 0, 'Jawa timur', '2020-06-05');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tka`
--

CREATE TABLE `tka` (
  `id_tka` int(10) NOT NULL,
  `nama_tka` varchar(50) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `nama_perusahaan` varchar(50) NOT NULL,
  `tanggal` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tka`
--

INSERT INTO `tka` (`id_tka`, `nama_tka`, `alamat`, `nama_perusahaan`, `tanggal`) VALUES
(1, 'MASAO MOTANI', 'Karawang', 'PT ASTRA HONDA MOTOR', '2020-06-03'),
(7, 'KHOIRUL SYARIF', 'Jl. Nakula no 35 RT 09/06 kelurahan Slerok Tegal', 'PT ASTRA HONDA MOTOR', '2019-12-29'),
(8, 'ANDHIKA NUR HIDAYAT', 'Solo ', 'PT JVC', '2020-05-31');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `nip` bigint(18) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `nama_pengguna` varchar(100) NOT NULL,
  `level` enum('seksi','kadis') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`nip`, `username`, `password`, `nama_pengguna`, `level`) VALUES
(196306111990031004, 'Kepala Dinas', 'c4ca4238a0b923820dcc509a6f75849b', 'H.A.SUROTO,SE', 'kadis'),
(196306111990031005, 'Admin', 'c4ca4238a0b923820dcc509a6f75849b', 'Khoirul Syarif', 'seksi');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `perusahaan`
--
ALTER TABLE `perusahaan`
  ADD PRIMARY KEY (`id_perusahaan`);

--
-- Indeks untuk tabel `surat_keterangan_tka`
--
ALTER TABLE `surat_keterangan_tka`
  ADD PRIMARY KEY (`id_s_tka`),
  ADD KEY `id_tka` (`id_tka`),
  ADD KEY `id_perusahaan` (`id_perusahaan`);

--
-- Indeks untuk tabel `tka`
--
ALTER TABLE `tka`
  ADD PRIMARY KEY (`id_tka`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`nip`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `tka`
--
ALTER TABLE `tka`
  MODIFY `id_tka` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `surat_keterangan_tka`
--
ALTER TABLE `surat_keterangan_tka`
  ADD CONSTRAINT `surat_keterangan_tka_ibfk_1` FOREIGN KEY (`id_tka`) REFERENCES `tka` (`id_tka`),
  ADD CONSTRAINT `surat_keterangan_tka_ibfk_2` FOREIGN KEY (`id_perusahaan`) REFERENCES `perusahaan` (`id_perusahaan`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
