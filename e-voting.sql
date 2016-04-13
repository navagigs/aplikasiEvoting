-- phpMyAdmin SQL Dump
-- version 3.5.2.2
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jan 31, 2016 at 06:25 AM
-- Server version: 5.5.27
-- PHP Version: 5.4.7

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `e-voting`
--

-- --------------------------------------------------------

--
-- Table structure for table `t_calon`
--

CREATE TABLE IF NOT EXISTS `t_calon` (
  `calon_no` int(10) NOT NULL,
  `calon_nama` varchar(50) NOT NULL,
  `calon_kelas` varchar(100) NOT NULL,
  `calon_foto` varchar(250) NOT NULL,
  `calon_visimisi` text NOT NULL,
  `calon_priode` varchar(20) NOT NULL,
  PRIMARY KEY (`calon_no`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `t_calon`
--

INSERT INTO `t_calon` (`calon_no`, `calon_nama`, `calon_kelas`, `calon_foto`, `calon_visimisi`, `calon_priode`) VALUES
(1, 'Nava Gia Ginasta', 'D4-TI 2D', 'nava.jpg', 'Visi :\r\nMenjadikan HIMATIF sebagai wadah kretivitas yang berprestasi serta mampu mengoptimalkan kinerja kapabilitas anggotanya.\r\n\r\nMisi :\r\n1. Membangun hubungan yang harmonis dengan seluruh Civitas HIMATIF dengan tetap berprinsip pada Indepedensi mahasiswa.\r\n2. Memperluas relasi dengan mengoptimalkan kegiatan  yang berhubungan dengan masyarakat.\r\n3. Meningkatkan potensi mahasiswa teknik informatika di bidang akademik maupun non akademik.', '2015-2016'),
(2, 'Safif Rafi Efendi', 'D4-TI 2D', 'syafif.jpg', 'Visi :\r\nTerwujudnya HIMATIF yang bergerak aktif dan dinamis secara internal maupun eksternal, serta menguatkan rasa kekeluargaan di lingkungan jurusan Teknik Informatika khususnya dan HIMATIF umumnya.\r\n\r\nMisi :\r\n\r\n1. Mengadakan kegiatan yang menunjang sisi akademis maupun non akademis mahasiswa/I Teknik informatika\r\n2. Membangun relasi yang luas dengan mengoptimalkan kegiatan yang berhubungan dengan masyarakat.\r\n3. MenjadikanHIMATIF sebagai wadah bersosialisasi dan berbagi antar mahasiswa/i teknik informatika.', '2015-2016'),
(3, 'Firman Rasyid Purnama', 'D4-TI 2D', 'firmann.jpg', 'Visi :\r\n\r\nTerhimpunnya seluruh anggota HIMATIF untuk terciptanya relasi yang lebih baik dan budaya positif agar himpunan terus berkembang& kreatif.\r\n\r\nMisi :\r\n\r\n1. Menciptakan HIMATIF sebagai wadah yang lebih representatif dalam mengakomodasi aspirasi seluruh anggotanya.\r\n2. Menciptakan anggotaHIMATIFyang kreatif & inofatif\r\n ', '2015-2016');

-- --------------------------------------------------------

--
-- Table structure for table `t_mahasiswa`
--

CREATE TABLE IF NOT EXISTS `t_mahasiswa` (
  `mahasiswa_npm` int(10) NOT NULL,
  `mahasiswa_password` varchar(100) NOT NULL,
  `mahasiswa_nama` varchar(50) NOT NULL,
  `mahasiswa_kelas` varchar(30) NOT NULL,
  PRIMARY KEY (`mahasiswa_npm`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `t_mahasiswa`
--

INSERT INTO `t_mahasiswa` (`mahasiswa_npm`, `mahasiswa_password`, `mahasiswa_nama`, `mahasiswa_kelas`) VALUES
(1143002, '755ca93099f8983eecbaadbe7d7f9a43', 'Tsabit Abdul Aziz', 'D3-TI 2A'),
(1143006, '0b58de40fdd13414953da05c63758b75', 'Muhammad Nuryansyah', 'D3-TI 2A'),
(1143009, '147a17277a72a59477ec5310668f19f6', 'Rahmayani Harahap', 'D3-TI 2A'),
(1143011, '3381c1cd3a2ceca3302c5c202e25fce8', 'Suryadi Tohri', 'D3-TI 2A'),
(1143012, '86be3779e430281c421b13ee33363a10', 'Muhammad Afief Farista', 'D3-TI 2A'),
(1143017, '9175222b4923de0069f5b18dcdb1300c', 'Adhesta Prasetiya', 'D3-TI 2A'),
(1143019, '401f2559ba35b0ab429b9a863fdeb0fc', 'Rakit Budianto', 'D3-TI 2A'),
(1143020, '3fa911763967b5bc71238bccb126f9fc', 'Rapeja Agustinus', 'D3-TI 2A'),
(1143027, 'dd34f708699b2c4b11cd56f1a34f38f0', 'Rizky Cakra Wardana', 'D3-TI 2A'),
(1143030, '985844f83613d5a654806c75a7d3c433', 'Asri Arum Sari Husain', 'D3-TI 2A'),
(1143039, 'bd245ce9f6a4321e4e8fa92956f9e158', 'Reza Satria', 'D3-TI 2A'),
(1143044, 'ce2eb4dc1cb71249a7ea2bfa66fb7aa3', 'Dwiyyogo Prasetyo', 'D3-TI 2A'),
(1143047, 'e41b39aae3287c4c180d0294ccb656e7', 'Riski Puji Lestari', 'D3-TI 2A'),
(1143061, '8aaea4a4a5ea5a9d5274dd3a7575fce6', 'Anysah Murtirinjani', 'D3-TI 2A'),
(1143068, '72cba2ff64d2d20b419afec1cba3ae6f', 'andrey', 'D3-TI 2A'),
(1143071, 'a554fb628aa2c0e18e656b654c6d03ae', 'Widia Diana', 'D3-TI 2A'),
(1143073, '039782de46011b5b8444086a6f8f6946', 'Novera Susanti', 'D3-TI 2A'),
(1143076, '9fb9bbfb33b2ede0a105032532bfe5c9', 'Hasan Nurodi', 'D3-TI 2A'),
(1143081, '292236bb27f6f84cb0dcf9e734da8836', 'Faidha farha', 'D3-TI 2A'),
(1143082, '65785db2e90de67107f0c1cc12d77fb9', 'Andry nugraha firdaus', 'D3-TI 2A'),
(1143085, '388cd4f233e0d37b03c07000f2e0917d', 'Wiedy Tira Pratama', 'D3-TI 2A'),
(1143095, '93f835aa0f4a17c1119225232fb36791', 'LIdya Handayani Sitorus', 'D3-TI 2A'),
(1143096, 'd6037e86393d5b36f557c109251cd5cf', 'Geraldine Valencia', 'D3-TI 2A'),
(1143097, '7d8a8079ae91dc5dc42837a37c0f5b4a', 'Misran ', 'D3-TI 2A'),
(1143099, '7751baa3d8eab895ea7b7a9cb1fcc156', 'Berto Lailatul', 'D3-TI 2A'),
(1143100, 'e927fc0788499b9e184ba33ce4f2331e', 'Juniardi Nugraha', 'D3-TI 2A'),
(1144001, '2131c6bb26378a3caf129696e32d9d67', 'Fitriani M', 'D4-TI 2D'),
(1144010, 'f19b174252aefbf7e4afeb87ef309792', 'Faisal Akbar Ramadhan', 'D4-TI 2D'),
(1144013, 'a5692e96be70dc7c7371f688acff2791', 'Ady Wiranatha Samsam', 'D4-TI 2D'),
(1144014, 'ee6008b6e1057c60a009320e37de4dd8', 'Ayu Anggara', 'D4-TI 2D'),
(1144024, '5f9f0c9c76ef417094ca435eda155c47', 'Alfi Zulfian Abdi', 'D4-TI 2D'),
(1144026, '3121b60c303c6e9ca3b7683868fa5ecf', 'Hary Syska Perdana', 'D4-TI 2D'),
(1144037, '18c3914c38a7b5e3c7b081d4035ef003', 'Dinan Sagara', 'D4-TI 2D'),
(1144038, '48317f42ab4f2495dcadd3cd98144561', 'Kania Kustiani', 'D4-TI 2D'),
(1144042, '51de80b2f41f584e533e5de57ef00842', 'Riza Fahlefi', 'D4-TI 2D'),
(1144045, '432f0d5a10907d997bfd50318ddb7d64', 'Muhammad Ramdhan T', 'D4-TI 2D'),
(1144056, 'aec9adcfa0a5d19461ae2b6d2bbc97c7', 'Muhammad Kusnadi', 'D4-TI 2D'),
(1144070, '71003c943b436dcab01b31204595f997', 'Muhammad Syihabuddin', 'D4-TI 2D'),
(1144076, '45a09bec3752fc4c29a2bcec7143b6d6', 'Yogi Nugraha', 'D4-TI 2D'),
(1144085, '27ffdcbb3af5d6442d3ff1f5e6e9c3a3', 'Daniel Septri Panjaitan', 'D4-TI 2D'),
(1144086, 'a7c36a187ae033779c77aafa56aafd6c', 'Syakir Nimalmaula', 'D4-TI 2D'),
(1144095, '204e34fcc77de07aeb234224b5c3fe78', 'Iqbal Syarif Awaluddin', 'D4-TI 2D'),
(1144101, '9b71b9251e45092fe7d7c9bcebd6a98e', 'Bayu Rizki', 'D4-TI 2D');

-- --------------------------------------------------------

--
-- Table structure for table `t_panitia`
--

CREATE TABLE IF NOT EXISTS `t_panitia` (
  `panitia_id` int(10) NOT NULL AUTO_INCREMENT,
  `panitia_npm` int(10) NOT NULL,
  `panitia_password` varchar(100) NOT NULL,
  `panitia_nama` varchar(100) NOT NULL,
  PRIMARY KEY (`panitia_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `t_panitia`
--

INSERT INTO `t_panitia` (`panitia_id`, `panitia_npm`, `panitia_password`, `panitia_nama`) VALUES
(1, 123, '202cb962ac59075b964b07152d234b70', 'putri');

-- --------------------------------------------------------

--
-- Table structure for table `t_suara`
--

CREATE TABLE IF NOT EXISTS `t_suara` (
  `suara_id` int(11) NOT NULL AUTO_INCREMENT,
  `mahasiswa_npm` int(10) NOT NULL,
  `calon_no` int(10) NOT NULL,
  `suara_jml` int(11) NOT NULL,
  `suara_post` datetime NOT NULL,
  PRIMARY KEY (`suara_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=17 ;

--
-- Dumping data for table `t_suara`
--

INSERT INTO `t_suara` (`suara_id`, `mahasiswa_npm`, `calon_no`, `suara_jml`, `suara_post`) VALUES
(5, 1144001, 2, 1, '2015-12-31 07:28:32'),
(9, 1144003, 1, 1, '2015-12-31 00:00:00'),
(10, 1144004, 1, 1, '2015-12-31 00:00:00'),
(11, 1144005, 2, 1, '2015-12-31 00:00:00'),
(12, 1144096, 1, 1, '2015-12-31 08:59:13'),
(13, 1144006, 1, 1, '2015-12-31 07:28:32'),
(14, 1144007, 1, 1, '2015-12-31 07:28:32'),
(15, 1144008, 1, 1, '2015-12-31 07:28:32'),
(16, 1111, 1, 1, '2016-01-25 13:14:32');

-- --------------------------------------------------------

--
-- Table structure for table `t_waktu_pemilihan`
--

CREATE TABLE IF NOT EXISTS `t_waktu_pemilihan` (
  `waktu_id` int(5) NOT NULL AUTO_INCREMENT,
  `waktu_tglmulai` datetime NOT NULL,
  `waktu_tglselesai` datetime NOT NULL,
  PRIMARY KEY (`waktu_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `t_waktu_pemilihan`
--

INSERT INTO `t_waktu_pemilihan` (`waktu_id`, `waktu_tglmulai`, `waktu_tglselesai`) VALUES
(1, '2016-02-01 07:00:00', '2016-02-01 01:00:00');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
