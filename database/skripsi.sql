-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 11, 2021 at 04:31 PM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.3.20

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `skripsi`
--

-- --------------------------------------------------------

--
-- Table structure for table `tabel_admin`
--

CREATE TABLE `tabel_admin` (
  `id_admin` int(25) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `no_hp_admin` varchar(15) NOT NULL,
  `email_admin` varchar(25) NOT NULL,
  `nama_admin` varchar(100) NOT NULL,
  `foto_admin` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tabel_admin`
--

INSERT INTO `tabel_admin` (`id_admin`, `username`, `password`, `no_hp_admin`, `email_admin`, `nama_admin`, `foto_admin`) VALUES
(1, 'kirana', 'kirana', '089123456789', 'kiranaywt@gmail.com', 'Kirana Yuwita', 'bts_jungkook_20200823_5.png');

-- --------------------------------------------------------

--
-- Table structure for table `tabel_detail_konsultasi`
--

CREATE TABLE `tabel_detail_konsultasi` (
  `id_detail_konsultasi` int(11) NOT NULL,
  `id_konsultasi` int(11) NOT NULL,
  `faktor_penyebab` varchar(100) NOT NULL,
  `bobot_faktor` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tabel_faktor`
--

CREATE TABLE `tabel_faktor` (
  `id_faktor` int(11) NOT NULL,
  `faktor_penyebab` text NOT NULL,
  `bobot_faktor` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tabel_faktor`
--

INSERT INTO `tabel_faktor` (`id_faktor`, `faktor_penyebab`, `bobot_faktor`) VALUES
(13, 'Saat hamil ibu mengalami penyakit Anemia', '0,5'),
(15, 'Saat hamil terpenuhi gizi atau asupan nutrisi ibu', '0,3'),
(16, 'Saat hamil ibu mengalami kekurangan energi kronik (KEK)', '0,5'),
(17, 'Menerapkan pola asuh yang baik setelah anak dilahirkan', '1'),
(18, 'Tidak menerapkan pola asuh yang baik setelah anak dilahirkan', '1'),
(19, 'Menerapkan Hidup Bersih dan Sehat di lingkuMenerapkan pola Hidup Bersih dan Sehat di lingkungan rumahngan rumah', '0,3'),
(20, 'Tidak menerapkan pola Hidup Bersih dan Sehat di lingkungan rumah', '0,3'),
(21, 'Anak kekurangan asupan gizi', '0,5'),
(22, 'Merencanakan dan diberikannya ASI Eksklusif pada anak usia 0-6 bulan', '0,5'),
(23, 'Merencanakan dan diberikanya MP ASI pada anak pertama kali saat usia 6 bulan', '0,5'),
(25, 'Anak mendapatkan 4 dari 7 kelompok makanan saat diberikannya MP ASI (contoh: biji-bijian, akar, dan umbi; kacang polong dan kacag-kacangan; produk susu; daging; telur atau ikan; buah dan sayur kaya vitamin A; dan sayur dan buah lainnya)', '0,3'),
(26, 'Ibu merasa masih kurang dalam pengetahuan yang dimulai dari sebelum hamil hingga melahirkan seperti mengenai kecukupan gizi dan segala hal yang mencakup kesehatan ibu dan anak', '0,2'),
(36, 'Trombosit menurun hingga 20', '0,6'),
(37, 'Sangat Pendek', '1');

-- --------------------------------------------------------

--
-- Table structure for table `tabel_konsultasi`
--

CREATE TABLE `tabel_konsultasi` (
  `id_konsultasi` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `tanggal_konsultasi` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `nilai_kemiripan` varchar(10) NOT NULL,
  `nilai_kepastian` varchar(10) NOT NULL,
  `jenis_penyakit` varchar(50) NOT NULL,
  `id_penyakit` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tabel_pengetahuan`
--

CREATE TABLE `tabel_pengetahuan` (
  `id_pengetahuan` int(11) NOT NULL,
  `id_faktor` int(11) NOT NULL,
  `id_penyakit` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tabel_pengetahuan`
--

INSERT INTO `tabel_pengetahuan` (`id_pengetahuan`, `id_faktor`, `id_penyakit`) VALUES
(7, 15, 3),
(9, 16, 1),
(10, 18, 1),
(11, 20, 1),
(12, 21, 1),
(13, 26, 1),
(15, 17, 3),
(16, 19, 3),
(17, 22, 3),
(18, 23, 3),
(19, 25, 3),
(28, 36, 17);

-- --------------------------------------------------------

--
-- Table structure for table `tabel_penyakit`
--

CREATE TABLE `tabel_penyakit` (
  `id_penyakit` int(11) NOT NULL,
  `nama_penyakit` varchar(100) NOT NULL,
  `detail_penyakit` text NOT NULL,
  `solusi_penyakit` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tabel_penyakit`
--

INSERT INTO `tabel_penyakit` (`id_penyakit`, `nama_penyakit`, `detail_penyakit`, `solusi_penyakit`) VALUES
(1, 'Rawan Stunting', 'Rawan Stunting belum dikatakan stunting, namun dilihat dari sisi faktor penyebab stunting dikatakan rawan stunting', '- Lebih meningkatkan pola asuh anak dengan baik\r\n- Berikan ASI sampai usia 2 tahun \r\n- Perhatikan dan penuhi kebutuhan MP ASI anak\r\n- Selalu jaga perilaku bersih dan sehat\r\n- Rutin mengikuti posyandu sesuai jadwal\r\n- Segera melakukan pemeriksaan ke bidan jika ingin mendapatkan hasil kedepannya lebih baik\r\n'),
(3, 'Aman Stunting', 'Aman Stunting belum dikatakan benar-benar aman dari stunting namun dilihat dari faktor penyebab stunting dikatakan aman stunting', '- Tetap diperhatikan kebutuhan gizi pada anak\r\n- Tetap dijaga pola asuh anak dengan baik\r\n- Tetap diberikan ASI sampai usia 2 tahun\r\n- Penuhi kebutuhan MP ASI anak\r\n- Tetap jaga perilaku hidup bersih dan sehat\r\n- Tetap rutin mengikuti posyandu sesuai jadwal'),
(17, 'DBD lvl 2', 'Demam Berdarah lvl 2', 'Periksa ke dokter segera');

-- --------------------------------------------------------

--
-- Table structure for table `tabel_user`
--

CREATE TABLE `tabel_user` (
  `id_user` int(11) NOT NULL,
  `nama_balita` varchar(50) NOT NULL,
  `usia_balita` varchar(50) NOT NULL,
  `jk_balita` varchar(50) NOT NULL,
  `alamat_orangtua` varchar(100) NOT NULL,
  `nama_ibu` varchar(50) NOT NULL,
  `nama_ayah` varchar(50) NOT NULL,
  `no_hp_orangtua` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tabel_user`
--

INSERT INTO `tabel_user` (`id_user`, `nama_balita`, `usia_balita`, `jk_balita`, `alamat_orangtua`, `nama_ibu`, `nama_ayah`, `no_hp_orangtua`) VALUES
(1, 'Andina', '6', 'Perempuan', 'jl Abon', 'Ani', 'Budi', '0893452637124');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tabel_admin`
--
ALTER TABLE `tabel_admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indexes for table `tabel_detail_konsultasi`
--
ALTER TABLE `tabel_detail_konsultasi`
  ADD KEY `id_konsultasi` (`id_konsultasi`);

--
-- Indexes for table `tabel_faktor`
--
ALTER TABLE `tabel_faktor`
  ADD PRIMARY KEY (`id_faktor`);

--
-- Indexes for table `tabel_konsultasi`
--
ALTER TABLE `tabel_konsultasi`
  ADD PRIMARY KEY (`id_konsultasi`),
  ADD KEY `id_user` (`id_user`),
  ADD KEY `id_penyakit` (`id_penyakit`);

--
-- Indexes for table `tabel_pengetahuan`
--
ALTER TABLE `tabel_pengetahuan`
  ADD PRIMARY KEY (`id_pengetahuan`),
  ADD KEY `id_faktor` (`id_faktor`),
  ADD KEY `id_penyakit` (`id_penyakit`);

--
-- Indexes for table `tabel_penyakit`
--
ALTER TABLE `tabel_penyakit`
  ADD PRIMARY KEY (`id_penyakit`);

--
-- Indexes for table `tabel_user`
--
ALTER TABLE `tabel_user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tabel_admin`
--
ALTER TABLE `tabel_admin`
  MODIFY `id_admin` int(25) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tabel_faktor`
--
ALTER TABLE `tabel_faktor`
  MODIFY `id_faktor` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT for table `tabel_konsultasi`
--
ALTER TABLE `tabel_konsultasi`
  MODIFY `id_konsultasi` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tabel_pengetahuan`
--
ALTER TABLE `tabel_pengetahuan`
  MODIFY `id_pengetahuan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `tabel_penyakit`
--
ALTER TABLE `tabel_penyakit`
  MODIFY `id_penyakit` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `tabel_user`
--
ALTER TABLE `tabel_user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tabel_detail_konsultasi`
--
ALTER TABLE `tabel_detail_konsultasi`
  ADD CONSTRAINT `tabel_detail_konsultasi_ibfk_1` FOREIGN KEY (`id_konsultasi`) REFERENCES `tabel_konsultasi` (`id_konsultasi`);

--
-- Constraints for table `tabel_konsultasi`
--
ALTER TABLE `tabel_konsultasi`
  ADD CONSTRAINT `tabel_konsultasi_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `tabel_user` (`id_user`),
  ADD CONSTRAINT `tabel_konsultasi_ibfk_2` FOREIGN KEY (`id_konsultasi`) REFERENCES `tabel_penyakit` (`id_penyakit`);

--
-- Constraints for table `tabel_pengetahuan`
--
ALTER TABLE `tabel_pengetahuan`
  ADD CONSTRAINT `tabel_pengetahuan_ibfk_1` FOREIGN KEY (`id_faktor`) REFERENCES `tabel_faktor` (`id_faktor`),
  ADD CONSTRAINT `tabel_pengetahuan_ibfk_2` FOREIGN KEY (`id_penyakit`) REFERENCES `tabel_penyakit` (`id_penyakit`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
