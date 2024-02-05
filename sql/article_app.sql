-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 05 Jul 2022 pada 02.31
-- Versi server: 10.4.21-MariaDB
-- Versi PHP: 8.0.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `article_app`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `activities`
--

CREATE TABLE `activities` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `excerpt` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `body` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `published_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `activities`
--

INSERT INTO `activities` (`id`, `title`, `slug`, `image`, `excerpt`, `body`, `published_at`, `created_at`, `updated_at`) VALUES
(1, 'Ifthar Jamai', 'ifthar-jama-i', 'ifthar jamai.jpg', 'Menutup rangkaian program Ramadhan 1443 H kemarin, telah dilaksanakan Ifthar Jamai bagi siswa KB dan TKIT Luqmanul Hakim.Acara yang dilaksanakan tgl 21 April 2022 ini dimeriahkan oleh Ka Herman, yang...', '<div>Menutup rangkaian program Ramadhan 1443 H kemarin, telah dilaksanakan Ifthar Jamai bagi siswa KB dan TKIT Luqmanul Hakim.<br>Acara yang dilaksanakan tgl 21 April 2022 ini dimeriahkan oleh Ka Herman, yang menghibur anak-anak melalui dongeng nya sambil menunggu waktu berbuka.&nbsp;</div>', NULL, '2022-06-27 02:26:57', '2022-06-27 02:26:57'),
(2, 'Pengabdian Masyarakat', 'pengabdian-masyarakat', 'pengabdian masyarakat.jpg', 'Alhamdulillah pada tanggal 22 April 2022, telah tersalurkan kepada warga sekitar sekolah yang berhak sebanyak 52 paket sembako dan 74 paket anak yang terkumpul dari donasi ayah bunda orang tua siswa K...', '<div>Alhamdulillah pada tanggal 22 April 2022, telah tersalurkan kepada warga sekitar sekolah yang berhak sebanyak 52 paket sembako dan 74 paket anak yang terkumpul dari donasi ayah bunda orang tua siswa Kober &amp; TKIT Luqmanul Hakim.<br>&nbsp;<br>Kami mengucapkan terima kasih banyak atas kerjasama dan partisipasi ayah bunda semua, semoga rizki yang diberikan mendapat balasan berlipat dari Allah SWT. Amiin</div>', NULL, '2022-06-27 02:26:57', '2022-06-27 02:26:57'),
(3, 'Field Trip', 'field-trip', 'field trip.jpg', 'Alhamdulillah akhirnya kita field trip offline lagi..&nbsp;Field trip kali pertama ini ke Bandung zoological Garden. Disini semuanya seru-seruan dengan teman dan ibu guru. Berlari, tertawa dan tentuny...', '<div>Alhamdulillah akhirnya kita field trip offline lagi..<br>&nbsp;<br>Field trip kali pertama ini ke Bandung zoological Garden. Disini semuanya seru-seruan dengan teman dan ibu guru. Berlari, tertawa dan tentunya melihat berbagai satwa ciptaan Allah subhanallah wa taala..<br>&nbsp;<br>Wah..maasyaallah ciptaan Allah sungguh luar biasa.&nbsp;</div>', NULL, '2022-06-27 02:26:57', '2022-06-27 02:26:57');

-- --------------------------------------------------------

--
-- Struktur dari tabel `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `categories`
--

INSERT INTO `categories` (`id`, `name`, `slug`, `created_at`, `updated_at`) VALUES
(1, 'Kegiatan', 'kegiatan', '2022-06-27 02:26:57', '2022-06-27 02:26:57'),
(2, 'Prestasi', 'prestasi', '2022-06-27 02:26:57', '2022-06-27 02:26:57');

-- --------------------------------------------------------

--
-- Struktur dari tabel `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2022_03_30_084552_create_posts_table', 1),
(6, '2022_03_30_093726_create_categories_table', 1),
(7, '2022_03_31_140817_add_is_admin_to_users_table', 1),
(8, '2022_03_31_140817_add_position_to_users_table', 1),
(9, '2022_04_05_031736_create_profiles_table', 1),
(10, '2022_04_05_221443_add_is_active_to_users_table', 1),
(11, '2022_04_06_144033_create_activities_table', 1),
(12, '2022_04_06_145524_create_registrations_table', 1),
(13, '2022_04_06_145618_create_programs_table', 1),
(14, '2022_04_09_061104_create_testimonials_table', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `posts`
--

CREATE TABLE `posts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `excerpt` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `body` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `published_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `category_id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `posts`
--

