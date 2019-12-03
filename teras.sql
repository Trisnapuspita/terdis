-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 04 Des 2019 pada 00.08
-- Versi server: 10.1.36-MariaDB
-- Versi PHP: 7.2.11

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
-- Struktur dari tabel `beritas`
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
-- Dumping data untuk tabel `beritas`
--

INSERT INTO `beritas` (`id`, `judul_berita`, `isi_berita`, `foto`, `created_at`, `updated_at`) VALUES
(1, 'Tes Berita', 'Tes BeritaTes BeritaTes BeritaTes BeritaTes BeritaTes BeritaTes BeritaTes BeritaTes BeritaTes BeritaTes BeritaTes BeritaTes BeritaTes BeritaTes BeritaTes BeritaTes BeritaTes BeritaTes BeritaTes BeritaTes BeritaTes BeritaTes BeritaTes Berita.\r\n\r\nTes BeritaTes BeritaTes BeritaTes BeritaTes BeritaTes BeritaTes BeritaTes BeritaTes BeritaTes BeritaTes BeritaTes BeritaTes BeritaTes BeritaTes BeritaTes BeritaTes BeritaTes BeritaTes BeritaTes BeritaTes BeritaTes BeritaTes BeritaTes BeritaTes BeritaTes BeritaTes BeritaTes BeritaTes BeritaTes BeritaTes BeritaTes BeritaTes BeritaTes Berita.Tes BeritaTes BeritaTes BeritaTes BeritaTes Berita.Tes Berita.\r\n\r\nTes BeritaTes BeritaTes BeritaTes BeritaTes BeritaTes Berita.', 'a.jpg', '2018-12-18 05:00:31', '2018-12-18 05:00:31'),
(4, 'aaaaaaaaaaa', 'aaaaaaaaaaa', 'a.jpg', '2019-11-17 01:08:43', '2019-11-17 01:08:43');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kelass`
--

CREATE TABLE `kelass` (
  `id` int(10) UNSIGNED NOT NULL,
  `kelas` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `kelass`
--

INSERT INTO `kelass` (`id`, `kelas`, `created_at`, `updated_at`) VALUES
(1, 'Kelas 7A', '2018-12-18 13:08:14', '2019-11-16 23:12:33'),
(2, 'Kelas 8', '2018-12-18 13:10:31', '2018-12-18 13:10:31'),
(3, 'Kelas 9', '2018-12-18 13:10:41', '2018-12-18 13:10:41'),
(4, 'Kelas 10', '2018-12-31 08:00:37', '2018-12-31 08:00:37'),
(5, 'Kelas 7A', '2019-11-16 22:54:24', '2019-11-16 22:54:24');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kelas_materi`
--

