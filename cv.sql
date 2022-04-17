-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Waktu pembuatan: 15 Apr 2022 pada 16.07
-- Versi server: 5.7.33
-- Versi PHP: 7.4.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cv`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_edu`
--

CREATE TABLE `tb_edu` (
  `edu_id` int(5) NOT NULL,
  `edu_name` varchar(50) NOT NULL,
  `edu_in` date NOT NULL,
  `edu_out` date NOT NULL,
  `edu_detail` varchar(50) NOT NULL,
  `edu_addres` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_edu`
--

INSERT INTO `tb_edu` (`edu_id`, `edu_name`, `edu_in`, `edu_out`, `edu_detail`, `edu_addres`) VALUES
(1, 'MIS NURUL FALAH CIAWITALI', '2007-03-01', '2013-02-01', 'SEKOLAH DASAR', 'Kp. Ciawitali,RT 01/RW 11, -, Kec. Takokak, Kab. Cianjur Prov. Jawa Barat '),
(2, 'SMP NEGERI 1 TAKOKAK', '2011-04-09', '2014-04-17', 'SEKOLAH MENENGAH PERTAMAN', 'Jl.pahlawan No.03 Takokak Cianjur, Pasawahan, Kec. Takokak, Kab. Cianjur Prov. Jawa Barat'),
(3, 'SMK NEGERI ! TAKOKAK', '2017-04-20', '2020-04-16', 'SEKOLAH MENENGAH KEJURUAN', 'Jl. Pasangrahan Ds. Pasawahan Takokak, Cianjur'),
(4, 'UNiversitas Muhamadiyah SukabuMI', '2020-11-04', '2024-10-17', 'PERGURUAN TINGGI', 'Jl. R. Syamsudin, S.H. No. 50, Cikole, Kec. Cikole, Kota Sukabumi, Jawa Barat');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tb_edu`
--
ALTER TABLE `tb_edu`
  ADD PRIMARY KEY (`edu_id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `tb_edu`
--
ALTER TABLE `tb_edu`
  MODIFY `edu_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
