-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 20, 2021 at 05:17 PM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.4.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `miumiu`
--

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `id_category` int(11) NOT NULL,
  `type_product` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id_category`, `type_product`) VALUES
(62070, 'HANDBAG'),
(62071, 'SHOE'),
(62072, 'WATCH'),
(62073, 'PERFUME');

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `code_custom` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `fname` varchar(255) NOT NULL,
  `lname` varchar(255) NOT NULL,
  `phone_num` int(20) NOT NULL,
  `email` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`code_custom`, `username`, `password`, `fname`, `lname`, `phone_num`, `email`) VALUES
(7, 'one', 'f97c5d29941bfb1b2fdab0874906ab82', 'one', 'n', 1, 'one@hotmail.com'),
(22, 'bomz', 'e10adc3949ba59abbe56e057f20f883e', 'jaturaphat', 'janseeda', 886274546, 'jaturaphat42@hotmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `id_product` varchar(11) NOT NULL,
  `id_category` int(11) NOT NULL,
  `p_name` text NOT NULL,
  `p_price` int(11) NOT NULL,
  `p_amount` int(11) NOT NULL,
  `p_detail` text NOT NULL,
  `p_pic` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id_product`, `id_category`, `p_name`, `p_price`, `p_amount`, `p_detail`, `p_pic`) VALUES
