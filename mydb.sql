-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 17 Des 2023 pada 14.43
-- Versi server: 10.4.32-MariaDB
-- Versi PHP: 8.1.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `laravel`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `books`
--

CREATE TABLE `books` (
  `idbuku` bigint(20) UNSIGNED NOT NULL,
  `judulbuku` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `buku`
--

CREATE TABLE `buku` (
  `idbuku` int(11) NOT NULL,
  `judulbuku` varchar(45) NOT NULL,
  `kategori_idkategori` int(11) NOT NULL,
  `stok` int(20) NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data untuk tabel `buku`
--

INSERT INTO `buku` (`idbuku`, `judulbuku`, `kategori_idkategori`, `stok`, `updated_at`) VALUES
(1, 'membaca', 1, 20, '2023-12-16 22:05:12'),
(2, 'mendengar', 2, 30, '2023-12-16 16:21:47'),
(3, 'menulis', 1, 30, '2023-12-16 16:21:47');

-- --------------------------------------------------------

--
-- Struktur dari tabel `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `kategori`
--

CREATE TABLE `kategori` (
  `idkategori` int(11) NOT NULL,
  `listkategori` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data untuk tabel `kategori`
--

INSERT INTO `kategori` (`idkategori`, `listkategori`) VALUES
(1, 'pendidikan'),
(2, 'master baca');

-- --------------------------------------------------------

--
-- Struktur dari tabel `meminjam`
--

CREATE TABLE `meminjam` (
  `idmeminjam` int(11) NOT NULL,
  `tanggal_pengambilan` date NOT NULL,
  `tanggal_pengembalian` date NOT NULL,
  `anggotaperpus_idanggota` int(11) NOT NULL,
  `salinanbuku_idsalinanbuku` int(11) NOT NULL,
  `petugas_perpus_idpetugas` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
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
(5, '2023_12_11_030249_create_books_table', 2);

-- --------------------------------------------------------

--
-- Struktur dari tabel `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `peminjaman`
--

CREATE TABLE `peminjaman` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `buku_id` bigint(20) UNSIGNED NOT NULL,
  `tanggal_peminjaman` date NOT NULL,
  `tanggal_pengambilan` date NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `peminjaman`
--

INSERT INTO `peminjaman` (`id`, `user_id`, `buku_id`, `tanggal_peminjaman`, `tanggal_pengambilan`, `created_at`, `updated_at`) VALUES
(1, 1, 1, '2023-12-17', '2023-12-17', '2023-12-16 22:02:00', '2023-12-16 22:02:00'),
(2, 1, 1, '2023-12-17', '2023-12-17', '2023-12-16 22:04:21', '2023-12-16 22:04:21'),
(3, 2, 1, '2023-12-17', '2023-12-17', '2023-12-16 22:05:12', '2023-12-16 22:05:12');

-- --------------------------------------------------------

--
-- Struktur dari tabel `penerbit`
--

CREATE TABLE `penerbit` (
  `idpenerbit` int(11) NOT NULL,
  `namapenerbit` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data untuk tabel `penerbit`
--

INSERT INTO `penerbit` (`idpenerbit`, `namapenerbit`) VALUES
(1, 'penerbit a'),
(2, 'penerbit b');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pengarang`
--

CREATE TABLE `pengarang` (
  `idpengarang` int(11) NOT NULL,
  `namapengarang` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data untuk tabel `pengarang`
--

INSERT INTO `pengarang` (`idpengarang`, `namapengarang`) VALUES
(1, 'siti'),
(2, 'maidah'),
(3, 'junaide');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pengarangbuku`
--

CREATE TABLE `pengarangbuku` (
  `buku_idbuku` int(11) NOT NULL,
  `pengarang_idpengarang` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data untuk tabel `pengarangbuku`
--

INSERT INTO `pengarangbuku` (`buku_idbuku`, `pengarang_idpengarang`) VALUES
(1, 3),
(1, 2),
(1, 1),
(2, 2),
(2, 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `salinanbuku`
--

CREATE TABLE `salinanbuku` (
  `idsalinanbuku` int(11) NOT NULL,
  `tahunterbit` int(11) NOT NULL,
  `buku_idbuku` int(11) NOT NULL,
  `penerbit_idpenerbit` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data untuk tabel `salinanbuku`
--

INSERT INTO `salinanbuku` (`idsalinanbuku`, `tahunterbit`, `buku_idbuku`, `penerbit_idpenerbit`) VALUES
(1, 2023, 1, 1),
(2, 2023, 2, 2);

-- --------------------------------------------------------

--
-- Struktur dari tabel `team`
--

CREATE TABLE `team` (
  `idteam` bigint(20) UNSIGNED NOT NULL,
  `nama` varchar(45) NOT NULL,
  `asal` varchar(45) NOT NULL,
  `role` varchar(45) NOT NULL,
  `foto` varchar(45) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `team`
--

INSERT INTO `team` (`idteam`, `nama`, `asal`, `role`, `foto`, `created_at`, `updated_at`) VALUES
(1, 'yanto', 'jakarta', 'petugas', 'petugas1.jpg', '2023-12-15 19:53:20', '2023-12-15 19:53:21'),
(2, 'yuni', 'bogor', 'kasir', 'kasir1.jpg', '2023-12-14 19:53:20', '2023-12-15 19:53:20');

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `iduser` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`iduser`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'admin1@gmail.com', NULL, '$2y$10$gpMqivd/Jkf8Jtw1a8L1zeHLMCGxxiuQdRtLZJFtaG9mIW9/7Ag9i', NULL, '2023-12-08 08:09:50', '2023-12-08 08:09:50'),
(2, 'wan', 'wan123@gmail.com', NULL, '$2y$10$7Kc.ozJDWuxX6GfelVOUgukrfIgtdLeNDFiJk8h4Qa2jtfW7R1NeK', NULL, '2023-12-08 13:24:17', '2023-12-08 13:24:17'),
(3, 'yaya123', 'yaya@gmail.com', NULL, '$2y$10$cyE6iX91e2hhHuO93MgGYO/J.nYFzhykQxOYA33FTEE3/nfQM5oZO', NULL, '2023-12-15 12:47:48', '2023-12-15 12:47:48');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `books`
--
ALTER TABLE `books`
  ADD PRIMARY KEY (`idbuku`);

--
-- Indeks untuk tabel `buku`
--
ALTER TABLE `buku`
  ADD PRIMARY KEY (`idbuku`),
  ADD KEY `fk_buku_kategori1` (`kategori_idkategori`);

--
-- Indeks untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indeks untuk tabel `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`idkategori`);

--
-- Indeks untuk tabel `meminjam`
--
ALTER TABLE `meminjam`
  ADD PRIMARY KEY (`idmeminjam`),
  ADD KEY `fk_meminjam_salinanbuku1` (`salinanbuku_idsalinanbuku`);

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
-- Indeks untuk tabel `peminjaman`
--
ALTER TABLE `peminjaman`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `penerbit`
--
ALTER TABLE `penerbit`
  ADD PRIMARY KEY (`idpenerbit`);

--
-- Indeks untuk tabel `pengarang`
--
ALTER TABLE `pengarang`
  ADD PRIMARY KEY (`idpengarang`);

--
-- Indeks untuk tabel `pengarangbuku`
--
ALTER TABLE `pengarangbuku`
  ADD KEY `fk_pengarangbuku_buku` (`buku_idbuku`),
  ADD KEY `fk_pengarangbuku_pengarang1` (`pengarang_idpengarang`);

--
-- Indeks untuk tabel `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indeks untuk tabel `salinanbuku`
--
ALTER TABLE `salinanbuku`
  ADD PRIMARY KEY (`idsalinanbuku`),
  ADD KEY `fk_salinanbuku_buku1` (`buku_idbuku`),
  ADD KEY `fk_salinanbuku_penerbit1` (`penerbit_idpenerbit`);

--
-- Indeks untuk tabel `team`
--
ALTER TABLE `team`
  ADD PRIMARY KEY (`idteam`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`iduser`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `books`
--
ALTER TABLE `books`
  MODIFY `idbuku` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `meminjam`
--
ALTER TABLE `meminjam`
  MODIFY `idmeminjam` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `peminjaman`
--
ALTER TABLE `peminjaman`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `team`
--
ALTER TABLE `team`
  MODIFY `idteam` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `iduser` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `buku`
--
ALTER TABLE `buku`
  ADD CONSTRAINT `fk_buku_kategori1` FOREIGN KEY (`kategori_idkategori`) REFERENCES `kategori` (`idkategori`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Ketidakleluasaan untuk tabel `meminjam`
--
ALTER TABLE `meminjam`
  ADD CONSTRAINT `fk_meminjam_salinanbuku1` FOREIGN KEY (`salinanbuku_idsalinanbuku`) REFERENCES `salinanbuku` (`idsalinanbuku`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Ketidakleluasaan untuk tabel `pengarangbuku`
--
ALTER TABLE `pengarangbuku`
  ADD CONSTRAINT `fk_pengarangbuku_buku` FOREIGN KEY (`buku_idbuku`) REFERENCES `buku` (`idbuku`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_pengarangbuku_pengarang1` FOREIGN KEY (`pengarang_idpengarang`) REFERENCES `pengarang` (`idpengarang`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Ketidakleluasaan untuk tabel `salinanbuku`
--
ALTER TABLE `salinanbuku`
  ADD CONSTRAINT `fk_salinanbuku_buku1` FOREIGN KEY (`buku_idbuku`) REFERENCES `buku` (`idbuku`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_salinanbuku_penerbit1` FOREIGN KEY (`penerbit_idpenerbit`) REFERENCES `penerbit` (`idpenerbit`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
