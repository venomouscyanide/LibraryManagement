-- phpMyAdmin SQL Dump
-- version 4.5.4.1deb2ubuntu2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jan 04, 2018 at 02:46 PM
-- Server version: 5.7.20-0ubuntu0.16.04.1
-- PHP Version: 7.0.22-0ubuntu0.16.04.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mydb`
--

-- --------------------------------------------------------

--
-- Table structure for table `author`
--

CREATE TABLE `author` (
  `id` int(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `age` int(100) NOT NULL,
  `gender` tinyint(1) NOT NULL,
  `born_in` varchar(100) NOT NULL,
  `about` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `author`
--

INSERT INTO `author` (`id`, `name`, `age`, `gender`, `born_in`, `about`) VALUES
(1, 'Sir Pings a lot', 65, 1, 'Saudi Arabia', 'As fast as they get :)'),
(2, 'Rocky Bamboa', 45, 1, 'The US of A', 'Kill em all.'),
(3, 'Darth Vader', 21, 1, 'India', 'The empire did nothing wrong.');

-- --------------------------------------------------------

--
-- Table structure for table `book`
--

CREATE TABLE `book` (
  `id` int(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `isbn` varchar(100) NOT NULL,
  `description` varchar(5000) NOT NULL,
  `book_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `book`
--