('B01', 62070, 'Mini drawstring bag', 4292, 10, '<p><strong>Lambskin, Imitation Pearls &amp; Gold-Tone MetalBlack</strong></p>\r\n', 'B1.jpg'),
('B02', 62070, 'Mini flap bag with top handle', 6688, 10, '<p><strong>Grained Calfskin &amp; Gold-Tone MetalWhite</strong></p>\r\n', 'B2.jpg'),
('B03', 62070, 'Chanel 19 flap bag', 5890, 10, '<p><strong>Calfskin, Crochet, Gold-Tone, Silver-Tone &amp; Ruthenium-Finish MetalBlack</strong></p>\r\n', 'B3.jpg'),
('B04', 62070, 'Dionysus small shoulder bag', 2446, 9, '<p><strong>The small Dionysus shoulder bag is presented in the signature GG pattern, trimmed with taupe suede details. The shape is defined by the defining tiger head closure&mdash;a unique detail referencing the Greek god Dionysus, who in myth is said to have crossed the river Tigris on a tiger sent to him by Zeus&mdash;further enhanced with sparkling crystals. The sliding chain strap can be worn multiple ways, changing between a shoulder, cross-body and a top handle bag.</strong></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n', 'B4.jpg'),
('B05', 62070, 'Jackie 1961 medium shoulder bag', 2645, 10, '<p><strong>The reintroduction of the Jackie bag for Fall Winter 2020 presents a new take on a historical Gucci icon. Brought back to the forefront, the recognizable shape is presented in black leather and enhanced with an additional, detachable shoulder strap. Attached to the bag with a buckle closure, the second strap adds a contemporary feel to the archival style, providing new ways to wear&mdash;from top handle, shoulder to cross body. Pieces with versatile ways to wear and style embrace each person who is part of the House&rsquo;s individual spirit. The Jackie 1961: available exclusively in Gucci stores and on Gucci.com</strong></p>\r\n\r\n<p>&nbsp;</p>\r\n', 'B5.jpg'),
('B06', 62070, 'Gucci Horsebit 1955 shoulder bag', 2446, 10, '<p><strong>Introduced for Cruise 2020, the Gucci Horsebit 1955 bag is recreated from an archival design. With the same lines and forms first introduced over six decades ago, the accessory unifies the original details with a modern spirit, highlighting the Horsebit. Part of Gucci&rsquo;s genetic code, the double ring and bar design has been established as one of the most distinctive elements among the House symbols borrowed from the equestrian world. Presented on a small flap shoulder bag, the hardware is paired with the House&rsquo;s monogram fabric and completed with a special mechanism that adjusts the length of the shoulder strap so it can be carried on one shoulder or cross body. Pieces with versatile ways to wear and style embrace each person who is part of the House&rsquo;s individual spirit.</strong></p>\r\n', 'B6.jpg'),
('B07', 62070, 'VANITY PM', 3993, 10, '<p><strong>Inspired by the Monogram Nice Vanity, the Vanity PM handbag in Monogram Empreinte leather is a fashionably small bag with a distinctive shape. It is made from grained leather, embossed with the Giant Monogram motif. Its tassel zip pulls, ladylike top handle, and removable strap make it versatile and strikingly stylish.</strong></p>\r\n\r\n<p>&nbsp;</p>\r\n', 'B7.jpg'),
('B08', 62070, 'TWIST MM', 5141, 10, '<p><strong>For Spring 2021, the Twist MM handbag is reinterpreted in a monochromatic colorway of black on black. Fashioned from black Epi leather, the bag has a LV turn-lock finished in matte tone-on-tone lacquering. Soft leather is braided into the metallic links of the chain strap for unexpectedly sophisticated look. An adjustable shoulder pad in leather assures comfortable carry.</strong></p>\r\n\r\n<p>&nbsp;</p>\r\n', 'B8.jpg'),
('B09', 62070, 'RENDEZ-VOUS', 4792, 10, '<p><strong>Fashioned from calfskin leather, the Rendez-Vous handbag combines edgy design details with elements inspired by the House&rsquo;s trunkmaking legacy. It features a chunky chain and a distinctive vintage-inspired lock. The Rendez-Vous can be worn cross-body and on the shoulder, thanks to the chain and strap, or carried by hand.</strong></p>\r\n\r\n<p>&nbsp;</p>\r\n', 'B9.jpg'),
('B10', 62070, 'Hermes Cinhetic bag', 8635, 9, '<p><strong>Bag in Epsom calfskin with leather hand strap and chain shoulder strap, two interior pockets and palladium plated hardware<br />\r\nMade in France Measures 7.2&quot; long, 6.7&quot; high and 3.3&quot; deep</strong></p>\r\n\r\n<p>&nbsp;</p>\r\n', 'B10.jpg'),
('B11', 62070, 'Mosaique au 24 - 17 bag', 7537, 10, '<p><strong>Bag in Epsom calfskin with one pocket, two compartments and permabrass plated hardware</strong></p>\r\n\r\n<p>&nbsp;</p>\r\n', 'B11.jpg'),
('B12', 62070, 'Trim Duo 24 bag', 5291, 10, '<p><strong>Bag in Evergrain calfskin with adjustable strap, two gussets, zipped interior pocket and gold plated hardware<br />\r\n<br />\r\nThe particular attention we give to everyday bags is behind the return of the Trim family. Created in 1958, inspired by a large pouch to hold close to oneself, this iconic bag is an obvious choice.</strong></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n', 'B12.jpg'),
('P01', 62073, 'n°5', 138, 10, '<p><strong>Eau de Parfum Spray</strong></p>\r\n\r\n<p>&nbsp;</p>\r\n', 'P1.jpg'),
('P02', 62073, 'coco mademoiselle', 140, 10, '<p><strong>Eau de Parfum Spray</strong></p>\r\n\r\n<p>&nbsp;</p>\r\n', 'P2.jpg'),
('P03', 62073, 'Chance', 145, 10, '<p><strong>Unpredictable, in perpetual movement, the unexpected floral fragrance sweeps you into its whirlwind of happiness and fantasy.</strong></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n', 'P3.jpg'),
('P04', 62073, 'Gucci Mémoire dune Odeur, 100ml Eau de Parfum', 120, 10, '<p><strong>&ldquo;Perfume is that thing that even with your eyes closed, brings you to a precise moment in space and time&rdquo; Alessandro Michele. Presenting a universal scent: Gucci M&eacute;moire d&rsquo;une Odeur, a fragrance that transcends gender and explores the power of memory. Blended by master perfumer Alberto Morillas, under Alessandro Michele&rsquo;s creative vision, the scent establishes a new olfactive family, Mineral Aromatic. Grown around Rome in terraced gardens since the 16th and 17th centuries, Roman Chamomile blends its green aromatic scent with Indian Coral Jasmine, a flower known for releasing a more powerful scent at night. Musks add depth to the fragrance, while Cedarwood and Sandalwood bring intensity to its structure.</strong></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n', 'P4.jpg'),
('P05', 62073, 'Gucci Bloom Ambrosia di Fiori, 100ml Eau de Parfum', 145, 10, '<p><strong>Presenting Ambrosia di Fiori, a new chapter of the Gucci Bloom story conceived by Alessandro Michele and created by master perfumer Alberto Morillas. Invoking a banquet of an ancient world, ambrosia was the sustenance of the Greek gods, thought to give immortality to those who drank it. The name of this precious nectar and the magic it evokes is woven into the scent&rsquo;s vibrant bouquet. The blend begins with the original Gucci Bloom eau de parfum&mdash;a trio of Jasmine Bud extract, Tuberose, and Rangoon Creeper&mdash;combined with new ingredients that intensify the floral fragrance: the rare Velvety Orris&mdash;derived from Iris resin&mdash;originally used by ancient Greeks and Romans as an essential oil, and Damascena Rose&mdash;harvested in the early morning to give the powerful rendition of the flower.</strong></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n', 'P5.jpg'),
('P06', 62073, 'Gucci Flora Gorgeous Gardenia 100ml eau de toilette', 110, 10, '<p><strong>The signature Flora collection is presented in colorful packaging highlighting flora and fauna from the botanical print, originally designed by artist Vittorio Accornero in the 1960s. The feminine scent is comprised of notes of Red Berries, White Gardenia, Patchouli and Brown Sugar.</strong></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n', 'P6.jpg'),
('P07', 62073, 'MÉTÉORE', 343, 10, '<p><strong>The sizzle of spicy mandarin awakens boundless energy<br />\r\nA magnetic name that evokes power and light. A fragrance that arouses fascination in its wake, like the dazzlingly flamboyant clouds that so captivate humankind. To capture such exhilarating energy, Master Perfumer Jacques Cavallier Belletrud chose the Sicilian mandarin. An ingredient of such exceptional quality, it infuses the perfume&rsquo;s heart with ethereal freshness, resonating as it comes into contact with a trio of peppers. As a signature, Java vetiver reveals its noblest facets &mdash; at once fresh, earthy and ambery &mdash; making the enchantment complete. In fusing elements of sky and Earth, M&eacute;t&eacute;ore reveals a contemporary elegance that knows no limit.</strong></p>\r\n\r\n<p>&nbsp;</p>\r\n', 'P7.jpg'),
('P08', 62073, 'SUR LA ROUTE', 343, 10, '<p><strong>A dash of c&eacute;drat evokes brand new adventures<br />\r\nA metaphor for each individual&rsquo;s personal path: the journey is as important as the destination. One projects onto it dreams for the future; the past flashes before one&rsquo;s eyes; energy is drawn from it with which to accomplish the wildest of dreams. Inspired by the wind rushing against the skin at full speed, Master Perfumer Jacques Cavallier Belletrud composed a fragrance as fresh as a splash of water on the cheeks. Here, he blends Calabrian citrus, starting with c&eacute;drat and bergamot, to which he added a grassy green accent and the enveloping scents of Peruvian balsam. A fragrance that resonates like the most vivid heartbeat.</strong></p>\r\n\r\n<p>&nbsp;</p>\r\n', 'P8.jpg'),
('P09', 62073, 'CALIFORNIA DREAM', 343, 10, '<p><strong>Mandarin as passionate as a sunset.<br />\r\nIt&rsquo;s the lengthening of a perfect day. Watching night fall. Drinking in colours. Standing before the horizon. In this iridescent fragrance, the Master Perfumer Jacques Cavallier Belletrud holds onto the moment, captures the resonance of a sunset. The ardent mandarin is consumed by joyfulness, tempered by the diaphanous ambrette and its subtle warmth. And the evening gets underway as graceful, vanilla-tinged benzoin envelops the skin in an affectionate balm, as light as a summer night.</strong></p>\r\n\r\n<p>&nbsp;</p>\r\n', 'P9.jpg'),
('P10', 62073, 'Galop Hermes Parfum refill', 258, 10, '<p><strong>Galop d&rsquo;Hermes is a contemporary manifesto that expresses absolute freedom in feminine expression and in a perfume. The leather livens up the rose and the rose carries away the leather in a fiery dance. The stirrup bottle is an exceptional object, fastened with an orange leather tie.</strong></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n', 'P10.jpg'),
('P11', 62073, 'Cedre Sambac Eau de toilette', 448, 10, '<p><strong>The strength of cedar surrounded by a supple climbing jasmine. Raw, voluptuous.<br />\r\nOlfactory emotion: Spicy, Dry<br />\r\nMain raw materials: Cedar, Sambac jasmine</strong></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n', 'P11.jpg'),
('P12', 62073, 'Galop Hermes Parfum', 227, 10, '<p><strong>Galop d&rsquo;Hermes is a contemporary manifesto that expresses absolute freedom in feminine expression and in a perfume. The leather livens up the rose and the rose carries away the leather in a fiery dance. The stirrup bottle is an exceptional object, fastened with an orange leather tie.</strong></p>\r\n\r\n<p>&nbsp;</p>\r\n', 'P12.jpg'),
('S01', 62071, 'Sandals', 973, 10, '<p><strong>sandalsLambskinWhite</strong></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n', 'S01.jpg'),
('S02', 62071, 'Open shoes', 1023, 10, '<p><strong>Lambskin &amp; Patent CalfskinIvory &amp; Black</strong></p>\r\n\r\n<p>&nbsp;</p>\r\n', 'S2.jpg'),
('S03', 62071, 'Loafers', 999, 10, '<p><strong>LambskinBlack</strong></p>\r\n\r\n<p>&nbsp;</p>\r\n', 'S3.jpg'),
('S04', 62071, 'Leather mid-heel loafer', 1149, 10, '<p><strong>The Double G antique gold-toned hardware is set on a blue and red Web of these leather mid-heel loafers. The stacked heel has a row of GG pearls and studs and the back is designed to be worn with the heel folded down or up.</strong></p>\r\n\r\n<p>&nbsp;</p>\r\n', 'S4.jpg'),
('S05', 62071, 'Women ankle boot', 1188, 10, '<p><strong>Two of the House&#39;s most recognizable symbols define this pair of ankle boots.&nbsp;</strong></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n', 'S5.jpg'),
('S06', 62071, '  Princetown leather slipper', 789, 10, '<p><strong>An essential Gucci style since its debut in the Fall Winter 2015 fashion show, the Princetown slipper is presented in black leather. The mule design features the distinctive gold-toned Horsebit, an archival symbol inspired by the equestrian world.</strong></p>\r\n\r\n<p>&nbsp;</p>\r\n', 'S6.jpg'),
('S07', 62071, 'SIENNA FLAT SANDAL', 1368, 10, '<p><strong>The Sienna flat sandal features a front strap in raffia embroidered with the LV Initials and Monogram Flowers. It is complemented by a crossover strap in tan calf leather, which fastens around the ankle with an engraved, gold-tone buckle. This vacation-ready style belongs to the Summer 2021 collection, which includes accessories and leather goods,</strong></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n', 'S7.jpg'),
('S08', 62071, 'FARO FLAT SANDAL', 1478, 10, '<p><strong>Crafted from supple calf leather, the Faro flat sandal is a sleek design embellished with a distinctive signature: the LV Initials embossed in gold within a gold-tone metal ring. Other refined details include white stitching around the leather outsole and a Louis Vuitton-engraved buckle on the ankle strap.</strong></p>\r\n\r\n<p>&nbsp;</p>\r\n', 'S8.jpg'),
('S09', 62071, 'MADELEINE SLINGBACK PUMP', 1348, 10, '<p><strong>The Madeleine slingback pump in glossy patent calf leather is a reinterpretation of one of Louis Vuitton&#39;s most emblematic lines, distinguished by its square toe and low block heel. The feminine slingback, whose strap is adjusted with a tiny buckle, is complemented by a square LV Initials accessory in silver- and gold-tone metal.</strong></p>\r\n\r\n<p>&nbsp;</p>\r\n', 'S9.jpg'),
('S10', 62071, 'Oz mule', 1149, 10, '<p><strong>Mule in suede goatskin and satin with rose gold plated Kelly buckle</strong><br />\r\n<br />\r\n&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n', 'S10.jpg'),
('S11', 62071, 'Oran sandal', 1174, 10, '<p><strong>Sandal in suede goatskin with crystal detail and iconic &quot;H&quot; cut-out.<br />\r\nAn iconic Hermes style, this silhouette is an essential piece in every wardrobe.</strong><br />\r\n<br />\r\n&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n', 'S11.jpg'),
('S12', 62071, 'Claire sandal', 949, 10, '<p><strong>Sandal in calfskin with iconic aged gold plated &quot;Roulis&quot; buckle.<br />\r\nA timeless and elegant design.</strong><br />\r\n<br />\r\n&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n', 'S12.jpg'),
('W01', 62072, 'J12 X-RAY CALIBER 3.1', 625199, 10, '<p><strong>A creative and technical feat, the J12 X-RAY watch, featuring the Caliber 3.1 movement, is made entirely of sapphire crystal and set with baguette-cut diamonds. A fully transparent creation, available in a limited edition of 12 numbered pieces.</strong></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n', 'SW1.jpg'),
('W02', 62072, 'Mademoiselle j12 acte ii watch, 33 mm', 25417, 10, '<p><strong>Black highly resistant ceramic, 18K white gold and diamonds</strong></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n', 'W2.jpg'),
('W03', 62072, 'j12 watch, 33 mm', 11785, 10, '<p><strong>White highly resistant ceramic, steel and diamonds</strong></p>\r\n\r\n<p>&nbsp;</p>\r\n', 'W3.jpg'),
('W04', 62072, 'G-Timeless watch, 40mm', 1898, 10, '<p><strong>Part of the G-Timeless collection, this automatic watch is designed with a white guilloch&eacute; dial, enriched with silver-toned indexes that take the form of House motifs, including the bee, the star and the feline head. The case continues into a steel bracelet that wraps around the wrist</strong></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n', 'W4.jpg'),
('W05', 62072, 'G-Timeless watch, 40mm', 1848, 10, '<p><strong>Part of the G-Timeless collection, this automatic watch is designed with a leather strap and guilloch&eacute; dial. House motifs are displayed on the dial, including the bee, the star and the feline head. The transparent case back allows a view of the watch movement.</strong></p>\r\n\r\n<p>&nbsp;</p>\r\n', 'W5.jpg'),
('W06', 62072, 'G-Timeless watch, 29mm', 1149, 10, '<p><strong>Part of the G-Timeless collection, this classic watch in steel is crafted with a traditional sensibility, juxtaposed with a sunbrushed dial. The bee motif is specially designed to work as the seconds hand.</strong></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n', 'W6.jpg'),
('W07', 62072, 'TAMBOUR SLIM MONOGRAM 28MM', 4175, 10, '<p><strong>The Tambour Slim collection features a thin watch signed with the iconic Louis Vuitton Monogram pattern highlighted by delicate diamond indexes. Symbol of elegance, this black variation is a must have in every women wardrobe and will prove its versatility as any black dress, timeless and distinctive.</strong></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n', 'W7.jpg'),
('W08', 62072, 'TAMBOUR MONOGRAM 28MM', 7041, 10, '<p><strong>As the Louis Vuitton&rsquo;s emblematic timepiece, the Tambour watch represents a clever combination of subtle elegance and strong personality. Entirely developed in our manufacture La Fabrique du Temps in Geneva, its dial faithfully reproduces the iconic Monogram canvas and showcase the House&rsquo;s signature look. This versatile and timeless watch mixes brown and gold in a perfect combination to enlight a feminine look.</strong></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n', 'W8.jpg'),
('W09', 62072, 'TAMBOUR SLIM COLOR BLOSSOM 28MM', 26855, 10, '<p><strong>Precious and feminine, this watch showcases a single Monogram Flower, delicately carved in three-dimensional volume from white mother-of-pearl. The flower is embellished with guilloch&eacute; engraving, and surrounded by a sophisticated curved dial in 18K pink gold. The glittering metal and diamonds lend a radiant touch to the piece, which captures all the ephemeral beauty of a flower.</strong></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n', 'W9.jpg'),
('W10', 62072, 'Nantucket watch, 17 x 23 mm', 18814, 10, '<p><strong>Diamond-set rose gold watch with jewelry setting, diamond-set white natural mother-of-pearl dial, 17 x 23&nbsp;mm, rose gold bracelet</strong><br />\r\n<br />\r\n&nbsp;</p>\r\n', 'W10.jpg'),
('W11', 62072, 'Nantucket Jete de diamants watch, 17 x 23 mm', 6912, 10, '<p><strong>Diamond-set steel watch, sand-blasted and rhodium-plated dial set with diamonds, 17 x 23&nbsp;mm, long strap in matte black alligator</strong></p>\r\n\r\n<p>&nbsp;</p>\r\n', 'W11.jpg'),
('W12', 62072, 'Heure H watch, 17.2 x 17.2 mm', 2994, 10, '<p><strong>Yellow-gold plated steel watch, white dial, 17.2 x 17.2&nbsp;mm, long interchangeable strap in black grained calfskin</strong></p>\r\n\r\n<p>&nbsp;</p>\r\n', 'W12.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `sell`
--

CREATE TABLE `sell` (
  `sell_id` int(11) NOT NULL,
  `id_custom` int(11) NOT NULL,
  `e_id` int(11) NOT NULL,
  `datesave` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `sell_de`
--

CREATE TABLE `sell_de` (
  `id` int(11) NOT NULL,
  `sell_id` int(11) NOT NULL,
  `p_id` varchar(255) NOT NULL,
  `p_amount` int(11) NOT NULL,
  `p_sell` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `staff`
--

CREATE TABLE `staff` (
  `code_staff` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `fname` varchar(255) NOT NULL,
  `lname` varchar(255) NOT NULL,
  `phone_num` varchar(99) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `staff`
--

INSERT INTO `staff` (`code_staff`, `username`, `password`, `fname`, `lname`, `phone_num`) VALUES
(1, 'admin', '21232f297a57a5a743894a0e4a801fc3', 'admin', 'admin', '0886274546');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id_category`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`code_custom`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id_product`);

--
-- Indexes for table `sell`
--
ALTER TABLE `sell`
  ADD PRIMARY KEY (`sell_id`);

--
-- Indexes for table `sell_de`
--
ALTER TABLE `sell_de`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `staff`
--
ALTER TABLE `staff`
  ADD PRIMARY KEY (`code_staff`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `id_category` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=62074;

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `code_custom` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `sell_de`
--
ALTER TABLE `sell_de`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `staff`
--
ALTER TABLE `staff`
  MODIFY `code_staff` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
