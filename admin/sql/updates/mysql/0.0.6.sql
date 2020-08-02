DROP TABLE IF EXISTS `#__victorianflora`;

CREATE TABLE `#__victorianflora` (
	`id`         INT(11)     NOT NULL AUTO_INCREMENT,
    `BotanicalName` varchar(255) NOT NULL,
    `PlantNo`    double(15,5) NOT NULL DEFAULT '0.00000',
    `CommonName` varchar(255) DEFAULT NULL,	
	`published` tinyint(4) NOT NULL DEFAULT '1',
	PRIMARY KEY (`id`)
)
	ENGINE =InnoDB
	AUTO_INCREMENT =0
	DEFAULT CHARSET =utf8mb4
	DEFAULT COLLATE=utf8mb4_unicode_ci;

INSERT INTO `#__victorianflora` (`BotanicalName`, `PlantNo`, `CommonName`) VALUES
('Amphibromus macrorhinus', 23.00000, 'Long-nosed Swamp Wallaby-grass'),
('Amphibromus neesii', 24.00000, 'Southern Swamp Wallaby-grass'),
('Amphibromus nervosus', 25.00000, 'Veined Swamp Wallaby-grass'),
('Amphibromus pithogastrus', 26.00000, 'Swollen Swamp Wallaby-grass'),
('Amyema linophyllum ssp. orientale', 27.00000, 'Buloke Mistletoe'),
('Angianthus preissianus', 28.00000, 'Salt Angianthus'),
('Aphelia pumilio', 29.00000, 'Dwarf Aphelia'),
('Apium annuum', 30.00000, 'Annual Celery'),
('Apium prostratum', 31.00000, 'Sea Celery'),
('Arthropodium minus', 32.00000, 'Small Vanilla-lily'),
('Asperula conferta', 33.00000, 'Common Woodruff'),
('Asperula scoparia', 34.00000, 'Prickly Woodruff'),
('Asplenium flabellifolium', 35.00000, 'Necklace Fern'),
('Atriplex cinerea', 36.00000, 'Coast Saltbush'),
('Atriplex paludosa ssp. paludosa', 37.00000, 'Marsh Saltbush'),
('Atriplex semibaccata', 38.00000, 'Berry Saltbush');