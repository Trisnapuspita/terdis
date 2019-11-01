-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 14, 2019 at 07:16 AM
-- Server version: 10.1.36-MariaDB
-- PHP Version: 7.2.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `teras`
--

-- --------------------------------------------------------

--
-- Table structure for table `beritas`
--

CREATE TABLE `beritas` (
  `id` int(10) UNSIGNED NOT NULL,
  `judul_berita` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `isi_berita` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `foto` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `beritas`
--

INSERT INTO `beritas` (`id`, `judul_berita`, `isi_berita`, `foto`, `created_at`, `updated_at`) VALUES
(1, 'Tes Berita', 'Tes BeritaTes BeritaTes BeritaTes BeritaTes BeritaTes BeritaTes BeritaTes BeritaTes BeritaTes BeritaTes BeritaTes BeritaTes BeritaTes BeritaTes BeritaTes BeritaTes BeritaTes BeritaTes BeritaTes BeritaTes BeritaTes BeritaTes BeritaTes Berita.\r\n\r\nTes BeritaTes BeritaTes BeritaTes BeritaTes BeritaTes BeritaTes BeritaTes BeritaTes BeritaTes BeritaTes BeritaTes BeritaTes BeritaTes BeritaTes BeritaTes BeritaTes BeritaTes BeritaTes BeritaTes BeritaTes BeritaTes BeritaTes BeritaTes BeritaTes BeritaTes BeritaTes BeritaTes BeritaTes BeritaTes BeritaTes BeritaTes BeritaTes BeritaTes Berita.Tes BeritaTes BeritaTes BeritaTes BeritaTes Berita.Tes Berita.\r\n\r\nTes BeritaTes BeritaTes BeritaTes BeritaTes BeritaTes Berita.', '22_pandas.jpg', '2018-12-18 05:00:31', '2018-12-18 05:00:31');

-- --------------------------------------------------------

--
-- Table structure for table `kelass`
--

CREATE TABLE `kelass` (
  `id` int(10) UNSIGNED NOT NULL,
  `kelas` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `kelass`
--

INSERT INTO `kelass` (`id`, `kelas`, `created_at`, `updated_at`) VALUES
(1, 'Kelas 7', '2018-12-18 13:08:14', '2018-12-18 13:08:14'),
(2, 'Kelas 8', '2018-12-18 13:10:31', '2018-12-18 13:10:31'),
(3, 'Kelas 9', '2018-12-18 13:10:41', '2018-12-18 13:10:41'),
(4, 'Kelas 10', '2018-12-31 08:00:37', '2018-12-31 08:00:37');

-- --------------------------------------------------------

--
-- Table structure for table `kelas_materi`
--

CREATE TABLE `kelas_materi` (
  `id` int(10) UNSIGNED NOT NULL,
  `kelas_id` int(10) UNSIGNED NOT NULL,
  `materi_id` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `kelas_materi`
--

INSERT INTO `kelas_materi` (`id`, `kelas_id`, `materi_id`) VALUES
(1, 3, 5),
(2, 4, 5);

-- --------------------------------------------------------

--
-- Table structure for table `kelas_soal`
--

CREATE TABLE `kelas_soal` (
  `id` int(10) UNSIGNED NOT NULL,
  `kelas_id` int(10) UNSIGNED NOT NULL,
  `soal_id` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `kelas_soal`
--

INSERT INTO `kelas_soal` (`id`, `kelas_id`, `soal_id`) VALUES
(1, 1, 3),
(2, 2, 3),
(3, 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `materis`
--

CREATE TABLE `materis` (
  `id` int(10) UNSIGNED NOT NULL,
  `nama` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deskripsi` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `file` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `materis`
--

INSERT INTO `materis` (`id`, `nama`, `deskripsi`, `file`, `created_at`, `updated_at`) VALUES
(1, 'coba tes materi', 'coba tes matericoba tes matericoba tes matericoba tes matericoba tes matericoba tes matericoba tes matericoba tes matericoba tes matericoba tes matericoba tes matericoba tes matericoba tes matericoba tes matericoba tes matericoba tes matericoba tes matericoba tes matericoba tes matericoba tes matericoba tes matericoba tes materi.\r\n\r\ncoba tes matericoba tes matericoba tes matericoba tes matericoba tes matericoba tes matericoba tes matericoba tes matericoba tes matericoba tes matericoba tes matericoba tes matericoba tes matericoba tes matericoba tes matericoba tes matericoba tes matericoba tes matericoba tes matericoba tes matericoba tes matericoba tes matericoba tes matericoba tes matericoba tes matericoba tes matericoba tes matericoba tes matericoba tes matericoba tes matericoba tes matericoba tes matericoba tes matericoba tes matericoba tes matericoba tes matericoba tes matericoba tes matericoba tes matericoba tes matericoba tes matericoba tes matericoba tes matericoba tes matericoba tes matericoba tes matericoba tes matericoba tes matericoba tes matericoba tes matericoba tes matericoba tes matericoba tes matericoba tes materi.\r\n\r\ncoba tes matericoba tes matericoba tes matericoba tes matericoba tes materi.', 'makalah-encoding.doc', '2018-12-18 15:05:58', '2019-01-22 08:10:07'),
(2, 'tes tes', 'tes testes testes testes testes testes testes testes testes testes testes testes tes', '3035-6041-1-SM.pdf', '2018-12-19 05:51:09', '2019-01-22 08:05:03'),
(3, 'materi kelas 8', 'materi kelas 8materi kelas 8materi kelas 8materi kelas 8materi kelas 8materi kelas 8materi kelas 8materi kelas 8materi kelas 8materi kelas 8materi kelas 8materi kelas 8materi kelas 8materi kelas 8materi kelas 8materi kelas 8materi kelas 8materi kelas 8materi kelas 8materi kelas 8materi kelas 8materi kelas 8materi kelas 8materi kelas 8materi kelas 8materi kelas 8materi kelas 8materi kelas 8materi kelas 8materi kelas 8materi kelas 8materi kelas 8materi kelas 8materi kelas 8materi kelas 8materi kelas 8materi kelas 8.\r\n\r\nmateri kelas 8materi kelas 8materi kelas 8materi kelas 8materi kelas 8materi kelas 8materi kelas 8materi kelas 8materi kelas 8materi kelas 8materi kelas 8materi kelas 8materi kelas 8materi kelas 8materi kelas 8materi kelas 8materi kelas 8.', 'Present Simple Tense.pdf', '2018-12-19 05:51:33', '2018-12-19 05:51:33'),
(4, 'kelas kelas99', 'kelas kelas99kelas kelas99kelas kelas99kelas kelas99kelas kelas99kelas kelas99kelas kelas99kelas kelas99kelas kelas99kelas kelas99kelas kelas99kelas kelas99kelas kelas99kelas kelas99kelas kelas99kelas kelas99kelas kelas99kelas kelas99', 'FUTURE_Tense.pdf', '2018-12-19 06:31:58', '2018-12-19 06:31:58'),
(5, 'yaaaa', 'bbsjbwshvhvv', '3145161834-Trisna Hastuti Puspita NIngrum.doc', '2019-01-28 03:12:27', '2019-01-28 03:26:06');

-- --------------------------------------------------------

--
-- Table structure for table `messages`
--

CREATE TABLE `messages` (
  `id` int(10) UNSIGNED NOT NULL,
  `from` int(10) UNSIGNED NOT NULL,
  `to` int(10) UNSIGNED NOT NULL,
  `read` tinyint(1) NOT NULL DEFAULT '0',
  `text` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `messages`
--

INSERT INTO `messages` (`id`, `from`, `to`, `read`, `text`, `created_at`, `updated_at`) VALUES
(1, 3, 2, 1, 'tes', '2018-12-19 05:27:39', '2018-12-19 05:27:44'),
(2, 2, 3, 0, 'masuk', '2018-12-19 05:27:47', '2018-12-19 05:27:47');

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
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2018_09_13_143446_create_kelass_table', 1),
(4, '2018_10_13_031148_create_soals_table', 1),
(5, '2018_10_22_120355_create_beritas_table', 1),
(6, '2018_10_22_162020_create_pendaftarans_table', 1),
(7, '2018_10_23_111203_create_pertanyaans_table', 1),
(8, '2018_10_30_110839_create_messages_table', 1),
(9, '2018_10_31_022708_add_read_to_messages', 1),
(10, '2018_11_02_151246_create_materis_table', 1),
(11, '2018_11_17_184437_create_profils_table', 1),
(12, '2018_11_17_195509_create_misis_table', 1),
(13, '2018_11_17_195533_create_testimonis_table', 1),
(14, '2018_12_13_031930_create_pilihans_table', 1),
(15, '2018_13_19_141544_create_soal_user_table', 1),
(16, '2018_12_15_141544_create_soal_user_table', 2),
(17, '2018_12_18_162020_create_pendaftarans_table', 3),
(18, '2018_12_18_162021_create_pendaftarans_table', 4),
(19, '2018_12_31_134746_add_kelas_to_users', 5),
(20, '2019_01_23_153528_kelas_materi_relation', 6),
(21, '2019_01_26_121936_drop_kelas_id', 6),
(22, '2019_01_26_123611_kelass_soals', 6),
(25, '2019_02_07_095746_gambar_soal', 7);

-- --------------------------------------------------------

--
-- Table structure for table `misis`
--

CREATE TABLE `misis` (
  `id` int(10) UNSIGNED NOT NULL,
  `poin` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `misis`
--

INSERT INTO `misis` (`id`, `poin`, `created_at`, `updated_at`) VALUES
(1, 'Menyediakan dan menyelenggarakan kegiatan belajar bagi siswa-siswi.', '2018-12-18 05:11:20', '2018-12-18 05:11:20'),
(2, 'Melatih, membimbing dan memotivasi siswa-siswi dalam berkarya serta menghasilkan karya yang bermanfaat.', '2018-12-18 05:11:33', '2018-12-18 05:11:33'),
(3, 'Menanamkan dan mengajarkan sikap berbagi kepada sesama manusia.', '2018-12-18 05:11:45', '2018-12-18 05:11:45');

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
-- Table structure for table `pendaftarans`
--

CREATE TABLE `pendaftarans` (
  `id` int(10) UNSIGNED NOT NULL,
  `nama` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jenis_kelamin` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tempat_lahir` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `alamat` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `no_hp` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `e_mail` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `asal_sekolah` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kelas` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `pendaftarans`
--

INSERT INTO `pendaftarans` (`id`, `nama`, `jenis_kelamin`, `tempat_lahir`, `tanggal_lahir`, `alamat`, `no_hp`, `e_mail`, `asal_sekolah`, `kelas`, `created_at`, `updated_at`) VALUES
(1, 'M FATHAN QORIIBA', 'Laki-laki', 'Bogor', '1998-02-09', 'Bekasi', '0812341293', 'mfathanqoriba@gmail.com', 'SMAN 5 Bekasi', '12 MIA', '2018-12-18 11:07:03', '2018-12-18 11:07:03'),
(2, 'MARK ZUCKERBERG', 'Laki-laki', 'Bogor', '2010-03-03', 'rawamangun', '0812349213123', 'mark@ymail.com', 'SMAN 5 Bekasi', 'Kelas 1', '2018-12-19 06:23:30', '2018-12-19 06:23:30');

-- --------------------------------------------------------

--
-- Table structure for table `pertanyaans`
--

CREATE TABLE `pertanyaans` (
  `id` int(10) UNSIGNED NOT NULL,
  `nama` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `subject` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `message` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `pertanyaans`
--

INSERT INTO `pertanyaans` (`id`, `nama`, `email`, `subject`, `message`, `created_at`, `updated_at`) VALUES
(1, 'M Fathan Qoriiba', 'mfathanqoriiba@gmail.com', 'tes pesan', 'tes pesantes pesantes pesantes pesantes pesantes pesantes pesan.', '2018-12-18 10:50:28', '2018-12-18 10:50:28');

-- --------------------------------------------------------

--
-- Table structure for table `pilihans`
--

CREATE TABLE `pilihans` (
  `id` int(10) UNSIGNED NOT NULL,
  `soal` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `gambar` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `opsiA` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `opsiB` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `opsiC` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `opsiD` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `opsiBenar` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pembahasan` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `gambar_pembahasan` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `soal_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `pilihans`
--

INSERT INTO `pilihans` (`id`, `soal`, `gambar`, `opsiA`, `opsiB`, `opsiC`, `opsiD`, `opsiBenar`, `pembahasan`, `gambar_pembahasan`, `soal_id`, `created_at`, `updated_at`) VALUES
(1, 'jawabannya a', 'panda_wallpaper_by_apofiss-dahj9x5.jpg', 'benet', 'sa', 'la', 'h', 'a', 'karna yang bener a', 'wallpaper20www_pixelglide_com20-369.jpg', 1, '2018-12-19 06:25:32', '2019-02-07 14:39:54'),
(2, 'ASDvb', NULL, 'a', 'b', 'c', 'd', 'a', 'asd', NULL, 2, '2018-12-29 01:52:17', '2018-12-29 01:52:17'),
(3, 'vhvhv', NULL, '1', '2', '3', '4', 'a', 'gg', NULL, 3, '2019-01-28 03:16:11', '2019-01-28 03:16:11'),
(4, 'adwa', 'pikachu-pokemon-cute-face-creative-cartoon-1.jpg', 'awda', 'daf', 'fs', 'l,', 'a', 'ok', 'thumb-1920-145977.jpg', 1, '2019-02-07 04:45:18', '2019-02-07 14:30:34'),
(5, 'mkmkm', '22_pandas.jpg', 'kk', 'kk', 'kk', 'kk', 'a', 'kk', NULL, 1, '2019-02-07 06:44:45', '2019-02-07 06:44:45'),
(6, 'dawdaw', 'Panda-Anime-Free-Pc-Wallpaper-Downloads.jpg', 'awda', 'dwada', 'wdaw', 'dwadwa', 'a', 'wdaw', '9SoZwtU.jpg', 1, '2019-02-07 06:47:28', '2019-02-07 14:29:59'),
(7, 'stdt', 'preview_baby-panda.jpg', 'gg', 'yy', 'yy', 'yy', 'a', 'yy', 'lVexfXf.jpg', 1, '2019-02-07 14:31:51', '2019-02-07 14:31:51'),
(8, 'jhhjhj', '3d wallpapers (6).jpg', 'ghhj', 'nn', 'll', 'iii', 'a', 'ghh', 'Colourful Abstract Wallpapers (10).JPG', 1, '2019-02-07 14:33:53', '2019-02-07 14:33:53'),
(9, 'eded', '3d wallpapers (6).jpg', 'eded', 'deded', 'ededed', 'edede', 'a', 'deded', 'preview_baby-panda.jpg', 1, '2019-02-07 14:50:52', '2019-02-07 14:50:52');

-- --------------------------------------------------------

--
-- Table structure for table `profils`
--

CREATE TABLE `profils` (
  `id` int(10) UNSIGNED NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `telepon` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alamat` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `waktu_kerja` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `visi` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `tentang_kami` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `pendahuluan` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `sejarah` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `profils`
--

INSERT INTO `profils` (`id`, `email`, `telepon`, `alamat`, `waktu_kerja`, `visi`, `tentang_kami`, `pendahuluan`, `sejarah`, `created_at`, `updated_at`) VALUES
(1, 'terasdiskusi@gmail.com', '0818100035', 'Jln haji Mean raya no 96E, 17411, Bekasi, Jawa Barat, Indonesia', 'Senin-Jumat 09:00 - 17:00', 'Menjadi yayasan yang unggul dan amanah dalam belajar, berkarya dan berbagi.', 'Yayasan Teras Diskusi merupakan sebuah lembaga yang bergerak dibidang sosial. Lembaga sosial ini merupakan sebuah lembaga yang berawal dari sebuah diskusi kecil disebuah teras rumah yang membahas tentang mata pelajaran di sekolah.\r\n\r\nKegiatan Yayasan Teras Diskusi ini antara lain: bimbingan belajar, bakti sosial, buka puasa Bersama, pendidikan dan latihan keterampilan, belajar bisnis dan pemeriksaan kesehatan gratis. Yayasan ini bersifat non-profit, dalam artian sang owner tidak mengambil keuntungan dari kas yayasan yang ada.', 'Yayasan Teras Diskusi merupakan sebuah lembaga yang bergerak dibidang sosial. Lembaga sosial ini merupakan sebuah lembaga yang berawal dari sebuah diskusi kecil disebuah teras rumah yang membahas tentang mata pelajaran di sekolah.', 'Berawal dari diskusi kecil disebuah teras rumah. Membahas tentang mata pelajaran di sekolah. berlanjut menjadi kegiatan rutin bagi para siswa untuk berdiskusi banyak hal, mulai dari pelajaran di sekolah, pengajian, belajar bisnis, prakarsa dan ketrampilan, sampai dengan belajar terapi diri.\r\n\r\nYayasan teras diskusi didirikan pada 11 maret 2011. Kemudian secara legal disahkan oleh notaris. Pendiri sekaligus ketua dewan pembina yayasan ialah Arief Purnama, S.Pd. ketua harian saat itu ialah Ahmad Firdaus, S.Pd. Sekretaris Adee Setiawan, S.Pd yang saat ini menjabat Ketua yayasan menggantikan Ahmad Firdaus, S.Pd. adapun bendahara pertama ialah Anissa dan sekarang dijabat oleh Siti Marhamah, SE.', '2018-12-17 17:00:00', '2018-12-17 17:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `soals`
--

CREATE TABLE `soals` (
  `id` int(10) UNSIGNED NOT NULL,
  `nm_soal` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `soals`
--

INSERT INTO `soals` (`id`, `nm_soal`, `created_at`, `updated_at`) VALUES
(1, 'coba tes soal 1', '2018-12-18 16:07:03', '2018-12-18 16:10:00'),
(2, 'aaaa', '2018-12-29 01:52:01', '2018-12-29 01:52:01'),
(3, 'mat', '2019-01-28 03:15:41', '2019-01-28 03:15:41');

-- --------------------------------------------------------

--
-- Table structure for table `soal_user`
--

CREATE TABLE `soal_user` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `soal_id` int(10) UNSIGNED NOT NULL,
  `nilai` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `soal_user`
--

INSERT INTO `soal_user` (`id`, `user_id`, `soal_id`, `nilai`, `created_at`, `updated_at`) VALUES
(1, 2, 1, 100, '2018-12-19 06:26:15', '2018-12-19 06:26:15'),
(2, 2, 2, 100, '2018-12-29 02:10:18', '2018-12-29 02:10:18'),
(3, 4, 3, 100, '2019-02-07 05:16:28', '2019-02-07 05:16:28');

-- --------------------------------------------------------

--
-- Table structure for table `testimonis`
--

CREATE TABLE `testimonis` (
  `id` int(10) UNSIGNED NOT NULL,
  `nama` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pesan` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `foto` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `testimonis`
--

INSERT INTO `testimonis` (`id`, `nama`, `status`, `pesan`, `foto`, `created_at`, `updated_at`) VALUES
(1, 'M FATHAN QORIIBA', 'Siswa SMAN5 Bekasi', 'Belajar disini mantap', 'LOGO.png', '2018-12-18 05:02:04', '2018-12-18 05:03:35'),
(2, 'Siapa ini', 'Manusia', 'Teras Diskusi memang oke', 'course-6.jpg', '2018-12-18 05:03:01', '2018-12-18 05:03:01');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kelas_id` int(10) UNSIGNED DEFAULT NULL,
  `role` tinyint(4) NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `kelas_id`, `role`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Admin', 'terasdiskusi@gmail.com', NULL, 2, '$2y$10$bZltwhb8b2KzZJ1Y7xNQIuy1FNNWCPAIjtgp90uLwx4vabxZovrbS', 'De9wGTjUSgj4N6vjKkLnlarftFTfBupLuqGEwYyjYghu80wOdJeG3hcgKQOI', '2018-12-18 04:53:30', '2018-12-18 04:53:30'),
(2, 'M Fathan Qoriiba', 'terserahfathan@gmail.com', 3, 1, '$2y$10$XJEWMGH.lrD4lsrn.KuQEe2puDhl77KMz6SUSZ.LvTimwa0HZ0hhm', 'TqaiAMple48nXwr2QZvtRHsJJ61r6CPOXoBw4GCBrTKularZCZckm7PbGr1j', '2018-12-18 04:57:33', '2018-12-18 04:57:33'),
(3, 'Pengajar 1', 'rfchampion28@gmail.com', NULL, 3, '$2y$10$JjeCOhNF0jae2/odZ9lp/OJoR1C77Up2Ojx3t3OAeZyD//XU2KWlu', '5PFJ0JqBiOV7p9LvLz8pIaxZVUk0HkqPlHM6c7phkvHgY088Rw332vWPA0cr', '2018-12-18 05:20:56', '2018-12-18 05:20:56'),
(4, 'TrisnaHastuti', 'Trisnahastutipuspita@gmail.com', 1, 1, '$2y$10$02fkQcZM0XFqmnoxlCYlyePY2ja9QB9r8wtKSZaBtpEk6v8ypQDpS', 'bQUpjU6LX4bV5vFwhIwkvE5MUQfBcyyhclfpPnrllIybkltUfoJKXO8VjSQF', '2019-01-16 19:51:17', '2019-01-16 19:51:17');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `beritas`
--
ALTER TABLE `beritas`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kelass`
--
ALTER TABLE `kelass`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kelas_materi`
--
ALTER TABLE `kelas_materi`
  ADD PRIMARY KEY (`id`),
  ADD KEY `kelas_materi_kelas_id_foreign` (`kelas_id`),
  ADD KEY `kelas_materi_materi_id_foreign` (`materi_id`);

--
-- Indexes for table `kelas_soal`
--
ALTER TABLE `kelas_soal`
  ADD PRIMARY KEY (`id`),
  ADD KEY `kelas_soal_kelas_id_foreign` (`kelas_id`),
  ADD KEY `kelas_soal_soal_id_foreign` (`soal_id`);

--
-- Indexes for table `materis`
--
ALTER TABLE `materis`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `misis`
--
ALTER TABLE `misis`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `pendaftarans`
--
ALTER TABLE `pendaftarans`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pertanyaans`
--
ALTER TABLE `pertanyaans`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pilihans`
--
ALTER TABLE `pilihans`
  ADD PRIMARY KEY (`id`),
  ADD KEY `pilihans_soal_id_foreign` (`soal_id`);

--
-- Indexes for table `profils`
--
ALTER TABLE `profils`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `soals`
--
ALTER TABLE `soals`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `soal_user`
--
ALTER TABLE `soal_user`
  ADD PRIMARY KEY (`id`),
  ADD KEY `soal_user_user_id_foreign` (`user_id`),
  ADD KEY `soal_user_soal_id_foreign` (`soal_id`);

--
-- Indexes for table `testimonis`
--
ALTER TABLE `testimonis`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`),
  ADD KEY `users_kelas_id_foreign` (`kelas_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `beritas`
--
ALTER TABLE `beritas`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `kelass`
--
ALTER TABLE `kelass`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `kelas_materi`
--
ALTER TABLE `kelas_materi`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `kelas_soal`
--
ALTER TABLE `kelas_soal`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `materis`
--
ALTER TABLE `materis`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `messages`
--
ALTER TABLE `messages`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `misis`
--
ALTER TABLE `misis`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `pendaftarans`
--
ALTER TABLE `pendaftarans`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `pertanyaans`
--
ALTER TABLE `pertanyaans`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `pilihans`
--
ALTER TABLE `pilihans`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `profils`
--
ALTER TABLE `profils`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `soals`
--
ALTER TABLE `soals`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `soal_user`
--
ALTER TABLE `soal_user`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `testimonis`
--
ALTER TABLE `testimonis`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `kelas_materi`
--
ALTER TABLE `kelas_materi`
  ADD CONSTRAINT `kelas_materi_kelas_id_foreign` FOREIGN KEY (`kelas_id`) REFERENCES `kelass` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `kelas_materi_materi_id_foreign` FOREIGN KEY (`materi_id`) REFERENCES `materis` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `kelas_soal`
--
ALTER TABLE `kelas_soal`
  ADD CONSTRAINT `kelas_soal_kelas_id_foreign` FOREIGN KEY (`kelas_id`) REFERENCES `kelass` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `kelas_soal_soal_id_foreign` FOREIGN KEY (`soal_id`) REFERENCES `soals` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `pilihans`
--
ALTER TABLE `pilihans`
  ADD CONSTRAINT `pilihans_soal_id_foreign` FOREIGN KEY (`soal_id`) REFERENCES `soals` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `soal_user`
--
ALTER TABLE `soal_user`
  ADD CONSTRAINT `soal_user_soal_id_foreign` FOREIGN KEY (`soal_id`) REFERENCES `soals` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `soal_user_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `users_kelas_id_foreign` FOREIGN KEY (`kelas_id`) REFERENCES `kelass` (`id`) ON DELETE SET NULL;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
