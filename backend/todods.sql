DROP DATABASE IF EXISTS todods;
CREATE DATABASE IF NOT EXISTS todods;

USE todods; 
DROP TABLE IF EXISTS class;
CREATE TABLE IF NOT EXISTS class (
  classCode INT UNSIGNED NOT NULL PRIMARY KEY AUTO_INCREMENT,
  className VARCHAR(20) NOT NULL UNIQUE,
  schoolName VARCHAR(80) NOT NULL
);

DROP TABLE IF EXISTS events;
CREATE TABLE IF NOT EXISTS events (
  eventCode INT UNSIGNED NOT NULL PRIMARY KEY AUTO_INCREMENT,
  date DATETIME NOT NULL,
  subject VARCHAR(100) NOT NULL, 
  description TEXT NOT NULL,
  status ENUM('0', '1'),
  classCode INT UNSIGNED NOT NULL,
  team set('A', 'B', 'AB'),
  CONSTRAINT FK_classCode FOREIGN KEY (classCode) REFERENCES class(classCode)
);

DROP TABLE IF EXISTS users;
CREATE TABLE IF NOT EXISTS users (
  userCode INT UNSIGNED NOT NULL PRIMARY KEY AUTO_INCREMENT,
  firstname VARCHAR(25) NOT NULL,
  lastname VARCHAR(25) NOT NULL,
  email VARCHAR(100) NOT NULL,
  password VARCHAR(32) NOT NULL, 
  gender ENUM('M', 'F', 'O') NOT NULL,  
  classCode INT UNSIGNED NOT NULL,
  CONSTRAINT FOREIGN KEY (classCode) REFERENCES class(classCode)
);

DROP TABLE IF EXISTS photos;
CREATE TABLE IF NOT EXISTS photos (
  photoCode INT UNSIGNED PRIMARY KEY AUTO_INCREMENT,
  file VARCHAR(40) NOT NULL,
  date DATETIME NOT NULL,
  eventCode INT UNSIGNED NOT NULL,
  CONSTRAINT FOREIGN KEY (eventCode) REFERENCES events(eventCode)
);

INSERT INTO class(schoolName, className)
VALUES (
  'Etec Antônio Devisate',
  '1° ETIM DS'
);

INSERT INTO events(date, subject, description, status, classCode)
 VALUES (
  '2020-04-03',
  'Matemática',
  'Tarefa sobre matrizes',
  '0',
  1
);

INSERT INTO users (firstname, lastname, email, password, gender, classCode)
VALUES (
  'Joaby',
  'Oliveira',
  'joaby@gmail.com',
  'tototo',
  'M',
  1
);