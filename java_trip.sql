-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 20 Okt 2020 pada 18.02
-- Versi server: 10.4.11-MariaDB
-- Versi PHP: 7.4.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `java_trip`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `galleries`
--

CREATE TABLE `galleries` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `travel_packages_id` int(11) NOT NULL,
  `image` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `galleries`
--

INSERT INTO `galleries` (`id`, `travel_packages_id`, `image`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 1, 'images/uploads/gallery/zRdgpwEypMf9i4FKR5HFyhwGcB1uIDAoSOuld3dN.jpeg', NULL, '2020-10-16 11:52:30', '2020-10-18 09:53:30'),
(2, 1, 'public/images/uploads/gallery/avbGixLU3vous54ZDsIsoN1RPTR0cbJvd6IytieC.png', '2020-10-17 09:50:04', '2020-10-16 11:59:28', '2020-10-17 09:50:04'),
(3, 1, 'images/uploads/gallery/Yk4ks3BPBHkv8JqjSrim5aSGIb50v31NeV4FQ1lj.jpeg', '2020-10-16 12:22:32', '2020-10-16 12:07:44', '2020-10-16 12:22:32'),
(4, 1, 'images/uploads/gallery/Tx4fcE4djHMFe7z4pox0Jw0m5camETKejyM9YcIY.jpeg', NULL, '2020-10-18 09:54:07', '2020-10-18 09:54:07'),
(5, 3, 'images/uploads/gallery/aIFkdN2YAjKR3Z6mHi9x28I8m766uDS3O7q5C75x.jpeg', NULL, '2020-10-18 09:54:28', '2020-10-18 09:54:28'),
(6, 3, 'images/uploads/gallery/WrCCoEu0ZmuMt24yMUxijpkyppqM8mr1PGTNlmjA.jpeg', NULL, '2020-10-18 09:54:42', '2020-10-18 09:54:42'),
(7, 3, 'images/uploads/gallery/lHEbykgbwGEUTLFjDIzZzPOw7rrQ6zcrgMKWn8C6.jpeg', NULL, '2020-10-18 09:54:59', '2020-10-18 09:54:59'),
(8, 4, 'images/uploads/gallery/lEA7elcXO7nQTKGTAWDEcGML2V2f5KidYA7lBeBr.jpeg', NULL, '2020-10-18 09:55:16', '2020-10-18 09:55:16'),
(9, 4, 'images/uploads/gallery/dLYPKUsCt1N1IZd9Q2vdTvUR3f5zuEX9TPeKh0r5.jpeg', NULL, '2020-10-18 09:55:28', '2020-10-18 09:55:28'),
(10, 4, 'images/uploads/gallery/XDJacphY8hdgz7ylWNlLx37GdZp5Oni0g93w3dZD.jpeg', NULL, '2020-10-18 09:55:44', '2020-10-18 09:55:44'),
(11, 5, 'images/uploads/gallery/De7GWysqFKbgu02XSalJnEbewGRkTwCkCvXNNKPK.jpeg', NULL, '2020-10-18 09:55:59', '2020-10-18 09:55:59'),
(12, 5, 'images/uploads/gallery/hPHmdiPUrAfnKTf6HzsxflK0jYGf79Ojn5qYG7TZ.jpeg', NULL, '2020-10-18 09:56:14', '2020-10-18 09:56:14'),
(13, 5, 'images/uploads/gallery/hgzdfhbaGb0lUjGNVcEhUqexxRuE5z8mw2AcBdhQ.jpeg', NULL, '2020-10-18 09:56:25', '2020-10-18 09:56:25');

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
(4, '2020_10_16_061214_add_role_column_to_users_table', 2),
(5, '2020_10_16_065832_create_travel_packages_table', 3),
(6, '2020_10_16_065951_create_galleries_table', 3),
(7, '2020_10_16_070032_create_transactions_table', 3),
(8, '2020_10_16_070131_create_transaction_details_table', 3),
(9, '2020_10_16_192827_add_username_field_to_users_table', 4);

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
-- Struktur dari tabel `transactions`
--

