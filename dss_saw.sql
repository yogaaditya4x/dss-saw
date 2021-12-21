-- phpMyAdmin SQL Dump
-- version 4.9.5deb2
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Dec 22, 2021 at 04:45 AM
-- Server version: 8.0.27-0ubuntu0.20.04.1
-- PHP Version: 7.4.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dss_saw`
--

-- --------------------------------------------------------

--
-- Table structure for table `bobot`
--

CREATE TABLE `bobot` (
  `id_bobot` int NOT NULL,
  `kriteria` int NOT NULL,
  `bobot_w` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `c1`
--

CREATE TABLE `c1` (
  `id_c1` int NOT NULL,
  `pilihan_c1` varchar(128) NOT NULL,
  `bobot_c1` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `c2`
--

CREATE TABLE `c2` (
  `id_c2` int NOT NULL,
  `pilihan_c2` varchar(128) NOT NULL,
  `bobot_c2` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `c3`
--

CREATE TABLE `c3` (
  `id_c3` int NOT NULL,
  `pilihan_c3` varchar(128) NOT NULL,
  `bobot_c3` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `c4`
--

CREATE TABLE `c4` (
  `id_c4` int NOT NULL,
  `pilihan_c4` varchar(128) NOT NULL,
  `bobot_c4` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `c5`
--

CREATE TABLE `c5` (
  `id_c5` int NOT NULL,
  `pilihan_c5` varchar(128) NOT NULL,
  `bobot_c5` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `c6`
--

CREATE TABLE `c6` (
  `id_c6` int NOT NULL,
  `pilihan_c6` varchar(128) NOT NULL,
  `bobot_c6` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `c7`
--

CREATE TABLE `c7` (
  `id_c7` int NOT NULL,
  `pilihan_c7` varchar(128) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `bobot_c7` varchar(128) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `c8`
--

CREATE TABLE `c8` (
  `id_c8` int NOT NULL,
  `pilihan_c8` varchar(128) NOT NULL,
  `bobot_c8` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `c9`
--

CREATE TABLE `c9` (
  `id_c9` int NOT NULL,
  `pilihan_c9` varchar(128) NOT NULL,
  `bobot_c9` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `c10`
--

CREATE TABLE `c10` (
  `id_c10` int NOT NULL,
  `pilihan_c10` varchar(128) NOT NULL,
  `bobot_c10` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `c11`
--

CREATE TABLE `c11` (
  `id_c11` int NOT NULL,
  `pilihan_c11` varchar(128) NOT NULL,
  `bobot_c11` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `c12`
--

CREATE TABLE `c12` (
  `id_c12` int NOT NULL,
  `pilihan_c12` varchar(128) NOT NULL,
  `bobot_c12` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `c13`
--

CREATE TABLE `c13` (
  `id_c13` int NOT NULL,
  `pilihan_c13` varchar(128) NOT NULL,
  `bobot_c13` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `c14`
--

CREATE TABLE `c14` (
  `id_c14` int NOT NULL,
  `pilihan_c14` varchar(128) NOT NULL,
  `bobot_c14` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `c15`
--

CREATE TABLE `c15` (
  `id_c15` int NOT NULL,
  `pilihan_c15` varchar(128) NOT NULL,
  `bobot_c15` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `c16`
--

CREATE TABLE `c16` (
  `id_c16` int NOT NULL,
  `pilihan_c16` varchar(128) NOT NULL,
  `bobot_c16` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `c17`
--

CREATE TABLE `c17` (
  `id_c17` int NOT NULL,
  `pilihan_c17` varchar(128) NOT NULL,
  `bobot_c17` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `c18`
--

CREATE TABLE `c18` (
  `id_c18` int NOT NULL,
  `pilihan_c18` varchar(128) NOT NULL,
  `bobot_c18` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `c19`
--

CREATE TABLE `c19` (
  `id_c19` int NOT NULL,
  `pilihan_c19` varchar(128) NOT NULL,
  `bobot_c19` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `c20`
--

CREATE TABLE `c20` (
  `id_c20` int NOT NULL,
  `pilihan_c20` varchar(128) NOT NULL,
  `bobot_c20` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `c21`
--

CREATE TABLE `c21` (
  `id_c21` int NOT NULL,
  `pilihan_c21` varchar(128) NOT NULL,
  `bobot_c21` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `c22`
--

CREATE TABLE `c22` (
  `id_c22` int NOT NULL,
  `pilihan_c22` varchar(128) NOT NULL,
  `bobot_c22` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `c23`
--

CREATE TABLE `c23` (
  `id_c23` int NOT NULL,
  `pilihan_c23` varchar(128) NOT NULL,
  `bobot_c23` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `c24`
--

CREATE TABLE `c24` (
  `id_c24` int NOT NULL,
  `pilihan_c24` varchar(128) NOT NULL,
  `bobot_c24` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `c25`
--

CREATE TABLE `c25` (
  `id_c25` int NOT NULL,
  `pilihan_c25` varchar(128) NOT NULL,
  `bobot_c25` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `c26`
--

CREATE TABLE `c26` (
  `id_c26` int NOT NULL,
  `pilihan_c26` varchar(128) NOT NULL,
  `bobot_c26` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `c27`
--

CREATE TABLE `c27` (
  `id_c27` int NOT NULL,
  `pilihan_c27` varchar(128) NOT NULL,
  `bobot_c27` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `c28`
--

CREATE TABLE `c28` (
  `id_c28` int NOT NULL,
  `pilihan_c28` varchar(128) NOT NULL,
  `bobot_c28` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `hasil`
--

CREATE TABLE `hasil` (
  `id_hasil` int NOT NULL,
  `id_pegawai` int NOT NULL,
  `id_penilaian` int NOT NULL,
  `hasil` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `pegawai`
--

CREATE TABLE `pegawai` (
  `id_pegawai` int NOT NULL,
  `nama` varchar(255) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `gender` varchar(255) NOT NULL,
  `nip` varchar(255) NOT NULL,
  `ttl` varchar(255) NOT NULL,
  `tmk` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL,
  `pendidikan` varchar(255) NOT NULL,
  `golongan` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `pegawai`
--

INSERT INTO `pegawai` (`id_pegawai`, `nama`, `alamat`, `gender`, `nip`, `ttl`, `tmk`, `status`, `pendidikan`, `golongan`) VALUES
(1, 'dr. Fitriana Putri, M.Si', 'Perum. Bunga nirwana Kelapa gading No. C-14 Jember', 'Perempuan', '1981.2006.02.001', 'Bengkalis, 04 Pebruari 1981', 'Nopember 2006', 'Pegawai Tetap', 'S1 Kedokteran, S2 Manajemen', '3'),
(2, 'test', 'test', 'test', '123', 'test', '123', 'test', 'test', '1'),
(3, 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'test'),
(4, 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'test'),
(5, 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'test', '1'),
(7, 'test3', 'test3', 'test3', 'test3', 'test3', 'test3', 'test3', 'test3', 'test3');

-- --------------------------------------------------------

--
-- Table structure for table `penilaian`
--

CREATE TABLE `penilaian` (
  `id_penilaian` int NOT NULL,
  `id_pegawai` int NOT NULL,
  `id_c1` int NOT NULL,
  `id_c2` int NOT NULL,
  `id_c3` int NOT NULL,
  `id_c4` int NOT NULL,
  `id_c5` int NOT NULL,
  `id_c6` int NOT NULL,
  `id_c7` int NOT NULL,
  `id_c8` int NOT NULL,
  `id_c9` int NOT NULL,
  `id_c10` int NOT NULL,
  `id_c11` int NOT NULL,
  `id_c12` int NOT NULL,
  `id_c13` int NOT NULL,
  `id_c14` int NOT NULL,
  `id_c15` int NOT NULL,
  `id_c16` int NOT NULL,
  `id_c17` int NOT NULL,
  `id_c18` int NOT NULL,
  `id_c19` int NOT NULL,
  `id_c20` int NOT NULL,
  `id_c21` int NOT NULL,
  `id_c22` int NOT NULL,
  `id_c23` int NOT NULL,
  `id_c24` int NOT NULL,
  `id_c25` int NOT NULL,
  `id_c26` int NOT NULL,
  `id_c27` int NOT NULL,
  `id_c28` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_user` int NOT NULL,
  `nama` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `is_admin` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bobot`
--
ALTER TABLE `bobot`
  ADD PRIMARY KEY (`id_bobot`);

--
-- Indexes for table `c1`
--
ALTER TABLE `c1`
  ADD PRIMARY KEY (`id_c1`);

--
-- Indexes for table `c2`
--
ALTER TABLE `c2`
  ADD PRIMARY KEY (`id_c2`);

--
-- Indexes for table `c3`
--
ALTER TABLE `c3`
  ADD PRIMARY KEY (`id_c3`);

--
-- Indexes for table `c4`
--
ALTER TABLE `c4`
  ADD PRIMARY KEY (`id_c4`);

--
-- Indexes for table `c5`
--
ALTER TABLE `c5`
  ADD PRIMARY KEY (`id_c5`);

--
-- Indexes for table `c6`
--
ALTER TABLE `c6`
  ADD PRIMARY KEY (`id_c6`);

--
-- Indexes for table `c7`
--
ALTER TABLE `c7`
  ADD PRIMARY KEY (`id_c7`);

--
-- Indexes for table `c8`
--
ALTER TABLE `c8`
  ADD PRIMARY KEY (`id_c8`);

--
-- Indexes for table `c9`
--
ALTER TABLE `c9`
  ADD PRIMARY KEY (`id_c9`);

--
-- Indexes for table `c10`
--
ALTER TABLE `c10`
  ADD PRIMARY KEY (`id_c10`);

--
-- Indexes for table `c11`
--
ALTER TABLE `c11`
  ADD PRIMARY KEY (`id_c11`);

--
-- Indexes for table `c12`
--
ALTER TABLE `c12`
  ADD PRIMARY KEY (`id_c12`);

--
-- Indexes for table `c13`
--
ALTER TABLE `c13`
  ADD PRIMARY KEY (`id_c13`);

--
-- Indexes for table `c14`
--
ALTER TABLE `c14`
  ADD PRIMARY KEY (`id_c14`);

--
-- Indexes for table `c15`
--
ALTER TABLE `c15`
  ADD PRIMARY KEY (`id_c15`);

--
-- Indexes for table `c16`
--
ALTER TABLE `c16`
  ADD PRIMARY KEY (`id_c16`);

--
-- Indexes for table `c17`
--
ALTER TABLE `c17`
  ADD PRIMARY KEY (`id_c17`);

--
-- Indexes for table `c18`
--
ALTER TABLE `c18`
  ADD PRIMARY KEY (`id_c18`);

--
-- Indexes for table `c19`
--
ALTER TABLE `c19`
  ADD PRIMARY KEY (`id_c19`);

--
-- Indexes for table `c20`
--
ALTER TABLE `c20`
  ADD PRIMARY KEY (`id_c20`);

--
-- Indexes for table `c21`
--
ALTER TABLE `c21`
  ADD PRIMARY KEY (`id_c21`);

--
-- Indexes for table `c22`
--
ALTER TABLE `c22`
  ADD PRIMARY KEY (`id_c22`);

--
-- Indexes for table `c23`
--
ALTER TABLE `c23`
  ADD PRIMARY KEY (`id_c23`);

--
-- Indexes for table `c24`
--
ALTER TABLE `c24`
  ADD PRIMARY KEY (`id_c24`);

--
-- Indexes for table `c25`
--
ALTER TABLE `c25`
  ADD PRIMARY KEY (`id_c25`);

--
-- Indexes for table `c26`
--
ALTER TABLE `c26`
  ADD PRIMARY KEY (`id_c26`);

--
-- Indexes for table `c27`
--
ALTER TABLE `c27`
  ADD PRIMARY KEY (`id_c27`);

--
-- Indexes for table `c28`
--
ALTER TABLE `c28`
  ADD PRIMARY KEY (`id_c28`);

--
-- Indexes for table `hasil`
--
ALTER TABLE `hasil`
  ADD PRIMARY KEY (`id_hasil`);

--
-- Indexes for table `pegawai`
--
ALTER TABLE `pegawai`
  ADD PRIMARY KEY (`id_pegawai`);

--
-- Indexes for table `penilaian`
--
ALTER TABLE `penilaian`
  ADD PRIMARY KEY (`id_penilaian`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bobot`
