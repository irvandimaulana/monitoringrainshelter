-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 11 Sep 2024 pada 14.24
-- Versi server: 10.4.22-MariaDB
-- Versi PHP: 8.0.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sensor_db`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `data`
--

CREATE TABLE `data` (
  `id` int(30) NOT NULL,
  `tanah` int(30) NOT NULL,
  `cuaca` varchar(30) NOT NULL,
  `waktu` varchar(100) NOT NULL,
  `tanggal` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `data`
--

INSERT INTO `data` (`id`, `tanah`, `cuaca`, `waktu`, `tanggal`) VALUES
(199, 25, 'Terang', '23:51:16', '22 June 2024'),
(200, 24, 'Terang', '23:51:28', '22 June 2024'),
(201, 24, 'Terang', '23:51:30', '22 June 2024'),
(202, 24, 'Hujan', '23:53:17', '22 June 2024'),
(203, 23, 'Hujan', '00:00:09', '23 June 2024'),
(204, 23, 'Terang', '00:05:23', '23 June 2024'),
(205, 23, 'Terang', '00:06:43', '23 June 2024'),
(206, 23, 'Terang', '00:10:56', '23 June 2024'),
(207, 23, 'Terang', '00:11:05', '23 June 2024'),
(208, 23, 'Terang', '00:15:39', '23 June 2024'),
(209, 23, 'Terang', '12:11:01', '23 June 2024'),
(210, 23, 'Terang', '12:13:34', '23 June 2024'),
(211, 23, 'Terang', '12:18:43', '23 June 2024'),
(212, 23, 'Terang', '12:18:54', '23 June 2024'),
(213, 23, 'Terang', '12:21:45', '23 June 2024'),
(214, 23, 'Terang', '12:21:53', '23 June 2024'),
(215, 23, 'Terang', '12:22:08', '23 June 2024'),
(216, 23, 'Terang', '12:24:39', '23 June 2024'),
(217, 23, 'Terang', '13:04:39', '23 June 2024'),
(218, 23, 'Terang', '13:06:10', '23 June 2024'),
(219, 0, 'Terang', '21:02:28', '23 June 2024'),
(220, 41, 'Hujan', '21:08:00', '23 June 2024'),
(221, 50, 'Hujan', '21:09:33', '23 June 2024'),
(222, 40, 'Terang', '20:20:43', '02 July 2024'),
(223, 52, 'Terang', '20:21:04', '02 July 2024'),
(224, 50, 'Hujan', '20:21:27', '02 July 2024'),
(225, 0, 'Terang', '19:10:42', '11 September 2024'),
(226, 0, 'Terang', '19:10:42', '11 September 2024'),
(227, 0, 'Terang', '19:15:01', '11 September 2024');

-- --------------------------------------------------------

--
-- Struktur dari tabel `hujan`
--

CREATE TABLE `hujan` (
  `id` int(11) NOT NULL,
  `cuaca` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `hujan`
--

INSERT INTO `hujan` (`id`, `cuaca`) VALUES
(1, '1');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kel`
--

CREATE TABLE `kel` (
  `id` int(30) NOT NULL,
  `tanah` int(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `kel`
--

INSERT INTO `kel` (`id`, `tanah`) VALUES
(1, 0);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_user`
--

CREATE TABLE `tb_user` (
  `username` varchar(30) NOT NULL,
  `password` varchar(25) NOT NULL,
  `fullname` varchar(30) NOT NULL,
  `level` enum('Admin','Penggunjung') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_user`
--

INSERT INTO `tb_user` (`username`, `password`, `fullname`, `level`) VALUES
('soda', '123', 'soda', ''),
('yesmine', '123', 'yesmine', ''),
('Soda', '123', 'SodaLaBomba', ''),
('Yesmine', '123', 'Yesmine', ''),
('sodaa', '123', 'sodaa', ''),
('yesmine', '123', 'yesmine', ''),
('Yesminee', '123', 'Yesminee', ''),
('Soda', '123', 'Soda', ''),
('irvan', '1234', 'irvand', ''),
('y', '1', 'y', ''),
('i', '1', 'i', 'Admin'),
('r', '1', 'r', 'Penggunjung'),
('V', '1', 'V', 'Admin'),
('Irvandi', '123', 'Irvandi', 'Admin'),
('Yasmine', '123', 'Yasmine', 'Penggunjung'),
('p', '1qw', 'p', ''),
('Sonia', 'Penggunjung', 'Sonia', ''),
('q', 'q', 'q', 'Penggunjung'),
('Soniaa', 'sonia123', 'Soniaa', 'Penggunjung');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `data`
--
ALTER TABLE `data`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `hujan`
--
ALTER TABLE `hujan`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `kel`
--
ALTER TABLE `kel`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `data`
--
ALTER TABLE `data`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=228;

--
-- AUTO_INCREMENT untuk tabel `hujan`
--
ALTER TABLE `hujan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `kel`
--
ALTER TABLE `kel`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