CREATE TABLE `transactions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `travel_packages_id` int(11) NOT NULL,
  `users_id` int(11) NOT NULL,
  `additional_visa` int(11) NOT NULL,
  `transaction_total` int(64) NOT NULL,
  `transaction_status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `transactions`
--

INSERT INTO `transactions` (`id`, `travel_packages_id`, `users_id`, `additional_visa`, `transaction_total`, `transaction_status`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 1, 5, 322, 235, 'pending', NULL, NULL, '2020-10-16 23:03:18'),
(2, 1, 5, 0, 120, 'in_cart', NULL, '2020-10-17 00:40:52', '2020-10-17 00:40:52'),
(3, 1, 5, 0, 120, 'in_cart', NULL, '2020-10-17 01:38:07', '2020-10-17 01:38:07'),
(4, 1, 5, 0, 120, 'in_cart', NULL, '2020-10-17 01:52:26', '2020-10-17 01:52:26'),
(5, 1, 5, 0, 120, 'in_cart', NULL, '2020-10-17 01:59:10', '2020-10-17 01:59:10'),
(6, 1, 5, 190, 430, 'in_cart', '2020-10-17 02:38:16', '2020-10-17 01:59:39', '2020-10-17 02:38:16'),
(7, 1, 5, 190, 430, 'in_cart', '2020-10-17 02:38:14', '2020-10-17 02:07:23', '2020-10-17 02:38:14'),
(8, 1, 5, 190, 430, 'in_cart', '2020-10-17 02:38:11', '2020-10-17 02:12:05', '2020-10-17 02:38:11'),
(9, 1, 5, 190, 430, 'pending', NULL, '2020-10-17 02:14:27', '2020-10-17 02:38:03'),
(10, 1, 5, 0, 120, 'pending', NULL, '2020-10-17 11:18:06', '2020-10-17 11:18:13'),
(11, 1, 5, 0, 120, 'in_cart', NULL, '2020-10-17 11:22:40', '2020-10-17 11:22:40'),
(12, 1, 5, 0, 120, 'in_cart', NULL, '2020-10-17 20:40:48', '2020-10-17 20:40:48'),
(13, 1, 5, 0, 120, 'in_cart', NULL, '2020-10-17 21:43:42', '2020-10-17 21:43:42'),
(14, 4, 5, 190, 550, 'in_cart', NULL, '2020-10-18 10:59:41', '2020-10-18 11:00:34');

-- --------------------------------------------------------

--
-- Struktur dari tabel `transaction_details`
--

