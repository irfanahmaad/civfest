-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 02, 2017 at 03:26 AM
-- Server version: 10.1.28-MariaDB
-- PHP Version: 7.1.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `civfest_main_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `abouts`
--

CREATE TABLE `abouts` (
  `id` int(10) UNSIGNED NOT NULL,
  `images` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `events`
--

CREATE TABLE `events` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sub_title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `images` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `link_register` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `link_tor` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `events`
--

INSERT INTO `events` (`id`, `title`, `sub_title`, `description`, `images`, `link_register`, `link_tor`, `created_at`, `updated_at`) VALUES
(1, 'Lomba Beton Nasional', 'Retarding Concrete for delivery', 'Lomba beton nasional merupakan sebuah kompetisi yang menjadi wadah para mahasiswa/i untuk mengembangkan potensinya dalam merancang beton. Dengan penilian babak penyisihan dilakukan berdasarkan Makalah lomba,Proses pembuatan,Pengujian nilai Slump dan Loss Slump, dan Pengujian Kuat tekan melalui Video  yang dikirimkan oleh peserta.\r\n	Lomba Beton Nasional Civil Engineering 2018 yang bertema “ Retarding Concrete for delivery” ini menantang para pesertanya untuk membuat beton Ready mix yang sesuai dengan rancangan dan tetap dalam fase plastis pada loss slump yang relatif kecil.', 'Beton.jpg', '#', '#', '2017-12-01 08:21:48', '2017-12-01 08:21:48'),
(2, 'Lomba Konstruksi Jembatan', 'Jembatan Inovasi dan Ramah Lingkungan', 'BRIDGE CONSTRUCTION COMPETITION (BCC) merupakan salah satu rangkaian kompetisi yang akan diadakan pada Civil Festival 2018. BCC merupakan kompetisi yang diadakan setiap tahun dan ditunjukkan untuk mahasiswa tingkat D3, D4, dan S1 jurusan teknik sipil atau disiplin ilmu lainnya yang berhubungan dengan pembuatan bangunan dan jembatan. Di tahun ketiganya ini, BCC mengambil tema “Jembatan Inovasi dan Ramah Lingkungan”. Model dan desain prototipe jembatan ini dibuat menggunakan bahan kayu balsa sebagai material.  Dalam kompetisi ini, setiap tim beranggotakan 4 orang terdiri dari 3 mahasiswa dan 1 dosen pembimbing. Peserta kompetisi akan melewati 2 tahap yaitu tahap penyisihan dan tahap final. Dalam tahap penyisihan, akan dilakukan seleksi proposal yang telah diajukan peserta sebelumnya, dan dalam tahap final akan dilakukan presentasi tentang karyanya dan perakitan prototipe jembatan yang dilanjutkan dengan pengujian pembebanan pada prototipe jembatan dengan beban maksimum sampai 100 kg.\r\nPada tahun lalu, jumlah tim yang mengikuti BCC adalah 35 tim yang berasal dari berbagai daerah di nusantara. Dengan ini, BCC merupakan salah satu wadah anak bangsa untuk menuangkan ide dan menciptakan inovasi-inovasi baru dalam pembuatan dan pengembangan jembatan.', 'Jembatan.jpg', '#', '#', '2017-12-01 08:29:44', '2017-12-01 08:29:44'),
(3, 'Lomba Maket Gedung', 'Eco Green Building', 'Building Maket Competition merupakan sebuah kompetisi merencanakan dan merancang miniatur buatan yang menjadi sebuah rangkaian acara pada CIVFEST 2018. Kompetisi ini ditujukan bagi pelajar SMA/SMK/sederajat di JABODETABEK yang mengusung tema “Eco Green Building” (Eksplorasi Rumah Toko Hemat Energi dan Ramah Lingkungan) yang mengkonsepkan bangunan modern dalam bentuk Rumah Toko (Ruko) dengan menggunakan bahan yang ramah lingkungan. Building Maket Competition berguna untuk mengembangkan kreatifitas dan inovasi pelajar dalam rancangan bangunan sipil yang minimnya variasi model pembuatan ruko. Kompetisi ini terdiri dari 3 siswa dalam 1 tim dan jumlah tim yang dapat ikut maksimal 3 tim pada setiap sekolah. Tahap perlombaan dimulai dengan penyisihan dilakukan dengan menyeleksi makalah yang diajukan pada peserta, selanjutnya babak final yaitu bagi tim yang telah lolos akan merakit maket ciptaannya dan mempresentasikan model bangunannya.', 'Maket.jpg', '#', '#', '2017-12-01 08:31:41', '2017-12-01 08:31:41'),
(4, 'Lomba Desain K3L', 'Window of the World  for Civilian Future', 'Lomba merupakan wacana demokrasi dan keterbukaan yang dapat di pertanggung jawabkan, terutama di bidang penciptaan ide dan kretifitas yang semakin maju dan modern. Lomba juga merupakan wadah munculnya karya yang kreatif dengan mempertimbangkan unsur keselamatan, keamanan dan kenyamanan. Salah satunya dengan perencanaan yang baik.\r\n\r\nUntuk menggali bakat dan kemampuan , kami Civil Engineering Festival 2018 akan mengadakan lomba Desain K3L dengan tema “Window of the World  for Civilian Future“. Bangunan yang di maksud adalah tempat belajar yang dapat mengakses informasi secara online (online library) yang di harapkan mampu memaksimalkan suatu lingkungan yang kosong untuk di jadikan suatu bangunan yang aman dan nyaman.', 'Desain K3L.jpg', '#', '#', '2017-12-01 08:32:13', '2017-12-01 08:32:13');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(70, '2014_10_12_000000_create_users_table', 1),
(71, '2014_10_12_100000_create_password_resets_table', 1),
(72, '2017_11_25_050049_create_events_table', 1),
(73, '2017_11_25_054744_create_news_table', 1),
(74, '2017_11_27_033848_create_timelines_table', 1),
(75, '2017_11_27_034008_create_seminars_table', 1),
(76, '2017_11_27_035104_create_speakers_table', 1),
(77, '2017_11_27_153045_create_abouts_table', 2);

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE `news` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `images` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`id`, `title`, `description`, `images`, `created_at`, `updated_at`) VALUES
(1, 'Opening Website Civil Festival 2018', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. <a href=\"#\">asd</a>', 'sample-post.jpg', '2017-12-01 09:17:55', '2017-12-01 09:17:55');

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `seminars`
--

CREATE TABLE `seminars` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `subtitle` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `images` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `seminars`
--

INSERT INTO `seminars` (`id`, `title`, `subtitle`, `description`, `images`, `created_at`, `updated_at`) VALUES
(1, 'Seminar Nasional', 'Seminar Nasional “Civil Engineering Festival 2018”', '<p>Indonesia dianugerahi ribuan pulau dengan\r\nberbagai potensi didalamnya. Kemajuan infrastruktur dan konektivitas antar\r\npulau menjadi hal terpenting untuk memajukan pulau-pulau di Indonesia. Hal ini\r\nturut mendukung cita-cita Indonesia menjadi poros maritim dunia. Namun, untuk\r\nmewujudkannya  ada beberapa hal yang\r\nperlu diperhatikan, baik dari hambatan&nbsp;\r\nmaupun potensi yang terkandung di dalamnya agar mampu mewujudkan\r\ncita-cita tersebut.</p>\r\n\r\n<p>Seminar Nasional “Civil Engineering Festival\r\n2018” hadir untuk berkontribusi dengan menyediakan pencerdasan mengenai\r\n“Kemajuan Infrastruktur di Tengah Negara Kepulauan” dan “Coastal Building\r\nDevelopment” dengan menghadirkan tokoh-tokoh yang ahli pada bidangnya.</p>', 'Semnas.jpg', '2017-12-01 10:22:26', '2017-12-01 10:22:26');

-- --------------------------------------------------------

--
-- Table structure for table `speakers`
--

CREATE TABLE `speakers` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` tinyint(1) NOT NULL,
  `photo` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `seminar_id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `timelines`
--

CREATE TABLE `timelines` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `event_id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `timelines`
--