INSERT INTO `posts` (`id`, `title`, `slug`, `image`, `excerpt`, `body`, `published_at`, `created_at`, `updated_at`, `category_id`, `user_id`) VALUES
(1, 'Trial Class', 'trial-class', 'trial class.jpg', 'Tanggal 4 dan 5 Maret 2022 kemarin kami mengadakan acara trial class lho..ayo siapa yang putra/putrinya ikutan?🤭🥰&nbsp;Trial class tahun ini mengusung tema tentang binatang peliharaan dengan judul \"Mi...', '<div>Tanggal 4 dan 5 Maret 2022 kemarin kami mengadakan acara trial class lho..ayo siapa yang putra/putrinya ikutan?🤭🥰<br>&nbsp;<br>Trial class tahun ini mengusung tema tentang binatang peliharaan dengan judul \"Misteri makanan Kici\".<br>&nbsp;<br>Disini semua peserta trial class diajak berpetualang mengenal lebih jauh tentang kelinci sekaligus mengajak peserta trial class semua untuk peduli dengan lingkungan sekitar terutama hutan sebagai habitat para hewan.<br>waahh ...pokoknya seru deh ayah/bunda. Soalnya rangkaian acara trial class kali ini dilakukan secara online dan offline.&nbsp;</div>', NULL, '2022-06-27 02:26:57', '2022-06-27 02:26:57', 1, 1),
(2, 'Lomba Antar TK', 'lomba-antar-tk', 'lomba antar tk.jpg', 'Alhamdulillah pada ajang lomba antar TK se Bandung Raya yang diselenggarakan oleh SD Terpadu Krida Nusantara pada bulan November 2021, siswa siswi TKIT Luqmanul Hakim mendapatkan kesempatan menjadi ju...', '<div>Alhamdulillah pada ajang lomba antar TK se Bandung Raya yang diselenggarakan oleh SD Terpadu Krida Nusantara pada bulan November 2021, siswa siswi TKIT Luqmanul Hakim mendapatkan kesempatan menjadi juara :<br>- Juara 1 lomba tahfizh<br>- Juara 2 lomba tahfizh<br>- Juara harapan 1 lomba tahfizh<br>- Juara harapan 1 lomba adzan<br>&nbsp;<br>Selamat kepada anak2, semoga semakin menambah motivasi dan semangat untuk menambah hafalan, berkarya dan berprestasi&nbsp;</div>', NULL, '2022-06-27 02:26:57', '2022-06-27 02:26:57', 2, 2),
(3, 'Akreditasi', 'akreditasi', 'akreditasi.jpg', 'Setelah melewati serangkaian tes seleksi, TKIT Luqmanul Hakim terpilih sebagai Satuan Pendidikan Pelaksana Program Sekolah Penggerak Angkatan II.Kami bersyukur atas kesempatan ini. Semoga melalui prog...', '<div>Setelah melewati serangkaian tes seleksi, TKIT Luqmanul Hakim terpilih sebagai Satuan Pendidikan Pelaksana Program Sekolah Penggerak Angkatan II.<br>Kami bersyukur atas kesempatan ini. Semoga melalui program ini, kami dapat memberikan pendidikan yang lebih baik untuk membantu perkembangan anak-anak didik kami tercinta.</div>', NULL, '2022-06-27 02:26:57', '2022-06-29 20:20:17', 2, 3),
(4, 'Tamat Ummi', 'tamat-ummi', 'tamat ummi.jpg', 'Selamat untuk siswa-siswi yang telah menamatkan Ummi jilid 6.Semoga terus istiqamah bersama Al-Quran', '<div>Selamat untuk siswa-siswi yang telah menamatkan Ummi jilid 6.</div><div>Semoga terus istiqamah bersama Al-Quran<br><br></div>', NULL, '2022-06-27 02:26:57', '2022-06-27 02:26:57', 1, 1),
(5, 'cobaa', 'coba', 'coba.jpg', 'coba', '<div>coba</div>', NULL, '2022-06-29 19:34:06', '2022-06-29 20:19:51', 1, 3);

