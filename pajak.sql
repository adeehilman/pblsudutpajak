-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 30, 2023 at 02:54 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.0.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pajak`
--

-- --------------------------------------------------------

--
-- Table structure for table `articles`
--

CREATE TABLE `articles` (
  `id` int(11) NOT NULL,
  `judul` varchar(64) NOT NULL,
  `isi` text NOT NULL,
  `cover` varchar(64) NOT NULL,
  `kategori` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `articles`
--

INSERT INTO `articles` (`id`, `judul`, `isi`, `cover`, `kategori`) VALUES
(20, 'Pajak merupakan iuran wajib dari rakyat kepada negaranya', 'Pajak adalah iuran rakyat kepada kas negara berdasarkan undang-undang (sehingga dapat dipaksakan) dengan tiada mendapat balas jasa secara langsung. Pajak dipungut berdasarkan norma-norma hukum guna menutup biaya produksi barang-barang dan jasa kolektif untuk mencapai kesejahteraan umum.', '1669184470.jpg', 'Information'),
(21, 'Pajak merupakan iuran wajib dari rakyat kepada negaranya', 'Pajak dapat di berikan kepada negara nya', '1669184558.jpg', 'Information'),
(22, 'Pajak merupakan iuran wajib dari rakyat kepada negaranya', 'pajak dapat dibayarkan kepada pengguna wajib pajak', '1669184597.jpg', 'Information'),
(23, 'Pajak merupakan iuran wajib dari rakyat kepada negaranya', 'pajak dapat menyubang kepada negara', '1669184637.jpg', 'Information'),
(27, 'Bayar Pajak', 'Bayar pajak merupapakan iuran wajib kepada negara', '1669814765.jpg', 'Information'),
(28, 'Pajak terbaru', 'PPh atau Pajak Penghasilan adalah jenis pajak yang dibebankan kepada orang pribadi maupun badan usaha atas penghasilan yang diterima.\r\n\r\nPenghasilan yang menjadi objek pajak, meliputi gaji, upah, tunjangan, honor, komisi, hadiah, laba usaha, keuntungan karena penjualan atau pengalihan harta, dan lainnya yang diatur dalam aturan perundang-undangan.', '1669967043.jpg', 'Information'),
(29, 'Penarikan pajak terbaru', 'alam hal Wajib Pajak diperbolehkan menunda penyampaian Surat Pemberitahuan Tahunan dan ternyata penghitungan sementara pajak yang terutang kurang dari jumlah pajak yang sebenarnya terutang atas kekurangan pembayaran pajak tersebut, dikenai bunga sebesar 2% (dua persen) per bulan yang dihitung dari saat berakhirnya batas waktu penyampaian Surat Pemberitahuan Tahunan sampai dengan tanggal dibayarnya kekurangan pembayaran tersebut dan bagian dari bulan dihitung penuh 1 (satu) bulan.', '1669967144.jpg', 'Blog');

-- --------------------------------------------------------

--
-- Table structure for table `tb_admin`
--

CREATE TABLE `tb_admin` (
  `uid` varchar(20) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_admin`
--

INSERT INTO `tb_admin` (`uid`, `username`, `password`) VALUES
('0447A21B4480', 'nabila', '$2y$10$Xmrr7aQpIMRJL79KRE0vhewBahegWGg1Vi4sbrzJGDSWuhIekmlya'),
('0447A21B4480F5E47737', 'superadmin', '$2y$10$99UkKFJJ/jUx.0XdBrnORu1QEhG458clTWCzH/6ReSEWBwx/xHuXS'),
('0603E7A51D47A21B44', 'rizki', '$2y$10$MviN.ymF2Ju2VHBBzli.ketfn2vMqD7hJHhny3ZFUB0uqF/Qb9R/G'),
('45H7F358', 'superadmin', '$2y$10$GrlJ2p/9PNHs.elO0KOpFOy4kM/uMqk2wZyOYzEVuFQW4aojpAgly'),
('63E7A531', 'admin', '$2y$10$ElB5fZwmNC5CJ');

-- --------------------------------------------------------

--
-- Table structure for table `tb_appoinment`
--

