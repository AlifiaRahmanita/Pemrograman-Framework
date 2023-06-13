-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 13 Jun 2023 pada 14.11
-- Versi server: 10.4.25-MariaDB
-- Versi PHP: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_film`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `film`
--

CREATE TABLE `film` (
  `id` int(11) NOT NULL,
  `nama_film` varchar(200) NOT NULL,
  `id_genre` int(11) NOT NULL,
  `duration` varchar(50) CHARACTER SET utf8 NOT NULL,
  `cover` varchar(200) CHARACTER SET utf8 NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `update_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `film`
--

INSERT INTO `film` (`id`, `nama_film`, `id_genre`, `duration`, `cover`, `created_at`, `update_at`) VALUES
(1, 'Avenger', 2, '1 jam 20 menit', 'avanger.jpg', '2023-06-07 01:23:32', '2023-06-07 01:23:32'),
(2, 'Gatot Kaca', 3, '1 jam 10 menit', 'gatotkaca.jpg', '2023-06-07 01:23:32', '2023-06-07 01:23:32'),
(3, 'Akhirat', 1, '1 jam 20 menit', 'akhirat.jpg', '2023-06-07 01:23:32', '2023-06-07 01:23:32'),
(4, 'My Stupid Boss', 3, '1 jam 10 menit', 'my stupid boss.jpg', '2023-06-07 01:23:32', '2023-06-07 01:23:32'),
(5, 'Khanzab', 1, '1 jam 5 menit', 'akhirat.jpg', '2023-06-07 01:23:32', '2023-06-07 01:23:32'),
(6, 'Keluarga Cemara', 3, '1 jam 12 menit', 'keluarga cemara.jpg', '2023-06-07 01:23:32', '2023-06-07 01:23:32'),
(7, 'Despicable me', 2, '1 jam4 menit', 'despicable.jpg', '2023-06-07 01:23:32', '2023-06-07 01:23:32'),
(8, 'Buya Hamka', 3, '1 jam 3 menit', 'buya hamka.jpg', '2023-06-07 01:23:32', '2023-06-07 01:23:32'),
(9, 'Aku Bukan Wanita Pilihan', 3, '1 jam 5 menit', 'aku bukan wanita pilihan.jpg', '2023-06-07 01:23:32', '2023-06-07 01:23:32'),
(10, 'Transformers', 2, '1 jam 30 menit', 'Capture.PNG', '2023-06-07 01:23:32', '2023-06-07 01:23:32');

-- --------------------------------------------------------

--
-- Struktur dari tabel `genre`
--

CREATE TABLE `genre` (
  `id` int(11) NOT NULL,
  `nama_genre` varchar(100) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `genre`
--

INSERT INTO `genre` (`id`, `nama_genre`, `created_at`, `updated_at`) VALUES
(1, 'Horor', '2023-06-13 09:57:23', '2023-06-13 09:57:23'),
(2, 'Animasi', '2023-06-13 09:57:23', '2023-06-13 09:57:23'),
(3, 'Action', '2023-06-13 09:57:23', '2023-06-13 09:57:23');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `film`
--
ALTER TABLE `film`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_genre` (`id_genre`);

--
-- Indeks untuk tabel `genre`
--
ALTER TABLE `genre`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `film`
--
ALTER TABLE `film`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT untuk tabel `genre`
--
ALTER TABLE `genre`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `film`
--
ALTER TABLE `film`
  ADD CONSTRAINT `film_ibfk_1` FOREIGN KEY (`id_genre`) REFERENCES `genre` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
