-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 04, 2024 at 03:44 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ni_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `data_izin`
--

CREATE TABLE `data_izin` (
  `id` int(11) NOT NULL,
  `id_member` int(11) NOT NULL,
  `kehadiran` enum('I','S') DEFAULT NULL,
  `keterangan` varchar(255) NOT NULL,
  `tanggal` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `data_izin`
--

INSERT INTO `data_izin` (`id`, `id_member`, `kehadiran`, `keterangan`, `tanggal`) VALUES
(1, 67, 'I', 'Pergi', '2024-08-31'),
(2, 1, 'I', 'Sekolah', '2024-08-24'),
(4, 4, 'I', 'Pergi', '2024-08-10'),
(5, 67, 'I', 'pergi', '2024-08-03'),
(6, 67, 'I', 'wleowleo', '2024-08-17');

-- --------------------------------------------------------

--
-- Table structure for table `data_kehadiran`
--

CREATE TABLE `data_kehadiran` (
  `id` int(11) NOT NULL,
  `id_member` int(11) DEFAULT NULL,
  `kehadiran` enum('M','I','S','A') DEFAULT NULL,
  `tanggal` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `data_kehadiran`
--

INSERT INTO `data_kehadiran` (`id`, `id_member`, `kehadiran`, `tanggal`) VALUES
(19, 1, 'M', '2024-08-17'),
(25, 3, 'M', '2024-08-03'),
(26, 67, 'M', '2024-08-03');

-- --------------------------------------------------------

--
-- Table structure for table `data_member`
--

CREATE TABLE `data_member` (
  `id` int(2) NOT NULL,
  `nama` varchar(255) DEFAULT NULL,
  `kelas` varchar(255) DEFAULT NULL,
  `kelas_peminatan` enum('bahasa','animanga') DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `data_member`
--

INSERT INTO `data_member` (`id`, `nama`, `kelas`, `kelas_peminatan`) VALUES
(1, 'Abdul Malik Kamal Qintara', 'XI DKV 1', 'animanga'),
(2, 'Allysa Nabila Zahra', 'XI AM 2', 'animanga'),
(3, 'Annisa Humaira', 'XI RPL 2', 'animanga'),
(4, 'Aurelia Savana Hartono', 'XI DKV 3', 'animanga'),
(5, 'Ginayah Sobrina', 'XI DKV 2', 'animanga'),
(6, 'Ihsan Ananda Kamil', 'XI DKV 2', 'animanga'),
(7, 'Ilham Nur Fayruz Ramadhan', 'XI DKV 1', 'animanga'),
(8, 'Jeanita Eza Hakiki', 'XI DKV 3', 'animanga'),
(9, 'Kamila Putri', 'XI AM 2', 'animanga'),
(10, 'Kamea Aneira Putri Kusnoto', 'XI AM 1', 'animanga'),
(11, 'Muhammad Nabiel Khosyi', 'XI DKV 1', 'animanga'),
(12, 'Nayla Naziiha', 'XI AM 2', 'animanga'),
(13, 'Sabita Putri Berliani', 'XI DKV 3', 'animanga'),
(14, 'Nabil Muhammad Hammam', 'XI AM 2', 'animanga'),
(15, 'Almyra Devina Aleasandra', 'XI AM 1', 'bahasa'),
(16, 'Delian Satria Sulaeman', 'XI TM 7', 'bahasa'),
(17, 'Herdiyansyah Bagus Sarana', 'XI AM 2', 'bahasa'),
(18, 'Aiman Ali Ibrahim', 'XI TM 7', 'bahasa'),
(19, 'Aisha Huwaida Hisana', 'XI DKV 1', 'bahasa'),
(20, 'Al Ihsan Khairun Nas', 'XI TM 7', 'bahasa'),
(21, 'Alif Maulana Rachmansyah', 'XI TJKT 1', 'bahasa'),
(22, 'Aviareyka Hermanda', 'XI DKV 1', 'bahasa'),
(23, 'Benediktus Dustin Adrianto Sinaga', 'XI RPL 1', 'bahasa'),
(24, 'Dwiki Hamzah Prayoga', 'XI AM 1', 'bahasa'),
(25, 'Faisal Raif', 'XI RPL 2', 'bahasa'),
(26, 'Keisha Schatzi Salsabila', 'XI RPL 2', 'bahasa'),
(27, 'Kyros Abiya', 'XI TM 6', 'bahasa'),
(28, 'Marsya Putri Wulan Sudrajat', 'XI DKV 3', 'bahasa'),
(29, 'Mohammad Razzaq Athallah Khairi Mubarad Putra', 'XI RPL 1', 'bahasa'),
(30, 'Muhammad Faris Arkaan', 'XI TM 5', 'bahasa'),
(31, 'Nabila Rahimah Humaira', 'XI DKV 1', 'bahasa'),
(32, 'Nadya Khairunnisa Putri', 'XI DKV 1', 'bahasa'),
(33, 'Nisa Nur Azizah Rusyda', 'XI DKV 3', 'bahasa'),
(34, 'Rafdi Auzan Nazhifan', 'XI TJKT 1', 'bahasa'),
(35, 'Raffi Pramudya Sukana', 'XI AM 1', 'bahasa'),
(36, 'Raihanun Noor Nabilla', 'XI DKV 1', 'bahasa'),
(37, 'Raina Al Azwa Diviandi', 'XI DKV 2', 'bahasa'),
(38, 'Raisha Alfi Sahrin', 'XI TM 1', 'bahasa'),
(39, 'Raisya salsabila herningsih', 'XI DKV 1', 'bahasa'),
(40, 'Raka Al Fathir Fadillah', 'XI AM 1', 'bahasa'),
(41, 'Rivaldo', 'XI TM 6', 'bahasa'),
(42, 'Salsa Amelia Nurhabibah', 'XI AM 2', 'bahasa'),
(43, 'Sutan Ekaputra Kalwan', 'XI TM 3', 'bahasa'),
(44, 'Syeira Azahra Adhisnia Putri', 'XI AM 1', 'bahasa'),
(45, 'Yasmin Mumtaz Afifah', 'XI DKV 1', 'bahasa'),
(46, 'Zheisva Nafarahaya. A', 'XI DKV 2', 'bahasa'),
(47, 'Darius Nouvalino Alves', 'XII AM 1', 'animanga'),
(48, 'Hayfa Aprilia Quranique', 'XII AM 1', 'animanga'),
(49, 'Maolana Abdullah', 'XII AM 2', 'animanga'),
(50, 'Miqatul Maula Mujahidah', 'XII AM 2', 'animanga'),
(51, 'Nabila Nurfauziyyah Alfadilah', 'XII AM 2', 'animanga'),
(52, 'Rien Tsalitsa Nur Sya\' Bani', 'XII AM 2', 'animanga'),
(53, 'Salma Adelia Aryatmo', 'XII AM 2', 'animanga'),
(54, 'Syifa Anyasyifika', 'XII AM 2', 'animanga'),
(55, 'M.Zachry Al Ardhy Fahmi', 'XII DGM 1', 'animanga'),
(56, 'Nadia Shyva Kirana Putri', 'XII AM 1', 'bahasa'),
(57, 'Sherly Marsyal', 'XII AM 1', 'bahasa'),
(58, 'Naysilla Pielani', 'XII AM 2', 'bahasa'),
(59, 'Farhan Aguspratama', 'XII DGM 1', 'bahasa'),
(60, 'Adrik Ramdan Nur Alam', 'XII DGM 2', 'bahasa'),
(61, 'Muhammad Bara Ardinata Putra Arifin', 'XII DGM 2', 'bahasa'),
(62, 'Nabila Farah Fristania', 'XII DKV 3', 'bahasa'),
(63, 'Akhtar Abdul Salam', 'XII RPL 1', 'bahasa'),
(64, 'Davin Alanza', 'XII RPL 1', 'bahasa'),
(65, 'Harvi Muhammad Zakhir', 'XII RPL 1', 'bahasa'),
(66, 'Muhammad Fadhil Alamsyah', 'XII RPL 1', 'bahasa'),
(67, 'Dzikra Naufal Baihaqi', 'XII RPL 2', 'bahasa'),
(68, 'Agustina Dina Nurhasanah', 'XII TKJ 1', 'bahasa'),
(69, 'Sami Fadhlurrahman', 'XII TKJ 2', 'bahasa'),
(70, 'Muhammad Zhafran Aqila Idris', 'XII TP 2', 'bahasa'),
(71, 'Dani Irwanto', 'XII TP 4', 'bahasa'),
(72, 'Bintang Yogi Mandiri', 'XII TP 5', 'bahasa'),
(73, 'Muhammad Khoirur Roziqin', 'XII TP 5', 'bahasa');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`) VALUES
(1, 'admin', 'admin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `data_izin`
--
ALTER TABLE `data_izin`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_member` (`id_member`);

--
-- Indexes for table `data_kehadiran`
--
ALTER TABLE `data_kehadiran`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_id_member` (`id_member`);

--
-- Indexes for table `data_member`
--
ALTER TABLE `data_member`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `data_izin`
--
ALTER TABLE `data_izin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `data_kehadiran`
--
ALTER TABLE `data_kehadiran`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `data_member`
--
ALTER TABLE `data_member`
  MODIFY `id` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=79;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `data_izin`
--
ALTER TABLE `data_izin`
  ADD CONSTRAINT `data_izin_ibfk_2` FOREIGN KEY (`id_member`) REFERENCES `data_member` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `data_kehadiran`
--
ALTER TABLE `data_kehadiran`
  ADD CONSTRAINT `fk_id_member` FOREIGN KEY (`id_member`) REFERENCES `data_member` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
