-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Erstellungszeit: 14. Nov 2020 um 02:23
-- Server-Version: 10.4.14-MariaDB
-- PHP-Version: 7.4.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Datenbank: `cr10-mark-biglibrary`
--
CREATE DATABASE IF NOT EXISTS `cr10-mark-biglibrary` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `cr10-mark-biglibrary`;

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `author`
--

CREATE TABLE `author` (
  `authorID` int(11) NOT NULL,
  `first_name` varchar(255) DEFAULT NULL,
  `middle_name` varchar(255) DEFAULT NULL,
  `last_name` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Daten für Tabelle `author`
--

INSERT INTO `author` (`authorID`, `first_name`, `middle_name`, `last_name`) VALUES
(1, 'Joanne', 'Kathleen', 'Rowling'),
(2, 'Ken', 'Martin', 'Follett');

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `media`
--

CREATE TABLE `media` (
  `mediaID` int(11) NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `authorID` int(11) DEFAULT NULL,
  `ISBN` varchar(13) DEFAULT NULL,
  `short_description` text DEFAULT NULL,
  `publish_date` date DEFAULT NULL,
  `publisherID` int(11) DEFAULT NULL,
  `type` enum('book','CD','DVD') DEFAULT NULL,
  `status` enum('available','reserved') DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Daten für Tabelle `media`
--

INSERT INTO `media` (`mediaID`, `title`, `image`, `authorID`, `ISBN`, `short_description`, `publish_date`, `publisherID`, `type`, `status`) VALUES
(1, 'Harry Potter and the Philosopher´s Stone', 'https://upload.wikimedia.org/wikipedia/en/6/6b/Harry_Potter_and_the_Philosopher%27s_Stone_Book_Cover.jpg', 1, '9780747532743', 'The first novel in the Harry Potter series and Rowling´s debut novel, it follows Harry Potter, a young wizard who discovers his magical heritage on his eleventh birthday, when he receives a letter of acceptance to Hogwarts School of Witchcraft and Wizardry. Harry makes close friends and a few enemies during his first year at the school, and with the help of his friends, Harry faces an attempted comeback by the dark wizard Lord Voldemort, who killed Harry´s parents, but failed to kill Harry when he was just 15 months old.', '1997-06-26', 1, 'book', 'available'),
(2, 'Harry Potter and the Chamber of Secrets\r\n', 'https://upload.wikimedia.org/wikipedia/en/5/5c/Harry_Potter_and_the_Chamber_of_Secrets.jpg', 1, '9780747538486', 'The plot follows Harry´s second year at Hogwarts School of Witchcraft and Wizardry, during which a series of messages on the walls of the school´s corridors warn that the ´Chamber of Secrets´ has been opened and that the ´heir of Slytherin´ would kill all pupils who do not come from all-magical families. These threats are found after attacks that leave residents of the school petrified. Throughout the year, Harry and his friends Ron and Hermione investigate the attacks.', '1998-07-02', 1, 'book', 'available'),
(3, 'Harry Potter and the Prisoner of Azkaban', 'https://upload.wikimedia.org/wikipedia/en/a/a0/Harry_Potter_and_the_Prisoner_of_Azkaban.jpg', 1, '9780747546290', 'The book follows Harry Potter, a young wizard, in his third year at Hogwarts School of Witchcraft and Wizardry. Along with friends Ronald Weasley and Hermione Granger, Harry investigates Sirius Black, an escaped prisoner from Azkaban, the wizard prison, believed to be one of Lord Voldemort´s old allies.', '1999-07-08', 1, 'book', 'reserved'),
(6, 'The Pillars of the Earth', 'https://upload.wikimedia.org/wikipedia/en/b/b3/PillarsOfTheEarth.jpg', 2, '9780333519837', 'Set in the 12th century, the novel covers the time between the sinking of the White Ship and the murder of Thomas Becket, but focuses primarily on the Anarchy. The book traces the development of Gothic architecture out of the preceding Romanesque architecture, and the fortunes of the Kingsbridge priory and village against the backdrop of historical events of the time.', '1989-01-01', 2, 'book', 'available'),
(7, 'World Without End', 'https://upload.wikimedia.org/wikipedia/en/5/58/World_Without_End-Ken_Follet_Cover_World_Wide_Edition_2007.jpg', 2, '525950079', 'World Without End takes place in the same fictional town as Pillars of the Earth (Kingsbridge) and features the descendants of some Pillars characters 157 years later. The plot incorporates two major historical events, the start of the Hundred Years´ War and the Black Death.', '2007-01-01', 3, 'book', 'reserved'),
(8, 'Code to Zero', 'https://upload.wikimedia.org/wikipedia/en/7/7e/CodeToZero.jpg', 2, '333780760', 'The story follows Luke, an amnesic who spends the duration of the book learning of his life, and slowly uncovering secrets of a conspiracy to hold America back in the space race.', '2000-01-01', 2, 'book', 'reserved');

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `publisher`
--

CREATE TABLE `publisher` (
  `publisherID` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `addressID` int(11) DEFAULT NULL,
  `size` enum('big','medium','small') DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Daten für Tabelle `publisher`
--

INSERT INTO `publisher` (`publisherID`, `name`, `addressID`, `size`) VALUES
(1, 'Bloomsbury', 1, 'big'),
(2, 'Macmillan', 2, 'big'),
(3, 'Penguin', 3, 'big');

--
-- Indizes der exportierten Tabellen
--

--
-- Indizes für die Tabelle `author`
--
ALTER TABLE `author`
  ADD PRIMARY KEY (`authorID`);

--
-- Indizes für die Tabelle `media`
--
ALTER TABLE `media`
  ADD PRIMARY KEY (`mediaID`),
  ADD KEY `authorID` (`authorID`),
  ADD KEY `publisherID` (`publisherID`);

--
-- Indizes für die Tabelle `publisher`
--
ALTER TABLE `publisher`
  ADD PRIMARY KEY (`publisherID`);

--
-- AUTO_INCREMENT für exportierte Tabellen
--

--
-- AUTO_INCREMENT für Tabelle `author`
--
ALTER TABLE `author`
  MODIFY `authorID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT für Tabelle `media`
--
ALTER TABLE `media`
  MODIFY `mediaID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT für Tabelle `publisher`
--
ALTER TABLE `publisher`
  MODIFY `publisherID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Constraints der exportierten Tabellen
--

--
-- Constraints der Tabelle `media`
--
ALTER TABLE `media`
  ADD CONSTRAINT `media_ibfk_1` FOREIGN KEY (`authorID`) REFERENCES `author` (`authorID`),
  ADD CONSTRAINT `media_ibfk_2` FOREIGN KEY (`publisherID`) REFERENCES `publisher` (`publisherID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
