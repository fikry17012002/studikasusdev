-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 17 Nov 2022 pada 14.43
-- Versi server: 10.4.11-MariaDB
-- Versi PHP: 7.4.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `database_airport`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_flights`
--

CREATE TABLE `tb_flights` (
  `id_penerbangan` int(11) NOT NULL,
  `no_penerbangan` varchar(10) NOT NULL,
  `pesawat` varchar(30) NOT NULL,
  `kedatangan` varchar(20) NOT NULL,
  `keberangkatan` varchar(20) NOT NULL,
  `tanggal` date NOT NULL,
  `waktu` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_flights`
--

INSERT INTO `tb_flights` (`id_penerbangan`, `no_penerbangan`, `pesawat`, `kedatangan`, `keberangkatan`, `tanggal`, `waktu`) VALUES
(1, '547', 'Boeing 737 (A320)', 'Jakarta', 'Singapore', '2022-07-28', '09:20:00'),
(2, '315', 'Boeing 737 (A550)', 'Jakarta', 'Bali', '2022-07-28', '19:00:00'),
(3, '366', 'Boeing 747 (A530)', 'Jakarta', 'Solo', '2022-07-28', '09:20:00'),
(4, '326', 'Airbus A33 (B120)', 'Jakarta', 'Surabaya', '2022-07-28', '09:20:00');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_plans`
--

CREATE TABLE `tb_plans` (
  `id_pesawat` int(11) NOT NULL,
  `id_penerbangan` int(11) NOT NULL,
  `no_tiket` int(11) NOT NULL,
  `pesawat` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_plans`
--

INSERT INTO `tb_plans` (`id_pesawat`, `id_penerbangan`, `no_tiket`, `pesawat`) VALUES
(1, 1, 1, 'Boeing 737 (A320)'),
(3, 2, 3, 'Boeing 747 (A530)'),
(4, 3, 4, 'Airbus A33 (B120)'),
(5, 4, 5, 'Airbus A33');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_users`
--

CREATE TABLE `tb_users` (
  `id_pengguna` int(30) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `no_handphone` varchar(14) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_users`
--

INSERT INTO `tb_users` (`id_pengguna`, `nama`, `no_handphone`) VALUES
(1, 'Dimas', '0851231231'),
(2, 'Dian', '0851231232'),
(3, 'Budi', '0851231233'),
(4, 'Keisya', '0851231234'),
(5, 'Rose', '0851231235');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_users_flights`
--

CREATE TABLE `tb_users_flights` (
  `id_tiket` int(11) NOT NULL,
  `id_pengguna` int(11) NOT NULL,
  `id_penerbangan` int(11) NOT NULL,
  `kursi` varchar(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_users_flights`
--

INSERT INTO `tb_users_flights` (`id_tiket`, `id_pengguna`, `id_penerbangan`, `kursi`) VALUES
(1, 1, 2, 'A31'),
(2, 2, 2, 'A32'),
(3, 4, 1, 'D10'),
(4, 5, 3, 'B14');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tb_flights`
--
ALTER TABLE `tb_flights`
  ADD PRIMARY KEY (`id_penerbangan`),
  ADD KEY `pesawat` (`pesawat`);

--
-- Indeks untuk tabel `tb_plans`
--
ALTER TABLE `tb_plans`
  ADD PRIMARY KEY (`id_pesawat`),
  ADD KEY `pesawat` (`pesawat`),
  ADD KEY `id_penerbangan` (`no_tiket`),
  ADD KEY `pesawat_2` (`pesawat`),
  ADD KEY `id_penerbangan_2` (`id_penerbangan`);
ALTER TABLE `tb_plans` ADD FULLTEXT KEY `pesawat_3` (`pesawat`);
ALTER TABLE `tb_plans` ADD FULLTEXT KEY `pesawat_4` (`pesawat`);

--
-- Indeks untuk tabel `tb_users`
--
ALTER TABLE `tb_users`
  ADD PRIMARY KEY (`id_pengguna`);

--
-- Indeks untuk tabel `tb_users_flights`
--
ALTER TABLE `tb_users_flights`
  ADD PRIMARY KEY (`id_tiket`),
  ADD KEY `id_pengguna` (`id_pengguna`,`id_penerbangan`),
  ADD KEY `id_penerbangan` (`id_penerbangan`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `tb_flights`
--
ALTER TABLE `tb_flights`
  MODIFY `id_penerbangan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `tb_plans`
--
ALTER TABLE `tb_plans`
  MODIFY `id_pesawat` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `tb_users_flights`
--
ALTER TABLE `tb_users_flights`
  MODIFY `id_tiket` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `tb_plans`
--
ALTER TABLE `tb_plans`
  ADD CONSTRAINT `tb_plans_ibfk_1` FOREIGN KEY (`id_penerbangan`) REFERENCES `tb_flights` (`id_penerbangan`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `tb_users_flights`
--
ALTER TABLE `tb_users_flights`
  ADD CONSTRAINT `tb_users_flights_ibfk_1` FOREIGN KEY (`id_pengguna`) REFERENCES `tb_users` (`id_pengguna`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `tb_users_flights_ibfk_2` FOREIGN KEY (`id_penerbangan`) REFERENCES `tb_flights` (`id_penerbangan`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
