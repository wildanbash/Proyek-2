-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 13, 2020 at 10:35 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `simanmas_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `artikel`
--

CREATE TABLE `artikel` (
  `artikel_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `title` varchar(225) NOT NULL,
  `thumbnail` varchar(255) NOT NULL,
  `content` text NOT NULL,
  `created` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `artikel`
--

INSERT INTO `artikel` (`artikel_id`, `user_id`, `title`, `thumbnail`, `content`, `created`) VALUES
(5, 1, 'Husnuzan terhadap sesama manusia', 'pentingnya_berhusnuzan.jpg', '<p><img alt=\"\" src=\"http://localhost/simanmas/assets/upload/pentingnya_berhusnuzan.jpg\" style=\"height:175px; width:350px\" /></p>\r\n\r\n<p>Husnudzan terhadap sesama manusia merupakan sikap dan perilaku orang beriman dan bertaqwa yang senantiasa berprasangka baik terhadap sesama manusia. Ia menyadari bahwa buruk sangka terhadap orang lain adalah dosa (lihat Q.S Al-hujurat/49:12)</p>\r\n\r\n<p><em><strong>contoh husnudzan terhadap sesama manusia</strong></em></p>\r\n\r\n<p><em>a</em>.)Senang melihat orang lain jika mendapatkan kebahagiaan atau keberhasilan dan mengucapkan selamat atas keberhasilan orang tersebut.</p>\r\n\r\n<p><em>b</em>.) Menghindari sikap dan perilaku menggujing atau mencari-cari kesalahan orang lain dan serta berburuk sangka atau curiga yang berlebihan kepada orang lain.</p>\r\n\r\n<p><em>c</em>.) Menunjukkan rasa iba atau turut prihatin kepada orang lain jika mendapatkan musibah atau kesulitan serta segera memberikan pertolongan sesuai dengan kemampuan.</p>\r\n\r\n<p><em>d</em>.) Menjadi buruk sangka kepada orang lain. apabila mendengar berita wajib ditelusuri kebenarannya. firman allah swt (Q.S Al-hujurat/49:6)</p>\r\n\r\n<p><em>e ) </em>Menjauhi perbuatan intip mengintip atau mencari-cari kesalahan orang lain Nabi Muhammad shallallahu alaihi wa sallam bersabda yang artinya: &ldquo;jauhilah sikap buruk sangka, sebab buruk sangka itu peristiwa yang nista, jangan kamu intip-mengintip, jangan singgung- menyinggung (perasaan), jangan susah -menyusahkan jangan dengki- mendingki, jangan ber marah-marahan, dan jangan bertolak belakang, kamu semua adalah hamba allah yang bersaudara (HR Bukhari)</p>\r\n', '2020-03-11 08:41:45'),
(6, 1, 'AIBAAQ Kampanyekan Bela Anak-Anak Al-Quds', '1.jpg', '<p><img alt=\"\" src=\"http://localhost/simanmas/assets/upload/1.jpg\" style=\"height:250px; width:500px\" /></p>\r\n\r\n<p>SM| Malang&ndash;Sejumlah lembaga kemanusiaan yang peduli terhadap perjuangan Palestina, beraliansi membentuk Aliansi Indonesia Bela Al- Quds (AIBAAQ) dengan fokus membela anak-anak Al-Quds. Secara internasional, pada 1-8 Maret 2020 ini, aliansi melakukan kampanye selamatkan anak Al-Quds dengan<em> tagline </em>&ldquo;Kami Semua Maryam&rdquo; atau <em>&ldquo;We Are All Mary.&rdquo;</em></p>\r\n\r\n<p>&ldquo;Kampaye ini merupakan kampanye internasional yang telah dimulai kemarin secara internasional,&rdquo; ujar Sekjen AIBAAQ Maimon Herawati dalam konferensi pers di kawasan Menteng, Jakarta Pusat, Senin siang, 2 Maret 2020. Dalam konteks Indonesia, kata Maimon, Aksi Bela Anak Al-Quds ini juga merupakan pelaksanaan dari amanat dalam Pembukaan Undang-Undang Dasar 1945.</p>\r\n\r\n<p>AIBAAQ, kata Maimon, adalah kumpulan dari sejumlah LSM seperti SMART 171, Adara Relief International, KNRP, Akhwat Bergerak, Spirit of Aqsa, Aksi Insan Nusantara, Sahabat Erdogan, Aliansi Kemanusiaan Indonesia, Khadijatee Foundation, dan Aqsa Working Group (AWG).</p>\r\n\r\n<p>Selain itu juga bergabung Sahabat Palestina Memanggil, Komunitas Kami Semua Maryam, Yayasan Al Quds Amaanati, Maemunah Center, Al Insaniah, MP4 Palestine, dan Forum Jurnalis Muslim (Forjim). Sekjen Adara Relief Internasional Sri Vira Chandra mengungkapkan sejak Deklarasi Balfour 1917 yang dipelopori Theodore Herlz, ribuan anak-anak Palestina hidup tercabik-cabik, maka sudah sepatutnya untuk mengampanyekan dan mendukung mereka.</p>\r\n\r\n<p><img alt=\"\" src=\"http://localhost/simanmas/assets/upload/2.jpg\" style=\"height:273px; width:500px\" /></p>\r\n\r\n<p>Jurnalis senior, Aat Surya Syafaat, bercerita, dia 1993-1998 saat meliput sidang PBB di New York ia mengaku banyak mengikuti sidang-sidang terkait Palestina. &ldquo;Terbukti kelemahan kita hanya satu. Yaitu di kekuatan media kita tidak bersatu,&rdquo; ungkapnya.</p>\r\n\r\n<p>Ketua Bidang Edukasi dan Informasi KNRP Muhammad Syarif mengatakan, sepuluh ribu anak Palestina di Tepi Barat, sejak 2000-2020 pernah merasakan dinginnya penjara Israel. &ldquo;Itu seharusnya menjadi perhatian khusus kita,&rdquo; kata Syarif.</p>\r\n\r\n<p>Ketua Khadeejati Foundation Peggy Melati Sukma, mengatakan, penjajahan yang dilakukan Israel sangatlah kejam. Menurutnya, kejahatan tersebut termasuk dalam katagori genosida.</p>\r\n\r\n<p>&ldquo;Menghancurkan sekolah-sekolah di Palestina itu merupakan langkah yang kejam dalam memusnakan peradaban. Terlebih untuk masa depan anak-anak Palestina,&rdquo; kata Peggy. [nk]</p>\r\n', '2020-03-11 09:58:40'),
(7, 1, 'Hijrahku untuk siapa? Hadiri Pengajiannya', 'dewan_dakwah_gelar_gelar_forum_ekonomi_kreatif.jpg', '<p><img alt=\"\" src=\"http://localhost/simanmas/assets/upload/dewan_dakwah_gelar_gelar_forum_ekonomi_kreatif.jpg\" style=\"height:250px; width:500px\" /></p>\r\n\r\n<p>SM| Malang&ndash;Tabuh bedug menandai dibukanya program ajang performance day bagi mahasiswa Polinema bertema &lsquo;We Are Leaders!&rsquo; pada Jumar 21 Februari 2020 di lapangan mini soccer. Ribuan mahasiswa turut meramaikan perhelatan kompetisi di panggung utama.</p>\r\n\r\n<p>Conceptor dan Principal Polinema Dina Risky mengungkapkan, Performance Day ini diselenggarakan untuk memberikan kesempatan bagi semua mahasiswa melakukan kemampuan dan keterampilan mereka, &ldquo;Yang paling penting untuk membangun kepercayaan diri mereka agar sesuai dengan visi Polinema dalam menciptakan pemimpin muslim,&rdquo; jelasnya..</p>\r\n\r\n<p>Bahkan selama satu hari, mahasiswa polinema dimanjakan langsung oleh Conceptor and Principal&nbsp; Dina Risky di Principal Kitchen. Berbagai makanan Snack and Lunch yang dibuat sendiri oleh Mam Dina Risky untuk teman-teman mahasiswanya. Program yang digelar hari Jumat ini, sempat berhenti karena untuk para mahasiswa mengikuti shalat Jumat di masjid yang ada di dalam lingkungan</p>\r\n', '2020-03-11 10:00:52'),
(8, 2, 'jkgkjgkjjkh', 'jkhkhkhlhl', 'klhklhlhlkhlkhlk', '2020-03-20 22:32:14'),
(9, 1, 'Cara Membuat Hello World', '', '<ol>\r\n	<li>Buka Code Editor</li>\r\n	<li>ketikan an &lt;?= &quot;Hello World&quot; ?&gt;</li>\r\n	<li>save dalam file hello.php</li>\r\n	<li>Jalankan server apache / xampp</li>\r\n	<li>ketikkan hello</li>\r\n</ol>\r\n', '2020-05-13 14:56:52'),
(10, 1, 'Cerita Pendek', '', '<p>Pada suatu hari saya jalan jalan lalu pulang ke rumah jam 10 pagi.</p>\r\n\r\n<p>Selesai</p>\r\n', '2020-05-13 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `dokumentasi`
--

CREATE TABLE `dokumentasi` (
  `dokumentasi_id` int(11) NOT NULL,
  `kegiatan_id` int(11) NOT NULL,
  `content_images` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `dokumentasi`
--

INSERT INTO `dokumentasi` (`dokumentasi_id`, `kegiatan_id`, `content_images`) VALUES
(1, 1, 'sss.png'),
(2, 1, 'sss1.png'),
(3, 3, 'iwas-bagi-takjil-2_20160624_2035292.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `kegiatan`
--

CREATE TABLE `kegiatan` (
  `kegiatan_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `nama` varchar(225) NOT NULL,
  `deskripsi` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kegiatan`
--

INSERT INTO `kegiatan` (`kegiatan_id`, `user_id`, `nama`, `deskripsi`) VALUES
(1, 1, 'Kajian', NULL),
(2, 2, 'Gotong Royong', NULL),
(3, 1, 'Takjil Gratis', 'Pembagian takjil di sekitar jalan Soekarno Hatta setiap hari Kamis mulai jam 4:30 sore.');

-- --------------------------------------------------------

--
-- Table structure for table `keuangan`
--

CREATE TABLE `keuangan` (
  `id` int(255) NOT NULL,
  `tanggal` date DEFAULT NULL,
  `ket` varchar(255) DEFAULT '-',
  `jenis` varchar(225) DEFAULT NULL,
  `jumlah` float DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `keuangan`
--

INSERT INTO `keuangan` (`id`, `tanggal`, `ket`, `jenis`, `jumlah`, `user_id`) VALUES
(1, '2020-05-12', 'Pengumpulan uang amal', 'pemasukkan', 500000, 1),
(2, '2020-05-13', 'Pembelian Alat bersih - bersih', 'pengeluaran', 100000, 1),
(3, '2020-05-13', 'Pengumpulan uang amal', 'pemasukkan', 700000, 1),
(4, '2020-05-13', 'Pembangunan Tempat Wudhu baru', 'pengeluaran', 1200000, 1);

-- --------------------------------------------------------

--
-- Table structure for table `peminjaman`
--

CREATE TABLE `peminjaman` (
  `peminjaman_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `start_date` date NOT NULL,
  `end_date` date NOT NULL,
  `status` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `peminjaman`
--

INSERT INTO `peminjaman` (`peminjaman_id`, `user_id`, `start_date`, `end_date`, `status`) VALUES
(3, 1, '2020-03-18', '2020-03-19', 'Karpet');

-- --------------------------------------------------------

--
-- Table structure for table `pesan`
--

CREATE TABLE `pesan` (
  `id` int(11) NOT NULL,
  `nama` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `subject` varchar(255) DEFAULT NULL,
  `pesan` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pesan`
--

INSERT INTO `pesan` (`id`, `nama`, `email`, `subject`, `pesan`) VALUES
(1, 'Unero', 'ramadhanbhg@gmail.com', 'Puasa Yuk', 'Lawan Corona');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `user_id` int(11) NOT NULL,
  `username` varchar(225) NOT NULL,
  `password` varchar(225) NOT NULL,
  `nama` varchar(225) NOT NULL,
  `alamat` varchar(225) NOT NULL,
  `type` varchar(25) NOT NULL,
  `created` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `username`, `password`, `nama`, `alamat`, `type`, `created`) VALUES
(1, 'wildan', '4f0347db8e2a7e074f79200b7e86d823994a2e23', 'wildan dawam bash', 'probolinggo', 'admin', '2020-03-04 08:57:39'),
(2, 'unero', '13f09a8639695b8c086f762aad78723580cc5cfe', 'unero', 'malang', 'user', '2020-03-04 09:25:51'),
(5, 'sugeng', '0a0ae60cfa8119450fc0e4bd8e41820a2b086553', 'sugeng', 'malang', 'keuangan', '2020-03-04 09:41:48'),
(7, 'uxdox', '13f09a8639695b8c086f762aad78723580cc5cfe', 'unero', 'jalan Pulosari 1', 'humas', '2020-05-13 14:53:54');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `artikel`
--
ALTER TABLE `artikel`
  ADD PRIMARY KEY (`artikel_id`),
  ADD KEY `fk_artikel_user` (`user_id`);

--
-- Indexes for table `dokumentasi`
--
ALTER TABLE `dokumentasi`
  ADD PRIMARY KEY (`dokumentasi_id`),
  ADD KEY `fk_dokumentasi_aktifitas` (`kegiatan_id`);

--
-- Indexes for table `kegiatan`
--
ALTER TABLE `kegiatan`
  ADD PRIMARY KEY (`kegiatan_id`),
  ADD KEY `fk_aktifitas_user` (`user_id`);

--
-- Indexes for table `keuangan`
--
ALTER TABLE `keuangan`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_user_keuangan` (`user_id`);

--
-- Indexes for table `peminjaman`
--
ALTER TABLE `peminjaman`
  ADD PRIMARY KEY (`peminjaman_id`),
  ADD KEY `fk_peminjaman_user` (`user_id`);

--
-- Indexes for table `pesan`
--
ALTER TABLE `pesan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `artikel`
--
ALTER TABLE `artikel`
  MODIFY `artikel_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `dokumentasi`
--
ALTER TABLE `dokumentasi`
  MODIFY `dokumentasi_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `kegiatan`
--
ALTER TABLE `kegiatan`
  MODIFY `kegiatan_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `keuangan`
--
ALTER TABLE `keuangan`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `peminjaman`
--
ALTER TABLE `peminjaman`
  MODIFY `peminjaman_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `pesan`
--
ALTER TABLE `pesan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `artikel`
--
ALTER TABLE `artikel`
  ADD CONSTRAINT `fk_artikel_user` FOREIGN KEY (`user_id`) REFERENCES `user` (`user_id`);

--
-- Constraints for table `dokumentasi`
--
ALTER TABLE `dokumentasi`
  ADD CONSTRAINT `fk_dokumentasi_aktifitas` FOREIGN KEY (`kegiatan_id`) REFERENCES `kegiatan` (`kegiatan_id`);

--
-- Constraints for table `kegiatan`
--
ALTER TABLE `kegiatan`
  ADD CONSTRAINT `fk_kegiatan_user` FOREIGN KEY (`user_id`) REFERENCES `user` (`user_id`);

--
-- Constraints for table `keuangan`
--
ALTER TABLE `keuangan`
  ADD CONSTRAINT `fk_user_keuangan` FOREIGN KEY (`user_id`) REFERENCES `user` (`user_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `peminjaman`
--
ALTER TABLE `peminjaman`
  ADD CONSTRAINT `fk_peminjaman_user` FOREIGN KEY (`user_id`) REFERENCES `user` (`user_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
