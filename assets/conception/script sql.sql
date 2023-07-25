-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost:3306
-- Généré le : mer. 05 juil. 2023 à 09:48
-- Version du serveur : 8.0.30
-- Version de PHP : 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `la_conquête_des_dofus`
--

-- --------------------------------------------------------

--
-- Structure de la table `have`
--

CREATE TABLE `have` (
  `id` int NOT NULL,
  `id_advices` int NOT NULL,
  `id_monsters` int NOT NULL,
  `id_classes` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Structure de la table `jgh99_advices`
--

CREATE TABLE `jgh99_advices` (
  `id` int NOT NULL,
  `content` text COLLATE utf8mb4_general_ci NOT NULL,
  `title` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `date` date NOT NULL,
  `id_users` int NOT NULL,
  `id_games` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Structure de la table `jgh99_classes`
--

CREATE TABLE `jgh99_classes` (
  `id` int NOT NULL,
  `name` varchar(20) COLLATE utf8mb4_general_ci NOT NULL,
  `description` text COLLATE utf8mb4_general_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Structure de la table `jgh99_comments`
--

CREATE TABLE `jgh99_comments` (
  `id` int NOT NULL,
  `content` text COLLATE utf8mb4_general_ci NOT NULL,
  `datetime` datetime NOT NULL,
  `id_advices` int NOT NULL,
  `id_users` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Structure de la table `jgh99_dungeons`
--

CREATE TABLE `jgh99_dungeons` (
  `id` int NOT NULL,
  `name` varchar(20) COLLATE utf8mb4_general_ci NOT NULL,
  `description` text COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Structure de la table `jgh99_elements`
--

CREATE TABLE `jgh99_elements` (
  `id` int NOT NULL,
  `name` varchar(20) COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Structure de la table `jgh99_games`
--

CREATE TABLE `jgh99_games` (
  `id` int NOT NULL,
  `name` varchar(20) COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Structure de la table `jgh99_monsters`
--

CREATE TABLE `jgh99_monsters` (
  `id` int NOT NULL,
  `name` varchar(20) COLLATE utf8mb4_general_ci NOT NULL,
  `hpmin` int NOT NULL,
  `hpmax` int NOT NULL,
  `pa` int NOT NULL,
  `pm` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Structure de la table `jgh99_quests`
--

CREATE TABLE `jgh99_quests` (
  `id` int NOT NULL,
  `name` varchar(20) COLLATE utf8mb4_general_ci NOT NULL,
  `description` text COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Structure de la table `jgh99_ranks`
--

CREATE TABLE `jgh99_ranks` (
  `id` int NOT NULL,
  `name` varchar(30) COLLATE utf8mb4_general_ci NOT NULL,
  `description` text COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Structure de la table `jgh99_resistances`
--

CREATE TABLE `jgh99_resistances` (
  `id` int NOT NULL,
  `pourcentagemin` int NOT NULL,
  `pourcentagemax` int NOT NULL,
  `id_elements` int NOT NULL,
  `id_monsters` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Structure de la table `jgh99_roles`
--

CREATE TABLE `jgh99_roles` (
  `id` int NOT NULL,
  `name` varchar(20) COLLATE utf8mb4_general_ci NOT NULL,
  `description` text COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Structure de la table `jgh99_users`
--

CREATE TABLE `jgh99_users` (
  `id` int NOT NULL,
  `username` varchar(20) COLLATE utf8mb4_general_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `email` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `id_roles` int NOT NULL,
  `id_ranks` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `have`
--
ALTER TABLE `have`
  ADD PRIMARY KEY (`id`,`id_advices`,`id_monsters`,`id_classes`),
  ADD KEY `have_advices0_FK` (`id_advices`),
  ADD KEY `have_monsters1_FK` (`id_monsters`),
  ADD KEY `have_classes2_FK` (`id_classes`);

--
-- Index pour la table `jgh99_advices`
--
ALTER TABLE `jgh99_advices`
  ADD PRIMARY KEY (`id`),
  ADD KEY `advices_users_FK` (`id_users`),
  ADD KEY `advices_games0_FK` (`id_games`);

--
-- Index pour la table `jgh99_classes`
--
ALTER TABLE `jgh99_classes`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `jgh99_comments`
--
ALTER TABLE `jgh99_comments`
  ADD PRIMARY KEY (`id`),
  ADD KEY `comments_advices_FK` (`id_advices`),
  ADD KEY `comments_users0_FK` (`id_users`);

--
-- Index pour la table `jgh99_dungeons`
--
ALTER TABLE `jgh99_dungeons`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `jgh99_elements`
--
ALTER TABLE `jgh99_elements`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `jgh99_games`
--
ALTER TABLE `jgh99_games`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `jgh99_monsters`
--
ALTER TABLE `jgh99_monsters`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `jgh99_quests`
--
ALTER TABLE `jgh99_quests`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `jgh99_ranks`
--
ALTER TABLE `jgh99_ranks`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `jgh99_resistances`
--
ALTER TABLE `jgh99_resistances`
  ADD PRIMARY KEY (`id`),
  ADD KEY `resistances_elements_FK` (`id_elements`),
  ADD KEY `resistances_monsters0_FK` (`id_monsters`);

--
-- Index pour la table `jgh99_roles`
--
ALTER TABLE `jgh99_roles`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `jgh99_users`
--
ALTER TABLE `jgh99_users`
  ADD PRIMARY KEY (`id`),
  ADD KEY `users_roles_FK` (`id_roles`),
  ADD KEY `users_ranks0_FK` (`id_ranks`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `jgh99_advices`
--
ALTER TABLE `jgh99_advices`
  MODIFY `id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `jgh99_classes`
--
ALTER TABLE `jgh99_classes`
  MODIFY `id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `jgh99_comments`
--
ALTER TABLE `jgh99_comments`
  MODIFY `id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `jgh99_dungeons`
--
ALTER TABLE `jgh99_dungeons`
  MODIFY `id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `jgh99_elements`
--
ALTER TABLE `jgh99_elements`
  MODIFY `id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `jgh99_games`
--
ALTER TABLE `jgh99_games`
  MODIFY `id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `jgh99_monsters`
--
ALTER TABLE `jgh99_monsters`
  MODIFY `id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `jgh99_quests`
--
ALTER TABLE `jgh99_quests`
  MODIFY `id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `jgh99_ranks`
--
ALTER TABLE `jgh99_ranks`
  MODIFY `id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `jgh99_resistances`
--
ALTER TABLE `jgh99_resistances`
  MODIFY `id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `jgh99_roles`
--
ALTER TABLE `jgh99_roles`
  MODIFY `id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `jgh99_users`
--
ALTER TABLE `jgh99_users`
  MODIFY `id` int NOT NULL AUTO_INCREMENT;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `have`
--
ALTER TABLE `have`
  ADD CONSTRAINT `have_advices0_FK` FOREIGN KEY (`id_advices`) REFERENCES `jgh99_advices` (`id`),
  ADD CONSTRAINT `have_classes2_FK` FOREIGN KEY (`id_classes`) REFERENCES `jgh99_classes` (`id`),
  ADD CONSTRAINT `have_dungeons_FK` FOREIGN KEY (`id`) REFERENCES `jgh99_dungeons` (`id`),
  ADD CONSTRAINT `have_monsters1_FK` FOREIGN KEY (`id_monsters`) REFERENCES `jgh99_monsters` (`id`);

--
-- Contraintes pour la table `jgh99_advices`
--
ALTER TABLE `jgh99_advices`
  ADD CONSTRAINT `advices_games0_FK` FOREIGN KEY (`id_games`) REFERENCES `jgh99_games` (`id`),
  ADD CONSTRAINT `advices_users_FK` FOREIGN KEY (`id_users`) REFERENCES `jgh99_users` (`id`);

--
-- Contraintes pour la table `jgh99_comments`
--
ALTER TABLE `jgh99_comments`
  ADD CONSTRAINT `comments_advices_FK` FOREIGN KEY (`id_advices`) REFERENCES `jgh99_advices` (`id`),
  ADD CONSTRAINT `comments_users0_FK` FOREIGN KEY (`id_users`) REFERENCES `jgh99_users` (`id`);

--
-- Contraintes pour la table `jgh99_resistances`
--
ALTER TABLE `jgh99_resistances`
  ADD CONSTRAINT `resistances_elements_FK` FOREIGN KEY (`id_elements`) REFERENCES `jgh99_elements` (`id`),
  ADD CONSTRAINT `resistances_monsters0_FK` FOREIGN KEY (`id_monsters`) REFERENCES `jgh99_monsters` (`id`);

--
-- Contraintes pour la table `jgh99_users`
--
ALTER TABLE `jgh99_users`
  ADD CONSTRAINT `users_ranks0_FK` FOREIGN KEY (`id_ranks`) REFERENCES `jgh99_ranks` (`id`),
  ADD CONSTRAINT `users_roles_FK` FOREIGN KEY (`id_roles`) REFERENCES `jgh99_roles` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
