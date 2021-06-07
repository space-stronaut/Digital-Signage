-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 07, 2021 at 03:59 AM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `digital_bkad`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` char(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `username`, `email`, `password`) VALUES
(1, 'Ronald Abel', 'abelr6099@gmail.com', 'Ronaldxtra12'),
(2, 'Ikmal Dean', 'ikmaldean123@gmail.com', 'Ikmal123'),
(3, 'Ronald', 'ronaldabel916@gmail.com', 'Ronald123'),
(4, 'Adi Nugraha', 'adinugraha@gmail.com', 'Adinugraha12'),
(5, 'Ronald Abel', 'ronal123@gmail.com', 'Ronaldxtra12'),
(6, 'Ronald Abel', 'ron123@gmail.com', 'Ronaldxtra12'),
(7, 'Ronald Abel', 'tjay@gmail.com', 'Ronaldxtra12');

-- --------------------------------------------------------

--
-- Table structure for table `workers`
--

CREATE TABLE `workers` (
  `id` int(11) NOT NULL,
  `nip` char(21) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `bidang` varchar(255) NOT NULL,
  `jabatan` varchar(255) NOT NULL,
  `golongan` varchar(255) NOT NULL,
  `agenda_id` bigint(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `workers`
--

INSERT INTO `workers` (`id`, `nip`, `nama`, `bidang`, `jabatan`, `golongan`, `agenda_id`) VALUES
(1, '19611218-198503-1-007', 'Drs.H.Syawal,M.Si', 'Sekretariat', 'Kepala Badan', 'IV C', NULL),
(2, '19641112-200701-1-007', 'SUHA', 'Anggaran', 'Pelaksana Bidang Anggaran', 'II C', NULL),
(3, '19650202-199303-1-010', 'Drs.Sukino', 'Anggaran', 'Kasubid Penyusunan Rencana Anggaran Non Program Bagian Anggaran', 'III D', NULL),
(4, '19650301-199311-2-001', 'Rini Martini P', 'Perbendaharaan', 'Pelaksanaan Bidang Perbendaharaan', 'III C', NULL),
(5, '19670420-199403-1-010', 'Drs.Tatang Saepulloh,M.Si', 'Pengelolaan Barang Milik Daerah', 'Kabid Pengelolaan Barang Milik Daerah', 'IV A', NULL),
(6, '19680615-201411-1-001', 'Sudrajat,S.Sos', 'Perbendaharaan', 'Pelaksana Bidang Perbendaharaan', 'III B', NULL),
(7, '19681205-199003-2-003', 'Nining Sumyati,SE', 'Perbendaharaan', 'Kasubid Pengelolaan Pembelanjaan Tidak Langsung', 'III D', NULL),
(8, '19701001-199303-2-007', 'Ninuk Prihastuti,SE.MM', 'Sekretariat', 'Kasubag Umum dan Kepegawaian', 'IV A', NULL),
(9, '19710303-199703-2-006', 'Nenah Saidah,SE,MM', 'Pengelolaan Barang Milik Daerah', 'Kasubid Penilaian, Pemanfaatan, Pemindahtanganan dan Penghapusan Bidang Pengelolaan Barang Milik Daerah', 'IV A', NULL),
(10, '19710407-199601-1-001', 'Rudy Syah Rustandi,S.AP.M.AP', 'Sekretariat', 'Kasubag Perencanaan,Evaluasi dan Pelaporan', 'IV A', NULL),
(11, '19730114-200701-1-002', 'Sunawan,SE', 'Perbendaharaan', 'Pelaksana Bidang Perbendaharaan', 'III C', NULL),
(12, '19731030-200701-1-007', 'Asef Rahayu, S.AN', 'Anggaran', 'Pelaksana Bidang Anggaran', 'III A', NULL),
(13, '19740518-199803-1-004', 'Asep Saeful Hidayat,S,Si,M.Ak', 'Sekretariat', 'Sekretaris', 'IV B', NULL),
(14, '19740628-200212-1-002', 'Budhi Purnama,SE', 'Perbendaharaan', 'Kasubid Pengeolaan Kas Bidang Perbendaharaan', 'III C', NULL),
(15, '19740819-200212-1-003', 'MH Khairil Syahdu M, SE,M.Ak', 'Anggaran', 'Kepala Bidang Anggaran', 'IV A', NULL),
(16, '19750204-201101-2-002', 'Pujiyanti,S.Sos', 'Sekretariat', 'Pelaksana Bagian Sekretariat', 'III C', NULL),
(17, '19750410-200312-2-009', 'Yudhi Asmandari, SE', 'Akuntansi dan pelaporan', 'Pelaksana Bidang Akuntansi', 'III D', NULL),
(18, '19750627-201001-2-001', 'Dedeh Ratna Dewi,S.AN', 'Sekretariat', 'Pelaksana Bagian Sekretariat', 'III A', NULL),
(19, '19750820-199901-1-001', 'Dwi Augustinus R,S.Si,M.E', 'Akuntansi dan pelaporan', 'Kabid Akutansi', 'IV A', NULL),
(20, '19751122-200801-1-002', 'Asep Syaiful Zaman, S.Si. ME', 'Anggaran', 'Kasubid Penyusun Rencana Anggaran Program', 'III D', NULL),
(21, '19760508-201411-1-001', 'Dede Sukmana', 'Akuntansi dan pelaporan', 'Pelaksana Bidang Akuntansi', 'II B', NULL),
(22, '19770518-201411-1-001', 'Rachmat Budiman,SE', 'Pengelolaan Barang Milik Daerah', 'Pelaksana Bidang Pengelolaan Barang Milik Daerah', 'III B', NULL),
(23, '19780209-201001-2-001', 'Enung Narkasih,S.AN', 'Sekretariat', 'Pelaksana Bagian Sekretariat', 'III B', NULL),
(24, '19780504-200901-1-001', 'Dendi Kusumayadi,SE', 'Sekretariat', 'Pelaksana Bagian Sekretariat', 'III A', NULL),
(25, '19780729-200604-1-010', 'Triadi Nugraha, S.Ag, M.Si', 'Anggaran', 'Kasubid Informasi dan Regulasi Anggaran', 'III D', NULL),
(26, '19780825-200501-1-006', 'Casari,SE', 'Perbendaharaan', 'Kabid Perbendaharaan', 'III D', NULL),
(27, '19781128-200801-1-003', 'Ana Daryana,S.AN', 'Pengelolaan Barang Milik Daerah', 'Kasubid Penggunaan dan Penatausahaan', 'III B', NULL),
(28, '19781210-201411-1-001', 'Adi Suyaman,ST', 'Pengelolaan Barang Milik Daerah', 'Pelaksana Bidang Pengelolaan Barang Milik Daerah', 'III A', NULL),
(29, '19781222-200801-1-006', 'Alief Permadi, SE', 'Akuntansi dan pelaporan', 'Kasubid Akuntansi Pendapatan Belanja dan Pembiayaan', 'III C', NULL),
(30, '19790201-201411-1-001', 'Heri Tazudin', 'Sekretariat', 'Pelaksana Bagian Sekretariat', 'II B', NULL),
(31, '19790713-200903-2-002', 'Kristina Pangaribuan, SE', 'Akuntansi dan pelaporan', 'Pelaksana Bidang Akuntansi', 'III C', NULL),
(32, '19790908-201001-2-010', 'Rika Kartika,A.Md', 'Perbendaharaan', 'Pelaksana Bidang Perbendaharaan', 'III A', NULL),
(33, '19791102-200901-2-001', 'Tanty Noviyani,S.Sos', 'Pengelolaan Barang Milik Daerah', 'Pelaksana Bidang Pengelolaan Barang Milik Daerah', 'III C', NULL),
(34, '19791126-201001-2-002', 'Pamela Novianti,S.AN', 'Sekretariat', 'Pelaksana Bidang Akuntansi', 'III B', NULL),
(35, '19800125-200901-1-001', 'Dadang Apandi', 'Sekretariat', 'Pelaksana Bagian Sekretariat', 'II C', NULL),
(36, '19800701-201001-1-005', 'Yogi Yuliandri Hindransyah, SE', 'Anggaran', 'Pelaksana Bidang Anggaran', 'III B', NULL),
(37, '19800728-200901-2-002', 'Yulianti, SH', 'Akuntansi dan pelaporan', 'Pelaksana Bidang Akuntansi', 'III C', NULL),
(38, '19800730-200901-2-001', 'Rita Indah Utami,SE', 'Pengelolaan Barang Milik Daerah', 'Pelaksana Bidang Pengelolaan Barang Milik Daerah', 'III B', NULL),
(39, '19800909-201001-2-002', 'Yuli Susanti,S.AN', 'Akuntansi dan pelaporan', 'Pelaksana Bidang Akuntansi', 'III B', NULL),
(40, '19801106-200604-1-010', 'Charles F Jayadi,SE.M.AP', 'Pengelolaan Barang Milik Daerah', 'Kasubid Perencanaan dan Pengamanan Bidang Pengelolaan Barang Milik Daerah', 'III D', NULL),
(41, '19801123-201411-1-001', 'Tardim', 'Akuntansi dan pelaporan', 'Pelaksana Bidang Akuntansi', 'II B', NULL),
(42, '19810108-201001-2-002', 'Endah Ratna Sunandari,S.Pd', 'Akuntansi dan pelaporan', 'Pelaksana Bidang Akuntansi', 'III C', NULL),
(43, '19810210-200901-2-002', 'Imas Cahyani,S.AN', 'Pengelolaan Barang Milik Daerah', 'Pelaksana Bidang Pengelolaan Barang Milik Daerah', 'III B', NULL),
(44, '19810228-200812-1-015', 'Bustomy,A,md', 'Akuntansi dan pelaporan', 'Pelaksana Bidang Akuntansi', 'III A', NULL),
(45, '19810416-201001-1-005', 'Darajat Mulyana,S.Mn', 'Perbendaharaan', 'Kasubid pengelolaan Belanja Langsung', 'III C', NULL),
(46, '19820118-201411-1-002', 'Sani Sontani', 'Perbendaharaan', 'Pelaksana Bidang Perbendaharaan', 'II B', NULL),
(47, '19820315-200902-2-006', 'Jelly Pusparini,S.Sos.MM', 'Sekretariat', 'Kasubag Keuangan dan Barang Daerah', 'III D', NULL),
(48, '19820928-200901-1-001', 'Dhani Agung Saputra,SE', 'Sekretariat', 'Pelaksana Bagian Sekretariat', 'III A', NULL),
(49, '19821017-200801-1-001', 'Okta Santosa', 'Sekretariat', 'Pelaksana Bagian Sekretariat', 'II C', NULL),
(50, '19830306-200604-2-017', 'Heni Suprapti,SE', 'Akuntansi dan pelaporan', 'Kasubid Akuntansi Aset, Investasi dan Persediaan', 'III D', NULL),
(51, '19830326-201411-2-001', 'Neneng Sri Mulyati,SE', 'Sekretariat', 'Pelaksana Bagian Sekretariat', 'III A', NULL),
(52, '19830910-201411-2-001', 'Lina Krisnawati,SE', 'Pengelolaan Barang Milik Daerah', 'Pelaksana Bidang Pengelolaan Barang Milik Daerah', 'III A', NULL),
(53, '19840214-200604-2-014', 'Levi Wibia, SE', 'Akuntansi dan pelaporan', 'Kasubid Pembukuan  dan Pelaporan', 'III C', NULL),
(54, '19840324-201411-1-002', 'Gigin Ginanjar Maryana, S.AN', 'Anggaran', 'Pelaksana Bidang Anggaran', 'III A', NULL),
(55, '19840328-201001-2-002', 'Widia Martiana,S.AN', 'Sekretariat', 'Pelaksana Bagian Sekretariat', 'III B', NULL),
(56, '19840720-201411-2-001', 'Karsinah,SP', 'Sekretariat', 'Pelaksana Bagian Sekretariat', 'III A', NULL),
(57, '19840729-201001-1-003', 'Agus Kaharudin', 'Anggaran', 'Pelaksana Bidang Anggaran', 'II C', NULL),
(58, '19850501-200801-1-001', 'Taufik,S.AN', 'Sekretariat', 'Pelaksana Bagian Sekretariat', 'III B', NULL),
(59, '19850613-201411-1-001', 'Aga Budi Permana,A.Md', 'Perbendaharaan', 'Pelaksana Bidang Perbendaharaan', 'II C', NULL),
(60, '19850706-202012-2-003', 'Dede Wahdiah,A.Md', 'Sekretariat', 'Pelaksana Bidang Akuntansi', 'II C', NULL),
(61, '19920317-202012-2-004', 'Sri Jayanti,SE', 'Akuntansi dan pelaporan', 'Pelaksana Bidang Akuntansi', 'III A', NULL),
(62, '19950908-202012-1-006', 'Deni Lukman Firmansyah, A.Md', 'Anggaran', 'Pelaksana Bidang Perbendaharaan', 'II C', NULL),
(63, '19960616-202012-2-017', 'Mutiara Nevi Asmara,SE', 'Perbendaharaan', 'Pelaksana Bidang Perbendaharaan', 'III A', NULL),
(64, '19960618-202012-2-008', 'Marina Trozi Dahliyana, SE', 'Anggaran', 'Pelaksana Bidang Anggaran', 'III A', NULL),
(65, '19960626-202012-2-006', 'Iis Suhaeni, SE', 'Anggaran', 'Pelaksana Bidang Anggaran', 'III A', NULL),
(66, '19960626-202012-2-017', 'Ni Agung Faundi, A.Md', 'Anggaran', 'Pelaksana Bidang Anggaran', 'II C', NULL),
(67, '19960826-202012-2-009', 'Nurseliana Agustiani,S.AK', 'Pengelolaan Barang Milik Daerah', 'Pelaksana Bidang Pengelolaan Barang Milik Daerah', 'III A', NULL),
(68, '19970122-202012-2-011', 'Peggy Ratna Sari, S.AK', 'Perbendaharaan', 'Pelaksana Bidang Perbendaharaan', 'III A', NULL),
(69, '19970331-202012-2-012', 'Vivian Nanda Dewi, A.Md. Ak', 'Akuntansi dan pelaporan', 'Pelaksana Bagian Sekretariat', 'II C', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `workers`
--
ALTER TABLE `workers`
  ADD UNIQUE KEY `nip` (`nip`),
  ADD KEY `id` (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `workers`
--
ALTER TABLE `workers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=71;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