--
ALTER TABLE `bobot`
  MODIFY `id_bobot` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `c1`
--
ALTER TABLE `c1`
  MODIFY `id_c1` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `c2`
--
ALTER TABLE `c2`
  MODIFY `id_c2` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `c3`
--
ALTER TABLE `c3`
  MODIFY `id_c3` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `c4`
--
ALTER TABLE `c4`
  MODIFY `id_c4` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `c5`
--
ALTER TABLE `c5`
  MODIFY `id_c5` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `c6`
--
ALTER TABLE `c6`
  MODIFY `id_c6` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `c7`
--
ALTER TABLE `c7`
  MODIFY `id_c7` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `c8`
--
ALTER TABLE `c8`
  MODIFY `id_c8` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `c9`
--
ALTER TABLE `c9`
  MODIFY `id_c9` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `c10`
--
ALTER TABLE `c10`
  MODIFY `id_c10` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `c11`
--
ALTER TABLE `c11`
  MODIFY `id_c11` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `c12`
--
ALTER TABLE `c12`
  MODIFY `id_c12` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `c13`
--
ALTER TABLE `c13`
  MODIFY `id_c13` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `c14`
--
ALTER TABLE `c14`
  MODIFY `id_c14` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `c15`
--
ALTER TABLE `c15`
  MODIFY `id_c15` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `c16`
