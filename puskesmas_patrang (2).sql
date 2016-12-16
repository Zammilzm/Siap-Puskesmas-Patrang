-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 16 Des 2016 pada 06.39
-- Versi Server: 10.1.16-MariaDB
-- PHP Version: 7.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `puskesmas_patrang`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `administrasi_rawat_inaps`
--

CREATE TABLE `administrasi_rawat_inaps` (
  `id_pembayaran_inap` int(10) UNSIGNED NOT NULL,
  `id_rawat_inap` int(10) UNSIGNED NOT NULL,
  `total_pembayaran` int(11) NOT NULL,
  `keterangan_pembayaran` enum('0','1') COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data untuk tabel `administrasi_rawat_inaps`
--

INSERT INTO `administrasi_rawat_inaps` (`id_pembayaran_inap`, `id_rawat_inap`, `total_pembayaran`, `keterangan_pembayaran`, `created_at`, `updated_at`) VALUES
(1, 1, 860000, '0', '2016-12-14 15:30:45', '2016-12-14 15:30:45'),
(2, 1, 860000, '0', '2016-12-14 15:49:35', '2016-12-14 15:49:35'),
(3, 5, 340000, '0', '2016-12-14 15:56:37', '2016-12-14 15:56:37'),
(4, 1, 860000, '0', '2016-12-14 15:58:33', '2016-12-14 15:58:33'),
(5, 6, 1230000, '0', '2016-12-14 16:00:37', '2016-12-14 16:00:37'),
(6, 5, 340000, '0', '2016-12-14 16:01:54', '2016-12-14 16:01:54'),
(7, 1, 860000, '0', '2016-12-14 16:03:56', '2016-12-14 16:03:56'),
(8, 1, 860000, '0', '2016-12-14 16:05:58', '2016-12-14 16:05:58'),
(9, 5, 340000, '0', '2016-12-14 16:06:33', '2016-12-14 16:06:33'),
(10, 1, 860000, '0', '2016-12-14 16:08:38', '2016-12-14 16:08:38'),
(11, 1, 860000, '0', '2016-12-14 17:56:37', '2016-12-14 17:56:37'),
(12, 5, 340000, '0', '2016-12-14 18:01:29', '2016-12-14 18:01:29'),
(13, 6, 1230000, '0', '2016-12-14 19:03:42', '2016-12-14 19:03:42');

-- --------------------------------------------------------

--
-- Struktur dari tabel `bpjses`
--

CREATE TABLE `bpjses` (
  `id_bpjs` int(10) UNSIGNED NOT NULL,
  `nama_bpjs` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `status` enum('0','1') COLLATE utf8_unicode_ci NOT NULL,
  `tanggal_pembuatan` date NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data untuk tabel `bpjses`
--

INSERT INTO `bpjses` (`id_bpjs`, `nama_bpjs`, `status`, `tanggal_pembuatan`, `created_at`, `updated_at`) VALUES
(1, 'OKA', '1', '2016-11-09', NULL, NULL),
(2, 'LERY', '1', '2016-11-02', NULL, NULL),
(3, 'KAKA', '1', '2016-11-05', NULL, NULL),
(4, 'ZAMMIL', '1', '2016-11-13', NULL, NULL),
(5, 'ROZHA', '1', '2016-11-27', NULL, NULL),
(6, 'LARAS', '1', '2016-11-15', NULL, NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `detail_rawat_inaps`
--

CREATE TABLE `detail_rawat_inaps` (
  `id_rawat_inap` int(10) UNSIGNED NOT NULL,
  `id_tindakan_medis` int(10) UNSIGNED NOT NULL,
  `harga` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `kamars`
--

CREATE TABLE `kamars` (
  `id_kamar` int(10) UNSIGNED NOT NULL,
  `id_pegawai` int(10) UNSIGNED NOT NULL,
  `nama_kamar` enum('Mawar','Melati','Anggrek') COLLATE utf8_unicode_ci NOT NULL,
  `jenis_kamar` enum('Umum','Vip') COLLATE utf8_unicode_ci NOT NULL,
  `no_kamar` int(11) NOT NULL,
  `tarif_kamar` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data untuk tabel `kamars`
--

INSERT INTO `kamars` (`id_kamar`, `id_pegawai`, `nama_kamar`, `jenis_kamar`, `no_kamar`, `tarif_kamar`, `created_at`, `updated_at`) VALUES
(1, 1, 'Mawar', 'Umum', 101, 30000, NULL, NULL),
(2, 2, 'Melati', 'Umum', 102, 20000, NULL, NULL),
(3, 3, 'Anggrek', 'Umum', 1044, 25000, NULL, NULL),
(4, 2, 'Melati', 'Vip', 111, 50000, NULL, NULL),
(5, 1, 'Mawar', '', 10, 50000, '2016-12-14 20:05:36', '2016-12-14 20:05:36');

-- --------------------------------------------------------

--
-- Struktur dari tabel `levels`
--

CREATE TABLE `levels` (
  `id_level` int(10) UNSIGNED NOT NULL,
  `level` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `logins`
--

CREATE TABLE `logins` (
  `id_level` int(10) UNSIGNED NOT NULL,
  `username` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `migrations`
--

CREATE TABLE `migrations` (
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data untuk tabel `migrations`
--

INSERT INTO `migrations` (`migration`, `batch`) VALUES
('2016_11_01_064315_create_pasiens_table', 1),
('2016_11_01_064505_create_polis_table', 1),
('2016_11_01_064746_create_pendaftarans_table', 1),
('2016_11_01_065403_create_levels_table', 1),
('2016_11_01_065512_create_logins_table', 1),
('2016_11_01_065655_create_pelayanans_table', 1),
('2016_11_01_065853_create_resep_obats_table', 1),
('2016_11_01_070103_create_detail_tindakan_medises_table', 1),
('2016_11_01_070239_create_kamars_table', 1),
('2016_11_01_070610_create_administrasi_rawat_inaps_table', 1),
('2016_11_01_072727_create_pegawais_table', 1),
('2016_11_01_073949_create_detail_rawat_inaps_table', 1),
('2016_11_01_074614_create_tindakan_medises_table', 1),
('2016_11_01_074837_create_bpjses_table', 1),
('2016_11_01_075126_create_tes_laboratorium_dalams_table', 1),
('2016_11_01_075341_create_rawat_inaps_table', 1),
('2016_11_14_130001_create_rujukans_table', 1),
('2016_11_27_124431_create_rujukans_table', 2),
('2016_11_27_124616_create_rujukans_table', 3);

-- --------------------------------------------------------

--
-- Struktur dari tabel `pasiens`
--

CREATE TABLE `pasiens` (
  `id_pasien` int(10) UNSIGNED NOT NULL,
  `no_ktp` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `no_kk` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `nama_pasien` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `alamat` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `golongan_darah` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data untuk tabel `pasiens`
--

INSERT INTO `pasiens` (`id_pasien`, `no_ktp`, `no_kk`, `nama_pasien`, `alamat`, `tanggal_lahir`, `golongan_darah`, `created_at`, `updated_at`) VALUES
(1, '22336289312931', '34431233', 'Dwi Oktavia Larassati', 'Jember kidul', '2015-02-16', 'A', NULL, '2016-11-25 04:19:10'),
(2, '4545252343242', '343434342333', 'Rozha Aulya', 'Banyuwangian', '2016-11-03', 'B', NULL, '2016-11-25 04:19:32'),
(3, '42341341341343', '3423434342332', 'MUZAMMIL', 'Situbondo', '2016-11-02', 'O', NULL, '2016-11-25 04:23:09'),
(4, '324234234234234', '34234234234234', 'YOVANKA ADAM', 'BONDOWOSO', '2016-11-26', 'AB', NULL, NULL),
(5, '3423423423411', '4323134134234', 'LERY HANDIKA P', 'JEMBER', '2016-11-04', 'AB', NULL, NULL),
(6, '34234234234234234', '4234234232', 'OKA ROBIANSYAH', 'MADURA', '2016-11-13', 'O', NULL, NULL),
(7, '43534535', '453434', 'sinta', 'jember', '2016-11-11', 'B', '2016-11-18 16:38:11', '2016-11-18 16:38:11'),
(8, '4636346346346', '46346343463', 'Lery cellg', 'jember', '2016-12-08', 'B', '2016-12-14 16:11:06', '2016-12-14 16:11:26'),
(9, '5473458', '5436593', 'fkd', 'fskhflsd', '2016-12-15', 'A', '2016-12-14 19:34:50', '2016-12-14 19:34:50');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pegawais`
--

CREATE TABLE `pegawais` (
  `id_pegawai` int(10) UNSIGNED NOT NULL,
  `nama_pegawai` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `status_pegawai` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `no_kk` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `no_ktp` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `alamat` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `golongan_darah` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `umur` int(11) NOT NULL,
  `lulusan` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `asal_pendidikan` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data untuk tabel `pegawais`
--

INSERT INTO `pegawais` (`id_pegawai`, `nama_pegawai`, `status_pegawai`, `no_kk`, `no_ktp`, `alamat`, `tanggal_lahir`, `golongan_darah`, `umur`, `lulusan`, `asal_pendidikan`, `created_at`, `updated_at`) VALUES
(1, 'ABRAHAM LINCOLN', 'Aktif', '233462394623', '42342342343', 'AMERIKA SERIKAT', '2016-11-10', 'AB', 22, 'S1 KEPERAWATAN', 'JEMBER', NULL, NULL),
(2, 'BARRACK OBAMA', 'aktif', '3423423423423434', '423424234234', 'RUSSIA', '2016-11-04', 'A', 43, 'S1 HARVARD', 'AMERIKA', NULL, NULL),
(3, 'TOM CRUISE', 'aktif', '234234234234234234', '2342342342', 'PADANG', '2016-11-21', 'A', 29, 'S3 DOKTER', 'jember', NULL, NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `pelayanans`
--

CREATE TABLE `pelayanans` (
  `id_pelayanan` int(10) UNSIGNED NOT NULL,
  `id_pendaftaran` int(10) UNSIGNED NOT NULL,
  `keluhan` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `diagnosa_penyakit` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `id_pegawai` int(10) UNSIGNED NOT NULL,
  `saran_dokter` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `rawat_inap` tinyint(4) DEFAULT '0',
  `rekam_medis` tinyint(4) DEFAULT '0',
  `rujukan` tinyint(4) DEFAULT '0',
  `resep` tinyint(4) DEFAULT '0',
  `uji_lab` tinyint(4) DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data untuk tabel `pelayanans`
--

INSERT INTO `pelayanans` (`id_pelayanan`, `id_pendaftaran`, `keluhan`, `diagnosa_penyakit`, `id_pegawai`, `saran_dokter`, `rawat_inap`, `rekam_medis`, `rujukan`, `resep`, `uji_lab`, `created_at`, `updated_at`) VALUES
(3, 1, 'Sakit Mata', 'Magh Akut Banget', 1, '																																																																																				Diperiksa\r\n						\r\n						\r\n						\r\n						\r\n						\r\n						\r\n						\r\n						\r\n						\r\n						\r\n						\r\n						', 1, 1, NULL, 1, NULL, '2016-11-16 05:40:03', '2016-12-05 23:28:47'),
(4, 2, 'Pusing', 'Banyak Hutang', 2, '							Mending ke ki kanjeng\r\n						', 1, NULL, 1, NULL, NULL, '2016-11-16 05:41:03', '2016-11-25 04:48:37'),
(5, 3, 'Kurang tidur', 'Anemia', 2, 'Banyak Tidur', 1, NULL, NULL, 1, NULL, '2016-11-16 15:24:27', '2016-11-16 15:24:27'),
(6, 4, 'Susah buang air besar', 'Menunggu pemeriksaan lab', 3, 'Rawat Inap saja', 1, NULL, NULL, 1, 1, '2016-11-16 15:25:37', '2016-11-16 15:25:37'),
(7, 5, 'Susah Tidur', 'Insomnia', 2, 'Lebih baik Minum obat tidur', 1, NULL, 1, 1, 1, '2016-11-16 15:27:58', '2016-11-16 15:27:58'),
(8, 6, 'Selalu lapar dimalam hari', 'Busung lapar', 1, 'Perbanyak makan', NULL, 1, 1, 1, 1, '2016-11-16 15:30:05', '2016-11-16 15:30:05'),
(9, 8, 'Sakit perut', 'Kena Santet', 2, '														Mending tidur mas\r\n						\r\n						', 1, NULL, 1, NULL, NULL, '2016-11-18 17:16:49', '2016-11-25 04:47:43'),
(10, 9, 'Sakit perut', 'maag akut', 3, '							tidur\r\n						', 1, NULL, 1, 1, 1, '2016-11-18 19:28:39', '2016-11-18 19:31:10'),
(11, 10, 'sakit kepala', 'migrain', 2, 'tidur', 1, NULL, NULL, 1, NULL, '2016-11-22 18:08:42', '2016-11-22 18:08:42'),
(12, 11, 'sakit gigi', 'keropos', 3, 'tidur', 1, 1, NULL, 1, NULL, '2016-11-22 18:09:08', '2016-11-22 18:09:08'),
(13, 12, 'sakit mata', 'meriang', 2, 'tidur', NULL, NULL, 1, NULL, NULL, '2016-11-22 18:09:32', '2016-11-22 18:09:32'),
(14, 13, 'panas', 'demam', 2, '							Tidur\r\n						', 1, NULL, 1, 1, 1, '2016-12-14 16:15:40', '2016-12-14 16:15:52'),
(15, 14, 'Patah tulang', 'Osteoporisis', 2, 'Berobat', 1, NULL, NULL, 1, 1, '2016-12-14 19:40:22', '2016-12-14 19:40:22');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pendaftarans`
--

CREATE TABLE `pendaftarans` (
  `id_pendaftaran` int(10) UNSIGNED NOT NULL,
  `id_pasien` int(10) UNSIGNED NOT NULL,
  `id_poli` int(10) UNSIGNED NOT NULL,
  `status` enum('0','1') COLLATE utf8_unicode_ci NOT NULL,
  `tanggal_periksa` date NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data untuk tabel `pendaftarans`
--

INSERT INTO `pendaftarans` (`id_pendaftaran`, `id_pasien`, `id_poli`, `status`, `tanggal_periksa`, `created_at`, `updated_at`) VALUES
(1, 1, 2, '1', '2016-11-02', NULL, '2016-11-18 16:58:25'),
(2, 1, 1, '1', '2016-11-28', NULL, '2016-11-18 16:58:41'),
(3, 3, 2, '1', '2016-11-04', NULL, NULL),
(4, 4, 3, '1', '2016-11-01', NULL, NULL),
(5, 5, 1, '1', '2016-11-02', NULL, NULL),
(6, 6, 3, '1', '2016-11-03', NULL, NULL),
(8, 3, 3, '1', '2016-11-03', NULL, NULL),
(9, 6, 1, '1', '2016-11-13', NULL, NULL),
(10, 2, 3, '1', '2016-11-08', NULL, NULL),
(11, 4, 1, '1', '2016-11-18', NULL, '2016-12-14 16:11:55'),
(12, 1, 3, '1', '2016-11-21', NULL, NULL),
(13, 6, 1, '1', '2016-11-06', NULL, NULL),
(14, 3, 1, '1', '2016-12-10', '2016-12-14 16:11:48', '2016-12-14 16:11:48'),
(15, 2, 2, '1', '2016-12-15', '2016-12-14 18:52:12', '2016-12-14 18:52:12'),
(16, 1, 1, '1', '2016-12-15', '2016-12-14 18:55:18', '2016-12-14 18:55:18'),
(17, 1, 3, '1', '2016-12-15', '2016-12-14 18:57:54', '2016-12-14 18:57:54'),
(18, 1, 2, '1', '2016-12-15', '2016-12-14 18:59:25', '2016-12-14 18:59:25'),
(19, 1, 1, '1', '2016-12-15', '2016-12-14 18:59:48', '2016-12-14 18:59:48');

-- --------------------------------------------------------

--
-- Struktur dari tabel `polis`
--

CREATE TABLE `polis` (
  `id_poli` int(10) UNSIGNED NOT NULL,
  `nama_poli` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data untuk tabel `polis`
--

INSERT INTO `polis` (`id_poli`, `nama_poli`, `created_at`, `updated_at`) VALUES
(1, 'POLI UMUM', NULL, NULL),
(2, 'POLI GIGI', NULL, NULL),
(3, 'POLI KIA', NULL, NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `rawat_inaps`
--

CREATE TABLE `rawat_inaps` (
  `id_rawat_inap` int(10) UNSIGNED NOT NULL,
  `id_pelayanan` int(10) UNSIGNED NOT NULL,
  `id_kamar` int(10) UNSIGNED NOT NULL,
  `lama_menginap` int(11) DEFAULT '0',
  `keterangan_pembayaran` enum('LUNAS','BELUM LUNAS','','') COLLATE utf8_unicode_ci NOT NULL DEFAULT 'BELUM LUNAS',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data untuk tabel `rawat_inaps`
--

INSERT INTO `rawat_inaps` (`id_rawat_inap`, `id_pelayanan`, `id_kamar`, `lama_menginap`, `keterangan_pembayaran`, `created_at`, `updated_at`) VALUES
(1, 3, 2, 43, 'BELUM LUNAS', '2016-12-06 17:00:00', '2016-12-14 16:08:37'),
(5, 4, 2, 17, 'BELUM LUNAS', '2016-11-28 15:53:41', '2016-12-14 18:01:29'),
(6, 5, 1, 41, 'BELUM LUNAS', '2016-11-29 12:59:38', '2016-12-14 19:03:42'),
(7, 9, 2, NULL, 'BELUM LUNAS', '2016-12-14 18:04:43', '2016-12-14 18:04:43'),
(8, 7, 3, NULL, 'BELUM LUNAS', '2016-12-14 19:52:54', '2016-12-14 19:52:54'),
(9, 10, 4, NULL, 'BELUM LUNAS', '2016-12-14 19:53:47', '2016-12-14 19:53:47');

-- --------------------------------------------------------

--
-- Struktur dari tabel `resep_obats`
--

CREATE TABLE `resep_obats` (
  `id_resep` int(10) UNSIGNED NOT NULL,
  `id_pelayanan` int(10) UNSIGNED NOT NULL,
  `resep_obat` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `resep_tersedia` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data untuk tabel `resep_obats`
--

INSERT INTO `resep_obats` (`id_resep`, `id_pelayanan`, `resep_obat`, `resep_tersedia`, `created_at`, `updated_at`) VALUES
(1, 3, '', 'PANADOL 1 PCS', '2016-11-16 16:21:59', '2016-12-14 10:54:50'),
(2, 4, 'PANADOL 1 PCS 2X SEHARI PARACETAMOL 1 PCS 3X SEHARI', NULL, '2016-11-16 16:22:16', '2016-11-16 16:22:16'),
(3, 5, 'tidak ada', NULL, '2016-11-22 22:25:45', '2016-11-22 22:25:45'),
(4, 6, 'dce', NULL, '2016-11-23 00:58:33', '2016-11-23 00:58:33'),
(5, 7, 'PANADOL 1 PCS 2X SEHARIPARACETAMOL 1 PCS 3X SEHARI hari', NULL, '2016-12-14 19:46:45', '2016-12-14 19:46:45');

-- --------------------------------------------------------

--
-- Struktur dari tabel `rujukans`
--

CREATE TABLE `rujukans` (
  `id_rujukan` int(10) UNSIGNED NOT NULL,
  `id_pelayanan` int(10) UNSIGNED NOT NULL,
  `tanggal_rujukan` date NOT NULL,
  `keterangan` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `tempat_rujukan` enum('Rsud_Situbondo','Rsud_Jember','Rsud_Arjasa','Jember_Klinik','Rsud_Patrang','Rsud_Banyuwangi','Rsud_Malang') COLLATE utf8_unicode_ci NOT NULL,
  `status_rujukan` varchar(255) COLLATE utf8_unicode_ci NOT NULL DEFAULT 'Tidak Tervalidasi',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data untuk tabel `rujukans`
--

INSERT INTO `rujukans` (`id_rujukan`, `id_pelayanan`, `tanggal_rujukan`, `keterangan`, `tempat_rujukan`, `status_rujukan`, `created_at`, `updated_at`) VALUES
(3, 4, '2016-11-09', 'no', 'Rsud_Banyuwangi', 'tervalidasi', '2016-11-27 06:27:40', '2016-12-14 16:12:51'),
(4, 8, '2016-12-02', 'dirujuk cepat', 'Rsud_Arjasa', 'tervalidasi', '2016-12-14 16:16:53', '2016-12-14 19:23:56'),
(5, 14, '2016-12-09', 'Segera ditangani', 'Rsud_Patrang', 'Tidak Tervalidasi', '2016-12-14 19:41:39', '2016-12-14 19:41:39'),
(6, 13, '2016-12-03', 'Segera ditangani', 'Rsud_Arjasa', 'Tidak Tervalidasi', '2016-12-14 19:43:13', '2016-12-14 19:43:13');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tes_laboratorium_dalams`
--

CREATE TABLE `tes_laboratorium_dalams` (
  `id_tes_laboran_dalam` int(10) UNSIGNED NOT NULL,
  `id_pelayanan` int(10) UNSIGNED NOT NULL,
  `tanggal_tes` date NOT NULL,
  `hemoglobin` int(11) NOT NULL,
  `leukosit` int(11) NOT NULL,
  `trombosit` int(11) NOT NULL,
  `hematoplit` int(11) NOT NULL,
  `darah_gda` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data untuk tabel `tes_laboratorium_dalams`
--

INSERT INTO `tes_laboratorium_dalams` (`id_tes_laboran_dalam`, `id_pelayanan`, `tanggal_tes`, `hemoglobin`, `leukosit`, `trombosit`, `hematoplit`, `darah_gda`, `created_at`, `updated_at`) VALUES
(1, 3, '2016-11-10', 213, 211, 123, 123, 321, NULL, '2016-12-14 11:00:09'),
(2, 4, '2016-11-13', 0, 0, 0, 0, 0, NULL, NULL),
(3, 6, '2016-12-06', 213, 321, 123, 321, 312, '2016-12-14 09:55:21', '2016-12-14 09:55:21');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tindakan_medises`
--

CREATE TABLE `tindakan_medises` (
  `id_tindakan_medis` int(10) UNSIGNED NOT NULL,
  `nama_tindakan_medis` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `tarif_layanan` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `administrasi_rawat_inaps`
--
ALTER TABLE `administrasi_rawat_inaps`
  ADD PRIMARY KEY (`id_pembayaran_inap`),
  ADD KEY `id_rawat_inap` (`id_rawat_inap`);

--
-- Indexes for table `bpjses`
--
ALTER TABLE `bpjses`
  ADD PRIMARY KEY (`id_bpjs`);

--
-- Indexes for table `kamars`
--
ALTER TABLE `kamars`
  ADD PRIMARY KEY (`id_kamar`),
  ADD KEY `id_pegawai` (`id_pegawai`);

--
-- Indexes for table `levels`
--
ALTER TABLE `levels`
  ADD PRIMARY KEY (`id_level`);

--
-- Indexes for table `pasiens`
--
ALTER TABLE `pasiens`
  ADD PRIMARY KEY (`id_pasien`);

--
-- Indexes for table `pegawais`
--
ALTER TABLE `pegawais`
  ADD PRIMARY KEY (`id_pegawai`);

--
-- Indexes for table `pelayanans`
--
ALTER TABLE `pelayanans`
  ADD PRIMARY KEY (`id_pelayanan`),
  ADD KEY `id_pendaftaran` (`id_pendaftaran`),
  ADD KEY `id_pegawai` (`id_pegawai`);

--
-- Indexes for table `pendaftarans`
--
ALTER TABLE `pendaftarans`
  ADD PRIMARY KEY (`id_pendaftaran`),
  ADD KEY `id_pasien` (`id_pasien`),
  ADD KEY `id_poli` (`id_poli`);

--
-- Indexes for table `polis`
--
ALTER TABLE `polis`
  ADD PRIMARY KEY (`id_poli`);

--
-- Indexes for table `rawat_inaps`
--
ALTER TABLE `rawat_inaps`
  ADD PRIMARY KEY (`id_rawat_inap`),
  ADD KEY `id_pelayanan` (`id_pelayanan`),
  ADD KEY `id_kamar` (`id_kamar`);

--
-- Indexes for table `resep_obats`
--
ALTER TABLE `resep_obats`
  ADD PRIMARY KEY (`id_resep`),
  ADD KEY `id_pelayanan` (`id_pelayanan`);

--
-- Indexes for table `rujukans`
--
ALTER TABLE `rujukans`
  ADD PRIMARY KEY (`id_rujukan`),
  ADD KEY `id_pelayanan` (`id_pelayanan`);

--
-- Indexes for table `tes_laboratorium_dalams`
--
ALTER TABLE `tes_laboratorium_dalams`
  ADD PRIMARY KEY (`id_tes_laboran_dalam`),
  ADD KEY `id_pelayanan` (`id_pelayanan`);

--
-- Indexes for table `tindakan_medises`
--
ALTER TABLE `tindakan_medises`
  ADD PRIMARY KEY (`id_tindakan_medis`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `administrasi_rawat_inaps`
--
ALTER TABLE `administrasi_rawat_inaps`
  MODIFY `id_pembayaran_inap` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT for table `bpjses`
--
ALTER TABLE `bpjses`
  MODIFY `id_bpjs` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `kamars`
--
ALTER TABLE `kamars`
  MODIFY `id_kamar` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `levels`
--
ALTER TABLE `levels`
  MODIFY `id_level` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `pasiens`
--
ALTER TABLE `pasiens`
  MODIFY `id_pasien` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `pegawais`
--
ALTER TABLE `pegawais`
  MODIFY `id_pegawai` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `pelayanans`
--
ALTER TABLE `pelayanans`
  MODIFY `id_pelayanan` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT for table `pendaftarans`
--
ALTER TABLE `pendaftarans`
  MODIFY `id_pendaftaran` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
--
-- AUTO_INCREMENT for table `polis`
--
ALTER TABLE `polis`
  MODIFY `id_poli` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `rawat_inaps`
--
ALTER TABLE `rawat_inaps`
  MODIFY `id_rawat_inap` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `resep_obats`
--
ALTER TABLE `resep_obats`
  MODIFY `id_resep` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `rujukans`
--
ALTER TABLE `rujukans`
  MODIFY `id_rujukan` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `tes_laboratorium_dalams`
--
ALTER TABLE `tes_laboratorium_dalams`
  MODIFY `id_tes_laboran_dalam` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `tindakan_medises`
--
ALTER TABLE `tindakan_medises`
  MODIFY `id_tindakan_medis` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `administrasi_rawat_inaps`
--
ALTER TABLE `administrasi_rawat_inaps`
  ADD CONSTRAINT `administrasi_rawat_inaps_ibfk_1` FOREIGN KEY (`id_rawat_inap`) REFERENCES `rawat_inaps` (`id_rawat_inap`);

--
-- Ketidakleluasaan untuk tabel `kamars`
--
ALTER TABLE `kamars`
  ADD CONSTRAINT `kamars_ibfk_1` FOREIGN KEY (`id_pegawai`) REFERENCES `pegawais` (`id_pegawai`);

--
-- Ketidakleluasaan untuk tabel `pelayanans`
--
ALTER TABLE `pelayanans`
  ADD CONSTRAINT `pelayanans_ibfk_1` FOREIGN KEY (`id_pendaftaran`) REFERENCES `pendaftarans` (`id_pendaftaran`),
  ADD CONSTRAINT `pelayanans_ibfk_2` FOREIGN KEY (`id_pegawai`) REFERENCES `pegawais` (`id_pegawai`);

--
-- Ketidakleluasaan untuk tabel `pendaftarans`
--
ALTER TABLE `pendaftarans`
  ADD CONSTRAINT `pendaftarans_ibfk_2` FOREIGN KEY (`id_pasien`) REFERENCES `pasiens` (`id_pasien`),
  ADD CONSTRAINT `pendaftarans_ibfk_3` FOREIGN KEY (`id_poli`) REFERENCES `polis` (`id_poli`);

--
-- Ketidakleluasaan untuk tabel `rawat_inaps`
--
ALTER TABLE `rawat_inaps`
  ADD CONSTRAINT `rawat_inaps_ibfk_1` FOREIGN KEY (`id_pelayanan`) REFERENCES `pelayanans` (`id_pelayanan`),
  ADD CONSTRAINT `rawat_inaps_ibfk_2` FOREIGN KEY (`id_kamar`) REFERENCES `kamars` (`id_kamar`);

--
-- Ketidakleluasaan untuk tabel `resep_obats`
--
ALTER TABLE `resep_obats`
  ADD CONSTRAINT `resep_obats_ibfk_1` FOREIGN KEY (`id_pelayanan`) REFERENCES `pelayanans` (`id_pelayanan`);

--
-- Ketidakleluasaan untuk tabel `rujukans`
--
ALTER TABLE `rujukans`
  ADD CONSTRAINT `rujukans_ibfk_1` FOREIGN KEY (`id_pelayanan`) REFERENCES `pelayanans` (`id_pelayanan`);

--
-- Ketidakleluasaan untuk tabel `tes_laboratorium_dalams`
--
ALTER TABLE `tes_laboratorium_dalams`
  ADD CONSTRAINT `tes_laboratorium_dalams_ibfk_1` FOREIGN KEY (`id_pelayanan`) REFERENCES `pelayanans` (`id_pelayanan`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
