CREATE DATABASE flori;
USE flori;

CREATE TABLE `flori` (
  `id` int(11) NOT NULL,
  `nume` varchar(50) NOT NULL,
  `culoare` varchar(50) NOT NULL,
  `marime` varchar(50) NOT NULL,
  `pret` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


INSERT INTO `flori` (`id`, `nume`, `culoare`, `marime`, `pret`) VALUES
(4, 'trandafiri', 'rosii', 'mari', 30),
(5, 'trandafiri', 'rosii', 'mari', 445),
(6, 'trandafiri', 'rosii', 'mari', 445);

ALTER TABLE `flori`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;
