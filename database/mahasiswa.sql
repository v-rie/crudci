-- phpMyAdmin SQL Dump
-- version 4.4.15.9
-- https://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: 22 Jul 2018 pada 18.14
-- Versi Server: 5.6.37
-- PHP Version: 7.1.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_mahasiswa`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `mahasiswa`
--

CREATE TABLE IF NOT EXISTS `mahasiswa` (
  `id_mhs` int(15) NOT NULL COMMENT 'karena primary_key maka dibuat garis bawah',
  `namamhs` varchar(30) NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `jurusan` varchar(25) NOT NULL,
  `semester` int(3) NOT NULL,
  `perbarui` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `mahasiswa`
--

INSERT INTO `mahasiswa` (`id_mhs`, `namamhs`, `alamat`, `jurusan`, `semester`, `perbarui`) VALUES
(1, 'Feri Agusetiawan', 'Jepara', 'D3 Manajemen Informatika', 3, '2018-07-22 18:10:43'),
(2, 'Ridho Rananda', 'Pekalongan', 'D3 Manajemen Informatika', 3, '2018-07-22 18:10:43'),
(3, 'Revika Nurlita Sari', 'Semarang', 'D3 Manajemen Informatika', 3, '2018-07-22 18:12:06'),
(4, 'Yanna Fardety Nureviane', 'Semarang', 'D3 Manajemen Informatika', 3, '2018-07-22 18:12:06'),
(5, 'Achadina Zulfa', 'Rembang', 'D3 Manajemen Informatika', 3, '2018-07-22 18:13:07'),
(6, 'Indra Kurnia M.K', 'Kendal', 'D3 Manajemen Informatika', 3, '2018-07-22 18:13:07'),
(7, 'Winda Erlinasari', 'Kaliwungu', 'D3 Manajemen Informatika', 3, '2018-07-22 18:13:07');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `mahasiswa`
--
ALTER TABLE `mahasiswa`
  ADD PRIMARY KEY (`id_mhs`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `mahasiswa`
--
ALTER TABLE `mahasiswa`
  MODIFY `id_mhs` int(15) NOT NULL AUTO_INCREMENT COMMENT 'karena primary_key maka dibuat garis bawah',AUTO_INCREMENT=8;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
