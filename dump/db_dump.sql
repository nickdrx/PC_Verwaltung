
CREATE DATABASE IF NOT EXISTS pcVerwaltung;
USE pcVerwaltung;

CREATE TABLE tblPCs(
	id int(11) AUTO_INCREMENT PRIMARY KEY,
	hdd double,
	takt double,
	ram double
	)engine=innodb;
	
INSERT INTO tblPCs(hdd, takt, ram)
VALUES
 (500, 2.4, 4),
 (600, 1.4, 6),
 (700, 1.5, 8),
 (800, 3.4, 2),
 (900, 3.1, 4),
 (1000, 1.6, 6),
 (200, 2.4, 8),
 (300, 1.4, 4),
 (400, 1.8, 2),
 (500, 4.0, 4),
 (600, 3.2, 6),
 (700, 1.4, 8),
 (800, 3.6, 2),
 (900, 3.4, 4),
 (1000, 1.4, 6),
 (1500, 2.8, 8);
 