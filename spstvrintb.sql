-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 06, 2018 at 05:58 AM
-- Server version: 10.1.30-MariaDB
-- PHP Version: 7.2.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `spstvrintb`
--

-- --------------------------------------------------------

--
-- Table structure for table `acara`
--

CREATE TABLE `acara` (
  `id` int(5) NOT NULL,
  `nama` varchar(60) NOT NULL,
  `jam` time(1) NOT NULL,
  `durasi` time(1) NOT NULL,
  `karakter` varchar(15) NOT NULL,
  `sumber` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `acara`
--

INSERT INTO `acara` (`id`, `nama`, `jam`, `durasi`, `karakter`, `sumber`) VALUES
(1, 'Pesona NTB', '15:05:00.0', '00:50:00.0', 'P/B (rerun)', 'Komputer'),
(2, 'Lekan Desa', '15:30:00.0', '00:50:00.0', 'P/B', 'Komputer'),
(3, 'Ragam Budaya Sasambo', '17:00:00.0', '00:55:00.0', 'P/B', 'Komputer'),
(4, 'Fokus Islam', '16:00:00.0', '00:55:00.0', 'P/B', 'Komputer'),
(6, 'Berugak', '17:00:00.0', '00:55:00.0', 'P/B', 'Komputer'),
(7, 'Tembang Pilihan', '15:05:00.0', '00:50:00.0', 'P/B', 'Komputer'),
(9, 'Tinjaun Acara', '18:55:00.0', '00:01:00.0', 'P/B', 'Sto 1'),
(10, 'Cermin', '18:56:00.0', '00:04:00.0', 'P/B', 'Sto 1'),
(11, 'Relay Jakarta', '19:00:00.0', '00:00:00.0', 'P/B', 'Sto 1'),
(12, 'prestasi anak', '15:05:00.0', '00:50:00.0', 'P/B', 'Sto 1'),
(13, 'anak ceria', '15:05:00.0', '00:25:00.0', 'P/B', 'Sto 1'),
(14, 'rudat bonyek', '15:05:00.0', '00:50:00.0', 'P/B', 'Sto 2'),
(15, 'senandung sasambo', '15:05:00.0', '00:50:00.0', 'P/B', 'Sto 2'),
(16, 'sportiva', '17:00:00.0', '00:55:00.0', 'P/B', 'Sto 2'),
(17, 'mimbar agama', '15:05:00.0', '00:50:00.0', 'P/B', 'Sto 2'),
(18, 'cerita dibalik sukses', '17:00:00.0', '00:55:00.0', 'P/B', 'Sto 2'),
(19, 'solusi', '15:05:00.0', '00:50:00.0', 'P/B', 'Sto 2'),
(20, 'pentas musik', '17:00:00.0', '00:55:00.0', 'P/B', 'Sto 2'),
(24, 'Jabanusra', '15:15:15.0', '51:51:51.0', 'P/B', 'Komputer'),
(29, 'Berugak', '12:12:12.0', '12:12:12.0', '', ''),
(33, 'Filler Lagu Kebangsaan', '15:55:00.0', '00:05:00.0', 'P/B', 'Komputer'),
(34, 'ILM - Lagu Kebangsaan', '16:55:00.0', '00:05:00.0', 'P/B', 'Komputer'),
(35, 'Filler Lagu Kebangsaan', '17:55:00.0', '00:05:00.0', '', ''),
(36, 'Warta NTB', '18:00:00.0', '00:55:00.0', 'P/B', 'Komputer'),
(41, 'Cinta Qur\'an', '16:00:00.0', '00:55:00.0', 'P/B', 'Sto 1'),
(42, 'Obrolan Dokter', '17:00:00.0', '00:42:00.0', 'P/B', 'Komputer'),
(43, 'Watra NTB', '18:00:00.0', '00:55:00.0', 'P/B', 'Komputer');

-- --------------------------------------------------------

--
-- Table structure for table `acr`
--

CREATE TABLE `acr` (
  `idd` int(5) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `jam` varchar(15) NOT NULL,
  `durasi` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `acr`
--

INSERT INTO `acr` (`idd`, `nama`, `jam`, `durasi`) VALUES
(3, 'ssss', 'ssss', 'ssss');

-- --------------------------------------------------------

--
-- Table structure for table `bersama`
--

CREATE TABLE `bersama` (
  `idbersama` int(5) NOT NULL,
  `nama_br` varchar(100) NOT NULL,
  `id_acara` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bersama`
--

INSERT INTO `bersama` (`idbersama`, `nama_br`, `id_acara`) VALUES
(1, 'Ifa - Dinda - Prisca (prod 25 Sept 2017)', 7),
(2, 'Bank Indonesia', 6),
(3, 'TGH Kasful - Nurmala', 4),
(4, 'TK. Aisyiah 7 Mataram paket 2 (prod 21 feb 2018)', 13),
(5, 'Sanggar Purnama Ria', 14),
(6, 'Furqan dkk - Prisca D (prod 16 Nov 2017)', 15),
(7, 'Husnanidiati - Andi Hadianto - Mia Rusmayanti', 16),
(8, 'Nyoman Widhiarsana - Ni Gusti Ayu Alet Irmawati, S.Pdi', 17),
(9, 'Nopita, M,Psi - Miranti Dewi', 19),
(10, 'Buttretfly (prod 2 Sept 2017)', 20),
(11, 'SOMAN', 42);

-- --------------------------------------------------------

--
-- Table structure for table `deskripsi`
--

CREATE TABLE `deskripsi` (
  `iddesk` int(5) NOT NULL,
  `nm_deskripsi` text NOT NULL,
  `id_acara` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `deskripsi`
--

INSERT INTO `deskripsi` (`iddesk`, `nm_deskripsi`, `id_acara`) VALUES
(1, 'Maju Tak Gentar (PKG) - Indonesia Pusaka (UKm PSM UNRAM)', 33),
(2, 'Daftar Pemilih Sementara (PKS) - Hari Merdeka (SD 13 MTR) - Indonesia Jaya (UKM PSM UNRAM)', 34);

-- --------------------------------------------------------

--
-- Table structure for table `desk_statis`
--

CREATE TABLE `desk_statis` (
  `iddeskst` int(5) NOT NULL,
  `desk_st` text NOT NULL,
  `id_st` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `desk_statis`
--

INSERT INTO `desk_statis` (`iddeskst`, `desk_st`, `id_st`) VALUES
(1, 'Ust. F Wahyudi H, SHI, M.Pd.I - Ganjaran Pahala', 6);

-- --------------------------------------------------------

--
-- Table structure for table `hari`
--

CREATE TABLE `hari` (
  `idhari` int(5) NOT NULL,
  `nm_hari` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `hari`
--

INSERT INTO `hari` (`idhari`, `nm_hari`) VALUES
(0, 'senin'),
(1, 'selasa'),
(2, 'rabu'),
(3, 'kamis'),
(4, 'jumat'),
(5, 'sabtu'),
(6, 'minggu');

-- --------------------------------------------------------

--
-- Table structure for table `iklan`
--

CREATE TABLE `iklan` (
  `idiklan` int(5) NOT NULL,
  `nama_iklan` varchar(15) NOT NULL,
  `jam_iklan` time(1) NOT NULL,
  `deskripsi_iklan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `iklan`
--

INSERT INTO `iklan` (`idiklan`, `nama_iklan`, `jam_iklan`, `deskripsi_iklan`) VALUES
(1, 'Iklan/Promo Ac.', '16:30:00.0', 'Kebhinekaan, Pulau Lombok'),
(2, 'Iklan/Promo Ac.', '17:00:00.0', 'Siaran Digital, Mereka Teladan Baik, Plau Lombok, Tangkoko, NIkmati Hijaunya, Tersesat Di HUtan Bahasa, Tempatnya Tuh Disini'),
(5, 'Iklan/Promo Ac.', '16:15:00.0', 'Tabungan, TV Digital Wayang'),
(6, 'Iklan/Promo Ac.', '16:30:00.0', 'Siaran Digital, Pulau Lombok'),
(7, 'Iklan/Promo Ac.', '16:45:00.0', 'TV Digital, Hutan Tangkoko'),
(8, 'Iklan/Promo Ac.', '18:10:00.0', 'ILM (Visi Misi Calon)'),
(9, 'Iklan/Promo Ac.', '18:15:00.0', 'ILM (Daftar Pemilih Sementara)'),
(10, 'Iklan/Promo Ac.', '16:15:00.0', 'Kebhinekaan, Tabungan'),
(11, 'Iklan/Promo Ac.', '16:30:00.0', 'Siaran Digital, Pulau Lombok'),
(12, 'Iklan/Promo Ac.', '16:45:00.0', 'TV Digital, Tetap Indonesia'),
(13, 'Iklan/Promo Ac.', '17:10:00.0', 'ILM (Tolak Politik Uang)'),
(14, 'Iklan/PKS', '18:40:00.0', 'ILM KPU Disabilitas'),
(15, '18:15:00.0', '00:00:00.0', 'ILM (Daftar Pemilih Sementara) / PSA'),
(16, '18:15:00.0', '00:00:00.0', 'ILM (Daftar Pemilih Sementara) / PSA'),
(17, '18:15:00.0', '00:00:00.0', 'ILM (Daftar Pemilih Sementara) / PSA'),
(18, 'Iklan/Promo Ac.', '16:15:00.0', 'Siaran Digital, Mereka Teladan Baik, Plau Lombok, Tangkoko, NIkmati Hijaunya, Tersesat Di HUtan Bahasa, Tempatnya Tuh Disini'),
(19, 'Iklan/PKS', '18:15:00.0', 'ILM (Daftar Pemilih Sementara)');

-- --------------------------------------------------------

--
-- Table structure for table `iklan_acara`
--

CREATE TABLE `iklan_acara` (
  `id_ikac` int(5) NOT NULL,
  `id_acara` int(5) NOT NULL,
  `id_iklan` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `iklan_acara`
--

INSERT INTO `iklan_acara` (`id_ikac`, `id_acara`, `id_iklan`) VALUES
(2, 0, 1),
(3, 0, 2),
(6, 4, 5),
(7, 4, 6),
(8, 4, 7),
(9, 41, 5),
(10, 41, 6),
(12, 15, 5),
(13, 15, 6),
(14, 15, 7),
(15, 7, 18),
(16, 36, 19);

-- --------------------------------------------------------

--
-- Table structure for table `jadwal`
--

CREATE TABLE `jadwal` (
  `idjadwal` int(5) NOT NULL,
  `hari` varchar(15) NOT NULL,
  `jam` varchar(11) NOT NULL,
  `mataacara` varchar(25) NOT NULL,
  `durasi` varchar(11) NOT NULL,
  `karaktersrn` varchar(5) NOT NULL,
  `sumberav` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `pola`
--

CREATE TABLE `pola` (
  `idpola` int(5) NOT NULL,
  `id_acara` int(5) NOT NULL,
  `id_hari` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pola`
--

INSERT INTO `pola` (`idpola`, `id_acara`, `id_hari`) VALUES
(0, 1, 6),
(1, 2, 6),
(2, 3, 6),
(3, 4, 5),
(4, 4, 6),
(6, 5, 1),
(7, 5, 2),
(8, 5, 3),
(9, 5, 4),
(10, 5, 5),
(11, 5, 6),
(12, 6, 0),
(15, 7, 0),
(16, 8, 0),
(17, 8, 1),
(21, 12, 1),
(22, 13, 1),
(23, 14, 2),
(24, 15, 3),
(25, 16, 3),
(26, 17, 4),
(27, 18, 4),
(28, 19, 5),
(29, 20, 5),
(31, 24, 5),
(39, 33, 6),
(40, 34, 6),
(41, 35, 6),
(42, 36, 0),
(47, 41, 4),
(48, 41, 2),
(49, 42, 2),
(50, 36, 0),
(51, 36, 0),
(52, 43, 4),
(53, 36, 1),
(54, 36, 3),
(55, 36, 5);

-- --------------------------------------------------------

--
-- Table structure for table `rekan`
--

CREATE TABLE `rekan` (
  `idrekan` int(5) NOT NULL,
  `nama_rekan` varchar(50) NOT NULL,
  `bidang` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `rekan`
--

INSERT INTO `rekan` (`idrekan`, `nama_rekan`, `bidang`) VALUES
(1, 'Martinus AM', 'Pengarah Siaran'),
(2, 'Mukodar', 'Pengarah Acara Berita'),
(3, 'Nurfajriah', 'Pemandu Gambar'),
(4, 'Misrohadi / Suwaryono', 'Penata Set'),
(5, 'M Fauzi', 'Penata Artistik'),
(6, 'Zulkarnain / R. Ambika', 'Editor Berita'),
(7, 'Satriawan', 'Manajer Unit'),
(8, 'Binuko Nugroho', 'Opr. Chargen/VTR'),
(9, 'Prayitno', 'Penata Cahaya'),
(10, 'Mustahik', 'Penata Suara'),
(11, 'Hendroe / Syarif Hidayatullah', 'Kamerawan'),
(12, 'Ngatono', 'FPU / Pemancar'),
(13, 'L. Ahmad Suparlan', 'Pengarah Teknik'),
(14, 'Sekar Damarjati', 'Penata Rias'),
(15, 'Clara Nelti Fatia', 'Operator FTP'),
(16, 'Rahmad Adi', 'Penyusun Rundown'),
(17, 'Evi Rovidah', 'Ass. Pengarah Acara'),
(18, 'Suparman', 'Pengarah Acara Siaran'),
(19, 'Darmawan', 'Pengarah Acara Berita');

-- --------------------------------------------------------

--
-- Table structure for table `statis`
--

CREATE TABLE `statis` (
  `idst` int(5) NOT NULL,
  `nama_st` varchar(100) NOT NULL,
  `jam_st` time(1) NOT NULL,
  `durasi_st` time(1) NOT NULL,
  `karakter_st` varchar(15) NOT NULL,
  `sumber_st` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `statis`
--

INSERT INTO `statis` (`idst`, `nama_st`, `jam_st`, `durasi_st`, `karakter_st`, `sumber_st`) VALUES
(1, 'Siaran Kanal Digital', '10:00:00.0', '05:00:00.0', 'P/B (rerun)', 'Komputer'),
(2, 'Caption : Sesaat Lagi Kita Ikuti Siaran Lokal TVRI NTB', '15:00:00.0', '00:01:00.0', 'P/B', 'Komputer'),
(3, 'Lagu Indonesia Raya', '15:01:00.0', '00:03:00.0', 'P/B', 'Komputer'),
(4, 'Tinjauan Acara Sore', '15:04:00.0', '00:01:00.0', 'P/B', 'Komputer'),
(5, 'Tinjauan Acara Esok', '18:54:00.0', '00:01:00.0', 'P/B', 'Komputer'),
(6, 'CERMIN', '18:55:00.0', '00:04:00.0', 'P/B (reun)', 'Komputer'),
(7, 'Tutup Siaran', '18:59:00.0', '00:01:00.0', 'P/B', 'Komputer'),
(8, 'Relay Jakarta', '19:00:00.0', '00:00:00.0', '-', 'Relay Jkt');

-- --------------------------------------------------------

--
-- Table structure for table `tema`
--

CREATE TABLE `tema` (
  `idtema` int(5) NOT NULL,
  `nama_tema` varchar(100) NOT NULL,
  `id_acara` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tema`
--

INSERT INTO `tema` (`idtema`, `nama_tema`, `id_acara`) VALUES
(1, 'Sesait Nan Religius (Prof 2-3 Maret 2018)', 0),
(2, 'Sesait Nan Religius (Prof 2-3 Maret 2018)', 1),
(3, 'Wayang Sasak L.Nasip Paket 3', 3),
(4, 'Hukum Berzikir Setelah Sholat', 4),
(5, 'Khadam-Khadam Jaman Now (prod 1 Maret 2018)', 14),
(6, 'NTB - Bali Tuan Rumah PON XXI', 16),
(7, 'Menjadi Manusia Hit Dengan Hari Raya Nyepi', 17),
(8, 'Psikotes Dalam Dunia Kerja', 19),
(9, 'Prasi Cerita Diatas Daun Lontar (Negeri Indonesia 2017 - Bali)', 24),
(10, 'Pencegahan & Pengobatan Penyakit ISPA (ep. 11)', 42);

-- --------------------------------------------------------

--
-- Table structure for table `tips`
--

CREATE TABLE `tips` (
  `idtips` int(5) NOT NULL,
  `nama_tips` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tips`
--

INSERT INTO `tips` (`idtips`, `nama_tips`) VALUES
(1, 'Jangan bandingkan orang yang mencintaimu dengan masa lalumu. Hargai dia yang kini berusaha membuatmu bahagia.'),
(2, 'Tuhan takkan berikan cobaan melebihi kemampuanmu. Ketika putus asa, ingatlah, jika Tuhan memberikan padamu, Dia akan ...');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `iduser` int(5) NOT NULL,
  `username` varchar(25) NOT NULL,
  `password` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`iduser`, `username`, `password`) VALUES
(0, 'admin', 'admintvri'),
(1, 'admin2', 'admin2tvri');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `acara`
--
ALTER TABLE `acara`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `acr`
--
ALTER TABLE `acr`
  ADD PRIMARY KEY (`idd`);

--
-- Indexes for table `bersama`
--
ALTER TABLE `bersama`
  ADD PRIMARY KEY (`idbersama`);

--
-- Indexes for table `deskripsi`
--
ALTER TABLE `deskripsi`
  ADD PRIMARY KEY (`iddesk`);

--
-- Indexes for table `desk_statis`
--
ALTER TABLE `desk_statis`
  ADD PRIMARY KEY (`iddeskst`);

--
-- Indexes for table `hari`
--
ALTER TABLE `hari`
  ADD PRIMARY KEY (`idhari`);

--
-- Indexes for table `iklan`
--
ALTER TABLE `iklan`
  ADD PRIMARY KEY (`idiklan`);

--
-- Indexes for table `iklan_acara`
--
ALTER TABLE `iklan_acara`
  ADD PRIMARY KEY (`id_ikac`);

--
-- Indexes for table `pola`
--
ALTER TABLE `pola`
  ADD PRIMARY KEY (`idpola`);

--
-- Indexes for table `rekan`
--
ALTER TABLE `rekan`
  ADD PRIMARY KEY (`idrekan`);

--
-- Indexes for table `statis`
--
ALTER TABLE `statis`
  ADD PRIMARY KEY (`idst`);

--
-- Indexes for table `tema`
--
ALTER TABLE `tema`
  ADD PRIMARY KEY (`idtema`);

--
-- Indexes for table `tips`
--
ALTER TABLE `tips`
  ADD PRIMARY KEY (`idtips`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `acr`
--
ALTER TABLE `acr`
  MODIFY `idd` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `bersama`
--
ALTER TABLE `bersama`
  MODIFY `idbersama` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `deskripsi`
--
ALTER TABLE `deskripsi`
  MODIFY `iddesk` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `desk_statis`
--
ALTER TABLE `desk_statis`
  MODIFY `iddeskst` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `iklan_acara`
--
ALTER TABLE `iklan_acara`
  MODIFY `id_ikac` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `rekan`
--
ALTER TABLE `rekan`
  MODIFY `idrekan` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `statis`
--
ALTER TABLE `statis`
  MODIFY `idst` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `tema`
--
ALTER TABLE `tema`
  MODIFY `idtema` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `tips`
--
ALTER TABLE `tips`
  MODIFY `idtips` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
