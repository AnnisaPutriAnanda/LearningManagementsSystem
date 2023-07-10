-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 10, 2023 at 03:30 AM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sistem_ujian`
--

-- --------------------------------------------------------

--
-- Table structure for table `alur_kelas`
--

CREATE TABLE `alur_kelas` (
  `id` char(20) NOT NULL,
  `nama` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `alur_kelas`
--

INSERT INTO `alur_kelas` (`id`, `nama`) VALUES
('al01', 'Data'),
('al02', 'Website'),
('al03', 'tess');

-- --------------------------------------------------------

--
-- Table structure for table `detail_nilai`
--

CREATE TABLE `detail_nilai` (
  `id_detail_nilai` int(20) NOT NULL,
  `id_nilai` int(20) NOT NULL,
  `id_soal` int(20) NOT NULL,
  `jawaban` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `diskusi_kelas`
--

CREATE TABLE `diskusi_kelas` (
  `id_diskusi` int(20) NOT NULL,
  `id_user` int(20) NOT NULL,
  `id_kelas` int(20) NOT NULL,
  `review` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `kategori_kelas`
--

CREATE TABLE `kategori_kelas` (
  `id` char(20) NOT NULL,
  `nama` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `kategori_kelas`
--

INSERT INTO `kategori_kelas` (`id`, `nama`) VALUES
('kt01', 'Database'),
('kt02', 'Web'),
('kt03', 'tess');

-- --------------------------------------------------------

--
-- Table structure for table `kelas`
--

CREATE TABLE `kelas` (
  `id_kelas` char(20) NOT NULL,
  `id_kategori` char(20) NOT NULL,
  `id_level` char(20) NOT NULL,
  `id_tipe` char(20) NOT NULL,
  `id_alur` char(20) NOT NULL,
  `nama_kelas` varchar(50) NOT NULL,
  `harga_kelas` char(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `kelas`
--

INSERT INTO `kelas` (`id_kelas`, `id_kategori`, `id_level`, `id_tipe`, `id_alur`, `nama_kelas`, `harga_kelas`) VALUES
('kls01', 'kt01', 'lv01', 'tp01', 'al01', 'Mengenal_Database', ''),
('kls02', 'kt02', 'lv02', 'tp02', 'al02', 'Membuat_Website', '10.000'),
('kls03', 'kt01', 'lv02', 'tp02', 'al01', 'Membuat_Database', '10.000'),
('kls04', 'kt02', 'lv01', 'tp01', 'al02', 'Mengenal_Website', '');

-- --------------------------------------------------------

--
-- Table structure for table `lesson`
--

CREATE TABLE `lesson` (
  `id_lesson` int(20) NOT NULL,
  `id_section` int(20) NOT NULL,
  `nama_lesson` varchar(50) NOT NULL,
  `video_penjelasan` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `level_kelas`
--

CREATE TABLE `level_kelas` (
  `id` char(20) NOT NULL,
  `nama` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `level_kelas`
--

INSERT INTO `level_kelas` (`id`, `nama`) VALUES
('lv01', 'Beginner'),
('lv02', 'Intermediate'),
('lv03', 'tess');

-- --------------------------------------------------------

--
-- Table structure for table `nilai`
--

CREATE TABLE `nilai` (
  `id_nilai` int(20) NOT NULL,
  `id_kelas` int(20) NOT NULL,
  `id_user` int(20) NOT NULL,
  `jumlah_salah` int(50) NOT NULL,
  `jumlah_benar` int(50) NOT NULL,
  `jumlah_nilai` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `pekerjaan`
--

CREATE TABLE `pekerjaan` (
  `id_pekerjaan` int(20) NOT NULL,
  `nama` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `personal_goal`
--

CREATE TABLE `personal_goal` (
  `id_personal_goal` int(20) NOT NULL,
  `nama` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `profil`
--

CREATE TABLE `profil` (
  `id_profil` int(20) NOT NULL,
  `id_user` int(20) NOT NULL,
  `id_pekerjaan` int(20) NOT NULL,
  `id_personal_goal` int(20) NOT NULL,
  `avatar` text NOT NULL,
  `nama` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` int(40) NOT NULL,
  `no_telp` int(20) NOT NULL,
  `kota` varchar(40) NOT NULL,
  `negara` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `section`
