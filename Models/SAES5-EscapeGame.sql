CREATE TABLE Game(
    Game_ID INT PRIMARY KEY NOT NULL AUTO_INCREMENT,
    Game_Name VARCHAR(50),
    Game_Description VARCHAR(50),
    Time_Start time,
    Time_End time,
    Game_Difficult VARCHAR(50)
);

CREATE TABLE User(
    User_ID INT PRIMARY KEY NOT NULL AUTO_INCREMENT,
    User_First_Name VARCHAR(50),
    User_Last_Name VARCHAR(50),
    User_Mail_Adress VARCHAR(50),
    User_Password VARCHAR(60),
    User_Created_Account DATE,
    User_Type ENUM('professionnel','particulier','joueur','admin'),
    User_Path_Avatar VARCHAR(120)
   );

CREATE TABLE Enigma(
    Enigma_ID INT PRIMARY KEY NOT NULL AUTO_INCREMENT,
    Enigma_Description VARCHAR(150),
    Enigma_Solution VARCHAR(50),
    Game_ID INT 
);

CREATE TABLE Topic(
    Topic_ID INT PRIMARY KEY NOT NULL AUTO_INCREMENT,
    Topic_Name VARCHAR(150),
    Topic_Description VARCHAR(50)
);

CREATE TABLE Message(
    Message_ID INT PRIMARY KEY NOT NULL AUTO_INCREMENT,
    Message_Content VARCHAR(150),
    Message_Date Datetime,
    Message_Type VARCHAR(50)
);

CREATE TABLE Experience(
    Experience_ID INT PRIMARY KEY NOT NULL AUTO_INCREMENT,
    Game_ID INT,
    User_ID INT
);

CREATE TABLE Envoie(
    Envoie_ID INT PRIMARY KEY NOT NULL AUTO_INCREMENT,
    User_ID INT,
    Message_ID INT
);

CREATE TABLE Relier(
    Relier_ID INT PRIMARY KEY NOT NULL AUTO_INCREMENT,
    Game_ID INT,
    Topic_ID INT
);

CREATE TABLE City (
    City_ID INT PRIMARY KEY NOT NULL AUTO_INCREMENT,
    City_Name VARCHAR(50),
    City_Code INT,
    City_Departement VARCHAR(50)
);

CREATE TABLE Room (
    Room_Escape_ID INT PRIMARY KEY NOT NULL AUTO_INCREMENT,
    Room_Escape_Company VARCHAR(50),
    Room_Escape_Name VARCHAR(50),
    Room_Escape_Capacity INT,
    Room_Escape_Level VARCHAR(50),
    Room_Escape_Duration INT,
    City_ID INT

);



---- Contraintes d'intégrités

ALTER TABLE Enigma ADD FOREIGN KEY(Game_ID) REFERENCES Game(Game_ID);
ALTER TABLE Room ADD FOREIGN KEY(City_ID) REFERENCES City(City_ID);
ALTER TABLE Experience ADD FOREIGN KEY(Game_ID) REFERENCES Game(Game_ID);
ALTER TABLE Experience ADD FOREIGN KEY(User_ID) REFERENCES User(User_ID);
ALTER TABLE Envoie ADD FOREIGN KEY(Message_ID) REFERENCES Message(Message_ID);
ALTER TABLE Envoie ADD FOREIGN KEY(User_ID) REFERENCES User(User_ID);
ALTER TABLE Relier ADD FOREIGN KEY(Game_ID) REFERENCES Game(Game_ID);
ALTER TABLE Relier ADD FOREIGN KEY(Topic_ID) REFERENCES Topic(Topic_ID);
