CREATE TABLE TB_FUNCIONARIOS 
(
	ID 		INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
	NOME 		VARCHAR(64) NOT NULL,
	ESCOLARIDADE  VARCHAR(32) NOT NULL,
	CARGO 	VARCHAR(48) NOT NULL,
	SALARIO 	DOUBLE NOT NULL 
);
