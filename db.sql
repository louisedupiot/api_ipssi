-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost:8889
-- Généré le :  mar. 06 oct. 2020 à 08:05
-- Version du serveur :  5.7.26
-- Version de PHP :  7.3.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Base de données :  `blog`
--
  CREATE DATABASE IF NOT EXISTS api_ipssi;
-- --------------------------------------------------------
  USE api_ipssi;
--
-- Structure de la table `article`
--

CREATE TABLE `produit` (
  `id` int(11) NOT NULL,
  `title` varchar(120) NOT NULL,
  `content` text,
  `categorie_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `article`
--

INSERT INTO `produit` (`id`, `title`, `content`, `categorie_id`) VALUES
(1, 'Hamburger', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dignissimos officiis fuga eligendi. Itaque voluptas, possimus nemo nesciunt laudantium nostrum explicabo non blanditiis similique ad optio tempore qui ipsam quibusdam a.', 1),
(2, 'Cheseburger', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dignissimos officiis fuga eligendi. Itaque voluptas, possimus nemo nesciunt laudantium nostrum explicabo non blanditiis similique ad optio tempore qui ipsam quibusdam a.', 1),
(3, 'Big Mac', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dignissimos officiis fuga eligendi. Itaque voluptas, possimus nemo nesciunt laudantium nostrum explicabo non blanditiis similique ad optio tempore qui ipsam quibusdam a.', 1),
(4, 'Nuggets', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dignissimos officiis fuga eligendi. Itaque voluptas, possimus nemo nesciunt laudantium nostrum explicabo non blanditiis similique ad optio tempore qui ipsam quibusdam a.', 1),
(5, 'Filet-O-Fish', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dignissimos officiis fuga eligendi. Itaque voluptas, possimus nemo nesciunt laudantium nostrum explicabo non blanditiis similique ad optio tempore qui ipsam quibusdam a.', 1),
(6, 'McChicken', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dignissimos officiis fuga eligendi. Itaque voluptas, possimus nemo nesciunt laudantium nostrum explicabo non blanditiis similique ad optio tempore qui ipsam quibusdam a.', 1),
(7, 'Double Cheeseburger', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dignissimos officiis fuga eligendi. Itaque voluptas, possimus nemo nesciunt laudantium nostrum explicabo non blanditiis similique ad optio tempore qui ipsam quibusdam a.', 1),
(8, 'Coca Cola', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dignissimos officiis fuga eligendi. Itaque voluptas, possimus nemo nesciunt laudantium nostrum explicabo non blanditiis similique ad optio tempore qui ipsam quibusdam a.', 2),
(9, 'Sprite', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dignissimos officiis fuga eligendi. Itaque voluptas, possimus nemo nesciunt laudantium nostrum explicabo non blanditiis similique ad optio tempore qui ipsam quibusdam a.', 2),
(10, 'Fanta', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dignissimos officiis fuga eligendi. Itaque voluptas, possimus nemo nesciunt laudantium nostrum explicabo non blanditiis similique ad optio tempore qui ipsam quibusdam a.', 2),
(11, 'Badoit', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dignissimos officiis fuga eligendi. Itaque voluptas, possimus nemo nesciunt laudantium nostrum explicabo non blanditiis similique ad optio tempore qui ipsam quibusdam a.', 2),
(12, 'Evian', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dignissimos officiis fuga eligendi. Itaque voluptas, possimus nemo nesciunt laudantium nostrum explicabo non blanditiis similique ad optio tempore qui ipsam quibusdam a.', 2),
(13, 'Ice-tea', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dignissimos officiis fuga eligendi. Itaque voluptas, possimus nemo nesciunt laudantium nostrum explicabo non blanditiis similique ad optio tempore qui ipsam quibusdam a.', 2),
(14, 'McFlurry', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dignissimos officiis fuga eligendi. Itaque voluptas, possimus nemo nesciunt laudantium nostrum explicabo non blanditiis similique ad optio tempore qui ipsam quibusdam a.', 3),
(15, 'Sundae', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dignissimos officiis fuga eligendi. Itaque voluptas, possimus nemo nesciunt laudantium nostrum explicabo non blanditiis similique ad optio tempore qui ipsam quibusdam a.', 3),
(16, 'Very Parfait', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dignissimos officiis fuga eligendi. Itaque voluptas, possimus nemo nesciunt laudantium nostrum explicabo non blanditiis similique ad optio tempore qui ipsam quibusdam a.', 3),
(17, 'Donut Nature', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dignissimos officiis fuga eligendi. Itaque voluptas, possimus nemo nesciunt laudantium nostrum explicabo non blanditiis similique ad optio tempore qui ipsam quibusdam a.', 3),
(18, 'Frites', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dignissimos officiis fuga eligendi. Itaque voluptas, possimus nemo nesciunt laudantium nostrum explicabo non blanditiis similique ad optio tempore qui ipsam quibusdam a.', 4),
(19, 'Potatoes', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dignissimos officiis fuga eligendi. Itaque voluptas, possimus nemo nesciunt laudantium nostrum explicabo non blanditiis similique ad optio tempore qui ipsam quibusdam a.', 4),
(20, "P'tite Salade", 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dignissimos officiis fuga eligendi. Itaque voluptas, possimus nemo nesciunt laudantium nostrum explicabo non blanditiis similique ad optio tempore qui ipsam quibusdam a.', 4),
(21, 'Donut Confetti', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dignissimos officiis fuga eligendi. Itaque voluptas, possimus nemo nesciunt laudantium nostrum explicabo non blanditiis similique ad optio tempore qui ipsam quibusdam a.', 4),

-- --------------------------------------------------------

--
-- Structure de la table `categorie`
--

CREATE TABLE `categorie` (
  `id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `categorie`
--

INSERT INTO `categorie` (`id`, `name`) VALUES
(1, 'Burgers'),
(2, 'Boissons'),
(3, 'Accompagnements'),
(4, 'Desserts'),

-- --------------------------------------------------------

--
-- Structure de la table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `email` varchar(180) COLLATE utf8mb4_unicode_ci NOT NULL,
  `roles` json NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `article`
--
ALTER TABLE `article`
  ADD PRIMARY KEY (`id`),
  ADD KEY `categorie_id` (`categorie_id`);

--
-- Index pour la table `categorie`
--
ALTER TABLE `categorie`
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
-- AUTO_INCREMENT pour la table `article`
--
ALTER TABLE `article`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=80;

--
-- AUTO_INCREMENT pour la table `categorie`
--
ALTER TABLE `categorie`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT pour la table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `article`
--
ALTER TABLE `article`
  ADD CONSTRAINT `article_ibfk_1` FOREIGN KEY (`categorie_id`) REFERENCES `categorie` (`id`);



CREATE TABLE `tables` (
  `id` int(11) NOT NULL,
  `nombre de places` int(11) NOT NULL,
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

INSERT INTO `tables` (`id`, `title`, `content`, `categorie_id`) VALUES
