-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 15, 2024 at 06:08 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ifoa_project`
--

-- --------------------------------------------------------

--
-- Table structure for table `books`
--

CREATE TABLE `books` (
  `id` int(10) UNSIGNED NOT NULL,
  `titolo` varchar(300) NOT NULL,
  `autore` varchar(300) NOT NULL,
  `anno` year(4) NOT NULL,
  `descrizione` text NOT NULL,
  `immagine` varchar(500) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `books`
--

INSERT INTO `books` (`id`, `titolo`, `autore`, `anno`, `descrizione`, `immagine`) VALUES
(9, 'Harry Potter e la pietra filosofale', 'J. K. Rowling', '1997', 'Harry Potter, vessato e umiliato per tutta la vita dai suoi zii, scopre a undici anni di essere speciale: ÃƒÂ¨ un mago. I suoi genitori, erano due maghi molto famosi e rispettati, che mori-rono nel tentativo di sconfiggere Voldemort, un potentissimo mago malvagio che stava di-struggendo il mondo della magia.', 'https://www.libraccio.it/images/9788831003445_0_500_0_75.jpg'),
(10, 'Harry Potter e la camera dei segreti', 'J. K. Rowling', '1998', 'Harry Potter ormai celebre: durante il primo anno alla Scuola di Magia e Stregoneria di Hogwarts ha sconfitto il terribile Voldemort, vendicando la morte dei suoi genitori e coprendosi di gloria. Ma una spaventosa minaccia incombe sulla scuola: un incantesimo che colpisce i compagni di Harry, uno dopo lÃ¢â‚¬â„¢altro, e che sembra legato a un antico mistero racchiuso nella tenebrosa Camera dei Segreti.', 'https://www.lafeltrinelli.it/images/9788831003391_0_536_0_75.jpg'),
(11, 'Shadowhunters â€“ CittÃ  di ossa', 'Cassandra Clare', '2007', 'Shadowhunters - CittÃ  di ossa Ã¨ un romanzo fantasy di Cassandra Clare, pubblicato il 27 marzo 2007 negli Stati Uniti e il 6 novembre 2007 in italiano. Ãˆ il primo capitolo della saga Shadowhunters.', 'https://www.ibs.it/images/9788804716624_0_536_0_75.jpg'),
(12, 'Shadowhunters - CittÃ  di cenere', 'Cassandra Clare', '2008', 'The Mortal Instrument: Shadowhunters - CittÃ  di cenere Ã¨ un romanzo fantasy di Cassandra Clare, pubblicato il 25 marzo 2008 negli Stati Uniti e il 9 settembre 2008 in italiano. Ãˆ il secondo capitolo della saga Shadowhunters.', 'https://m.media-amazon.com/images/I/719d4QTHZkL._AC_UF1000,1000_QL80_.jpg'),
(13, 'Shadowhunters - CittÃ  di vetro', 'Cassandra Clare', '2009', 'Clary scopre, grazie a Madeleine, che l\'unica possibilitÃ  di rompere l\'incantesimo che tiene sua madre in coma Ã¨ quella di recarsi ad Idris, terra nativa di tutti gli Shadowhunters e sede di alcuni Nascosti. LÃ¬, infatti, risiede il potente stregone Ragnor Fell, che sembra essere in grado di risolvere il suo problema. Jace, perÃ², tenta di convincere in tutti i modi la sorella a non andare ad Alicante, capitale di Idris, ritenendola una cittÃ  poco sicura per lei.', 'https://m.media-amazon.com/images/I/71Gzg+RXbAL._AC_UF1000,1000_QL80_.jpg'),
(14, 'Shadowhunters â€“ CittÃ  del fuoco celeste', 'Cassandra Clare', '2014', 'Sebastian ed i suoi alleati attaccano a sorpresa l\'Istituto di Los Angeles (gestito dalla famiglia Blackthorn), dove si trova la piccola Emma Carstairs, in quanto i suoi genitori sono andati in missione e l\'hanno lasciata lÃ¬ assieme alla famiglia del suo migliore amico, Julian Blackthorn. Sebastian trasforma in Ottenebrati tutti gli abitanti dell\'Istituto, compreso il padre dei giovani Blackthorn, poi rapisce Mark, il maggiore tra i fratelli.', 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRLeQxtpulTKEujtIF8LM9yr3XM8i3wQS117gkZbhn-JA&s'),
(15, 'Percy Jackson e gli dei dell\'Olimpo: il ladro di fulmini', 'Rick Riordan', '2005', 'Perseus Jackson, detto Percy, Ã¨ un ragazzo newyorkese con molti problemi sociali e personali: soffre di disturbi dell\'attenzione, Ã¨ iperattivo e dislessico, il chÃ© non lo aiuta affatto con le materie scolastiche; vive con sua madre Sally in un piccolo appartamento nell\'Upper East Side. Insieme a loro vive anche uno sfaccendato, puzzolente e maleducato uomo che Ã¨ il suo patrigno di nome Gabe, e non ha mai conosciuto il suo padre biologico. L\'unico suo amico, che lo ha sempre seguito, Ã¨ Grove', 'https://www.lafeltrinelli.it/images/9788804717447_0_536_0_75.jpg'),
(16, 'Mi chiamavano Rombo di tuono', 'Gigi Riva, Gigi Garanzini', '2022', 'Monumento assoluto del calcio, Gigi Riva Ã¨ un uomo profondamente riservato e finora non solo si Ã¨ sempre tenuto lontano dalle cronache, ma non si Ã¨ nemmeno mai raccontato. Eppure stregÃ² il mondo con il suo istinto per il gol, diventÃ² un mito (le due star piÃ¹ attese al Mondiale del Messico 1970 erano lui e PelÃ©) e dimostrÃ² sempre una personalitÃ  forte e decisa, anche con la scelta di legare tutta la propria carriera al Cagliari, rifiutando offerte stellari.', 'https://m.media-amazon.com/images/I/41G2XayQ23L._SY445_SX342_.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `books`
--
ALTER TABLE `books`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `books`
--
ALTER TABLE `books`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
