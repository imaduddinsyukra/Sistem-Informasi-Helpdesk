-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jan 28, 2019 at 08:18 AM
-- Server version: 5.6.21
-- PHP Version: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `helpdesk`
--

-- --------------------------------------------------------

--
-- Table structure for table `content`
--

CREATE TABLE IF NOT EXISTS `content` (
  `content_id` int(11) NOT NULL,
  `content_title` varchar(100) COLLATE latin1_general_ci NOT NULL,
  `page_content` text COLLATE latin1_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Dumping data for table `content`
--

INSERT INTO `content` (`content_id`, `content_title`, `page_content`) VALUES
(1, 'Menampung', 'Menampung, mengklasifikasikan dan memberikan prioritas terhadap masalah melalui berbagai jalur, seperti E-Mail, Website atau Telepon.'),
(2, 'Assignment', 'Melakukan Assignment kepada unit unit yang bertanggung jawab dan memiliki kemampuan yang handal untuk menyelesaikan permasalahan yang anda hadapi.'),
(3, 'Monitoring', 'Monitoring durasi dan status penyelesaian, dan melakukan logging terhadap tahapan tindakan yang telah diambil dan status penyelesaian masalah anda.'),
(4, 'Every Time', 'Living World Help Desk dapat diakses kapanpun dan dimanapun anda berada, cukup dengan mengakses halaman Living World Help Desk.'),
(5, 'About', 'Living World Help Desk, merupakan sistem manajemen resmi milik Living World Pekanbaru yang berfungsi untuk menangani kebutuhan customer / user terkait support teknis atau troubleshoot untuk memudahkan penelusuran terhadap tindakan penyelesaian yang dikoordinasi oleh tim yang bertugas yang sangat handal dibidangnya.'),
(6, 'Program Keahlian Farmasi', 'aaaaProgram Keahlian Farmasi merupakan salah satu program keahlian yang ditawarkan oleh <b>SMK Abdurrab Kota Pekanbaru.</b><div><br></div><div>Pada program keahlian ini, para siswa/i diajar dan dididik agar memiliki keahlian dibidang <i>blablabla</i></div>'),
(7, 'Ruang Kelas', '<b>SMK Abdurrab Kota Pekanbaru </b>memiliki beberapa ruang kelas, diantaranya :<div><ul><li>ruang kelas</li><li>\r\n\r\nruang kelas\r\n\r\n<br></li><li>\r\n\r\nruang kelas\r\n\r\n<br></li><li>\r\n\r\nruang kelas\r\n\r\n<br></li><li>\r\n\r\nruang kelas\r\n\r\n<br></li></ul><p><br></p></div>'),
(8, 'Ruang Perpustakaan', 'ihh'),
(9, 'Labor Komputer', 'i'),
(10, 'Ruang Pimpinan', 'aa'),
(11, 'Ruang Guru', 'i'),
(12, 'Lapangan dan Gedung Olahraga', 'i'),
(13, 'Ruang Konseling', 'ijk'),
(14, 'Ruang UKS', 'i'),
(15, 'Ruang Tata Usaha', 'i'),
(16, 'Mushalla', 'i'),
(17, 'Tempat Parkir', 'adsadasdasdsasadasd'),
(18, 'Struktur Organisasi', 'Adapun struktur sekolah pada SMK Abdurrab Pekanbaru adalah sebagai berikut&nbsp;<div>yayayaya</div>');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_berita`
--

CREATE TABLE IF NOT EXISTS `tbl_berita` (
`id_berita` int(11) NOT NULL,
  `pengirim_berita` varchar(100) NOT NULL,
  `tanggal_berita` date NOT NULL,
  `judul_berita` text NOT NULL,
  `isi_berita` text NOT NULL,
  `foto` text NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_berita`
--

INSERT INTO `tbl_berita` (`id_berita`, `pengirim_berita`, `tanggal_berita`, `judul_berita`, `isi_berita`, `foto`) VALUES
(1, 'Administrator', '2012-12-12', 'QOWEIQWIEOQWIOE', '<p>QOWEIQWIEOQWIOEQOWEIQWIEOQWIOEQOWEIQWIEOQWIOEQOWEIQWIEOQWIOEQOWEIQWIEOQWIOEQOWEIQWIEOQWIOEQOWEIQWIEOQWIOEQOWEIQWIEOQWIOEQOWEIQWIEOQWIOEQOWEIQWIEOQWIOEQOWEIQWIEOQWIOEQOWEIQWIEOQWIOEQOWEIQWIEOQWIOEQOWEIQWIEOQWIOEQOWEIQWIEOQWIOEQOWEIQWIEOQWIOEQOWEIQWIEOQWIOEQOWEIQWIEOQWIOEQOWEIQWIEOQWIOEQOWEIQWIEOQWIOEQOWEIQWIEOQWIOEQOWEIQWIEOQWIOEQOWEIQWIEOQWIOEQOWEIQWIEOQWIOEQOWEIQWIEOQWIOEQOWEIQWIEOQWIOEQOWEIQWIEOQWIOEQOWEIQWIEOQWIOEQOWEIQWIEOQWIOEQOWEIQWIEOQWIOEQOWEIQWIEOQWIOEQOWEIQWIEOQWIOEQOWEIQWIEOQWIOEQOWEIQWIEOQWIOE<br></p>', 'gambar/Desert.jpg'),
(2, 'Administrator', '2012-12-12', 'QOWEIQWIEOQWIOE', '<p>\r\n\r\n</p>\r\n\r\n<h2>Pendahuluan</h2><p>Sebelum kita membahas masalah jaringan wireless, terlebih dahulu kita juga harus mengerti bagaimana proses terjadinya koneksi wireless clients kepada <a target="_blank" rel="nofollow" href="https://jaringan-komputer.cv-sysneta.com/jaringan-wireless">jaringan wireless</a>. Hal ini sangat membantu sekali dalam kita melakukan troubleshooting.</p><p>Pada artikel sebelumnya tentang cara melakukan <a target="_blank" rel="nofollow" href="https://jaringan-komputer.cv-sysneta.com/troubleshooting-jaringan">troubleshooting jaringan</a>, artikel ini sebenarnya merupakan kelanjutan dari artikel tersebut, akan tetapi disini akan focus pada masalah jaringan wireless. Seiring semakin banyaknya pemakai wireless network ini, wireless problems sudah menjadi sesuatu yang sering dihadapi dan dipertanyakan.</p><h3>Proses koneksi wifi</h3><p>Berikut adalah proses atau langkah terjadinya suatu koneksi wireless yang perlu difahami yang akan sangat membantu kita dalam menyelesaikan masalah.</p><ol><li>Proses scanning <a target="_blank" rel="nofollow" href="https://jaringan-komputer.cv-sysneta.com/wireless-access-points">wireless access point (AP)</a></li><li>Memilih wireless access points</li><li>Proses authentikasi terhadap wireless AP yang dipilih</li><li>Proses koneksi terhadap wireless AP yang dipilih</li><li>Mendapatkan <a target="_blank" rel="nofollow" href="https://jaringan-komputer.cv-sysneta.com/konfigurasi-tcp-ip">konfigurasi TCP/IP</a>&nbsp;address</li></ol><div><br><br><br></div><p>&nbsp;</p><h4>1. Scanning wireless AP</h4><p>Computer berbasis XP atau Vista yang mempunyai wireless adapter active yang supports Wireless Auto Configuration, akan selalu melakukan scanning adanya wireless AP pada jangkauannya setiap 60 sec. Saat scanning, wireless adapter mengirim sederetan frame <em>Probe Request</em>. Sementara itu wireless AP yg ada pada jangkauan wireless adapter yg sedang melakukan scanning adanya wireless AP, juga mengirim frame <em>Probe response</em>yang memuat capabilitas wireless AP seperti speed yang disupport serta opsi2 security lainnya.</p><p>Windows versi2 terrkini seperti Windows 8 dan Windows 10 juga melakukan hal yang serupa secara konsep.</p><p>Kita menganggap komputer mengalami masalah koneksi wifi jika tidak mendapatkan satupun wireless AP dalam jangkauan roamingnya</p>\r\n\r\n<p><br></p>', 'gambar/Penguins.jpg'),
(6, 'Administrator', '2012-12-12', 'QOWEIQWIEOQWIOE', '<p>QOWEIQWIEOQWIOEQOWEIQWIEOQWIOEQOWEIQWIEOQWIOEQOWEIQWIEOQWIOEQOWEIQWIEOQWIOEQOWEIQWIEOQWIOEQOWEIQWIEOQWIOEQOWEIQWIEOQWIOEQOWEIQWIEOQWIOEQOWEIQWIEOQWIOEQOWEIQWIEOQWIOEQOWEIQWIEOQWIOEQOWEIQWIEOQWIOEQOWEIQWIEOQWIOEQOWEIQWIEOQWIOEQOWEIQWIEOQWIOEQOWEIQWIEOQWIOEQOWEIQWIEOQWIOEQOWEIQWIEOQWIOEQOWEIQWIEOQWIOEQOWEIQWIEOQWIOEQOWEIQWIEOQWIOEQOWEIQWIEOQWIOEQOWEIQWIEOQWIOEQOWEIQWIEOQWIOEQOWEIQWIEOQWIOEQOWEIQWIEOQWIOEQOWEIQWIEOQWIOEQOWEIQWIEOQWIOEQOWEIQWIEOQWIOEQOWEIQWIEOQWIOEQOWEIQWIEOQWIOEQOWEIQWIEOQWIOEQOWEIQWIEOQWIOE<br></p>', 'gambar/Desert.jpg'),
(7, 'Administrator', '2012-12-12', 'QOWEIQWIEOQWIOE', '<p>\r\n\r\n</p>\r\n\r\n<h2>Pendahuluan</h2><p>Sebelum kita membahas masalah jaringan wireless, terlebih dahulu kita juga harus mengerti bagaimana proses terjadinya koneksi wireless clients kepada <a target="_blank" rel="nofollow" href="https://jaringan-komputer.cv-sysneta.com/jaringan-wireless">jaringan wireless</a>. Hal ini sangat membantu sekali dalam kita melakukan troubleshooting.</p><p>Pada artikel sebelumnya tentang cara melakukan <a target="_blank" rel="nofollow" href="https://jaringan-komputer.cv-sysneta.com/troubleshooting-jaringan">troubleshooting jaringan</a>, artikel ini sebenarnya merupakan kelanjutan dari artikel tersebut, akan tetapi disini akan focus pada masalah jaringan wireless. Seiring semakin banyaknya pemakai wireless network ini, wireless problems sudah menjadi sesuatu yang sering dihadapi dan dipertanyakan.</p><h3>Proses koneksi wifi</h3><p>Berikut adalah proses atau langkah terjadinya suatu koneksi wireless yang perlu difahami yang akan sangat membantu kita dalam menyelesaikan masalah.</p><ol><li>Proses scanning <a target="_blank" rel="nofollow" href="https://jaringan-komputer.cv-sysneta.com/wireless-access-points">wireless access point (AP)</a></li><li>Memilih wireless access points</li><li>Proses authentikasi terhadap wireless AP yang dipilih</li><li>Proses koneksi terhadap wireless AP yang dipilih</li><li>Mendapatkan <a target="_blank" rel="nofollow" href="https://jaringan-komputer.cv-sysneta.com/konfigurasi-tcp-ip">konfigurasi TCP/IP</a>&nbsp;address</li></ol><div><br><br><br></div><p>&nbsp;</p><h4>1. Scanning wireless AP</h4><p>Computer berbasis XP atau Vista yang mempunyai wireless adapter active yang supports Wireless Auto Configuration, akan selalu melakukan scanning adanya wireless AP pada jangkauannya setiap 60 sec. Saat scanning, wireless adapter mengirim sederetan frame <em>Probe Request</em>. Sementara itu wireless AP yg ada pada jangkauan wireless adapter yg sedang melakukan scanning adanya wireless AP, juga mengirim frame <em>Probe response</em>yang memuat capabilitas wireless AP seperti speed yang disupport serta opsi2 security lainnya.</p><p>Windows versi2 terrkini seperti Windows 8 dan Windows 10 juga melakukan hal yang serupa secara konsep.</p><p>Kita menganggap komputer mengalami masalah koneksi wifi jika tidak mendapatkan satupun wireless AP dalam jangkauan roamingnya</p>\r\n\r\n<p><br></p>', 'gambar/Penguins.jpg'),
(8, 'Administrator', '2019-12-02', '123123', '<p><b>123123asdasdasdasd</b></p>', 'gambar/Desert.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_komentar`
--

CREATE TABLE IF NOT EXISTS `tbl_komentar` (
`id_komentar` int(11) NOT NULL,
  `id_berita` int(11) NOT NULL,
  `tgl_komentar` date NOT NULL,
  `nama_komentar` varchar(50) NOT NULL,
  `isi_komentar` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `trouble`
--

CREATE TABLE IF NOT EXISTS `trouble` (
`id_contact` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `nik` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `no_hp` varchar(13) NOT NULL,
  `subjek` varchar(200) NOT NULL,
  `pesan` text NOT NULL,
  `status` int(1) NOT NULL,
  `tgl_lapor` date NOT NULL,
  `tgl_solved` date NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `trouble`
--

INSERT INTO `trouble` (`id_contact`, `id_user`, `nik`, `nama`, `email`, `no_hp`, `subjek`, `pesan`, `status`, `tgl_lapor`, `tgl_solved`) VALUES
(1, 2, 0, 'Test', 'Test@gmail.com', '1231231231231', 'Test', 'Test', 1, '2018-12-24', '2018-12-24'),
(2, 3, 0, 'Rendi Setiahadi', 'rendi.setiahadi@gmail.com', '0129309120390', 'Tasdasdasd', 'asdasdasdasd', 1, '2018-12-24', '2018-12-24'),
(3, 3, 123456, 'SUEB', 'kasjdkasjkdajsdk@asdas.co', '123123', 'alsjdljasdl', '', 0, '2019-01-27', '0000-00-00'),
(4, 3, 897897, 'jakhsdjahsdjh', 'uhausdih@jjasd.c', '123123', 'ad;kasd', '', 0, '2019-01-27', '0000-00-00'),
(5, 3, 8978, '7879787', 'asdasd@adsas.co', '987', '8978', '77', 1, '2019-01-27', '2019-01-27');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
`id_user` int(11) NOT NULL,
  `nama` varchar(50) COLLATE latin1_general_ci NOT NULL,
  `username` varchar(35) COLLATE latin1_general_ci NOT NULL,
  `password` varchar(35) COLLATE latin1_general_ci NOT NULL,
  `level` varchar(35) COLLATE latin1_general_ci NOT NULL,
  `status` int(1) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `nama`, `username`, `password`, `level`, `status`) VALUES
(1, 'Administrator', 'admin', '7488e331b8b64e5794da3fa4eb10ad5d', 'administrator', 1),
(2, 'Pimpinan', 'pimpinan', 'faf1610815e78f708c481b3c80a8b00f', 'pimpinan', 1),
(3, 'Divisi Marketing', 'marketing', 'dcb7d8e2e27c4a9b8c58751d73068fd9', 'user', 1),
(6, 'Teknisi A', 'teknisi', '1047ddb99b1dc4bf3ad305af3d1f0589', 'teknisi', 1),
(8, 'aaaa', 'aaaa', '77eb953d886eb8efb1c9cb3973928e1d', 'user', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `content`
--
ALTER TABLE `content`
 ADD PRIMARY KEY (`content_id`);

--
-- Indexes for table `tbl_berita`
--
ALTER TABLE `tbl_berita`
 ADD PRIMARY KEY (`id_berita`);

--
-- Indexes for table `tbl_komentar`
--
ALTER TABLE `tbl_komentar`
 ADD PRIMARY KEY (`id_komentar`);

--
-- Indexes for table `trouble`
--
ALTER TABLE `trouble`
 ADD PRIMARY KEY (`id_contact`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
 ADD PRIMARY KEY (`id_user`), ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_berita`
--
ALTER TABLE `tbl_berita`
MODIFY `id_berita` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `tbl_komentar`
--
ALTER TABLE `tbl_komentar`
MODIFY `id_komentar` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `trouble`
--
ALTER TABLE `trouble`
MODIFY `id_contact` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=9;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
