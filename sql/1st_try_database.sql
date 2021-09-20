
-- UNUSED --

#------------------------------------------------------------
#        Script MySQL.
#------------------------------------------------------------

CREATE DATABASE `gtaV_Project`;
USE `gtaV_Project`;

#------------------------------------------------------------
# Table: USERS
# -->This table will be mostly use to handle the roles: admin, etc.
#------------------------------------------------------------

CREATE TABLE USERS(
        id_user         Int  Auto_increment  NOT NULL ,
        pseudonym       Varchar (100) NOT NULL ,
        email           Varchar (50) NOT NULL ,
        user_role       Varchar (25) NOT NULL
	,CONSTRAINT USERS_PK PRIMARY KEY (id_user)
)ENGINE=InnoDB;

--(It's better with passwords ain't it..?)--

ALTER TABLE USERS
ADD `password` VARCHAR (60) NOT NULL,
ADD `confirm_password` VARCHAR (60) NOT NULL;

--(Actually we don't need the confirmation. Obvisouly.)--
        ALTER TABLE USERS
        DROP COLUMN `confirm_password`;

--(And finally, I don't need users.)--
        DROP TABLE `gtaV_Project`.`USERS`;
--(Ask me about how to waste time when you don't have any.)--

#------------------------------------------------------------
# Table: MISSIONS
#------------------------------------------------------------

CREATE TABLE MISSIONS(
        id_mission         Int  Auto_increment  NOT NULL ,
        title_mission      Varchar (100) NOT NULL ,
        objectives_mission Longtext NOT NULL ,
        chrono             Bool NOT NULL ,
        id_character       Int NOT NULL
	,CONSTRAINT MISSIONS_PK PRIMARY KEY (id_mission)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: CHARACTERS
#------------------------------------------------------------

CREATE TABLE CHARACTERS(
        id_character    Int  Auto_increment  NOT NULL ,
        fname_character Varchar (25) NOT NULL ,
        lname_character Varchar (25) NOT NULL
	,CONSTRAINT CHARACTERS_PK PRIMARY KEY (id_character)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: VEHICLES
#------------------------------------------------------------

CREATE TABLE VEHICLES(
        id_vehicles Int  Auto_increment  NOT NULL ,
        brand       Varchar (25) NOT NULL ,
        model       Varchar (25) NOT NULL ,
        category    Varchar (25) NOT NULL ,
        spec_table  Varchar (25) NOT NULL
	,CONSTRAINT VEHICLES_PK PRIMARY KEY (id_vehicles)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: SAN_ANDREAS
#------------------------------------------------------------

CREATE TABLE SAN_ANDREAS(
        id                 Int NOT NULL ,
        LSCustom           Bool NOT NULL ,
        buyable_properties Bool NOT NULL ,
        hairdresser        Bool NOT NULL ,
        clothes_store      Bool NOT NULL ,
        land_race          Bool NOT NULL ,
        parachute          Bool NOT NULL ,
        offRoad_race       Bool NOT NULL ,
        sea_race           Bool NOT NULL ,
        flight_school      Bool NOT NULL ,
        yoga               Bool NOT NULL ,
        tennis             Bool NOT NULL ,
        golf               Bool NOT NULL ,
        triathlon          Bool NOT NULL ,
        ammuNation         Bool NOT NULL ,
        police_presinct    Bool NOT NULL ,
        hospital           Bool NOT NULL
	,CONSTRAINT SAN_ANDREAS_PK PRIMARY KEY (id)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: SCRAP_LETTERS
#------------------------------------------------------------

CREATE TABLE SCRAP_LETTERS(
        id_scrap            Int  Auto_increment  NOT NULL ,
        map_placement_scrap Varchar (25) NOT NULL
	,CONSTRAINT SCRAP_LETTERS_PK PRIMARY KEY (id_scrap)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: SPACESHIP_PARTS
#------------------------------------------------------------

CREATE TABLE SPACESHIP_PARTS(
        id_spaceParts            Int  Auto_increment  NOT NULL ,
        map_placement_spaceParts Varchar (25) NOT NULL
	,CONSTRAINT SPACESHIP_PARTS_PK PRIMARY KEY (id_spaceParts)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: PEYOTL
#------------------------------------------------------------

CREATE TABLE PEYOTL(
        id_peyotl            Int  Auto_increment  NOT NULL ,
        map_placement_peyotl Varchar (25) NOT NULL
	,CONSTRAINT PEYOTL_PK PRIMARY KEY (id_peyotl)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: isPlaying
#------------------------------------------------------------

CREATE TABLE isPlaying(
        id_mission   Int NOT NULL ,
        id_character Int NOT NULL
	,CONSTRAINT isPlaying_PK PRIMARY KEY (id_mission,id_character)

	,CONSTRAINT isPlaying_MISSIONS_FK FOREIGN KEY (id_mission) REFERENCES MISSIONS(id_mission)
	,CONSTRAINT isPlaying_CHARACTERS0_FK FOREIGN KEY (id_character) REFERENCES CHARACTERS(id_character)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: isLocated
#------------------------------------------------------------

CREATE TABLE isLocated(
        id        Int NOT NULL ,
        id_peyotl Int NOT NULL
	,CONSTRAINT isLocated_PK PRIMARY KEY (id,id_peyotl)

	,CONSTRAINT isLocated_SAN_ANDREAS_FK FOREIGN KEY (id) REFERENCES SAN_ANDREAS(id)
	,CONSTRAINT isLocated_PEYOTL0_FK FOREIGN KEY (id_peyotl) REFERENCES PEYOTL(id_peyotl)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: Scrap_SA
#------------------------------------------------------------

CREATE TABLE Scrap_SA(
        id       Int NOT NULL ,
        id_scrap Int NOT NULL
	,CONSTRAINT Scrap_SA_PK PRIMARY KEY (id,id_scrap)

	,CONSTRAINT Scrap_SA_SAN_ANDREAS_FK FOREIGN KEY (id) REFERENCES SAN_ANDREAS(id)
	,CONSTRAINT Scrap_SA_SCRAP_LETTERS0_FK FOREIGN KEY (id_scrap) REFERENCES SCRAP_LETTERS(id_scrap)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: Space_SA
#------------------------------------------------------------

CREATE TABLE Space_SA(
        id            Int NOT NULL ,
        id_spaceParts Int NOT NULL
	,CONSTRAINT Space_SA_PK PRIMARY KEY (id,id_spaceParts)

	,CONSTRAINT Space_SA_SAN_ANDREAS_FK FOREIGN KEY (id) REFERENCES SAN_ANDREAS(id)
	,CONSTRAINT Space_SA_SPACESHIP_PARTS0_FK FOREIGN KEY (id_spaceParts) REFERENCES SPACESHIP_PARTS(id_spaceParts)
)ENGINE=InnoDB;

