-- phpMyAdmin SQL Dump
-- version 4.9.4
-- https://www.phpmyadmin.net/
--
-- Host: 23178.m.tld.pl
-- Czas generowania: 21 Cze 2020, 03:13
-- Wersja serwera: 5.7.28-31-log
-- Wersja PHP: 7.3.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Baza danych: `baza23178_op`
--

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `Homework`
--

CREATE TABLE `Homework` (
  `id` int(11) NOT NULL,
  `Date_ask` varchar(100) COLLATE utf8_polish_ci NOT NULL,
  `Deadline` varchar(100) COLLATE utf8_polish_ci NOT NULL,
  `Subject` varchar(100) COLLATE utf8_polish_ci NOT NULL,
  `Teacher` varchar(150) COLLATE utf8_polish_ci NOT NULL,
  `Where_Send` varchar(150) COLLATE utf8_polish_ci NOT NULL,
  `Description` varchar(2000) COLLATE utf8_polish_ci NOT NULL,
  `Done` int(5) NOT NULL,
  `File_source` varchar(300) COLLATE utf8_polish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_polish_ci;

--
-- Zrzut danych tabeli `Homework`
--

INSERT INTO `Homework` (`id`, `Date_ask`, `Deadline`, `Subject`, `Teacher`, `Where_Send`, `Description`, `Done`, `File_source`) VALUES
(1, '13 Marca 2020', 'Brak', 'EDB', 'Janusz Dąbrowski', '', 'W ramach pracy domowej z Edukacji dla bezpieczeństwa proszę nauczyć się:\r\n1. Stopni wojskowych ,\r\n2. Stopni służb mundurowych - Policja,\r\n3. Stopni służb mundurowych - Straż Pożarna.\r\n\r\nZnajomość powyższych zagadnień obowiązuje na zajęcia EDB po odwieszeniu zajęć dydaktyczno - wychowawczych.\r\n\r\n\r\nPozdrawiam, życząc zdrowia oraz efektywnej nauki.', 3, ''),
(2, '2020-03-13', '', 'Matematyka', 'Katarzyna Kaczorowska', '', 'Witam,\r\n\r\njak idą samodzielne przygotowania/powtórzenia do pracy klasowej?\r\n\r\nproponuję jako powtórzenie test sprawdzający do rozdziału 6 oraz zadania 6.129-143\r\n\r\n\r\npozdrawiam KKaczorowska', 3, ''),
(3, '2020-03-16', '', 'Matematyka', 'Katarzyna Kaczorowska', '', 'Witam,\r\n\r\nprzesyłam \"pracę klasową\" - proszę rozwiązać zadania, czas 1 godz;\r\njutro podeślę rozwiązania żeby sobie sprawdzić,\r\n\r\nzaczynamy drugą część trygonometrii,\r\n\r\nplan na ten tydzień jest taki:\r\n1.klasówka z trygonometrii cz1;\r\n2. sprawdzenie pr kl T1;\r\n3. trygonometria cz2 zad 6.103-128 str 175-177 - chciałabym aby T2 było zrobione w tym tygodniu,  żebyśmy mogli za tydzięń 23.03 napisać pr kl T2\r\n\r\nbędę sukcesywnie podsyłać zadania rozwiązane całe lub etapami, które trzeba samodzielnie \"d', 3, '1ag_16.03[1].zip'),
(4, '2020-03-17', '2020-03-19', 'Historia', 'M. Przybysławska', 'kakeryki38@gmail.com', 'Witam. Zabieramy się za przerabianie II wojny światowej. Proszę przeczytać rozdziały 18, 19, 22. A następnie wykonać pierwszą z prac odnoszących się do treści rozdziałów. Pracę należy pobrać, wykonać samodzielnie i przesłać na adres: kakeryki38@gmail.com do czwartku wieczorem.\r\nLink z pracą: https://1drv.ms/w/s!AjrMQibFedZeiD_yl_TA1cKQwXVM?e=dJHsdK\r\n\r\nPozdrawiam. M. Przybysławska', 2, 'II wojna światowa. Działania zbrojne..docx'),
(5, '2020-03-18', '', 'Matematyka', 'Katarzyna Kaczorowska', '', 'Witam,\r\nzaczęliśmy trygonometrię cz2, czyli twierdzenie sinusów i cosinusów, które są dla dowolnego trójkąta,\r\nprzesyłam zadania - rozwiązane lub wskazówki 6.103-128, proszę pomalutku i skutecznie rozwiązać wszystkie, dodatkowo przesyłam kartkę z zadaniami przygotowującymi do pracy klasowej\r\npozdrawiam KKaczorowska', 3, 'download.zip'),
(6, '2020-03-18', '', 'Polski', 'Iwona Andrzejewska', '', 'Wysyłam materiały do pracy na bieżący tydzień. Pozdrawiam serdecznie IA', 3, 'download (1).zip'),
(7, '2020-03-19', '2020-03-23', 'Historia', 'M. Przybysławska', 'kakeryki38@gmail.com', 'Witam. Pozostajemy w dziale II wojna światowa. Ale tym razem zajmiemy się tematem: Polacy na frontach II wojny światowej. Bardzo proszę poszukać na ten temat informacji w podręczniku szkolnym, e- podręczniku do historii XX wieku, na stronach internetowych i wykonać prezentację lub krzyżówkę na zadany temat. Prezentacja powinna zawierać niewiele tekstu, bo ważniejsze są mapy, zdjęcia, dokumenty. Krzyżówka może mieć dowolny kształt, może ale nie musi mieć hasła, ale powinny być hasła i rozwiązanie', 2, ''),
(9, '2020-03-23', '', 'Matematyka', 'Katarzyna Kaczorowska', '', 'Witam,\r\n\r\nprzesyłam zadania z pracy klasowej z trygonometrii cz2\r\n\r\nw następnym mailu wyślę odpowiedzi i następny materiał,\r\n\r\nczas pracy - 1 godz\r\n\r\npozdrawiam KKaczorowska', 3, 'mat23.jpg'),
(10, '2020-03-23', '', 'Matematyka', 'Katarzyna Kaczorowska', '', 'Witam,\r\n\r\nwcześniej przesłałam zadania do \"pracy klasowej\" trygonometria cz2,\r\n\r\nteraz przesyłam odpowiedzi.\r\n\r\nOd dzisiaj wchodzimy w nowy dział - Geometria płaska - pole koła, pole trójkąta;\r\n\r\nbardzo proszę:\r\n1. zapoznać się z teorią z podręcznika i wynotować sobie najważniejsze własności / wzory ;\r\n2. usystematyzować sobie wiadomości z działu 4 i 5, ponieważ będziemy z tych wiadomości korzystać;\r\n3.w miarę możliwości zapoznać się (pooglądać sobie ) lekcje z portalu epodreczniki.pl, jest może', 3, '1ag_23.03_PR_kl_odp[1].jpg'),
(11, '2020-03-23', '2020-03-30', 'Angielski', 'Katarzyna Downar', 'Na dziennik', 'Witam,\r\nw tym tygodniu pracujemy z podręcznikiem i ćwiczeniami.\r\nDo obejrzenia prezentacja, dzięki której utrwalicie słownictwo:\r\n https://www.youtube.com/watch?v=CqfVNEwoz68\r\n\r\nhttps://www.youtube.com/watch?v=ouzZsrYlb94\r\n\r\nhttps://www.youtube.com/watch?v=3Qzw7JIWPyg\r\n\r\n\r\nPodręcznik strona 50- 51 i Focus Review str 52-53.\r\n\r\nĆwiczenia strona 52-53,  w zadaniu 8 proszę nie pisać całej rozprawki tylko 3 argumenty za jeden akapit i 3 argumenty przeciw drugi akapit . Proszę wpisać do zeszytu.\r\n\r\nNastępnie SELF-CHECK strona 54 -55.\r\n\r\nNa wykonanie zadań macie cały tydzień. \r\n\r\nPozdrawiam, KD\r\n', 3, '');

--
-- Indeksy dla zrzutów tabel
--

--
-- Indeksy dla tabeli `Homework`
--
ALTER TABLE `Homework`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id` (`id`),
  ADD KEY `id_2` (`id`);

--
-- AUTO_INCREMENT dla tabel zrzutów
--

--
-- AUTO_INCREMENT dla tabeli `Homework`
--
ALTER TABLE `Homework`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=56;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
