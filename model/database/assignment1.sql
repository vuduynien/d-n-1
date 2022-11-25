-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th10 25, 2022 lúc 06:23 AM
-- Phiên bản máy phục vụ: 10.4.24-MariaDB
-- Phiên bản PHP: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `assignment1`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `category`
--

CREATE TABLE `category` (
  `id_cate` int(11) NOT NULL,
  `name_cate` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `category`
--

INSERT INTO `category` (`id_cate`, `name_cate`) VALUES
(1, 'áo phông'),
(2, 'quần short'),
(3, 'áo dài'),
(4, 'quần dài');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `comment`
--

CREATE TABLE `comment` (
  `cmt_id` int(11) NOT NULL,
  `content` varchar(255) NOT NULL,
  `id_pro` int(11) NOT NULL,
  `Id_user` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `news`
--

CREATE TABLE `news` (
  `id_news` int(11) NOT NULL,
  `title_news` varchar(255) NOT NULL,
  `intro_news` text NOT NULL,
  `detail_news` text NOT NULL,
  `img_news` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `news`
--

INSERT INTO `news` (`id_news`, `title_news`, `intro_news`, `detail_news`, `img_news`) VALUES
(1, 'Pope Francis sets off on ‘penitential pilgrimage’ to Canada', 'Pope Francis departs from Rome’s Fiumicino Airport on Sunday morning to begin his 37th Apostolic Journey abroad, which will see him embrace the people of Canada.', 'Sunday morning saw Pope Francis fly out of Rome on an ITA Airways plane to kick off his Apostolic Journey to Canada.\r\n\r\nThe papal plane took off at 9:16 AM Rome time, and landed in the western Canadian city of Edmonton about 11:09 AM MDT (7:09 PM Rome time).\r\n\r\nHe received an official welcome to Canada by Governor General Mary Simon, Prime Minister Justin Trudeau, and Lieutenant Governor of Alberta, Salma Lakhani.\r\n\r\nThe Pope then traveled to St. Joseph Seminary to rest up from his long flight for the rest of the day. His first public encounters begin in earnest on Monday morning.\r\n\r\nOne week ahead of his departure, the Pope said at his Angelus address on 17 July that he is undertaking a “penitential pilgrimage” to Canada, in the hopes of contributing to the “process of healing and reconciliation with the country’s indigenous peoples.”\r\n\r\n“Unfortunately, in Canada, many Christians, including some members of religious institutes, have contributed to the policies of cultural assimilation that, in the past, have severely harmed indigenous communities in various ways,” he said on that occasion.\r\n\r\nPope Francis shakes hands with representatives of Italy\'s government\r\nPope Francis shakes hands with representatives of Italy\'s government\r\nOn Saturday, Cardinal Secretary of State Pietro Parolin echoed the Pope’s words in an interview with Vatican Media.\r\n\r\nHe said the Pope’s visit comes in connection with meetings held in the Vatican in March and April with representatives of indigenous peoples.\r\n\r\n“I would say that closeness is the key word,” said Cardinal Parolin. “The Pope intends not only to speak words, but above all to draw near to, and manifest, his closeness in a concrete way. Therefore, he sets out to touch with his own hands the suffering of those populations, to pray with them and to make himself a pilgrim in their midst.”', 'https://res.cloudinary.com/dfdwvhljw/image/upload/v1658721726/Project-PHP1/news/cq5dam.thumbnail.cropped.750.422_wyrqmp.jpg'),
(2, 'Pope offers best wishes to Italian President on his birthday', 'Pope Francis offers the President of Italy, Sergio Mattarella, his best wishes as he marks his 81st birthday on Saturday. The greetings came in a telegram in which the Pope lauded him for his dedication in guiding the country.', 'Pope Francis expressed his joy and best wishes, but also his prayers and remembrance in his greetings to President Mattarella on Saturday.\r\n\r\nIn the telegram sent to Italy\'s Head of State, Sergio Mattarella, who turned 81 on Saturday and has served as President of the Republic since February 2015, the Pope underscored the \"high service\" he carries out \"on behalf of the beloved Italian people.\"\r\nAuthority and dedication at a difficult time\r\nWith attention focusing on Italy’s delicate political situation that has led in recent days to the decision to dissolve parliament and early general elections possibly in September, Pope Francis offered warm words that emphasize the \"fundamental and indispensable contribution\" that President Mattarella continues to provide with \"kind authoritativeness and exemplary dedication\", especially at this \"particular moment marked by not a few difficulties and crucial choices for the life of the country.\"\r\n\r\nMutual affection and esteem\r\nThe Pope concluded by offering his best wishes, esteem and apostolic blessing to the President\'s family, collaborators and the entire nation.\r\n\r\nThe Pope’s words reflect the bond and good relations between both leaders, often expressed on various occasions.\r\n\r\nLast January, following the President Mattarella\'s re-election, the Pope recalled the President’s commitment to keep the country united and communicate serenity in the midst of the pandemic.\r\n\r\nPresident Mattarella offered his warm words when addressing Pope Francis on the anniversary of his pontificate on 19 March, when he thanked him for \"the constant attention…to never stray from the path of fraternity\" and a shared common commitment for peace and dialogue.\r\n\r\n', 'https://res.cloudinary.com/dfdwvhljw/image/upload/v1658722072/Project-PHP1/news/cq5dam.thumbnail.cropped.750.422_jokwks.jpg'),
(3, 'Pope Francis remembers Grandparents Day on Papal Flight', 'Aboard Papal Flight for \'Penitential Pilgrimage\' to Canada, Pope Francis remembers in a special way the World Day for Grandparents and Elderly celebrated by the Church on Sunday. Before walking to greet journalists in the corridors, the Pope praises grandparents as the roots who must be treasured and bring everything forward.\r\n', 'Pope Francis, on his papal flight to Canada, has remembered and praised grandparents, as the Church observes on Sunday the second World Day for Grandparents and the Elderly.\r\n\r\nThe Church observes the World Day each year on the fourth Sunday in July, close to the feast of Jesus\' grandparents, Saints Joachim and Anne.\r\n\r\nPope Francis instituted this Day in 2021 since grandparents are often forgotten, but yet \"are the link between generations, passing on the experience of life and faith to the young.\"\r\n\r\nWe need to go back to grandparents\r\nPope Francis remembered that Sunday marks the Second World Day for grandparents and elderly, also offering special appreciation for elderly priests and religious.\r\n\r\n\"It\'s Grandparents\' Day, grandparents, grandmothers, who are the ones who have passed on the history, traditions, habits and many other values.\r\n\r\n“Today we need to go back to grandparents, I would say so as a leitmotif in the sense that young people must have contact with their grandparents, go back to them, go back to their roots, not to stay there no, but to take them forward like the tree: which takes strength from the roots and carries it forward in the flowers in the fruit.”\r\n\r\nHe emphasized how grandparents are responsible for blossoming and maturing future generations and should be respected.\r\n\r\nDo not hide elderly religious\r\n\"I would also like to remember as a religious, the old men and women religious, the \'grandparents\' of consecrated life: please do not hide them, they are the wisdom of a religious family and that the new men and women religious, the novices, the novices we have contact with them, they will give us all the experience of life that will help us so much, so much to go forward...\"\r\nThe Pope reminded that each one of us has grandparents, some are gone, others are alive.\r\n\r\n\"Let us remember them today in a special way, from them we have received so many things: first of all history. Thank you.\"\r\n\r\nReconciliation and Healing\r\nThe Holy Father is on his way to Canada for his 37th Apostolic Journey, marking his 56th country visited.\r\n\r\nThe Pope is making a penitential pilgrimage to the nation aimed at reconciliation and healing with the country\'s indigenous peoples.\r\n\r\nEach papal flight, the Pope greets journalists aboard, and offers words of thanks for their work.\r\n\r\nThis trip the Holy Father was accompanied by about 80 journalists from more than 10 countries.\r\n\r\nWalking throughout flight to greet journalists\r\nWishing everyone a good Sunday, the Pope thanked them for their \"service\" and \"company.\"\r\n\r\nThe Pope confirmed to Holy See Press Office Director, Matteo Bruni, beside him, his willingness to greet the journalists as usual as he walks along the corridors.\r\n\r\n\"I think I can make it, we can go,\" he said.\r\n\r\nPenitential Pilgrimage\r\nThe Holy Father also noted that a special attention and \'spirit\' must be dedicated to this Apostolic Journey given it is a penitential pilgrimage to show closeness to the indigenous who have suffered. \r\nThe Pope invited those gathered to join him in praying the Sunday Angelus prayer.\r\n\r\nThe Holy Father also expressed delight in seeing Valentina Alazraki, journalist of Mexico\'s TV channel Televisa.', 'https://res.cloudinary.com/dfdwvhljw/image/upload/v1658730838/Project-PHP1/news/cq5dam.thumbnail.cropped.750.422_zrxdle.jpg'),
(4, 'Pope looks glum after Vatican meeting with Donald Trump', 'Encounter considered more successful than their first but was noteworthy for its sombre tone', 'Pope Francis once said that Christians must have “cheerful faces and eyes full of joy”. But there was little evidence of those emotions as Donald Trump descended on the Vatican on Wednesday for his first face-to-face meeting with the Argentinian pontiff.\r\n\r\nThe encounter was ultimately considered a success following a rocky start to the pair’s relationship last year, when Francis questioned Trump’s Christian credentials. But despite a warm trading of gifts and humorous exchange between Pope Francis and the first lady, Melania Trump – in which the pope asked if she fed him a popular kind of Slovenian cake – the meeting was noteworthy for its sombre tone at the start.\r\n\r\nPope Francis asks Melania Trump: \'What do you feed him?\' – video\r\n00:14\r\nPope Francis asks Melania Trump: \'What do you feed him?\' – video\r\nGreeting the US president in the papal library, Francis did not exude his usual warmth and cheerfulness even as Trump proclaimed that it was a “great honour” to meet him.\r\n\r\nPhotographs taken after their meeting showed a glum-looking pope, in contrast to the smiles when Francis met Trump’s predecessor, Barack Obama, who reportedly used to carry a rosary with him that was given to him by the pontiff.\r\n\r\nThe tensions were perhaps to be expected: the two disagree on the issues that lie closest to Francis’s heart, from climate change to the need to integrate and accept migrants of all faiths.\r\n\r\nAs they sat down opposite one another at a large wooden desk, Francis signalled to the president that it was best to talk out of the earshot of reporters and cameras, who were quickly led out of the papal library. The two then had a 29-minute chat with only the interpreter present, not quite as long as the nearly hour-long conversation the pope had with Obama when they met in 2014.\r\n\r\n“Obviously there was no evidence of the great chemistry he had with Obama. There was something special there with him,” said Austen Ivereigh, the pope’s biographer.\r\n\r\n“I think it was a solemn occasion that called for formality and protocol and both demonstrated that … they looked much more relaxed at the end,” he added.\r\n\r\nFrancis greets Trump.\r\nFrancis greets Trump. Photograph: AFP/Getty\r\nThe discussion was described as cordial in a statement by the Holy See, which said “satisfaction was expressed” for the good US relationship with the Vatican and their “joint commitment in favour of life, and freedom of worship and conscience”.\r\n\r\n“It is hoped that there may be serene collaboration between the state and the Catholic church in the United States, engaged in service to the people in the fields of healthcare, education and assistance to immigrants,” the statement said.\r\n\r\nLeft unsaid was the fact that the Trump administration’s policies on migrants have been condemned by Francis’s allies in the US, including Joe Tobin, the archbishop of Newark, New Jersey.\r\n\r\nThey also discussed world affairs, including interfaith dialogue and peace in the Middle East, with emphasis on the protection of Christians.\r\n\r\nRex Tillerson, the US secretary of state who accompanied the president, later confirmed that Trump and Francis had a “pretty extensive” conversation about terrorist threats and the radicalisation of young people.\r\n\r\nBy the end of the half-hour private meeting, once the door to the library was reopened, Francis seemed more chipper. Upon meeting the first lady, he asked her whether she fed her husband potica, the pope’s favourite Slovenian dessert. An interpreter then asked Melania: “What do you give him to eat?”. It was unclear whether the first lady understood the remark, and seemed to say, “pizza?” before smiling and answering, “yes”.\r\n\r\nThe US president was also accompanied by his daughter Ivanka, her husband, Jared Kushner, national security adviser HR McMaster, and personal assistant Keith Schiller, as well as press aides.\r\n\r\nTrump arrived at the Vatican at about 8.30am after spending the night at the residence of the US ambassador to Italy. That post has not yet been filled by Trump’s administration.\r\n\r\nThe pontiff walks past Ivanka and Melania Trump.\r\nThe pontiff walks past Ivanka and Melania Trump. Photograph: Alessandra Tarantino/EPA\r\nTrump was led into the frescoed halls of the Vatican with Melania – dressed in a traditional black dress and veil, as is custom but not mandatory – walking a few feet behind him.\r\n\r\n“It’s not like Trump Tower in New York,” a German archbishop, Georg Gänswein, could be overheard joking to Trump as the president’s entourage shuffled into a Vatican elevator.\r\n\r\nAs is customary, the two exchanged gifts. Trump offered the pope a large box that he said was filled with books written by Martin Luther King.\r\n\r\n“This is a gift for you,” Trump was overheard saying. “I think you will enjoy them. I hope you do.”\r\n\r\nFrancis gave Trump a large medallion that depicted an olive branch, a symbol of peace, to which the president replied: “We can use peace.” The medallion is traditionally offered to politicians, though the symbol varies.\r\n\r\nFrancis exchanges gifts with Donald and Melania Trump\r\nFrancis exchanges gifts with Donald and Melania Trump. Photograph: Evan Vucci/AFP/Getty\r\nThe pope also offered Trump some of his latest writings, known as encyclicals, including his work on the need to protect the environment. “Well, I will be reading them,” Trump said.\r\n\r\nAs the president left the room, he expressed gratitude to the man he once called disgraceful for questioning his faith. The dispute was related to Trump’s proposal to build a wall between Mexico and the US – a policy the pontiff had said was not Christian.\r\n\r\nPotica, the Slovenian dessert favoured by Pope Francis\r\nIs it pizza? No, it\'s potica: the pope gives Melania Trump food for thought\r\nRead more\r\n“Thank you, thank you, I won’t forget what you said,” Trump said in his parting words.\r\n\r\nThe president then spoke to Pietro Parolin, the Vatican’s secretary of state, for nearly an hour. According to Tillerson, the two had a “good exchange on climate change”.\r\n\r\nThe president and first lady were given a tour of the Sistine Chapel, after which Melania visited a children’s hospital in Rome while Ivanka toured Sant’Egidio charity centre.\r\n\r\nTrump, who will fly to Brussels on Wednesday for a Nato summit, will wrap up his tour on Friday at the G7 summit in Sicily.\r\n\r\nMelania Trump at the Bambin Gesu’ children’s hospital.\r\nMelania Trump at the Bambino Gesù children’s hospital. Photograph: Remo Casilli/AP\r\n This article was amended on 25 May 2017. In the editing process Pietro Parolin was given the position of the Vatican’s head of parliament. Parolin is secretary of state. In addition an earlier version of the article referred to a translator when an interpreter was meant.', 'https://res.cloudinary.com/dfdwvhljw/image/upload/v1658730992/Project-PHP1/news/5000_r4ao4o.webp');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `products`
--

CREATE TABLE `products` (
  `id_pro` int(100) NOT NULL,
  `name_pro` varchar(255) NOT NULL,
  `img_pro` varchar(255) NOT NULL,
  `price` float NOT NULL,
  `price_sale` float DEFAULT NULL,
  `detail` text NOT NULL,
  `id_cate` int(11) NOT NULL,
  `situation` varchar(20) DEFAULT NULL,
  `ngay_pro` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `products`
--

INSERT INTO `products` (`id_pro`, `name_pro`, `img_pro`, `price`, `price_sale`, `detail`, `id_cate`, `situation`, `ngay_pro`) VALUES
(95, 'áo phông 1', '../upload/09b53a569438140f6b815a80f1fdadff.jpg', 120, 11, '                                        áo rất đẹp                                 ', 3, 'best', '2022-12-02'),
(96, 'áo dài 2', '../upload/3080-ao-hoodie-theu-hinh-chu-cun-1.jpg', 1123, 12, '                                                            áo rất đẹp                                                 ', 3, 'new', '2022-11-01'),
(97, 'áo dài 3', '../upload/4257afae4d6fc9903942372dfbd541e5.jpg', 120, 124, '                                        áo rất đẹp                                 ', 3, 'best', '2022-11-26'),
(98, 'áo dài 4', '../upload/4891-ao-hoodie-tomboy-5.jpg', 100, 0, '                                        áo rất đẹp                                 ', 3, 'new', '2022-11-24'),
(99, 'áo dài 5', '../upload/add2cf8fc92004adb4fbba3b3cf23aeb.jpg', 785865, 0, '                                        áo rất đẹp                                 ', 3, 'new', '2022-11-26'),
(100, 'áo dài 6', '../upload/ao_khoac_bomber_da_lon_denimst_11.jpg', 100, 0, '                                        áo rất đẹp                                 ', 3, 'new', '2022-11-19'),
(102, 'áo dài 8', '../upload/bc84cd62490aae82dd2afb2cc09ac11f.jpg', 785865, 123, '                                        áo rất đẹp                                 ', 3, 'best', '2022-11-19'),
(113, 'áo dài 9', '../upload/104db0960485259c5abc2c84d3da61fe.jpg', 120, 321, '                                                            áo rất đẹp                                                ', 3, 'sale', '2022-12-07'),
(114, 'áo dài 10', '../upload/th (19).jpg', 1123, 333, '                                                            áo rất đẹp                                                ', 3, 'sale', '2022-11-26'),
(116, 'áo dài 1', '../upload/ao-hoodie-ban-chay-nhat-shopee-4.jpg', 123, 333, '                    áo rất đẹp                ', 3, 'new', '2022-11-11'),
(117, 'áo dài 7', '../upload/ao-khoac-gio-cho-be-trai-in-logo_(5).jpg', 10000, 13, '                    áo rất đẹp                ', 3, 'best', '2022-11-18'),
(118, 'áo phông 2', '../upload/1f8698d94ffd0cc7c0ff77809eb3f829.jpg', 785865, 333, 'áo rất đẹp', 1, 'new', '2022-11-26'),
(120, 'áo phông 3', '../upload/6df167eec6966ab30a7fc4ad336282c4.jpg', 100, 0, 'áo rất đẹp', 1, 'new', '2022-11-11'),
(121, 'áo phông 4', '../upload/84048af12abcc8d36f1411ab1b613e9a.jpg', 123, 11, 'áo rất đẹp', 1, 'best', '2022-11-12'),
(122, 'áo phông 5', '../upload/Ao_phong_nu_nhieu_hinh_ngo_nghinh_AN005_(16618913688_549763519___copy_(2)).jpg', 120, 124, 'áo rất đẹp', 1, 'best', '2022-11-19'),
(123, 'áo phông 6', '../upload/ao-phong-dong-phuc-dep-1.jpg', 1123, 0, 'áo rất đẹp', 1, 'new', '2022-12-02'),
(124, 'áo phông 7', '../upload/ao-phong-nam-aloyou-PN50.jpg', 785865, 0, 'áo rất đẹp', 1, 'sale', '2022-11-05'),
(125, 'áo phông 8', '../upload/byanotherhouse1187661226480951858388416405456502159526818n-1617851601200208187978.jpg', 100, 0, 'áo rất đẹp', 1, 'new', '2022-11-01'),
(126, 'áo phông 9', '../upload/loat-ao-phong-local-brand-don-gian-ma-chat-lu-gia-chi-tu-250k-ai-cung-nen-sam-mot-em-don-he-707-5695186.jpg', 120, 0, '                                        áo rất đẹp                                ', 1, 'sale', '2022-11-11'),
(127, 'quần short 1', '../upload/1_977c8d760b92409da3f33aa15f1b6411_grande.webp', 123, 12, '                                        quần rất đẹp                                ', 2, 'sale', '2022-11-25'),
(129, 'quần short 2', '../upload/9479-z1480284523211-1e666d69b2df2e4891cd4288e13a3f2d-1.png', 785865, 0, '                                        quần rất đẹp                                ', 2, 'sale', '2022-11-12'),
(130, 'quần short 3', '../upload/mau-quan-short-nu-dep-xinh-2.jpg', 100, 11, '                    quần rất đẹp                ', 2, 'best', '2022-12-08'),
(131, 'quần short 4', '../upload/quan_short_jeans_nam_xanh_dam_xuoc_1.jpg', 123, 0, '                    quần rất đẹp                ', 2, 'sale', '2022-11-30'),
(132, 'quần short 5', '../upload/quan-short-local-brand.webp', 10000, 0, '                    quần rất đẹp                ', 2, 'new', '2022-12-03'),
(133, 'quần short 6', '../upload/quan-short-thun-ni-nam-day-rut-phoi-2-tui-keo3.jpg', 1123, 0, '                    quần rất đẹp                ', 2, 'sale', '2022-12-02'),
(134, 'quần short 7', '../upload/Quan-short-thun-the-thao-nam-QSNPW-02.jpg', 120, 13, '                    quần rất đẹp                ', 2, 'best', '2022-11-26'),
(138, 'quần short 8', '../upload/quần 8.jpg', 1123, 0, '                    quần rất đẹp                ', 2, 'sale', '2022-12-08'),
(139, 'quần short 9', '../upload/quần 9.jpg', 123, 12, '                    quần rất đẹp                ', 2, 'best', '2022-12-06'),
(140, 'quần short 10', '../upload/z1449194688612-e9cd995c7b8e29e5e666f785194bf1dd.jpg', 785865, 0, '                    quần rất đẹp                ', 2, 'sale', '2022-11-28'),
(141, 'quần dài 1', '../upload/1b6f2735e13d2ed419692863039abb34.jpg', 120, 0, '                    quần rất đẹp                ', 4, 'new', '2022-12-02'),
(142, 'quần dài 2', '../upload/6ea38a23d82b8d2ed1b79dcde210a4cd.jpg', 1123, 13, '                    quần rất đẹp                ', 4, 'best', '2022-11-03'),
(143, 'quần dài 3', '../upload/7d06ab6101deff80a6cf.webp', 999, 0, '                    quần rất đẹp                ', 4, 'sale', '2022-12-10'),
(144, 'quần dài 4', '../upload/9b14fd7aadf511d9693cf05d4a3df8c5.jpg', 123, 0, '                    quần rất đẹp                ', 4, 'new', '2022-11-26'),
(145, 'quần dài 5', '../upload/7081956cefceb264824286fc8a2ca4b6.jpg', 120, 123, '                    quần rất đẹp                ', 4, 'best', '2022-12-03'),
(146, 'quần dài 6', '../upload/63985150e9231b7d4232.jpg', 100, 0, '                    quần rất đẹp                ', 4, 'sale', '2022-11-03'),
(147, 'quần dài 7', '../upload/ac264e0e93e29a9afa882083b0c3e10e.jpg', 785865, 0, '                                        quần rất đẹp                                ', 4, 'sale', '2022-11-12'),
(148, 'quần dài 8', '../upload/quan_dai_jogger_the_thao_nu_tap_gym_2_soc_4.jpg', 1123, 13, '                                                            quần rất đẹp                                                ', 4, 'sale', '2022-12-10'),
(151, 'quần dài 9', '../upload/quần 9 (2).jpg', 120, 333, '                    quần rất đẹp                ', 4, 'best', '2022-11-18'),
(152, 'quần dài 10', '../upload/quần 10.jpg', 100, 0, '                    quần rất đẹp                ', 4, 'sale', '2022-11-25'),
(153, 'áo phông 10', '../upload/1626273002519.jpg', 1123, 0, 'áo rất đẹp', 1, 'sale', '2022-12-02');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `users`
--

CREATE TABLE `users` (
  `id_user` int(11) NOT NULL,
  `name_user` varchar(200) NOT NULL,
  `pass_user` varchar(100) NOT NULL,
  `email` varchar(200) NOT NULL,
  `role` tinyint(4) NOT NULL DEFAULT 0,
  `img_user` int(11) DEFAULT NULL,
  `tel_user` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `users`
--

INSERT INTO `users` (`id_user`, `name_user`, `pass_user`, `email`, `role`, `img_user`, `tel_user`) VALUES
(1, 'Khanh Truong', '1', 'khanhphucphuc01@gmail.com', 0, NULL, '0'),
(4, 'admin', '123', '', 1, NULL, '0'),
(6, 'Khanh Truong', '1', 'khanhphucphuc01@gmail.com', 0, NULL, '122222222222'),
(7, 'niên', '01012003', 'nienvuv@gmail.com', 0, NULL, '012345567'),
(8, 'abc', '01012003', 'nienvuv@gmail.com', 0, NULL, '98938489341841'),
(9, 'niêndz', '12345678', 'nienvdph28519@fpt.edu.vn', 0, NULL, '09876655544'),
(10, 'abc', '01012003', 'nienvuv@gmail.com', 0, NULL, '3224343354466');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id_cate`);

--
-- Chỉ mục cho bảng `comment`
--
ALTER TABLE `comment`
  ADD PRIMARY KEY (`cmt_id`),
  ADD KEY `id_user` (`Id_user`),
  ADD KEY `id_pro` (`id_pro`);

--
-- Chỉ mục cho bảng `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id_news`);

--
-- Chỉ mục cho bảng `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id_pro`),
  ADD KEY `id_cate` (`id_cate`);

--
-- Chỉ mục cho bảng `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `category`
--
ALTER TABLE `category`
  MODIFY `id_cate` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT cho bảng `comment`
--
ALTER TABLE `comment`
  MODIFY `cmt_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `news`
--
ALTER TABLE `news`
  MODIFY `id_news` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT cho bảng `products`
--
ALTER TABLE `products`
  MODIFY `id_pro` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=154;

--
-- AUTO_INCREMENT cho bảng `users`
--
ALTER TABLE `users`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `comment`
--
ALTER TABLE `comment`
  ADD CONSTRAINT `id_pro` FOREIGN KEY (`id_pro`) REFERENCES `products` (`id_pro`),
  ADD CONSTRAINT `id_user` FOREIGN KEY (`Id_user`) REFERENCES `users` (`id_user`);

--
-- Các ràng buộc cho bảng `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `id_cate` FOREIGN KEY (`id_cate`) REFERENCES `category` (`id_cate`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
