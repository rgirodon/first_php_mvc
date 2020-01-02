CREATE TABLE user (
  id int(11) NOT NULL AUTO_INCREMENT,
  firstname varchar(45) NOT NULL,
  lastname varchar(45) NOT NULL,
  password varchar(45) NOT NULL,
  PRIMARY KEY (id)
);

INSERT INTO user
(
firstname,
lastname,
password)
VALUES
(
'Bobby',
'Firmino',
'LFC');

INSERT INTO user
(
firstname,
lastname,
password)
VALUES
(
'Sadio',
'Mané',
'LFC');

INSERT INTO user
(
firstname,
lastname,
password)
VALUES
(
'Mohamed',
'Salah',
'LFC');