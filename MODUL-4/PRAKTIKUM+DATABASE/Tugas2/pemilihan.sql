-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 02 Bulan Mei 2021 pada 17.23
-- Versi server: 10.4.14-MariaDB
-- Versi PHP: 7.2.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pemilihan`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_poll`
--

CREATE TABLE `tbl_poll` (
  `poll_id` int(11) NOT NULL,
  `php_framework` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_poll`
--

INSERT INTO `tbl_poll` (`poll_id`, `php_framework`) VALUES
(1, 'Laravel'),
(2, 'CakePHP'),
(3, 'CodeIgniter'),
(4, 'CodeIgniter'),
(5, 'Phalcon'),
(6, 'Symfony'),
(7, 'Phalcon'),
(8, 'Phalcon'),
(9, 'CodeIgniter'),
(10, 'CodeIgniter'),
(11, 'CodeIgniter'),
(12, 'CodeIgniter'),
(13, 'Symfony'),
(14, 'Symfony'),
(15, 'Symfony'),
(16, 'Symfony'),
(17, 'Symfony'),
(18, 'Laravel'),
(19, 'Joko'),
(20, 'Wowo'),
(21, 'Abdurrahman'),
(22, 'Wowo'),
(23, 'Bambang'),
(24, 'Wati'),
(25, 'Wowo'),
(26, 'Wowo'),
(27, 'Abdurrahman'),
(28, 'Abdurrahman'),
(29, 'Joko'),
(30, 'Wati'),
(31, 'Wati'),
(32, 'Wati'),
(33, 'Wati'),
(34, 'Wati');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tbl_poll`
--
ALTER TABLE `tbl_poll`
  ADD PRIMARY KEY (`poll_id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `tbl_poll`
--
ALTER TABLE `tbl_poll`
  MODIFY `poll_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