CREATE TABLE `tb_appoinment` (
  `id_appoinment` int(15) NOT NULL,
  `id_konsultans` int(15) NOT NULL,
  `id_users` int(15) NOT NULL,
  `appoinment_number` varchar(255) NOT NULL,
  `topik` varchar(255) NOT NULL,
  `hari` date NOT NULL,
  `jam` time NOT NULL,
  `jenis_pajak` varchar(255) NOT NULL,
  `media` varchar(255) NOT NULL,
  `appoinment_status` varchar(50) NOT NULL,
  `unique_id_user` int(255) NOT NULL,
  `unique_id_konsultan` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_appoinment`
--

INSERT INTO `tb_appoinment` (`id_appoinment`, `id_konsultans`, `id_users`, `appoinment_number`, `topik`, `hari`, `jam`, `jenis_pajak`, `media`, `appoinment_status`, `unique_id_user`, `unique_id_konsultan`) VALUES
(26, 2, 1, '6461230351', 'Pajak Kurs perusahaan', '2023-05-22', '14:15:00', 'PPh Pasal 22 dan 23', 'Live Chat', 'Accept', 1230351, 892512),
(42, 1, 13, '6484020922', 'Pembayaran tahunan PPh pasal 21', '2023-06-13', '14:28:00', 'PPh Pasal 21', 'Live Chat', 'Completed', 4020922, 636452),
(43, 5, 13, '6494020922', 'Pembayaran tahunan PPh pasal 21', '2023-06-23', '08:34:00', 'PPh Pasal 21', 'Live Chat', 'Accept', 4020922, 8078478),
(45, 1, 12, '6498061243', 'Pembayran tahunan PPh pasal 21', '2023-06-23', '10:24:00', 'PPh Badan', 'Live Chat', 'Completed', 8061243, 636452),
(46, 1, 14, '6498692176', 'Pembayaran tahunan PPh pasal 21', '2023-06-25', '15:05:00', 'PPh Badan', 'Live Chat', 'Completed', 8692176, 636452),
(47, 1, 12, '64B8061243', 'Pembayran tahunan PPh pasal 21', '2023-07-18', '17:05:00', 'PPh Pasal 21', 'Live Chat', 'Booked', 8061243, 636452),
(48, 6, 15, '64B8024078', 'Pembayran tahunan PPh pasal 21', '2023-07-28', '15:04:00', 'PPh Pasal 21', 'Live Chat', 'Reschedule', 8024078, 1896937),
(49, 1, 12, '64C8061243', 'Pembayran tahunan PPh pasal 21', '2023-08-01', '13:14:00', 'PPh Pasal 21', 'Live Chat', 'Booked', 8061243, 636452);

-- --------------------------------------------------------

--
-- Table structure for table `tb_chat`
--

CREATE TABLE `tb_chat` (
  `msg_id` int(11) NOT NULL,
  `incoming_msg_id` int(255) NOT NULL,
  `outgoing_msg_id` int(255) NOT NULL,
  `msg` varchar(1000) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_chat`
--

INSERT INTO `tb_chat` (`msg_id`, `incoming_msg_id`, `outgoing_msg_id`, `msg`, `created_at`) VALUES
(1, 1230351, 892512, 'Apa Kabar hari ini?', '2023-05-16 03:09:19'),
(2, 4104143, 636452, 'Hai apa kabar anda hari ini?\r\n', '2023-05-17 06:11:40'),
(3, 636452, 4104143, 'halo', '2023-05-17 07:47:47'),
(4, 636452, 4104143, 'p', '2023-05-17 07:55:52'),
(5, 636452, 4104143, 'selamat siang', '2023-05-17 08:02:10'),
(6, 892512, 1230351, 'halo', '2023-05-17 10:49:23'),
(7, 892512, 1230351, 'halo', '2023-05-17 11:46:48'),
(8, 636452, 4104143, 'halo', '2023-05-17 17:23:44'),
(9, 636452, 1466190, 'halo pak hakase', '2023-05-29 22:17:56'),
(10, 636452, 1466190, 'halo', '2023-05-29 22:19:31'),
(11, 636452, 1466190, 'asd', '2023-05-30 19:30:56'),
(12, 636452, 1466190, 'ad', '2023-05-30 19:30:58'),
(13, 636452, 1466190, 'kook', '2023-05-30 19:32:48'),
(14, 636452, 1466190, 'ada', '2023-05-30 19:56:11'),
(15, 636452, 1466190, 'asfjasgkjasnknaljnka jasnfoansfa kanklas', '2023-05-30 20:07:28'),
(16, 636452, 1466190, 'bagaimana kabar nya dok hao semua apakabar', '2023-05-30 20:12:04'),
(17, 636452, 1466190, 'halo', '2023-05-30 20:14:32'),
(18, 636452, 1466190, 'halo', '2023-05-30 20:20:13'),
(19, 636452, 1466190, 'asd', '2023-06-05 14:44:07'),
(24, 892512, 8061243, 'Halo! Terima kasih telah menghubungi kami. Anda telah melakukan reservasi untuk sesi konsultasi. Silakan bersabar sejenak, kami akan segera menyambungkan Anda dengan konsultan kami begitu waktu reservasi tiba. Terima kasih atas kesabaran dan pengertian Anda.', '2023-06-13 02:43:00'),
(25, 8061243, 636452, 'Halo! Terima kasih telah menghubungi kami. Anda telah melakukan reservasi untuk sesi konsultasi. Silakan bersabar sejenak, kami akan segera menyambungkan Anda dengan konsultan kami begitu waktu reservasi tiba. Terima kasih atas kesabaran dan pengertian Anda.', '2023-06-13 02:46:14'),
(26, 8061243, 636452, 'Halo! Terima kasih telah menghubungi kami. Anda telah melakukan reservasi untuk sesi konsultasi. Silakan bersabar sejenak, kami akan segera menyambungkan Anda dengan konsultan kami begitu waktu reservasi tiba. Terima kasih atas kesabaran dan pengertian Anda.', '2023-06-13 02:46:31'),
(27, 8061243, 892512, 'Halo! Terima kasih telah menghubungi kami. Anda telah melakukan reservasi untuk sesi konsultasi. Silakan bersabar sejenak, kami akan segera menyambungkan Anda dengan konsultan kami begitu waktu reservasi tiba. Terima kasih atas kesabaran dan pengertian Anda.', '2023-06-13 02:46:46'),
(28, 8061243, 892512, 'Halo! Terima kasih telah menghubungi kami. Anda telah melakukan reservasi untuk sesi konsultasi. Silakan bersabar sejenak, kami akan segera menyambungkan Anda dengan konsultan kami begitu waktu reservasi tiba. Terima kasih atas kesabaran dan pengertian Anda.', '2023-06-13 02:46:47'),
(29, 4020922, 636452, 'HALO?', '2023-06-13 14:27:23'),
(30, 4020922, 8078478, 'Halo! Terima kasih telah menghubungi kami. Anda telah melakukan reservasi untuk sesi konsultasi. Silakan bersabar sejenak, kami akan segera menyambungkan Anda dengan konsultan kami begitu waktu reservasi tiba. Terima kasih atas kesabaran dan pengertian Anda.', '2023-06-22 04:30:36'),
(31, 8061243, 636452, 'Halo! Terima kasih telah menghubungi kami. Anda telah melakukan reservasi untuk sesi konsultasi. Silakan bersabar sejenak, kami akan segera menyambungkan Anda dengan konsultan kami begitu waktu reservasi tiba. Terima kasih atas kesabaran dan pengertian Anda.', '2023-06-23 10:16:39'),
(32, 8061243, 636452, 'Halo! Terima kasih telah menghubungi kami. Anda telah melakukan reservasi untuk sesi konsultasi. Silakan bersabar sejenak, kami akan segera menyambungkan Anda dengan konsultan kami begitu waktu reservasi tiba. Terima kasih atas kesabaran dan pengertian Anda.', '2023-06-23 10:24:08'),
(33, 8061243, 636452, 'halo', '2023-06-23 10:24:58'),
(34, 8061243, 636452, 'nnn', '2023-06-23 10:59:47'),
(35, 8061243, 636452, 'saya adalah 636462', '2023-06-25 09:38:09'),
(36, 8061243, 636452, '636452', '2023-06-25 09:38:24'),
(37, 636452, 8061243, 'iya', '2023-06-25 09:42:12'),
(38, 8692176, 636452, 'Halo! Terima kasih telah menghubungi kami. Anda telah melakukan reservasi untuk sesi konsultasi. Silakan bersabar sejenak, kami akan segera menyambungkan Anda dengan konsultan kami begitu waktu reservasi tiba. Terima kasih atas kesabaran dan pengertian Anda.', '2023-06-25 19:05:57'),
(39, 636452, 8692176, 'halo apakabar', '2023-06-25 19:10:55'),
(40, 8692176, 636452, 'kabar saya baik , apa yang bisa saya bantu?', '2023-06-25 19:11:20'),
(41, 8061243, 636452, 'Halo! Terima kasih telah menghubungi kami. Anda telah melakukan reservasi untuk sesi konsultasi. Silakan bersabar sejenak, kami akan segera menyambungkan Anda dengan konsultan kami begitu waktu reservasi tiba. Terima kasih atas kesabaran dan pengertian Anda.', '2023-07-17 17:05:34'),
(42, 8024078, 1896937, 'Halo! Terima kasih telah menghubungi kami. Anda telah melakukan reservasi untuk sesi konsultasi. Silakan bersabar sejenak, kami akan segera menyambungkan Anda dengan konsultan kami begitu waktu reservasi tiba. Terima kasih atas kesabaran dan pengertian Anda.', '2023-07-25 10:01:50'),
(43, 8061243, 636452, 'Halo! Terima kasih telah menghubungi kami. Anda telah melakukan reservasi untuk sesi konsultasi. Silakan bersabar sejenak, kami akan segera menyambungkan Anda dengan konsultan kami begitu waktu reservasi tiba. Terima kasih atas kesabaran dan pengertian Anda.', '2023-07-30 19:11:25');

-- --------------------------------------------------------

--
-- Table structure for table `tb_entry`
--

CREATE TABLE `tb_entry` (
  `uid` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_entry`
--

INSERT INTO `tb_entry` (`uid`) VALUES
('0603E7A51D47A21B44');

-- --------------------------------------------------------

--
-- Table structure for table `tb_konsultan`
--

CREATE TABLE `tb_konsultan` (
  `id_konsultan` int(255) NOT NULL,
  `unique_id` int(255) NOT NULL,
  `nama` varchar(500) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(20) NOT NULL,
  `bio` varchar(255) DEFAULT NULL,
  `profil_pic` varchar(255) DEFAULT NULL,
  `alumnus` varchar(255) DEFAULT NULL,
  `bidang` varchar(255) DEFAULT NULL,
  `status` varchar(20) DEFAULT NULL,
  `pengalaman` varchar(255) NOT NULL,
  `jenjang_karir` int(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_konsultan`
--

INSERT INTO `tb_konsultan` (`id_konsultan`, `unique_id`, `nama`, `email`, `password`, `bio`, `profil_pic`, `alumnus`, `bidang`, `status`, `pengalaman`, `jenjang_karir`) VALUES
(1, 636452, 'Drs. Hakase Miura', 'adehilman2002@gmail.com', 'AD3010405', 'Tampan dan berani', 'team-2.jpg', NULL, 'PPh Badan', 'Online', '1 Tahun', NULL),
(2, 892512, 'Hinata Hyuga', 'hinata@demo.com', 'password', NULL, 'hinata.jpg', NULL, 'PPh Pasal 21', 'Online', '3 Tahun', NULL),
(3, 116458, 'Usman Akbar', 'usmanakbar@demo.com', 'password', NULL, 'pakar-5.png', NULL, 'PPh Tahunan Pribadi', 'Online', '10 Tahun', NULL),
(4, 120021, 'Melisa Syla', 'melisasyla@demo.com', 'password', NULL, 'pakar-6.jpg', NULL, 'PPh Badan', 'Online', '6 Tahun', NULL),
(5, 8078478, 'Park Kim', 'parkkimwho@gmail.com', 'Park', 'Korean-Indonesian', 'pakar-3.png', 'Universitas Korea', 'PPh Badan', 'Online', '5 Tahun', 0),
(6, 1896937, 'Suguha', 'suguha@gmail.com', '12345', 'Indonesian', 'download (1).jfif', 'Universitas Korea', 'PPh Pasal 21', 'Online', '5 Tahun', 0),
(7, 9510694, 'Mikasa Ackerman', 'mikasa@demo.com', '1', 'ackermab', '1686902201745.jpg', 'Universitas Korea', 'PPh Badan', 'Online', '5 Tahun', 0);

-- --------------------------------------------------------

--
-- Table structure for table `tb_users`
--

CREATE TABLE `tb_users` (
  `id_users` int(255) NOT NULL,
  `unique_id` int(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `foto_profil` varchar(255) DEFAULT 'default.png',
  `status` varchar(20) DEFAULT NULL,
  `last_seen` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_users`
--

INSERT INTO `tb_users` (`id_users`, `unique_id`, `email`, `password`, `nama`, `foto_profil`, `status`, `last_seen`) VALUES
(1, 1230351, 'adehilman2002@gmail.com', 'password', 'Ade Hilman', 'IMG-212.jpg', 'Online', '2022-12-29 23:51:52'),
(2, 4231121, 'demo@demo.com', 'password', 'Zavie Kurniawan', 'default.png', 'Online', '2022-12-30 01:25:36'),
(3, 0, 'mina@demo.com', 'password', 'Mina Hashikawa', 'default.png', 'Online', '2022-12-30 01:26:25'),
(6, 4104143, 'alfan@demo.com', 'password', 'Alfan Rey', 'alfan.jpg', 'Online', '2022-12-30 15:17:04'),
(7, 0, 'adehilman2002@gmail.com', 'password', 'Junanda Ika', 'default.png', 'Online', '2023-01-04 06:18:56'),
(8, 0, 'junanda@gmail.com', 'password', 'Junanda Ika', 'default.png', 'Online', '2023-01-04 06:19:34'),
(9, 262745, 'ghifa@gmail.com', '$2y$10$Hv1JPLi745Mva34xzTjXTOxEo36bN2r64liaFD46NYU2cBA.63yhO', 'Ghifara', 'default.png', 'Online', '2023-05-29 11:21:49'),
(10, 43729, 'ghifa@gmail.com', '$2y$10$OocyDl0serjqDVZJiuoYsOoW28edIsufnMZEgdFzYht72fF..Kp8y', 'Ghifara', 'default.png', 'Online', '2023-05-29 11:24:31'),
(11, 1466190, 'gilgor@gmail.com', '$2y$10$9GbnMUP9NX7UIyCwH.L/l.I.fngczqhDbWTKSHgJZPp7NpqpgN.JS', 'Gilgor', 'default.png', 'Online', '2023-05-29 11:32:16'),
(12, 8061243, 'kiana@gmail.com', '$2y$10$njhkrZrjtaS0cYGZwjSAdOEYzEHnJuqcqo9istUWmd/fvV2NwjSky', 'Kiana', 'default.png', 'Online', '2023-06-06 19:47:50'),
(13, 4020922, 'suherman@gmail.com', '$2y$10$.BIBAf01n23ue9c6KLXVd.YRrSzH1BfaRJWPczEMh8N.2OdXuZ.eq', 'Suherman', 'default.png', 'Online', '2023-06-13 14:21:44'),
(14, 8692176, 'riski10@gmail.com', '$2y$10$4W6P.f2HrYF0ESN2W7WbUOMHiuJOMywQzrVB0ml7pybyRVsSygRBm', 'Muhammad Rizki', 'default.png', 'Online', '2023-06-25 19:04:04'),
(15, 8024078, 'hilman@demo.com', '$2y$10$x1tUtMpVa5BHKUK6TvUrrOsh4XvFERhPLXmaI9MvXfLovClLlNbkO', 'Ade', 'default.png', 'Online', '2023-07-25 10:00:45');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `LOGIN` varchar(50) DEFAULT NULL,
  `NAME` varchar(150) DEFAULT NULL,
  `PASSWORD` varchar(100) DEFAULT NULL,
  `ENABLE` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `LOGIN`, `NAME`, `PASSWORD`, `ENABLE`) VALUES
(1, 'admin', 'Administrator', 'admin', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `articles`
--
ALTER TABLE `articles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_admin`
--
ALTER TABLE `tb_admin`
  ADD PRIMARY KEY (`uid`);

--
-- Indexes for table `tb_appoinment`
--
ALTER TABLE `tb_appoinment`
  ADD PRIMARY KEY (`id_appoinment`),
  ADD KEY `tb_appointment` (`id_konsultans`),
  ADD KEY `tb_users` (`id_users`);

--
-- Indexes for table `tb_chat`
--
ALTER TABLE `tb_chat`
  ADD PRIMARY KEY (`msg_id`);

--
-- Indexes for table `tb_entry`
--
ALTER TABLE `tb_entry`
  ADD PRIMARY KEY (`uid`);

--
-- Indexes for table `tb_konsultan`
--
ALTER TABLE `tb_konsultan`
  ADD PRIMARY KEY (`id_konsultan`);

--
-- Indexes for table `tb_users`
--
ALTER TABLE `tb_users`
  ADD PRIMARY KEY (`id_users`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `articles`
--
ALTER TABLE `articles`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `tb_appoinment`
--
ALTER TABLE `tb_appoinment`
  MODIFY `id_appoinment` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=50;

--
-- AUTO_INCREMENT for table `tb_chat`
--
ALTER TABLE `tb_chat`
  MODIFY `msg_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;

--
-- AUTO_INCREMENT for table `tb_konsultan`
--
ALTER TABLE `tb_konsultan`
  MODIFY `id_konsultan` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `tb_users`
--
ALTER TABLE `tb_users`
  MODIFY `id_users` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tb_appoinment`
--
ALTER TABLE `tb_appoinment`
  ADD CONSTRAINT `tb_appointment` FOREIGN KEY (`id_konsultans`) REFERENCES `tb_konsultan` (`id_konsultan`),
  ADD CONSTRAINT `tb_users` FOREIGN KEY (`id_users`) REFERENCES `tb_users` (`id_users`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
