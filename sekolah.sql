-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 16 Nov 2019 pada 09.39
-- Versi Server: 10.1.9-MariaDB
-- PHP Version: 5.6.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sekolah`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `admin`
--

INSERT INTO `admin` (`id`, `nama`, `username`, `password`) VALUES
(2, 'Nurul Anisa', 'anisadewi', 'd3ed68bcfb552cdee802c08d1772168d');

-- --------------------------------------------------------

--
-- Struktur dari tabel `datasiswa`
--

CREATE TABLE `datasiswa` (
  `id` int(50) NOT NULL,
  `kode` varchar(50) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `tanggal` date NOT NULL,
  `jenis` varchar(50) NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `nomor` int(50) NOT NULL,
  `asalsekolah` varchar(50) NOT NULL,
  `orangtua` varchar(50) NOT NULL,
  `jurusan` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `datasiswa`
--

INSERT INTO `datasiswa` (`id`, `kode`, `nama`, `tanggal`, `jenis`, `alamat`, `nomor`, `asalsekolah`, `orangtua`, `jurusan`) VALUES
(5, '', 'Nurul Anisa D  - edited', '1998-08-21', 'Perempuan', 'Jln Jeruk Nomor 60B', 217341339, 'SMP Islam', 'Mama', 'RPL');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pmb`
--

CREATE TABLE `pmb` (
  `id` int(25) NOT NULL,
  `namamahasiswa` varchar(100) NOT NULL,
  `nomorhandphone` int(25) NOT NULL,
  `nomorrumah` int(25) NOT NULL,
  `alamatrumah` varchar(50) NOT NULL,
  `alamatemail` varchar(50) NOT NULL,
  `jeniskelamin` varchar(50) NOT NULL,
  `kelas` varchar(50) NOT NULL,
  `fakultas` varchar(50) NOT NULL,
  `gelombang` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `pmb`
--

INSERT INTO `pmb` (`id`, `namamahasiswa`, `nomorhandphone`, `nomorrumah`, `alamatrumah`, `alamatemail`, `jeniskelamin`, `kelas`, `fakultas`, `gelombang`) VALUES
(6, 'Fernando Jovanca', 999, 999, 'jln jln ', 'nando@gmail.com', 'Perempuan', 'Reguler', 'Teknologi Informasi', 'Gelombang 2'),
(7, 'Nauval Abdul Nur', 999, 999, 'jln jln', 'nauval@gmail.com', '', 'Reguler', 'Fisika', 'Gelombang 1'),
(9, 'Fajar Ginestesia', 999, 999, 'jl jln', 'fajar@gmail.com', 'Laki-laki', 'Reguler', 'Fisika', 'Gelombang 1'),
(10, 'Nuruull Anisa D', 999, 999, 'jalan', 'nurulannisa098@gmail.com', 'Perempuan', 'Reguler', 'Hukum Internasional', 'Gelombang 3');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `datasiswa`
--
ALTER TABLE `datasiswa`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pmb`
--
ALTER TABLE `pmb`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `datasiswa`
--
ALTER TABLE `datasiswa`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `pmb`
--
ALTER TABLE `pmb`
  MODIFY `id` int(25) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
