-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Creato il: Mar 18, 2024 alle 22:06
-- Versione del server: 10.4.28-MariaDB
-- Versione PHP: 8.2.4

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
-- Struttura della tabella `attivitas`
--

CREATE TABLE `attivitas` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nome` varchar(255) NOT NULL,
  `descrizione` text DEFAULT NULL,
  `stato` enum('attivo','concluso','in_corso') NOT NULL DEFAULT 'attivo',
  `progetto_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dump dei dati per la tabella `attivitas`
--

INSERT INTO `attivitas` (`id`, `nome`, `descrizione`, `stato`, `progetto_id`, `created_at`, `updated_at`) VALUES
(2, 'Distinctio voluptatibus laborum dicta molestiae doloribus possimus sunt.', 'Nisi impedit molestiae excepturi voluptas. Accusantium beatae corporis ut doloremque. Earum voluptas ut aut sint.', 'concluso', 15, '2024-03-17 11:30:24', '2024-03-17 11:30:24'),
(4, 'Eligendi qui consectetur praesentium voluptates.', 'Saepe non possimus a sunt ipsum iusto quod. Labore dicta possimus maxime et reprehenderit architecto. Ex omnis modi velit beatae veniam.', 'in_corso', 14, '2024-03-17 11:30:24', '2024-03-17 11:30:24'),
(5, 'Nostrum non nulla nostrum voluptas aut hic aut.', 'Et quia et optio in et dolores voluptatibus. Expedita et error nihil. Ab quaerat ipsa cumque vitae. Repudiandae id quisquam cum et necessitatibus omnis.', 'concluso', 10, '2024-03-17 11:30:24', '2024-03-17 11:30:24'),
(8, 'Animi consequuntur quis quibusdam magnam.', 'Accusantium voluptas voluptatem iure reprehenderit quae eius ad laudantium. Explicabo velit magnam quod placeat. Optio sunt cumque libero quia deserunt quia. Rerum voluptatum aperiam reiciendis.', 'concluso', 15, '2024-03-17 11:30:24', '2024-03-17 11:30:24'),
(10, 'Dolore et impedit accusantium error.', 'Nihil sed ut odit. Saepe ut magnam temporibus officia et. Temporibus omnis ut quibusdam et. Magni molestiae nostrum ea quam.', 'in_corso', 11, '2024-03-17 11:30:24', '2024-03-17 11:30:24');

-- --------------------------------------------------------

--
-- Struttura della tabella `failed_jobs`
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
-- Struttura della tabella `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dump dei dati per la tabella `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(9, '2024_03_15_141600_create_progettos_table', 2),
(10, '2024_03_15_141629_create_attivitas_table', 2);

-- --------------------------------------------------------

