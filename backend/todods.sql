CREATE DATABASE IF NOT EXISTS todods;

USE todods; 

CREATE TABLE IF NOT EXISTS class (
  classCode INT UNSIGNED PRIMARY KEY AUTO_INCREMENT,
  class ENUM("1º ETIM DS", "2º ETIM DS", "3º INFO", "1º ADM", "2º ADM", "3º ADM"),
  team ENUM('A','B') NOT NULL
);

CREATE TABLE IF NOT EXISTS events (
    eventCode INT UNSIGNED PRIMARY KEY AUTO_INCREMENT,
    date DATETIME NOT NULL,
    subject VARCHAR(100) NOT NULL, 
    description TEXT NOT NULL,
    status ENUM('0', '1'),
    photo TEXT NOT NULL,
    FK_classCode INT NOT NULL,
    FOREIGN KEY (FK_classCode) REFERENCES class(classCode)
);

CREATE TABLE IF NOT EXISTS users (
  userCode INT UNSIGNED PRIMARY KEY AUTO_INCREMENT,
  firstname VARCHAR(25) NOT NULL,
  lastname VARCHAR(25) NOT NULL,
  email VARCHAR(100) NOT NULL,
  password VARCHAR(32) NOT NULL, 
  gender ENUM('M', 'F', 'O') NOT NULL,  
  FK_classCode INT NOT NULL,
  FOREIGN KEY (FK_classCode) REFERENCES class(classCode)
);


