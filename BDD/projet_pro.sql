-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost:3306
-- Généré le : mer. 07 sep. 2022 à 07:29
-- Version du serveur : 5.7.33
-- Version de PHP : 7.4.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `projet_pro`
--

-- --------------------------------------------------------

--
-- Structure de la table `comments`
--

CREATE TABLE `comments` (
  `comments_id` int(11) NOT NULL,
  `comments_rating` int(50) DEFAULT NULL,
  `comments_comment` tinytext,
  `comments_date` date DEFAULT NULL,
  `comments_validate` tinyint(1) DEFAULT NULL,
  `deals_id_DEALS` int(11) DEFAULT NULL,
  `users_id_USERS` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `deals`
--

CREATE TABLE `deals` (
  `deals_id` int(11) NOT NULL,
  `deals_title` varchar(50) DEFAULT NULL,
  `deals_when` text,
  `deals_where` tinytext,
  `deals_price` tinytext,
  `deals_map` varchar(255) DEFAULT NULL,
  `deals_metro` tinytext,
  `deals_info` tinytext,
  `deals_validate` tinyint(1) DEFAULT '0',
  `tag_arr_id_TAG_ARR` int(11) DEFAULT NULL,
  `users_id_USERS` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `deals`
--

INSERT INTO `deals` (`deals_id`, `deals_title`, `deals_when`, `deals_where`, `deals_price`, `deals_map`, `deals_metro`, `deals_info`, `deals_validate`, `tag_arr_id_TAG_ARR`, `users_id_USERS`) VALUES
(3, 'title', 'when', 'where', 'price', 'map', 'metro', 'info', 0, 13, 13),
(4, 'title', 'when', 'where', 'price', 'map', '0', 'info', 0, 12, 13),
(5, 'title', 'when', 'where', 'price', 'map', '0', 'info', 0, 1, 13),
(6, 'title', 'when', 'where', 'price', 'mzp', '0', 'info', 0, 13, 13),
(7, 'titl', 'when', 'where', 'price', 'map', '0', 'info', 0, 2, 13),
(8, 'title', 'when', 'where', 'price', 'map', '0', 'info', 0, 3, 13),
(9, 'titel', 'when', 'where', 'price', 'map', '0', 'info', 0, 1, 13),
(10, 'titel', 'when', 'where', 'price', 'mzp', '0', 'info', 0, 9, 13),
(11, 'title', 'when', 'where', 'price', 'maaaaap', '0', 'info', 0, 4, 13),
(12, 'titel', 'when', 'where', 'price', 'mapapapapapa', '0', 'info', 0, 2, 13),
(13, 'title', 'when', 'where', 'price', 'maaaaap', '0', 'info', 0, 9, 13),
(14, 'title', 'when', 'where', 'price', 'map', '0', 'info', 0, 2, 13),
(15, 'title', 'when', 'where', 'price', 'map', '0', 'info', 0, 13, 13),
(16, 'title', 'when', 'where', 'price', 'map', '0', 'info', 0, 4, 13),
(17, 'title', 'when', 'where', 'price', 'mazp', '0', 'in', 0, 4, 13),
(18, 'title', 'when', 'where', 'price', 'mzp', '0', 'info', 0, 4, 13),
(19, 'TITTITITI', 'TITITITI', 'TITITITIT', 'ITITITIT', 'IIIII', '0', 'ITIII', 0, 4, 13),
(20, 'aa', 'aa', 'aa', 'aa', 'aa', '0', 'aa', 0, 1, 13),
(21, 'aa', 'aa', 'aa', 'aa', 'aa', '0', 'aa', 0, 11, 13),
(22, 'a', 'a', 'a', 'a', 'a', '0', 'a', 0, 2, 13),
(23, 'b', 'b', 'b', 'b', 'b', '0', 'b', 0, 10, 13),
(24, 'zz', 'zz', 'zz', 'zz', 'zz', '0', 'zz', 0, 3, 13),
(25, 'e', 'e', 'e', 'e', 'e', '0', 'e', 0, 5, 13),
(26, 'QQ', 'QQ', 'QQ', 'QQ', 'QSQ', '0', 'QQ', 0, 6, 13),
(27, 'title', 'when', 'where', 'price', 'mazp', '0', 'info', 0, 3, 13),
(28, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL),
(31, 'deals_title', 'deals_when', 'deals_where', 'deals_price', 'deals_map', 'deals_metro', 'deals_info', 0, 1, 10),
(32, 'Z', 'Z', 'Z', 'Z', 'Z', 'Z', 'Z', 0, 11, 13),
(33, 'Q', 'Q', 'Q', 'Q', 'Q', 'Q', 'Q', 0, 12, 13),
(34, 'Q', 'Q', 'Q', 'Q', 'Q', 'Q', 'Q', 0, 3, 13),
(35, 'q', 'q', 'q', 'q', 'q', 'q', 'q', 0, 4, 13),
(36, 'W', 'W', 'W', 'W', 'W', 'W', 'W', 0, 2, 13),
(37, 'd', 'd', 'd', 'd', 'd', 'd', 'd', 0, 2, 13),
(38, 'a', 'a', 'a', 'a', 'a', 'a', 'a', 0, 1, 13),
(39, 'z', 'z', 'z', 'z', 'z', 'z', 'z', 0, 3, 13),
(40, 'e', 'e', 'e', 'e', 'e', 'e', 'e', 0, 4, 13),
(41, 'r', 'r', 'r', 'r', 'r', 'r', 'r', 0, 3, 13),
(42, 'e', 'e', 'e', 'e', 'e', 'e', 'e', 0, 4, 13),
(43, 'a', 'a', 'a', 'a', 'a', 'a', 'a', 0, 4, 13);

-- --------------------------------------------------------

--
-- Structure de la table `deals_has_cat`
--

CREATE TABLE `deals_has_cat` (
  `tag_categories_id_TAG_CATEGORIES` int(11) NOT NULL,
  `deals_id_DEALS` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `deals_has_cat`
--

INSERT INTO `deals_has_cat` (`tag_categories_id_TAG_CATEGORIES`, `deals_id_DEALS`) VALUES
(1, 10),
(2, 10),
(1, 11),
(1, 12),
(1, 19),
(1, 20),
(1, 21),
(2, 21),
(1, 23),
(1, 24),
(1, 25),
(1, 26),
(1, 27),
(1, 32),
(2, 40),
(1, 41),
(2, 41),
(3, 41),
(1, 43),
(2, 43),
(3, 43);

-- --------------------------------------------------------

--
-- Structure de la table `images`
--

CREATE TABLE `images` (
  `images_id` int(11) NOT NULL,
  `images_name` varchar(50) DEFAULT NULL,
  `deals_id_DEALS` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `role`
--

CREATE TABLE `role` (
  `role_id` int(11) NOT NULL,
  `role_role` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `role`
--

INSERT INTO `role` (`role_id`, `role_role`) VALUES
(1, 'super_admin'),
(2, 'moderateur'),
(3, 'utilisateur'),
(4, 'anonymous');

-- --------------------------------------------------------

--
-- Structure de la table `tag_arr`
--

CREATE TABLE `tag_arr` (
  `tag_arr_id` int(11) NOT NULL,
  `tag_arr_name` varchar(50) DEFAULT NULL,
  `tag_arr_picture` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `tag_arr`
--

INSERT INTO `tag_arr` (`tag_arr_id`, `tag_arr_name`, `tag_arr_picture`) VALUES
(1, '1st Arrondissement', '1arrondissement'),
(2, '2nd Arrondissement', '2arrondissement'),
(3, '3rd Arrondissement', '3arrondissement'),
(4, '4th Arrondissement', '4arrondissement'),
(5, '5th Arrondissement', '5arrondissement'),
(6, '6th Arrondissement', '6arrondissement'),
(7, '7th Arrondissement', '7arrondissement'),
(8, '8th Arrondissement', '8arrondissement'),
(9, '9th Arrondissement', '9arrondissement'),
(10, '10th Arrondissement', '10arrondissement'),
(11, '11th Arrondissement', '11arrondissement'),
(12, '12th Arrondissement', '12arrondissement'),
(13, '13th Arrondissement', '13arrondissement'),
(14, '14th Arrondissement', '14arrondissement'),
(15, '15th Arrondissement', '15arrondissement'),
(16, '16th Arrondissement', '16arrondissement'),
(17, '17th Arrondissement', '17arrondissement'),
(18, '18th Arrondissement', '18arrondissement'),
(19, '19th Arrondissement', '19arrondissement'),
(20, '20th Arrondissement', '20arrondissement');

-- --------------------------------------------------------

--
-- Structure de la table `tag_categories`
--

CREATE TABLE `tag_categories` (
  `tag_categories_id` int(11) NOT NULL,
  `tag_categories_name` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `tag_categories`
--

INSERT INTO `tag_categories` (`tag_categories_id`, `tag_categories_name`) VALUES
(1, 'Museum'),
(2, 'Beauty'),
(3, 'Nature');

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE `users` (
  `users_id` int(11) NOT NULL,
  `users_username` varchar(50) DEFAULT NULL,
  `users_name` varchar(25) DEFAULT NULL,
  `users_surname` varchar(50) DEFAULT NULL,
  `users_mail` varchar(100) DEFAULT NULL,
  `users_password` tinytext,
  `role_id_ROLE` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`users_id`, `users_username`, `users_name`, `users_surname`, `users_mail`, `users_password`, `role_id_ROLE`) VALUES
(10, 'Mikadu76', 'Mika', 'Votte', 'mika@mika.fr', '$2y$10$MLIf1rfzD5piGXwn5msXPeYRZm6jCSzdibBV9FXweR/DioXQ8Atki', 3),
(11, 'StellaDu76', 'Stella', 'Zenon', 'stella@stella.fr', '$2y$10$2S1MG2eg220fPkNawbGOX.HmzR3RikJSrUW9.MJdyeqWtZo3ek1Qm', 3),
(12, 'Anoudu76', 'Anousone', 'Mounivong', 'anou@anou.fr', '$2y$10$waHHFokDLk6FNKMlAX1RseRhN.ximosoD5BTM2cPQRM3foxIdT.Vy', 3),
(13, 'Admin', 'Sophie', 'Toussaint', 'admin@admin.fr', '$2y$10$Wlha4Ag3rPP94TnY9HoKd.HCISLMVg1sExrNscpkhifOSehn6.SVO', 1);

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`comments_id`),
  ADD KEY `FK_COMMENTS_deals_id_DEALS` (`deals_id_DEALS`),
  ADD KEY `FK_COMMENTS_users_id_USERS` (`users_id_USERS`);

--
-- Index pour la table `deals`
--
ALTER TABLE `deals`
  ADD PRIMARY KEY (`deals_id`),
  ADD KEY `FK_DEALS_tag_arr_id_TAG_ARR` (`tag_arr_id_TAG_ARR`),
  ADD KEY `FK_DEALS_users_id_USERS` (`users_id_USERS`);

--
-- Index pour la table `deals_has_cat`
--
ALTER TABLE `deals_has_cat`
  ADD PRIMARY KEY (`tag_categories_id_TAG_CATEGORIES`,`deals_id_DEALS`),
  ADD KEY `FK_Deals_Has_Cat_deals_id_DEALS` (`deals_id_DEALS`);

--
-- Index pour la table `images`
--
ALTER TABLE `images`
  ADD PRIMARY KEY (`images_id`),
  ADD KEY `FK_images_deals_id_DEALS` (`deals_id_DEALS`);

--
-- Index pour la table `role`
--
ALTER TABLE `role`
  ADD PRIMARY KEY (`role_id`);

--
-- Index pour la table `tag_arr`
--
ALTER TABLE `tag_arr`
  ADD PRIMARY KEY (`tag_arr_id`);

--
-- Index pour la table `tag_categories`
--
ALTER TABLE `tag_categories`
  ADD PRIMARY KEY (`tag_categories_id`);

--
-- Index pour la table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`users_id`),
  ADD KEY `FK_USERS_role_id_ROLE` (`role_id_ROLE`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `comments`
--
ALTER TABLE `comments`
  MODIFY `comments_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `deals`
--
ALTER TABLE `deals`
  MODIFY `deals_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;

--
-- AUTO_INCREMENT pour la table `images`
--
ALTER TABLE `images`
  MODIFY `images_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `role`
--
ALTER TABLE `role`
  MODIFY `role_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT pour la table `tag_arr`
--
ALTER TABLE `tag_arr`
  MODIFY `tag_arr_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT pour la table `tag_categories`
--
ALTER TABLE `tag_categories`
  MODIFY `tag_categories_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT pour la table `users`
--
ALTER TABLE `users`
  MODIFY `users_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `comments`
--
ALTER TABLE `comments`
  ADD CONSTRAINT `FK_COMMENTS_deals_id_DEALS` FOREIGN KEY (`deals_id_DEALS`) REFERENCES `deals` (`deals_id`),
  ADD CONSTRAINT `FK_COMMENTS_users_id_USERS` FOREIGN KEY (`users_id_USERS`) REFERENCES `users` (`users_id`);

--
-- Contraintes pour la table `deals`
--
ALTER TABLE `deals`
  ADD CONSTRAINT `FK_DEALS_tag_arr_id_TAG_ARR` FOREIGN KEY (`tag_arr_id_TAG_ARR`) REFERENCES `tag_arr` (`tag_arr_id`),
  ADD CONSTRAINT `FK_DEALS_users_id_USERS` FOREIGN KEY (`users_id_USERS`) REFERENCES `users` (`users_id`);

--
-- Contraintes pour la table `deals_has_cat`
--
ALTER TABLE `deals_has_cat`
  ADD CONSTRAINT `FK_Deals_Has_Cat_deals_id_DEALS` FOREIGN KEY (`deals_id_DEALS`) REFERENCES `deals` (`deals_id`),
  ADD CONSTRAINT `FK_Deals_Has_Cat_tag_categories_id_TAG_CATEGORIES` FOREIGN KEY (`tag_categories_id_TAG_CATEGORIES`) REFERENCES `tag_categories` (`tag_categories_id`);

--
-- Contraintes pour la table `images`
--
ALTER TABLE `images`
  ADD CONSTRAINT `FK_images_deals_id_DEALS` FOREIGN KEY (`deals_id_DEALS`) REFERENCES `deals` (`deals_id`);

--
-- Contraintes pour la table `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `FK_USERS_role_id_ROLE` FOREIGN KEY (`role_id_ROLE`) REFERENCES `role` (`role_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