-- --------------------------------------------------------

--
-- Struktur dari tabel `profiles`
--

CREATE TABLE `profiles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `image_satu` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image_dua` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image_tiga` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `profil` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `sejarah` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `visi` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `misi` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `alamat` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `telp` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `whatsapp` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `link_whatsapp` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `link_facebook` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `link_instagram` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `link_youtube` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `link_embed` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `profiles`
--

INSERT INTO `profiles` (`id`, `image_satu`, `image_dua`, `image_tiga`, `profil`, `sejarah`, `visi`, `misi`, `alamat`, `telp`, `email`, `whatsapp`, `link_whatsapp`, `link_facebook`, `link_instagram`, `link_youtube`, `link_embed`, `created_at`, `updated_at`) VALUES
(1, 'image satu.png', 'image dua.jpg', 'image tiga.jpg', '<p>Sekolah yang mencoba menerapkan pendekatan penyelenggaraan yang memadukan <b>pendidikan umum</b> dan <b>pendidikan agama</b> menjadi satu jalinan kurikulum. Dengan pendekatan ini, semua bidang pengembangan dan semua kegiatan sekolah tidak lepas dari <b>bingkai ajaran dan pesan nilai Islam.</b></p>', '<p><b>Yayasan Luqmanul Hakim</b> merintis penyelenggaraan lembaga pendidikan formal dengan mendirikan Taman Kanak-kanak Islam Terpadu (TKIT) Luqmanul Hakim pada tahun 1995 dengan konsep pembelajaran fullday. Ada 3 orang tokoh muda yang membidani berdirinya <b>TKIT dan SDIT Luqmanul Hakim</b> saat itu, yaitu: <b>Ir. H. Ridho Budiman Utama, Ir. Arief Setiansyah</b> dan <b>Ir. Triska Hendriawan.</b></p>', '<p>Terbinanya Generasi <b>Qurani, Cerdas, Pembelajar.</b></p>', '<p>1. Membingkai setiap aktivitas pendidikan dengan <b>nilai-nilai Al-Quran.</b></p>\n            <p>2. Menyelenggarakan pendidikan dan pengajaran yang menyenangkan, aktif, dan kreatif dalam  mengembangkan potensi <b>aqliyah, ruhiyah</b> dan <b>jasadiyah dalam suasana Islami.</b></p>\n            <p>3. Membangun kerjasama dengan orang tua siswa dalam mengoptimalkan tumbuh kembang anak.</p>\n            <p>4. Menciptakan lingkungan sekolah yang mendukung terwujudnya masyarakat pembelajar.</p>', '<p><b>Jl. Parakan Arum No. 17 RT. 01 RW 10</b>\n            Kelurahan Batununggal Kecamatan Bandung Kidul \n            Kota Bandung</p>', '022-7501233', 'tkitlh@gmail.com', '081222259986', 'https://api.whatsapp.com/send?phone=081222259986', 'https://www.facebook.com/KoberTKITLuqmanulHakim/', 'https://www.instagram.com/tkitluqmanulhakim/?hl=en', 'https://www.youtube.com/channel/UC3bGOIst_doFPx5zu-3Bc-Q', 'https://www.youtube.com/embed/Jfrjeg26Cwk', '2022-06-27 02:26:57', '2022-06-27 02:26:57');

-- --------------------------------------------------------

--
-- Struktur dari tabel `programs`
--

CREATE TABLE `programs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `excerpt` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `body` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `published_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `programs`
--

INSERT INTO `programs` (`id`, `title`, `slug`, `image`, `excerpt`, `body`, `published_at`, `created_at`, `updated_at`) VALUES
(1, 'TTQ Ummi', 'ttq-ummi', 'ttq ummi.jpg', 'TTQ ummi merupakan kegiatan rutin yang diadakan di sekolah...', '<div>TTQ ummi merupakan kegiatan rutin yang diadakan di sekolah</div>', NULL, '2022-06-27 02:26:57', '2022-06-27 02:26:57'),
(2, 'Sentra', 'sentra', 'sentra.jpg', 'Sentra Persiapan, Sentra IMTAQ (Iman dan Taqwa), Sentra Balok, Sentra Main Peran...', '<div>1. Sentra Persiapan</div><div>2. Sentra IMTAQ (Iman dan Taqwa)</div><div>3. Sentra Balok</div><div>4. Sentra Main Peran</div><div>5. Sentra Bahan Alam</div><div>6. Sentra MOT (Musik dan Olah Tubuh)</div><div>7. Sentra Seni</div>', NULL, '2022-06-27 02:26:57', '2022-06-27 02:26:57'),
(3, 'Inkul (intrakurikuler)', 'inkul-intrakurikuler', 'inkul.jpg', 'Futsal, Angklung, Perkusi...', '<div>1. Futsal</div><div>2. Angklung</div><div>3. Perkusi</div><div>4. Gerak dan Lagu</div><div>5. Mobis</div>', NULL, '2022-06-27 02:26:57', '2022-06-27 02:26:57');

-- --------------------------------------------------------

--
-- Struktur dari tabel `registrations`
--

CREATE TABLE `registrations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `excerpt` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `body` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `published_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `registrations`
--

INSERT INTO `registrations` (`id`, `title`, `slug`, `image`, `excerpt`, `body`, `published_at`, `created_at`, `updated_at`) VALUES
(1, 'Pendaftaran Tahun Pelajaran 2022-2023', 'pendaftaran-tahun-pelajaran-2022-2023', 'registrasi.jpg', 'KOBER &amp; TKIT Luqmanul HakimIntegrated Islamic SchoolOpen for Registration!&nbsp;&nbsp;Dibuka pendaftaran Tahun Pelajaran 2022-2023:🏫 Kelompok Bermain:Kelas Alif: Usia 2-3 thnKelas Ba: Usia 3-4 thn...', '<div>KOBER &amp; TKIT Luqmanul Hakim</div><div>Integrated Islamic School</div><div>Open for Registration!&nbsp;</div><div>&nbsp;</div><div>Dibuka pendaftaran Tahun Pelajaran 2022-2023:</div><div>🏫 Kelompok Bermain:</div><div>Kelas Alif: Usia 2-3 thn</div><div>Kelas Ba: Usia 3-4 thn</div><div>&nbsp;</div><div>🏫 Taman Kanak-kanak:</div><div>TK A: Usia 4-5 thn</div><div>TK B: Usia 5-6 thn</div><div>&nbsp;</div><div>Kami mengajak Ayah dan Bunda untuk bersama memberikan pendidikan terbaik untuk si kecil. Pendidikan yang menyenangkan, tidak lepas dari nilai-nilai Islam dan tentunya sesuai dengan tahapan perkembangannya.</div><div>&nbsp;</div><div>Yuk segera daftarkan putra/i tercinta!&nbsp;</div><div>&nbsp;</div><div>Dapatkan GRATIS uang pendaftaran dan DISKON pangkal untuk registrasi di bulan November s/d Januari 2022.&nbsp;</div>', NULL, '2022-06-27 02:26:57', '2022-06-27 02:26:57');

-- --------------------------------------------------------

--
-- Struktur dari tabel `testimonials`
--

CREATE TABLE `testimonials` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `body` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `testimonials`
--

INSERT INTO `testimonials` (`id`, `name`, `status`, `image`, `body`, `created_at`, `updated_at`) VALUES
(1, 'Chandra Wahyuni, S.Pd.', 'Kepala TK', 'chandra.jpg', 'Mengajar disini sangat asyik dan seru', '2022-06-27 02:26:57', '2022-06-27 02:26:57'),
(2, 'Ane Januarti Dewi', 'Bendahara', 'ane.jpg', 'Mengajar disini sangat asyik dan seru', '2022-06-27 02:26:57', '2022-06-27 02:26:57'),
(3, 'Trya Febrianty, S.Pd.', 'Guru Kelas A', 'trya.jpg', 'Mengajar disini sangat asyik dan seru', '2022-06-27 02:26:57', '2022-06-27 02:26:57'),
(4, 'Ria Komalasari', 'Guru Kober', 'ria.jpg', 'Mengajar disini sangat asyik dan seru', '2022-06-27 02:26:57', '2022-06-27 02:26:57'),
(5, 'Fithri Wihdah. H, S.Pd.', 'Guru Kelas B1', 'fithri.jpg', 'Mengajar disini sangat asyik dan seru', '2022-06-27 02:26:57', '2022-06-27 02:26:57');

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `username` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `is_admin` tinyint(1) NOT NULL DEFAULT 0,
  `position` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `is_active` tinyint(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `name`, `username`, `image`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`, `is_admin`, `position`, `is_active`) VALUES