CREATE TABLE `kelas_materi` (
  `id` int(10) UNSIGNED NOT NULL,
  `kelas_id` int(10) UNSIGNED NOT NULL,
  `materi_id` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `kelas_materi`
--

INSERT INTO `kelas_materi` (`id`, `kelas_id`, `materi_id`) VALUES
(1, 3, 5),
(2, 4, 5),
(3, 1, 1),
(4, 1, 2),
(5, 2, 3),
(6, 1, 6),
(7, 3, 4),
(8, 2, 9),
(9, 1, 10);

-- --------------------------------------------------------

--
-- Struktur dari tabel `kelas_soal`
--

CREATE TABLE `kelas_soal` (
  `id` int(10) UNSIGNED NOT NULL,
  `kelas_id` int(10) UNSIGNED NOT NULL,
  `soal_id` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `kelas_soal`
--

INSERT INTO `kelas_soal` (`id`, `kelas_id`, `soal_id`) VALUES
(1, 1, 3),
(2, 2, 3),
(3, 1, 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `materis`
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
-- Dumping data untuk tabel `materis`
--

INSERT INTO `materis` (`id`, `nama`, `deskripsi`, `file`, `created_at`, `updated_at`) VALUES
(1, 'coba tes materiiiii', 'coba tes matericoba tes matericoba tes matericoba tes matericoba tes matericoba tes matericoba tes matericoba tes matericoba tes matericoba tes matericoba tes matericoba tes matericoba tes matericoba tes matericoba tes matericoba tes matericoba tes matericoba tes matericoba tes matericoba tes matericoba tes matericoba tes materi.\r\n\r\ncoba tes matericoba tes matericoba tes matericoba tes matericoba tes matericoba tes matericoba tes matericoba tes matericoba tes matericoba tes matericoba tes matericoba tes matericoba tes matericoba tes matericoba tes matericoba tes matericoba tes matericoba tes matericoba tes matericoba tes matericoba tes matericoba tes matericoba tes matericoba tes matericoba tes matericoba tes matericoba tes matericoba tes matericoba tes matericoba tes matericoba tes matericoba tes matericoba tes matericoba tes matericoba tes matericoba tes matericoba tes matericoba tes matericoba tes matericoba tes matericoba tes matericoba tes matericoba tes matericoba tes matericoba tes matericoba tes matericoba tes matericoba tes matericoba tes matericoba tes matericoba tes matericoba tes matericoba tes matericoba tes materi.\r\n\r\ncoba tes matericoba tes matericoba tes matericoba tes matericoba tes materi.', 'brit.jpg', '2018-12-18 15:05:58', '2019-11-26 04:22:27'),
(2, 'tes tes tes', 'tes testes testes testes testes testes testes testes testes testes testes testes tes', 'brit.jpg', '2018-12-19 05:51:09', '2019-11-26 04:01:38'),
(3, 'materi kelas 8', 'materi kelas 8materi kelas 8materi kelas 8materi kelas 8materi kelas 8materi kelas 8materi kelas 8materi kelas 8materi kelas 8materi kelas 8materi kelas 8materi kelas 8materi kelas 8materi kelas 8materi kelas 8materi kelas 8materi kelas 8materi kelas 8materi kelas 8materi kelas 8materi kelas 8materi kelas 8materi kelas 8materi kelas 8materi kelas 8materi kelas 8materi kelas 8materi kelas 8materi kelas 8materi kelas 8materi kelas 8materi kelas 8materi kelas 8materi kelas 8materi kelas 8materi kelas 8materi kelas 8.\r\n\r\nmateri kelas 8materi kelas 8materi kelas 8materi kelas 8materi kelas 8materi kelas 8materi kelas 8materi kelas 8materi kelas 8materi kelas 8materi kelas 8materi kelas 8materi kelas 8materi kelas 8materi kelas 8materi kelas 8materi kelas 8.', 'brit.jpg', '2018-12-19 05:51:33', '2019-11-26 04:02:02'),
(4, 'kelas kelas99', 'kelas kelas99kelas kelas99kelas kelas99kelas kelas99kelas kelas99kelas kelas99kelas kelas99kelas kelas99kelas kelas99kelas kelas99kelas kelas99kelas kelas99kelas kelas99kelas kelas99kelas kelas99kelas kelas99kelas kelas99kelas kelas99', 'Tabel Binomial.png', '2018-12-19 06:31:58', '2019-11-26 04:03:25'),
(5, 'yaaaa', 'bbsjbwshvhvv', '3145161834-Trisna Hastuti Puspita NIngrum.doc', '2019-01-28 03:12:27', '2019-01-28 03:26:06'),
(6, 'coba tes materiii', 'deewwwwwwwwwwwwwwwwwwwwwwwwwwwwww', 'brit.jpg', '2019-11-26 04:02:30', '2019-11-26 04:02:30'),
(7, 'coba tes materiiisxs', 'xsaaaaaaaaaaaaaaa', 'BinomialProbability(N=40).jpg', '2019-11-26 04:29:11', '2019-11-26 04:29:11'),
(8, 'coba tes materiiisxs', 'xsaaaaaaaaaaaaaaa', 'BinomialProbability(N=40).jpg', '2019-11-26 04:30:21', '2019-11-26 04:30:21'),
(9, 'coba tes materiiidc', 'ceeeeeeeeeeeeee', 'BinomialProbability(N=40).jpg', '2019-11-26 04:30:41', '2019-11-26 04:30:41'),
(10, 'coba tes materiiivfvfgg', 'dddddddddddd', '212922.jpg', '2019-11-28 04:44:46', '2019-11-28 04:44:46');

-- --------------------------------------------------------

--
-- Struktur dari tabel `materi_subject`
--

CREATE TABLE `materi_subject` (
  `id` int(10) UNSIGNED NOT NULL,
  `materi_id` int(10) UNSIGNED NOT NULL,
  `subject_id` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `materi_subject`
--

INSERT INTO `materi_subject` (`id`, `materi_id`, `subject_id`) VALUES
(6, 10, 4);

-- --------------------------------------------------------

--
-- Struktur dari tabel `messages`
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
-- Dumping data untuk tabel `messages`
--

INSERT INTO `messages` (`id`, `from`, `to`, `read`, `text`, `created_at`, `updated_at`) VALUES
(1, 3, 2, 1, 'tes', '2018-12-19 05:27:39', '2018-12-19 05:27:44'),
(2, 2, 3, 0, 'masuk', '2018-12-19 05:27:47', '2018-12-19 05:27:47'),
(3, 5, 7, 0, 'hwyy', '2019-11-27 04:00:34', '2019-11-27 04:00:34'),
(4, 5, 7, 0, 'jhjhh', '2019-11-27 04:00:38', '2019-11-27 04:00:38'),
(5, 5, 7, 0, 'p', '2019-11-27 04:00:40', '2019-11-27 04:00:40'),
(6, 5, 7, 0, 'p', '2019-11-27 04:00:41', '2019-11-27 04:00:41'),
(7, 5, 7, 0, 'p', '2019-11-27 04:00:41', '2019-11-27 04:00:41');

-- --------------------------------------------------------

--
-- Struktur dari tabel `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `migrations`
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
(25, '2019_02_07_095746_gambar_soal', 7),
(30, '2019_11_28_075638_create_subjects_table', 8),
(31, '2019_11_28_080727_soal_subject_table', 8),
(32, '2019_11_28_090254_materi_subject_table', 8),
(33, '2019_11_28_093947_materi_subject_table', 9),
(34, '2019_11_28_094127_materi_subject_table', 10),
(35, '2019_11_28_095134_materi_subject_table', 11);

-- --------------------------------------------------------

--
-- Struktur dari tabel `misis`
--

CREATE TABLE `misis` (
  `id` int(10) UNSIGNED NOT NULL,
  `poin` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `misis`
--

INSERT INTO `misis` (`id`, `poin`, `created_at`, `updated_at`) VALUES
(1, 'Menyediakan dan menyelenggarakan kegiatan belajar bagi siswa dan siswi.', '2018-12-18 05:11:20', '2019-11-17 16:45:38'),
(2, 'Melatih, membimbing dan memotivasi siswa-siswi dalam berkarya serta menghasilkan karya yang bermanfaat.', '2018-12-18 05:11:33', '2018-12-18 05:11:33'),
(3, 'Menanamkan dan mengajarkan sikap berbagi kepada sesama manusia.', '2018-12-18 05:11:45', '2018-12-18 05:11:45');

-- --------------------------------------------------------

--
-- Struktur dari tabel `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `pendaftarans`
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
-- Dumping data untuk tabel `pendaftarans`
--

INSERT INTO `pendaftarans` (`id`, `nama`, `jenis_kelamin`, `tempat_lahir`, `tanggal_lahir`, `alamat`, `no_hp`, `e_mail`, `asal_sekolah`, `kelas`, `created_at`, `updated_at`) VALUES
(1, 'M FATHAN QORIIBA', 'Laki-laki', 'Bogor', '1998-02-09', 'Bekasi', '0812341293', 'mfathanqoriba@gmail.com', 'SMAN 5 Bekasi', '12 MIA', '2018-12-18 11:07:03', '2018-12-18 11:07:03'),
(2, 'MARK ZUCKERBERG', 'Laki-laki', 'Bogor', '2010-03-03', 'rawamangun', '0812349213123', 'mark@ymail.com', 'SMAN 5 Bekasi', 'Kelas 1', '2018-12-19 06:23:30', '2018-12-19 06:23:30');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pertanyaans`
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
-- Dumping data untuk tabel `pertanyaans`
--

INSERT INTO `pertanyaans` (`id`, `nama`, `email`, `subject`, `message`, `created_at`, `updated_at`) VALUES
(1, 'M Fathan Qoriiba', 'mfathanqoriiba@gmail.com', 'tes pesan', 'tes pesantes pesantes pesantes pesantes pesantes pesantes pesan.', '2018-12-18 10:50:28', '2018-12-18 10:50:28');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pilihans`
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
-- Dumping data untuk tabel `pilihans`
--

INSERT INTO `pilihans` (`id`, `soal`, `gambar`, `opsiA`, `opsiB`, `opsiC`, `opsiD`, `opsiBenar`, `pembahasan`, `gambar_pembahasan`, `soal_id`, `created_at`, `updated_at`) VALUES
(1, 'jawabannya a', '', 'benet', 'sa', 'la', 'h', 'a', 'karna yang bener aaaaaa', '', 1, '2018-12-19 06:25:32', '2019-11-27 03:59:43'),
(2, 'ASDvb', NULL, 'a', 'b', 'c', 'd', 'a', 'asd', NULL, 2, '2018-12-29 01:52:17', '2018-12-29 01:52:17'),
(3, 'vhvhv', NULL, '1', '2', '3', '4', 'a', 'gg', NULL, 3, '2019-01-28 03:16:11', '2019-01-28 03:16:11'),
(4, 'adwa', '', 'awda', 'daf', 'fs', 'l,', 'a', 'ok', '', 1, '2019-02-07 04:45:18', '2019-02-07 14:30:34'),
(5, 'mkmkm', '', 'kk', 'kk', 'kk', 'kk', 'a', 'kk', NULL, 1, '2019-02-07 06:44:45', '2019-02-07 06:44:45'),
(6, 'dawdaw', '', 'awda', 'dwada', 'wdaw', 'dwadwa', 'a', 'wdaw', '', 1, '2019-02-07 06:47:28', '2019-02-07 14:29:59'),
(7, 'stdt', '', 'gg', 'yy', 'yy', 'yy', 'a', 'yy', '', 1, '2019-02-07 14:31:51', '2019-02-07 14:31:51'),
(8, 'jhhjhj', '', 'ghhj', 'nn', 'll', 'iii', 'a', 'ghh', '', 1, '2019-02-07 14:33:53', '2019-02-07 14:33:53');

-- --------------------------------------------------------

--
-- Struktur dari tabel `profils`
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
-- Dumping data untuk tabel `profils`
--

INSERT INTO `profils` (`id`, `email`, `telepon`, `alamat`, `waktu_kerja`, `visi`, `tentang_kami`, `pendahuluan`, `sejarah`, `created_at`, `updated_at`) VALUES
(1, 'terasdiskusi@gmail.com', '0818100035', 'Jln haji Mean raya no 96E, 17411, Bekasi, Jawa Barat, Indonesia', 'Senin-Jum\'at 09:00 - 17:00', 'Menjadi yayasan yang unggul dan amanah dalam belajar, berkarya, dan berbagi.', 'Yayasan Teras Diskusi merupakan sebuah lembaga yang bergerak dibidang sosial. Lembaga sosial ini merupakan sebuah lembaga yang berawal dari sebuah diskusi kecil disebuah teras rumah yang membahas tentang mata pelajaran di sekolah.\r\n\r\nKegiatan Yayasan Teras Diskusi ini antara lain: bimbingan belajar, bakti sosial, buka puasa Bersama, pendidikan dan latihan keterampilan, belajar bisnis dan pemeriksaan kesehatan gratis. Yayasan ini bersifat non-profit, dalam artian sang owner tidak mengambil keuntungan dari kas yayasan yang ada.\r\n.', 'Yayasan Teras Diskusi merupakan sebuah lembaga yang bergerak dibidang sosial. Lembaga sosial ini merupakan sebuah lembaga yang berawal dari sebuah diskusi kecil disebuah teras rumah yang membahas tentang mata pelajaran di sekolah.', 'Berawal dari diskusi kecil disebuah teras rumah. Membahas tentang mata pelajaran di sekolah. berlanjut menjadi kegiatan rutin bagi para siswa untuk berdiskusi banyak hal, mulai dari pelajaran di sekolah, pengajian, belajar bisnis, prakarsa dan ketrampilan, sampai dengan belajar terapi diri.\r\n\r\nYayasan teras diskusi didirikan pada 11 maret 2011. Kemudian secara legal disahkan oleh notaris. Pendiri sekaligus ketua dewan pembina yayasan ialah Arief Purnama, S.Pd. ketua harian saat itu ialah Ahmad Firdaus, S.Pd. Sekretaris Adee Setiawan, S.Pd yang saat ini menjabat Ketua yayasan menggantikan Ahmad Firdaus, S.Pd. adapun bendahara pertama ialah Anissa dan sekarang dijabat oleh Siti Marhamah, SE.', '2018-12-17 17:00:00', '2019-11-17 07:58:55');

-- --------------------------------------------------------

--
-- Struktur dari tabel `soals`
--

CREATE TABLE `soals` (
  `id` int(10) UNSIGNED NOT NULL,
  `nm_soal` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `soals`
--

INSERT INTO `soals` (`id`, `nm_soal`, `created_at`, `updated_at`) VALUES
(1, 'coba tes soal 111111', '2018-12-18 16:07:03', '2019-11-26 04:51:07'),
(2, 'aaaa', '2018-12-29 01:52:01', '2018-12-29 01:52:01'),
(3, 'mat', '2019-01-28 03:15:41', '2019-01-28 03:15:41');

-- --------------------------------------------------------

--
-- Struktur dari tabel `soal_subject`
--

CREATE TABLE `soal_subject` (
  `id` int(10) UNSIGNED NOT NULL,
  `soal_id` int(10) UNSIGNED NOT NULL,
  `subject_id` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `soal_user`
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
-- Dumping data untuk tabel `soal_user`
--

INSERT INTO `soal_user` (`id`, `user_id`, `soal_id`, `nilai`, `created_at`, `updated_at`) VALUES
(1, 2, 1, 100, '2018-12-19 06:26:15', '2018-12-19 06:26:15'),
(2, 2, 2, 100, '2018-12-29 02:10:18', '2018-12-29 02:10:18'),
(3, 7, 1, 100, '2019-11-27 09:27:27', '2019-11-27 09:27:27'),
(4, 7, 1, 100, '2019-11-27 09:43:33', '2019-11-27 09:43:33'),
(5, 7, 1, 100, '2019-11-27 09:44:25', '2019-11-27 09:44:25'),
(6, 7, 1, 100, '2019-11-27 09:44:56', '2019-11-27 09:44:56'),
(7, 7, 1, 100, '2019-11-27 09:47:55', '2019-11-27 09:47:55'),
(8, 7, 1, 100, '2019-11-27 09:48:12', '2019-11-27 09:48:12'),
(9, 7, 1, 100, '2019-11-27 09:48:30', '2019-11-27 09:48:30'),
(10, 7, 1, 100, '2019-11-27 09:49:23', '2019-11-27 09:49:23'),
(11, 7, 1, 100, '2019-11-27 09:49:43', '2019-11-27 09:49:43'),
(12, 7, 1, 100, '2019-11-27 09:49:57', '2019-11-27 09:49:57'),
(13, 7, 1, 100, '2019-11-27 09:51:14', '2019-11-27 09:51:14'),
(14, 7, 1, 100, '2019-11-27 09:51:49', '2019-11-27 09:51:49'),
(15, 7, 1, 100, '2019-11-27 09:52:53', '2019-11-27 09:52:53'),
(16, 7, 1, 100, '2019-11-27 09:53:05', '2019-11-27 09:53:05'),
(17, 7, 1, 100, '2019-11-27 09:53:21', '2019-11-27 09:53:21'),
(18, 7, 1, 100, '2019-11-27 09:53:33', '2019-11-27 09:53:33'),
(19, 7, 1, 100, '2019-11-27 09:54:00', '2019-11-27 09:54:00'),
(20, 7, 1, 100, '2019-11-27 09:54:16', '2019-11-27 09:54:16'),
(21, 7, 1, 100, '2019-11-27 09:54:34', '2019-11-27 09:54:34'),
(22, 7, 1, 100, '2019-11-27 09:54:53', '2019-11-27 09:54:53'),
(23, 7, 1, 100, '2019-11-27 09:55:58', '2019-11-27 09:55:58'),
(24, 7, 1, 100, '2019-11-29 10:15:36', '2019-11-29 10:15:36');

-- --------------------------------------------------------

--
-- Struktur dari tabel `subjects`
--

CREATE TABLE `subjects` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `subjects`
--

INSERT INTO `subjects` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'Matematika', '2019-11-28 03:36:55', '2019-11-28 03:41:45'),
(2, 'IPA', '2019-11-28 03:41:35', '2019-11-28 03:41:35'),
(3, 'Bahasa Inggris', '2019-11-28 03:41:56', '2019-11-28 03:41:56'),
(4, 'Bahasa Indonesia', '2019-11-28 03:42:06', '2019-11-28 03:42:06');

-- --------------------------------------------------------

--
-- Struktur dari tabel `testimonis`
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
-- Dumping data untuk tabel `testimonis`
--

INSERT INTO `testimonis` (`id`, `nama`, `status`, `pesan`, `foto`, `created_at`, `updated_at`) VALUES
(1, 'M FATHAN QORIIBA', 'Siswa SMAN5 Bekasi', 'Belajar disini mantap', 'LOGO.png', '2018-12-18 05:02:04', '2018-12-18 05:03:35'),
(2, 'Siapa ini', 'Manusia', 'Teras Diskusi memang oke', 'a.jpg', '2018-12-18 05:03:01', '2018-12-18 05:03:01');

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
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
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `kelas_id`, `role`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Admin', 'terasdiskusi@gmail.com', NULL, 2, '$2y$10$bZltwhb8b2KzZJ1Y7xNQIuy1FNNWCPAIjtgp90uLwx4vabxZovrbS', 'WkBo9dyeSsJYQ6gkzdJ4zH8pA7qxgfXef7aXnGvpOR0PyRsDxUjUwnKvs64C', '2018-12-18 04:53:30', '2018-12-18 04:53:30'),
(2, 'M Fathan Qoriiba', 'terserahfathan@gmail.com', 3, 1, '$2y$10$XJEWMGH.lrD4lsrn.KuQEe2puDhl77KMz6SUSZ.LvTimwa0HZ0hhm', 'TqaiAMple48nXwr2QZvtRHsJJ61r6CPOXoBw4GCBrTKularZCZckm7PbGr1j', '2018-12-18 04:57:33', '2018-12-18 04:57:33'),
(5, 'Trisna Puspita', 'trisnapspt@gmail.com', NULL, 3, '$2y$10$6TT.Id.Veaaowkies23TeeoZkyvkoIeLHkz/sZnPpDMR4Jpaqozmy', 'zdXyIJf98WBJ5BjAKXRCIUJM9i6LH8f3Wj7qQ7jgJ0HDTMAOzNHjGyfxWHMY', '2019-11-07 07:32:53', '2019-11-07 07:32:53'),
(7, 'Dyah Ayu F', 'dyaah@gmail.com', 1, 1, '$2y$10$fk/bKenxRAknhgqYLfZ8cu0RHbORd2br2tuCU/9Fvoa4341kH7asS', 'AsRzJwm4JawDu0013G4gDhbNM8Lm9d03L9tXH1BobVoxFCj59XwxNpEEHhz8', '2019-11-16 13:22:21', '2019-11-16 13:22:21'),
(8, 'Dina', 'dina@gmail.com', NULL, 4, '$2y$10$DQ3hkSf.v7IxBAgCTdfxU.28uActSCmdhOVa7vBEYsqaa/YZgS45O', 'ZYn2J2OsZ4I7QxGXcEmh3OJrOniTjCjVO0zxxvEshueBakHBjSQBaAuSnJSD', '2019-11-24 01:18:02', '2019-11-24 01:18:02');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `beritas`
--
ALTER TABLE `beritas`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `kelass`
--
ALTER TABLE `kelass`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `kelas_materi`
--
ALTER TABLE `kelas_materi`
  ADD PRIMARY KEY (`id`),
  ADD KEY `kelas_materi_kelas_id_foreign` (`kelas_id`),
  ADD KEY `kelas_materi_materi_id_foreign` (`materi_id`);

--
-- Indeks untuk tabel `kelas_soal`
--
ALTER TABLE `kelas_soal`
  ADD PRIMARY KEY (`id`),
  ADD KEY `kelas_soal_kelas_id_foreign` (`kelas_id`),
  ADD KEY `kelas_soal_soal_id_foreign` (`soal_id`);

--
-- Indeks untuk tabel `materis`
--
ALTER TABLE `materis`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `materi_subject`
--
ALTER TABLE `materi_subject`
  ADD PRIMARY KEY (`id`),
  ADD KEY `materi_subject_materi_id_foreign` (`materi_id`),
  ADD KEY `materi_subject_subject_id_foreign` (`subject_id`);

--
-- Indeks untuk tabel `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `misis`
--
ALTER TABLE `misis`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indeks untuk tabel `pendaftarans`
--
ALTER TABLE `pendaftarans`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `pertanyaans`
--
ALTER TABLE `pertanyaans`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `pilihans`
--
ALTER TABLE `pilihans`
  ADD PRIMARY KEY (`id`),
  ADD KEY `pilihans_soal_id_foreign` (`soal_id`);

--
-- Indeks untuk tabel `profils`
--
ALTER TABLE `profils`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `soals`
--
ALTER TABLE `soals`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `soal_subject`
--
ALTER TABLE `soal_subject`
  ADD PRIMARY KEY (`id`),
  ADD KEY `soal_subject_soal_id_foreign` (`soal_id`),
  ADD KEY `soal_subject_subject_id_foreign` (`subject_id`);

--
-- Indeks untuk tabel `soal_user`
--
ALTER TABLE `soal_user`
  ADD PRIMARY KEY (`id`),
  ADD KEY `soal_user_user_id_foreign` (`user_id`),
  ADD KEY `soal_user_soal_id_foreign` (`soal_id`);

--
-- Indeks untuk tabel `subjects`
--
ALTER TABLE `subjects`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `subjects_name_unique` (`name`);

--
-- Indeks untuk tabel `testimonis`
--
ALTER TABLE `testimonis`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`),
  ADD KEY `users_kelas_id_foreign` (`kelas_id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `beritas`
--
ALTER TABLE `beritas`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `kelass`
--
ALTER TABLE `kelass`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `kelas_materi`
--
ALTER TABLE `kelas_materi`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT untuk tabel `kelas_soal`
--
ALTER TABLE `kelas_soal`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `materis`
--
ALTER TABLE `materis`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT untuk tabel `materi_subject`
--
ALTER TABLE `materi_subject`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `messages`
--
ALTER TABLE `messages`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT untuk tabel `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT untuk tabel `misis`
--
ALTER TABLE `misis`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `pendaftarans`
--
ALTER TABLE `pendaftarans`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `pertanyaans`
--
ALTER TABLE `pertanyaans`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `pilihans`
--
ALTER TABLE `pilihans`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT untuk tabel `profils`
--
ALTER TABLE `profils`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `soals`
--
ALTER TABLE `soals`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `soal_subject`
--
ALTER TABLE `soal_subject`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `soal_user`
--
ALTER TABLE `soal_user`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT untuk tabel `subjects`
--
ALTER TABLE `subjects`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `testimonis`
--
ALTER TABLE `testimonis`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `kelas_materi`
--
ALTER TABLE `kelas_materi`
  ADD CONSTRAINT `kelas_materi_kelas_id_foreign` FOREIGN KEY (`kelas_id`) REFERENCES `kelass` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `kelas_materi_materi_id_foreign` FOREIGN KEY (`materi_id`) REFERENCES `materis` (`id`) ON DELETE CASCADE;

--
-- Ketidakleluasaan untuk tabel `kelas_soal`
--
ALTER TABLE `kelas_soal`
  ADD CONSTRAINT `kelas_soal_kelas_id_foreign` FOREIGN KEY (`kelas_id`) REFERENCES `kelass` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `kelas_soal_soal_id_foreign` FOREIGN KEY (`soal_id`) REFERENCES `soals` (`id`) ON DELETE CASCADE;

--
-- Ketidakleluasaan untuk tabel `materi_subject`
--
ALTER TABLE `materi_subject`
  ADD CONSTRAINT `materi_subject_materi_id_foreign` FOREIGN KEY (`materi_id`) REFERENCES `materis` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `materi_subject_subject_id_foreign` FOREIGN KEY (`subject_id`) REFERENCES `subjects` (`id`) ON DELETE CASCADE;

--
-- Ketidakleluasaan untuk tabel `pilihans`
--
ALTER TABLE `pilihans`
  ADD CONSTRAINT `pilihans_soal_id_foreign` FOREIGN KEY (`soal_id`) REFERENCES `soals` (`id`) ON DELETE CASCADE;

--
-- Ketidakleluasaan untuk tabel `soal_subject`
--
ALTER TABLE `soal_subject`
  ADD CONSTRAINT `soal_subject_soal_id_foreign` FOREIGN KEY (`soal_id`) REFERENCES `soals` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `soal_subject_subject_id_foreign` FOREIGN KEY (`subject_id`) REFERENCES `subjects` (`id`) ON DELETE CASCADE;

--
-- Ketidakleluasaan untuk tabel `soal_user`
--
ALTER TABLE `soal_user`
  ADD CONSTRAINT `soal_user_soal_id_foreign` FOREIGN KEY (`soal_id`) REFERENCES `soals` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `soal_user_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Ketidakleluasaan untuk tabel `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `users_kelas_id_foreign` FOREIGN KEY (`kelas_id`) REFERENCES `kelass` (`id`) ON DELETE SET NULL;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
