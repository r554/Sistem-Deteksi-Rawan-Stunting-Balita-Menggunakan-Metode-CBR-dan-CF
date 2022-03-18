-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 07, 2022 at 02:04 PM
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
-- Database: `skripsi_ujicoba`
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
(1, 'kirana', '1234', '089123456789', 'kiranaywt@gmail.com', 'Kirana', 'bts_jungkook_20200823_5.png');

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
(13, 'Saat hamil ibu mengalami penyakit Anemia', '0.5'),
(15, 'Saat hamil terpenuhi gizi atau asupan nutrisi ibu', '0.3'),
(16, 'Saat hamil ibu mengalami kekurangan energi kronik (KEK)', '0.5'),
(17, 'Menerapkan pola asuh yang baik setelah anak dilahirkan', '1'),
(18, 'Tidak menerapkan pola asuh yang baik setelah anak dilahirkan', '1'),
(19, 'Menerapkan pola Hidup Bersih dan Sehat di lingkungan rumah', '0.3'),
(20, 'Tidak menerapkan pola Hidup Bersih dan Sehat di lingkungan rumah', '0.3'),
(21, 'Anak kekurangan asupan gizi', '0.5'),
(22, 'Merencanakan dan diberikannya ASI Eksklusif pada anak usia 0-6 bulan', '0.5'),
(23, 'Merencanakan dan diberikanya MP ASI pada anak pertama kali saat usia 6 bulan', '0.5'),
(25, 'Anak mendapatkan 4 dari 7 kelompok makanan saat diberikannya MP ASI (contoh: biji-bijian, akar, dan umbi; kacang polong dan kacag-kacangan; produk susu; daging; telur atau ikan; buah dan sayur kaya vitamin A; dan sayur dan buah lainnya)', '0.3'),
(26, 'Ibu merasa masih kurang dalam pengetahuan yang dimulai dari sebelum hamil hingga melahirkan seperti mengenai kecukupan gizi dan segala hal yang mencakup kesehatan ibu dan anak', '0.2');

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
(18, 23, 3),
(19, 25, 3),
(28, 36, 17),
(29, 13, 1),
(30, 22, 3);

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
(1, 'Rawan Stunting', 'Rawan Stunting belum dikatakan stunting, namun dilihat dari sisi faktor penyebab stunting dikatakan rawan stunting', '- Lebih meningkatkan pola asuh anak dengan baik<br>\r\n- Berikan ASI sampai usia 2 tahun<br>\r\n- Perhatikan dan penuhi kebutuhan MP ASI anak<br>\r\n- Selalu jaga perilaku bersih dan sehat<br>\r\n- Rutin mengikuti posyandu sesuai jadwal<br>\r\n- Segera melakukan pemeriksaan ke bidan jika ingin mendapatkan hasil kedepannya lebih baik<br>\r\n'),
(3, 'Aman Stunting', 'Aman Stunting belum dikatakan benar-benar aman dari stunting namun dilihat dari faktor penyebab stunting dikatakan aman stunting', '- Tetap diperhatikan kebutuhan gizi pada anak<br>\r\n- Tetap dijaga pola asuh anak dengan baik<br>\r\n- Tetap diberikan ASI sampai usia 2 tahun<br>\r\n- Penuhi kebutuhan MP ASI anak<br>\r\n- Tetap jaga perilaku hidup bersih dan sehat<br>\r\n- Tetap rutin mengikuti posyandu sesuai jadwal<br>');

-- --------------------------------------------------------

--
-- Table structure for table `tabel_result_cbr`
--

