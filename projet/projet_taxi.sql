-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : lun. 17 juil. 2023 à 22:47
-- Version du serveur : 10.4.28-MariaDB
-- Version de PHP : 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `projet_taxi`
--

-- --------------------------------------------------------

--
-- Structure de la table `booking`
--

CREATE TABLE `booking` (
  `id` int(11) NOT NULL,
  `depart` varchar(255) NOT NULL,
  `arrivee` varchar(255) NOT NULL,
  `date_time` datetime NOT NULL,
  `adulte` int(11) NOT NULL,
  `enfant` int(11) NOT NULL,
  `services_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `booking`
--

INSERT INTO `booking` (`id`, `depart`, `arrivee`, `date_time`, `adulte`, `enfant`, `services_id`) VALUES
(6, '7 rue de paris', '121 avenue de champs', '2023-06-17 16:14:00', 3, 0, 7),
(7, '151 avenue de Gallieni', '121 avenue de champs', '2023-01-01 00:00:00', 2, 2, 2),
(8, '151 avenue de Gallieni', 'Tour Eiffel', '2018-02-01 00:00:00', 3, 1, 3),
(9, '60 Boulevard du champs elysées', '3bis résidence du parc', '2023-07-26 15:30:00', 5, 1, 6),
(12, '151 Avenue de Gallieni', 'Tour Eiffel', '2023-06-10 10:14:00', 2, 0, 3),
(13, 'Aéroport Charles de Gaulle', 'Notre Dame', '2023-07-08 21:15:00', 5, 1, 3);

-- --------------------------------------------------------

--
-- Structure de la table `booking_detail`
--

CREATE TABLE `booking_detail` (
  `id` int(11) NOT NULL,
  `booking_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `booking_detail`
--

INSERT INTO `booking_detail` (`id`, `booking_id`, `user_id`) VALUES
(2, 9, 1),
(5, 12, 4),
(6, 13, 1);

-- --------------------------------------------------------

--
-- Structure de la table `commentaire`
--

CREATE TABLE `commentaire` (
  `id` int(11) NOT NULL,
  `avis` longtext NOT NULL,
  `date_de_creation` datetime NOT NULL,
  `date_de_modification` datetime DEFAULT NULL,
  `taxi_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `commentaire`
--

INSERT INTO `commentaire` (`id`, `avis`, `date_de_creation`, `date_de_modification`, `taxi_id`) VALUES
(8, 'Plus Rapide!!', '2023-05-18 03:42:50', '2023-05-18 03:43:01', 5),
(9, 'Simple et Rapide', '2023-05-18 03:44:45', '2023-06-02 11:18:12', 2),
(10, 'très bien!!', '2023-05-18 03:45:00', '2023-06-02 11:08:27', 2),
(11, 'Simple et Rapide....', '2023-05-18 03:58:20', '2023-05-19 11:07:52', 5);

-- --------------------------------------------------------

--
-- Structure de la table `doctrine_migration_versions`
--

CREATE TABLE `doctrine_migration_versions` (
  `version` varchar(191) NOT NULL,
  `executed_at` datetime DEFAULT NULL,
  `execution_time` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Déchargement des données de la table `doctrine_migration_versions`
--

INSERT INTO `doctrine_migration_versions` (`version`, `executed_at`, `execution_time`) VALUES
('DoctrineMigrations\\Version20230403093937', '2023-04-03 12:01:08', 5),
('DoctrineMigrations\\Version20230403100100', '2023-04-03 12:01:08', 4),
('DoctrineMigrations\\Version20230403131744', '2023-04-03 15:18:00', 15),
('DoctrineMigrations\\Version20230404082430', '2023-04-04 10:24:38', 46),
('DoctrineMigrations\\Version20230404120346', '2023-04-04 14:03:54', 7),
('DoctrineMigrations\\Version20230404134058', '2023-04-04 15:41:07', 6),
('DoctrineMigrations\\Version20230404142204', '2023-04-04 16:22:12', 31),
('DoctrineMigrations\\Version20230405122931', '2023-04-05 14:29:39', 65),
('DoctrineMigrations\\Version20230405134928', '2023-04-05 15:49:35', 18),
('DoctrineMigrations\\Version20230405135548', '2023-04-05 15:55:52', 26),
('DoctrineMigrations\\Version20230405140603', '2023-04-05 16:06:07', 54),
('DoctrineMigrations\\Version20230405141209', '2023-04-05 16:12:14', 14),
('DoctrineMigrations\\Version20230405141352', '2023-04-05 16:13:56', 75),
('DoctrineMigrations\\Version20230405141602', '2023-04-05 16:16:07', 35),
('DoctrineMigrations\\Version20230405142006', '2023-04-05 16:20:10', 57),
('DoctrineMigrations\\Version20230405143040', '2023-04-05 16:30:44', 18),
('DoctrineMigrations\\Version20230405143223', '2023-04-05 16:32:30', 59),
('DoctrineMigrations\\Version20230517221022', '2023-05-18 00:10:33', 24),
('DoctrineMigrations\\Version20230517222940', '2023-05-18 00:29:50', 74),
('DoctrineMigrations\\Version20230518000731', '2023-05-18 02:07:38', 16),
('DoctrineMigrations\\Version20230518002107', '2023-05-18 02:21:13', 20),
('DoctrineMigrations\\Version20230518002236', '2023-05-18 02:22:41', 42),
('DoctrineMigrations\\Version20230518004321', '2023-05-18 02:43:26', 25),
('DoctrineMigrations\\Version20230518004451', '2023-05-18 02:44:56', 42),
('DoctrineMigrations\\Version20230518011325', '2023-05-18 03:13:31', 37),
('DoctrineMigrations\\Version20230518012645', '2023-05-18 03:26:49', 25),
('DoctrineMigrations\\Version20230518022815', '2023-05-18 04:28:20', 55),
('DoctrineMigrations\\Version20230518022914', '2023-05-18 04:29:18', 18),
('DoctrineMigrations\\Version20230521214354', '2023-05-21 23:44:05', 100),
('DoctrineMigrations\\Version20230521220335', '2023-05-22 00:03:40', 24),
('DoctrineMigrations\\Version20230602090220', '2023-06-02 11:02:29', 59),
('DoctrineMigrations\\Version20230602092526', '2023-06-02 11:25:30', 16),
('DoctrineMigrations\\Version20230701180730', '2023-07-03 17:47:04', 55),
('DoctrineMigrations\\Version20230703154652', '2023-07-03 17:47:04', 5),
('DoctrineMigrations\\Version20230717204423', '2023-07-17 22:44:28', 62);

-- --------------------------------------------------------

--
-- Structure de la table `taxis`
--

CREATE TABLE `taxis` (
  `id` int(11) NOT NULL,
  `nom` varchar(255) NOT NULL,
  `description` longtext NOT NULL,
  `sieges` int(11) NOT NULL,
  `prix` float NOT NULL,
  `photo` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `taxis`
--

INSERT INTO `taxis` (`id`, `nom`, `description`, `sieges`, `prix`, `photo`) VALUES
(2, 'Berline - Peugeot 308', 'La berline est une catégorie de carrosserie automobile. Elle correspond à une auto de taille moyenne, mesurant le plus souvent entre 4 et 5 mètres de long, avec un toit rigide et fixe (à la différence d\'un coupé cabriolet), quatre portes, quatre fenêtres et au moins quatre places à bord.', 4, 4.99, 'Berline-Peugeot-30864732113e2861.jpg'),
(3, 'Standard -  Citroën C4 Grand Picasso', 'Les voitures « standard » sont des véhicules connus pour être assez grands. Elles peuvent accueillir 5 personnes confortablement pour de longs trajets.', 5, 7.3, 'Standard-Citroen-C4-Grand-Picasso647321d3efd14.jpg'),
(5, 'Van - Ford Tourneo Custom', 'Voici le nouveau Ford Tourneo Custom avec options hybride rechargeable et diesel EcoBlue et E-Tourneo Custom, 100% électrique.', 7, 8.69, 'Van-Ford-Tourneo-Custom6473237e67b40.jpg'),
(6, 'Business - Mercedes Benz E-Class', 'Business doivent répondre à plusieurs critères définis dans les car policies des entreprises. En général, les équipements portent sur la sécurité, le confort et la possibilité de travailler pour ainsi être efficace et productif.', 3, 20.99, 'Business-Mercedes-Benz-E-Class647325d84615c.jpg'),
(7, 'VSL - Renault Grand Scenic', 'Le VSL dispose à son bord des équipements de premier secours, et est soumis à des règles d\'hygiène strictes. Le taxi conventionné bénéficie d\'une convention auprès de la CPAM', 3, 2.83, 'VSL-Renault-Grand-Scenic64732748da1aa.png');

-- --------------------------------------------------------

--
-- Structure de la table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `email` varchar(180) NOT NULL,
  `roles` longtext NOT NULL COMMENT '(DC2Type:json)',
  `password` varchar(255) NOT NULL,
  `nom` varchar(255) NOT NULL,
  `prenom` varchar(255) NOT NULL,
  `pseudo` varchar(255) NOT NULL,
  `adresse` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `user`
--

INSERT INTO `user` (`id`, `email`, `roles`, `password`, `nom`, `prenom`, `pseudo`, `adresse`) VALUES
(1, 'user@user.fr', '[]', '$2y$13$UDh4cKR65M.0.Dn3z2UDyupHQENJTuYFThIKWVptueIwuygI850W6', 'Tamby', 'Mary', 'Mary22', '60 residence de parc 91600 Savigny-sur-orge'),
(2, 'admin@admin.fr', '[\"ROLE_ADMIN\"]', '$2y$13$LFzNbD9Zkka8BQOP5unQu.nLgihrB1tGA6pelZaF.6I0c592gGNRu', 'Tamby', 'Mary', 'admin', '151 avenue de Gallieni 75000 Paris '),
(4, 'marcjacobs10@gmail.com', '[]', '$2y$13$yL.20FGym9DiGeUDggmW0.YFWTrl7R4RYGoX5viVL2iobFFz9Bz6a', 'Marc', 'Jacobs', 'MJ10', '56 avenue de champs Elysées 75015 Paris'),
(5, 'clarajo@hotmail.fr', '[]', '$2y$13$YSkDkLHS6QxtwGj1jtcnr.ai3i8D.wDnQFd4Sxlrhd3Ps3kRIpvnC', 'Clara', 'Joseph', 'ClaJo', '4 rue de bac 75023 Paris'),
(12, 'reginatamby@gmail.com', '[]', '$2y$13$diXoGnbV8gDvFbdff1nAjOXS4MvizPGaVL9c3tM4Hqaz.tSiCGtUi', 'regina', 'tamby', 'reta', '6 bis avenue de parc\r\n75000 Paris');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `booking`
--
ALTER TABLE `booking`
  ADD PRIMARY KEY (`id`),
  ADD KEY `IDX_E00CEDDEAEF5A6C1` (`services_id`);

--
-- Index pour la table `booking_detail`
--
ALTER TABLE `booking_detail`
  ADD PRIMARY KEY (`id`),
  ADD KEY `IDX_959C446D3301C60` (`booking_id`),
  ADD KEY `IDX_959C446DA76ED395` (`user_id`);

--
-- Index pour la table `commentaire`
--
ALTER TABLE `commentaire`
  ADD PRIMARY KEY (`id`),
  ADD KEY `IDX_67F068BC506FF81C` (`taxi_id`);

--
-- Index pour la table `doctrine_migration_versions`
--
ALTER TABLE `doctrine_migration_versions`
  ADD PRIMARY KEY (`version`);

--
-- Index pour la table `taxis`
--
ALTER TABLE `taxis`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `UNIQ_8D93D649E7927C74` (`email`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `booking`
--
ALTER TABLE `booking`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT pour la table `booking_detail`
--
ALTER TABLE `booking_detail`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT pour la table `commentaire`
--
ALTER TABLE `commentaire`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT pour la table `taxis`
--
ALTER TABLE `taxis`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT pour la table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `booking`
--
ALTER TABLE `booking`
  ADD CONSTRAINT `FK_E00CEDDEAEF5A6C1` FOREIGN KEY (`services_id`) REFERENCES `taxis` (`id`);

--
-- Contraintes pour la table `booking_detail`
--
ALTER TABLE `booking_detail`
  ADD CONSTRAINT `FK_959C446D3301C60` FOREIGN KEY (`booking_id`) REFERENCES `booking` (`id`),
  ADD CONSTRAINT `FK_959C446DA76ED395` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`);

--
-- Contraintes pour la table `commentaire`
--
ALTER TABLE `commentaire`
  ADD CONSTRAINT `FK_67F068BC506FF81C` FOREIGN KEY (`taxi_id`) REFERENCES `taxis` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
