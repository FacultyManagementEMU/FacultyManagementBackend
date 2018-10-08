CREATE TABLE `research` (
  `userID` INT(11) NOT NULL,
  `Name` VARCHAR(255) NOT NULL,
  `Year` DATETIME NOT NULL COMMENT 'date of original paper',
  `File_Pointer` VARCHAR(255) NOT NULL,
  `ResearchID` INT NOT NULL,
  `Date` DATETIME NOT NULL COMMENT 'The date of last upload',
  PRIMARY KEY (`ResearchID`),
  CONSTRAINT 'ID' FOREIGN KEY ('userID') REFERENCES 'user' ('ID') 
	ON DELETE NO ACTION ON UPDATE NO ACTION
  );
  