CREATE TABLE `tabel_result_cbr` (
  `id_result_cbr` int(11) NOT NULL,
  `id_user` varchar(15) NOT NULL,
  `id_pengetahuan` int(11) NOT NULL,
  `nilai_cf` varchar(50) NOT NULL,
  `nilai_user` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tabel_result_cbr`
--

INSERT INTO `tabel_result_cbr` (`id_result_cbr`, `id_user`, `id_pengetahuan`, `nilai_cf`, `nilai_user`) VALUES
(183, 'USR0001', 7, '0.3', '1'),
(196, 'USR0002', 7, '0.3', '0.5'),
(210, 'USR0003', 9, '0.5', '0'),
(224, 'USR0004', 10, '1', '0'),
(236, 'USR0005', 9, '0.5', '1'),
(258, 'USR0006', 19, '0.3', '0.5'),
(260, 'USR0006', 29, '0.5', '0.5'),
(267, 'USR0007', 15, '1', '1'),
(268, 'USR0007', 16, '0.3', '0.5'),
(278, 'USR0008', 12, '0.5', '1'),
(279, 'USR0008', 13, '0.2', '0'),
(287, 'USR0009', 7, '0.3', '1'),
(288, 'USR0009', 9, '0.5', '0.5'),
(289, 'USR0009', 10, '1', '0'),
(290, 'USR0009', 11, '0.3', '0'),
(291, 'USR0009', 12, '0.5', '0.5'),
(292, 'USR0009', 13, '0.2', '0.5'),
(293, 'USR0009', 15, '1', '1'),
(294, 'USR0009', 16, '0.3', '1'),
(295, 'USR0009', 17, '0.5', '0.5'),
(296, 'USR0009', 18, '0.5', '0'),
(297, 'USR0009', 19, '0.3', '0.5'),
(299, 'USR0009', 29, '0.5', '0.5'),
(300, 'USR0010', 7, '0.3', '1'),
(302, 'USR0010', 10, '1', '0.5'),
(307, 'USR0010', 16, '0.3', '0'),
(308, 'USR0010', 17, '0.5', '0.5'),
(312, 'USR0010', 29, '0.5', '0.5'),
(313, 'USR0011', 7, '0.3', '0'),
(314, 'USR0011', 9, '0.5', '0'),
(315, 'USR0011', 10, '1', '0'),
(316, 'USR0011', 11, '0.3', '0'),
(317, 'USR0011', 12, '0.5', '0'),
(318, 'USR0011', 13, '0.2', '0'),
(320, 'USR0011', 16, '0.3', '0'),
(321, 'USR0011', 17, '0.5', '0'),
(322, 'USR0011', 18, '0.5', '0'),
(323, 'USR0011', 19, '0.3', '0'),
(325, 'USR0011', 29, '0.5', '0'),
(326, 'USR0012', 7, '0.3', '0.5'),
(327, 'USR0012', 9, '0.5', '0.5'),
(328, 'USR0012', 10, '1', '0.5'),
(329, 'USR0012', 11, '0.3', '0.5'),
(330, 'USR0012', 12, '0.5', '0.5'),
(331, 'USR0012', 13, '0.2', '0.5'),
(332, 'USR0012', 15, '1', '0.5'),
(333, 'USR0012', 16, '0.3', '0.5'),
(334, 'USR0012', 17, '0.5', '0.5'),
(335, 'USR0012', 18, '0.5', '0.5'),
(336, 'USR0012', 19, '0.3', '0.5'),
(338, 'USR0012', 29, '0.5', '0.5'),
(339, 'USR0013', 7, '0.3', '1'),
(340, 'USR0013', 9, '0.5', '1'),
(341, 'USR0013', 10, '1', '1'),
(342, 'USR0013', 11, '0.3', '1'),
(343, 'USR0013', 12, '0.5', '1'),
(344, 'USR0013', 13, '0.2', '1'),
(345, 'USR0013', 15, '1', '1'),
(346, 'USR0013', 16, '0.3', '1'),
(347, 'USR0013', 17, '0.5', '1'),
(348, 'USR0013', 18, '0.5', '1'),
(349, 'USR0013', 19, '0.3', '1'),
(351, 'USR0013', 29, '0.5', '1'),
(352, 'USR0014', 7, '0.3', '1'),
(353, 'USR0014', 9, '0.5', '1'),
(354, 'USR0014', 10, '1', '0.5'),
(357, 'USR0014', 13, '0.2', '0.5'),
(358, 'USR0014', 15, '1', '0.5'),
(360, 'USR0014', 17, '0.5', '0'),
(361, 'USR0014', 18, '0.5', '1'),
(364, 'USR0014', 29, '0.5', '0'),
(365, 'USR0015', 7, '0.3', '1'),
(370, 'USR0015', 13, '0.2', '0.5'),
(371, 'USR0015', 15, '1', '0.5'),
(372, 'USR0015', 16, '0.3', '1'),
(373, 'USR0015', 17, '0.5', '1'),
(374, 'USR0015', 18, '0.5', '1'),
(375, 'USR0015', 19, '0.3', '0.5'),
(377, 'USR0015', 29, '0.5', '0.5'),
(378, 'USR0016', 7, '0.3', '0'),
(379, 'USR0016', 9, '0.5', '1'),
(382, 'USR0016', 12, '0.5', '0.5'),
(383, 'USR0016', 13, '0.2', '0'),
(384, 'USR0016', 15, '1', '0.5'),
(385, 'USR0016', 16, '0.3', '0.5'),
(386, 'USR0016', 17, '0.5', '1'),
(387, 'USR0016', 18, '0.5', '1'),
(388, 'USR0016', 19, '0.3', '0.5'),
(392, 'USR0017', 9, '0.5', '1'),
(403, 'USR0017', 29, '0.5', '1'),
(412, 'USR0018', 17, '0.5', '0.5'),
(414, 'USR0018', 19, '0.3', '1'),
(417, 'USR0019', 7, '0.3', '1'),
(419, 'USR0019', 10, '1', '0.5'),
(425, 'USR0019', 17, '0.5', '0'),
(427, 'USR0019', 19, '0.3', '0'),
(428, 'USR0019', 28, '0.6', '0'),
(429, 'USR0019', 29, '0.5', '1'),
(430, 'USR0020', 7, '0.3', '0.5'),
(432, 'USR0020', 10, '1', '0'),
(433, 'USR0020', 11, '0.3', '0'),
(434, 'USR0020', 12, '0.5', '1'),
(436, 'USR0020', 15, '1', '1'),
(437, 'USR0020', 16, '0.3', '0.5'),
(438, 'USR0020', 17, '0.5', '0'),
(443, 'USR0021', 7, '0.3', '0'),
(444, 'USR0021', 9, '0.5', '1'),
(445, 'USR0021', 10, '1', '0.5'),
(446, 'USR0021', 11, '0.3', '0.5'),
(447, 'USR0021', 12, '0.5', '1'),
(448, 'USR0021', 13, '0.2', '0'),
(449, 'USR0021', 15, '1', '0'),
(452, 'USR0021', 18, '0.5', '0'),
(453, 'USR0021', 19, '0.3', '0'),
(455, 'USR0021', 29, '0.5', '0'),
(456, 'USR0022', 7, '0.3', '0'),
(458, 'USR0022', 10, '1', '0.5'),
(460, 'USR0022', 12, '0.5', '0'),
(461, 'USR0022', 13, '0.2', '1'),
(462, 'USR0022', 15, '1', '1'),
(469, 'USR0023', 7, '0.3', '0'),
(474, 'USR0023', 13, '0.2', '0.5'),
(477, 'USR0023', 17, '0.5', '1'),
(479, 'USR0023', 19, '0.3', '0.5'),
(482, 'USR0024', 7, '0.3', '0'),
(483, 'USR0024', 9, '0.5', '0'),
(485, 'USR0024', 11, '0.3', '0'),
(488, 'USR0024', 15, '1', '1'),
(490, 'USR0024', 17, '0.5', '1'),
(491, 'USR0024', 18, '0.5', '0.5'),
(492, 'USR0024', 19, '0.3', '0.5'),
(494, 'USR0024', 29, '0.5', '0.5'),
(495, 'USR0025', 7, '0.3', '1'),
(496, 'USR0025', 9, '0.5', '0.5'),
(497, 'USR0025', 10, '1', '0'),
(498, 'USR0025', 11, '0.3', '0.5'),
(499, 'USR0025', 12, '0.5', '0'),
(500, 'USR0025', 13, '0.2', '0'),
(501, 'USR0025', 15, '1', '0.5'),
(502, 'USR0025', 16, '0.3', '1'),
(503, 'USR0025', 17, '0.5', '0'),
(504, 'USR0025', 18, '0.5', '0.5'),
(505, 'USR0025', 19, '0.3', '1'),
(507, 'USR0025', 29, '0.5', '0'),
(508, 'USR0026', 7, '0.3', '1'),
(509, 'USR0026', 9, '0.5', '0.5'),
(510, 'USR0026', 10, '1', '0'),
(511, 'USR0026', 11, '0.3', '1'),
(512, 'USR0026', 12, '0.5', '0.5'),
(513, 'USR0026', 13, '0.2', '0'),
(514, 'USR0026', 15, '1', '0.5'),
(515, 'USR0026', 16, '0.3', '0'),
(516, 'USR0026', 17, '0.5', '1'),
(517, 'USR0026', 18, '0.5', '0'),
(518, 'USR0026', 19, '0.3', '1'),
(520, 'USR0026', 29, '0.5', '0.5'),
(521, 'USR0027', 7, '0.3', '1'),
(526, 'USR0027', 13, '0.2', '0.5'),
(527, 'USR0027', 15, '1', '0.5'),
(528, 'USR0027', 16, '0.3', '1'),
(529, 'USR0027', 17, '0.5', '1'),
(530, 'USR0027', 18, '0.5', '1'),
(531, 'USR0027', 19, '0.3', '0.5'),
(533, 'USR0027', 29, '0.5', '0.5'),
(534, 'USR0028', 7, '0.3', '0'),
(535, 'USR0028', 9, '0.5', '1'),
(538, 'USR0028', 12, '0.5', '0.5'),
(539, 'USR0028', 13, '0.2', '0'),
(540, 'USR0028', 15, '1', '0.5'),
(541, 'USR0028', 16, '0.3', '0.5'),
(542, 'USR0028', 17, '0.5', '1'),
(543, 'USR0028', 18, '0.5', '1'),
(544, 'USR0028', 19, '0.3', '0.5'),
(547, 'USR0029', 7, '0.3', '1'),
(548, 'USR0029', 9, '0.5', '1'),
(553, 'USR0029', 15, '1', '0.5'),
(554, 'USR0029', 16, '0.3', '1'),
(555, 'USR0029', 17, '0.5', '1'),
(556, 'USR0029', 18, '0.5', '1'),
(557, 'USR0029', 19, '0.3', '0.5'),
(559, 'USR0029', 29, '0.5', '1'),
(560, 'USR0030', 7, '0.3', '1'),
(561, 'USR0030', 9, '0.5', '1'),
(562, 'USR0030', 10, '1', '0.5'),
(563, 'USR0030', 11, '0.3', '1'),
(564, 'USR0030', 12, '0.5', '1'),
(565, 'USR0030', 13, '0.2', '0.5'),
(568, 'USR0030', 17, '0.5', '1'),
(569, 'USR0030', 18, '0.5', '1'),
(570, 'USR0030', 19, '0.3', '0.5'),
(572, 'USR0030', 29, '0.5', '1'),
(574, 'USR0031', 9, '0.5', '1'),
(585, 'USR0031', 29, '0.5', '1'),
(594, 'USR0032', 17, '0.5', '0.5'),
(596, 'USR0032', 19, '0.3', '1'),
(599, 'USR0033', 7, '0.3', '1'),
(611, 'USR0033', 29, '0.5', '1'),
(615, 'USR0034', 11, '0.3', '0.5'),
(625, 'USR0035', 7, '0.3', '1'),
(626, 'USR0035', 9, '0.5', '0.5'),
(629, 'USR0035', 12, '0.5', '0'),
(638, 'USR0036', 7, '0.3', '1'),
(650, 'USR0036', 29, '0.5', '1'),
(651, 'USR0037', 7, '0.3', 'Pilih Kondisi'),
(652, 'USR0037', 9, '0.5', '1'),
(653, 'USR0037', 10, '1', 'Pilih Kondisi'),
(654, 'USR0037', 11, '0.3', 'Pilih Kondisi'),
(655, 'USR0037', 12, '0.5', 'Pilih Kondisi'),
(656, 'USR0037', 13, '0.2', 'Pilih Kondisi'),
(657, 'USR0037', 15, '1', 'Pilih Kondisi'),
(658, 'USR0037', 16, '0.3', 'Pilih Kondisi'),
(659, 'USR0037', 17, '0.5', 'Pilih Kondisi'),
(660, 'USR0037', 18, '0.5', 'Pilih Kondisi'),
(661, 'USR0037', 19, '0.3', 'Pilih Kondisi'),
(662, 'USR0037', 28, '0.6', 'Pilih Kondisi'),
(663, 'USR0037', 29, '0.5', '1'),
(664, 'USR0038', 7, '0.3', '1'),
(665, 'USR0038', 9, '0.5', 'Pilih Kondisi'),
(666, 'USR0038', 10, '1', 'Pilih Kondisi'),
(667, 'USR0038', 11, '0.3', 'Pilih Kondisi'),
(668, 'USR0038', 12, '0.5', 'Pilih Kondisi'),
(669, 'USR0038', 13, '0.2', 'Pilih Kondisi'),
(670, 'USR0038', 15, '1', 'Pilih Kondisi'),
(671, 'USR0038', 16, '0.3', 'Pilih Kondisi'),
(672, 'USR0038', 17, '0.5', 'Pilih Kondisi'),
(673, 'USR0038', 18, '0.5', 'Pilih Kondisi'),
(674, 'USR0038', 19, '0.3', 'Pilih Kondisi'),
(675, 'USR0038', 28, '0.6', 'Pilih Kondisi'),
(676, 'USR0038', 29, '0.5', '1'),
(677, 'USR0039', 7, '0.3', 'Pilih Kondisi'),
(678, 'USR0039', 9, '0.5', 'Pilih Kondisi'),
(679, 'USR0039', 10, '1', 'Pilih Kondisi'),
(680, 'USR0039', 11, '0.3', 'Pilih Kondisi'),
(681, 'USR0039', 12, '0.5', 'Pilih Kondisi'),
(682, 'USR0039', 13, '0.2', 'Pilih Kondisi'),
(683, 'USR0039', 15, '1', 'Pilih Kondisi'),
(684, 'USR0039', 16, '0.3', 'Pilih Kondisi'),
(685, 'USR0039', 17, '0.5', '0.5'),
(686, 'USR0039', 18, '0.5', 'Pilih Kondisi'),
(687, 'USR0039', 19, '0.3', '1'),
(688, 'USR0039', 28, '0.6', 'Pilih Kondisi'),
(689, 'USR0039', 29, '0.5', 'Pilih Kondisi'),
(690, 'USR0042', 7, '0.3', '1'),
(691, 'USR0042', 9, '0.5', '1'),
(692, 'USR0042', 10, '1', '0.5'),
(693, 'USR0042', 11, '0.3', '0'),
(694, 'USR0042', 12, '0.5', 'Pilih Kondisi'),
(695, 'USR0042', 13, '0.2', 'Pilih Kondisi'),
(696, 'USR0042', 15, '1', 'Pilih Kondisi'),
(697, 'USR0042', 16, '0.3', 'Pilih Kondisi'),
(698, 'USR0042', 18, '0.5', 'Pilih Kondisi'),
(699, 'USR0042', 19, '0.3', 'Pilih Kondisi'),
(700, 'USR0042', 29, '0.5', 'Pilih Kondisi'),
(701, 'USR0043', 7, '0.3', '1'),
(702, 'USR0043', 9, '0.5', 'Pilih Kondisi'),
(703, 'USR0043', 10, '1', '0.5'),
(704, 'USR0043', 11, '0.3', '0'),
(705, 'USR0043', 12, '0.5', 'Pilih Kondisi'),
(706, 'USR0043', 13, '0.2', 'Pilih Kondisi'),
(707, 'USR0043', 15, '1', 'Pilih Kondisi'),
(708, 'USR0043', 16, '0.3', 'Pilih Kondisi'),
(709, 'USR0043', 18, '0.5', 'Pilih Kondisi'),
(710, 'USR0043', 19, '0.3', 'Pilih Kondisi'),
(711, 'USR0043', 29, '0.5', 'Pilih Kondisi'),
(712, 'USR0043', 30, '0.5', 'Pilih Kondisi'),
(713, 'USR0045', 7, '0.3', '0.5'),
(714, 'USR0045', 9, '0.5', '1'),
(715, 'USR0045', 10, '1', '0'),
(725, 'USR0046', 7, '0.3', '1'),
(727, 'USR0046', 10, '1', '0.5'),
(728, 'USR0046', 11, '0.3', '1'),
(729, 'USR0046', 12, '0.5', '0'),
(730, 'USR0046', 13, '0.2', '1'),
(738, 'USR0047', 9, '0.5', '1'),
(739, 'USR0047', 10, '1', '0.5'),
(740, 'USR0047', 11, '0.3', '0'),
(741, 'USR0047', 12, '0.5', '1'),
(753, 'USR0048', 12, '0.5', '1'),
(754, 'USR0048', 13, '0.2', '0.5'),
(756, 'USR0048', 16, '0.3', '1'),
(761, 'USR0049', 7, '0.3', '1'),
(768, 'USR0049', 16, '0.3', '1'),
(769, 'USR0049', 18, '0.5', '1'),
(770, 'USR0049', 19, '0.3', '0.5'),
(771, 'USR0049', 29, '0.5', '0'),
(772, 'USR0049', 30, '0.5', '0'),
(773, 'USR0050', 7, '0.3', '1'),
(774, 'USR0050', 9, '0.5', '1'),
(776, 'USR0050', 11, '0.3', '0.5'),
(777, 'USR0050', 12, '0.5', '0.5'),
(779, 'USR0050', 15, '1', '0'),
(781, 'USR0050', 18, '0.5', '0'),
(784, 'USR0050', 30, '0.5', '0'),
(785, 'USR0051', 7, '0.3', '1'),
(786, 'USR0051', 9, '0.5', '0.5'),
(790, 'USR0051', 13, '0.2', '0.5'),
(791, 'USR0051', 15, '1', '1'),
(793, 'USR0051', 18, '0.5', '0'),
(794, 'USR0051', 19, '0.3', '0.5'),
(795, 'USR0051', 29, '0.5', '0.5'),
(796, 'USR0051', 30, '0.5', '1'),
(797, 'USR0052', 7, '0.3', '0.5'),
(798, 'USR0052', 9, '0.5', '0'),
(800, 'USR0052', 11, '0.3', '0.5'),
(801, 'USR0052', 12, '0.5', '1'),
(802, 'USR0052', 13, '0.2', '0'),
(803, 'USR0052', 15, '1', '0.5'),
(804, 'USR0052', 16, '0.3', '1'),
(809, 'USR0053', 7, '0.3', '1'),
(821, 'USR0054', 7, '0.3', '1'),
(823, 'USR0054', 10, '1', '0.5'),
(825, 'USR0054', 12, '0.5', '0.5'),
(828, 'USR0054', 16, '0.3', '0'),
(832, 'USR0054', 30, '0.5', '1'),
(836, 'USR0055', 11, '0.3', '1'),
(845, 'USR0057', 7, '0.3', '1'),
(846, 'USR0057', 9, '0.5', '0.5'),
(850, 'USR0057', 13, '0.2', '0'),
(852, 'USR0057', 16, '0.3', '0'),
(853, 'USR0057', 18, '0.5', '0.5'),
(854, 'USR0057', 19, '0.3', '0.5'),
(856, 'USR0057', 30, '0.5', '1');

-- --------------------------------------------------------

--
-- Table structure for table `tabel_user`
--

CREATE TABLE `tabel_user` (
  `id_user` varchar(15) NOT NULL,
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
('USR0051', 'budi', '24', 'Laki-Laki', 'Jember', 'ibu budi', 'ayah budi', '0876354547753'),
('USR0052', 'Ana', '15', 'Perempuan', 'Umbulsari', 'Umi', 'Abi', '0876253687469'),
('USR0053', 'aaa', '15', 'Laki-Laki', 'd', 's', 'a', '36355'),
('USR0054', 'f', '6', 'Laki-Laki', 'gx', 'f', 'f', '34537'),
('USR0055', 's', '4', 'Laki-Laki', 'gsg', 'b', 'a', '344363363'),
('USR0056', 'n', '6', 'Perempuan', 'gg', 'b', 'g', '646'),
('USR0057', 'hdj', '7', 'Laki-Laki', 'dd', 'j', 'jk', '347'),
('USR0058', 'a', '3', 'Laki-Laki', 'sdf', 'a', 'a', '2424422');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tabel_admin`
--
ALTER TABLE `tabel_admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indexes for table `tabel_faktor`
--
ALTER TABLE `tabel_faktor`
  ADD PRIMARY KEY (`id_faktor`);

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
-- Indexes for table `tabel_result_cbr`
--
ALTER TABLE `tabel_result_cbr`
  ADD PRIMARY KEY (`id_result_cbr`),
  ADD KEY `id_user` (`id_user`);

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
-- AUTO_INCREMENT for table `tabel_pengetahuan`
--
ALTER TABLE `tabel_pengetahuan`
  MODIFY `id_pengetahuan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `tabel_penyakit`
--
ALTER TABLE `tabel_penyakit`
  MODIFY `id_penyakit` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `tabel_result_cbr`
--
ALTER TABLE `tabel_result_cbr`
  MODIFY `id_result_cbr` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=857;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
