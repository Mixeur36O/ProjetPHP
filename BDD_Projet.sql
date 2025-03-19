Drop table prescription;
Drop table medicament;
Drop table patient;
Drop table consultation;
Drop table medecin;
Drop table type;
Drop table mods;
Drop table typeJeu;
Drop table utilisateur;
Drop table jeu;

Create table utilisateur (
utiID int not null auto_increment,
utiNom varchar(20),
utiPrenom varchar(20),
utiEmail varchar(40),
utiPseudo varchar(20),
utiMotDePasse varchar(25),
utiRole varchar(20),
utiPhotoProfil varchar(1000),
primary key (utiID)
);

Create table type (
typeID int not null auto_increment,
typeNom varchar(20),
primary key (typeID)
);

Create table mods (
modID int not null auto_increment,
modNom varchar(40),
modTaille float,
modPhoto varchar(1000),
modDate date,
modFavoris bool,
typeID int,
utiID int,
primary key (modID),
FOREIGN KEY (typeID) REFERENCES type (typeID),
FOREIGN KEY (utiID) REFERENCES utilisateur (utiID));

Create table jeu (
jeuID int not null auto_increment,
jeuPlateform varchar(30),
jeuType varchar(20),
primary key (jeuID)
);

Create table typeJeu (
typeJeuID int not null auto_increment,
jeuID int,
modID int,
primary key (typeJeuID),
FOREIGN KEY (jeuID) REFERENCES jeu (jeuID),
FOREIGN KEY (modID) REFERENCES mods (modID)
);


insert into utilisateur (utiNom, utiPrenom, utiEmail, utiPseudo, utiMotDePasse, utiRole, utiPhotoProfil)
values ('Limet', 'Maxence', '200040@site.asty-moulin.be', 'Mixeur360', 'LM-200040' , 'admin', 'https://4kwallpapers.com/images/walls/thumbs_3t/16497.jpg');

insert into type (typeNom)
values 
('RPG'),
('texturePack'),
('monde'),
('shaders'),
('supplément');

insert into jeu (jeuPlateform, jeuType)
values
('Console', 'Minecraft Bedrock'),
('PC', 'Minecraft Java');

insert into mods (modNom, modTaille, modPhoto, modDate, modFavoris, typeID, utiID)
values ('RLCraft', 48.9 , 'https://bisecthosting.com/images/CF/RLCraft/BH_RL_Header.webp', '2023-06-28',false, 1, 1);

insert into typejeu (jeuID, modID)
values (2,1);

