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
  link VARCHAR(254) DEFAULT 'Nenhum link',
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

--TABELA DE AULAS
CREATE TABLE IF NOT EXISTS aulas (
    aulaId TINYINT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    aulaDia ENUM('Segunda-Feira', 'Terça-feira', 'Quarta-feira', 'Quinta-feira', 'Sexta-feira') NOT NULL,
    aulaProfessor VARCHAR (80),
    aulaNome VARCHAR(80) NULL,
    aulaHorario VARCHAR(80) NULL,
    aulaTurma SET('A', 'B') NOT NULL
);

INSERT INTO aulas (aulaDia, aulaNome, aulaProfessor, aulaHorario, aulaTurma)
VALUES
('Segunda-feira', 'Fisica', 'Leila','07:10', 'A,B'),
('Segunda-feira', 'Português', 'Marina', '08:00', 'A,B'),
('Segunda-feira', 'Química', 'Osmar', '08:50', 'A,B'),
('Segunda-feira', 'Intervalo', NULL, '09:40', 'A,B'),
('Segunda-feira', 'História', 'Ednéa', '10:00', 'A,B'),
('Segunda-feira', 'Inglês', 'Durval', '10:50', 'A,B'),
('Segunda-feira', 'Almoço', NULL, '11:40', 'A,B'),
('Segunda-feira', 'Ética', 'Silvana', '12:30', 'A,B'),
('Segunda-feira', 'Matemática', 'Helton', '13:20', 'A,B'),
('Segunda-feira', 'Matemática', 'Helton', '14:10', 'A,B'),

('Terça-feira', 'Português', 'Marina','07:10', 'A,B'),
('Terça-feira', 'Química', 'Osmar', '08:00', 'A,B'),
('Terça-feira', 'Biologia', 'Déborah', '08:50', 'A,B'),
('Terça-feira', 'Intervalo', NULL, '09:40', 'A,B'),
('Terça-feira', 'Português', 'Marina', '10:00', 'A,B'),
('Terça-feira', 'Ed. Física', 'Anisia', '10:50', 'A,B'),
('Terça-feira', 'Inglês', 'Durval', '11:40', 'A,B'),
('Terça-feira', 'Almoço', NULL, '12:30', 'A,B'),
('Terça-feira', 'Matemática', 'Helton', '13:20', 'A,B'),
('Terça-feira', 'Ed. Física', 'Anisia', '14:10', 'A,B'),

('Quarta-feira', 'Filosofia', 'Myrian', '07:10', 'A,B'),
('Quarta-feira', 'Biologia', 'Déborah', '08:00', 'A,B'),
('Quarta-feira', 'História', 'Ednéa', '08:50', 'A,B'),
('Quarta-feira', 'Intervalo', NULL, '09:40', 'A,B'),
('Quarta-feira', 'PW II - BD II', 'Alessandro - Arnaldo', '10:00', 'A,B'),
('Quarta-feira', 'PW II - BD II', 'Alessandro - Arnaldo', '10:50', 'A,B'),
('Quarta-feira', 'Física', 'Leila', '11:40', 'A,B'),
('Quarta-feira', 'Almoço', NULL, '12:30', 'A,B'),
('Quarta-feira', 'SE', 'Arnaldo', '13:20', 'A'),
('Quarta-feira', 'SE', 'Arnaldo', '14:10', 'A'),

('Quinta-feira', 'Geografia', 'Olga', '07:10', 'A,B'),
('Quinta-feira', 'BD II - PW II', 'Arnaldo - Alessandro', '08:00', 'A,B'),
('Quinta-feira', 'BD II - PW II', 'Arnaldo - Alessandro', '08:50', 'A,B'),
('Quinta-feira', 'Intervalo', NULL, '09:40', 'A,B'),
('Quinta-feira', 'Sociologia', 'Myrian', '10:00', 'A,B'),
('Quinta-feira', 'Geografia', 'Olga', '10:50', 'A,B'),
('Quinta-feira', 'Geografia', 'Olga', '11:40', 'A,B'),
('Quinta-feira', 'Almoço', NULL, '12:30', 'A,B'),
('Quinta-feira', 'DS', 'Marco', '13:20', 'B'),
('Quinta-feira', 'DS', 'Marco', '14:10', 'B'),

('Sexta-feira', '', '', '07:10', 'A,B'),
('Sexta-feira', 'DS - PAM I', 'Marco - Alessandro', '08:00', 'A,B'),
('Sexta-feira', 'DS - PAM I', 'Marco - Alessandro', '08:50', 'A,B'),
('Sexta-feira', 'Intervalo', NULL, '09:40', 'A,B'),
('Sexta-feira', 'DS - SE', 'Marco - Arnaldo', '10:00', 'A,B'),
('Sexta-feira', 'PAM I - SE', 'Alessandro - Arnaldo', '10:50', 'A,B'),
('Sexta-feira', 'PAM I - DS', 'Alessandro - Marco', '11:40', 'A,B'),
('Sexta-feira', 'Almoço', NULL, '12:30', 'A,B'),
('Sexta-feira', 'Matemática', 'Helton', '13:20', 'A,B');

CREATE TABLE IF NOT EXISTS todo (
  todoCode INT UNSIGNED AUTO_ICREMENT PRIMARY KEY,
  title VARCHAR(250) NOT NULL,
  userCode INT NOT NULLUNSIGNED 
);