CREATE TABLE `transaction_details` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `transaction_id` int(11) NOT NULL,
  `username` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nationality` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `is_visa` tinyint(1) NOT NULL,
  `doe_passport` date DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `transaction_details`
--

INSERT INTO `transaction_details` (`id`, `transaction_id`, `username`, `nationality`, `is_visa`, `doe_passport`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 1, 'admin', 'id', 1, '2020-10-30', NULL, NULL, NULL),
(2, 5, 'admin', 'ID', 0, NULL, NULL, '2020-10-17 01:59:10', '2020-10-17 01:59:10'),
(3, 6, 'admin', 'ID', 0, NULL, NULL, '2020-10-17 01:59:39', '2020-10-17 01:59:39'),
(4, 6, 'user', 'id', 1, NULL, NULL, '2020-10-17 02:00:28', '2020-10-17 02:00:28'),
(5, 7, 'admin', 'ID', 0, NULL, NULL, '2020-10-17 02:07:23', '2020-10-17 02:07:23'),
(6, 7, 'user', 'id', 1, NULL, NULL, '2020-10-17 02:07:38', '2020-10-17 02:07:38'),
(7, 8, 'admin', 'ID', 0, NULL, NULL, '2020-10-17 02:12:05', '2020-10-17 02:12:05'),
(8, 8, 'user', 'id', 1, NULL, NULL, '2020-10-17 02:12:18', '2020-10-17 02:12:18'),
(9, 9, 'admin', 'ID', 0, NULL, NULL, '2020-10-17 02:14:27', '2020-10-17 02:14:27'),
(10, 9, 'user', 'id', 1, NULL, '2020-10-17 02:27:28', '2020-10-17 02:14:38', '2020-10-17 02:27:28'),
(11, 9, 'user', 'id', 1, NULL, '2020-10-17 02:34:25', '2020-10-17 02:27:39', '2020-10-17 02:34:25'),
(12, 9, 'user', 'id', 1, '2020-10-30', NULL, '2020-10-17 02:36:46', '2020-10-17 02:36:46'),
(13, 10, 'admin', 'ID', 0, '2025-10-17', NULL, '2020-10-17 11:18:06', '2020-10-17 11:18:06'),
(14, 11, 'admin', 'ID', 0, '2025-10-17', NULL, '2020-10-17 11:22:40', '2020-10-17 11:22:40'),
(15, 12, 'admin', 'ID', 0, '2025-10-18', NULL, '2020-10-17 20:40:48', '2020-10-17 20:40:48'),
(16, 13, 'admin', 'ID', 0, '2025-10-18', NULL, '2020-10-17 21:43:42', '2020-10-17 21:43:42'),
(17, 14, 'admin', 'ID', 0, '2025-10-18', NULL, '2020-10-18 10:59:41', '2020-10-18 10:59:41'),
(18, 14, 'user', 'CN', 1, '2020-10-31', NULL, '2020-10-18 11:00:34', '2020-10-18 11:00:34');

-- --------------------------------------------------------

--
-- Struktur dari tabel `travel_packages`
--

CREATE TABLE `travel_packages` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `location` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `about` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `featured_event` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `language` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `food` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `departure_date` date NOT NULL,
  `duration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` int(11) NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `travel_packages`
--

INSERT INTO `travel_packages` (`id`, `title`, `slug`, `location`, `about`, `featured_event`, `language`, `food`, `departure_date`, `duration`, `type`, `price`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 'Prambanan Temple', 'prambanan-temple', 'Central Java', 'Is a 9th-century&nbsp;<span style=\"background-image: none; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;\">Hindu temple</span>&nbsp;compound in&nbsp;<span style=\"background-image: none; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;\">Special Region of Yogyakarta</span>,&nbsp;<span style=\"background-image: none; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;\">Indonesia</span>, dedicated to the&nbsp;<span style=\"background-image: none; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;\">Trimūrti</span>, the expression of God as the Creator (<span style=\"background-image: none; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;\">Brahma</span>), the Preserver (<span style=\"background-image: none; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;\">Vishnu</span>) and the Transformer (<span style=\"background-image: none; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;\">Shiva</span>). The temple compound is located approximately 17 kilometres (11&nbsp;mi) northeast of the city of&nbsp;<span style=\"background-image: none; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;\">Yogyakarta</span>&nbsp;on the boundary between Central Java and&nbsp;<span style=\"background-image: none; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;\">Yogyakarta provinces</span>.', 'Ramayana Dance', 'Indonesia', 'Gudeg/Bakpia', '2020-10-31', '2D1N', 'Open Trip', 250, NULL, '2020-10-16 04:36:57', '2020-10-18 09:46:07'),
(2, 'asda', 'asda', 'sad', 'asd', 'df', 'wq', 'asd', '2020-10-11', '12', 'Open Trip', 321, '2020-10-16 04:54:11', '2020-10-16 04:54:07', '2020-10-16 04:54:11'),
(3, 'Mount Bromo', 'mount-bromo', 'East Java', '<p style=\"margin: 0.5em 0px;\">Is an active&nbsp;<span style=\"background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;\">volcano</span>&nbsp;and part of the&nbsp;<span style=\"background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;\">Tengger massif</span>, in&nbsp;<span style=\"background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;\">East Java</span>,&nbsp;<span style=\"background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;\">Indonesia</span>. At 2,329 meters (7,641&nbsp;ft) it is not the highest peak of the massif, but is the best known. The massif area is one of the most visited tourist attractions in&nbsp;<span style=\"background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;\">East Java</span>,&nbsp;<span style=\"background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;\">Indonesia</span>. The volcano belongs to the&nbsp;<span style=\"background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;\">Bromo Tengger Semeru National Park</span>. The name of&nbsp;<font color=\"#202122\" face=\"sans-serif\"><span style=\"font-size: 14px;\">Bromo&nbsp;derived from&nbsp;</span></font><span style=\"background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;\">Javanese</span>&nbsp;pronunciation of&nbsp;<span style=\"background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;\">Brahma</span>, the&nbsp;<span style=\"background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;\">Hindu</span>&nbsp;creator god.</p><p style=\"margin: 0.5em 0px;\">Mount Bromo sits in the middle of a plain called the \"<span style=\"background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;\">Sea of Sand</span>\" (<span style=\"background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;\">Javanese</span>:&nbsp;<span lang=\"jv\" style=\"\">Segara Wedi</span>&nbsp;or&nbsp;<span style=\"background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;\">Indonesian</span>:&nbsp;<font color=\"#202122\" face=\"sans-serif\"><span style=\"font-size: 14px;\">Lautan Pasir), a protected nature reserve since 1919. The typical way to visit Mount Bromo is from the nearby mountain village of&nbsp;</span></font><span style=\"background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;\">Cemoro Lawang</span>. From there it is possible to walk to the volcano in about 45 minutes, but it is also possible to take an organised jeep tour, which includes a stop at the viewpoint on&nbsp;<span style=\"background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;\">Mount Penanjakan</span>&nbsp;(2,770&nbsp;m or 9,088&nbsp;ft) (<span style=\"background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;\">Indonesian</span>:&nbsp;<font color=\"#202122\" face=\"sans-serif\"><span style=\"font-size: 14px;\">Gunung Penanjakan</span></font>). The viewpoint on Mount Penanjakan can also be reached on foot in about two hours.</p>', 'Yadnya Kasada', 'Java/Indonesian', 'Kupang Kraton', '2020-10-31', '2D1N', 'Open Trip', 235, NULL, '2020-10-18 09:40:48', '2020-10-18 09:45:55'),
(4, 'Indriyanti Beach', 'indriyanti-beach', 'Yogyakarta', '<p style=\"box-sizing: inherit; margin-right: 0px; margin-left: 0px; padding: 0px; color: rgb(41, 43, 44); font-family: &quot;Open Sans&quot;, sans-serif;\">Indonesia is an archipelago of endless seaside escapades. The romantic Indrayanti Beach in Gunungkidul District of the Special Region of Yogyakarta is no exception. This beach offers couples who intend to travel to a peaceful romantic vacation a unique panoramic view compared to other beaches. Aside from its silky white sand surrounded by enormous powerful rocks, the clear blue hypnotizing color of the sea invites visitors to come and plunge into the underworld. The sea is still clear and beautiful because trash or any other waste has not contaminated in this remote area.</p><p style=\"box-sizing: inherit; margin-right: 0px; margin-left: 0px; padding: 0px; color: rgb(41, 43, 44); font-family: &quot;Open Sans&quot;, sans-serif;\"><span id=\"docs-internal-guid-5cb39d9e-6927-dba8-1af5-07562afb3be0\" style=\"box-sizing: inherit; margin: 0px; padding: 0px; -webkit-font-smoothing: antialiased; text-align: justify;\"><span style=\"box-sizing: inherit; margin: 0px; padding: 0px; color: rgb(0, 0, 0); background-color: transparent; vertical-align: baseline;\">The story behind the beach’s name is pretty interesting. To Indonesians, Indrayanti is a popular name for women. It all started with a restaurant called ‘Indrayanti’, which is also the name of the lady who owns it. The restaurant had its name hugely posted in front of the beach. People then referred to this beach as the Indrayanti beach, despite the Gunungkidul District Government officially naming it Pulang Syawal beach.</span></span></p>', 'Fireworks', 'Indonesian', 'Klatak satay', '2020-10-31', '1D1N', 'Open Trip', 180, NULL, '2020-10-18 09:45:28', '2020-10-18 09:45:28'),
(5, 'Safari Zoo', 'safari-zoo', 'West Java', '<p style=\"margin: 0.5em 0px;\">Taman Safari I, or called as Taman Safari Bogor, is located at district&nbsp;<span style=\"background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;\">Cisarua</span>, on&nbsp;<span style=\"background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;\">Bogor</span>&nbsp;regency, on the old main road between&nbsp;<span style=\"background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;\">Jakarta</span>&nbsp;and&nbsp;<span style=\"background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;\">Bandung</span>,&nbsp;<span style=\"background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;\">West Java</span>. It is roughly 80 kilometres (50&nbsp;mi) from&nbsp;<span style=\"background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;\">Soekarno-Hatta International Airport</span>, Jakarta and 78 kilometres (48&nbsp;mi) from Bandung. Taman Safari is located on&nbsp;<span style=\"background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;\">Puncak</span>, a tourist area in West Java.</p><p style=\"margin: 0.5em 0px;\">Taman Safari I covers an area of 170 hectares (420 acres)&nbsp;and houses a collection of more than 3,000 animals, including&nbsp;<span style=\"background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;\">Bengal tigers</span>, Malayan&nbsp;<span style=\"background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;\">sun bears</span>,&nbsp;<span style=\"background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;\">giraffes</span>,&nbsp;<span style=\"background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;\">orangutans</span>,&nbsp;<span style=\"background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;\">hippos</span>,&nbsp;<span style=\"background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;\">zebras</span>, and&nbsp;<span style=\"background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;\">Sumatran elephants</span>. Some, such as the&nbsp;<span style=\"background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;\">Bali myna</span>, are involved in conservation projects. The majority of the species represented are African. of Prey Show, Dolphin Show, Cowboy Show, and The Globe of Death.</p>', 'Animal attractions', 'Indonesian', 'Cingur Salad', '2020-10-31', '1D1N', 'Open Trip', 270, NULL, '2020-10-18 09:52:45', '2020-10-18 09:52:45');

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `role` enum('admin','user') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'user',
  `username` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`, `role`, `username`) VALUES