--

CREATE TABLE `section` (
  `id_section` int(20) NOT NULL,
  `id_kelas` int(20) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `deskripsi` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `soal`
--

CREATE TABLE `soal` (
  `id_soal` char(20) NOT NULL,
  `id_kelas` char(20) NOT NULL,
  `jenis` enum('pretest','posttest') NOT NULL,
  `pertanyaan` text NOT NULL,
  `opsi1` text NOT NULL,
  `opsi2` text NOT NULL,
  `opsi3` text NOT NULL,
  `opsi4` text NOT NULL,
  `kunci` text NOT NULL,
  `urut` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `soal`
--

INSERT INTO `soal` (`id_soal`, `id_kelas`, `jenis`, `pertanyaan`, `opsi1`, `opsi2`, `opsi3`, `opsi4`, `kunci`, `urut`) VALUES
('sl01', 'kls01', 'pretest', 'Apa kepanjangan DBMS?', 'Database Management System', 'Dadang Bambang Mamang Samyang', 'Database Manipulation System', 'Data Managing System', 'Database Management System', 1),
('sl02', 'kls01', 'pretest', 'Apa kegunaan Database?', 'Menyimpan Perasaan', 'Menyimpan Data', 'Menyimpan Barang', 'Menyimpan Makanan', 'Menyimpan Data', 2),
('sl03', 'kls01', 'pretest', 'Jawabanya c', 'a', 'b', 'c', 'd', 'c', 3);

-- --------------------------------------------------------

--
-- Table structure for table `tipe_kelas`
--

CREATE TABLE `tipe_kelas` (
  `id` char(20) NOT NULL,
  `nama` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tipe_kelas`
--

INSERT INTO `tipe_kelas` (`id`, `nama`) VALUES
('tp01', 'freemium'),
('tp02', 'premium'),
('tp03', 'tess');

-- --------------------------------------------------------

--
-- Table structure for table `tools`
--

CREATE TABLE `tools` (
  `id_tools` int(20) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `gambar` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tools kelas`
--

CREATE TABLE `tools kelas` (
  `id_tools kelas` int(20) NOT NULL,
  `id_tools` int(20) NOT NULL,
  `id_kelas` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `transaksi`
--

CREATE TABLE `transaksi` (
  `id_transaksi` int(20) NOT NULL,
  `id_kelas` int(20) NOT NULL,
  `id_user` int(20) NOT NULL,
  `tanggal_bayar` date NOT NULL,
  `jumlah_bayar` char(50) NOT NULL,
  `rentang_waktu` time(6) NOT NULL,
  `status` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_user` int(20) NOT NULL,
  `username` char(50) NOT NULL,
  `password` char(30) NOT NULL,
  `level` enum('admin','pengguna') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `username`, `password`, `level`) VALUES
(1, 'pengguna01', 'pengguna01', 'pengguna'),
(2, 'admin01', 'admin01', 'admin'),
(3, 'pengguna02', 'pengguna02', 'pengguna'),
(4, 'admin02', 'admin02', 'admin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `alur_kelas`
--
ALTER TABLE `alur_kelas`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `detail_nilai`
--
ALTER TABLE `detail_nilai`
  ADD PRIMARY KEY (`id_detail_nilai`),
  ADD UNIQUE KEY `id_nilai` (`id_nilai`),
  ADD UNIQUE KEY `id_soal` (`id_soal`);

--
-- Indexes for table `diskusi_kelas`
--
ALTER TABLE `diskusi_kelas`
  ADD PRIMARY KEY (`id_diskusi`),
  ADD UNIQUE KEY `id_user` (`id_user`),
  ADD UNIQUE KEY `id_kelas` (`id_kelas`);

--
-- Indexes for table `kategori_kelas`
--
ALTER TABLE `kategori_kelas`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kelas`
--
ALTER TABLE `kelas`
  ADD PRIMARY KEY (`id_kelas`),
  ADD KEY `id_kategori` (`id_kategori`),
  ADD KEY `id_level` (`id_level`),
  ADD KEY `id_tipe` (`id_tipe`),
  ADD KEY `id_alur` (`id_alur`);

--
-- Indexes for table `lesson`
--
ALTER TABLE `lesson`
  ADD PRIMARY KEY (`id_lesson`),
  ADD UNIQUE KEY `id_section` (`id_section`);

--
-- Indexes for table `level_kelas`
--
ALTER TABLE `level_kelas`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `nilai`
--
ALTER TABLE `nilai`
  ADD PRIMARY KEY (`id_nilai`),
  ADD UNIQUE KEY `id_kelas` (`id_kelas`),
  ADD UNIQUE KEY `id_user` (`id_user`);

--
-- Indexes for table `pekerjaan`
--
ALTER TABLE `pekerjaan`
  ADD PRIMARY KEY (`id_pekerjaan`);

--
-- Indexes for table `personal_goal`
--
ALTER TABLE `personal_goal`
  ADD PRIMARY KEY (`id_personal_goal`);

--
-- Indexes for table `profil`
--
ALTER TABLE `profil`
  ADD PRIMARY KEY (`id_profil`),
  ADD UNIQUE KEY `id_profil` (`id_profil`,`id_user`),
  ADD UNIQUE KEY `id_pekerjaan` (`id_pekerjaan`),
  ADD UNIQUE KEY `id_personal_goal` (`id_personal_goal`);

--
-- Indexes for table `section`
--
ALTER TABLE `section`
  ADD PRIMARY KEY (`id_section`),
  ADD UNIQUE KEY `id_kelas` (`id_kelas`);

--
-- Indexes for table `soal`
--
ALTER TABLE `soal`
  ADD PRIMARY KEY (`id_soal`),
  ADD KEY `id_kelas` (`id_kelas`);

--
-- Indexes for table `tipe_kelas`
--
ALTER TABLE `tipe_kelas`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tools`
--
ALTER TABLE `tools`
  ADD PRIMARY KEY (`id_tools`);

--
-- Indexes for table `tools kelas`
--
ALTER TABLE `tools kelas`
  ADD PRIMARY KEY (`id_tools kelas`),
  ADD UNIQUE KEY `id_tools` (`id_tools`),
  ADD UNIQUE KEY `id_kelas` (`id_kelas`);

--
-- Indexes for table `transaksi`
--
ALTER TABLE `transaksi`
  ADD PRIMARY KEY (`id_transaksi`),
  ADD UNIQUE KEY `id_kelas` (`id_kelas`),
  ADD UNIQUE KEY `id_user` (`id_user`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `detail_nilai`
--
ALTER TABLE `detail_nilai`
  MODIFY `id_detail_nilai` int(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `diskusi_kelas`
--
ALTER TABLE `diskusi_kelas`
  MODIFY `id_diskusi` int(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `lesson`
--
ALTER TABLE `lesson`
  MODIFY `id_lesson` int(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `nilai`
--
ALTER TABLE `nilai`
  MODIFY `id_nilai` int(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pekerjaan`
--
ALTER TABLE `pekerjaan`
  MODIFY `id_pekerjaan` int(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `personal_goal`
--
ALTER TABLE `personal_goal`
  MODIFY `id_personal_goal` int(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `profil`
--
ALTER TABLE `profil`
  MODIFY `id_profil` int(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `section`
--
ALTER TABLE `section`
  MODIFY `id_section` int(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tools`
--
ALTER TABLE `tools`
  MODIFY `id_tools` int(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tools kelas`
--
ALTER TABLE `tools kelas`
  MODIFY `id_tools kelas` int(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `transaksi`
--
ALTER TABLE `transaksi`
  MODIFY `id_transaksi` int(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `kelas`
--
ALTER TABLE `kelas`
  ADD CONSTRAINT `kelas_ibfk_1` FOREIGN KEY (`id_tipe`) REFERENCES `tipe_kelas` (`id`),
  ADD CONSTRAINT `kelas_ibfk_2` FOREIGN KEY (`id_alur`) REFERENCES `alur_kelas` (`id`),
  ADD CONSTRAINT `kelas_ibfk_3` FOREIGN KEY (`id_level`) REFERENCES `level_kelas` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
