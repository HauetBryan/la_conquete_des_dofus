#------------------------------------------------------------
#        Script MySQL.
#------------------------------------------------------------


#------------------------------------------------------------
# Table: jgh99_roles
#------------------------------------------------------------

CREATE TABLE jgh99_roles(
        id          Int  Auto_increment  NOT NULL ,
        name        Varchar (20) NOT NULL ,
        description Text NOT NULL
	,CONSTRAINT roles_PK PRIMARY KEY (id)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: jgh99_ranks
#------------------------------------------------------------

CREATE TABLE jgh99_ranks(
        id          Int  Auto_increment  NOT NULL ,
        name        Varchar (30) NOT NULL ,
        description Text NOT NULL
	,CONSTRAINT ranks_PK PRIMARY KEY (id)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: jgh99_users
#------------------------------------------------------------

CREATE TABLE jgh99_users(
        id             Int  Auto_increment  NOT NULL ,
        username       Varchar (20) NOT NULL ,
        password       Varchar (255) NOT NULL ,
        email          Varchar (100) NOT NULL ,
        id_roles Int NOT NULL ,
        id_ranks Int NOT NULL
	,CONSTRAINT users_PK PRIMARY KEY (id)

	,CONSTRAINT users_roles_FK FOREIGN KEY (id_roles) REFERENCES jgh99_roles(id)
	,CONSTRAINT users_ranks0_FK FOREIGN KEY (id_ranks) REFERENCES jgh99_ranks(id)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: jgh99_dungeons
#------------------------------------------------------------

CREATE TABLE jgh99_dungeons(
        id          Int  Auto_increment  NOT NULL ,
        name        Varchar (20) NOT NULL ,
        description Text NOT NULL
	,CONSTRAINT dungeons_PK PRIMARY KEY (id)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: jgh99_quests
#------------------------------------------------------------

CREATE TABLE jgh99_quests(
        id          Int  Auto_increment  NOT NULL ,
        name        Varchar (20) NOT NULL ,
        description Text NOT NULL
	,CONSTRAINT quests_PK PRIMARY KEY (id)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: jgh99_monsters
#------------------------------------------------------------

CREATE TABLE jgh99_monsters(
        id    Int  Auto_increment  NOT NULL ,
        name  Varchar (20) NOT NULL ,
        hpmin Int NOT NULL ,
        hpmax Int NOT NULL ,
        pa    Int NOT NULL ,
        pm    Int NOT NULL
	,CONSTRAINT monsters_PK PRIMARY KEY (id)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: jgh99_games
#------------------------------------------------------------

CREATE TABLE jgh99_games(
        id   Int  Auto_increment  NOT NULL ,
        name Varchar (20) NOT NULL
	,CONSTRAINT games_PK PRIMARY KEY (id)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: jgh99_classes
#------------------------------------------------------------

CREATE TABLE jgh99_classes(
        id          Int  Auto_increment  NOT NULL ,
        name        Varchar (20) NOT NULL ,
        description Text NOT NULL ,
        image       Varchar (255) NOT NULL
	,CONSTRAINT classes_PK PRIMARY KEY (id)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: jgh99_advices
#------------------------------------------------------------

CREATE TABLE jgh99_advices(
        id             Int  Auto_increment  NOT NULL ,
        content        Text NOT NULL ,
        title          Varchar (100) NOT NULL ,
        date           Date NOT NULL ,
        id_users Int NOT NULL ,
        id_games Int NOT NULL
	,CONSTRAINT advices_PK PRIMARY KEY (id)

	,CONSTRAINT advices_users_FK FOREIGN KEY (id_users) REFERENCES jgh99_users(id)
	,CONSTRAINT advices_games0_FK FOREIGN KEY (id_games) REFERENCES jgh99_games(id)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: jgh99_comments
#------------------------------------------------------------

CREATE TABLE jgh99_comments(
        id               Int  Auto_increment  NOT NULL ,
        content          Text NOT NULL ,
        datetime         Datetime NOT NULL ,
        id_advices Int NOT NULL ,
        id_users   Int NOT NULL
	,CONSTRAINT comments_PK PRIMARY KEY (id)

	,CONSTRAINT comments_advices_FK FOREIGN KEY (id_advices) REFERENCES jgh99_advices(id)
	,CONSTRAINT comments_users0_FK FOREIGN KEY (id_users) REFERENCES jgh99_users(id)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: jgh99_elements
#------------------------------------------------------------

CREATE TABLE jgh99_elements(
        id   Int  Auto_increment  NOT NULL ,
        name Varchar (20) NOT NULL
	,CONSTRAINT elements_PK PRIMARY KEY (id)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: jgh99_resistances
#------------------------------------------------------------

CREATE TABLE jgh99_resistances(
        id                Int  Auto_increment  NOT NULL ,
        pourcentagemin    Int NOT NULL ,
        pourcentagemax    Int NOT NULL ,
        id_elements Int NOT NULL ,
        id_monsters Int NOT NULL
	,CONSTRAINT resistances_PK PRIMARY KEY (id)

	,CONSTRAINT resistances_elements_FK FOREIGN KEY (id_elements) REFERENCES jgh99_elements(id)
	,CONSTRAINT resistances_monsters0_FK FOREIGN KEY (id_monsters) REFERENCES jgh99_monsters(id)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: have
#------------------------------------------------------------

CREATE TABLE have(
        id                Int NOT NULL ,
        id_advices  Int NOT NULL ,
        id_monsters Int NOT NULL ,
        id_classes  Int NOT NULL
	,CONSTRAINT have_PK PRIMARY KEY (id,id_advices,id_monsters,id_classes)

	,CONSTRAINT have_dungeons_FK FOREIGN KEY (id) REFERENCES jgh99_dungeons(id)
	,CONSTRAINT have_advices0_FK FOREIGN KEY (id_advices) REFERENCES jgh99_advices(id)
	,CONSTRAINT have_monsters1_FK FOREIGN KEY (id_monsters) REFERENCES jgh99_monsters(id)
	,CONSTRAINT have_classes2_FK FOREIGN KEY (id_classes) REFERENCES jgh99_classes(id)
)ENGINE=InnoDB;

