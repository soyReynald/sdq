<?php

$sqlData = "CREATE DATABASE IF NOT EXISTS SDQ_practicas DEFAULT CHARACTER SET utf8 COLLATE utf8_spanish_ci";

$con->query($sqlData) or $errors[] = $con->error;

$con->select_db("SDQ_practicas");

$sqlTable = "START TRANSACTION;

CREATE TABLE IF NOT EXISTS `inventario` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `codigo` int(11) NOT NULL,
  `variacion` varchar(150) NOT NULL,
  `cantidad` int(11) NOT NULL,
  `precio` decimal(10,2) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `codigo` (`codigo`)
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

INSERT INTO `inventario` (`id`, `codigo`, `variacion`, `cantidad`, `precio`) VALUES
(1, 1, 'Cranberry, 101.4 Fl Oz', 40, '3.98'),
(2, 1, 'Cran-Grape, 101.4 Fl Oz', 0, '3.98'),
(3, 1, 'Cran-Grape, 64 Fl Oz', 20, '2.78'),
(4, 1, 'Cran-Apple, 64 Fl Oz', 25, '2.78'),
(5, 2, '100% Juice, Apple, 64 Fl Oz', 32, '11.75'),
(6, 2, '100% Juice, Apple, 8 Fl Oz, 6 pack', 15, '4.20'),
(7, 2, 'Sensibles 100% Juice Pouches, Apple Pineapple, 6 Fl Oz, 8 Pack', 32, '12.43'),
(8, 3, 'Petite Diced Tomatoes, 14.5 Oz (6 Packs)', 0, '5.88'),
(9, 3, 'Diced Tomatoes, No Salt Added, 28 Oz (4 Packs)', 0, '6.72'),
(10, 4, 'Classic Canned Meat, 12 oz Can', 23, '2.64'),
(11, 4, 'Oven Roasted Turkey 12 oz', 0, '3.45'),
(12, 4, 'Real Hormel Bacon Canned Meat, 12 oz Can', 8, '2.64'),
(13, 5, 'Instant Lunch Chicken Flavor, 12 Pack, 36 oz', 50, '1.94'),
(14, 5, 'Ramen Noodle Soup, Beef, 2.25 Oz, 6 Pack', 20, '1.60'),
(15, 6, 'Special K Cereal, Original, 18.5 Oz', 40, '7.76'),
(16, 6, 'Special K Cereal, Chocolate Almond, 12.7 Oz', 15, '6.36'),
(17, 6, 'Apple Jacks Breakfast Cereal, Apple & Cinnamon, 12.2 Oz', 36, '2.58'),
(18, 7, 'Nestum Breakfast Cereal, Wheat & Honey, 10.5 Oz', 24, '2.34'),
(19, 7, 'MILO Chocolate Flavored Nutritional Drink Mix 14.1 oz. Canister', 0, '4.36'),
(20, 7, 'NESQUIK Chocolate Flavor 14.1 oz. Canister', 12, '2.98');

CREATE TABLE IF NOT EXISTS `productos` (
  `codigo` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(150) NOT NULL,
  `descripcion` varchar(200) NOT NULL,
  `disponible` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`codigo`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

INSERT INTO `productos` (`codigo`, `nombre`, `descripcion`, `disponible`) VALUES
(1, 'Ocean Spray Juice', 'Ocean Spray Cranberry Juice Cocktail is a delicious and convenient way to get your daily dose of vitamin C along with the unique cranberry health benefits. Farmer-owned since 1930', 1),
(2, 'Motts Juice', 'Motts is an excellent source of vitamin C, with no added sugar and a delicious taste that kids will love.', 0),
(3, 'Hunt\'s', 'Each Hunts tomato is peeled with our ashSteam process, using simple steam from hot water. Our canned tomatoes are 100% natural with no artificial preservatives. ', 1),
(4, 'SPAM', 'This ready-to-eat item can be used for any meal at any time of day. There are many different ways to prepare Spam meat. Fry it up, and eat it in a sandwich, or broil it for a dinner rich in protein.', 0),
(5, 'Maruchan', 'Make and enjoy a quick, easy and tasty meal any time with this Maruchan Instant Lunch Flavor 12-Count Chicken Soup 36 Oz. Each individual serving can be prepared in just a few minutes.', 0),
(6, 'Kellogg\'s', 'A wholesome blend of unique flavors crafted to inspire your greatness and bring you goodness in every bite.', 0),
(7, 'Nestle', 'His wholesome product is made with grains that contain complex carbohydrates for energy. It is also a source of vitamins A and C.', 0);

ALTER TABLE `inventario`
  ADD CONSTRAINT `inventario_ibfk_1` FOREIGN KEY (`codigo`) REFERENCES `productos` (`codigo`) ON DELETE CASCADE ON UPDATE CASCADE;

COMMIT;";

$con->multi_query($sqlTable) or $errors[] = $con->error;

while(mysqli_more_results($con)){

	 mysqli_next_result($con);

}

?>