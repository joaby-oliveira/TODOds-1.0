CREATE TABLE events (
    eventCode INT UNSIGNED PRIMARY KEY AUTO_INCREMENT,
    date DATETIME NOT NULL,
    subject VARCHAR(100) NOT NULL, 
    description TEXT NOT NULL,
    status ENUM('0', '1'),
    photo TEXT NOT NULL,
    FK_class INT NOT NULL
); 

CREATE TABLE class (
  classCode INT UNSIGNED PRIMARY KEY AUTO_INCREMENT,
  class ENUM("1º ETIM DS", "2º ETIM DS", "3º INFO", "1º ADM", "2º ADM", "3º ADM"),
  team ENUM('A','B') NOT NULL
);

CREATE TABLE users (
  userCode INT UNSIGNED PRIMARY KEY AUTO_INCREMENT,
  firstname VARCHAR(25) NOT NULL,
  lastname VARCHAR(25) NOT NULL,
  gender ENUM('M', 'F', 'O'),  
  FK_class INT NOT NULL,
  FOREIGN KEY (FK_class) REFERENCES class(classCode)
);