--
-- Struttura della tabella `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struttura della tabella `personal_access_tokens`
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
-- Struttura della tabella `progettos`
--

CREATE TABLE `progettos` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nome` varchar(255) NOT NULL,
  `descrizione` text DEFAULT NULL,
  `stato` enum('attivo','concluso','in_corso') NOT NULL DEFAULT 'attivo',
  `utente_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dump dei dati per la tabella `progettos`
--

INSERT INTO `progettos` (`id`, `nome`, `descrizione`, `stato`, `utente_id`, `created_at`, `updated_at`) VALUES
(8, 'Ab aut doloremque aspernatur temporibus sint.', 'Earum magnam ipsa doloremque aut adipisci. Amet blanditiis voluptatibus illum ut consectetur et.', 'concluso', 9, '2024-03-17 11:29:31', '2024-03-17 11:29:31'),
(9, 'Neque facere eum animi ad consequatur.', 'Aut culpa quas sed nostrum cupiditate neque neque fugit. Excepturi adipisci deleniti voluptas qui voluptatem voluptatem numquam. Quo asperiores aliquid pariatur odio itaque autem ut.', 'in_corso', 8, '2024-03-17 11:29:31', '2024-03-17 11:29:31'),
(10, 'Qui ut minus quas quibusdam.', 'Excepturi reprehenderit doloribus neque est impedit unde. Consequatur fuga tempore omnis necessitatibus molestiae. Odio eum illum nam ipsum praesentium dignissimos excepturi. Id sint quia nihil omnis omnis et.', 'in_corso', 9, '2024-03-17 11:29:31', '2024-03-17 11:29:31'),
(11, 'Ut vel quia ut.', 'Id tempora nobis beatae nihil officiis blanditiis. Ea itaque aliquid nam ullam occaecati. Harum reprehenderit et natus et tempore. Velit id autem qui nostrum quaerat.', 'concluso', 1, '2024-03-17 11:30:24', '2024-03-17 11:30:24'),
(12, 'Inventore dolorum tempore ducimus molestiae perferendis rerum rem.', 'Quia minus est aut labore ullam. Omnis sed quia eum enim et expedita. Tempora sequi saepe perferendis. Temporibus ducimus nisi perspiciatis delectus. Blanditiis rerum magnam distinctio similique repellendus libero expedita.', 'in_corso', 9, '2024-03-17 11:30:24', '2024-03-17 11:30:24'),
(13, 'Dolores earum commodi quia quam ducimus ut ea.', 'Nostrum nulla ex voluptatem distinctio aut veniam quis. Voluptatem et nemo est hic. Et qui suscipit modi molestias labore qui excepturi.', 'concluso', 1, '2024-03-17 11:30:24', '2024-03-17 11:30:24'),
(14, 'Voluptatum voluptas et ea quidem dolorem aliquam error.', 'Facere et optio et quaerat id perferendis. Culpa consequatur soluta exercitationem quia tempora. Alias ratione nobis consequatur hic consequatur unde architecto.', 'concluso', 9, '2024-03-17 11:30:24', '2024-03-17 11:30:24'),
(15, 'Voluptatibus rerum non nostrum occaecati.', 'Eos numquam provident consectetur. Placeat ut molestiae ut placeat soluta distinctio. Dignissimos eos quidem quis numquam quia neque temporibus. Natus minus ut sit quia.', 'in_corso', 1, '2024-03-17 11:30:24', '2024-03-17 11:30:24'),
(16, 'Minus dolores ut sint praesentium ut voluptatem quia.', 'Natus id debitis qui doloremque quasi mollitia officiis. Blanditiis qui et magnam praesentium aspernatur. Voluptatem harum quia odit aut. Nisi quia inventore omnis aut velit temporibus.', 'in_corso', 7, '2024-03-17 11:30:24', '2024-03-17 11:30:24'),
(17, 'Deleniti repellendus tenetur quos maiores qui velit et dignissimos.', 'Delectus ipsum sapiente occaecati earum. Id et voluptatem aut facilis quia veritatis sint doloribus. Eum quis non et qui soluta molestias.', 'in_corso', 8, '2024-03-17 11:30:24', '2024-03-17 11:30:24'),
(18, 'Eos at itaque quas voluptates eum voluptates sunt.', 'Maiores quia molestias perferendis enim repellat similique. Pariatur cumque ex voluptas ea. Voluptates itaque asperiores sint aperiam delectus maiores.', 'concluso', 8, '2024-03-17 11:30:24', '2024-03-17 11:30:24'),
(19, 'Id dolorem architecto veritatis dicta.', 'Aut repellendus voluptas quaerat molestiae. Dignissimos et labore occaecati ea tempore nisi repellat. Aut harum suscipit dolor odit sit. Maiores cupiditate sapiente eligendi explicabo eligendi incidunt aut.', 'in_corso', 3, '2024-03-17 11:30:24', '2024-03-18 12:43:21'),
(20, 'Voluptatem iste laborum accusamus at.', 'Et dolorem quia facilis qui tempora. Quibusdam ut ipsa impedit veniam. Non amet autem error exercitationem dolor. Ut unde est neque rem itaque.', 'concluso', 8, '2024-03-17 11:30:24', '2024-03-17 11:30:24');

-- --------------------------------------------------------

--
-- Struttura della tabella `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dump dei dati per la tabella `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Admin', 'admin@example.com', '2024-03-16 17:43:13', '$2y$12$EKD2jDZHD2iU/vXrLt6Woea6yzzaXqgi6d6019lmjJ6TUUGFjvRJa', 'FkOa20c6LABIqujd91MNIX6h11WrPFqzT63BNOg3CQ0Up1sExSggT5yF4zQG', '2024-03-16 17:43:13', '2024-03-16 17:43:13'),
(2, 'Ayla Kozey', 'mariano81@example.com', '2024-03-16 17:43:13', '$2y$12$YGQ.j7iNz9b0X3vHHH.X/OfeyHwOz6WzdVZUeYeyGYf5lxS.SWbXW', 'rtcPYNYwCB', '2024-03-16 17:43:13', '2024-03-16 17:43:13'),
(3, 'Chelsey Spencer', 'clementina82@example.net', '2024-03-16 17:43:13', '$2y$12$YGQ.j7iNz9b0X3vHHH.X/OfeyHwOz6WzdVZUeYeyGYf5lxS.SWbXW', '3UaKUVQkcx', '2024-03-16 17:43:13', '2024-03-16 17:43:13'),
(6, 'Patricia Crona', 'ole.wunsch@example.org', '2024-03-17 11:27:10', '$2y$12$MSlRZhL6DmpNBgLlK4dzRO640YOwsVVPJihN57FpcJJZvBGEHHn9a', 'RQqbEl6hFN', '2024-03-17 11:27:10', '2024-03-17 11:27:10'),
(7, 'Angeline Hudson', 'swaniawski.chaya@example.com', '2024-03-17 11:27:10', '$2y$12$MSlRZhL6DmpNBgLlK4dzRO640YOwsVVPJihN57FpcJJZvBGEHHn9a', 'vdpOmjMC9a', '2024-03-17 11:27:10', '2024-03-17 11:27:10'),
(8, 'Dahlia Hansen DDS', 'rhea86@example.org', '2024-03-17 11:29:31', '$2y$12$eH8KIAvO5geB0SYIPzJNcetaP0FE.ExPHJWuq4BiE9KlBUkCYyyVi', 'Rd8Yeb3gEs', '2024-03-17 11:29:31', '2024-03-17 11:29:31'),
(9, 'Pascale Harber MD', 'amara.hayes@example.org', '2024-03-17 11:29:31', '$2y$12$eH8KIAvO5geB0SYIPzJNcetaP0FE.ExPHJWuq4BiE9KlBUkCYyyVi', 'Yfi7NLR5Bx', '2024-03-17 11:29:31', '2024-03-17 11:29:31'),
(10, 'Miss Virginie Wuckert', 'dmarks@example.org', '2024-03-17 11:30:23', '$2y$12$q9cpyWgrFuaBNVss0UmuDOLbHL7krzDKUhCQroMltYluEKJ5a5/E6', 'Em6X1x4t9I', '2024-03-17 11:30:23', '2024-03-17 11:30:23'),
(11, 'Odie Schinner DVM', 'wisoky.myrl@example.net', '2024-03-17 11:30:23', '$2y$12$q9cpyWgrFuaBNVss0UmuDOLbHL7krzDKUhCQroMltYluEKJ5a5/E6', 'oMu4QJjfxp', '2024-03-17 11:30:24', '2024-03-17 11:30:24');

--
-- Indici per le tabelle scaricate
--

--
-- Indici per le tabelle `attivitas`
--
ALTER TABLE `attivitas`
  ADD PRIMARY KEY (`id`),
  ADD KEY `attivitas_progetto_id_foreign` (`progetto_id`);

--
-- Indici per le tabelle `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indici per le tabelle `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indici per le tabelle `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indici per le tabelle `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indici per le tabelle `progettos`
--
ALTER TABLE `progettos`
  ADD PRIMARY KEY (`id`),
  ADD KEY `progettos_utente_id_foreign` (`utente_id`);

--
-- Indici per le tabelle `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT per le tabelle scaricate
--

--
-- AUTO_INCREMENT per la tabella `attivitas`
--
ALTER TABLE `attivitas`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT per la tabella `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT per la tabella `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT per la tabella `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT per la tabella `progettos`
--
ALTER TABLE `progettos`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT per la tabella `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- Limiti per le tabelle scaricate
--

--
-- Limiti per la tabella `attivitas`
--
ALTER TABLE `attivitas`
  ADD CONSTRAINT `attivitas_progetto_id_foreign` FOREIGN KEY (`progetto_id`) REFERENCES `progettos` (`id`) ON DELETE CASCADE;

--
-- Limiti per la tabella `progettos`
--
ALTER TABLE `progettos`
  ADD CONSTRAINT `progettos_utente_id_foreign` FOREIGN KEY (`utente_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