--
ALTER TABLE `c16`
  MODIFY `id_c16` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `c17`
--
ALTER TABLE `c17`
  MODIFY `id_c17` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `c18`
--
ALTER TABLE `c18`
  MODIFY `id_c18` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `c19`
--
ALTER TABLE `c19`
  MODIFY `id_c19` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `c20`
--
ALTER TABLE `c20`
  MODIFY `id_c20` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `c21`
--
ALTER TABLE `c21`
  MODIFY `id_c21` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `c22`
--
ALTER TABLE `c22`
  MODIFY `id_c22` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `c23`
--
ALTER TABLE `c23`
  MODIFY `id_c23` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `c24`
--
ALTER TABLE `c24`
  MODIFY `id_c24` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `c25`
--
ALTER TABLE `c25`
  MODIFY `id_c25` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `c26`
--
ALTER TABLE `c26`
  MODIFY `id_c26` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `c27`
--
ALTER TABLE `c27`
  MODIFY `id_c27` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `c28`
--
ALTER TABLE `c28`
  MODIFY `id_c28` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `hasil`
--
ALTER TABLE `hasil`
  MODIFY `id_hasil` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pegawai`
--
ALTER TABLE `pegawai`
  MODIFY `id_pegawai` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `penilaian`
--
ALTER TABLE `penilaian`
  MODIFY `id_penilaian` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
