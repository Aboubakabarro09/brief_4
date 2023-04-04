CREATE TABLE `admin` (
  `id_admin` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `mot_de_passe` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

CREATE TABLE `avis` (
  `avis_id` int(11) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
  `avis` int(11) NOT NULL,
  `date` datetime(6) NOT NULL,
  `publication_id` int(11) UNSIGNED DEFAULT NULL,
  `email_users` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

CREATE TABLE `commentaire` (
  `idCom` int(11) UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY,
  `texte` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `idUser` int(11) UNSIGNED DEFAULT NULL,
  `email_users` text COLLATE utf8_unicode_ci NOT NULL,
  `idPost` int(11) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

CREATE TABLE `publication` (
  `id` int(11) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
  `titre` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `fonction` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `imagepub` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `texte` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `datepub` datetime(6) NOT NULL,
  `id_users` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;