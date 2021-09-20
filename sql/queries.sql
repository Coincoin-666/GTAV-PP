#------------------------------------------------------------
# Database: gtadb
#------------------------------------------------------------

--ONLY FUNCTIONNAL QUERIES--

--Vehicles queries
--Brands & Logos

SELECT `brand_name`,`brand_category`,`brand_origin`,`brand_logo` FROM `vehicles_brands` NATURAL JOIN `vehicles_brand_logo`;
SELECT `brand_name`,`brand_category`,`brand_origin`,`brand_logo` FROM `vehicles_brands` NATURAL JOIN `vehicles_brand_logo` ORDER BY `brand_name`;

SELECT `brand_logo` FROM `vehicles_brand_logo`;


--Adding the brand name to the logo table--
--Not sure that is useful since the same column exists in the brands table.
UPDATE `vehicles_brand_logo` SET `brand_name` = 'albany' WHERE `vehicles_brand_logo`.`brand_logo_id` = 1;
UPDATE `vehicles_brand_logo` SET `brand_name` = 'annis' WHERE `vehicles_brand_logo`.`brand_logo_id` = 2;
UPDATE `vehicles_brand_logo` SET `brand_name` = 'benefactor' WHERE `vehicles_brand_logo`.`brand_logo_id` = 3;
UPDATE `vehicles_brand_logo` SET `brand_name` = 'bollokan' WHERE `vehicles_brand_logo`.`brand_logo_id` = 4;
UPDATE `vehicles_brand_logo` SET `brand_name` = 'bravado' WHERE `vehicles_brand_logo`.`brand_logo_id` = 5;
UPDATE `vehicles_brand_logo` SET `brand_name` = 'brute' WHERE `vehicles_brand_logo`.`brand_logo_id` = 6;
UPDATE `vehicles_brand_logo` SET `brand_name` = 'buckingham' WHERE `vehicles_brand_logo`.`brand_logo_id` = 7;
UPDATE `vehicles_brand_logo` SET `brand_name` = 'burgerfahzeug' WHERE `vehicles_brand_logo`.`brand_logo_id` = 8;
UPDATE `vehicles_brand_logo` SET `brand_name` = 'canis' WHERE `vehicles_brand_logo`.`brand_logo_id` = 9;
UPDATE `vehicles_brand_logo` SET `brand_name` = 'chariot' WHERE `vehicles_brand_logo`.`brand_logo_id` = 10;
UPDATE `vehicles_brand_logo` SET `brand_name` = 'cheval' WHERE `vehicles_brand_logo`.`brand_logo_id` = 11;
UPDATE `vehicles_brand_logo` SET `brand_name` = 'classique' WHERE `vehicles_brand_logo`.`brand_logo_id` = 12;
UPDATE `vehicles_brand_logo` SET `brand_name` = 'coil' WHERE `vehicles_brand_logo`.`brand_logo_id` = 13;
UPDATE `vehicles_brand_logo` SET `brand_name` = 'declasse' WHERE `vehicles_brand_logo`.`brand_logo_id` = 14;
UPDATE `vehicles_brand_logo` SET `brand_name` = 'dewbauchee' WHERE `vehicles_brand_logo`.`brand_logo_id` = 15;
UPDATE `vehicles_brand_logo` SET `brand_name` = 'dinka' WHERE `vehicles_brand_logo`.`brand_logo_id` = 16;
UPDATE `vehicles_brand_logo` SET `brand_name` = 'dundready' WHERE `vehicles_brand_logo`.`brand_logo_id` = 17;
UPDATE `vehicles_brand_logo` SET `brand_name` = 'emperor' WHERE `vehicles_brand_logo`.`brand_logo_id` = 18;
UPDATE `vehicles_brand_logo` SET `brand_name` = 'enus' WHERE `vehicles_brand_logo`.`brand_logo_id` = 19;
UPDATE `vehicles_brand_logo` SET `brand_name` = 'fathom' WHERE `vehicles_brand_logo`.`brand_logo_id` = 20;
UPDATE `vehicles_brand_logo` SET `brand_name` = 'grotti' WHERE `vehicles_brand_logo`.`brand_logo_id` = 21;
UPDATE `vehicles_brand_logo` SET `brand_name` = 'hijak' WHERE `vehicles_brand_logo`.`brand_logo_id` = 22;
UPDATE `vehicles_brand_logo` SET `brand_name` = 'hvy' WHERE `vehicles_brand_logo`.`brand_logo_id` = 23;
UPDATE `vehicles_brand_logo` SET `brand_name` = 'imponte' WHERE `vehicles_brand_logo`.`brand_logo_id` = 24;
UPDATE `vehicles_brand_logo` SET `brand_name` = 'invetero' WHERE `vehicles_brand_logo`.`brand_logo_id` = 25;
UPDATE `vehicles_brand_logo` SET `brand_name` = 'jacksheepe' WHERE `vehicles_brand_logo`.`brand_logo_id` = 26;
UPDATE `vehicles_brand_logo` SET `brand_name` = 'jobuilt' WHERE `vehicles_brand_logo`.`brand_logo_id` = 27;
UPDATE `vehicles_brand_logo` SET `brand_name` = 'karin' WHERE `vehicles_brand_logo`.`brand_logo_id` = 28;
UPDATE `vehicles_brand_logo` SET `brand_name` = 'kraken' WHERE `vehicles_brand_logo`.`brand_logo_id` = 29;
UPDATE `vehicles_brand_logo` SET `brand_name` = 'lampadati' WHERE `vehicles_brand_logo`.`brand_logo_id` = 30;
UPDATE `vehicles_brand_logo` SET `brand_name` = 'maibatsu' WHERE `vehicles_brand_logo`.`brand_logo_id` = 31;
UPDATE `vehicles_brand_logo` SET `brand_name` = 'mammoth' WHERE `vehicles_brand_logo`.`brand_logo_id` = 32;
UPDATE `vehicles_brand_logo` SET `brand_name` = 'maxwell' WHERE `vehicles_brand_logo`.`brand_logo_id` = 33;
UPDATE `vehicles_brand_logo` SET `brand_name` = 'mtl' WHERE `vehicles_brand_logo`.`brand_logo_id` = 34;
UPDATE `vehicles_brand_logo` SET `brand_name` = 'nagasaki' WHERE `vehicles_brand_logo`.`brand_logo_id` = 35;
UPDATE `vehicles_brand_logo` SET `brand_name` = 'obey' WHERE `vehicles_brand_logo`.`brand_logo_id` = 36;
UPDATE `vehicles_brand_logo` SET `brand_name` = 'ocelot' WHERE `vehicles_brand_logo`.`brand_logo_id` = 37;
UPDATE `vehicles_brand_logo` SET `brand_name` = 'pfister' WHERE `vehicles_brand_logo`.`brand_logo_id` = 39;
UPDATE `vehicles_brand_logo` SET `brand_name` = 'principe' WHERE `vehicles_brand_logo`.`brand_logo_id` = 40;
UPDATE `vehicles_brand_logo` SET `brand_name` = 'progen' WHERE `vehicles_brand_logo`.`brand_logo_id` = 41;
UPDATE `vehicles_brand_logo` SET `brand_name` = 'prolaps' WHERE `vehicles_brand_logo`.`brand_logo_id` = 42;
UPDATE `vehicles_brand_logo` SET `brand_name` = 'rune' WHERE `vehicles_brand_logo`.`brand_logo_id` = 43;
UPDATE `vehicles_brand_logo` SET `brand_name` = 'schyster' WHERE `vehicles_brand_logo`.`brand_logo_id` = 44;
UPDATE `vehicles_brand_logo` SET `brand_name` = 'speedophile' WHERE `vehicles_brand_logo`.`brand_logo_id` = 45;
UPDATE `vehicles_brand_logo` SET `brand_name` = 'stanley' WHERE `vehicles_brand_logo`.`brand_logo_id` = 46;
UPDATE `vehicles_brand_logo` SET `brand_name` = 'truffade' WHERE `vehicles_brand_logo`.`brand_logo_id` = 47;
UPDATE `vehicles_brand_logo` SET `brand_name` = 'ubermacht' WHERE `vehicles_brand_logo`.`brand_logo_id` = 48;
UPDATE `vehicles_brand_logo` SET `brand_name` = 'vapid' WHERE `vehicles_brand_logo`.`brand_logo_id` = 49;
UPDATE `vehicles_brand_logo` SET `brand_name` = 'vulcar' WHERE `vehicles_brand_logo`.`brand_logo_id` = 50;
UPDATE `vehicles_brand_logo` SET `brand_name` = 'vysser' WHERE `vehicles_brand_logo`.`brand_logo_id` = 51;
UPDATE `vehicles_brand_logo` SET `brand_name` = 'weeny' WHERE `vehicles_brand_logo`.`brand_logo_id` = 52;
UPDATE `vehicles_brand_logo` SET `brand_name` = 'western' WHERE `vehicles_brand_logo`.`brand_logo_id` = 53;
UPDATE `vehicles_brand_logo` SET `brand_name` = 'williard' WHERE `vehicles_brand_logo`.`brand_logo_id` = 54;
UPDATE `vehicles_brand_logo` SET `brand_name` = 'pegassi' WHERE `vehicles_brand_logo`.`brand_logo_id` = 55;

--Adding a new vehicle to the database--
INSERT INTO `vehicles` (`model`,`terrain`,`v_type`,`spec_table`,`brand_logo_id`) VALUES (':model',':terrain',':v_type',':spec_table', ':brand_logo_id');