INSERT INTO `book` (`id`, `name`, `isbn`, `description`, `book_id`) VALUES
(1, 'The Great Goat', '598-98-98546-85-1', 'To be fair to Akin, I do not think for a second that he was trying to make a straightforward eye-for-an-eye revenge drama. Indeed, there are hints throughout that he had more on his mind in telling this particular story. The end credits, for example, offer a number of disturbing statistics regarding the rise of nationalistic hate crimes in Germany in recent years that suggest that the subject is something that means a great deal to him. The film also tries to starkly illustrate notion that the real victims of terrorisms are not the dead but the survivors who find their love and grief curdling into the kind of hate that can inspire the same kind of violence that took the lives of their loved ones. Unfortunately, this aspect is gradually undercut as the film gets broader in its tone to the point where Akin himself essentially does the same thing to Katja that the neo-Nazis have done by robbing her of her humanity and transforming her into a mindless pawn.\n\nAnd yet, while In the Fade is ultimately too muddled, it does contain a number of elements that are worthy of consideration. The filmmaking itself is crisp, stylish and packs a lot of detail into even the briefest of moments. There are several scenes that are striking on an individual basis Katja regarding the splatter of blood on one of the walls of the bombed-out office; a visually extraordinary sequence set around Katja taking a potentially fateful bath; a brief but powerful conversation during a cigarette break between two people brought together by unspeakable circumstances. Most of all, it contains a powerful, deeply felt performance by Kruger that is both the best thing that she has ever done in a film and worthy of all the accolades that it has received even during the ludicrous final section, she keeps things from totally spinning out of control. I just wish that these moments and efforts had gone into the service of a movie that was ultimately worthier of receiving them.', 1),
(1, 'Sir Pings a fibre lot', '998-98-521456-65-6', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris ex erat, mollis id erat et, aliquam vestibulum ante. Integer nec ex id erat congue fermentum in a turpis. Duis elementum magna vel lacus tempus pharetra. Interdum et malesuada fames ac ante ipsum primis in faucibus. Etiam convallis et neque at congue. Suspendisse ornare, nibh eu fringilla posuere, elit magna ullamcorper turpis, a lobortis lacus diam ac turpis. In hac habitasse platea dictumst. Nulla commodo pulvinar molestie. Nulla efficitur, diam nec aliquam ullamcorper, libero purus vestibulum eros, nec sollicitudin nisl lectus id ex. Pellentesque efficitur elementum sem in pellentesque. Proin dui arcu, egestas eget placerat a, mollis vel purus. Pellentesque at urna id purus facilisis mattis et eget lectus. Cras et aliquam elit. Suspendisse leo tellus, suscipit vitae ligula molestie, scelerisque finibus lectus. Etiam tempor suscipit lacus, at fermentum nibh vestibulum sed.', 2),
(2, 'AK-47', '988-56-58462-55-5', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse dignissim nulla ut leo pretium ornare. Ut lobortis mauris et feugiat dapibus. Etiam bibendum diam diam, in tincidunt nisl tempus a. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Pellentesque tincidunt, dolor convallis molestie faucibus, dolor mi aliquet tellus, eu pretium mauris ligula id quam. Aenean finibus consequat tortor pulvinar mollis. Duis lobortis, eros et egestas laoreet, dui arcu hendrerit augue, in congue dui quam in mi. Proin id libero nec ipsum tempor pulvinar fermentum nec diam. Morbi rutrum nunc at molestie tincidunt. Pellentesque blandit scelerisque sem, id volutpat metus elementum sed. Vestibulum bibendum ante ac magna luctus, a facilisis velit feugiat.', 3),
(2, 'Machine Gun Boom', '659-98-52145-98-3', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi feugiat interdum interdum. Ut imperdiet condimentum lacinia. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Aliquam molestie ullamcorper pretium. In scelerisque turpis ligula, at condimentum justo auctor id. Suspendisse eget metus eros. Interdum et malesuada fames ac ante ipsum primis in faucibus. Maecenas commodo, enim eu semper dignissim, sem erat suscipit arcu, nec sagittis mi lacus nec orci.\n\nAenean eleifend mauris in nisl bibendum ultrices at ac leo. Cras tincidunt dignissim ipsum, ac malesuada elit volutpat fringilla. Nullam gravida, velit sed pretium hendrerit, odio metus vulputate ligula, non viverra nulla lorem in urna. Mauris vulputate purus orci, id elementum purus bibendum ac. Sed ac imperdiet nunc. Donec vitae sem ut lectus consequat ultricies. Sed tortor lectus, lobortis eget velit sit amet, ornare auctor quam.', 4),
(3, 'Death Star Chronicles', '985-96-89546-98-5', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc congue, arcu a hendrerit aliquet, orci dolor fermentum ligula, ac finibus libero tortor non tellus. Nam malesuada ipsum vitae erat lacinia, sit amet pretium elit porta. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Nulla tempus justo nec libero molestie, eget facilisis erat pharetra. Nullam ante ante, dictum sed nibh id, venenatis fringilla tortor. Cras sit amet laoreet velit. Aliquam a mi sed mauris venenatis aliquam. Nulla facilisi. Proin ornare lacus in ex maximus malesuada. Duis sagittis interdum urna at mollis. Nam rhoncus id mi vitae convallis.\n\nDonec non consequat tortor, sed ultrices ipsum. Nullam nec bibendum massa. Aenean ullamcorper luctus risus, in varius sem. Mauris non molestie eros, at dapibus mi. Duis velit lorem, scelerisque quis mauris et, commodo suscipit nisl. Curabitur semper tempor lacus sit amet scelerisque. Duis ut ex et nunc pulvinar auctor. Vivamus sem nibh, maximus quis commodo ac, ultricies non leo. Fusce ipsum justo, blandit in dapibus ut, accumsan in dolor. Nam venenatis facilisis quam vel ultricies. Aenean facilisis vitae magna fermentum maximus. Duis et augue enim. Suspendisse quis volutpat tortor, eu vehicula felis. Duis tempor quam quis lacinia consequat.\n\nDuis eget ligula eget diam porta bibendum. Sed eros eros, finibus malesuada quam quis, cursus ultricies sapien. Vestibulum non commodo ante. Nullam vulputate est odio, et vehicula felis blandit ut. Ut rhoncus, lacus sed pharetra convallis, lectus mauris dapibus felis, at mollis urna augue id lorem. Pellentesque interdum, nibh at viverra vehicula, mi est molestie massa, eu facilisis nibh velit tempor justo. Nullam justo massa, molestie vitae ipsum vel, bibendum molestie massa. Donec id dignissim lacus, at ullamcorper leo. Duis cursus sapien eu pellentesque gravida. Mauris rhoncus imperdiet facilisis. Donec mollis cursus faucibus.\n\n', 5),
(3, 'Death Star RIP', '549-98-98569-96-5', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum pretium rutrum posuere. Nunc convallis aliquet ex sed interdum. Vestibulum consequat ac diam a vehicula. In rhoncus sem imperdiet, fringilla nisi non, tincidunt est. Duis pretium non libero ut gravida. Sed vitae enim eget felis tincidunt vulputate ac non nulla. Aliquam libero urna, venenatis in elementum vitae, ornare vel tortor. Nullam tempus est vel magna volutpat ultricies. Vestibulum elementum tempus sapien eu lacinia.\n\nMauris sed fringilla turpis, non porta lacus. Phasellus nec sollicitudin est. Cras posuere viverra orci, in luctus quam tincidunt ultrices. Donec vel mauris consequat, aliquet libero aliquam, rhoncus lacus. Suspendisse lectus neque, blandit sed urna eget, ultrices efficitur mi. Praesent quis diam a ipsum porta tincidunt ac ut nisi. Nam placerat ex id sollicitudin laoreet. Fusce quis risus eu eros convallis porta ut ac quam. Sed commodo id augue sit amet porta. Fusce a leo commodo, sodales est in, rhoncus leo. Vestibulum nec tellus sit amet erat placerat posuere ac vel tortor. Praesent sit amet purus leo. Praesent cursus tincidunt tellus, non semper orci vehicula quis. Etiam posuere nisi quis faucibus condimentum. Curabitur auctor velit est, id suscipit nulla euismod ac. Curabitur imperdiet felis mauris, vel aliquam urna iaculis at.', 6);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `author`
--
ALTER TABLE `author`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `book`
--
ALTER TABLE `book`
  ADD PRIMARY KEY (`book_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `author`
--
ALTER TABLE `author`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
--
-- AUTO_INCREMENT for table `book`
--
ALTER TABLE `book`
  MODIFY `book_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