(5, 'Admin', 'admin@javatrip.com', '2020-10-15 07:20:29', '$2y$10$5vDVdA8m03J/dRDggJhVX.cvsz5qcorV0lCDm0b.mUHD6jcOoTsqO', '1EfZGB5Nbgbl7xhu0uSYwYFVIdzL0GqEfRIsPHi8FUmtWV9i2lOk6dAngiB0', '2020-10-15 07:18:56', '2020-10-15 07:26:00', 'admin', 'admin'),
(6, 'User', 'user@javatrip.com', '2020-10-15 09:51:17', '$2y$10$GgZulmBPw33qrkLnGs7qwu6Gi2pKrvLL0uc3wlFC1x14mmWlEZUAu', NULL, '2020-10-15 09:50:13', '2020-10-15 09:51:17', 'user', 'user');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `galleries`
--
ALTER TABLE `galleries`
  ADD PRIMARY KEY (`id`);

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
-- Indeks untuk tabel `transactions`
--
ALTER TABLE `transactions`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `transaction_details`
--
ALTER TABLE `transaction_details`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `travel_packages`
--
ALTER TABLE `travel_packages`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `galleries`
--
ALTER TABLE `galleries`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT untuk tabel `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT untuk tabel `transactions`
--
ALTER TABLE `transactions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT untuk tabel `transaction_details`
--
ALTER TABLE `transaction_details`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT untuk tabel `travel_packages`
--
ALTER TABLE `travel_packages`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
