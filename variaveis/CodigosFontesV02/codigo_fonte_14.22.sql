CREATE TABLE USUARIOS_POO 
(
  ID INTEGER UNSIGNED NOT NULL AUTO_INCREMENT,
  FULLNAME VARCHAR(64) NOT NULL,
  USERNAME VARCHAR(16) NOT NULL,
  EMAIL VARCHAR(128) NOT NULL,
  BIRTHDAY DATE NOT NULL,
  SEX VARCHAR(1) NOT NULL,
  PASSWORD_HASH VARCHAR(32) NOT NULL,
  PRIMARY KEY(ID),
  UNIQUE INDEX PRIMARY_USERNAME(USERNAME)
);
