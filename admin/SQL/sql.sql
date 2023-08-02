CREATE TABLE `users` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `Email` varchar(100) DEFAULT NULL,
  `Phone` varchar(100) NOT NULL,
  `Password` varchar(100) NOT NULL,
  `Name` varchar(100) NOT NULL,
  `Address` varchar(255) NOT NULL,
  `isSignIn` tinyint(1) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

CREATE TABLE `sizes` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `Name` varchar(100) NOT NULL,
  `Value` varchar(100) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

CREATE TABLE `type_cartegory` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `Name` varchar(100) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB AUTO_INCREMENT=68 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

CREATE TABLE `cartegories` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `Name` varchar(100) NOT NULL,
  `ID_type` int(11) NOT NULL,
  PRIMARY KEY (`ID`),
  KEY `cartegories_FK` (`ID_type`),
  CONSTRAINT `cartegories_FK` FOREIGN KEY (`ID_type`) REFERENCES `type_cartegory` (`ID`)
) ENGINE=InnoDB AUTO_INCREMENT=57 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

CREATE TABLE `products` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `Name` varchar(100) NOT NULL,
  `ID_cartegory` int(11) NOT NULL,
  `Price` double NOT NULL,
  `PriceAfterSale` double NOT NULL,
  `Amount` bigint(20) NOT NULL,
  `details` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`ID`),
  KEY `products_FK` (`ID_cartegory`),
  CONSTRAINT `products_FK` FOREIGN KEY (`ID_cartegory`) REFERENCES `cartegories` (`ID`)
) ENGINE=InnoDB AUTO_INCREMENT=44 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

CREATE TABLE `sizes_products` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `ID_product` int(11) NOT NULL,
  `ID_size` int(11) NOT NULL,
  PRIMARY KEY (`ID`),
  KEY `sizes_products_FK` (`ID_product`),
  KEY `sizes_products_FK_1` (`ID_size`),
  CONSTRAINT `sizes_products_FK` FOREIGN KEY (`ID_product`) REFERENCES `products` (`ID`),
  CONSTRAINT `sizes_products_FK_1` FOREIGN KEY (`ID_size`) REFERENCES `sizes` (`ID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

CREATE TABLE `colors` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `Name` varchar(100) NOT NULL,
  `Img` varchar(255) DEFAULT NULL,
  `Id_product` int(11) NOT NULL,
  `Img2` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`ID`),
  KEY `colors_FK` (`Id_product`),
  CONSTRAINT `colors_FK` FOREIGN KEY (`Id_product`) REFERENCES `products` (`ID`)
) ENGINE=InnoDB AUTO_INCREMENT=63 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

CREATE TABLE `carts` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `ID_user` int(11) NOT NULL,
  `ID_product` int(11) NOT NULL,
  `Amount` int(11) NOT NULL,
  PRIMARY KEY (`ID`),
  KEY `carts_FK` (`ID_product`),
  KEY `carts_FK_1` (`ID_user`),
  CONSTRAINT `carts_FK` FOREIGN KEY (`ID_product`) REFERENCES `products` (`ID`),
  CONSTRAINT `carts_FK_1` FOREIGN KEY (`ID_user`) REFERENCES `users` (`ID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

CREATE TABLE `order` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `ID_cart` int(11) NOT NULL,
  `Amount_product` bigint(20) NOT NULL,
  `Comment` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`ID`),
  KEY `order_FK` (`ID_cart`),
  CONSTRAINT `order_FK` FOREIGN KEY (`ID_cart`) REFERENCES `carts` (`ID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

