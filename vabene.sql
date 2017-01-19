-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Czas generowania: 18 Sty 2017, 11:22
-- Wersja serwera: 10.1.13-MariaDB
-- Wersja PHP: 5.6.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Baza danych: `vabene`
--

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `kawa`
--

CREATE TABLE `kawa` (
  `id` int(11) NOT NULL,
  `nazwa` text COLLATE utf8mb4_polish_ci NOT NULL,
  `cena` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_polish_ci;

--
-- Zrzut danych tabeli `kawa`
--

INSERT INTO `kawa` (`id`, `nazwa`, `cena`) VALUES
(1, 'kawa', 1.23);

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `obiad`
--

CREATE TABLE `obiad` (
  `id` int(11) NOT NULL,
  `nazwa` text COLLATE utf8mb4_polish_ci NOT NULL,
  `sklad` text COLLATE utf8mb4_polish_ci NOT NULL,
  `cena` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_polish_ci;

--
-- Zrzut danych tabeli `obiad`
--

INSERT INTO `obiad` (`id`, `nazwa`, `sklad`, `cena`) VALUES
(0, 'kotlet', 'duży', 23.67),
(0, 'kotlet', 'duży', 23.98);

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `penne`
--

CREATE TABLE `penne` (
  `id` int(11) NOT NULL,
  `nazwa` text COLLATE utf8mb4_polish_ci NOT NULL,
  `sklad` text COLLATE utf8mb4_polish_ci NOT NULL,
  `cena` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_polish_ci;

--
-- Zrzut danych tabeli `penne`
--

INSERT INTO `penne` (`id`, `nazwa`, `sklad`, `cena`) VALUES
(1, 'pennne', 'makaron', 23.45);

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `pizza`
--

CREATE TABLE `pizza` (
  `id` int(11) NOT NULL,
  `nazwa` text COLLATE utf8mb4_polish_ci NOT NULL,
  `sklad` text COLLATE utf8mb4_polish_ci NOT NULL,
  `cena` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_polish_ci;

--
-- Zrzut danych tabeli `pizza`
--

INSERT INTO `pizza` (`id`, `nazwa`, `sklad`, `cena`) VALUES
(1, 'pizza', 'ciasto', 12.34);

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `przekaski`
--

CREATE TABLE `przekaski` (
  `id` int(11) NOT NULL,
  `nazwa` text COLLATE utf8mb4_polish_ci NOT NULL,
  `sklad` text COLLATE utf8mb4_polish_ci,
  `cena` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_polish_ci;

--
-- Zrzut danych tabeli `przekaski`
--

INSERT INTO `przekaski` (`id`, `nazwa`, `sklad`, `cena`) VALUES
(3, 'przekaski', 'przekaska', 23.98);

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `salatki`
--

CREATE TABLE `salatki` (
  `id` int(11) NOT NULL,
  `nazwa` text COLLATE utf8mb4_polish_ci NOT NULL,
  `sklad` text COLLATE utf8mb4_polish_ci NOT NULL,
  `cena` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_polish_ci;

--
-- Zrzut danych tabeli `salatki`
--

INSERT INTO `salatki` (`id`, `nazwa`, `sklad`, `cena`) VALUES
(3, 'salatka', 'salata', 23);

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `spaghetti`
--

CREATE TABLE `spaghetti` (
  `id` int(11) NOT NULL,
  `nazwa` text COLLATE utf8mb4_polish_ci NOT NULL,
  `sklad` text COLLATE utf8mb4_polish_ci NOT NULL,
  `cena` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_polish_ci;

--
-- Zrzut danych tabeli `spaghetti`
--

INSERT INTO `spaghetti` (`id`, `nazwa`, `sklad`, `cena`) VALUES
(1, 'spaghetti', 'sos', 4.78);

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `warzywa`
--

CREATE TABLE `warzywa` (
  `id` int(11) NOT NULL,
  `nazwa` text COLLATE utf8mb4_polish_ci NOT NULL,
  `sklad` text COLLATE utf8mb4_polish_ci NOT NULL,
  `cena` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_polish_ci;

--
-- Zrzut danych tabeli `warzywa`
--

INSERT INTO `warzywa` (`id`, `nazwa`, `sklad`, `cena`) VALUES
(1, 'warzywa', 'warzywo', 2.78);

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `ziemniaczane`
--

CREATE TABLE `ziemniaczane` (
  `id` int(11) NOT NULL,
  `nazwa` text COLLATE utf8mb4_polish_ci NOT NULL,
  `sklad` text COLLATE utf8mb4_polish_ci NOT NULL,
  `cena` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_polish_ci;

--
-- Zrzut danych tabeli `ziemniaczane`
--

INSERT INTO `ziemniaczane` (`id`, `nazwa`, `sklad`, `cena`) VALUES
(1, 'zapiekanka ziemniaczana', 'ziemniaki', 23.69);

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `zimne`
--

CREATE TABLE `zimne` (
  `id` int(11) NOT NULL,
  `nazwa` text COLLATE utf8mb4_polish_ci NOT NULL,
  `cena` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_polish_ci;

--
-- Zrzut danych tabeli `zimne`
--

INSERT INTO `zimne` (`id`, `nazwa`, `cena`) VALUES
(0, 'cola', 12.43);

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `zupy`
--

CREATE TABLE `zupy` (
  `id` int(11) NOT NULL,
  `nazwa` text COLLATE utf8mb4_polish_ci NOT NULL,
  `cena` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_polish_ci;

--
-- Zrzut danych tabeli `zupy`
--

INSERT INTO `zupy` (`id`, `nazwa`, `cena`) VALUES
(1, 'dasdasdasdasdasd', 12.45),
(2, 'cus', 123);

--
-- Indeksy dla zrzutów tabel
--

--
-- Indexes for table `kawa`
--
ALTER TABLE `kawa`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `obiad`
--
ALTER TABLE `obiad`
  ADD PRIMARY KEY (`cena`);

--
-- Indexes for table `penne`
--
ALTER TABLE `penne`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pizza`
--
ALTER TABLE `pizza`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `przekaski`
--
ALTER TABLE `przekaski`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `salatki`
--
ALTER TABLE `salatki`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `spaghetti`
--
ALTER TABLE `spaghetti`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `warzywa`
--
ALTER TABLE `warzywa`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ziemniaczane`
--
ALTER TABLE `ziemniaczane`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `zupy`
--
ALTER TABLE `zupy`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT dla tabeli `kawa`
--
ALTER TABLE `kawa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT dla tabeli `penne`
--
ALTER TABLE `penne`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT dla tabeli `pizza`
--
ALTER TABLE `pizza`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT dla tabeli `przekaski`
--
ALTER TABLE `przekaski`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT dla tabeli `salatki`
--
ALTER TABLE `salatki`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT dla tabeli `spaghetti`
--
ALTER TABLE `spaghetti`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT dla tabeli `warzywa`
--
ALTER TABLE `warzywa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT dla tabeli `ziemniaczane`
--
ALTER TABLE `ziemniaczane`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT dla tabeli `zupy`
--
ALTER TABLE `zupy`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
