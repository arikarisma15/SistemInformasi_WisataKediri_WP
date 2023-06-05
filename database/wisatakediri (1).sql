-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jun 05, 2023 at 08:08 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 7.4.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `wisatakediri`
--

-- --------------------------------------------------------

--
-- Table structure for table `datawisata`
--

CREATE TABLE `datawisata` (
  `ID_Wisata` varchar(7) NOT NULL,
  `Nama_Wisata` text NOT NULL,
  `Lokasi` text NOT NULL,
  `Harga_Tiket` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `datawisata`
--

INSERT INTO `datawisata` (`ID_Wisata`, `Nama_Wisata`, `Lokasi`, `Harga_Tiket`) VALUES
('KDR01', 'Kediri Water Park', 'Jl.Argowilis,Pagung,Kec.Semen,Kota Kediri', 450000),
('KDR02', 'Korea Fantasy Kediri', 'Margorejo, Manggis, Ngancar, Kediri', 10000),
('KDR03', 'Gumul Paradise Island', 'Jl SLG Ds. Sumberejo, Kediri', 10000),
('KDR04', 'Simpang Lima Gumul', 'Tugurejo, Kec.Ngasem, Kab.Kediri', 2000),
('KDR05', 'Air Terjun Dolo Besuki ', 'Jugo, Kec.Mojo, Blimbing, Kab. Kediri', 8000),
('KDR06', 'Goa Selomangleng ', 'Jl. Selomangleng, Pojok, Kec.Mojoroto, Kota Kediri', 4000),
('KDR07', 'Tirtoyoso Park', 'JL Ahmad Yani No.123, Banjaran,Kab.Kediri', 22000),
('KDR08', 'Kelenteng Tjoe Hwie Kiong ', 'Jalan Yos Sudarso No. 148 Kota Kediri', 2000),
('KDR09', 'Gunung Kelud', 'Ds.SugihWaras Kec.Ngancar Kab.Kediri', 10000),
('KDR10', 'Istana Jambu Kediri', 'Jl.Sonorejo Kec. Grogol Kab.Kediri', 5000);

-- --------------------------------------------------------

--
-- Table structure for table `data_nilaifasilitas`
--

CREATE TABLE `data_nilaifasilitas` (
  `ID_Fasilitas` varchar(7) NOT NULL,
  `ID_Wisata` varchar(7) NOT NULL,
  `Nilai_KriteriaFasilitas` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `data_nilaifasilitas`
--

INSERT INTO `data_nilaifasilitas` (`ID_Fasilitas`, `ID_Wisata`, `Nilai_KriteriaFasilitas`) VALUES
('FKD01', 'KDR01', 88),
('FKD02', 'KDR02', 78),
('FKD03', 'KDR03', 76),
('FKD04', 'KDR04', 70),
('FKD05', 'KDR05', 89),
('FKD06', 'KDR06', 60),
('FKD07', 'KDR07', 55),
('FKD08', 'KDR08', 80),
('FKD09', 'KDR09', 78),
('FKD10', 'KDR10', 68);

-- --------------------------------------------------------

--
-- Table structure for table `data_nilaikeamanan`
--

CREATE TABLE `data_nilaikeamanan` (
  `ID_Keamanan` varchar(7) NOT NULL,
  `ID_Wisata` varchar(7) NOT NULL,
  `Nilai_KriteriaKeamanan` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `data_nilaikeamanan`
--

INSERT INTO `data_nilaikeamanan` (`ID_Keamanan`, `ID_Wisata`, `Nilai_KriteriaKeamanan`) VALUES
('KKD01', 'KDR01', 85),
('KKD02', 'KDR02', 78),
('KKD03', 'KDR03', 88),
('KKD04', 'KDR04', 79),
('KKD05', 'KDR05', 80),
('KKD06', 'KDR06', 85),
('KKD07', 'KDR07', 77),
('KKD08', 'KDR08', 90),
('KKD09', 'KDR09', 87),
('KKD10', 'KDR10', 89);

-- --------------------------------------------------------

--
-- Table structure for table `data_nilailokasi`
--

CREATE TABLE `data_nilailokasi` (
  `ID_Lokasi` varchar(7) NOT NULL,
  `ID_Wisata` varchar(7) NOT NULL,
  `Nilai_KriteriaLokasi` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `data_nilailokasi`
--

INSERT INTO `data_nilailokasi` (`ID_Lokasi`, `ID_Wisata`, `Nilai_KriteriaLokasi`) VALUES
('LKD01', 'KDR01', 88),
('LKD02', 'KDR02', 50),
('LKD03', 'KDR03', 75),
('LKD04', 'KDR04', 79),
('LKD05', 'KDR05', 83),
('LKD06', 'KDR06', 65),
('LKD07', 'KDR07', 77),
('LKD08', 'KDR08', 84),
('LKD09', 'KDR09', 85),
('LKD10', 'KDR10', 78),
('LKD66', 'KDR66', 65);

-- --------------------------------------------------------

--
-- Table structure for table `data_nilaiobjekatraksi`
--

CREATE TABLE `data_nilaiobjekatraksi` (
  `ID_ObjekAtraksi` varchar(7) NOT NULL,
  `ID_Wisata` varchar(7) NOT NULL,
  `Nilai_KriteriaObjekAtraksi` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `data_nilaiobjekatraksi`
--

INSERT INTO `data_nilaiobjekatraksi` (`ID_ObjekAtraksi`, `ID_Wisata`, `Nilai_KriteriaObjekAtraksi`) VALUES
('OAKD01', 'KDR01', 75),
('OAKD02', 'KDR02', 80),
('OAKD03', 'KDR03', 88),
('OAKD04', 'KDR04', 80),
('OAKD05', 'KDR05', 88),
('OAKD06', 'KDR06', 76),
('OAKD07', 'KDR07', 78),
('OAKD08', 'KDR08', 78),
('OAKD09', 'KDR09', 85),
('OAKD10', 'KDR10', 82),
('OAKD55', 'KDR55', 55);

-- --------------------------------------------------------

--
-- Table structure for table `data_penilaian`
--

CREATE TABLE `data_penilaian` (
  `ID_Penilaian` varchar(7) NOT NULL,
  `ID_Wisata` varchar(7) NOT NULL,
  `ID_Lokasi` varchar(7) NOT NULL,
  `ID_Fasilitas` varchar(7) NOT NULL,
  `ID_Keamanan` varchar(7) NOT NULL,
  `ID_ObjekAtraksi` varchar(7) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `data_penilaian`
--

INSERT INTO `data_penilaian` (`ID_Penilaian`, `ID_Wisata`, `ID_Lokasi`, `ID_Fasilitas`, `ID_Keamanan`, `ID_ObjekAtraksi`) VALUES
('PNL01', 'KDR01', 'LKD01', 'FKD01', 'KKD01', 'OAKD01'),
('PNL02', 'KDR02', 'LKD02', 'FKD02', 'KKD02', 'OAKD02'),
('PNL03', 'KDR03', 'LKD03', 'FKD03', 'KKD03', 'OAKD03'),
('PNL04', 'KDR04', 'LKD04', 'FKD04', 'KKD04', 'OAKD04'),
('PNL05', 'KDR05', 'LKD05', 'FKD05', 'KKD05', 'OAKD05'),
('PNL06', 'KDR06', 'LKD06', 'FKD06', 'KKD06', 'OAKD06'),
('PNL07', 'KDR07', 'LKD07', 'FKD07', 'KKD07', 'OAKD07'),
('PNL08', 'KDR08', 'LKD08', 'FKD08', 'KKD08', 'OAKD08'),
('PNL09', 'KDR09', 'LKD09', 'FKD09', 'KKD09', 'OAKD09'),
('PNL10', 'KDR10', 'LKD10', 'FKD10', 'KKD10', 'OAKD10');

-- --------------------------------------------------------

--
-- Table structure for table `keterangan_nilai`
--

CREATE TABLE `keterangan_nilai` (
  `ID_Keterangan` varchar(7) NOT NULL,
  `Keterangan_Nilai` varchar(15) NOT NULL,
  `Range_Nilai` varchar(7) NOT NULL,
  `Bobot_Nilai` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `keterangan_nilai`
--

INSERT INTO `keterangan_nilai` (`ID_Keterangan`, `Keterangan_Nilai`, `Range_Nilai`, `Bobot_Nilai`) VALUES
('1 SK', 'Sangat Kurang', '<50', 1),
('2 K', 'Kurang', '50-64', 2),
('3 C', 'Cukup', '65-74', 3),
('4 B', 'Baik', '75-84', 4),
('5 SB', 'Sangat Baik', '85-100', 5);

-- --------------------------------------------------------

--
-- Table structure for table `metode`
--

CREATE TABLE `metode` (
  `id` int(11) NOT NULL,
  `origin` longtext NOT NULL,
  `data_json` longtext NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `skala_penilaian`
--

CREATE TABLE `skala_penilaian` (
  `ID_SkalaPenilaian` varchar(7) NOT NULL,
  `Jenis_Kriteria` varchar(25) NOT NULL,
  `Bobot_Penilaian` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `skala_penilaian`
--

INSERT INTO `skala_penilaian` (`ID_SkalaPenilaian`, `Jenis_Kriteria`, `Bobot_Penilaian`) VALUES
('KF', 'Kriteria Fasilitas', 0.4),
('KK', 'Kriteria Keamanan', 0.4),
('KL', 'Kriteria Lokasi', 0.1),
('KOA', 'Kriteria Objek Atraksi', 0.1);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'admin@gmail.com', NULL, '$2y$10$vA5bLbQNRCKdKxFv6Tj5z.Y8TfjxC1XSzxpJ3aXaZeOE54lP.WptS', NULL, '2023-06-03 08:33:10', '2023-06-03 08:33:10');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `datawisata`
--
ALTER TABLE `datawisata`
  ADD PRIMARY KEY (`ID_Wisata`);

--
-- Indexes for table `data_nilaifasilitas`
--
ALTER TABLE `data_nilaifasilitas`
  ADD PRIMARY KEY (`ID_Fasilitas`),
  ADD KEY `ID_Wisata` (`ID_Wisata`);

--
-- Indexes for table `data_nilaikeamanan`
--
ALTER TABLE `data_nilaikeamanan`
  ADD PRIMARY KEY (`ID_Keamanan`),
  ADD KEY `ID_Wisata` (`ID_Wisata`);

--
-- Indexes for table `data_nilailokasi`
--
ALTER TABLE `data_nilailokasi`
  ADD PRIMARY KEY (`ID_Lokasi`),
  ADD KEY `ID_Wisata` (`ID_Wisata`);

--
-- Indexes for table `data_nilaiobjekatraksi`
--
ALTER TABLE `data_nilaiobjekatraksi`
  ADD PRIMARY KEY (`ID_ObjekAtraksi`),
  ADD KEY `ID_Wisata` (`ID_Wisata`);

--
-- Indexes for table `data_penilaian`
--
ALTER TABLE `data_penilaian`
  ADD PRIMARY KEY (`ID_Penilaian`),
  ADD KEY `ID_Wisata` (`ID_Wisata`),
  ADD KEY `ID_Lokasi` (`ID_Lokasi`),
  ADD KEY `ID_Fasilitas` (`ID_Fasilitas`),
  ADD KEY `ID_Keamanan` (`ID_Keamanan`),
  ADD KEY `ID_ObjekAtraksi` (`ID_ObjekAtraksi`);

--
-- Indexes for table `keterangan_nilai`
--
ALTER TABLE `keterangan_nilai`
  ADD PRIMARY KEY (`ID_Keterangan`);

--
-- Indexes for table `metode`
--
ALTER TABLE `metode`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `skala_penilaian`
--
ALTER TABLE `skala_penilaian`
  ADD PRIMARY KEY (`ID_SkalaPenilaian`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `metode`
--
ALTER TABLE `metode`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `data_nilaifasilitas`
--
ALTER TABLE `data_nilaifasilitas`
  ADD CONSTRAINT `data_nilaifasilitas_ibfk_1` FOREIGN KEY (`ID_Wisata`) REFERENCES `datawisata` (`ID_Wisata`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
