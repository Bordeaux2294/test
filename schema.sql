DROP DATABASE IF EXISTS dolphin_crm;

CREATE DATABASE dolphin_crm;
USE dolphin_crm;

CREATE TABLE Users(
    id int NOT NULL AUTO_INCREMENT, 
    firstname varchar(150),
    lastname varchar(150),
    password varchar(255) NOT NULL, /*varbinary(255) could be used to hash password in mysql. Lecturer recommended we use php to hash password though.*/
    email varchar(255) NOT NULL,
    role varchar(50), 
    created_at DATETIME,
    
    PRIMARY KEY (id)
);

CREATE TABLE Contacts(
    id int NOT NULL AUTO_INCREMENT, 
    title varchar(150), 
    firstname varchar(150), 
    lastname varchar(150), 
    email varchar(150), 
    telephone varchar(15),
    company varchar(100), 
    type ENUM ('Sales Lead', 'Support'),
    assigned_to int, 
    created_by int, 
    created_at DATETIME, 
    updated_at DATETIME,

    PRIMARY KEY (id), 
    FOREIGN KEY (assigned_to) REFERENCES Users(id),
    FOREIGN KEY (created_by) REFERENCES Users(id)
);

CREATE TABLE Notes(
    id int NOT NUll AUTO_INCREMENT, 
    contact_id int, 
    comment text, 
    created_by int, 
    created_at DATETIME,

    PRIMARY KEY (id),
    FOREIGN KEY (contact_id) REFERENCES Contacts(id), 
    FOREIGN KEY (created_by) REFERENCES Users(id)
);

 
INSERT INTO Users (firstname, lastname, password, email, role, created_at)VALUES ('Aliek', 'Chambers', 'password123', 'admin@project2.com', 'Admin', NOW() );
INSERT INTO Contacts(title,firstname,lastname,email,telephone,company,type,created_at,updated_at)VALUES('Mr ','Ghabba ','Ghoul','test@gmail.com','876-842-3456','Test','Support',NOW(),NOW());
INSERT INTO Contacts(title,firstname,lastname,email,telephone,company,type,created_at,updated_at)VALUES('Mr ','KrisP ','Bacon','test@gmail.com','876-234-3456','Test','Sales Lead',NOW(),NOW());
INSERT INTO Contacts(title,firstname,lastname,email,telephone,company,type,created_at,updated_at)VALUES('Mr ','Humbert ','Humbert','test@gmail.com','876-842-3658','Test','Sales Lead',NOW(),NOW());
INSERT INTO Contacts(title,firstname,lastname,email,telephone,company,type,created_at,updated_at)VALUES('Ms ','Dolores ','Gale','test@gmail.com','876-905-9156','Test','Support',NOW(),NOW());
INSERT INTO Contacts(title,firstname,lastname,email,telephone,company,type,created_at,updated_at)VALUES('Mr ','Hell ','Shire','test@gmail.com','876-123-4311','Test','Support',NOW(),NOW());
INSERT INTO Contacts(title,firstname,lastname,email,telephone,company,type,created_at,updated_at)VALUES('Mr ','Isee ','UPee','test@gmail.com','876-842-3456','Test','Sales Lead',NOW(),NOW());
INSERT INTO Contacts(title,firstname,lastname,email,telephone,company,type,created_at,updated_at)VALUES('Ms ','Nick ','Gerr','test@gmail.com','876-341-6678','Test','Support',NOW(),NOW());
INSERT INTO Contacts(title,firstname,lastname,email,telephone,company,type,created_at,updated_at)VALUES('Mrs ','Rusty ','Plank','test@gmail.com','909-966-3456','Test','Support',NOW(),NOW());