INSERT INTO `timelines` (`id`, `title`, `description`, `event_id`, `created_at`, `updated_at`) VALUES
(1, 'Publikasi dan Pendaftaran', 'Web Civfest 2018', '1', '2017-11-30 23:57:17', '2017-12-03 17:00:00'),
(2, 'Penutupan Pendaftaran Lomba', 'Sekret HMS PNJ atau via online', '1', '2017-12-01 00:00:34', '2018-02-11 17:00:00'),
(3, 'Pemberitahuan Tata Cara Penandaan Benda Uji', 'Web Civfest 2018', '1', '2017-12-01 00:01:27', '2018-02-13 17:00:00'),
(4, 'Pembuatan Benda Uji', 'Perguruan tinggi masing-masing', '1', '2017-12-01 00:02:12', '2018-02-14 17:00:00'),
(5, 'Batas Waktu Pengiriman Makalah + Video Tahap 1', 'Perguruan Tinggi masing-masing', '1', '2017-12-01 00:02:58', '2018-02-14 17:00:00'),
(6, 'Pengiriman Video Pengujian Kuat Tekan Beton Umur 3 Hari dan Data Hasil Pengujian', 'Perguruan Tinggi masing-masing', '1', '2017-12-01 00:04:08', '2018-02-17 17:00:00'),
(7, 'Pengiriman video pengujian kuat tekan beton umur 7 hari dan data hasil pengujian', 'Perguruan Tinggi masing-masing', '1', '2017-12-01 00:05:12', '2018-02-21 17:00:00'),
(8, 'Pengumuman Finalis', 'Politeknik Negeri Jakarta', '1', '2017-12-01 00:06:01', '2018-03-03 17:00:00'),
(9, 'Babak Final Hari ke-1', 'Auditorium Gedung Direktorat PNJ Lantai 3', '1', '2017-12-01 00:08:04', '2018-03-12 17:00:00'),
(10, 'Babak Final Hari ke-2', 'Auditorium Gedung Direktorat PNJ Lantai 3 dan Laboratorium Material dan Bahan Teknik Sipil PNJ', '1', '2017-12-01 00:08:34', '2018-03-13 17:00:00'),
(11, 'Pengumuman Pemenang & Penutupan CivFest 2018', 'Lapangan Utama', '1', '2017-12-01 00:09:08', '2018-03-14 17:00:00'),
(12, 'Sosialisasi dan Pendaftaran', '-', '2', '2017-12-01 00:47:10', '2017-12-09 17:00:00'),
(13, 'Penutupan Pendaftaran Lomba', '-', '2', '2017-12-01 00:47:42', '2018-01-24 17:00:00'),
(14, 'Deadline akhir pembayaran pendaftaran lomba jembatan', '-', '2', '2017-12-01 00:48:11', '2018-01-18 17:00:00'),
(15, 'Deadline penerimaan proposal', '-', '2', '2017-12-01 00:49:01', '2018-01-25 17:00:00'),
(16, 'Pengumuman lolos seleksi berkas ( FINALIS ) dan Pembukaan pendaftaran ulang', '-', '2', '2017-12-01 00:50:03', '2018-02-09 17:00:00'),
(17, 'Penutupan Pendaftaran Ulang', '-', '2', '2017-12-01 00:50:33', '2018-02-13 17:00:00'),
(18, 'TM dan Presentasi', '-', '2', '2017-12-01 00:50:58', '2018-03-13 17:00:00'),
(19, 'Pembuatan dan pengujian jembatan', '-', '2', '2017-12-01 00:51:11', '2018-03-13 17:00:00'),
(20, 'Pengumuman pemenang dan closing', '-', '2', '2017-12-01 00:51:24', '2018-03-14 17:00:00'),
(21, 'Pembukaan pendaftaran', '-', '3', '2017-12-01 01:40:54', '2017-12-03 17:00:00'),
(22, 'Penutupan Pendaftaran dan Pengumupulan Makalah', '-', '3', '2017-12-01 01:42:47', '2018-01-31 17:00:00'),
(23, 'Pengumuman lolos Makalah', '-', '3', '2017-12-01 01:43:12', '2018-02-07 17:00:00'),
(24, 'Pembukaan pendaftaran ulang peserta', '-', '3', '2017-12-01 01:43:50', '2018-02-08 17:00:00'),
(25, 'Penutupan Pendaftaran Ulang', '-', '3', '2017-12-01 01:44:09', '2018-02-12 17:00:00'),
(26, 'Pembukaan pendaftaran ulang peserta cadangan', '-', '3', '2017-12-01 01:44:40', '2018-02-13 17:00:00'),
(27, 'Penutupan pendaftaran ulang peserta cadangan', '-', '3', '2017-12-01 01:45:11', '2018-02-17 17:00:00'),
(28, 'Pengumuman Peserta Building Maket', '-', '3', '2017-12-01 01:45:33', '2018-02-18 17:00:00'),
(29, 'Technical Meeting', '-', '3', '2017-12-01 01:45:52', '2018-02-20 17:00:00'),
(30, 'Perakitan dan Presentasi', '-', '3', '2017-12-01 01:46:15', '2018-03-12 17:00:00'),
(31, 'Pendaftaran', '-', '4', '2017-12-01 01:49:46', '2017-12-05 17:00:00'),
(32, 'Batas pengumpulan proposal', '-', '4', '2017-12-01 01:50:21', '2018-02-10 17:00:00'),
(33, 'Pengumuman lolos', '-', '4', '2017-12-01 01:51:09', '2018-03-04 17:00:00'),
(34, 'Presentasi dan Uji Keterampilan', '-', '4', '2017-12-01 01:51:38', '2018-03-11 17:00:00'),
(35, 'Pengumuman pemenang', '-', '4', '2017-12-01 01:51:55', '2018-03-14 17:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Administrator', 'admin@civilfestival-pnj.com', '$2y$10$DxyS0Dgi0U1xYp3IWgi3kunPA7JH8IipbmDTgEBLCV6ipmdTS9nS.', 'oGOXKVhZG7r793jxCxRfhe2qV9q145FtYDGFQZyF3ACLC7dzCqAlwqojpiv6', '2017-11-26 23:37:58', '2017-11-26 23:37:58');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `abouts`
--
ALTER TABLE `abouts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `events`
--
ALTER TABLE `events`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `seminars`
--
ALTER TABLE `seminars`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `speakers`
--
ALTER TABLE `speakers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `timelines`
--
ALTER TABLE `timelines`
  ADD PRIMARY KEY (`id`);

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
-- AUTO_INCREMENT for table `abouts`
--
ALTER TABLE `abouts`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `events`
--
ALTER TABLE `events`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=78;

--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `seminars`
--
ALTER TABLE `seminars`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `speakers`
--
ALTER TABLE `speakers`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `timelines`
--
ALTER TABLE `timelines`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
