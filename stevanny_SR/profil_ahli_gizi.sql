-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 16 Nov 2018 pada 06.11
-- Versi Server: 10.1.13-MariaDB
-- PHP Version: 5.6.20

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `profil_ahli_gizi`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id_user` varchar(10) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `no_hp` int(15) NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `email` varchar(40) NOT NULL,
  `password` varchar(10) NOT NULL,
  `tempat_lahir` varchar(20) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `status` enum('kawin','belum kawin','','') NOT NULL,
  `agama` enum('islam','kristen(protestan)','katholik','hindu','budha','khonghucu') NOT NULL,
  `tinggi_badan` int(3) NOT NULL,
  `berat_badan` int(3) NOT NULL,
  `jenis_kelamin` enum('laki laki','perempuan','','') NOT NULL,
  `no_identitas` int(20) NOT NULL,
  `alamat_praktek` char(40) NOT NULL,
  `jam_praktek` int(4) NOT NULL,
  `tarif` int(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id_user`, `nama`, `no_hp`, `alamat`, `email`, `password`, `tempat_lahir`, `tanggal_lahir`, `status`, `agama`, `tinggi_badan`, `berat_badan`, `jenis_kelamin`, `no_identitas`, `alamat_praktek`, `jam_praktek`, `tarif`) VALUES
('1', 'stevanny', 853294473, 'banyumas', 'stevanny@gmail.com', '', 'banyumas', '2018-11-20', 'belum kawin', 'islam', 150, 49, 'perempuan', 12345, 'somagede', 1700, 100000),
('2', 'nina', 858750150, 'Somagede', 'ninabobo@gmail.com', 'nina123', 'banyumas', '2018-11-01', 'belum kawin', 'islam', 130, 25, 'perempuan', 23456, 'plana', 1300, 150000);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
