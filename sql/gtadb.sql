#------------------------------------------------------------
# Database: gtadb
#------------------------------------------------------------

CREATE DATABASE gtadb CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;
USE gtadb;

#------------------------------------------------------------
# Table: missions
#------------------------------------------------------------

CREATE TABLE missions(
        id_mission       Int  Auto_increment  NOT NULL ,
        title_mission    Varchar (50) NOT NULL ,
        mission_dealer   Varchar (25) NOT NULL ,
        enable_condition Varchar (100) NOT NULL ,
        chrono           Bool NOT NULL ,
        objectives       Longtext NOT NULL
	,CONSTRAINT missions_PK PRIMARY KEY (id_mission)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: playable_characters
#------------------------------------------------------------

CREATE TABLE playable_characters(
        char_id    Int  Auto_increment  NOT NULL ,
        char_fname Varchar (15) NOT NULL ,
        char_lname Varchar (15) NOT NULL ,
        id_mission Int
	,CONSTRAINT playable_characters_PK PRIMARY KEY (char_id)

	,CONSTRAINT playable_characters_missions_FK FOREIGN KEY (id_mission) REFERENCES missions(id_mission)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: vehicles_brand_logo
#------------------------------------------------------------

CREATE TABLE vehicles_brand_logo(
        brand_logo_id Int  Auto_increment  NOT NULL ,
        brand_logo_path    Varchar (100) NOT NULL
	,CONSTRAINT vehicles_brand_logo_PK PRIMARY KEY (brand_logo_id)
)ENGINE=InnoDB;

ALTER TABLE `vehicles_brand_logo` ADD COLUMN `brand_name` VARCHAR (25);

#------------------------------------------------------------
# Table: vehicles_brands
#------------------------------------------------------------

CREATE TABLE vehicles_brands(
        vehicles_brand_id Int  Auto_increment  NOT NULL ,
        brand             Varchar (50) NOT NULL ,
        brand_category    Varchar (25) NOT NULL ,
        brand_origin      Varchar (25) NOT NULL ,
        brand_logo_id     Int NOT NULL
	,CONSTRAINT vehicles_brands_PK PRIMARY KEY (vehicles_brand_id)

	,CONSTRAINT vehicles_brands_vehicles_brand_logo_FK FOREIGN KEY (brand_logo_id) REFERENCES vehicles_brand_logo(brand_logo_id)
	,CONSTRAINT vehicles_brands_vehicles_brand_logo_AK UNIQUE (brand_logo_id)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: vehicles
#------------------------------------------------------------

CREATE TABLE vehicles(
        vehicle_id        Int  Auto_increment  NOT NULL ,
        model             Varchar (50) NOT NULL ,
        terrain           Varchar (10) NOT NULL ,
        v_type              Varchar (25) NOT NULL ,
        spec_table        Longtext NOT NULL ,
        vehicles_brand_id Int NOT NULL
	,CONSTRAINT vehicles_PK PRIMARY KEY (vehicle_id)

	,CONSTRAINT vehicles_vehicles_brands_FK FOREIGN KEY (vehicles_brand_id) REFERENCES vehicles_brands(vehicles_brand_id)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: vehicles_pics
#------------------------------------------------------------

CREATE TABLE vehicles_pics(
        vehicle_pic_id Int  Auto_increment  NOT NULL ,
        vehicle_pic    Varchar (50) NOT NULL ,
        vehicle_id     Int NOT NULL
	,CONSTRAINT vehicles_pics_PK PRIMARY KEY (vehicle_pic_id)

	,CONSTRAINT vehicles_pics_vehicles_FK FOREIGN KEY (vehicle_id) REFERENCES vehicles(vehicle_id)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: users_roles
#------------------------------------------------------------

CREATE TABLE users_roles(
        user_role_id Int  Auto_increment  NOT NULL ,
        user_role    Varchar (60) NOT NULL
	,CONSTRAINT users_roles_PK PRIMARY KEY (user_role_id)
)ENGINE=InnoDB;

--(Adding 4 different fictional role, just to handle upload authorizations)--
INSERT INTO `users_roles` (`user_role`) VALUES ('god'),('dev'),('admin'),('user');
--(DROP TABLE `users_roles`)--
--(Was useless. Having difficulties to conceptualize the database.)--
--(Below is a re-creation of the users table with a role column.)--

#------------------------------------------------------------
# Table: users
#------------------------------------------------------------

CREATE TABLE users(
        user_id      Int  Auto_increment  NOT NULL ,
        username     Varchar (25) NOT NULL ,
        password     Varchar (60) NOT NULL ,
        user_role Varchar (25) NOT NULL
	,CONSTRAINT users_PK PRIMARY KEY (user_id)
)ENGINE=InnoDB;

#------------------------------------------------------------
# Table: icons
#------------------------------------------------------------

CREATE TABLE icons(
        icon_id      Int  Auto_increment  NOT NULL ,
        icon_name    Varchar (50) NOT NULL ,
        icon_path    Varchar (100)  NOT NULL
	,CONSTRAINT icons_PK PRIMARY KEY (`icon_id`)
)ENGINE=InnoDB;