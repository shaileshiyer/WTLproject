-- phpMyAdmin SQL Dump
-- version 4.4.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Nov 04, 2016 at 02:52 PM
-- Server version: 5.6.26
-- PHP Version: 5.6.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `wtlproj114a1037`
--

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE IF NOT EXISTS `cart` (
  `userid` int(100) NOT NULL,
  `productid` int(100) NOT NULL,
  `productname` varchar(100) NOT NULL,
  `cost` int(100) NOT NULL,
  `cartid` int(20) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`userid`, `productid`, `productname`, `cost`, `cartid`) VALUES
(10, 7, 'Call of Duty:Infinite War', 45, 1),
(10, 10, 'Grand Theft Auto V', 60, 3),
(1, 2, 'Playstation 3', 299, 4),
(1, 10, 'Grand Theft Auto V', 60, 6);

-- --------------------------------------------------------

--
-- Table structure for table `orderstable`
--

CREATE TABLE IF NOT EXISTS `orderstable` (
  `orderno` int(11) NOT NULL,
  `orderlist` varchar(1000) NOT NULL,
  `userid` int(20) NOT NULL,
  `address` varchar(400) NOT NULL,
  `totalcost` int(20) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `orderstable`
--

INSERT INTO `orderstable` (`orderno`, `orderlist`, `userid`, `address`, `totalcost`) VALUES
(1, 'Playstation Vita,Playstation 4,Grand Theft Auto V,', 1, '.Platinum Venecia,Diamond Alley ,Navi Mumbai-59990						.', 609);

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE IF NOT EXISTS `products` (
  `prodid` int(20) NOT NULL,
  `productname` varchar(60) NOT NULL,
  `productimage` varchar(100) NOT NULL,
  `type` int(20) NOT NULL,
  `description` varchar(1000) NOT NULL,
  `cost` int(20) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=24 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`prodid`, `productname`, `productimage`, `type`, `description`, `cost`) VALUES
(1, 'Playstation 4', 'p1.jpg', 1, 'the latest generation sony console is here. it is a conplete entertainment system.', 349),
(2, 'Playstation 3', '2.png', 2, 'the older generation sony console is here. it is a conplete entertainment system.', 299),
(3, 'Playstation Vita', '8.jpg', 3, 'The PlayStation Vita (officially abbreviated PS Vita or Vita) is a handheld game console developed and released by Sony Interactive Entertainment. It is the successor to the PlayStation Portable as part of the PlayStation brand of gaming devices. .', 200),
(4, 'Wii U', 'w3.png', 4, 'it is a handheld console from nintendo', 299),
(5, 'Xbox one', 'x2.png', 5, 'the most powerful console from microsoft is here ', 399),
(7, 'Call of Duty:Infinite War', 'CODIW.jpg', 5, 'Call of Duty: Infinite Warfare is an upcoming first-person shooter video game developed by Infinity Ward and published by Activision.			', 45),
(8, 'Mario Kart 8', 'AMKE01.jpg', 4, 'Mario Kart 8 is a kart racing game and the eighth major installment in the Mario Kart series, developed and published by Nintendo for the Wii U video game console. 			', 18),
(9, 'Persona 4', '204450_front.jpg', 3, 'Persona 4 is the fifth game in the Persona series. The game was developed by Atlus for the PlayStation 2, and has since been ported onto the PlayStation 3 as a downloadable classic akin to Persona 3 FES.\r\n\r\nAs with Persona 3, the game is a turn-based RPG akin to most games of the Shin Megami Tensei series, although this game''s plot is rather unique compared to other games in general .', 25),
(10, 'Grand Theft Auto V', 'GTAV.jpg', 2, 'Grand Theft Auto V is an open world action-adventure video game developed by Rockstar North and published by Rockstar Games. It was released on 17 September 2013 for the PlayStation 3 and Xbox 360, on 18 November 2014 for the PlayStation 4 and Xbox One, and on 14 April 2015 for Microsoft Windows. The game is the first main entry in the Grand Theft Auto series since 2008''s Grand Theft Auto IV. ', 60),
(11, 'Destiny', 'destiny.jpg', 1, 'Destiny is an online-only first-person shooter video game developed by Bungie and published by Activision. It was released worldwide on September 9, 2014, for the PlayStation 3, PlayStation 4, Xbox 360, and Xbox One consoles. 			', 20),
(12, 'Until Dawn', 'Until_Dawn_Cover.jpg', 1, 'If you like horror movies, then youâ€™ll definitely want to check out Until Dawn, a game that puts you in the shoes of eight potential murder victims. Like many scary flicks, the game follows a group of teenagers who decide to spend the night in a cabin in the woods, a locale that just happens to be in the path of a serial killer.\r\n\r\nYou get to play as each of the kids in turn, making decisions ab', 20),
(13, 'N++', '2847_cover.jpg', 1, 'N++ is the third installment in a series of hyper-challenging, impossible-to-put-down games.The graphics may be minimal, but the gameplay is more than functional. You play as a graceful, nimble ninja who has to make it from point A to point B without being killed by the enemies, obstacles, and devious traps in between. If you can collect all the coins in each level, so much the better.			', 10),
(14, 'The Last of Us: Remastered', 'LOU.jpg', 1, 'The Last of Us was a PlayStation 3 game, but this remastered version is exclusive to the PlayStation 4. The game takes place after a fungal outbreak has destroyed the world, but the focus is really on the relationship between two protagonists as they make their way across a post-apocalyptic U.S.			', 35),
(15, 'Uncharted 4', '11924.jpg', 1, 'Not only is Uncharted 4: A Thiefâ€™s End a top-tier game, but it also caps off one of the best video game franchises of the past decade. For those unfamiliar with the series, Uncharted stars Nathan Drake, explorer and treasure hunter extraordinaire. Drake lives a life that would make even Indiana Jones jealous, doing things like climbing steep cliffs, getting in epic shootouts, blowing up every ve', 35),
(16, 'Uncharted 3: Drake''s Deception', 'uncharted3box.jpg', 2, 'whether Nathan is dangling from a plane, trekking through the desert of escaping a burning French chateau, Uncharted 3 was a visual tour de force that upped the Uncharted series'' sense of spectacle once more. It''s only let down really by the storyline, which I feel is largely inferior and is rather recycled from Uncharted 2. It''s still good, witty and filled with all the great characters we know and love, but it all felt rather samey, particularly within the ending section. There''s no doubt that Uncharted 3 still deserves its place on this list though. Like the others, this game has incredibly satisfying combat, excellent, jaw-dropping set pieces and finally lets us learn more about the backstory behind Nate and Sully. It''s also inevitable we''ll see another Uncharted on the PS4 - you deserve to be up to speed with the series before that eventually happens.			', 29),
(17, 'Journey', 'journey-collector-s-edition-ps3.jpg', 2, 'Journey is a game about walking forwards towards a goal for reasons you don''t quite understand. It''s minimalistic to an extreme level - dropping you in with hardly any hints about what to do, or how to progress, but Journey''s simplicity is, quite simply, a marvel. With a soaring soundtrack, incredible sights to see and a constant sense of loneliness, Journey makes you feel things in ways that more narrative-driven titles could never manage. I''m not ashamed to say I felt emotional trying to reach the top of Journey''s mountain - I got sucked into the world and wanted my character to survive this barren wasteland. There are many theories behind what Journey actually means, but for me it was all about life. It starts with you in the desert as a child, then you grow through your teenage years, become stronger, and rush through your life, experience the lows and highs as time goes on. It''s all open to interpretation and no matter how much you buy into metaphors, Journey will speak to you. I ', 20),
(18, 'Metal Gear Solid 4: Guns of the Patriots', '$_35.jpg', 2, ' Guns of the Patriots is an absolute marvel from beginning to end. Admittedly gametime compared to cinematics is generally quite low, but when the cinematics are done as well as this, you can forgive it. Apart from the last scenes, which drag on so much it''s unreal. When you do get to play MGS4, it''s phenomenal. It channels the spirit of all MGS games before it, adds new mechanics such as adaptive camouflage which takes on the appearance of what you''re near, and includes the series'' trademark epic boss battles. It also includes a profoundly moving section that harkens right back to the very first time many of us were introduced to Solid Snake and being able to retread those halls still gives me chills to this day. There''s no doubt that MGS has left its mark on the gaming industry, and MGS4 was a fitting sendoff to a characters who had been through so much for the last couple of decades. Plus Metal Gear Solid V is coming out soon, and you''ll need to be fully clued up on what''s going on ', 35),
(19, 'Little Big Planet 2', 'Little-Big-Planet-2.jpg', 2, 'Boasting countless new tweaks to the LBP formula, including cake guns, the ability to create your own storylines and an even more robust creation suite (people have even made FPS games somehow using it - those wizards), LBP2 is once again packed full of millions of things to do. Whether you just wanted to play the storyline, or alternatively wanted to experience the levels of others, LBP2 has you covered. It''s best when you''ve got your creative hat on though, making it easy to construct a level that you can fill with stickers, your own unique style and - if you''re really clever - maybe you''ll even serve us up something special.			', 29),
(20, 'Ratchet and Clank Future: A Crack In Time', 'rachetclank.jpg', 2, 'Who''d have thought a furry creature with a robot strapped to his back would survive in this gaming day and age? Ratchet and Clank has been around for absolutely ages now and the last core title in the series, a Crack In Time, is the absolute pinnacle of Ratchet and Clank titles. Like all other games in the series, a Crack in Time brings Insomniac''s mad weaponry and generally awesome gadgets to the forefront and lets Ratchet go nuts with them. With an experience system in place that enhances weapons through use, the ability to travel in space in Ratchet''s ship and the series'' trademark humour squarely in place, a Crack in Time is an expansive, engaging and thoroughly enjoyable romp through a surprisingly excellent storyline. Whereas other titles on the PS3 - Tools of Destruction and Quest for Booty - excelled, a Crack in Time polished the formula to a sheen and remains to this day by favourite Ratchet title. 3 is just behind though; that was a damn good game. 			', 29),
(21, 'Gravity Rush', 'GravityRushPSVitaCover.png', 3, 'Gravity Rush is a delight, an open-world adventure game built around a truly new-feeling mechanic. The protagonist Kat is able to re-orient gravity, letting her fall in any direction. Itâ€™s something of a mix between falling and flying, and it makes the game a uniquely disorienting, highly enjoyable experience. Combine those mechanical smarts with a wonderfully imaginative, fun story, lush visuals, gorgeous art design and a dizzy, grand soundtrack and youâ€™ve got a real winner.\r\nA Good Match For: Crackdown and Infamous fans, people who like their games to look and play differently, jazz-heads.\r\nNot a Good Match For: Those who want familiar mechanics, deep and involved combat.			', 25),
(22, 'The Binding of Issac:Rebirth', '15451.jpg', 3, 'Something is wrong with Isaacâ€™s mom: She thinks that she can hear God. And God, disturbingly enough, has instructed her to kill Isaac. The only way Isaac can get out of that hellish situation is by jumping into his basementâ€”which happens to be endless, and full of terrors. Thankfully, these demons can be defeated by directing Isaacâ€™s tears, twin-stick shooter style, across Zelda-like dungeons. Well.. theyâ€™re like Zelda if Zelda was full of horrifying hellspawn, poop, and tons of mysterious items which you donâ€™t know how to use...yet.			', 15),
(23, 'Thomas was Alone', 'BUNDLE-THOMAS-WAS-ALONE-PS4-PS-VITA.jpg', 3, 'Remember back when people thought a game needed realistic graphics with flashy characters to successfully convey a story with real heart and soul? Thomas Was Alone is proof that we were incredibly stupid back then. Using nothing more than colored quadrilaterals, indie developer Mike Bithell created a challenging puzzle platformer that tells a story much larger than what you see on your Vita screen. Through clever narration and intelligent level design thatâ€™s one part obstacle course, one part character development, Thomas Was Alone has a warmth and depth that adds gentle curves to the sharp edges of its four-sided heroes.			', 15);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `userid` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(40) NOT NULL,
  `name` varchar(50) NOT NULL,
  `address` varchar(200) NOT NULL,
  `mobile` varchar(10) NOT NULL,
  `type` int(10) NOT NULL,
  `gender` text NOT NULL,
  `emailid` varchar(150) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`userid`, `username`, `password`, `name`, `address`, `mobile`, `type`, `gender`, `emailid`) VALUES
(1, 'shailu96', 'e10adc3949ba59abbe56e057f20f883e', 'Shailesh Iyer', 'Platinum Venecia,Diamond Alley ,Navi Mumbai-59990			', '1982731982', 1, 'male', 'iyer.shailesh@gmail.com'),
(2, 'sweth8990', 'e10adc3949ba59abbe56e057f20f883e', 'Swetha V Iyer', 'Koyali Oil refinery ,Baroda ,Gujrat,India-40021			', '9874892734', 0, 'female', 'swetha8990@gmail.com'),
(10, 'shailu1996', 'e10adc3949ba59abbe56e057f20f883e', 'Shailesh', 'kljfglkfdjglkjdfglkdfj			', '9281092830', 0, 'male', 'iyer.shailesh@siesgst.ac.in');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`cartid`);

--
-- Indexes for table `orderstable`
--
ALTER TABLE `orderstable`
  ADD PRIMARY KEY (`orderno`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`prodid`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`userid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `cartid` int(20) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `orderstable`
--
ALTER TABLE `orderstable`
  MODIFY `orderno` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `prodid` int(20) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=24;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `userid` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=11;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