(1, 'Sri Ratna Chodijah, M.Pd.', 'sriratna', '', 'sriratnaa@gmail.com', NULL, '$2y$10$fC/g5F/Kh/Fp0ttw/4JQRurlKkVG4Grp3mf/KeGzztuY9Xz5/cLZ6', NULL, '2022-06-27 02:26:56', '2022-06-29 19:27:11', 0, 'Pengawas', 1),
(2, 'Choerunnisa, S.Psi.', 'choerunnisa', '', 'choerunnisa@gmail.com', NULL, '$2y$10$PDndRA4J/pMyYq6dWQSce.AQf0cKHRQgpOHHF52tGqK0JdKeyZ4le', NULL, '2022-06-27 02:26:56', '2022-06-27 02:26:56', 0, 'Konselor', 1),
(3, 'Chandra Wahyuni, S.Pd.', 'chandrawahyuni', 'chandra.jpg', 'chandra@gmail.com', NULL, '$2y$10$h4/Wb2cNLn.IJDuf/EsiEui1u70to78jBQ/7NatqsRBtVYVn/E5zK', NULL, '2022-06-27 02:26:56', '2022-06-27 02:26:56', 1, 'Kepala TK', 1),
(4, 'Darti, S.Pd.', 'darti', '', 'darti@gmail.com', NULL, '$2y$10$3hzKUQFT7AJOvLjGmxfc1uVlJlSdghX3DJ/AzyHjlKwdTJJrc0R86', NULL, '2022-06-27 02:26:56', '2022-06-27 02:26:56', 0, 'PKS', 1),
(5, 'Ane Januarti Dewi', 'anejanuarti', 'ane.jpg', 'anejanuarti@gmail.com', NULL, '$2y$10$OYGRHqORQW5/8vCuguEOve8v/MkwH5Z/1H2X02/Q8BtS7a.UMFL0q', NULL, '2022-06-27 02:26:56', '2022-06-27 02:26:56', 0, 'Bendahara', 1),
(6, 'Iis Halimah, S.Pd.', 'iishalimah', 'iis.jpg', 'iishalimah@gmail.com', NULL, '$2y$10$nJBB156XYrWlCNAmLziBseGpNPxRYdOc1195djuqDw19ZG00bPj8q', NULL, '2022-06-27 02:26:56', '2022-06-27 02:26:56', 0, 'Guru Kober', 1),
(7, 'Ria Komalasari', 'riakomalasari', 'ria.jpg', 'riakomalasari@gmail.com', NULL, '$2y$10$vOjAaBW1JYuYcgRJyMp2wez8raQfY5gTU7J6fSMlFcX0pb3wqITda', NULL, '2022-06-27 02:26:56', '2022-06-27 02:26:56', 0, 'Guru Kober', 1),
(8, 'Trya Febrianty, S.Pd.', 'tryafebrianty', 'trya.jpg', 'tryafebrianty@gmail.com', NULL, '$2y$10$FtRlg703QQtkAldaEYV9qOg5NLjGJzTuTI5KDYPJ28JvqbqHZIf2m', NULL, '2022-06-27 02:26:56', '2022-06-27 02:26:56', 1, 'Guru Kelas A', 1),
(9, 'Tita Alita Sadariyah, S.Pd.', 'titaalita', 'tita.jpg', 'titaalita@gmail.com', NULL, '$2y$10$gocIwJJeogVxJ8cCYgxz2eUP6UUP3cc/tUXVuTa.KSs6SDa3e/S1O', NULL, '2022-06-27 02:26:56', '2022-06-27 02:26:56', 0, 'Guru Kelas A', 1),
(10, 'Fithri Wihdah. H, S.Pd.', 'fithriwihdah', 'fithri.jpg', 'fithriwihdah@gmail.com', NULL, '$2y$10$CriV.jHi16j0J7ZBQSMNhOaXj69NGvivkgiiQklorC670xSa3Am7y', NULL, '2022-06-27 02:26:57', '2022-06-27 02:26:57', 0, 'Guru Kelas B1', 1),
(11, 'Haryanti', 'haryanti', 'haryanti.jpg', 'haryanti@gmail.com', NULL, '$2y$10$Z0zPgHCmKEi8eygmW.kDVOS57BLtQcIR8sENQjIZUnRhuHSG905jm', NULL, '2022-06-27 02:26:57', '2022-06-27 02:26:57', 0, 'Guru Kelas B1', 1),
(12, 'Sumiati, S.Pd.I', 'sumiati', 'sumiati.jpg', 'sumiati@gmail.com', NULL, '$2y$10$xQRUCVIqeMaBWQNIqRaIVeI4QzlCvNqO3vj6o.9ehzvt8vp07x9OS', NULL, '2022-06-27 02:26:57', '2022-06-27 02:26:57', 0, 'Guru Kelas B2', 1),
(13, 'Yuhanah, S.Pd.', 'yuhanah', 'yuhanah.jpg', 'yuhanah@gmail.com', NULL, '$2y$10$dhdxX/BNv7JuAsNH0.asPOZpgiuReDVgyaK/j0bJACOADSfpTQxui', NULL, '2022-06-27 02:26:57', '2022-06-27 02:26:57', 0, 'Guru Kelas B2', 1),
(14, 'Pudjianto Usman', 'pudjiantousman', '', 'pudjianto@gmail.com', NULL, '$2y$10$psUOpSesnWhOZQwManCRSOTw1v3hlQV0mB8BbBXJRMyI52/9uFLHG', NULL, '2022-06-27 02:26:57', '2022-06-27 02:26:57', 0, 'Petugas Keamanan', 1),
(15, 'Elin Herlina', 'elinherlina', '', 'elinherlina@gmail.com', NULL, '$2y$10$kGOPL6fQ.rDSDAb3xn9W.uMI6L4Z/ToYfUpHjlStYjozk0Ru22uMG', NULL, '2022-06-27 02:26:57', '2022-06-27 02:26:57', 0, 'Petugas Catering', 1),
(16, 'Mini Maryani', 'minimaryani', 'mini.jpg', 'minimaryani@gmail.com', NULL, '$2y$10$R1vEVSjoIaygMEOzVNodY./nJM5FESAl56bhftlEx9Y0so8cHYxc6', NULL, '2022-06-27 02:26:57', '2022-06-27 02:26:57', 0, 'Petugas Kebersihan', 1);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `activities`
--
ALTER TABLE `activities`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `activities_slug_unique` (`slug`);

--
-- Indeks untuk tabel `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `categories_name_unique` (`name`),
  ADD UNIQUE KEY `categories_slug_unique` (`slug`);

--
-- Indeks untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indeks untuk tabel `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indeks untuk tabel `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indeks untuk tabel `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `posts_slug_unique` (`slug`);

--
-- Indeks untuk tabel `profiles`
--
ALTER TABLE `profiles`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `programs`
--
ALTER TABLE `programs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `programs_slug_unique` (`slug`);

--
-- Indeks untuk tabel `registrations`
--
ALTER TABLE `registrations`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `registrations_slug_unique` (`slug`);

--
-- Indeks untuk tabel `testimonials`
--
ALTER TABLE `testimonials`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_username_unique` (`username`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `activities`
--
ALTER TABLE `activities`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT untuk tabel `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `posts`
--
ALTER TABLE `posts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `profiles`
--
ALTER TABLE `profiles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `programs`
--
ALTER TABLE `programs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `registrations`
--
ALTER TABLE `registrations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `testimonials`
--
ALTER TABLE `testimonials`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
