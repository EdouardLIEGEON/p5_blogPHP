-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : jeu. 02 sep. 2021 à 08:58
-- Version du serveur :  5.7.31
-- Version de PHP : 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `blogphp`
--

-- --------------------------------------------------------

--
-- Structure de la table `projets`
--

DROP TABLE IF EXISTS `projets`;
CREATE TABLE IF NOT EXISTS `projets` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `titre` varchar(150) NOT NULL,
  `description` text NOT NULL,
  `header` varchar(255) DEFAULT NULL,
  `mockup` varchar(255) NOT NULL,
  `sous-titre` varchar(1000) NOT NULL,
  `technologie1` varchar(1000) NOT NULL,
  `technologie2` varchar(100) DEFAULT NULL,
  `technologie3` varchar(100) DEFAULT NULL,
  `technologie4` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `projets`
--

INSERT INTO `projets` (`id`, `titre`, `description`, `header`, `mockup`, `sous-titre`, `technologie1`, `technologie2`, `technologie3`, `technologie4`) VALUES
(1, 'Le restaurant Lambda', 'Premier projet de la formation. Il consistait, à partir d\'une maquette Photoshop, d\'intégrer en pixel perfect un site One page avec les langages Html et Css, mais également avec le framework Bootstrap. Nous avons procédé par étape, tout d\'abord en récupérant chaque élément utile sur la maquette. Puis vient l\'intégration\r\n  en Html et Css, tout en découvrant la grande utilité de Bootstrap.', 'lambdaLogo.jpg', 'lambdaMockup.png', 'Un premier projet aussi alléchant que la carte du chef !', 'html.png\r\n\r\n', 'css.png', 'bootstrap.png', 'ps.png'),
(2, 'Virus Invader', 'Gros projet de la formation. Ici nous devions créer un jeu du type de \'Space Invaders\' entièrement en JavaScript.\r\n   Le cahier des charges était le suivant : Créer un design unique, gérer les collisions et créer un système de points. Après la réflexion sur le thème du jeu : un virus qui détruit des fichiers de devs, nous nous sommes penché sur le code. Notre idée a été de créer une grille CSS pour régler les collisions et les déplacements.\r\n   Plusieurs fonctions sont utilisés, une globale faisant apparaître les cases et les éléments du jeu, une pour attribuer les touches, une pour le tir, une autre pour les collisions qui consiste à détruire les éléments dans une case s\'ils sont plus d\'1.', 'virusLogo.jpg', 'virusMockup.png', 'Ce n\'est pas Avast qui va le stopper celui-là !', 'html.png', 'js.png', 'sass.png', 'ps.png'),
(3, 'Le jeu du Snake', 'Projet réalisé lors d\'une formation JavaScript à distance dans la lancée du titre professionnel. Ici pas de grille CSS mais un canva qu\'on divise en block, ça reste assez similaire. On appelle une première fonction globale qui permet d\'initialiser nos éléments au lancement du jeu. DAns celle-ci on trouvera plusieurs autre fonctions comme la création de la pomme et son changement de postition après chaque passage du serpent, la création du serpent à partir de block, sa capacité à grandir après chaque pomme, son contrôle et la fonction \'game over\' s\'il se mord la queue ou heurte un bord. On peut aussi trouver une fonction de comptage des points et de réinitialisation du jeu. ', 'snakeLogo.jpg', 'snakeMockup.png', 'Un jeu du serpent où toute ressemblance avec des évènements s\'étant passés il y a quelques 2000 années sont le fruit du hasard !', 'html.png', 'css.png', 'js.png', NULL),
(4, 'L\'annuaire de films Yakwa', 'Encore un gros projet dans cette formation, qui nous a permit d\'utiliser un grand nombre de langages et frameworks. Ici nous devions créer un annuaire de films avec une architecture MVC à partir d\'une base de données de films complétées par nos soins. Après avoir défini un nom et une identité visuelle à notre projet nous nous sommes réparti les tâches: Un groupe s\'occupait de la page d\'accueil et du style, pendant que l\'autre s\'occupait des différents formulaires( inscription, connexion, moteur de recherche, soumission de nouveaux films dans la base de données). On créée les différentes parties de nos pages que l\'on pourra appeler en PHP en fonction des actions de l\'utilisateur. Ensuite on créée un template de page répertoriant tout les films où on se connecte à la base de données et on appelle tout les films grâce à une boucle PHP. Pour la page d\'un film on affiche juste les infos d\'un film en fonction de son ID. Pour les formulaires on va créer des Preg_match pour gérer les entrées.', 'yakwaLogo.jpg', 'yakwaMockup.png', 'Yakwa ce soir à regarder ? Mais vous allez le savoir !', 'php.png', 'sass.png', 'symfony.png', 'mysql.png'),
(5, 'Le Burger Code', 'Issu d\'une formation à distance après l\'ACS, le projet consistait à créer un site de fast-food dynamique avec PHP et les bases de données. Nous avons donc créé une base de données avec tout les mets du restaurant fictif. Avec cela nous avons créer une partie admin qui allait gérer les informations présentes sur le site en fonction des éléments de la base, de ce fait nous allions pouvoir modifier un élément, le supprimer ou même en rajouter facilement à l\'aide de formulaires. Pour la partie de l\'index nous avons appelé nos données à l\'aide de fonctions PHP.', 'burgerLogo.jpg', 'burgerMockup.png', 'Un site PHP aussi dynamique que les serveurs de Fast-food ( et c\'est un compliment pour les serveurs...et pour le projet aussi ) !', 'php.png', 'sass.png', 'mysql.png', 'html.png'),
(6, 'Le blog Wordpress de la promotion ACS', 'Dernier projet de la formation ACS. Ici nous devions créer un thème Worpress pour un blog regroupant nos articles de veilles technologiques. Après récupération de tous les articles de la promo nous devions créer une fonction PHP sous forme de boucle pour faire apparaître les articles sur une page, puis une autre permettant d\'en faire apparaître une seule en fonction de l\'id de la base de données. ', NULL, '', '', 'php.png', 'wordpress.png', 'sass.png', 'mysql.png');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
